<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Giriş</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
</head>
<body id="kt_body" class="bg-dark">
<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
         style="background-image: url(/metronic8/demo1/assets/media/illustrations/sketchy-1/14-dark.png)">
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">

            <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="islem.php" method="POST">
                    <div class="text-center mb-10">
                        <h1 class="text-dark mb-3">Giriş Ekranı</h1>
                        <div class="text-gray-400 fw-bold fs-4">
                            <a href="#" class="link-primary fw-bolder"></a></div>
                    </div>

                    <div class="text-center row mb-5">
                        <div class="col-md-12 col-12 mt-2">
                            <a href="?type=admin" class="btn btn-primary">Yönetici Girişi</a>
                        </div>
                    
                        <div class="col-md-6 col-12 mt-2">
                            <a href="?type=ogretmen" class="btn btn-primary">Öğretmen Girişi</a>
                        </div>

                        <div class="col-md-6 col-12 mt-2">
                            <a href="?type=ogrenci" class="btn btn-primary">Öğrenci Girişi</a>
                        </div>
                    </div>

                    <?php if (isset($_GET['type']) && $_GET['type'] == "admin") { ?>
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Yönetici Girişi</h1>
                        </div>

                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">Kullanıcı Adı</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" name="username"
                                   autocomplete="off"/>
                        </div>
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Şifre</label>
                            </div>
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                   name="password"
                                   autocomplete="off"/>
                        </div>
                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" name="adminGiris"
                                    class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Giriş Yap</span>
                                <span class="indicator-progress">Lütfen Bekleyiniz...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    <?php } ?>

                    <?php if (isset($_GET['type']) && $_GET['type'] == "ogretmen") { ?>
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Öğretmen Girişi</h1>
                        </div>

                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">Kullanıcı Adı</label>
                            <input class="form-control form-control-lg form-control-solid" type="email" name="email"
                                   autocomplete="off"/>
                        </div>
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Şifre</label>
                            </div>
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                   name="password"
                                   autocomplete="off"/>
                        </div>
                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" name="ogretmenGiris"
                                    class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Giriş Yap</span>
                                <span class="indicator-progress">Lütfen Bekleyiniz...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    <?php } ?>

                    <?php if (isset($_GET['type']) && $_GET['type'] == "ogrenci") { ?>
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Öğrenci Girişi</h1>
                        </div>

                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">Kullanıcı Adı</label>
                            <input class="form-control form-control-lg form-control-solid" type="email" name="email"
                                   autocomplete="off"/>
                        </div>
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Şifre</label>
                            </div>
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                   name="password"
                                   autocomplete="off"/>
                        </div>
                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" name="ogrenciGiris"
                                    class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Giriş Yap</span>
                                <span class="indicator-progress">Lütfen Bekleyiniz...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
</body>
</html>
