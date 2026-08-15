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
                            <i class="far fa-check-circle fs-1 color--green-300"></i>
</div>
                            <h4 class="fw-bolder text-black mb-15">Congratulations!,</h4>
                            <h4 class="fw-bolder color--green-300 mb-15">Payment Successful!</h4>
                            <p class="mb-0">Your payment has been successfully processed.</p>
                            <p class="mb-0">You can now access your pre-approved offers.</p>
                        </div>

                        <hr class="divider my-3" />

                        <div class="text-center mb-20">
                            <div class="row g-3">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="border rounded-4 px-3 py-2 bg--white-300 h-100">
                                        <p class="fw-bold mb-0">Customer Portal</p>
                                        <p class="mt-0 color--grey">Your service is active. Log in to the portal.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-12"> 
                                    <div class="border rounded-4 px-3 py-2 bg--white-300 h-100">
                                        <p class="fw-bold mb-0">Invoice</p>
                                        <p class="mt-0 color--grey">Invoice is available for download in portal.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="border rounded-4 px-3 py-2 bg--white-300 h-100">
                                        <p class="fw-bold mb-0">Consultant</p>
                                        <p class="mt-0 color--grey">Our team will contact you within 24 hrs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="divider my-3" />

                        <div class="text-center">
                            <a href="{{ route('customer.authenticate2') }}"
                                class="btn btn-sm r-04 btn--green-300 hover--tra-black r-100">Access Pre-Approved
                                Offers!</a>

                      <div class="mt-10">  <a
                                    href="{{ route('front.raise.request') }}" class="text-success">Start a new application</a> 
</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection