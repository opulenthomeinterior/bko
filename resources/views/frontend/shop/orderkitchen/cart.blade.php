<x-guest-layout>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
         <style>
        .header-row {
            background-color: #ffbb33;
            color: #000;
            font-weight: bold;
        }
        /* .product-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
        } */
        .quantity-input {
            width: 50px;
            text-align: center;
        }
        .remove-btn {
            color: #aaa;
            font-size: 1.5rem;
            cursor: pointer;
        }
        .btn-quantity {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            width: 40px;
        }
    
    </style>
    </head>
    <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop') }}" class="text-uppercase">Shop</a></li>
                <li class="breadcrumb-item"><a class="text-uppercase">Cart</a></li>
            </ol>
        </nav>
    </section>
    <div class = "container-fluid">
        <div class="row bg-light py-5">
            <div class="col-12">
                <h1 class="text-center mb-4">YOUR CART</h1>
                <h3 class="text-center mb-4 text-danger" id="emptyCart"></h3>
                
        
                <div class="d-flex justify-content-center mb-4">
                    <a href="https://bkonline.uk/shop" class="btn btn-warning px-4 text-black">
                    SHOP MORE <i class="fas fa-shopping-cart ms-2 text-black"></i>
                    </a>
                </div>
            </div>
            {{-- <div class="col-12">
                <h1 class="fs-1 text-dark text-uppercase fw-bolder text-center">
                    Your Cart
                </h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-warning">
                    Shop more
                </button>
            </div> --}}
        </div>
    

    <section class="container px-lg-5 px-md-3 px-3 py-3" id="cartContainer">
        <div class="row">
            <div class="col-12 col-lg-8 p-0">
                <div class="card border-primary p-0">
                    <div class="card-body p-0">
                        <!-- <h4 class="fw-bold text-dark ">Cart Summary</h4> -->   
                         <div class="table-responsive">
                            <table class="table table-card">
                                <thead class="bg-warning text-dark">
                                    <tr class="header-row">
                                    {{-- <th class="bg-warning text-dark">&nbsp;</th> --}}
                                    <th class="bg-warning text-dark ps-5">Product</th>
                                    <th class="bg-warning text-dark text-center">Price</th>
                                    <th class="bg-warning text-dark text-center">Qty</th>
                                    <th class="text-end bg-warning text-dark">SubTotal</th>
                                    </tr>
                                </thead>
                                <tbody id="productCartTableBody">
                                    <td colspan="5" class="text-center py-5">No items in cart</td>
                                </tbody>
                            </table>
                         </div>
                    </div>
                </div>
            </div>


            {{-- <div class="col-lg-4 mt-4 p-4 mb-3 pb-3 border border-primary rounded">
                <h4 class="fw-bold text-dark ">Order Summary</h4>
                <hr class="mx-n4">
                <div class="bg-white py-2">
                    <div class="row py-2 ">
                        <div class="col-6">
                            <span class="">Cart Total</span>
                        </div>
                        <div class="col-6">
                            <h6 class="text-end" id="cartTotalAmount">£0</h6>
                        </div>
                    </div>
                    <div id="add_discount_details">

                    </div>
                    <hr class="mx-n4">
                    <div class="row py-2">
                        <div class="col-6">
                            <h6 class="fw-bold">Total Price</h6>
                        </div>
                        <div class="col-6">
                            <h6 class="text-end" id="cartTotalAmountWithVAT">£0</h6>
                        </div>
                    </div>
                    <hr class="mx-n4">
                    <div class="row py-4">
                        <div class="col-lg-12 text-lg-center text-md-center text-center">
                            <a href="{{ route('checkout') }}" class="btn btn-md btn-primary rounded-5">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div> --}}

             <!-- Order Summary -->
             <div class="col-lg-4">
                <div class="card mb-3" id="orderSummaryCard">
                    <div class="card-header bg-white">
                        <h5 class="mb-0 fw-bold text-primary">ORDER SUMMARY</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Items</span>
                            <span id="itemsCount">0</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Sub Total</span>
                            <span id="cartTotalAmount">£0</span>
                        </div>
                        
                        <hr>
                        <div class="d-flex justify-content-between fw-bold">
                            <span>Total</span>
                            <span id="cartTotalAmountWithVAT">£0</span>
                        </div>
                    </div>
                </div>
           
                <button class="btn btn-primary w-100 py-3">PROCEED TO CHECKOUT</button>
                
                <div class="d-flex justify-content-end mt-3">
                    {{-- <a style"hover: cursor:pointer"  id="clearShoppingCart" class="text-decoration-none text-danger" onClick="clearShoppingCart">Clear shopping cart</a> --}}
                    <button  id="clearShoppingCart" class="border-0 text-danger bg-white">Clear Shopping Cart</button>
                </div>


            {{-- <div class="col-lg-8">
                
                <div class="row py-2">
                    <div class="col-sm-4">
                        < Back
                    </div>
                    <div class="col-sm-4">
                        <div class="row g-3 mb-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-sm-end justify-content-center" style="position: relative;">
                                    <input type="text" class="form-control" id="promoCode"
                                        placeholder="Enter Promo Code" aria-label="Enter Promo Code"
                                        style="width: 200px; border-radius: 50px">
                                    <button type="button" class="btn btn-warning" style="width: 100px; border-radius: 50px"
                                        id="addPromoCode">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 text-end">
                        Clear Shopping Cart
                    </div>
                </div>
            </div> --}}

            

        </div>
        <div class="row">
            <div class="col-lg-8 p-0">
                    <!-- Back button and Coupon -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <a href="#" class="btn btn-outline-primary text-dark" >
                            <i class="fas fa-arrow-left me-2"></i> Back
                        </a>
                        
                        <div class="d-flex">
                            <input type="text" class="form-control border-primary me-2" placeholder="Coupon code">
                            <button class="btn btn-warning text-dark">APPLY COUPON</button>
                        </div>
                    </div>
            </div>
        </div>
    </section>


    <section class="container px-lg-5 px-md-3 px-3 py-lg-5 py-3">
        <div class="row">
            <div class="col-12">
                <div class="payment-logos d-inline-block position-relative px-4 py-3" style="border: 1px solid black">
                    <small class="fw-bold text-uppercase position-absolute bg-white" style="top:-7px;left:15px">Transactions Secured By</small>
                    <img width="100" height="72" class="logo lazyloaded" alt="Payments verified through Opayo" src="https://bkonline.uk/public/images/payments/opayo.png">
                    <img width="100" height="72" class="logo lazyloaded" alt="Visa Payments Accepted" src="https://bkonline.uk/public/images/payments/visa.png">
                    <img width="100" height="72" class="logo lazyloaded" alt="Mastercard Payments Accepted" src="https://bkonline.uk/public/images/payments/mastercard.png">
                    <img width="100" height="72" class="logo lazyloaded" alt="Maestro Payments Accepted" src="https://bkonline.uk/public/images/payments/maestro.png">
                    <img width="100" height="72" class="logo lazyloaded" alt="Payments accepted through PayPal" src="https://bkonline.uk/public/images/payments/paypal.png">
                    <img width="100" height="72" class="logo lazyloaded" alt="Payments accepted through Klarna" src="https://bkonline.uk/public/images/payments/klarna.png">
                </div>

            </div>
        </div>
    </section>


    <style>
        .modal {
            --in-modal-width: 80% !important;
        }
    </style>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog w-100" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Compare Products</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="row" id="cart_Product">
                                {{-- <div class="col-lg-12 mb-3">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <figure>
                                                            <img class="product-image px-0"
                                                                src="{{ asset('images/no-image-available.jpg') }}"
                                                                alt="Card image cap">
                                                        </figure>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="text-start">
                                                            <a href=""
                                                                class="text-start text-decoration-underline fs-5 fw-bold">
                                                                new product
                                                            </a>
                                                            <p class="py-lg-3 py-2">
                                                                <small class="fw-bold text-start">23x42x64mm</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="container-fluid">
                                                            <div class="row justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="fs-5 fw-bold mt-lg-2">£7845</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-4 p-0 d-md-flex d-none">
                                                                    <p
                                                                        class="category-text text-start text-uppercase m-0 pt-1">
                                                                        <small>Style</small>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                    <p class="category-value fw-semibold py-1 mb-2">
                                                                        <small>Jpull</small>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-4 p-0 d-md-flex d-none">
                                                                    <p
                                                                        class="category-text text-start text-uppercase m-0 pt-1">
                                                                        <small>Colour</small>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                    <p class="category-value fw-semibold py-1 mb-2">
                                                                        <small>Cashmere ultra white</small>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-4 p-0 d-md-flex d-none">
                                                                    <p
                                                                        class="category-text text-start text-uppercase m-0 pt-1">
                                                                        <small>Assembly</small>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                    <p class="category-value fw-semibold py-1 mb-2">
                                                                        <small>Rigid</small>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-8" style="height: 400px; overflow-y:auto">
                            <div class="row" id="compareProducts">
                                {{-- <div class="col-lg-6 mb-3">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <figure>
                                                            <img class="product-image px-0"
                                                                src="{{ asset('images/no-image-available.jpg') }}"
                                                                alt="Card image cap">
                                                        </figure>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="text-start">
                                                            <a href=""
                                                                class="text-start text-decoration-underline fs-5 fw-bold">
                                                                new product
                                                            </a>
                                                            <p class="py-lg-3 py-2">
                                                                <small class="fw-bold text-start">23x42x64mm</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="container-fluid">
                                                            <div class="row justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="fs-5 fw-bold mt-lg-2">£7845</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-4 p-0 d-md-flex d-none">
                                                                    <p
                                                                        class="category-text text-start text-uppercase m-0 pt-1">
                                                                        <small>Style</small>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                    <p class="category-value fw-semibold py-1 mb-2">
                                                                        <small>Jpull</small>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-4 p-0 d-md-flex d-none">
                                                                    <p
                                                                        class="category-text text-start text-uppercase m-0 pt-1">
                                                                        <small>Colour</small>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                    <p class="category-value fw-semibold py-1 mb-2">
                                                                        <small>Cashmere ultra white</small>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-4 p-0 d-md-flex d-none">
                                                                    <p
                                                                        class="category-text text-start text-uppercase m-0 pt-1">
                                                                        <small>Assembly</small>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-8 col-sm-12 p-0 text-center">
                                                                    <p class="category-value fw-semibold py-1 mb-2">
                                                                        <small>Rigid</small>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark rounded-0 hideCompareModel" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cart-items-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog w-100" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Change Styles</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table">
                                <thead>
                                    <th>Item</th>
                                </thead>
                                <tbody id="changeStyleTableBody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark rounded-0 hideCompareModel" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                var check_code_route = "{{ route('apply.promocode') }}";
    
                $(document).on('click', '#addPromoCode', function() {
                    var promoCode = $('#promoCode').val();
    
                    let products = localStorage.getItem('bko_cart');
                    if (!products) {
                        return;
                    }
                    products = JSON.parse(products);
                    let totalAmount = 0;
                    products.forEach(product => {
                        totalAmount += product.quantity * product.price;
                    });
    
                    $.ajax({
                        url: "{{ route('apply.promocode') }}",
                        type: "POST",
                        data: {
                            code: promoCode
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                if (response.result) {
                                    var code = response.result.id;
                                    var name = response.result.name;
                                    var discount = parseFloat(response.result.percent_off);
    
                                    // Save discount code in localStorage
                                    localStorage.setItem('discountCode', code);
    
                                    var discountAmount = (totalAmount * discount) / 100;
    
                                    $('#add_discount_details').html(`
                                        <div class="row py-2">
                                            <div class="col-6">
                                                <h6 class="fw-bold">Discount Percentage</h6>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-end">${discount}%</h6>
                                            </div>
                                        </div>
                                        <div class="row py-2">
                                            <div class="col-6">
                                                <h6 class="fw-bold">Discount (${name})</h6>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-end">-£${discountAmount.toFixed(2)}</h6>
                                            </div>
                                        </div>
                                    `);
    
                                    // Update total price after discount
                                    var cartTotalAmountWithVAT = totalAmount - discountAmount;
                                    $('#cartTotalAmountWithVAT').text(`£${cartTotalAmountWithVAT.toFixed(2)}`);
    
                                }
                            } else {
                                $('#add_discount_details').html(`
                                    <div class="row py-2">
                                        <div class="col-12">
                                            <h6 class="text-danger text-end">Invalid promo code</h6>
                                        </div>
                                    </div>
                                `);
    
                                localStorage.removeItem('discountCode');
    
                                // Update total price after discount
                                var cartTotalAmountWithVAT = totalAmount;
                                $('#cartTotalAmountWithVAT').text(`£${cartTotalAmountWithVAT.toFixed(2)}`);
    
                            }
                        }
                    });
                });
            });

        </script>
    @endpush

</x-guest-layout>
