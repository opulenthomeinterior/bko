{{-- SLIDER AREA START --}}
<section class="container-fluid position-relative hero-section d-flex align-items-center"
    style="min-height: 100vh; overflow: hidden;">

    <!-- Background Image -->
    <div class="image-container">
        <img src="{{ asset('images/homepage.jpeg') }}" alt="Image 1" class="fade-img active">
        <img src="{{ asset('images/shaker-22.jpeg') }}" alt="Image 2" class="fade-img">
        <img src="{{ asset('images/True-Handleless-SuperGloss-Graphite.jpg') }}" alt="Image 3" class="fade-img">
        <img src="{{ asset('images/slab.jpeg') }}" alt="Image 4" class="fade-img">
    </div>

    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center main-image-content align-items-center " style="z-index: 1000;">
            <!-- Left Content -->
            <div class="col-lg-6 col-md-6 text-start p-0" style="z-index: 100;">
                <div class=" animated slide-top">

                    <h6 class="fw-bold text-start text-white" style="letter-spacing:8px;">BUY KITCHEN
                        ONLINE</h6>
                </div>

                <div class="text-green-color">

                    <h1
                        class="fw-bold animated slide-left text-uppercase d-none d-md-block text-white">
                        Best of both worldS</h1>


                    <p class="animated slide-bottom text-white" style="font-size:30px;">
                        The <span class="fw-bold">Only Online Platform</span> with <span>Online value</span> and professional <span class="fw-bold">Survey</span> with <span class="fw-bold">Installation</span>.</p>

                </div>
                <div class="d-flex flex-column align-items-start position-relative ps-0">
                    <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 animated slide-top mx-auto"
                        style="margin-top: 5px;">

                    </div>
                    <div class=" col-sm-12 d-flex justify-content-start animated slide-bottom mt-1 mb-5 mb-md-0">

                        <a href="#"
                            class="btn px-5 py-3 order-btn btn-md text-black text-uppercase rounded-pill"
                            style="background-color: #febd49;">
                            Order Now
                        </a>
                    </div>
                </div>

            </div>

            <div class="col-lg-5 col-md-6 col-12" style="z-index: 100; margin-left: auto; margin-top: 30px; margin-bottom: 30px;">

                <div class="bg-white box-shadow-1 p-3 p-lg-4 rounded">
                    <div class="text-center mb-3">
                        <h5 class="text-uppercase" style="color: #333; font-weight: 600;">For free survey and quote <span style="color:#febd49;">call us now!</span></h5>
                        <a href="tel:02080505605" class="btn btn-yellow" style="font-weight: 600; background-color: #febd49; padding: 10px 20px; color: black;">
                            <i class="fas fa-phone pe-1"></i> 020 805 05605
                        </a>
                        <h6 class="text-center my-2">OR</h6>
                        <h5 class="text-uppercase" style="color: #333;">Book a free consultation now!</h5>
                    </div>
                    <form action="{{ route('contact_us_inquiry') }}" method="POST" class="row">
                        @csrf
                        <div class="col-12 mb-2">
                            <div class="input-item input-item-name ltn__custom-icon">
                                <input type="text" name="name" placeholder="Enter your name" required style="margin-bottom: 0px;">
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="input-item input-item-email ltn__custom-icon">
                                <input type="email" name="email" placeholder="Enter your email" required style="margin-bottom: 0px;">
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="input-item input-item-phone ltn__custom-icon">
                                <input type="number" name="phone" placeholder="Enter your phone number" required style="margin-bottom: 0px;">
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="input-item input-item-date ltn__custom-icon" style="margin-bottom: 0px;">
                                <input type="datetime-local" name="call_time" placeholder="Call Us At" class="form-control" style="height: 60px; margin-bottom: 0px;">
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <input type="text" name="message" placeholder="Enter your message" style="margin-bottom: 0px;">
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <div class="btn-wrapper mt-0">
                                <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase w-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="left-shadow"></div>
        </div>
    </div>
</section>
{{-- SLIDER AREA END --}}

<style>
.hero-section {
    position: relative;
}

.image-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.image-container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 2s ease-in-out;
}

.image-container img.active {
    opacity: 1;
}

.image-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
    z-index: 2;
}

/* Hide native calendar icon so only themed icon shows */
input[type="datetime-local"]::-webkit-calendar-picker-indicator {
    opacity: 0;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.fade-img');
    let currentIndex = 0;

    function changeImage() {
        images[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].classList.add('active');
    }

    // Change image every 4 seconds
    setInterval(changeImage, 4000);
});
</script>
