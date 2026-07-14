<?php

namespace App\Http\Controllers;

use App\Models\QuickProjectCheck;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuickProjectCheckController extends Controller
{
    /**
     * Map of agent slot → international WhatsApp number (no + prefix).
     * Each slot corresponds to a unique form link: /quick-project-check?agent=N
     */
    private const WHATSAPP_NUMBERS = [
        1 => '94706920600',
        2 => '94706920601',
        3 => '94706920602',
        4 => '94706920605',
        5 => '94706920606',
        6 => '94706920608',
        7 => '94706920609',
    ];

    /** Resolve an agent slot (1-7) to its WhatsApp number, defaulting to slot 1. */
    private function resolveWhatsappNumber(int $agent): string
    {
        return self::WHATSAPP_NUMBERS[$agent] ?? self::WHATSAPP_NUMBERS[1];
    }

    public function create(): View
    {
        return view('quick-project-check.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'source' => 'required|string|max:100',
            'source_note' => 'nullable|string|max:255',
            'land_status' => 'required|string|max:100',
            'project_location' => 'required|string|max:150',
            'land_size' => 'nullable|string|max:100',
            'service_package' => 'required|string|max:180',
            'start_period' => 'required|string|max:100',
            'client_name' => 'required|string|max:150',
            'whatsapp_number' => 'required|string|max:30',
            'consent_accepted' => 'accepted',
            'utm_source' => 'nullable|string|max:255',
            'utm_medium' => 'nullable|string|max:255',
            'utm_campaign' => 'nullable|string|max:255',
            'utm_content' => 'nullable|string|max:255',
            'utm_term' => 'nullable|string|max:255',
            'landing_page_url' => 'nullable|string|max:1000',
            'referrer_url' => 'nullable|string|max:1000',
            'device_type' => 'nullable|string|max:60',
            'browser' => 'nullable|string|max:255',
            'agent_slot' => 'nullable|integer|between:1,7',
        ]);

        $agentSlot = (int) ($request->input('agent_slot') ?: 1);
        $agentNumber = $this->resolveWhatsappNumber($agentSlot);

        $score = $this->calculateLeadScore($validated);

        $lead = QuickProjectCheck::create([
            ...$validated,
            'lead_id' => $this->generateLeadId(),
            'consent_accepted' => true,
            'whatsapp_redirect_clicked' => true,
            'lead_score' => $score,
            'lead_type' => $this->classifyLead($score),
            'lead_status' => 'New Website Lead',
            'lead_source' => 'Website Quick Project Check',
            'landing_page_url' => $validated['landing_page_url'] ?? $request->fullUrl(),
            'referrer_url' => $validated['referrer_url'] ?? $request->headers->get('referer'),
            'device_type' => $validated['device_type'] ?? $this->detectDeviceType($request->userAgent()),
            'browser' => $validated['browser'] ?? $request->userAgent(),
            'ip_address' => $request->ip(),
        ]);

        return redirect()->away($this->buildWhatsappUrl($lead, $agentNumber));
    }

    public function thankYou(QuickProjectCheck $quickProjectCheck): View
    {
        return view('quick-project-check.thank-you', [
            'lead' => $quickProjectCheck,
            'whatsappUrl' => $this->buildWhatsappUrl($quickProjectCheck),
            'displayNumber' => '070 6 920 600',
        ]);
    }

    public function redirectToWhatsapp(QuickProjectCheck $quickProjectCheck): RedirectResponse
    {
        $quickProjectCheck->update(['whatsapp_redirect_clicked' => true]);

        return redirect()->away($this->buildWhatsappUrl($quickProjectCheck));
    }

    private function generateLeadId(): string
    {
        $year = now()->format('Y');
        $nextNumber = QuickProjectCheck::where('lead_id', 'like', "LGC-WEB-{$year}-%")->count() + 1;

        do {
            $leadId = 'LGC-WEB-' . $year . '-' . sprintf('%04d', $nextNumber);
            $nextNumber++;
        } while (QuickProjectCheck::where('lead_id', $leadId)->exists());

        return $leadId;
    }

    private function calculateLeadScore(array $data): int
    {
        $score = 0;

        $score += match ($data['land_status']) {
            'Yes, I have land' => 3,
            'Planning to buy land' => 1,
            default => 0,
        };

        if (!empty($data['project_location'])) {
            $score += 2;
        }

        $score += $data['service_package'] === 'Not Sure - Need Guidance' ? 1 : 2;

        $score += match ($data['start_period']) {
            'Immediately', 'Within 1 Month' => 3,
            '1-3 Months' => 2,
            default => 0,
        };

        $score += match ($data['source']) {
            'Referral', 'Existing Client', 'Google Search' => 3,
            'Facebook Post', 'Facebook Ad', 'Instagram', 'Website' => 1,
            default => 0,
        };

        return $score;
    }

    private function classifyLead(int $score): string
    {
        if ($score >= 10) {
            return 'Hot';
        }

        if ($score >= 7) {
            return 'Warm';
        }

        if ($score >= 4) {
            return 'Nurture';
        }

        return 'Low Priority';
    }

    /**
     * Build the wa.me URL for the given lead.
     *
     * @param  QuickProjectCheck  $lead
     * @param  string|null  $whatsappNumber  International number without +. Defaults to slot-1 number.
     */
    private function buildWhatsappUrl(QuickProjectCheck $lead, ?string $whatsappNumber = null): string
    {
        $number   = $whatsappNumber ?? self::WHATSAPP_NUMBERS[1];
        $landSize = $lead->land_size ?: 'Not provided';

        $message = implode("\n", [
            'Hello Lassana Gedara Constructions,',
            '',
            'I completed the Quick Project Check Form.',
            '',
            'Lead ID: ' . $lead->lead_id,
            'Name: ' . $lead->client_name,
            'WhatsApp Number: ' . $lead->whatsapp_number,
            'How I found you: ' . $lead->source . ($lead->source_note ? ' - ' . $lead->source_note : ''),
            'Project Location: ' . $lead->project_location,
            'Land Status: ' . $lead->land_status,
            'Land Size: ' . $landSize,
            'Service / Package Required: ' . $lead->service_package,
            'Start Period: ' . $lead->start_period,
            'Please guide me with the suitable next step.',
        ]);

        return 'https://wa.me/' . $number . '?text=' . rawurlencode($message);
    }

    private function detectDeviceType(?string $userAgent): string
    {
        $userAgent = strtolower($userAgent ?? '');

        if (str_contains($userAgent, 'mobile') || str_contains($userAgent, 'android') || str_contains($userAgent, 'iphone')) {
            return 'Mobile';
        }

        if (str_contains($userAgent, 'tablet') || str_contains($userAgent, 'ipad')) {
            return 'Tablet';
        }

        return 'Desktop';
    }
}
