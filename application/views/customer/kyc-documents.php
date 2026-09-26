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
                <h1 class="fw-light text-light m-0">KYC Documents</h1>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Career Image">
            </div>
        </div>
    </div>
</div>

<div class="section-sm bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="bg-white border-radius-1 box-shadow p-5">
                    <div class="price body">
                        <h4>Document List</h4>
                        <ul class="list-unstyled mt-4">
                            <li class=" font-18">
                                <div class="feature-box">
                                    <div class="feature-box-icon  text-white">
                                        <img src="<?=$docflags['profilephoto'] == 1 ? base_url('assets/images/check.png') : base_url('assets/images/cross.png') ?>"
                                            alt="" height="20px" width="20px">
                                    </div>
                                    <p class="text-dark">Profile Photo</p>
                                </div>


                            </li>
                            <li class=" font-18 mt-035">
                                <div class="feature-box">
                                    <div class="feature-box-icon  text-white">
                                        <img src="<?=$docflags['aadharcard'] == 1 ? base_url('assets/images/check.png') : base_url('assets/images/cross.png') ?>"
                                            alt="" height="20px" width="20px">
                                    </div>
                                    <p class="text-dark">Aadhaar Card</p>
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
                                        <img src="<?=$docflags['lightbill'] == 1 ? base_url('assets/images/check.png') : base_url('assets/images/cross.png') ?>"
                                            alt="" height="20px" width="20px">
                                    </div>
                                    <p class="text-dark">Address Proof - Light bill</p>
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
                            <li class="font-18 mt-035">
                                <div class="feature-box">
                                    <div class="feature-box-icon  text-white">
                                        <img src="<?=$docflags['bankstatement'] == 1 ? base_url('assets/images/check.png') : base_url('assets/images/cross.png') ?>"
                                            alt="" height="20px" width="20px">
                                    </div>
                                    <p class="text-dark">Bank Statement - Last 6 months</p>
                                </div>

                            </li>
                            <?php if($profiledata->cardtype == 11) { ?>
                            <li class="font-18 mt-035">
                                <div class="feature-box">
                                    <div class="feature-box-icon  text-white">
                                        <img src="<?=$docflags['formsixteen'] == 1 ? base_url('assets/images/check.png') : base_url('assets/images/cross.png') ?>"
                                            alt="" height="20px" width="20px">
                                    </div>
                                    <p class="text-dark">Form 16</p>
                                </div>

                            </li>
                            <li class="font-18 mt-035">
                                <div class="feature-box">
                                    <div class="feature-box-icon  text-white">
                                        <img src="<?=$docflags['salaryslip'] == 1 ? base_url('assets/images/check.png') : base_url('assets/images/cross.png') ?>"
                                            alt="" height="20px" width="20px">
                                    </div>
                                    <p class="text-dark">Salary Slip</p>
                                </div>

                            </li>
                            <?php } ?>
                            <?php if($profiledata->cardtype == 12) { ?>
                            <li class="font-18 mt-035">
                                <div class="feature-box">
                                    <div class="feature-box-icon  text-white">
                                        <img src="<?=$docflags['businessproof'] == 1 ? base_url('assets/images/check.png') : base_url('assets/images/cross.png') ?>"
                                            alt="" height="20px" width="20px">
                                    </div>
                                    <p class="text-dark">Business Proof</p>
                                </div>

                            </li>
                            <li class="font-18 mt-035">
                                <div class="feature-box">
                                    <div class="feature-box-icon  text-white">
                                        <img src="<?=$docflags['itreturn'] == 1 ? base_url('assets/images/check.png') : base_url('assets/images/cross.png') ?>"
                                            alt="" height="20px" width="20px">
                                    </div>
                                    <p class="text-dark">IT Return</p>
                                </div>

                            </li>
                            <?php } ?>
                        </ul>
                        <p class="text-danger font-14">Note : All of the above documents are not mandatory, provide what
                            you have.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <!-- Profile Photo start -->
                    <?php if($docflags['profilephoto'] == 0) { ?>
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <form id="submitForm11" class="" enctype="multipart/form-data" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="profilephoto" required>
                                    <input type="hidden" name="customerid"
                                        value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
                                    <h6>Profile Photo *</h6>
                                    <div class="form-group">
                                        <input type="file" name="userfile" class="" id="user_photo" aria-required="true"
                                            required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
                                        <div class="error-message" id="user_photo-message"></div>
                                        <button type="submit"
                                            class="button button-md button-radius button-border-2 button-outline-turquiose">UPLOAD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php $isall += 1; } ?>
                    <!-- Profile Photo End -->
                    <!-- Aadhaar card start -->
                    <?php if($docflags['aadharcard'] == 0) { ?>
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <form id="submitForm12" class="" enctype="multipart/form-data" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="aadharcard" required>
                                    <input type="hidden" name="customerid"
                                        value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
                                    <h6>Aadhaar Card *</h6>
                                    <input id="user_aadharcard_number" type="text" name="userfile_number"
                                        class="numeric-input  form-control" placeholder="Aadhar Card Number *"
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
                                <form action="<?=base_url('customer/profile/uploaddocument');?>" id="submitForm13"
                                    class="" enctype="multipart/form-data" novalidate="novalidate" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="pancard" required>
                                    <input type="hidden" name="customerid"
                                        value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
                                    <h6>PAN Card *</h6>
                                    <input id="user_pancard_number" type="text" name="userfile_number"
                                        placeholder="PAN Card Number *"
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
                    <!-- Light Bill start -->
                    <?php if($docflags['lightbill'] == 0) { ?>
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <form action="<?=base_url('customer/profile/uploaddocument');?>" id="submitForm14"
                                    class="" enctype="multipart/form-data" novalidate="novalidate" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="lightbill" required>
                                    <input type="hidden" name="customerid"
                                        value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
                                    <h6>Address Proof - Light bill *</h6>
                                    <div class="form-group">
                                        <input type="file" name="userfile" id="user_lightbill" aria-required="true"
                                            required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
                                        <div class="error-message" id="user_lightbill-message"></div>
                                        <button type="submit"
                                            class="button button-md button-radius button-border-2 button-outline-turquiose">UPLOAD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php $isall += 1; } ?>
                    <!-- Light Bill end -->
                    <!-- Cancel Cheque start -->
                    <?php if($docflags['cancelcheque'] == 0) { ?>
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <form action="<?=base_url('customer/profile/uploaddocument');?>" id="submitForm15"
                                    class="" enctype="multipart/form-data" novalidate="novalidate" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="cancelcheque" required>
                                    <input type="hidden" name="customerid"
                                        value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
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
                    <!-- Bank statement start -->
                    <?php if($docflags['bankstatement'] == 0) { ?>
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <form action="<?=base_url('customer/profile/uploaddocument');?>" id="submitForm16"
                                    class="" enctype="multipart/form-data" novalidate="novalidate" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="bankstatement" required>
                                    <input type="hidden" name="customerid"
                                        value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
                                    <h6>Bank Statement - Last 6 months *</h6>
                                    <div class="form-group">
                                        <input type="file" name="userfile" id="user_bankstatement" aria-required="true"
                                            required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
                                        <div class="error-message" id="user_bankstatement-message"></div>
                                        <button type="submit"
                                            class="button button-md button-radius button-border-2 button-outline-turquiose">UPLOAD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php $isall += 1; } ?>
                    <!-- Bank Statement end -->
                    <?php if($profiledata->cardtype == 11) { ?>
                    <!-- form sixteen start -->
                    <?php if($docflags['formsixteen'] == 0) { ?>
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <form action="<?=base_url('customer/profile/uploaddocument');?>" id="submitForm17"
                                    class="" enctype="multipart/form-data" novalidate="novalidate" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="formsixteen" required>
                                    <input type="hidden" name="customerid"
                                        value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
                                    <h6>Form 16</h6>
                                    <div class="form-group">
                                        <input type="file" name="userfile" id="user_formsixteen" aria-required="true"
                                            required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
                                        <div class="error-message" id="user_formsixteen-message"></div>
                                        <button type="submit"
                                            class="button button-md button-radius button-border-2 button-outline-turquiose">UPLOAD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php $isall += 1; } ?>
                    <!-- form sixteen end -->
                    <!-- salary slip start -->
                    <?php if($docflags['salaryslip'] == 0) { ?>
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <form action="<?=base_url('customer/profile/uploaddocument');?>" id="submitForm18"
                                    class="" enctype="multipart/form-data" novalidate="novalidate" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="salaryslip" required>
                                    <input type="hidden" name="customerid"
                                        value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
                                    <h6>Salary Slip</h6>
                                    <div class="form-group">
                                        <input type="file" name="userfile" id="user_salaryslip" aria-required="true"
                                            required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
                                        <div class="error-message" id="user_salaryslip-message"></div>
                                        <button type="submit"
                                            class="button button-md button-radius button-border-2 button-outline-turquiose">UPLOAD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php $isall += 1; } ?>
                    <!-- salary slip end -->
                    <?php } ?>
                    <?php if($profiledata->cardtype == 12) { ?>
                    <!-- business proof start -->
                    <?php if($docflags['businessproof'] == 0) { ?>
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <form action="<?=base_url('customer/profile/uploaddocument');?>" id="submitForm19"
                                    class="" enctype="multipart/form-data" novalidate="novalidate" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="businessproof" required>
                                    <input type="hidden" name="customerid"
                                        value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
                                    <div class="form-group">
                                        <input type="file" name="userfile" id="user_businessproof" aria-required="true"
                                            required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
                                        <div class="error-message" id="user_businessproof-message"></div>
                                        <button type="submit"
                                            class="button button-md button-radius button-border-2 button-outline-turquiose">UPLOAD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php $isall += 1; } ?>
                    <!-- business proof end -->
                    <!-- it return start -->
                    <?php if($docflags['itreturn'] == 0) { ?>
                    <div class="col-lg-12">
                        <div class="bg-white border-radius-1 box-shadow p-3 m-3">
                            <div class="price body">
                                <form action="<?=base_url('customer/profile/uploaddocument');?>" id="submitForm20"
                                    class="" enctype="multipart/form-data" novalidate="novalidate" method="post"
                                    accept-charset="utf-8">
                                    <input type="hidden" name="doc" value="itreturn" required>
                                    <input type="hidden" name="customerid"
                                        value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
                                    <div class="form-group">
                                        <input type="file" name="userfile" id="user_itreturn" aria-required="true"
                                            required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
                                        <div class="error-message" id="user_itreturn-message"></div>
                                        <button type="submit"
                                            class="button-dark button-md button-radius button-turquiose">UPLOAD</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php $isall += 1; } ?>
                    <!-- it return end -->
                    <?php } ?>
                </div>
                <?php if($isall == 0 && $docflags['isVerified'] == 0) { ?>
                <div class="col-lg-12 ms-3">
                    <div class="single-price">
                        <div class="price body">
                            <h4>Upload Successful</h4>
                            <p class="mb-0 mt-2">Your documents are successfully submitted. Our Company Executive will
                                verify the documents and contact you shortly.</p>
                        </div>
                    </div>
                </div>
                <?php } else if($isall == 0 && $docflags['isVerified'] == 1) { ?>
                <div class="col-lg-12 ms-3">
                    <div class="single-price">
                        <div class="price body">
                            <h4>Verification Successful</h4>
                            <p class="mb-0">Dear Customer, your documents are successfully verified. Our Company
                                Executive will contact you soon for your loan process.</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php if($docflags['aadharcard_number'] != '' || $docflags['pancard_number'] != '') { ?>
                <div class="col-lg-12 ms-3">
                    <div class="single-price">
                        <div class="price body">
                            <?php
								if($docflags['aadharcard_number'] != '') {
									echo "<h6>Aadhar Card Number - ".$docflags['aadharcard_number']."</h6>";
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
                                <input type="hidden" name="customerid"
                                    value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
                                <textarea id="remarks" name="remarks" class="" required placeholder="Your Experience"
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
<script type="text/javascript" src="<?=base_url('assets/js/kycdoc-validate.js')?>"></script>