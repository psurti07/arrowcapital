<?php $this->load->view('includes/header.php'); ?>


<!-- SLider Section start -->
<div class="bg-blue border-radius-1 section-sm px-2 px-lg-5 mx-4 mx-lg-5" id="home">
	<div class="container">
		<div class="row align-items-center g-4 g-lg-5">
			<div class="col-12 col-lg-7 order-lg-2">
				<img class="border-radius-1" src="<?= base_url('assets/images/slider/Home-1.jpg') ?>" alt="">
			</div>
			<div class="col-12 col-lg-5 order-lg-1">
				<ul class="list-inline mb-3 d-none">
					<li><i class="bi bi-check-circle-fill  pe-2"></i>Dedicated Expert</li>
					<li><i class="bi bi-check-circle-fill  pe-2"></i>100% Online Process </li>
				</ul>
				<h1 class="fw-medium">Empowering Your Financial Goals with Expert Guidance.
				</h1>
				<a class="button button-md button-radius button-turquiose mt-3 mt-lg-4"
					href="<?= base_url('digital/applynow') ?>">Get Consultation Now
				</a>
			</div>
		</div><!-- end row -->
	</div><!-- end container -->
</div>
<!-- SLider Section end -->

<!-- Clients section -->
<div class="n-margin-3">
	<div class="container">
		<div class="bg-white border-radius-1 box-shadow p-3	p-lg-3 mt-2">

			<div class="owl-carousel" data-owl-dots="false" data-owl-nav="true" data-owl-autoplay="true"
				data-owl-margin="20" data-owl-xs="2" data-owl-sm="2" data-owl-lg="6" data-owl-xl="6">
				<?php foreach ($banklist as $row) { ?>
				<div class="client-box">
					<img src="<?php echo base_url('assets/images/banks/' . $row->bank_image); ?>"
						alt="<?php echo $row->bank_name; ?>">
				</div>
				<?php } ?>
			</div><!-- end owl-carousel -->
		</div>
	</div><!-- end container -->
</div>
<!-- end Clients section -->

<!-- Keypoints start -->
<div class="section" id="about">
	<div class="container text-center icon-5xl">

		<div class="row icon-5xl g-4">
			<h2 class="fw-light line-height-150 mb-3">What Makes Fintop Corporate Outstanding?</h2>

			<div class="col-12 col-lg-4">
				<div class="border border-radius-2 hover-shadow hover-float p-4 p-lg-5">
					<i class="bi bi-diagram-3 text-dark"></i>
					<h5 class="fw-normal mt-2">Effective Partnership With NBFCs</h5>
					<p>Profit from the highly acclaimed financial services powered by our enriching collaboration with
						leading NBFCs.</p>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="border border-radius-2 hover-shadow hover-float p-4 p-lg-5">
					<i class="bi bi-globe2 text-dark"></i>
					<h5 class="fw-normal mt-2">Easy Online Process</h5>
					<p>Relish our extensive range of services in the most simple and efficient manner from the comfort
						of your own home.</p>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="border border-radius-2 hover-shadow hover-float p-4 p-lg-5">
					<i class="bi bi-person-bounding-box text-dark"></i>
					<h5 class="fw-normal mt-2">Expert Financial Consultation</h5>
					<p>Elevate your financial well-being to the next level with our expert-led consultations and
						services.</p>
				</div>
			</div>
		</div><!-- end row -->
	</div><!-- end container -->
</div>
<!-- Keypoints end -->

<!-- About Us start -->

<div id="company" class="section bg-gray-lighter">
	<div class="container">
		<div class="mb-5 text-center">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-12">
					<h6
						class="d-inline-block bg-white box-shadow border-radius px-3 py-2 line-height-140 font-small uppercase letter-spacing-1 mb-3">
						<span class="text-gradient-6">About us</span></h6>
					<h2 class="fw-normal">Fintop Corporate: Your Trusted Partner for Financial
						Success</h2>
					<p class="font-large mb-2">Fintop Corporate is India's renowned financial consultation and service
						provider. With a team of experienced professionals, we specialize in delivering comprehensive
						financial solutions that help many people achieve their dreams. Through our enriching
						collaboration with industry-leading NBFCs, we provide a wide range of financial services and
						take pride in providing individualized solutions to meet the diverse financial needs of each
						client.
					</p>
					<p class="font-large">With the goal of making financial advice accessible to all at their
						fingertips, we offer a streamlined digital portal for our clients to take advantage of and
						process loans with our partnered NBFCs without worrying about their credit score — all through a
						meticulously crafted subscription plan. We enable our clients to achieve financial success by
						focusing on innovation, collaboration, and unwavering commitment, and we take pride in
						celebrating their accomplishments as our own.
					</p>
				</div>
			</div><!-- end row(1) -->
		</div>
		<div class="row mt-3 text-center">
			<!-- Price box 1 -->
			<div class="col-12 col-md-4">
				<div class="bg-white box-shadow hover-float border-radius p-4">
					<div class="mt-3">
						<h3 class="line-height-100 fw-normal mb-3"><i class="bi bi-eye"></i> VISION</h3>
						<p class="">With an emphasis on excellence, integrity, and client
							satisfaction, we at Fintop Corporate aim to lead the financial services industry.
						</p>
					</div>

				</div>
			</div>
			<!-- Price box 2 -->
			<div class="col-12 col-md-4">
				<div class="bg-white box-shadow hover-float border-radius p-4">
					<div class="mt-3">
						<h3 class="line-height-100 fw-normal mb-3"><i class="bi bi-bullseye"></i> MISSION</h3>
						<p class="">To make financial consultation and services available to
							everyone in order to empower them to achieve financial success.
						</p>
					</div>
				</div>
			</div>

			<!-- Price box 3 -->
			<div class="col-12 col-md-4">
				<div class="bg-white box-shadow hover-float border-radius p-4">
					<div class="mt-3">
						<h3 class="line-height-100 fw-normal mb-3"><i class="bi bi-boxes"></i> VALUES</h3>
						<p class="">We remain steadfastly dedicated to supporting our clients in achieving
							their goals, going above and beyond to ensure their continued success.
						</p>
					</div>
				</div>
			</div>
		</div><!-- end row -->
	</div><!-- end container -->
</div>


<!-- Our Process start -->
<div class="section bg-white" id="process">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-12 text-center mb-5">
				<h6 class="d-inline-block bg-white box-shadow border-radius px-3 py-2 line-height-140 font-small uppercase letter-spacing-1 mb-3"><span class="text-gradient-6">Our Process</span></h6>
				<h2>Apply Instantly, Seamlessly!</h2>
				<p>Experience Digitally Powered Quick Steps!</p>
			</div>
			<div class="col-12 col-lg-12">
				<div class="row g-5 d-flex justify-content-center">
					<div class="col-12 col-md-6 col-lg-4">
						<div class="feature-box">
							<div class="feature-box-icon bg-color-very-peri text-white">
								<i class="display-6 bi bi-1-circle"></i>
							</div>
							<h5 class="fw-normal">Check Eligibility</h5>
							<p>Our system will determine your eligibility and display pre-approved loan offers based on
								the information you entered.</p>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="feature-box">
							<div class="feature-box-icon bg-color-very-peri text-white">
								<i class="display-6 bi bi-2-circle"></i>
							</div>
							<h5 class="fw-normal">Get Subscription Plan</h5>
							<p>Purchase the Capital Mani Subscription Plan to gain access to pre-approved loan offers
								with convenient payment options.</p>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="feature-box">
							<div class="feature-box-icon bg-color-very-peri text-white">
								<i class="display-6 bi bi-3-circle"></i>
							</div>
							<h5 class="fw-normal">Document Submission</h5>
							<p>Submit your documents using the credentials sent to your registered email address.</p>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="feature-box">
							<div class="feature-box-icon bg-color-very-peri text-white">
								<i class="display-6 bi bi-4-circle"></i>
							</div>
							<h5 class="fw-normal">Bank Verification</h5>
							<p>The NBFC will verify your documents and your profile following their guidelines.</p>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="feature-box">
							<div class="feature-box-icon bg-color-very-peri text-white">
								<i class="display-6 bi bi-5-circle"></i>
							</div>
							<h5 class="fw-normal">Bank Sanction</h5>
							<p>The NBFC will make the final decision and then sanction and disburse the funds.</p>
						</div>
					</div>
				</div><!-- end row -->

			</div>
		</div><!-- end row(outer) -->
	</div><!-- end container -->
</div>
<!-- Our Process end -->

<!-- Apply Now start -->
<div class="section bg-blue" id="plans">
	<div class="container">
		<div class="row align-items-center g-5">
			<div class="col-12 col-lg-4">
				<h6
					class="d-inline-block bg-white box-shadow border-radius px-3 py-2 line-height-140 font-small uppercase letter-spacing-1 mb-3">
					<span class="text-gradient-6">Subscription Plan</span></h6>
				<h2>Take a Step Forward Towards Achieving Your Dreams </h2>
				<p>Move closer to your financial goals with top-tier financial consultation from industry experts right
					at your fingertips. </p>
			</div>
			<div class="col-12 col-lg-8">
				<div class="row g-4">
					<!-- Price box 1 -->
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row bg-white box-shadow hover-float border-radius p-4 p-lg-5">
							<div class="col-lg-7 col-md-8 col-sm-6 col-12">
								<div class="">
									<?php
										if ($productdata->offeramount != 0) {
											echo '<h3 class="line-height-100 fw-medium mb-0">₹. <del class="text-danger">' . $productdata->amount . '</del> <span class="text-success">' . $productdata->offeramount . '</span> only</h3>';
										} else {
											echo '<h3>Rs. ' . $productdata['amount'] . ' only</h3>';
										}
									?>
								</div>
								<ul class="list-unstyled mt-4">
									<li class="text-dark"><i class="bi bi-check pe-2"></i>Loan Process With Multiple
										NBFCs </li>
									<li class="text-dark"><i class="bi bi-check pe-2"></i>Dedicated Expert Assigned
									</li>
									<li class="text-dark"><i class="bi bi-check pe-2"></i>No Negative Impact on CIBIL
										Score </li>
									<li class="text-dark"><i class="bi bi-check pe-2"></i>100% Online Process </li>
								</ul>
								<a class="button button-lg button-radius button-blue mt-3 mt-lg-4"
									href="<?= base_url('digital/applynow') ?>">Get Consultation Now</a>
							</div>
							<div class="col-lg-5 col-md-5 col-sm-4 col-12">
								<img src="<?php echo base_url('assets/images/slider/Home-2.png'); ?>" class="img-fluid">
							</div>
						</div>
					</div>
				</div><!-- end row(inner) -->
			</div>
		</div><!-- end row(outer) -->
	</div><!-- end container -->
</div>
<!-- Apply Now end -->


<!-- Testimonial section -->
<div class="section-xs">
	<div class="container">
		<div class="mb-5">
			<div class="row text-center">
				<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
					<h6 class="font-small fw-medium uppercase">Testimonial</h6>
					<h2 class="fw-light line-height-150 mb-3">Hear From Our Clients</h2>
				</div>
			</div>
		</div>
		<div class="owl-carousel" data-owl-margin="30" data-owl-xs="1" data-owl-sm="1" data-owl-md="1" data-owl-lg="2"
			data-owl-xl="2" data-owl-nav="false">
			<!-- Masonry Item 1 -->
			<div class="masonry-item">
				<div class="bg-white box-shadow border-radius p-4 p-lg-5">
					<div class="d-block text-golden-yellow mb-3">
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
					</div>
					<p class="font-large">"Fintop Corporate is extremely beneficial to people who require financial
						assistance. The application process for a loan through Fintop Corporate is simple and completely
						online. Highly Recommended!!"</p>
					<div class="d-flex align-items-center mt-3">
						<div class="d-inline-block me-3">
							<img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
								alt="">
						</div>
						<div class="d-inline-block">
							<h5 class="fw-normal m-0 line-height-140">Alok Kumar</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Masonry Item 2 -->
			<div class="masonry-item">
				<div class="bg-white box-shadow border-radius p-4 p-lg-5">
					<div class="d-block text-golden-yellow mb-3">
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
					</div>
					<p class="font-large">"I recently processed my loan through Fintop Corporate. I must say I had an
						incredible experience with them. They are very helpful and knowledgeable people. I am very
						satisfied with them."</p>
					<div class="d-flex align-items-center mt-3">
						<div class="d-inline-block me-3">
							<img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
								alt="">
						</div>
						<div class="d-inline-block">
							<h5 class="fw-normal m-0 line-height-140">Karthikeyan Hari </h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Masonry Item 3 -->
			<div class="masonry-item">
				<div class="bg-white box-shadow border-radius p-4 p-lg-5">
					<div class="d-block text-golden-yellow mb-3">
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
					</div>
					<p class="font-large">"I had a great experience and received excellent service from the Fintop
						Corporate team, especially when there is a doubt, which they will resolve quickly. I highly
						recommend Fintop Corporate! "</p>
					<div class="d-flex align-items-center mt-3">
						<div class="d-inline-block me-3">
							<img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
								alt="">
						</div>
						<div class="d-inline-block">
							<h5 class="fw-normal m-0 line-height-140">Aditya Saini </h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Masonry Item 4 -->
			<div class="masonry-item">
				<div class="bg-white box-shadow border-radius p-4 p-lg-5">
					<div class="d-block text-golden-yellow mb-3">
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
					</div>
					<p class="font-large">"Am happy to process my loan with Fintop Corporate. Their collaboration with
						multiple NBFCs makes it an excellent choice to go with and enjoy the unique set of services
						included with the subscription."</p>
					<div class="d-flex align-items-center mt-3">
						<div class="d-inline-block me-3">
							<img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
								alt="">
						</div>
						<div class="d-inline-block">
							<h5 class="fw-normal m-0 line-height-140">Jayshree Shah </h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Masonry Item 5 -->
			<div class="masonry-item">
				<div class="bg-white box-shadow border-radius p-4 p-lg-5">
					<div class="d-block text-golden-yellow mb-3">
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
					</div>
					<p class="font-large">"Thank you to the Fintop Corporate team for their excellent coordination and
						timely service and response throughout the process. I strongly recommend Fintop Corporate to
						anyone looking for financial assistance. "</p>
					<div class="d-flex align-items-center mt-3">
						<div class="d-inline-block me-3">
							<img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
								alt="">
						</div>
						<div class="d-inline-block">
							<h5 class="fw-normal m-0 line-height-140">Sameer Malik </h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Masonry Item 6 -->
			<div class="masonry-item">
				<div class="bg-white box-shadow border-radius p-4 p-lg-5">
					<div class="d-block text-golden-yellow mb-3">
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
						<i class="bi bi-star-fill"></i>
					</div>
					<p class="font-large">"Fintop Corporate has me in awe. I liked how transparent the team was
						throughout the process. The digital portal saved me a significant amount of time and effort. I
						am a very satisfied customer. "</p>
					<div class="d-flex align-items-center mt-3">
						<div class="d-inline-block me-3">
							<img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
								alt="">
						</div>
						<div class="d-inline-block">
							<h5 class="fw-normal m-0 line-height-140">Uttam Singh </h5>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end masonry -->
	</div><!-- end row -->
</div>
<!-- end Testimonial section -->

<!-- contact start -->
<div class="section-xs bg-blue" id="contacts">
	<div class="container">
		<div class="row icon-4xl">

			<div class="col-12 col-md-6 col-sm-6 col-lg-4 p-2">
				<div class="feature-box">
					<div class="feature-box-icon bg-color-very-peri text-white">
						<i class="display-6 bi bi-envelope"></i>
					</div>
					<h5 class="fw-normal">Email:</h5>
					<p><a href="malto:<?= COMPANY_EMAIL ?>" class="text-dark">
							<?= COMPANY_EMAIL ?>
						</a></p>
				</div>
			</div>

			
			<div class="col-12 col-md-6 col-sm-6 col-lg-4 p-2">
				<div class="feature-box">
					<div class="feature-box-icon bg-color-very-peri text-white">
						<i class="display-6 bi bi-telephone"></i>
					</div>
					<h5 class="fw-normal">Phone:</h5>
					<p><a href="malto:<?= COMPANY_MOBILE ?>" class="text-dark">
							<?= COMPANY_MOBILE ?>
						</a></p>
				</div>
			</div>

			<div class="col-12 col-md-6 col-sm-6 col-lg-4 p-2">
				<div class="feature-box">
					<div class="feature-box-icon bg-color-very-peri text-white">
						<i class="display-6 bi bi-clock-history"></i>
					</div>
					<h5 class="fw-normal">Office Hours:</h5>
					<p>10 AM to 5 PM (Monday to Saturday)</p>
				</div>
			</div>

			<div class="col-12 col-md-6 col-sm-6 col-lg-12 p-2">
				<div class="feature-box">
					<div class="feature-box-icon bg-color-very-peri text-white">
						<i class="display-6 bi bi-geo-alt"></i>
					</div>
					<h5 class="fw-normal">Address:</h5>
					<p><a href="malto:<?= COMPANY_ADDRESS ?>" class="text-dark">
							<?= COMPANY_ADDRESS ?>
						</a></p>
				</div>
			</div>
		</div>
		<!-- end Contact Info -->

		<!-- Contact Form -->
		<div class="row pt-4">
			<div class="col-lg-12 col-sm-12 col-md-12 mb-3">
				<div class="border border-radius border-dark p-4">

					<h2 class="text-center fw-light line-height-150 mb-3">Contact Us</h2>
					<div class="contact-form">
						<?php echo form_open('', array('id' => 'contactForm', 'novalidate' => 'novalidate')); ?>
						<div class="row gx-3 gy-0">
							<div class="row col-md-6">
								<div class="col-md-6">
									<input id="form_name" type="text" name="name" class="form-control border-dark border-radius mb-0"
										placeholder="Your Name" required="" data-validation-regex-regex="^[a-zA-Z ]*$">
									<div class="text-danger mb-3" id="form_name-message"></div>
								</div>
								<div class="col-md-6">
									<input id="form_mobile" type="text" name="mobile"
										class="form-control border-dark border-radius mb-0" placeholder="Your Mobile" required=""
										minlength="10" maxlength="10" inputmode="numeric"
										data-validation-regex-regex="^[6789]\d{9}$"
										data-validation-regex-message="Enter valid mobile number">
									<div class="text-danger mb-3" id="form_mobile-message"></div>
								</div>
								<div class="col-md-6">
									<input id="form_email" type="email" name="email"
										class="form-control border-dark border-radius mb-0" placeholder="Your Email Id" required="">
									<div class="text-danger mb-3" id="form_email-message"></div>
								</div>
								<div class="col-md-6">
									<input id="form_subject" type="text" name="subject"
										class="form-control border-dark border-radius mb-0" placeholder="Your Subject" required="">
									<div class="text-danger mb-3" id="form_subject-message"></div>
								</div>
							</div>
							<div class="row col-md-6">
								<textarea id="form_message" name="message" class="form-control border-dark border-radius mb-0"
									placeholder="Your Message" style="height: 120px" required=""></textarea>
								<div class="text-danger mb-3" id="form_message-message"></div>
							</div>

						</div>
						<div class="row">
							<div class="text-center">
								<button class="button button-md button-radius button-turquiose" type="submit">Send
									Message</button>
							</div>
						</div>


						<?php echo form_close(); ?>
						<!-- Submit result -->
						<div class="submit-result">
							<span id="success">Thank you! Your Message has been sent.</span>
							<span id="error">Something went wrong, Please try again!</span>
						</div>
					</div><!-- end contact-form -->
				</div>
			</div>

		</div>
		<!-- end Contact Form -->
	</div>
</div>
<!-- contact end -->

<?php $this->load->view('includes/footer.php'); ?>
<script>
	/* validate contact form */
	$(document).ready(() => {
		$.validator.addMethod("customMobile", function (value, element) {
			return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
		}, "Please enter a valid mobile number");
		$('.numeric-input').on('keydown', function (event) {
			if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <=
					'9'))) {
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
			errorPlacement: function (error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				// alert(target)
				$(target).html(error);
				
			},
			submitHandler: function (form) {
				$.ajax({
					url: `<?php echo base_url('infopage/contactsubmission') ?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function () {
						$('#submit-btn').html(
							"SUBMITTING... <span class='spinner-border spinner-border-sm ms-1' role='status' aria-hidden='true'></span>"
						);
						$('#submit-btn').attr('disabled', true);
					},
					success: function (response) {
						if (response['success'] == true) {
							document.getElementById("contactForm").reset();
							toastr.success(response['message']);
						} else {
							toastr.error(response['message']);
						}
						$('#submit-btn').html('Send Message');
						$('#submit-btn').attr('disabled', false);
					},
					error: function (jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#submit-btn').html('Send Message');
						$('#submit-btn').attr('disabled', false);
					}
				});
			}
		});
	})

</script>
