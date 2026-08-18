@extends('layouts.front')
@push('css')
    <link rel="stylesheet" href="{{ asset('front/calc/commoncalculator.css') }}">
    <link rel="stylesheet" href="{{ asset('front/calc/emicalculator.css') }}">
    <link rel="stylesheet" href="{{ asset('front/calc/calcstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
@endpush
@push('style-css')
@endpush
@section('content')
    <!-- main section starts -->
    <section id="hero-7" class="hero-section position-relative bg--green-200">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-6 mb-md-0 mb-3">
                    <span class="color--green-300 mb-2 d-block">🔶 Quality financial services to strengthen your
                        future</span>
                    <h1>Building a Clear Path Towards <span class="color--green-300">Your Financial Goals</span></h1>
                    <p>Move forward with personalised financial guidance, a simple digital process and suitable loan options
                        from our trusted lending partners.</p>
                    <div class="d-flex mt-3 justify-content-md-start justify-content-center">
                        <a href="{{ route('self.apply.main') }}"
                            class="btn r-100 btn--green-300 hover--tra-black last-link d-flex align-items-center me-3 btn-sm">
                            Apply Now <span class="fbox-ico ico-10 mb-0">
                                <span class="flaticon-right-arrow  ico-20 ms-1"></span>
                            </span>
                        </a>
                        {{-- <a class="btn r-100 btn--tra-black hover--theme btn-sm">Hire a Loan Agent<span
                                class="fbox-ico ico-10"> <span class="flaticon-right-arrow  ico-20 ms-1"></span></span>
                        </a> --}}
                    </div>
                    <!-- FEATURES-6 WRAPPER -->
                    <div class="fbox-wrapper text-center mt-5">
                        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-xl-2 row-cols-xl-4 gx-3 gy-3">
                            <div class="col">
                                <div class="fbox-12 bg--white-100 border r-12">
                                    <div class="fbox-ico ico-20 text-start">
                                        <div class="shape-ico color--theme">
                                            <i class="fas fa-rupee-sign fs-5"></i>
                                        </div>
                                    </div>
                                    <div class="fbox-txt text-start">
                                        <h6 class="s-15 w-700 mb-0">Loan up to</h6>
                                        <p class="s-12 mt-0">Rs.10 Lakhs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="fbox-12 bg--white-100 border r-12">
                                    <div class="fbox-ico ico-20 text-start">
                                        <div class="shape-ico color--theme">
                                            <i class="fas fa-bolt fs-5"></i>
                                        </div>
                                    </div>
                                    <div class="fbox-txt text-start">
                                        <h6 class="s-15 w-700 mb-0">Process</h6>
                                        <p class="s-12 mt-0">100% Online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="fbox-12 bg--white-100 border r-12">
                                    <div class="fbox-ico ico-20 text-start">
                                        <div class="shape-ico color--theme">
                                            <i class="fas fa-university fs-5"></i>
                                        </div>
                                    </div>
                                    <div class="fbox-txt text-start">
                                        <h6 class="s-15 w-700 mb-0">Access to</h6>
                                        <p class="s-12 mt-0">Multiple NBFCs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="fbox-12 bg--white-100 border r-12">
                                    <div class="fbox-ico ico-20 text-start">
                                        <div class="shape-ico color--theme">
                                            <i class="fas fa-percentage fs-5"></i>
                                        </div>
                                    </div>
                                    <div class="fbox-txt text-start">
                                        <h6 class="s-15 w-700 mb-0">Options</h6>
                                        <p class="s-12 mt-0">Easy EMI</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="position-relative">
                        <div class="position-absolute card-image-left bottom-0">
                            <div class="fbox-12 bg--white-100 border r-12 mb-60">
                                <div class="fbox-txt text-start">
                                    <h6 class="s-15 w-700 mb-0">Approval Rate</h6>
                                    <p class="s-12 mt-0 color--theme">92% ▲</p>
                                </div>
                            </div>
                        </div>
                        <div class="fbox-7 bg--white-100 fb-1 r-20 h-100 w-100 text-start position-relative border-0 mb-0">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-uppercase">
                                    Loan Offer
                                </div>
                                <span class="color--green-300 bg--green-200 px-3 py-2 r-100 s-12 w-700">
                                    <span class="fbox-ico ico-10 mb-0"><span
                                            class="flaticon-check ico-10 me-1"></span>Pre-approved</span>
                            </div>
                            <div class="card-right p-3 r-14 mb-3">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="text-uppercase text-white">
                                        ELIGIBLE AMOUNT
                                    </div>
                                    <span class="color--green-300 bg--green-200 px-3 py-2 r-100 s-12 w-700"> <span
                                            class="fbox-ico ico-10 mb-0"> CIBIL impact: None</span>
                                </div>
                                <h2 class="text-white mb-2">₹5,00,000</h2>
                                <p class="text-white mb-0">10.5% p.a. · 60 Months</p>
                            </div>
                            <div id="features-2">
                                <div class="fbox-7 bg--white-100 fb-1 r-12 h-100 w-100 text-start px-0 py-2 border-0 mb-2">
                                    <div class="fbox-ico ico-20 d-flex align-items-center justify-content-start mb-0">
                                        <div class="fbox-image">
                                            <i class="fas fa-percentage color--theme"></i>
                                        </div>
                                        <div class="fbox-txt ms-2">
                                            <h6>Low Interest Rate</h6>
                                            <p class="color--grey my-0">Starting 10.5%</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-1">
                                <div class="fbox-7 bg--white-100 fb-1 r-12 h-100 w-100 text-start px-0 py-2 border-0 mb-2">
                                    <div class="fbox-ico ico-20 d-flex align-items-center justify-content-start mb-0">
                                        <div class="fbox-image">
                                            <i class="far fa-file color--theme"></i>
                                        </div>
                                        <div class="fbox-txt ms-2">
                                            <h6>Minimal Documents</h6>
                                            <p class="color--grey my-0">Aadhaar + PAN</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-1">
                                <div class="fbox-7 bg--white-100 fb-1 r-12 h-100 w-100 text-start px-0 py-2 border-0 mb-0">
                                    <div class="fbox-ico ico-20 d-flex align-items-center justify-content-start mb-0">
                                        <div class="fbox-image">
                                            <i class="fas fa-bolt color--theme"></i>
                                        </div>
                                        <div class="fbox-txt ms-2">
                                            <h6>Quick Disbursement</h6>
                                            <p class="color--grey my-0">Within 24 hours</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- main section ends -->

    <section class="py-80 ct-02 content-section division bg--blue-100" id="company">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="left-column bg-white p-4 r-20 border border-gray">
                        <div class="mb-3">
                            <img src="{{ asset('front/images/logo/logo.png') }}" alt="{{ env('APP_NAME') }}" />
                        </div>
                        <h6 class="s-22 w-700 mb-4">Transparent lending, built on trust.</h6>
                        <div class="row text-center gy-3 gx-3">
                            <div class="col-6 col-md-6 mb-lg-0">
                                <div class="statistic-block text-start bg--green-200 r-12 p-3 h-100">
                                    <div class="statistic-digit">
                                        <h4 class="s-20 w-700 mb-5 text-dark">
                                            <span class="count-element">6</span>.<span class="count-element">5</span>k
                                        </h4>
                                    </div>
                                    <div class="statistic-txt">
                                        <p class="s-16 w-400 text-dark mt-0">Happy Customer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 mb-lg-0">
                                <div class="statistic-block text-start bg--green-200 r-12 p-3 h-100">
                                    <div class="statistic-digit">
                                        <h4 class="s-20 w-700 mb-5 text-dark">
                                            <span class="count-element">1</span>.<span class="count-element">5</span>Cr+
                                        </h4>
                                    </div>
                                    <div class="statistic-txt">
                                        <p class="s-16 w-400 text-dark mt-0">Disbursal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 mb-lg-0">
                                <div class="statistic-block text-start bg--green-200 r-12 p-3 h-100">
                                    <div class="statistic-digit">
                                        <h4 class="s-20 w-700 mb-5 text-dark">
                                            <span class="count-element">12</span>+
                                        </h4>
                                    </div>
                                    <div class="statistic-txt">
                                        <p class="s-16 w-400 text-dark mt-0">NBFC Partners</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 mb-lg-0">
                                <div class="statistic-block text-start bg--green-200 r-12 p-3 h-100">
                                    <div class="statistic-digit">
                                        <h4 class="s-20 w-700 mb-5 text-dark">
                                            <span class="count-element">100</span>%
                                        </h4>
                                    </div>
                                    <div class="statistic-txt">
                                        <p class="s-16 w-400 text-dark mt-0">Digital Process</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 col-12 mt-md-0 mt-3 ps-5">
                    <div class="txt-block right-column mb-0">
                        <span class="color--green-300 text-uppercase">About us</span>
                        <h2>Finding the Right Financial Solution <span class="color--green-300">for You</span></h2>
                        <p>Arrow Capital is a financial consultation and loan assistance platform committed to making the
                            borrowing journey simple, clear and convenient.</p>
                        <p>Through our network of trusted banks, NBFCs and lending partners, we help customers explore
                            financial options that may be suitable for their requirements and financial profiles.</p>
                        <h5> <strong>Your Financial Progress Is Our Priority</strong></h5>
                        <p>
                        <ul>
                            <li>
                                <p>We understand that every customer has different financial needs. Therefore, we focus on
                                    personalised assistance instead of offering the same solution to everyone.</p>
                            </li>
                            <li>
                                <p>We maintain clear communication throughout the process so that you can understand your
                                    available options and move forward confidently.</p>
                            </li>
                        </ul>
                        </p>
                        <a href="#" class="color--theme w-700">Explore how it works <span class="fbox-ico ico-10">
                                <span class="flaticon-right-arrow  ico-20 ms-1"></span></span></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @if (false)
        <section id="features-21" class="py-80 features-section division">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10">
                        <div class="section-title mb-40">
                            <div class="d-flex justify-content-center align-items-center">
                                <h2 class="s-28 mb-5 w-700">How to apply for <span class="color--green-500">loan?</span>
                                </h2>
                                <div class="">
                                    <img src="{{ asset('front/images/logo/icon-1.png') }}" class="" width="50"
                                        alt="Trusted Users">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p0">
                    <div class="col-12">
                        <video class="w-100 rounded" autoplay muted loop playsinline disablePictureInPicture
                            controlsList="nodownload nofullscreen noremoteplayback">
                            <source src="{{ asset('front/images/video/how-to-apply.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Trust Badges Section starts -->
    <div id="statistic-1" class="statistic-section division pb-0 bg--blue-100">
        <div class="container">
            <div class=" statistic-5-wrapper r-20">
                <div class="row align-items-center p-60">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="row g-4">
                            <div class="col-6 col-md-3 mb-lg-0 mb-4">
                                <div class="statistic-block text-center">
                                    <div class="fbox-ico ico-16 mb-2">
                                        <div class="fbox-image r-100">
                                            <span class="flaticon-user text-white"></span>
                                        </div>
                                    </div>
                                    <div class="statistic-digit">
                                        <h2 class="s-30 w-700 mb-10 text-white">
                                            <span class="count-element">6</span>.<span class="count-element">5</span>k
                                        </h2>
                                    </div>
                                    <div class="statistic-txt">
                                        <h5 class="s-16 w-400 text-white">Happy Customer</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-lg-0 mb-4">
                                <div class="statistic-block text-center">
                                    <div class="fbox-ico ico-16 mb-2">
                                        <div class="fbox-image r-100">
                                            <i class="fas fa-lock text-white"></i>
                                        </div>
                                    </div>
                                    <div class="statistic-digit">
                                        <h2 class="s-30 w-700 mb-10 text-white">
                                            <span class="count-element">1</span>.<span class="count-element">5</span>Cr+
                                        </h2>
                                    </div>
                                    <div class="statistic-txt">
                                        <h5 class="s-16 w-400 text-white">Disbursal</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-lg-0 mb-4">
                                <div class="statistic-block text-center">
                                    <div class="fbox-ico ico-16 mb-2">
                                        <div class="fbox-image r-100">
                                            <i class="far fa-building text-white"></i>
                                        </div>
                                    </div>
                                    <div class="statistic-digit">
                                        <h2 class="s-30 w-700 mb-10 text-white">
                                            <span class="count-element">8</span>+
                                        </h2>
                                    </div>
                                    <div class="statistic-txt">
                                        <h5 class="s-16 w-400 text-white">NBFC Partners</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-lg-0 mb-4">
                                <div class="statistic-block text-center">
                                    <div class="fbox-ico ico-16 mb-2">
                                        <div class="fbox-image r-100">
                                            <span class="flaticon-star text-white"></span>
                                        </div>
                                    </div>
                                    <div class="statistic-digit">
                                        <h2 class="s-30 w-700 mb-10 text-white">
                                            <span class="count-element">100</span>%
                                        </h2>
                                    </div>
                                    <div class="statistic-txt">
                                        <h5 class="s-16 w-400 text-white">Digital Process</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Trust Badges Section ends -->

    <section id="products" class="py-80 features-section division bg--blue-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <span class="color--green-300 text-uppercase mb-2 w-600 d-block">Choose your path</span>
                        <h2 class="s-28 mb-5 w-700">Choose Your Loa <span class="color--green-300">Journey</span></h2>
                        <p class="s-16 color--grey mt-0">Select the option that best fits your financial needs.</p>
                    </div>
                </div>
            </div>
            <div class="fbox-wrapper text-center">
                <div class="row d-flex gx-4 gy-4 align-items-center justify-content-center m-auto">
                    <div class="col-md-6">
                        <div class="fbox-5 fbox--hover fb-2 border r-20 text-start card-left h-100">

                            <div class="fbox-txt">
                                <span class="color--green-300 text-uppercase  bg--green-200 px-3 py-2 r-100 s-12">Self
                                    Serve</span>
                                <h3 class="s-22 w-700 mt-3">Quick Self-Apply</h3>
                                <p class="mb-20">Apply for your loan anytime, anywhere through our simple and secure
                                    digital process, with expert support available whenever you need it.</p>
                                <div class="cbox-1 ico-15">
                                    <div class="ico-wrap color--theme">
                                        <div class="cbox-1-ico"><span class="flaticon-check"></span></div>
                                    </div>
                                    <div class="cbox-1-txt">
                                        <p>Instant eligibility check</p>
                                    </div>
                                </div>
                                <div class="cbox-1 ico-15">
                                    <div class="ico-wrap color--theme">
                                        <div class="cbox-1-ico"><span class="flaticon-check"></span></div>
                                    </div>
                                    <div class="cbox-1-txt">
                                        <p>Compare NBFC offers</p>
                                    </div>
                                </div>
                                <div class="cbox-1 ico-15">
                                    <div class="ico-wrap color--theme">
                                        <div class="cbox-1-ico"><span class="flaticon-check"></span></div>
                                    </div>
                                    <div class="cbox-1-txt">
                                        <p>Fully self-guided</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <a href="{{ route('self.apply.main') }}"
                                        class="btn r-100 btn--green-300 hover--tra-black btn-sm">Apply
                                        Now <span class="fbox-ico ico-10"> <span
                                                class="flaticon-right-arrow  ico-20 ms-1"></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="fbox-5 fbox--hover fb-2 border r-20 text-start card-right">
                            <div class="fbox-txt">
                                <span class="section-id rounded-id bg--tra-white color--white text-uppercase border-0">
                                    Guided
                                </span>
                                <h3 class="s-22 w-700 mt-3 text-white">Hire Loan Agent</h3>
                                <p class="mb-20 text-white">Enjoy expert digital assistance, seamless login access, and customized loan offers from our trusted NBFC network.</p>
                                <div class="cbox-1 ico-15">

                                    <div class="ico-wrap color--theme">
                                        <div class="cbox-1-ico"><span class="flaticon-check"></span></div>
                                    </div>

                                    <div class="cbox-1-txt text-white">
                                        <p>Dedicated expert assigned</p>
                                    </div>
                                </div>
                                <div class="cbox-1 ico-15">
                                    <div class="ico-wrap color--theme">
                                        <div class="cbox-1-ico"><span class="flaticon-check"></span></div>
                                    </div>
                                    <div class="cbox-1-txt text-white">
                                        <p>Document assistance</p>
                                    </div>
                                </div>
                                <div class="cbox-1 ico-15">
                                    <div class="ico-wrap color--theme">
                                        <div class="cbox-1-ico"><span class="flaticon-check"></span></div>
                                    </div>
                                    <div class="cbox-1-txt text-white">
                                        <p>Personalised tracking</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <a href="{{ route('loan.agent.main') }}"
                                        class="btn r-100 btn--green-300 hover--tra-black btn-sm">Apply
                                        Now <span class="fbox-ico ico-10"> <span
                                                class="flaticon-right-arrow  ico-20 ms-1"></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section id="features-2" class="features-section division bg--blue-200 py-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-40">
                        <span class="color--green-300 text-uppercase mb-2 w-600 d-block">Why us</span>
                        <h2 class="s-28 mb-5 w-700">HOW IT<span class="color--green-300"> WORKS </span></h2>
                        <p class="s-16 color--grey mt-0">Apply in Six Simple Steps</p>
                    </div>
                </div>
            </div>

            <div class="fbox-wrapper text-center">
                <div class="row g-4 row-cols-1 row-cold-sm-2 row-cols-md-3 row-cols-lg-3">
                    <div class="col d-flex">
                        <div class="fbox-7 bg--white-100 fb-1 r-12 h-100 w-100 text-start">
                            <div class="fbox-ico ico-20 d-flex align-items-center justify-content-between">
                                <div class="fbox-image">
                                    <i class="fas fa-university color--theme fs-5"></i>
                                </div>
                                <h3 class="text-light">01</h3>
                            </div>
                            <div class="fbox-txt">
                                <p class=" mt-0">Begin by entering your mobile number, full name and basic personal
                                    information.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex">
                        <div class="fbox-7 bg--white-100 fb-1 r-12 h-100 w-100 text-start">
                            <div class="fbox-ico ico-20 d-flex align-items-center justify-content-between">
                                <div class="fbox-image">
                                    <i class="far fa-user color--theme fs-5"></i>
                                </div>
                                <h3 class="text-light">02</h3>
                            </div>
                            <div class="fbox-txt">
                                <p class=" mt-0">Complete the required information to check your eligibility and view your
                                    pre-approved loan offer(s). This is not the final offer.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex">
                        <div class="fbox-7 bg--white-100 fb-1 r-12 h-100 w-100 text-start">
                            <div class="fbox-ico ico-20 d-flex align-items-center justify-content-between">
                                <div class="fbox-image">
                                    <i class="fas fa-desktop color--theme fs-5"></i>

                                </div>
                                <h3 class="text-light">03</h3>
                            </div>
                            <div class="fbox-txt">
                                <p class=" mt-0">Complete your subscription to view and proceed with your pre-approved
                                    loan offer(s).</p>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex">
                        <div class="fbox-7 bg--white-100 fb-1 r-12 h-100 w-100 text-start">
                            <div class="fbox-ico ico-20 d-flex align-items-center justify-content-between">
                                <div class="fbox-image">
                                    <i class="fas fa-shield-alt color--theme fs-5"></i>
                                </div>
                                <h3 class="text-light">04</h3>
                            </div>
                            <div class="fbox-txt">
                                <p class=" mt-0">Within 24–48 hours, our team will contact you to verify your information
                                    and help you complete the document submission process.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex">
                        <div class="fbox-7 bg--white-100 fb-1 r-12 h-100 w-100 text-start">
                            <div class="fbox-ico ico-20 d-flex align-items-center justify-content-between">
                                <div class="fbox-image">
                                    <i class="fas fa-clipboard color--theme fs-5"></i>
                                </div>
                                <h3 class="text-light">05</h3>
                            </div>
                            <div class="fbox-txt">
                                <p class=" mt-0">Your application and documents will be reviewed and verified by the NBFC
                                    as per its eligibility criteria and policies.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex">
                        <div class="fbox-7 bg--white-100 fb-1 r-12 h-100 w-100 text-start">
                            <div class="fbox-ico ico-20 d-flex align-items-center justify-content-between">
                                <div class="fbox-image">
                                    <span class="flaticon-target color--theme fs-5"></span>
                                </div>
                                <h3 class="text-light">06</h3>
                            </div>
                            <div class="fbox-txt">
                                <p class="mt-0">The NBFC will make the final decision on your loan approval, sanction,
                                    and disbursement as per its policies and eligibility criteria.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- eligibility calculator starts -->
    <section id="features-21" class="py-80 features-section division bg--blue-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <span class="color--green-300 text-uppercase mb-2 w-600 d-block">EMI Calculator</span>
                        <h2 class="s-28 mb-5 w-700">Calculate Your EMI <span class="color--green-300"> Instantly</span>
                        </h2>
                        <p class="s-16 color--grey mt-0">Make Smarter Financial Decisions</p>
                    </div>
                </div>
            </div>
            <div class=" p-30 bg--white-100 shadow border-grey-1 r-20 mx-0">
                <div class="row">
                    <div class="col-md-7 order-first order-md-2">
                        <div id="emicalculatorinnerformwrapper">
                            <form id="emicalculatorform" class="comment-form">
                                <div class="form-horizontal" id="emicalculatorinnerform">
                                    <div class="row">
                                        <!-- Loan Amount slider section starts -->
                                        <div class="col-md-12">
                                            <div class="row form-group lamount flex-display align-items-center">
                                                <label class="col-6 control-label s-18 w-500" for="loanamount">Loan
                                                    amount</label>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text color--purple-500">₹</span>
                                                            </div>
                                                            <input class="form-control custm-box w-400" id="loanamount"
                                                                name="loanamount" value="10,00,000" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="loanamountslider"></div>
                                            <div id="loanamountsteps" class="steps">
                                                <span class="tick" style="left: 0%;">| <br>
                                                    <span class="marker">50K</span>
                                                </span>
                                                <span class="tick d-none d-sm-block" style="left: 12.5%;">| <br>
                                                    <span class="marker">10L</span>
                                                </span>
                                                <span class=tick style="left: 25%;">| <br>
                                                    <span class=marker>20L</span>
                                                </span>
                                                <span class="tick d-none d-sm-block" style="left: 37.5%;">| <br>
                                                    <span class="marker">30L</span>
                                                </span>
                                                <span class="tick" style="left: 50%;">| <br>
                                                    <span class="marker">40L</span>
                                                </span>
                                                <span class="tick d-none d-sm-block" style="left: 62.5%;">| <br>
                                                    <span class="marker">50L</span>
                                                </span>
                                                <span class="tick" style="left: 75%;">| <br>
                                                    <span class="marker">60L</span>
                                                </span>
                                                <span class="tick d-none d-sm-block" style="left: 87.5%;">| <br>
                                                    <span class="marker">70L</span>
                                                </span>
                                                <span class="tick" style="left: 100%;">| <br>
                                                    <span class="marker">80L</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Loan Amount slider section ends -->
                                        <!-- Interest Rate slider section starts -->
                                        <div class="col-md-12 mt-100">
                                            <div class="row form-group lint flex-display align-items-center">
                                                <label class="col-6 s-18 w-500 control-label" for="loaninterest">Interest
                                                    rate</label>
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">%</span>
                                                        </div>
                                                        <input class="form-control custm-box w-400" id="loaninterest"
                                                            name="loaninterest" value="10.5" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="loaninterestslider"></div>
                                            <div id="loanintereststeps" class="steps">
                                                <span class="tick" style="left: 0%;">| <br>
                                                    <span class="marker">5</span>
                                                </span>
                                                <span class="tick" style="left: 16.67%;">| <br>
                                                    <span class="marker">7.5</span>
                                                </span>
                                                <span class="tick" style="left: 33.34%;">| <br>
                                                    <span class="marker">10</span>
                                                </span>
                                                <span class="tick" style="left: 50%;">| <br>
                                                    <span class="marker">12.5</span>
                                                </span>
                                                <span class="tick" style="left: 66.67%;">| <br>
                                                    <span class="marker">15</span>
                                                </span>
                                                <span class="tick" style="left: 83.34%;">| <br>
                                                    <span class="marker">17.5</span>
                                                </span>
                                                <span class="tick" style="left: 100%;">| <br>
                                                    <span class="marker">20</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Interest Rate slider section ends -->
                                        <!-- Loan Tenure slider section starts -->
                                        <div class="col-md-12 mt-100">
                                            <div class="row form-group lterm flex-display align-items-center">
                                                <label class="col-6 s-18 w-500 control-label" for="loanterm">Select EMI
                                                    option</label>
                                                <div class="col-6">
                                                    <div class="loantermwrapper">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend d-none">
                                                                <label class="s-14 input-group-text">
                                                                    <input type="radio" class="mr-5"
                                                                        name="loantenure" id="loanyears"
                                                                        value="loanyears" tabindex="4"
                                                                        autocomplete="off"><span class="s-14">Yr</span>
                                                                </label>
                                                            </div>
                                                            <input class="form-control custm-box-2 w-400" id="loanterm"
                                                                name="loanterm" value="20" type="text">
                                                            <div class="input-group-prepend">
                                                                <label class="s-14 input-group-text months-input">
                                                                    <input type="radio" class="mr-5 d-none"
                                                                        name="loantenure" id="loanmonths"
                                                                        value="loanmonths" tabindex="5"
                                                                        autocomplete="off" checked="checked">
                                                                    <span class="s-14">Months</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="loantermslider"></div>
                                            <div id="loantermsteps" class="steps">
                                                <span class="tick" style="left: 0%;">| <br>
                                                    <span class="marker">0</span>
                                                </span>
                                                <span class="tick" style="left: 16.67%;">| <br>
                                                    <span class="marker">5</span>
                                                </span>
                                                <span class="tick" style="left: 33.33%;">| <br>
                                                    <span class="marker">10</span>
                                                </span>
                                                <span class="tick" style="left: 50%;">| <br>
                                                    <span class="marker">15</span>
                                                </span>
                                                <span class="tick" style="left: 66.67%;">| <br>
                                                    <span class="marker">20</span>
                                                </span>
                                                <span class="tick" style="left: 83.33%;">| <br>
                                                    <span class="marker">25</span>
                                                </span>
                                                <span class="tick" style="left: 100%;">| <br>
                                                    <span class="marker">30</span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Loan Tenure slider section ends -->
                                    </div>
                                </div>
                                <input id="loanproduct" name="loanproduct" value type="hidden">
                                <input id="loanstartdate" name="loanstartdate" value type="hidden">
                                <input id="loanyearformat" name="loanyearformat" value type="hidden">
                                <input id="loandata" name="loandata" value type="hidden">
                                <input id="calcversion" name="calcversion" value=4.0 type="hidden">
                            </form>
                            <div class="row gutter-left gutter-right d-none">
                                <div id="emipaymentsummary" class="col-sm-5 col-md-6 no-gutter-left no-gutter-right">
                                    <div id="emiamount">
                                        <h4>Loan EMI</h4>
                                        <p>₹ <span>24,959</span>
                                        </p>
                                    </div>
                                    <div id="emitotalinterest">
                                        <h4>Total Interest Payable</h4>
                                        <p>₹ <span>34,90,279</span>
                                        </p>
                                    </div>
                                    <div id="emitotalamount" class="column-last">
                                        <h4>Total Payment <br>(Principal + Interest) </h4>
                                        <p>₹ <span>59,90,279</span>
                                        </p>
                                    </div>
                                </div>
                                <div id="emipiechart"
                                    class="d-none no-gutter-left no-gutter-right col-sm-7 col-md-6 highcharts-container">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- display none graph and list of emi's start --}}
                    <div id="emipaymentdetails" class="d-none">
                        <form class="gutter-left gutter-right form-horizontal">
                            <div class="row form-group" id="emipaymentscheduleheader">
                                <label class="col-md-4 col-lg-5 control-label" for="startmonthyear">Schedule showing EMI
                                    payments starting from</label>
                                <div class="col-md-4 col-lg-3">
                                    <div class="input-group">
                                        <input class="form-control" id="startmonthyear" name="startmonthyear" value
                                            type="text">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 form-group lyearformat">
                                    <select class="form-control" tabindex="15" name="yearformat" id="yearformat">
                                        <option value="calendaryear" selected="selected">Calendar Year wise</option>
                                        <option value="financialyear">Financial Year wise</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div id="emibarchart" class="hidden-ts highcharts-container"></div>
                        <div id="emipaymenttable"></div>
                    </div>
                    {{-- display none graph and list of emi's end --}}
                    <div class="col-md-5 order-last order-md-2 emi-details">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="p-4 text-center border-bottom">
                                    <h6 class="card-title mb-3">Your monthly instalment:</h6>
                                    <h2 class="mb-0 text-center s-40 color--purple-500" id="emiamount">₹<span>888</span>
                                    </h2>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted s-15">Total interest</span>
                                        <span id="emitotalinterest">₹<span>656</span></span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted s-15">Principal amount</span>
                                        <span id="principalamount">₹<span>10,000</span></span>
                                    </div>
                                    <hr style="border:1px dashed grey">
                                    <div class="d-flex justify-content-between mb-4">
                                        <span class="s-16">Total amount</span>
                                        <span id="emitotalamount">₹<span>10,000</span></span>
                                    </div>
                                    <a href="{{ route('self.apply.main') }}"
                                        class="btn btn--green-400 hover--tra-black w-100">Apply for loan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- eligibility calculator ends -->
    {{-- <hr class="divider"> --}}

    <!-- Our Partners section start  -->
    <section id="integrations-2" class="py-80 integrations-section bg--blue-200">
        <div class="container">
            <div class="r-12 text-center">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10">
                        <div class="section-title mb-40">
                            <span class="color--green-300 text-uppercase mb-2 w-600 d-block">Financing partners</span>
                            <h2 class="s-28 mb-5 w-700">Trusted <span class="color--green-300">NBFCs</span></h2>
                            <p class="s-16 color--grey mt-0">Partnering with leading NBFCs to provide you with reliable
                                loan solutions.</p>
                        </div>
                    </div>
                </div>
                @php
                    $lists = nbfcsList();
                @endphp

                <div class="bank-crousel">
                    <div class="row">
                        <div class="col text-center">
                            <div class="owl-carousel brands-carousel-6 emi-carousel">
                                {!! $lists['carousel'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Partners section end  -->

    <!-- Testimonioals section starts -->
    <section id="reviews-1" class="py-80 reviews-section bg--blue-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="section-title mb-40">
                        <span class="color--green-300 text-uppercase mb-2 w-600 d-block">Testimonials</span>
                        <h2 class="s-28 mb-5 w-700">What Our <span class="color--green-300">Customers Say</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Testimonials carousel start  -->
                    @include('partials.front.testimonials')
                    <!-- Testimonials carousel end  -->
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonioals section ends -->

    <!-- Contact Start -->
    <section id="contact" class="py-80 bg--blue-200">
        <div class="container">
            <div class="row">
                <div class="col-md-6 md-mb-50">
                    <div class="sec-title2 mb-40">
                        <span class="color--green-300 text-uppercase mb-2 w-600 d-block">Contact</span>
                        <h2 class="s-28 mb-5 w-700">Need Assistance?</h2>
                        <p class="description mt-0"> Submit your information, and one of our loan experts will contact you
                            shortly.</p>
                    </div>
                    <div class="row gy-3 gx-3">
                        <div class="col-md-12 col-12">
                            <div class="address-item d-flex">
                                <div>
                                    <div class="fbox-ico ico-16">
                                        <div class="fbox-image r-100">
                                            <span class="flaticon-mobile-search color--theme"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="address-text ms-2">
                                    <h6> Customer Support </h6>
                                    <p class="address-txt"><a
                                            href="tel:{{ str_ireplace(' ', '', env('COMPANY_MOBILE')) }}">{{ config('constant.COMPANY_MOBILE') }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="address-item d-flex">
                                <div class="fbox-ico ico-16">
                                    <div class="fbox-image r-100">
                                        <span class="flaticon-email color--theme"></span>
                                    </div>
                                </div>
                                <div class="address-text ms-2">
                                    <h6> Mail Us </h6>
                                    <p class="address-txt"><a
                                            href="mailto:{{ str_ireplace(' ', '', env('COMPANY_SUPPORT_MAIL')) }}">{{ config('constant.COMPANY_SUPPORT_MAIL') }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="address-item d-flex">
                                <div class="fbox-ico ico-16">
                                    <div class="fbox-image r-100">
                                        <span class="flaticon-map color--theme"></span>
                                    </div>
                                </div>
                                <div class="address-text ms-2">
                                    <h6> Address </h6>
                                    <p class="address-txt">{{ config('constant.COMPANY_ADDRESS') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="address-item d-flex">
                                <div class="fbox-ico ico-16">
                                    <div class="fbox-image r-100">
                                        <span class="flaticon-24-hours color--theme"></span>
                                    </div>
                                </div>
                                <div class="address-text ms-2">
                                    <h6> Working Hours </h6>
                                    <p class="address-txt">
                                        Monday to Saturday: 10:00 AM - 5:00 PM<br>
                                        Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 py-md-0 py-4 pb-0">

                    <div class="card border-gray h-100 r-20">
                        <div class="card-body">
                            <p class="w-400 mb-20">
                                Fill out the form below and you'll hear from us soon.
                            </p>
                            <form method="post" action="{{ route('front.contact.us.store') }}"
                                class="contact-form career-form" enctype="multipart/form-data">
                                <div class="row gx-2 gy-2">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-floating s-14 w-600">
                                            <label for="firstname" class="position-static p-0">Full Name *</label>
                                            <input id="form_name" name="fullname" type="text"
                                                class="form-control name mb-0 pt-2" placeholder="">

                                        </div>
                                        @component('components.ajax-error', ['field' => 'fullname'])
                                        @endcomponent
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-floating s-14 w-600">
                                            <label for="form_mobile" class="position-static p-0">Mobile *</label>
                                            <input id="form_mobile" type="text" name="mobile"
                                                class="numeric-input mb-0 form-control mobile pt-2" placeholder=""
                                                minlength="10" maxlength="10" inputmode="numeric">

                                        </div>
                                        @component('components.ajax-error', ['field' => 'mobile'])
                                        @endcomponent
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-floating s-14 w-600">
                                            <label for="form_email" class="position-static p-0">Email *</label>
                                            <input id="form_email" type="email" name="email"
                                                class="mb-0 form-control email pt-2" placeholder="">

                                        </div>
                                        @component('components.ajax-error', ['field' => 'email'])
                                        @endcomponent
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group form-floating s-14 w-600">
                                            <label for="form_subject" class="position-static p-0">Subject *</label>
                                            <input id="form_subject" type="text" name="subject"
                                                class="mb-0 form-control subject pt-2" placeholder="">

                                        </div>
                                        @component('components.ajax-error', ['field' => 'subject'])
                                        @endcomponent
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group form-floating s-14 w-600">
                                            <label for="form_message" class="position-static p-0">Message *</label>
                                            <textarea id="form_message" name="desc" class="mb-0 form-control message pt-2" placeholder=""
                                                style="height: 150px"></textarea>

                                        </div>
                                        @component('components.ajax-error', ['field' => 'desc'])
                                        @endcomponent
                                    </div>
                                    <div class="col-12 text-start">
                                        <button type="submit"
                                            class="s-14 r-100 btn btn--green-300 hover--tra-black submit btn-sm"
                                            id="submit-btn">Submit Request<span class="fbox-ico ico-10"> <span
                                                    class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->
    <section id="banner-12" class="banner-section bg--blue-100 py-60">
        <div class="container">
            <div class="bg-image r-24">
                <div class="row p-md-5 p-3">
                    <div class="col-lg-7 col-md-7">
                        <div class="banner-12-txt color--white mb-md-0 mb-3">
                            <div class="mb-3">
                                <img src="{{ asset('front/images/logo/logo-w.png') }}" alt="{{ env('APP_NAME') }}" />
                            </div>
                            <h3 class="s-32 w-700 mb-3">Apne Sapne Ko Do <br> <span class="color--theme"> Nayi
                                    Udaan</span>
                            </h3>
                            <span class="section-id rounded-id bg--tra-white color--white text-uppercase border-0">
                                4.5k+ Happy Customers
                            </span>
                            <span class="section-id rounded-id bg--tra-white color--white text-uppercase border-0">
                                ✓ 100% Digital Process
                            </span>
                            <p>Empowered by 10+ industry-leading NBFCs.
                            </p>
                            <p class="w-700">Quick loan in a few simple clicks
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="fbox-5 fb-2 border r-20 text-start card-left h-100">

                            <div class="fbox-txt">
                                <span class="text-dark text-uppercase s-12">UP
                                    TO</span>
                                <h3 class="s-28 w-700 mt-2 mb-3">₹5,00,000</h3>

                                <div class="cbox-1 ico-15">
                                    <div class="ico-wrap color--theme">
                                        <div class="cbox-1-ico"><span class="flaticon-check"></span></div>
                                    </div>
                                    <div class="cbox-1-txt">
                                        <p>Low Interest Rate</p>
                                    </div>
                                </div>
                                <div class="cbox-1 ico-15">
                                    <div class="ico-wrap color--theme">
                                        <div class="cbox-1-ico"><span class="flaticon-check"></span></div>
                                    </div>
                                    <div class="cbox-1-txt">
                                        <p>Minimal Documents</p>
                                    </div>
                                </div>
                                <div class="cbox-1 ico-15">
                                    <div class="ico-wrap color--theme">
                                        <div class="cbox-1-ico"><span class="flaticon-check"></span></div>
                                    </div>
                                    <div class="cbox-1-txt">
                                        <p>Quick Disbursement</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <a href="" class="btn r-100 btn--green-300 hover--tra-black btn-sm">Instant
                                        Approval
                                        <span class="fbox-ico ico-10"> <span
                                                class="flaticon-right-arrow  ico-20 ms-1"></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </section>



    {{-- Wlecome message modal show here --}}
    @if ($msg->status == 1)
        <div class="modal fade myModal" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row p-3">
                            <p>{!! $msg->content ?? 'N/A' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('script-src')
    <script type="text/javascript" src="{{ asset('front/calc/calccore.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/mouse.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/slider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/commoncalculator.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/emicalculator.js') }}"></script>
@endpush

@push('scripts')
    <script src="{{ asset('front/js/home.js') }}" type="text/javascript"></script>
    @if ($msg->status == 1)
        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    $(".myModal:not(.auto-off)").modal("show");
                }, 3600);
            })
        </script>
    @endif

    <script>
        const routes = {
            'selfapply': "{{ route('self.apply.send.otp') }}",
        };

        document.addEventListener('DOMContentLoaded', () => {
            const faqs = document.querySelectorAll('#faq-container li');
            const loadMoreButton = document.getElementById('load-more-faq');
            const viewLessButton = document.getElementById('view-less-faq');
            let visibleCount = 5; // Number of FAQs initially shown
            const batchSize = 5; // Number of FAQs to show on each click

            // Initial setup: Show the first 7 FAQs
            faqs.forEach((faq, index) => {
                if (index >= visibleCount) {
                    faq.style.display = 'none';
                }
            });

            // Event listener for Load More button
            loadMoreButton.addEventListener('click', () => {
                const hiddenFaqs = Array.from(faqs).filter(faq => faq.style.display === 'none');
                for (let i = 0; i < batchSize && i < hiddenFaqs.length; i++) {
                    hiddenFaqs[i].style.display = 'list-item';
                }

                // Show the "View Less" button once more items are displayed
                if (hiddenFaqs.length > 0) {
                    viewLessButton.style.display = 'inline-block';
                }

                // Hide the "Load More" button if no more FAQs to show
                if (hiddenFaqs.length <= batchSize) {
                    loadMoreButton.style.display = 'none';
                }
            });

            // Event listener for View Less button
            viewLessButton.addEventListener('click', () => {
                faqs.forEach((faq, index) => {
                    if (index >= visibleCount) {
                        faq.style.display = 'none';
                    }
                });

                // Reset button visibility
                loadMoreButton.style.display = 'inline-block';
                viewLessButton.style.display = 'none';
            });
        });

        $(document).ready(function() {
            $(".contact-form").submit(function(e) {
                let status = document.activeElement.innerHTML;
                e.preventDefault();
                if (status) {
                    $('.ajax-error').html('');
                    let data = new FormData(this);
                    $.ajax({
                        url: $(this).attr("action"),
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        data: data,
                        processData: false,
                        contentType: false,
                        beforeSend: function() {
                            $("#submit-btn").html(
                                '<span class="spinner-border spinner-border-sm"></span> Submit Request '
                            )
                            $("#submit-btn").attr('disabled', true);
                        },
                        success: function(result) {
                            $(this).attr("disabled", false);
                            if (result.type === 'SUCCESS') {
                                toastr.success(result.message);
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);
                            } else {
                                toastr.error(result.message);
                                $('#submit-btn').html('Submit Request');
                                $('#submit-btn').attr('disabled', false);
                            }
                        },
                        error: function(error) {
                            $(this).attr("disabled", false);
                            let errors = error.responseJSON.errors,
                                errorsHtml = '';
                            $.each(errors, function(key, value) {
                                errorsHtml = '<strong>' + value[0] + '</strong>';
                                $('.' + key).html(errorsHtml);
                            });
                            $('#submit-btn').html('Submit Request');
                            $('#submit-btn').attr('disabled', false);
                        }
                    });
                }
            });
        });
    </script>
@endpush
