{{-- FOOTER AREA START --}}
<footer class="ltn__footer-area">
    <div class="footer-top-area section-bg-2 plr--5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-6 col-12 mt-4">
                    <div class="footer-widget footer-about-widget">
                        <div class="footer-logo">
                            <div class="site-logo">
                                <img src="{{ asset('images/bko-white-logo.png') }}" alt="Buy Kitchen Online Logo" style="max-width:200px;">
                            </div>
                        </div>
                        <small class="text-white d-block mb-2">Opulent home interiors operating as Buy Kitchen Online.</small>
                        <div class="footer-address">
                            <ul>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p>44 Gillender St, Aberfeldy Village, London E14 6RP, United Kingdom</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a href="tel:02080505605">020 805 05605</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-mail"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a href="mailto:admin@bkonline.uk">admin@bkonline.uk</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ltn__social-media mt-20">
                            <ul>
                                <li><a class="theme-btn-3 btn btn-effect-3 mb-2" href="https://www.facebook.com/opulenthomeinteriorsltd" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="theme-btn-3 btn btn-effect-3 mb-2" href="https://www.instagram.com/bkonline__kitchen" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="theme-btn-3 btn btn-effect-3 mb-2" href="https://uk.pinterest.com/bkonline570" title="Pinterest"><i class="fab fa-pinterest"></i></a></li>
                                <li><a class="theme-btn-3 btn btn-effect-3 mb-2" href="https://www.youtube.com/@opulenthomeinteriors5595" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12 col-12 d-flex justify-content-end mt-4">
                    <div class="footer-widget footer-newsletter-widget text-right text-sm-start">
                        <h4 class="footer-title text-white">Newsletter</h4>
                        <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                        <div class="footer-newsletter">
                            <form action="#" method="POST">
                                <input type="email" name="email" placeholder="Email*" required>
                                <div class="btn-wrapper">
                                    <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__copyright-area ltn__copyright-2 section-bg-7 plr--5">
        <div class="container ltn__border-top-2">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="ltn__copyright-design clearfix">
                        <p>All Rights Reserved @ Buy Kitchen Online <span class="current-year"></span></p>
                    </div>
                </div>
                <div class="col-md-6 col-12 align-self-center">
                    <div class="ltn__copyright-menu text-end">
                        <ul>
                            <li><a href="https://bkonline.uk/site-pages/cookies-policy">Cookies Policy</a></li>
                            <li><a href="https://bkonline.uk/site-pages/privacy-policy">Privacy &amp; Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
{{-- FOOTER AREA END --}}

@push('scripts')
<script>
    // Set current year in footer
    document.addEventListener('DOMContentLoaded', function() {
        const yearElement = document.querySelector('.current-year');
        if (yearElement) {
            yearElement.textContent = new Date().getFullYear();
        }
    });
</script>
@endpush
