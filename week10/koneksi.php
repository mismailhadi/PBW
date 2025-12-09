<?php
$host = "localhost"; //letak host
$username = "root"; //username databse ("root" jika pakai sql)
$password = "";

try {
$koneksi = new PDO("mysql:host=$host;dbname=week10",$username,$password);
$koneksi -> setAttribute(PDO::ERRMODE_EXCEPTION,PDO::ATTR_ERRMODE);
}
catch (PDOException $e)
{
    echo "Koneksi Gagal ", $e->getMessage();
}
?>