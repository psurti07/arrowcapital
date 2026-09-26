<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Cashindia">
	<meta name="description" content="<?php if(isset($meta->descriptions)) { echo $meta->descriptions; } ?>">
	<meta name="keywords" content="<?php if(isset($meta->keywords)) { echo $meta->keywords; } ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--=====Title=======-->
	<title><?php if (isset($meta->title)) {
				echo $meta->title;
			} else {
				echo "Apply for Instant Personal Loan Online approvals | Cashindia";
			} ?></title>
    <!--=====FAV ICON=======-->
  <link rel="shortcut icon" href="<?= base_url('assets/img/logo/favicon.ico')?>" type="image/x-icon">
	<link rel="icon" href="<?= base_url('assets/img/logo/favicon.ico')?>" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/img/logo/apple-icon.png') ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/img/logo/apple-icon-180x180.png') ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/logo/apple-touch-icon.png') ?>">
	<link rel="apple-touch-icon" href="<?= base_url('assets/img/logo/apple-touch-icon.png') ?>">
	<link rel="icon" href="<?= base_url('assets/img/logo/apple-touch-icon.png') ?>" type="image/x-icon">
 <!--=====CSS=======-->
 <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome-pro.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/slick-slider.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/meanmenu.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/typography.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/mobile-menu.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/aos.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/fonts.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/blog-page.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/modal-video.min.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/comon.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/animation.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/advisr-unit.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/advisr-core.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"/>
 <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <!--=====JQUERY=======-->
    <script src="<?= base_url('assets/js/jquery-3-6-0.min.js') ?>"></script>
    <!-- Facebook Domain + Pixel Code -->
	<?php
  $fbdomain = getFacebookDomain();
  if ($fbdomain != Null) {
    echo '<meta name="facebook-domain-verification" content="' . $fbdomain . '" />';
  }

  $fbpixel = getFacebookPixel();
  if ($fbpixel != Null) {
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
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6MJNDXT2MK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6MJNDXT2MK');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MZVQLW9B');</script>
<!-- End Google Tag Manager -->
  </head>

  <body class="font-f-1">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZVQLW9B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="paginacontainer"> 

  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
  </div>

</div> 

<!--=====progress END=======-->


    <!--=====HEADER START=======-->
    <header>
      <div class="header-area header-area-all d-none d-lg-block" id="header">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="header-elements">
                <div class="site-logo home1-site-logo">
                  <a href="<?= base_url()?>"><img src="<?= base_url('assets/img/logo/cashindia.png') ?>" alt=""  width="200"/></a>
                </div>


                <div class="main-menu-ex main-menu-ex2">
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li><a href="javascript:;" onclick="goToMenu('company')">Company</a></li>
                        <li><a href="javascript:;" onclick="goToMenu('subscription')">Subscription</a></li>
                        <li><a href="javascript:;" onclick="goToMenu('contacts')">Contact Us</a></li>
                        <li><a href="<?= base_url('customer') ?>">Customer Login</a></li>
                          
                      </ul>
                </div>



                <div class="home3-header-buttons">
                   <a class="button-h-2 btnfos2" href="<?= base_url('digital/applynow') ?>">Apply Now</a>
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
    <!--=====HEADER END=======-->

       <!--=====Mobile header start=======-->
       <div class="mobile-header mobile-header-4 d-block d-lg-none ">
        <div class="container-fluid">
          <div class="col-12">
            <div class="mobile-header-elements">
              <div class="mobile-logo">
                <a href="<?= base_url()?>"><img src="<?= base_url('assets/img/logo/cashindia.png') ?>" alt="" width="180"></a>
              </div>
              <div class="mobile-nav-icon">
                <i class="fa-solid fa-bars"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="mobile-sidebar d-block d-lg-none">
        <div class="menu-close">
          <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="mobile-nav">
    
                 <ul>
                  <li><a href="<?php echo site_url(); ?>">Home</a></li>
                  <li><a href="javascript:;" onclick="goToMenu('company')">Company</a></li>
                  <li><a href="javascript:;" onclick="goToMenu('subscription')">Subscription</a></li>
                  <li><a href="javascript:;" onclick="goToMenu('contacts')">Contact Us</a></li>
                  <li><a href="<?= base_url('customer') ?>">Customer Login</a></li>
                </ul>

                <div class="home3-header-buttons">
                   <a class="button-h-2 btnfos2" href="<?= base_url('digital/applynow') ?>">Apply Now</a>
                </div>
        </div>
      </div>
      <!--=====Mobile header end=======-->
