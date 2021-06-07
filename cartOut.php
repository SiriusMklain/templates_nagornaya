<?php include_once('inc/header.php') ?>

    <div class="page">
        <div class="page-white">
            <div class="container-md">
                <div class="page-header">
                    <div class="page-header__title">
                        <div class="d-none d-md-block">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Корзина</li>
                                </ol>
                            </nav>
                        </div>

                        <h1>Корзина</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h1 class="text-primary mb-3">Ваша корзина пуста</h1>
                        <p>Если в корзине были товары – <a href="/login.php">войдите</a>, чтобы посмотреть ранее добавленные товары или вернитесь в каталог. Приятных покупок!</p>
                        <div class="row mt-4">
                            <div class="col-lg-4 offset-lg-2">
                                <a href="/catalog.php" class="btn btn-primary d-block">Каталог</a>
                            </div>
                            <div class="col-lg-4">
                                <a href="/login.php" class="btn btn-outline-primary d-block">Войти</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <h2 class="mb-4">Рекомендуемые</h2>

                    <div class="swiper-container swiper-product">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card card--product">
                                    <a href="#" class="btn btn-light btn-circle btn-wish">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a href="/product.php" class="card-img">
                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                    </a>
                                    <div class="card-body">
                                        <a href="/product.php" class="card-title">Зеркало с подсветкой MZF-0478</a>
                                        <p class="card-attribute">800х400 мм</p>
                                        <div class="card-info">
                                            <span class="card-price">96 380 ₽</span>
                                            <span class="status status--success"><i class="fas fa-check-circle"></i> В наличии</span>
                                            <a href="#" class="btn btn-primary btn-circle"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-primary btn-sm">Купить</a>
                                            <a href="#" class="btn btn-outline-primary btn-sm">Купить в 1 клик</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card--product">
                                    <a href="#" class="btn btn-light btn-circle btn-wish">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a href="/product.php" class="card-img">
                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                    </a>
                                    <div class="card-body">
                                        <a href="/product.php" class="card-title">Зеркало с подсветкой MZF-0478</a>
                                        <p class="card-attribute">800х400 мм</p>
                                        <div class="card-info">
                                            <span class="card-price">96 380 ₽</span>
                                            <span class="status status--success"><i class="fas fa-check-circle"></i> В наличии</span>
                                            <a href="#" class="btn btn-primary btn-circle"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-primary btn-sm">Купить</a>
                                            <a href="#" class="btn btn-outline-primary btn-sm">Купить в 1 клик</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card--product">
                                    <a href="#" class="btn btn-light btn-circle btn-wish">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a href="/product.php" class="card-img">
                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                    </a>
                                    <div class="card-body">
                                        <a href="/product.php" class="card-title">Зеркало с подсветкой MZF-0478</a>
                                        <p class="card-attribute">800х400 мм</p>
                                        <div class="card-info">
                                            <span class="card-price">96 380 ₽</span>
                                            <span class="status status--success"><i class="fas fa-check-circle"></i> В наличии</span>
                                            <a href="#" class="btn btn-primary btn-circle"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-primary btn-sm">Купить</a>
                                            <a href="#" class="btn btn-outline-primary btn-sm">Купить в 1 клик</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card--product">
                                    <a href="#" class="btn btn-light btn-circle btn-wish">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a href="/product.php" class="card-img">
                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                    </a>
                                    <div class="card-body">
                                        <a href="/product.php" class="card-title">Зеркало с подсветкой MZF-0478</a>
                                        <p class="card-attribute">800х400 мм</p>
                                        <div class="card-info">
                                            <span class="card-price">96 380 ₽</span>
                                            <span class="status status--success"><i class="fas fa-check-circle"></i> В наличии</span>
                                            <a href="#" class="btn btn-primary btn-circle"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-primary btn-sm">Купить</a>
                                            <a href="#" class="btn btn-outline-primary btn-sm">Купить в 1 клик</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card--product">
                                    <a href="#" class="btn btn-light btn-circle btn-wish">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a href="/product.php" class="card-img">
                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                    </a>
                                    <div class="card-body">
                                        <a href="/product.php" class="card-title">Зеркало с подсветкой MZF-0478</a>
                                        <p class="card-attribute">800х400 мм</p>
                                        <div class="card-info">
                                            <span class="card-price">96 380 ₽</span>
                                            <span class="status status--success"><i class="fas fa-check-circle"></i> В наличии</span>
                                            <a href="#" class="btn btn-primary btn-circle"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-primary btn-sm">Купить</a>
                                            <a href="#" class="btn btn-outline-primary btn-sm">Купить в 1 клик</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card--product">
                                    <a href="#" class="btn btn-light btn-circle btn-wish">
                                        <i class="far fa-heart"></i>
                                    </a>
                                    <a href="/product.php" class="card-img">
                                        <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                    </a>
                                    <div class="card-body">
                                        <a href="/product.php" class="card-title">Зеркало с подсветкой MZF-0478</a>
                                        <p class="card-attribute">800х400 мм</p>
                                        <div class="card-info">
                                            <span class="card-price">96 380 ₽</span>
                                            <span class="status status--success"><i class="fas fa-check-circle"></i> В наличии</span>
                                            <a href="#" class="btn btn-primary btn-circle"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-primary btn-sm">Купить</a>
                                            <a href="#" class="btn btn-outline-primary btn-sm">Купить в 1 клик</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-buttons">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once('inc/footer.php') ?>