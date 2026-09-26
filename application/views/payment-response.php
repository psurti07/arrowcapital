<?php $this->load->view('includes/header-apply.php'); ?>


<div class="section-lg">
	<div class="container">
		<div class="box-backdrop p-2 p-lg-4 ">
			<div class="row align-items-center">
				<div class="col-lg-12 col-md-12">
					<div class="bg-white border-radius p-4 p-lg-4 mb-2 text-center">
						<?php if ($responsedata == "true") { ?>
							<h2 class="fw-normal text-success p-2">Congratulations!</h2>
							<p>Your Loan Application Has Been Submitted Successfully.</p>
							<p class="mb-1">Please sign in to the customer portal using the credentials sent to your registered email address and upload the required documents. </p>	
					
							<p><small>For any further queries, raise a request here:
										<a href="<?php echo site_url('support/request'); ?>" class="more hover primary-color">Click Here</a>
								</small></p>
							<div class=" pt-3 text-center">
								<a class="button button-turquiose button-md button-radius" href="<?php echo site_url(); ?>">Go to Homepage</a>
							</div>	
						<?php } ?>
						<?php if ($responsedata == "false") { ?>
							<h2 class="fw-normal text-danger mb-4">Payment Failed!!! </h2>
							<p class="mb-1">Sorry, Your payment for the Subscription Plan has failed. Please try again.</p>
							<p class="mb-1">If you have any questions you can contact on our customer care number.</p>
						
							<div class=" pt-3 text-center">
								<a class="button button-turquiose button-md button-radius" href="<?php echo site_url('cardoffer'); ?>">Try Another Method</a>
							</div>	
						<?php } ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('includes/footer-apply.php'); ?>
