<?php 
    $page_title = "Home"; 
    include 'header.php'; 
?>

<div id="hero-section" style="height: 100vh; display: flex; align-items: center; padding: 0 10%; background: linear-gradient(90deg, #000 30%, transparent 80%), url('f1banner.avif') center/cover;">
    <div class="hero-content" style="max-width: 600px;">
        <span style="background: var(--f1-red); padding: 5px 12px; font-weight: 900; font-size: 0.75rem; letter-spacing: 1px; border-radius: 2px;">LATEST NEWS</span>
        <h1 id="team-welcome-text" style="font-size: 4.5rem; font-weight: 900; line-height: 0.9; margin: 20px 0; text-transform: uppercase;">ITS LIGHTS OUT <br> AND AWAY WE GO!</h1>
        <a href="#main-content" style="display:inline-block; color:#fff; font-weight:900; text-decoration:none; border-bottom:3px solid var(--f1-red); padding-bottom: 5px; font-size: 0.9rem; letter-spacing: 1px;">EXPLORE NOW →</a>
    </div>
</div>

<main id="main-content" style="margin-top: -80px; position: relative; z-index: 10;">
    <div class="content-box-glass">
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 50px; align-items: start; margin-bottom: 50px;">
            
            <div class="countdown-container">
                <h3 style="color: var(--f1-red); text-transform: uppercase; margin-bottom: 25px; font-weight: 900; border-left: 5px solid var(--f1-red); padding-left: 15px;">Next Race Countdown</h3>
                <div id="timer" style="display: flex; gap: 15px;">
                    <div class="timer-box"><span id="hari">00</span><small>DAYS</small></div>
                    <div class="timer-box"><span id="jam">00</span><small>HRS</small></div>
                    <div class="timer-box"><span id="menit">00</span><small>MINS</small></div>
                </div>
                </div>

            <div class="vote-section" style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
                <h3 style="color: #fff; text-transform: uppercase; margin: 0 0 20px 0; font-weight: 900;">Vote Driver of the Season</h3>
                <?php if(isset($_POST['submit_vote'])): ?>
                    <p>Terima kasih atas vote Anda!</p>
                <?php else: ?>
                    <form method="POST">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 20px;">
                            <label><input type="radio" name="driver" value="Max" checked> Verstappen</label>
                            <label><input type="radio" name="driver" value="Lando"> Norris</label>
                            <label><input type="radio" name="driver" value="Oscar"> Piastri</label>
                            <label><input type="radio" name="driver" value="George"> Russell</label>
                        </div>
                        <button type="submit" name="submit_vote" style="background:var(--f1-red); color:white; border:none; padding:12px; width:100%; cursor:pointer; font-weight:900;">SUBMIT VOTE</button>
                    </form>
                <?php endif; ?>
            </div>
        </div> <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 40px; margin-bottom: 50px;">
            <h3 style="color: white; text-transform: uppercase; font-weight: 900; margin-bottom: 30px; text-align: center; letter-spacing: 2px;">Explore Featured Teams</h3>
            
            <div class="team-quick-grid">
                <div class="card">
                    <div class="card-logo-box"><img src="redbull.png"></div>
                    <div class="card-info"><h4>RED BULL</h4><a href="rbteaminfo.php" class="btn-explore-small">VIEW PROFILE</a></div>
                </div>
                <div class="card">
                    <div class="card-logo-box"><img src="ferrari.png"></div>
                    <div class="card-info"><h4>FERRARI</h4><a href="ferrariteaminfo.php" class="btn-explore-small">VIEW PROFILE</a></div>
                </div>
                <div class="card">
                    <div class="card-logo-box"><img src="mclaren.png"></div>
                    <div class="card-info"><h4>MCLAREN</h4><a href="mclarenteaminfo.php" class="btn-explore-small">VIEW PROFILE</a></div>
                </div>
                <div class="card">
                    <div class="card-logo-box"><img src="mercedes.jpg"></div>
                    <div class="card-info"><h4>MERCEDES</h4><a href="mercedesteaminfo.php" class="btn-explore-small">VIEW PROFILE</a></div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="script.js"></script>
</body></html>