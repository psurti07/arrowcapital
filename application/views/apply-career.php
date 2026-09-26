<?php $this->load->view('includes/header.php');?>
<div class="inner-1 bg-13" id="home">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 m-auto">
				<div class="inner-title text-center">
					<p><i class="fa fa-bookmark"></i> <?php echo $jobdetails->slug; ?> <i class="uil uil-clock me-1"></i> Full time</p>
					<h2 class="mt-4"><?php echo $jobdetails->title; ?></h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contact-boxes padding-bottom2">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mt-lg--60 mt-lg--30">
				<div class="single-contact-box p-5">
					<h2 class="mb-4">Job Description</h2>
					<?php echo $jobdetails->descriptions; ?>
				</div>
			</div>
			<div class="col-lg-6 mt-lg--60 mt-lg--30">
				<div class="single-contact-box p-5">
					<h2 class="mb-4">Apply Now</h2>
					<form action="" id="submitForm2" class="" enctype="multipart/form-data" novalidate="novalidate" method="post" accept-charset="utf-8">
						<input type="hidden" name="id" value="<?php echo $jobdetails->id; ?>" class="form-control" required>
						<input type="hidden" name="slug" value="<?php echo $jobdetails->slug; ?>" class="form-control" required>
						<div class="main-form">
							<div class="row">
								<div class="col-lg-6 mb-4">
									<input id="firstname" type="text" name="firstname" class="form-control" placeholder="First Name *" required=""">
									<div class="error-message text-danger" id="firstname-message"></div>
								</div>
								<div class="col-lg-6 mb-4">
									<input id="lastname" type="text" name="lastname" class="form-control" placeholder="Last Name *" required=""">
									<div class="error-message text-danger" id="lastname-message"></div>
								</div>
								<div class="col-lg-6 mb-4">
									<input id="emailid" type="email" name="emailid" class="form-control" placeholder="Email *" required="">
									<div class="error-message text-danger" id="emailid-message"></div>
								</div>
								<div class="col-lg-6 mb-4">
									<input id="mobile" type="text" name="mobile" class="numeric-input form-control" placeholder="Mobile *" required="" minlength="10" maxlength="10" inputmode="numeric">
									<div class="error-message text-danger" id="mobile-message"></div>
								</div>
								<div class="col-lg-6 mb-4">
									<input id="city" type="text" name="city" class="form-control" placeholder="City" required="">
									<div class="error-message text-danger" id="city-message"></div>
								</div>
								<div class="col-lg-6 mb-4">
									<input id="qualifications" type="text" name="qualifications" class="form-control" placeholder="Qualifications *" required="">
									<div class="error-message text-danger" id="qualifications-message"></div>
								</div>
								<div class="col-lg-12 mb-4">
									<textarea id="experience" name="experience" class="form-control" placeholder="Your Experience" style="height: 100px" required=""></textarea>
									<div class="error-message text-danger" id="experience-message"></div>
								</div>
								<div class="col-lg-12 mb-4">
									<textarea id="keyskills" name="keyskills" class="form-control" placeholder="Your Key Skills" style="height: 100px" required=""></textarea>
									<div class="error-message text-danger" id="keyskills-message"></div>
								</div>
								<div class="col-lg-12 mb-4">
									<input id="resume" type="file" name="resume" class="form-control" placeholder="Upload Resume *" accept=".pdf,.doc,.docx," required="">
									<div class="error-message text-danger" id="resume-message"></div>
								</div>
								<div class="col-lg-12">
									<label for="iagree" class="font-12">By submitting the form &amp; proceeding, you agree to the <a href="<?=base_url('terms-conditions')?>" target="_blank" class="text-dark">Terms of Use</a> and <a href="<?=base_url('privacy-policy')?>" target="_blank" class="text-dark">Privacy Policy</a> of Fintopcorporate.co.in</label>
								</div>
								<div class="col-lg-12 mt-5">
									<button class="button button-radius button-sm button-backdrop-dark" id="submit-btn2">APPLY NOW</button>
									<div id="applymessage" class="mt-3 font-14 text-success"></div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('includes/footer.php');?>
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
