<?php include 'header.php'; ?>

<div class="card">
    <div class="card-header">
        <div class="card-title fs-3 fw-bold">Branşlar</div>
    </div>
    <div class="card-body p-9">
        <table class="table table-border table-hover">
            <thead>
            <tr>
                <th class="w-75">Branş Adı</th>
                <th><a href="brans-ekle.php" class="btn btn-success btn-sm w-100"><i class="fa fa-plus"></i> Ekle</a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (cokveri("branslar", "*", "order by id") as $brans) { ?>
                <tr>
                    <td><?= $brans['isim'] ?></td>
                    <td>
                        <div class="btn-group w-100 text-center">
                            <a href="brans-duzenle.php?id=<?= $brans['id'] ?>" class="btn btn-warning btn-sm btn-icon"><i
                                        class="fa fa-pen"></i></a>
                            <a href="islem.php?sil=branslar&id=<?= $brans['id'] ?>&sayfa=branslar"
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
