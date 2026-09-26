<?php $this->load->view('includes/header-apply.php'); ?>
<div class="welcome-2 bg8" id="home">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 form-section res-form">
				<?php if ($processstep == 'step1'): ?>
					<div class="card card-border">
						<div class="heading2 card-body mb-1">
							<h5 class="text-dark font-lg-24">
								Get <span class="primary-color">&#8377; 5,00,000/-</span> Personal Loan in Minutes!
							</h5>
							<p class="mb-3">It’s Easy, Quick & Paperless</p>
							<div class="main-form">
								<form action="" id="submitForm1" class="text-start" novalidate="novalidate" method="post"
									accept-charset="utf-8">
									<div class="row">
										<div class="col-12 mb-4">
											<input id="mobile" type="text" name="mobile" class="numeric-input form-control"
												placeholder="Enter mobile no." required minlength="10" maxlength="10"
												inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$"
												data-validation-regex-message="Enter valid mobile number">
											<div class="error-message" id="mobile-message"></div>
										</div>
										<div class="col-12 mb-4">
											<input type="text" name="loanamount" min="10000" max="10000000" id="loanamount"
												class="numeric-input form-control" placeholder="Enter Loan Amount" required
												inputmode="numeric">
											<div class="error-message" id="loanamount-message"></div>
										</div>
										<div class="text-danger custom-error fs-6" id="mobilenoError1"></div>
										<div class="col-12">
											<button type="submit" class="full-btn theme-btn-11" id="form-submit1">
												Apply Now
											</button>
										</div>
									</div>
								</form>
								<div class="col-lg-12 mt-3">
									<p class="font-12">By submitting the form & proceeding, you agree to the <a
											href="<?= base_url('terms-conditions') ?>" target="_blank"
											style="text-decoration: none;" class="text-dark">Terms of Use</a> and <a
											href="<?= base_url('privacy-policy') ?>" target="_blank"
											style="text-decoration: none;" class="text-dark">Privacy Policy</a> of
											Cashindia.
								</div>
								<div class="col-lg-12 mt-1">
								
									<p class="font-12 weight-700">Loan facility is provided by our NBFC/Lending Partners:
									</p>
									<div class="owl-carousel brands-carousel-5 mt-2">

										<?php foreach ($banklist as $row) { ?>
											<div class="brand-logo">
												<img class="img-fluid"
													src="<?php echo base_url('assets/img/banks/' . $row->bank_image); ?>"
													alt="<?php echo $row->bank_name; ?>">
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php elseif ($processstep == 'step2'): ?>
					<div class="card card-border">
						<div class="card-body">
							<?= form_open('', array('id' => 'submitForm2', 'class' => 'text-start ')); ?>
							<img src="<?php echo base_url('assets/img/phone-lock.png'); ?>" height="50" width="50"
								class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
							<div class="row col-lg-12">
								<div class="form-group">
									<p class="font-22 text-dark weight-600">Please enter the received OTP</p>
									<h6 class="text-dark font-18 mt-1 weight-400">Mobile No. : <strong>
											<?php echo $userdetails['mobile']; ?>
										</strong></h6>
									<input type="hidden" name="otpmobile" id="otpmobile"
										value="<?php echo $userdetails['mobile']; ?>">
									<input type="hidden" name="loanamount" id="loanamount"
										value="<?php echo $userdetails['loanamount']; ?>">
								</div>
								<div class="main-form mt-4">
									<div class="row">
										<div class="col-12 mb-4">
											<input id="otpcode" type="text" name="otpcode"
												class="numeric-input form-control text-center optnumber"
												placeholder="Enter OTP" required maxlength="4" inputmode="numeric">
											<div class="error-message" id="otpcode-message"></div>
											<div class="text-danger s-12 mb-2" id="otpcodeError"></div>
										</div>
										<code
											id="resend-message1">Didn't receive OTP? <a href="javascript:resendotp()" class="text-dark">Resend OTP</a></code><br />
										<code id="resend-message2"></code>
										<div class="col-12 mt-5">
											<button type="submit" class="full-btn theme-btn-11" id="form-submit2">
												Verify OTP
											</button>
										</div>
									</div>
								</div>
							</div>
							<?= form_close(); ?>
						</div>
					</div>
				<?php elseif ($processstep == 'step3'): ?>
					<div class="card card-border">
						<div class="card-body">
							<img src="<?= base_url('assets/img/case-study-4-1.png') ?>" alt="" height="50px" width="50px"
								class="svg-inject icon-svg icon-svg-md text-green mb-3">
							<p class="font-22 text-dark weight-600">Choose your profile and fill-in details</p>
							<?php echo form_open('', array('id' => 'submitForm3', 'class' => 'text-start ', 'novalidate' => 'novalidate')); ?>
							<!-- <h6 class="mb-0 primary-color font-20">Loan Amount : <strong>₹<?php echo formatePriceIndia($userdetails['loanamount']); ?></strong></h6> -->
							<h6 class="primary-color font-18 weight-400">Loan Amount : <strong>
									<?php echo formatePriceIndia($userdetails['loanamount']); ?>
								</strong></h6>

							<input type="hidden" name="loanamount" id="loanamount"
								value="<?php echo $userdetails['loanamount']; ?>">
							<input type="hidden" name="referralcode" id="referralcode"
								value="<?php echo $userdetails['referralcode']; ?>">

							<!-- <h6 class="mb-0 text-dark font-20 mt-4">Mobile No. : <strong><?php echo $userdetails['mobile']; ?></strong></h6> -->
							<h6 class="text-dark font-18 weight-400">Mobile No. : <strong>
									<?php echo $userdetails['mobile']; ?>
								</strong></h6>
							<input type="hidden" name="usermobile" id="usermobile"
								value="<?php echo $userdetails['mobile']; ?>">
							<div class="row mt-4">
								<div class="col-lg-12">
									<div class="product-size">
										<ul class="product-sizes" id="myList">
											<li class="active" data-value="1">Salaried</li>
											<li class="" data-value="2">Self-Employed</li>
										</ul>
									</div>
								</div>
								<input type="hidden" id="usertype" name="usertype" value="1">
								<div class="main-form mt-4">
									<div class="col-lg-12 mb-4">
										<input id="username" type="text" name="username" class="form-control "
											placeholder="Full Name *" required>
										<div class="error-message" id="username-message"></div>
									</div>
									<div class="col-lg-12 mb-4">
										<input id="useremail" type="email" name="useremail" class="form-control"
											placeholder="Email id *" required>
										<div class="error-message" id="useremail-message"></div>
									</div>
									<div class="col-lg-12">
										<button type="submit" id="form-submit3" class="full-btn theme-btn-11">
											Process
										</button>
									</div>
								</div>
							</div>
							<?= form_close(); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-lg-6 img-section">
				<div class="hero-2-image">
					<img src="<?= base_url('assets/img/bg/digital-pers.png') ?>" alt="">
				</div>
			</div>
		</div>
		<?php if ($processstep == 'step1'): ?>
			<div class="row align-items-center text-center">
				<p class="font-12 mt-5 p-step">Loan tenure ranging up to 72 months with Annual Interest Rates ranging
					between 11.5% - 36%. Processing fee up to 2%. For Example: Considering a personal loan of Rs.1,00,000
					availed at 11.5%* interest rate for a tenure of 6* years with 2%* processing fee, the APR will be
					12.26%*. *T&C Apply. All these numbers are tentative/indicative, the final loan specifics may vary
					depending upon the customer profile and NBFCs' criteria, rules & regulations, and terms & conditions.
					Company registered address :
					<?= COMPANY_ADDRESS ?>.
				</p>
			</div>
		<?php endif; ?>
	</div>
</div>
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
				}
				else {
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
			if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <= '9'))) {
				event.preventDefault();
			}
		});

		$('#submitForm1').validate({
			rules: {
				mobile: { required: true, digits: true, customMobile: true },
				loanamount: { required: true, digits: true, customAmount: true }
			},
			messages: {
				mobile: { required: 'Please enter mobile number' },
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
						$('#form-submit1').html('Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#form-submit1').attr('disabled', true);
					},
					success: function (response) {
						if (response['success'] == true) {
							if (response['redirect_url'] != "") {
								window.location.href = response['redirect_url'];
							}
							else {
								window.location = "./applynow/s2/" + response['mobile'];
							}
						}
						else {
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
				otpcode: { required: true, digits: true },
			},
			messages: {
				otpcode: { required: 'Enter valid OTP' }
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
						$('#form-submit2').html('Verifying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#form-submit2').attr('disabled', true);
					},
					success: function (response) {
						if (response['success'] == true) {
							window.location = "../../applynow/s3/" + response['mobile'];
						}
						else {
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
				username: { required: true },
				email: { required: true, email: true }
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
						$('#form-submit3').html('Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#form-submit3').attr('disabled', true);
					},
					success: function (response) {
						if (response['success'] == true) {
							window.location.href = response['redirect_url'];
						}
						else {
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
