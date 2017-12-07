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
                                      <textarea class="form-control" placeholder="Introduction about yourself. Previous experience, interests and how you found us." id="message" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                      <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                  </div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="col-lg-12 text-center">
                                  <input id="submit" name="submit" type="submit" class="btn btn-lg signUp" value="APPLY"></input>
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
