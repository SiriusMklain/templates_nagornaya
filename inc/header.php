<?php
    if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) {
        $body = 'home';
    } else {
        $body = '';
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.7/swiper-bundle.min.css" integrity="sha512-D0mkUCjPEoVJXNeuyk5d0igR56kINrD7ZcryuoBSXaj7PBE5/HpwiZ5K/NMRI1+OqitE4F99rajWhzA1Tz3qpQ==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css" integrity="sha512-aD9ophpFQ61nFZP6hXYu4Q/b/USW7rpLCQLX6Bi0WJHXNO7Js/fUENpBQf/+P4NtpzNX0jSgR5zVvPOJp+W2Kg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" integrity="sha512-NWCafukXClS6fKch6bSMl/WvPzZrD1OGMf1oMAnFYXSSKZ7hgeswls+r4SdK4bFJauVwmvFf7HlMwji2TsjROA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Нагорная 17</title>
</head>

<body class="<?php echo $body; ?>">
<!-- wrapper -->
<div class="wrapper">
    <!-- header -->
    <header class="header fixed-top">
        <div class="header__top">
            <div class="container-md">
                <div class="nav justify-content-between">
                    <div class="nav-item">
                        <span class="nav-link text-primary"><i class="fas fa-map-marker-alt"></i> Нагорная 17</span>
                    </div>
                    <div class="nav-item">
                        <span class="nav-link text-primary"><i class="fas fa-clock"></i> Пн-Вс с 10:00 до 19:00</span>
                    </div>
                    <div class="nav-item">
                        <a href="/delivery.php" class="nav-link"><i class="fas fa-truck-moving"></i> Доставка</a>
                    </div>
                    <div class="nav-item">
                        <a href="tel:84959805373" class="nav-link"><i class="fas fa-phone-alt"></i> 8 (495) 980 53 73</a>
                    </div>
                    <div class="nav-item">
                        <div class="nav">
                            <a href="#" class="nav-link" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="nav-link" target="_blank"><i class="fab fa-vk"></i></a>
                            <a href="#" class="nav-link" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="nav-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-md">
                    <a class="navbar-brand" href="/"><img src="assets/img/logo.svg" alt="Нагорная 17" class="navbar-logo"></a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-md-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Каталог</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li class="dropdown-back d-lg-none">
                                        <h4 class="dropdown-back-title"><a href="#" class="dropdown-back-link"><i class="fas fa-chevron-left"></i> Каталог</a></h4>
                                    </li>
                                    <li><a class="dropdown-item" href="/catalog.php">Action</a></li>
                                    <li><a class="dropdown-item" href="/catalog.php">Another action</a></li>
                                    <li><a class="dropdown-item" href="/catalog.php">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about.php">О компании</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="/delivery.php">Доставка</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/project.php">Проекты</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/contact.php">Контакты</a>
                            </li>
                        </ul>

                        <form class="search">
                            <div class="input-group">
                                <span class="input-group-text" id="search"><i class="fas fa-search"></i></span>
                                <input type="text" class="form-control form-control--primary" placeholder="Поиск" aria-describedby="search">
                            </div>
                        </form>

                        <div class="d-lg-none text-center">
                            <a href="tel:84959805373" class="text-white"><i class="fas fa-phone-alt"></i> 8 (495) 980 53 73</a>
                            <div class="nav">
                                <a href="#" class="nav-link" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="nav-link" target="_blank"><i class="fab fa-vk"></i></a>
                                <a href="#" class="nav-link" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="nav-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>

                    <ul class="nav flex-nowrap">
                        <li class="nav-item">
                            <a href="/personal.php" class="nav-link"><i class="fas fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="/wishlist.php" class="nav-link"><i class="fas fa-heart"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="/cart.php" class="nav-link"><i class="fas fa-shopping-cart"></i></a>
                        </li>
                    </ul>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </div>
    </header>
    <!-- #header -->