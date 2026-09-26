<?php $this->load->view('includes/header-apply.php'); ?>

<div class="section flex-fill">
    <div class="container">
        <div class="row g-3 g-lg-3 box-backdrop align-items-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-4 bg-white">
                <?php if ($processstep == 'step1'): ?>
                <div class="contact-form">
                    <h2 class="text-dark"> Get <div class="range" style="display: inline-block;">
                            <div class="range__value">
                                <span class="text-color"></span>
                            </div>
                        </div> Personal Loan in Minutes!</h2>




                    <p>Loan facility is provided by our NBFC/Lending Partners:</p>

                    <div class="owl-carousel brands-carousel-5 mt-3" data-owl-dots="false" data-owl-nav="false"
                        data-owl-autoplay="true" data-owl-margin="20" data-owl-items="4" data-owl-xs="3" data-owl-sm="3"
                        data-owl-md="4" data-owl-lg="5">
                        <?php foreach ($banklist as $row) { ?>
                        <div class="brand-logo">
                            <img class="img-fluid"
                                src="<?php echo base_url('assets/images/banks/' . $row->bank_image); ?>"
                                alt="<?php echo $row->bank_name; ?>">
                        </div>
                        <?php } ?>
                    </div>

                    <div class="pt-4">
                        <?= form_open('', array('id' => 'submitForm1')); ?>
                        <div class="col-md-12 col-sm-12">
                            <label class="form-control pt-0 ps-0" style="background:none">Loan Amount : </label>
                            <div class="form-group form-floating mb-4">
                                <div class="range">
                                    <div class="range__slider digi_range__slider">
                                        <input type="range" name="loanamount" step="10000" id="loanSlider">
                                        <div class="range__tooltip" id="rangeTooltip">₹0</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 mb-3">
                            <div class="input-group input-group-md">
                                <span class="input-group-text" style="margin: 0 0 16px 0;"><img
                                        src="<?php echo base_url('assets/images/flag.svg'); ?>"
                                        class="flag me-2">+91</span>
                                <input class="form-control" id="mobile" type="text" name="mobile"
                                    placeholder="Enter Mobile No" required minlength="10" maxlength="10"
                                    inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$"
                                    data-validation-regex-message="Enter valid mobile number">
                            </div>
                            <span class="error-message" id="mobile-message"></span>
                        </div>

                        <div class="col-md-12 col-sm-12 mb-4">
                            <div class="form-check mb-2 small">
                                <input type="checkbox" id="terms" name="terms" value="1" class="form-check-input"
                                    checked required>
                                <label class="form-check-label" for="terms">I agree to the
                                    <a href="<?= base_url('terms-conditions') ?>" target="_blank"
                                        style="text-decoration: none;" class="text-dark">Terms of Use</a> and <a
                                        href="<?= base_url('privacy-policy') ?>" target="_blank"
                                        style="text-decoration: none;" class="text-dark">Privacy Policy</a> of
                                    Fintopcorporate.</label>
                            </div>

                            <div class="form-check small">
                                <input type="checkbox" id="promotion" name="promotion" value="1"
                                    class="form-check-input" checked required>
                                <label class="form-check-label" for="promotion">I agree to receive promotional &
                                    informational communications from Fintopcorporate through Emails, calls or SMS
                                    Services.</label>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 mb-3">
                            <button class="button-dark button-lg button-radius button-turquiose w-100" id="form-submit1"
                                type="submit">Apply Now</button>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
                <?php elseif ($processstep == 'step2'): ?>
                <div class="contact-form">
                    <?= form_open('', array('id' => 'submitForm2')); ?>
                    <div class="d-inline-block me-4 icon-5xl">
                        <i class="bi bi-phone text-gradient-6"></i>
                    </div>
                    <h5 class="fw-normal">Please enter the received OTP</h5>
                    <h6 class="text-dark font-18 mt-1 ">Mobile No. : <?php echo $userdetails['mobile']; ?></h6>
                    <input type="hidden" name="otpmobile" id="otpmobile" value="<?php echo $userdetails['mobile']; ?>">
                    <input type="hidden" name="loanamount" id="loanamount"
                        value="<?php echo $userdetails['loanamount']; ?>">
                    <div class="row g-4">
                        <div class="col-md-12 col-sm-12 pt-4">
                            <input class="form-control border-radius mb-0 text-dark" id="otpcode" type="text"
                                name="otpcode" placeholder="Enter OTP" required maxlength="4" inputmode="numeric">
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
                            <button class="button-dark button-lg button-radius button-turquiose w-100" id="form-submit2"
                                type="submit">Verify OTP</button>
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
                <?php elseif ($processstep == 'step3'): ?>
                <div class="contact-form">
                    <?php echo form_open('', array('id' => 'submitForm3', 'novalidate' => 'novalidate')); ?>
                    <input type="hidden" name="loanamount" id="loanamount"
                        value="<?php echo $userdetails['loanamount']; ?>">
                    <input type="hidden" name="referralcode" id="referralcode"
                        value="<?php echo $userdetails['referralcode']; ?>">

                    <div class="d-inline-block me-4 icon-5xl">
                        <i class="bi bi-file-earmark-person text-gradient-6"></i>
                    </div>
                    <h5 class="fw-normal">Choose your profile and fill-in details</h5>
                    <h6 class="text-dark font-18 mt-1 ">Mobile No. : <?php echo $userdetails['mobile']; ?></h6>
                    <input type="hidden" name="otpmobile" id="otpmobile" value="<?php echo $userdetails['mobile']; ?>">
                    <input type="hidden" name="loanamount" id="loanamount"
                        value="<?php echo $userdetails['loanamount']; ?>">
                    <input type="hidden" name="usermobile" id="usermobile"
                        value="<?php echo $userdetails['mobile']; ?>">
                    <div class="pt-4">
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
                    </div>

                    <div class="row gx-3 gy-0 pt-2">
                        <div class="col-md-12 col-sm-12 pt-4">
                            <label class="form-control pt-0 ps-0" style="background:none">Enter your name</label>
                            <input class="form-control border-radius mb-0 text-dark" id="username" type="text"
                                name="username" placeholder="Full Name *" required>
                            <div class="error-message custom-error fs-6" id="username-message"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 pt-4">
                            <label class="form-control pt-0 ps-0" style="background:none">Enter email id</label>
                            <input class="form-control border-radius mb-0 text-dark" id="useremail" type="email"
                                name="useremail" placeholder="Email id *" required>
                            <div class=" error-message" id="useremail-message"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 pt-4">
                            <button class="button-dark button-lg button-radius button-turquiose w-100" id="form-submit3"
                                type="submit">Process</button>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-none d-md-block">
                <img src="<?php echo base_url() ?>assets/images/lending_img.png" class="img-fluid"
                    style="border-radius: 30px;">
            </div>
        </div>
    </div><!-- end container -->
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
<div class="section pt-4 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <h3 class="fw-medium line-height-160 m-0 pb-2">Best Personal Loan Offers from Top Banks</h3>
            </div>
        </div>
        <div class="icon-4xl mb-3">
            <!-- <div class="owl-carousel brands-carousel-5 mt-3" data-owl-dots="false" data-owl-nav="false" data-owl-autoplay="true" data-owl-margin="20" data-owl-items="2" data-owl-xs="1" data-owl-sm="1" data-owl-md="2" data-owl-lg="2">
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
            </div> -->
            <div class="owl-carousel brands-carousel-5 mt-3 d-none d-md-block" data-owl-dots="false" data-owl-nav="false"
                data-owl-autoplay="true" data-owl-margin="20" data-owl-items="1" data-owl-xs="1" data-owl-sm="1"
                data-owl-md="1" data-owl-lg="1">
                <?php		
                    $testimonialimg = array('d1.jpg','d2.jpg','d4.jpg','d5.jpg','d6.jpg','d7.jpg','d8.jpg' );
                ?>
                <?php foreach ($testimonialimg as $row): ?>
                <div class="items p-3">
                    <img src="<?php echo base_url('assets/images/lending_img/' . $row); ?>" alt="testimonial">
                </div>
                <?php endforeach; ?>
            </div>

            <div class="owl-carousel brands-carousel-5 mt-3 d-sm-block d-md-none" data-owl-dots="false" data-owl-nav="false"
                data-owl-autoplay="true" data-owl-margin="20" data-owl-items="1" data-owl-xs="1" data-owl-sm="1"
                data-owl-md="1" data-owl-lg="1">
                <?php		
                    $testimonialimg = array('m1.jpg','m2.jpg','m4.jpg','m5.jpg','m6.jpg','m7.jpg','m8.jpg' );
                ?>
                <?php foreach ($testimonialimg as $row): ?>
                <div class="items p-3">
                    <img src="<?php echo base_url('assets/images/lending_img/' . $row); ?>" alt="testimonial">
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

<div class="section pt-3">
    <div class="bg-white-06 backdrop-filter-blur">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 col-md-6 col-12 icon-5xl">
                    <div class="box-backdrop p-3 p-lg-4">
                        <div class="d-flex">
                            <div class="d-inline-block me-4">
                                <i class="bi bi-person text-gradient-6"></i>
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-medium text-dark mt-2">NBFC Loan Criteria for Salaried</h5>
                                <ul class="list-dash">
                                    <li>Minimum Age: 21 Year</li>
                                    <li>Minimum Salary: Rs.15,000 Per Month</li>
                                    <li>Minimum Job Stability: 1 Year </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 icon-5xl">
                    <div class="box-backdrop p-3 p-lg-4">
                        <div class="d-flex">
                            <div class="d-inline-block me-4">
                                <i class="bi bi-briefcase text-gradient-6"></i>
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-medium text-dark mt-2">NBFC Loan Criteria for Self-Employed</h5>
                                <ul class="list-dash">
                                    <li>Minimum Age: 21 Years </li>
                                    <li>Business Vintage: Minimum 1 Year</li>
                                    <li>Minimum 1 Year ITR</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</div>
<div class="bg-gray py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class=""><small>Loan tenure ranging up to 72 months with Annual Interest Rates ranging
                        between 11.5% - 36%. Processing fee up to 2%. For Example: Considering a personal loan of
                        Rs.1,00,000
                        availed at 11.5%* interest rate for a tenure of 6* years with 2%* processing fee, the APR will
                        be
                        12.26%*. *T&C Apply. All these numbers are tentative/indicative, the final loan specifics may
                        vary
                        depending upon the customer profile and NBFCs' criteria, rules & regulations, and terms &
                        conditions.
                        Company registered address :
                        <?= COMPANY_ADDRESS ?>.</small>
                </p>
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
</script>
