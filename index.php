<?php
//require 'steamauth/steamauth.php';
//require 'steamauth/userInfo.php';
//$id = $_SESSION['steamid']; ?>
<?php include 'phpScripts/applyForm.php' ?>
<?php include 'phpScripts/tournamentForm.php' ?>
<!--IMPORTS-->


<!--PAGE START-->
<?php include 'header.php' ?>
    <!--MAIN VIDEO IMAGE-->
    <div class="header-container" style="background-color: #f8f6f8;">
        <div class="header-img" style="background-color: #f8f6f8;">

            <video autoplay poster="images/video/VKN_LOGO_2017.png" id="bgvid">
                <source src="images/video/vkn_web_comp_low.mp4" type="video/mp4">
                <source src="images/video/vkn_web_comp_low.webm" type="video/webm">
                <source src="images/video/vkn_web_comp_low.ogv" type="video/ogv">
            </video>
        </div>
    </div>

<!--WE ARE VIKING-->
<div id="whoAreWe" class="col-lg-12 text-center about-title">
  <h1>WE ARE VIKING</h1>
	<h3 id="vikingMotto">FIRST IN, LAST OUT</h3>
</div>
<section id="about" class="about-section col-lg-12">
  <?php include 'phpPages/weAreViking.php' ?>
</section>

<!--GOT WHAT IT TAKES TO JOIN VIKING-->
<section id="apply" class="apply-section col-lg-12">
    <?php include 'phpPages/signUp.php' ?>
</section>

<!--THE VIKING TOURNAMENT-->
<div id="tournament" class="col-lg-12 text-center tournament-title">
  <h1>VIKING TOURNAMENT</h1>
  <section id="tournament" class="tournament-section col-lg-12">
  			<?php include 'phpPages/vikingTournament.php' ?>
  </section>
</div>


<!--SERVER INFORMATION-->
<div class="col-lg-12 text-center">
  <section>
    <?php include 'phpPages/serverInformation.php' ?>
  </section>
</div>

<!--FOOTER-->
    <?php include 'footer.php' ?>
