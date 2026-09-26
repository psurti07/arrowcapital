<?php $this->load->view('includes/header.php');?>

<div class="section bg-lend-blue pt-0 pb-0" id="home">
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-light text-light m-0">Rewarding & Progressive Career</h1>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?= base_url('assets/images/slider/link-page.png') ?>" alt="Career Image">
            </div>
        </div>
    </div>
</div>
<div class="section-sm">
    <div class="container">
        <div class="row g-4 p-5">
            <div class="col-12">
                <div class="col-lg-12 m-auto">
                    <h2 class="text-center">Current Job Openings !</h2>
                </div>
                <div class="col-12 mt-5">
                    <div class="cart-items">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="cart-head">
                                    <th class="table-product">Job Title</th>
                                    <th class="table-price">Job Time</th>
                                    <th class="table-quantity">Job Code</th>
                                    <th class="table-subtotal">Apply</th>
                                </tr>
                                <?php if(count($openinglist)) { $cnt = 1; foreach ($openinglist as $row) { ?>
                                <tr class="cart-product-list">
                                    <td width="40%">
                                        <div class="cart-prodct">
                                            <div class="cart-product-details">
                                                <p><?php echo $row->title; ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-price" width="20%">Full time</td>
                                    <td width="20%">
                                        <div class="cart-product">
                                            <div class="cart-product-details">
                                                <p><?php echo $row->slug; ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-price" width="20%"><a
                                            href="<?php echo site_url('apply/career/'.$row->slug); ?>"
                                            class="btn btn-success btn-sm">Apply Now</a></td>
                                </tr>
                                <?php $cnt++; } } else { ?>
                                <tr class="cart-product-list">
                                    <td colspan="4"><strong>Currently, there are no openings in the organization. Still,
                                            you can send your resume to <a
                                                href='mailto:hr@fintopcorporate.com'>hr@fintopcorporate.com</a> <br />
                                            We will contact you in case a vacancy arrives and matches your
                                            profile.</strong></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('includes/footer.php');?>