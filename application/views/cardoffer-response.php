<?php
$this->load->view('includes/header-apply.php');
?>
<div class="section-md" id="monthly">
    <div class="container">
        <div class="box-backdrop p-2 p-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-white border-radius p-4 p-lg-4 mb-2 text-center">
                        <?php if($status == "true") { ?>
                        <h4 class="display-6 mb-3 text-success">Congratulations!</h4>
                        <p>Your loan application has been successfully submitted. Our Customer Executive will call
                            you shortly.</p>
                        <p><small>In case you've any query or issue, you can raise a request here: <a
                                    href="<?php echo site_url('support/request'); ?>" class="hover text-dark">Click
                                    Here</a></small></p>

                        <div class="mt-5">
                            <a href="<?php echo site_url(); ?>"
                                class="button-dark button-lg button-radius button-turquiose">Go to Homepage</a>
                        </div>
                        <?php } ?>
                        <!-- END : SUCCESS -->

                        <!-- START : FAIL -->
                        <?php if($status == "false") { ?>
                        <h4 class="display-6 mb-3 text-danger">Payment Unsuccessful</h4>
                        <p>Your payment process has failed. Please try again.<br />If you have any questions you can
                            contact on our customer care number: +91-81603-06171.</p>
                        <hr />
                        <p><small>In case you've any query or issue, you can raise a request here: <a
                                    href="<?php echo site_url('support/request'); ?>" class="hover text-dark">Click
                                    Here</a></small></p>

                        <div class="mt-5">
                            <a href="<?php echo site_url('cardoffer'); ?>"
                                class="button-dark button-lg button-radius button-turquiose">Try Another Payment
                                Method</a>
                        </div>
                        <?php } ?>
                        <!-- END : FAIL -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$this->load->view('includes/footer-apply.php');
?>