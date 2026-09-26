<?php
$this->load->view('includes/header-apply.php');
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
$amtpay = $productdata['payamount'];
?>

<div class="section pt-3 pt-md-5">
	<div class="container">
		<div class="row align-items-center pb-3">
			<div class="col-12 col-xl-10">
				<h2 class="fw-normal text-dark"><?= $userdetails['loanname']; ?></h2>
				<p class="text-dark">Purchase Plan To Process Your <strong><span class="underline-2 success text-blue">Rs.<?php echo $eligibilityamtindia; ?></span></strong> Pre-Approved Loan Offer. <span class='underline-2 success text-blue'><strong>Offer Valid Till 12 am Only.</strong></span></p>
			</div>
		</div>

			<div class="row box-backdrop p-2 p-lg-4">
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

							<p class="pb-2 border-bottom text-dark"><strong>Subscription Plan</strong></p>
							<?php
							if ($productdata['inOffer'] == 1) {
								echo '<h4 class="pt-3"><span class="text-danger fw-medium"><del>&#8377; ' . formatePrice($productdata['amount']) . '</del></span> ';
								echo ' <span class="text-success">&#8377; ' . formatePrice($productdata['offeramount']) . '/-</span> <span class="fw-medium font-20">Only</span></h4>';
								$subtotal = $productdata['offeramount'];
							} else {
								echo '<h3 class="text-success">&#8377; ' . formatePrice($productdata['amount']) . '/-</h3>';
								$subtotal = $productdata['amount'];
							}
							?>
							<ul class="list-unstyled pt-2">
								<?php if ($productdata['inOffer'] == 1) { ?>
									<li class="pb-2 border-bottom text-success">
										<strong><?php echo calPercentage($productdata['amount'], $productdata['offeramount']); ?> OFF</strong>
									</li>
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
	</div>
</div>

<?php
	$banks = [
		[
			'img' => '039.png',
			'alt' => 'IIFL Logo',
			'loan' => 'Up to 5 lakh',
			'roi' => '12.75% to 44%',
			'tenure' => 'Up to 42 Months'
		],
		[
			'img' => '027.jpeg',
			'alt' => 'L&T Logo',
			'loan' => 'Up to 30 Lakh',
			'roi' => '11%',
			'tenure' => 'Up to 72 months'
		],
		[
			'img' => '040.png',
			'alt' => 'Piramal Logo',
			'loan' => '50,000 to 25 Lakh',
			'roi' => '12.9%',
			'tenure' => '9 to 60 months'
		],
        [
			'img' => '015.png',
			'alt' => 'Faircent Logo',
			'loan' => 'Rs. 20L',
			'roi' => '12% to 28%',
			'tenure' => '6 to 36 Months'
		],
		[
			'img' => '038.png',
			'alt' => 'Finnable Logo',
			'loan' => '10 lakh',
			'roi' => '16% to 35.99%',
			'tenure' => '6 to 60 Months'
		],
		[
			'img' => '034.png',
			'alt' => 'Werize Logo',
			'loan' => 'Upto ₹5L',
			'roi' => '15% - 22%',
			'tenure' => 'Upto 3 Years'
		]
	];
?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <h3 class="fw-medium line-height-160 m-0 pb-2">Best Personal Loan Offers from Top Banks</h3>
            </div>
        </div>
        <div class="row icon-4xl mb-3">
            <div class="owl-carousel brands-carousel-5 mt-3" data-owl-dots="false" data-owl-nav="false" data-owl-autoplay="true" data-owl-margin="20" data-owl-items="2" data-owl-xs="1" data-owl-sm="1" data-owl-md="2" data-owl-lg="2">
                <?php foreach ($banks as $bank): ?>
                <div class="items p-3">
                    <div class="row align-items-center box-backdrop p-3 h-100">
                        <div class="col-6 col-sm-6 col-md-3 text-start mb-3 mb-md-0">
                            <img src="<?php echo base_url('assets/images/banks/'.$bank['img']); ?>"
                                alt="<?php echo $bank['alt']; ?>" class="img-fluid" style="max-height: 60px;">
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 text-start mb-3 mb-md-0">
                            <h6 class="font-small fw-medium mb-1">Loan Amount</h6>
                            <p class="mb-0"><?php echo $bank['loan']; ?></p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 text-start mb-3 mb-md-0">
                            <h6 class="font-small fw-medium mb-1">ROI</h6>
                            <p class="mb-0"><?php echo $bank['roi']; ?></p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3 text-start mb-3 mb-md-0">
                            <h6 class="font-small fw-medium mb-1">Loan Tenure</h6>
                            <p class="mb-0"><?php echo $bank['tenure']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="col-12 pt-4">
                <p class="text-center font-small">
                    Disclaimer: The interest rate charges are subject to constant change as they
                    are affected by several factors. Please check the prevailing interest rate with your lender before
                    applying.
                </p>
            </div>
        </div>
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
			$('#form-submit3').attr('disabled', true);
			$('#form-submit3').html('Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
		});
	});

</script>
