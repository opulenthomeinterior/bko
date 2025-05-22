<x-guest-layout>



 
<head>
   
   <style>
        :root {
            --primary-color: #ffc107;
            --secondary-color: #fff9e6;
            --text-color: #333;
            --border-color: #ffe066;
        }

        body {
            /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color); */
            background-color: #fff;
            color:black;
        }
        h1,h2,h3,h4,p
        {
            color:black;
        }

        .header-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, #e6ac00 100%);
            color: #333;
            padding: 60px 0;
            text-align: center;
        }

        .header-section h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            color:black;
        }
       

        .header-section p {
            font-size: 1.2rem;
            opacity: 0.8;
            max-width: 600px;
            margin: 0 auto;
            color:black
        }

        .content-section {
            padding: 60px 0;
        }

        .policy-section {
            margin-bottom: 50px;
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
            border: 1px solid var(--border-color);
        }

        .policy-section h2 {
            /* color: var(--primary-color); */
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 3px solid var(--primary-color);
        }


        .policy-section h3 {
            /* color: var(--primary-color); */
            font-weight: 600;
            font-size: 1.4rem;
            margin-top: 30px;
            margin-bottom: 20px;
        }


        


        .policy-section h4 {
            /* color: #495057; */
            font-weight: 600;
            font-size: 1.2rem;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .policy-section p {
            margin-bottom: 15px;
            font-size: 1rem;
            line-height: 1.7;
        }


        

        .policy-section ul {
            margin-bottom: 20px;
            padding-left: 0;
        }

        .policy-section li {
            list-style: none;
            margin-bottom: 12px;
            padding-left: 25px;
            position: relative;
            font-size: 1rem;
            line-height: 1.6;
        }

        .policy-section li:before {
            content: "•";
            color: var(--primary-color);
            font-weight: bold;
            position: absolute;
            left: 0;
            font-size: 1.2rem;
        }

        .table-responsive {
            margin: 25px 0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background-color: var(--primary-color);
            color: #333;
            font-weight: 600;
            border: none;
            padding: 15px;
        }

        .table tbody td {
            padding: 15px;
            border-color: var(--border-color);
            vertical-align: middle;
        }

        .table tbody tr:nth-child(even) {
            background-color: var(--secondary-color);
        }

        .rights-list {
            background: var(--secondary-color);
            border-radius: 8px;
            padding: 25px;
            margin: 20px 0;
        }

        .rights-list li {
            margin-bottom: 10px;
            padding-left: 35px;
        }

        .rights-list li:before {
            content: "✅";
            position: absolute;
            left: 0;
            font-size: 1.1rem;
        }

        .contact-section {
            background: var(--secondary-color);
            border-radius: 12px;
            padding: 40px;
            text-align: center;
        }

        .contact-section h2 {
            color: var(--primary-color);
            margin-bottom: 30px;
        }

        .contact-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.1rem;
        }

        .contact-item i {
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        .highlight-box {
            background: linear-gradient(135deg, #fff9e6 0%, #fff3b3 100%);
            border-left: 4px solid var(--primary-color);
            padding: 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }

        .website-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .website-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .header-section h1 {
                font-size: 2.2rem;
            }
            
            .header-section p {
                font-size: 1rem;
            }
            
            .policy-section {
                padding: 25px;
                margin-bottom: 30px;
            }
            
            .policy-section h2 {
                font-size: 1.5rem;
            }
            
            .contact-info {
                flex-direction: column;
                align-items: center;
            }
            
            .table-responsive {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .header-section {
                padding: 40px 0;
                
            }
            
            .content-section {
                padding: 40px 0;
            }
            
            .policy-section {
                padding: 20px;
            }
            
            .contact-section {
                padding: 25px;
            }


            .policy-section h4,
            .header-section h1,
            .policy-section h2,
            .policy-section h3{
                font-size:32px;
            }

            
         .header-section p,
        .policy-section p,
       .policy-section ul li,
       td {
            font-size: 24px;
        }


        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <section class="header-section">
        <div class="container">
            <h1>Privacy Policy</h1>
            <p>Your privacy is important to us. Learn how we collect, use, and protect your personal information.</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container content-section">
        <!-- Introduction -->
        <div class="policy-section">
            <h2>1. Introduction</h2>
            <p>Buy Kitchen Online ("we," "us," or "our") operates the website <a href="https://bkonline.uk/" class="website-link" target="_blank"><strong>https://bkonline.uk/</strong></a> and is responsible for safeguarding the privacy and security of our customer's personal data. This privacy policy states how we collect, process, store and protect your information when you visit our website, purchase any products or communicate with our team.</p>
            <div class="highlight-box">
                <p><strong>By accessing or using our website and services, you consent to all the practices stated below.</strong></p>
            </div>
        </div>

        <!-- Information We Collect -->
        <div class="policy-section">
            <h2>2. Information We Collect</h2>
            <p>We may collect and process the following categories of personal data:</p>

            <h3>2.1 Personal Information</h3>
            <ul>
                <li><strong>Contact Details</strong>: Name, email address, phone number, billing/delivery address.</li>
                <li><strong>Order Information</strong>: Product preferences, purchase history, payment details (processed securely via third-party gateways).</li>
                <li><strong>Account Data</strong>: If you create an account, we store login credentials and profile details.</li>
            </ul>

            <h3>2.2 Technical & Usage Data</h3>
            <ul>
                <li><strong>Device & Browser Information</strong>: IP address, operating system, browser type, and version.</li>
                <li><strong>Cookies & Tracking Technologies</strong>: We use cookies, pixels, and similar tools to enhance user experience, analyze trends, and improve our services (see <strong>Section 6</strong> for details).</li>
                <li><strong>Website Analytics</strong>: Pages visited, session duration, referral sources (via tools like Google Analytics).</li>
            </ul>

            <h3>2.3 Communication Data</h3>
            <ul>
                <li>Emails, live chat transcripts, customer service calls, and feedback submissions.</li>
                <li>Survey responses or promotional interactions (if opted-in).</li>
            </ul>
        </div>

        <!-- How We Use Your Information -->
        <div class="policy-section">
            <h2>3. How We Use Your Information</h2>
            <p>We process your data for the following lawful bases under the <strong>UK GDPR and Data Protection Act 2018</strong>:</p>
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Purpose</th>
                            <th>Legal Basis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Order processing & fulfillment</td>
                            <td>Contractual necessity</td>
                        </tr>
                        <tr>
                            <td>Customer support & inquiries</td>
                            <td>Legitimate interest</td>
                        </tr>
                        <tr>
                            <td>Marketing communications</td>
                            <td>Consent (where required)</td>
                        </tr>
                        <tr>
                            <td>Fraud prevention & security</td>
                            <td>Legal obligation & legitimate interest</td>
                        </tr>
                        <tr>
                            <td>Website improvement & analytics</td>
                            <td>Legitimate interest</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Data Sharing -->
        <div class="policy-section">
            <h2>4. Data Sharing & Third-Party Disclosures</h2>
            <p><strong>We never sell your data.</strong> However, we are obligated to share it with:</p>
            <ul>
                <li><strong>Service Providers:</strong> Payment processors (e.g., Paypal, Stripe etc), Couriers (e.g., DHL. Royal Mail etc), and IT/cloud storage providers.</li>
                <li><strong>Legal and Regulatory Bodies</strong>: If required by law (e.g., HMRC, courts or fraud investigations)</li>
                <li><strong>Business Transfers:</strong> In mergers, acquisitions, or asset sales (with confidentiality safeguard)</li>
            </ul>
            <p>All third parties are contractually obligated to comply with data protection laws.</p>
        </div>

        <!-- International Data Transfers -->
        <div class="policy-section">
            <h2>5. International Data Transfers</h2>
            <p>If data is transferred outside the UK/EEA (e.g., via cloud servers), we ensure adequate safeguards, such as:</p>
            <ul>
                <li>Standard Contractual Clauses (SCCs).</li>
                <li>UK-approved international data transfer agreements.</li>
            </ul>
        </div>

        <!-- Cookies & Tracking -->
        <div class="policy-section">
            <h2>6. Cookies & Tracking Technologies</h2>
            <p>We use the following types of cookies:</p>
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Cookie Type</th>
                            <th>Purpose</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Essential</td>
                            <td>Site functionality (e.g., shopping cart).</td>
                        </tr>
                        <tr>
                            <td>Analytics</td>
                            <td>Traffic analysis (Google Analytics).</td>
                        </tr>
                        <tr>
                            <td>Marketing</td>
                            <td>Personalized ads (if consented).</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <p>You can manage preferences via your browser settings or our <strong>Cookie Consent Banner</strong>.</p>
        </div>

        <!-- Data Security -->
        <div class="policy-section">
            <h2>7. Data Security & Retention</h2>
            <ul>
                <li><strong>Security Measures</strong>: Encryption (SSL/TLS), secure payment gateways, access controls, and regular security audits.</li>
                <li><strong>Retention Period</strong>: We retain data only as long as necessary (e.g., 7 years for tax records, 2 years for marketing consent).</li>
            </ul>
        </div>

        <!-- Legal Rights -->
        <div class="policy-section">
            <h2>8. Your Legal Rights</h2>
            <p>Under UK data protection laws, you may:</p>
            <div class="rights-list">
                <ul>
                    <li><strong>Access</strong> your data (via a Subject Access Request).</li>
                    <li><strong>Correct</strong> inaccurate information.</li>
                    <li><strong>Request deletion</strong> (where no legal obligation exists).</li>
                    <li><strong>Restrict or object</strong> to processing.</li>
                    <li><strong>Withdraw consent</strong> (for marketing).</li>
                    <li><strong>Lodge a complaint</strong> with the <strong>ICO</strong> (<a href="https://www.ico.org.uk/" class="website-link" target="_blank">www.ico.org.uk</a>).</li>
                </ul>
            </div>
            <p>To exercise these rights, contact us at <strong>[Your Email]</strong> with proof of identity.</p>
        </div>

        <!-- Marketing Preferences -->
        <div class="policy-section">
            <h2>9. Marketing Preferences</h2>
            <ul>
                <li><strong>Opt-in</strong>: We only send promotions if you explicitly consent.</li>
                <li><strong>Opt-out</strong>: Unsubscribe via email links or by contacting us.</li>
            </ul>
        </div>

        <!-- Policy Updates -->
        <div class="policy-section">
            <h2>10. Policy Updates</h2>
            <p>We may revise this policy periodically. Changes will be posted here, and material updates will be notified via email (where appropriate).</p>
        </div>

        <!-- Contact Information -->
        <div class="policy-section contact-section">
            <h2>11. Contact Us</h2>
            <p>For privacy-related inquiries, contact:</p>
            <h4><strong>Buy Kitchen Online</strong></h4>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span><strong>Email:</strong> admin@bkonline.uk</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <span><strong>Phone:</strong> 020 805 05605</span>
                </div>
            </div>
            <div class="contact-item justify-content-center mt-3">
                <i class="fas fa-map-marker-alt"></i>
                <span><strong>Address:</strong> 44 Gillender St, Aberfeldy Village, London E14 6RP, United Kingdom</span>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>





    {{-- <section class="container-fluid px-lg-5 py-4 px-md-3 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-uppercase">Home</a></li>
                <li class="breadcrumb-item"><a class="text-uppercase">Legal Pages</a></li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-12">
                <h1 class="fs-1 text-dark text-uppercase fw-bolder">
                    Privacy Policy
                </h1>
            </div>
        </div>
    </section>

    <section class="container-fluid px-lg-5 px-md-3 px-3 py-lg-5 py-3" style="background-color: #f0f0f0;">
        <div class="row">
            <div class="col-12">
                <p>
                    This privacy policy sets out how KitchenKit uses and protects any information that you give us when
                    you use this website (the “Website”) or otherwise interact with us. When, in this policy, we refer
                    to KitchenKit we mean BA Kitchen Components Limited, whose registered address is at Derryloran
                    Industrial Estate, Cookstown, BT80 9LU (“BA Components”) and which is registered under company
                    number NI029035 and who has another factory at Sandall Stones Road, Kirk Sandall, Doncaster, South
                    Yorkshire DN3 1QR.
                </p>

                <p>
                    KitchenKit is the data controller in respect of your personal information and is responsible for
                    ensuring that the personal data we collect is processed in accordance with relevant data protection
                    laws. KitchenKit is registered with the Information Commissioner’s Office (“ICO”) under number
                    ZA174678. If you have any questions or are unsure about anything contained in this privacy policy,
                    please let us know by contacting our Data Protection Officer at dataprotection@bacomponents.co.uk or
                    by telephone +44 (0) 2886 764600. This privacy policy applies to any and all personal information
                    gathered by KitchenKit from any prospective and actual customers through our Website or other
                    channels (such as; Email, Telephone, post, Social Media, SMS, Newsletters/Blogs, Competitions or Web
                    Chat). We may change this policy from time to time by updating this page. You should check this
                    Website regularly to ensure that you are happy with any changes. If we propose a significant change
                    we will notify you by email or will post an alert that our policy has changed on our Website. This
                    privacy notice is provided in a layered format so you can click through to the specific areas set
                    out below. It will give you information about:
                </p>

                <p>
                    Most web browsers automatically accept cookies, but you can usually prevent accepting cookies by
                    changing your browser settings. Cookies help us give you a better website, by letting us monitor
                    what’s working and what isn’t through site traffic analysis.
                    We use 5 cookie categories on the BA website:
                </p>

                <ol class="list-group list-group-numbered pb-2">
                    <li class="list-group-item p-0 bg-transparent"><small>The information we collect about you.
                        </small> </li>
                    <li class="list-group-item p-0 bg-transparent"><small>What we do with your information.</small>
                    </li>
                    <li class="list-group-item p-0 bg-transparent"><small>What legal basis we rely on processing your
                            information.</small> </li>
                    <li class="list-group-item p-0 bg-transparent"><small>Who we share your information with.</small>
                    </li>
                    <li class="list-group-item p-0 bg-transparent"><small>How long we keep your personal
                            information.</small> </li>
                    <li class="list-group-item p-0 bg-transparent"><small>Where we hold your personal
                            information.</small> </li>
                    <li class="list-group-item p-0 bg-transparent"><small>Your rights in relation to your personal
                            information.</small>
                    </li>
                </ol>

                <h3 class="fw-bolder text-uppercase text-dark py-1">WHAT INFORMATION WE COLLECT ABOUT YOU</h3>
                <p>
                    When you interact with us, we will collect some or all of the following information about you: –
                </p>

                <ul class="p-0 py-1">
                    <li class="my-1"><i class="ri-arrow-right-s-fill"></i><small> Your name
                        </small></li>
                    <li class="my-1"><i class="ri-arrow-right-s-fill"></i> <small>Your contact information such as
                            e-mail
                            address, phone number, address and postcode </small></li>
                    <li class="my-1"><i class="ri-arrow-right-s-fill"></i> <small>A record of your contact preferences
                            such
                            as preferred contact method and time</small></li>
                    <li class="my-1"><i class="ri-arrow-right-s-fill"></i><small> information you share with our
                            customer
                            care teams</small> </li>
                    <li class="my-1"><i class="ri-arrow-right-s-fill"></i> <small>Your bank and credit/debit card
                            details if
                            we need to take payment from you</small> </li>
                    <li class="my-1"><i class="ri-arrow-right-s-fill"></i> <small>Information you provide when
                            completing
                            surveys which we may ask you to complete to help improve our customer experience and as part
                            of
                            business reporting, such as whether you would recommend KitchenKit to a friend and where you
                            heard about us</small></li>
                    <li class="my-1"><i class="ri-arrow-right-s-fill"></i><small>Information about how you navigate
                            and use
                            our Website such as the search terms you use, the pages you visit, the amount of time you
                            spend
                            on the Website</small>
                    </li>
                    <li class="my-1"><i class="ri-arrow-right-s-fill"></i><small>Other information relevant to
                            customer
                            surveys and/or offers.</small>
                    </li>
                </ul>

                <h3 class="fw-bolder text-uppercase text-dark py-1">WHAT WE DO WITH THE INFORMATION WE GATHER
                </h3>
                <p>
                    We require this information to understand your needs and ultimately to provide you with a better
                    service. In particular, we will use the information we hold about you as follows: –
                </p>
                <h4 class="fw-bolder text-dark">Respond To Your Enquiries And To Provide You With The Services You
                    Request From
                    Us
                </h4>
                <p>
                    When you make an enquiry about one of our products or services or any general question, we will use
                    the information you provide to contact you to discuss your enquiry.
                </p>

                <h4 class="fw-bolder text-dark">Permit You To Access Our Website</h4>
                <p>
                    All our customers have access to our MyBA online service which has been specifically developed to
                    enable you to place and track orders within our production system, in addition to monitoring and
                    making payments to your account at your convenience.
                </p>

                <h4 class="fw-bolder text-dark">Internal Record Keeping</h4>
                <p>
                    We may use the information we collect to improve our products and services and to monitor the way
                    our staff deal with you.
                </p>

                <h4 class="fw-bolder text-dark">Process Payment And, If Necessary, Collect Arrears </h4>
                <p>
                    We will use your information to set up a new account with us by requesting a credit check through a
                    third party Experian. We will use your information for orders processed through our MyBA online
                    ordering system. Credit or other payment card details will be stored through a third party SagePay
                    who encrypts the data. For orders processed manually, we undergo an annual compliance test through a
                    third party Barclaycard to verify that we don’t hold any personal credit card or other payment card
                    details.
                </p>

                <h4 class="fw-bolder text-dark">Provide and Improve The Customer Service We provide </h4>
                <p>
                    We will use the information you provide to manage our relationship with you as a customer and to
                    improve the services we provide to enhance your overall experience with us.
                </p>

                <h4 class="fw-bolder text-dark">Conduct Reporting and Analytics </h4>
                <p>
                    We will use data analytics on the information you provide to monitor and improve our website,
                    products, services, marketing, customer relationships and experiences. The data captured will enable
                    us to categorise the types of customers for our products and services; help to keep our website
                    updated and relevant and help us to deliver our marketing strategy.
                </p>

                <h4 class="fw-bolder text-dark">Comply With Law </h4>
                <p>
                    We will use your information where we need to comply with a legal or regulatory obligation within
                    the legitimate interests of our business.
                </p>

                <h4 class="fw-bolder text-dark">If your Consent For Us To Contact you For Marketing Purposes </h4>
                <p>
                    We may periodically send promotional emails, SMS messages and postal correspondence about new
                    products, special offers or other information which we think you may find interesting using the
                    contact details which you have provided to KitchenKit. From time to time, we may use the information
                    to customise the Website according to your interests.
                </p>

                <h4 class="fw-bolder text-dark">Personalise Our Interactions With You </h4>
                <p>
                    We may personalise our interactions with you to provide content and adverts which may be of interest
                    to you, such as showing you products that you have previously viewed on our Website whilst you
                    browse the web and use social media platforms. We may also serve you with personalised content on
                    our Website and in e-mails.
                </p>

                <h3 class="fw-bolder text-dark">What Legal Basis Do We Rely On To Process Your Information
                </h3>
                <p>
                    Data protection law sets out a number of conditions which organisations can rely on in order to
                    lawfully handle personal information. The conditions we rely on are as follows: –
                </p>

                <h4 class="fw-bolder text-dark">Legitimate Interests </h4>
                <p>
                    The law permits us to handle your personal information where necessary in our legitimate interests
                    provided that this isn’t outweighed by your interests. Many of the purposes we handle your personal
                    information, described above, fall into this category as they are essential activities which enable
                    us to run our business efficiently and effectively. For example, enabling us to use third party
                    service providers, to monitor, review and improve the services we provide to you and your experience
                    when you visit our Website and to help us ensure that we communicate with you about the things that
                    are most likely to be of interest to you. We may, if necessary, also use your information to defend
                    our legal rights or to obtain legal advice and to manage any complaint that you might have. We
                    ensure that your rights and interests are protected when we do this.
                </p>

                <h4 class="fw-bolder text-dark">Consent</h4>
                <p>
                    We are permitted to use your personal data when you give us your consent for us to do so. We will
                    only use your personal data to contact you for direct marketing purposes if you give us your consent
                    to do so.
                </p>

                <h4 class="fw-bolder text-dark">Performance of a Contract </h4>
                <p>
                    Where you transact with us to buy a product we will use your personal information so that we can
                    fulfil our part of the contract e.g. to deliver the product to you, to take payment and to manage
                    this process.
                </p>

                <h4 class="fw-bolder text-dark">Required by Law </h4>
                <p>
                    We will, if required by law, disclose your personal information for example in response to a court
                    order. We will disclose your personal information if requested by a law enforcement agency or where
                    we believe it is necessary to investigate, prevent, or take action regarding illegal activities,
                    suspected fraud, situations involving potential threats to the physical safety of any person,
                    non-compliance with of our terms and conditions, or as otherwise permitted or required by law and
                    consistent with legal requirements.
                </p>

                <h3 class="fw-bolder text-dark">Who We Share Your Information With</h3>
                <h4 class="fw-bolder text-dark"> Service Providers </h4>
                <p>
                    We will not pass your personal information to anyone outside our group, except to carefully selected
                    third parties (professional advisers and other service providers who help us run our business e.g.
                    IT support providers, transport carriers, payment processing companies
                </p>

                <h4 class="fw-bolder text-dark"> Group Companies </h4>
                <p>
                    We will from time to time share your personal data with other companies within the BA Components
                    group of companies, including BA Clic Components Ltd. We may do this because we need to in order to
                    fulfil your order or otherwise as necessary for our business purposes.
                </p>

                <h4 class="fw-bolder text-dark">A Prospective Purchase of our Business</h4>
                <p>
                    In the event that we sell or buy any business or assets, in which case we may disclose your personal
                    data to the prospective seller or buyer of such business or assets or where we are required to
                    forward the information in order to comply with a regulatory or legal process.
                </p>

                <h4 class="fw-bolder text-dark">Police and Law Enforcement Agencies</h4>
                <p>
                    Where required by law, we will share your personal information with the police and other law
                    enforcement agencies. We will always limit the personal information we share to that which is
                    necessary to enable them to perform their services or function. We will also always ensure that
                    before we share your personal information with a service provider, we have entered into a contract
                    with the service provider which requires them to keep your information secure and only use it for
                    the purposes we permit them to. We will never sell or share your personal information with third
                    parties for the purposes of marketing without seeking prior consent.
                </p>

                <h3 class="fw-bolder text-dark">How Long We Will Keep Your Personal Information For
                </h3>
                <p>
                    We will keep your personal information for as long as we need it to provide the services and
                    products you request from us. We may also keep it to comply with our legal obligations, to resolve
                    complaints and to enforce our rights. As a result, the length of time that we keep your information
                    for will vary depending on the purposes for which we have it. In any event, we will review what
                    information we need on an ongoing basis and will only retain it for the minimum amount of time that
                    we need it for.
                </p>

                <h4 class="fw-bolder text-dark">Where We Hold Your Information </h4>
                <p>
                    Your personal information may occasionally be processed and held by third parties outside the
                    European Economic Area (EEA). Whereas in the EU, we implement a high standard of data protection
                    law, some parts of the world do not implement such stringent laws. As a result, if we do send
                    personal information overseas we will make sure that appropriate safeguards are in place to ensure
                    it is protected in accordance with European data protection law. These might include: –
                </p>

                <h4 class="fw-bolder text-dark">Cookies on Our Website</h4>
                <p>
                    Cookies are small text files stored on your computer (or mobile device) by web pages as you visit
                    them. Cookies are not programs and cannot harm your computer. Our Website uses cookies to enhance
                    your experience of our website(s) and to help us analyse data about how visitors are using our
                    Website(s). We may also use cookies to display relevant adverts to you when you visit other selected
                    websites. For more information about how we use cookies, please refer to our separate Cookie policy
                    <a href="{{ route('cookies') }}" class="text-decoration-underline">by clicking here</a>.
                </p>

                <h4 class="fw-bolder text-dark">Links to Other Websites </h4>
                <p>
                    Our Website may contain links to other websites of interest. However, once you have used these links
                    to leave our site, you should note that we do not have any control over that other website.
                    Therefore, we cannot be responsible for the protection and privacy of any information that you
                    provide whilst viewing such sites and such sites are not governed by this privacy statement. You
                    should exercise caution and look at the privacy statement applicable to the website in question.
                </p>

                <h3 class="fw-bolder text-dark">Your Rights </h3>
                <p>
                    You have the right to request that we don’t send marketing material to you and you can do this at
                    any time by:
                </p>

                <ul class="p-0 py-1">
                    <li class="my-1"><i class="ri-arrow-right-s-fill"></i><small> Clicking on the unsubscribe link at
                            the bottom of promotional e-mails
                        </small></li>
                    <li class="my-1"><i class="ri-arrow-right-s-fill"></i> <small>Phoning the telephone number
                            included on any postal correspondence
                        </small></li>
                    <li class="my-1"><i class="ri-arrow-right-s-fill"></i> <small>Using the opt out code on any
                            promotional SMS communication
                        </small></li>
                    <li class="my-1"><i class="ri-arrow-right-s-fill"></i><small> E-mailing us at any time</small>
                    </li>
                </ul>

                <p>
                    You also have the right to raise any complaint you may have with the ICO. You can do this by
                    contacting them by post at The Information Commissioner’s Office, 3rd Floor, 14 Cormac Place
                    Belfast, BT7 2JB, by phone on 02890278757 or by email on ni@ico.org.uk <b>This Privacy Notice was
                        last
                        modified on 28th July 2021.</b>
                </p>







            </div>
        </div>
    </section> --}}

</x-guest-layout>
