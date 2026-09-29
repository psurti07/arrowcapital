<?php $this->load->view('includes/header.php'); ?>

<div class="section bg-blue pt-0 pb-0">
    <div class="container">
        <div class="row align-items-center pt-3">
            <div class="col-md-9 col-12">
                <h1 class="fw-medium text-dark">Disclaimer</h1>
            </div>
            <div class="col-md-3 col-12 d-none d-md-block d-lg-block">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Image">
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