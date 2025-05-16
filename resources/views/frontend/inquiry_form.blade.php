<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* body
        {
            background: linear-gradient(135deg,#f5f7fa,0%,#e0e4e9,100%);
            
        } */

        .form-container
        {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0,1);
            /* max-width: 500px; */
            width: 100%;
        }
        .form-title
        {
            font-weight: 600;
            margin-bottom: 5px;
            color:#333;
        }
        .form-subtitle
        {
            color:#6c757d;
            margin-bottom: 30px;
        }
        .input-group
        {
            margin-bottom: 20px;
        }
        .input-group-text
        {
            background-color: transparent !important;
            border-right: none !important;
            border-top-left-radius: 50px !important;
            border-bottom-left-radius: 50px !important;
            border: 1px solid #e0e4e9 !important;
            color: #6c757d !important;
        }
        .inquiry-form-control
        {
            border-left: none !important;
            border-radius: 0 50px 50px 0 !important;
            padding: 12px 20px !important;
            border: 1px solid #e0e4e9 !important;

        }
        .inquiry-form-control:focus, .input-group-text:focus
        {
            box-shadow: none !important; 
            border-color: #e0e4e9 !important;
            /* border-color: #ffc107 !important; */
        }
        .text-area-container .form-control
        {
            border-radius: 20px !important;
            border: 1px solid #e0e4e9 !important;
            padding: 12px 20px !important;
            width: 100%;
        }
        
        .call-us
        {
            width: 50%;
            padding: 12px;
            /* border-radius: 50px; */
            /* border: 1px solid #e0e4e9; */
            background-color: #fff;

        }
        .call-us-logo
        {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h5 class="form-title text-center text-uppercase fs-mob">for free survey and quote <span style="color:#ffc107 ;">call us now!</span></h5>
        <!-- <p class="form-subtitle text-center">020 805 05605</p> -->
        <a href="tel:02080505605" class="btn btn-yellow fs-mob" style="font-weight: 600;">
        
                <i class="fas fa-phone pe-1"></i>
            020 805 05605
        </a>
        <h6 class="form-title text-center my-2 fs-mob">OR</h6>
        <hr class="border border-dark">
        <h5 class="fomr-title mb-3 text-center fs-mob text-black">Book a free consultation now!</h5>
        
        <form method="POST" action="{{ route('contact_us_inquiry') }}">
            @csrf
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fas fa-user fs-mob-input"></i>
                </span>
                <input type="text" class="form-control inquiry-form-control fs-mob-input" placeholder="Enter your name" name="name" id="name" required >
            </div>

            <div class="input-group">
                <span class="input-group-text">
                    <i class="fas fa-envelope fs-mob-input"></i>
                </span>
                <input type="email" class="form-control inquiry-form-control fs-mob-input" placeholder="Enter your email" name="email" id="email" required>
            </div>

            <div class="input-group">
                <span class="input-group-text">
                    <i class="fas fa-phone fs-mob-input"></i>
                </span>
                <input type="number" class="form-control inquiry-form-control fs-mob-input" placeholder="Enter your phone number" name="phone" id="phone" required>
            </div>

            <!-- <div class="call-us">
                <i class="fas fa-phone call-us-logo"></i>
                Call US AT
            </div> -->
            <div class="input-group">
                
                
                <span  onclick="document.getElementById('date').showPicker()" class="input-group-text" style="background-color: #ffc107 !important; color: black !important;">
                    <i class="fas fa-calendar-alt me-3 fs-mob-input"></i>
                    Call US AT
                </span>
                <input style="cursor:pointer" onclick="document.getElementById('date').showPicker()" id="date" type="datetime-local" class="form-control inquiry-form-control fs-mob-input" placeholder="Call US AT" name="call_time">
            </div>

            <div class="input-group text-area-container ">
                <textarea class="fs-mob-input form-control inquiry-form-control" rows="1" name="message" placeholder="Enter your message" required></textarea>
            </div>

             @include('frontend.button', ['type' =>'submit', 'text'=>'Submit'])
        </form>
    </div>
</body>
</html>