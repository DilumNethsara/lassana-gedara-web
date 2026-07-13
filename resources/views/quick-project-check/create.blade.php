@extends('layout.front')

@section('title', 'Quick Project Check | Lassana Gedara Constructions')
@section('meta_description', 'Complete the Lassana Gedara Quick Project Check form and continue your house planning inquiry on WhatsApp.')
@section('meta_keywords', 'quick project check, Lassana Gedara, house planning Sri Lanka, architectural design, WhatsApp inquiry')

@section('content')
<section class="page-title" style="background-image:url({{asset('assets/images/background/contact-us.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Quick Project Check</h1>
                <span class="title">Start your home planning journey</span>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Quick Project Check</li>
            </ul>
        </div>
    </div>
</section>

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

                <div class="quick-progress" aria-live="polite">
                    <div><span id="quick-step-label">Welcome</span><strong id="quick-step-count">Start</strong></div>
                    <div class="quick-progress-track"><span id="quick-progress-bar"></span></div>
                </div>

                <div class="quick-step is-active" data-step="0">
                    <div class="quick-step-content">
                        <span class="quick-kicker">Welcome</span>
                        <h3>Quick Project Check</h3>
                        <p>Lassana Gedara Constructions වෙතින් ඔබගේ project එකට නිවැරදි guidance එකක් ලබාදීමට, කරුණාකර කෙටි details කිහිපයක් ලබා දෙන්න.</p>
                        <p>Your details help our team guide you through WhatsApp with the most suitable next step.</p>
                    </div>
                    <div class="quick-actions"><button class="theme-btn btn-style-three quick-next" type="button">Start කරන්න</button></div>
                </div>

                <div class="quick-step" data-step="1">
                    <div class="quick-step-content">
                        <span class="quick-kicker">Step 1 of 5</span>
                        <h3>How did you find us?</h3>
                        <p>ඔබ Lassana Gedara Constructions හඳුනාගත්තේ කොහොමද?</p>
                    </div>
                    <div class="quick-options">
                        @foreach (['Facebook Post', 'Facebook Ad', 'Instagram', 'Google Search', 'Referral', 'Existing Client', 'Website', 'Other'] as $source)
                            <label class="quick-option"><input type="radio" name="source" value="{{ $source }}" {{ old('source') === $source ? 'checked' : '' }} required><span>{{ $source }}</span></label>
                        @endforeach
                    </div>
                    <div class="quick-field quick-conditional-source">
                        <label for="source_note">Please mention if possible</label>
                        <input type="text" id="source_note" name="source_note" value="{{ old('source_note') }}" placeholder="Referral name / existing client / other source">
                    </div>
                    <div class="quick-actions"><button class="quick-back" type="button">Back / ආපසු</button><button class="theme-btn btn-style-three quick-next" type="button">Next / ඉදිරියට</button></div>
                </div>

                <div class="quick-step" data-step="2">
                    <div class="quick-step-content">
                        <span class="quick-kicker">Step 2 of 5</span>
                        <h3>Land and location check</h3>
                        <p>Project එක properly guide කරන්න location සහ land status එක වැදගත් වෙනවා.</p>
                    </div>
                    <div class="quick-field">
                        <label>Do you already have land for this project?</label>
                        <div class="quick-options">
                            @foreach (['Yes, I have land', 'Planning to buy land', 'Not yet'] as $status)
                                <label class="quick-option"><input type="radio" name="land_status" value="{{ $status }}" {{ old('land_status') === $status ? 'checked' : '' }} required><span>{{ $status }}</span></label>
                            @endforeach
                        </div>
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

@endsection
