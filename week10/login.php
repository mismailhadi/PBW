<?php

include "koneksi.php";

$uname = $_POST['uname'] ?? '' ;
$paswd = $_POST['pwd'] ?? '';

$sql = "SELECT * FROM users WHERE username = ? AND paswd = ? AND active = 1";
$ps = $koneksi->prepare($sql);
$ps->execute([$uname, $paswd]);
$rs = $ps->fetchAll(PDO::FETCH_ASSOC);

if (count($rs) > 0) {
    session_start();
    echo "login berhasil";

    $upd = $koneksi->prepare("UPDATE users SET last_login = ? WHERE id = ?");
    $upd->execute([date('Y-m-d H:i:s'), $rs[0]['id']]);

    $_SESSION['username']   = $uname;
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['userId']     = $rs[0]['id'];

    header("Location: home.php");
    exit;
} else {
    echo "login gagal";
}
?>
