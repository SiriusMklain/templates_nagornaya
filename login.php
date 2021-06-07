<?php include_once('inc/header.php') ?>

    <div class="page bg-white">
        <div class="container-md">
            <div class="page-header">
                <div class="page-header__title">
                    <div class="d-none d-md-block">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Вход</li>
                            </ol>
                        </nav>
                    </div>

                    <h1>Вход</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <h4 class="text-primary mb-3 text-center">Войдите или зарегистрируйтесь, чтобы продолжить</h4>
                    <form>
                        <div class="mb-4">
                            <input id="email" type="text" class="form-control form-control--light" placeholder="E-mail" required>
                        </div>
                        <div class="mb-4">
                            <input id="password" type="password" class="form-control form-control--light" name="password" placeholder="Пароль" required>
                            <span toggle="#password" class="far fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="mb-4">
                            <a href="#">Забыли пароль?</a>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-sm mb-2">
                                Зарегистрироваться
                            </button>
                            <button type="submit" class="btn btn-outline-primary btn-sm">
                                Войти
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include_once('inc/footer.php') ?>