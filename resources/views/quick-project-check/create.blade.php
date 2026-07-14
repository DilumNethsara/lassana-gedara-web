<style>
    /* Premium form appearance */
.quick-check-section {
    padding: 80px 0;
    background:
        radial-gradient(circle at top left, rgba(196,154,74,.10), transparent 35%),
        linear-gradient(135deg, #f8fafb 0%, #eef3f5 100%);
}

.quick-check-shell {
    max-width: 920px;
    margin: 0 auto;
    overflow: hidden;
    background: rgba(255,255,255,.98);
    border: 1px solid rgba(218,227,232,.9);
    border-radius: 16px;
    box-shadow: 0 24px 65px rgba(22,35,48,.12);
}

.quick-check-heading {
    padding: 38px 40px 30px;
    background: linear-gradient(135deg, #ffffff 0%, #fbf7ef 100%);
    border-bottom: 1px solid #e8edf0;
}

.quick-check-heading h2 {
    font-size: 30px;
    line-height: 1.3;
}

.quick-check-form {
    padding: 34px 40px 42px;
}

/* Welcome box */
.quick-welcome {
    margin-bottom: 30px;
    padding: 24px 26px;
    background: linear-gradient(135deg, #fffdf8, #f9f2e5);
    border: 1px solid rgba(196,154,74,.30);
    border-left: 5px solid #c49a4a;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(55,43,20,.05);
}

.quick-welcome .quick-step-content {
    margin-bottom: 0;
}

.quick-welcome h3 {
    margin: 0 0 12px;
    color: #1f2c36;
    font-size: 25px;
    font-weight: 700;
}

.quick-welcome p {
    margin-bottom: 8px;
    color: #5c6873;
    line-height: 1.7;
}

.quick-welcome p:last-child {
    margin-bottom: 0;
}

/* Progress bar */
.quick-progress {
    margin-bottom: 32px;
    padding: 18px 20px;
    background: #f8fafb;
    border: 1px solid #e5ebef;
    border-radius: 10px;
}

.quick-progress > div:first-child {
    margin-bottom: 12px;
    color: #344450;
    font-weight: 600;
}

.quick-progress > div:first-child strong {
    color: #b8872f;
}

.quick-progress-track {
    height: 9px;
    overflow: hidden;
    background: #e4e9ec;
    border-radius: 999px;
}

.quick-progress-track span {
    display: block;
    height: 100%;
    background: linear-gradient(90deg, #ad7a25, #d5ad5c);
    border-radius: 999px;
    box-shadow: 0 0 12px rgba(196,154,74,.35);
    transition: width .3s ease;
}

/* Step heading */
.quick-step-content {
    margin-bottom: 26px;
}

.quick-step h3 {
    margin-bottom: 10px;
    font-size: 25px;
    line-height: 1.35;
}

.quick-kicker {
    padding: 5px 10px;
    background: rgba(196,154,74,.12);
    border-radius: 999px;
    color: #a57424;
    font-size: 12px;
}

/* Option cards */
.quick-options {
    gap: 14px;
}

.quick-option,
.quick-consent {
    position: relative;
    min-height: 58px;
    padding: 16px 17px;
    background: #fff;
    border: 1px solid #dce5ea;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(31,44,54,.03);
    transition:
        transform .2s ease,
        border-color .2s ease,
        background-color .2s ease,
        box-shadow .2s ease;
}

.quick-option:hover {
    transform: translateY(-2px);
    border-color: #c49a4a;
    box-shadow: 0 10px 22px rgba(31,44,54,.08);
}

.quick-option.is-selected,
.quick-consent.is-selected {
    background: #fffaf0;
    border-color: #c49a4a;
    box-shadow:
        0 0 0 3px rgba(196,154,74,.13),
        0 8px 20px rgba(31,44,54,.06);
}

/* Text inputs */
.quick-field input {
    min-height: 52px;
    padding: 13px 16px;
    background: #fbfcfd;
    border: 1px solid #d7e0e5;
    border-radius: 9px;
    transition:
        border-color .2s ease,
        background-color .2s ease,
        box-shadow .2s ease;
}

.quick-field input:focus {
    outline: none;
    background: #fff;
    border-color: #c49a4a;
    box-shadow: 0 0 0 4px rgba(196,154,74,.13);
}

/* Navigation buttons */
.quick-actions {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    margin-top: 30px;
}

/* Same dimensions for Back and Next */
.quick-actions .quick-back,
.quick-actions .quick-next {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 190px;
    min-width: 190px;
    height: 52px;
    min-height: 52px;
    padding: 0 20px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    cursor: pointer;
    transition:
        transform .2s ease,
        background-color .2s ease,
        box-shadow .2s ease;
}

/* Back button: dark background */
.quick-actions .quick-back {
    color: #fff;
    background: #344450;
    border: 1px solid #344450;
    box-shadow: 0 7px 16px rgba(52,68,80,.18);
}

.quick-actions .quick-back:hover {
    color: #fff;
    background: #26343e;
    border-color: #26343e;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(52,68,80,.24);
}

/* Next button: gold background */
.quick-actions .quick-next {
    color: #fff !important;
    background: linear-gradient(135deg, #b8872f, #d1a54f) !important;
    border: 1px solid #b8872f !important;
    box-shadow: 0 7px 18px rgba(184,135,47,.25);
}

.quick-actions .quick-next:hover {
    color: #fff !important;
    background: linear-gradient(135deg, #9f7124, #bd903a) !important;
    transform: translateY(-2px);
    box-shadow: 0 11px 22px rgba(184,135,47,.32);
}

/* Prevent theme animation from covering the button */
.quick-actions .quick-next::before,
.quick-actions .quick-next::after {
    display: none !important;
}

/* Place the only Next button on Step 1 on the right */
.quick-actions-end {
    justify-content: flex-end;
}

/* Final submit button */
.quick-actions button[type="submit"] {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 52px;
    padding: 0 26px;
    color: #fff !important;
    background: linear-gradient(135deg, #168451, #20a466) !important;
    border: 1px solid #168451 !important;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 700;
    box-shadow: 0 7px 18px rgba(22,132,81,.23);
    cursor: pointer;
    transition: transform .2s ease, box-shadow .2s ease;
}

.quick-actions button[type="submit"]:hover {
    transform: translateY(-2px);
    box-shadow: 0 11px 22px rgba(22,132,81,.30);
}

.quick-actions button[type="submit"]::before,
.quick-actions button[type="submit"]::after {
    display: none !important;
}

/* Mobile */
@media only screen and (max-width: 767px) {
    .quick-check-section {
        padding: 45px 0;
    }

    .quick-check-shell {
        border-radius: 12px;
    }

    .quick-check-heading,
    .quick-check-form {
        padding-left: 20px;
        padding-right: 20px;
    }

    .quick-check-heading h2 {
        font-size: 25px;
    }

    .quick-welcome {
        padding: 20px;
    }

    .quick-actions {
        flex-direction: column-reverse;
        align-items: stretch;
    }

    .quick-actions .quick-back,
    .quick-actions .quick-next,
    .quick-actions button[type="submit"] {
        width: 100%;
        min-width: 100%;
    }
}
</style>

<section class="quick-check-section">
    <div class="auto-container">
        <div class="quick-check-shell">
            <div class="quick-check-heading">
                <span>LGC Quick Project Check</span>
                <h2>Tell us the key details before WhatsApp follow-up</h2>
                <p>Complete this short form in 1-2 minutes. Our team will use your answers to guide the suitable next step for your planning or architectural design inquiry.</p>
            </div>

            @if ($errors->any())
                <div class="quick-alert">
                    <strong>Please check the highlighted details.</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="quick-check-form" action="{{ route('quick_project_check.store') }}" method="POST" novalidate>
                @csrf
                @foreach (['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'landing_page_url', 'referrer_url', 'device_type', 'browser'] as $trackingField)
                    <input type="hidden" name="{{ $trackingField }}" id="{{ $trackingField }}" value="{{ old($trackingField) }}">
                @endforeach

                <div class="quick-welcome">
                    <div class="quick-step-content">
                        <span class="quick-kicker">Welcome</span>
                
                        <h3>Quick Project Check</h3>
                
                        <p>
                            Lassana Gedara Constructions වෙතින් ඔබගේ project එකට නිවැරදි
                            guidance එකක් ලබාදීමට, කරුණාකර කෙටි details කිහිපයක් ලබා දෙන්න.
                        </p>
                
                        <p>
                            Your details help our team guide you through WhatsApp with the
                            most suitable next step.
                        </p>
                    </div>
                </div>
                
                <div class="quick-progress" aria-live="polite">
                    <div>
                        <span id="quick-step-label">Step 1 of 5</span>
                        <strong id="quick-step-count">20%</strong>
                    </div>
                
                    <div class="quick-progress-track">
                        <span id="quick-progress-bar" style="width:20%"></span>
                    </div>
                </div>

                <div class="quick-step is-active" data-step="1">
                    <div class="quick-step-content">
                        <span class="quick-kicker">Step 1 of 5</span>
                        <h3>How did you find us?</h3>
                        <p>ඔබ Lassana Gedara Constructions හඳුනාගත්තේ කොහොමද?</p>
                    </div>
                    <div class="quick-options source-options">
                        @foreach (['Facebook Post', 'Facebook Ad', 'Instagram', 'Google Search', 'Referral', 'Existing Client', 'Website', 'Other'] as $source)
                            <label class="quick-option"><input type="radio" name="source" value="{{ $source }}" {{ old('source') === $source ? 'checked' : '' }} required><span>{{ $source }}</span></label>
                        @endforeach
                    </div>
                    <style>
                        /* Step 1 source options alignment */
.quick-step .source-options {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    width: 100%;
    margin: 0 0 20px;
    padding: 0;
    gap: 12px;
    box-sizing: border-box;
}

.source-options .quick-option {
    display: flex;
    align-items: center;
    width: 100%;
    min-width: 0;
    min-height: 58px;
    margin: 0;
    padding: 16px 18px;
    background: #fff;
    border: 1px solid #dce5ea;
    border-radius: 9px;
    box-shadow: none;
    box-sizing: border-box;
}

.source-options .quick-option input {
    margin: 2px 0 0;
    flex: 0 0 auto;
}

.source-options .quick-option span {
    min-width: 0;
    line-height: 1.4;
}

.source-options .quick-option:hover {
    transform: none;
    background: #fafbf9;
    border-color: #b99a60;
    box-shadow: none;
}

.source-options .quick-option.is-selected {
    background: #fff8e9;
    border: 2px solid #b8872f;
    box-shadow: none;
    transform: none;
}

/* Error message must use the entire grid row */
.source-options .quick-validation-message {
    grid-column: 1 / -1;
    margin-top: 2px;
}

/* Prevent validation from changing option alignment */
.source-options.has-error {
    padding: 0;
    background: transparent;
    border: 0;
    outline: 1px solid rgba(217,75,75,.55);
    outline-offset: 7px;
}

/* Mobile alignment */
@media only screen and (max-width: 767px) {
    .quick-step .source-options {
        grid-template-columns: 1fr;
        width: 100%;
        gap: 10px;
    }

    .source-options .quick-option {
        width: 100%;
        min-height: 56px;
        padding: 15px 16px;
    }
}
                    </style>
                    <div class="quick-field quick-conditional-source">
                        <label for="source_note">Please mention if possible</label>
                        <input type="text" id="source_note" name="source_note" value="{{ old('source_note') }}" placeholder="Referral name / existing client / other source">
                    </div>
                    <div class="quick-actions quick-actions-end">
    <button class="theme-btn btn-style-three quick-next" type="button">
        Next / ඉදිරියට
    </button>
</div>
                </div>

                <div class="quick-step" data-step="2">
                    <div class="quick-step-content">
                        <span class="quick-kicker">Step 2 of 5</span>
                        <h3>Land and location check</h3>
                        <p>Project එක properly guide කරන්න location සහ land status එක වැදගත් වෙනවා.</p>
                    </div>
                    <div class="quick-field">
                        <label>Do you already have land for this project?</label>
                        <div class="quick-options land-status-options">
    @foreach (['Yes, I have land', 'Planning to buy land', 'Not yet'] as $status)
        <label class="quick-option">
            <input
                type="radio"
                name="land_status"
                value="{{ $status }}"
                {{ old('land_status') === $status ? 'checked' : '' }}
                required
            >

            <span>{{ $status }}</span>
        </label>
    @endforeach
</div>

<style>
/* ==================================================
   GLOBAL FORM ALIGNMENT FIX — STEPS 1 TO 5
   ================================================== */

.quick-check-form,
.quick-check-form *,
.quick-check-form *::before,
.quick-check-form *::after {
    box-sizing: border-box;
}

.quick-step,
.quick-step-content,
.quick-field,
.quick-options,
.quick-option,
.quick-consent {
    max-width: 100%;
}

/* All option containers */
.quick-options {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    width: 100%;
    margin: 0 0 20px;
    padding: 0;
    gap: 12px;
}

/* All individual options */
.quick-options .quick-option {
    width: 100%;
    min-width: 0;
    margin: 0;
}

/* Step 1 */
.source-options {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

/* Step 2 */
.land-status-options {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}

/* Step 3 */
.package-options {
    grid-template-columns: 1fr;
}

/* Step 4 uses the default two-column layout */

/* Prevent error styling from changing alignment */
.quick-options.has-error {
    width: 100%;
    margin: 0 0 20px;
    padding: 0 !important;
    background: transparent !important;
    border: 0 !important;
    border-radius: 10px;
    outline: 1px solid rgba(217,75,75,.55);
    outline-offset: 7px;
}

/* Error message occupies a separate full row */
.quick-options .quick-validation-message {
    grid-column: 1 / -1;
    width: 100%;
    margin: 2px 0 0;
}

/* ==================================================
   STEP 5 CONSENT ALIGNMENT
   ================================================== */

.quick-consent {
    display: grid;
    grid-template-columns: 22px minmax(0, 1fr);
    align-items: start;
    column-gap: 12px;
    row-gap: 8px;
    width: 100%;
    margin: 0;
    padding: 16px 18px;
    background: #fff;
    border: 1px solid #dce5ea;
    border-radius: 10px;
    box-shadow: none;
}

.quick-consent input {
    width: 18px;
    height: 18px;
    margin: 4px 0 0;
    padding: 0;
    flex: none;
}

.quick-consent > span {
    display: block;
    min-width: 0;
    margin: 0;
    color: #5c6873;
    line-height: 1.7;
    overflow-wrap: break-word;
}

/* Consent selected state */
.quick-consent.is-selected {
    background: #eef8f3;
    border-color: #c49a4a;
    box-shadow: none;
}

/* Consent validation error */
.quick-consent.has-error {
    width: 100%;
    margin: 0;
    padding: 16px 18px;
    background: #fffafa;
    border: 1px solid #d94b4b;
    box-shadow: 0 0 0 3px rgba(217,75,75,.10);
}

/* Validation message below consent content */
.quick-consent .quick-validation-message {
    grid-column: 1 / -1;
    width: 100%;
    margin: 4px 0 0;
}

/* Text fields use exactly the same outer width */
.quick-field input {
    display: block;
    width: 100%;
    max-width: 100%;
    margin: 0;
}

/* ==================================================
   RESPONSIVE ALIGNMENT
   ================================================== */

@media only screen and (max-width: 991px) {
    .land-status-options {
        grid-template-columns: 1fr;
    }
}

@media only screen and (max-width: 767px) {
    .quick-options,
    .source-options,
    .land-status-options,
    .package-options {
        grid-template-columns: 1fr;
        width: 100%;
        gap: 10px;
    }

    .quick-options .quick-option,
    .quick-consent,
    .quick-field input {
        width: 100%;
    }

    .quick-consent {
        padding: 15px 16px;
    }
}


/* Validation border without changing alignment */
.quick-options.has-error {
    padding: 0;
    background: transparent;
    border: 0;
    border-radius: 10px;
    outline: 1px solid rgba(217,75,75,.55);
    outline-offset: 7px;
}

.quick-consent.has-error {
    background: #fffafa;
    border-color: #d94b4b;
    box-shadow: 0 0 0 3px rgba(217,75,75,.10);
}

/* Step 2 options align with all other fields */
.quick-field .land-status-options {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    width: 100%;
    margin: 0;
    padding: 0;
    gap: 12px;
    box-sizing: border-box;
}

.land-status-options .quick-option {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    min-width: 0;
    min-height: 62px;
    margin: 0;
    padding: 16px 18px;
    overflow: hidden;
    background: #fff;
    border: 1px solid #dce5ea;
    border-radius: 9px;
    box-shadow: none;
    box-sizing: border-box;
}

.land-status-options .quick-option input {
    position: absolute;
    width: 1px;
    height: 1px;
    opacity: 0;
    pointer-events: none;
}

.land-status-options .quick-option span {
    display: block;
    width: 100%;
    color: #263642;
    line-height: 1.4;
    text-align: center;
}

.land-status-options .quick-option:hover {
    transform: none;
    background: #f7faf8;
    border-color: #7ea894;
    box-shadow: none;
}

.land-status-options .quick-option.is-selected {
    background: #fff8e9;
    border: 2px solid #c49a4a;
    box-shadow: none;
    transform: none;
}

.land-status-options .quick-option.is-selected span {
    color: #000;
    font-weight: 700;
}

/* Validation message stays below the options */
.land-status-options .quick-validation-message {
    grid-column: 1 / -1;
    margin-top: 2px;
}

/* Tablet */
@media only screen and (max-width: 991px) {
    .quick-field .land-status-options {
        grid-template-columns: 1fr;
    }

    .land-status-options .quick-option span {
        text-align: left;
    }
}

/* Mobile */
@media only screen and (max-width: 767px) {
    .quick-field .land-status-options {
        width: 100%;
        grid-template-columns: 1fr;
        gap: 10px;
    }

    .land-status-options .quick-option {
        width: 100%;
        min-height: 58px;
        padding: 15px 16px;
    }
}
</style>
                    </div>
                    <div class="quick-field"><label for="project_location">Project location</label><input type="text" id="project_location" name="project_location" value="{{ old('project_location') }}" placeholder="District / Town e.g. Gampaha, Kurunegala, Negombo" required></div>
                    <div class="quick-field"><label for="land_size">Approximate land size, if available</label><input type="text" id="land_size" name="land_size" value="{{ old('land_size') }}" placeholder="Perches / Sq.ft / Acres"></div>
                    <div class="quick-actions"><button class="quick-back" type="button">Back / ආපසු</button><button class="theme-btn btn-style-three quick-next" type="button">Next / ඉදිරියට</button></div>
                </div>

                <div class="quick-step" data-step="3">
                    <div class="quick-step-content">
                        <span class="quick-kicker">Step 3 of 5</span>
                        <h3>Service / package selection</h3>
                        <p>ඔබට හරියටම package එක තේරෙන්නේ නැත්නම් "Not Sure - Need Guidance" තෝරන්න.</p>
                    </div>
                    @php
                        $packages = [
                            'CADS - Council Approval Drawing / Basic House Plan' => 'Council approval drawing and basic house plan set.',
                            'FADS - Full Architectural Design + Exterior 3D' => 'House plan, architectural design guidance and exterior 3D views.',
                            'PADS - Premium Architectural Design' => 'Detailed planning, technical layouts and advanced exterior 3D.',
                            'LADS - Luxury Architectural + Interior Design Support' => 'Luxury design support with exterior 3D and selected interior visualization.',
                            'Signature Package - Complete Premium Design Solution' => 'High-end project guidance, premium presentation and BOQ support.',
                            'Add-On Services' => 'Interior design, BOQ, structural, electrical, plumbing, landscape, walkthrough or extra 3D services.',
                            'Not Sure - Need Guidance' => 'Our team will review your requirement and recommend the suitable package.',
                        ];
                    @endphp
                    <div class="quick-options package-options">
                        @foreach ($packages as $package => $description)
                            <label class="quick-option quick-package"><input type="radio" name="service_package" value="{{ $package }}" {{ old('service_package') === $package ? 'checked' : '' }} required><span><strong>{{ $package }}</strong><small>{{ $description }}</small></span></label>
                        @endforeach
                    </div>
                    <div class="quick-actions"><button class="quick-back" type="button">Back / ආපසු</button><button class="theme-btn btn-style-three quick-next" type="button">Next / ඉදිරියට</button></div>
                </div>

                <div class="quick-step" data-step="4">
                    <div class="quick-step-content">
                        <span class="quick-kicker">Step 4 of 5</span>
                        <h3>Timeline / readiness check</h3>
                        <p>When are you planning to start the design or planning work?</p>
                    </div>
                    <div class="quick-options">
                        @foreach (['Immediately', 'Within 1 Month', '1-3 Months', '3-6 Months', 'Later', 'Just Checking'] as $period)
                            <label class="quick-option"><input type="radio" name="start_period" value="{{ $period }}" {{ old('start_period') === $period ? 'checked' : '' }} required><span>{{ $period }}</span></label>
                        @endforeach
                    </div>
                    <div class="quick-actions"><button class="quick-back" type="button">Back / ආපසු</button><button class="theme-btn btn-style-three quick-next" type="button">Next / ඉදිරියට</button></div>
                </div>

                <div class="quick-step" data-step="5">
                    <div class="quick-step-content">
                        <span class="quick-kicker">Step 5 of 5</span>
                        <h3>Contact details</h3>
                        <p>අපගේ team එක ඔබට WhatsApp හරහා guide කරන්න, කරුණාකර ඔබගේ contact details ලබා දෙන්න.</p>
                    </div>
                    <div class="quick-field"><label for="client_name">Your Name / ඔබගේ නම</label><input type="text" id="client_name" name="client_name" value="{{ old('client_name') }}" placeholder="Your name" required></div>
                    <div class="quick-field"><label for="whatsapp_number">WhatsApp Number / WhatsApp අංකය</label><input type="tel" id="whatsapp_number" name="whatsapp_number" value="{{ old('whatsapp_number') }}" placeholder="077XXXXXXX" required></div>
                    <label class="quick-consent"><input type="checkbox" name="consent_accepted" value="1" {{ old('consent_accepted') ? 'checked' : '' }} required><span>I agree to be contacted by Lassana Gedara Constructions regarding my project requirement. ඔබ ලබාදෙන details භාවිතා කරන්නේ ඔබගේ inquiry එක සම්බන්ධයෙන් ඔබව සම්බන්ධ කරගැනීමට පමණි.</span></label>
                    <div class="quick-actions"><button class="quick-back" type="button">Back / ආපසු</button><button class="theme-btn btn-style-three" type="submit">Submit & Continue to WhatsApp</button></div>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
.quick-check-section{padding:80px 0;background:#f7f9fb}.quick-check-shell{max-width:920px;margin:0 auto;background:#fff;border:1px solid #e5edf2;border-radius:8px;box-shadow:0 18px 45px rgba(22,35,48,.08);overflow:hidden}.quick-check-heading{padding:34px 36px 26px;border-bottom:1px solid #e9eef2}.quick-check-heading span,.quick-kicker{display:inline-block;margin-bottom:10px;color:#c49a4a;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:0}.quick-check-heading h2,.quick-step h3{margin:0 0 12px;color:#1f2c36;font-weight:700}.quick-check-heading p,.quick-step p,.quick-option small,.quick-consent span{color:#5c6873;line-height:1.65}.quick-alert{margin:24px 36px 0;padding:16px 18px;border-left:4px solid #c0392b;background:#fff5f3;color:#663028}.quick-alert ul{margin:8px 0 0 18px}.quick-check-form{padding:30px 36px 36px}.quick-progress{margin-bottom:28px}.quick-progress>div:first-child{display:flex;align-items:center;justify-content:space-between;gap:16px;margin-bottom:10px;color:#344450}.quick-progress-track{height:8px;background:#e9eef2;border-radius:999px;overflow:hidden}.quick-progress-track span{display:block;width:0;height:100%;background:#c49a4a;transition:width .25s ease}.quick-step{display:none}.quick-step.is-active{display:block}.quick-step-content{margin-bottom:24px}.quick-field{margin-bottom:20px}.quick-field label{display:block;margin-bottom:8px;color:#24313b;font-weight:700}.quick-field input,.quick-option,.quick-consent{width:100%;border:1px solid #dce5ea;border-radius:8px;background:#fff}.quick-field input{min-height:48px;padding:12px 14px;color:#1f2c36}.quick-options{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px;margin-bottom:20px}.package-options{grid-template-columns:1fr}.quick-option,.quick-consent{display:flex;align-items:flex-start;gap:12px;min-height:52px;padding:14px;cursor:pointer;transition:border-color .2s ease,box-shadow .2s ease}.quick-option.is-selected,.quick-consent.is-selected{border-color:#c49a4a;box-shadow:0 0 0 3px rgba(196,154,74,.14)}.quick-option input,.quick-consent input{margin-top:5px;flex:0 0 auto}.quick-option span{color:#263642;font-weight:600}.quick-option small,.quick-package strong{display:block}.quick-package small{margin-top:4px;font-weight:400}.quick-conditional-source{display:none}.quick-conditional-source.is-visible{display:block}.quick-actions{display:flex;align-items:center;justify-content:space-between;gap:14px;margin-top:26px}.quick-back{min-height:48px;padding:12px 22px;border:1px solid #cfd9df;border-radius:4px;background:#fff;color:#263642;font-weight:700;cursor:pointer}.quick-actions .theme-btn{border:0;cursor:pointer}@media only screen and (max-width:767px){.quick-check-section{padding:48px 0}.quick-check-heading,.quick-check-form{padding-left:20px;padding-right:20px}.quick-options{grid-template-columns:1fr}.quick-actions{flex-direction:column-reverse;align-items:stretch}.quick-actions button,.quick-actions .theme-btn{width:100%;text-align:center}}
</style>

<script>
(function(){var steps=[].slice.call(document.querySelectorAll('.quick-step'));var current=0;var stepLabel=document.getElementById('quick-step-label');var stepCount=document.getElementById('quick-step-count');var progressBar=document.getElementById('quick-progress-bar');var sourceNote=document.querySelector('.quick-conditional-source');function updateSelectedStyles(){document.querySelectorAll('.quick-option,.quick-consent').forEach(function(label){var input=label.querySelector('input');label.classList.toggle('is-selected',input&&input.checked);});}function updateStep(index){current=Math.max(0,Math.min(index,steps.length-1));steps.forEach(function(step,stepIndex){step.classList.toggle('is-active',stepIndex===current);});stepLabel.textContent=current===0?'Welcome':'Step '+current+' of 5';stepCount.textContent=current===0?'Start':Math.round((current/5)*100)+'%';progressBar.style.width=current===0?'0%':((current/5)*100)+'%';}function activeRequiredFields(){return [].slice.call(steps[current].querySelectorAll('[required]'));}function validateCurrentStep(){var groups={};var valid=true;activeRequiredFields().forEach(function(field){if(field.type==='radio'){groups[field.name]=groups[field.name]||[];groups[field.name].push(field);return;}if(!field.checkValidity()){field.reportValidity();valid=false;}});Object.keys(groups).forEach(function(name){var checked=groups[name].some(function(field){return field.checked;});if(!checked){groups[name][0].reportValidity();valid=false;}});return valid;}function toggleSourceNote(){var selected=document.querySelector('input[name="source"]:checked');var show=selected&&['Referral','Existing Client','Other'].indexOf(selected.value)!==-1;sourceNote.classList.toggle('is-visible',!!show);}document.querySelectorAll('.quick-next').forEach(function(button){button.addEventListener('click',function(){if(current===0||validateCurrentStep()){updateStep(current+1);}});});document.querySelectorAll('.quick-back').forEach(function(button){button.addEventListener('click',function(){updateStep(current-1);});});document.querySelectorAll('.quick-option input,.quick-consent input').forEach(function(field){field.addEventListener('change',updateSelectedStyles);});document.querySelectorAll('input[name="source"]').forEach(function(field){field.addEventListener('change',toggleSourceNote);});var params=new URLSearchParams(window.location.search);['utm_source','utm_medium','utm_campaign','utm_content','utm_term'].forEach(function(key){var input=document.getElementById(key);if(input&&!input.value){input.value=params.get(key)||'';}});document.getElementById('landing_page_url').value=window.location.href;document.getElementById('referrer_url').value=document.referrer||'';document.getElementById('browser').value=navigator.userAgent||'';document.getElementById('device_type').value=window.matchMedia('(max-width: 767px)').matches?'Mobile':'Desktop';toggleSourceNote();updateSelectedStyles();updateStep({{ $errors->any() ? 5 : 0 }});})();
</script>

