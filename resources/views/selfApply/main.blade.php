@extends('layouts.selfapply')
@push('css')
{{-- write or link your css file and styles tag here --}}
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
<style>
.resend-otp-div a.disabled {
    pointer-events: none;
    cursor: not-allowed;
}

.bank-crousel {
    display: block !important;
}

.radio:checked {
    background: #022475;
    border-color: #022475;
}

.owl-carousel .owl-item img {
    width: 100% !important;
}

.testimonials-carousel .owl-item img {
    width: 100% !important;
}

@media screen and (max-width: 767px) {
    .hero-section {
        padding-top: 10px !important;
    }
}

.input-group-text {
    color: #666;
    border: none;
    background-color: #f5f6f8;
    line-height: 1.3;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
}

.request-form .form-control:focus {
    background-color: #f5f6f8;
    border-color: #f5f6f8;
    border: none;
}

@media screen and (max-width:991px) {
    .input-group-text {
        padding: 1.06rem 1.06rem;
    }
}

@media screen and (min-width:992px) and (max-width:1199px) {
    .input-group-text {
        padding: 1rem 1rem;
        margin-top: 1px;
    }
}
</style>
@endpush
@section('content')
<section id="hero-201" class="bg--white-100 bg--fixed hero-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-6  col-12 mt-sm-0 pt-md-0 pt-10 order-2 mb-md-0 mb-3">

                <span class="color--green-300 mb-2 d-block w-600">🔶 Quality financial services to strengthen your
                    future
                </span>
                <h1>Get the Right Loan
                    at the <span class="color--green-300">Right Time.</span>
                </h1>
                <p>Compare offers from 10+ industry-leading NBFCs, apply <br> entirely online and get disbursed fast —
                    with
                    zero impact on <br> your CIBIL score while you explore.</p>
                <ul
                    class="icon-list d-flex flex-column flex-lg-row align-items-lg-center  mb-7 review-text mt-3">
                    <li class="ps-0 me-md-4 mb-2 text-navy"><span class="me-2"> <i
                                class="fas fa-bolt color--theme"></i></span><span>Sanction in 5 mins</span></li>
                    <li class="mt-0 ps-0 me-md-4 mb-2 text-navy"><span class="me-2"><i
                                class="fas fa-lock color--theme"></i></span><span>Bank-grade security</span></li>
                    <li class="mt-0 ps-0 me-md-4 mb-2 text-navy"><span class="me-2"> <i
                                class="fas fa-trophy color--theme"></i></span><span>2.25L+ happy customers</span></li>
                </ul>
                <!-- FEATURES-6 WRAPPER -->
                <div class="fbox-wrapper text-center mt-3">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-xl-2 row-cols-xl-4 gx-3 gy-3">
                        <div class="col">
                            <div class="fbox-12 bg--white-100 border r-12">
                                <div class="fbox-ico ico-20 text-start">
                                    <div class="shape-ico color--theme">
                                        <i class="fas fa-rupee-sign fs-5"></i>
                                    </div>
                                </div>
                                <div class="fbox-txt text-start">
                                    <h6 class="s-15 w-700 mb-0 color--blue-500">Loan up to</h6>
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
                                    <h6 class="s-15 w-700 mb-0 color--blue-500">Process</h6>
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
                                    <h6 class="s-15 w-700 mb-0 color--blue-500">Access to</h6>
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
                                    <h6 class="s-15 w-700 mb-0 color--blue-500">Options</h6>
                                    <p class="s-12 mt-0">Easy EMI</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="col-xl-5 col-lg-6 col-md-6 col-12  order-md-2 order-1 self-apply-form mb-lg-0 mb-md-4 mb-4 mt-md-3 mt-0">
                <div id="hero-8-form" class="bg-white shadow r-22 p-4">
                    <span class="text-uppercase color--green-300 d-block text-center w-700">Start Your Loan
                    </span>
                    <h3 class="s-28 w-700 mb-20 text-center">Get Instant Credit up to <br> <span
                            class="color--green-300">₹10 Lakhs</span>
                        in minutes</h3>
                    <form method="post" action="{{ route('self.apply.send.otp') }}"
                        class="request-form save-form-1 needs-validation p-0" novalidate>
                        <div class="row g-2">

                            <div class="col-md-12">
                                <div class="form-check ps-0">
                                    <div class="row gx-2">
                                        <div class="col-md-6 col-lg-6 col-sm-6 mb-2">
                                            <fieldset class="picker1">
                                                <label class="card r-14" for="personalloan">
                                                    <input type="radio" name="loan_type" id="personalloan" value="1"
                                                        {{ ($loan_type ?? '') == 1 ? 'checked' : '' }} class="radio"
                                                        checked>
                                                    <span class="plan-details">
                                                        <span class="plan-type color--blue-500 s-16">Personal Loan</span>
                                                    </span>
                                                </label>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 mb-2">
                                            <fieldset class="picker1">
                                                <label class="card r-14" for="businessloan">
                                                    <input type="radio" name="loan_type" id="businessloan" value="2"
                                                        class="radio">
                                                    <span class="plan-details">
                                                        <span class="plan-type color--blue-500 s-16">Business Loan</span>
                                                    </span>
                                                </label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-check ps-0 text-start">
                                    <label
                                        class="position-static p-0 text-uppercase s-12 mb-2 w-600 color--grey">Employment
                                        type</label>
                                    <div class="row gx-2 personal-employment">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-12 mb-2">
                                            <fieldset class="picker1">
                                                <label class="card r-14" for="salaried">
                                                    <input type="radio" name="employment_type" id="salaried" value="1"
                                                        {{ ($loan_type ?? '') == 1 ? 'checked' : '' }} class="radio"
                                                        checked>
                                                    <span class="d-flex align-items-center p-md-3 p-2 r-14">
                                                        <div
                                                            class="fbox-ico fbox-ico-1 d-flex align-items-center justify-content-start mb-0">
                                                            <div class="fbox-image  ico-20 btn--green-300">
                                                                <img src="{{ asset('front/images/salaried.png') }}"
                                                                    class="" alt="Trusted Users">
                                                            </div>
                                                        </div>
                                                        <span class="plan-details p-0 ms-2">
                                                            <span class="plan-type color--blue-500 s-16">Salaried</span>
                                                            <!-- <p class="mb-0 s-12 mt-1">Earn a monthly salary</p> -->
                                                        </span>
                                                    </span>
                                                </label>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-12 mb-2">
                                            <fieldset class="picker1">
                                                <label class="card r-14" for="selfemployed">
                                                    <input type="radio" name="employment_type" id="selfemployed"
                                                        value="2" class="radio">
                                                    <span class="d-flex align-items-center p-md-3 p-2 r-14">
                                                        <div
                                                            class="fbox-ico fbox-ico-1 d-flex align-items-center justify-content-start mb-0">
                                                            <div class="fbox-image  ico-20 btn--green-500">
                                                                <img src="{{ asset('front/images/self-employed.png') }}"
                                                                    class="" alt="Trusted Users">
                                                            </div>
                                                        </div>
                                                        <span class="plan-details p-0 ms-2">
                                                            <span
                                                                class="plan-type color--blue-500 s-16">Self-Employed</span>
                                                            <!-- <p class="mb-0 s-12 mt-1">Run your own business</p> -->
                                                        </span>
                                                    </span>
                                                </label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row gx-2 business-employment d-none">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-12 mb-2">
                                            <fieldset class="picker1">
                                                <label class="card r-14" for="smallbusiness">
                                                    <input type="radio" name="employment_type" id="smallbusiness"
                                                        value="3" {{ ($loan_type ?? '') == 1 ? 'checked' : '' }}
                                                        class="radio" checked>
                                                    <span class="d-flex align-items-center p-md-3 p-2 r-14">
                                                        <div
                                                            class="fbox-ico fbox-ico-1 d-flex align-items-center justify-content-start mb-0">
                                                            <div class="fbox-image  ico-20 btn--green-300">
                                                                <img src="{{ asset('front/images/salaried.png') }}"
                                                                    class="" alt="Trusted Users">
                                                            </div>
                                                        </div>
                                                        <span class="plan-details p-0 ms-2">
                                                            <span class="plan-type color--blue-500 s-16">Small
                                                                Business</span>
                                                            <!-- <p class="mb-0 s-12 mt-1">Earn a monthly salary</p> -->
                                                        </span>
                                                    </span>
                                                </label>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-12 mb-2">
                                            <fieldset class="picker1">
                                                <label class="card r-14" for="auditedreport">
                                                    <input type="radio" name="employment_type" id="auditedreport"
                                                        value="4" class="radio">
                                                    <span class="d-flex align-items-center p-md-3 p-2 r-14">
                                                        <div
                                                            class="fbox-ico fbox-ico-1 d-flex align-items-center justify-content-start mb-0">
                                                            <div class="fbox-image  ico-20 btn--green-500">
                                                                <img src="{{ asset('front/images/self-employed.png') }}"
                                                                    class="" alt="Trusted Users">
                                                            </div>
                                                        </div>
                                                        <span class="plan-details p-0 ms-2">
                                                            <span class="plan-type color--blue-500 s-16">Audited
                                                                Report</span>
                                                            <!-- <p class="mb-0 s-12 mt-1">Run your own business</p> -->
                                                        </span>
                                                    </span>
                                                </label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-start">
                                <label for="form_mobile"
                                    class="position-static p-0 text-uppercase s-14 mb-2 fw-bold color--grey">Mobile
                                    Number</label>
                                <div class="input-group r-12">
                                    <div class="input-group-prepend border">
                                        <span class="input-group-text" id="basic-addon1">+91</span>
                                    </div>
                                    <input type="text" name="mobile" id="mobile"
                                        class="numeric-input form-control name border"
                                        placeholder="Bank-registered number" autocomplete="off" required maxlength="10"
                                        minlength="10" inputmode="numeric" value="{{ $mobile ?? '' }}">
                                </div>
                                @component('components.ajax-error',['field'=>'mobile'])@endcomponent
                            </div>
                            <input type="hidden" name="loan_type" id="personalloan" value="1">
                            <input type="hidden" name="acc_type" value="1" id="acc_type">
                            <input type="hidden" name="user_type" value="1" id="user_type">

                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox d-flex align-items-start">
                                    <input type="checkbox" name="promotion" id="promotion"
                                        class="custom-control-input mt-2" value="1" required checked>
                                    <label class="mb-0 s-14 text-start text-dark"><small class="ms-2 d-block">By
                                            submitting this
                                            form &
                                            proceeding, you agree to the <a href="{{ route('front.terms.conditions') }}"
                                                target="_blank" class="text-dark text-decoration-none">Terms of Use</a>
                                            and <a href="{{ route('front.privacy.policy') }}"
                                                class="text-dark text-decoration-none" target="_blank">Privacy
                                                Policy</a>of IndiaFinPro.</small></label>
                                </div>
                            </div>

                            <div class="col-md-12 form-btn mt-3">
                                <button type="submit" id="checkmodal"
                                    class="btn r-100 btn--green-300 hover--tra-black last-link btn-sm submit text-uppercase">Start
                                    Process <span class="fbox-ico ico-10"> <span
                                            class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                            </div>
                            <div class="col-md-12"><span class="text-danger" id="usererrormsg"></span></div>


                            <ul class="d-flex align-items-center mb-0 partner-image justify-content-center">
                                <li class="ps-0 me-md-2 me-1 mt-0">
                                    <p class="w-400 text-uppercase mb-0 s-12 mt-0">Powered by</p>
                                </li>
                                <li class="ps-0 me-md-2 me-1 mt-0"><img src="{{ asset('front/images/फटाकPAY.png') }}"
                                        class="" alt="Trusted Users">
                                </li>
                                <li class="ps-0 me-md-2 me-1 mt-0"><img src="{{ asset('front/images/weRize.png') }}"
                                        class="" alt="Trusted Users">
                                </li>
                                <li class="ps-0 me-md-2 me-1 mt-0"><img src="{{ asset('front/images/IIFL.png') }}"
                                        class="" alt="Trusted Users">
                                </li>
                                <li class="ps-0 me-md-2 me-1 mt-0"><img src="{{ asset('front/images/moneyview.png') }}"
                                        class="" alt="Trusted Users"></li>
                            </ul>

                    </form>
                </div>
            </div>
            @if(false)
            <div class="col-md-6 col-lg-6 align-items-center justify-content-center m-auto">
                <video class="w-100 rounded" autoplay muted loop playsinline disablePictureInPicture
                    controlsList="nodownload nofullscreen noremoteplayback">
                    <source src="{{ asset('front/images/video/how-to-apply.mp4') }}" type="video/mp4">
                </video>
            </div>
            @endif
        </div>
    </div>
</section>


<!-- why Arrow Capital section starts -->
<section id="features-6" class="py-80 features-section division loan-eligibility-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="section-title mb-40">
                    <span class="color--green-300 text-uppercase mb-2 w-600 d-block">Who can apply</span>
                    <h2 class="s-28 mb-5 w-700">NBFC personal loan criteria </h2>
                </div>
            </div>
        </div>
        <div class="fbox-wrapper">
            <div class="row row-cols-1 row-cols-md-2 rows-3">
                <div class="col">
                    <div class="fbox-7 fb-1 r-32 border bg--light-grey image-right">
                        <div class="fbox-ico d-flex align-items-center justify-content-start">
                            <div class="fbox-image  ico-20 btn--green-300">
                                <span class="flaticon-briefcase text-white lh-1"></span>
                            </div>
                            <div class="fbox-txt ms-3">
                                <span class="color--green-300 text-uppercase mb-0 w-600 d-block s-12">Eligibility
                                    profile</span>
                                <h4 class="w-700 s-24 color--blue-500">Salaried
                                </h4>

                            </div>
                        </div>
                        <p>For people earning a fixed monthly income.</p>
                        <div
                            class="fbox-7 fb-1 r-18 border bg-white d-flex align-items-center justify-content-between p-3 mt-3 mb-0">
                            <div class="fbox-ico fbox-ico-1 d-flex align-items-center justify-content-start mb-0">
                                <div class="d-flex">
                                    <div class="fbox-image btn--green-300">
                                        <span class="flaticon-wallet text-white lh-1"></span>
                                    </div>
                                    <div class="fbox-txt ms-3">
                                        <span class="color--grey text-uppercase mb-1 w-600 d-block s-14">Minimum
                                            salary</span>
                                        <h6 class="w-700 s-16 color--blue-500 mb-0 s-14">₹15,000 per month
                                        </h6>

                                    </div>
                                </div>
                            </div>
                            <div class="fbox-ico ico-14">
                                <div class="fbox-images rounded-pill ico-10 text-center">
                                    <span class="flaticon-check color--theme"></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="fbox-7 fb-1 r-18 border bg-white d-flex align-items-center justify-content-between p-3 mt-3 mb-0">
                            <div class="fbox-ico fbox-ico-1 d-flex align-items-center justify-content-start mb-0">
                                <div class="d-flex">
                                    <div class="fbox-image btn--green-300">
                                        <span class="flaticon-calendar text-white lh-1"></span>
                                    </div>
                                    <div class="fbox-txt ms-3">
                                        <span class="color--grey text-uppercase mb-1 w-600 d-block s-14">Job
                                            stability</span>
                                        <h6 class="w-700 s-16 color--blue-500 mb-0 s-14">Minimum 1 year
                                        </h6>

                                    </div>
                                </div>
                            </div>
                            <div class="fbox-ico ico-14">
                                <div class="fbox-images rounded-pill ico-10 text-center">
                                    <span class="flaticon-check color--theme"></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="fbox-7 fb-1 r-18 border bg-white d-flex align-items-center justify-content-between p-3 mt-3 mb-0">
                            <div class="fbox-ico fbox-ico-1 d-flex align-items-center justify-content-start mb-0">
                                <div class="d-flex">
                                    <div class="fbox-image btn--green-300">
                                        <span class="flaticon-user text-white lh-1"></span>
                                    </div>
                                    <div class="fbox-txt ms-3">
                                        <span class="color--grey text-uppercase mb-1 w-600 d-block s-14">Age
                                            requirement</span>
                                        <h6 class="w-700 s-16 color--blue-500 mb-0 s-14">Minimum 1 year
                                        </h6>

                                    </div>
                                </div>
                            </div>
                            <div class="fbox-ico ico-14">
                                <div class="fbox-images rounded-pill ico-10 text-center">
                                    <span class="flaticon-check color--theme"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="fbox-7 fb-1 r-32 border bg--light-grey image-right-img">
                        <div class="fbox-ico d-flex align-items-center justify-content-start">
                            <div class="fbox-image  ico-20  bg--blue-500">
                                <span class="flaticon-profits text-white lh-1"></span>
                            </div>
                            <div class="fbox-txt ms-3">
                                <span class="color--green-300 text-uppercase mb-0 w-600 d-block s-12">Eligibility
                                    profile
                                </span>
                                <h4 class="w-700 s-24 color--blue-500">Self-Employed
                                </h4>

                            </div>
                        </div>
                        <p>For business owners and independent professionals.</p>
                        <div
                            class="fbox-7 fb-1 r-18 border bg-white d-flex align-items-center justify-content-between p-3 mt-3 mb-0">
                            <div class="fbox-ico fbox-ico-1 d-flex align-items-center justify-content-start mb-0">
                                <div class="d-flex">
                                    <div class="fbox-image bg--blue-500">
                                        <span class="flaticon-shield text-white lh-1"></span>
                                    </div>
                                    <div class="fbox-txt ms-3">
                                        <span class="color--grey text-uppercase mb-1 w-600 d-block s-14">Business
                                            stability
                                        </span>
                                        <h6 class="w-700 s-16 color--blue-500 mb-0 s-14">Minimum 1 year
                                        </h6>

                                    </div>
                                </div>
                            </div>
                            <div class="fbox-ico ico-14">
                                <div class="fbox-images rounded-pill ico-10 text-center">
                                    <span class="flaticon-check color--theme"></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="fbox-7 fb-1 r-18 border bg-white d-flex align-items-center justify-content-between p-3 mt-3 mb-0">
                            <div class="fbox-ico fbox-ico-1 d-flex align-items-center justify-content-start mb-0">
                                <div class="d-flex">
                                    <div class="fbox-image bg--blue-500">
                                        <span class="flaticon-file text-white lh-1"></span>
                                    </div>
                                    <div class="fbox-txt ms-3">
                                        <span class="color--grey text-uppercase mb-1 w-600 d-block s-14">Income
                                            proof</span>
                                        <h6 class="w-700 s-16 color--blue-500 mb-0 s-14">Minimum 1 year ITR
                                        </h6>

                                    </div>
                                </div>
                            </div>
                            <div class="fbox-ico ico-14">
                                <div class="fbox-images rounded-pill ico-10 text-center">
                                    <span class="flaticon-check color--theme"></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="fbox-7 fb-1 r-18 border bg-white d-flex align-items-center justify-content-between p-3 mt-3 mb-0">
                            <div class="fbox-ico fbox-ico-1 d-flex align-items-center justify-content-start mb-0">
                                <div class="d-flex">
                                    <div class="fbox-image bg--blue-500">
                                        <span class="flaticon-user text-white lh-1"></span>
                                    </div>
                                    <div class="fbox-txt ms-3">
                                        <span class="color--grey text-uppercase mb-1 w-600 d-block s-14">Age
                                            requirement</span>
                                        <h6 class="w-700 s-16 color--blue-500 mb-0 s-14">21 years or above
                                        </h6>

                                    </div>
                                </div>
                            </div>
                            <div class="fbox-ico ico-14">
                                <div class="fbox-images rounded-pill ico-10 text-center">
                                    <span class="flaticon-check color--theme"></span>
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
<!-- why Arrow Capital section ends -->

<!-- Testimonioals section starts -->
<section id="reviews-1" class="py-80 shape--06 reviews-section-01">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="section-title mb-40">
                    <span class="color--green-300 text-uppercase mb-2 w-600 d-block">Compare lenders</span>
                    <h2 class="s-28 mb-5 w-700">The best loan offer for you — all in
                        one place.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="owl-carousel brands-carousel-5">
                    <div class="brand-logo">
                        <img src="{{ asset('front/images/slider-image-1.png') }}" alt="review-avatar" width="auto">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('front/images/slider-image-2.png') }}" alt="review-avatar" width="auto">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('front/images/slider-image-3.png') }}" alt="review-avatar" width="auto">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('front/images/slider-image-1.png') }}" alt="review-avatar" width="auto">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('front/images/slider-image-2.png') }}" alt="review-avatar" width="auto">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('front/images/slider-image-3.png') }}" alt="review-avatar" width="auto">
                    </div>
                </div>
            </div>
        </div> <!-- END BRANDS CAROUSEL -->
    </div>
</section>
<!-- Testimonioals section ends -->

<section class="py-20 shape--06">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="form-holder">
                    <div class="contact-form-notice">
                        <p class="s-14">
                            <strong>Disclaimer:</strong> Loan Tenure ranges from minimum 6 months to maximum of 60
                            months, with annual interest rates starting at 11% and going up to 34%. A processing fee up
                            to 2% may be applicable.
                            Representative Example: If a loan of ₹1,00,000 is availed at an interest rate of 12.5% per
                            annum for a tenure of 12 months, and a processing fee of 2% is applied: Interest Payable:
                            ₹6,720 approx. Processing
                            Fee: ₹2,000. Total Loan Cost (including interest + fee): ₹1,08,720. APR (Annual Percentage
                            Rate): 14.27% approx. *T&C Apply. All these numbers are tentative/indicative, the final loan
                            specifics may vary
                            depending upon the customer profile and NBFCs' criteria, rules & regulations, and terms &
                            conditions. The amount paid is only for the service charge. We are not lenders and do not
                            guarantee any loan
                            approval.
                        </p>

                        <p class="s-14">
                            <strong>Important Note:</strong> BE AWARE! We ask our customers to make payments ONLY on our
                            website https://arrowcapital.in and NOT through any other source, directly or indirectly.
                            Thanks!
                        </p>
                        <p class="s-14">
                            <strong>Company Registered Address:</strong> {{ config('constant.COMPANY_ADDRESS'); }}
                            <br />
                            Mobile: {{ config('constant.COMPANY_MOBILE'); }} | Email:
                            {{ config('constant.INFO_EMAIL'); }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- otp modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content p-30 border-radius-10">
            <form action="{{ route('self.apply.verify.otp') }}" method="post"
                class="request-form save-form-2 needs-validation" novalidate>
                <div class="modal-body">
                    <div class="row">
                        <h4 class="s-26 w-600 mb-5">Verify your mobile</h4>
                        <p class="s-16 mb-3">We've sent a 4 digit OTP to
                            <span class="text-success w-600">+91 <span class="text-success w-600"
                                    id="mobileNumber"></span>
                                <a href="javascript:;" class="edit-phoneNumber" title="Edit Phone number">
                                    <svg width="40px" height="18px" viewBox="0 0 24.00 24.00" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" stroke="#949494">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                            stroke="#CCCCCC" stroke-width="0.43200000000000005" />
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M15.4998 5.50067L18.3282 8.3291M13 21H21M3 21.0004L3.04745 20.6683C3.21536 19.4929 3.29932 18.9052 3.49029 18.3565C3.65975 17.8697 3.89124 17.4067 4.17906 16.979C4.50341 16.497 4.92319 16.0772 5.76274 15.2377L17.4107 3.58969C18.1918 2.80865 19.4581 2.80864 20.2392 3.58969C21.0202 4.37074 21.0202 5.63707 20.2392 6.41812L8.37744 18.2798C7.61579 19.0415 7.23497 19.4223 6.8012 19.7252C6.41618 19.994 6.00093 20.2167 5.56398 20.3887C5.07171 20.5824 4.54375 20.6889 3.48793 20.902L3 21.0004Z"
                                                stroke="#949494" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                    </svg>
                                </a>
                            </span>
                        </p>
                        <div class="otp-form text-start">
                            <label for="firstname"
                                class="position-static p-0 text-uppercase s-14 mb-2 fw-bold color--grey">Enter
                                OTP</label>
                            <div class="otp-container">
                                <input type="text" class="otp-input" pattern="\d" maxlength="1" inputmode="numeric">
                                <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled
                                    inputmode="numeric">
                                <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled
                                    inputmode="numeric">
                                <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled
                                    inputmode="numeric">
                                {{--<input type="text" class="otp-input" pattern="\d" maxlength="1" disabled>
                                    <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled>--}}
                            </div>
                        </div>
                        <span class="mt-2 s-12 text-success" id="msg">
                            <input type="hidden" id="verificationCode" name="otp" readonly>
                            <input type="hidden" id="acc_type" name="acc_type" readonly value="1">
                            <input class="form-check-input" value="1" type="hidden" id="flexCheckDefault1" checked
                                name="allow_sms" />
                            <input class="form-check-input" value="1" type="hidden" id="flexCheckDefault" checked
                                name="accept_tnc" />
                            <span class="text-danger f-w-400" id="invalidOtp" style="font-size:14px"></span>
                            @component('components.ajax-error',['field'=>'otp'])@endcomponent
                    </div>
                    <div class="row color--black resend-otp-div">
                        <div class="col-lg-6">
                            <p class="s-12 mt-0">Didn’t receive the code? <a href="javascript:;" id="resendOtp"
                                    class="text-success">Resend OTP</a>&nbsp;<span id="timer"
                                    class="text-success">(00:15)</span></p>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group form-floating">
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="color--theme">
                                        <i class="fas fa-lock "></i>
                                    </div>
                                    <div class="title-text color--theme">
                                        <p class="fw-light mb-0 ms-1 mt-0">Encrypted</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" id="otpBtn"
                    class="btn hover--theme submit mt-3 r-100 btn--green-300 btn-sm submit w-100 text-uppercase">Verify
                    OTP <span class="fbox-ico ico-10"> <span
                            class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                <div class="card otp-velidation-text rounded-4 shadow-none mt-3 bg-light">
                    <div class="card-body py-2 px-3 ">
                        <div class="d-flex align-items-center">
                            <span class="flaticon-shield color--theme"></span>
                            <div>
                                <p class="mb-0 fw-light s-12 ms-2 mt-0">IndiaFinPro will never call you for your OTP.
                                    Treat your OTP like a password — do not share it with anyone. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<!-- <script>
document.addEventListener("DOMContentLoaded", function() {
    const personalLoan = document.getElementById("personalloan");
    const businessLoan = document.getElementById("businessloan");

    const userTypeSelect = document.getElementById("user_type");
    const options = userTypeSelect.querySelectorAll("option");

    function toggleUserTypeOptions() {
        let type = "personal";
        if (businessLoan && businessLoan.checked) type = "business";


        options.forEach(option => {
            if (option.dataset.loan === type) {
                option.style.display = "block";
            } else {
                option.style.display = "none";
            }
        });

        const selectedOption = userTypeSelect.options[userTypeSelect.selectedIndex];
        if (selectedOption.style.display === "none") {
            const firstVisible = [...options].find(opt => opt.style.display !== "none");
            if (firstVisible) userTypeSelect.value = firstVisible.value;
        }
    }


    toggleUserTypeOptions();

    if (personalLoan) personalLoan.addEventListener("change", toggleUserTypeOptions);
    if (businessLoan) businessLoan.addEventListener("change", toggleUserTypeOptions);
});
</script> -->


<script>
document.addEventListener('DOMContentLoaded', function () {

    const personalLoan = document.getElementById('personalloan');
    const businessLoan = document.getElementById('businessloan');

    const personalEmployment = document.querySelector('.personal-employment');
    const businessEmployment = document.querySelector('.business-employment');

    const salaried = document.getElementById('salaried');
    const smallBusiness = document.getElementById('smallbusiness');


    function showPersonalOptions() {
        personalEmployment.classList.remove('d-none');
        businessEmployment.classList.add('d-none');
        salaried.checked = true;
    }

    function showBusinessOptions() {
        personalEmployment.classList.add('d-none');
        businessEmployment.classList.remove('d-none');
        smallBusiness.checked = true;
    }

    personalLoan.addEventListener('change', function () {

        if (this.checked) {
            showPersonalOptions();
        }

    });


    businessLoan.addEventListener('change', function () {

        if (this.checked) {
            showBusinessOptions();
        }

    });

    if (personalLoan.checked) {
        showPersonalOptions();
    } else if (businessLoan.checked) {
        showBusinessOptions();
    }

});
</script>

<script>
const sendOtpUrl = @json(route('self.apply.send.otp'));
</script>
<!-- write or link your script file and script tag here -->
<script src="{{ asset('front/js/selfApply.js') }}"></script>
<script>
window.onscroll = function() {
    const btn = document.getElementById("goTopBtn");
    btn.style.display = (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ? "block" :
        "none";
};

// Scroll to top smoothly
function goToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
</script>


@endpush