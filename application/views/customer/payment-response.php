<?php $this->load->view('customer/includes/header-apply'); ?>
<div class="welcome-3 bg2 py-100" id="home">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12">
				<div class="card border border-primary mb-3">
					<div class="card-body text-center">
						<?php if($responsedata == "true") { ?>
							<h2 class="display-3 text-success mb-4">Congratulations!</h2>
							<p class="mb-1">Your loan application has been submitted successfully.</p>
							<p>Please check your registered email address and log in to the customer portal to submit the necessary documents.</p>
							<hr class="my-4" />
							<p><small><strong>For any further queries, raise a request here: <a href="<?php echo site_url('support/request'); ?>" class="more hover link-primary">Click Here</a></strong></small></p>
							<a href="<?php echo site_url(); ?>" class="btn btn--theme btn-sm rounded-pill">Go to Homepage</a>
						<?php }
						else if($responsedata == "false") { ?>
							<h2 class="display-3 text-danger mb-4">Payment Unsuccessful</h2>
							<p class="mb-4">We regret to inform you that your payment for Subscription Plan was not successful.</p>
							<p>We request you to try another payment method.</p>
							<a href="<?php echo site_url('festivaloffer'); ?>" class="btn btn-primary btn-sm rounded-pill">Try Another Payment Method</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('customer/includes/footer-apply'); ?>
