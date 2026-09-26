<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Fintop Corporate">
	<meta name="description" content="Fintop Corporate">
	<meta name="keywords" content="Fintop Corporate">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--=====Title=======-->
	<title><?php if (isset($meta->title)) {
				echo $meta->title;
			} else {
				echo "Apply for Instant Personal Loan Online approvals | Fintop Corporate";
			} ?></title>
	<!--=====Fav icon=======-->
	<link rel="shortcut icon" href="<?= base_url('assets/images/logo/favicon.ico') ?>" type="image/x-icon" />
	<!--=====CSS=======-->

	<link href="<?= base_url('assets/plugins/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/owl-carousel/owl.carousel.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/owl-carousel/owl.theme.default.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/magnific-popup/magnific-popup.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/scrollcue/scrollcue.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/theme.css?t=125') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/theme-colors/theme-color-turquoise.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/validation/form-validation.css')?>" rel="stylesheet">

	<!-- Fonts/Icons -->
	<link href="<?= base_url('assets/plugins/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/font-awesome/css/all.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

	<!--===== jQuery=======-->
	<script src="<?= base_url('assets/js/plugins/jquery-3-6-0.min.js'); ?>"></script>
	<script>
		const base_url = '<?php echo base_url(); ?>'

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

	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17048113816"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17048113816');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JRTV8KYCZ5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JRTV8KYCZ5');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P8V45478');</script>
<!-- End Google Tag Manager -->

<script type="text/javascript">     (function(c,l,a,r,i,t,y){         c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};         t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;         y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);     })(window, document, "clarity", "script", "rfosexlw9n"); </script>

</head>

<body data-preloader="1" class="theme-color-turquoise">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P8V45478"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
					<a href="<?= base_url(); ?>"><img src="<?= base_url('assets/images/logo/logo.png') ?>"
							alt="Fintopcorporate" /></a>
				</div>
				<!-- Menu -->
				<div class="header-menu">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url(); ?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:;" onclick="goToMenu('company')">Company</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:;" onclick="goToMenu('plans')">Subscription</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:;" onclick="goToMenu('contacts')">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('customer') ?>">Customer Login</a>
						</li>

						<li class="nav-item mt-3">
							<a class="button-dark button-md button-radius button-turquiose"
								href="<?= base_url('digital/applynow') ?>">Apply Now</a>
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
