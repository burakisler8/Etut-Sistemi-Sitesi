<?php
include 'functions.php';

if (isset($_POST['adminGiris'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (girisAdmin($username, $password)) {
        // Admin giriş başarılı, çerez oluştur
        setcookie("kullanici_tipi", "admin", time() + (86400 * 30), "/");
        header("Location: index.php");
        exit();
    } else {
        echo "Kullanıcı adı veya şifre hatalı!";
    }
}

if (isset($_POST['ogretmenGiris'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (girisOgretmen($email, $password)) {
        // Öğretmen giriş başarılı, çerez oluştur
        setcookie("kullanici_tipi", "ogretmen", time() + (86400 * 30), "/");
        header("Location: index.php");
        exit();
    } else {
        echo "E-posta veya şifre hatalı!";
    }
}

if (isset($_POST['ogrenciGiris'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (giris($email, $password)) {
        // Öğrenci giriş başarılı, çerez oluştur
        setcookie("kullanici_tipi", "ogrenci", time() + (86400 * 30), "/");
        header("Location: index.php");
        exit();
    } else {
        echo "E-posta veya şifre hatalı!";
    }
}

if (isset($_GET['sil'])) {
    $tablo = $_GET['sil'];
    $id = $_GET['id'];
    $sayfa = $_GET['sayfa'];
    sil($tablo, "id", $id);
    go(strpos($sayfa, ".php") > -1 ? $sayfa : $sayfa . ".php");
}

if (isset($_POST['ekle'])) {
    $rows = array();
    $values = array();
    $table = $_POST['table'];
    $page = $_POST['page'];
    unset($_POST['table']);
    unset($_POST['page']);
    unset($_POST['ekle']);
    foreach ($_POST as $item => $key) {
        $row = $item;
        $value = $key;
        array_push($rows, $row);
        array_push($values, $value);
    }

    ekle($rows, $values, $table);
    go(strpos($page, ".php") > -1 ? $page : $page . ".php");
}

if (isset($_POST['brans_duzenle'])) {
    $rows = array("isim");
    $values = array($_POST["isim"]);
    guncelle($rows, $values, "branslar", "id", $_POST['id']);

    go("branslar.php");
}

if (isset($_POST['ogretmen_duzenle'])) {
    $rows = array("username", "email", "pass", "brans");
    $values = array($_POST["username"], $_POST["email"], $_POST["pass"], $_POST["brans"]);
    guncelle($rows, $values, "admin", "id", $_POST['id']);

    go("ogretmenler.php");
}

if (isset($_POST['ogrenci_duzenle'])) {
    $rows = array("username", "email", "no", "pass");
    $values = array($_POST["username"], $_POST["email"], $_POST["no"], $_POST["pass"]);
    guncelle($rows, $values, "ogrenciler", "id", $_POST['id']);

    go("ogrenciler.php");
}

if (isset($_POST['off_duzenle'])) {
    $rows = array("off_day");
    $values = array($_POST["off_day"]);
    guncelle($rows, $values, "admin", "id", $_POST['id']);

    go("off.php");
}
?>
