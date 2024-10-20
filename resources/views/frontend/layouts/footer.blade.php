@php
    $generalSetting = \App\Models\GeneralSetting::first();
    $footerInfo = \App\Models\FooterInfo::first();
    $footerIcons = \App\Models\FooterSocialLink::all();
    $footerUsefulLinks = \App\Models\FooterUsefulLink::all();
    $footerContact = \App\Models\FooterContactInfo::first();
    $footerHelpLinks = \App\Models\FooterHelpLink::all();
@endphp

<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets">
            <div class="col-md-12 col-lg-3 widget">
                <div class="text-box">
                    <figure class="footer-logo">
                        <img src="{{ isset($generalSetting) ? asset($generalSetting->footer_logo) : asset('default-footer-logo.png') }}" alt="">
                    </figure>
                    <p>{{ $footerInfo->info ?? 'Default Info' }}</p>
                    <ul class="d-flex flex-wrap">
                        @foreach ($footerIcons as $icon)
                            <li><a href="{{ $icon->url ?? '#' }}"><i class="{{ $icon->icon ?? 'fas fa-link' }}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-1 widget">
                <h3 class="widget-title">Useful Link</h3>
                <ul class="nav-menu">
                    @foreach ($footerUsefulLinks as $usefulLink)
                        <li><a href="{{ $usefulLink->url ?? '#' }}">{{ $usefulLink->name ?? 'Default Name' }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4 col-lg-2 widget">
                <h3 class="widget-title">Help Link</h3>
                <ul class="nav-menu">
                    @foreach ($footerHelpLinks as $helpLink)
                        <li><a href="{{ $helpLink->url ?? '#' }}">{{ $helpLink->name ?? 'Default Name' }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Contact Info</h3>
                <ul class="contact-info">
                    <li><i class="fas fa-map-marker-alt"></i> {{ $footerContact->address ?? 'Default Address' }}</li>
                    <li><i class="fas fa-phone-alt"></i> {{ $footerContact->phone ?? 'Default Phone' }}</li>
                    <li><i class="fas fa-envelope"></i> {{ $footerContact->email ?? 'Default Email' }}</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
