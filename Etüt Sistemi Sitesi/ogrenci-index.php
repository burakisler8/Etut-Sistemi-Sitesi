<?php
include 'ogrenci-header.php';
if (isset($_GET['ogretmen_id'])) {
    $secili_ogretmen = tekveri("admin", "id", $_GET['ogretmen_id']);
}
$ogretmenler = cokveri("admin", "*", "where is_admin=0 order by id");


if (isset($_GET['randevu_olustur'])) {
    $rows = array("ogrenci_id", "ogretmen_id", "tarih");
    $values = array($_SESSION['id'], $_GET['ogretmen_id'], $_GET['randevu_tarihi']);
    ekle($rows, $values, "randevular");
    go("ogrenci-randevular.php");
}
?>

<div class="card">
    <div class="card-header">
        <div class="card-title fs-3 fw-bold">Randevu Oluştur</div>
    </div>
    <div class="card-body p-9">
        <form action="ogrenci-index.php" method="GET">
            <div class="col-md-12 col-12 mt-3">
                <label>Öğretmen Seçiniz:</label>
                <select name="ogretmen_id" class="form-select" required onchange="this.form.submit()">
                    <option value="" disabled selected>Öğretmen Seçiniz</option>
                    <?php foreach ($ogretmenler as $ogretmen) { ?>
                        <option value="<?= $ogretmen['id'] ?>" <?php if (isset($_GET['ogretmen_id']) && $_GET['ogretmen_id'] == $ogretmen['id']) echo "selected"; ?>><?= $ogretmen['username'] ?> - <?= tekveri("branslar","id",$ogretmen['brans'])['isim'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <?php if (isset($secili_ogretmen)) { ?>
                <div class="col-md-12 col-12 mt-3">
                    <label>Tarih Seçiniz:</label>
                    <input type="date" name="randevu_tarihi" class="form-control" required
                           onchange="validateDate(this)">
                </div>
            <?php } ?>

            <div class="col-md-12 col-12 mt-3 text-end" id="submitBtn" style="display: none;">
                <input type="submit" class="btn btn-success" name="randevu_olustur" value="Randevu Oluştur">
            </div>
        </form>
    </div>
</div>

<script>
    function validateDate(input) {
        var today = new Date();
        var selectedDate = new Date(input.value);
        var blockedDate = new Date('<?= $secili_ogretmen['off_day'] ?>');
        var maxDate = new Date();
        maxDate.setDate(maxDate.getDate() + 7);

        if (selectedDate <= today) {
            alert("Geçmiş tarih seçemezsiniz.");
            input.value = '';
        }

        if (selectedDate.getTime() === blockedDate.getTime()) {
            alert("Bu Tarihte öğretmen izinlidir.");
            input.value = '';
        }

        if (selectedDate > maxDate) {
            alert("En fazla 7 gün sonrasına kadar randevu alabilirsiniz.");
            input.value = '';
        }

        // Tüm kriterlere uygunsa submit butonunu göster
        if (selectedDate > today && selectedDate.getTime() !== blockedDate.getTime() && selectedDate <= maxDate) {
            document.getElementById('submitBtn').style.display = 'block';
        } else {
            document.getElementById('submitBtn').style.display = 'none';
        }
    }
</script>

</script>


<?php include 'ogrenci-footer.php'; ?>
