<?php 
  $page_title = "Red Bull Team Info"; 
  include 'header.php'; 
?>

<main id="main-content" style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
    
    <div class="info-container">
        <div class="team-branding" style="background: white; padding: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
            <img src="redbull.png" alt="Red Bull Logo" style="width: 100%; max-width: 300px;">
        </div>
        <div class="team-stats">
            <h1 style="color: var(--f1-red); margin-top: 0; font-size: 2.5rem; font-weight: 900;">Oracle Red Bull Racing</h1>
            <div class="stats-grid">
                <div class="stat-item"><label>FORMED</label><value>2005</value></div>
                <div class="stat-item"><label>COUNTRY</label><value>UK & Austria</value></div>
                <div class="stat-item"><label>PRINCIPAL</label><value>Lauren Mekies</value></div>
                <div class="stat-item"><label>DRIVER TITLES</label><value>8</value></div>
                <div class="stat-item"><label>CONSTRUCTOR TITLES</label><value>6</value></div>
            </div>
        </div>
    </div>

    <div class="history-section" style="margin-top: 50px; background: rgba(0,0,0,0.3); padding: 40px; border-radius: 12px;">
        <h3 style="color: var(--f1-red); border-bottom: 2px solid var(--f1-red); padding-bottom: 10px; margin-bottom: 30px; display: inline-block;">Team History</h3>
        <div class="history-text" style="color: #ccc; line-height: 2; text-align: justify;">
            <p>Oracle Red Bull Racing has brought racing passion, technical innovation, and undeniable victories to the F1 grid since its inception in 2004. Based at their factory in Milton Keynes, the team houses some of the brightest minds in motorsport who continue to push the boundaries of technology and data strategy.</p>
            
            <p>Led by Team Principal Christian Horner, the team has disrupted the status quo in F1 by securing double world championship titles. The first race victory came in 2009 through Sebastian Vettel in China, marking the beginning of the team's dominance as Vettel became the youngest World Champion the following year.
</p>
            
            <p>In 2022, the team partnered with Oracle and used the Red Bull Powertrain engine in the RB18 car. That season became one of the most dominant in the team's history, winning 17 races as Max Verstappen secured his second world championship title.</p>
        </div>
    </div>
</main>
<script src="script.js"></script>
</body>
</html>