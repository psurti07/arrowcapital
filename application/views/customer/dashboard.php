<?php $this->load->view('customer/includes/header-apply.php');
	if($profiledata->cardtype == 12) {
		$loantype = "bl";
	}
	else {
		$loantype = "pl";
	}
?>
<div class="section-sm bg-lend-blue pt-0 pb-0" id="home">
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">Dashboard</h1>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Career Image">
            </div>
        </div>
    </div>
</div>

<div class="section-md	 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if($kycstatus == 0) {  ?>
                <div class="alert alert-danger alert-icon" role="alert">
                    <i class="fa fa-times-circle"></i>
                    Your documents need to upload for KYC and verify your account.
                    <a href="<?php echo site_url('customer/profile/documents'); ?>" class="alert-link hover">Upload
                        Now</a>.
                </div>
                <?php } ?>

                <?php if($reapplystatus >= 90) { ?>
                <div class="alert alert-info alert-icon" role="alert">
                    <i class="fa fa-times-hexagon"></i>
                    As it has been 9 months since your last loan application,
                    <strong>you're eligible to reapply</strong> for a loan.
                    <a href="<?php echo site_url('customer/offers/preapproved'); ?>" class="alert-link hover">Apply
                        Now</a>.
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
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="bg-white border-radius-1 box-shadow  m-2 p-3">
                    <div>
                        <h3><?php echo $statestics['personalloan']; ?></h3>
                    </div>
                    <div>
                        <h4>Personal Loan Applications</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="bg-white border-radius-1 box-shadow  m-2 p-3">
                    <div>
                        <h3><?php echo $statestics['businessloan']; ?></h3>
                    </div>
                    <div>
                        <h4>Business Loan Applications</h4>
                    </div>
                </div>
            </div>
            <?php
			$hidedata = 0; // 0 = show, 1 = Hide
			if ($hidedata == 0) {
				?>
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="bg-white border-radius-1 box-shadow  m-2 p-3">
                    <div>
                        <h3><?php echo $statestics['referalusers']; ?></h3>
                    </div>
                    <div>
                        <h4>Total Referral Customers</h4>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php
			$hidedata = 0; // 0 = show, 1 = Hide
			if ($hidedata == 0) {
				?>
        <div class="row pt-5">
            <div class="col-lg-12">
                <div class="bg-white border-radius-1 box-shadow p-4	">
                    <div>
                        <h4>Refer and Earn up to Rs 1 Lac per month</h4>
                        <input type="text" name="referrallink" class="form-control 	border-radius-1 "
                            value="<?php echo base_url('digital/referral/'.$profiledata->refcode); ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php $this->load->view('customer/includes/footer-apply.php');?>