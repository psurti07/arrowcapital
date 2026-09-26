<?php $this->load->view('includes/header-apply'); ?>

<div class="main-hero main-hero5 _relative">
    <div class="container">
        <div class="space20"></div>
        <div class="contact-form-all process-box">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hadding5">
                        <h2 class="text-center">Digital Personal Loan Application Process</h2>
                        <div class="space16"></div>
                        <p class="text-dark text-center">Share few details to avail your pre-approved loan offer</p>
                    </div>

                    <?php echo form_open('digital/userApply', array('id' => 'submitForm1', 'class' => '', 'novalidate' => 'novalidate')); ?>
                    <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                        class="form-control" required>
                    <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                        class="form-control" required>
                    <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                        class="form-control" required>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact5-form-input">
                                <select class="wide contact5-select " id="cibilscore" name="cibilscore" required>
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
                        </div>
                        <div class="col-lg-6">
                            <div class="contact5-form-input">
                                <input id="monincome" type="text" name="monincome" class="form-control"
                                    placeholder="Monthly Income *" required inputmode="numeric">
                                <div class="error-message" id="monincome-message"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact5-form-input">
                                <input id="monemi" type="text" name="monemi" class="form-control"
                                    placeholder="Current Monthly EMI *" required inputmode="numeric">
                                <div class="error-message" id="monemi-message"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact5-form-input">
                                <select class="wide contact5-select" id="loanpurpose" name="loanpurpose" required>
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
                        </div>
                        <div class="col-lg-12">
                            <div class="contact5-form-input">
                                <input id="pincode" type="text" name="pincode" maxlength="6" minlength="6"
                                    inputmode="numeric" class="form-control" placeholder="Pincode *" required>
                                <div class="error-message" id="pincode-message"></div>
                                <p class="pincode error text-danger text-start"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact5-form-input">
                                <input id="city" type="text" name="city" class="form-control" placeholder="City *"
                                    required style="background-color: #ffffff;">
                                <div class="error-message" id="city-message"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact5-form-input">
                                <input id="state" type="text" name="state" class="form-control" placeholder="State *"
                                    required style="background-color: #ffffff;">
                                <div class="error-message" id="state-message"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <div class="space24"></div>
                            <button id="form-submit1" class="button2">Check Eligibility</button>
                            <div class="space24"></div>
                        </div>

                    </div>
                    </form>
                </div>

                <div class="col-lg-4">
                    <div class="project-details-box">
                        <div class="project-details-hadding">
                            <h6 class="fs-5">User Details</h6>
                        </div>
                        <ul class="Category-list">
                            <li><strong>User Name: </strong> <span><?= $userdetails['fullname'] ?></span></li>
                            <li><strong>Mobile:</strong> <span><?= $userdetails['mobile'] ?></span></li>
                            <li><strong>Loan Type:</strong> <span><?php echo $userdetails['loanname']; ?> </span></li>
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
            preferred_datetime: {
                required: true
            },
            pincode: {
                required: true
            },
            city: {
                required: true
            },
            state: {
                required: true
            },
        },
        errorPlacement: function(error, element) {
            var target = "#" + $(element).attr("id") + "-message";
            $(target).html(error)
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
                        window.location.href = '<?php echo base_url()?>' + response
                            .redirect_url;
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