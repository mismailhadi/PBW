<?php 
  $page_title = "Past Ferrari Drivers"; 
  include 'header.php'; 
?>

<main id="main-content" style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
   
    <div class="card-container">
        <?php 
        $past = [
            ["name" => "Carlos Sainz", "img" => "sainz.jpg", "wins" => "4", "period" => "2021-2024"],
            ["name" => "Sebastian Vettel", "img" => "vettel.jpg", "wins" => "14", "period" => "2015-2020"],
            ["name" => "Kimi Raikkonen", "img" => "kimi.jpg", "wins" => "10", "period" => "2007-2018"]
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
        <h2 style="color: var(--f1-red); margin-bottom: 25px; text-transform: uppercase;">Driver Biographies</h2>

        <h3 style="color: white;">Carlos Sainz</h3>
        <p style="color: #ccc; line-height: 1.8;">Known as the ‘matador’ of Madrid's racing aristocracy, Sainz has shown tremendous fighting spirit since his debut. As the son of a world rally champion, he inherited exceptional driving skills, replacing his childhood hero Fernando Alonso at McLaren and then Sebastian Vettel at Ferrari.</p>

        <h3 style="color: white; margin-top: 30px;">Sebastian Vettel</h3>
        <p style="color: #ccc; line-height: 1.8;">Vettel began his career at Ferrari with high hopes, winning his first race in his debut season in 2015. Despite struggling against Hamilton's dominance, he managed to secure 14 victories for the Scuderia before finally parting ways at the end of the 2020 season.</p>

        <h3 style="color: white; margin-top: 30px;">Kimi Raikkonen</h3>
        <p style="color: #ccc; line-height: 1.8;">Known as ‘Iceman’, Raikkonen was the last driver to win the world title for Ferrari in 2007. With his cool personality but lightning speed on the track, Kimi remains one of the most beloved drivers in Ferrari's history.</p>
    </div>
</main>
</body></html>