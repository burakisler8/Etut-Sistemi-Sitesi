<?php
header('Content-Type: text/html; charset=utf-8');
ob_start();
session_start();

try {
    $db = new PDO("mysql:host=localhost;dbname=veritabani;charset=utf8", 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage();
}

if (isset($_SESSION['a_id'])) {
    $user = tekVeri("admin", "id", $_SESSION['a_id']);
}

function tekVeri($table, $row, $id) {
    global $db;
    $data = $db->query("SELECT * FROM {$table} WHERE {$row} = '{$id}'")->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function cokVeri($table, $selects, $manuel) {
    global $db;
    $data = $db->query("SELECT {$selects} FROM {$table} {$manuel}", PDO::FETCH_ASSOC);
    return $data;
}

function sil($table, $row, $id) {
    global $db;
    $query = $db->prepare("DELETE FROM {$table} WHERE {$row} = :id");
    $delete = $query->execute(array('id' => $id));
}

function ekle($rows, $values, $table) {
    global $db;
    $other = array();
    $query = "";
    $count = count($values);
    $a = 0;
    for ($i = 0; $i < $count; $i++) {
        $a++;
        if ($a == $count)
            $query .= $rows[$i] . " = ?";
        else
            $query .= $rows[$i] . " = ?,";
    }
    $sql = $db->prepare("INSERT INTO {$table} SET {$query}");
    $insert = $sql->execute($values);
    return $insert ? true : false;
}

function guncelle($rows, $values, $table, $target, $id) {
    global $db;
    $other = array();
    $query = "";
    $a = 0;
    $count = count($values);
    for ($i = 0; $i < $count; $i++) {
        $a++;
        if ($a == $count)
            $query .= $rows[$i] . " = :a_" . $rows[$i];
        else
            $query .= $rows[$i] . " = :a_" . $rows[$i] . ",";
    }
    $b = 0;
    foreach ($rows as $rows) {
        $other["a_" . $rows] = $values[$b];
        $b++;
    }
    $other["id"] = $id;
    $sql = $db->prepare("UPDATE {$table} SET {$query} WHERE {$target} = :id");
    $update = $sql->execute($other);
    return $update ? true : false;
}

function go($url) {
    header("Location: {$url}");
    exit;
}

function cikis() {
    session_destroy();
    header("Location:index.php?cikis=1");
}

function giris($u_email, $u_pass) {
    global $db;
    $kullanicisor = $db->prepare("SELECT * FROM ogrenciler where email=:email and pass=:pass");
    $kullanicisor->execute(array('email' => $u_email, 'pass' => $u_pass));
    $say = $kullanicisor->rowCount();
    $kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);
    $u_id = $kullanicicek['id'];

    if ($say > 0) {
        $_SESSION['id'] = $u_id;
        setcookie("kullanici_tipi", "ogrenci", time() + (86400 * 30), "/");
        go("ogrenci-index.php");
    } else {
        go("login.php?hatali_sifre=1");
    }
}

function girisOgretmen($u_email, $u_pass) {
    global $db;
    $kullanicisor = $db->prepare("SELECT * FROM admin where email=:email and pass=:password and is_admin=0");
    $kullanicisor->execute(array('email' => $u_email, 'password' => $u_pass));
    $say = $kullanicisor->rowCount();
    $kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);
    $u_id = $kullanicicek['id'];

    if ($say > 0) {
        $_SESSION['a_id'] = $u_id;
        setcookie("kullanici_tipi", "ogretmen", time() + (86400 * 30), "/");
        go("ogretmen-index.php");
    } else {
        go("login.php?hatali_sifre=1");
    }
}

function girisAdmin($u_name, $u_pass) {
    global $db;
    $kullanicisor = $db->prepare("SELECT * FROM admin where username=:name and pass=:password and is_admin=1");
    $kullanicisor->execute(array('name' => $u_name, 'password' => $u_pass));
    $say = $kullanicisor->rowCount();
    $kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);
    $u_id = $kullanicicek['id'];

    if ($say > 0) {
        $_SESSION['a_id'] = $u_id;
        setcookie("kullanici_tipi", "admin", time() + (86400 * 30), "/");
        go("index.php?status=1");
    } else {
        go("index.php?status=0");
    }
}

function girisKontrol($degisken) {
    if (!isset($_SESSION[$degisken])) {
        go("login.php");
    }
}
?>
