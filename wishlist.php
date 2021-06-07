<?php include_once('inc/header.php') ?>

<?php
$catalog = ['Хиты продаж', 'Зеркала', 'Стеклянные столы и полки', 'Репродукция на холсте и багете', 'Зеркальная плитка', 'Ковка художественная', 'Магнитно-маркерные стеклянные доски'];
?>

<div class="page">
    <div class="container">
        <div class="page-header">
            <div class="page-header__title">
                <div class="d-none d-md-block">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Избранное</li>
                        </ol>
                    </nav>
                </div>

                <h1>Избранное</h1>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-auto">
                
            </div>
            <div class="col-auto">
                <div class="btn-group d-none">
                    <div class="btn-group" id="sort-button">
                        <a href="#" class="btn btn-outline-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-none d-md-inline-block">Сначала новые</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item"><b>По умолчанию</b></a></li>
                            <li><a href="#" class="dropdown-item">Название (А - Я)</a></li>
                            <li><a href="#" class="dropdown-item">Название (Я - А)</a></li>
                            <li><a href="#" class="dropdown-item">Цена (низкая &gt; высокая)</a></li>
                            <li><a href="#" class="dropdown-item">Цена (высокая &gt; низкая)</a></li>
                            <li><a href="#" class="dropdown-item">Рейтинг (начиная с высокого)</a></li>
                            <li><a href="#" class="dropdown-item">Рейтинг (начиная с низкого)</a></li>
                            <li><a href="#" class="dropdown-item">Модель (А - Я)</a></li>
                            <li><a href="#" class="dropdown-item">Модель (Я - А)</a></li>
                            <li><a href="#" class="dropdown-item">Наличие (меньше &gt; больше)</a></li>
                            <li><a href="#" class="dropdown-item">Наличие (больше &gt; меньше)</a></li>
                        </ul>
                    </div>
                    <div class="btn-group" id="limit-button">
                        <a href="#" class="btn btn-outline-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-none d-md-inline-block">Показать: 12</span></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item"><b>12</b></a></li>
                            <li><a href="#" class="dropdown-item">25</a></li>
                            <li><a href="#" class="dropdown-item">50</a></li>
                            <li><a href="#" class="dropdown-item">75</a></li>
                            <li><a href="#" class="dropdown-item">100</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="catalog">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card--product">
                        <a href="#" class="btn btn-light btn-circle btn-wish active">
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
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card--product">
                        <a href="#" class="btn btn-light btn-circle btn-wish active">
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
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card--product">
                        <a href="#" class="btn btn-light btn-circle btn-wish active">
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
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card--product">
                        <a href="#" class="btn btn-light btn-circle btn-wish active">
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
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card--product">
                        <a href="#" class="btn btn-light btn-circle btn-wish active">
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
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card--product">
                        <a href="#" class="btn btn-light btn-circle btn-wish active">
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
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card--product">
                        <a href="#" class="btn btn-light btn-circle btn-wish active">
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
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card--product">
                        <a href="#" class="btn btn-light btn-circle btn-wish active">
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
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card--product">
                        <a href="#" class="btn btn-light btn-circle btn-wish active">
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
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card--product">
                        <a href="#" class="btn btn-light btn-circle btn-wish active">
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
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card--product">
                        <a href="#" class="btn btn-light btn-circle btn-wish active">
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
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card--product">
                        <a href="#" class="btn btn-light btn-circle btn-wish active">
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
        </div>

        <nav class="d-flex justify-content-center" aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<?php include_once('inc/footer.php') ?>