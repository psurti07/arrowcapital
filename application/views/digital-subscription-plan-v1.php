<?php
$this->load->view('includes/header-apply.php');
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
$amtpay = $productdata['payamount'];
?>

<div class="pt-3 pb-5 bg-lend-blue">
	<div class="container">
		<div class="row align-items-center g-4 g-lg-5">
			<div class="col-12 col-xl-10">
				<h2 class="fw-normal text-light"><?= $userdetails['loanname']; ?></h2>
				<p class="text-light">Purchase Plan To Process Your <strong><span class="underline-2 success text-warning">Rs.<?php echo $eligibilityamtindia; ?></span></strong> Pre-Approved Loan Offer. <span class='underline-2 success text-warning'><strong>Offer Valid Till 12 am Only.</strong></span></p>
			</div>

		</div><!-- end row -->
	</div><!-- end container -->
</div>

<div class="section-sm ">
	<div class="container">
		<div class="box-backdrop p-2 p-lg-4 ">
			<div class="row">
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
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-12 order-1 order-lg-2">
					<div class="bg-white border border-radius p-4 p-lg-4">
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

							<h5 class="fw-normal">Subscription Plan</h5>
							<?php
							if ($productdata['inOffer'] == 1) {
								echo '<h4 class="text-danger weight-400"><del>&#8377; ' . formatePrice($productdata['amount']) . '</del></h4>';
								echo '<h3 class="text-success">&#8377; ' . formatePrice($productdata['offeramount']) . '/- <span class="font-24">Only</span></h3>';
								$subtotal = $productdata['offeramount'];
							} else {
								echo '<h3 class="text-success">&#8377; ' . formatePrice($productdata['amount']) . '/-</h3>';
								$subtotal = $productdata['amount'];
							}
							?>
							<ul class="list-unstyled pt-2">
								<?php if ($productdata['inOffer'] == 1) { ?>
									<li class="pb-2 border-bottom text-success">
										<?php echo calPercentage($productdata['amount'], $productdata['offeramount']); ?>OFF</li>
								<?php } ?>
							
								<li class="pb-2 border-bottom"><a class="d-flex justify-content-between" href="#">Subtotal : <span>₹
											<?php echo formatePriceIndia($subtotal); ?></span></a></li>
								<li class="pb-2 border-bottom"><a class="d-flex justify-content-between" href="#">GST (18%) : <span>₹
											<?php $gst = $subtotal * 0.18;
											echo formatePriceIndia($gst); ?></span></a></li>
							
								<li class="pb-2 border-bottom"><a class="d-flex justify-content-between" href="#">Grand Total : <span>₹
											<?php $grandtotal = $subtotal + $gst;
											echo formatePriceIndia($grandtotal); ?></span></a></li>
									
							</ul>
							
							<div class="pt-3 text-center">
								<button class="button-dark button-lg button-radius button-turquiose " id="form-submit3" type="submit">Subscribe Now</button>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-12 col-12 order-3 order-lg-3">
					<div class="bg-white border border-radius p-4 p-lg-4">
						<p class="pb-2 border-bottom text-dark"><strong>Plan Benefits:</strong></p>
						<ol class="list-ordered style-2 pt-2">
							<li class="pb-2 border-bottom"><a class="d-flex justify-content-between" href="#">100% Online Process </a></li>
							<li class="pb-2 border-bottom"><a class="d-flex justify-content-between" href="#">Get Personalized Tracking Portal </a></li>
							<li class="pb-2 border-bottom"><a class="d-flex justify-content-between" href="#">On-Call Expert Consultation </a></li>
							<li class="pb-2 border-bottom"><a class="d-flex justify-content-between" href="#">Dedicated Loan Expert Assigned </a></li>
							<li class="pb-2 border-bottom"><a class="d-flex justify-content-between" href="#">CIBIL Remains Unaffected </a></li>
							<li class="pb-2 border-bottom"><a class="d-flex justify-content-between" href="#">Plan Validity: 6 months </a></li>
						</ul>
					</div>
				</div>
			</div>

		</div><!-- end container -->
	</div>
</div>

<?php $this->load->view('includes/footer-apply.php'); ?>

<script type="text/javascript">
	$(document).ready(function () {
		var windowWidth = $(window).width();
		if (windowWidth <= 1024) { //for iPad & smaller devices
			$('#userCollapse').removeClass('show');
		}
	});

	$(function () {
		$('#submitForm3').on('submit', function (e) {
			$('#form-submit3').html('Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
		});
	});

</script>
