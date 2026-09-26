<?php $this->load->view('includes/header-apply.php'); ?>

<!--=====service start=======-->
<div class="main-hero main-hero5 _relative">
	<div class="container">
		<div class="space30"></div>
		<div class="row">
			<div class="col-lg-12">
				<div class="">
					<?php if ($responsedata == "true") { ?>
						<div class="contact-form-all">
							<div class="hadding1 text-center">
								<div class="space24"></div>
								<h1 class="square text-success">Congratulations!</h1>
								<div class="space24"></div>
								<p class="mb-1">Your loan application has been submitted successfully.</p>
								<p>Please log in to the customer portal with the credentials sent to your registered email address and
									upload the required documents</p>
								<div class="space14"></div>
								<p><small><strong>If you have any further questions, please submit a request here: <a
												href="<?php echo site_url('support/request'); ?>" class="hover text-dark">Click
												Here</a></strong></small></p>
								<div class="space24"></div>
								<a class="button-h-2 btnfos2" href="<?php echo site_url(); ?>">Go to the Homepage</a>
								<div class="space24"></div>
							</div>
						</div>
					<?php } ?>
					<?php if ($responsedata == "false") { ?>
						<div class="contact-form-all">
							<div class="hadding1 text-center">
								<div class="space24"></div>
								<h1 class="square text-danger">Payment Unsuccessful</h1>
								<div class="space14"></div>
								<p class="mb-1">Sorry, Your Subscription Plan Payment Was Not Successful.</p>
								<p>We request you to try another payment method.</p>
								<div class="space24"></div>
								<a href="<?php echo site_url('cardoffer'); ?>" class="button-h-2 btnfos2">Try Another Payment Method</a>
								<div class="space24"></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--=====service end=======-->

<?php $this->load->view('includes/footer-apply.php'); ?>
