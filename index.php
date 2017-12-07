<!--IMPORTS-->
<?php
require 'steamauth/steamauth.php';
require 'steamauth/userInfo.php';
$id = $_SESSION['steamid']; ?>
<?php include 'phpScripts/applyForm.php' ?>
<?php include 'phpScripts/tournamentForm.php' ?>

<!--PAGE START-->
<?php include 'header.php' ?>
    <!--MAIN VIDEO IMAGE-->
    <div class="header-container" style="background-color: #f8f6f8;">
        <div class="header-img" style="background-color: #f8f6f8;">

            <video autoplay poster="images/video/Viking-still.png" id="bgvid">
                <source src="images/video/Viking_web_intro_1.mp4" type="video/mp4">
                <source src="images/video/Viking_web_intro_1.webm" type="video/webm">
                <source src="images/video/Viking_web_intro_1.ogv" type="video/ogv">
            </video>
        </div>
    </div>

<!--WE ARE VIKING-->
<div id="whoAreWe" class="col-lg-12 text-center about-title">
  <h1>WE ARE VIKING</h1>
	<h3 id="vikingMotto">FIRST IN, LAST OUT</h3>
</div>
<section id="about" class="about-section col-lg-12">
  <?php include 'phpPages\weAreViking.php' ?>
</section>

<!--GOT WHAT IT TAKES TO JOIN VIKING-->
<section id="apply" class="apply-section col-lg-12">
    <?php include 'phpPages\signUp.php' ?>
</section>

<!--THE VIKING TOURNAMENT-->
<div id="tournament" class="col-lg-12 text-center tournament-title">
  <h1>THE VIKING TOURNAMENT</h1>
		<!--<h3 id="vikingMotto">#VKNTOURNAMENT</h3>-->
</div>
<section id="tournament" class="tournament-section col-lg-12">
			<?php include 'phpPages\vikingTournament.php' ?>
</section>

<!--FOOTER-->
    <?php include 'footer.php' ?>
