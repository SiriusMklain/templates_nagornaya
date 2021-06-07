<?php include_once('inc/header.php') ?>

<?php
$catalog = ['Хиты продаж', 'Зеркала', 'Стеклянные столы и полки', 'Репродукция на холсте и багете', 'Зеркальная плитка', 'Ковка художественная', 'Магнитно-маркерные стеклянные доски'];
?>

<div class="page">
    <div class="container-md">
        <div class="page-header">
            <div class="page-header__title">
                <div class="d-none d-md-block">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Каталог</li>
                        </ol>
                    </nav>
                </div>

                <h1>Каталог</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4 col-xl-3 d-none d-lg-block">
                <div class="catalog__menu sticky-top">
                    <div class="accordion" id="accordionMenu">
                        <?php $i = 0; foreach ($catalog as $item) { $i++; ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-<?= $i ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $i ?>" aria-expanded="true" aria-controls="collapse-<?= $i ?>">
                                        <?= $item ?>
                                    </button>
                                </h2>
                                <div id="collapse-<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?= $i ?>" data-bs-parent="#accordionMenu">
                                    <div class="accordion-collapse-inner" data-scrollbar>
                                        <div class="accordion-body">
                                            <ul class="accordion-menu">
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала в багетных рамах со скидкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Картины в багете</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Настольные зеркала со скидкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Столы, полки, стойки со скидками</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="accordion-menu-link">Зеркала с подсветкой</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="row justify-content-between align-items-center mb-4">
                    <div class="col-sm-auto">
                        <a href="#" class="btn btn-primary btn-sm btn-filter d-block d-sm-inline-block"><i class="fas fa-sliders-h"></i> Фильтр</a>
                    </div>
                    <div class="col-sm-auto d-none d-sm-block">
                        <div class="btn-group" role="group">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Показать: 12</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Показать: 12</a></li>
                                    <li><a class="dropdown-item" href="#">Показать: 50</a></li>
                                    <li><a class="dropdown-item" href="#">Показать: 100</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">По популярности</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">По популярности</a></li>
                                    <li><a class="dropdown-item" href="#">По дате</a></li>
                                    <li><a class="dropdown-item" href="#">По цене</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="filter">
                    <div class="filter__header">
                        <h4 class="mb-0">Фильтр</h4>
                        <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                    </div>
                    <div class="filter__body" data-scrollbar>
                        <form action="">
                            <div class="mb-4">
                                <h6>Розничная цена</h6>
                                <input type="text" class="price-range">
                            </div>
                            <div class="mb-4">
                                <h6>Высота</h6>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Все</option>
                                    <option value="1">1000</option>
                                    <option value="2">1200</option>
                                    <option value="3">1300</option>
                                    <option value="3">1500</option>
                                    <option value="3">1800</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <h6 id="headingType">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseType" aria-expanded="true" aria-controls="collapseType">Тип зеркала</a>
                                </h6>

                                <div id="collapseType" class="accordion-collapse collapse" aria-labelledby="headingType">
                                    <div class="form-check form-check--primary">
                                        <input class="form-check-input" type="checkbox" value="0" id="type-0">
                                        <label class="form-check-label" for="type-0">В помещение</label>
                                    </div>
                                    <div class="form-check form-check--primary">
                                        <input class="form-check-input" type="checkbox" value="1" id="type-1">
                                        <label class="form-check-label" for="type-1">Внутреннее</label>
                                    </div>
                                    <div class="form-check form-check--primary">
                                        <input class="form-check-input" type="checkbox" value="2" id="type-2">
                                        <label class="form-check-label" for="type-2">Дорожное</label>
                                    </div>
                                    <div class="form-check form-check--primary">
                                        <input class="form-check-input" type="checkbox" value="3" id="type-3">
                                        <label class="form-check-label" for="type-3">Уличное</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h6 id="headingType">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseFrame" aria-expanded="true" aria-controls="collapseFrame">Рама</a>
                                </h6>

                                <div id="collapseFrame" class="accordion-collapse collapse" aria-labelledby="headingFrame">
                                    <div class="form-check form-check--primary">
                                        <input class="form-check-input" type="checkbox" value="0" id="frame-0">
                                        <label class="form-check-label" for="frame-0">Алюминий</label>
                                    </div>
                                    <div class="form-check form-check--primary">
                                        <input class="form-check-input" type="checkbox" value="1" id="frame-1">
                                        <label class="form-check-label" for="frame-1">Дерево</label>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque magnam nesciunt numquam similique veritatis! Cum delectus deleniti eligendi, est praesentium quam reiciendis sapiente! Aliquam delectus eum explicabo hic ipsum iusto minima mollitia neque nobis obcaecati ratione tempore, unde voluptatem. Accusantium adipisci aliquam architecto aspernatur atque autem commodi corporis cumque deserunt dicta dolor doloribus, enim error excepturi, exercitationem fugit ipsum itaque iusto laborum magni, nam neque nulla perferendis perspiciatis quos recusandae reprehenderit sequi soluta tempore vitae. Ad adipisci amet animi atque deleniti dignissimos eius magnam minus molestiae, nemo nesciunt nihil nisi praesentium quaerat qui quidem, quisquam reprehenderit repudiandae saepe similique soluta unde veniam veritatis? Accusamus ad atque aut cumque delectus dolorem eligendi error esse facere fugiat libero, modi natus nemo nulla obcaecati odio perspiciatis quisquam quod sequi tempora ullam ut vel vero voluptate voluptatum? Accusamus alias aspernatur autem beatae, consequatur deleniti dicta, dolorum eaque earum enim eos est expedita explicabo impedit in ipsum labore laudantium maiores mollitia nam nemo nobis omnis, possimus quam quasi quod tempora unde. Architecto at blanditiis, cum cupiditate esse fuga ipsa iste iure maxime molestias necessitatibus non provident quas quidem quisquam similique sit. Ab accusantium adipisci aliquid delectus dolor dolorum eligendi, eum ex exercitationem ipsam laboriosam magnam magni, maiores molestiae molestias natus nemo numquam omnis placeat praesentium quam quis, rem repellat sit suscipit velit voluptas voluptatem? Blanditiis culpa cumque debitis deserunt doloremque ea earum eius eligendi fuga harum itaque magni maiores minus, nostrum numquam odit omnis perferendis possimus quo quod rem sequi sit, temporibus ullam vitae voluptatem voluptates. Ab asperiores dolorem laboriosam laudantium mollitia natus, numquam odio quam ratione rerum sint sit ut? Ab accusantium beatae consequuntur debitis delectus dicta doloremque eius esse, ex laborum minus placeat quo soluta tempora unde ut veritatis voluptatem? Consectetur culpa delectus deleniti dicta dignissimos dolore et eveniet iste, iure iusto laudantium modi, nesciunt nobis, rem tempora temporibus totam vitae voluptatum. A accusantium architecto consequuntur deleniti deserunt dolore dolorum ducimus ea eaque enim error est excepturi explicabo facilis id in, inventore, ipsam iure iusto laborum molestiae natus nesciunt nobis odio officia possimus quae quaerat quam repudiandae saepe sapiente temporibus veniam voluptates! Animi assumenda dicta eius eos facere id minima minus molestiae, nobis optio, perferendis quod recusandae velit veritatis voluptate! Accusantium aliquam animi consectetur ducimus minus molestias officia porro sit! Ea eum fugit id, laboriosam modi obcaecati quod sed tempora? Dignissimos, est, eum eveniet explicabo fugiat harum iure iusto necessitatibus neque qui quis sunt temporibus! Assumenda beatae commodi, deleniti deserunt ducimus enim esse eveniet ex illum inventore iure laudantium minima mollitia perspiciatis possimus praesentium similique, suscipit! Blanditiis, dolore temporibus. Animi cum dolores eveniet exercitationem illo ipsum iste nisi nostrum porro totam. Dignissimos dolorem, doloribus enim excepturi expedita fugiat illum, magnam molestiae natus nobis, omnis quisquam? Ab accusamus alias aliquid assumenda at delectus facere iusto modi natus odio officia optio quasi, ut voluptates voluptatum. Asperiores at, exercitationem expedita, facilis harum laboriosam mollitia, officia pariatur placeat ratione rerum sequi soluta sunt tenetur veniam. Cumque ex harum id ipsam iusto nesciunt? Aspernatur cum distinctio doloribus minima minus nisi sapiente voluptates! Ad adipisci aut culpa cumque debitis dolorem enim esse est eveniet ex excepturi explicabo ipsam magnam molestias, nisi numquam perferendis provident quae quasi repudiandae sunt, suscipit tenetur veniam voluptates voluptatum. Adipisci, aperiam deleniti, dolorem dolorum eaque harum, impedit incidunt laudantium nemo nihil nulla officia perspiciatis reiciendis tempora totam voluptas voluptates. Accusantium aliquam consectetur doloribus, eius eligendi esse eum expedita fugit hic in, ipsa minus natus perspiciatis provident quae quasi quis ratione repellendus reprehenderit sint soluta velit voluptatum! Ad amet assumenda ducimus, eius fugit id incidunt inventore libero magni molestiae nihil nostrum odio quam quasi sit suscipit totam? Deleniti dolorum explicabo illo magnam quo, quod repellat sapiente! Alias, aliquam architecto delectus distinctio eius fugiat id illo ipsa nam nobis quae quasi quos, reprehenderit sint tempore, veritatis voluptatem? Ad alias amet assumenda, deleniti deserunt dolore dolorem earum explicabo fugiat harum illo illum ipsam itaque, iure molestias necessitatibus non numquam placeat quae quaerat quisquam sapiente tenetur totam ullam vel vitae voluptatem. Alias aliquid, dolorem dolorum inventore, iusto neque obcaecati officiis praesentium ratione ullam unde, voluptates. A, asperiores est in libero molestias omnis? Asperiores autem culpa ducimus eaque est ex expedita fugit harum inventore labore molestiae, nemo, placeat quas sed vero voluptatem voluptates! Ad amet assumenda atque beatae cumque debitis deleniti deserunt dignissimos dolore dolorum earum eius est, expedita fuga fugiat id illo impedit inventore ipsa ipsam, iste iure maxime minus modi molestiae non obcaecati odio officiis omnis placeat possimus ratione recusandae reiciendis repellat vel vero vitae. Adipisci, commodi dolorem exercitationem fuga, magni molestias nam nobis, porro qui quos ratione sint totam unde veniam voluptas? Accusamus alias cum doloremque enim nemo nostrum sit sunt? Deserunt excepturi omnis quas voluptas voluptatum. Accusantium asperiores consequatur, cumque molestias officiis quidem quisquam recusandae rerum ullam voluptatem! Alias assumenda culpa debitis dolor doloremque explicabo fugiat iure, laborum nobis, pariatur possimus recusandae reiciendis repudiandae. Aliquid atque est, exercitationem minus nobis nulla voluptatum. Accusantium aliquid beatae, eligendi laboriosam qui sed tempora tenetur veritatis. Accusantium eos facilis hic molestias soluta sunt, tempora. Aliquam aperiam architecto dolorum eius eveniet inventore omnis possimus praesentium quidem repellendus ut, vel! Accusantium alias aliquid amet aperiam commodi consequuntur cum deleniti dicta dolor enim, eveniet exercitationem fugiat fugit harum inventore ipsam necessitatibus optio porro quae quam quas quo, quos, ratione reiciendis sequi ut velit vero? Accusantium ad, cum delectus dignissimos dolor dolore doloribus eius illo impedit mollitia nemo perferendis possimus praesentium quaerat quibusdam quo quod repudiandae sapiente sit tenetur ullam, velit voluptas voluptatem? Culpa laborum provident repellat veritatis. Accusantium at consequatur deserunt molestiae quos, soluta. Accusamus adipisci deserunt dolorum ipsum minus, vel velit. Accusamus commodi cum dolor dolorum ipsum maxime nesciunt ratione voluptas voluptatum. Ab accusantium adipisci, at, culpa dignissimos dolorum enim iusto magni minus molestiae molestias officiis ratione, recusandae tenetur voluptatibus? Aliquid amet animi aspernatur at corporis cum eligendi error esse eveniet ex fuga fugiat, inventore, labore laborum molestias mollitia natus neque nesciunt nostrum odit officia officiis praesentium quaerat quasi quia quod quos repellendus repudiandae sit soluta tenetur ullam velit veniam voluptatem voluptates?</p>
                        </form>
                    </div>
                    <div class="filter__footer">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-primary btn-sm d-block">Показать</a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn btn-outline-primary btn-sm d-block">Сбросить</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="catalog">
                    <div class="row g-4">
                        <div class="col-sm-6 col-xl-4">
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
                                        <a href="#" class="btn btn-primary btn-circle"><i class="fas fa-arrow-right"></i></a>
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
                        <div class="col-sm-6 col-xl-4">
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
                        <div class="col-sm-6 col-xl-4">
                            <div class="card card--product">
                                <a href="#" class="btn btn-light btn-circle btn-wish">
                                    <i class="far fa-heart"></i>
                                </a>
                                <a href="/product.php" class="card-img">
                                    <img src="assets/img/product.png" class="card-img-top" alt="Card title">
                                </a>
                                <div class="card-body">
                                    <a href="/product.php" class="card-title">Зеркало с подсветкой MZF-0478vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv</a>
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
                        <div class="col-sm-6 col-xl-4">
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
                        <div class="col-sm-6 col-xl-4">
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
                        <div class="col-sm-6 col-xl-4">
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
    </div>
</div>

<?php include_once('inc/footer.php') ?>
