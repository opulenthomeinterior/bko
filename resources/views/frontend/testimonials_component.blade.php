<section class="container-fluid py-5 bg-white" style="background-image: url({{asset('images/homepage.jpeg')}}); opacity: 2; border-bottom: 3px solid #ebc266; border-left: 3px solid #ebc266; padding: 20px; width: 100% !important; overflow: hidden">
    <div class="row">
        <h3 class="text-dark text-uppercase fw-bolder text-center mb-4">Testimonials</h3>
    </div>
    <div class="row">
        <div class="carousel main-carousel-banner-02 owl-carousel clients mb-0"
            data-margin="30"
            data-loop="true"
            data-dots="false"
            data-autoplay="true"
            data-autoplay-timeout="3000"
            data-responsive='{"0":{"items": "3"}, "768":{"items": "4"}, "992":{"items": "4"}, "1200":{"items": "4"}, "1400":{"items": "4"}}'>
            <div class="item mx-10 px-0">
                <div class="carousel-card card border border-warning" style="border-radius: 20px; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                    <div class="card-body carousel-card-body">
                        <div class="col-12 mb-4 d-flex justify-content-center">
                            <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="img-fluid rounded-circle" style="height: 100px; width: 100px">
                        </div>
                        <div class="fw-bold text-center">
                            Smith
                        </div>
                        <div class="text-center">
                            <small class="text-center">2023-11-19</small>
                        </div>
                    </div>
                    <div class="card-footer carousel-card-footer" style="border-radius: 20px;">
                        <small class="text-dark text-start" style="font-size: 12px">I discovered BKO Kitchen's online services through a recommendation from a colleague. Reaching out to them via WhatsApp was incredibly convenient, and they quickly arranged a free consultation call. From the initial planning to the seamless installation of my shaker kitchen, the entire experience was outstanding. I wouldn’t hesitate to recommend their design and installation services to others!</small>
                    </div>
                </div>
            </div>
            <div class="item mx-10 px-0">
                <div class="carousel-card card border border-warning" style="border-radius: 20px; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                    <div class="card-body carousel-card-body">
                        <div class="col-12 mb-4 d-flex justify-content-center">
                            <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="img-fluid rounded-circle" style="height: 100px; width: 100px">
                        </div>
                        <div class="fw-bold text-center">
                            Smith
                        </div>
                        <div class="text-center">
                            <small class="text-center">2023-11-19</small>
                        </div>
                    </div>
                    <div class="card-footer carousel-card-footer" style="border-radius: 20px;">
                        <small class="text-dark text-start" style="font-size: 12px">I discovered BKO Kitchen's online services through a recommendation from a colleague. Reaching out to them via WhatsApp was incredibly convenient, and they quickly arranged a free consultation call. From the initial planning to the seamless installation of my shaker kitchen, the entire experience was outstanding. I wouldn’t hesitate to recommend their design and installation services to others!</small>
                    </div>
                </div>
            </div>
            <div class="item mx-10 px-0">
                <div class="carousel-card card border border-warning" style="border-radius: 20px; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);">
                    <div class="card-body carousel-card-body">
                        <div class="col-12 mb-4 d-flex justify-content-center">
                            <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="img-fluid rounded-circle" style="height: 100px; width: 100px">
                        </div>
                        <div class="fw-bold text-center">
                            Smith
                        </div>
                        <div class="text-center">
                            <small class="text-center">2023-11-19</small>
                        </div>
                    </div>
                    <div class="card-footer carousel-card-footer" style="border-radius: 20px;">
                        <small class="text-dark text-start" style="font-size: 12px">I discovered BKO Kitchen's online services through a recommendation from a colleague. Reaching out to them via WhatsApp was incredibly convenient, and they quickly arranged a free consultation call. From the initial planning to the seamless installation of my shaker kitchen, the entire experience was outstanding. I wouldn’t hesitate to recommend their design and installation services to others!</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        $(document).ready(function () {
            const $carousel02 = $('.main-carousel-banner-02');
            // Initialize OwlCarousel
            $carousel02.owlCarousel({
                loop: true,
                margin: 30,
                stagePadding: 15, // Add padding to avoid clipping
                rtl: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    768: {
                        items: 2,
                        nav: true
                    },
                    992: {
                        items: 3,
                        loop: true,
                        margin: 10,
                        nav: true,
                        dots: true,
                        center: true,
                    },
                    1200: {
                        items: 4,
                        loop: true,
                        margin: 20,
                        nav: true,
                        dots: true,
                        center: true,
                    },
                    1400: {
                        items: 4,
                        loop: true,
                        margin: 20,
                        nav: true,
                        dots: true,
                        center: true,
                    }
                }
            });
            // Customize the autoplay behavior to reverse the direction
            $carousel02.on('translated.owl.carousel', function() {
                $carousel02.find('.owl-item.active').css('animation', 'move-left 0.3s ease-in-out');
            });
        });
    </script>
@endpush