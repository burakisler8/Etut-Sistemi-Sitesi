<?php include 'header.php'; ?>

<div class="card">
    <div class="card-header">
        <div class="card-title fs-3 fw-bold">Öğretmenler</div>
    </div>
    <div class="card-body p-9">
        <table class="table table-border table-hover">
            <thead>
            <tr>
                <th>İsim</th>
                <th>E-Posta</th>
                <th>Branş</th>
                <th>OFF Day</th>
                <th>Şifre</th>
                <th><a href="ogretmen-ekle.php" class="btn btn-success btn-sm w-100"><i class="fa fa-plus"></i> Ekle</a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (cokveri("admin", "*", "where is_admin=0 order by id") as $ogretmen) {
                ?>
                <tr>
                    <td><?= $ogretmen['username'] ?></td>
                    <td><?= $ogretmen['email'] ?></td>
                    <td><?= tekveri("branslar","id",$ogretmen['brans'])['isim'] ?></td>
                    <td><?= $ogretmen['off_day'] ?></td>
                    <td><?= $ogretmen['pass'] ?></td>
                    <td>
                        <div class="btn-group w-100 text-center">
                            <a href="ogretmen-duzenle.php?id=<?= $ogretmen['id'] ?>"
                               class="btn btn-warning btn-sm btn-icon"><i
                                        class="fa fa-pen"></i></a>
                            <a href="islem.php?sil=admin&id=<?= $ogretmen['id'] ?>&sayfa=ogretmenler"
                               class="btn btn-danger btn-sm btn-icon"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>
