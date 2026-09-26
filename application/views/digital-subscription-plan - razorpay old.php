<?php
	$this->load->view('includes/header-apply.php');
	$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
	$eligibilityamtindia = formatePriceIndia($eligibilityamt);
	$amtpay = $productdata['payamount'];
?>
<div class="welcome-3 bg8 py-100 res-step" id="home">
	<div class="container">
		<div class="row">
			<h4 class="text-dark font-24"><?=$userdetails['loanname']; ?></h4>
			<p class="font-16">Purchase Plan To Process Your <strong><span class="underline-2 success text-success">Rs. <?php echo $eligibilityamtindia; ?></span></strong> Pre-Approved Loan Offer.</p>
			<!-- Process Step start -->
			<div class="col-lg-12 process-steps p-0">
				<ul class="sbs sbs--border-alt bck-white">
					<li class="finished">
						<div class="step">
							<span class="indicator" data-default="01"><i class="fa fa-check"></i></span>
							<span class="description">
									<span>Registration Process</span>
								</span>
							<span class="line"></span>
						</div>
					</li>
					<li class="finished">
						<div class="step">
							<span class="indicator" data-default="02"><i class="fa fa-check"></i></span>
							<span class="description">
									<span>Check Eligibility</span>
								</span>
							<span class="line"></span>
						</div>
					</li>
					<li class="finished">
						<div class="step">
							<span class="indicator" data-default="03"><i class="fa fa-check"></i></span>
							<span class="description">
									<span>Pre-Approval Offer</span>
								</span>
							<span class="line"></span>
						</div>
					</li>
					<li class="active">
						<div class="step">
							<span class="indicator" data-default="04">04</span>
							<span class="description">
									<span>Buy Subscription</span>
								</span>
							<span class="line"></span>
						</div>
					</li>
				</ul>
			</div>
			<!-- Process Step end -->
			<div class="col-lg-8 form-section mt-5 p-step">
				<?php echo form_open('digital/checkoutDigital', array('id'=>'submitForm3', 'class'=>'', 'novalidate'=>'novalidate')); ?>
					<input type="hidden" name="loantype" id="loantype" value="<?php echo $userdetails['loantype']; ?>" class="form-control" required>
					<input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>" class="form-control" required>
					<input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>" class="form-control" required>
					<input type="hidden" name="fullname" id="fullname" value="<?php echo $userdetails['fullname']; ?>" class="form-control" required>
					<input type="hidden" name="mobile" id="mobile" value="<?php echo $userdetails['mobile']; ?>" class="form-control" required>
					<input type="hidden" name="email" id="email" value="<?php echo $userdetails['email']; ?>" class="form-control" required>
					<input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>" class="form-control" required>
					<input type="hidden" name="paymentid" id="paymentid" value="" class="form-control">
					<input type="hidden" name="orderAmount" id="orderAmount" value="<?php echo $amtpay; ?>"
					class="form-control" required>
					<div class="row">
						<div class="col-lg-6">
							<div class="single-price">
								<div class="price-heading ">
									<p>Subscription Plan</p>
									<?php
									if ($productdata['inOffer'] == 1) {
										echo '<h4 class="text-danger weight-400"><del>&#8377; ' . formatePrice($productdata['amount']) . '</del></h4>';
										echo '<h3 class="text-success">&#8377; ' . formatePrice($productdata['offeramount']) . '/-</h3>';
										$subtotal = $productdata['offeramount'];
									} else {
										echo '<h3 class="text-success">&#8377; ' . formatePrice($productdata['amount']) . '/-</h3>';
										$subtotal = $productdata['amount'];
									}
									?>
								</div>
								<div class="price-body">
									<ul>
										<?php if ($productdata['inOffer'] == 1) { ?>
										<li>
											<span class="pricing-icon">
												<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
											</span>
											<span class="weight-700 text-dark"><?php echo calPercentage($productdata['amount'], $productdata['offeramount']); ?> OFF</span>
										</li>
										<?php } ?>
										<li>
											<span class="pricing-icon">
												<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
											</span>
											<strong>Subtotal: </strong>&nbsp;&nbsp;<?php echo formatePriceIndia($subtotal); ?>
										</li>
										<li>
											<span class="pricing-icon">
												<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
											</span>
											<strong>GST (18%): </strong>&nbsp;&nbsp;<?php $gst = $subtotal * 0.18; echo formatePriceIndia($gst); ?>
										</li>
										<li>
											<span class="pricing-icon">
												<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
											</span>
											<strong>Grand Total: </strong>&nbsp;&nbsp;<?php $grandtotal = $subtotal + $gst; echo formatePriceIndia($grandtotal); ?>
										</li>
									</ul>
									<button type="submit" class="mt-5 theme-btn-11 full-btn" id="form-submit3">Subscribe Now</button>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-price">
								<div class="price-heading">
									<p>Plan Benefits :</p>
								</div>
								<div class="price-body">
									<ul>
										<li>
											<span class="pricing-icon"><img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
											</span>
											100% Online Process
										</li>
										<li>
											<span class="pricing-icon">
												<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
											</span>
											Get Personalized Tracking Portal
										</li>
										<li>
											<span class="pricing-icon">
												<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
											</span>
											On-Call Expert Consultation
										</li>
										<li>
											<span class="pricing-icon">
												<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
											</span>
											Dedicated Loan Expert Assigned
										</li>
										<li>
											<span class="pricing-icon">
												<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
											</span>
											CIBIL Remains Unaffected
										</li>
										<li>
											<span class="pricing-icon">
												<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
											</span>
											Plan Validity: 6 months
										</li>
									</ul>
									<!-- <hr/>
									<div class="row mt-4">
										<div class="col-md-6 text-center">
											<h5 class="font-22">11.5%</h5>
											<p class="font-14">Lowest Int. Rate</p>
										</div>
										<div class="col-md-6 text-center">
											<h5 class="font-22">&#8377; 64/-</h5>
											<p class="font-14">EMI/Day per Lakh</p>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				<?=form_close();?>
			</div>
			<div class="col-lg-4 mt-5 subtotal-res">
				<div class="subtotal-price" style="padding: 30px;border: 1px solid #257f3e;border-radius: 0.5rem;">
					<ul class="subtotal-price-list">
						<li>Fullname <span><?= $userdetails['fullname'] ?></span></li>
						<li>Mobile <span><?= $userdetails['mobile'] ?></span></li>
						<li>Loan Amount <span>&#8377;<?= formatePriceIndia($userdetails['loanamount']) ?></span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('includes/footer-apply.php'); ?>

<script type="text/javascript">
	$(document).ready(function(){
		var windowWidth = $(window).width();
		if(windowWidth <= 1024) { //for iPad & smaller devices
			$('#userCollapse').removeClass('show');
		}
	});

	$(function () {
		$('#submitForm3').on('submit', function (e) {
			$('#form-submit3').html('Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
		});
	});
	
</script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script type="text/javascript">
	$(function () {
		$('#submitForm3').on('submit', function (e) {
			e.preventDefault();

			$('#form-submit3').attr('disabled', true);
			$('#form-submit3').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> PROCESSING...');

			var fullname = document.getElementById('fullname').value;
			var mobile = document.getElementById('mobile').value;
			var email = document.getElementById('email').value;
			var amount = document.getElementById('orderAmount').value;

			if (amount != <?php echo $amtpay; ?>) {
				amount = <?php echo $amtpay; ?>
			}

			var options = {
				"key": "<?php echo RAZOR_KEY_ID; ?>",
				"amount": (amount * 100).toFixed(),
				"currency": "INR",
				"name": "<?php echo PROJECT_NAME; ?>",
				"description": "Subscription Plan Purchase",
				"prefill": {
					"name": fullname,
					"email": email,
					"contact": mobile
				},
				"notify": {
					"sms": true,
					"email": true
				},
				"modal": {
					"ondismiss": function () {
						location.reload();
					}
				},
				"handler": function (response) {
					if (response.razorpay_payment_id != "") {
						document.getElementById('paymentid').value = response.razorpay_payment_id;
						document.getElementById('submitForm3').submit();
					} else {
						setTimeout(function () {
							location.reload();
						}, 1500);
					}
				}
			};

			var rzp1 = new Razorpay(options);
			rzp1.open();
		});
	});

	$(".animated-progress span").each(function () {
		$(this).animate({
			width: $(this).attr("data-progress") + "%",
		},
			1000
		);
		$(this).text($(this).attr("data-progress") + "%");
	});
</script>
