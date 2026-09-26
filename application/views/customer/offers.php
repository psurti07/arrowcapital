<?php $this->load->view('customer/includes/header-apply'); ?>
<div class="page-hero page-hero-inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-hero-haddig text-center">
                        <h1 class="text-dark">Apply Now</h1>
                    </div>
                </div>
            </div>
        </div>
      </div>

<!--=====service start=======-->
<div class="about-page-service sp3">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="">
                <div class="service1-box">
                  <div class="">
                    <div class="service1-box-icon">
                      <i class="fa-solid fa-info"></i>
                    </div>
                  </div>
                  <div class="hadding1 text-start">
				  	<h2>Personal Loan</a></h2>
                    <div class="space14"></div>
                      <a class="learn-more1" href="<?=base_url('customer/loan/reapplypersonal')?>">REAPPLY NOW<span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="">
                <div class="service1-box">
                  <div class="">
                    <div class="service1-box-icon">
                        <i class="fa-solid fa-info"></i>
                    </div>
                  </div>
                  <div class="hadding1 text-start">
                    <h2>Business Loan</a></h2>
                    <div class="space14"></div>
                      <a class="learn-more1" href="<?=base_url('customer/loan/reapplybusiness')?>">REAPPLY NOW<span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!--=====service end=======-->
<?php $this->load->view('customer/includes/footer-apply'); ?>
