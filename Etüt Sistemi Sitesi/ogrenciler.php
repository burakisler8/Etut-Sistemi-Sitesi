<?php include 'header.php'; ?>

<div class="card">
    <div class="card-header">
        <div class="card-title fs-3 fw-bold">Öğrenciler</div>
    </div>
    <div class="card-body p-9">
        <table class="table table-border table-hover">
            <thead>
            <tr>
                <th class="">Adı Soyadı</th>
                <th class="">E-Posta</th>
                <th class="">Öğrenci No</th>
                <th class="">Şifre</th>
                <th class=""><a href="ogrenci-ekle.php" class="btn btn-success btn-sm w-100"><i class="fa fa-plus"></i> Ekle</a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (cokveri("ogrenciler", "*", "order by id") as $ogrenci) {
                ?>
                <tr>
                    <td><?= $ogrenci['username'] ?></td>
                    <td><?= $ogrenci['email'] ?></td>
                    <td><?= $ogrenci['no'] ?></td>
                    <td><?= $ogrenci['pass'] ?></td>
                    <td>
                        <div class="btn-group w-100 text-center">
                            <a href="ogrenci-duzenle.php?id=<?= $ogrenci['id'] ?>"
                               class="btn btn-warning btn-sm btn-icon"><i
                                        class="fa fa-pen"></i></a>
                            <a href="islem.php?sil=ogrenciler&id=<?= $ogrenci['id'] ?>&sayfa=ogrenciler"
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
