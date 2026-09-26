<?php $this->load->view('customer/includes/header-apply');
	if($profiledata->cardtype == 12) {
		$loantype = "bl";
	}
	else {
		$loantype = "pl";
	}
?>
  <div class="page-hero page-hero-inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-hero-haddig text-center">
                        <h1 class="text-dark mt-3 mb-3">Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
      </div>

<!--=====projects start=======-->
<div class="projects sp3">
        <div class="container">

			<div class="row">
				<div class="col-lg-12">
					<?php if($kycstatus == 0) {  ?>
						<div class="alert alert-danger alert-icon" role="alert">
							<i class="fa fa-times-circle"></i>
							Your documents need to upload for KYC and verify your account.
							<a href="<?php echo site_url('customer/profile/documents'); ?>" class="alert-link hover">Upload Now</a>.
						</div>
					<?php } ?>

					<?php if($reapplystatus >= 90) { ?>
						<div class="alert alert-info alert-icon" role="alert">
							<i class="fa fa-times-hexagon"></i>
							As it has been 3 months since your last loan application,
							<strong>you're eligible to reapply</strong> for a loan.
							<a href="<?php echo site_url('customer/offers/preapproved'); ?>" class="alert-link hover">Apply Now</a>.
						</div>
					<?php } ?>

					<?php if($accountmsg->option_value != "" && strlen($accountmsg->option_value)>0) {  ?>
						<div class="alert alert-info alert-icon" role="alert">
							<span class="badge bg-primary text-dark">Important Update</span>
							<?php echo $accountmsg->option_value; ?>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="space100"></div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="project-all-box">
                        <div class="project-box ms-0 me-0 ps-4 pe-4">
                            <div class="project-hadding hadding2-w">
								<h4 class="text-light"><?php echo $statestics['personalloan']; ?></h4>
                                <h4 class="text-light">Personal Loan Applications</h4>
                                <div class="space14"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="project-all-box">
                        <div class="project-box ms-0 me-0 ps-4 pe-4">
                            <div class="project-hadding hadding2-w">
								<h4 class="text-light"><?php echo $statestics['businessloan']; ?></h4>
                                <h4 class="text-light">Business Loan Applications</h4>
                                <div class="space14"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>

				<div class="col-lg-4">
                    <div class="project-all-box">
                        <div class="project-box ms-0 me-0 ps-4 pe-4">
                            <div class="project-hadding hadding2-w">
								<h4 class="text-light"><?php echo $statestics['referalusers']; ?></h4>
                                <h4 class="text-light">Total Referral Customers</h4>
                                <div class="space14"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
     </div>

<?php $this->load->view('customer/includes/footer-apply');?>
