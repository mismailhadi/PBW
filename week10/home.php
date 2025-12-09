<?php
session_start();

if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
    header("Location: login.php");
    exit;
}

include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_SESSION['username']; ?> </h1>
    <a href="logout.php">Logout</a>

    <h4>Daftar User</h4>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td>No</td>
            <td>Username</td>
            <td>Status</td>
            <td>Aksi</td>
        </tr>
        <?php
            $rs = $koneksi->query("SELECT * FROM users");
            $users = $rs->fetch();
            foreach($users as $user){
                
            }
        ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>