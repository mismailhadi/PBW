<?php
    session_start();
    if(!$_SESSION['isLoggedIn'])
    {
        header ("Location: form.php");
    }

    include "koneksi.php";
    $sql = "DELETE FROM users WHERE id=?";
    $stat = $koneksi->prepare($sql);
    if($stat->execute([$_GET['id']]))
    {
        header("Location: home.php?page=list");
    }
    else{
        echo "<script>alert('User gagal dihapus')
        history";
    }