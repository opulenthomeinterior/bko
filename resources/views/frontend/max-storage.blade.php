<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Kitchen Designs</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f8f8f8;
            color: #333;
        }

        .hero {
            background: url('https://bkonline.uk/public/images/slab.jpeg') center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 1000px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.2rem;
        }

        .scroll-down {
            margin-top: 20px;
            font-size: 1.2rem;
            font-weight: bold;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
            animation: moveUpDown 1.5s infinite ease-in-out;
        }

        .scroll-down i {
            font-size: 2rem;
            margin-top: 5px;
        }

        @keyframes moveUpDown {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .content-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 10%;
        }

        .content-section img {
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content-section .text {
            max-width: 500px;
        }

        .content-section h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .content-section p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #333;
            color: white;
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 12px;
            border: 2px solid #febd49;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ccc;
        }

        .styled-table thead {
            background-color: #febd49;
            color: black;
            font-size: 13px;
            font-weight: bold;
        }

        .styled-table tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        .styled-table tbody tr:nth-child(even) {
            background-color: #e0e0e0;
        }

        .styled-table tbody tr:hover {
            background-color: #febd49;
            transition: background-color 0.3s ease-in-out;
        }
    </style>
</head>

<body>
    <header class="hero">
        <div class="hero-content">
            <h1>Custom Kitchens, Timeless Elegance</h1>
            <p>We offer premium, bespoke kitchen designs at competitive prices.</p>
            <div class="scroll-down">Scroll Down <i>&#x2193;</i></div>
        </div>
    </header>

    <section class="content-section left">
        <div class="image">
            <img src="https://bkonline.uk/public/uploads/styles/16_11_2024_172033_6738d461cad89-mfc.jpg" alt="Luxury Kitchen">
        </div>
        <div class="text">
            <h2>Our process is straight forward</h2>
            <small>You inform us about your requirements</small>
            <small>We create a personalized design and provide clear, upfront pricing</small>
            <small>The final design will be crafted to meet your needs without the pressure of upselling/suggestive selling</small>
        </div>
    </section>

    <section class="content-section left">
        <div class="text">
            <h2>Are you struggling with kitchen storage space?</h2>
            <p>Let us introduce; Bespoke Max storage Kitchens</p>
            <small>Standard designer kitchens are beautiful but with limited storage space. Bulk-manufactured standard space units are not the solution for your major storage problems. At BKO, we offer kitchens designed to maximize your kitchen’s storage with the deepest, tallest, and widest units in the market, and they are customized to suit your needs.
                We have many colours available in supergloss and ultramatt finishes like white, cream, ivory, cashmere, etc. Choose from our huge range of unique designs, and we will customize them to fit your kitchen's dimensions and style.
                <br><b>Never settle for a standard-size kitchen because you don’t have to any more. </b><br>
                It is your chance to enjoy luxurious designs with practicality, especially when the prices are lower than those of standard designer kitchens.
            </small>
        </div>
        <div class="image">
            <img src="https://bkonline.uk/public/uploads/styles/15_11_2024_121241_67373ab9d8f19-j-pull-22.jpeg" alt="Luxury Kitchen">
        </div>
    </section>

    <section class="content-section left">
        <div class="image">
            <img src="https://bkonline.uk/public/uploads/styles/16_11_2024_171830_6738d3e6f1934-shaker-22.jpeg" alt="Modern Kitchen">
        </div>
        <div class="text">
            <h2>TALL CABINETS</h2>
            <small>Our tall cabinets are made up to 800mm deep to flush the American kitchen (750mm deep). The kitchen looks seamless when all the appliances, and cabinets are perfectly aligned. </small>
        </div>
    </section>

    <section class="content-section left">
        <div class="text">
            <h2>BRIDGING UNITS</h2>
            <small>Our bridging units are designed to seamlessly align with tall units, offering a custom fit for your space. While the market standard typically offers a depth of 300mm, we provide options with depths of up to 800mm for enhanced flexibility and storage capacity. Additionally, we ensure symmetry above your fridge for a clean, balanced aesthetic.</small>
        </div>
        <div class="image">
            <img src="https://bkonline.uk/public/uploads/styles/15_11_2024_172813_673784ad54c9f-slab.jpeg" alt="Smart Kitchen">
        </div>
    </section>

    <section class="content-section right">
        <div class="image">
            <img src="https://bkonline.uk/public/uploads/styles/17_11_2024_221317_673a6a7dda3ce-true-handleless.jpeg" alt="Smart Kitchen">
        </div>
        <div class="text">
            <h2>22 mm Thick ROBUST DOORS</h2>
            <small>Our bridging units are designed to seamlessly align with tall units, offering a custom fit for your space. While the market standard typically offers a depth of 300mm, we provide options with depths of up to 800mm for enhanced flexibility and storage capacity. Additionally, we ensure symmetry above your fridge for a clean, balanced aesthetic.</small>
            <br>
            <small>18 mm+ THICK BACK AND SIDES Our units have 18mm+ back. It makes them solid, durable, and customized. They are more efficient than the standard 6-12 mm fragile unit backs available in the market.</small>
            <br>
            <small>The height and depth of all the units is customized according to your preferences. </small>
            <br>
            <small>WHY settle for an average-sized kitchen when we have eliminated the price issue for a fully customized kitchen? </small>
        </div>
    </section>

    <section class="content-section left">
        <div class="text">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Design</th>
                        <th>NATIONAL RETAILER STANDARD-SIZED KITCHEN</th>
                        <th>BESPOKE MAX STORAGE KITCHEN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Design flexibility</td>
                        <td>NO</td>
                        <td>YES</td>
                    </tr>
                    <tr>
                        <td>Cost</td>
                        <td>£££</td>
                        <td>£££</td>
                    </tr>
                    <tr>
                        <td>Installation time</td>
                        <td>Reasonable Time Required</td>
                        <td>Reasonable Time Required</td>
                    </tr>
                    <tr>
                        <td>Aesthetic appeal</td>
                        <td>Cannot be Customized, Repetitive Designs</td>
                        <td>Fully Customized, Unique Designs.</td>
                    </tr>
                    <tr>
                        <td>Storage solutions</td>
                        <td>Less Storage Solutions.</td>
                        <td>More Storage Solutions.</td>
                    </tr>
                    <tr>
                        <td>Durability</td>
                        <td>Standard/Fragile Quality Material is Used</td>
                        <td>Premium/Durable Quality Material is Used</td>
                    </tr>
                    <tr>
                        <td>Professional expertise</td>
                        <td>Not Needed Because Kitchens Are Predesigned</td>
                        <td>A Whole Team Of Professionals Is Required</td>
                    </tr>
                    <tr>
                        <td>Value for money</td>
                        <td>Functional And Affordable</td>
                        <td>Fully Customized, Functional, Practical and Affordable</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="image">
            <img src="https://bkonline.uk/public/images/slab.jpeg" alt="Smart Kitchen">
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Kitchen Designs. All rights reserved.</p>
    </footer>
</body>

</html>