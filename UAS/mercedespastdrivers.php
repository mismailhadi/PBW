<?php 
  $page_title = "Past Mercedes Drivers"; 
  include 'header.php'; 
?>

<main id="main-content" style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
  
    <div class="card-container">
        <?php 
        $past = [
            ["name" => "Lewis Hamilton", "img" => "lewismerc.jpg", "wins" => "105", "period" => "2013-2024"],
            ["name" => "Valtteri Bottas", "img" => "valtteri.jpg", "wins" => "10", "period" => "2017-2021"],
            ["name" => "Nico Rosberg", "img" => "nicooo.jpg", "wins" => "23", "period" => "2010-2016"]
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

        <h3 style="color: white;">1. Lewis Hamilton</h3>
        <p style="color: #ccc; line-height: 1.8;">Hamilton dominated the turbo-hybrid era with Mercedes, winning his second world title in 2014 and his third in 2015. He continued to make history by equaling Fangio's total of five titles in 2018, and in 2020 he equaled Michael Schumacher's record of seven world titles and broke the record for the most Grand Prix wins in F1 history.</p>

        <h3 style="color: white; margin-top: 30px;">2. Valtteri Bottas</h3>
        <p style="color: #ccc; line-height: 1.8;">After his debut with Williams, Bottas was promoted to the Mercedes championship seat in 2017 to replace Nico Rosberg. During his five seasons with the Silver Arrows, Bottas proved to be a reliable points scorer, finishing second in the final standings in 2019 before starting a new chapter with Alfa Romeo in 2022.</p>

        <h3 style="color: white; margin-top: 30px;">3. Nico Rosberg</h3>
        <p style="color: #ccc; line-height: 1.8;">Joining Mercedes in 2010 alongside Michael Schumacher, Rosberg achieved his first victory in China in 2012. His fierce rivalry with Hamilton reached its peak in the 2016 season, where after a tense battle that lasted until the final race in Abu Dhabi, Rosberg managed to realize his childhood dream of becoming World Champion. He shocked the world by announcing his retirement just five days after winning the title.</p>
    </div>
</main>
</body></html>