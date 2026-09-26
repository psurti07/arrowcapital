<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="vw-team">
    <meta name="description" content="<?php if(isset($meta->descriptions)) { echo $meta->descriptions; } ?>" />
    <meta name="keywords" content="<?php if(isset($meta->keywords)) { echo $meta->keywords; } ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=====Title=======-->
    <title>
        <?php if(isset($meta->title)) { echo $meta->title; } else { echo "Apply for Instant Personal Loan Online approvals | Fintopcorporate"; } ?>
    </title>
    <!--=====Fav icon=======-->
    <link rel="shortcut icon" href="<?=base_url('assets/images/logo/favicon.ico')?>" type="image/x-icon" />
    <!--=====CSS=======-->
    <link href="<?= base_url('assets/plugins/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/owl-carousel/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/owl-carousel/owl.theme.default.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/magnific-popup/magnific-popup.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/scrollcue/scrollcue.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/theme.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/validation/form-validation.css')?>" rel="stylesheet">

    <!-- Fonts/Icons -->
    <link href="<?= base_url('assets/plugins/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/font-awesome/css/all.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <!--===== jQuery=======-->
    <style>
    .error {
        color: red !important;
        font-size: 14px
    }
    </style>
</head>

<body>
    <header id="header">
        <div class="header">
            <div class="container">
                <!-- Logo -->
                <div class="header-logo pt-3">
                    <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/images/logo/logo.png') ?>"
                            alt="Fintopcorporate" /></a>

                </div>
                <div class="header-menu"></div>

            </div><!-- end container -->
        </div>
    </header>
    <div class="section-lg">
        <div class="container">
            <div class="bg-white p-lg-5  border-radius-1 box-shadow n-margin-5">
                <div class="row align-items-center g-4 g-lg-5">
                    <!-- About Image -->
                    <div class="col-12 col-lg-6">
                        <div class="row ">
                            <div class="col-12 pt-4 ">
                                <img class="img-fluid" src="<?=base_url('assets/images/slider/log-in.png')?>"
                                    alt="">
                            </div>
                        </div><!-- end row/gallery-wrapper -->
                    </div>
                    <!-- About Content -->
                    <div class="col-12 col-lg-6 p-3">
                        <div class="border border-dark border-radius-1 p-5">
                            <h3 class="text-dark text-center">Customer Login Account</h2>
                                <form action="" id="submitForm1" method="post">
                                    <div class="col-md-12 col-sm-12 p-2">
                                        <label>Mobile</label>
                                        <input type="text" name="mobile"
                                            class="form-control border-radius mb-0" placeholder="Mobile No"
                                            id="mobile" required minlength="10" maxlength="10" inputmode="numeric">
                                        <div class="text-danger" id="mobile-message"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 p-2">
                                        <label>Password</label>
                                        <input type="password" name="password"
                                            class="form-control border-radius mb-0" placeholder="Password"
                                            id="password" required>
                                        <div class="text-danger" id="password-message"></div>

                                    </div>
                                    <div class="col-md-12 col-sm-12 p-2">
                                        <a class="fw-semi-bold"
                                            href="<?=base_url('customer/login/forgotpassword')?>">Forgot Password?</a>
                                    </div>

                                    <div class="col-md-12 col-sm-12 p-2 text-center">
                                        <button
                                            class="button-dark button-xl button-radius button-turquiose button-block  "
                                            id="form-submit1" type="submit">Login</button>
                                    </div>
                                </form>
                                <div class="col-md-12 col-sm-12 p-2 text-center">
                                    <p class="text-dark">Don't have an account? <a class="fw-semi-bold"
                                            href="<?=base_url('digital/applynow')?>">Apply Now</a></p>
                                </div>
                        </div>
                    </div>
                </div><!-- end row -->
            </div>
        </div><!-- end container -->
    </div>
    <!--=====Form Start=======-->
    <!-- <div class="sign-form-area bg-13">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-8 m-auto">
						<div class="sign-form-wrap">
							<div class="sign-logo text-center">
								<a href="javascript:;"><img src="<?=base_url('assets/images/logo/logo.png')?>" alt="" width="140" /></a>
							</div>
							<div class="sign-form">
								<div class="form-heading">
									<h3 class="font-22">Customer Login Account</h3>
								</div>

								<form action="" id="submitForm1" method="post">
									<div class="form-group">
										<label for="email">Mobile </label>
										<input type="text" name="mobile" class="form-control numeric-input" placeholder="Mobile No" id="mobile" required minlength="10" maxlength="10" inputmode="numeric">
										<div class="error-message" id="mobile-message"></div>
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
										<div class="error-message" id="password-message"></div>
									</div>
									

									<div class="theme-input-group mb-4">
										<div class="check-box-wrap"></div>
										<a href="<?=base_url('customer/login/forgotpassword')?>">Forgot Password?</a>
									</div>
									
									<button type="submit" id="form-submit1" class="theme-btn-11 full-btn"> Login </button>
								</form>
								<div class="space20"></div>
								<h4 class="font-14">
									Don't have an account?
									<a href="<?=base_url('digital/applynow')?>">Apply Now</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
    <!--=====Form End=======-->
    <!--=====Footer start=======-->
    <footer>
        <div class="bg-black py-4">
            <div class="container">
                <div class="row align-items-center g-2 g-lg-3">
                    <div class="col-12 col-md-6 text-center text-md-start">
                        <p class="font-14">CIN NO.: <?= COMPANY_CIN; ?></p>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-end">
                        <p><?= date('Y') ?> ©
                            <?= COMPANY_NAME; ?>. All Rights Reserved.</p>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
    </footer>
    <!--=====Footer end=======-->

    <script src="<?= base_url('assets/plugins/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/plugins.js') ?>"></script>
    <script src="<?= base_url('assets/js/functions.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script type="text/javascript">
    $(function() {
        $.validator.addMethod("customMobile", function(value, element) {
            return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
        }, "Please enter a valid mobile number");
        $('.numeric-input').on('keydown', function(event) {
            if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event
                    .key <= '9'))) {
                event.preventDefault();
            }
        });
        $("#submitForm1").validate({
            rules: {
                mobile: {
                    required: true,
                    digits: true,
                    customMobile: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                mobile: {
                    required: 'Mobile number field is required'
                },
                password: {
                    required: 'Password field is required'
                }
            },
            errorPlacement: function(error, element) {
                var target = "#" + $(element).attr("id") + "-message";
                $(target).html(error);
            },
            submitHandler: function(form) {
                $.ajax({
                    url: `<?php echo base_url('customer/login/validateLogin') ?>`,
                    type: "POST",
                    data: $(form).serialize(),
                    dataType: "JSON",
                    cache: false,
                    processData: false,
                    /*beforeSend: function() {
                        $('#form-submit1').html(
                            'VERIFYING... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                            );
                        $('#form-submit1').attr('disabled', true);
                    },*/
                    success: function(response) {
                        if (response['success'] == true) {
                            toastr.success(response['message']);
                            window.location.href =
                                '<?php echo base_url("customer/dashboard"); ?>';
                        } else {
                            toastr.error(response['message']);
                        }
                        $('#form-submit1').html('LOGIN');
                        $('#form-submit1').attr('disabled', false);
                    },
                    error: function(jXHR, textStatus, errorThrown) {
                        $('#form-submit1').html('LOGIN');
                        $('#form-submit1').attr('disabled', false);
                        toastr.error(errorThrown, 'ERROR');
                    }
                });
            }
        })
    });
    </script>
</body>

</html>