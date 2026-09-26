<?php $this->load->view('includes/header.php'); ?>

<div class="section bg-lend-blue pt-0 pb-0">
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">Cancellation &amp; Refund Policy</h1>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Career Image">
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 text-dark">
                <?=$contentdetails->option_value;?>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('includes/footer.php'); ?>