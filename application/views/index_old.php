<?php $this->load->view('includes/header'); ?>
<!-- SLider Section start -->
<div class="welcome-area welcome-2 bg5 position-relative" id="home">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="title title2 ">
					<h1>Transform Your Financial Well-Being With Industry Experts</h1>
					<p class="font-sm-18">Make the most of our in-house financial experts by receiving first-rate
						financial consultation and services. </p>
					<div class="space30"></div>
					<div class="btn-group">
						<a class="theme-btn-11 text-white p-3" href="<?= base_url('digital/applynow') ?>">Get Consultation Now
							<span> <i class="fa-solid fa-arrow-right"></i></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 d-none d-lg-block">
				<div class="hero-img-elements">
					<div class="hero-main-img position-relative top-right-polygon-1">
						<img class="border-radius" src="<?= base_url('assets/img/theme/main2.jpg') ?>" alt="">
						<div class="corner-shape2 position-absolute">
							<img src="<?= base_url('assets/img/theme/tax-shape1.png') ?>" alt="">
						</div>
						<div class="corner-right-bottom-shape2 position-absolute">
							<img src="<?= base_url('assets/img/theme/shape-right-bottom2.png') ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="down-arrow2">
		<a href="javascript:;" onclick="goToMenu('about')"><img src="<?= base_url('assets/img/theme/down-arrow-black.svg') ?>" alt=""></a>
	</div>
</div>
<!-- SLider Section end -->

<!-- Keypoints start -->
<div class="tax-business section-padding2 bg6" id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-8 m-auto">
				<div class="heading2 white-heading text-center">
					<h2>What makes Cashindia unique? </h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="single-business trans-1">
					<div class="business-icon">
						<img src="<?= base_url('assets/img/theme/tax-business1.png') ?>" alt="">
					</div>
					<h3>Access To Top NBFCs</h3>
					<p class="mb-0">Take advantage of our game-changing financial consultation and our fruitful collaboration with
						the top NBFCs.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="single-business trans-1">
					<div class="business-icon">
						<img src="<?= base_url('assets/img/theme/tax-business4.png') ?>" alt="">
					</div>
					<h3>Fascinating Subscription Benefits</h3>
					<p class="mb-0">Enjoy top-tier financial consultation, unparalleled service, and a plethora of other benefits
						included in our subscription plan. </p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="single-business trans-1">
					<div class="business-icon">
						<img src="<?= base_url('assets/img/theme/tax-business2.png') ?>" alt="">
					</div>
					<h3>Expert Financial Consultation </h3>
					<p class="mb-0">Profit from the knowledge of our in-house financial consultants to strengthen your financial
						position. </p></br>
				</div>
			</div>
			<div class="col-md-6">
				<div class="single-business trans-1">
					<div class="business-icon">
						<img src="<?= base_url('assets/img/theme/tax-business3.png') ?>" alt="">
					</div>
					<h3>Easy & Efficient Online Process </h3>
					<p class="mb-0">Relish our simple and efficient online portal to apply for your loan at your leisure anywhere, at
						any time. </p>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Keypoints end -->

<!-- About Us start -->
<div class="about-area section-padding bg5-left" id="company">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="about-bg-21">
					<div class="about-bg-main-img position-relative top-left-polygon-1">
						<img src="<?= base_url('assets/img/theme/about21.png') ?>" alt="">
						<div class="corner-right-bottom-shape2 position-absolute">
							<img src="<?= base_url('assets/img/theme/shape-right-bottom2.png') ?>" alt="">
						</div>
						<div class="corner-shape2-left position-absolute">
							<img src="<?= base_url('assets/img/theme/tax-shape2.png') ?>" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="heading2 mb-0 ms-lg-15 ms-md-15 ms-0">
					<h2>We Strive To Provide Financial Services With Finesse.</h2>
					<p>We at Cashindia aim to alleviate the onerous loan application process for our clients by
						offering them personalized financial consultations and services. With the help of our
						streamlined portal, we enable our customers to benefit from our enriching collaboration with the
						top NBFCs and process their loans without jeopardizing their CIBIL score.
					</p>
					<p> Some of the advantages that our customers can enjoy by processing their loans with us include:
						100% online processing, loan processing in multiple NBFCs, on-call expert support, a
						personalized customer portal, no negative impact on CIBIL score, and so on. Furthermore, our
						in-house loan experts ensure that our clients have a fantastic, stress-free loan experience.
					</p>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- About US end -->

<!-- Apply Now start -->
<div class="work-1 section-padding bg-17" id="plans">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 mb-4">
				<div class="heading2 no-margin-heading">
					<h2>Cashindia Subscription Plan</h2>
					<p class="font-20 weight-400">Presenting the simplest yet most effective method of obtaining
						pre-approved loan offers from the top NBFCs. </p>
					<div class="space30"></div>
					<?php
					if ($productdata->offeramount != 0) {
						echo '<h3>Rs. <del class="text-danger">' . $productdata->amount . '</del> <span class="text-success">' . $productdata->offeramount . '</span> only</h3>';
					} else {
						echo '<h3>Rs. ' . $productdata['amount'] . ' only</h3>';
					}
					?>
					<div class="space30"></div>
					<div class="button-group">
						<a class="theme-btn-11 text-white p-3" href="<?= base_url('digital/applynow') ?>">Apply Now<span><i class="fa-solid fa-arrow-right"></i></span></a>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="about-bg-main-img position-relative top-left-polygon-1">
					<img src="<?= base_url('assets/img/company/c-logo-1.jpg') ?>" alt="">
					<div class="corner-right-bottom-shape2 position-absolute">
						<img src="<?php echo base_url('assets/img/theme/shape-right-bottom2.png'); ?>" alt="">
					</div>
					<div class="corner-shape2-left position-absolute">
						<img src="<?php echo base_url('assets/img/theme/tax-shape2.png'); ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Apply Now end -->

<!-- NBFC start -->
<div class="logo-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-8 m-auto">
				<div class="heading2 text-center">
					<h2>Our NBFC Partners</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="logos owl-carousel">
					<?php foreach ($banklist as $row) { ?>
						<div class="single-logo">
							<img src="<?php echo base_url('assets/img/banks/' . $row->bank_image); ?>" alt="<?php echo $row->bank_name; ?>">
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- NBFC end -->

<!-- Testimonial start -->
<div class="testimonial-3 bg-17 section-padding _relative">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 m-auto">
				<div class="heading2 text-center">
					<h2>Here Are Our Customers' Opinions About Us </h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="testimonials-3 owl-carousel">
					<div class="single-testimonial">
						<div class="testimonial-icon">
							<img src="<?= base_url('assets/img/theme/quote-1.png') ?>" alt="">
						</div>
						<p>“I am extremely pleased with the quick and easy loan application process. The team members
							were always there for me throughout the loan process, explaining everything in detail and
							making my loan experience less stressful. They truly are experts.”</p>
						<div class="author-reviews">
							<div class="author">
								<a href="#">Richa Jariwala </a>
							</div>
						</div>
					</div>

					<div class="single-testimonial">
						<div class="testimonial-icon">
							<img src="<?= base_url('assets/img/theme/quote-1.png') ?>" alt="">
						</div>
						<p>“A streamlined digital loan application process with exceptional customer service. Processing
							my loan with Cashindia was a true pleasure. Anyone looking for a hassle-free loan should
							definitely check out Cashindia. You will never have regrets.”</p>
						<div class="author-reviews">
							<div class="author">
								<a href="#">Roshan Kotharia </a>
							</div>
						</div>
					</div>

					<div class="single-testimonial">
						<div class="testimonial-icon">
							<img src="<?= base_url('assets/img/theme/quote-1.png') ?>" alt="">
						</div>
						<p>“I am grateful that I contacted Cashindia and processed my loan with them because I was
							facing financial difficulties. The advice I received from the experts was extremely
							beneficial to me and aided me in making sound decisions. Keep it up, folks!! ”</p>
						<div class="author-reviews">
							<div class="author">
								<a href="#">Gowtham Harikrishnan </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="shape-007">
		<img src="<?= base_url('assets/img/theme/shape007.svg') ?>" alt="">
	</div>
</div>
<!-- Testimonial end -->

<!-- contact start -->
<div class="contct6 section-padding pb-5" id="contacts">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="contact-all-hadding">
					<div class="heading2 mb-0">
						<h2> Unparalleled subscription advantages</h2>
					</div>
					<div class="space20"></div>
					<div class="contact6-list">
						<ul>
							<li class="font-f-7 pt-2 pb-2"><span><i class="fa-solid fa-check"></i></span>Loan process in
								multiple NBFCS</li>
							<li class="font-f-7 pt-2 pb-2"><span><i class="fa-solid fa-check"></i></span>Dedicated Loan
								Experts </li>
							<li class="font-f-7 pt-2 pb-2"><span><i class="fa-solid fa-check"></i></span>Personalized
								Customer Portal </li>
							<li class="font-f-7 pt-2 pb-2"><span><i class="fa-solid fa-check"></i></span>On-call Expert
								Guidance </li>
							<li class="font-f-7 pt-2 pb-2"><span><i class="fa-solid fa-check"></i></span>100% seamless
								Online Process </li>
							<li class="font-f-7 pt-2 pb-2"><span><i class="fa-solid fa-check"></i></span>No Negative
								impact on CIBIL Score </li>
						</ul>
					</div>
					<div class="space30"></div>
					<div class="heading2 mb-0">
						<h3>Contact us directly:</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-10">
							<div class="contact6-icon-box">
								<div class="contact6-icon">
									<img src="<?= base_url('assets/img/theme/contact6-icon1.svg') ?>" alt="">
								</div>
								<div class="heading2 mb-0">
									<h4><a href="javascript:;" class="font-f-7">Visit us</a></h4>
									<a href="javascript:;"><?= COMPANY_ADDRESS ?></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="contact6-icon-box">
							<div class="contact6-icon">
								<img src="<?= base_url('assets/img/theme/contact6-icon2.svg') ?>" alt="">
							</div>
							<div class="heading2 mb-0">
								<h4><a href="" class="font-f-7">Call Us</a></h4>
								<a href="tel:<?= COMPANY_MOBILE ?>">
									<?= COMPANY_MOBILE ?><br />&nbsp;
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="contact6-icon-box res-div-top">
							<div class="contact6-icon">
								<img src="<?= base_url('assets/img/theme/contact6-icon3.svg') ?>" alt="">
							</div>
							<div class="heading2">
								<h4><a href="#" class="font-f-7">Email Us</a></h4>
								<a href="malto:<?= COMPANY_EMAIL ?>">
									<?= COMPANY_EMAIL ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="contact3-form-all pt-4">
					<div class="heading2 text-center mb-0">
						<h2 class="mb-0">Contact Us</h2>
						<div class="space10"></div>
						<p class="mt-0">Start Your Loan Process Now </p>
					</div>
					<?php echo form_open('', array('id' => 'contactForm', 'class' => 'mt-sm-0 contact-form', 'novalidate' => 'novalidate')); ?>
					<div class="form-input-all">
						<div class="form-input-box">
							<div class="row">
								<div class="col-md-12">
									<div class="input-single6">
										<div class="form-group">
											<input id="form_name" type="text" name="name" class="form-control" placeholder="Your Name" required="" data-validation-regex-regex="^[a-zA-Z ]*$">
											<div class="error-message" id="form_name-message"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-input-box">
							<div class="row">
								<div class="col-md-6">
									<div class="input-single6">
										<div class="form-group">
											<input id="form_mobile" type="text" name="mobile" class="numeric-input form-control" placeholder="Your Mobile" required="" minlength="10" maxlength="10" inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$" data-validation-regex-message="Enter valid mobile number">
											<div class="error-message" id="form_mobile-message"></div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-single6">
										<div class="form-group">
											<input id="form_email" type="email" name="email" class="form-control" placeholder="Your Email Id" required="">
											<div class="error-message" id="form_email-message"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-input-box">
							<div class="row">
								<div class="col-md-12">
									<div class="input-single6">
										<div class="form-group">
											<input id="form_subject" type="text" name="subject" class="form-control" placeholder="Your subject" required="">
											<div class="error-message" id="form_subject-message"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="contact6-from-input">
							<textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required=""></textarea>
							<div class="error-message" id="form_message-message"></div>
						</div>
						<div class="space20"></div>
						<div class="button1">
							<button class="theme-btn-11 text-white p-3">Send Message <span><i class="fa-solid fa-arrow-right"></i></span> </button>
						</div>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contact end -->
<?php $this->load->view('includes/footer'); ?>
<script>
	/* validate contact form */
	$(document).ready(() => {
		$.validator.addMethod("customMobile", function(value, element) {
			return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
		}, "Please enter a valid mobile number");
		$('.numeric-input').on('keydown', function(event) {
			if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <= '9'))) {
				event.preventDefault();
			}
		});
		$("#contactForm").validate({
			rules: {
				name: {
					required: true,
				},
				email: {
					required: true,
					email: true,
				},
				mobile: {
					required: true,
					digits: true,
					customMobile: true
				},
				subject: {
					required: true
				},
				message: {
					required: true,
				}
			},
			errorPlacement: function(error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				// alert(target)
				$(target).html(error);
			},
			submitHandler: function(form) {
				$.ajax({
					url: `<?php echo base_url('infopage/contactsubmission') ?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function() {
						$('#submit-btn').html("SUBMITTING... <span class='spinner-border spinner-border-sm ms-1' role='status' aria-hidden='true'></span>");
						$('#submit-btn').attr('disabled', true);
					},
					success: function(response) {
						if (response['success'] == true) {
							document.getElementById("contactForm").reset();
							toastr.success(response['message']);
						} else {
							toastr.error(response['message']);
						}
						$('#submit-btn').html('Send Message');
						$('#submit-btn').attr('disabled', false);
					},
					error: function(jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#submit-btn').html('Send Message');
						$('#submit-btn').attr('disabled', false);
					}
				});
			}
		});
	})
</script>
