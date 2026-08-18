@extends('layouts.selfapply')
@push('css')
    <link rel="stylesheet" href="{{ asset('front/css/radiocards.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
    <style>
        .accordion-button {
            background-color: transparent !important;
        }

        .accordion-button:focus {
            box-shadow: none !important;
        }

        .txt-block h2 {
            margin-bottom: 0px !important;
        }

        .cbox-1.ico-15 span {
            top: 5px !important;
        }

        a#failed-btn {
            background: #dc3545;
            border: 1px solid #dc3545;
        }

        a#failed-btn:hover {
            background: #bb2d3b !important;
            color: #fff !important;
        }

        .card:hover .radio:checked {
            border-color: transparent !important;
        }
    </style>
@endpush

@section('content')
    <section id="contacts"
        class="bg--white-100 personal-details-form pb-0 inner-page-hero contacts-section division min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center mb-35">
                <div class="col-md-4 col-lg-4 col-12 order-md-1 order-2">
                    <div class="txt-block left-column gr--white border p-4 r-24">
                        <div class="accordion accordion-flush mb-10" id="accordionFlushExample">
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="true"
                                        aria-controls="flush-collapseOne">
                                        User Details
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body bg-light border r-18 p-0 mt-2">
                                        <div class="d-flex justify-content-between px-3 py-2 border-bottom">
                                            <p class="s-12 text-grey mb-0">Fullname :</p>
                                            <p class="s-14 text-black mt-0 w-600">{{ Cookie::get('fullname') }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between px-3 py-2 border-bottom">

                                            <p class="s-12 text-grey mb-0">Mobile :</p>
                                            <p class="s-14 text-black mt-0 w-600">{{ Cookie::get('user_mobile') }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between px-3 py-2">
                                            <p class="s-12 text-grey mb-0">Loan Amount :</p>
                                            <p class="s-14 text-black mt-0 w-600 mb-0">
                                                &#8377;{{ formatePriceIndia(Cookie::get('loan_amount')) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3">
                            <h6 class="position-static p-0 text-uppercase s-12 mb-2 w-600 color--grey">Application
                                Process</h6>

                            <div class="cbox-12 process-step">
                                <div class="ico-wrap ms-0">
                                    <div
                                        class="cbox-12-ico text-white bg--green-300 border border-green d-flex align-items-center justify-content-center">
                                        <span class="flaticon-check s-12"></span>
                                    </div>
                                </div>
                                <div class="cbox-12-txt">
                                    <p class="s-11 text-black w-600 mb-0">Loan Details</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step">
                                <div class="ico-wrap ms-0">
                                    <div
                                        class="cbox-12-ico text-white bg--green-300 border border-green d-flex align-items-center justify-content-center">
                                        <span class="flaticon-check s-12"></span>
                                    </div>
                                </div>
                                <div class="cbox-12-txt">
                                    <p class="s-11 text-black w-600 mb-0">Personal Details</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step">
                                <div class="ico-wrap ms-0">
                                    <div
                                        class="cbox-12-ico text-white bg--green-300 border border-green d-flex align-items-center justify-content-center">
                                        <span class="flaticon-check s-12"></span>
                                    </div>
                                </div>
                                <div class="cbox-12-txt">
                                    <p class="s-11 text-black w-600 mb-0">Unlock Offers</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step">
                                <div class="ico-wrap ms-0">
                                    <div
                                        class="cbox-12-ico text-white bg--green-500 d-flex align-items-center justify-content-center">
                                        <span class="flaticon-right-arrow s-12"></span>
                                    </div>
                                </div>
                                <div class="cbox-12-txt">
                                    <p class="s-11 text-black w-600 mb-0">Purchase Plan</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step">
                                <div class="ico-wrap ms-0">
                                    <div
                                        class="cbox-12-ico border-dark-subtle bg--black-100 d-flex align-items-center justify-content-center">
                                        <span class="flaticon-right-arrow s-12"></span>
                                    </div>
                                </div>
                                <div class="cbox-12-txt">
                                    <p class="s-11 mb-0">Personalized Offers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-block mt-25">
                        <img src="{{ asset('front/images/innovation.png') }}" alt="login now" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-12 order-md-2 order-1 mb-md-0 mb-20">
                    <div class="r-24 border bg-white">
                        <div class="card-body p-4">
                            <h4 class="fw-bolder mb-10">Premium Subscription Offer</h4>
                            <p class="mb-20 color--grey mt-0">Your pre-approved loan is waiting. Purchase a subscription to
                                proceed. <span class="text-danger">- Offer Valid till 12 am only!</span></p>

                            <form method="post" class="buyNowForm" action="{{ route('self.apply.checkout') }}">

                                @csrf
                                <input type="hidden" class="form-control" name="order_amount" id="order_amount"
                                    value="">
                                <div class="row gx-3 gy-3">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <label class="r-24 overflow-hidden border w-100 subscription-card">
                                            <input name="plan" value="1" class="radio d-none" type="radio" checked
                                                data-plan="Self-Apply">
                                            <div class="plan-details p-0 border r-24 overflow-auto">

                                                <div>
                                                    <p
                                                        class="mb-0 text-center fs-12 fw-bold btn--yellow-500 px-2 py-0 mt-0 text-white">
                                                        {{ calPercentage($selfApply->amount, $selfApply->offeramount) }} OFF
                                                    </p>
                                                </div>
                                                <div class="p-4">
                                                    <h5 class="fw-bolder s-16 plan-type mb-15">Self-Apply Plan</h5>


                                                    <div class="price my-2">
                                                        <!-- Monthly Price -->
                                                        <div class="price2">
                                                            <sup class="color--black">₹</sup>
                                                            <sup
                                                                class="coins color--red-300"><strike>{{ intval($selfApply->amount) }}</strike></sup>
                                                            <span
                                                                class="color--black">{{ intval($selfApply->offeramount) }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="order-summary">
                                                        <div class="order-row order-header">
                                                            <span>Items</span>
                                                            <span>Price</span>
                                                        </div>

                                                        <div class="order-row">
                                                            <span>Price</span>
                                                            <span
                                                                class="w-900">{{ formatePriceIndia($selfApply->amount) }}</span>
                                                        </div>

                                                        <div class="order-row order-discount">
                                                            <span>Discount</span>
                                                            <span class="w-900">-
                                                                {{ formatePriceIndia($selfApply->amount - $selfApply->offeramount) }}</span>
                                                        </div>

                                                        <div class="order-row">
                                                            <span>Offer Amount</span>
                                                            <span
                                                                class="w-900">{{ formatePriceIndia($selfApply->offeramount) }}</span>
                                                        </div>

                                                        <div class="order-row">
                                                            <span>GST</span>
                                                            <span class="w-900">+
                                                                {{ formatePriceIndia($selfApply->offeramount * 0.18) }}</span>
                                                        </div>

                                                        <div class="order-divider"></div>

                                                        <div class="order-row order-total">
                                                            <h5>Total</h5>
                                                            <h5>₹
                                                                {{ formatePriceIndia($selfApply->offeramount + $selfApply->offeramount * 0.18) }}
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <button type="submit"
                                                        class="btn btn-sm btn--green-300 hover--tra-black  text-uppercase r-100 w-100"
                                                        id="submit-btn">buy now<span
                                                            class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>

                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="r-24 overflow-hidden border subscription-card p-4">
                                            <div class="card-body">
                                                <h6 class="mb-3">Subscription Benefits</h6>

                                                <div class="cbox-1 ico-10 mb-1">
                                                    <div class="ico-wrap ms-0">
                                                        <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                            <span class="flaticon-check end-0 text-white"></span>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1-txt ms-2">
                                                        <p class="s-14 mt-0 w-900"> Loan Process in Multiple NBFCs</p>
                                                    </div>
                                                </div>
                                                <div class="cbox-1 ico-10 mb-1">
                                                    <div class="ico-wrap ms-0">
                                                        <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                            <span class="flaticon-check end-0 text-white"></span>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1-txt ms-2">
                                                        <p class="s-14 mt-0 w-900"> 100% Online Financial Consultation</p>
                                                    </div>
                                                </div>
                                                <div class="cbox-1 ico-10 mb-1">
                                                    <div class="ico-wrap ms-0">
                                                        <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                            <span class="flaticon-check end-0 text-white"></span>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1-txt ms-2">
                                                        <p class="s-14 mt-0 w-900"> Access Personalized Tracking Portal</p>
                                                    </div>
                                                </div>
                                                <div class="cbox-1 ico-10 mb-1">
                                                    <div class="ico-wrap ms-0">
                                                        <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                            <span class="flaticon-check end-0 text-white"></span>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1-txt ms-2">
                                                        <p class="s-14 mt-0 w-900"> Dedicated Loan Expert Assigned</p>
                                                    </div>
                                                </div>
                                                <div class="cbox-1 ico-10 mb-1">
                                                    <div class="ico-wrap ms-0">
                                                        <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                            <span class="flaticon-check end-0 text-white"></span>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1-txt ms-2">
                                                        <p class="s-14 mt-0 w-900"> Loan Processing Time: 48 Hours</p>
                                                    </div>
                                                </div>

                                                <div class="pt-3">
                                                    <div id="rb-1-2" class="rbox-1">
                                                        <!-- Brand Logo -->
                                                        <div class="rbox-1-img">
                                                            <img class="img-fluid"
                                                                src="{{ asset('front/images/google.webp') }}"
                                                                alt="feature-image">
                                                        </div>

                                                        <!-- Rating Stars -->
                                                        <div class="star-rating ico-10 bg--white-100 r-100 clearfix">
                                                            <span class="flaticon-star"></span>
                                                            <span class="flaticon-star"></span>
                                                            <span class="flaticon-star"></span>
                                                            <span class="flaticon-star"></span>
                                                            <span class="flaticon-star mr-5"></span>
                                                            &nbsp; 4.95/5
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            // Set initial value based on the checked radio button
            updateOrderAmount();

            // Listen for the change event on the radio buttons with the class .plan-card
            $('input[name="plan"]').change(function() {
                updateOrderAmount();
            });

            // Function to update the order amount based on the selected radio button
            function updateOrderAmount() {
                // Get the value of the selected radio button
                var selectedPlan = $('input[name="plan"]:checked').val();

                // Determine the base price of the selected plan
                var baseAmount = 0;
                if (selectedPlan == "1") {
                    baseAmount = {
                        {
                            $selfApply - > inOffer ? $selfApply - > offeramount : $selfApply - > amount
                        }
                    }; // Set price for Super Saver
                } else if (selectedPlan == "2") {
                    baseAmount = {
                        {
                            $hireAgent - > inOffer ? $hireAgent - > offeramount : $hireAgent - > amount
                        }
                    }; // Set price for Standard // Set price for Standard
                }

                // Calculate the total amount including 18% GST
                var gst = 0.18;
                var totalAmount = baseAmount + (baseAmount * gst);

                // Use Math.floor to round down the total amount
                var finalAmount = totalAmount;
                $('#submit-btn').text('Buy Now');
                // Update the hidden input field with the final amount
                $('#order_amount').val(finalAmount);
            }

            var owl = $('.buyNow-carousel');
            owl.owlCarousel({
                items: 5,
                loop: true,
                autoplay: false,
                //navBy: 1,
                nav: false,
                autoplayTimeout: 4000,
                autoplayHoverPause: false,
                smartSpeed: 2000,
                responsive: {
                    0: {
                        items: 4
                    },
                    550: {
                        items: 4
                    },
                    767: {
                        items: 5
                    },
                    768: {
                        items: 5
                    },
                    991: {
                        items: 5
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>
@endpush
