<?php
include 'header.php';
$paket = tekveri("branslar", "id", $_GET['id']);
?>
<script src="https://cdn.ckeditor.com/4.24.0-lts/standard/ckeditor.js"></script>


<div class="card">
    <div class="card-header">
        <div class="card-title fs-3 fw-bold">Branş Düzenle</div>
    </div>
    <div class="card-body p-9">
        <form action="islem.php" method="POST">
            <div class="row">
                <div class="col-md-12 col-12 mt-3">
                    <input type="text" name="isim" required placeholder="İsim" class="form-control" value="<?= $paket['isim'] ?>">
                </div>

                <div class="col-md-12 col-12 mt-3 text-end">
                    <input type="hidden" name="id" value="<?= $paket['id'] ?>">
                    <input type="submit" class="btn btn-success" value="Düzenle" name="brans_duzenle">
                </div>

            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>
<script>
    CKEDITOR.replace('aciklama');
</script>