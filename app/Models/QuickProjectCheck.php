<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuickProjectCheck extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'source',
        'source_note',
        'land_status',
        'project_location',
        'land_size',
        'service_package',
        'start_period',
        'client_name',
        'whatsapp_number',
        'consent_accepted',
        'whatsapp_redirect_clicked',
        'lead_score',
        'lead_type',
        'lead_status',
        'lead_source',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_content',
        'utm_term',
        'landing_page_url',
        'referrer_url',
        'device_type',
        'browser',
        'ip_address',
    ];

    protected $casts = [
        'consent_accepted' => 'boolean',
        'whatsapp_redirect_clicked' => 'boolean',
    ];
}
