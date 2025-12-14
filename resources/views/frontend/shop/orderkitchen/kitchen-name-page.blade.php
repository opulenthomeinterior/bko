<x-guest-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J-Pull Kitchen Slideshow</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .left-content {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .decorative-dots {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .dot {
            position: absolute;
            border-radius: 50%;
            opacity: 0.6;
            animation: float 6s ease-in-out infinite;
        }

        .dot-1 {
            width: 12px;
            height: 12px;
            background: #febd49;
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }

        .dot-2 {
            width: 8px;
            height: 8px;
            background: #17a2b8;
            top: 25%;
            right: 20%;
            animation-delay: 2s;
        }

        .dot-3 {
            width: 6px;
            height: 6px;
            background: #febd49;
            bottom: 30%;
            left: 15%;
            animation-delay: 4s;
        }

        .dot-4 {
            width: 10px;
            height: 10px;
            background: #6c757d;
            bottom: 20%;
            right: 15%;
            animation-delay: 1s;
        }

        .triangle {
            position: absolute;
            width: 0;
            height: 0;
            opacity: 0.4;
        }

        .triangle-1 {
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 25px solid #febd49;
            top: 10%;
            right: 10%;
            animation: rotate 8s linear infinite;
        }

        .triangle-2 {
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 18px solid #17a2b8;
            bottom: 40%;
            left: 5%;
            animation: rotate 12s linear infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            25% { transform: translateY(-10px) translateX(5px); }
            50% { transform: translateY(-5px) translateX(-3px); }
            75% { transform: translateY(-15px) translateX(3px); }
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .content-wrapper {
            text-align: center;
            max-width: 400px;
            padding: 2rem;
        }

        .main-title {
            font-size: 3.5rem;
            font-weight: 900;
            color: #212529;
            margin-bottom: 1.5rem;
            letter-spacing: -2px;
            line-height: 1.1;
        }

        .subtitle {
            font-size: 1.3rem;
            color: #6c757d;
            font-weight: 400;
            line-height: 1.4;
            margin-bottom: 0;
        }

        .right-content {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
            background: #f8f9fa;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: all 0.8s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide.active {
            opacity: 1;
        }

        .slide-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .color-square {
            width: 280px;
            height: 280px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            transition: transform 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 3;
            backdrop-filter: blur(5px);
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .color-square:hover {
            transform: scale(1.05);
        }

        .color-square::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
            pointer-events: none;
        }

        .color-name {
            font-size: 1.4rem;
            font-weight: 700;
            margin: 0;
            text-align: center;
            z-index: 2;
            position: relative;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .slide-controls {
            position: absolute;
            bottom: 5%;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 10;
        }

        .control-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }

        .control-dot.active {
            background: #fff;
            transform: scale(1.2);
        }

        .nav-arrows {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.9);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
            font-size: 1.2rem;
            color: #495057;
        }

        .nav-arrows:hover {
            background: #fff;
            transform: translateY(-50%) scale(1.1);
        }

        .prev-btn {
            left: 20px;
        }

        .next-btn {
            right: 20px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .main-title {
                font-size: 2.5rem;
            }
            
            .subtitle {
                font-size: 1.1rem;
            }
            
            .hero-section {
                min-height: auto;
            }
            
            .left-content, .right-content {
                min-height: 50vh;
            }
            
            .content-wrapper {
                padding: 1.5rem;
            }
            
            .color-square {
                width: 200px;
                height: 200px;
            }
            
            .color-name {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <section class="hero-section">
        <div class="container-fluid p-0">
            <div class="row g-0 h-100">
                <!-- Left Static Content -->
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="decorative-dots">
                            <div class="dot dot-1"></div>
                            <div class="dot dot-2"></div>
                            <div class="dot dot-3"></div>
                            <div class="dot dot-4"></div>
                            <div class="triangle triangle-1"></div>
                            <div class="triangle triangle-2"></div>
                        </div>
                        
                        <div class="content-wrapper">
                            <h1 class="main-title">J-PULL KITCHEN</h1>
                            <p class="subtitle">Where Minimalism Meets Elegance and Functionality.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Right Dynamic Slideshow -->
                <div class="col-lg-6">
                    <div class="right-content">
                        <!-- Slide 1 - Light Grey -->
                        <div class="slide active" data-color="#D3D3D3">
                            <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Modern Kitchen Light Grey" class="slide-image">
                            <div class="slide-overlay"></div>
                            <div class="color-square" style="background-color: #D3D3D3;">
                                <p class="color-name" style="color: #333333;">Light Grey</p>
                            </div>
                        </div>
                        
                        <!-- Slide 2 - Modern White -->
                        <div class="slide" data-color="#F8F8FF">
                            <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&h=800&q=80" alt="Modern Kitchen White" class="slide-image">
                            <div class="slide-overlay"></div>
                            <div class="color-square" style="background-color: #F8F8FF;">
                                <p class="color-name" style="color: #333333;">Modern White</p>
                            </div>
                        </div>
                        
                        <!-- Slide 3 - Warm Beige -->
                        <div class="slide" data-color="#F5DEB3">
                            <img src="https://images.unsplash.com/photo-1556909010-4e21803ac5ba?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&h=800&q=80" alt="Modern Kitchen Beige" class="slide-image">
                            <div class="slide-overlay"></div>
                            <div class="color-square" style="background-color: #F5DEB3;">
                                <p class="color-name" style="color: #8B4513;">Warm Beige</p>
                            </div>
                        </div>
                        
                        <!-- Slide 4 - Deep Navy -->
                        <div class="slide" data-color="#2F4F4F">
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&h=800&q=80" alt="Modern Kitchen Navy" class="slide-image">
                            <div class="slide-overlay"></div>
                            <div class="color-square" style="background-color: #2F4F4F;">
                                <p class="color-name" style="color: #FFFFFF;">Deep Navy</p>
                            </div>
                        </div>
                        
                        <!-- Slide 5 - Forest Green -->
                        <div class="slide" data-color="#228B22">
                            <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&h=800&q=80" alt="Modern Kitchen Green" class="slide-image">
                            <div class="slide-overlay"></div>
                            <div class="color-square" style="background-color: #228B22;">
                                <p class="color-name" style="color: #FFFFFF;">Forest Green</p>
                            </div>
                        </div>
                        
                        <!-- Slide 6 - Burgundy -->
                        <div class="slide" data-color="#800020">
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&h=800&q=80" alt="Modern Kitchen Burgundy" class="slide-image">
                            <div class="slide-overlay"></div>
                            <div class="color-square" style="background-color: #800020;">
                                <p class="color-name" style="color: #FFFFFF;">Burgundy</p>
                            </div>
                        </div>
                        
                        <!-- Navigation Arrows -->
                        <button class="nav-arrows prev-btn" onclick="changeSlide(-1)">‹</button>
                        <button class="nav-arrows next-btn" onclick="changeSlide(1)">›</button>
                        
                        <!-- Slide Controls -->
                        <div class="slide-controls">
                            <button class="control-dot active" onclick="currentSlide(1)"></button>
                            <button class="control-dot" onclick="currentSlide(2)"></button>
                            <button class="control-dot" onclick="currentSlide(3)"></button>
                            <button class="control-dot" onclick="currentSlide(4)"></button>
                            <button class="control-dot" onclick="currentSlide(5)"></button>
                            <button class="control-dot" onclick="currentSlide(6)"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        let currentSlideIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.control-dot');
        const rightContent = document.querySelector('.right-content');
        const totalSlides = slides.length;
        let autoSlideInterval;

        function showSlide(index) {
            // Remove active class from all slides and dots
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            // Add active class to current slide and dot
            slides[index].classList.add('active');
            dots[index].classList.add('active');
            
            currentSlideIndex = index;
        }

        function nextSlide() {
            const nextIndex = (currentSlideIndex + 1) % totalSlides;
            showSlide(nextIndex);
        }

        function prevSlide() {
            const prevIndex = (currentSlideIndex - 1 + totalSlides) % totalSlides;
            showSlide(prevIndex);
        }

        function changeSlide(direction) {
            clearInterval(autoSlideInterval);
            if (direction === 1) {
                nextSlide();
            } else {
                prevSlide();
            }
            startAutoSlide();
        }

        function currentSlide(index) {
            clearInterval(autoSlideInterval);
            showSlide(index - 1);
            startAutoSlide();
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 4000);
        }

        // Initialize slideshow
        document.addEventListener('DOMContentLoaded', function() {
            showSlide(0);
            startAutoSlide();
        });

        // Pause auto-slide on hover
        rightContent.addEventListener('mouseenter', () => {
            clearInterval(autoSlideInterval);
        });

        rightContent.addEventListener('mouseleave', () => {
            startAutoSlide();
        });

        // Touch/swipe support for mobile
        let startX = 0;
        let startY = 0;

        rightContent.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
        });

        rightContent.addEventListener('touchend', (e) => {
            if (!startX || !startY) return;

            const endX = e.changedTouches[0].clientX;
            const endY = e.changedTouches[0].clientY;
            
            const diffX = startX - endX;
            const diffY = startY - endY;

            // Only trigger if horizontal swipe is greater than vertical
            if (Math.abs(diffX) > Math.abs(diffY)) {
                if (Math.abs(diffX) > 50) { // Minimum swipe distance
                    if (diffX > 0) {
                        changeSlide(1); // Swipe left - next slide
                    } else {
                        changeSlide(-1); // Swipe right - previous slide
                    }
                }
            }

            startX = 0;
            startY = 0;
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                changeSlide(-1);
            } else if (e.key === 'ArrowRight') {
                changeSlide(1);
            }
        });
    </script>
</x-guest-layout>