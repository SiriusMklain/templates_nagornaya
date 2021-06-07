<?php include_once('inc/header.php') ?>

    <div class="page order">
        <div class="container-md">
            <div class="page-header">
                <div class="page-header__title">
                    <div class="d-none d-md-block">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                                <li class="breadcrumb-item"><a href="/">Корзина</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Оформление заказа</li>
                            </ol>
                        </nav>
                    </div>
                    <h1>Оформление заказа</h1>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-xl-8 accordion-white">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <a href="#" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1.Выберите способ получения товара
                                </a>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-lg-6">
                                            <div class="card card--primary h-100">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio1" checked>
                                                <label class="form-check-label" for="radio1">
                                                    <div class="form-check">
                                                        <div class="col-sm-6">
                                                            <h6>Доставка (1000р)</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <img src="assets/img/delivery.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card card--primary h-100">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio2">
                                                <label class="form-check-label" for="radio2">
                                                    <div class="form-check">
                                                        <div class="col-sm-6">
                                                            <h6>Самовывоз (Бесплатно)</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <img src="assets/img/delivery.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-end">
                                        <div class="col-lg-3">
                                            <a href="#" class="btn btn-primary btn-sm mt-4 d-block" data-bs-target="#collapseTwo" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">Далее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <a href="#" class="accordion-button collapsed" type="button" data-bs-target="#collapseTwo" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Способ оплаты
                                </a>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-lg-6">
                                            <div class="card card--primary h-100">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio3" checked>
                                                <label class="form-check-label" for="radio3">
                                                    <div class="form-check">
                                                        <div class="col-sm-6">
                                                            <h6>Интернет эквайринг (Сбербанк)</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <img src="assets/img/sber.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card card--primary h-100">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio4">
                                                <label class="form-check-label" for="radio4">
                                                    <div class="form-check">
                                                        <div class="col-sm-6">
                                                            <h6>Карты (visa mastercard)</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <img src="assets/img/visamaster.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="card card--primary h-100">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio5">
                                                <label class="form-check-label" for="radio5">
                                                    <div class="form-check">
                                                        <div class="col-sm-6">
                                                            <h6>Интернет эквайринг (Сбербанк)</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <img src="assets/img/sber.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card card--primary h-100">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio6">
                                                <label class="form-check-label" for="radio6">
                                                    <div class="form-check">
                                                        <div class="col-sm-6">
                                                            <h6>Карты (visa mastercard)</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <img src="assets/img/visamaster.png" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-end">
                                        <div class="col-lg-3">
                                            <a href="#" class="btn btn-primary btn-sm mt-4 d-block" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Далее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Контактные данные
                                </a>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label for="name" class="form-label">Имя</label>
                                                            <input id="name" type="text" class="form-control form-control--light" required>
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="surname" class="form-label">Фаилия</label>
                                                            <input id="surname" type="text" class="form-control form-control--light">
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="phone" class="form-label">Телефон</label>
                                                            <input id="phone" type="tel" class="form-control form-control--light" required>
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="mail" class="form-label">Электронная почта</label>
                                                            <input id="mail" type="text" class="form-control form-control--light" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label for="textarea" class="form-label">Комментарий к заказу</label>
                                                            <textarea class="form-control form-control--light" id="textarea" rows="5"></textarea>
                                                        </div>
                                                        <div class="form-check form-check--primary mb-4">
                                                            <label class="form-check-label" for="privacy">Нажимая кнопку «Оформить заказ», вы принимаете условия <a href="#">“Политики конфиденциальности”</a></label>
                                                        </div>
                                                        
                                                        <div class="d-grid">
                                                            <button type="submit" class="btn btn-primary btn-sm d-block">Оформить заказ</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card card--white sticky-top d-none d-sm-block">
                        <div class="card-body">
                            <h2>Информация о заказе</h2>
                            <ul class="list-attribute">
                                <li class="list-attribute__item">
                                    <span class="list-attribute__name"><a href="#">Товаров <span>(2)</span></a></span>
                                    <span class="list-attribute__line"></span>
                                    <span class="list-attribute__value">11 380 ₽</span>
                                </li>
                                <li class="list-attribute__item">
                                    <span class="list-attribute__name">Тип доставки</span>
                                    <span class="list-attribute__line"></span>
                                    <span class="list-attribute__value">Самовывоз</span>
                                </li>
                                <li class="list-attribute__item">
                                    <span class="list-attribute__name">Доставка</span>
                                    <span class="list-attribute__line"></span>
                                    <span class="list-attribute__value">Бесплатно</span>
                                </li>
                            </ul>
                            <ul class="list-attribute list-attribute--primary">
                                <li class="list-attribute__item">
                                    <span class="list-attribute__name">Итого</span>
                                    <span class="list-attribute__line"></span>
                                    <span class="list-attribute__value">16 200 ₽</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            <a href="#" class="panel-arrow w-100 text-white">
                <span class="d-flex justify-content-between">
                    <span>Итого</span>
                    <i class="fas fa-chevron-up"></i>
                    <span>19 140 ₽</span>
                </span>
            </a>
            <div class="panel-body w-100">
                <div class="card card--primary">
                    <div class="card-body">
                        <h2>Информация о заказе</h2>
                        <ul class="list-attribute list-attribute--light">
                            <li class="list-attribute__item">
                                <span class="list-attribute__name">Товаров <span>(2)</span></span>
                                <span class="list-attribute__line"></span>
                                <span class="list-attribute__value">11 380 ₽</span>
                            </li>
                            <li class="list-attribute__item">
                                <span class="list-attribute__name">Тип доставки</span>
                                <span class="list-attribute__line"></span>
                                <span class="list-attribute__value">Самовывоз</span>
                            </li>
                            <li class="list-attribute__item">
                                <span class="list-attribute__name">Доставка</span>
                                <span class="list-attribute__line"></span>
                                <span class="list-attribute__value">Бесплатно</span>
                            </li>
                        </ul>
                        <ul class="list-attribute list-attribute--light">
                            <li class="list-attribute__item">
                                <span class="list-attribute__name">Итого</span>
                                <span class="list-attribute__line"></span>
                                <span class="list-attribute__value">16 200 ₽</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include_once('inc/footer.php') ?>