<?php
include 'header.php';
?>
    <script src="https://cdn.ckeditor.com/4.24.0-lts/standard/ckeditor.js"></script>


    <div class="card">
        <div class="card-header">
            <div class="card-title fs-3 fw-bold">Öğretmen Ekle</div>
        </div>
        <div class="card-body p-9">
            <form action="islem.php" method="POST">
                <div class="row">
                    <div class="col-md-12 col-12 mt-3">
                        <input type="text" name="username" required placeholder="İsim" class="form-control ">
                    </div>

                    <div class="col-md-12 col-12 mt-3">
                        <input type="email" name="email" required placeholder="E-Posta" class="form-control ">
                    </div>

                    <div class="col-md-12 col-12 mt-3">
                        <select name="brans" class="form-select" required>
                            <option value="" disabled selected>Branş Seçiniz</option>
                            <?php foreach (cokveri("branslar", "*", "order by id") as $brans) { ?>
                                <option value="<?= $brans['id'] ?>"><?= $brans['isim'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-md-12 col-12 mt-3">
                        <input type="password" name="pass" required placeholder="Şifre" class="form-control ">
                    </div>

                    <div class="col-md-12 col-12 mt-3 text-end">
                        <input type="hidden" name="is_admin" value="0">
                        <input type="hidden" name="table" value="admin">
                        <input type="hidden" name="page" value="ogretmenler.php">
                        <input type="submit" class="btn btn-success" value="Ekle" name="ekle">
                    </div>

                </div>
            </form>
        </div>
    </div>

<?php include 'footer.php'; ?>