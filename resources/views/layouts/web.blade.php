<!DOCTYPE html>
<html class="full-height" lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>xpressive designs</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Material design landing page template built by TemplateFlip.com" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link href="css/gallery.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper.css">

</head>

<body>
    <header>
        <!-- Navbar-->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top scrolling-navbar" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#"><img class="img-logo" src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link active" href="/">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="/gallery">GALLERY</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Intro Section-->
    <div id="app">
        @yield('content')
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/app.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    </script>
</body>

</html>
