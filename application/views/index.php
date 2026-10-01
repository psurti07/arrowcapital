<?php $this->load->view('includes/header.php'); ?>


<div class="section-lg hero-bg-image">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-12 col-lg-6 col-md-6">

                <h1 class="fw-medium">Your Financial Journey, Supported by Experts.</h1>
                <p>Get professional guidance to explore financial solutions based on your requirements.</p>
                <a class="button button-md button-radius button-turquiose mt-3 mt-lg-4"
                    href="<?= base_url('digital/applynow') ?>">Get Consultation Now
                </a>
            </div>

            <div class="col-12 col-lg-6 col-md-6">
                <img class="border-radius-1" src="<?= base_url('assets/images/slider/home-img-1.png') ?>" alt="">
            </div>
        </div>
    </div>
</div>


<div class="section pt-0">
    <div class="container">
        <div class="n-margin-5">
            <div class="row g-4 icon-5xl">
                <div class="col-12 col-lg-4 col-md-4">
                    <div
                        class="bg-white-09 backdrop-filter-blur box-shadow p-4 p-lg-5 border-radius-1 hover-float mt-lg-3">
                        <div class="mb-3">
                            <i class="bi bi-diagram-3 text-gradient-6"></i>
                        </div>
                        <h5 class="font-family-outfit fw-medium">Multiple Lending Options</h5>
                        <p>Explore financial options available through participating banks and NBFCs based on applicable eligibility criteria.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4">
                    <div class="bg-white-09 backdrop-filter-blur box-shadow p-4 p-lg-5 border-radius-1 hover-float">
                        <div class="mb-3">
                            <i class="bi bi-globe2 text-gradient-6"></i>
                        </div>
                        <h5 class="font-family-outfit fw-medium">Simple Digital Process</h5>
                        <p>Submit your details online and receive guidance through each step of the application process.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4">
                    <div
                        class="bg-white-09 backdrop-filter-blur box-shadow p-4 p-lg-5 border-radius-1 hover-float mt-lg-3">
                        <div class="mb-3">
                            <i class="bi bi-person-bounding-box text-gradient-6"></i>
                        </div>
                        <h5 class="font-family-outfit fw-medium">Expert Financial Guidance</h5>
                        <p>Get clear guidance to better understand your financial options and next steps.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Us start -->
<div class="section" id="company">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-12 col-lg-7 col-md-7 mt-0">
                <h6
                    class="d-inline-block bg-white box-shadow border-radius px-3 py-2 line-height-140 font-small uppercase letter-spacing-1 mb-3">
                    <span class="text-gradient-6">ABOUT US</span>
                </h6>
                <h2>Arrow Capital: Simplifying Your Financial Journey</h2>
                <p class="mb-3">Arrow Capital provides financial consultation and application assistance to help customers explore suitable financial options. Through participating banks and NBFCs, we support customers in understanding available solutions, documentation requirements, and the overall application process.
                </p>
                <p class="">Our focus is on making financial services easier to understand through a simple digital process, transparent communication, and professional guidance. Final eligibility, terms, and approval remain subject to the respective lender’s policies and assessment.
                </p>
                <a class="button button-lg button-radius button-font-2 button-turquiose mt-4 text-uppercase"
                    href="<?= base_url('digital/applynow') ?>">Get Consultation Now</a>
            </div>

            <div class="col-12 col-lg-5 col-md-5 icon-5xl">
                <div class="card bg-color-theme-02 mb-3">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="d-inline-block me-4">
                                <i class="bi bi-eye text-gradient-6"></i>
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-medium text-dark mt-2">VISION</h5>
                                <p class="text-dark">To create a simple and transparent platform where customers can explore financial options and make informed decisions with professional support.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-color-theme-02 mb-3 pl-0 pl-lg-3 pl-md-3">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="d-inline-block me-4">
                                <i class="bi bi-bullseye text-gradient-6"></i>
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-medium text-dark mt-2">MISSION</h5>
                                <p class="text-dark">To provide clear consultation, digital application assistance, and access to options from participating financial institutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-color-theme-02">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="d-inline-block me-4">
                                <i class="bi bi-boxes text-gradient-6"></i>
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-medium text-dark mt-2">VALUES</h5>
                                <p class="text-dark">We focus on clear communication, responsible guidance, customer support, and maintaining transparency throughout the financial application journey.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clients section -->
<div class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 text-center mb-4">
                <h2>Our NBFC Partners</h2>
                <p>Explore financial options available through participating banks and NBFCs.</p>
            </div>

            <div class="col-12 col-lg-12 text-center">
                <div class="owl-carousel" data-owl-nav="true" data-owl-dots="false" data-owl-margin="50"
                    data-owl-autoplay="true" data-owl-items="4" data-owl-xs="2" data-owl-sm="2" data-owl-md="3"
                    data-owl-lg="4" data-owl-xl="5">
                    <?php foreach ($banklist as $row) { ?>
                    <div class="client-box">
                        <img src="<?php echo base_url('assets/images/banks/' . $row->bank_image); ?>"
                            alt="<?php echo $row->bank_name; ?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Process start -->
<div class="section bg-white" id="process">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 text-center mb-4">
                <h6
                    class="d-inline-block bg-white box-shadow border-radius px-3 py-2 line-height-140 font-small uppercase letter-spacing-1 mb-3">
                    <span class="text-gradient-6">Our Process</span>
                </h6>
                <h2>Simple Steps. Smooth Application Process.</h2>
                <p>Your Financial Journey in 6 Simple Steps</p>
            </div>

            <div class="col-12 col-lg-12">
                <div class="row g-5 d-flex justify-content-center">
                    <div class="row icon-3xl g-4 g-lg-5 mt-3">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="bg-white-09 border-radius p-4 box-shadow hover-float">
                                <div class="circle-box-lg mb-3">
                                    <img class="img-fluid"
                                        src="<?php echo base_url('assets/images/icons/step-1.png'); ?>" alt="">
                                </div>
                                <h5 class="fw-medium mt-2 text-dark">Easy Registration</h5>
                                <p>Start your process by just entering your few basic details, like your bank-registered
                                    name, mobile number, etc.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="bg-white-09 border-radius p-4 box-shadow hover-float">
                                <div class="circle-box-lg mb-3">
                                    <img class="img-fluid"
                                        src="<?php echo base_url('assets/images/icons/step-2.png'); ?>" alt="">
                                </div>
                                <h5 class="fw-medium mt-2 text-dark">Check Eligibility</h5>
                                <p>Our system will determine your eligibility
                                    and display pre-approved loan offers based
                                    on the information you entered.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="bg-white-09 border-radius p-4 box-shadow hover-float">
                                <div class="circle-box-lg mb-3">
                                    <img class="img-fluid"
                                        src="<?php echo base_url('assets/images/icons/step-3.png'); ?>" alt="">
                                </div>
                                <h5 class="fw-medium mt-2 text-dark">Get Subscription Plan</h5>
                                <p>Purchase the Capital Mani Subscription Plan
                                    to gain access to pre-approved loan offers
                                    with convenient payment options.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="bg-white-09 border-radius p-4 box-shadow hover-float">
                                <div class="circle-box-lg mb-3">
                                    <img class="img-fluid"
                                        src="<?php echo base_url('assets/images/icons/step-4.png'); ?>" alt="">
                                </div>
                                <h5 class="fw-medium mt-2 text-dark">Document Submission</h5>
                                <p>Submit your documents using the credentials sent to your registered email address.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="bg-white-09 border-radius p-4 box-shadow hover-float">
                                <div class="circle-box-lg mb-3">
                                    <img class="img-fluid"
                                        src="<?php echo base_url('assets/images/icons/step-5.png'); ?>" alt="">
                                </div>
                                <h5 class="fw-medium mt-2 text-dark">Bank Verification</h5>
                                <p>The NBFC will verify your documents and your profile following their guidelines.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="bg-white-09 border-radius p-4 box-shadow hover-float">
                                <div class="circle-box-lg mb-3">
                                    <img class="img-fluid"
                                        src="<?php echo base_url('assets/images/icons/step-6.png'); ?>" alt="">
                                </div>
                                <h5 class="fw-medium mt-2 text-dark">Bank Sanction</h5>
                                <p>The NBFC will make the final decision and then sanction and disburse the funds.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 text-center mb-4">
                <h6 class="d-inline-block line-height-140 font-small uppercase letter-spacing-1 mb-3">
                    <span class="text-gradient-6">EMI Calculator</span>
                </h6>
                <h2>Estimate Your EMI in Seconds</h2>
                <p>Get a quick estimate before making your next move.</p>
            </div>

            <div class="col-12 col-lg-12">
                    <!-- EMI Calculator Widget START -->
                    <script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js" type="text/javascript">
                    </script>
                    <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
                        <div id="ecww-widget"
                            style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;">
                        </div>
                    </div>
                    <!-- EMI Calculator Widget END -->
            </div>
        </div>
    </div>
</div>

<!-- Apply Now start -->
<div class="section" id="plans">
    <div class="container">
        <div class="bg-white p-4 p-lg-5 border-radius-1 box-shadow">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-md-4 text-center">
                    <div class="gallery-wrapper">
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="<?php echo base_url('assets/images/slider/Home-2.png'); ?>" class="img-fluid">
                            </div>
                            <div class="mt-4">
                                <?php
										if ($productdata->offeramount != 0) {
											echo '<h3 class="line-height-100 fw-medium mb-0">₹. <del class="text-danger">' . $productdata->amount . '</del> <span class="text-success">' . $productdata->offeramount . '</span> only</h3>';
										} else {
											echo '<h3>Rs. ' . $productdata['amount'] . ' only</h3>';
										}
									?>
                            </div>
                        </div>
                    </div>
                    <a class="button button-lg button-radius button-turquiose mt-3 mt-lg-3"
                        href="<?= base_url('digital/applynow') ?>">Get Consultation Now</a>
                </div>
                <div class="col-md-8">
                    <h6
                        class="d-inline-block bg-white box-shadow border-radius px-3 py-2 line-height-140 font-small uppercase letter-spacing-1 mb-3">
                        <span class="text-gradient-6">SUBSCRIPTION PLAN</span>
                    </h6>
                    <h2>Explore Financial Options with Confidence</h2>
                    <p>Access professional financial consultation and application assistance to explore suitable options from participating lenders.</p>

                    <ul class="list-unstyled mt-3">
                        <li><i class="bi bi-check-circle-fill text-color-theme me-2"></i>Access to Multiple NBFCs</li>
                        <li><i class="bi bi-check-circle-fill text-color-theme me-2"></i>Dedicated Consultation Support</li>
                        <li><i class="bi bi-check-circle-fill text-color-theme me-2"></i>Application & Documentation Guidance</li>
                        <li><i class="bi bi-check-circle-fill text-color-theme me-2"></i>Simple Digital Process</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial section -->
<div class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 text-center mb-4">
               <h6
                    class="d-inline-block bg-white box-shadow border-radius px-3 py-2 line-height-140 font-small uppercase letter-spacing-1 mb-3">
                    <span class="text-gradient-6">Testimonial</span>
                </h6> 
                <h2>Our happy <span class="text-gradient-6"> customers</span></h2>
          

            </div>

            <div class="col-12 col-lg-12">
                <div class="owl-carousel" data-owl-dots="false" data-owl-nav="false" data-owl-margin="30"
                    data-owl-xs="1" data-owl-sm="1" data-owl-md="1" data-owl-lg="2" data-owl-xl="2">
                    <!-- Testimonial Slider Item 1 -->
                    <div class="bg-color-theme-02 border-radius p-4 p-md-5 p-lg-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-inline-block me-3">
                                <img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                    alt="testimonials">
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-normal mb-1 line-height-140 text-dark">Rohan Mehta</h5>
                                <span class="font-small text-white-09 text-dark">
                                    <div class="d-block text-golden-yellow">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p class="text-dark">“The consultation helped me understand different financial options clearly. The process was simple and the guidance was easy to follow.”</p>
                    </div>
                    <!-- Testimonial Slider Item 2 -->
                    <div class="bg-color-theme-02 border-radius p-4 p-md-5 p-lg-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-inline-block me-3">
                                <img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                    alt="testimonials">
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-normal mb-1 line-height-140 text-dark">Neha Kapoor</h5>
                                <span class="font-small text-white-09 text-dark">
                                    <div class="d-block text-golden-yellow">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p class="text-dark">“I appreciated the clear explanation and professional support. It made the overall application process much easier to understand.”</p>
                    </div>
                    <!-- Testimonial Slider Item 3 -->
                    <div class="bg-color-theme-02 border-radius p-4 p-md-5 p-lg-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-inline-block me-3">
                                <img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                    alt="testimonials">
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-normal mb-1 line-height-140 text-dark">Kunal Sharma</h5>
                                <span class="font-small text-white-09 text-dark">
                                    <div class="d-block text-golden-yellow">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p class="text-dark">“The team guided me through the required steps and documents. I found the experience smooth and well organized.”</p>
                    </div>
                    <!-- Testimonial Slider Item 4 -->
                    <div class="bg-color-theme-02 border-radius p-4 p-md-5 p-lg-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-inline-block me-3">
                                <img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                    alt="testimonials">
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-normal mb-1 line-height-140 text-dark">Priya Nair</h5>
                                <span class="font-small text-white-09 text-dark">
                                    <div class="d-block text-golden-yellow">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p class="text-dark">“I received helpful guidance based on my requirements. The consultation was straightforward and informative.”</p>
                    </div>
                    <!-- Testimonial Slider Item 5 -->
                    <div class="bg-color-theme-02 border-radius p-4 p-md-5 p-lg-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-inline-block me-3">
                                <img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                    alt="testimonials">
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-normal mb-1 line-height-140 text-dark">Amit Bansal</h5>
                                <span class="font-small text-white-09 text-dark">
                                    <div class="d-block text-golden-yellow">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p class="text-dark">“The digital process was convenient, and I got proper assistance whenever I had questions about the application.”</p>
                    </div>
                    <!-- Testimonial Slider Item 6 -->
                    <div class="bg-color-theme-02 border-radius p-4 p-md-5 p-lg-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-inline-block me-3">
                                <img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                    alt="testimonials">
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-normal mb-1 line-height-140 text-dark">Sneha Iyer</h5>
                                <span class="font-small text-white-09 text-dark">
                                    <div class="d-block text-golden-yellow">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p class="text-dark">“What I liked most was the clear communication. Every step was explained properly without making the process confusing.”</p>
                    </div>

                    <div class="bg-color-theme-02 border-radius p-4 p-md-5 p-lg-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-inline-block me-3">
                                <img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                    alt="testimonials">
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-normal mb-1 line-height-140 text-dark">Harsh Patel</h5>
                                <span class="font-small text-white-09 text-dark">
                                    <div class="d-block text-golden-yellow">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p class="text-dark">“The consultation gave me a better understanding of the available financial options and what to consider before proceeding.”</p>
                    </div>
                    <div class="bg-color-theme-02 border-radius p-4 p-md-5 p-lg-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-inline-block me-3">
                                <img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                    alt="testimonials">
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-normal mb-1 line-height-140 text-dark">Ritika Malhotra</h5>
                                <span class="font-small text-white-09 text-dark">
                                    <div class="d-block text-golden-yellow">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p class="text-dark">“The support was professional and responsive. I was able to understand the documentation and application requirements easily.”</p>
                    </div>
                    <div class="bg-color-theme-02 border-radius p-4 p-md-5 p-lg-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-inline-block me-3">
                                <img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                    alt="testimonials">
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-normal mb-1 line-height-140 text-dark">Manav Desai</h5>
                                <span class="font-small text-white-09 text-dark">
                                    <div class="d-block text-golden-yellow">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p class="text-dark">“A simple and helpful experience. The team explained the process clearly and helped me explore suitable options.”</p>
                    </div>
                    <div class="bg-color-theme-02 border-radius p-4 p-md-5 p-lg-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-inline-block me-3">
                                <img class="img-mask-avatar-xs" src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                    alt="testimonials">
                            </div>
                            <div class="d-inline-block">
                                <h5 class="fw-normal mb-1 line-height-140 text-dark">Pooja Arora</h5>
                                <span class="font-small text-white-09 text-dark">
                                    <div class="d-block text-golden-yellow">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p class="text-dark">“I found the consultation useful for understanding my choices. The overall process felt structured, clear, and convenient.”</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- contact start -->
<div class="section bg-blue" id="contacts">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 text-center mb-5">
                  <h6
                    class="d-inline-block bg-white box-shadow border-radius px-3 py-2 line-height-140 font-small uppercase letter-spacing-1 mb-3">
                    <span class="text-gradient-6">Contact US</span>
                </h6> 
                <h2>How can we <span class="text-gradient-6"> help you?</span></h2>
           
           
            </div>

            <div class="col-md-4 col-lg-4 col-12 icon-2xl">
                <div class="feature-box mb-4">
                    <div class="feature-box-icon bg-color-very-peri text-white">
                        <i class="display-6 bi bi-envelope"></i>
                    </div>
                    <h6 class="fw-normal">Email:</h6>
                    <p><a href="malto:<?= COMPANY_EMAIL ?>" class="text-dark">
                            <?= COMPANY_EMAIL ?>
                        </a></p>
                </div>

                <div class="feature-box mb-4">
                    <div class="feature-box-icon bg-color-very-peri text-white">
                        <i class="display-6 bi bi-telephone"></i>
                    </div>
                    <h6 class="fw-normal">Phone:</h6>
                    <p><a href="malto:<?= COMPANY_MOBILE ?>" class="text-dark">
                            <?= COMPANY_MOBILE ?>
                        </a></p>
                </div>

                <div class="feature-box mb-4">
                    <div class="feature-box-icon bg-color-very-peri text-white">
                        <i class="display-6 bi bi-clock-history"></i>
                    </div>
                    <h6 class="fw-normal">Office Hours:</h6>
                    <p>10 AM to 5 PM (Monday to Saturday)</p>
                </div>

                <div class="feature-box mb-4">
                    <div class="feature-box-icon bg-color-very-peri text-white">
                        <i class="display-6 bi bi-geo-alt"></i>
                    </div>
                    <h6 class="fw-normal">Address:</h6>
                    <p><a href="malto:<?= COMPANY_ADDRESS ?>" class="text-dark">
                            <?= COMPANY_ADDRESS ?>
                        </a></p>
                </div>
            </div>

            <div class="col-md-8 col-lg-8 col-12">
                <div class="bg-white border border-radius border p-4">
                    <h6 class=" mb-3">Drop Us A Message</h6>

                    <div class="contact-form">
                        <?php echo form_open('', array('id' => 'contactForm', 'novalidate' => 'novalidate')); ?>
                        <div class="row gx-3 gy-0">
                            <div class="col-md-6">
                                <input id="form_name" type="text" name="name" class="form-control border-radius mb-0"
                                    placeholder="Your Name" required="" data-validation-regex-regex="^[a-zA-Z ]*$">
                                <div class="text-danger mb-3" id="form_name-message"></div>
                            </div>
                            <div class="col-md-6">
                                <input id="form_mobile" type="text" name="mobile"
                                    class="form-control border-radius mb-0" placeholder="Your Mobile" required=""
                                    minlength="10" maxlength="10" inputmode="numeric"
                                    data-validation-regex-regex="^[6789]\d{9}$"
                                    data-validation-regex-message="Enter valid mobile number">
                                <div class="text-danger mb-3" id="form_mobile-message"></div>
                            </div>
                            <div class="col-md-6">
                                <input id="form_email" type="email" name="email" class="form-control border-radius mb-0"
                                    placeholder="Your Email Id" required="">
                                <div class="text-danger mb-3" id="form_email-message"></div>
                            </div>
                            <div class="col-md-6">
                                <input id="form_subject" type="text" name="subject"
                                    class="form-control border-radius mb-0" placeholder="Your Subject" required="">
                                <div class="text-danger mb-3" id="form_subject-message"></div>
                            </div>
                            <div class="col-md-12">
                                <textarea id="form_message" name="message" class="form-control border-radius mb-0"
                                    placeholder="Your Message" style="height: 120px" required=""></textarea>
                                <div class="text-danger mb-3" id="form_message-message"></div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="text-center">
                                <button class="button button-md button-radius button-turquiose" type="submit">Send
                                    Message</button>
                            </div>
                        </div>


                        <?php echo form_close(); ?>
                        <!-- Submit result -->
                        <div class="submit-result">
                            <span id="success">Thank you! Your Message has been sent.</span>
                            <span id="error">Something went wrong, Please try again!</span>
                        </div>
                    </div><!-- end contact-form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact end -->

<?php if ($msg[0]->option_value == 1 && $msg[1]->option_value != '') { ?>
<div class="modal fade" id="modal-auto-open" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4" style="border-radius: 10px;">
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>

            <div class="modal-body">
                <p class="mb-3" style="font-weight: 500; color: #333;"><?php echo $msg[1]->option_value; ?></p>
                <button type="button" class="btn btn-danger fw-bold px-4 py-2" data-bs-dismiss="modal">
                    Dismiss
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        var myModal = new bootstrap.Modal(document.getElementById('modal-auto-open'));
        myModal.show();
    }, 1500);
});
</script>
<?php } ?>

<?php $this->load->view('includes/footer.php'); ?>
<script>
/* validate contact form */
$(document).ready(() => {
    $.validator.addMethod("customMobile", function(value, element) {
        return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
    }, "Please enter a valid mobile number");
    $('.numeric-input').on('keydown', function(event) {
        if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <=
                '9'))) {
            event.preventDefault();
        }
    });
    $("#contactForm").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            mobile: {
                required: true,
                digits: true,
                customMobile: true
            },
            subject: {
                required: true
            },
            message: {
                required: true,
            }
        },
        errorPlacement: function(error, element) {
            var target = "#" + $(element).attr("id") + "-message";
            // alert(target)
            $(target).html(error);

        },
        submitHandler: function(form) {
            $.ajax({
                url: `<?php echo base_url('infopage/contactsubmission') ?>`,
                type: "POST",
                data: $(form).serialize(),
                dataType: "JSON",
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#submit-btn').html(
                        "SUBMITTING... <span class='spinner-border spinner-border-sm ms-1' role='status' aria-hidden='true'></span>"
                    );
                    $('#submit-btn').attr('disabled', true);
                },
                success: function(response) {
                    if (response['success'] == true) {
                        document.getElementById("contactForm").reset();
                        toastr.success(response['message']);
                    } else {
                        toastr.error(response['message']);
                    }
                    $('#submit-btn').html('Send Message');
                    $('#submit-btn').attr('disabled', false);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, 'ERROR');
                    $('#submit-btn').html('Send Message');
                    $('#submit-btn').attr('disabled', false);
                }
            });
        }
    });
})
</script>