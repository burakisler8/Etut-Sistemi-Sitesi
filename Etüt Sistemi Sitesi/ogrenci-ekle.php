<?php
include 'header.php';
?>
    <script src="https://cdn.ckeditor.com/4.24.0-lts/standard/ckeditor.js"></script>


    <div class="card">
        <div class="card-header">
            <div class="card-title fs-3 fw-bold">Öğrenci Ekle</div>
        </div>
        <div class="card-body p-9">
            <form action="islem.php" method="POST">
                <div class="row">
                    <div class="col-md-12 col-12 mt-3">
                        <input type="text" name="username" required placeholder="Adı Soyadı" class="form-control ">
                    </div>

                    <div class="col-md-12 col-12 mt-3">
                        <input type="email" name="email" required placeholder="E-Posta" class="form-control ">
                    </div>

                    <div class="col-md-12 col-12 mt-3">
                        <input type="number" name="no" required placeholder="Öğrenci No" class="form-control ">
                    </div>

                    <div class="col-md-12 col-12 mt-3">
                        <input type="password" name="pass" required placeholder="Şifre" class="form-control ">
                    </div>

                    <div class="col-md-12 col-12 mt-3 text-end">
                        <input type="hidden" name="table" value="ogrenciler">
                        <input type="hidden" name="page" value="ogrenciler.php">
                        <input type="submit" class="btn btn-success" value="Ekle" name="ekle">
                    </div>

                </div>
            </form>
        </div>
    </div>

<?php include 'footer.php'; ?>