<?php $this->load->view('customer/includes/header-apply.php');
$isall = 0;
if($profiledata->cardtype == 12) {
	$loantype = "bl";
}
else {
	$loantype = "pl";
}
?>

<div class="section-sm bg-lend-blue pt-0 pb-0" id="home">
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">Payout Documents</h1>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Career Image">
            </div>
        </div>
    </div>
</div>

<div class="section-xl bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="bg-white border-radius-1 box-shadow p-5">
                    <div class="price body">
                        <h4>Document List</h4>
                        <ul class="list-unstyled mt-4">
                            <li class="font-18">
                                <div class="feature-box">
                                    <div class="feature-box-icon  text-white">
                                        <img src="<?=$docflags['gstdoc'] == 1 ? base_url('assets/images/check.png') : base_url('assets/images/cross.png') ?>"
                                            alt="" height="20px" width="20px">
                                    </div>
                                    <p class="text-dark">GST Documents</p>
                                </div>
                            </li>
                            <li class="font-18 mt-035">
                                <div class="feature-box">
                                    <div class="feature-box-icon  text-white">
                                        <img src="<?=$docflags['aadharcard'] == 1 ? base_url('assets/images/check.png') : base_url('assets/images/cross.png') ?>"
                                            alt="" height="20px" width="20px">
                                    </div>
                                    <p class="text-dark">Aadhar Card</p>
                                </div>

                            </li>
                            <li class="font-18 mt-035">
                                <div class="feature-box">
                                    <div class="feature-box-icon  text-white">
                                        <img src="<?=$docflags['pancard'] == 1 ? base_url('assets/images/check.png') : base_url('assets/images/cross.png') ?>"
                                            alt="" height="20px" width="20px">
                                    </div>
                                    <p class="text-dark">PAN Card</p>
                                </div>

                            </li>
                            <li class="font-18 mt-035">
                                <div class="feature-box">
                                    <div class="feature-box-icon  text-white">
                                        <img src="<?=$docflags['cancelcheque'] == 1 ? base_url('assets/images/check.png') : base_url('assets/images/cross.png') ?>"
                                            alt="" height="20px" width="20px">
                                    </div>
                                    <p class="text-dark">Cancel Cheque</p>
                                </div>

                            </li>
                        </ul>
                        <p class="text-danger  font-14">Note : All of the above documents are mandatory.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <!-- GST Number start -->
                    <?php if($docflags['gstdoc'] == 0) { ?>
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <form id="submitForm11" enctype="multipart/form-data" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="gstdoc" required>
                                    <input type="hidden" name="customerid" value="<?php echo $profiledata->id; ?>"
                                        required>
                                    <h6>GST Document *</h6>
                                    <input id="user_gstdoc_number" type="text" name="userfile_number"
                                        placeholder="GST Number *"
                                        value="<?php echo ($docflags['gstdoc_number'] != 0) ? $docflags['gstdoc_number'] : ''; ?>"
                                        required>
                                    <div class="error-message" id="user_gstdoc_number-message"></div>
                                    <div class="form-group">
                                        <input type="file" name="userfile" id="user_gstdoc" aria-required="true"
                                            required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
                                        <div class="error-message mb-3" id="user_gstdoc-message"></div>
                                        <button type="submit"
                                            class="button button-md button-radius button-border-2 button-outline-turquiose">UPLOAD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php $isall += 1; } ?>
                    <!-- GST Number end -->
                    <!-- Aadhaar card start -->
                    <?php if($docflags['aadharcard'] == 0) { ?>
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <form action="<?=base_url('customer/profile/uploadpayoutdocument');?>" id="submitForm12"
                                    class="" enctype="multipart/form-data" novalidate="novalidate" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="aadharcard" required>
                                    <input type="hidden" name="customerid" value="<?php echo $profiledata->id; ?>"
                                        required>
                                    <h6>Aadhaar Card *</h6>
                                    <input id="user_aadharcard_number" type="text" name="userfile_number"
                                        class="numeric-input form-control" placeholder="Aadhar Card Number *"
                                        value="<?php echo ($docflags['aadharcard_number'] != 0) ? $docflags['aadharcard_number'] : ''; ?>"
                                        required maxlength="12" minlength="12">
                                    <div class="error-message" id="user_aadharcard_number-message"></div>
                                    <div class="form-group">
                                        <input type="file" name="userfile" id="user_aadharcard" aria-required="true"
                                            required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
                                        <div class="error-message" id="user_aadharcard-message"></div>
                                        <button type="submit"
                                            class="button button-md button-radius button-border-2 button-outline-turquiose">UPLOAD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php $isall += 1; } ?>
                    <!-- Aadhaar card end -->
                    <!-- Pan card start -->
                    <?php if($docflags['pancard'] == 0) { ?>
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <form action="<?=base_url('customer/profile/uploadpayoutdocument');?>" id="submitForm13"
                                    class="" enctype="multipart/form-data" novalidate="novalidate" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="pancard" required>
                                    <input type="hidden" name="customerid" value="<?php echo $profiledata->id; ?>"
                                        required>
                                    <h6>PAN Card *</h6>
                                    <input id="user_pancard_number" type="text" name="userfile_number"
                                        class="form-control" placeholder="PAN Card Number *"
                                        value="<?php echo ($docflags['pancard_number'] != 0) ? $docflags['pancard_number'] : ''; ?>"
                                        required>
                                    <div class="error-message" id="user_pancard_number-message"></div>
                                    <div class="form-group">
                                        <input type="file" name="userfile" id="user_pancard" aria-required="true"
                                            required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
                                        <div class="error-message" id="user_pancard-message"></div>
                                        <button type="submit"
                                            class="button button-md button-radius button-border-2 button-outline-turquiose">UPLOAD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php $isall += 1; } ?>
                    <!-- Pan card end -->
                    <!-- Cancel Cheque start -->
                    <?php if($docflags['cancelcheque'] == 0) { ?>
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <form action="<?=base_url('customer/profile/uploadpayoutdocument');?>" id="submitForm15"
                                    class="" enctype="multipart/form-data" novalidate="novalidate" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="cancelcheque" required>
                                    <input type="hidden" name="customerid" value="<?php echo $profiledata->id; ?>"
                                        required>
                                    <h6>Cancel Cheque *</h6>
                                    <div class="form-group">
                                        <input type="file" name="userfile" id="user_cheque" aria-required="true"
                                            required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
                                        <div class="error-message" id="user_cheque-message"></div>
                                        <button type="submit"
                                            class="button button-md button-radius button-border-2 button-outline-turquiose">UPLOAD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php $isall += 1; } ?>
                    <!-- Cancel Cheque end -->
                </div>
                <?php if($isall == 0 && $docflags['isVerified'] == 0) { ?>
                <div class="col-lg-12">
                    <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                        <div class="price body">
                            <h4>Upload Successful</h4>
                            <p class="mb-0">Your documents are successfully submitted. Our Company Executive will verify
                                the documents and contact you shortly.</p>
                        </div>
                    </div>
                </div>
                <?php } else if($isall == 0 && $docflags['isVerified'] == 1) { ?>
                <div class="col-lg-12">
                    <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                        <div class="price body">
                            <h4>Verification Successful</h4>
                            <p class="mb-0">Dear Customer, your documents are successfully verified. Our Company
                                Executive will contact you soon for your loan process.</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php if($docflags['gstdoc_number'] != '' || $docflags['aadharcard_number'] != '' || $docflags['pancard_number'] != '') { ?>
                <div class="col-lg-12">
                    <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                        <div class="price body">
                            <?php
								if($docflags['gstdoc_number'] != '') {
									echo "<h6>GST Number - ".$docflags['gstdoc_number']."</h6>";
								}
								if($docflags['aadharcard_number'] != '') {
									echo "<h6 class='mt-2'>Aadhar Card Number - ".$docflags['aadharcard_number']."</h6>";
								}
								if($docflags['pancard_number'] != '') {
									echo "<h6 class='mt-2'>PAN Card Number - ".$docflags['pancard_number']."</h6>";
								}
								?>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <form id='submitForm21' method="post">
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <input type="hidden" name="customerid" value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
                                <textarea id="remarks" name="remarks" class="form-control" required
                                    placeholder="Your Experience"
                                    style="height: 100px"><?php echo $docflags['remarks']; ?></textarea>
                                <div class="error-message" id="remarks-message"></div>
                                <button type="form-submit1"
                                    class="button-dark button-md button-radius button-turquiose">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('customer/includes/footer-apply.php'); ?>
<script type="text/javascript" src="<?=base_url('assets/js/payoutdoc-validate.js')?>"></script>