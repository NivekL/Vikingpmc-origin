<?php include 'phpPages\sideNav\operations.php' ?>
<?php include 'phpPages\sideNav\communication.php' ?>

<div class="firstColWrapper">
  <div class="row">
    <div class="col-md-4" onclick="openNavOperation()">
      <div class="center">
        <i class="fa fa-globe fa-5x center" style="color: black" aria-hidden="true"></i>
      </div>
      <center><h2>Operations</h2></center>
      <p>
        <b>Private Military Contractors</b>.
        <br>
        We are the biggest Private Military Company in the ArmA 3 community. We have 80 contractors ready to work any type of operation.
        We provide you a chance to explore the world. From the hottest deserts in the Middle East to the snowy mountains of northern Europe.
        <b><i>Click here read more.</i></b>
      </p>
    </div>

    <div class="col-md-4" onclick="openNavCommunication()">
      <div class="center">
        <i class="fa fa-microphone fa-5x center" style="color: black" aria-hidden="true"></i>
      </div>
      <center><h2>Communication</h2></center>
      <p>
        <b>Good communication tools are the key to success.</b>
        <br>
        We provide several tools and programs to make sure that you are able to contact us at any time.
        For text communications we make use of <a target="_blank" href="https://discord.gg/zGh6F3h"><u><b>Discord</b></u></a>, here you’ll be able to chat with any member of our group.
        When doing operations we have our own <a href="ts3server:ts.vikingpmc.com?port=10074"><u><b>Teamspeak</b></u></a> channel with more than enough slots.
        Last but not least, we also have a <a target="_blank" href="https://steamcommunity.com/groups/VIKINGPMC"><u><b>Steam</b></u></a> group where you can get a hold of any member or even post forum announcements.
        <b><i>Click here read more.</i></b>
      </p>
    </div>

    <div class="col-md-4">
      <div class="center">
        <i class="fa fa-info-circle fa-5x center" style="color: black" aria-hidden="true"></i>
      </div>
      <center><h2>Contact us</h2></center>
      <p>
        <b>We are always available.</b>
        <br>
        We strongly believe in good communication, and if you need us at anytime there's always one HQ member available in our discord.
      </p>
    </div>
    <!--<div class="col-md-3">
      <div class="center">
        <i class="fa fa-info-circle fa-5x center" style="color: black" aria-hidden="true"></i>
      </div>
      <center><h2>MEMBERLIST</h2></center>
      <p>
        <b>See memberlist.</b>
      </p>
    </div>-->
  </div>
</div>

<!--BUTTONS-->
<div class="firstColWrapper">
  <center><div class="row">
    <div class="col-md-4">
      <!--<button id="btnReadMore" type="button" name="button" onclick="openNavOperation()">READ MORE</button>-->
    </div>

    <div class="col-md-4">
      <!--<button id="btnReadMore" type="button" name="button" onclick="openNavCommunication()">READ MORE</button>-->
    </div>

    <div class="col-md-4">
      <a href="https://discord.gg/zGh6F3h" target="_blank"><button id="btnReadMore" type="button" name="button">JOIN DISCORD</button></a>
    </div>

    <!--<div class="col-md-3">
      <button id="btnReadMore" type="button" name="button" onclick="openNavMembers()">View members</button>
      <div class=""><br>
        <?php echo loginbutton(); ?>
      </div>
      <div class="">
        <?php echo logoutbutton(); ?>
      </div>
    </div>-->
  </div></center>
</div>
