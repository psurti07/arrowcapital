<?php $this->load->view('includes/header-apply.php');
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
?>

<div class="section pt-3 pt-md-5">
    <div class="container">
        <div class="row align-items-center pb-3">
            <div class="col-12 col-xl-10">
                <h2 class="fw-normal text-dark"><?= $userdetails['loanname']; ?></h2>
                <p class="font-16 text-dark">Pre-Approved Offer :</span> Congratulations! You’re Eligible For <span class="fw-bold text-blue">Rs. <?php echo $eligibilityamtindia; ?></span> Pre-Approval Offered By Our Partnered NBFCs.</p>
            </div>
        </div>

            <div class="row box-backdrop p-2 p-lg-4">
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
                            <div class="row gx-2">
                                <div
                                    class="col-lg-4 col-md-6 col-6 d-flex flex-row align-items-center justify-content-center">
                                    <input type="radio" id="12" name="tenure" value="12" checked="">
                                    <label for="12">
                                        12 Months </br>EMI&nbsp;&nbsp;₹.
                                        <?php echo calPMT($userdetails['apr'], 1, $eligibilityamt); ?>
                                    </label>
                                </div>
                                <div
                                    class="col-lg-4 col-md-6 col-6 d-flex flex-row align-items-center justify-content-center">
                                    <input type="radio" id="24" name="tenure" value="24">
                                    <label for="24">
                                        24 Months </br>EMI&nbsp;₹.
                                        <?php echo calPMT($userdetails['apr'], 2, $eligibilityamt); ?>
                                    </label>
                                </div>
                                <div
                                    class="col-lg-4 col-md-6 col-6 d-flex flex-row align-items-center justify-content-center">
                                    <input type="radio" id="36" name="tenure" value="36">
                                    <label for="36">
                                        36 Months </br>EMI&nbsp;₹.
                                        <?php echo calPMT($userdetails['apr'], 3, $eligibilityamt); ?>
                                    </label>
                                </div>

                                <div
                                    class="col-lg-4 col-md-6 col-6 d-flex flex-row align-items-center justify-content-center">
                                    <input type="radio" id="48" name="tenure" value="48">
                                    <label for="48">
                                        48 Months </br>EMI&nbsp;₹.
                                        <?php echo calPMT($userdetails['apr'], 4, $eligibilityamt); ?>
                                    </label>
                                </div>
                                <div
                                    class="col-lg-4 col-md-6 col-6 d-flex flex-row align-items-center justify-content-center">
                                    <input type="radio" id="60" name="tenure" value="60">
                                    <label for="60">
                                        60 Months </br>EMI&nbsp;₹.
                                        <?php echo calPMT($userdetails['apr'], 5, $eligibilityamt); ?>
                                    </label>
                                </div>
                                <div
                                    class="col-lg-4 col-md-6 col-6 d-flex flex-row align-items-center justify-content-center">
                                    <input type="radio" id="72" name="tenure" value="72">
                                    <label for="72">
                                        72 Months </br>EMI&nbsp;₹.
                                        <?php echo calPMT($userdetails['apr'], 6, $eligibilityamt); ?>
                                    </label>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 pt-4 text-center">
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

<?php if (count($roipackages)) { ?>
<div class="section-lg pt-0 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <h2 class="fw-light line-height-160 m-0 pb-2">Your Pre-Approved Loan Offers From Partnered NBFCs</h2>
            </div>
        </div>
        <div class="row icon-4xl mb-3">
            <?php
				$cnt = 1;
				foreach ($roipackages as $row) {
			?>
            <div class="col-md-6 p-3">
                <div class="row align-items-center box-backdrop p-3 h-100">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <img class="img-fluid" src="<?php echo base_url('assets/images/banks/' . $row->bank_image); ?>"
                            style="width:200px" alt="" />
                    </div>
                    <div class="col-md-8 text-md-start mb-3 mb-md-0">
                        <h5 class="fw-medium mt-2"><?php echo $row->bank_name; ?></h5>
                        <p class="text-dark"><strong>Loan Amt : </strong>Rs. <?php echo formatePriceIndia($eligibilityamt); ?> </br> <strong>EMI
                                :
                                Rs.</strong><?php echo calPMT($row->roi, $row->termsyears, $eligibilityamt); ?>
                            </br> <strong>ROI : </strong> <?php echo $row->roi . "%"; ?> </br> <strong>Terms :
                            </strong><?php echo $row->termsmonths . " months"; ?></p>
                    </div>
                </div>
            </div>
            <?php $cnt++; } ?>
        </div>

    </div>
</div>
<?php } ?>

<?php $this->load->view('includes/footer-apply.php'); ?>
<script src="<?php echo base_url('assets/plugins/celebration/confetti-script.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/celebration/confetti.browser.min.js'); ?>" type="text/javascript"></script>

<script type="text/javascript">
    const end = Date.now() + 2 * 1000;

	// go Buckeyes!
	const colors = ["#2279be", "#fbe445", "#C70039", "#EE9322"];

	(function frame() {
		confetti({
			particleCount: 3,
			angle: 50,
			spread: 80,
			origin: {
				x: 0
			},
			colors: colors,
		});

		confetti({
			particleCount: 3,
			angle: 120,
			spread: 80,
			origin: {
				x: 1
			},
			colors: colors,
		});

		if (Date.now() < end) {
			requestAnimationFrame(frame);
		}
	})();

	$(function () {
		$('#submitForm2').on('submit', function (e) {
			$('#form-submit2').attr('disabled', true);
			$('#form-submit2').html('Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
		});
	});

</script>