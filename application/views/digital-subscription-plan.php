<?php
$this->load->view('includes/header-apply.php');
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
$amtpay = $productdata['payamount'];
?>

<div class="section pt-3 pt-md-5 pt-3 pt-md-5 pb-0">
	<div class="container">
		<div class="row p-2 p-lg-4">
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 order-2 order-lg-1  mt-2 mt-md-0">
				<div class="bg-white border border-radius p-4 p-lg-4 mb-2 hover-float">
					<ul class="list-unstyled gx-4">
						<li class="pb-2 border-bottom text-dark"><strong>Applicant Details:</strong></li>
						<li class="pt-2 pb-2 border-bottom"><a class="d-flex justify-content-between" href="#">Fullname <strong><span><?= $userdetails['fullname'] ?></span></strong></a></li>
						<li class="pt-2 pb-2 border-bottom"><a class="d-flex justify-content-between" href="#">Mobile
								<strong><span><?= $userdetails['mobile'] ?></span></strong></a></li>
						<li class="pt-2 pb-2 border-bottom"><a class="d-flex justify-content-between" href="#">Loan Amount
								<strong><span>₹<?= formatePriceIndia($userdetails['loanamount']) ?></span></strong></a></li>
					</ul>
				</div>
				<div class="col-12 icon-4xl p-3 px-0">
					<div class="d-flex flex-row align-items-center justify-content-start card bg-gray mb-3 border-0 px-3 py-2">
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
				<div class="bg-white border border-radius p-4 p-lg-4 mb-2 hover-floatg">
					<div class="row">
						<div class="col-12 col-xl-12 pb-4">
							<h2 class="fw-normal text-dark"><?= $userdetails['loanname']; ?></h2>
							<p class="text-dark">Purchase Plan To Process Your <strong><span class="underline-2 success" style="color:#9b222a">Rs.<?php echo $eligibilityamtindia; ?></span></strong> Pre-Approved Loan Offer. <span class='underline-2 small text-danger'>- Valid Till 12 AM</span></p>
						</div>

						<div class="col-lg-6 col-12">
							<div class="bg-white border-radius p-3 p-lg-4 p-md-2 mb-3 mb-lg-0 hover-float position-relative subscription-plan-box">
								<?php echo form_open('digital/checkoutDigital', array('id' => 'submitForm3', 'class' => '', 'novalidate' => 'novalidate')); ?>
								<input type="hidden" name="loantype" id="loantype" value="<?php echo $userdetails['loantype']; ?>" required>
								<input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>" required>
								<input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>" required>
								<input type="hidden" name="fullname" id="fullname" value="<?php echo $userdetails['fullname']; ?>" required>
								<input type="hidden" name="mobile" id="mobile" value="<?php echo $userdetails['mobile']; ?>" required>
								<input type="hidden" name="email" id="email" value="<?php echo $userdetails['email']; ?>" required>
								<input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>" required>
								<input type="hidden" name="paymentid" id="paymentid" value="">
								<input type="hidden" name="orderAmount" id="orderAmount" value="<?php echo $amtpay; ?>" required>

								<p class="pb-2 text-dark"><strong>Subscription Plan</strong></p>
								<?php if ($productdata['inOffer'] == 1) { ?>
									<!-- <li class="pb-2 border-bottom text-success"> -->
									<span class="corner-ribbon" data-offer="50% OFF"></span>
									<!-- </li> -->
								<?php } ?>
								<?php
								if ($productdata['inOffer'] == 1) {
									echo '<h4 class="pt-3 mb-4"><span class="text-danger fw-medium"><del>&#8377; ' . formatePrice($productdata['amount']) . '</del></span> ';
									echo ' <span class="text-success fs-1">&#8377; ' . formatePrice($productdata['offeramount']) . '/-</span> <span class="fw-medium font-20">Only</span></h4>';
									$subtotal = $productdata['offeramount'];
								} else {
									echo '<h3 class="text-success">&#8377; ' . formatePrice($productdata['amount']) . '/-</h3>';
									$subtotal = $productdata['amount'];
								}
								?>
								<ul class="list-unstyled pt-2">

									<li class="pb-2 fw-bold">
										<div class="d-flex justify-content-between">Items <span class="fw-bold">Price</span></div>
									</li>
									<li class="pb-2"><a class="d-flex justify-content-between" href="#">Price <span>₹
												<?php echo formatePriceIndia($subtotal); ?></span></a></li>
									<li class="pb-2"><a class="d-flex justify-content-between" href="#">GST (18%) <span>₹
												<?php $gst = $subtotal * 0.18;
												echo formatePriceIndia($gst); ?></span></a></li>

									<li class="pb-2"><a class="d-flex justify-content-between fw-bold" href="#">Total <span>₹
												<?php $grandtotal = $subtotal + $gst;
												echo formatePriceIndia($grandtotal); ?></span></a></li>

								</ul>

								<div class="pt-3 text-center">
									<button class="button-dark button-lg button-radius button-turquiose w-100" id="form-submit3" type="submit">Subscribe Now</button>
								</div>
								<?php echo form_close(); ?>
							</div>

						</div>
						<div class="col-lg-6 col-12">
							<div class="bg-white border border-radius p-4 p-lg-4">
								<p class="pb-2 text-dark"><strong>Plan Benefits:</strong></p>
								<ol class=" style-2 pt-2 list-unstyled">
									<li class="pb-0 mb-0"><i class="bi bi-check me-2 fs-5"></i>100% Online Process</li>
									<li class="pb-0 mb-0"><i class="bi bi-check me-2 fs-5"></i>Get Personalized Tracking Portal </li>
									<li class="pb-0 mb-0"><i class="bi bi-check me-2 fs-5"></i>On-Call Expert Consultation</li>
									<li class="pb-0 mb-0"><i class="bi bi-check me-2 fs-5"></i>Dedicated Loan Expert Assigned</li>
									<li class="pb-0 mb-0"><i class="bi bi-check me-2 fs-5"></i>CIBIL Remains Unaffected</li>
									<li class="pb-0 mb-0"><i class="bi bi-check me-2 fs-5"></i>Plan Validity: 6 months</li>
									</ol>

									<div class="col-12 col-xl-12 text-center mt-4">
										<img src="<?php echo base_url('assets/images/google.webp'); ?>" alt="Special Offer Banner" class="img-fluid m-auto mb-2" style="width:140px;">
										<ul class="list-unstyled d-flex justify-content-center">
											<li class="pb-0 mb-0 me-1"><i class="bi bi-star-fill text-warning"></i></li>
											<li class="pb-0 mb-0 me-1"> <i class="bi bi-star-fill text-warning"></i></li>
											<li class="pb-0 mb-0 me-1"><i class="bi bi-star-fill text-warning"></i></li>
											<li class="pb-0 mb-0 me-1"><i class="bi bi-star-fill text-warning"></i></li>
											<li class="pb-0 mb-0 me-1"><i class="bi bi-star-fill text-warning"></i></li>
											<li class="pb-0 mb-0 ms-2"> 4.95/5</li>

										</ul>
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

<script type="text/javascript">
	$(document).ready(function() {
		var windowWidth = $(window).width();
		if (windowWidth <= 1024) { //for iPad & smaller devices
			$('#userCollapse').removeClass('show');
		}
	});

	$(function() {
		$('#submitForm3').on('submit', function(e) {
			$('#form-submit3').attr('disabled', true);
			$('#form-submit3').html('Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
		});
	});
</script>


