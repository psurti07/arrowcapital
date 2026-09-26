<?php $this->load->view('customer/includes/header-apply.php'); ?>
<div class="page-hero page-hero-inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-hero-haddig text-center">
                        <h1 class="text-dark">Subscription Plan</h1>
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
					<div class="price-body">
						<h4>Subscription Details</h4>
						<ul class="Category-list">							
							<li><b class="float-left">Plan : </b><?php echo ($plandata->cardtype == 12) ? 'Business Subscription Plan' : 'Personal Subscription Plan'; ?></li>
							<li><b class="float-left">Registration Date :</b>&nbsp; <?php echo displayDate($plandata->registration_date); ?></li>
							<li><b class="float-left">Expiry Date :</b>&nbsp; <?php echo displayDate($plandata->expiry_date); ?> </li>
							<li><b class="float-left">Subscription Id :</b>&nbsp; <?php echo $plandata->card_number; ?></li>
						</ul>
						<a href="<?php echo base_url('customer/profile/invoice/'.stringCrypt($plandata->id, 'encrypt')); ?>" class="button-h-2 btnfos2 mt-4" target="_blank">Download Invoice</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="contact-form-all aos-init aos-animate">
					<div class="price-body">
						<h4>Plan Benefits</h4>
						<ul class="Category-list">
							<li>
								<span class="pricing-icon">
									<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
								</span>
								100% Online Process
							</li>
							<li>
								<span class="pricing-icon">
									<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
								</span>
								Get Personalized Tracking Portal
							</li>
							<li>
								<span class="pricing-icon">
									<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
								</span>
								On-Call Expert Consultation
							</li>
							<li>
								<span class="pricing-icon">
									<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
								</span>
								Dedicated Loan Expert Assigned
							</li>
							<li>
								<span class="pricing-icon">
									<img src="<?=base_url('assets/img/icons/double-check2.png')?>" alt="">
								</span>
								CIBIL Remains Unaffected
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('customer/includes/footer-apply.php'); ?>
