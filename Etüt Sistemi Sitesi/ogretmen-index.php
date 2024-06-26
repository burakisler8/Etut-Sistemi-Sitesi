<?php include 'header.php'; ?>
<div class="card">
    <div class="card-header">
        <div class="card-title fs-3 fw-bold">Randevular</div>
    </div>
    <div class="card-body p-9">
        <table class="table table-border table-hover">
            <thead>
            <tr>
                <th class="">Öğrenci</th>
                <th class="">E-Posta</th>
                <th class="">Tarih</th>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (cokVeri("randevular", "*", "where ogretmen_id={$user['id']}") as $randevu) {
                $ogrenci = tekVeri("ogrenciler", "id", $randevu['ogrenci_id']);
            ?>
                <tr>
                    <td><?= $ogrenci['username'] ?></td>
                    <td><?= $ogrenci['email'] ?></td>
                    <td><?= $randevu['tarih'] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>