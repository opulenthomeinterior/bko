<x-guest-layout>
    <head>
        @section('meta_tags')
        <title>Kitchen Design Services | Bespoke & Affordable Kitchens | BKO</title>
        <!-- testing -->
        <meta name="description" content="Buy Kitchen Online is here with Affordable & Custom kitchen units in London, in J Pull, Shaker, Slab, MFC & True Handleless styles. Book Consultation Now.">
        <!-- <meta name="description" content="Customize your Dream Kitchen with our Bespoke Kitchen Units in London. Our Bespoke Designer Kitchens include Slab, Shaker, True handleless & J-pull Styles."> -->
        <link rel="canonical" href="https://bkonline.uk/" />
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </head>

    <section>Doors replacement</section>

    
@push('scripts')
    <script>
        $(document).ready(function () {
            const $carousel01 = $('.main-carousel-banner-01');
            /* #orderComponentSlider.owlCarousel({
                loop:true,
                margin:50,
                stagePadding:15,
                autoplay:true
            }); */
            // Initialize OwlCarousel
            $carousel01.owlCarousel({
                loop: true,
                margin: 50,
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
                        items: 2,
                        loop: true,
                        margin: 10,
                        nav: true,
                        dots: true,
                        center: true,
                    },
                    1200: {
                        items: 3,
                        loop: true,
                        margin: 50,
                        nav: true,
                        dots: true,
                        center: true,
                    },
                    1400: {
                        items: 3,
                        loop: true,
                        margin: 50,
                        nav: true,
                        dots: true,
                        center: true,
                    }
                }
            });
            // Customize the autoplay behavior to reverse the direction
            $carousel01.on('translated.owl.carousel', function() {
                $carousel01.find('.owl-item.active').css('animation', 'move-right 0.3s ease-in-out');
            });
        });
    </script>
@endpush
</x-guest-layout>