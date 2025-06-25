{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Kitchen Online - Welcome Email</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f1e8 0%, #e8dcc0 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .header {
            padding: 30px;
            border-bottom: 2px solid #e0e0e0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            object-fit: cover;
        }

        .contact-info {
            text-align: right;
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }

        .main-content {
            padding: 40px 30px;
        }

        .welcome-title {
            font-size: 28px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
        }

        .greeting {
            font-size: 16px;
            color: #2c3e50;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .content-text {
            font-size: 15px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .cta-button {
            display: block;
            width: 300px;
            margin: 40px auto;
            padding: 15px 30px;
            background: #ffc107;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 16px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 193, 7, 0.4);
            background: #e6ac00;
        }

        .kitchen-image {
            width: 100%;
            height: 300px;
            border-radius: 15px;
            margin: 30px 0;
            object-fit: cover;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .signature {
            margin-top: 40px;
            color: #666;
            font-size: 15px;
        }

        .signature-name {
            font-weight: 600;
            color: #2c3e50;
            margin-top: 5px;
        }

        .signature-title {
            color: #888;
            font-size: 14px;
        }

        .footer {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            padding: 30px;
            color: white;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .social-section h4 {
            margin-bottom: 15px;
            font-size: 16px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-bottom: 10px;
        }

        .social-link {
            width: 35px;
            height: 35px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 16px;
        }

        .social-link:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .social-link i {
            font-size: 16px;
        }

        .website {
            font-size: 14px;
            color: #bdc3c7;
        }

        .company-info {
            text-align: right;
        }

        .company-name {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .company-details {
            font-size: 14px;
            color: #bdc3c7;
            line-height: 1.5;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .subscription-info {
            font-size: 13px;
            color: #bdc3c7;
        }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-link {
            color: #bdc3c7;
            text-decoration: none;
            font-size: 13px;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: white;
        }

        .footer-legal {
            width: 100%;
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
            color: #95a5a6;
        }

        .unsubscribe {
            color: #f4a261;
            text-decoration: none;
        }

        .unsubscribe:hover {
            text-decoration: underline;
        }

        @media (max-width: 650px) {
            .email-container {
                margin: 10px;
                border-radius: 15px;
            }

            .header {
                padding: 20px;
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }

            .contact-info {
                text-align: center;
            }

            .main-content {
                padding: 30px 20px;
            }

            .welcome-title {
                font-size: 24px;
            }

            .cta-button {
                width: 100%;
            }

            .footer-content {
                flex-direction: column;
                gap: 20px;
            }

            .company-info {
                text-align: left;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <div class="logo">
                <img src="https://bkonline.uk/public/images/bko-black-logo.png" alt="Buy Kitchen Online Logo" class="logo-icon">
            </div>
            <div class="contact-info">
                <div>020 805 05605</div>
                <div>admin@bkonline.uk</div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1 class="welcome-title">Welcome to Buy Kitchen Online</h1>
            
            <div class="greeting">Hey BKO User,</div>
            
            <div class="content-text">
                @if(!empty($data['message'])){!! $data['message'] !!}@endif
            </div>

            <a href="https://bkonline.uk/help-and-guides/design-service" class="cta-button">Book Your Consultation Now!</a>

            <img src="https://bkonline.uk/public/imgs/products/email-image.png" alt="Modern Kitchen Design" class="kitchen-image">

            <div class="signature">
                <div>Sincerely,</div>
                <div class="signature-name">Buy Kitchen Online Team</div>
                <div class="signature-title">Business Owner</div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-content">
                <div class="social-section">
                    <h4>Follow Us at:</h4>
                    <div class="social-links">
                        <a href="#" class="social-link" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link" title="Pinterest">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#" class="social-link" title="TikTok">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                    <div class="website">www.bkonline.uk</div>
                </div>
                
                <div class="company-info">
                    <div class="company-name">BUY KITCHEN ONLINE</div>
                    <div class="company-details">
                        <div>020 805 05605</div>
                        <div>admin@bkonline.uk</div>
                        <div>44 Gillender St, Aberfeldy Village,</div>
                        <div>London E14 6RP, United Kingdom</div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="subscription-info">
                    You are receiving this email<br>
                    because you are subscribed.
                </div>
                
                <div class="footer-links">
                    <a href="#" class="footer-link">HOME</a>
                    <a href="#" class="footer-link">FAQS</a>
                    <a href="#" class="footer-link">PRIVACY</a>
                </div>

                <div class="footer-legal">
                    Copyright© 2025. Bkonline.uk. All Rights reserved.<br>
                    If you prefer not to receive these emails, You can <a href="#" class="unsubscribe">Unsubscribe here</a>.
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}




<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Welcome to Buy Kitchen Online</title>
  </head>
  <body style="margin:0; padding:0; background-color:#f5f1e8; font-family:Arial, sans-serif;">
    <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#f5f1e8" style="padding:20px;">
      <tr>
        <td>
          <table cellpadding="0" cellspacing="0" width="600" align="center" bgcolor="#ffffff" style="border-radius:10px; overflow:hidden;">
            
            <!-- Header -->
            <tr>
              <td style="padding:20px; border-bottom:1px solid #e0e0e0;">
                <table width="100%">
                  <tr>
                    <td width="60">
                      <img src="https://bkonline.uk/public/images/bko-black-logo.png" width="60" alt="Logo" style="border-radius:12px; display:block;" />
                    </td>
                    <td align="right" style="font-size:14px; color:#666;">
                      020 805 05605<br />
                      admin@bkonline.uk
                    </td>
                  </tr>
                </table>
              </td>
            </tr>

            <!-- Main Content -->
            <tr>
              <td style="padding:30px;">
                <h1 style="font-size:24px; color:#2c3e50; text-align:center; margin-bottom:20px;">Welcome to Buy Kitchen Online</h1>
                
                <p style="font-size:16px; color:#2c3e50; font-weight:bold;">Hey BKO User,</p>
                
                <p style="font-size:14px; color:#555555; line-height:1.6;">
                  @if(!empty($data['message'])){!! $data['message'] !!}@endif
                </p>

                <div style="text-align:center; margin:30px 0;">
                  <a href="https://bkonline.uk/help-and-guides/design-service" 
                     style="display:inline-block; background-color:#ffc107; color:#ffffff; text-decoration:none; padding:12px 25px; border-radius:30px; font-weight:bold; font-size:15px;">
                    Book Your Consultation Now!
                  </a>
                </div>

                <img src="https://bkonline.uk/public/imgs/products/email-image.png" width="100%" height="auto" alt="Modern Kitchen Design" style="border-radius:10px; display:block;" />

                <p style="margin-top:30px; font-size:14px; color:#666;">
                  Sincerely,<br />
                  <strong style="color:#2c3e50;">Buy Kitchen Online Team</strong><br />
                  <span style="font-size:13px; color:#888;">Business Owner</span>
                </p>
              </td>
            </tr>

            <!-- Footer -->
            <tr>
              <td style="background:#2c3e50; padding:30px; color:white;">
                <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                    <!-- Social -->
                    <td width="50%" style="vertical-align:top;">
                      <p style="font-size:15px; margin:0 0 10px;">Follow Us at:</p>
                      <p style="margin:0;">
                        Facebook | Instagram | Pinterest | TikTok
                      </p>
                      <p style="margin:10px 0 0; font-size:13px; color:#bdc3c7;">www.bkonline.uk</p>
                    </td>
                    <!-- Contact -->
                    <td width="50%" style="text-align:right; vertical-align:top;">
                      <p style="margin:0; font-weight:bold;">BUY KITCHEN ONLINE</p>
                      <p style="margin:5px 0 0; font-size:13px; color:#bdc3c7;">
                        020 805 05605<br />
                        admin@bkonline.uk<br />
                        44 Gillender St, Aberfeldy Village,<br />
                        London E14 6RP, United Kingdom
                      </p>
                    </td>
                  </tr>
                </table>

                <!-- Footer bottom -->
                <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:30px; border-top:1px solid rgba(255,255,255,0.2); padding-top:15px;">
                  <tr>
                    <td align="left" style="font-size:12px; color:#bdc3c7;">
                      You are receiving this email<br />
                      because you are subscribed.
                    </td>
                    <td align="right">
                      <a href="#" style="color:#bdc3c7; font-size:12px; text-decoration:none; margin-right:15px;">HOME</a>
                      <a href="#" style="color:#bdc3c7; font-size:12px; text-decoration:none; margin-right:15px;">FAQS</a>
                      <a href="#" style="color:#bdc3c7; font-size:12px; text-decoration:none;">PRIVACY</a>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center" style="font-size:11px; color:#95a5a6; padding-top:10px;">
                      Copyright © 2025. Bkonline.uk. All Rights reserved.<br />
                      If you prefer not to receive these emails, <a href="#" style="color:#f4a261; text-decoration:none;">Unsubscribe here</a>.
                    </td>
                  </tr>
                </table>
              </td>
            </tr>

          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
