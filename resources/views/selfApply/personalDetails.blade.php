    @extends('layouts.selfapply')
    @push('css')
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

.contacts-section .fbox-ico .fbox-image {
    width: 56px;
    height: 56px;
}

.user-details-table .fbox-ico .fbox-image {
    width: 32px;
    height: 32px;
}
    </style>
    @endpush

    @section('content')

    <section
        class="personal-details-form inner-page-hero contacts-section division min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center mb-md-0 mb-35">
                <div class="col-md-4 col-lg-4 col-12 order-md-1 order-2 mt-md-0 mt-20">
                    <div class="txt-block left-column gr--white border  p-4 r-24">
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
                                            <p class="s-12 text-grey mb-0">Mobile :</p>
                                            <p class="s-14 text-black mt-0 w-600">{{ Cookie::get('user_mobile') }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between px-3 py-2">
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
                                    <p class="s-11 text-black w-600 mb-0">Loan Details</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico text-white bg--green-500 d-flex align-items-center justify-content-center"><span
                                            class="flaticon-right-arrow s-12"></span></div>
                                </div>
                                <div class="cbox-12-txt">
                                    <p class="s-11 text-black w-600 mb-0">Personal Details</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico border-dark-subtle bg--black-100 d-flex align-items-center justify-content-center"><span
                                            class="flaticon-right-arrow s-12"></span></div>
                                </div>
                                <div class="cbox-12-txt">
                                    <p class="s-11 mb-0">Unlock Offers</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico border-dark-subtle bg--black-100 d-flex align-items-center justify-content-center"><span
                                            class="flaticon-right-arrow s-12"></span></div>
                                </div>
                                <div class="cbox-12-txt">
                                    <p class="s-11 mb-0">Purchase Plan</p>
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
                <div class="col-md-8 col-lg-8 col-12 mt-md-0 mt-20 order-md-2 order-1">
                    <div class="card bg-white shadow border-0 r-24 p-4">
                        <form action="{{ route('self.apply.personal.details.store') }}" id="personalDetailForm"
                            class="contact-form save-form-4" novalidate="novalidate" method="post"
                            accept-charset="utf-8">
                            <div class="card-body p-0">
                                <div
                                    class="fbox-7 fb-1 r-18 border-0 bg-white d-flex align-items-center justify-content-between p-0 mb-0">

                                    <div class="fbox-ico d-flex align-items-center justify-content-start mb-3">
                                        <div>
                                            <div
                                                class="fbox-image d-flex align-items-center justify-content-center r-16 ico-20 btn--green-300">
                                                <span class="flaticon-briefcase text-white lh-1"></span>
                                            </div>
                                        </div>
                                        <div class="fbox-txt ms-3">
                                            <h4 class="color--blue-5000  mb-10 w-700 d-block">Personal Details
                                            </h4>
                                            <p class="mt-1">For Our Experts To Analyze Your Loan Requirements.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <div class="form-group form-floating">
                                            <label for="firstname"
                                                class="position-static p-0 text-uppercase s-14 mb-1 w-600 color--grey">First
                                                Name *</label>
                                            <input id="firstname" name="firstname" type="text"
                                                class="form-control name mb-0 pt-2" placeholder=""
                                                value="{{ old('firstname') }}">

                                        </div>
                                        @component('components.ajax-error',['field'=>'firstname'])@endcomponent
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <div class="form-group form-floating">
                                            <label for="lastname"
                                                class="position-static p-0 text-uppercase s-14 mb-1 w-600 color--grey">Last
                                                Name *</label>
                                            <input id="lastname" name="lastname" type="text"
                                                class="form-control name mb-0 pt-2" placeholder=""
                                                value="{{ old('lastname') }}">
                                        </div>
                                        @component('components.ajax-error',['field'=>'lastname'])@endcomponent
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <div class="form-group form-floating">
                                            <label for="email"
                                                class="position-static p-0 text-uppercase s-14 mb-1 w-600 color--grey">Email
                                                *</label>
                                            <input id="email" name="email" type="email"
                                                class="form-control name mb-0 pt-2" placeholder=""
                                                value="{{ old('email') }}">
                                        </div>
                                        @component('components.ajax-error',['field'=>'email'])@endcomponent
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <div class="form-group form-floating">
                                            <label for="pincode"
                                                class="position-static p-0 text-uppercase s-14 mb-1 w-600 color--grey">Pincode
                                                *</label>
                                            <input id="pincode" name="pincode" type="text"
                                                class="form-control name numeric-input mb-0 pt-2" placeholder=""
                                                value="{{ old('pincode') }}" maxlength="6" minlength="6"
                                                inputmode="numeric">
                                        </div>
                                        @component('components.ajax-error',['field'=>'pincode'])@endcomponent
                                    </div>
                                    <div id="loader" style="display:none;">
                                        Loading...
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <div class="form-group form-floating">
                                            <label for="city"
                                                class="position-static p-0 text-uppercase s-14 mb-1 w-600 color--grey">City
                                                *</label>
                                            <input id="city" name="city" type="text" class="form-control mb-0 pt-2"
                                                placeholder="" value="{{ old('city') }}">
                                        </div>
                                        @component('components.ajax-error',['field'=>'city'])@endcomponent
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <div class="form-group form-floating">
                                            <!--<input id="state" name="state"  type="text" class="form-control mb-0" placeholder="" value="{{ old('state') }}">-->
                                            <label for="state"
                                                class="position-static p-0 text-uppercase s-14 mb-1 w-600 color--grey">State
                                                *</label>
                                            <select id="state" name="state" class="form-control mb-0 pt-2"
                                                style="font-size:16px!important;">
                                                <option value="">Select State</option>
                                                {!! getStateOption(old('state')) !!}
                                            </select>
                                        </div>
                                        @component('components.ajax-error',['field'=>'state'])@endcomponent
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
                                                                <p class="mb-0 w-400 s-12 ms-2 mt-0">Soft check only —
                                                                    won't
                                                                    impact your credit score.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <div class="text-start">
                                                            <button type="submit"
                                                                class="btn btn--green-300 hover--tra-black submit w-100 r-100 text-uppercase"
                                                                id="submit-btn">Continue <span class="fbox-ico ico-10">
                                                                    <span
                                                                        class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                                                        </div>
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
    $('#pancard').on('input', function() {
        $(this).val($(this).val().toUpperCase());
    });
    $('.save-form-4').submit(function(event) {
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
                    $('#submit-btn').html(
                        '<span class="spinner-border spinner-border-sm"></span> Continue'
                    );
                    $('#submit-btn').attr('disabled', true);
                },
                success: function(result) {
                    $(this).attr("disabled", false);
                    if (result.type === 'SUCCESS') {
                        window.location.href = `{{ route('self.apply.get.offers') }}`;
                    } else {
                        toastr.error(result.message);
                        $('#submit-btnsubmit-btn').html('Continue');
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
                    $('#submit-btn').html('Continue');
                    $('#submit-btn').attr('disabled', false);
                }
            });
        }
    });
    /* get postal data like city and state */
    $('#pincode').on('input', function() {
        var pincode = $(this).val();

        // Only make request if pincode is of 6 digits
        if (pincode.length === 6) {
            $('#loader').show(); // Show loader
            $.ajax({
                url: `{{ route('self.apply.postal.details') }}`, // Route to the Laravel controller
                type: 'POST',
                data: {
                    pincode: pincode
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // Pass CSRF token
                },
                success: function(response) {
                    $('#loader').hide(); // Hide loader
                    if (response.status === 'success') {
                        // Populate District and State fields
                        $('#city').val(response.district);
                        $('#state').val(response.state);
                    } else {
                        alert(response.message);
                        $('#district').val('');
                        $('#state').val('');
                    }
                },
                error: function() {
                    $('#loader').hide(); // Hide loader on error
                    alert('An error occurred while fetching the details.');
                }
            });
        } else {
            // Clear the fields if pincode length is not 6 digits
            $('#city').val('');
            $('#state').val('');
        }
    });
})
    </script>
    @endpush