<?php include 'header.php'; ?>

<div class="card">
    <div class="card-header">
        <div class="card-title fs-3 fw-bold">OFF Gün Seç</div>
    </div>
    <div class="card-body p-9">
        <form action="islem.php" method="POST">
            <div class="row">
                <div class="col-md-12 col-12 mt-3">
                    <input type="date" name="off_day" required placeholder="OFF Gün" class="form-control"
                           value="<?= $user['off_day'] ?>">
                </div>

                <div class="col-md-12 col-12 mt-3 text-end">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <input type="submit" class="btn btn-success" value="Düzenle" name="off_duzenle">
                </div>

            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>
