@extends('layouts.selfapply')
@push('css')
    {{-- write or link your css file and styles tag here --}}
    <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .accordion-button {
            background-color: #f8f8fb !important;
        }

        .accordion-button:focus {
            box-shadow: none !important;
        }

        .contact-form .form-select {
            margin-bottom: 0px !important;
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

        /*@media screen and (max-width:991px){
                        .input-group-text{ padding:1.06rem 1.06rem; }
                    }
                    @media screen and (min-width:992px) and (max-width:1199px){
                        .input-group-text{ padding:1rem 1rem;margin-top:1px; }
                    }*/
    </style>
@endpush
@section('content')
    <!-- main section starts -->

    <section
        class="bg--white-100 bg--fixed hero-section personal-details-form pt-100 pb-80 min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-6 col-lg-6 self-apply-form">
                    <div id="hero-8-form" class="border r-24">
                        <span class="color--theme text-uppercase s-14 fw-bold mb-5 d-block">enter your loan amount</span>
                        <h4 class="fw-bolder mb-10">Enter Following Details</h4>
                        <p class="mb-30 color--grey mt-0">Kindly enter your details for personalized offers.</p>
                        <form method="post" action="{{ route('self.apply.loan.details.store') }}"
                            class="request-form save-form-3 needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-12 range">
                                    <div class="range__value form-group-range">
                                        <div class="form-group-range w-100 border r-12 bg-transparent">
                                            <span class="w-100 text-center"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="range mt-2">
                                    <div class="d-flex justify-content-between required-amount mt-4">
                                        <span class="text-uppercase s-14 mb-2 fw-bold color--grey">enter required
                                            amount</span>
                                        <span class="text-uppercase s-14 mb-2 fw-bold color--grey">₹50K – ₹10L</span>
                                    </div>
                                    <div class="form-group range__slider">
                                        <input type="range" step="10000">
                                        <input type="hidden" id="loanAmount" value="" name="loan_amount">
                                    </div>
                                    <div class="d-flex justify-content-between required-price">
                                        <span class="text-uppercase s-14 mb-2 mt-2 fw-bold color--grey">₹50,000</span>
                                        <span class="text-uppercase s-14 mb-2 mt-2 fw-bold color--grey">₹10,00,000</span>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-4 mb-2">
                                    <label for="form_mobile"
                                        class="position-static p-0 text-uppercase s-14 mb-2 fw-bold color--grey">enter
                                        monthly income</label>
                                    <div class="input-group r-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">&#8377;</span>
                                        </div>
                                        <input type="text" name="monthly_income" id="monthly_income"
                                            class="numeric-input form-control mb-0"
                                            placeholder="Enter Monthly Income (&#8377;)" autocomplete="off"
                                            inputmode="numeric">
                                    </div>
                                    @component('components.ajax-error', ['field' => 'monthly_income'])
                                    @endcomponent
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label for="form_mobile"
                                        class="position-static p-0 text-uppercase s-14 mb-2 fw-bold color--grey">enter
                                        current emi (if any)</label>
                                    <div class="input-group r-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">&#8377;</span>
                                        </div>
                                        <input type="text" name="current_emi" id="current_emi" value=""
                                            class="numeric-input form-control mb-0"
                                            placeholder="Enter Current EMI (&#8377;) (If Any)" autocomplete="off"
                                            inputmode="numeric">
                                    </div>
                                </div>

                                <div class="col-md-12 form-btn mt-2">
                                    <button type="submit"
                                        class="btn submit processNowBtn btn--green-300 r-100 hover--tra-black text-uppercase"
                                        id="processNowBtn"
                                        onclick="_tfa.push({notify: 'event', name: 'self_lead', id: 1776413})">Process
                                        Now <span class="fbox-ico ico-10"> <span
                                                class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 gr--smoke">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="form-holder">
                        <div class="contact-form-notice">
                            <p class="s-14">
                                Range of Loan tenure is up to 72 months with Annual Interest Rates ranging between 11% - 36%
                                and the processing fee up to 2%. For Example: Taking in consideration a personal loan of
                                Rs.1,00,000 availed at 11%* interest rate for a tenure of 6* years with 2%* processing fee,
                                the APR will be 11.75%*. *T&C Apply. All these numbers are tentative/indicative, the final
                                loan specifics may vary depending upon the customer profile and NBFCs’ criteria, rules &
                                regulations, and terms &amp; conditions.
                            </p>
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
            $('.save-form-3').submit(function(event) {
                var status = document.activeElement.innerHTML;
                event.preventDefault();
                if (status) {
                    $('.ajax-error').html('');
                    var data = new FormData(this);
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
                            $('#processNowBtn').html(
                                '<span class="spinner-border spinner-border-sm"></span> Process Now'
                            );
                            $('#processNowBtn').attr('disabled', true);
                        },
                        success: function(result) {
                            $(this).attr("disabled", false);
                            if (result.type === 'SUCCESS') {
                                window.location.href =
                                    `{{ route('self.apply.personal.details') }}`;
                            } else {
                                toastr.error(result.message);
                                $('#processNowBtn').html('Process Now');
                                $('#processNowBtn').attr('disabled', false);
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
                            $('#processNowBtn').html('Process Now');
                            $('#processNowBtn').attr('disabled', false);
                        }
                    });
                }
            });
        })
    </script>
@endpush
