<?php $this->load->view('customer/includes/header-apply'); ?>
<div class="page-hero page-hero-inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-hero-haddig text-center">
                        <h1 class="text-dark">Support</h1>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="pricing-area pricing2 section-padding2 bg5">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="contact-form-all aos-init aos-animate">
					<form id='submitForm' class='' method="post">
					<div class="price-body">
						<h4>Profile Details</h4>
						<input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" required>
						<div class="main-form">
							<div class="row">
								<div class="col-lg-12 mb-4">
									<select class="wide contact5-select" id="issuetype" name="issuetype" required>
										<option value="">Query Related To</option>
										<option value="Service Problem">Service Problem</option>
										<option value="Payment Issue">Payment Issue</option>
										<option value="Technical Problem">Technical Problem</option>
										<option value="Eligibility or Pre-Approval Query">Eligibility or Pre-Approval Query</option>
										<option value="GST Return Query">GST Return Query</option>
										<option value="Other">Other</option>
									</select>
									<div class="error-message" id="issuetype-message"></div>
								</div>
								<div class="col-lg-12 mb-4">
									<textarea id="message" name="message" class="form-control" required placeholder="Request message in minimum 50 characters" style="height: 100px"></textarea>
									<div class="error-message" id="message-message"></div>
								</div>
								<div class="col-lg-12">
									<button type="submit" id="form-submit" class="button-h-2 btnfos2">Submit Request</button>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="contact-form-all aos-init aos-animate">
					<div class="price-body">
						<ul class="Category-list">
							<li><strong><?=COMPANY_NAME?></strong></li>
							<li><strong>LLP No.:</strong>&nbsp;<?=COMPANY_LLP?></li>
							<li><i class="fa fa-phone-alt"></i> &nbsp;&nbsp;<?=COMPANY_MOBILE?></li>
							<li><i class="fa fa-envelope-open"></i> &nbsp;&nbsp;<?=COMPANY_EMAIL?></li>
							<li><i class="fa fa-clock"></i> &nbsp;&nbsp;<?=COMPANY_TIMING?></li>
							<li style="line-height:1.8rem"><i class="fa fa-map-marked"></i><span style="margin-left:10px"><?=COMPANY_ADDRESS?></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('customer/includes/footer-apply'); ?>
<script>
	$(document).ready(function(){
		$('#submitForm').validate({
			rules:{
				issuetype: { required: true },
				message: { required: true }
			},
			errorPlacement: function (error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				$(target).html(error);
			},
			submitHandler: function (form) {
				$.ajax({
					url : `<?php echo base_url('customer/support/submitrequest')?>`,
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
						$('#form-submit').html('Submit Request');
						$('#form-submit').attr('disabled', false);
					},
					error: function (jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit').html('Submit Request');
						$('#form-submit').attr('disabled', false);
					}
				});
			}
		})
	})
</script>
