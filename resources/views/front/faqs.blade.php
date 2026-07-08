@extends('layouts.front')
@push('css')
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('style-css')
@endpush
@section('content')
<section class="page-hero-section">
    <div class="page-hero-section-overlay bg--green-100 bg--scroll">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12 text-center">
                    <div class="txt-block left-column">
                        <span class="section-id"></span>
                        <h2 class="w-700 mb-0">Frequently Asked <span class="color--green-500">Questions</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faqs-3" class="py-80 faqs-section">
    <div class="container">
        <div class="faqs-3-questions">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-12">
                    <div class="accordion-wrapper">
                        <ul class="accordion">
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="w-600">Is the loan process with ArrowCapital fully online?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>
                                                Yes, the whole loan process of applying for a loan with ArrowCapital is completely online.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="w-600">What are the factors lenders determine while applying for a loan?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>When approving a personal loan, lenders consider factors such as your credit score, monthly income, credit history, and debt-to-income ratio.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="w-600">What CIBIL score is required for a personal loan?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>For a personal loan, a CIBIL score of 650 or higher is required.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="w-600">What are the personal loan eligibility requirements?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>The eligibility criteria for a personal loan are:</p>
                                            <p><strong>For Salaried Professionals:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Minimum Age: 21 years</p>
                                                <p>&bull; Minimum Monthly Salary: ₹15,000 (income should be credited to a bank account)</p>
                                                <p>&bull; Minimum Job Duration: 1 Year </p>
                                            </div>
                                            <p><strong>For Self-Employed Applicants :</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Minimum Age: 21 years</p>
                                                <p>&bull; Income Tax Return Of Minimum 1 Year </p>
                                                <p>&bull; Minimum 1 Year into Business </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-10">
                                <div class="accordion-thumb">
                                    <h6 class="w-600">Which documents are required to apply for a personal loan? </h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>The following documents are required to apply for a personal loan.</p>
                                            <p><strong>For Salaried:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Aadhaar Card</p>
                                                <p>&bull; PAN Card</p>
                                                <p>&bull; Residence Proof: Rent agreement or Utility bills</p>
                                                <p>&bull; Bank Statement </p>
                                                <p>&bull; Income Proof: Salary Slips or Form 16</p>
                                            </div>
                                            <p><strong>For Self-Employed:</strong></p>
                                            <div class="ps-2">
                                                <p>&bull; Aadhaar Card</p>
                                                <p>&bull; PAN Card</p>
                                                <p>&bull; Residence Proof: Rent agreement or Utility bills</p>
                                                <p>&bull; Bank Statement </p>
                                                <p>&bull; Balance Sheet </p>
                                                <p>&bull; Income Computation</p>
                                                <p>&bull; Service Tax Registration, License, Registration Certificate</p>
                                                <p>&bull; Income Tax Returns </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="divider">
@endsection
@push('script-src')
@endpush
@push('scripts')
@endpush