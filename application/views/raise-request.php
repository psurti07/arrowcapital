<?php $this->load->view('includes/header.php'); ?>


<div class="section bg-lend-blue pt-0 pb-0">
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">Raise a Request</h1>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Career Image">
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <div class="col-12 col-lg-6 text-dark">
                <ul class="accordion single-open style-3">
                    <li>
                        <div class="accordion-title">
                            <h6 class="font-small fw-normal uppercase">I made the payment without understanding the
                                company’s services. Can I get a refund? </h6>
                        </div>
                        <div class="accordion-content">
                            <p>Your subscription plan payment is refundable in accordance with the company's
                                cancellation and refund policies only. <a
                                    href="<?php echo site_url('refund-policy'); ?>">Click here</a> to learn more about
                                the refund policies. </p>
                        </div>
                    </li>
                    <li>
                        <div class="accordion-title">
                            <h6 class="font-small fw-normal uppercase">Can I get a GST refund? </h6>
                        </div>
                        <div class="accordion-content">
                            <p>You can get a GST refund only if you have updated your GST information in your portal.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="accordion-title">
                            <h6 class="font-small fw-normal uppercase">I am not satisfied with the company’s services.
                                What should I do? &nbsp; </h6>
                        </div>
                        <div class="accordion-content">
                            <p>We request you to contact us on <a
                                    href="tel:<?= COMPANY_MOBILE ?>"><?= COMPANY_MOBILE ?>&nbsp;</a> between 10 AM and 5
                                PM - Monday to Saturday (only on business days), to discuss your concerns. We will make
                                every effort to provide you with appropriate solutions. </p>
                        </div>
                    </li>
                    <li>
                        <div class="accordion-title">
                            <h6 class="font-small fw-normal uppercase">I accidentally made multiple payments. What
                                should I do? Am I eligible for a refund? </h6>
                        </div>
                        <div class="accordion-content">
                            <p>If a customer makes more than one payment, they are eligible for a refund. To request a
                                refund, the customer must submit a request through the raise a request section within 48
                                hours, or call the company's registered mobile number. </p>
                        </div>
                    </li>
                    <li>
                        <div class="accordion-title">
                            <h6 class="font-small fw-normal uppercase">What if I buy membership/subscription from
                                multiple companies that belong to your group of companies? Am I eligible to get a
                                refund? </h6>
                        </div>
                        <div class="accordion-content">
                            <p>If a customer buys subscriptions or membership plans from multiple companies that belong
                                to our group of companies, they are liable to get a refund. To request a refund, the
                                customer must submit a request through the raise a request section within 48 hours or
                                call the company's registered mobile number. </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-6 border border-radius p-4 px-lg-5">
                <?=form_open('', array('id'=>'submitForm1', 'class'=>'form-style-5', 'novalidate'=>'novalidate')); ?>
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div>
                            <h5>I am,</h5>
                            <input type="radio" class="btn-check" name="options" id="1" checked>
                            <label class="btn btn-secondary" for="1">Customer</label>

                            <input type="radio" class="btn-check" name="options" id="0">
                            <label class="btn btn-secondary" for="0">Guest</label>
                        </div>
                    </div>
                    <input type="hidden" id="usertype" name="usertype" value="0">
                    <div class="col-lg-6 mb-2 input-single6">
                        <input id="fullname" name="fullname" type="text" class="form-control name"
                            placeholder="Fullname" required>
                        <div class="text-danger" id="fullname-message"></div>
                    </div>
                    <div class="col-lg-6 mb-2 input-single6">
                        <input id="emailid" name="emailid" type="text" class="form-control name" placeholder="Email"
                            required">
                        <div class="text-danger" id="emailid-message"></div>
                    </div>
                    <div class="col-lg-6 mb-2 input-single6">
                        <input id="mobile" type="text" name="mobile" class="numeric-input form-control mobile"
                            placeholder="Mobile" required minlength="10" maxlength="10" inputmode="numeric"
                            data-validation-regex-regex="^[6789]\d{9}$"
                            data-validation-regex-message="Enter valid mobile number">
                        <div class="text-danger" id="mobile-message"></div>
                    </div>
                    <div class="col-lg-6 mb-2 input-single6">
                        <input id="cardnumber" type="text" name="cardnumber" class="numeric-input form-control"
                            placeholder="Subscription Number" minlength="16" maxlength="16" inputmode="numeric">
                    </div>
                    <div class="col-lg-12 mb-2 input-single6">
                        <select class="custom-select w-100 custom-select-sm" id="issuetype" name="issuetype" required>
                            <option value="">Query Related To *</option>
                            <option value="Service Problem">Service Problem</option>
                            <option value="Payment Issue">Payment Issue</option>
                            <option value="Technical Problem">Technical Problem</option>
                            <option value="Eligibility or Pre-Approval Query">Eligibility or Pre-Approval Query</option>
                            <option value="GST Return Query">GST Return Query</option>
                            <option value="Other">Other</option>
                        </select>
                        <div class="text-danger" id="issuetype-message"></div>
                    </div>
                    <div class="col-12 mb-2 contact6-from-input">
                        <textarea id="message" name="message" class="form-control" placeholder="Request Message"
                            style="height: 150px" required minlength="50"></textarea>
                        <div class="text-danger" id="message-message"></div>
                    </div>
                    <div class="col-12">
                        <!-- full-btn  -->
                        <button type="submit" class="button-turquiose  button-md button-radius">
                            Submit
                        </button>
                    </div>
                    <p class="mb-0 mt-2 font-20 text-dark" id="responsemessage"></p>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer.php'); ?>
<script>
$(document).ready(function() {
    $('#myList li').click(function() {
        $('#usertype').val($(this).data('value'));
    });
    $.validator.addMethod("customMobile", function(value, element) {
        return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
    }, "Please enter a valid mobile number");
    $('.numeric-input').on('keydown', function(event) {
        if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <=
                '9'))) {
            event.preventDefault();
        }
    });
    $("#submitForm1").validate({
        rules: {
            fullname: {
                required: true,
            },
            emailid: {
                required: true,
                email: true,
            },
            mobile: {
                required: true,
                digits: true,
                customMobile: true
            },
            issuetype: {
                required: true
            },
            message: {
                required: true,
            }
        },
        errorPlacement: function(error, element) {
            var target = "#" + $(element).attr("id") + "-message";
            // alert(target)
            $(target).html(error);
        },
        submitHandler: function(form) {
            $.ajax({
                url: `<?php echo base_url('support/submitrequest')?>`,
                type: "POST",
                data: $(form).serialize(),
                dataType: "JSON",
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#form-submit1').html(
                        'SUBMITTING... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                        );
                    $('#form-submit1').attr('disabled', true);
                },
                success: function(response) {
                    if (response['success'] == true) {
                        toastr.success(response['message']);
                    } else {
                        toastr.error(response['message']);
                    }

                    $('#responsemessage').html(response['message']);

                    setTimeout(function() {
                        location.reload();
                    }, 10000);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    $('#form-submit1').html('SUBMIT REQUEST');
                    $('#form-submit1').attr('disabled', false);
                    toastr.error(errorThrown, 'ERROR');
                }
            });
        }
    })
})
</script>