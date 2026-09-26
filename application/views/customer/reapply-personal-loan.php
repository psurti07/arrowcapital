<?php $this->load->view('customer/includes/header-apply'); ?>
<div class="page-hero page-hero-inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-hero-haddig text-center">
                        <h1 class="text-dark">Reapply Personal Loan</h1>
                    </div>
                </div>
            </div>
        </div>
</div>

 <!--=====service start=======-->
 <div class="service4 sp3">
        <div class="container">
            <div class="row">
				<?php if(count($directlinks)) { foreach ($directlinks as $row) { ?>
					<div class="col-lg-4 text-center">
						<div class="">
							<div class="service4-box" style="border:1px solid;">
								<div class="">
									<img src="<?php echo base_url('assets/img/banks/'.$row->bank_image); ?>" alt="">
								</div>
								<div class="hadding4">
									<div class="space14"></div>
									<div class="space24"></div>
										<a class="read-more4" href="<?php echo $row->applyurl; ?>">Apply Now<span><i class="fa-solid fa-arrow-right"></i></span></a>
								</div>
							</div>
						</div>
					</div>
				<?php } } ?>
            </div>
        </div>
    </div>
<?php $this->load->view('customer/includes/footer-apply'); ?>
