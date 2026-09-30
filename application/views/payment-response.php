<?php $this->load->view('includes/header-apply.php'); ?>


<div class="section-lg bg-light-green">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12 col-12 m-auto">
                <div class="bg-white rounded-4 border p-4 p-lg-4 mb-2 text-center">
                    <?php if ($responsedata == "true") { ?>
                    <div class="text-success mb-3">
                        <i class="far fa-check-circle display-3"></i>
                    </div>
                    <h2 class="fw-normal text-success p-2">Congratulations!</h2>

                    <p>Your payment has been successfully processed. <br>
                        You can now access your pre-approved offers</p>

                    <div class="row my-4">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <div
                                class="card-blog-wrapper border p-3 mb-sm-0 mb-3 bg-gray-lightest card shadow-none rounded-4">

                                <h6 class="mt-0 mb-1 fw-bold">Customer Portal</h6>
                                <p class="mb-0 fs-18 text-gray">Your service is active. Log in to the portal.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <div
                                class="card-blog-wrapper border p-3 mb-sm-0 mb-3 bg-gray-lightest card shadow-none rounded-4">

                                <h6 class="mt-0 mb-1 fw-bold">invoice</h6>
                                <p class="mb-0 fs-18 text-gray">Invoice is available for download in portal.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <div
                                class="card-blog-wrapper border p-3 mb-sm-0 mb-3 bg-gray-lightest card shadow-none rounded-4">

                                <h6 class="mt-0 mb-1 fw-bold">Consultant</h6>
                                <p class="mb-0 fs-18 text-gray">Our team will contact you within 24 hrs.</p>
                            </div>
                        </div>
                    </div>


                    <a href="#" class="button button-outline-white border button-md button-radius me-3 mb-lg-0 mb-3 text-dark"
                        class="more hover primary-color">having an issues ?</a>

                       <a class="button button-turquiose button-md button-radius" href="<?php echo site_url(); ?>">Go
                            to Homepage</a>
                   
                    <div class="mt-4">
                        <a href="#">Start a new application <i class="icon-arrow-right"></i></a>
                    </div>
                    <?php } ?>
                    <?php if ($responsedata == "false") { ?>
					 <div class="text-danger mb-3">
                     <i class="far fa-times-circle display-3"></i>
                    </div>
                    <h2 class="fw-normal text-danger mb-4">Payment Failed!!! </h2>
                    <p class="mb-2">We're sorry, but your payment could not be processed. <br> Please try again or contact our support team for assistance.</p>
                    <p class="mb-1">हमें खेद है, लेकिन आपका भुगतान प्रोसेस नहीं हो सका। कृपया पुनः प्रयास करें <br> या सहायता के लिए हमारी सपोर्ट टीम से संपर्क करें।</p>
<p>
	Common Reasons for Payment Failure:</p>
	    <div class="row my-4">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <div
                                class="card-blog-wrapper border p-3 mb-sm-0 mb-3 bg-color-pink-edge-01 card shadow-none rounded-4">

                                <h6 class="mt-0 mb-1 fw-bold text-dark">Card Issue</h6>
                                <p class="mb-0 fs-18 text-dark">Your service is active. Log in to the portal.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <div
                                class="card-blog-wrapper border p-3 mb-sm-0 mb-3 bg-color-pink-edge-01 card shadow-none rounded-4">

                                <h6 class="mt-0 mb-1 fw-bold text-dark">Network</h6>
                                <p class="mb-0 fs-18 text-dark">Invoice is available for download in portal.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                            <div
                                class="card-blog-wrapper border p-3 mb-sm-0 mb-3 bg-color-pink-edge-01 card shadow-none rounded-4">

                                <h6 class="mt-0 mb-1 fw-bold text-dark">Cancelled</h6>
                                <p class="mb-0 fs-18 text-dark">Our team will contact you within 24 hrs.</p>
                            </div>
                        </div>
                    </div>
					<p class="text-success border-success py-2 rounded-5 border d-inline-block px-3">Don't worry! No amount has been deducted from your account.
</p>
                    <div class=" pt-3 text-center">
						   <a href="#" class="button button-outline-white border button-md button-radius me-3 mb-lg-0 mb-3 text-dark"
                        class="more hover primary-color">having an issues ?</a>
                        <a class="button button-turquiose button-md button-radius"
                            href="<?php echo site_url('ivrpaymentoffer'); ?>">Try another payment method</a>
                    </div>

					

                     
                    <?php } ?>

                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('includes/footer-apply.php'); ?>