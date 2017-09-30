<!--APPLY FORM-->
<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Vikingpmc membership form';
		$to = 'vikingpmc1@gmail.com';
		$subject = 'VIKING membership form';

		$body ="From: $name\n E-Mail: $email\n Message: \n$message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Success!</div>';
	} else {
		$result='<div class="alert alert-danger">Error! Try again.</div>';
	}
}
	}
?>

<!--TOURNAMENT FORM-->
<?php
	if (isset($_POST["submit3"])) {
		$name = $_POST['name3'];
		$email = $_POST['email3'];
		$message = $_POST['message3'];
		$human = intval($_POST['human3']);
		$from = 'Tournament apply form';
		$to = 'vikingpmc1@gmail.com';
		$subject = 'Tournament apply form';

		$body ="From: $name\n E-Mail: $email\n Message: \n$message";
		// Check if name has been entered
		if (!$_POST['name3']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email3'] || !filter_var($_POST['email3'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message3']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Success!</div>';
	} else {
		$result='<div class="alert alert-danger">Error! Try again.</div>';
	}
}
	}
?>

<!--CONTACT US FORM-->
<?php
	if (isset($_POST["submit2"])) {
		$name = $_POST['name2'];
		$email = $_POST['email2'];
		$message = $_POST['message2'];
		$human = intval($_POST['human2']);
		$from = 'Vikingpmc contact form';
		$to = 'vikingpmc1@gmail.com';
		$subject = 'Vikingpmc contact form';

		$body ="From: $name\n E-Mail: $email\n Message: \n$message";
		// Check if name has been entered
		if (!$_POST['name2']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email2'] || !filter_var($_POST['email2'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message2']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Success!</div>';
	} else {
		$result='<div class="alert alert-danger">Error! Try again.</div>';
	}
}
	}
?>




<!--PAGE START-->
<?php include 'header.php' ?>
    <!--MAIN VIDEO IMAGE-->
    <div class="header-container">
        <div class="header-img">

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
  <div class="firstColWrapper">
    <div class="row">
      <div class="col-md-4">
        <div class="center">
          <i class="fa fa-globe fa-5x center" style="color: black" aria-hidden="true"></i>
        </div>
        <h2>Operations</h2>
        <p>
					<b>VIKING are Private Military Contractors</b>.
					<br>
					We're constantly hired by other units to help them out on different operations. In our spare time we fight on our dedicated server <i>(click read more)</i>
					in private operations, Zeus-ops and Liberation games.<br>
					We provide you a chance to explore the world. From the hottest deserts in the Middle East to the snowy mountains of northern Europe.
					<br><br>
					<i>Join us every <b>TUESDAY and THURSDAY 19:00 CET/18:00 GMT</b> for your mission brief and make sure to gear up soldier, because we have work to do.</i>
				</p>
        <button id="btnReadMore" type="button" name="button" onclick="openNavOperation()">READ MORE</button>
      </div>
      <div class="col-md-4">
        <div class="center">
          <i class="fa fa-microphone fa-5x center" style="color: black" aria-hidden="true"></i>
        </div>
        <h2>Communications</h2>
        <p>
					<b>Good communication tools are the key to success.</b>
					<br>
					We provide several tools and programs to make sure that you are able to contact us at any time.
					For text communications we make use of <a target="_blank" href="https://discord.gg/v9EV4w4"><u><b>Discord</b></u></a>, here you’ll be able to chat with any member of our group.
					When doing operations we have our own <a href="ts3server:vikingpmc.ts3ip.com?port=10074"><u><b>Teamspeak</b></u></a> channel with more than enough slots.
					Last but not least, we also have a <a target="_blank" href="http://steamcommunity.com/groups/VIKINGPMC"><u><b>Steam</b></u></a> group where you can get a hold of any member or even post forum announcements.
        </p>
				<br>
        <button id="btnReadMore" type="button" name="button" onclick="openNavCommunication()">READ MORE</button>
      </div>
      <div class="col-md-4">
        <div class="center">
          <i class="fa fa-info-circle fa-5x center" style="color: black" aria-hidden="true"></i>
        </div>
        <h2>Contact us</h2>
        <p>
					<b>We are always available.</b>
					<br>
					We strongly believe in good communication, and if you need us at anytime there's always one HQ member available in our discord.
					If you by any chance have an idea, a complaint or a matter of importance, we implore you to use our contact form by sending us an email.
					This is a guaranteed way of getting a response.
					<br><br>
					Press the button below to view the contact us-form.
        </p>
				<br>
        <button id="btnReadMore" type="button" name="button" onclick="openNavContact()">CONTACT US</button>
      </div>
    </div>
  </div>
</section>

<!--GOT WHAT IT TAKES TO JOIN VIKING-->
<section id="apply" class="apply-section col-lg-12">
    <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center applyTitleSection">
                <h2 class="applyHeading">Got what it takes to be a VIKING?</h2>
                <h2 class="applySubHeading">Sign here to find out</h2>
            </div>
            </div>
              <div class="row">
                      <div class="col-lg-12 applyFormSection">
                          <form name="sentMessage" id="contactForm" action="index.php" method="post">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">Name*</label>
                                          <input type="text" class="form-control" placeholder="Your Name/Steam ID" id="name" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                          <?php echo "<p class='text-danger'>$errName</p>";?>
                                      </div>
                                      <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Email*</label>
                                          <input type="email" class="form-control" placeholder="Your email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                          <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                      </div>
                                      <div class="form-group">
                                        <label for="human" class="col-sm-2 control-label">2 + 3 = ?*</label>
                                        <input type="text" class="form-control" id="human" name="human" placeholder="Your answer (anti-spam)">
                                        <?php echo "<p class='text-danger'>$errHuman</p>";?>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="message" class="col-sm-2 control-label">Message*</label>
                                          <textarea class="form-control" placeholder="Your message should include a short introduction about yourself." id="message" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                          <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                      </div>
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="col-lg-12 text-center">
                                      <input id="submit" name="submit" type="submit" class="btn btn-lg signUp" value="SIGN UP"></input>
                                  </div>
                                  <div class="form-group">
                          					<div class="col-sm-10 col-sm-offset-2">
                          						<?php echo $result; ?>
                          					</div>
                              </div>
                      			</div>
                          </form>
                      </div>
                </div>
          </div>
    </div>
</section>

<!--THE VIKING TOURNAMENT-->
<div id="tournament" class="col-lg-12 text-center tournament-title">
  <h1>THE VIKING TOURNAMENT</h1>
		<h3 id="vikingMotto">#VKNTOURNAMENT</h3>
</div>
<section id="tournament" class="tournament-section col-lg-12">
			<div class="col-lg-12" id="infoBox">
				<h2>INFORMATION</h2>
				<p>
					<b>The VIKING tournament gives your group the chance to help the community and kick some ass!</b>
					<br>
					We all like the custom mission which our groups may play, but from time to time we love some PVP action!
					We thought why not combine the 2 elements to create a dynamic milsim environment with some healthy competitiveness.
					That is exactly what we did! And we would love you to be part of it! The whole event is of course streamed on our <a class="linkText" href="https://www.twitch.tv/vknpmc" target="_blank">official Twitch channel.</a>
				</p>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h2>DETAILS</h2>
						<p>
							1)	Kickoff - June 17th - 19:00 CEST (Central European Summer Time)
							<br>
							2) 8v8 - Team vs Team
							<br>
							3) Custom made PvP maps
							<br>
							4) Limited to 8 teams/squads
							<br>
							5) First Person Locked
							<br>
							6) Prize Pool: $50
							<br>
							7) Twitch / Teamspeak / Hosted Servers
							<br>
							8) Mods: Task Force Radio / ShackTac / CBA_A3 / CUP
						</p>
					</div>
					<div class="col-lg-6">
						<h2>MODS & MAPS</h2>
						<p>
							You’ll be needing four mods to be able to play. <i>CBA, ShackTac, CUP and TFAR</i>, that’s it!
							You’ll be able to find the maps and mods on our Steam collection.
							<br><br>
							<u><a class="linkText" target="_blank" href="http://steamcommunity.com/sharedfiles/filedetails/?id=933455096">Download maps/mods here!</a></u><br>
						</p>
					</div>
				</div>
			</div>

	<div class="container paddingTop">
		<h2>TRAILER - SEASON 3 COMING SOON</h2>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mShelBULMO0"></iframe>
		</div>

		<iframe class="col-xs-12 col-lg-12 scoreboard" height="600"
		src="https://widget.toornament.com/tournaments/471798638134181888/navigator?_locale=en_US&theme=light"
		frameborder="0" scrolling="false" allowfullscreen="true">
		</iframe>
	</div>



	<div class="center paddingTop">
		<button class="btnTournament" type="button" name="button" onclick="openNavTournament()">JOIN TOURNAMENT</button>
	</div>
</section>



<!--SIDE NAV, OWN FILE-->
<!--SIDENAV OPERATIONS-->
<div id="operationsNav" class="sidenav">
  <a id="exit" href="javascript:void(0)" class="closebtn" onclick="closeNavOperation()">&times;</a>
  <div id="whoAreWe" class="col-lg-12 text-center about-title">
    <h1>OPERATIONS</h1>
  </div>
  <section id="about" class="about-section col-lg-12">
    <div class="firstColWrapper">
      <div class="row">
        <div class="col-md-4">
					<a target="_blank" href="http://steamcommunity.com/sharedfiles/filedetails/?id=681486800">
            <i class="fa fa-info-circle fa-5x center" style="color: black" aria-hidden="true"></i>
					</a>
          <h2>MISSIONS</h2>
          <p>
						<b>Private operations: </b>In our spare time we make sure to hone our skills on our dedicated server. We host different scenarios to help our soldiers with strategy, critical thinking, and communication.
						Our goal is for every member to be confident in handling any situation.
							<br><b>IP: 108.61.112.143:2302
							<br>PW: <i style="filter: blur(6px)">ask one of our admins!</i></b><br><br>
						<b>Joint operations: </b>Being a PMC means that we are contracted to fight for others.
						We are hired by different units to help them secure, destroy or stabilize points of interest and provide civilian security all over the world.
						Joint-operations is a great way to learn new strategies, types of combat and meet new friends.<br><br>
						<b>Campaigns: </b>With over 25 campaign missions and more to come, this is what we have specialized in over the years.
						With the help of our talented developers we’ve made sure that every campaign feels unique and offers new challenges for each individual.
						<br>
						<u><a id="linkText" target="_blank" href="http://steamcommunity.com/sharedfiles/filedetails/?id=681486800">Click here to download our campaigns.</a></u>
          </p>
        </div>

        <div class="col-md-4">
          <div class="center">
					<a target="_blank" href="http://steamcommunity.com/sharedfiles/filedetails/?id=659777460">
						<i class="fa fa-download fa-5x center" style="color: black" aria-hidden="true"></i>
					</a>
          </div>
          <h2>MODS & ARSENAL</h2>
          <p>
						<b>Mods: </b>To enhance realism and to challenge the player we make use of mods.
						We have carefully selected mods that revamps certain gameplay mechanics to our pleasing.
						These are universal across our campaigns to ensure compatibility for our members.
						<br>
						<u><a id="linkText" target="_blank" href="http://steamcommunity.com/sharedfiles/filedetails/?id=659777460">Click here to download the mods.</a></u><br><br>
						<b>Arsenal: </b>We have created base outfits for the different roles we have. We urge you to download the .rar file and import the loadouts to your arsenal.
						The main issue here is making sure you have the correct basic gear when we’re on operations, but just head into a game with us and we’ll talk you through it.<br>
						<u><a id="linkText" target="_blank" href="https://drive.google.com/open?id=0B2SlNOj2rYVCZjJnbDNiUDdnVTA">Click here to download the roles.</a></u><br><br>
          </p>
        </div>
        <div class="col-md-4">
          <div class="center">
            <i class="fa fa-calendar fa-5x center" style="color: black" aria-hidden="true"></i>
          </div>
          <h2>TIME/DATE</h2>
          <p>
            Weekly mission OP's are held every
						<br>
						<b>TUESDAY</b> and <b>THURSDAY</b> at
						<br><b>19:00 CET</b>/<b>18:00 GMT</b>
          </p>
        </div>
      </div>
    </div>
  </section>
</div>

<!--SIDENAV COMMUNICATION-->
<div id="communicationsNav" class="sidenav">
  <a id="exit" href="javascript:void(0)" class="closebtn" onclick="closeNavCommunication()">&times;</a>
  <div id="whoAreWe" class="col-lg-12 text-center about-title">
    <h1>COMMUNICATIONS</h1>
  </div>
  <section id="about" class="about-section col-lg-12">
    <div class="secondColWrapper">
      <div class="row">
        <div class="col-md-4">
          <div class="center">
					<a href="ts3server:vikingpmc.ts3ip.com?port=10074">
            <i class="fa fa-headphones fa-5x center" style="color: black" aria-hidden="true"></i>
					</a>
          </div>
          <h2>TEAMSPEAK</h2>
          <p>
						<b>We belive in good communication.</b> To achieve this we put our money where our mouth is and make use of Teamspeak.
						An added bonus is that we are able to easily coordinate bigger events with multiple players without any technical hiccups.
						Another reason is that one of our primary mods, Task Force Radio, is heavily reliant on TeamSpeak.
						<br><br>
						<a id="linkText" href="ts3server:vikingpmc.ts3ip.com?port=10074"><u>Click to open TeamSpeak: vikingpmc.ts3ip.com</u></a>
          </p>
        </div>
        <div class="col-md-4">
          <div class="center">
					<a target="_blank" href="https://discord.gg/v9EV4w4">
            <i class="fa fa-commenting fa-5x center" style="color: black" aria-hidden="true"></i>
					</a>
          </div>
          <h2>DISCORD</h2>
          <p>
						One of the fastest growing voice/chat platforms out there is of course something we want to make use of.
						Discord is super easy to set up and get going. We believe that this is the best tool for the job when coordination and announcements are to be made.
						In our Discord server you will find a couple of channels for members, tournament attendees and other discussions.
						<br><br>
						<a id="linkText" target="_blank" href="https://discord.gg/v9EV4w4"><u>Click here to join our Discord.</u></a>
          </p>
        </div>
        <div class="col-md-4">
          <div class="center">
					<a target="_blank" href="http://steamcommunity.com/groups/VIKINGPMC">
            <i class="fa fa-steam-square fa-5x center" style="color: black" aria-hidden="true"></i>
					</a>
          </div>
          <h2>STEAM</h2>
          <p>
						We have a Steam group for VIKING. This makes it easier to keep track of which members are part of the group.
						The steam group contains some useful links for beginners and further information if you’re interested.
						<br><br>
						<a id="linkText" target="_blank" href="http://steamcommunity.com/groups/VIKINGPMC"><u>Click here to navigate to our Steam group.</u></a>
          </p>
        </div>
      </div>
    </div>
  </section>
</div>

<!--SIDENAV CONACT US FORM-->
<div id="contactUsNav" class="sidenav">
  <a id="exit" href="javascript:void(0)" class="closebtn" onclick="closeNavContact()">&times;</a>
  <div id="whoAreWe" class="col-lg-12 text-center about-title">
    <h1>CONTACT US</h1>
  </div>
  <section id="about" class="about-section col-lg-12">
    <div class="thirdColWrapper">
      <div class="row">
        <div class="col-lg-6">
          <h2>ADMINS & MODERATORS</h2>
          <p>
						Like every group, there is the hierarchy we follow to make it easier for the members to know who to turn to.
						<br><br>
						<b>Admin</b> are the highest ranked members of the group, they make sure that every operation and tournament works as planned.
						<b>Moderators</b> are the second highest ranked members of the group,
						they assist Admins in their daily work and are in charge of keeping things
						clean and friendly while out in the field of battle or in our chat.
						<b>HQ</b> are the third highest ranking members of our group, they help with the organization of different operations and communicate with people in our Discord.
						<br><br>
						<i>Hover over the images to view names and rank. You can also click the avatars to navigate to their Steam profiles.</i>
						<br><br>
						<b><i>Send any question, suggestion or idea to us by filling out the form down below.</i></b>
					</p>
        </div>
				<div class="col-lg-6" id="slider-thumbs">
						<div class="col-lg-12">
							<div class="row">
								<ul class="hide-bullets">
									<!--Bane-->
										<li class="col-lg-3" data-toggle="tooltip" data-placement="top" data-html="true" title="<h3>Bane</h3><h4>Founder</h4>">
												<a target="_blank" href="http://steamcommunity.com/profiles/76561198044162606">
														<img src="http://cdn.edgecast.steamstatic.com/steamcommunity/public/images/avatars/55/55e14010ec82dc075cbcfa07a6c80c01709ea793_full.jpg" class="img-rounded img-thumbnail">
												</a>
										</li>
										<!--Havok-->
										<li class="col-lg-3" data-toggle="tooltip" data-placement="top" data-html="true" title="<h3>Havok</h3><h4>Administrator</h4>">
											<a target="_blank" href="http://steamcommunity.com/profiles/76561197996326460">
													<img src="http://cdn.edgecast.steamstatic.com/steamcommunity/public/images/avatars/c7/c787d7b5a74f7ecf65e79ec32bd933f6f7980db4_full.jpg" class="img-rounded img-thumbnail">
											</a>
										</li>
										<!--Gen-->
											<li class="col-lg-3" data-toggle="tooltip" data-placement="top" data-html="true" title="<h3>TheGeneral</h3><h4>Moderator</h4>">
												<a target="_blank" href="http://steamcommunity.com/profiles/76561197961489650">
														<img src="http://cdn.edgecast.steamstatic.com/steamcommunity/public/images/avatars/32/328a7afdc3d5eaeba8562a62da21d99c50021ec0_full.jpg" class="img-rounded img-thumbnail">
												</a>
											</li>
											<!--Paulo-->
											<li class="col-lg-3" data-toggle="tooltip" data-placement="top" data-html="true" title="<h3>Paulo</h3><h4>Moderator</h4>">
												<a target="_blank" href="http://steamcommunity.com/profiles/76561198068539881">
														<img src="http://cdn.edgecast.steamstatic.com/steamcommunity/public/images/avatars/d2/d24766de721c8cd114d3a57ae830439638987c23_full.jpg" class="img-rounded img-thumbnail">
												</a>
											</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="row">
								<ul class="hide-bullets">
									<!--Dep-->
									<li class="col-lg-3" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<h3>DeputyDawg</h3><h4>HQ</h4>">
										<a target="_blank" href="http://steamcommunity.com/profiles/76561198043139108">
												<img src="http://cdn.edgecast.steamstatic.com/steamcommunity/public/images/avatars/ea/ea304b11312956319a6f2db8661a45f9340bef7d_full.jpg" class="img-rounded img-thumbnail">
										</a>
									</li>
									<!--Winter-->
									<li class="col-lg-3" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<h3>Winters</h3><h4>HQ</h4>">
										<a target="_blank" href="http://steamcommunity.com/profiles/76561198000470633">
												<img src="http://cdn.edgecast.steamstatic.com/steamcommunity/public/images/avatars/9c/9c51148ea5ab65993d0e54e26b200115584bc850_full.jpg" class="img-rounded img-thumbnail">
										</a>
									</li>
										<!--Alliaz-->
										<li class="col-lg-3" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<h3>Alliaz</h3><h4>HQ</h4>">
											<a target="_blank" href="http://steamcommunity.com/profiles/76561197997186254/">
													<img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/bc/bca8a58c68540f5c54b64abc6bd671bdadd87bbe_full.jpg" class="img-rounded img-thumbnail">
											</a>
										</li>
										<li class="col-lg-3" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<h3>Empty</h3><h4>HQ</h4>">
										</li>
								</ul>
							</div>
						</div>
				</div>
      </div>
    </div>
  </section>
	<section id="conactUs" class="apply-section col-lg-12">
	    <div class="container">
	            <div class="row">
	              <div class="col-lg-12 text-center applyTitleSection">
	                <h2 class="applyHeading">DO NOT HESITATE TO CONTACT US!</h2>
	                <h2 class="applySubHeading">Fill the form down below</h2>
	            	</div>
	            </div>
	              <div class="row">
	                      <div class="col-lg-12 applyFormSection">
	                          <form name="sentMessage" id="contactForm" action="index.php" method="post">
	                              <div class="row">
	                                  <div class="col-md-6">
	                                      <div class="form-group">
	                                        <label for="name2" class="col-sm-2 control-label">Name*</label>
	                                          <input type="text" class="form-control" placeholder="Your Name/Steam ID" id="name2" name="name2" value="<?php echo htmlspecialchars($_POST['name2']); ?>">
	                                          <?php echo "<p class='text-danger'>$errName</p>";?>
	                                      </div>
	                                      <div class="form-group">
	                                        <label for="email2" class="col-sm-2 control-label">Email*</label>
	                                          <input type="email2" class="form-control" placeholder="Your email" id="email2" name="email2" value="<?php echo htmlspecialchars($_POST['email2']); ?>">
	                                          <?php echo "<p class='text-danger'>$errEmail</p>";?>
	                                      </div>
	                                      <div class="form-group">
	                                        <label for="human2" class="col-sm-2 control-label">2 + 3 = ?*</label>
	                                        <input type="text" class="form-control" id="human2" name="human2" placeholder="Your answer (anti-spam)">
	                                        <?php echo "<p class='text-danger'>$errHuman</p>";?>
	                                      </div>
	                                  </div>
	                                  <div class="col-md-6">
	                                      <div class="form-group">
	                                        <label for="message2" class="col-sm-2 control-label">Message*</label>
	                                          <textarea class="form-control" placeholder="Your message." id="message2" name="message2"><?php echo htmlspecialchars($_POST['message2']);?></textarea>
	                                          <?php echo "<p class='text-danger'>$errMessage</p>";?>
	                                      </div>
	                                  </div>
	                                  <div class="clearfix"></div>
	                                  <div class="col-lg-12 text-center">
	                                      <input id="submit2" name="submit2" type="submit" class="btn btn-lg signUp" value="SEND MESSAGE"></input>
	                                  </div>
	                                  <div class="form-group">
	                          					<div class="col-sm-10 col-sm-offset-2">
	                          						<?php echo $result; ?>
	                          					</div>
	                              </div>
	                      			</div>
	                          </form>
	                      </div>
	                </div>
	          </div>
	</section>
</div>

<!--SIDENAV TOURNAMENT FORM-->
<div id="tournamentNav" class="sidenav">
  <a id="exit" href="javascript:void(0)" class="closebtn" onclick="closeNavTournament()">&times;</a>
  <div id="whoAreWe" class="col-lg-12 text-center about-title">
    <h1>VIKING TOURNAMENT</h1>
  </div>
	<section id="tournamentNav" class="apply-section col-lg-12">
	    <div class="container">
	            <div class="row">
	              <div class="col-lg-12 text-center applyTitleSection">
	                <h2 class="applyHeading">JOIN TOURNAMENT</h2>
	                <h2 class="applySubHeading">Fill the form down below</h2>
	            	</div>
	            </div>
	              <div class="row">
	                      <div class="col-lg-12 applyFormSection">
	                          <form name="sentMessage" id="contactForm" action="index.php" method="post">
	                              <div class="row">
	                                  <div class="col-md-6">
	                                      <div class="form-group">
	                                        <label for="name3" class="col-sm-2 control-label">Name*</label>
	                                          <input type="text" class="form-control" placeholder="Your Name/Steam ID" id="name3" name="name3" value="<?php echo htmlspecialchars($_POST['name3']); ?>">
	                                          <?php echo "<p class='text-danger'>$errName</p>";?>
	                                      </div>
	                                      <div class="form-group">
	                                        <label for="email" class="col-sm-2 control-label">Email*</label>
	                                          <input type="email3" class="form-control" placeholder="Your email" id="email3" name="email3" value="<?php echo htmlspecialchars($_POST['email3']); ?>">
	                                          <?php echo "<p class='text-danger'>$errEmail</p>";?>
	                                      </div>
	                                      <div class="form-group">
	                                        <label for="human3" class="col-sm-2 control-label">2 + 3 = ?*</label>
	                                        <input type="text" class="form-control" id="human3" name="human3" placeholder="Your answer (anti-spam)">
	                                        <?php echo "<p class='text-danger'>$errHuman</p>";?>
	                                      </div>
	                                  </div>
	                                  <div class="col-md-6">
	                                      <div class="form-group">
	                                        <label for="message3" class="col-sm-2 control-label">Message*</label>
	                                          <textarea class="form-control" placeholder="Your message." id="message3" name="message3"><?php echo htmlspecialchars($_POST['message3']);?></textarea>
	                                          <?php echo "<p class='text-danger'>$errMessage</p>";?>
	                                      </div>
	                                  </div>
	                                  <div class="clearfix"></div>
	                                  <div class="col-lg-12 text-center">
	                                      <input id="submit3" name="submit3" type="submit" class="btn btn-lg signUp" value="JOIN"></input>
	                                  </div>
	                                  <div class="form-group">
	                          					<div class="col-sm-10 col-sm-offset-2">
	                          						<?php echo $result; ?>
	                          					</div>
	                              </div>
	                      			</div>
	                          </form>
	                      </div>
	                </div>
	          </div>
	</section>
</div>

<!--FOOTER-->
    <?php include 'footer.php' ?>
