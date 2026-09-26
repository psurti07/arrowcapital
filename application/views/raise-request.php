<?php $this->load->view('includes/header'); ?>
<div class="contact-page-all sp4">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 m-auto text-center">
				<div class="hadding2 text-center">
					<h1>Raise a Request</h1>
				</div>
			</div>
		</div>
		<div class="space40"></div>
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="accordion" id="accordionExample">
					<?php
					if (count($faqlist)) {
						$cnt = 1;
						foreach ($faqlist as $row) {
							$acc_heading = "headingOne" . $cnt;
							$acc_collapse = "collapseOne" . $cnt;
							?>
							<div class="accordion-item accordion-item">
								<h2 class="accordion-header accordion-header2" id="headingOne">
									<button class="accordion-button accordion-button3" id="<?php echo $acc_heading; ?>"
										type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $acc_collapse; ?>"
										aria-expanded="false" aria-controls="<?php echo $acc_collapse; ?>">
										<?php echo $row->faq_question; ?>
									</button>
								</h2>
								<div id="<?php echo $acc_collapse; ?>" class="accordion-collapse collapse"
									aria-labelledby="<?php echo $acc_heading; ?>" data-bs-parent="#accordionExample">
									<div class="accordion-body accordion-body2">
										<?php echo $row->faq_answer; ?>
									</div>
								</div>
							</div>
							<?php $cnt++;
						}
					} ?>

				</div>

			</div>
			<div class="col-lg-6">
				<div class="page-hadding contact2-form-box-all" style="border: 1px solid;">
					<?php echo form_open('support/submitrequest', array('id' => 'submitForm1', 'class' => 'p-cb contact-form', 'novalidate' => 'novalidate')); ?>
					<div class="checkout-heads">
						<div class="row">
							<div class="col-lg-12">
								<h5>I am,</h5>
								<div class="form-group create-account mt-3 mb-3">
									<input type="radio" name="usertype" class="inputradio radio-color" id="Customer"
										value="1" style="width:unset">
									<label for="Customer">Customer</label>
									<input id="guest-user" type="radio" name="usertype"
										class="inputradio radio-color second-radio" value="0" style="width:unset"
										checked>
									<label for="guest-user">Guest User</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 mb-3">
								<div class="checkout-input form-group">
									<label for="fullname">Your Fullname</label>
									<input id="fullname" name="fullname" type="text" class="form-control name"
										placeholder="Fullname" required>
									<div class="error-message" id="fullname-message"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 mb-3">
								<div class="checkout-input form-group">
									<label for="emailid">Your Email Id</label>
									<input id="emailid" name="emailid" type="text" class="form-control name"
										placeholder="Email" required>
									<div class="error-message" id="emailid-message"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 mb-3">
								<div class="checkout-input form-group">
									<label for="mobile">Your Mobile</label>
									<input id="mobile" type="text" name="mobile"
										class="numeric-input form-control mobile" placeholder="Mobile" required
										minlength="10" maxlength="10" inputmode="numeric"
										data-validation-regex-regex="^[6789]\d{9}$"
										data-validation-regex-message="Enter valid mobile number">
									<div class="error-message" id="mobile-message"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 mb-3">
								<div class="checkout-input form-group">
									<label for="cardnumber">Your Subscription Number</label>
									<input id="cardnumber" type="text" name="cardnumber"
										class="numeric-input form-control" placeholder="Subscription Number"
										minlength="16" maxlength="16" inputmode="numeric">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 mb-3">
								<div class="checkout-input-select form-group">
									<label for="issuetype">Select Issue Type</label>
									<select class="wide form-control" id="issuetype" name="issuetype" required>
										<option value="">Query Related To *</option>
										<option value="Service Problem">Service Problem</option>
										<option value="Payment Issue">Payment Issue</option>
										<option value="Technical Problem">Technical Problem</option>
										<option value="Eligibility or Pre-Approval Query">Eligibility or Pre-Approval
											Query</option>
										<option value="GST Return Query">GST Return Query</option>
										<option value="Other">Other</option>
									</select>
									<div class="error-message" id="issuetype-message"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 mb-3">
								<div class="checkout-input form-group">
									<label for="message">Your Message</label>
									<textarea id="message" name="message" class="form-control"
										placeholder="Request Message" style="height: 150px" required
										minlength="50"></textarea>
									<div class="error-message" id="message-message"></div>
								</div>
							</div>
						</div>

						<button type="submit" class="button-h-2 btnfos2">Submit</span>
						</button>
						<div class="space30"></div>

					</div>

					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('includes/footer'); ?>
<script type="text/javascript">
	$(document).ready(function () {

		$.validator.addMethod("customMobile", function (value, element) {
			return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
		}, "Please enter a valid mobile number");

		$('.numeric-input').on('keydown', function (event) {
			if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <= '9'))) {
				event.preventDefault();
			}
		});

		$("#submitForm1").validate({
			rules: {
				fullname: { required: true, },
				emailid: { required: true, email: true, },
				mobile: { required: true, digits: true, customMobile: true },
				issuetype: { required: true },
				message: { required: true, }
			},
			errorPlacement: function (error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				// alert(target)
				$(target).html(error);
			},
			submitHandler: function (form) {
				$.ajax({
					url: `<?php echo base_url('support/submitrequest') ?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function () {
						$('#form-submit1').html('SUBMITTING... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#form-submit1').attr('disabled', true);
					},
					success: function (response) {
						if (response['success'] == true) {
							toastr.success(response['message']);
						}
						else {
							toastr.error(response['message']);
						}

						$('#responsemessage').html(response['message']);

						setTimeout(function () {
							location.reload();
						}, 3000);
					},
					error: function (jXHR, textStatus, errorThrown) {
						$('#form-submit1').html('SUBMIT REQUEST');
						$('#form-submit1').attr('disabled', false);
						toastr.error(errorThrown, 'ERROR');
					}
				});
			}
		})
	})
</script>
