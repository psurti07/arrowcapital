<?php $this->load->view('includes/header-apply.php');
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
?>

<div class="pt-3 pb-5 bg-lend-blue">
	<div class="container">
		<div class="row align-items-center g-4 g-lg-5">
			<div class="col-12 col-xl-10">
				<h2 class="fw-normal text-light"><?= $userdetails['loanname']; ?></h2>
				<p class="font-16 text-light">Pre-Approved Offer :</span> Congratulations! You’re Eligible For <span
						class="fw-bold text-warning">Rs. <?php echo $eligibilityamtindia; ?></span> Pre-Approval Offered
					By Our Partnered NBFCs.</p>
			</div>
		</div><!-- end row -->
	</div><!-- end container -->
</div>

<div class="section-sm">
	<div class="container">
		<div class="box-backdrop p-2 p-lg-4 ">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-12 order-2 order-lg-1  mt-2 mt-md-0">
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
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 p-2 col-12 order-1 order-lg-2">
					<div class="bg-white border-radius">
						<div>
							<h5 class="text-center fw-light line-height-150 ">Choose Your Suitable EMI Option</p>
						</div>
						<?php echo form_open('digital/getpreApproval', array('id' => 'submitForm2', 'novalidate' => 'novalidate')); ?>
						<input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>" required>
						<input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>" required>
						<input type="hidden" name="mobile" value="<?php echo $userdetails['mobile']; ?>" required>
						<input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>" required>
						<input type="hidden" name="tenure" id="tenure" value="36" required>
						<input type="hidden" name="eligibilityamt" value="<?php echo $eligibilityamt; ?>" required>

						<div class="bg-white radio-input-pre">
							<div class="row">
								<div class="col-lg-4 col-md-6 col-6 d-flex flex-row align-items-center justify-content-center">
									<input type="radio" id="12" name="tenure" value="12" checked="">
									<label for="12">
										12 Months </br>EMI&nbsp;&nbsp;₹.
										<?php echo calPMT($userdetails['apr'], 1, $eligibilityamt); ?>
									</label>
								</div>
								<div class="col-lg-4 col-md-6 col-6 d-flex flex-row align-items-center justify-content-center">
									<input type="radio" id="24" name="tenure" value="24">
									<label for="24">
										24 Months </br>EMI&nbsp;₹.
										<?php echo calPMT($userdetails['apr'], 2, $eligibilityamt); ?>
									</label>
								</div>
								<div class="col-lg-4 col-md-6 col-6 d-flex flex-row align-items-center justify-content-center">
									<input type="radio" id="36" name="tenure" value="36">
									<label for="36">
										36 Months </br>EMI&nbsp;₹.
										<?php echo calPMT($userdetails['apr'], 3, $eligibilityamt); ?>
									</label>
								</div>

								<div class="col-lg-4 col-md-6 col-6 d-flex flex-row align-items-center justify-content-center">
									<input type="radio" id="48" name="tenure" value="48">
									<label for="48">
										48 Months </br>EMI&nbsp;₹.
										<?php echo calPMT($userdetails['apr'], 4, $eligibilityamt); ?>
									</label>
								</div>
								<div class="col-lg-4 col-md-6 col-6 d-flex flex-row align-items-center justify-content-center">
									<input type="radio" id="60" name="tenure" value="60">
									<label for="60">
										60 Months </br>EMI&nbsp;₹.
										<?php echo calPMT($userdetails['apr'], 5, $eligibilityamt); ?>
									</label>
								</div>
								<div class="col-lg-4 col-md-6 col-6 d-flex flex-row align-items-center justify-content-center">
									<input type="radio" id="72" name="tenure" value="72">
									<label for="72">
										72 Months </br>EMI&nbsp;₹.
										<?php echo calPMT($userdetails['apr'], 6, $eligibilityamt); ?>
									</label>
								</div>
								<div class="col-md-12 col-lg-12 col-sm-12 pt-4 text-center js-confetti">
									<button class="button-dark button-lg button-radius button-turquiose "
										id="form-submit2" type="submit">Get Offer</button>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if (count($roipackages)) { ?>


<div class="section-sm bg-whte">
	<div class="container">
		<div class="row ">
			<div class="col-12 ">
				<div class="text-center pb-2">
					<h2 class="fw-light line-height-160 m-0 pb-2"> Your Pre-Approved Loan Offers From Partnered NBFCs
					</h2>

				</div>
				<?php
					$cnt = 1;
					foreach ($roipackages as $row) {
					?>
				<div class="blog-card-wrapper">
					<div class="blog-card">
						<div class="row">
							<div class="col-md-2">
								<div class="blog-card-date">
									<img src="<?php echo base_url('assets/images/banks/' . $row->bank_image); ?>"
										style="width:200px" alt="" />
								</div>
							</div>
							<div class="col-md-10">
								<h4 class="fw-medium mt-2"><?php echo $row->bank_name; ?></h4>
								<p class="text-dark">Rs. <?php echo formatePriceIndia($eligibilityamt); ?> | <strong>EMI
										:
										Rs.</strong><?php echo calPMT($row->roi, $row->termsyears, $eligibilityamt); ?>
									| <strong>ROI : </strong> <?php echo $row->roi . "%"; ?> | <strong>Terms :
									</strong><?php echo $row->termsmonths . " months"; ?></p>
							</div>
						</div>


					</div>
				</div>
				<?php $cnt++; } ?>
			</div>

		</div><!-- end row -->
	</div><!-- end container -->
</div>

<!--=====Service Start=======-->
<!--
<div class="section-padding2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 m-auto text-center">
				<div class="heading2">
					<h2>Your Pre-Approved Loan Offers From Partnered NBFCs</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			$cnt = 1;
			foreach ($roipackages as $row) {
			?>
				<div class="col-lg-3 col-md-6">
					<div class="single-inner-service trans-1">
						<div class="service-img">
							<img src="<?php echo base_url('assets/img/banks/' . $row->bank_image); ?>" alt="" />
						</div>
						<div class="service-content">
							<h5 class="font-f-3 mb-3"><?php echo $row->bank_name; ?></h5>
							<p class="mb-2">Rs. <?php echo formatePriceIndia($eligibilityamt); ?></p>
							<p class="mb-2">EMI : Rs. <?php echo calPMT($row->roi, $row->termsyears, $eligibilityamt); ?></p>
							<p class="mb-2">ROI : <?php echo $row->roi . "%"; ?></p>
							<p class="mb-0">Terms : <?php echo $row->termsmonths . " months"; ?></p>
						</div>
					</div>
				</div>
			<?php
				$cnt++;
			} ?>
		</div>
	</div>
</div>-->
<!--=====Service end=======-->
<?php } ?>

<?php $this->load->view('includes/footer-apply.php'); ?>
<script src="<?php echo base_url('assets/plugins/celebration/confetti-script.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/celebration/confetti.browser.min.js'); ?>" type="text/javascript">
</script>
