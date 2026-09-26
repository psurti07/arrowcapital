<?php $this->load->view('customer/includes/header-apply.php'); ?>


<div class="section bg-lend-blue pt-0 pb-0" id="home">
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">License Agreement</h1>
                <p class=" font-16 text-light">These are our updated Terms & Conditions, please read and understand
                    them carefully and accept to use the portal.</p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Career Image">
            </div>
        </div>
    </div>
</div>


<div class="section-xs bg-gray">
    <div class=" backdrop-filter-blur">
        <div class="container">
            <div class="bg-white border-radius-1 box-shadow   p-4">
                <?php echo form_open('customer/dashboard/acceptlicence', array('id' => 'submitForm1', 'class' => ''));
						echo $contentdetails->option_value;
						?>

                <input type="hidden" name="customerid" id="customerid"
                    value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>

                <p class="mt-5 text-dark">If you accept the terms of the agreement, click "I Agree" to continue.</p>
                <div class="contact-form">
                    <div class="row g-4">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="agree" id="agree">
                                <label class="form-check-label text-dark" for="iagree">I accept the terms in the License
                                    Agreement.</label>
                                <div class="text-danger" id="agree-message"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <button class="button-dark button-md button-radius button-turquiose " id="form-submit2"
                                type="submit">I Agree</button>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('customer/includes/footer-apply.php'); ?>

<script>
$(document).ready(function() {
    $('#submitForm1').validate({
        rules: {
            agree: {
                required: true
            }

        },
        messages: {
            agree: {
                required: 'You must agree before submitting.'
            }

        },
        errorPlacement: function(error, element) {
            var target = "#" + $(element).attr("id") + "-message";
            // alert(target)
            $(target).html(error);
        },
        submitHandler: function(form) {
            $.ajax({
                url: `<?php echo base_url('customer/dashboard/acceptlicence') ?>`,
                type: "POST",
                data: $(form).serialize(),
                dataType: "JSON",
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#submit-btn2').html(
                        'Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                        );
                    $('#submit-btn2').attr('disabled', true);
                },
                success: function(response) {
                    if (response['success'] == true) {
                        if (response['redirect_url'] != "") {
                            window.location.href = `${base_url}` + response[
                                'redirect_url'];
                        } else {
                            window.location.reload();
                        }
                    } else {
                        $('#mobilenoError1').html(response['message']);
                        toastr.error(response['message']);
                    }

                    $('#submit-btn2').html('I Agree');
                    $('#submit-btn2').attr('disabled', false);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, 'ERROR');
                    $('#submit-btn2').html('I Agree');
                    $('#submit-btn2').attr('disabled', false);
                }
            });
        }
    });
});
</script>