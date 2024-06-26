<?php
include 'header.php';
?>

<div class="card">
    <div class="card-header">
        <div class="card-title fs-3 fw-bold">Anasayfa</div>
    </div>
    <div class="card-body p-9">
        <?php
        if(isset($_COOKIE["kullanici_tipi"])) {
            $kullaniciTipi = htmlspecialchars($_COOKIE["kullanici_tipi"]);
            echo "Hoş geldin, " . $kullaniciTipi . "!";
        } else {
            echo "Hoş geldiniz!";
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
