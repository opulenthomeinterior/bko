
@extends('layouts.guest2')

@section('title', 'Super Gloss White Kitchen | Premium Kitchen Design')

@section('meta_description', 'Discover our premium super gloss white kitchen collection with modern designs and high-quality finishes.')

@section('content')
    <!-- Hero Section with Super Gloss White Theme -->
    <section class="super-gloss-hero" style="position: relative; height: 50vh; min-height: 400px; overflow: hidden;">
        
        <!-- Full Width Background Image -->
        <div class="hero-image-container" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
            <img src="{{ asset('images/True-Handleless-SuperGloss-Graphite.jpg') }}" 
                 alt="Super Gloss White Kitchen" 
                 style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        
        <!-- Hero Content (currently empty, just image) -->
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center" style="position: relative; z-index: 2;">
                <div class="col-lg-8 col-md-10 text-center">
                    <div class="hero-content animated fadeInUp"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4" style="background-color: #f2f2f2;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 mb-3 mb-lg-0">
                    <div class="cabinet-configurator bg-white p-3">
                        <div id="step-1" class="step-pane active">
                            <div class="d-flex flex-wrap justify-content-between align-items-center border-bottom pb-2 mb-3">
                                <h5 class="mb-0 step-heading" data-step="#step-1">1. Cabinets and Panels</h5>
                                <a href="#" class="text-decoration-none small">View All &raquo;</a>
                            </div>

                            <div class="cabinet-tabs mb-3">
                                <div class="row g-3">
                                    <div class="col-6 col-md-3">
                                        <button type="button" class="btn btn-sm w-100 btn-secondary text-white" data-target="#tab-base">Base Cabinets</button>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <button type="button" class="btn btn-sm w-100 btn-outline-secondary" data-target="#tab-wall">Wall Cabinets</button>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <button type="button" class="btn btn-sm w-100 btn-outline-secondary" data-target="#tab-tall">Tall Cabinets</button>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <button type="button" class="btn btn-sm w-100 btn-outline-secondary" data-target="#tab-accessories">Accessories</button>
                                    </div>
                                </div>
                            </div>

                            <div class="cabinet-tab-content">
                            <div id="tab-base" class="cabinet-tab-pane active">
                                <div class="border">
                                    <div class="px-3 py-2" style="background-color: #e6e6e6;">
                                        <div class="d-flex flex-nowrap align-items-stretch overflow-auto">
                                            <button type="button" class="base-category-item text-center me-2 active" data-category="two-drawers">
                                                <img src="{{ asset('images/base-two-drawers.jpg') }}" alt="Two Drawers" class="img-fluid mb-1">
                                                <small>Two Drawers</small>
                                            </button>
                                            <button type="button" class="base-category-item text-center me-2" data-category="three-drawers">
                                                <img src="{{ asset('images/base-three-drawers.jpg') }}" alt="Three Drawers" class="img-fluid mb-1">
                                                <small>Three Drawers</small>
                                            </button>
                                            <button type="button" class="base-category-item text-center me-2" data-category="four-drawers">
                                                <img src="{{ asset('images/base-four-drawers.jpg') }}" alt="Four Drawers" class="img-fluid mb-1">
                                                <small>Four Drawers</small>
                                            </button>
                                            <button type="button" class="base-category-item text-center me-2" data-category="five-drawers">
                                                <img src="{{ asset('images/base-five-drawers.jpg') }}" alt="Five Drawers" class="img-fluid mb-1">
                                                <small>Five Drawers</small>
                                            </button>
                                            <button type="button" class="base-category-item text-center me-2" data-category="corner">
                                                <img src="{{ asset('images/base-corner.jpg') }}" alt="Corner" class="img-fluid mb-1">
                                                <small>Corner</small>
                                            </button>
                                            <button type="button" class="base-category-item text-center me-2" data-category="drawerline">
                                                <img src="{{ asset('images/base-drawerline.jpg') }}" alt="Drawerline" class="img-fluid mb-1">
                                                <small>Drawerline</small>
                                            </button>
                                            <button type="button" class="base-category-item text-center" data-category="highline">
                                                <img src="{{ asset('images/base-highline.jpg') }}" alt="Highline" class="img-fluid mb-1">
                                                <small>Highline</small>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bg-warning text-center py-2 small fw-bold mt-1">
                                        White Gloss J-Pull 160 Base Cabinet Flat Pack
                                    </div>
                                    <div class="row g-0 align-items-stretch">
                                        <div class="col-md-5 p-3 d-flex align-items-center justify-content-center" style="background-color: #f7f7f7;">
                                            <img src="{{ asset('images/base-cabinet-placeholder.jpg') }}" alt="Base Cabinet" class="img-fluid">
                                        </div>
                                        <div class="col-md-7 p-3">
                                            <h6 class="fw-bold mb-3">160 Base Cabinet</h6>
                                            <div class="row small">
                                                <div class="col-sm-6 mb-2">
                                                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                                                        <span class="text-muted">Product Code</span>
                                                        <span>PWF160BASE</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-2">
                                                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                                                        <span class="text-muted">Dimensions</span>
                                                        <span>720mm H x 600mm W x 560mm D</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-2">
                                                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                                                        <span class="text-muted">Style</span>
                                                        <span>J Pull</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-2">
                                                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                                                        <span class="text-muted">Colour</span>
                                                        <span>SuperGloss White</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-2">
                                                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                                                        <span class="text-muted">Assembly</span>
                                                        <span>Flat Pack</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mt-3 gap-2">
                                                <div class="h5 mb-0 text-danger">£89.55</div>
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary qty-minus">-</button>
                                                    <input type="text" class="form-control form-control-sm text-center mx-2 qty-input" value="0" style="width: 60px;">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary qty-plus">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-wall" class="cabinet-tab-pane" style="display: none;">
                                <div class="border p-4 text-center small text-muted">
                                    Wall cabinet options coming soon.
                                </div>
                            </div>

                            <div id="tab-tall" class="cabinet-tab-pane" style="display: none;">
                                <div class="border">
                                    <div class="bg-warning text-center py-2 small fw-bold">
                                        White Gloss J-Pull 300 Larder 1970mm High Cabinet Flat Pack
                                    </div>
                                    <div class="row g-0 align-items-stretch">
                                        <div class="col-md-5 p-3 d-flex align-items-center justify-content-center" style="background-color: #f7f7f7;">
                                            <img src="{{ asset('images/tall-cabinet-placeholder.jpg') }}" alt="Tall Cabinet" class="img-fluid">
                                        </div>
                                        <div class="col-md-7 p-3">
                                            <h6 class="fw-bold mb-3">300 Larder 1970mm High Cabinet</h6>
                                            <div class="row small">
                                                <div class="col-sm-6 mb-2">
                                                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                                                        <span class="text-muted">Product Code</span>
                                                        <span>PWFBL300LARDER</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-2">
                                                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                                                        <span class="text-muted">Dimensions</span>
                                                        <span>1970mm H x 300mm W x 560mm D</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-2">
                                                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                                                        <span class="text-muted">Style</span>
                                                        <span>J Pull</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-2">
                                                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                                                        <span class="text-muted">Colour</span>
                                                        <span>SuperGloss White</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-2">
                                                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                                                        <span class="text-muted">Assembly</span>
                                                        <span>Flat Pack</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mt-3 gap-2">
                                                <div class="h5 mb-0 text-danger">£245.33</div>
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary qty-minus">-</button>
                                                    <input type="text" class="form-control form-control-sm text-center mx-2 qty-input" value="0" style="width: 60px;">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary qty-plus">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-accessories" class="cabinet-tab-pane" style="display: none;">
                                <div class="border p-4 text-center small text-muted">
                                    Accessories will be listed here.
                                </div>
                            </div>
                            </div> <!-- /.cabinet-tab-content -->
                        </div> <!-- /#step-1 -->

                        <div id="step-2" class="step-pane" style="display: none;">
                            <div class="border p-4 bg-white">
                                <h5 class="mb-3">2. Internals</h5>
                                <p class="small text-muted mb-0">Internal storage options and accessories will be configured here.</p>
                            </div>
                        </div>

                        <div id="step-3" class="step-pane" style="display: none;">
                            <div class="border p-4 bg-white">
                                <h5 class="mb-3">3. Handles</h5>
                                <p class="small text-muted mb-0">Handle styles and finishes for your SuperGloss White kitchen.</p>
                            </div>
                        </div>

                        <div id="step-4" class="step-pane" style="display: none;">
                            <div class="border p-4 bg-white">
                                <h5 class="mb-3">4. Worktops / Upstands / Breakfast Bars</h5>
                                <p class="small text-muted mb-0">Select matching worktops, upstands and breakfast bars.</p>
                            </div>
                        </div>

                        <div id="step-5" class="step-pane" style="display: none;">
                            <div class="border p-4 bg-white">
                                <h5 class="mb-3">5. Sinks and Taps</h5>
                                <p class="small text-muted mb-0">Configure sinks and taps to complete your kitchen.</p>
                            </div>
                        </div>

                        <div id="step-6" class="step-pane" style="display: none;">
                            <div class="border p-4 bg-white">
                                <h5 class="mb-3">6. Appliances</h5>
                                <p class="small text-muted mb-0">Appliance options and packages will be shown here.</p>
                            </div>
                        </div>
                        
                        <div class="cabinet-steps-inline d-flex flex-wrap align-items-stretch mt-3">
                            <div class="cabinet-step-item active" data-step="#step-1">
                                <div class="cabinet-step-number">1</div>
                                <div class="cabinet-step-label">CABINETS AND PANELS</div>
                            </div>
                            <div class="cabinet-step-item" data-step="#step-2">
                                <div class="cabinet-step-number">2</div>
                                <div class="cabinet-step-label">INTERNALS</div>
                            </div>
                            <div class="cabinet-step-item" data-step="#step-3">
                                <div class="cabinet-step-number">3</div>
                                <div class="cabinet-step-label">HANDLES</div>
                            </div>
                            <div class="cabinet-step-item" data-step="#step-4">
                                <div class="cabinet-step-number">4</div>
                                <div class="cabinet-step-label">WORKTOPS / UPSTANDS / BREAKFAST BARS</div>
                            </div>
                            <div class="cabinet-step-item" data-step="#step-5">
                                <div class="cabinet-step-number">5</div>
                                <div class="cabinet-step-label">SINKS AND TAPS</div>
                            </div>
                            <div class="cabinet-step-item" data-step="#step-6">
                                <div class="cabinet-step-number">6</div>
                                <div class="cabinet-step-label">APPLIANCES</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="bg-white p-3 mb-3">
                        <h6 class="fw-bold mb-3">Order Overview</h6>
                        <div class="small mb-2 d-flex justify-content-between">
                            <span class="text-muted">Style</span>
                            <span>J Pull</span>
                        </div>
                        <div class="small mb-2 d-flex justify-content-between">
                            <span class="text-muted">Assembly</span>
                            <span>Flat Pack</span>
                        </div>
                        <div class="small mb-3 d-flex justify-content-between">
                            <span class="text-muted">Colour</span>
                            <span>SuperGloss White</span>
                        </div>
                        <div class="bg-warning text-center py-2 small fw-bold mb-2">
                            Kitchen Price
                        </div>
                        <p class="small text-muted mb-0">Price includes delivery costs. Surcharge may apply.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
.super-gloss-hero {
    background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);
}

.hero-content h1 {
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
}

.cabinet-steps-inline {
    background-color: #f5f5f5;
    padding: 8px 12px;
}

.cabinet-step-item {
    display: flex;
    align-items: center;
    width: 100%;
    margin-bottom: 6px;
    font-size: 12px;
    letter-spacing: 0.5px;
    cursor: pointer;
}

.cabinet-step-number {
    background-color: #f4b128;
    color: #000;
    font-weight: 700;
    width: 28px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 8px;
}

.cabinet-step-label {
    text-transform: uppercase;
    color: #111;
}

.cabinet-step-item.active .cabinet-step-number {
    background-color: #ffc107;
}

.cabinet-step-item.active .cabinet-step-label {
    font-weight: 600;
}

.base-category-item {
    background: transparent;
    border: 1px solid transparent;
    padding: 2px 4px;
}

.base-category-item:hover {
    border-color: #ccc;
}

.base-category-item.active {
    border-color: #f4b128;
    background-color: #ffffff;
}

.base-category-item img {
    max-width: 60px;
}

.base-category-item small {
    font-size: 11px;
}

.animated {
    animation-duration: 1s;
    animation-fill-mode: both;
}

.fadeInUp {
    animation-name: fadeInUp;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translate3d(0, 20px, 0);
    }
    to {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}

@media (max-width: 768px) {
    .super-gloss-hero {
        height: 60vh;
        min-height: 350px;
    }
    
    .hero-content h1 {
        font-size: 2.5rem;
    }
    
    .hero-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .hero-buttons .btn {
        width: 250px;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabButtons = document.querySelectorAll('.cabinet-tabs button[data-target]');
    const tabPanes = document.querySelectorAll('.cabinet-tab-pane');
    const stepItems = document.querySelectorAll('.cabinet-step-item[data-step]');
    const stepPanes = document.querySelectorAll('.step-pane');
    const baseCategoryItems = document.querySelectorAll('.base-category-item');

    tabButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const target = this.getAttribute('data-target');

            tabButtons.forEach(function (b) { b.classList.remove('active'); });
            tabPanes.forEach(function (pane) {
                if ('#' + pane.id === target) {
                    pane.style.display = '';
                    pane.classList.add('active');
                } else {
                    pane.style.display = 'none';
                    pane.classList.remove('active');
                }
            });

            // Update button visual styles for active/inactive
            tabButtons.forEach(function (b) {
                b.classList.remove('btn-secondary', 'text-white');
                if (!b.classList.contains('btn-outline-secondary')) {
                    b.classList.add('btn-outline-secondary');
                }
            });

            this.classList.add('active');
            this.classList.remove('btn-outline-secondary');
            this.classList.add('btn-secondary', 'text-white');
        });
    });

    // Step switching (1–6) via bottom links
    stepItems.forEach(function (item) {
        item.addEventListener('click', function () {
            const target = this.getAttribute('data-step');
            const targetPane = document.querySelector(target);
            if (!targetPane) return;

            // Hide all step panes
            stepPanes.forEach(function (pane) {
                pane.style.display = 'none';
                pane.classList.remove('active');
            });

            // Show selected
            targetPane.style.display = '';
            targetPane.classList.add('active');

            // Update active state on step items
            stepItems.forEach(function (s) { s.classList.remove('active'); });
            this.classList.add('active');
        });
    });

    // Base cabinet category hover/click active state
    baseCategoryItems.forEach(function (item) {
        item.addEventListener('click', function () {
            baseCategoryItems.forEach(function (i) { i.classList.remove('active'); });
            this.classList.add('active');
            // Future: change content dynamically based on data-category
        });
    });

    document.querySelectorAll('.cabinet-configurator .qty-minus').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const input = this.parentElement.querySelector('.qty-input');
            const current = parseInt(input.value || '0', 10) || 0;
            input.value = Math.max(0, current - 1);
        });
    });

    document.querySelectorAll('.cabinet-configurator .qty-plus').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const input = this.parentElement.querySelector('.qty-input');
            const current = parseInt(input.value || '0', 10) || 0;
            input.value = current + 1;
        });
    });
});
</script>
@endpush
