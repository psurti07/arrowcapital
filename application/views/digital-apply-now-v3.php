<?php $this->load->view('includes/header-apply.php'); ?>

<div class="section-lg bg-image parallax"  style="background: #2289a2">
	<div class="section-divider-curve-bottom">
		<div class="container">
			<div class="row align-items-center g-3 g-lg-3">
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 d-none d-md-block">
					<img src="<?php echo base_url() ?>assets/images/lending_img.png" class="img-fluid"
						style="border-radius: 30px;">
				</div>

				<div class="col-12 col-sm-12 col-md-6 col-lg-6 p-4 bg-white" style="border: 1px solid #0d1364; border-radius: 25px;">
					<?php if ($processstep == 'step1'): ?>
					<div class="contact-form">
						<h2 class="text-dark">Get Personal Loan up to <span class="text-green">₹5,00,000/-</span> in Minutes!</h2>

						<div class="pt-2">
							<?= form_open('', array('id' => 'submitForm1')); ?>
							<div class="col-md-12 col-sm-12">
								<label class="form-control pt-0 ps-0" style="background:none">Select Loan Amount</label>
								<div class="form-group form-floating mb-4">
									<div class="range">
										<div class="range__slider">
											<input type="range" name="loanamount" step="10000">
										</div>
										<div class="range__value">
											<label>Loan Amount : </label>
											<span style="font-size:24px;color: #0d1364;font-weight: 700;"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<label class="form-control pt-0 ps-0" style="background:none">Mobile Number</label>
								<input class="form-control border-dark" id="mobile" type="text" name="mobile"
									placeholder="Enter Mobile No" required minlength="10" maxlength="10"
									inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$"
									data-validation-regex-message="Enter valid mobile number">
								<span class="error-message" id="mobile-message"></span>
							</div>

							<div class="col-md-12 col-sm-12">
								<button class="button-dark button-lg button-radius button-turquiose w-100"
									id="form-submit1" type="submit">Apply Now</button>
							</div>
						</div>

						<p class="mt-3 text-dark"> <small> By submitting the form & proceeding, you agree to the <a
									href="<?= base_url('terms-conditions') ?>" target="_blank"
									style="text-decoration: none;" class="text-dark">Terms of Use</a> and <a
									href="<?= base_url('privacy-policy') ?>" target="_blank"
									style="text-decoration: none;" class="text-dark">Privacy Policy</a> of
								Fintopcorporate.</small></p>
								<div class="owl-carousel brands-carousel-5 mt-2" data-owl-dots="false" data-owl-nav="true" data-owl-autoplay="true"
				data-owl-margin="20" data-owl-xs="2" data-owl-sm="2" data-owl-lg="6">

										<?php foreach ($banklist as $row) { ?>
											<div class="brand-logo">
												<img class="img-fluid"
													src="<?php echo base_url('assets/images/banks/' . $row->bank_image); ?>"
													alt="<?php echo $row->bank_name; ?>">
											</div>
										<?php } ?>
									</div>
						<?= form_close(); ?>
					</div>
				<?php elseif ($processstep == 'step2'): ?>
					<div class="contact-form">
						<?= form_open('', array('id' => 'submitForm2')); ?>
						<div class="feature-box">
							<div class="feature-box-icon bg-dark-lightest text-white">
								<i class="bi bi-phone"></i>
							</div>
							<h5 class="fw-normal">Please enter the received OTP</h5>
							<h6 class="text-dark font-18 mt-1 ">Mobile No. : <?php echo $userdetails['mobile']; ?></h6>
							<input type="hidden" name="otpmobile" id="otpmobile"
								value="<?php echo $userdetails['mobile']; ?>">
							<input type="hidden" name="loanamount" id="loanamount"
								value="<?php echo $userdetails['loanamount']; ?>">
						</div>
						<div class="row g-4">
							<div class="col-md-12 col-sm-12 pt-4">
								<input class="form-control border-dark border-radius mb-0 text-dark" id="otpcode" type="text"
									name="otpcode" placeholder="Enter OTP" required maxlength="4" inputmode="numeric">
								<div class="error-message error-message" id="otpcode-message"></div>
								<div class="error-message fs-6 pb-3" id="otpcodeError"></div>
									<div class="p-countdown">
										<div class="p-countdown-count" id="counttime">
											<code>New OTP code will generate in <span id="timer">30</span> Sec</code>
										</div>
										<div id="resendBtn" class="d-none">
											<code>Didn’t receive OTP? <a href="javascript:resendotp()">Resend OTP</a></code>
										</div>
										<code id="resend-message"></code>
										<div class="custom-error" id="otpcodeError"></div>
									</div>
							</div>
							<div class="col-md-12 col-sm-12 pt-2">
								<button class="button-dark button-lg button-radius button-turquiose w-100"
									id="form-submit2" type="submit">Verify OTP</button>
							</div>
						</div>
					</div>
				<?= form_close(); ?>
				<?php elseif ($processstep == 'step3'): ?>
					<div class="contact-form">
						<?php echo form_open('', array('id' => 'submitForm3', 'novalidate' => 'novalidate')); ?>
							<input type="hidden" name="loanamount" id="loanamount" value="<?php echo $userdetails['loanamount']; ?>">
							<input type="hidden" name="referralcode" id="referralcode" value="<?php echo $userdetails['referralcode']; ?>">

						<div class="feature-box">
							<div class="feature-box-icon bg-dark-lightest text-white">
								<i class="bi bi-file-earmark-person"></i>
							</div>
							<h5 class="fw-normal">Choose your profile and fill-in details</h5>
							<h6 class="text-dark font-18 mt-1 ">Mobile No. : <?php echo $userdetails['mobile']; ?></h6>
							<input type="hidden" name="otpmobile" id="otpmobile"
								value="<?php echo $userdetails['mobile']; ?>">
							<input type="hidden" name="loanamount" id="loanamount"
								value="<?php echo $userdetails['loanamount']; ?>">
							<input type="hidden" name="usermobile" id="usermobile"
								value="<?php echo $userdetails['mobile']; ?>">
						</div>
						<div class="pt-4">
							<div class="radio-nav" id="myList">
								<label class="radio-tab">
									<input type="radio" data-value="1" value="1" id="usertype" name="usertype" checked="">
									<span class="name">Salaried</span>
								</label>
								<label class="radio-tab">
									<input type="radio" data-value="2" value="2" id="usertype" name="usertype">
									<span class="name">Self-Employed</span>
								</label>
							</div>
						</div>

						<div class="row gx-3 gy-0 pt-2">
							<div class="col-md-12 col-sm-12 pt-4">
								<label class="form-control pt-0 ps-0" style="background:none">Enter your name</label>
								<input class="form-control border-dark border-radius mb-0 text-dark" id="username" type="text"
									name="username" placeholder="Full Name *" required>
								<div class="error-message custom-error fs-6" id="username-message"></div>
							</div>
							<div class="col-md-12 col-sm-12 pt-4">
								<label class="form-control pt-0 ps-0" style="background:none">Enter email id</label>
								<input class="form-control border-dark border-radius mb-0 text-dark" id="useremail" type="email"
									name="useremail" placeholder="Email id *" required>
								<div class=" error-message" id="useremail-message"></div>
							</div>
							<div class="col-md-12 col-sm-12 pt-4">
								<button class="button-dark button-lg button-radius button-turquiose w-100"
									id="form-submit3" type="submit">Process</button>
							</div>
						</div>
						<?= form_close(); ?>
					</div>
				<?php endif; ?>
				</div>

			</div>
		</div><!-- end row -->
	</div><!-- end container -->
</div>

<div class="section-xs">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
				<h2 class="fw-light line-height-160 m-0 pb-2">Features and Benefits of Personal Loan</h2>
			</div>
		</div><!-- end row -->
		<div class="row g-4 mt-3 mt-lg-3 icon-5xl text-center">
			<!-- Feature box 1 -->
			<div class="col-12 col-md-4">
				<div class="bg-color-turquiose-02 p-3 p-lg-4 border-radius-1 hover-float hover-shadow">
					<div class="text-dark mb-2">
						<i class="bi bi-star"></i>
					</div>
					<h4 class="text-dark">Simplified and Digital Loan</h4>
				</div>
			</div>
			<!-- Feature box 2 -->
			<div class="col-12 col-md-4">
				<div class="bg-color-blue-02 p-3 p-lg-4 border-radius-1 hover-float hover-shadow">
					<div class="text-dark mb-2">
						<i class="bi bi-arrow-repeat"></i>
					</div>
					<h4 class="text-dark">Convenient Loan Tenure</h4>
				</div>
			</div>
			<!-- Feature box 3 -->
			<div class="col-12 col-md-4">
				<div class="bg-color-purple-02 p-3 p-lg-4 border-radius-1 hover-float hover-shadow">
					<div class="text-dark mb-2">
						<i class="bi bi-columns-gap"></i>
					</div>
					<h4 class="text-dark">Competitive Rates of Interest</h4>

				</div>
			</div>
		</div><!-- end row -->
	</div><!-- end container -->
</div>

<?php if ($processstep == 'step1'): ?>
<?php 		
	$testimonialimg = array('43.jpg', '45.jpg', '47.jpg', '48.jpg');
?>
<div class="section-xs bg-whte our-testimonials" id="testimonials-slide">
	<div class="container pb-3">
		<div class="row ">
			<div class="col-12 ">
				<div class="text-center pb-2">
					<h2 class="fw-light line-height-160 m-0 pb-2">Our Loan Offers</h2>
				</div>
				<div class="owl-carousel" data-owl-dots="false" data-owl-nav="false" data-owl-autoplay="true"
					data-owl-margin="20" data-owl-xs="1" data-owl-sm="1" data-owl-lg="2" data-owl-xl="2">
					<?php foreach ($testimonialimg as $row) { ?>

					<div class="client-box">
						<img src="<?php echo base_url('assets/images/offerimg/'.$row); ?>" alt="chellappa">

					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section-xs bg-whte d-none d-md-block">
	<div class="container">
		<div class="row ">
			<div class="col-12">
				<div class="text-center pb-2">
					<h2 class="fw-light line-height-160 m-0 pb-2"> Apply Instantly, Seamlessly!</h2>
					<h6>Experience Digitally Powered Quick Steps!</h6>
				</div>

				<div class="blog-card-wrapper">
					<div class="blog-card">
						<div class="blog-card-date">
							<h1 class="display-4 fw-medium text-color-theme m-0">01</h1>

						</div>
						<h4 class="fw-medium mt-2">Check Eligibility</h4>
						<p class="text-dark">Our system will determine your eligibility and display pre-approved loan
							offers based on the information you entered.</p>
					</div>
				</div>
				<div class="blog-card-wrapper">
					<div class="blog-card">
						<div class="blog-card-date">
							<h1 class="display-4 fw-medium text-color-theme m-0">02</h1>

						</div>
						<h4 class="fw-medium mt-2">Get Subscription Plan</h4>
						<p class="text-dark">Purchase the Capital Mani Subscription Plan to gain access to pre-approved
							loan offers with convenient payment options.</p>
					</div>
				</div>
				<div class="blog-card-wrapper">
					<div class="blog-card">
						<div class="blog-card-date">
							<h1 class="display-4 fw-medium text-color-theme m-0">03</h1>

						</div>
						<h4 class="fw-medium mt-2">Document Submission</h4>
						<p class="text-dark">Submit your documents using the credentials sent to your registered email
							address.</p>

					</div>
				</div>
				<div class="blog-card-wrapper">
					<div class="blog-card">
						<div class="blog-card-date">
							<h1 class="display-4 fw-medium text-color-theme m-0">04</h1>

						</div>
						<h4 class="fw-medium mt-2">Bank Verification</h4>
						<p class="text-dark">The NBFC will verify your documents and your profile following their
							guidelines.</p>
					</div>
				</div>
				<div class="blog-card-wrapper">
					<div class="blog-card">
						<div class="blog-card-date">
							<h1 class="display-4 fw-medium text-color-theme m-0">05</h1>

						</div>
						<h4 class="fw-medium mt-2">Bank Sanction</h4>
						<p class="text-dark">The NBFC will make the final decision and then sanction and disburse the
							funds.</p>
					</div>
				</div>

			</div>

		</div><!-- end row -->
	</div><!-- end container -->
</div>

<div class="bg-gray py-3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class=""><small>Loan tenure ranging up to 72 months with Annual Interest Rates ranging
					between 11.5% - 36%. Processing fee up to 2%. For Example: Considering a personal loan of
					Rs.1,00,000
					availed at 11.5%* interest rate for a tenure of 6* years with 2%* processing fee, the APR will be
					12.26%*. *T&C Apply. All these numbers are tentative/indicative, the final loan specifics may vary
					depending upon the customer profile and NBFCs' criteria, rules & regulations, and terms &
					conditions.
					Company registered address :
					<?= COMPANY_ADDRESS ?>.</small>
				</p>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<script src="<?php echo base_url('assets/js/loanscript.js'); ?>" type="text/javascript"></script>
<?php $this->load->view('includes/footer-apply.php'); ?>

<script>
	$('#myList li').click(function () {
		$('#usertype').val($(this).data('value'));
	});

	function resendotp() {
		loanamount = document.getElementById('loanamount').value;
		mobile = document.getElementById('otpmobile').value;

		$.ajax({
			url: '<?php echo base_url("digital/resendotpCode"); ?>',
			type: "POST",
			data: 'mobile=' + mobile + '&loanamount=' + loanamount,
			dataType: "JSON",
			cache: false,
			processData: false,
			success: function (response) {
				if (response['success'] == true) {
					$('#resend-message2').html(response['message']);
					toastr.success(response['message']);
				} else {
					toastr.error(response['message']);
				}
			},
			error: function (jXHR, textStatus, errorThrown) {
				toastr.error(errorThrown, 'ERROR');
			}
		});
	}

	$(document).ready(function () {
		$.validator.addMethod("customMobile", function (value, element) {
			return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
		}, "Please enter a valid mobile number");

		$.validator.addMethod("customAmount", function (value, element) {
			// Check if the value is a valid number and within the specified range
			return this.optional(element) || (parseFloat(value) >= 10000 && parseFloat(value) <= 10000000);
		}, "Please enter a valid loan amount between 10,000 and 1,00,00,000.");

		$('.numeric-input').on('keydown', function (event) {
			if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <=
					'9'))) {
				event.preventDefault();
			}
		});

		$('#submitForm1').validate({
			rules: {
				mobile: {
					required: true,
					digits: true,
					customMobile: true
				},
				loanamount: {
					required: true,
					digits: true,
					customAmount: true
				}
			},
			messages: {
				mobile: {
					required: 'Please enter mobile number'
				},
				loanamount: {
					required: "Please enter a loan amount.",
					validAmount: "Please enter a valid loan amount between 10,000 and 1,00,00,000."
				}
			},
			errorPlacement: function (error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				$(target).html(error);
			},
			submitHandler: function (form) {
				$.ajax({
					url: `<?php echo base_url('digital/sendotpCode') ?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function () {
						$('#form-submit1').html(
							'Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
						);
						$('#form-submit1').attr('disabled', true);
					},
					success: function (response) {
						if (response['success'] == true) {
							if (response['redirect_url'] != "") {
								window.location.href = response['redirect_url'];
							} else {
								window.location = "./applynow/s2/" + response['mobile'];
							}
						} else {
							$('#mobilenoError1').html(response['message']);
							toastr.error(response['message']);
						}
						$('#form-submit1').html('Apply Now');
						$('#form-submit1').attr('disabled', false);
					},
					error: function (jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit1').html('Apply Now');
						$('#form-submit1').attr('disabled', false);
					}
				});
			}
		});

		$('#submitForm2').validate({
			rules: {
				otpcode: {
					required: true,
					digits: true
				},
			},
			messages: {
				otpcode: {
					required: 'Enter valid OTP'
				}
			},
			errorPlacement: function (error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				// alert(target)
				$(target).html(error);
			},
			submitHandler: function (form) {
				$.ajax({
					url: `<?php echo base_url('digital/checkotpCode') ?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function () {
						$('#form-submit2').html(
							'Verifying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
						);
						$('#form-submit2').attr('disabled', true);
					},
					success: function (response) {
						if (response['success'] == true) {
							window.location = "../../applynow/s3/" + response['mobile'];
						} else {
							$('#otpcodeError').html(response['message']);
							toastr.error(response['message']);
						}

						$('#form-submit2').html('Verify OTP');
						$('#form-submit2').attr('disabled', false);
					},
					error: function (jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit2').html('Verify OTP');
						$('#form-submit2').attr('disabled', false);
					}
				});
			}
		});

		$('#submitForm3').validate({
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				}
			},
			errorPlacement: function (error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				$(target).html(error);
			},
			submitHandler: function (form) {
				$.ajax({
					url: `<?php echo base_url('digital/registeredUser') ?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function () {
						$('#form-submit3').html(
							'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
						);
						$('#form-submit3').attr('disabled', true);
					},
					success: function (response) {
						if (response['success'] == true) {
							window.location.href = response['redirect_url'];
						} else {
							$('#otpcodeError').html(response['message']);
							toastr.error(response['message']);
						}

						$('#form-submit3').html('Process');
						$('#form-submit3').attr('disabled', false);
					},
					error: function (jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit3').html('Process');
						$('#form-submit3').attr('disabled', false);
					}
				});
			}
		});
	});

</script>

<script>
    let resendBtn = document.getElementById('resendBtn');
	let counttime = document.getElementById('counttime'); 
    let timerDisplay = document.getElementById('timer');
    let countdown = 30;

    let interval = setInterval(() => {
      countdown--;
      timerDisplay.textContent = countdown;

      if (countdown <= 0) {
        clearInterval(interval);
        resendBtn.classList.remove('d-none');
		counttime.classList.add('d-none');
        timerDisplay.textContent = '';
      }
    }, 1000);

    resendBtn.addEventListener('click', function () {
      resendBtn.classList.add('d-none');
	  counttime.classList.remove('d-none');
      countdown = 30;
      timerDisplay.textContent = countdown;
      
      interval = setInterval(() => {
        countdown--;
        timerDisplay.textContent = countdown;

        if (countdown <= 0) {
          clearInterval(interval);
           resendBtn.classList.remove('d-none');
		   counttime.classList.add('d-none');
          timerDisplay.textContent = '';
        }
      }, 1000);

    
    });
  </script>
