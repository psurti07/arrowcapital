<?php $this->load->view('includes/header-apply.php'); ?>

<div class="main-hero main-hero5 _relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 offset-lg-4 d-block d-sm-none d-md-none d-lg-none">
                <?php $lendingimages = array('cash-icon-1.png', 'cash-icon-2.png', 'cash-icon-3.png', 'cash-icon-4.png') ?>
                <div id="" class="offer owl-carousel">
                    <?php foreach ($lendingimages as $row) { ?>
                    <div class="">
                        <img src="<?php echo base_url() ?>assets/img/<?php echo $row ?>" class="img-fluid">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row align-items-center">

            <div class="col-lg-6 col-md-8 _relative d-none d-lg-block">
                <div class="main-hadding6">
                    <div class="text-center">
                        <img src="<?php echo base_url() ?>assets/img/lending_img.png" class="img-fluid">

                        <hr class="mt-0">

                        <h6>Loan facility is provided by our lending partners:</h6>
                        <div class="space14"></div>

                        <div class="brand2-slider brand2-slider6 owl-carousel">
                            <?php foreach ($banklist as $row) { ?>
                            <div class="brand2-logo">
                                <img class="img-fluid"
                                    src="<?php echo base_url('assets/img/banks/' . $row->bank_image); ?>"
                                    alt="<?php echo $row->bank_name; ?>">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact2-form-box-all">
                    <div class="contact-form">
                        <?php if ($processstep == 'step1'): ?>
                        <?= form_open('', array('id' => 'submitForm1', 'class' => 'text-start ')); ?>
                        <div class="hadding2">
                            <h3 class="">Avail Personal Loan up to <div class="range" style="display: inline-block;">
                                    <div class="range__value">
                                        <span class="text-primary"></span>
                                    </div>
                                </div> in
                                15 Mins!</h>
                        </div>
                        <div class="space12"></div>

                        <p>Select your required loan amount: </p>

                        <div class="space16"></div>

                        <div class="contact-inputs">
                            <div class="contact-input">
                                <div class="contact5-form-input">
                                    <div class="range">
                                        <div class="range__slider">
                                            <input type="range" name="loanamount" step="10000">
                                        </div>

                                        <div class="mt-3 mb-2"><small>Estimated EMI based on interest rate of 11.5% and
                                                tenure of 72
                                                months.</small></div>
                                        <div class="range__emi">
                                            <label>EMI Amount : </label>
                                            <span class="fs-5"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact5-form-input">
                                    <input id="mobile" type="text" name="mobile" class="numeric-input form-control"
                                        placeholder="Enter mobile no*." required minlength="10" maxlength="10"
                                        inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$"
                                        data-validation-regex-message="Enter valid mobile number">
                                    <div class="error-message" id="mobile-message"></div>
                                </div>

                                <div class="space30"></div>
                                <button class="button2 w-100">Apply Now</button>
                                <div class="form-group s-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="terms" id="terms"
                                            class="custom-control-input w-auto" value="1" checked required>
                                        <label class="custom-control-label" style="display:unset;" for="terms"><small>By
                                                submitting the form & proceeding, you agree to the <a
                                                    href="<?= base_url('terms-conditions') ?>" target="_blank"
                                                    style="text-decoration: none;" class="text-dark">Terms of Use</a>
                                                and <a href="<?= base_url('privacy-policy') ?>" target="_blank"
                                                    style="text-decoration: none;" class="text-dark">Privacy Policy</a>
                                                of
                                                Cashindia.</small></label>
                                        <div class="help-block font-small-3"></div>
                                    </div>
                                </div>
                                <div class="form-group s-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="promotion" id="promotion"
                                            class="custom-control-input w-auto" value="1" checked required>
                                        <label class="custom-control-label" style="display:unset;"
                                            for="promotion"><small>I agree to
                                                receive promotional & informational communications from Cashindia
                                                through Emails, calls
                                                or SMS,RCS Services.</small></label>
                                        <div class="help-block font-small-3"></div>
                                    </div>
                                </div>
                                <div class="brand2-slider brand2-slider6 owl-carousel d-block d-lg-none">
                                    <?php foreach ($banklist as $row) { ?>
                                    <div class="brand2-logo">
                                        <img class="img-fluid"
                                            src="<?php echo base_url('assets/img/banks/' . $row->bank_image); ?>"
                                            alt="<?php echo $row->bank_name; ?>">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        </form>
                        <?php elseif ($processstep == 'step2'): ?>
                        <?= form_open('', array('id' => 'submitForm2', 'class' => 'text-start ')); ?>
                        <div class="hadding2">
                            <h3 class="font-24 text-dark weight-600">Please enter the received OTP</h3>
                            <div class="space14"></div>
                            <h6 class="text-dark font-18 mt-1 weight-400">Mobile No. : <strong>
                                    <?php echo $userdetails['mobile']; ?>
                                </strong></h6>
                            <input type="hidden" name="otpmobile" id="otpmobile"
                                value="<?php echo $userdetails['mobile']; ?>">
                            <input type="hidden" name="loanamount" id="loanamount"
                                value="<?php echo $userdetails['loanamount']; ?>">
                        </div>
                        <div class="sapce24"></div>
                        <div class="contact-inputs">
                            <div class="contact-input">
                                <div class="contact5-form-input">
                                    <input id="otpcode" type="text" name="otpcode"
                                        class="numeric-input form-control text-center optnumber" placeholder="Enter OTP"
                                        required maxlength="4" inputmode="numeric">
                                    <div class="error-message" id="otpcode-message"></div>
                                    <div class="text-danger custom-error fs-6" id="otpcodeError"></div>

                                </div>

                                <div class="space30"></div>
                                <button class="button2" type="submit" id="form-submit2">Verify OTP</button>
                                <div class="space20"></div>
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
                        </div>
                        </form>
                        <?php elseif ($processstep == 'step3'): ?>
                        <p class="font-22 text-dark weight-600 pb-3">Choose your profile and fill-in details</p>

                        <?php echo form_open('', array('id' => 'submitForm3', 'class' => 'text-start ', 'novalidate' => 'novalidate')); ?>

                        <input type="hidden" name="loanamount" id="loanamount"
                            value="<?php echo $userdetails['loanamount']; ?>">
                        <input type="hidden" name="referralcode" id="referralcode"
                            value="<?php echo $userdetails['referralcode']; ?>">
                        <h6 class="text-dark font-18 weight-400">Mobile No. : <strong>
                                <?php echo $userdetails['mobile']; ?>
                            </strong></h6>
                        <input type="hidden" name="usermobile" id="usermobile"
                            value="<?php echo $userdetails['mobile']; ?>">
                        <div class="row mt-4">

                            <div class="col-md-4">
                                <div class="checkout-input-selact utype">
                                    <input class="form-check-input" type="radio" id="le1" name="usertype" value="1"
                                        checked>
                                    <label for="le1">Salaried</label><br>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="checkout-input-selact utype">
                                    <input class="form-check-input" type="radio" id="le2" name="usertype" value="2">
                                    <label for="le2">Self-Employed</labe><br>
                                </div>
                            </div>

                            <div class="contact-inputs">
                                <div class="contact-input">
                                    <div class="contact5-form-input">
                                        <input id="username" type="text" name="username" class="form-control "
                                            placeholder="Full Name *" required>
                                        <div class="error-message" id="username-message"></div>

                                    </div>
                                    <div class="contact5-form-input">
                                        <input id="useremail" type="email" name="useremail" class="form-control"
                                            placeholder="Email id *" required>
                                        <div class="error-message" id="useremail-message"></div>

                                    </div>

                                    <div class="space30"></div>
                                    <button type="submit" id="form-submit3" class="button2">
                                        Process
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?= form_close(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($processstep == 'step1'): ?>
<div class="sp3 bg-light">
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
            <div class="col-lg-6 col-md-6 col-12 mt-0 pt-2 pb-3 d-none d-lg-block">
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
                                    <p class="mb-0">Tenure upto</p>
                                    <h6 class="mb-0 fs-6"><strong>Upto 5 Years</strong></h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                <div>
                                    <p class="mb-0">Rate of Interest</p>
                                    <h6 class="mb-0 fs-6"><strong>11.25% - 21%</strong></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12 mt-0 pt-2 pb-3 d-none d-lg-block">
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

            <div class="col-lg-6 col-md-6 col-12 mt-0 pt-2 pb-3 d-none d-lg-block">
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

            <div class="col-lg-6 col-md-6 col-12 mt-0 pt-2 pb-3 d-none d-lg-block">
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
            <p class="p-t-10"><small>Disclaimer - The above data is tentative and purely on the information provided by
                    you. Final EMI, loan sanction, loan approval, and loan amount depend on customer profile and NBFCs
                    criteria and rules & regulations.</small></p>
        </div>
        <?php
            $banks = [
                [
                    'img' => '015.png',
                    'loan' => 'Upto ₹20L',
                    'roi' => '11.25% - 21%',
                    'tenure' => 'Upto 5 Years'
                ],
                [
                    'img' => '034.png',
                    'loan' => 'Upto ₹20L',
                    'roi' => '11.25% - 21%',
                    'tenure' => 'Upto 5 Years'
                ],
                [
                    'img' => '006.png',
                    'loan' => 'Upto ₹20L',
                    'roi' => '11.25% - 21%',
                    'tenure' => 'Upto 5 Years'
                ],
                [
                    'img' => '039.png',
                    'loan' => 'Upto ₹20L',
                    'roi' => '11.25% - 21%',
                    'tenure' => 'Upto 5 Years'
                ]
            ];
            ?>
        <div class="p-1 tes5-slider owl-carousel d-block d-lg-none">
            <?php foreach ($banks as $bank): ?>
            <div class="tes5-slider mt-0 pt-2 pb-3">
                <div class="card border-1 card-feature rounded-4">
                    <div class="card-body p-3">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6 text-center text-sm-center p-1">
                                <img src="<?php echo base_url('assets/img/banks/' . $bank['img']); ?>" alt=""
                                    width="120px">
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                <div>
                                    <p class="mb-0">Max. Loan Amt.</p>
                                    <h6 class="mb-0 fs-6"><strong><?php echo $bank['loan']; ?></strong></h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                <div>
                                    <p class="mb-0">Tenure upto</p>
                                    <h6 class="mb-0 fs-6"><strong><?php echo $bank['tenure']; ?></strong></h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6  col-6 text-center p-0">
                                <div>
                                    <p class="mb-0">Rate of Interest</p>
                                    <h6 class="mb-0 fs-6"><strong><?php echo $bank['roi']; ?></strong></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="service8 sp3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="project-details-box">
                    <div class="project-details-hadding">
                        <h6>Personal Loan Criteria For Salaried</h6>
                    </div>

                    <ul class="Category-list">
                        <li>
                            <p><strong>1. </strong> <span>Min. Salary: Rs.15,000 per month</span></p>
                        </li>
                        <li>
                            <p><strong>2. </strong> <span>Min. Job Stability: 1 Year </span></p>
                        </li>
                        <li>
                            <p><strong>3. </strong> <span>Age: 21 Years or above</span></p>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="project-details-box">
                    <div class="project-details-hadding">
                        <h6>Personal Loan Criteria For Self-Employed</h6>
                    </div>

                    <ul class="Category-list">
                        <li>
                            <p><strong>1. </strong> <span>Min. 1 Year IT Return</span></p>
                        </li>
                        <li>
                            <p><strong>2. </strong> <span>Min. Business Stability: 1 Year</span></p>
                        </li>
                        <li>
                            <p><strong>3. </strong> <span>Age: 21 Years or above</span></p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<!--=====testimonial start=======-->
<div class="tes6 sp3 bg-light d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="hadding2 text-center">
                    <h3>Trusted by Our Customers</h3>
                    <div class="space40"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="tes6-slider-all owl-carousel">
                <?php foreach ($testimoniallist as $row) { ?>
                <div class="tes6-single-slider">
                    <div class="tes6-slider-icon">
                        <img src="<?php echo base_url() ?>assets/img/icons/tes6-icon.svg" alt="">
                    </div>
                    <div class="space24"></div>
                    <p><?php echo $row->reviews; ?></p>

                    <div class="tes6-border"></div>

                    <div class="tes6-bottom-area">
                        <div class="tes6-bottom-hadding">
                            <div class="tes6-hadding">
                                <h5><?php echo $row->fullname; ?></h5>
                            </div>
                        </div>

                        <div class="tes6-icons">
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
<!--=====testimonial end=======-->
<div class="" id="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="space30"></div>
                <p class="mb-0"><strong>Disclaimer: </strong><?php echo COMPANY_NAME; ?> is not a lender or financial
                    institution. We do not provide loans or make credit decisions. All loan approvals, interest rates,
                    fees,
                    and disbursal are handled by third-party lenders/NBFCs. We do not guarantee loan approval,
                    disbursal, or
                    specific loan terms. The amount paid is only for the service charge. We are not lenders and do not
                    guarantee any loan approval. Loan approval, disbursement/sanction is entirely dependent on NBFC
                    criteria.</p>

                <p class="mb-0"><strong>Important Note: </strong>We ask our customers to make payments ONLY on our
                    website
                    <a class="text-dark" href="<?php echo COMPANY_SITE; ?>">cashindia.in</a> and NOT through any
                    other
                    source, directly or indirectly.
                </p>

                <p class="mb-0"><strong>Pre-application NOTE: </strong>Users are advised to read our terms and
                    conditions
                    and policies before proceeding/applying/registration.
                </p>

                <p class="mb-0"><strong>Registered Office Address : </strong><?php echo COMPANY_ADDRESS; ?></p>

                <p class="mb-0"><strong>Mobile : </strong><?php echo COMPANY_MOBILE; ?> | <strong>Email :
                    </strong><?php echo COMPANY_EMAIL; ?></p>
            </div>
        </div>
    </div>
</div>
<!--=====testimonial end=======-->
<?php endif; ?>

<script src="<?php echo base_url('assets/js/loanscript.js'); ?>" type="text/javascript"></script>

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
        messages: {
            username: {
                required: 'Please enter your full name'
            },
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
//owl-carousel-slider-home5
$(".offer").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 1000,
    slideSpeed: 600,
    responsive: {
        0: {
            items: 1,
        },
        900: {
            items: 1,
        },
    },
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