<!--=====Footer start=======-->
<footer>
	<div class="section-sm bg-black pb-5">
		<div class="container">
			<div class="row g-4">
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
					<div class="header-logo">
						<a href="<?= base_url(); ?>"><img src="<?= base_url('assets/images/logo/logo-large-light.png') ?>" width="100" alt="Fintopcorporate" /></a>
					</div>

					<p class="text-light small pt-4 pb-4">Partnered with multiple NBFCs, we offer top-notch financial consultation and services through our in-house experts. 
					</p>
					
					<ul class="list-inline-sm">
						<?php if (SM_FACEBOOK != '#') { ?>
							<li><a  data-bs-toggle="tooltip" title="Facebook" target="_blank" rel="nofollow" class="button-circle button-circle-sm button-circle-social-facebook" href="<?php echo SM_FACEBOOK; ?>"><i class="bi bi-facebook"></i></a></li>
						<?php } ?>	

						<?php if (SM_TWITTER != '#') { ?>		
						<li><a  data-bs-toggle="tooltip" title="Twitter" target="_blank" rel="nofollow" class="button-circle button-circle-sm button-circle-social-twitter" href="<?php echo SM_TWITTER; ?>"><i class="bi bi-twitter-x"></i></a></li>
						<?php } ?>	

						<?php if (SM_PINTEREST != '#') { ?>
						<li><a  data-bs-toggle="tooltip" title="Pinterest" target="_blank" rel="nofollow" class="button-circle button-circle-sm button-circle-social-pinterest" href="<?php echo SM_PINTEREST; ?>"><i class="bi bi-pinterest"></i></a></li>
						<?php } ?>	

						<?php if (SM_INSTAGRAM != '#') { ?>	
						<li><a  data-bs-toggle="tooltip" title="Instagram" target="_blank" rel="nofollow" class="button-circle button-circle-sm button-circle-social-instagram" href="<?php echo SM_INSTAGRAM; ?>"><i class="bi bi-instagram"></i></a></li>
						<?php } ?>	

						<?php if (SM_LINKEDIN != '#') { ?>	
						<li><a  data-bs-toggle="tooltip" title="Linkedin" target="_blank" rel="nofollow" class="button-circle button-circle-sm button-circle-social-linkedin" href="<?php echo SM_LINKEDIN; ?>"><i class="bi bi-linkedin"></i></a></li>
						<?php } ?>

						<?php if (SM_YOUTUBE != '#') { ?>	
						<li><a  data-bs-toggle="tooltip" title="Youtube" target="_blank" rel="nofollow" class="button-circle button-circle-sm button-circle-social-youtube" href="<?php echo SM_YOUTUBE; ?>"><i class="bi bi-youtube"></i></a></li>
						<?php } ?>
					</ul>
				
				</div>
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
					<h6 class="fw-medium uppercase mb-3">Useful Links</h6>
					<ul class="list-dash animate-links">
						<li><a href="javascript:;" onclick="goToMenu('company')">Company</a></li>
						<li><a href="<?= base_url('career') ?>">Career</a></li>
						<li><a href="<?= base_url('important-update') ?>">Important Updates</a></li>
						<li><a href="<?= base_url('faqs') ?>">FAQs</a></li>
						<li><a href="<?= base_url('support/request') ?>">Raise a Request</a></li>
					</ul>
				</div>
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
					<h6 class="fw-medium uppercase mb-3">Additional Links</h6>
					<ul class="list-dash animate-links">
						<li><a href="<?= base_url('privacy-policy') ?>">Privacy Policy</a></li>
						<li><a href="<?= base_url('terms-conditions') ?>">Terms & Conditions</a></li>
						<li><a href="<?= base_url('disclaimer') ?>">Disclaimer</a></li>
						<li><a href="<?= base_url('refund-policy') ?>">Cancellation &amp; Refund Policy</a></li>
					</ul>
				</div>
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
					<h6 class="fw-medium uppercase mb-3">Get in touch</h6>
					<ul class="list-unstyled animate-links">
						<li><a href="tel:<?= COMPANY_MOBILE; ?>"><i class="bi bi-phone text-white"></i> <?php echo COMPANY_MOBILE; ?></a></li>
						<li style="word-wrap:break-word"><a href="mail-to:<?= COMPANY_EMAIL; ?>"><i class="bi bi-envelope text-white"></i> <?php echo COMPANY_EMAIL; ?></a></li>
						<li><a href="#"><i class="bi bi-map text-white"></i> <?php echo COMPANY_ADDRESS; ?></a></li>
						<li style="word-wrap:break-word"><a href="#">LLP No - <?php echo COMPANY_LLP; ?></a></li>
					</ul>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</div>

	<div class="bg-black py-3 border-top border-black">	
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-md-12 text-center">
					<p class="small"><?= date('Y') ?> &copy; <?= COMPANY_NAME; ?>. All Rights Reserved.</p>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</div>
</footer>
<!--=====Footer end=======-->

<script src="<?= base_url('assets/plugins/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/plugins.js') ?>"></script>
<script src="<?= base_url('assets/js/functions.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>		
<!-- font awesome script -->
<script type="text/javascript">!function(t,e){t.artibotApi={l:[],t:[],on:function(){this.l.push(arguments)},trigger:function(){this.t.push(arguments)}};var a=!1,i=e.createElement("script");i.async=!0,i.type="text/javascript",i.src="https://app.artibot.ai/loader.js",e.getElementsByTagName("head").item(0).appendChild(i),i.onreadystatechange=i.onload=function(){if(!(a||this.readyState&&"loaded"!=this.readyState&&"complete"!=this.readyState)){new window.ArtiBot({i:"50f029c3-65f3-4343-8308-e7d239659afd"});a=!0}}}(window,document);</script>
</body>
</html>
