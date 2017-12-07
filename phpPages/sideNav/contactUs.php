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
										<li class="col-lg-3" data-toggle="tooltip" data-placement="top" data-html="true" title="Bane | Founder">
												<a target="_blank" href="https://steamcommunity.com/profiles/76561198044162606">
														<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/55/55e14010ec82dc075cbcfa07a6c80c01709ea793_full.jpg" class="img-rounded img-thumbnail">
												</a>
										</li>
										<!--Havok-->
										<li class="col-lg-3" data-toggle="tooltip" data-placement="top" data-html="true" title="Havok | Administrator">
											<a target="_blank" href="https://steamcommunity.com/profiles/76561197996326460">
													<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/45/45c2889d7ff28d35e5ffa87c0be714c707868e8f_full.jpg" class="img-rounded img-thumbnail">
											</a>
										</li>
										<!--Gen-->
											<li class="col-lg-3" data-toggle="tooltip" data-placement="top" data-html="true" title="TheGeneral | Moderator">
												<a target="_blank" href="https://steamcommunity.com/profiles/76561197961489650">
														<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/32/328a7afdc3d5eaeba8562a62da21d99c50021ec0_full.jpg" class="img-rounded img-thumbnail">
												</a>
											</li>
											<!--Paulo-->
											<li class="col-lg-3" data-toggle="tooltip" data-placement="top" data-html="true" title="Paulo | Moderator">
												<a target="_blank" href="https://steamcommunity.com/profiles/76561198068539881">
														<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/d2/d24766de721c8cd114d3a57ae830439638987c23_full.jpg" class="img-rounded img-thumbnail">
												</a>
											</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="row">
								<ul class="hide-bullets">
									<!--Dep-->
									<li class="col-lg-3" data-toggle="tooltip" data-placement="bottom" data-html="true" title="DeputyDawg | HQ">
										<a target="_blank" href="https://steamcommunity.com/profiles/76561198043139108">
												<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/ea/ea304b11312956319a6f2db8661a45f9340bef7d_full.jpg" class="img-rounded img-thumbnail">
										</a>
									</li>
									<!--Winter-->
									<li class="col-lg-3" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Winters | HQ">
										<a target="_blank" href="https://steamcommunity.com/profiles/76561198000470633">
												<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e3/e3c2fa0fa67d8b16f9f0cee94666cac13e7ff15d_full.jpg" class="img-rounded img-thumbnail">
										</a>
									</li>
										<!--Alliaz-->
										<li class="col-lg-3" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Alliaz | HQ">
											<a target="_blank" href="https://steamcommunity.com/profiles/76561197997186254/">
													<img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/bc/bca8a58c68540f5c54b64abc6bd671bdadd87bbe_full.jpg" class="img-rounded img-thumbnail">
											</a>
										</li>
										<li class="col-lg-3" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Empty | HQ">
										</li>
								</ul>
							</div>
						</div>
				</div>
      </div>
    </div>
  </section>
	<section class="apply-section col-lg-12">
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
