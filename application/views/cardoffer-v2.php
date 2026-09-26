<?php
$this->load->view('includes/header-apply.php');
?>

<div class="section-lg pt-50" id="monthly" style="background-image: url(<?php echo base_url() ?>assets/images/bg.png);">
	<div class="container">
		<div class="row g-4 mb-4">
			<div class="col-12 text-center">
				<h2 class="fw-light m-0 text-dark"><strong>Purchase Plan To View Your <span class="text-success">Pre-Approved Loan Offers</span></strong></h2>
				
			</div>
		</div>
		<div class="row g-4 ">
			<div class="col-12 col-md-6 col-sm-12 text-center">
				<div class="p-lg-5 hover-float p-4" style="border: 1px solid #2289a2;border-radius: 10px;">
					<?php echo form_open('pay/getcardoffer', array('id' => 'submitForm1', 'class' => '')); ?>
						<div class="form-group form-floating ">
							<input id="fullname" type="text" name="fullname" class="border-dark border-radius-1 "  placeholder="Full Name *" data-validation-regex-regex="^[a-zA-Z ]*$" data-validation-regex-message="Enter valid fullname" required>
							<div class="text-danger" id="fullname-message"></div>
						</div>

						<div class="form-group form-floating ">
							<input id="mobileno" type="text" name="mobileno" class="border-dark border-radius-1" placeholder="Mobile Number *" required minlength="10" maxlength="10" inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$" data-validation-regex-message="Enter valid mobile number" />
							<div class="text-danger" id="mobileno-message"></div>
						</div>

						<div class="form-group form-floating ">
							<input id="emailid" type="email" name="emailid" class="border-dark border-radius-1" placeholder="Email Id *" required />
							<div class="text-danger" id="emailid-message"></div>
						</div>

						<div class="form-group mb-4">
							<small class="text-dark">By submitting the form & proceeding, you agree to the <a href="<?= base_url('terms-conditions') ?>" target="_blank">Terms of Use</a> and <a href="<?= base_url('privacy-policy') ?>" target="_blank">Privacy Policy</a> of Fintopcorporate.</small>
						</div>

						<div class="form-group">
							<button type="submit" id="form-submit1" class="button-dark button-md button-radius button-turquiose">Process to Pay</button>
						</div>
						<?php echo form_close(); ?>
				</div>
			</div>
			<!-- Price box 2 -->
			<div class="col-12 col-md-6 col-sm-12">
				<div class="hover-float  p-4">
					<h3 class="mb-3">Subscription Plan </h3>
					<?php
					if ($productdata['inOffer'] == 1) {
						echo '<h4 class="text-success weight-400 fs-2"><del class="text-danger fs-5">&#8377; ' . formatePrice($productdata['amount']) . '</del> &nbsp; &#8377; ' . formatePrice($productdata['offeramount']) . '/- <span class="fs-5">'.calPercentage($productdata['amount'], $productdata['offeramount']).'OFF</span></h4>';
						$subtotal = $productdata['offeramount'];
					} else {
						echo '<h3 class="text-success">&#8377; ' . formatePrice($productdata['amount']) . '/-</h3>';
						$subtotal = $productdata['amount'];
					}
					?>

					<ul class="list-unstyled mt-4">
						<li class="text-success"><strong><i class="bi bi-check pe-2"></i>Subtotal : </strong><span class="text-dark">₹ <?php echo formatePriceIndia($subtotal); ?></span></a></li>
						<li class="text-success"><i class="bi bi-check pe-2"></i><strong>GST (18%) : </strong><span class="text-dark">₹ <?php $gst = $subtotal * 0.18; echo formatePriceIndia($gst); ?></span></li>
						<li class="text-success"><i class="bi bi-check pe-2"></i><strong>Grand Total :</strong> <span class="text-dark">₹ <?php $grandtotal = $subtotal + $gst; echo formatePriceIndia($grandtotal); ?></span></li>
						<li class="text-success"><span class="bi bi-check pe-2"></span><strong>Plan Validity : </strong> <span class="text-dark">6 months</span>
						</li>
						<li class="text-success"><span class="bi bi-check pe-2"></span><strong>Loan Process Time : </strong> <span class="text-dark">72 Hours</span>
						</li>
					</ul>
				</div>
			</div>
			
		</div><!-- end row -->
	</div><!-- end container -->
</div>

 <!-- Clients section -->
<div class="section-sm bg-gray">
	<div class="container">
		<div class="row text-center">
			<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 pb-4">
				<h1 class="fw-light m-0 text-dark">Our NBFC Partners</h1>
			</div>
		</div>
		<div class="owl-carousel bg-white  border-radius-1 box-shadow p-4" data-owl-dots="false" data-owl-nav="false" data-owl-margin="50" data-owl-autoplay="true" data-owl-items="4" data-owl-xs="2" data-owl-sm="2" data-owl-md="3" data-owl-lg="4" data-owl-xl="5">
			<?php foreach ($banklist as $row) { ?>
				<div class=" client-box">
					<img src="<?php echo base_url('assets/images/banks/' . $row->bank_image); ?>" alt="<?php echo $row->bank_name; ?>">
				</div>
			<?php } ?>
			
		</div>
	</div>
</div>
<!-- end Clients section -->
<?php
$this->load->view('includes/footer-apply.php');
?>

<script type="text/javascript">
	$.validator.addMethod("customMobile", function(value, element) {
		return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
	}, "Please enter a valid mobile number");

	$('#submitForm1').validate({
		rules: {
			mobileno: {
				required: true,
				digits: true,
				customMobile: true
			},
			fullname: {
				required: true,
			},
			emailid: {
				required: true,
				email: true,
			},
		},
		messages: {
			mobileno: {
				required: 'Please enter mobile number'
			},
			fullname: {
				required: 'Please enter full name'
			},
			emailid: {
				required: 'Please enter valid email address'
			},

		},
		errorPlacement: function(error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function(form) {
			$('#form-submit1').attr('disabled', true);
			$('#form-submit1').html('Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
	
			$('#submitForm1')[0].submit();
		}
	})
</script>
