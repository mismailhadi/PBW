<?php 
    $page_title = "Standings"; 
    include 'header.php'; 

    $drivers = [
        ["pos" => 1, "name" => "Lando Norris", "team" => "McLaren", "points" => 423],
        ["pos" => 2, "name" => "Max Verstappen", "team" => "Red Bull Racing", "points" => 421],
        ["pos" => 3, "name" => "Oscar Piastri", "team" => "McLaren", "points" => 410],
        ["pos" => 4, "name" => "George Russell", "team" => "Mercedes", "points" => 319],
        ["pos" => 5, "name" => "Charles Leclerc", "team" => "Ferrari", "points" => 242],
        ["pos" => 6, "name" => "Lewis Hamilton", "team" => "Ferrari", "points" => 156],
        ["pos" => 7, "name" => "Kimi Antonelli", "team" => "Mercedes", "points" => 150]
    ];

    $constructors = [
        ["pos" => 1, "team" => "McLaren", "points" => 833],
        ["pos" => 2, "team" => "Mercedes", "points" => 469],
        ["pos" => 3, "team" => "Red Bull Racing", "points" => 451],
        ["pos" => 4, "team" => "Ferrari", "points" => 398]
    ];
?>

<main id="main-content">
    <div class="content-box-glass">
        
        <h1 style="color: var(--f1-red); text-align: center; margin-bottom: 20px;">2025 DRIVER STANDINGS</h1>
        <table style="width: 100%; border-collapse: collapse; background: rgba(0,0,0,0.3); margin-bottom: 50px;">
            <thead>
                <tr style="border-bottom: 3px solid var(--f1-red); text-align: left;">
                    <th style="padding: 15px;">POS</th>
                    <th>DRIVER</th>
                    <th>TEAM</th>
                    <th>POINTS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($drivers as $d): ?>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                    <td style="padding: 15px; font-weight: bold;"><?php echo $d['pos']; ?></td>
                    <td><?php echo $d['name']; ?></td>
                    <td><?php echo $d['team']; ?></td>
                    <td style="color: var(--f1-red); font-weight: bold;"><?php echo $d['points']; ?> PTS</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.1); margin: 40px 0;">

        <h1 style="color: var(--f1-red); text-align: center; margin-bottom: 20px;">2025 CONSTRUCTORS STANDINGS</h1>
        <table style="width: 100%; border-collapse: collapse; background: rgba(0,0,0,0.3);">
            <thead>
                <tr style="border-bottom: 3px solid var(--f1-red); text-align: left;">
                    <th style="padding: 15px;">POS</th>
                    <th>TEAM</th>
                    <th>POINTS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($constructors as $row): ?>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                    <td style="padding: 15px; font-weight: bold;"><?php echo $row['pos']; ?></td>
                    <td><?php echo $row['team']; ?></td>
                    <td style="color: var(--f1-red); font-weight: bold;"><?php echo $row['points']; ?> PTS</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
</body></html>