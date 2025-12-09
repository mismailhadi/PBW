<?php
    session_start();
    if ($_SESSION['isLoggedIn'])
    {
        header("Location = home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_SESSION['username']?> </h1>
    <a href="logout.php">Logout</a>

    <h4>Daftar User</h4>
    <table border="1" cellspacing=0 cellpadding=5>
        <tr>
            <td>No</td>
            <td>Username</td>
            <td>Status</td>
            <td>Aksi</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>