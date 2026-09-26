<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="author" content="Cashindia">
	<meta name="description" content="<?php if (isset($meta->descriptions)) {
		echo $meta->descriptions;
	} ?>">
	<meta name="keywords" content="<?php if (isset($meta->keywords)) {
		echo $meta->keywords;
	} ?>">

	<!--=====Title=======-->
	<title><?php if (isset($meta->title)) {
		echo $meta->title;
	} else {
		echo "Apply for Instant Personal Loan Online approvals | Cashindia";
	} ?></title>
	<!--=====FAV ICON=======-->
	<link rel="shortcut icon" href="<?= base_url('assets/img/logo/favicon.ico') ?>" type="image/x-icon">
	<link rel="icon" href="<?= base_url('assets/img/logo/favicon.ico') ?>" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/img/logo/apple-icon.png') ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/img/logo/apple-icon-180x180.png') ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/logo/apple-touch-icon.png') ?>">
	<link rel="apple-touch-icon" href="<?= base_url('assets/img/logo/apple-touch-icon.png') ?>">
	<link rel="icon" href="<?= base_url('assets/img/logo/apple-touch-icon.png') ?>" type="image/x-icon">
	<!--=====CSS=======-->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome-pro.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>" />
	<link href="<?= base_url('assets/css/validation/form-validation.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/slick-slider.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/meanmenu.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/typography.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/mobile-menu.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/aos.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/fonts.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/blog-page.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/modal-video.min.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/comon.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/animation.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/advisr-unit.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/advisr-core.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
	<!--=====JQUERY=======-->
	<script src="<?= base_url('assets/js/jquery-3-6-0.min.js') ?>"></script>
</head>

<body class="font-f-1"  style=" background: radial-gradient(circle, rgba(138, 215, 189, 1) 0%, rgba(44, 59, 118, 1) 100%);">
	<!--=====contact start=======-->
	<div class="contact2	">
		<div class="container ">
			<div class="row">
				<div class="d-flex justify-content-center align-items-center " style="height:100vh; flex-direction:column;">
					<div class="col-md-6 contact2-form-box-all" style="border: 1px solid;">
						<div class="contact-form">
							<form action="<?php echo base_url() ?>customer/login/validateLogin" id="submitForm1"
								method="post" class="row sign-in-form" novalidate="novalidate">
								<div class="hadding2 text-center mb-4">
									<img class="img-fluid" src="<?= base_url('assets/img/logo/cashindia.png') ?>"
										alt="logo-image" width="200">
								</div>
								
								<div class="hadding2-w">
									<h3 class="text-dark text-center">Customer Login Account</h3>
								</div>
								
								<div class="contact-inputs">
									<div class="contact-input">
										<div class="contact5-form-input m-0 form-group">
											<input type="text" name="mobile" class="form-control numeric-input mb-2"
												placeholder="Mobile No*" aria-required="true" id="mobile" required
												minlength="10" maxlength="10" inputmode="numeric"
												data-validation-regex-regex="^[6789]\d{9}$">
											<div class="help-block ms-0 ps-0 mb-2"></div>
										</div>
										<div class="contact5-form-input m-0 form-group">
											<div class="wrap-input">
												<span class="btn-show-pass ico-20"><span
														class="flaticon-visibility eye-pass"></span></span>
												<input type="password" aria-required="true" name="password"
													class="form-control mb-2" placeholder="Password" id="password"
													required>
											</div>
											<div class="help-block ms-0 ps-0 mb-3"></div>
										</div>

										<div class="space10"></div>
										<div class="col-md-12">
											<div class="reset-password-link">
												<p class="p-sm"><a href="<?= base_url('customer/login/forgotpassword') ?>"
														class="color--theme">Forgot your password?</a></p>
											</div>
										</div>
										<div class="space10"></div>
										<button class="button-h-2 btnfos2">Login In</button>
										<div class="space20"></div>
										<div class="col-md-12">
											<h6 class="test-success">
												Don't have an account?
												<a href="<?= base_url('digital/applynow') ?>">Apply Now</a>
											</h6>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--=====contact end=======-->
	<!--=====Footer Start=====-->

	<!--=====Footer end=====-->


	<!--=====JS=======-->
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/fontawesome.js') ?>"></script>
	<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
		crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/validate/jqBootstrapValidation.js'); ?>" type="text/javascript"></script>
	<script src="<?= base_url('assets/validate/form-validation.js') ?>"></script>
	<script src="<?= base_url('assets/validate/form-validation.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery.validate.min.js') ?>"></script>


	<script src="<?= base_url('assets/js/slick-slider.js') ?>"></script>
	<script src="<?= base_url('assets/js/mobile-menu.js') ?>"></script>
	<script src="<?= base_url('assets/js/tilt.jquery.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery.countup.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery.nice-select.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery.lineProgressbar.js') ?>"></script>
	<script src="<?= base_url('assets/js/mobile-meanmenu.js') ?>"></script>
	<script src="<?= base_url('assets/js/modal-video.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/main.js') ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script type="text/javascript">
		$(function () {
			$.validator.addMethod("customMobile", function (value, element) {
				return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
			}, "Please enter a valid mobile number");
			$('.numeric-input').on('keydown', function (event) {
				if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <= '9'))) {
					event.preventDefault();
				}
			});
			$("#submitForm1").validate({
				rules: {
					mobile: { required: true, digits: true, customMobile: true },
					password: { required: true }
				},
				messages: {
					mobile: { required: 'Mobile number field is required' },
					password: { required: 'Password field is required' }
				},
				errorPlacement: function (error, element) {
					var target = "#" + $(element).attr("id") + "-message";
					$(target).html(error);
				},
				submitHandler: function (form) {
					$.ajax({
						url: `<?php echo base_url('customer/login/validateLogin') ?>`,
						type: "POST",
						data: $(form).serialize(),
						dataType: "JSON",
						cache: false,
						processData: false,
						beforeSend: function () {
							$('#form-submit1').html('VERIFYING... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
							$('#form-submit1').attr('disabled', true);
						},
						success: function (response) {
							if (response['success'] == true) {
								toastr.success(response['message']);
								window.location.href = '<?php echo base_url("customer/dashboard"); ?>';
							}
							else {
								toastr.error(response['message']);
							}
							$('#form-submit1').html('LOGIN');
							$('#form-submit1').attr('disabled', false);
						},
						error: function (jXHR, textStatus, errorThrown) {
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
