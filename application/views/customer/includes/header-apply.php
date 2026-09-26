<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="vw-team">
	<meta name="description" content="<?php if (isset($meta->descriptions)) {
											echo $meta->descriptions;
										} ?>">
	<meta name="keywords" content="<?php if (isset($meta->keywords)) {
										echo $meta->keywords;
									} ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--=====Title=======-->
	<title><?php if (isset($meta->title)) {
				echo $meta->title;
			} else {
				echo "Apply for Instant Personal Loan Online approvals | Cashindia";
			} ?></title>
	<!--=====Fav icon=======-->
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
	<script>
		const base_url = '<?php echo base_url() ?>'
	</script>
</head>

<body class="font-f-1">

	<header class="d-none d-lg-block">
		<div class="header-area" id="header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header-elements">
							<div class="site-logo home1-site-logo">
								<a href="javascript:void(0)"><img src="<?= base_url('assets/img/logo/cashindia.png') ?>" alt="" width="200"/>
								</a>
							</div>


							<div class="main-menu-ex main-menu-ex3">
								<ul class="menu_list">
									<li class="dropdown">
										<a href="<?= base_url('customer/dashboard') ?>">Dashboard</a>
									</li>
									<li class="dropdown-parrent">
										<a href="javascript:;">My Loan</a>
										<ul class="theme-dropdown">
											<li>
												<a href="<?= base_url('customer/offers') ?>">Apply Now</a>
											</li>
											<li>
												<a href="<?= base_url('customer/offers/preapproved') ?>">Pre-Approval Loan</a>
											</li>
											<li>
												<a href="<?= base_url('customer/loan/history') ?>">My Loan History</a>
											</li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="<?= base_url('customer/offers/cardoffers') ?>">Card Offers</a>
									</li>
									<li class="dropdown-parrent">
										<a href="javascript:;">Customers</a>
										<ul class="theme-dropdown">
											<li><a href="<?= base_url('customer/referral') ?>">My Customers</a></li>
											<li><a href="<?= base_url('customer/referral/history') ?>">My Customers Loans</a></li>
										</ul>
									</li>
									<li class="dropdown-parrent">
										<a href="javascript:;">Documents</a>
										<ul class="theme-dropdown">
											<li><a href="<?= base_url('customer/profile/documents') ?>">KYC Documents</a></li>
											<!--<li><a href="<?= base_url('customer/profile/payoutdocuments') ?>">Payout Documents</a></li>-->
										</ul>
									</li>
									<li class="dropdown-parrent">
										<a href="javascript:;">Profile</a>
										<ul class="theme-dropdown">
											<li><a href="<?= base_url('customer/profile') ?>">My Profile</a></li>
											<li><a href="<?= base_url('customer/profile/subscription') ?>">Subscription Plan</a></li>
											<li><a href="<?= base_url('customer/support') ?>">Support</a></li>
											<li><a href="<?= base_url('customer/login/logout') ?>">Logout</a></li>
										</ul>
									</li>
								</ul>
							</div>

							<div class="mobile-menu-bar d-lg-none">
								<i class="fas fa-bars"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>


	<div class="mobile-header mobile-header-4 d-block d-lg-none ">
		<div class="container-fluid">
			<div class="col-12">
				<div class="mobile-header-elements">
					<div class="mobile-logo">
						<a href="<?= base_url() ?>"><img src="<?= base_url('assets/img/logo/cashindia.png') ?>" alt="" width="200"></a>
					</div>
					<div class="mobile-nav-icon">
						<i class="fa-solid fa-bars"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=====Header end=======-->
	<div class="mobile-sidebar d-block d-lg-none">
		<div class="menu-close">
			<i class="fa-solid fa-xmark"></i>
		</div>
		<div class="mobile-nav">
			<ul class="mobile-nav-list">
				<li>
					<a href="<?= base_url('customer/dashboard') ?>">Dashboard</a>
				</li>
				<li>
					<a href="javascript:;">My Loan</a>
					<ul class="sub-menu">
						<li>
							<a href="<?= base_url('customer/offers') ?>">Apply Now</a>
						</li>
						<li>
							<a href="<?= base_url('customer/offers/preapproved') ?>">Pre-Approval Loan</a>
						</li>
						<li>
							<a href="<?= base_url('customer/loan/history') ?>">My Loan History</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?= base_url('customer/offers/cardoffers') ?>">Card Offers</a>
				</li>
				<li>
					<a href="javascript:;">Customers</a>
					<ul class="sub-menu">
						<li><a href="<?= base_url('customer/referral') ?>">My Customers</a></li>
						<li><a href="<?= base_url('customer/referral/history') ?>">My Customers Loans</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">Documents</a>
					<ul class="sub-menu">
						<li><a href="<?= base_url('customer/profile/documents') ?>">KYC Documents</a></li>
						<!--<li><a href="<?= base_url('customer/profile/payoutdocuments') ?>">Payout Documents</a></li>-->
					</ul>
				</li>
				<li>
					<a href="javascript:;">Profile</a>
					<ul class="sub-menu">
						<li><a href="<?= base_url('customer/profile') ?>">My Profile</a></li>
						<li><a href="<?= base_url('customer/profile/subscription') ?>">Subscription Plan</a></li>
						<li><a href="<?= base_url('customer/support') ?>">Support</a></li>
						<li><a href="<?= base_url('customer/login/logout') ?>">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!--=====Mobile header end=======-->