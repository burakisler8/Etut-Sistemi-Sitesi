<?php
include 'header.php';
?>
<script src="https://cdn.ckeditor.com/4.24.0-lts/standard/ckeditor.js"></script>


<div class="card">
    <div class="card-header">
        <div class="card-title fs-3 fw-bold">Branş Ekle</div>
    </div>
    <div class="card-body p-9">
        <form action="islem.php" method="POST">
            <div class="row">
                <div class="col-md-12 col-12 mt-3">
                    <input type="text" name="isim" required placeholder="İsim" class="form-control ">
                </div>

                <div class="col-md-12 col-12 mt-3 text-end">
                    <input type="hidden" name="table" value="branslar">
                    <input type="hidden" name="page" value="branslar.php">
                    <input type="submit" class="btn btn-success" value="Ekle" name="ekle">
                </div>

            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>