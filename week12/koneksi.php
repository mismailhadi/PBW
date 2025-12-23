<?php
$servername = '127.0.0.1';
$userdb = "root";
$password = "";

try{
    $koneksi = new PDO("mysql:host=$servername;dbname=week12", $userdb ,$password);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "koneksi Gagal ",$e->getMessage();
}