<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>PUNCH</title>
    <link href="{{ asset('assets/images/favicon.png') }}" rel="icon">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome Link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

    <!-- CSS File Link -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- JS File Link -->
    <script src="assets/js/script.js" type="module"></script>

</head>

<body>

    <div class="navbar">

        <img class="background-image" src="assets/images/background-img.jpeg" type="image">

        <header class="header">
            <ul class="left">
                <li><a href="shop.blade.php">shop</a></li>
                <li><a href="about-punch.blade.php">about punch</a></li>
                <li><a href="contact-us.blade.php">contact us</a></li>
            </ul>

            <p>
                <a href="home.blade.php">
                    <img class="logo" src="assets/images/logo(black).png" alt="logo">
                </a>
            </p>

            <ul class="right">
                <li><a href="signlog.blade.php"><i class="fa-regular fa-user"></i></a></li>
                <li><a href="#"><i class="fa fa-magnifying-glass"></i></a></li>
                <li><a href="#"><i class="fa fa-basket-shopping"></i></a></li>
            </ul>

        </header>

        <div class="content">
            <h1>energise, hydrate, zero sugar</h1>
            <a href="shop.php">shop drinks</a>
        </div>

    </div>

    <section>

    </section>

</body>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-row">

            <div class="footer-col">
                <h3>about punch</h3>
                <p class="text1">lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. </p>
                <div class="socials">
                    <a href="https://github.com/ShouldKnowB/TeamProject1"><i class="fa-brands fa-github"></i></a>
                    <a href="https://trello.com/b/QrHTb3ps/project-details"><i class="fa-brands fa-trello"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h2>drinks</h2>
                <ul>
                    <li><a href="#">berry blast</a></li>
                    <li><a href="#">blue raspberry</a></li>
                    <li><a href="#">lemon and lime</a></li>
                    <li><a href="#">tart cherry</a></li>
                    <li><a href="#">tropical</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h2>support</h2>
                <ul>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="terms-of-use.php">terms of use</a></li>
                    <li><a href="privacy-policy.php">privacy policy</a></li>
                    <li><a href="refund-policy.php">refund policy</a></li>
                    <li><a href="contact-us.php">contact us</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>newsletter</h3>
                <p class="text2"> lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. </p>
                <p><a class="branding" href="index.php">© punch LLC</a></p>
            </div>

        </div>
    </div>
</footer>

</html>
