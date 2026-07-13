@extends('layout.front')

@section('title', 'Thank You | Quick Project Check')

@section('content')
<section class="page-title" style="background-image:url({{asset('assets/images/background/contact-us.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Thank You!</h1>
                <span class="title">Your project details were received</span>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Quick Project Check</li>
            </ul>
        </div>
    </div>
</section>

<section class="quick-thanks-section">
    <div class="auto-container">
        <div class="quick-thanks-panel">
            <span>Lead ID: {{ $lead->lead_id }}</span>
            <h2>ඔබගේ details ලබාදුන්නාට ස්තුතියි.</h2>
            <p>Your project details have been saved. Click the button below to continue the conversation with the Lassana Gedara team on WhatsApp.</p>

            <form action="{{ route('quick_project_check.whatsapp', $lead) }}" method="POST">
                @csrf
                <button class="theme-btn btn-style-three" type="submit">Continue on WhatsApp</button>
            </form>

            <div class="quick-fallback">
                <p>If WhatsApp did not open, please use the button again or contact us on WhatsApp:</p>
                <strong id="quick-whatsapp-number">{{ $displayNumber }}</strong>
                <button type="button" id="copy-whatsapp-number">Copy WhatsApp Number</button>
                <form class="quick-inline-form" action="{{ route('quick_project_check.whatsapp', $lead) }}" method="POST">@csrf<button type="submit">Open WhatsApp Again</button></form>
            </div>
        </div>
    </div>
</section>

<style>
.quick-thanks-section{padding:80px 0;background:#f7f9fb}.quick-thanks-panel{max-width:760px;margin:0 auto;padding:42px;border:1px solid #e5edf2;border-radius:8px;background:#fff;box-shadow:0 18px 45px rgba(22,35,48,.08);text-align:center}.quick-thanks-panel>span{display:inline-block;margin-bottom:12px;color:#c49a4a;font-weight:700}.quick-thanks-panel h2{margin-bottom:14px;color:#1f2c36}.quick-thanks-panel p{color:#5c6873;line-height:1.65}.quick-thanks-panel form{margin:28px 0}.quick-thanks-panel .theme-btn{border:0;cursor:pointer}.quick-fallback{padding-top:24px;border-top:1px solid #e9eef2}.quick-fallback strong{display:block;margin:10px 0 14px;color:#263642;font-size:22px}.quick-fallback form{display:inline-block;margin:4px}.quick-fallback form button{margin:0}.quick-fallback button,.quick-fallback a{display:inline-block;min-height:44px;margin:4px;padding:10px 18px;border:1px solid #cfd9df;border-radius:4px;background:#fff;color:#263642;font-weight:700;line-height:22px;cursor:pointer}@media only screen and (max-width:767px){.quick-thanks-section{padding:48px 0}.quick-thanks-panel{padding:28px 20px}.quick-thanks-panel .theme-btn,.quick-fallback button,.quick-fallback a{width:100%;text-align:center}}
</style>

<script>
(function(){var copyButton=document.getElementById('copy-whatsapp-number');var number=document.getElementById('quick-whatsapp-number');copyButton.addEventListener('click',function(){if(!navigator.clipboard){return;}navigator.clipboard.writeText(number.textContent.trim()).then(function(){copyButton.textContent='Copied';setTimeout(function(){copyButton.textContent='Copy WhatsApp Number';},1800);});});})();
</script>
@endsection
