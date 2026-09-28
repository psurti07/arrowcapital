<?php $this->load->view('includes/header-apply.php');
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
?>

<div class="section flex-fill pt-3 pt-md-5 subscription-section bg-light-green">
    <div class="container">
        <div class="row p-2 p-lg-4">
            <div class="col-lg-4 col-md-5 col-sm-12 col-12 order-2 order-lg-1 mt-4 mt-md-0">
                <div class="bg-white border rounded-4 shadow p-4 p-lg-4 mb-2 hover-float">
                    <!-- <ul class="list-unstyled gx-4">
                        <li class="pb-2 text-dark"><strong>Applicant Details:</strong></li>
                        <li class="pt-2 pb-2"><a class="d-flex justify-content-between" href="#">Fullname
                                <strong><span><?= $userdetails['fullname'] ?></span></strong></a>
                        </li>
                        <li class="pt-2 pb-2"><a class="d-flex justify-content-between" href="#">Mobile
                                <strong><span><?= $userdetails['mobile'] ?></span></strong></a></li>
                        <li class="pt-2 pb-2"><a class="d-flex justify-content-between" href="#">Loan
                                Amount
                                <strong><span>₹<?= formatePriceIndia($userdetails['loanamount']) ?></span></strong></a>
                        </li>
                    </ul> -->
                    <div class="txt-block left-column">
                        <div class="accordion accordion-flush mb-10" id="accordionFlushExample">
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button color--grey text-uppercase px-0 py-2" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="true" aria-controls="flush-collapseOne">
                                        User Details
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body bg-gray-lightest rounded-4 p-0 mt-2 border">
                                        <div
                                            class="d-flex justify-content-between px-3 py-3 details-main border-bottom">
                                            <p class="s-12 color--grey mb-0">Fullname</p>
                                            <p class="s-14 color--white mt-0"><?= $userdetails['fullname'] ?>
                                            </p>

                                        </div>
                                        <div class="d-flex justify-content-between px-3 py-3 border-bottom">
                                            <p class="s-12 color--grey mb-0">Mobile</p>
                                            <p class="s-14 color--white mt-0 mb-0">
                                                <?= $userdetails['mobile'] ?></p>
                                        </div>
                                        <div class="d-flex justify-content-between px-3 py-3">
                                            <p class="s-12 color--grey mb-0">Loan
                                                Amount</p>
                                            <p class="s-14 color--white mt-0 mb-0">
                                                ₹<?= formatePriceIndia($userdetails['loanamount']) ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3">
                            <p class="s-12 mb-3 color--grey text-uppercase">Application Process </p>

                            <div class="cbox-12 process-step d-flex mb-2">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico text-white bg-color-very-peri rounded-pill">
                                        <span class="fbox-ico ico-9 lh-1"> <i class="fas fa-check fa-sm"></i></span>
                                    </div>
                                </div>
                                <div class="cbox-12-txt mb-0 ms-2">
                                    <p class="s-11 color--white mb-0">Loan Details</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step d-flex mb-2">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico bg-color-very-peri rounded-pill"><span
                                            class="fbox-ico ico-9 lh-1"><i class="fas fa-arrow-right fa-sm"></i></span>
                                    </div>
                                </div>
                                <div class="cbox-12-txt mb-0 ms-2">
                                    <p class="s-11 color--white mb-0">Personal Details</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step d-flex mb-2">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico bg-color-purple rounded-pill border"><span
                                            class="fbox-ico ico-9 lh-1"><i class="fas fa-arrow-right fa-sm"></i></span>
                                    </div>
                                </div>
                                <div class="cbox-12-txt mb-0 ms-2">
                                    <p class="s-11 color--grey mb-0">Unlock Offers</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step d-flex mb-2">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico bg-gray-lightest rounded-pill border"><span
                                            class="fbox-ico ico-9 lh-1"> <i class="fas fa-arrow-right fa-sm"></i></span>
                                    </div>
                                </div>
                                <div class="cbox-12-txt mb-0 ms-2">
                                    <p class="s-11 color--grey mb-0">Purchase Plan</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step d-flex mb-2">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico bg-gray-lightest rounded-pill border"><span
                                            class="fbox-ico ico-9 lh-1"> <i class="fas fa-arrow-right fa-sm"></i></span>
                                    </div>
                                </div>
                                <div class="cbox-12-txt mb-0 ms-2">
                                    <p class="s-11 color--grey mb-0">Personalized Offers</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 icon-4xl p-3 px-0 pb-0">
                    <div class="img-block mt-20">
                        <img class="img-fluid w-100" src="<?= base_url('assets/images/digital-img.png') ?>"
                            alt="testimonials">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12 col-12 order-1 order-lg-2">
                <div class="bg-white border shadow rounded-4 p-4 p-lg-4 mb-2 hover-float landing-form-right">
                    <div class="d-flex align-items-center mb-4">
                        <div>
                            <div class="icon staticts-card bg-color-very-peri mb-0">
                                <i class="fas fa-briefcase fs-4"></i>
                            </div>
                        </div>
                        <div class="ms-3">

                            <h2 class="fw-bold mb-0">EMI Options</h2>
                            <p class="font-16 text-dark"><span class="fw-bold text-gradient-6">Rs.
                                    <?php echo $eligibilityamtindia; ?></span> loan is pre-approved. Please proceed to
                                complete the process.</p>

                        </div>
                    </div>
                    <div class="row align-items-center pb-3">

                    </div>
                    <div>
                        <p class="text-start small text-dark mb-3">Select your suitable EMI option:</p>
                    </div>
                    <?php echo form_open('digital/getpreApproval', array('id' => 'submitForm2', 'novalidate' => 'novalidate')); ?>
                    <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>" required>
                    <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>" required>
                    <input type="hidden" name="mobile" value="<?php echo $userdetails['mobile']; ?>" required>
                    <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>" required>
                    <input type="hidden" name="tenure" id="tenure" value="36" required>
                    <input type="hidden" name="eligibilityamt" value="<?php echo $eligibilityamt; ?>" required>


                    <div class="row gx-2">
                        <div class="col-md-6 col-lg-4 col-sm-6 col-6 mb-3">
                            <fieldset class="picker1">
                                <label for="plan-1">
                                    <input type="radio" name="tenure" id="plan-1" value="12" class="d-none" checked>
                                    <span class="p-3">
                                        <div class="subscription-price pb-2 pt-0">
                                            <span
                                                class="sub-offer-value text-gradient-6 text-uppercase fw-bold lh-normal">12
                                                months</span>
                                        </div>
                                        <h3 class="mb-2 text-blue font-weight-bold">
                                            ₹<?php echo calPMT($userdetails['apr'], 1, $eligibilityamt); ?></h3>
                                        <p class="mb-0 fw-light"><small>per month</small></p>
                                        <div class="round-radiobox"></div>
                                        <div class="calender-image">
                                            <i class="fa fa-calendar-alt"></i>

                                        </div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-6 col-6 mb-3">
                            <fieldset class="picker1">
                                <label for="plan-2">
                                    <input type="radio" name="tenure" id="plan-2" value="24" class="d-none">
                                    <span class="p-3">
                                        <div class="subscription-price pb-2 pt-0">
                                            <span
                                                class="sub-offer-value text-gradient-6 text-uppercase fw-bold lh-normal">24
                                                months</span>
                                        </div>

                                        <h3 class="mb-2 text-blue">₹
                                            <?php echo calPMT($userdetails['apr'], 2, $eligibilityamt); ?></h3>
                                        <p class="mb-0 fw-light"><small>per month</small></p>
                                        <div class="round-radiobox"></div>
                                        <div class="calender-image">
                                            <i class="fa fa-calendar-alt"></i>
                                        </div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-6 col-6 mb-3">
                            <fieldset class="picker1">
                                <label for="plan-3">
                                    <input type="radio" name="tenure" id="plan-3" value="36" class="d-none">
                                    <span class="p-3">
                                        <div class="subscription-price pb-2 pt-0">
                                            <span
                                                class="sub-offer-value text-gradient-6 text-uppercase fw-bold lh-normal">36
                                                months</span>
                                        </div>
                                        <h3 class="mb-2 text-blue">₹
                                            <?php echo calPMT($userdetails['apr'], 3, $eligibilityamt); ?></h3>
                                        <p class="mb-0 fw-light"><small>per month</small><br />
                                        </p>

                                        <div class="round-radiobox"></div>
                                        <div class="calender-image">
                                            <i class="fa fa-calendar-alt"></i>
                                        </div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-6 col-6 mb-3">
                            <fieldset class="picker1">
                                <label for="plan-4">
                                    <input type="radio" name="tenure" id="plan-4" value="48" class="d-none">
                                    <span class="p-3">
                                        <div class="subscription-price pb-2 pt-0">
                                            <span
                                                class="sub-offer-value text-gradient-6 text-uppercase fw-bold lh-normal">48
                                                months</span>
                                        </div>
                                        <h3 class="mb-2 text-blue">₹
                                            <?php echo calPMT($userdetails['apr'], 4, $eligibilityamt); ?></h3>
                                        <p class="mb-0 fw-light"><small>per month</small></p>

                                        <div class="round-radiobox"></div>
                                        <div class="calender-image">
                                            <i class="fa fa-calendar-alt"></i>
                                        </div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-6 col-6 mb-3">
                            <fieldset class="picker1">
                                <label for="plan-5">
                                    <input type="radio" name="tenure" id="plan-5" value="60" class="d-none">
                                    <span class="p-3">
                                        <div class="subscription-price pb-2 pt-0">
                                            <span
                                                class="sub-offer-value text-gradient-6 text-uppercase fw-bold lh-normal">60
                                                months</span>
                                        </div>
                                        <h3 class="mb-2 text-blue">₹
                                            <?php echo calPMT($userdetails['apr'], 5, $eligibilityamt); ?></h3>
                                        <p class="mb-0 fw-light"><small>per month</small></p>

                                        <div class="round-radiobox"></div>
                                        <div class="calender-image">
                                            <i class="fa fa-calendar-alt"></i>
                                        </div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-6 col-6 mb-3">
                            <fieldset class="picker1">
                                <label for="plan-6">
                                    <input type="radio" name="tenure" id="plan-6" value="72" class="d-none">
                                    <span class="p-3">
                                        <div class="subscription-price pb-2 pt-0">
                                            <span
                                                class="sub-offer-value text-gradient-6 text-uppercase fw-bold lh-normal">72
                                                months</span>
                                        </div>

                                        <h3 class="mb-2 text-blue">₹
                                            <?php echo calPMT($userdetails['apr'], 6, $eligibilityamt); ?></h3>
                                        <p class="mb-0 fw-light"><small>per month</small></p>
                                        <div class="round-radiobox"></div>
                                        <div class="calender-image">
                                            <i class="fa fa-calendar-alt"></i>
                                        </div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="card otp-velidation-text rounded-4 bg-gray-lightest mb-0">
                            <div class="card-body p-3">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-12 col-sm-12 col-12  mb-lg-0 mb-3">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-bullseye text-gradient-6 mt-2"></i>

                                            <div class="ms-3">
                                                <p class="mb-0 font-small">How is pre-approved loan offer
                                                    calculated? <a href="#"
                                                        class="text-decoration-underline text-orange">Know Here
                                                    </a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12 col-12 text-end">
                                        <button class="button-dark button-lg button-radius button-turquiose w-100 text-uppercase"
                                            id="form-submit2" type="submit">Choose offer <i
                                                class="fas fa-arrow-right ms-2"></i></button>
                                    </div>
                                </div>
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
            <div class="col-md-3 p-3">
                <div class="row box-backdrop p-3">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <img class="img-fluid" src="<?php echo base_url('assets/images/banks/' . $row->bank_image); ?>"
                            style="width:200px" alt="" />
                    </div>
                    <div class="col-md-12 text-md-start mb-3 mb-md-0">
                        <h5 class="fw-medium mt-2"><?php echo $row->bank_name; ?></h5>
                        <p class="text-dark"><strong>Loan Amt : </strong>Rs.
                            <?php echo formatePriceIndia($eligibilityamt); ?> </br> <strong>EMI
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
<script src="<?php echo base_url('assets/plugins/celebration/confetti.browser.min.js'); ?>" type="text/javascript">
</script>

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

$(function() {
    $('#submitForm2').on('submit', function(e) {
        $('#form-submit2').attr('disabled', true);
        $('#form-submit2').html(
            'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
            );
    });
});
</script>