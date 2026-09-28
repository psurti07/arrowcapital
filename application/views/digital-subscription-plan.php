<?php
$this->load->view('includes/header-apply.php');
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
$amtpay = $productdata['payamount'];
?>

<div class="section pt-3 pt-md-5 bg-light-green">
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
                <div class="bg-white border shadow rounded-4 p-4 p-lg-4 mb-2 hover-floatg">
                    <div class="row">
                        <div class="col-12 col-xl-12 pb-4">
                            <h2 class="fw-bold mb-0">Premium Subscription Offer</h2>
                            <p class="text-dark">Your pre-approved loan is waiting. Purchase a subscription to proceed
                                <span class='underline-2 small text-danger fw-bold'>- Offer Valid till 12 am
                                    only!</span>
                            </p>
                        </div>
  </div>
                        <div class="border rounded-4 overflow-hidden">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div
                                        class="bg-white  p-3 p-lg-4 p-md-2 mb-3 mb-lg-0 position-relative subscription-plan-box border-end h-100">
                                        <?php echo form_open('digital/checkoutDigital', array('id' => 'submitForm3', 'class' => '', 'novalidate' => 'novalidate')); ?>
                                        <input type="hidden" name="loantype" id="loantype"
                                            value="<?php echo $userdetails['loantype']; ?>" required>
                                        <input type="hidden" name="applyid"
                                            value="<?php echo $userdetails['applyid']; ?>" required>
                                        <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                            required>
                                        <input type="hidden" name="fullname" id="fullname"
                                            value="<?php echo $userdetails['fullname']; ?>" required>
                                        <input type="hidden" name="mobile" id="mobile"
                                            value="<?php echo $userdetails['mobile']; ?>" required>
                                        <input type="hidden" name="email" id="email"
                                            value="<?php echo $userdetails['email']; ?>" required>
                                        <input type="hidden" name="cardtype"
                                            value="<?php echo $userdetails['cardtype']; ?>" required>
                                        <input type="hidden" name="paymentid" id="paymentid" value="">
                                        <input type="hidden" name="orderAmount" id="orderAmount"
                                            value="<?php echo $amtpay; ?>" required>
                                        <div class="d-flex align-items-center justify-content-between">

                                            <p class="pb-2 text-dark"><strong>Subscription Plan</strong></p>
                                            <?php if ($productdata['inOffer'] == 1) { ?>
                                            <!-- <li class="pb-2 border-bottom text-success"> -->
                                            <!-- <span class="corner-ribbon" data-offer="50% OFF"></span> -->
                                            <!-- </li> -->
                                            <div class="ml-2">
                                                <?php
                                       
                                          echo '<span class="text-white bg-color-very-peri fa-sm px-3 py-3 rounded-pill fw-bold badge d-inline-block"> ' . calPercentage($productdata['amount'], $productdata['offeramount']) . ' off</span>';
                                        ?>
                                            </div>

                                            <?php } ?>
                                        </div>
                                        <?php
								if ($productdata['inOffer'] == 1) {
									echo '<h4 class="pt-3 mb-0"><span class="text-danger fw-medium"><del>&#8377; ' . formatePrice($productdata['amount']) . '</del></span> ';
									echo ' <span class="text-success fs-1">&#8377; ' . formatePrice($productdata['offeramount']) . '/-</span> <span class="fw-medium font-20">Only</span></h4>';
									$subtotal = $productdata['offeramount'];
								} else {
									echo '<h3 class="text-success">&#8377; ' . formatePrice($productdata['amount']) . '/-</h3>';
									$subtotal = $productdata['amount'];
								}
								?>
                                        <p><small>One-time fee, GST extra</small></p>
                                        <ul class="list-unstyled pt-3">

                                            <li class="pb-2 fw-bold">
                                                <div class="d-flex justify-content-between">Items <span
                                                        class="fw-bold">Price</span></div>
                                            </li>
                                            <li class="pb-2"><a class="d-flex justify-content-between" href="#">Price
                                                    <span><strong>₹
                                                            <?php echo formatePriceIndia($subtotal); ?></strong></span></a>
                                            </li>
                                            <li class="pb-2"><a class="d-flex justify-content-between" href="#">GST
                                                    (18%)
                                                    <span><strong>₹
                                                            <?php $gst = $subtotal * 0.18;
												echo formatePriceIndia($gst); ?></strong></span></a></li>

                                            <li class="pb-2 border-top"><a
                                                    class="d-flex justify-content-between fw-bold mt-2" href="#">Total
                                                    <span>₹
                                                        <?php $grandtotal = $subtotal + $gst;
												echo formatePriceIndia($grandtotal); ?></span></a></li>

                                        </ul>

                                        <div class="pt-3 text-center">
                                            <button class="button-dark button-lg button-radius button-turquiose w-100 text-uppercase"
                                                id="form-submit3" type="submit">Buy Now <i
                                                    class="fas fa-arrow-right ms-2"></i></button>
                                        </div>
                                        <div class="text-center mt-2">
                                            <p class="font-small"><small>Secured by 256-bit SSL · UPI / Cards / Net
                                                    Banking</small></p>

                                        </div>
                                        <?php echo form_close(); ?>
                                    </div>

                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="bg-white border-0 border-radius px-lg-0 px-4 py-4">
                                        <p class="pb-2 text-dark"><strong>Subscription Benefits</strong></p>
                                        <ol class=" style-2 pt-2 list-unstyled mb-4">
                                            <li class="pb-0 mb-2 d-flex"><div><i
                                                    class="far fa-check-circle me-2 fs-6 text-gradient-6"></i></div><span>Loan
                                                Process in
                                                Multiple NBFCs</span></li>
                                            <li class="pb-0 mb-2 d-flex"><div><i
                                                    class="far fa-check-circle me-2 fs-6 text-gradient-6"></i></div><span>100%
                                                Online
                                                Financial Consultation</span> </li>
                                            <li class="pb-0 mb-2 d-flex"><div><i
                                                    class="far fa-check-circle me-2 fs-6 text-gradient-6"></i></div><span>Access
                                                Personalized Tracking Portal</span></li>
                                            <li class="pb-0 mb-2 d-flex"><div><i
                                                    class="far fa-check-circle me-2 fs-6 text-gradient-6"></i></div><span>Dedicated
                                                Loan
                                                Expert Assigned</span></li>
                                            <li class="pb-0 mb-2 d-flex"><div><i
                                                    class="far fa-check-circle me-2 fs-6 text-gradient-6"></i></div><span>Dedicated
                                                Loan
                                                Expert Assigned</span></li>
                                            <li class="pb-0 mb-2 d-flex"><div><i
                                                    class="far fa-check-circle me-2 fs-6 text-gradient-6"></i></div><span>Loan
                                                Processing
                                                Time: 48 Hours</span></li>
                                        </ol>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-6 p-0">
                                                <div class="icon-4xl p-3 px-0">
                                                    <div
                                                        class="d-flex flex-column align-items-center justify-content-center card mb-3 border-0">
                                                        <div
                                                            class="bg-color-turquiose-01 staticts-card-btn rounded-3 d-flex justify-content-center align-items-center mb-2">

                                                            <i class="far fa-user text-gradient-6 fs-6"></i>
                                                        </div>
                                                        <div class="text-center">
                                                            <h4 class="fw-bold text-dark mb-0"><span
                                                                    class="counter">2.25</span>+</h4>
                                                            <p class="font-small text-uppercase"><small>Satisfied
                                                                    Customers</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-6 p-0">
                                                <div class="icon-4xl p-3 px-0">
                                                    <div
                                                        class="d-flex flex-column align-items-center justify-content-start card mb-3 border-0">
                                                        <div
                                                            class="bg-color-turquiose-01 staticts-card-btn rounded-3 d-flex justify-content-center align-items-center mb-2">

                                                            <i class="fas fa-wallet text-gradient-6 fs-6"></i>
                                                        </div>
                                                        <div class="text-center">
                                                            <h4 class="fw-bold text-dark mb-0"><span
                                                                    class="counter">100</span>M+</h4>
                                                            <p><small>Loan Disbursed</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


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
        $('#form-submit3').html(
            'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
        );
    });
});
</script>