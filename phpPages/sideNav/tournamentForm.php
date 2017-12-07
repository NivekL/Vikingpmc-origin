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
	                <h2 class="applyHeading">Fill the form to sign up for the tournament</h2>
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
	                                          <textarea class="form-control" placeholder="Who you are and group name." id="message3" name="message3"><?php echo htmlspecialchars($_POST['message3']);?></textarea>
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
