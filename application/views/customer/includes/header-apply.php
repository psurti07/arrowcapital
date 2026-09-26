<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="Fintopcorporate">
		<meta name="description" content="Fintopcorporate">
		<meta name="keywords" content="Fintopcorporate">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--=====Title=======-->
		<title><?php if(isset($meta->title)) { echo $meta->title; } else { echo "Apply for Instant Personal Loan Online approvals | Fintopcorporate"; } ?></title>
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
		<!-- Datatables CSS -->
		<link href="<?=base_url('assets/js/plugins/datatables/css/datatables.min.css')?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/js/plugins/datatables/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/js/plugins/datatables/css/buttons.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/js/plugins/datatables/css/buttons.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />
		<!--===== jQuery=======-->
		<script src="<?=base_url('assets/js/plugins/jquery-3-6-0.min.js');?>"></script>
		<script>
			const base_url = '<?php echo base_url() ?>'
		</script>
		<!-- Facebook Domain + Pixel Code -->
	<?php
	$fbdomain = getFacebookDomain();
	if ($fbdomain != null) {
		echo '<meta name="facebook-domain-verification" content="' . $fbdomain . '" />';
	}

	$fbpixel = getFacebookPixel();
	if ($fbpixel != null) {
		?>
	<script>
		! function (f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function () {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '<?php echo $fbpixel; ?>');
		fbq('track', 'PageView');

	</script>
	<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=<?php echo $fbpixel; ?>&ev=PageView&noscript=1" /></noscript>
	<?php } ?>
	<!-- End Facebook Domain + Pixel Code -->
	</head>
	<body>
		<!-- Page Scroll Progress -->
			<div class="page-progress-container">
				<div id="pageProgress" class="page-progress-bar page-progress-gradient-6"></div>
			</div>
		<!-- end Page Scroll Progress -->
		 <!--=====Header start=======-->
		 <header id="header">
				<div class="header">
					<div class="container">
						<!-- Logo -->
						<div class="header-logo">
							<a href="<?=base_url('customer/dashboard');?>"><img src="<?= base_url('assets/images/logo/logo.png') ?>"  alt="Fintopcorporate" /></a>
						</div>
						<!-- Menu -->
						<div class="header-menu">
							<ul class="nav">
								<li class="nav-item">
								<a class="nav-link" href="<?=base_url('customer/dashboard')?>">Dashboard</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="javascript:;">My Loan</a>
									<ul class="nav-dropdown">
										<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="<?=base_url('customer/offers')?>">Apply Now</a></li>
										<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="<?=base_url('customer/offers/preapproved')?>">Pre-Approval Loan</a></li>
										<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="<?=base_url('customer/loan/history')?>">My Loan History</a></li>
									</ul>
								</li>
								<li class="nav-item">
								<a class="nav-link" href="<?=base_url('customer/offers/cardoffers')?>">Card Offers</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="javascript:;">Customers</a>
									<ul class="nav-dropdown">
										<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="<?=base_url('customer/referral')?>">My Customers</a></li>
										<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="<?=base_url('customer/referral/history')?>">My Customers Loans</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="javascript:;">Documents</a>
									<ul class="nav-dropdown">
										<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="<?=base_url('customer/profile/documents')?>">KYC Documents</a></li>
										<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="<?=base_url('customer/profile/payoutdocuments')?>">Payout Documents</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="javascript:;">Profile</a>
									<ul class="nav-dropdown">
										<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="<?=base_url('customer/profile')?>">My Profile</a></li>
										<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="<?=base_url('customer/profile/subscription')?>">Subscription Plan</a></li>
										<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="<?=base_url('customer/support')?>">Support</a></li>
										<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="<?=base_url('customer/login/logout')?>">Logout</a></li>
									</ul>
								</li>
								
							</ul>
						</div>
						
						<button class="header-toggle">
							<span></span>
						</button>
					</div><!-- end container -->
				</div>
			</header>
			<!--=====Header end=======-->

		
