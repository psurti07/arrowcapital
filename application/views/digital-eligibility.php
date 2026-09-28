<?php $this->load->view('includes/header-apply.php'); ?>

<div class="section  flex-fill pt-3 pt-md-5 bg-light-green">
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
                                    <div class="cbox-12-ico bg-color-purple rounded-pill"><span class="fbox-ico ico-9 lh-1"><i class="fas fa-arrow-right fa-sm"></i></span>
                                    </div>
                                </div>
                                <div class="cbox-12-txt mb-0 ms-2">
                                    <p class="s-11 color--white mb-0">Personal Details</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step d-flex mb-2">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico bg-gray-lightest rounded-pill border"><span
                                            class="fbox-ico ico-9 lh-1"><i class="fas fa-arrow-right fa-sm"></i></span></div>
                                </div>
                                <div class="cbox-12-txt mb-0 ms-2">
                                    <p class="s-11 color--grey mb-0">Unlock Offers</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step d-flex mb-2">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico bg-gray-lightest rounded-pill border"><span
                                            class="fbox-ico ico-9 lh-1"> <i class="fas fa-arrow-right fa-sm"></i></span></div>
                                </div>
                                <div class="cbox-12-txt mb-0 ms-2">
                                    <p class="s-11 color--grey mb-0">Purchase Plan</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step d-flex mb-2">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico bg-gray-lightest rounded-pill border"><span
                                            class="fbox-ico ico-9 lh-1"> <i class="fas fa-arrow-right fa-sm"></i></span></div>
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

                <div class="bg-white border rounded-4 shadow p-4 p-lg-4 mb-2 hover-float">
                    <div class="row align-items-start pb-3">
                        <div class="d-flex align-items-start mb-4">
                            <div>
                                <div class="icon staticts-card bg-color-very-peri mb-0">
                                    <i class="far fa-file-alt text-white fs-4"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h2 class="fw-bold mb-0"><?= $userdetails['loanname']; ?></h2>
                                <p class="text-dark">Just a few more details to get pre-approved loan offer from our
                                    Partnered NBFCs</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <?php echo form_open('digital/userApply', array('id' => 'submitForm1', 'class' => '', 'novalidate' => 'novalidate')); ?>
                        <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                            class="form-control" required>
                        <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                            class="form-control" required>
                        <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                            class="form-control" required>

                        <div class="row gx-3 gy-0">
                            <div class="col-md-6 col-sm-12 pt-2">
                                <label class="form-control pt-0 ps-0 pb-2 bg-transparent">CIBIL Score</label>
                                <select class="custom-select w-100 border" id="cibilscore" name="cibilscore"
                                    required="">
                                    <option value="">Cibil Score *</option>
                                    <option value="Below 650">Below 650</option>
                                    <option value="650 - 700">650 - 700</option>
                                    <option value="700 - 750">700 - 750</option>
                                    <option value="750 - 800">750 - 800</option>
                                    <option value="800 - 850">800 - 850</option>
                                    <option value="850 - 900">850 - 900</option>
                                </select>
                                <div class="error-message" id="cibilscore-message"></div>
                            </div>
                            <div class="col-md-6 col-sm-12 pt-2">
                                <label class="form-control pt-0 ps-0 pb-2 bg-transparent" for="monincome">Monthly Income
                                    (₹)</label>
                                <input id="monincome" type="text" name="monincome" class="form-control border"
                                    placeholder="Monthly Income *" required inputmode="numeric">
                                <div class="error-message" id="monincome-message"></div>
                            </div>
                            <div class="col-md-6 col-sm-12 pt-2">
                                <label class="form-control pt-0 ps-0 pb-2 bg-transparent" for="monemi">Current Monthly
                                    EMI (₹)</label>
                                <input id="monemi" type="text" name="monemi" class="form-control border"
                                    placeholder="Current Monthly EMI *" required inputmode="numeric">
                                <div class="error-message" id="monemi-message"></div>
                            </div>
                            <div class="col-md-6 col-sm-12 pt-2">
                                <label class="form-control pt-0 ps-0 pb-2 bg-transparent" for="loanpurpose">Loan
                                    Purpose</label>
                                <select class="custom-select w-100 border" id="loanpurpose" name="loanpurpose" required>
                                    <option selected value="">Select Loan Purpose *</option>
                                    <?php if ($userdetails['loantype'] == 12) { ?>
                                    <option value="Business Expansion">Business Expansion</option>
                                    <option value="Maintain Cash Flow">Maintain Cash Flow</option>
                                    <option value="Supplier Payments">Supplier Payments</option>
                                    <option value="Setup Manufacturing Unit">Setup Manufacturing Unit</option>
                                    <option value="Hiring Budget">Hiring Budget</option>
                                    <option value="Other">Other</option>
                                    <?php } else { ?>
                                    <option value="Personal Use">Personal Use</option>
                                    <option value="Property Renovation">Property Renovation</option>
                                    <option value="Marriage Purpose">Marriage Purpose</option>
                                    <option value="Education Purpose">Education Purpose</option>
                                    <option value="Medical Emergency">Medical Emergency</option>
                                    <option value="Other">Other</option>
                                    <?php } ?>
                                </select>
                                <div class="error-message" id="loanpurpose-message"></div>
                            </div>
                            <div class="col-md-6 col-sm-12 pt-2">
                                <label class="form-control pt-0 ps-0 pb-2 bg-transparent" for="pincode">Pincode</label>
                                <input id="pincode" type="text" name="pincode" maxlength="6" minlength="6"
                                    inputmode="numeric" class="form-control border" placeholder="Pincode *" required>
                                <div class="error-message" id="pincode-message"></div>
                                <p class="pincode error text-danger text-start"></p>
                            </div>
                            <div class="col-md-6 col-sm-12 pt-2">
                                <label class="form-control pt-0 ps-0 pb-2 bg-transparent" for="city">City</label>
                                <input id="city" type="text" name="city" class="form-control border"
                                    placeholder="City *" required style="background-color: #ffffff;">
                                <div class="error-message" id="city-message"></div>
                            </div>
                            <div class="col-md-6 col-sm-12 pt-2">
                                <label class="form-control pt-0 ps-0 pb-2 bg-transparent" for="state">State</label>
                                <input id="state" type="text" name="state" class="form-control border"
                                    placeholder="State *" required style="background-color: #ffffff;">
                                <div class="error-message" id="state-message"></div>
                            </div>

                            <!-- <div class="col-md-6 col-sm-12 pt-2">
									<select class="custom-select w-100 border" id="state" name="state" required>
										<option value="">Select State *</option>
										<?php echo getStateOption(); ?>
									</select>
									<div class="error-message" id="state-message"></div>
								</div> -->


                            <div class="col-lg-12">
                                <div class="card otp-velidation-text rounded-4 bg-gray-lightest mb-0">
                                    <div class="card-body p-3">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7 col-md-12 col-sm-12 col-12  mb-lg-0 mb-3">
                                                <div class="d-flex align-items-center">
                                                    <i class="fas fa-bullseye text-gradient-6 mt-2"></i>

                                                    <div class="ms-3">
                                                        <p class="mb-0 font-small">Soft check only — won't impact
                                                            your credit
                                                            score. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12 text-end">
                                                <button class="button-dark button-lg button-radius button-turquiose w-100 text-uppercase"
                                                    id="form-submit1" type="submit">Check Eligibility <i class="fas fa-arrow-right ms-2"></i></button>
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
<script>
$(document).ready(() => {
    $('#submitForm1').validate({
        rules: {
            cibilscore: {
                required: true
            },
            monincome: {
                required: true,
                digits: true
            },
            monemi: {
                required: true,
                digits: true
            },
            loanpurpose: {
                required: true
            },
            city: {
                required: true
            },
            state: {
                required: true
            }
        },
        errorPlacement: function(error, element) {
            var target = "#" + $(element).attr("id") + "-message";
            $(target).html(error);
        },
        submitHandler: function(form) {
            $.ajax({
                url: `<?php echo base_url('digital/userApply') ?>`,
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
                    if (response.success == true) {
                        window.location.href = `${base_url + response.redirect_url}`;
                    } else {
                        toastr.error(response['message']);
                    }

                    $('#form-submit1').html('Check Eligibility');
                    $('#form-submit1').attr('disabled', false);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, 'ERROR');
                    $('#form-submit1').html('Check Eligibility');
                    $('#form-submit1').attr('disabled', false);
                }
            })
        }
    })
})
</script>

<script>
$('#pincode').on('input', function() {

    var pincode = $(this).val();

    if (pincode.length === 6) {

        $.ajax({
            url: "<?= base_url('digital/geoLocation') ?>",
            type: "POST",
            data: {
                pincode: pincode
            },
            dataType: "json",

            success: function(response) {

                if (response.status === 'success') {
                    $('#city').val(response.city);
                    $('#state').val(response.state);
                    $('.pincode').text('');
                } else {
                    $('#city').val('');
                    $('#state').val('');
                    $('.pincode').text('Enter valid pincode.');
                }
            },

            error: function() {
                $('.pincode').text('Enter valid pincode.');
            }
        });

    } else {
        $('#city').val('');
        $('#state').val('');
    }
});
</script>