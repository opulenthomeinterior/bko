<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T9TPPJK3');</script>
    <!-- End Google Tag Manager -->

    <title>Thank You</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right,rgb(210, 217, 255),rgb(199, 219, 88));
            color: white;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .header, .footer {
            position: fixed;
            width: 100%;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            padding: 10px 0;
        }
        .header { top: 0; }
        .footer { bottom: 0; color: black; }
        .thank-you {
            font-size: 70px;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            color: black;
        }
        .thank-you-timer {
            color: black;
        }
    </style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9TPPJK3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <a href="https://bkonline.uk" class="header">
        <img src="https://bkonline.uk/public/images/bko-black-logo.png" height="150px" width="150px" alt="">
    </a>
    <div class="thank-you">Thank You!</div>
    <div class="thank-you-timer">Redirecting in 5 seconds...</div>
    <a href="https://bkonline.uk" class="footer">Buy Kitchen Online</a>
    <script>
        // countdown function
        var countdown = 5; // Change this value to your desired countdown time in seconds.
        var interval = setInterval(function() {
            document.querySelector('.thank-you-timer').textContent = "Redirecting in " + countdown + " seconds...";
            countdown--;
            if (countdown < 0) {
                clearInterval(interval);
                document.querySelector('.thank-you-timer').textContent = "Redirecting...";
            }
        }, 1000); // Change this value to your desired interval in milliseconds. For example, 1000 milliseconds = 1 second.
        setTimeout(function() {
            window.location.href = "https://bkonline.uk";
        }, 5000); // Change this value to your desired delay in milliseconds. For example, 5000 milliseconds = 5 seconds.
    </script>
</body>
</html>
