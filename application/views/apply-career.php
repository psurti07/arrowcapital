<?php $this->load->view('includes/header');?>
<div class="page-hero page-hero-inner-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-hero-haddig text-center">
					<p><i class="fa fa-bookmark"></i> <?php echo $jobdetails->slug; ?> <i class="uil uil-clock me-1"></i> Full time</p>
					<h2><?php echo $jobdetails->title; ?></h2>
				</div>
			</div>
		</div>
	</div>
</div>

<!--=====contact start=======-->

<div class="contact5 sp3">
	<div class="container">
	<div class="contact-form-all">
		<div class="row align-items-center">
		<div class="col-lg-6">

			<div class="hadding5">
			<h3>Send Us A Message</h3>
			<div class="space16"></div>
			<p>Our response time is within 30 minutes during business hours</p>
			</div>

			<form action="" id="submitForm2" class="" enctype="multipart/form-data" novalidate="novalidate" method="post" accept-charset="utf-8">
			<input type="hidden" name="id" value="<?php echo $jobdetails->id; ?>" class="form-control" required>
			<input type="hidden" name="slug" value="<?php echo $jobdetails->slug; ?>" class="form-control" required>
			<div class="row">
					<div class="col-lg-6 contact5-form-input">
						<input id="firstname" type="text" name="firstname" class="form-control" placeholder="First Name *" required="">
						<div class="error-message" id="firstname-message"></div>
					</div>
					<div class="col-lg-6 contact5-form-input">
						<input id="lastname" type="text" name="lastname" class="form-control" placeholder="Last Name *" required="">
						<div class="error-message" id="lastname-message"></div>
					</div>
					<div class="col-lg-12 contact5-form-input">
						<input id="emailid" type="email" name="emailid" class="form-control" placeholder="Email *" required="">
						<div class="error-message" id="emailid-message"></div>
					</div>
					<div class="col-lg-12 contact5-form-input">
						<input id="mobile" type="text" name="mobile" class="numeric-input form-control" placeholder="Mobile *" required="" minlength="10" maxlength="10" inputmode="numeric">
						<div class="error-message" id="mobile-message"></div>
					</div>
					<div class="col-lg-12 contact5-form-input">
						<input id="city" type="text" name="city" class="form-control" placeholder="City *" required="">
						<div class="error-message" id="city-message"></div>
					</div>
					<div class="col-lg-12 contact5-form-input">
						<input id="qualifications" type="text" name="qualifications" class="form-control" placeholder="Qualifications *" required="">
						<div class="error-message" id="qualifications-message"></div>
					</div>
					<div class="col-lg-12 contact5-form-input">
						<textarea id="experience" name="experience" class="form-control" placeholder="Your Experience *" style="height: 100px" required=""></textarea>
						<div class="error-message" id="experience-message"></div>
					</div>
					<div class="col-lg-12 contact5-form-input">
						<textarea id="keyskills" name="keyskills" class="form-control" placeholder="Your Key Skills *" style="height: 100px" required=""></textarea>
						<div class="error-message" id="keyskills-message"></div>
					</div>
					<div class="col-lg-12 contact5-form-input">
						<input id="resume" type="file" name="resume" class="form-control" placeholder="Upload Resume *" accept=".pdf,.doc,.docx," required="">
						<div class="error-message" id="resume-message"></div>
					</div>
					<div class="col-lg-12">
						<label for="iagree" class="font-12">By submitting the form &amp; proceeding, you agree to the <a href="<?=base_url('terms-conditions')?>" target="_blank" class="text-dark">Terms of Use</a> and <a href="<?=base_url('privacy-policy')?>" target="_blank" class="text-dark">Privacy Policy</a> of Cashindia.in</label>
					</div>
					<div class="col-lg-12">
						<div class="space24"></div>
						<button class="button-h-2 btnfos2">Submit Now</button>
					</div>
			</div>
			</form>
		</div>

		<div class="col-lg-6">
			<div class="contact5-boxs contact7-boxs">
			<div class="contact5-icon-box">
				<div class="contact5-box-hadding">
					<h3>Telecaller Eligibility:</h3>
					<div class="space5"></div>
					<p>1. Clear Speech</p>
					<p>2. Good Communication Skills</p>
					<p>3. Minimum Qualification – 10th Pass</p>
					<p>4. Minimum Experience – Freshers Can Apply</p>
				</div>
			</div>

			<div class="contact5-icon-box mt-1">
				<div class="contact5-box-hadding">
					<h3>Job Role:</h3>
					<div class="space5"></div>
					<p>Calling Customers and Informing them about the Company's Products/Services. Receive Calls and Solve Queries.</p>
				</div>
			</div>

			<div class="contact5-icon-box mt-1">
				<div class="contact5-box-hadding">
					<h3>Note:</h3>
					<div class="space5"></div>
					<p>Final Selection and Incentive depend on the candidate’s skill – judged by the company once the interview is done.</p>
					<p>Job Timing - 09:30 AM To 06:30 PM (Monday to Saturday).</p>
				</div>
			</div>

			<div class="contact5-icon-box mt-1">
				<div class="contact5-box-hadding">
					<h3>Company Location:</h3>
					<div class="space5"></div>
					<p><?php echo COMPANY_ADDRESS;?></p>
				</div>
			</div>

			<div class="contact5-icon-box mt-1">
				<div class="contact5-box-hadding">
					<h3>Interview Time:</h3>
					<div class="space5"></div>
					<p>10:30 AM To 11:00 AM <br/>
					4:00 PM To 4:30 PM <br/>(Monday To Saturday)</p>
				</div>
			</div>

			</div>
		</div>
		</div>
	</div>

	</div>
</div>
<!--=====contact end=======-->

<?php $this->load->view('includes/footer');?>
<script>
	$(document).ready(function(){
		$.validator.addMethod("customMobile", function (value, element) {
			return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
		}, "Please enter a valid mobile number");
		$('.numeric-input').on('keydown', function(event) {
			if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <= '9'))) {
				event.preventDefault();
			}
		});
		$("#submitForm2").validate({
			rules:{
				firstname:{required: true},
				lastname:{required: true},
				emailid:{required: true, email: true},
				mobile:{required: true, digits: true, customMobile: true},
				city:{required: true},
				qualifications:{required: true},
				experience:{required: true},
				keyskills:{required: true},
				userfile:{required: true},
			},
			errorPlacement: function (error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				// alert(target)
				$(target).html(error);
			},
			submitHandler: function(form){
				var formData = new FormData($(form)[0]);
				$.ajax({
					url : `<?php echo base_url('apply/careerSubmission') ?>`,
					type: "POST",
					data: formData,
					async: true,
					dataType: "JSON",
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function(){
						$('#submit-btn2').html('Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#submit-btn2').attr('disabled', true);
					},
					success: function (response) {
						if(response['success'] == true) {
							document.getElementById("submitForm2").reset();
							toastr.success(response['message']);
						}
						else {
							toastr.error(response['message']);
						}
						document.getElementById("applymessage").innerHTML = response['message'];
						$('#submit-btn2').html('APPLY NOW');
						$('#submit-btn2').attr('disabled', false);
					},
					error: function (jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#submit-btn2').html('APPLY NOW');
						$('#submit-btn2').attr('disabled', false);
					}
				});
			}
		})
	})
</script>
