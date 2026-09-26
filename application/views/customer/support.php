<?php $this->load->view('customer/includes/header-apply.php'); ?>
<div class="section-sm bg-lend-blue pt-0 pb-0" id="home">
	<div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">Support</h1>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Career Image">
            </div>
        </div>
    </div>
</div>

<div class="section-md bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="bg-white border-radius-1 box-shadow p-5">
					<form id='submitForm' class='' method="post">
					<div class="price-body">
						<h4>Profile Details</h4>
						<input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" required>
						<div class="main-form">
							<div class="row">
								<div class="col-lg-12 mb-4">
									<select class="custom-select w-100" id="issuetype" name="issuetype" required>
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
									<button type="submit" id="form-submit" class="button button-lg button-radius button-turquiose">Submit Request</button>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="bg-white border-radius-1 box-shadow p-5">
					<div class="price-body">
						<ul class="list-unstyled">
							<li><strong><?=COMPANY_NAME?></strong></li>
							<li><strong>CIN No.:</strong>&nbsp;<?=COMPANY_CIN?></li>
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
<?php $this->load->view('customer/includes/footer-apply.php'); ?>
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
