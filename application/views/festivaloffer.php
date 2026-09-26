<?php
	$this->load->view('includes/header-apply.php');
?>

<div class="main-hero main-hero2">
	<div class="container">
		<div class="row">
			<div class="col-md-12 m-auto">
				<div class="heading2 text-center mb-10">
					<h2 class="aos-init">Purchase Plan To View Your Pre-Approved Loan Offers</h2>
					<div class="space14"></div>
					<p class="heading-top aos-init">Instant Pre-Approval | Multiple NBFCs Offers | 100% Paperless Process</p>
				</div>
			</div>
		</div>

		<div class="space30"></div>

		<div id="monthly">
			<div class="row">
				<div class="col-lg-6 pb-3">
					<div class="contact2-form-box-all">
						<div class="contact-form">
							<!-- pay/getfestivaloffer -->
							<?php
							if ($this->session->flashdata('danger')): ?>
								<div id="flash-message" class="alert alert-danger alert-dismissible fade show" role="alert">
									<?= $this->session->flashdata('danger'); ?>
									<?= $this->session->unset_userdata('danger'); ?>
								</div>
							<?php endif; ?>

							<p class="mb-3">Start your loan process with following details:</p>

							<?php echo form_open('pay/getfestivaloffer', array('id' => 'submitForm1', 'class' => 'main-form')); ?>
							<div class="form-group form-floating mb-4">
								<input id="fullname" type="text" name="fullname" class="form-control" placeholder=""
									data-validation-regex-regex="^[a-zA-Z ]*$"
									data-validation-regex-message="Enter valid fullname" required>
								<label for="fullname">Full Name *</label>
								<div class="error-message" id="fullname-message"></div>
							</div>

							<div class="form-group form-floating mb-4">
								<input id="mobileno" type="text" name="mobileno" class="form-control" placeholder=""
									required minlength="10" maxlength="10" inputmode="numeric"
									data-validation-regex-regex="^[6789]\d{9}$"
									data-validation-regex-message="Enter valid mobile number" />
								<label for="mobileno">Mobile Number *</label>
								<div class="error-message" id="mobileno-message"></div>
							</div>

							<div class="form-group form-floating mb-4">
								<input id="emailid" type="email" name="emailid" class="form-control" placeholder=""
									required />
								<label for="emailid">Email Id *</label>
								<div class="error-message" id="emailid-message"></div>
							</div>

							<div class="form-group mb-4">
								<p class="font-12">By submitting the form & proceeding, you agree to the <a href="<?= base_url('terms-conditions') ?>" target="_blank" style="text-decoration: none;" class="text-dark">Terms of Use</a> and <a href="<?= base_url('privacy-policy') ?>" target="_blank" style="text-decoration: none;" class="text-dark">Privacy Policy</a> of Cashindia.</p>
							</div>

							<div class="form-group">
								<button type="submit" id="form-submit1" class="button-h-2 btnfos2">Process to Pay</button>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-sm-6">
					<div class="serviceBox darkred">
						<h3 class="title">Standard Subscription Plan</h3>
						<?php
						if ($productdata['inOffer'] == 1) {
							echo '<h3><span class="text-danger weight-400 fs-6"><del>&#8377; ' . formatePrice($productdata['amount']) . '</del></span> <span class="text-success weight-700">';
							echo '&#8377; ' . formatePrice($productdata['offeramount']) . '/- Only</span></h3>';
							$subtotal = $productdata['offeramount'];
						} else {
							echo '<h3 class="text-success">&#8377; ' . formatePrice($productdata['amount']) . '/-</h3>';
							$subtotal = $productdata['amount'];
						}
						?>

						<div class="single-widget">
							<ul class="Categories-list">
								<?php if ($productdata['inOffer'] == 1) { ?>
									<li>
										<span class="pricing-icon">
											<img src="<?= base_url('assets/img/icons/double-check2.png') ?>" alt="">
										</span>
										<span class="weight-700 text-success">
											<?php echo calPercentage($productdata['amount'], $productdata['offeramount']); ?>
											OFF
										</span>
									</li>
								<?php } ?>
								<li class="text-dark"><span class="pricing-icon">
										<img src="<?= base_url('assets/img/icons/double-check2.png') ?>" alt="">
									</span>
									<strong>Subtotal: </strong>&nbsp;&nbsp;
									<?php echo formatePriceIndia($subtotal); ?>
								</li>
								<li class="text-dark"><span class="pricing-icon">
										<img src="<?= base_url('assets/img/icons/double-check2.png') ?>" alt="">
									</span>
									<strong>GST (18%): </strong>&nbsp;&nbsp;
									<?php $gst = $subtotal * 0.18;
									echo formatePriceIndia($gst); ?>
								</li>
								<li class="text-dark"><span class="pricing-icon">
										<img src="<?= base_url('assets/img/icons/double-check2.png') ?>" alt="">
									</span>
									<strong>Grand Total: </strong>&nbsp;&nbsp;
									<?php $grandtotal = $subtotal + $gst;
									echo formatePriceIndia($grandtotal); ?>
								</li>

								<li class="text-dark"><span class="pricing-icon">
										<img src="<?= base_url('assets/img/icons/double-check2.png') ?>" alt="">
									</span>
									<strong>Plan Validity: </strong>&nbsp;&nbsp; 6 months
								</li>

								<li class="text-dark">
									<strong>Loan
										Process Time: </strong>&nbsp;&nbsp;
									<?php $grandtotal = $subtotal + $gst;
									echo formatePriceIndia($grandtotal); ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- NBFC start -->
<div class="brand4">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto text-center">
				<div class="hadding2 text-center mb-3">
					<h2>Our NBFC Partners</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="brand4-slider-all owl-carousel pt-3 pb-3">
					<?php foreach ($banklist as $row) { ?>
						<div class="brand4-single-slider">
							<img src="<?php echo base_url('assets/img/banks/' . $row->bank_image); ?>" alt="<?php echo $row->bank_name; ?>">
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space30"></div>
<!-- NBFC end -->

<!--=====testimonial start=======-->
<div class="tes6 sp3">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 m-auto text-center">
				<div class="hadding2 text-center">
					<h2>Trusted by Our Customers</h2>
				</div>
			</div>
		</div>

		<div class="space30"></div>

		<div class="row">
			<div class="tes6-slider-all owl-carousel">
				<?php foreach ($testimoniallist as $row) { ?>
					<div class="tes6-single-slider">
						<div class="tes6-slider-icon">
							<img src="<?php echo base_url() ?>assets/img/icons/tes6-icon.svg" alt="">
						</div>
						<div class="space24"></div>
						<p><?php echo $row->reviews; ?></p>

						<div class="tes6-border"></div>

						<div class="tes6-bottom-area">
							<div class="tes6-bottom-hadding">
								<div class="tes6-hadding">
									<h5><?php echo $row->fullname; ?></h5>
								</div>
							</div>

							<div class="tes6-icons">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
								</ul>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>
		</div>
	</div>
</div>
<!--=====testimonial end=======-->

<?php
$this->load->view('includes/footer-apply.php');
?>

<script type="text/javascript">
	$.validator.addMethod("customMobile", function (value, element) {
		return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
	}, "Please enter a valid mobile number");

	$('#submitForm1').validate({
		rules: {
			mobileno: {
				required: true,
				digits: true,
				customMobile: true
			},
			fullname: {
				required: true,
			},
			emailid: {
				required: true,
				email: true,
			},
		},
		messages: {
			mobileno: {
				required: 'Please enter mobile number'
			},
			fullname: {
				required: 'Please enter full name'
			},
			emailid: {
				required: 'Please enter valid email address'
			},

		},
		errorPlacement: function (error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function (form) {
			$('#form-submit1').attr('disabled', true);
			$('#form-submit1').html(
				'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
			);

			$('#submitForm1')[0].submit();
		}
	})
	
	setTimeout(function() {
		const msg = document.getElementById('flash-message');
		if (msg) {
			msg.style.transition = "opacity 0.5s ease-out";
			msg.style.opacity = 0;
			setTimeout(() => {
				msg.style.display = "none";
			}, 500); // Wait for fade out to complete before hiding
		}
	}, 5000); // Adjusted comment to match the actual delay
</script>
