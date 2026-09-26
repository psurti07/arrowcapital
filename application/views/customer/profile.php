<?php $this->load->view('customer/includes/header-apply'); ?>
<div class="page-hero page-hero-inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-hero-haddig text-center">
                        <h1 class="text-dark">My Profile</h1>
                    </div>
                </div>
            </div>
        </div>
      </div>
<div class="pricing-area pricing2 section-padding2 bg5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="contact-form-all aos-init aos-animate">
					<div class="price-body main-form">
						<form method='post' id='contactForm' class='mt-sm-0 contact-form'>
							<input type="hidden" name="customerid" id="customerid" value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
							<div class="row">
								<div class="col-lg-12 mb-3">
									<div class="product-size">
										<h5>Profile Details</h5>
									</div>
								</div>
								<div class="col-lg-6 mb-3">
									<label class="text-dark">Registration On - <?php echo displayDate($profiledata->rec_date); ?></label>
								</div>
								<div class="col-lg-6 mb-3">
									<label class="text-dark">Mobile No - <?php echo $profiledata->mobile; ?></label>
								</div>
								<div class="col-lg-6 mb-3">
									<div class="contact5-form-input">
										<input id="fullname" type="text" name="fullname" class="form-control" placeholder="Name *" required="" value="<?php echo $profiledata->fullname; ?>">
										<div class="error-message" id="fullname-message"></div>
									</div>
								</div>
								<div class="col-lg-6 mb-3">
									<div class="contact5-form-input">
										<input id="emailid" type="email" name="emailid" class="form-control" placeholder="Email Id *" value="<?php echo $profiledata->email; ?>">
										<div class="error-message" id="emailid-message"></div>
									</div>
								</div>
								<div class="col-lg-6 mb-3">
									<div class="contact5-form-input">
										<input id="city" type="text" name="city" class="form-control" placeholder="City *" required="" aria-invalid="false" value="<?php echo $profiledata->city; ?>">
										<div class="error-message" id="city-message"></div>
									</div>
								</div>
								<div class="col-lg-6 mb-3">
									<div class="contact5-form-input">
										<select name="state" aria-required="true" id="state" class="wide contact5-select" required>
										<option value="">State</option>
										<?php echo getStateOption($profiledata->state); ?>
										</select>
										<div class="error-message" id="state-message"></div>
									</div>
								</div>
								<div class="col-lg-12 s-18">
									<button type="submit" id="form-submit" class="button-h-2 btnfos2">UPDATE</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="contact-form-all aos-init aos-animate">
					<div class="price-body main-form">
						<form method='post' id='submitForm' class =''>
							<input type="hidden" name="customerid" id="customerid" value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
							<div class="row">
								<div class="col-lg-12 mb-4">
									<div class="product-size">
										<h5>Change Password</h5>
									</div>
								</div>
								<div class="col-lg-12 mb-2">
									<div class="contact5-form-input">
										<input id="password" type="password" name="password" class="form-control" placeholder="New Password *" value="" required="">
										<div class="error-message" id="password-message"></div>
									</div>
								</div>
								<div class="col-lg-12 mb-2">
									<div class="contact5-form-input">
										<input id="retypepassword" type="password" name="retypepassword" class="form-control" placeholder="Retype Password *" value="" required="">
										<div class="error-message" id="retypepassword-message"></div>
									</div>
								</div>
								<div class="col-lg-12 mt-4">
									<button type="submit" id="form-submit1" class="button-h-2 btnfos2">CHANGE</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('customer/includes/footer-apply'); ?>
<script>
	$(document).ready(function(){
		$("#contactForm").validate({
			rules:{
				fullname:{required:true},
				emailid:{required:true,},
				city:{required:true},
				state:{required:true}
			},
			errorPlacement: function (error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				$(target).html(error);
			},
			submitHandler: function (form) {
				$.ajax({
					url : `<?php echo base_url('customer/profile/changeprofile')?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData:false,
					beforeSend: function(){
						$('#form-submit').html('SUBMITTING... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#form-submit').attr('disabled', true);
					},
					success: function (response) {
						if(response['success'] == true) {
							toastr.success(response['message']);
							setTimeout(function() {
								location.reload();
							}, 2000);
						}
						else {
							toastr.error(response['message']);
						}
						$('#form-submit').html('CHANGE');
						$('#form-submit').attr('disabled', false);
					},
					error: function (jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit').html('CHANGE');
						$('#form-submit').attr('disabled', false);
					}
				})
			}
		})
		$("#submitForm").validate({
			rules:{
				password:{required:true},
				retypepassword:{required:true, equalTo:'#password'}
			},
			errorPlacement: function (error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				$(target).html(error);
			},
			submitHandler: function (form) {
				$.ajax({
					url : `<?php echo base_url('customer/profile/changepassword')?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData:false,
					beforeSend: function(){
						$('#form-submit1').html('SUBMITTING... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#form-submit1').attr('disabled', true);
					},
					success: function (response) {
						if(response['success'] == true) {
							toastr.success(response['message']);
							setTimeout(function() {
								location.reload();
							}, 2000);
						}
						else {
							toastr.error(response['message']);
						}
						$('#form-submit1').html('CHANGE');
						$('#form-submit1').attr('disabled', false);
					},
					error: function (jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit1').html('CHANGE');
						$('#form-submit1').attr('disabled', false);
					}
				});
			}
		})
	});
</script>
