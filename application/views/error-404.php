<?php $this->load->view('includes/header'); ?>
<div class="error-page section-padding bg-13">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <div class="404 text-center">
            <img src="<?php echo base_url()?>assets/img/404.svg" alt="" />
          </div>
        </div>
      </div>
      <div class="row">
      <div class="error">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="error-hadding">404</h1>
                    <h2 class="error-page-hadding2">PAGE NOT FOUND</h2>
                    <div class="space16"></div>
                    <div class="page-hadding">
                        <p>Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>
                    </div>
                    <div class="space30"></div>
                    <a href="<?php echo base_url();?>" class="comon-button">Back To Home</a>
                </div>
            </div>
        </div>
       </div>
      </div>
    </div>
  </div>
<?php $this->load->view('includes/footer'); ?>>