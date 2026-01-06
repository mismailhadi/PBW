<?php 
  $page_title = "Past McLaren Drivers"; 
  include 'header.php'; 
?>

<main id="main-content" style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">

    <div class="card-container">
        <?php 
        $past = [
            ["name" => "Daniel Ricciardo", "img" => "danielmclaren.jpg", "wins" => "1", "period" => "2021-2022"],
            ["name" => "Carlos Sainz", "img" => "sainzmclaren.jpg", "wins" => "0", "period" => "2019-2020"],
            ["name" => "Stoffel Vandoorne", "img" => "vandoorne.png", "wins" => "0", "period" => "2016-2018"],
            ["name" => "Fernando Alonso", "img" => "fernando.jpg", "wins" => "4", "period" => "2007, 2015-2018"]
        ];
        foreach($past as $d): ?>
        <div class="card">
            <img src="<?php echo $d['img']; ?>" alt="Driver">
            <div class="card-info" style="text-align: center;">
                <h3><?php echo $d['name']; ?></h3>
                <p><strong>Wins:</strong> <?php echo $d['wins']; ?></p>
                <p><?php echo $d['period']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="bio-section" style="background: rgba(255,255,255,0.03); padding: 40px; border-radius: 12px; border-left: 5px solid var(--f1-red); text-align: justify;">
        <h2 style="color: var(--f1-red); margin-bottom: 25px; text-transform: uppercase;">Full Biographies</h2>

        <h3 style="color: white;">1. Daniel Ricciardo</h3>
        <p style="color: #ccc; line-height: 1.8;">The highlight of Ricciardo's first season at McLaren came at Monza, where he led the team to a one-two victory, giving McLaren its first win since 2012. However, his time at the Woking-based team was more often associated with his struggle to adapt to the car, which ultimately led the team to terminate his contract a year early.</p>

        <h3 style="color: white; margin-top: 30px;">2. Carlos Sainz</h3>
        <p style="color: #ccc; line-height: 1.8;">Sainz's arrival marked the beginning of a new competitive era for McLaren. He became a regular points scorer and ended the 2019 season on a high note with his first podium finish at the Brazilian Grand Prix. The highlight came in 2020, when he finished second at the Italian Grand Prix before moving to Ferrari.</p>

        <h3 style="color: white; margin-top: 30px;">3. Fernando Alonso</h3>
        <p style="color: #ccc; line-height: 1.8;">Alonso joined McLaren in 2007 amid fierce competition for the title, before returning again in 2015. However, his return was marked by the McLaren-Honda engine's highly uncompetitive performance. Nevertheless, Alonso continued to show his tenacity by maximizing his limited equipment until his temporary retirement from F1 at the end of 2018.</p>
    </div>
</main>
</body></html>