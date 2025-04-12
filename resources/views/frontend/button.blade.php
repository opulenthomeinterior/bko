<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .btn-yellow
        {
            background-color: #ffc107 !important;
            border: none !important;
            border-radius: 50px !important;
            padding: 12px 20px !important;
            font-weight: 500 !important;
            width: 100%;
            margin-top: 10px !important;
            color: #333 !important;
            box-shadow: 0 4px 8px rgba(255, 193, 7, 0.5);
            transition: all 0.3s;
        
        }
        .btn-yellow:hover
        {
            background-color: transparent !important;
            border: 1px solid #ffb300 !important;
            color: #333 !important;
            
        }
    </style>
</head>
<body>
    <button type="{{ $type }}" class="btn btn-yellow">{{$text}}</button>
</body>
</html>