<?php
include 'header.php';
$paket = tekveri("ogrenciler", "id", $_GET['id']);
?>
<script src="https://cdn.ckeditor.com/4.24.0-lts/standard/ckeditor.js"></script>


<div class="card">
    <div class="card-header">
        <div class="card-title fs-3 fw-bold">Öğrenci Düzenle</div>
    </div>
    <div class="card-body p-9">
        <form action="islem.php" method="POST">
            <div class="row">
                <div class="col-md-12 col-12 mt-3">
                    <input type="text" name="username" value="<?= $paket['username'] ?>" required placeholder="Adı Soyadı" class="form-control ">
                </div>

                <div class="col-md-12 col-12 mt-3">
                    <input type="email" name="email" value="<?= $paket['email'] ?>" required placeholder="E-Posta" class="form-control ">
                </div>

                <div class="col-md-12 col-12 mt-3">
                    <input type="number" name="no" value="<?= $paket['no'] ?>" required placeholder="Öğrenci No" class="form-control ">
                </div>

                <div class="col-md-12 col-12 mt-3">
                    <input type="password" name="pass" value="<?= $paket['pass'] ?>" required placeholder="Şifre" class="form-control ">
                </div>

                <div class="col-md-12 col-12 mt-3 text-end">
                    <input type="hidden" name="id" value="<?= $paket['id'] ?>">
                    <input type="submit" class="btn btn-success" value="Düzenle" name="ogrenci_duzenle">
                </div>

            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>
<script>
    CKEDITOR.replace('aciklama');
</script>