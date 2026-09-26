<?php $this->load->view('customer/includes/header-apply.php'); ?>
<div class="section-sm bg-lend-blue pt-0 pb-0" id="home">
	<div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">Subscription Plan</h1>
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
			<div class="col-lg-6">
				<div class="bg-white border-radius-1 box-shadow p-5">
					<div class="price-body">
						<h4>Subscription Details</h4>
						<ul class="list-unstyled text-dark">							
							<p>Plan : <?php echo ($plandata->cardtype == 12) ? 'Business Subscription Plan' : 'Personal Subscription Plan'; ?></p>
							<li><i class="bi bi-check pe-2"></i><b class="float-left">Registration Date :</b>&nbsp; <?php echo displayDate($plandata->registration_date); ?></li>
							<li><i class="bi bi-check pe-2"></i><b class="float-left">Expiry Date :</b>&nbsp; <?php echo displayDate($plandata->expiry_date); ?> </li>
							<li><i class="bi bi-check pe-2"></i><b class="float-left">Subscription Id :</b>&nbsp; <?php echo $plandata->card_number; ?></li>
						</ul>
						<a href="<?php echo base_url('customer/profile/invoice/'.stringCrypt($plandata->id, 'encrypt')); ?>" class="button button-lg button-radius button-turquiose mt-3" target="_blank">Download Invoice</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="bg-white border-radius-1 box-shadow p-5">
					<div class="price-body">
						<h4>Plan Benefits</h4>
						<ul class="list-unstyled text-dark">
							<li><i class="bi bi-check pe-2"></i>100% Online Process</li>
							<li><i class="bi bi-check pe-2"></i>Get Personalized Tracking Portal</li>
							<li><i class="bi bi-check pe-2"></i>On-Call Expert Consultation</li>
							<li><i class="bi bi-check pe-2"></i>Dedicated Loan Expert Assigned</li>
							<li><i class="bi bi-check pe-2"></i>CIBIL Remains Unaffected</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('customer/includes/footer-apply.php'); ?>
