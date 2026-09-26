<?php $this->load->view('includes/header-apply');
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
?>

<div class="main-hero main-hero5 _relative">
    <div class="container">
        <div class="space20"></div>
        <div class="contact-form-all process-box">
            <div class="row">
                <div class="hadding5">
                    <h2 class="text-center">Digital Personal Loan Application Process</h2>
                    <div class="space16"></div>
                    <p class="text-dark text-center">Pre-Approved Offer :</span> Congratulations! You’re Eligible For
                        <span class="fw-bold text-success">Rs. <?php echo $eligibilityamtindia; ?></span> Pre-Approval
                        Offered By Our Partnered NBFCs.</p>
                    <div class="space30"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <?php echo form_open('digital/getpreApproval', array('id' => 'submitForm2', 'class' => '', 'novalidate' => 'novalidate')); ?>
                    <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                        class="form-control" required>
                    <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                        class="form-control" required>
                    <input type="hidden" name="mobile" value="<?php echo $userdetails['mobile']; ?>"
                        class="form-control" required>
                    <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                        class="form-control" required>
                    <input type="hidden" name="tenure" id="tenure" value="36" class="form-control" required>
                    <input type="hidden" name="eligibilityamt" value="<?php echo $eligibilityamt; ?>"
                        class="form-control" required>
                    <div class="row">
                        <div class="col-lg-12 align-items-center">
                            <p class="text-dark text-center mb-3 fs-6">Select Your Suitable EMI Option:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 checkout-input-selact theme-btn11 mb-2" onclick="selectPlan('plan-1-radio')">
                            <input type="radio" class="form-check-input" id="plan-1-radio" name="tenure" value="12"
                                checked />
                            <label class="form-check-label m-l-10" for="plan-1-radio">
                                12 Months <i class="fa fa-long-arrow-alt-right m-r-10 m-l-10"></i>
                                Rs.<?php echo calPMT($userdetails['apr'], 1, $eligibilityamt); ?>
                            </label>
                        </div>
                        <div class="col-5 checkout-input-selact theme-btn11 mb-2" onclick="selectPlan('plan-2-radio')">
                            <input type="radio" id="plan-2-radio" name="tenure" value="24" class="form-check-input" />
                            <label class="form-check-label m-l-10" for="plan-2-radio">
                                24 Months <i class="fa fa-long-arrow-alt-right m-r-10 m-l-10"></i> Rs.
                                <?php echo calPMT($userdetails['apr'], 2, $eligibilityamt); ?>
                            </label>
                        </div>
                        <div class="col-5 checkout-input-selact theme-btn11 mb-2" onclick="selectPlan('plan-3-radio')">
                            <input type="radio" id="plan-3-radio" name="tenure" value="36" class="form-check-input" />
                            <label class="form-check-label m-l-10" for="plan-3-radio">
                                36 Months <i class="fa fa-long-arrow-alt-right m-r-10 m-l-10"></i> Rs.
                                <?php echo calPMT($userdetails['apr'], 3, $eligibilityamt); ?>
                            </label>
                        </div>

                        <div class="col-5 checkout-input-selact theme-btn11 mb-2" onclick="selectPlan('plan-4-radio')">
                            <input type="radio" id="plan-4-radio" name="tenure" value="48" class="form-check-input" />
                            <label class="form-check-label m-l-10" for="plan-4-radio">
                                48 Months <i class="fa fa-long-arrow-alt-right m-r-10 m-l-10"></i> Rs.
                                <?php echo calPMT($userdetails['apr'], 4, $eligibilityamt); ?>
                            </label>
                        </div>

                        <div class="col-5 checkout-input-selact theme-btn11 mb-2" onclick="selectPlan('plan-5-radio')">
                            <input type="radio" id="plan-5-radio" name="tenure" value="60" class="form-check-input" />
                            <label class="form-check-label m-l-10" for="plan-5-radio">
                                60 Months <i class="fa fa-long-arrow-alt-right m-r-10 m-l-10"></i>
                                Rs.<?php echo calPMT($userdetails['apr'], 5, $eligibilityamt); ?>
                            </label>
                        </div>

                        <div class="col-5 checkout-input-selact theme-btn11 mb-2" onclick="selectPlan('plan-6-radio')">
                            <input type="radio" id="plan-6-radio" name="tenure" value="72" class="form-check-input" />
                            <label class="form-check-label m-l-10" for="plan-6-radio">
                                72 Months <i class="fa fa-long-arrow-alt-right m-r-10 m-l-10"></i> Rs.
                                <?php echo calPMT($userdetails['apr'], 6, $eligibilityamt); ?>
                            </label>
                        </div>

                        <div class="col-lg-12 text-center js-confetti">
                            <div class="space24"></div>
                            <button type="submit" id="form-submit2" class="button2">Get Offer</button>
                            <div class="form-group col-md-12 text-center m-b-0">
                                <hr />
                                <p class="m-b-0"><small>How is pre-approved loan offer calculated? <a
                                            class="text-primary" data-bs-target="#modal" data-bs-toggle="modal" href="#">Know
                                            Here</a></small></p>
                            </div>
                            <div class="space24"></div>
                        </div>
                    </div>
                    </form>
                </div>

                <div class="col-lg-4">
                    <div class="project-details-box">
                        <div class="project-details-hadding">
                            <h6 class="fs-5">User Details</h6>
                        </div>
                        <ul class="Category-list">
                            <li><strong>User Name: </strong> <span><?= $userdetails['fullname'] ?></span></li>
                            <li><strong>Mobile:</strong> <span><?= $userdetails['mobile'] ?></span></li>
                            <li><strong>Loan Type:</strong> <span><?php echo $userdetails['loanname']; ?> </span></li>
                            <li><strong>Loan Amount:</strong>
                                <span><?= formatePriceIndia($userdetails['loanamount']) ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--=====Service Start=======-->
<div class="counter9 sp3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12  m-auto text-center">
                <div class="hadding2 text-center">
                    <h2 class="text-dark mb-3">Your Pre-Approved Loan Offers From Partnered NBFCs</h2>
                    <div class="space24"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
		$cnt=1; 
		foreach($roipackages as $row) {
		?>
            <div class="col-lg-3 col-md-6">
                <div class="service5-box">
                    <div class="">
                        <img src="<?php echo base_url('assets/img/banks/' . $row->bank_image); ?>" alt="">
                    </div>
                    <div class="hadding5">
                        <div class="service5-border"></div>
                        <h4><?php echo $row->bank_name; ?></h4>
                        <div class="service5-border"></div>
                        <p class="mb-2 text-dark">Rs. <?php echo formatePriceIndia($eligibilityamt); ?></p>
                        <p class="mb-2 text-dark">EMI : Rs.
                            <?php echo calPMT($row->roi, $row->termsyears, $eligibilityamt); ?></p>
                        <p class="mb-2 text-dark">ROI : <?php echo $row->roi."%"; ?></p>
                        <p class="mb-0 text-dark">Terms : <?php echo $row->termsmonths." months"; ?></p>
                    </div>
                </div>
            </div>
            <?php 
			$cnt++;
		} ?>
        </div>
        <div class="text-center">
            <p class="mt-4 mb-0"><small>Disclaimer - The above data is tentative and purely on the information provided
                    by
                    you. Final EMI, loan sanction, loan approval, and loan amount depend on customer profile and NBFCs
                    criteria and rules & regulations.</small></p>
        </div>
    </div>
</div>
<!--=====Service end=======-->

<div class="modal fade" id="modal" role="modal" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-label">How is pre-approved loan offer calculated?</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-justify">
                        <p>The Pre-Approved Loan Offer and the amount mentioned in it are solely shown based on the
                            software calculation done on Monthly Income and Current Monthly EMI entered by you. This
                            'Pre-Approved Loan Offer' is tentative and not the final loan approval – as the final loan
                            approval is given by the bank only, based on the bank's rules and regulations and the
                            customer profile.</p>

                        <p><strong>Reference Calculation:</strong>
                            <br />Consider a person who has entered the following details –
                            <br />Monthly Income: Rs.1,00,000
                            <br />Current Monthly EMI: Rs.30,000
                        </p>

                        <p>Based on these details, the person is left with Rs.70,000 in hand (deducting current EMI)
                            every month. So, according to the general rules of the banks, the EMI of 50% of the in-hand
                            amount can be approved - in this example, it's 35,000. And based on the EMI and rate of
                            interest (12.5% tentatively), the eligible amount is shown in the Pre-Approved Loan Offer -
                            considering the mentioned calculation.</p>

                        <p>Note: Pre-approved loan offer is tentative. It should not be considered as the final loan
                            approval. The final loan approval is given by the bank only, according to their rules and
                            criteria and the customer profile.</p>

                        <p class="m-b-0">Note: As per the details/information entered by the user, even if the actual
                            pre-approved amount is lesser than 2 Lakhs, the pre-approved amount shown on the website
                            will be Rs.2 Lakhs (minimum). And, even if the actual pre-approved amount is more than 8.5
                            Lakhs, the pre-approved amount shown on the website will be Rs.8.5 Lakhs (maximum). The
                            pre-approved amount/pre-approved loan offers are tentative – the final loan approval, loan
                            sanction, and disbursement depend on the customer profile and the NBFCs’ rules and
                            regulations.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="button2" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer-apply'); ?>
<script>
function selectPlan(planId) {
    document.getElementById(planId).checked = true;
}
</script>