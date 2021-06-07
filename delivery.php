<?php include_once('inc/header.php') ?>

    <div class="page">
        <div class="page-header page-header--light">
            <div class="page-header__thumbnail">
                <img alt="О компании" src="assets/img/bg/bg-delivery.png" class="page-header__image">
            </div>
            
            <div class="page-header__title">
                <div class="container">
                    <div class="d-none d-md-block">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb--light">
                                <li class="breadcrumb-item"><a href="/" class="breadcrumb-item-link">Главная</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Доставка</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row">
                        <div class="col-lg-5">
                            <h1>Доставка</h1>
                            <p>Доставка осуществляется по всей Москве и Московской области на специализированном транспорте, оборудованном стойками и подъемниками.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content delivery">
            <section class="page-section">
                <div class="container">
                    <ul class="nav nav-pills mb-5 d-grid gap-3 d-lg-flex mt-lg-5" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-delivery-tab" data-bs-toggle="pill" data-bs-target="#pills-delivery" type="button" role="tab" aria-controls="pills-delivery" aria-selected="true">Доставка</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-self-tab" data-bs-toggle="pill" data-bs-target="#pills-self" type="button" role="tab" aria-controls="pills-self" aria-selected="false">Самовывоз</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-delivery" role="tabpanel" aria-labelledby="pills-delivery-tab">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="card card-tab h-100 shadow-sm border-0">
                                                <div class="card-body">
                                                    <div class="card-icon">
                                                        <img alt="Кто доставит?" src="assets/img/icons/delivery.svg" class="img-fluid">
                                                    </div>
                                                    <h4 class="card-title">Кто доставит?</h4>
                                                    <p>
                                                        Мы доверяем доставку зеркал нашим партнерам — транспортной компании «Стекловозов».
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="card card-tab  shadow-sm border-0 h-100">
                                                <div class="card-body">
                                                    <div class="card-icon">
                                                        <img alt="Как узнать, что заказ готов?" src="assets/img/icons/where.svg" class="img-fluid">
                                                    </div>
                                                    <h4 class="card-title">Куда могут привезти?</h4>
                                                    <p>
                                                        Доставка осуществляется по всей Москве и Московской области на специализированном транспорте.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="card card-tab shadow-sm border-0 h-100">
                                                <div class="card-body">
                                                    <div class="card-icon">
                                                        <img alt="В какие дни можно" src="assets/img/icons/days.svg" class="img-fluid">
                                                    </div>
                                                    <h4 class="card-title">В какие дни можно ждать доставку?</h4>
                                                    <p>
                                                        Доставка осуществляется круглосуточно, 7 дней в неделю, включая выходные
                                                        и праздничные дни. Возможен заказ доставка в назначнный час, вплоть
                                                        до ±15 минут. Воспользуйтесь этой услугой у проверенного партнера.
                                                        С тарифами можно ознакомиться здесь.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card h-100 card-vertical">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <img alt="Узнать цены" src="assets/img/icons/wallet.svg" class="img-fluid">
                                            </div>
                                            <h4 class="card-title">Узнать цены<br> на доставку можно <a href="#" class="text-warning">тут</a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-self" role="tabpanel" aria-labelledby="pills-self-tab">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="card card-tab shadow-sm border-0 h-100">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <img alt="Где забрать заказ?" src="assets/img/icons/map.svg" class="img-fluid">
                                            </div>
                                            <h4 class="card-title">Где забрать заказ?</h4>
                                            <p>
                                                Вы можете приехать и забрать готовый заказ самостоятельно по адресу:
                                                <a href="geo:55.6793451858561, 37.605732898491325">г. Москва, ул. Нагорная, д. 17к1</a>
                                                Возле магазина-салона имеется собственная бесплатная парковка на 20 машиномест.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card card-tab shadow-sm border-0 h-100">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <img alt="Как узнать, что заказ готов?" src="assets/img/icons/ready.svg" class="img-fluid">
                                            </div>
                                            <h4 class="card-title">Как узнать, что заказ готов?</h4>
                                            <p>
                                                О готовности заказа Вас уведомят по СМС. Сообщите логисту ориентировочное время визита,
                                                чтобы мы подготовили изделие к осмотру - с дальнейшей упаковкой для транспортировки.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card card-tab shadow-sm border-0">
                                        <div class="card-body pt-4">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="accordion d-block d-md-none" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingTwo">
                                                                <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    <h4 class="card-title">Что следует учесть при заказе крупногабаритных изделий?</h4>
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <ul class="list-bullet">
                                                                        <li>Возможность парковки автомобиля у места разгрузки не далее 10 метров</li>
                                                                        <li>Возможность заноса исходя из габаритных размеров (ширина, длина, высота) холла.*</li>
                                                                        <li>Габаритные размеры (ширина, длина, высота) лестничного марша и межэтажных площадок при отсутствии грузового лифта.*</li>
                                                                        <li>При наличии грузового лифта возможность подъема на нем изделия.**</li>
                                                                        <li>Габаритные размеры (ширина, длина, высота) тамбура перед дверным проемом и дверного проема. ***</li>
                                                                        <li>Возможность заноса изделия и его позиционирования относительно плоскости монтажа:
                                                                            <ol class="mt-3">
                                                                                <li>Высота и ширина дверных проемов ***</li>
                                                                                <li>Габаритные размеры (ширина, длина, высота) коридора,помещения, в котором планируется произвести монтажные работы *</li>
                                                                                <li>Стороны открывания дверей для возможности проноса и разворота изделия.</li>
                                                                            </ol>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-none d-md-block">
                                                        <h4 class="card-title">Что следует учесть при заказе крупногабаритных изделий?</h4>
                                                        <ul class="list-bullet">
                                                            <li>Возможность парковки автомобиля у места разгрузки не далее 10 метров</li>
                                                            <li>Возможность заноса исходя из габаритных размеров (ширина, длина, высота) холла.*</li>
                                                            <li>Габаритные размеры (ширина, длина, высота) лестничного марша и межэтажных площадок при отсутствии грузового лифта.*</li>
                                                            <li>При наличии грузового лифта возможность подъема на нем изделия.**</li>
                                                            <li>Габаритные размеры (ширина, длина, высота) тамбура перед дверным проемом и дверного проема. ***</li>
                                                            <li>Возможность заноса изделия и его позиционирования относительно плоскости монтажа:
                                                                <ol class="mt-3">
                                                                    <li>Высота и ширина дверных проемов ***</li>
                                                                    <li>Габаритные размеры (ширина, длина, высота) коридора,помещения, в котором планируется произвести монтажные работы *</li>
                                                                    <li>Стороны открывания дверей для возможности проноса и разворота изделия.</li>
                                                                </ol>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="d-grid gap-4">
                                                        <div class="card card-tab border-0 h-100 bg-light">
                                                            <div class="card-body text-primary">
                                                                <div class="mb-3">
                                                                    <i class="fas fa-info-circle fa-2x"></i>
                                                                </div>
                                                                <ul class="list-unstyled">
                                                                    <li>* Длина большей диагонали изделия не должна превышать высоту потолка и должна быть менее высоты потолка на 400 мм.</li>
                                                                    <li>* Максимально возможный размер поднимаемого на грузовом лифте изделия 2000х1600 мм.</li>
                                                                    <li>*** Длина короткой стороны изделия не должна превышать длину диагонали дверного проема и должна быть меньше на 200 мм.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card card-tab border-0 bg-primary">
                                                            <div class="card-body">
                                                                <div class="card-icon">
                                                                    <img src="assets/img/icons/calc.svg" alt="Воспользуйтесь услугой вызова Менеджера">
                                                                </div>
                                                                <h4 class="card-title text-white">Воспользуйтесь услугой вызова Менеджера</h4>
                                                                <p class="text-white">
                                                                    Все эти моменты будут учтены и рассчитаны специалистом при производстве групногабаритного изделия из зеркал,
                                                                    его доставки и монтаже – <a href="#" class="text-white">zamer.info</a>
                                                                </p>
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
            </section>
        </div>
    </div>

<?php include_once('inc/footer.php') ?>