<?php
    include "koneksi.php";

    $usr = $_POST['username'];
    $paswd = $_POST['paswd'];
    $cpaswd = $_POST['cpaswd'];
    $active = $_POST['active'];
    $id = $_POST['id'];

    if($paswd == "") {
        $query = "UPDATE users SET username = ?, active = ? WHERE id = ?";
        $stat = $koneksi->prepare($query);
        $stat = $stat->execute([$usr,$active,$id]);
    }
    else
    {
        if($paswd == $cpaswd) {
            $cpaswd = password_hash($paswd, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, paswd, active) values (?,?,?)";
            $stat = $koneksi->prepare($sql);
            if($stat->execute([$usr,$cpaswd,1]));
        }
        else
        {
            echo "<script>alert('password dan konfirm password harus sama');</script>";
        }
    }

    if($stat)
    {
        echo "<script>alert('update user berhasil')</script>";
        header("Location: home.php?page=list");
    }
    else
    {
        echo "<script>alert('update user gagal')
        history.go(-1)
        </script";
    }