<?php
$msgstatus="panel-default";
$statusmsg="";
?>

          <div class="col-md-8 col-md-offset-2">
            <h2><small>Fill out the form and </small>Contact us</h2>
            
            <div class="panel <?php echo $msgstatus; ?>">
              <div class="panel-heading">
                <h3 class="panel-title">
                <?php echo $statusmsg; ?>
                <!--
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                -->
                </h3>
              </div>
              <div class="panel-body">
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                  placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="btn btn-theme btn-block btn-md">Send Message</button></div>
            </form>
              </div>
            </div>

          </div>
   
          </div>