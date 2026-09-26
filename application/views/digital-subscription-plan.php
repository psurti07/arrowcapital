    <?php
$this->load->view('includes/header-apply.php');
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
$amtpay = $productdata['payamount'];
?>

    <div class="main-hero main-hero5 _relative">
        <div class="container">
            <div class="space20"></div>
            <div class="contact-form-all">
                <div class="row">
                    <div class="hadding5">
                        <h2 class="text-center">Digital Personal Loan Application Process</h2>
                        <div class="space16"></div>
                        <p class="font-20 text-dark text-center">Purchase Plan To Process Your <strong><span
                                    class="underline-2 success text-success">Rs.<?php echo $eligibilityamtindia; ?></span></strong>
                            Pre-Approved Loan Offer. <span class='underline-2 success text-danger'>Offer Valid Till 12
                                am
                                Only.</span></p>
                        <div class="space30"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="serviceBox darkred">
                                    <h2 class="title">Subscription Plan</h2>
                                    <hr />
                                    <?php
								if ($productdata['inOffer'] == 1) {
									echo '<h3><span class="text-danger weight-700 fs-5"><del>&#8377; ' . formatePrice($productdata['amount']) . '</del></span> <span class="text-success weight-700">';
									echo '&#8377; ' . formatePrice($productdata['offeramount']) . '/- Only</span></h3>';
									$subtotal = $productdata['offeramount'];
								} else {
									echo '<h3 class="text-success">&#8377; ' . formatePrice($productdata['amount']) . '/-</h3>';
									$subtotal = $productdata['amount'];
								}
								?>
                                    <!-- digital/checkoutDigital -->

                                    <?php echo form_open('digital/checkoutDigital', array('id' => 'submitForm3', 'class' => 'mt-3', 'novalidate' => 'novalidate')); ?>
                                    <input type="hidden" name="loantype" id="loantype"
                                        value="<?php echo $userdetails['loantype']; ?>" class="form-control" required>
                                    <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                                        class="form-control" required>
                                    <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                        class="form-control" required>
                                    <input type="hidden" name="fullname" id="fullname"
                                        value="<?php echo $userdetails['fullname']; ?>" class="form-control" required>
                                    <input type="hidden" name="mobile" id="mobile"
                                        value="<?php echo $userdetails['mobile']; ?>" class="form-control" required>
                                    <input type="hidden" name="email" id="email"
                                        value="<?php echo $userdetails['email']; ?>" class="form-control" required>
                                    <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                                        class="form-control" required>
                                    <input type="hidden" name="paymentid" id="paymentid" value="" class="form-control">
                                    <input type="hidden" name="orderAmount" id="orderAmount"
                                        value="<?php echo $amtpay; ?>" class="form-control" required>
                                    <div class="single-widget">
                                        <ul class="Categories-list">
                                            <?php if ($productdata['inOffer'] == 1) { ?>
                                            <li>
                                                <span class="pricing-icon">
                                                    <img src="<?= base_url('assets/img/icons/double-check2.png') ?>"
                                                        alt="">
                                                </span>
                                                <span class="weight-700 text-success ">
                                                    <?php echo calPercentage($productdata['amount'], $productdata['offeramount']); ?>
                                                    OFF
                                                </span>
                                            </li>
                                            <?php } ?>
                                            <li class="text-dark"><span class="pricing-icon">
                                                    <img src="<?= base_url('assets/img/icons/double-check2.png') ?>"
                                                        alt="">
                                                </span>
                                                <strong>Subtotal: </strong>&nbsp;&nbsp;
                                                <?php echo formatePriceIndia($subtotal); ?>
                                            </li>
                                            <li class="text-dark"><span class="pricing-icon">
                                                    <img src="<?= base_url('assets/img/icons/double-check2.png') ?>"
                                                        alt="">
                                                </span>
                                                <strong>GST (18%): </strong>&nbsp;&nbsp;
                                                <?php $gst = $subtotal * 0.18;
														echo formatePriceIndia($gst); ?>
                                            </li>
                                            <li class="text-dark"><span class="pricing-icon">
                                                    <img src="<?= base_url('assets/img/icons/double-check2.png') ?>"
                                                        alt="">
                                                </span>
                                                <strong>Grand Total: </strong>&nbsp;&nbsp;
                                                <?php $grandtotal = $subtotal + $gst;
														echo formatePriceIndia($grandtotal); ?>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="space15"></div>
                                    <button type="submit" class="button-h-2 btnfos2" id="form-submit3">Subscribe
                                        Now</button>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="serviceBox darkred">
                                    <div class="single-widget mb-0">
                                        <h2 class="title">Subscription Benefits</h2>
                                        <hr />
                                        <ul class="Categories-list text-dark">
                                            <li>100% Online Process</li>
                                            <li>Get Personalized Tracking Portal</li>
                                            <li>On-Call Expert Consultation</li>
                                            <li>Dedicated Loan Expert Assigned</li>
                                            <li>CIBIL Remains Unaffected</li>
                                            <li>Plan Validity: 6 months</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-details-box">
                            <div class="project-details-hadding">
                                <h6 class="fs-5">User Details</h6>
                            </div>
                            <ul class="Category-list">
                                <li><strong>User Name: </strong> <span><?= $userdetails['fullname'] ?></span></li>
                                <li><strong>Mobile:</strong> <span><?= $userdetails['mobile'] ?></span></li>
                                <li><strong>Loan Type:</strong> <span><?php echo $userdetails['loanname']; ?> </span>
                                </li>
                                <li><strong>Loan Amount:</strong>
                                    <span><?= formatePriceIndia($userdetails['loanamount']) ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sp3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="hadding2 text-center">
                        <h3>Get the Best Loan Offers For You – All In One Place</h3>
                        <div class="space30"></div>
                    </div>
                </div>
            </div>
            <div class="row p-1">
                <div class="col-lg-6 col-md-6 col-12 mt-0 pt-2 pb-3">
                    <div class="card border-1 card-feature rounded-4">
                        <div class="card-body p-3">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6 text-center text-sm-center p-1">
                                    <img src="<?php echo base_url('assets/img/banks/015.png'); ?>" alt="" width="120px">
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                    <div>
                                        <p class="mb-0">Max. Loan Amt.</p>
                                        <h6 class="mb-0 fs-6"><strong>Upto ₹20L</strong></h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                    <div>
                                        <p class="mb-0">Tenure upto
                                        </p>
                                        <h5 class="mb-0 fs-6"><strong>Upto 5 Years</strong>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                    <div>
                                        <p class="mb-0">Rate of Interest
                                        </p>
                                        <h5 class="mb-0 fs-6"><strong>11.25% - 21%</strong>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 mt-0 pt-2 pb-3">
                    <div class="card border-1 card-feature rounded-4">
                        <div class="card-body p-3">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6 text-center text-sm-center p-1">
                                    <img src="<?php echo base_url('assets/img/banks/034.png'); ?>" alt="" width="120px">
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                    <div>
                                        <p class="mb-0">Max. Loan Amt.</p>
                                        <h6 class="mb-0 fs-6"><strong>Upto ₹20L</strong></h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                    <div>
                                        <p class="mb-0">Tenure upto
                                        </p>
                                        <h5 class="mb-0 fs-6"><strong>Upto 5 Years</strong>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                    <div>
                                        <p class="mb-0">Rate of Interest
                                        </p>
                                        <h5 class="mb-0 fs-6"><strong>11.25% - 21%</strong>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 mt-0 pt-2 pb-3">
                    <div class="card border-1 card-feature rounded-4">
                        <div class="card-body p-3">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6 text-center text-sm-center p-1">
                                    <img src="<?php echo base_url('assets/img/banks/006.png'); ?>" alt="" width="120px">
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                    <div>
                                        <p class="mb-0">Max. Loan Amt.</p>
                                        <h6 class="mb-0 fs-6"><strong>Upto ₹20L</strong></h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                    <div>
                                        <p class="mb-0">Tenure upto
                                        </p>
                                        <h5 class="mb-0 fs-6"><strong>Upto 5 Years</strong>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                    <div>
                                        <p class="mb-0">Rate of Interest
                                        </p>
                                        <h5 class="mb-0 fs-6"><strong>11.25% - 21%</strong>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 mt-0 pt-2 pb-3">
                    <div class="card border-1 card-feature rounded-4">
                        <div class="card-body p-3">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6 text-center text-sm-center p-1">
                                    <img src="<?php echo base_url('assets/img/banks/039.png'); ?>" alt="" width="120px">
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                    <div>
                                        <p class="mb-0">Max. Loan Amt.</p>
                                        <h6 class="mb-0 fs-6"><strong>Upto ₹20L</strong></h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                    <div>
                                        <p class="mb-0">Tenure upto
                                        </p>
                                        <h5 class="mb-0 fs-6"><strong>Upto 5 Years</strong>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                    <div>
                                        <p class="mb-0">Rate of Interest
                                        </p>
                                        <h5 class="mb-0 fs-6"><strong>11.25% - 21%</strong>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p class="p-t-10"><small>Disclaimer - The above data is tentative and purely on the information provided
                        by
                        you. Final EMI, loan sanction, loan approval, and loan amount depend on customer profile and
                        NBFCs
                        criteria and rules & regulations.</small></p>
            </div>
            <div class="space30"></div>
        </div>
    </div>

    <?php $this->load->view('includes/footer-apply'); ?>

    <script type="text/javascript">
$(document).ready(function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 1024) { //for iPad & smaller devices
        $('#userCollapse').removeClass('show');
    }
});

$(function() {
    $('#submitForm3').on('submit', function(e) {
        $('#form-submit3').html(
            'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
        );
    });
});
    </script>