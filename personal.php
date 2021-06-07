<?php include_once('inc/header.php') ?>

<div class="page">
    <div class="personal">
        <div class="container">
            <div class="page-header">
                <div class="page-header__title">
                    <div class="d-none d-md-block">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Личный кабинет</li>
                            </ol>
                        </nav>
                    </div>
                    <h1>Личный кабинет</h1>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="card card--light sticky-top">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <h5 class="h5 mb-3">Мои данные</h5>
                                </div>
                                <div class="col-auto">
                                    <a href="/login.php"><i class="fas fa-sign-out-alt"></i> Выйти</a>
                                </div>
                            </div>
                            <div class="card card--white">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">Иванов Иван</h5>
                                    <a href="#"><i class="far fa-edit"></i></a>
                                </div>
                                <a href="#"><i class="fas fa-envelope"></i> ivan@mail.ru</a>
                                <a href="#"><i class="fas fa-phone-alt"></i> 8 (888) 888 88 88</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <a class="d-lg-none d-flex justify-content-between" data-bs-toggle="collapse" href="#adittionaly" role="button" aria-expanded="false" aria-controls="collapseOne">
                            Активные заказы
                            <i class="fas fa-arrow-circle-down"></i>
                        </a>
                        <div class="collapse show" id="adittionaly">
                            <div class="card card--light">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-auto d-none d-sm-block">
                                            <h5 class="h5 mb-3">Активные заказы</h5>
                                        </div>
                                        <div class="">
                                            <a class="show-order d-flex justify-content-between" data-bs-toggle="collapse" href="#collapseOrder" role="button" aria-expanded="false" aria-controls="collapseOrder">
                                                Показать все
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row g-4">
                                        <div>
                                            <div class="card card--white">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-auto">
                                                        <h6><strong>Заказ №546633</strong> от 15.01.2021</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span>4 товара на сумму</span>
                                                        <strong class="text-primary">23 999 ₽</strong>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="swiper-container swiper-person">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="collapse" id="collapseOrder">
                                            <div class="card card--white">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-auto">
                                                        <h6><strong>Заказ №546633</strong> от 15.01.2021</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span>4 товара на сумму</span>
                                                        <strong class="text-primary">23 999 ₽</strong>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="swiper-container swiper-person">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="d-lg-none d-flex justify-content-between" data-bs-toggle="collapse" href="#adittional" role="button" aria-expanded="false" aria-controls="collapseTwo">
                            Завершенные заказы
                            <i class="fas fa-arrow-circle-down"></i>
                        </a>
                        <div class="collapse show" id="adittional">
                            <div class="card card--light">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-auto d-none d-sm-block">
                                            <h5 class="h5 mb-3">Завершенные заказы</h5>
                                        </div>
                                        <div class="">
                                            <a class="show-order-end d-flex justify-content-between" data-bs-toggle="collapse" href="#collapseOrderEnd" role="button" aria-expanded="false" aria-controls="collapseOrderEnd">
                                                Показать все
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row g-4">
                                        <div>
                                            <div class="card card--white">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-auto">
                                                        <h6><strong>Заказ №546633</strong> от 15.01.2021</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span>4 товара на сумму</span>
                                                        <strong class="text-primary">23 999 ₽</strong>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="swiper-container swiper-person">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseOrderEnd">
                                            <div class="card card--white">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-auto">
                                                        <h6><strong>Заказ №546633</strong> от 15.01.2021</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span>4 товара на сумму</span>
                                                        <strong class="text-primary">23 999 ₽</strong>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="swiper-container swiper-person">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="card card--product">
                                                                    <h6 class="info">
                                                                        Артикул
                                                                    </h6>
                                                                    <a href="/product.php" class="card-img">
                                                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include_once('inc/footer.php') ?>