<?php 
  $page_title = "Past Red Bull Drivers"; 
  include 'header.php'; 
?>

<main id="main-content" style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">

    <div class="card-container">
        <?php 
        $past_drivers = [
            ["name" => "Sergio Perez", "img" => "perez.jpg", "wins" => "5", "period" => "2021-2024"],
            ["name" => "Alexander Albon", "img" => "albon.jpg", "wins" => "0", "period" => "2019-2020"],
            ["name" => "Pierre Gasly", "img" => "gasly.jpg", "wins" => "0", "period" => "2019"],
            ["name" => "Daniil Kvyat", "img" => "kvyat.jpg", "wins" => "0", "period" => "2015-2016"],
            ["name" => "Daniel Ricciardo", "img" => "daniel.jpg", "wins" => "7", "period" => "2014-2018"]
        ];
        foreach($past_drivers as $d): ?>
        <div class="card">
            <img src="<?php echo $d['img']; ?>" alt="<?php echo $d['name']; ?>">
            <div class="card-info" style="text-align: center;">
                <h2><?php echo $d['name']; ?></h2>
                <p><strong>Wins:</strong> <?php echo $d['wins']; ?></p>
                <p><strong>Period:</strong> <?php echo $d['period']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="bio-section" style="color: #ddd; line-height: 1.8; background: rgba(255,255,255,0.03); padding: 40px; border-radius: 12px; border-left: 5px solid var(--f1-red); text-align: justify;">
        <h2 style="color: var(--f1-red); border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 15px; margin-bottom: 30px; text-transform: uppercase;">Detailed Biographies</h2>

        <h3 style="color: white;">1. Sergio Perez</h3>
        <p>Perez is known as a tough fighter with a soft touch from the land of Lucha Libre. His reputation is built on exceptional tire management, making him a “smooth operator” capable of squeezing extra performance out of racing strategies. After racing for Sauber, McLaren, and Force India, he joined Red Bull in 2021 and played a key role in Max Verstappen's championship victory, while securing five wins of his own.</p>

        <h3 style="color: white; margin-top: 30px;">2. Alexander Albon</h3>
        <p>Albon is the second driver to represent Thailand on the F1 grid after Prince Bira in the 1950s. Starting his karting career at the age of eight, he successfully rose to the highest ranks in F3 and F2. His debut with Toro Rosso in 2019 led to his rapid promotion to Red Bull in the same season.</p>

        <h3 style="color: white; margin-top: 30px;">3. Pierre Gasly</h3>
        <p>Gasly's career is a testament to the emotional ups and downs of F1. After being promoted to the Red Bull main team in 2019 to replace Ricciardo, he went through a difficult period and was sent back to the junior team. However, he made an incredible comeback by securing an emotional maiden victory at the 2020 Italian Grand Prix with AlphaTauri.</p>

        <h3 style="color: white; margin-top: 30px;">4. Daniil Kvyat</h3>
        <p>Kvyat was promoted to Red Bull in 2015 to replace Sebastian Vettel. He made history as the first Russian driver to reach the podium in F1 when he finished second in the 2015 Hungarian Grand Prix. Although he beat his teammate Daniel Ricciardo in points that season, major challenges in early 2016 led to him being transferred back to Toro Rosso.</p>

        <h3 style="color: white; margin-top: 30px;">5. Daniel Ricciardo</h3>
        <p>Joining Red Bull in 2014 alongside Vettel, Ricciardo immediately proved his talent by winning three races in his debut season with the main team. Known for his broad smile and aggressive overtaking style, he achieved seven victories during his time at Red Bull, including a legendary win at Monaco in 2018.</p>
    </div>
</main>
</body>
</html>