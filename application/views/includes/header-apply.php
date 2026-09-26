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
	<title>
		<?php if (isset($meta->title)) {
			echo $meta->title;
		} else {
			echo "Apply for Instant Personal Loan Online approvals | Fintopcorporate";
		} ?>
	</title>
	<!--=====Fav icon=======-->
	<link rel="shortcut icon" href="<?= base_url('assets/images/logo/favicon.ico') ?>" type="image/x-icon" />
	<!--=====CSS=======-->
	<link href="<?= base_url('assets/plugins/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/owl-carousel/owl.carousel.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/owl-carousel/owl.theme.default.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/magnific-popup/magnific-popup.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/scrollcue/scrollcue.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/theme.css?t=122') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
	
	<link href="<?= base_url('assets/css/validation/form-validation.css')?>" rel="stylesheet">

	<!-- Fonts/Icons -->
	<link href="<?= base_url('assets/css/theme-colors/theme-color-very-peri.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/font-awesome/css/all.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
	<!--===== jQuery=======-->
	<script src="<?= base_url('assets/js/plugins/jquery-3-6-0.min.js'); ?>"></script>
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
<style>
.talk-expert {
	position: relative;
}
.expert-card {
    position: absolute;
    top: 100%;
    right: 0; /* Align card to right edge of button */
    width: 360px;
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);

    opacity: 0;
    visibility: hidden;
    transition: 0.3s ease;
    z-index: 999;
}
.expert-card p {
	font-size: 14px;
	margin-bottom: 10px;
}
.talk-expert a:hover {
   color:#fff !important;
}
.talk-expert:hover .expert-card {
    opacity: 1;
    visibility: visible;
}
</style>
</head>

<body class="theme-color-very-peri preloader-theme d-flex flex-column min-vh-100" data-preloader="1">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P8V45478"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<!--=====Header start=======-->
	<header class="border-bottom" id="header">
		<div class="header">
			<div class="container">
				<!-- Logo -->
				<div class="header-logo">
					<a href="#"><img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="Fintopcorporate" /></a>
				</div>
								
				<ul class="navbar-nav ms-auto">
					<li class="nav-item talk-expert">
						<a class="btn btn-sm btn-outline-primary">
							<i class="fa fa-phone"></i> Talk to Expert
						</a>
						<div class="expert-card">
							<p>
								<i class="fa fa-phone"></i> Call Us:
								<a href="tel:8980379437"><?php echo COMPANY_MOBILE; ?></a>
							</p>
							<p>
								<i class="fa fa-envelope"></i> Email Us:
								<a href="mailto:info@fintopcorporate.com"><?php echo COMPANY_EMAIL ?></a>
							</p>
						</div>
					</li>
				</ul>
				
			</div><!-- end container -->
		</div>
	</header>
	<!--=====Header end=======-->
