<?php $this->load->view('includes/header-apply.php'); ?>

<!-- Clients section -->
<div class="pt-3 pb-5 bg-lend-blue">
	<div class="container">
		<div class="row align-items-center g-4 g-lg-5">
			<div class="col-12 col-xl-10">
				<h2 class="fw-normal text-light"><?= $userdetails['loanname']; ?></h2>
				<p class="text-light">Just a few more details to get pre-approved loan offer from our Partnered NBFCs</p>
			</div>

		</div><!-- end row -->
	</div><!-- end container -->
</div>
<!-- end Clients section -->

<div class="section-sm ">
	<div class="container">
		<div class="box-backdrop p-2 p-lg-4 ">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-12 order-2 order-lg-1 mt-4 mt-md-0">
					<div class="bg-white border border-radius p-4 p-lg-4 mb-2 hover-float">
						<ul class="list-unstyled gx-4">
							<li class="pb-2 border-bottom text-dark"><strong>Applicant Details:</strong></li>
							<li class="pt-2 pb-2 border-bottom"><a class="d-flex justify-content-between"
									href="#">Fullname <strong><span><?= $userdetails['fullname'] ?></span></strong></a>
							</li>
							<li class="pt-2 pb-2 border-bottom"><a class="d-flex justify-content-between"
									href="#">Mobile <strong><span><?= $userdetails['mobile'] ?></span></strong></a></li>
							<li class="pt-2 pb-2 border-bottom"><a class="d-flex justify-content-between" href="#">Loan
									Amount
									<strong><span>₹<?= formatePriceIndia($userdetails['loanamount']) ?></span></strong></a>
							</li>
						</ul>
					</div>
					<div class="col-12 icon-4xl p-3">
						<div class="d-flex flex-row align-items-center justify-content-center">
							<div class="pe-4">
								<i class="bi bi-people text-gradient-6"></i>
							</div>
							<div>
								<h2 class="fw-medium text-gradient-6 mb-0"><span class="counter">8000</span>+</h2>
								<p>Happy Customers</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-12 order-1 order-lg-2">
					<div class="bg-white border-radius">
						<div class="contact-form">
							<?php echo form_open('digital/userApply', array('id' => 'submitForm1', 'class' => '', 'novalidate' => 'novalidate')); ?>
							<input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
								class="form-control" required>
							<input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
								class="form-control" required>
							<input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
								class="form-control" required>

							<div class="row gx-3 gy-0">
								<div class="col-md-6 col-sm-12 pt-2">
									<select class="custom-select w-100 border" id="cibilscore" name="cibilscore" required="">
										<option value="">Cibil Score *</option>
										<option value="Below 650">Below 650</option>
										<option value="650 - 700">650 - 700</option>
										<option value="700 - 750">700 - 750</option>
										<option value="750 - 800">750 - 800</option>
										<option value="800 - 850">800 - 850</option>
										<option value="850 - 900">850 - 900</option>
									</select>
									<div class="error-message" id="cibilscore-message"></div>
								</div>
								<div class="col-md-6 col-sm-12 pt-2">
									<input id="monincome" type="text" name="monincome" class="form-control border"
										placeholder="Monthly Income *" required inputmode="numeric">
									<div class="error-message" id="monincome-message"></div>
								</div>
								<div class="col-md-6 col-sm-12 pt-2">
									<input id="monemi" type="text" name="monemi" class="form-control border"
										placeholder="Current Monthly EMI *" required inputmode="numeric">
									<div class="error-message" id="monemi-message"></div>
								</div>
								<div class="col-md-6 col-sm-12 pt-2">
									<select class="custom-select w-100 border" id="loanpurpose" name="loanpurpose" required>
										<option selected value="">Select Loan Purpose *</option>
										<?php if ($userdetails['loantype'] == 12) { ?>
											<option value="Business Expansion">Business Expansion</option>
											<option value="Maintain Cash Flow">Maintain Cash Flow</option>
											<option value="Supplier Payments">Supplier Payments</option>
											<option value="Setup Manufacturing Unit">Setup Manufacturing Unit</option>
											<option value="Hiring Budget">Hiring Budget</option>
											<option value="Other">Other</option>
										<?php } else { ?>
											<option value="Personal Use">Personal Use</option>
											<option value="Property Renovation">Property Renovation</option>
											<option value="Marriage Purpose">Marriage Purpose</option>
											<option value="Education Purpose">Education Purpose</option>
											<option value="Medical Emergency">Medical Emergency</option>
											<option value="Other">Other</option>
										<?php } ?>
									</select>
									<div class="error-message" id="loanpurpose-message"></div>
								</div>
								<div class="col-md-6 col-sm-12 pt-2">
									<input id="city" type="text" name="city" class="form-control border" placeholder="City *"
										required>
									<div class="error-message" id="city-message"></div>
								</div>
								<div class="col-md-6 col-sm-12 pt-2">
									<select class="custom-select w-100 border" id="state" name="state" required>
										<option value="">Select State *</option>
										<?php echo getStateOption(); ?>
									</select>
									<div class="error-message" id="state-message"></div>
								</div>
								<div class="col-md-12 col-lg-12 col-sm-12 pt-2 text-center">
									<button class="button-dark button-lg button-radius button-turquiose "
										id="form-submit1" type="submit">Check Eligibility</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('includes/footer-apply.php'); ?>
<script>
	$(document).ready(() => {
		$('#submitForm1').validate({
			rules: {
				cibilscore: {
					required: true
				},
				monincome: {
					required: true,
					digits: true
				},
				monemi: {
					required: true,
					digits: true
				},
				loanpurpose: {
					required: true
				},
				city: {
					required: true
				},
				state: {
					required: true
				}
			},
			errorPlacement: function (error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				$(target).html(error);
			},
			submitHandler: function (form) {
				$.ajax({
					url: `<?php echo base_url('digital/userApply') ?>`,
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
						if (response.success == true) {
							window.location.href = `${base_url + response.redirect_url}`;
						} else {
							toastr.error(response['message']);
						}

						$('#form-submit1').html('Check Eligibility');
						$('#form-submit1').attr('disabled', false);
					},
					error: function (jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit1').html('Check Eligibility');
						$('#form-submit1').attr('disabled', false);
					}
				})
			}
		})
	})

</script>
