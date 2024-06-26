<?php include 'ogrenci-header.php'; ?>

<div class="card">
    <div class="card-header">
        <div class="card-title fs-3 fw-bold">Etütlerin</div>
    </div>
    <div class="card-body p-9">
        <table class="table table-border table-hover">
            <thead>
            <tr>
                <th>Öğretmen Adı</th>
                <th>Branş</th>
                <th>Tarih</th>
                <th style="width: 100px"><a href="ogrenci-index.php" class="btn btn-success btn-sm w-100"><i class="fa fa-plus"></i> Yeni</a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (cokveri("randevular", "*", "where ogrenci_id=" . $_SESSION['id'] . " order by id") as $brans) { ?>
                <tr>
                    <td><?= tekveri("admin", "id", $brans['ogretmen_id'])['username'] ?></td>
                    <td><?= tekveri("branslar", "id", tekveri("admin", "id", $brans['ogretmen_id'])['brans'])['isim'] ?></td>
                    <td><?= $brans['tarih'] ?></td>
                    <td>
                        <div class="btn-group w-100 text-center">
                            <a href="islem.php?sil=randevular&id=<?= $brans['id'] ?>&sayfa=ogrenci-randevular"
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
