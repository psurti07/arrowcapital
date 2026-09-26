
             <!--=====Footer start=======-->
<footer class="footer-area footer-area2 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="single-footer mr50">
            <a href="<?php echo base_url() ?>" class="footer-logo">
              <img src="<?php echo base_url('assets/img/logo/cashindia.png');?>" alt="" style="width: 200px;"/></a>
            <div class="space20"></div>
            <p>
						While we absolutely love what we do, nothing gives us more satisfaction than seeing our clients achieve their financial goals.
            </p>
            <div class="space20"></div>
                <div class="social social3">
                    <ul>
                    <?php if(SM_FACEBOOK != '#'){?> 
                      <li>
                          <a data-bs-toggle="tooltip" title="Facebook" href="<?php echo SM_FACEBOOK?>"><i class="fa-brands fa-facebook"></i></a>
                      </li>
                    <?php } ?>
                    <?php if(SM_LINKEDIN != '#'){?> 
                    <li>
                        <a data-bs-toggle="tooltip" title="Linked in" href="<?php echo SM_LINKEDIN;;?>"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <?php } ?>
                    <?php if(SM_YOUTUBE != '#'){?> 
                    <li>
                        <a data-bs-toggle="tooltip" title="Youtube" href="<?php echo SM_YOUTUBE;?>"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                    <?php } ?>
                    <?php if(SM_TWITTER != '#'){?> 
                    <li>
                        <a data-bs-toggle="tooltip" title="Twitter" href="<?php echo SM_TWITTER;?>"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <?php } ?>
                    <?php if(SM_PINTEREST != '#'){?>
                    <li>
                        <a data-bs-toggle="tooltip" title="Pinterest" href="<?php echo SM_PINTEREST;?>"><i class="fa-brands fa-pinterest"></i></a>
                    </li>
                    <?php } ?>
                    <?php if(SM_INSTAGRAM != '#'){?>
                    <li>
                        <a data-bs-toggle="tooltip" title="Instagram" href="<?php echo SM_INSTAGRAM;?>"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                     <?php } ?>
                    </ul>
                </div>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="single-footer">
            <h3>Useful Links</h3>
            <div class="footer-menu">
              <ul>
                    <li><a href="javascript:;" onclick="goToMenu('company')">Company</a></li>
                    <li><a href="<?= base_url('career') ?>">Career</a></li>
                    <li><a href="<?= base_url('important-update') ?>">Important Updates</a></li>
                    <li><a href="<?= base_url('faqs') ?>">FAQs</a></li>
                    <li><a href="<?= base_url('support/request') ?>">Raise a Request</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="single-footer">
            <h3>Useful Links</h3>
            <div class="footer-menu">
              <ul>
                    <li><a href="<?= base_url('privacy-policy') ?>">Privacy Policy</a></li>
                    <li><a href="<?= base_url('terms-conditions') ?>">Terms &amp; Condition</a></li>
                    <li><a href="<?= base_url('disclaimer') ?>">Disclaimer</a></li>
                    <li><a href="<?= base_url('refund-policy') ?>">Cancellation &amp; Refund Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="single-footer">
            <h3>Get in touch</h3>
            <div class="footer-menu">
                <p class="m-0 p-0">
                    <strong>Address: </strong><br><?php echo COMPANY_ADDRESS; ?>
                </p>
                <p class="m-0 p-0"><strong>Mobile: </strong><br><?php echo COMPANY_MOBILE; ?></p>
                <p class="m-0 p-0">
                    <strong>Email: </strong><br> <?php echo COMPANY_EMAIL; ?>
                </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center copyright2">
        <div class="col-12 text-center">
          <p class="copyright-p"><?= date('Y') ?> &copy; <?= COMPANY_NAME; ?>. All Rights Reserved.<br></p>
        </div>
      </div>
    </div>
  </footer>
  <!--=====Footer end=======-->

    <!--=====footer end=======-->

        <!--=====JS=======-->
  <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/fontawesome.js') ?>"></script>
  <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="<?= base_url('assets/js/jquery.validate.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/slick-slider.js') ?>"></script>
  <script src="<?= base_url('assets/js/mobile-menu.js') ?>"></script>
  <script src="<?= base_url('assets/js/tilt.jquery.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.countup.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.nice-select.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.lineProgressbar.js') ?>"></script>
  <script src="<?= base_url('assets/js/mobile-meanmenu.js') ?>"></script>
  <script src="<?= base_url('assets/js/modal-video.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
    function goToMenu(sectionId){
	let currentUrl = window.location.href;
	let lastSegment = currentUrl.substring(currentUrl.lastIndexOf('/') + 1);
	if((lastSegment!==null) || (lastSegment!=='')){
		window.location.href = '<?php echo base_url()?>#'+sectionId;
	} else {
		var section = document.getElementById(sectionId);
		if (section) {
			section.scrollIntoView({behavior: 'smooth'});
		}
	}
}

  </script>
  </body>
</html>
