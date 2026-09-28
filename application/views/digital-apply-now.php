<?php $this->load->view('includes/header-apply.php'); ?>

<div class="section section-xs flex-fill bg-light-green pt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 m-auto">
                <?php if ($processstep == 'step1'): ?>
                <div class="contact-form">
                    <h4 class="text-center mb-0 fw-normal"> Up to <div class="range" style="display: inline-block;">
                            <div class="range__value">
                                <span class="text-gradient-6">₹5 Lakhs</span>
                            </div>
                        </div> personal loan <span class="text-gradient-6">starting @ 9.98% per annum</span></h4>
                    <div class="pt-3 submit-form">
                        <div class="row justify-content-center feature-section mb-3">
                            <div class="col-12 col-lg-6 col-md-6 icon-5xl">
                                <div class="card bg-gray mb-3 border-0">
                                    <div class="card-body p-2 py-2 px-3 sm:px-4"
                                        style="border-radius: 16px !important; background: #f3f9f3;">
                                        <div class="d-flex justify-content-center">
                                            <div class="d-inline-block me-2">
                                                <img src="<?php echo base_url() ?>assets/images/online_discount.png">
                                            </div>
                                            <div class="d-inline-block">
                                                <p class="fw-medium text-dark title">Seamless Online Process</p>
                                                <p class="text-dark fw-bold sub-title">100%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 icon-5xl">
                                <div class="card bg-light-tan mb-3 pl-0 pl-lg-3 pl-md-3 border-0">
                                    <div class="card-body p-2"
                                        style="border-radius: 10px !important; background: #f3f9f3;">
                                        <div class="d-flex justify-content-center">
                                            <div class="d-inline-block me-2">
                                                <img src="<?php echo base_url() ?>assets/images/pb_promise.png">
                                            </div>
                                            <div class="d-inline-block">
                                                <p class="fw-medium title text-dark">Easy Repayment Options
                                                </p>
                                                <p class="fw-bold sub-title text-dark">Up to 72 Months</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?= form_open('', array('id' => 'submitForm1')); ?>
                        <div class="col-md-12 col-sm-12 mb-2">
                            <div class="form-group col-xl-12 col-lg-12 col-md-12 mb-3">
                                <label class="form-control pt-0 ps-0 pb-2 bg-transparent">Loan Amount *</label>
                                <div class="input-group mb-3">

                                    <span class="input-group-text text-dark fw-bold bg-transparent"
                                        id="basic-addon1">₹</span>
                                    <input type="text" aria-required="true" id="loanamount" name="loanamount"
                                        class="form-control mb-0" placeholder="As per your requirement" required
                                        min="10000" max="1500000" inputmode="numeric"
                                        data-validation-regex-regex="[0-9]+"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                </div>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>


                        <div class="col-md-12 col-sm-12 mb-2">
                            <div class="form-group col-xl-12 col-lg-12 col-md-12 mb-2">

                                <label class="form-control pt-0 ps-0 pb-2 bg-transparent">Mobile no.</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text text-dark fw-bold bg-transparent"
                                        id="basic-addon1">+91</span>
                                    <input class="form-control mb-0" id="mobile" type="text" name="mobile"
                                        placeholder="Enter Mobile No" required minlength="10" maxlength="10"
                                        inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$"
                                        data-validation-regex-message="Enter valid mobile number">
                                </div>
                            </div>
                            <span class="error-message" id="mobile-message"></span>
                        </div>
                        <div class="col-md-12 col-sm-12 mb-3">
                            <button class="button-dark button-lg button-radius button-turquiose w-100 text-uppercase" id="form-submit1"
                                type="submit">Apply Now <i class="fas fa-arrow-right ms-2"></i></button>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-check mb-2 small">
                                <input type="checkbox" id="terms" name="terms" value="1" class="form-check-input"
                                    checked required>
                                <label class="form-check-label" for="terms" style="font-size: 11px;">By submitting this
                                    form & proceeding, you agree to the
                                    <a href="<?= base_url('terms-conditions') ?>" target="_blank"
                                        style="text-decoration: none;" class="text-dark">Terms of Use</a> and <a
                                        href="<?= base_url('privacy-policy') ?>" target="_blank"
                                        style="text-decoration: none;" class="text-dark">Privacy Policy</a> of
                                    ArrowCapital.</label>
                            </div>


                        </div>

                    </div>
                    <?= form_close(); ?>
                </div>
                <?php elseif ($processstep == 'step2'): ?>

                <div class="contact-form submit-form bg-white p-4 shadow rounded-4">
                    <?= form_open('', array('id' => 'submitForm2')); ?>
                    <h3 class="mb-0 text-start  fw-bold">Verify your mobile</h3>

                    <h6 class="text-dark font-18 mt-1 mb-3">We've sent a 4-digit OTP to
                        <?php echo $userdetails['mobile']; ?></h6>
                    <label class="form-control pt-0 ps-0 bg-transparent pb-2">Enter OTP</label>
                    <input type="hidden" name="otpmobile" id="otpmobile" value="<?php echo $userdetails['mobile']; ?>">
                    <input type="hidden" name="loanamount" id="loanamount"
                        value="<?php echo $userdetails['loanamount']; ?>">
                    <div class="row g-4">
                        <div class="col-md-12 col-sm-12">
                            <!-- <input class="form-control border-radius mb-0 text-dark" id="otpcode" type="text"
                                name="otpcode" placeholder="Enter OTP" required maxlength="4" inputmode="numeric"> -->
                            <div class="input-field input-field text-start d-flex">
                                <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                    name="otpcode[]" class="me-md-0 me-2 otp-input">
                                <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                    name="otpcode[]" class="me-md-0 me-2 otp-input">
                                <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                    name="otpcode[]" class="me-md-0 me-2 otp-input">
                                <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                    name="otpcode[]" class="me-md-0 me-2 otp-input">
                            </div>
                            <div class="error-message error-message" id="otpcode-message"></div>
                            <div class="error-message fs-6 pb-3" id="otpcodeError"></div>
                            <div class="p-countdown">
                                <div class="p-countdown-count" id="counttime">
                                    <code>New OTP code will generate in <span id="timer">30</span> Sec</code>
                                </div>
                                <div id="resendBtn" class="d-none">
                                    <code>Didn’t receive OTP? <a href="javascript:resendotp()">Resend OTP</a></code>
                                </div>
                                <code id="resend-message"></code>
                                <div class="custom-error" id="otpcodeError"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 pt-2">
                            <button class="button-dark button-lg button-radius button-turquiose w-100 text-uppercase" id="form-submit2"
                                type="submit">Verify OTP <i class="fas fa-arrow-right ms-2"></i></button>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="otp-velidation-text shadow-none border bg-gray-lightest rounded-3">
                                <div class="card-body py-2 px-3 ">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-shield-alt mr-2 text-success mt-1"></i>

                                        <p class="mb-0 font-small ms-2">ArrowCapital will never call you for your
                                            OTP.
                                            Treat your OTP like a password — do not share it with anyone. </p>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>

                    </div>
                </div>

                <?= form_close(); ?>
                <?php elseif ($processstep == 'step3'): ?>
                <div class="contact-form submit-form bg-white p-4 shadow rounded-4">
                    <?php echo form_open('', array('id' => 'submitForm3', 'novalidate' => 'novalidate')); ?>
                    <input type="hidden" name="loanamount" id="loanamount"
                        value="<?php echo $userdetails['loanamount']; ?>">
                    <input type="hidden" name="referralcode" id="referralcode"
                        value="<?php echo $userdetails['referralcode']; ?>">

                    <p class="text-uppercase text-gradient-6 fw-bold mb-0"><small>enter your loan amount</small></p>
                    <h3 class="mb-0 text-start">Enter Following Details
                    </h3>
                    <div class="form-group mb-3">
                        <p class="text-grey" for="username">Kindly enter your details for personalized offers.</strong>
                        </p>
                    </div>

                    <h6 class="text-dark font-18 mt-1 ">Mobile No. : <?php echo $userdetails['mobile']; ?></h6>
                    <input type="hidden" name="otpmobile" id="otpmobile" value="<?php echo $userdetails['mobile']; ?>">
                    <input type="hidden" name="loanamount" id="loanamount"
                        value="<?php echo $userdetails['loanamount']; ?>">
                    <input type="hidden" name="usermobile" id="usermobile"
                        value="<?php echo $userdetails['mobile']; ?>">
                    <!-- <div class="pt-4">
                        <div class="radio-nav" id="myList">
                            <label class="radio-tab">
                                <input type="radio" data-value="1" value="1" id="usertype" name="usertype" checked="">
                                <span class="name">Salaried</span>
                            </label>
                            <label class="radio-tab">
                                <input type="radio" data-value="2" value="2" id="usertype" name="usertype">
                                <span class="name">Self-Employed</span>
                            </label>
                        </div>
                    </div> -->
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-0 state-card mb-sm-0 mb-2 p-1">

                            <fieldset class="picker1">
                                <label for="plan-1">
                                    <input type="radio" name="usertype" id="plan-1" value="1" class="d-none" checked
                                        data-gtm-form-interact-field-id="1">
                                    <span class="p-3">
                                        <div class="subscription-price pb-0 pt-0">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="icon staticts-card-btn btn btn-block bg-color-turquiose-01 justify-content-center">
                                                    <i class="fas fa-briefcase fs-6 text-dark"></i>
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-0 text-blue">Salaried
                                                    </h6>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="round-radiobox"></div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-0 state-card p-1">
                            <fieldset class="picker1">
                                <label for="plan-2">
                                    <input type="radio" name="usertype" id="plan-2" value="2" class="d-none"
                                        data-gtm-form-interact-field-id="2">
                                    <span class="p-3">
                                        <div class="subscription-price pb-0 pt-0">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="icon staticts-card-btn btn btn-block pe-none bg-color-turquiose-01 border-0 justify-content-center">
                                                    <i class="far fa-flag fs-6 text-dark"></i>
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-0 text-blue">
                                                        Self-Emp.
                                                    </h6>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="round-radiobox"></div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                    </div>

                    <div class="row gx-3 gy-0">
                        <div class="col-md-12 col-sm-12 pt-4">
                            <label class="form-control pt-0 ps-0 pb-2" style="background:none">Full name</label>
                            <input class="form-control border-radius mb-0 text-dark" id="username" type="text"
                                name="username" placeholder="Full Name *" required>
                            <div class="error-message custom-error fs-6" id="username-message"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 pt-4">
                            <label class="form-control pt-0 ps-0 pb-2" style="background:none">Email id</label>
                            <input class="form-control border-radius mb-0 text-dark" id="useremail" type="email"
                                name="useremail" placeholder="Email id *" required>
                            <div class=" error-message" id="useremail-message"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 pt-4">
                            <button class="button-dark button-lg button-radius button-turquiose w-100 text-uppercase" id="form-submit3"
                                type="submit">Process <i class="fas fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div><!-- end container -->
</div>
<!-- Clients section -->
<div class="section bg-light-green">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 text-center mb-4">
                <h2>Our Testimonial</h2>

            </div>
            <?php $testimonial = array('1.png', '2.png', '3.png', '1.png', '2.png', '3.png', '1.png') ?>
            <div class="col-12 col-lg-12 text-center">
                <div class="owl-carousel" data-owl-nav="true" data-owl-dots="false" data-owl-margin="50"
                    data-owl-autoplay="true" data-owl-items="3" data-owl-xs="1" data-owl-sm="1" data-owl-md="2"
                    data-owl-lg="3" data-owl-xl="3">
                    <?php foreach ($testimonial as $row) { ?>
                    <div class="client-box">
                        <img src="<?php echo base_url('assets/images/' . $row); ?>" alt="<?php echo $row; ?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($processstep != 'step3'): ?>
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

<div class="py-5 bg-white">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-4 mb-lg-0 mb-md-5 mb-4 text-lg-start text-md-center text-center">
                <p class="text-dark">Arrow Capital – Built on trust powered by strong partnerships and measurable
                    growth.</strong>.
                </p>
            </div>
            <div class="col-lg-3 mb-lg-0 mb-md-5 mb-4">
                <div class="gallery-img text-center">
                    <img src="<?php echo base_url('assets/images/four-half-star-rating.svg'); ?>"
                        class="img-fluid w-50">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row g-4 counter-section me-0">
                    <div class="col-4 text-center counter-divider mt-0">
                        <h4 class="fw-bold mb-0 text-dark"><span class="counter">8</span>K+</h4>
                        <p class="small">Happy Customers</p>
                    </div>
                    <div class="col-4 text-center counter-divider mt-0">
                        <h4 class="fw-bold mb-0 text-dark"><span class="counter">8</span>+</h4>
                        <p class="small">NBFC Partners</p>
                    </div>
                    <div class="col-4 text-center mt-0">
                        <h4 class="fw-bold mb-0 text-dark"><span class="counter">4</span>M+</h4>
                        <p class="small">Amount Disbursed</p>
                    </div>
                </div>
            </div>
        </div>



        <div class="row mt-5">
            <div class="col-12">
                <p class="mb-2"><strong>Disclaimer: </strong> Loan Tenure ranges from minimum 6 months to maximum of 60
                    months, with annual interest rates starting at 11% and going up to 34%. A processing fee up to 2%
                    may be applicable. Representative Example: If a loan of ₹1,00,000 is availed at an interest rate of
                    12.5% per annum for a tenure of 12 months, and a processing fee of 2% is applied: Interest Payable:
                    ₹6,720 approx. Processing Fee: ₹2,000. Total Loan Cost (including interest + fee) ₹1,08,720. APR
                    (Annual Percentage Rate): 14.27% approx. *T&C Apply. All these numbers are tentative/indicative, the
                    final loan specifics may vary depending upon the customer profile and NBFCs' criteria, rules &
                    regulations, and terms & conditions. The amount paid is only for the service charge. We are not
                    lenders and do not guarantee any loan approval.</p>

                <p class="mb-2"><strong>Important Note: </strong>BE AWARE! We ask our customers to make payments ONLY on
                    our website
                    <a class="text-dark" href="<?php echo COMPANY_SITE; ?>">arrowcapital.com</a> and NOT through any
                    other source, directly or indirectly. Thanks!
                </p>


                <p class="mb-2"><strong>Company Registered Address</strong><?php echo COMPANY_ADDRESS; ?></p>

                <p class="mb-2"><strong>Mobile : </strong><?php echo COMPANY_MOBILE; ?> | <strong>Email :
                    </strong><?php echo COMPANY_EMAIL; ?></p>
            </div>
        </div>

    </div>
</div>

</div>
<?php endif; ?>

<script src="<?php echo base_url('assets/js/loanscript_tooltip.js'); ?>" type="text/javascript"></script>
<?php $this->load->view('includes/footer-apply.php'); ?>

<script>
$('#myList li').click(function() {
    $('#usertype').val($(this).data('value'));
});

function resendotp() {
    loanamount = document.getElementById('loanamount').value;
    mobile = document.getElementById('otpmobile').value;

    $.ajax({
        url: '<?php echo base_url("digital/resendotpCode"); ?>',
        type: "POST",
        data: 'mobile=' + mobile + '&loanamount=' + loanamount,
        dataType: "JSON",
        cache: false,
        processData: false,
        success: function(response) {
            if (response['success'] == true) {
                $('#resend-message2').html(response['message']);
                toastr.success(response['message']);
            } else {
                toastr.error(response['message']);
            }
        },
        error: function(jXHR, textStatus, errorThrown) {
            toastr.error(errorThrown, 'ERROR');
        }
    });
}

$(document).ready(function() {
    $.validator.addMethod("customMobile", function(value, element) {
        return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
    }, "Please enter a valid mobile number");

    $.validator.addMethod("customAmount", function(value, element) {
        // Check if the value is a valid number and within the specified range
        return this.optional(element) || (parseFloat(value) >= 10000 && parseFloat(value) <= 10000000);
    }, "Please enter a valid loan amount between 10,000 and 1,00,00,000.");

    $('.numeric-input').on('keydown', function(event) {
        if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <=
                '9'))) {
            event.preventDefault();
        }
    });

    $('#submitForm1').validate({
        rules: {
            mobile: {
                required: true,
                digits: true,
                customMobile: true
            },
            loanamount: {
                required: true,
                digits: true,
                customAmount: true
            }
        },
        messages: {
            mobile: {
                required: 'Please enter mobile number'
            },
            loanamount: {
                required: "Please enter a loan amount.",
                validAmount: "Please enter a valid loan amount between 10,000 and 1,00,00,000."
            }
        },
        errorPlacement: function(error, element) {
            var target = "#" + $(element).attr("id") + "-message";
            $(target).html(error);
        },
        submitHandler: function(form) {
            $.ajax({
                url: `<?php echo base_url('digital/sendotpCode') ?>`,
                type: "POST",
                data: $(form).serialize(),
                dataType: "JSON",
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#form-submit1').html(
                        'Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                    );
                    $('#form-submit1').attr('disabled', true);
                },
                success: function(response) {
                    if (response['success'] == true) {
                        if (response['redirect_url'] != "") {
                            window.location.href = response['redirect_url'];
                        } else {
                            window.location = "./applynow/s2/" + response['mobile'];
                        }
                    } else {
                        $('#mobilenoError1').html(response['message']);
                        toastr.error(response['message']);
                    }
                    $('#form-submit1').html('Apply Now');
                    $('#form-submit1').attr('disabled', false);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, 'ERROR');
                    $('#form-submit1').html('Apply Now');
                    $('#form-submit1').attr('disabled', false);
                }
            });
        }
    });

    $('#submitForm2').validate({
        rules: {
            otpcode: {
                required: true,
                digits: true
            },
        },
        messages: {
            otpcode: {
                required: 'Enter valid OTP'
            }
        },
        errorPlacement: function(error, element) {
            var target = "#" + $(element).attr("id") + "-message";
            // alert(target)
            $(target).html(error);
        },
        submitHandler: function(form) {
            $.ajax({
                url: `<?php echo base_url('digital/checkotpCode') ?>`,
                type: "POST",
                data: $(form).serialize(),
                dataType: "JSON",
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#form-submit2').html(
                        'Verifying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                    );
                    $('#form-submit2').attr('disabled', true);
                },
                success: function(response) {
                    if (response['success'] == true) {
                        window.location = "../../applynow/s3/" + response['mobile'];
                    } else {
                        $('#otpcodeError').html(response['message']);
                        toastr.error(response['message']);
                    }

                    $('#form-submit2').html('Verify OTP');
                    $('#form-submit2').attr('disabled', false);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, 'ERROR');
                    $('#form-submit2').html('Verify OTP');
                    $('#form-submit2').attr('disabled', false);
                }
            });
        }
    });

    $('#submitForm3').validate({
        rules: {
            username: {
                required: true
            },
            email: {
                required: true,
                email: true
            }
        },
        errorPlacement: function(error, element) {
            var target = "#" + $(element).attr("id") + "-message";
            $(target).html(error);
        },
        submitHandler: function(form) {
            $.ajax({
                url: `<?php echo base_url('digital/registeredUser') ?>`,
                type: "POST",
                data: $(form).serialize(),
                dataType: "JSON",
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#form-submit3').html(
                        'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                    );
                    $('#form-submit3').attr('disabled', true);
                },
                success: function(response) {
                    if (response['success'] == true) {
                        window.location.href = response['redirect_url'];
                    } else {
                        $('#otpcodeError').html(response['message']);
                        toastr.error(response['message']);
                    }

                    $('#form-submit3').html('Process');
                    $('#form-submit3').attr('disabled', false);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, 'ERROR');
                    $('#form-submit3').html('Process');
                    $('#form-submit3').attr('disabled', false);
                }
            });
        }
    });
});
</script>

<script>
let resendBtn = document.getElementById('resendBtn');
let counttime = document.getElementById('counttime');
let timerDisplay = document.getElementById('timer');
let countdown = 30;

let interval = setInterval(() => {
    countdown--;
    timerDisplay.textContent = countdown;

    if (countdown <= 0) {
        clearInterval(interval);
        resendBtn.classList.remove('d-none');
        counttime.classList.add('d-none');
        timerDisplay.textContent = '';
    }
}, 1000);

resendBtn.addEventListener('click', function() {
    resendBtn.classList.add('d-none');
    counttime.classList.remove('d-none');
    countdown = 30;
    timerDisplay.textContent = countdown;

    interval = setInterval(() => {
        countdown--;
        timerDisplay.textContent = countdown;

        if (countdown <= 0) {
            clearInterval(interval);
            resendBtn.classList.remove('d-none');
            counttime.classList.add('d-none');
            timerDisplay.textContent = '';
        }
    }, 1000);
});

$('.otp-input').on('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '');
    if (this.value.length === 1) {
        $(this).next('.otp-input').focus();
    }
});
$('.otp-input').on('keydown', function(e) {
    if (e.key === "Backspace" && this.value === '') {
        $(this).prev('.otp-input').focus();
    }
});
</script>