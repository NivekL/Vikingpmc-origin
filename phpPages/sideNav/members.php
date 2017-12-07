<!--SIDENAV MEMBERS-->
<div id="membersNav" class="sidenav">
  <a id="exit" href="javascript:void(0)" class="closebtn" onclick="closeNavMembers()">&times;</a>
  <div id="whoAreWe" class="col-lg-12 text-center about-title">
    <h1>MEMBERS</h1>
  </div>
  <section id="about" class="about-section col-lg-12">
    <div class="thirdColWrapper">
      <div class="row">
				<div class="col-lg-12" id="slider-thumbs">
						<div class="col-lg-12">
							<div class="row">
								<ul class="hide-bullets">
										<!--Bane-->
										<?php
										if (isset($id)) {
											?>
											<li class="col-lg-3" data-toggle="tooltip" data-placement="top" data-html="true" title="Bane | Founder">
													<p><?php echo $steamprofile['personaname'] ?> | <?php echo $steamprofile['personastate']; ?></p>
													<a target="_blank" href="<?php echo $steamprofile['profileurl'] ?>">
															<img src="<?php echo $steamprofile['avatarfull'] ?>" class="img-rounded img-thumbnail">
													</a>
											</li>
										<?php
									} ?>
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
</div>
