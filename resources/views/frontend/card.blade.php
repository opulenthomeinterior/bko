<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root
        {
            --main-color: #ffc107;
            --main-light: #ffc107da;
            --main-dark: #4f46e5;
            --t-dark: #1e293b;
            --t-light: #64748b;
            --bs-gradient: linear-gradient(135deg,#f8fafc 0%, #f1f5f9 100%);
            --c-card-bg: rgba(255,255,255,0.8);
            --c-card-shadow:0 10px 30px rgba (0,0,0,0.4);
            --c-hover-shadow: 0 20px 40px rgba(255, 193, 7,0.2);

        }
        .custom-card
        {
            background:var(--c-card-bg);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            box-shadow: var(--c-card-shadow);
            padding: 40px 35px;
            height: 100%;
            position: relative;
            z-index: 1;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.23,1,0.32,1);
            border: 1px solid rgba(255, 255, 255, 0.6);
        }
        .custom-card::before
        {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg,var(--main-color) 0%, var(--main-dark 100%));
            z-index: -1;
            opacity: 0;
            transition: opacity 0.5s cubic-bezier(0.23,1,0.32,1);
        }
        .custom-card::after
        {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            right: -100px;
            bottom: -100px;
            opacity: 0;
            transition: all 0.5s cubic-bezier(0.23,1,0.32,1);
        }
        .custom-card:hover
        {
            transform: translateY(-15px) scale(1.02);
            box-shadow: var(--c-hover-shadow);
            border-color: var(--main-light);
            
        }
        .custom-card:hover::before
        {
            opacity: 1;
        }
        .custom-card:hover::after
        {
            opacity: 0.3;
            transform: scale(1.5);
        }
        .custom-card-description
        {
            font-size:14px;
        }
        /* .custom-card:hover .custom-icon, 
        .custom-card:hover, .number, 

        .custom-card:hover .custom-card-title, 
        .custom-card:hover .custom-card-description
        {
            color: white;
        } */
        .custom-card:hover .custom-icon
        {
            transform: translateY(-5px) scale(1.1);
            /* background: rgba(255, 255, 255, 0.2); */
            background: rgba(255, 193, 7, 0.5);
        }
        .custom-card:hover .custom-icon 
        {
            color: black;
        }
        .icon-wrapper
        {
            position: relative;
            margin-bottom: 25px;
            display: inline-block;
        }
        .custom-icon
        {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 70px;
            height: 70px;
            background: rgba(99, 102, 241, 0.1);
            border-radius: 28px;
            font-size: 28px;
            color: var(--main-color);
            transition: all 0.5s cubic-bezier(0.23,1,0.32,1);
        }
        .number
        {
            position: absolute;
            top: -10px;
            right: -10px;
            font-size: 16px;
            font-weight: 700;
            color: var(--main-color);
            background-color: white;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.5s cubic-bezier(0.23,1,0.32,1);

        }
    </style>
</head>
<body>
    <div class="custom-card">
        <div class="icon-wrapper">
            <div class="custom-icon">
                <i class= "{{ $icon_class }}"></i>
            </div>

            @if(!empty($number))
    <div class="number">{{ $number }}</div>
@endif

            {{-- <div class="number">{{$number}}</div> --}}
        </div>
        <h2 class="custom-card-title text-black">{{ $title }}</h2>
        <p class="custom-card-description">{{$description}}</p>
        
        
    </div>
</body>
</html>