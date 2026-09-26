<?php $this->load->view('customer/includes/header-apply.php'); ?>

<div class="section-sm bg-lend-blue pt-0 pb-0" id="home">
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">Pre-Approved Loan Offers</h1>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Career Image">
            </div>
        </div>
    </div>
</div>

<div class="section-padding pt-5 pb-5 bg-gray">
    <div class="container">
        <div class="row g-4">
            <?php if(count($directlinks)) { foreach ($directlinks as $row) { ?>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white border-radius-1 box-shadow p-4">
                    <div class="single-inner-service trans-1">
                        <div class="service-img">
                            <img src="<?php echo base_url('assets/images/banks/'.$row->bank_image); ?>" alt="">
                        </div>
                        <div class="service-content">
                            <a class="button button-md button-radius button-turquiose" href="<?php echo $row->applyurl; ?>" target="_blank">Apply
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</div>
<?php $this->load->view('customer/includes/footer-apply.php'); ?>
