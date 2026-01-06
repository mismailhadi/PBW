<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($page_title) ? $page_title : 'F1 Hub'; ?> | UAS</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>"> 
</head>
<body>
    <div class="navbar">
        <div class="navbar-item">
            <a href="index.php" class="<?php if($page_title == 'Home') echo 'active'; ?>">HOME</a>
        </div>

        <?php 
        $teams = ["Red Bull Racing" => "rb", "Ferrari" => "ferrari", "McLaren" => "mclaren", "Mercedes AMG" => "mercedes"];
        foreach($teams as $name => $pre): ?>
        <div class="navbar-item">
            <a href="#" class="<?php if(strpos($_SERVER['PHP_SELF'], $pre) !== false) echo 'active'; ?>">
                <?php echo strtoupper($name); ?>
            </a>
            <div class="dropdown">
                <a href="<?php echo $pre; ?>drivers.php">Drivers</a>
                <a href="<?php echo $pre; ?>teaminfo.php">Team Info</a>
                <a href="<?php echo $pre; ?>pastdrivers.php">Past Drivers</a>
                <a href="<?php echo $pre; ?>gallery.php">Gallery</a>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="navbar-item">
            <a href="standings.php" class="<?php if($page_title == 'Standings') echo 'active'; ?>">STANDINGS</a>
        </div>
    </div>