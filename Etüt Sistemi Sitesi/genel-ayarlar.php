<?php include 'header.php';

?>

    <div class="card">
        <div class="card-header">
            <div class="card-title fs-3 fw-bold">Genel Ayarlar</div>
        </div>
        <form action="islem.php" method="POST" <?= formFile() ?> class="form fv-plugins-bootstrap5 fv-plugins-framework">
            <div class="card-body p-9">
                <div class="row mb-5">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Logo</div>
                    </div>
                    <div class="col-lg-8">
                        <div class="image-input image-input-outline" data-kt-image-input="true">
                            <div class="image-input-wrapper w-125px h-125px bgi-position-center"
                                 style="background-size: 75%; background-image: url('../img/<?= $genel['site_logo'] ?>')"></div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                   data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                   aria-label="Change avatar" data-kt-initialized="1">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <input type="file" name="site_logo" accept=".png, .jpg, .jpeg .svg">
                                <input type="hidden" name="avatar_remove">
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                  data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                  aria-label="Cancel avatar" data-kt-initialized="1">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                  data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                  aria-label="Remove avatar" data-kt-initialized="1">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        </div>
                        <div class="form-text">İzin verilen dosya türleri: png, jpg, jpeg.</div>
                    </div>
                </div>


                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Site Adı</div>
                    </div>
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input required="" type="text" class="form-control form-control-solid" name="site_adi"
                               value="<?= $genel['site_adi'] ?>">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>


                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Anahtar Kelimeler</div>
                    </div>
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input required="" type="text" class="form-control form-control-solid" name="anahtar_kelime"
                               value="<?= $genel['anahtar_kelime'] ?>">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>

                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Açıklama</div>
                    </div>
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input required="" type="text" class="form-control form-control-solid" name="aciklama"
                               value="<?= $genel['aciklama'] ?>">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>

                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Adres</div>
                    </div>
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input required="" type="text" class="form-control form-control-solid" name="adres"
                               value="<?= $genel['adres'] ?>">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>

                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Telefon Numarası</div>
                    </div>
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input required="" type="text" class="form-control form-control-solid" name="telefon"
                               value="<?= $genel['telefon'] ?>">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>

                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Email</div>
                    </div>
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input required="" type="email" class="form-control form-control-solid" name="email"
                               value="<?= $genel['email'] ?>">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>

                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Mesai Saatleri</div>
                    </div>
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input required="" type="text" class="form-control form-control-solid" name="mesai"
                               value="<?= $genel['mesai'] ?>">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>

                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">İnstagram</div>
                    </div>
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input required="" type="text" class="form-control form-control-solid" name="instagram"
                               value="<?= $genel['instagram'] ?>">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>

                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Facebook</div>
                    </div>
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input required="" type="text" class="form-control form-control-solid" name="facebook"
                               value="<?= $genel['facebook'] ?>">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>

                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Whatsapp</div>
                    </div>
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input required="" type="text" class="form-control form-control-solid" name="youtube"
                               value="<?= $genel['youtube'] ?>">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>

                <div class="row mb-8">
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Twitter</div>
                    </div>
                    <div class="col-xl-9 fv-row fv-plugins-icon-container">
                        <input required="" type="text" class="form-control form-control-solid" name="twitter"
                               value="<?= $genel['twitter'] ?>">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>


            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <input type="submit" name="genel_ayar_guncelle" class="btn btn-primary" value="Kaydet">
            </div>

        </form>
    </div>


    <div class="card mt-5">
        <div class="card-header">
            <div class="card-title fs-3 fw-bold">Favicon Güncelle</div>
        </div>
        <form action="islem.php" method="POST" <?= formFile() ?> class="form fv-plugins-bootstrap5 fv-plugins-framework">
            <div class="card-body p-9">
                <div class="row mb-5">
                    <div class="col-md-3 col-12 mt-2">
                        <div class="fs-6 fw-semibold mt-2 mb-3">Favicon (48px * 48px)</div>
                    </div>
                    <div class="col-md-7 col-12 mt-2">
                        <input type="file" required name="favicon" class="form-control">
                    </div>
                    <div class="col-md-12 col-12 mt-2">
                        <img src="../img/<?= $genel['favicon1'] ?>" style="width: 100px;aspect-ratio: 1;" alt="">
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <input type="submit" name="favicon_guncelle" class="btn btn-primary" value="Kaydet">
            </div>
        </form>
    </div>
<?php include 'footer.php'; ?>