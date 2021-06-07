<?php include_once('inc/header.php') ?>

    <div class="page bg-white">
        <div class="container-md">
            <div class="page-header">
                <div class="page-header__title">
                    <div class="d-none d-md-block">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Проекты</li>
                            </ol>
                        </nav>
                    </div>

                    <h1>Реализованные проекты</h1>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 video-project">
                    <a data-fancybox="gallery"  href="assets/img/project.png" class="play">
                        <i class="fas fa-play-circle fa-4x"></i>
                        <h2>Name video</h2>
                    </a>
                    <a data-fancybox="gallery" href="assets/img/project.png">
                        <img class="card-img-top" src="assets/img/project.png" alt="">
                    </a>
                </div>


            </div>
            <a class="btn btn-primary mtn-sm d-block mt-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Открыть еще</a>
        </div>
    </div>

<?php include_once('inc/footer.php') ?>