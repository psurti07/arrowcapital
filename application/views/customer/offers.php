<?php $this->load->view('customer/includes/header-apply.php'); 

 $pllink = $bllink = "#";
    
    if($profiledata->cardtype == 11) {
    	$pllink = site_url('customer/onlineprocess/personalLoan');
    	$bllink = site_url('customer/onlineprocess/businessLoan');
    }
    else if($profiledata->cardtype == 12) {
    	$pllink = site_url('customer/onlineprocess/personalLoan');
    	$bllink = site_url('customer/onlineprocess/businessloan');
    }
?>

<div class="section-sm bg-lend-blue pt-0 pb-0" id="home">
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">Apply Now</h1>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Career Image">
            </div>
        </div>
    </div>
</div>

<div class="section-xl bg-gray">
    <div class="container">
        <div class="row icon-5xl g-4">
            <div class="col-12 col-lg-6">
                <div class="bg-white border border-radius hover-shadow hover-float p-4 p-lg-5">
                    <i class="bi bi-briefcase text-gradient-6"></i>
                    <h5 class="fw-normal mt-2">Personal Loan</h5>
                    <p class="pt-2"><a href="<?php echo $pllink; ?>"
                            class="button button-md button-backdrop-color-blue font-14">REAPPLY NOW <span><i
                                    class="fa-solid fa-arrow-right"></i></a></p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="bg-white border border-radius hover-shadow hover-float p-4 p-lg-5">
                    <i class="bi bi-briefcase text-gradient-6"></i>
                    <h5 class="fw-normal mt-2">Business Loan</h5>
                    <p class="pt-2"><a href="<?php echo $bllink; ?>"
                            class="button button-md button-backdrop-color-blue font-14">REAPPLY NOW <span><i
                                    class="fa-solid fa-arrow-right"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('customer/includes/footer-apply.php'); ?>