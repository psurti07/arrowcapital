@extends('layouts.selfapply')
@push('css')
@endpush

@section('content')
<section 
    class="bg--white-100 bg--fixed pb-80 personal-details-form d-flex align-items-center success-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-7 col-12 m-auto">
                <div class="card shadow r-24">
                    <div class="card-body p-4">
                        <div class="text-center mb-20">
                              <div class="mb-20">
                           <i class="far fa-times-circle text-danger fs-1"></i>
</div>
                            <h4 class="fw-bolder text-danger mb-15">Payment Unsuccessful!</h4>
                            <p class="mb-0">We're sorry, but your payment could not be processed.</p>
                            <p class="mt-0"> Please try again or contact our support team for assistance.</p>
                            <p>हमें खेद है, लेकिन आपका भुगतान प्रोसेस नहीं हो सका। कृपया पुनः प्रयास करें या सहायता के लिए हमारी सपोर्ट टीम से संपर्क करें।</p>
                        </div>

                        <hr class="divider my-3" />

                        <div class="text-center mb-20">
                            <p>Common Reasons for Payment Failure:</p>

                            <div class="row gy-2 gx-2">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="border rounded-4 px-3 py-2 bg--red-100 h-100 border-0">
                                        <p class="fw-bold mb-0">Card Issue</p>
                                        <p class="mt-0 color--grey">Your service is active. Log in to the portal.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="border rounded-4 px-3 py-2 bg--red-100 h-100 border-0">
                                        <p class="fw-bold mb-0">Network</p>
                                        <p class="mt-0 color--grey">Invoice is available for download in portal.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="border rounded-4 px-3 py-2 bg--red-100 h-100 border-0">
                                        <p class="fw-bold mb-0">Cancelled</p>
                                        <p class="mt-0 color--grey">Our team will contact you within 24 hrs.</p>
                                    </div>
                                </div>
                            </div>

                            <p class="mt-20 mb-0 small color--green-300 border border-success rounded-pill px-3 py-2 d-inline-block">Don't worry! No amount has been deducted from your
                                account.</p>
                        </div>
 
                        <div class="text-center">
                            <a href="{{ route('self.apply.offer4') }}"
                                class="btn btn-sm btn--green-300 hover--tra-black r-100">Try another payment
                                method</a>

                            <p class="text-center mt-20">If you've any queries/ issues, kindly raise a request here: <a
                                    href="{{ route('front.raise.request') }}" class="text-success">Click Here</a></p>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection