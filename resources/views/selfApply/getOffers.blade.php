@extends('layouts.selfapply')
@push('css')
<style>
.accordion-button {
    background-color: transparent !important;
}

.accordion-button:focus {
    box-shadow: none !important;
}

body {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
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
                            <h2 class="accordion-header mb-0" id="flush-headingOne">
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
                                    <div class="d-flex justify-content-between px-3 py-2 border-bottom">
                                        <p class="s-12 text-grey mb-0">Loan Amount :</p>
                                        <p class="s-14 text-black mt-0 mb-0 w-600">
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
                            <div class="ico-wrap">
                                <div class="cbox-12-ico text-white bg--green-300 border border-green d-flex align-items-center justify-content-center"><span
                                        class="flaticon-check s-12"></span></div>
                            </div>
                            <div class="cbox-12-txt">
                                <p class="s-11 text-black w-600 mb-0">Loan Details </p>
                            </div>
                        </div>
                        <div class="cbox-12 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-12-ico text-white bg--green-300 border border-green d-flex align-items-center justify-content-center"><span
                                        class="flaticon-check s-12"></span></div>
                            </div>
                            <div class="cbox-12-txt">
                                <p class="s-11 text-black w-600 mb-0">Personal Details</p>
                            </div>
                        </div>
                        <div class="cbox-12 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-12-ico text-white bg--green-500 d-flex align-items-center justify-content-center"><span
                                        class="flaticon-right-arrow s-12"></span></div>
                            </div>
                            <div class="cbox-12-txt">
                                <p class="s-11 text-black w-600 mb-0">Unlock Offers</p>
                            </div>
                        </div>
                        <div class="cbox-12 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-12-ico border-dark-subtle bg--black-100 d-flex align-items-center justify-content-center"><span
                                        class="flaticon-right-arrow s-12"></span></div>
                            </div>
                            <div class="cbox-12-txt">
                                <p class="s-11 v">Purchase Plan</p>
                            </div>
                        </div>
                        <div class="cbox-12 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-12-ico border-dark-subtle bg--black-100 d-flex align-items-center justify-content-center"><span
                                        class="flaticon-right-arrow s-12"></span></div>
                            </div>
                            <div class="cbox-12-txt">
                                <p class="s-11 mb-0">Personalized Offers</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="img-block mt-20">
                    <img src="{{ asset('front/images/innovation.png') }}" alt="login now" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-md-8 col-lg-8 col-12 mt-md-0 mt-20 order-md-2 order-1 mb-md-0 mb-20">
                <div class="card r-24">
                    <div class="card-body p-4">
                        <h4 class="fw-bolder mb-10">You’re Eligible For Loan Offers.</h4>
                        <p class="mb-20 color--grey mt-0">Unlock Offers with Our Expert Consultation!</p>
                        <hr class="divider" />
                        <form action="{{ route('self.apply.buyNow') }}" id="unlockOffersForm"
                            class="contact-form save-form-5 mt-20" novalidate="novalidate" method="post"
                            accept-charset="utf-8">
                            @csrf
                            <div class="integrations-1-wrapper">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <span class="badge badge-success w-100 text-center"
                                            style="border-radius: 12px 12px 0 0;">Most Recommended Offer*</span>
                                        <div id="fb-12-3" class="fbox-12 block-shadow r-12 mb-20">
                                            <!-- Icon -->
                                            <div class="fbox-ico">
                                                <div class="shape-ico">
                                                    <img class="p-0"
                                                        src="https://manage.arrowcapital.in/public/upload/banks/{{ $offersData[0]['bank_image'] }}"
                                                        alt="bank" width="160">
                                                </div>
                                            </div> <!-- End Icon -->

                                            <!-- Text -->
                                            <div class="fbox-txt">
                                                <h6 class="s-12">Loan Amount</h6>
                                                <p class="s-14 text-black">&#8377;
                                                    {{ formatePriceIndia($offersData[0]['loanAmount']) }}</p>
                                                <hr class="custm-HR" />

                                                <h6 class="s-12">Max Tenure</h6>
                                                <p class="s-14 text-black">{{ $offersData[0]['tenures'] }} Months</p>
                                                <hr class="custm-HR" />

                                                <h6 class="s-12">Best Rate</h6>
                                                <p class="s-14 text-black">{{ $offersData[0]['roi'] }}% P.A</p>
                                            </div>
                                        </div>
                                    </div>

                                    @foreach($offersData as $index => $item)
                                    @if($index == 1)
                                    @continue
                                    @endif

                                    <div class="col-lg-4 col-md-6 col-12 lockoffers">
                                        
                                        <!-- <div class="lock-icon">
                                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.25 10.0546V8C5.25 4.27208 8.27208 1.25 12 1.25C15.7279 1.25 18.75 4.27208 18.75 8V10.0546C19.8648 10.1379 20.5907 10.348 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.40931 10.348 4.13525 10.1379 5.25 10.0546ZM6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C16.867 10 16.4515 10 16 10H8C7.54849 10 7.13301 10 6.75 10.0036V8ZM8 17C8.55228 17 9 16.5523 9 16C9 15.4477 8.55228 15 8 15C7.44772 15 7 15.4477 7 16C7 16.5523 7.44772 17 8 17ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17ZM17 16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16C15 15.4477 15.4477 15 16 15C16.5523 15 17 15.4477 17 16Z"
                                                    fill="#1C274C" />
                                            </svg>
                                        </div> -->
                                          <span class="badge badge-success w-100 text-center"
                                            style="border-radius: 12px 12px 0 0;">Most Recommended Offer*</span>

                                        <div id="fb-12-3"
                                            class="fbox-12 bg--white-100 block-shadow r-12 mb-20 ">
                                            
                                            <!-- Icon -->
                                            <div class="fbox-ico">
                                                <div class="shape-ico">
                                                    <img class="p-0"
                                                        src="https://manage.arrowcapital.in/public/upload/banks/{{ $item['bank_image'] }}"
                                                        alt="bank" width="160">
                                                </div>
                                            </div> <!-- End Icon -->

                                            <!-- Text -->
                                            <div class="fbox-txt">
                                                <h6 class="s-12">Loan Amount</h6>
                                                <p class="s-14 text-black">&#8377;
                                                    {{ formatePriceIndia($item['loanAmount']) }}</p>
                                                <hr class="custm-HR" />

                                                <h6 class="s-12">Max Tenure</h6>
                                                <p class="s-14 text-black">-- Months</p>
                                                <hr class="custm-HR" />

                                                <h6 class="s-12">Best Rate</h6>
                                                <p class="s-14 text-black">-.--% P.M</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="otp-velidation-text r-16 shadow-none bg--blue-200 border mt-2">
                                    <div class="card-body py-3">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7">
                                                <div class="d-flex align-items-center mb-lg-0 mb-3">
                                                    <div>
                                                        <span class="flaticon-target color--theme"></span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 w-400 s-12 ms-2 mt-0">Soft check only — won't
                                                            impact your credit score.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="text-end form-btn">
                                                    <button type="submit"
                                                        class="btn btn--green-300 hover--tra-black r-100 hover--theme submit unlockBtn text-uppercase btn-sm">Unlock
                                                        Your
                                                        Offers! <span
                                                            class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>

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
    </div>
</section>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('.unlockBtn').click(function() {
        var btn = $(this);
        btn.html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Unlock Your Offers!'
        ).prop('disabled', true);
        setTimeout(function() {
            window.location.href = `{{ route('self.apply.buyNow') }}`;
        }, 2000); // Delay of 3 seconds (3000 milliseconds)
    });

    function toggleAccordion() {
        if ($(window).width() <= 767) {
            $("#flush-collapseOne").removeClass("show"); // Collapse for small screens
        } else {
            $("#flush-collapseOne").addClass("show"); // Open for larger screens
        }
    }

    toggleAccordion(); // Call on page load
    $(window).resize(toggleAccordion); // Call on window resize
})
</script>
@endpush