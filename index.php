<?php global $Wcms ?>
<?php


 session_start();
include 'kontakt.php';
include 'config.php';
$prvepodlazie = $db->prepare("select count(id_podhradom) as pocet from cennik_podhradom where podlazie='1' and stav='voľný'");
		$prvepodlazie->execute();
		$pocetvolnychbytovna1podlazi = $prvepodlazie->fetch(PDO::FETCH_ASSOC);

$prvepodlazievsetkybyty = $db->prepare("select count(id_podhradom) as pocet from cennik_podhradom where podlazie='1'");
		$prvepodlazievsetkybyty->execute();
		$pocetbytovna1podlazi = $prvepodlazievsetkybyty->fetch(PDO::FETCH_ASSOC);



$druhepodlazie = $db->prepare("select count(id_podhradom) as pocet from cennik_podhradom where podlazie='2' and stav='voľný'");
		$druhepodlazie->execute();
		$pocetvolnychbytovna2podlazi = $druhepodlazie->fetch(PDO::FETCH_ASSOC);

$druhepodlazievsetkybyty = $db->prepare("select count(id_podhradom) as pocet from cennik_podhradom where podlazie='2'");
		$druhepodlazievsetkybyty->execute();
		$pocetbytovna2podlazi = $druhepodlazievsetkybyty->fetch(PDO::FETCH_ASSOC);



$tretiepodlazie = $db->prepare("select count(id_podhradom) as pocet from cennik_podhradom where podlazie='3' and stav='voľný'");
		$tretiepodlazie->execute();
		$pocetvolnychbytovna3podlazi = $tretiepodlazie->fetch(PDO::FETCH_ASSOC);

$tretiepodlazievsetkybyty = $db->prepare("select count(id_podhradom) as pocet from cennik_podhradom where podlazie='3'");
		$tretiepodlazievsetkybyty->execute();
		$pocetbytovna3podlazi = $tretiepodlazievsetkybyty->fetch(PDO::FETCH_ASSOC);



$stvrtepodlazie = $db->prepare("select count(id_podhradom) as pocet from cennik_podhradom where podlazie='4' and stav='voľný'");
		$stvrtepodlazie->execute();
		$pocetvolnychbytovna4podlazi = $stvrtepodlazie->fetch(PDO::FETCH_ASSOC);

$stvrtepodlazievsetkybyty = $db->prepare("select count(id_podhradom) as pocet from cennik_podhradom where podlazie='4'");
		$stvrtepodlazievsetkybyty->execute();
		$pocetbytovna4podlazi = $stvrtepodlazievsetkybyty->fetch(PDO::FETCH_ASSOC);


$ziskajbytynaprvompodlazi = $db->prepare("select * from cennik_podhradom where podlazie='1'");
		$ziskajbytynaprvompodlazi->execute();
		$bytynaprvompodlazi = $ziskajbytynaprvompodlazi->fetchAll();


$ziskajbytynadruhompodlazi = $db->prepare("select * from cennik_podhradom where podlazie='2'");
		$ziskajbytynadruhompodlazi->execute();
		$bytynadruhompodlazi = $ziskajbytynadruhompodlazi->fetchAll();

$ziskajbytynatretompodlazi = $db->prepare("select * from cennik_podhradom where podlazie='3'");
		$ziskajbytynatretompodlazi->execute();
		$bytynatretompodlazi = $ziskajbytynatretompodlazi->fetchAll();


	$ziskajbytynastvrtompodlazi = $db->prepare("select * from cennik_podhradom where podlazie='4'");
		$ziskajbytynastvrtompodlazi->execute();
		$bytynastvrtompodlazi = $ziskajbytynastvrtompodlazi->fetchAll();




	?>
<!doctype html>
<html lang="sk">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.png" type="image/x-icon">
		<meta name="title" content="Bývanie pod hradom - ideálna voľba pre pohodlné bývanie v centre mesta">
		<!-- Google Tag Manager

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TZDRZSH');</script> -->
<!-- Hotjar Tracking Code for www.byvaniepodhradom.sk -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1663992,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<meta name="description" content="<?= $Wcms->page('description') ?>">
<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="14 days">
<meta name="author" content="JF">
<meta property="og:title" content="<?= $Wcms->page('title') ?>">
<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>">
<meta property="og:url" content="<?= $this->url() ?>">
<meta property="og:description" content="Komfort menšieho bytového domu, vlastná podzemná garáž a skvelá poloha. Projekt v živej štvrti v dosahu nitrianskeho centra.">
<meta property="og:type" content="website">
<meta property="og:image" content="https://byvaniepodhradom.sk/img/main/podhradom_1.jpg" alt="image byvanie pod hradom">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="<?= $this->url() ?>">
<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />
<meta name="twitter:image" content="https://byvaniepodhradom.sk/img/main/podhradom_2.jpg" alt="image byvanie pod hradom">

<!-- End Google Tag Manager -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
		<link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,700&display=swap" rel="stylesheet">
      	<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" rel="stylesheet">


        <link rel="stylesheet" href="vendors/animate-css/animate.css">

        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.min.css?<?php echo date('Y-m-d_H:i:s'); ?>">
        <?= $Wcms->css()?>
        <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css')?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/tooltipster.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
		</head>
		<body id="page-top">
      <?= $Wcms->settings() ?>
    	<?= $Wcms->alerts() ?>




        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu">
           		<div class="container">
           			<div class="top_inner">


           				<div class="float-right">
           					<ul class="list header_socila">
           						<li><a href="#"><i class="fa fa-facebook"></i></a></li>

           						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
           					</ul>
           				</div>
           			</div>
           		</div>
           	</div>
            <div class="main_menu" id="mainNav">
            	    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top bx-shadow" id="mainNav">
        <div class="container ">
            <a class="navbar-brand js-scroll-trigger" href="/"><img id="brand" alt="logo" src="img/logo_znamka.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                 <div class="hamburger" id="hamburger-11">
							  <span class="line"></span>
							  <span class="line"></span>
							  <span class="line"></span>
        </div>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#navigator">ponuka</a>
                    </li>
    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#ponuka">o projekte</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#lokalita">lokalita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#galeria">galéria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#developer">developer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#kontakt">kontakt</a>
                    </li>

					<li class="nav-item">
                        <a class="nav-link" href="cennik">cennik</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

        <!--================Home Banner Area =================-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/main/podhradom_2.jpg" alt="banner">

		<div class="container ">
		<div class="main_banner_text">
		<div class="row">
		<div class="col-md-7">

		<h1>Lepší život pod hradom</h1>


		</div>
		</div>

        </div>
        </div>

        </div>
			<div id="sticker" class="sticky">
<img class="img-fluid lazy" data-src="img/znamka_standard.png" alt="standard byvanie pod hradom"> </div>


        <!--================End Home Banner Area =================-->


        <!--================	3D navigation =================-->

<div class="container mt-5 mb-5" id="navigator">
        		<div class="row mt-5">
        			<div class="col-lg-8 text-center mx-auto mt-5 mb-5">
        			<p class="text-white">
Bývanie pod hradom má všetko, čo si ľudia túžiaci po kvalitnom mestskom bývaní môžu priať - komfort menšieho bytového domu, vlastnú podzemnú garáž a skvelú polohu. Stojí v živej štvrti v ľahkom dosahu nitrianskeho centra. Bol navrhnutý tak, aby vám nechýbalo nič, čo si sľubujete od pohodlného bývania v centre mesta. Bývanie pod hradom je ideálna voľba pre páry, mladých jednotlivcov aj seniorov.

        			</p>
        			</div>


        		</div>

				  		<div class="row mt-5">
        			<div class="col-lg-12 text-center mx-auto mt-5 mb-5">
        			<h2 class="text-white">
Vyberte si podlažie
        			</h2>
        			</div>


        		</div>


<svg version="1.1" id="Layer_1" class="bx-shadow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 3799.4 2287.5" style="enable-background:new 0 0 3799.4 2287.5;" xml:space="preserve">
<style type="text/css">
    .stmain{fill:#68523601;}
	polygon:hover, path:hover {
   fill:url(#phmmain) #000;
    opacity: 0.5;
}

</style>
<linearGradient id="phmmain" gradientUnits="userSpaceOnUse" x1="12.5831" y1="118.1893" x2="437.4092" y2="118.1893">
	<stop  offset="0" style="stop-color:#8B6046"/>
	<stop  offset="0.4547" style="stop-color:#DAA883"/>
</linearGradient>
<image style="overflow:visible;" width="1920" height="1156" xlink:href="img/3d_podklad.jpg"  transform="matrix(1.9788 0 0 1.9788 0 0)">
</image>
<g id="_x31_np">
	<path id="prvepodlazie" class="stmain tooltip"  title="
		<div class='tooltip_wrapper'> I. podlažie <span class='tooltip_numbers'><?php echo $pocetvolnychbytovna1podlazi['pocet']; ?>/<?php echo $pocetbytovna1podlazi['pocet']; ?></span></div>"
		d="M2295.4,1912.8l186.9-207.5l-9.5,92.2l-180.9,207.3l-618-296.3l-8.4-87.5L2295.4,1912.8z
		 M848.5,1302.5l27,89.2l178.1,70.2l68.9-53.5l-89.2-35.3L848.5,1302.5z M2017.2,861.9l-0.8-80l-310.6,260.9l71.6,27.1L2017.2,861.9
		z M2479.4,1353.9l33.2,30.1l150.6-222.6l7.2-76.9L2479.4,1353.9z"/>
</g>
<g id="_x32_np">
	<path id="druhepodlazie" class="stmain tooltip"  title="
		<div class='tooltip_wrapper'> II. podlažie <span class='tooltip_numbers'><?php echo $pocetvolnychbytovna2podlazi['pocet']; ?>/<?php echo $pocetbytovna2podlazi['pocet']; ?></span></div>"
		 d="M2684.1,969.6l-11.7,110.6l-196.2,269.9l-46.2-40.3L2684.1,969.6z M1641.9,1497.4l-833.8-307.7
		l33.2,112.7l818.2,316.3l633.6,294.5l185.6-206.4l11.4-122.3L2297.3,1793L1641.9,1497.4z M2016.4,783.2l-2.9-96.8l-411.1,327
		l105.6,32.3L2016.4,783.2z"/>
</g>
<g id="_x33_np">
	<path id="tretiepodlazie" class="stmain tooltip" title="
		<div class='tooltip_wrapper'> III. podlažie <span class='tooltip_numbers'><?php echo $pocetvolnychbytovna3podlazi['pocet']; ?>/<?php echo $pocetbytovna3podlazi['pocet']; ?></span></div>"
		 d="M2699.6,858.5l-14.2,110.3l-253,341.6l-66.4-25.1L2699.6,858.5z M1633,1371.5l-855.8-300.3
		l32.4,117l840.3,311.5l650.7,291.9l193-205.2l11.4-127.4l-197.7,201.3L1633,1371.5z M2013.3,684.2V579.6l-532.2,396.1l120.3,37.4
		L2013.3,684.2z"/>
</g>
<g id="_x34_np">
	<polygon id="stvrtepodlazie" class="stmain tooltip"  title="
		<div class='tooltip_wrapper'> IV. podlažie <span class='tooltip_numbers'><?php echo $pocetbytovna4podlazi['pocet']; ?>/<?php echo $pocetbytovna4podlazi['pocet']; ?></span></div>"
		 points="2705.5,789.8 2499,603.4 2342.3,671.5 1886.8,1112.3 1721.9,1048.8 1483.4,977.3
		2010.1,581.7 2013.4,521.8 1830.5,365 1027.8,840.6 833.8,782.9 760.5,997.5 778.1,1069.7 1629.3,1369 2304.3,1655.3
		2504.2,1456.5 2510.4,1379.5 2429,1309.1 2363.9,1279.2 2697.2,858.2 	"/>
</g>
</svg>



</div>




<div class="container-svg mt-5 mx-auto">


      <!--================	 1stfloor =================-->



<div class="podlazia">
    <svg id="podorysprvehopodlazia" class="layers" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 956.3 956.3" style="enable-background:new 0 0 956.3 956.3;" xml:space="preserve">
<style type="text/css">
	.ut0{opacity:0.2;fill:#FFFFFF;enable-background:new    ;}
	.ut0:hover{opacity:0.4;}
	.ut1,.st0{fill:url(#phcolor) #000;}

</style>
<linearGradient id="phcolor" gradientUnits="userSpaceOnUse" x1="12.5831" y1="118.1893" x2="437.4092" y2="118.1893">
	<stop  offset="0" style="stop-color:#8B6046"/>
	<stop  offset="0.4547" style="stop-color:#DAA883"/>
</linearGradient>
<g>

		<image style="overflow:visible;enable-background:new    ;" width="1500" height="1159" xlink:href="img/podhradom_1np.png"  transform="matrix(3.267949e-07 1 -1 3.267949e-07 1060.6498 -268.5002)">
	</image>
</g><g id="Layer_4">
	<g>
		<path class="ut1" d="M664.8,618.2l-1.3-4.2H657l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H664.8z M662.6,610.8c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H662.6z"/>
		<path class="ut1" d="M679.2,618.2h-3.8v-10.3l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.7-4.6h3.1V618.2z"/>
		<path class="ut1" d="M693.5,618.2h-3.8v-10.3l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.7-4.6h3.1V618.2z"/>
	</g>
	<g>
		<path class="ut1" d="M169.1,429.5h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
			c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
			h-6.7V429.5z M172.9,436.6h2.2c1,0,1.8-0.2,2.2-0.5c0.5-0.3,0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2
			V436.6z M172.9,439.6v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H172.9z"/>
		<path class="ut1" d="M194,447.4h-3.8V437l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.7-4.6h3.1V447.4z"/>
		<path class="ut1" d="M208.2,447.4h-3.8V437l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.7-4.6h3.1V447.4z"/>
	</g>
	<g>
		<path class="ut1" d="M171.1,299.9h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
			c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
			h-6.7V299.9z M174.9,306.9h2.2c1,0,1.8-0.2,2.2-0.5c0.5-0.3,0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2
			V306.9z M174.9,309.9v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H174.9z"/>
		<path class="ut1" d="M196,317.7h-3.8v-10.3l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.7-4.6h3.1V317.7z"/>
		<path class="ut1" d="M213.4,317.7h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7c0.7-0.2,1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V317.7z"/>
	</g>
	<g>
		<path class="ut1" d="M170.1,127.5h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
			c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
			h-6.7V127.5z M173.9,134.6h2.2c1,0,1.8-0.2,2.2-0.5c0.5-0.3,0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2
			V134.6z M173.9,137.6v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H173.9z"/>
		<path class="ut1" d="M195,145.4h-3.8V135l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.7-4.6h3.1V145.4z"/>
		<path class="ut1" d="M211.7,131.5c0,1.1-0.3,2.1-1,2.8c-0.7,0.8-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3
			c0.7,0.7,1.1,1.6,1.1,2.8c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.4,1.5,0.6,2.3,0.9
			s1.7,0.3,2.5,0.3c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8c-0.7-0.3-1.8-0.5-3.3-0.5h-1.4v-2.9h1.4
			c1.4,0,2.4-0.2,3-0.5c0.6-0.4,1-1,1-1.9c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3c-0.6,0.2-1.3,0.5-2,1l-1.7-2.6
			c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1C211.1,129.1,211.7,130.2,211.7,131.5z"/>
	</g>
	<g>
		<path class="ut1" d="M665.5,446.4l-1.3-4.2h-6.5l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H665.5z M663.3,438.9c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H663.3z"/>
		<path class="ut1" d="M679.9,446.4h-3.8V436l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.7-4.6h3.1V446.4z"/>
		<path class="ut1" d="M697.3,446.4h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5s-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7c0.7-0.2,1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7s0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V446.4z"/>
	</g>
	<g>
		<path class="ut1" d="M665.3,313.2L664,309h-6.5l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H665.3z M663.1,305.8c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H663.1z"/>
		<path class="ut1" d="M679.7,313.2h-3.8v-10.3l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.7-4.6h3.1V313.2z"/>
		<path class="ut1" d="M696.4,299.3c0,1.1-0.3,2.1-1,2.8c-0.7,0.8-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3
			c0.7,0.7,1.1,1.6,1.1,2.8c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9
			s1.7,0.3,2.5,0.3c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5h-1.4v-2.9h1.4
			c1.4,0,2.4-0.2,3-0.5c0.6-0.4,1-1,1-1.9c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8
			c1.8,0,3.3,0.4,4.4,1.1C695.9,297,696.4,298,696.4,299.3z"/>
	</g>
</g>
<g id="Layer_3_2_">
	<polygon id="b13" class="ut0 tooltip <?php echo $bytynaprvompodlazi[5][stav];?>" onclick="window.open('<?php echo $bytynaprvompodlazi[5][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynaprvompodlazi[5][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynaprvompodlazi[5][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynaprvompodlazi[5][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynaprvompodlazi[5][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynaprvompodlazi[5][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynaprvompodlazi[5][stav]?></td></tr>
		</table>
		</div>
		" points="35.1,225.4 395.6,225.4 395.6,83.8 273.9,67.7 35.4,67.7 	"/>



	<polygon id="b12" class="ut0  tooltip <?php echo $bytynaprvompodlazi[4][stav]?>" onclick="window.open('<?php echo $bytynaprvompodlazi[4][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynaprvompodlazi[4][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynaprvompodlazi[4][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynaprvompodlazi[4][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynaprvompodlazi[4][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynaprvompodlazi[4][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynaprvompodlazi[4][stav]?></td></tr>
		</table>
		</div>
		"  points="73.8,373.8 395.5,373.8 395.5,225.4 74.6,225.4 	"/>
	<path class="ut0  tooltip <?php echo $bytynaprvompodlazi[3][stav]?>" onclick="window.open('<?php echo $bytynaprvompodlazi[3][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynaprvompodlazi[3][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynaprvompodlazi[3][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynaprvompodlazi[3][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynaprvompodlazi[3][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynaprvompodlazi[3][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynaprvompodlazi[3][stav]?></td></tr>
		</table>
		</div>
		" d="M73.8,373.8l0,228.3l193.9,0l0,75.1h54.2l33.2-15.4l25.2-29.6l17.9-44.3l-2.7-214.1L73.8,373.8"/>
	<polygon id="a13" class="ut0 tooltip <?php echo $bytynaprvompodlazi[2][stav]?>" onclick="window.open('<?php echo $bytynaprvompodlazi[2][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynaprvompodlazi[2][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynaprvompodlazi[2][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynaprvompodlazi[2][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynaprvompodlazi[2][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynaprvompodlazi[2][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynaprvompodlazi[2][stav]?></td></tr>
		</table>
		</div>
		" class="ut0 tooltip <?php echo $bytynaprvompodlazi[1][stav]?>" points="515.6,578 515.6,427.5 567.5,427.5 567.5,374.1 914.4,374.1 946.4,242.7 565.9,112.8
		395.6,83.8 395.6,581.6 	"/>
	<polygon id="a12" onclick="window.open('<?php echo $bytynaprvompodlazi[1][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynaprvompodlazi[1][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynaprvompodlazi[1][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynaprvompodlazi[1][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynaprvompodlazi[1][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynaprvompodlazi[1][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynaprvompodlazi[1][stav]?></td></tr>
		</table>
		</div>
		" class="ut0 tooltip <?php echo $bytynaprvompodlazi[0][stav]?>" points="882.2,526.6 914.4,374.1 567.5,374.1 567.5,427.5 555,427.5 555,525.2 	"/>
	<polygon id="a11" onclick="window.open('<?php echo $bytynaprvompodlazi[0][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynaprvompodlazi[0][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynaprvompodlazi[0][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynaprvompodlazi[0][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynaprvompodlazi[0][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynaprvompodlazi[0][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynaprvompodlazi[0][stav]?></td></tr>
		</table>
		</div>
		" class="ut0 tooltip" points="557.1,674.5 748.8,674.5 748.8,687.2 847.6,697.8 882.2,526.6 555,525.2 	"/>
</g>

</svg>



</div>

      <!--================ end	 1stfloor =================-->


		      <!--================	 2ndfloor =================-->

<div class="podlazia">
    <svg id="podorysdruhehopodlazia" class="layers" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
	 viewBox="0 0 956.3 956.3" style="enable-background:new 0 0 956.3 956.3;" xml:space="preserve">
<linearGradient id="phcolor2" gradientUnits="userSpaceOnUse" x1="12.5831" y1="118.1893" x2="437.4092" y2="118.1893">
	<stop  offset="0" style="stop-color:#8B6046"/>
	<stop  offset="0.4547" style="stop-color:#DAA883"/>
</linearGradient>
<style type="text/css">
	.xt0{fill:#FFFFFF;opacity:0.2;}
	.xt0:hover{opacity:0.6;}
.st0{fill:url(#phcolor2) #000;}
</style>
<g id="Layer_3_1_">

		<image style="overflow:visible;enable-background:new    ;" width="2500" height="1766" xlink:href="img/podhradom_2np.png"  transform="matrix(0.4558 0 0 0.4558 -122.5 48.0786)">
	</image>
</g>

<g id="Layer_4">
	<g>
		<path class="st0" d="M665.3,309.8l-1.3-4.2h-6.5l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H665.3z M663.1,302.4c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H663.1z"/>
		<path class="st0" d="M682.8,309.8h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7c0.7-0.2,1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V309.8z"/>
		<path class="st0" d="M697.5,306.1h-2.1v3.7h-3.7v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V306.1z M691.7,303.2v-3
			c0-0.5,0-1.2,0.1-2.2c0-1,0.1-1.5,0.1-1.7h-0.1c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H691.7z"/>
	</g>
	<g>
		<path class="st0" d="M664.5,448l-1.3-4.2h-6.5l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H664.5z M662.3,440.6c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H662.3z"/>
		<path class="st0" d="M682,448h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7c0.7-0.2,1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V448z"/>
		<path class="st0" d="M695.6,434.1c0,1.1-0.3,2.1-1,2.8s-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3c0.7,0.7,1.1,1.6,1.1,2.8
			c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9s1.7,0.3,2.5,0.3
			c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5h-1.4v-2.9h1.4c1.4,0,2.4-0.2,3-0.5
			c0.6-0.4,1-1,1-1.9c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8
			c1.8,0,3.3,0.4,4.4,1.1C695,431.8,695.6,432.8,695.6,434.1z"/>
	</g>
	<g>
		<path class="st0" d="M666.7,623.2l-1.3-4.2h-6.5l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H666.7z M664.5,615.8c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H664.5z"/>
		<path class="st0" d="M684.3,623.2h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7c0.7-0.2,1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V623.2z"/>
		<path class="st0" d="M698.6,623.2h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7c0.7-0.2,1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V623.2z"/>
	</g>
	<g>
		<path class="st0" d="M748.4,762.8l-1.3-4.2h-6.5l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H748.4z M746.2,755.4c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H746.2z"/>
		<path class="st0" d="M766,762.8h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5s0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7s1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6s1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5c0,0.8-0.1,1.6-0.4,2.3
			c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V762.8z"/>
		<path class="st0" d="M777.1,762.8h-3.8v-10.3l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.8-4.6h3.1V762.8z"/>
	</g>
	<g>
		<path class="st0" d="M345.8,719.5h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
			c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
			h-6.7V719.5z M349.6,726.5h2.2c1,0,1.8-0.2,2.2-0.5c0.5-0.3,0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2
			V726.5z M349.6,729.5v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H349.6z"/>
		<path class="st0" d="M373.8,737.3h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7s1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2L366,734v0.2h7.8V737.3z"/>
		<path class="st0" d="M384.9,737.3h-3.8V727l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.7-4.6h3.1V737.3z"/>
	</g>
	<g>
		<path class="st0" d="M174.1,607.3h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
			c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
			h-6.7V607.3z M177.9,614.4h2.2c1,0,1.8-0.2,2.2-0.5c0.5-0.3,0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2
			V614.4z M177.9,617.4v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H177.9z"/>
		<path class="st0" d="M202.1,625.2h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7s1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V625.2z"/>
		<path class="st0" d="M216.4,625.2h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7s1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V625.2z"/>
	</g>
	<g>
		<path class="st0" d="M174.1,428.6h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
			c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
			h-6.7V428.6z M177.9,435.6h2.2c1,0,1.8-0.2,2.2-0.5c0.5-0.3,0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2
			V435.6z M177.9,438.6v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H177.9z"/>
		<path class="st0" d="M202.1,446.4h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7s1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V446.4z"/>
		<path class="st0" d="M215.7,432.6c0,1.1-0.3,2.1-1,2.8c-0.7,0.8-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3
			c0.7,0.7,1.1,1.6,1.1,2.8c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9
			s1.7,0.3,2.5,0.3c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5h-1.4v-2.9h1.4
			c1.4,0,2.4-0.2,3-0.5c0.6-0.4,1-1,1-1.9c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3c-0.6,0.2-1.3,0.5-2,1l-1.7-2.6
			c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1C215.2,430.2,215.7,431.2,215.7,432.6z"/>
	</g>
	<g>
		<path class="st0" d="M174.1,304.3h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
			c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
			h-6.7V304.3z M177.9,311.4h2.2c1,0,1.8-0.2,2.2-0.5c0.5-0.3,0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2
			V311.4z M177.9,314.4v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H177.9z"/>
		<path class="st0" d="M202.1,322.2h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7s1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V322.2z"/>
		<path class="st0" d="M216.8,318.5h-2.1v3.7H211v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V318.5z M211,315.5v-3c0-0.5,0-1.2,0.1-2.2
			c0-1,0.1-1.5,0.1-1.7H211c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H211z"/>
	</g>
	<g>
		<path class="st0" d="M174.1,129.5h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
			c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
			h-6.7V129.5z M177.9,136.6h2.2c1,0,1.8-0.2,2.2-0.5c0.5-0.3,0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2
			V136.6z M177.9,139.6v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H177.9z"/>
		<path class="st0" d="M202.1,147.3h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7s1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V147.3z"/>
		<path class="st0" d="M210.4,135.9c1.7,0,3.1,0.5,4.1,1.5c1,1,1.5,2.3,1.5,4c0,2-0.6,3.5-1.8,4.6c-1.2,1.1-3,1.6-5.3,1.6
			c-2,0-3.6-0.3-4.8-1v-3.3c0.6,0.3,1.4,0.6,2.2,0.8c0.9,0.2,1.7,0.3,2.4,0.3c2.3,0,3.5-0.9,3.5-2.8c0-1.8-1.2-2.7-3.6-2.7
			c-0.4,0-0.9,0-1.4,0.1c-0.5,0.1-0.9,0.2-1.3,0.3l-1.5-0.8l0.7-9.1h9.7v3.2h-6.4l-0.3,3.5l0.4-0.1
			C209.1,136,209.7,135.9,210.4,135.9z"/>
	</g>
</g>
<g id="Layer_4">
	<polygon id="a24_1_" class="xt0 tooltip <?php echo $bytynadruhompodlazi[3][stav]?>" onclick="window.open('<?php echo $bytynadruhompodlazi[3][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynadruhompodlazi[3][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynadruhompodlazi[3][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynadruhompodlazi[3][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynadruhompodlazi[3][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynadruhompodlazi[3][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynadruhompodlazi[3][stav]?></td></tr>
		</table>
		</div>
		" points="516.9,200.4 516.9,427.4 567.3,427.4 567.3,375.7 755.6,375.7 755.6,200.4 	"/>
	<polygon id="a23_1_" class="xt0  tooltip <?php echo $bytynadruhompodlazi[2][stav]?>" onclick="window.open('<?php echo $bytynadruhompodlazi[2][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynadruhompodlazi[2][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynadruhompodlazi[2][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynadruhompodlazi[2][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynadruhompodlazi[2][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynadruhompodlazi[2][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynadruhompodlazi[2][stav]?></td></tr>
		</table>
		</div>
		" points="755.6,375.7 567.3,375.7 567.3,426.8 555.6,426.8 555.6,525.3 755.6,525.3 	"/>
	<polygon id="a22_1_" class="xt0  tooltip <?php echo $bytynadruhompodlazi[1][stav]?>" onclick="window.open('<?php echo $bytynadruhompodlazi[1][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynadruhompodlazi[1][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynadruhompodlazi[1][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynadruhompodlazi[1][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynadruhompodlazi[1][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynadruhompodlazi[1][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynadruhompodlazi[1][stav]?></td></tr>
		</table>
		</div>
		" points="555.6,525.3 755.6,524.3 755.6,676.7 555.6,677.7 	"/>
	<polygon id="a21_1_" class="xt0  tooltip <?php echo $bytynadruhompodlazi[0][stav]?>" onclick="window.open('<?php echo $bytynadruhompodlazi[0][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynadruhompodlazi[0][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynadruhompodlazi[0][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynadruhompodlazi[0][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynadruhompodlazi[0][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynadruhompodlazi[0][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynadruhompodlazi[0][stav]?></td></tr>
		</table>
		</div>
		"  points="849.2,695.7 755.6,687.7 755.6,676.7 620.2,676.7 620.2,818.8 829.5,835.4 	"/>
</g>
<g id="Layer_5">
	<polygon id="b21_1_" class="xt0  tooltip <?php echo $bytynadruhompodlazi[4][stav]?>" onclick="window.open('<?php echo $bytynadruhompodlazi[4][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynadruhompodlazi[4][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynadruhompodlazi[4][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynadruhompodlazi[4][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynadruhompodlazi[4][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynadruhompodlazi[4][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynadruhompodlazi[4][stav]?></td></tr>
		</table>
		</div>
		" points="525.2,581.9 398.7,581.9 391.3,607.1 374.7,634.2 348.2,659.4 329.2,670.5 270.1,670.5
		270.1,676.7 135.9,676.7 135.9,812.7 524.8,812.7 	"/>
	<polygon id="b22_1_" class="xt0  tooltip <?php echo $bytynadruhompodlazi[5][stav]?>" onclick="window.open('<?php echo $bytynadruhompodlazi[5][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynadruhompodlazi[5][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynadruhompodlazi[5][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynadruhompodlazi[5][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynadruhompodlazi[5][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynadruhompodlazi[5][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynadruhompodlazi[5][stav]?></td></tr>
		</table>
		</div>
		" points="74.4,676.7 270.1,676.7 270.1,670.5 273.8,670.5 273.8,525.3 74.4,525.3 	"/>
	<polygon id="b23_1_" class="xt0  tooltip <?php echo $bytynadruhompodlazi[6][stav]?>" onclick="window.open('<?php echo $bytynadruhompodlazi[6][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynadruhompodlazi[6][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynadruhompodlazi[6][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynadruhompodlazi[6][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynadruhompodlazi[6][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynadruhompodlazi[6][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynadruhompodlazi[6][stav]?></td></tr>
		</table>
		</div>
		" points="74.4,375.7 274.8,375.7 273.8,525.2 74.4,526.2 	"/>
	<polygon id="b24_1_" class="xt0  tooltip <?php echo $bytynadruhompodlazi[7][stav]?>" onclick="window.open('<?php echo $bytynadruhompodlazi[7][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynadruhompodlazi[7][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynadruhompodlazi[7][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynadruhompodlazi[7][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynadruhompodlazi[7][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynadruhompodlazi[7][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynadruhompodlazi[7][stav]?></td></tr>
		</table>
		</div>
		" points="74.4,226.2 274.8,226.2 273.8,375.7 74.4,375.7 	"/>
	<polygon id="b25_1_"  class="xt0 tooltip <?php echo $bytynadruhompodlazi[8][stav]?>" onclick="window.open('<?php echo $bytynadruhompodlazi[8][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynadruhompodlazi[8][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynadruhompodlazi[8][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynadruhompodlazi[8][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynadruhompodlazi[8][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynadruhompodlazi[8][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynadruhompodlazi[8][stav]?></td></tr>
		</table>
		</div>
		"  points="34.4,67.7 274.8,67.7 273.8,226.2 34.4,227.2 	"/>
</g>
</svg>





</div>
			<!--================	end 2ndfloor =================-->


			<!--================	 3rdfloor =================-->

<div class="podlazia">
    <svg id="podorystretiehopodlazia" class="layers" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
	 viewBox="0 0 956.3 956.3" style="enable-background:new 0 0 956.3 956.3;" xml:space="preserve">
<style type="text/css">
	.yt0{opacity:0.2;fill:#FFFFFF;enable-background:new    ;}
	.yt0:hover{opacity:0.6;}
	.nmbrclr{fill:url(#phcolor3) #000;}
</style>
<linearGradient id="phcolor3" gradientUnits="userSpaceOnUse" x1="12.5831" y1="118.1893" x2="437.4092" y2="118.1893">
	<stop  offset="0" style="stop-color:#8B6046"/>
	<stop  offset="0.4547" style="stop-color:#DAA883"/>
</linearGradient>

<g id="Layer_4">
	<g>
		<path class="nmbrclr" d="M730.6,767.8l-1.3-4.2h-6.5l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H730.6z M728.4,760.4c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H728.4z"/>
		<path class="nmbrclr" d="M747.4,753.9c0,1.1-0.3,2.1-1,2.8s-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3c0.7,0.7,1.1,1.6,1.1,2.8
			c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9s1.7,0.3,2.5,0.3
			c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5h-1.4v-2.9h1.4c1.4,0,2.4-0.2,3-0.5s1-1,1-1.9
			c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1
			C746.9,751.6,747.4,752.6,747.4,753.9z"/>
		<path class="nmbrclr" d="M759.2,767.8h-3.8v-10.3l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.8-4.6h3.1V767.8z"/>
	</g>
	<g>
		<path class="nmbrclr" d="M668.6,625.6l-1.3-4.2h-6.5l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H668.6z M666.4,618.2c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H666.4z"/>
		<path class="nmbrclr" d="M685.4,611.8c0,1.1-0.3,2.1-1,2.8s-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3c0.7,0.7,1.1,1.6,1.1,2.8
			c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9s1.7,0.3,2.5,0.3
			c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5h-1.4V615h1.4c1.4,0,2.4-0.2,3-0.5s1-1,1-1.9
			c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1
			C684.9,609.4,685.4,610.4,685.4,611.8z"/>
		<path class="nmbrclr" d="M700.4,625.6h-12.5V623l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7s1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V625.6z"/>
	</g>
	<g>
		<path class="nmbrclr" d="M668.6,446.1l-1.3-4.2h-6.5l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H668.6z M666.4,438.7c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H666.4z"/>
		<path class="nmbrclr" d="M685.4,432.2c0,1.1-0.3,2.1-1,2.8s-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3c0.7,0.7,1.1,1.6,1.1,2.8
			c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9s1.7,0.3,2.5,0.3
			c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5h-1.4v-2.9h1.4c1.4,0,2.4-0.2,3-0.5s1-1,1-1.9
			c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1
			C684.9,429.9,685.4,430.9,685.4,432.2z"/>
		<path class="nmbrclr" d="M699.7,432.2c0,1.1-0.3,2.1-1,2.8s-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3c0.7,0.7,1.1,1.6,1.1,2.8
			c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9s1.7,0.3,2.5,0.3
			c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5h-1.4v-2.9h1.4c1.4,0,2.4-0.2,3-0.5s1-1,1-1.9
			c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1
			C699.2,429.9,699.7,430.9,699.7,432.2z"/>
	</g>
	<g>
		<path class="nmbrclr" d="M668.6,320l-1.3-4.2h-6.5l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H668.6z M666.4,312.6c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H666.4z"/>
		<path class="nmbrclr" d="M685.4,306.2c0,1.1-0.3,2.1-1,2.8s-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3c0.7,0.7,1.1,1.6,1.1,2.8
			c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9s1.7,0.3,2.5,0.3
			c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5h-1.4v-2.9h1.4c1.4,0,2.4-0.2,3-0.5s1-1,1-1.9
			c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1
			C684.9,303.8,685.4,304.9,685.4,306.2z"/>
		<path class="nmbrclr" d="M700.8,316.4h-2.1v3.7H695v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V316.4z M695,313.4v-3c0-0.5,0-1.2,0.1-2.2
			c0-1,0.1-1.5,0.1-1.7H695c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H695z"/>
	</g>
	<g>
		<path class="nmbrclr" d="M343.8,722.2h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
			c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
			h-6.7V722.2z M347.6,729.2h2.2c1,0,1.8-0.2,2.2-0.5s0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2V729.2z
			 M347.6,732.3v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H347.6z"/>
		<path class="nmbrclr" d="M371.1,726.2c0,1.1-0.3,2.1-1,2.8s-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3c0.7,0.7,1.1,1.6,1.1,2.8
			c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9s1.7,0.3,2.5,0.3
			c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5H362v-2.9h1.4c1.4,0,2.4-0.2,3-0.5s1-1,1-1.9
			c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1
			C370.6,723.8,371.1,724.8,371.1,726.2z"/>
		<path class="nmbrclr" d="M382.9,740h-3.8v-10.3l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.8-4.6h3.1V740z"/>
	</g>
	<g>
		<path class="nmbrclr" d="M175.6,603.5h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
			c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
			h-6.7V603.5z M179.4,610.6h2.2c1,0,1.8-0.2,2.2-0.5s0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2V610.6z
			 M179.4,613.6v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H179.4z"/>
		<path class="nmbrclr" d="M203,607.5c0,1.1-0.3,2.1-1,2.8s-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3c0.7,0.7,1.1,1.6,1.1,2.8
			c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9s1.7,0.3,2.5,0.3
			c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5h-1.4v-2.9h1.4c1.4,0,2.4-0.2,3-0.5s1-1,1-1.9
			c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1
			C202.4,605.1,203,606.2,203,607.5z"/>
		<path class="nmbrclr" d="M217.9,621.4h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			c0.6-0.3,1.2-0.5,1.9-0.7s1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5
			c0,0.8-0.1,1.6-0.4,2.3c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V621.4z"/>
	</g>
	<g>
		<path class="nmbrclr" d="M175.6,425.8h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
			c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
			h-6.7V425.8z M179.4,432.9h2.2c1,0,1.8-0.2,2.2-0.5s0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2V432.9z
			 M179.4,435.9v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H179.4z"/>
		<path class="nmbrclr" d="M203,429.8c0,1.1-0.3,2.1-1,2.8s-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3c0.7,0.7,1.1,1.6,1.1,2.8
			c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9s1.7,0.3,2.5,0.3
			c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5h-1.4V433h1.4c1.4,0,2.4-0.2,3-0.5s1-1,1-1.9
			c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1
			C202.4,427.4,203,428.5,203,429.8z"/>
		<path class="nmbrclr" d="M217.2,429.8c0,1.1-0.3,2.1-1,2.8s-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3c0.7,0.7,1.1,1.6,1.1,2.8
			c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9s1.7,0.3,2.5,0.3
			c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5h-1.4V433h1.4c1.4,0,2.4-0.2,3-0.5s1-1,1-1.9
			c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1
			C216.7,427.4,217.2,428.5,217.2,429.8z"/>
	</g>
	<g>
		<path class="nmbrclr" d="M175.6,307.7h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
			c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
			h-6.7V307.7z M179.4,314.7h2.2c1,0,1.8-0.2,2.2-0.5s0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2V314.7z
			 M179.4,317.7v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H179.4z"/>
		<path class="nmbrclr" d="M203,311.7c0,1.1-0.3,2.1-1,2.8s-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3c0.7,0.7,1.1,1.6,1.1,2.8
			c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9s1.7,0.3,2.5,0.3
			c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5h-1.4v-2.9h1.4c1.4,0,2.4-0.2,3-0.5s1-1,1-1.9
			c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1
			C202.4,309.3,203,310.3,203,311.7z"/>
		<path class="nmbrclr" d="M218.3,321.8h-2.1v3.7h-3.7v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V321.8z M212.5,318.9v-3
			c0-0.5,0-1.2,0.1-2.2c0-1,0.1-1.5,0.1-1.7h-0.1c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H212.5z"/>
	</g>
	<g>
		<path class="nmbrclr" d="M175.6,124.7h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
			c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
			h-6.7V124.7z M179.4,131.8h2.2c1,0,1.8-0.2,2.2-0.5s0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2V131.8z
			 M179.4,134.8v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H179.4z"/>
		<path class="nmbrclr" d="M203,128.7c0,1.1-0.3,2.1-1,2.8s-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3c0.7,0.7,1.1,1.6,1.1,2.8
			c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.3,1.5,0.6,2.3,0.9s1.7,0.3,2.5,0.3
			c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8s-1.8-0.5-3.3-0.5h-1.4v-2.9h1.4c1.4,0,2.4-0.2,3-0.5s1-1,1-1.9
			c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1
			C202.4,126.3,203,127.4,203,128.7z"/>
		<path class="nmbrclr" d="M212,131.1c1.7,0,3.1,0.5,4.1,1.5c1,1,1.5,2.3,1.5,4c0,2-0.6,3.5-1.8,4.6s-3,1.6-5.3,1.6c-2,0-3.6-0.3-4.8-1
			v-3.3c0.6,0.3,1.4,0.6,2.2,0.8c0.9,0.2,1.7,0.3,2.4,0.3c2.3,0,3.5-0.9,3.5-2.8c0-1.8-1.2-2.7-3.6-2.7c-0.4,0-0.9,0-1.4,0.1
			c-0.5,0.1-0.9,0.2-1.3,0.3l-1.5-0.8l0.7-9.1h9.7v3.2H210l-0.3,3.5l0.4-0.1C210.6,131.2,211.2,131.1,212,131.1z"/>
	</g>
</g>



<image style="overflow:visible;enable-background:new    ;" width="2500" height="2406" xlink:href="img/podhradom_3np.png"  transform="matrix(0.3451 0 0 0.3451 0.9435 45.1897)">
</image>
<polygon id="a24" class="yt0 tooltip <?php echo $bytynatretompodlazi[3][stav]?>" onclick="window.open('<?php echo $bytynatretompodlazi[3][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynatretompodlazi[3][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynatretompodlazi[3][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynatretompodlazi[3][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynatretompodlazi[3][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynatretompodlazi[3][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynatretompodlazi[3][stav]?></td></tr>
		</table>
		</div>
		" points="516.2,200.5 516.2,427.5 566.6,427.5 566.6,375.8 754.9,375.8 754.9,200.5 "/>
<polygon id="a23" class="yt0 tooltip <?php echo $bytynatretompodlazi[2][stav]?>" onclick="window.open('<?php echo $bytynatretompodlazi[2][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynatretompodlazi[2][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynatretompodlazi[2][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynatretompodlazi[2][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynatretompodlazi[2][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynatretompodlazi[2][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynatretompodlazi[2][stav]?></td></tr>
		</table>
		</div>
		" points="754.9,375.8 566.6,375.8 566.6,426.9 554.9,426.9 554.9,525.4 754.9,525.4 "/>
<polygon id="a22" class="yt0 tooltip <?php echo $bytynatretompodlazi[1][stav]?>" onclick="window.open('<?php echo $bytynatretompodlazi[1][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynatretompodlazi[1][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynatretompodlazi[1][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynatretompodlazi[1][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynatretompodlazi[1][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynatretompodlazi[1][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynatretompodlazi[1][stav]?></td></tr>
		</table>
		</div>
		" points="554.9,524.4 754.9,525.4 755.9,676.8 554.9,676.8 "/>
<polygon id="a21" class="yt0 tooltip <?php echo $bytynatretompodlazi[0][stav]?>" onclick="window.open('<?php echo $bytynatretompodlazi[0][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynatretompodlazi[0][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynatretompodlazi[0][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynatretompodlazi[0][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynatretompodlazi[0][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynatretompodlazi[0][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynatretompodlazi[0][stav]?></td></tr>
		</table>
		</div>
		" points="848.5,695.8 754.9,687.8 754.9,676.8 619.5,676.8 619.5,818.9 828.8,835.5 "/>

<polygon id="b21" class="yt0 tooltip <?php echo $bytynatretompodlazi[4][stav]?>" onclick="window.open('<?php echo $bytynatretompodlazi[4][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynatretompodlazi[4][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynatretompodlazi[4][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynatretompodlazi[4][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynatretompodlazi[4][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynatretompodlazi[4][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynatretompodlazi[4][stav]?></td></tr>
		</table>
		</div>
		" points="524.5,670 269.4,670.6 269.4,676.8 135.2,676.8 135.2,812.8 524.1,812.8 "/>
<polygon id="b22" class="yt0 tooltip <?php echo $bytynatretompodlazi[5][stav]?>" onclick="window.open('<?php echo $bytynatretompodlazi[5][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynatretompodlazi[5][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynatretompodlazi[5][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynatretompodlazi[5][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynatretompodlazi[5][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynatretompodlazi[5][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynatretompodlazi[5][stav]?></td></tr>
		</table>
		</div>
		" points="73.7,676.8 269.4,676.8 269.4,670.6 273.1,670.6 273.1,525.4 73.7,525.4 "/>
<polygon id="b23" class="yt0 tooltip <?php echo $bytynatretompodlazi[6][stav]?>" onclick="window.open('<?php echo $bytynatretompodlazi[6][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynatretompodlazi[6][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynatretompodlazi[6][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynatretompodlazi[6][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynatretompodlazi[6][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynatretompodlazi[6][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynatretompodlazi[6][stav]?></td></tr>
		</table>
		</div>
		" points="73.7,375.8 273.1,375.8 273.1,525.3 72.7,525.3 "/>
<polygon id="b24" class="yt0 tooltip <?php echo $bytynatretompodlazi[7][stav]?>" onclick="window.open('<?php echo $bytynatretompodlazi[7][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynatretompodlazi[7][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynatretompodlazi[7][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynatretompodlazi[7][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynatretompodlazi[7][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynatretompodlazi[7][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynatretompodlazi[7][stav]?></td></tr>
		</table>
		</div>
		" points="73.7,226.3 273.1,225.3 273.1,374.8 73.7,376.8 "/>
<polygon id="b25" class="yt0 tooltip <?php echo $bytynatretompodlazi[8][stav]?>" onclick="window.open('<?php echo $bytynatretompodlazi[8][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynatretompodlazi[8][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynatretompodlazi[8][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynatretompodlazi[8][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynatretompodlazi[8][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynatretompodlazi[8][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynatretompodlazi[8][stav]?></td></tr>
		</table>
		</div>
		" points="33.7,67.8 274.1,68.8 273.1,226.3 33.7,226.3 "/>
</svg>
</div>
      <!--================	end 3rdfloor =================-->





      <!--================	 4thfloor =================-->

	  <div class="podlazia">
    <svg id="podorysstvrtehopodlazia" class="layers" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
	 viewBox="0 0 956.3 956.3" style="enable-background:new 0 0 956.3 956.3;" xml:space="preserve">
<style type="text/css">
	.zt1{opacity:0.2;}
	.zt0:hover{opacity:0.6;}
	.zt1{fill:#FFFFFF;}
	.zt1:hover{opacity:0.6}
	.numbercolor{fill:url(#phcolor4) #000;}
</style>
<linearGradient id="phcolor4" gradientUnits="userSpaceOnUse" x1="12.5831" y1="118.1893" x2="437.4092" y2="118.1893">
	<stop  offset="0" style="stop-color:#8B6046"/>
	<stop  offset="0.4547" style="stop-color:#DAA883"/>
</linearGradient>


<image style="overflow:visible;" width="2500" height="1766" xlink:href="img/podhradom_4p.png"  transform="matrix(0.4505 0 0 0.4505 -122.1858 54.1257)">
</image>
<g id="Layer_4">
	<g>
		<path class="numbercolor " d="M742.9,768.1l-1.3-4.2h-6.5l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H742.9z M740.7,760.7c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H740.7z"/>
		<path class="numbercolor" d="M760.8,764.4h-2.1v3.7H755v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V764.4z M755,761.5v-3c0-0.5,0-1.2,0.1-2.2
			c0-1,0.1-1.5,0.1-1.7h-0.1c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H755z"/>
		<path class="numbercolor" d="M771.6,768.1h-3.8v-10.3l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.7-4.6h3.1V768.1z"/>
	</g>
	<g>
		<path class="numbercolor" d="M659.9,624.1l-1.3-4.2h-6.5l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H659.9z M657.7,616.7c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H657.7z"/>
		<path class="numbercolor" d="M677.8,620.4h-2.1v3.7H672v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V620.4z M672,617.5v-3c0-0.5,0-1.2,0.1-2.2
			c0-1,0.1-1.5,0.1-1.7h-0.1c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H672z"/>
		<path class="numbercolor" d="M691.7,624.1h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
			c0-0.7-0.2-1.3-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5s-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
			s1.2-0.5,1.9-0.7c0.7-0.2,1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6c0.9,0.4,1.5,1,2,1.7s0.7,1.6,0.7,2.5c0,0.8-0.1,1.6-0.4,2.3
			c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V624.1z"/>
	</g>
	<g>
		<path class="numbercolor" d="M659.9,445.5l-1.3-4.2h-6.5l-1.3,4.2h-4.1l6.3-17.9h4.6l6.3,17.9H659.9z M657.7,438c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H657.7z"/>
		<path class="numbercolor" d="M677.8,441.8h-2.1v3.7H672v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V441.8z M672,438.8v-3c0-0.5,0-1.2,0.1-2.2
			c0-1,0.1-1.5,0.1-1.7h-0.1c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H672z"/>
		<path class="numbercolor" d="M691,431.6c0,1.1-0.3,2.1-1,2.8c-0.7,0.8-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3
			c0.7,0.7,1.1,1.6,1.1,2.8c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.4,1.5,0.6,2.3,0.9
			s1.7,0.3,2.5,0.3c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8c-0.7-0.3-1.8-0.5-3.3-0.5h-1.4v-2.9h1.4
			c1.4,0,2.4-0.2,3-0.5c0.6-0.4,1-1,1-1.9c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3s-1.3,0.5-2,1l-1.7-2.6c1.6-1.2,3.6-1.8,5.8-1.8
			c1.8,0,3.3,0.4,4.4,1.1C690.5,429.2,691,430.3,691,431.6z"/>
	</g>
	<g>
		<path class="numbercolor" d="M659.9,319l-1.3-4.2h-6.5l-1.3,4.2h-4.1L653,301h4.6l6.3,17.9H659.9z M657.7,311.5c-1.2-3.8-1.9-6-2-6.5
			c-0.2-0.5-0.3-0.9-0.3-1.2c-0.3,1-1,3.6-2.3,7.7H657.7z"/>
		<path class="numbercolor" d="M677.8,315.3h-2.1v3.7H672v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V315.3z M672,312.3v-3c0-0.5,0-1.2,0.1-2.2
			c0-1,0.1-1.5,0.1-1.7h-0.1c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H672z"/>
		<path class="numbercolor" d="M692.1,315.3h-2.1v3.7h-3.7v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V315.3z M686.3,312.3v-3
			c0-0.5,0-1.2,0.1-2.2c0-1,0.1-1.5,0.1-1.7h-0.1c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H686.3z"/>
	</g>
	<g>
		<g>
			<path class="numbercolor" d="M355.2,734.2h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
				c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
				h-6.7V734.2z M359,741.3h2.2c1,0,1.8-0.2,2.2-0.5c0.5-0.3,0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2
				V741.3z M359,744.3v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H359z"/>
			<path class="numbercolor" d="M383.6,748.4h-2.1v3.7h-3.7v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V748.4z M377.8,745.4v-3
				c0-0.5,0-1.2,0.1-2.2c0-1,0.1-1.5,0.1-1.7h-0.1c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H377.8z"/>
			<path class="numbercolor" d="M394.3,752h-3.8v-10.3l0-1.7l0.1-1.9c-0.6,0.6-1.1,1-1.3,1.2l-2.1,1.6l-1.8-2.3l5.7-4.6h3.1V752z"/>
		</g>
	</g>
	<g>
		<g>
			<path class="numbercolor" d="M177.5,612.2h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
				c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
				h-6.7V612.2z M181.3,619.3h2.2c1,0,1.8-0.2,2.2-0.5c0.5-0.3,0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2
				V619.3z M181.3,622.3v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H181.3z"/>
			<path class="numbercolor" d="M205.9,626.4h-2.1v3.7h-3.7v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V626.4z M200.1,623.4v-3
				c0-0.5,0-1.2,0.1-2.2c0-1,0.1-1.5,0.1-1.7h-0.1c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H200.1z"/>
			<path class="numbercolor" d="M219.8,630h-12.5v-2.6l4.5-4.5c1.3-1.4,2.2-2.3,2.6-2.8c0.4-0.5,0.7-1,0.9-1.5c0.2-0.4,0.3-0.9,0.3-1.4
				c0-0.7-0.2-1.2-0.6-1.6c-0.4-0.3-0.9-0.5-1.6-0.5c-0.7,0-1.4,0.2-2,0.5c-0.7,0.3-1.3,0.8-2,1.4l-2.1-2.4c0.9-0.7,1.6-1.3,2.2-1.6
				c0.6-0.3,1.2-0.5,1.9-0.7s1.4-0.3,2.3-0.3c1.1,0,2.1,0.2,3,0.6s1.5,1,2,1.7c0.5,0.7,0.7,1.6,0.7,2.5c0,0.8-0.1,1.6-0.4,2.3
				c-0.3,0.7-0.7,1.5-1.3,2.2c-0.6,0.8-1.7,1.8-3.2,3.2l-2.3,2.2v0.2h7.8V630z"/>
		</g>
	</g>
	<g>
		<g>
			<path class="numbercolor" d="M177.5,427.6h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
				c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
				h-6.7V427.6z M181.3,434.7h2.2c1,0,1.8-0.2,2.2-0.5c0.5-0.3,0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2
				V434.7z M181.3,437.7v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H181.3z"/>
			<path class="numbercolor" d="M205.9,441.8h-2.1v3.7h-3.7v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V441.8z M200.1,438.8v-3
				c0-0.5,0-1.2,0.1-2.2c0-1,0.1-1.5,0.1-1.7h-0.1c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H200.1z"/>
			<path class="numbercolor" d="M219.1,431.6c0,1.1-0.3,2.1-1,2.8c-0.7,0.8-1.6,1.3-2.8,1.6v0.1c1.4,0.2,2.5,0.6,3.3,1.3
				c0.7,0.7,1.1,1.6,1.1,2.8c0,1.7-0.6,3.1-1.9,4c-1.2,1-3,1.4-5.3,1.4c-1.9,0-3.7-0.3-5.2-1v-3.2c0.7,0.4,1.5,0.6,2.3,0.9
				s1.7,0.3,2.5,0.3c1.2,0,2.2-0.2,2.8-0.6c0.6-0.4,0.9-1.1,0.9-2c0-0.8-0.3-1.4-1-1.8c-0.7-0.3-1.8-0.5-3.3-0.5H210v-2.9h1.4
				c1.4,0,2.4-0.2,3-0.5c0.6-0.4,1-1,1-1.9c0-1.4-0.8-2-2.5-2c-0.6,0-1.2,0.1-1.8,0.3c-0.6,0.2-1.3,0.5-2,1l-1.7-2.6
				c1.6-1.2,3.6-1.8,5.8-1.8c1.8,0,3.3,0.4,4.4,1.1C218.6,429.2,219.1,430.3,219.1,431.6z"/>
		</g>
	</g>
	<g>
		<g>
			<path class="numbercolor" d="M177.5,301.1h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
				c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
				h-6.7V301.1z M181.3,308.2h2.2c1,0,1.8-0.2,2.2-0.5c0.5-0.3,0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2
				V308.2z M181.3,311.2v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H181.3z"/>
			<path class="numbercolor" d="M205.9,315.3h-2.1v3.7h-3.7v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V315.3z M200.1,312.3v-3
				c0-0.5,0-1.2,0.1-2.2c0-1,0.1-1.5,0.1-1.7h-0.1c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H200.1z"/>
			<path class="numbercolor" d="M220.2,315.3h-2.1v3.7h-3.7v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V315.3z M214.4,312.3v-3
				c0-0.5,0-1.2,0.1-2.2c0-1,0.1-1.5,0.1-1.7h-0.1c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H214.4z"/>
		</g>
	</g>
	<g>
		<g>
			<path class="numbercolor" d="M177.5,125.1h5.6c2.5,0,4.4,0.4,5.5,1.1c1.1,0.7,1.7,1.9,1.7,3.4c0,1.1-0.3,1.9-0.8,2.6
				c-0.5,0.7-1.2,1.1-2,1.2v0.1c1.1,0.3,1.9,0.7,2.4,1.4c0.5,0.7,0.8,1.6,0.8,2.8c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4
				h-6.7V125.1z M181.3,132.2h2.2c1,0,1.8-0.2,2.2-0.5c0.5-0.3,0.7-0.8,0.7-1.6c0-0.7-0.3-1.2-0.8-1.5c-0.5-0.3-1.3-0.4-2.4-0.4h-2
				V132.2z M181.3,135.2v4.7h2.5c1,0,1.8-0.2,2.3-0.6c0.5-0.4,0.7-1,0.7-1.8c0-1.5-1.1-2.2-3.2-2.2H181.3z"/>
			<path class="numbercolor" d="M205.9,139.3h-2.1v3.7h-3.7v-3.7h-7.6v-2.6l7.8-11.5h3.5v11.2h2.1V139.3z M200.1,136.3v-3
				c0-0.5,0-1.2,0.1-2.2c0-1,0.1-1.5,0.1-1.7h-0.1c-0.3,0.7-0.7,1.3-1.1,2l-3.3,4.9H200.1z"/>
			<path class="numbercolor" d="M213.8,131.5c1.7,0,3.1,0.5,4.1,1.5c1,1,1.5,2.3,1.5,4c0,2-0.6,3.5-1.8,4.6c-1.2,1.1-3,1.6-5.3,1.6
				c-2,0-3.6-0.3-4.8-1V139c0.6,0.3,1.4,0.6,2.2,0.8c0.9,0.2,1.7,0.3,2.4,0.3c2.3,0,3.5-0.9,3.5-2.8c0-1.8-1.2-2.7-3.6-2.7
				c-0.4,0-0.9,0-1.4,0.1c-0.5,0.1-0.9,0.2-1.3,0.3l-1.5-0.8l0.7-9.1h9.7v3.2h-6.4l-0.3,3.5l0.4-0.1
				C212.5,131.6,213.1,131.5,213.8,131.5z"/>
		</g>
	</g>
</g>
<g id="Layer_4" class="zt0">
	<polygon id="a24_1_" class="zt1 tooltip <?php echo $bytynastvrtompodlazi[3][stav]?>" onclick="window.open('<?php echo $bytynastvrtompodlazi[3][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynastvrtompodlazi[3][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynastvrtompodlazi[3][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynastvrtompodlazi[3][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynastvrtompodlazi[3][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynastvrtompodlazi[3][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynastvrtompodlazi[3][stav]?></td></tr>
		</table>
		</div>
		" points="516.9,200.4 516.9,427.4 567.3,427.4 567.3,375.7 755.6,375.7 755.6,200.4 	"/>
	<polygon id="a23_1_" class="zt1 tooltip <?php echo $bytynastvrtompodlazi[2][stav]?>" onclick="window.open('<?php echo $bytynastvrtompodlazi[2][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynastvrtompodlazi[2][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynastvrtompodlazi[2][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynastvrtompodlazi[2][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynastvrtompodlazi[2][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynastvrtompodlazi[2][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynastvrtompodlazi[2][stav]?></td></tr>
		</table>
		</div>
		" points="755.6,375.7 567.3,375.7 567.3,426.8 555.6,426.8 555.6,525.3 755.6,525.3 	"/>
	<polygon id="a22_1_" class="zt1 tooltip <?php echo $bytynastvrtompodlazi[1][stav]?>" onclick="window.open('<?php echo $bytynastvrtompodlazi[1][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynastvrtompodlazi[1][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynastvrtompodlazi[1][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynastvrtompodlazi[1][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynastvrtompodlazi[1][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynastvrtompodlazi[1][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynastvrtompodlazi[1][stav]?></td></tr>
		</table>
		</div>
		" points="555.6,524.3 755.6,525.3 755.6,676.7 555.6,676.7 	"/>
	<polygon id="a21_1_" class="zt1 tooltip" onclick="window.open('<?php echo $bytynastvrtompodlazi[0][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynastvrtompodlazi[0][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynastvrtompodlazi[0][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynastvrtompodlazi[0][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynastvrtompodlazi[0][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynastvrtompodlazi[0][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynastvrtompodlazi[0][stav]?></td></tr>
		</table>
		</div>
		" points="849.2,695.7 755.6,687.7 755.6,676.7 620.2,676.7 620.2,818.8 829.5,835.4 	"/>
</g>
<g id="Layer_5" class="zt0">
	<polygon id="b21_1_" class="zt1 tooltip <?php echo $bytynastvrtompodlazi[4][stav]?>" onclick="window.open('<?php echo $bytynastvrtompodlazi[4][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynastvrtompodlazi[4][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynastvrtompodlazi[4][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynastvrtompodlazi[4][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynastvrtompodlazi[4][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynastvrtompodlazi[4][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynastvrtompodlazi[4][stav]?></td></tr>
		</table>
		</div>
		" points="525.2,668.2 270.1,669.5 270.1,675.7 135.9,675.7 135.9,811.7 524.8,811.7 	"/>
	<polygon id="b22_1_" class="zt1 tooltip <?php echo $bytynastvrtompodlazi[5][stav]?>" onclick="window.open('<?php echo $bytynastvrtompodlazi[5][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynastvrtompodlazi[5][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynastvrtompodlazi[5][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynastvrtompodlazi[5][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynastvrtompodlazi[5][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynastvrtompodlazi[5][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynastvrtompodlazi[5][stav]?></td></tr>
		</table>
		</div>
		" points="74.4,675.7 270.1,675.7 270.1,669.5 273.8,669.5 273.8,523.3 73.4,524.3 	"/>
	<polygon id="b23_1_" class="zt1 tooltip <?php echo $bytynastvrtompodlazi[6][stav]?>" onclick="window.open('<?php echo $bytynastvrtompodlazi[6][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynastvrtompodlazi[6][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynastvrtompodlazi[6][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynastvrtompodlazi[6][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynastvrtompodlazi[6][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynastvrtompodlazi[6][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynastvrtompodlazi[6][stav]?></td></tr>
		</table>
		</div>
		" points="74.4,374.7 273.8,374.7 273.8,523.2 74.4,524.2 	"/>
	<polygon id="b24_1_" class="zt1 tooltip <?php echo $bytynastvrtompodlazi[7][stav]?>" onclick="window.open('<?php echo $bytynastvrtompodlazi[7][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynastvrtompodlazi[7][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynastvrtompodlazi[7][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynastvrtompodlazi[7][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynastvrtompodlazi[7][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynastvrtompodlazi[7][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynastvrtompodlazi[7][stav]?></td></tr>
		</table>
		</div>
		" points="74.4,225.2 273.8,225.2 273.8,374.7 74.4,373.7 	"/>
	<polygon id="b25_1_" class="zt1  tooltip <?php echo $bytynastvrtompodlazi[8][stav]?>" onclick="window.open('<?php echo $bytynastvrtompodlazi[8][kl];?>');" title="
		<div class=''>
		<div class='tooltip_headline'><strong><?php echo $bytynastvrtompodlazi[8][oznacenie];?></strong> </div>
		<hr class=''>
		<table>
		<tr class='credential'><td>počet izieb: </td> <td> <span><?php echo $bytynastvrtompodlazi[8][pocet_izieb]?>-izbový</span></td></tr>
				<tr class='credential'><td>plocha bytu: </td> <td>  <span><?php echo $bytynastvrtompodlazi[8][uzitkova_plocha]?> m<sup>2</sup></span></td></tr>
		<tr class='credential'><td>exteriér </td> <td> <span><?php echo $bytynastvrtompodlazi[8][exterier]?> m<sup>2</sup></span></td></tr>
			<tr class='credential cena'><td>cena: </td> <td><span class=''><?php echo $bytynastvrtompodlazi[8][cena]?> €</span></td> </tr>
		<tr class='tooltip_status'><td class='text-center' colspan='2'><?php echo $bytynastvrtompodlazi[8][stav]?></td></tr>
		</table>
		</div>
		" points="34.4,67.7 273.8,67.7 273.8,225.2 34.4,224.2 	"/>
</g>
</svg>

</div>





      <!--================	end 4thfloor =================-->


</div>








</div>





        <!--================Ponuka Area =================-->






        <section id="ponuka" class="ponuka ">
        	<div class="container mb-5">



				        		<div class="row">



        		</div>



        	</div>


        	        	<div class="container-fluid ">

        		<div class=" row ">
        			<div class="col-lg-6 p0 ">

				 <img class="img-fluid objectcover lazy" id="oprojektebanner"  data-src="img/main/podhradom_4.jpg" alt="podhradom"/>



        			</div>
        			<div class="col-lg-6 p0 backgroundwhite text-center vertical-center">
        			<div class="wrapper ml-md-5 mt-5 " id="oprojektetext">
        			 <h2 >
        		Lepší pocit<br>
zo života
        			</h2><br>
        			<p>
Bývanie pod hradom sa nachádza v susedstve areálu Nitrianskeho hradu - významnej kultúrnej pamiatky z 9. storočia. Okolo hradu sa na 20 hektároch rozkladá mestský park, ktorý máte pár minút od areálu vášho bytu. Súčasťou parku sú odpočinková zóna pri fontáne, piváreň či altánok, ktorý počas letných víkendov ponuka bohatý kultúrny program. Pre deti sú tu pripravené rôzne atrakcie ako detské ihrisko, lanová dráha alebo gazdovský dvor s domácimi zvieratami.  V horúcich letných dňoch oceníte kúpalisko, z ktorého máte výhľad na hrad.</p>
        			</div>
        			</div>




        		</div>
        	</div>







        </section>
        <section id="harmonogram">

    <div class="container">
<div class="row "><h2  class="text-center mb-5 mt-5">
        		Nové byty už čoskoro
        			</h2></div>
<div class="row ">


<div class="col-md-2dot4"><img class="img-fluid mb-5 mt-5 lazy" data-src="img/harmonogram_1.svg?<?php echo date('Y-m-d_H:i:s'); ?>" alt="harmonogram ikona" ></div>
<div class="col-md-2dot4"><img class="img-fluid mb-5 mt-5 lazy" data-src="img/harmonogram_2.svg?<?php echo date('Y-m-d_H:i:s'); ?>" alt="harmonogram ikona" ></div>
<div class="col-md-2dot4"><img class="img-fluid mb-5 mt-5 lazy" data-src="img/harmonogram_3.svg?<?php echo date('Y-m-d_H:i:s'); ?>" alt="harmonogram ikona" ></div>
<div class="col-md-2dot4"><img class="img-fluid mb-5 mt-5 lazy" data-src="img/podhradom_harmo_4.svg?<?php echo date('Y-m-d_H:i:s'); ?>" alt="harmonogram ikona" ></div>
<div class="col-md-2dot4"><img class="img-fluid mb-5 mt-5 lazy" data-src="img/harmonogram_5.svg?<?php echo date('Y-m-d_H:i:s'); ?>" alt="harmonogram ikona" ></div>

				</div>
        	</div>


        </section>


          <section id="advantages">


        	        	<div class="container-fluid">

        		<div class=" row backgroundwhite">

        			<div class="col-lg-6 p0   vertical-center">


        		<h2  class="text-center ">
        	Lepší život  <br>
v centre Nitry
        			</h2><br>
        			<p class="text-center ">
V blízkosti projektu je dostupná bohatá občianska vybavenosť. Všetko čo potrebujete, je pohodlne dostupné pešky. Reštaurácie, bary a kaviarne s letnými záhradami určujú bohatú gastronomickú scénu. Vernisáže, divadelné predstavenia, filmové premietania a ďalšie kultúrne akcie. Športové a fitness centrá lákajú každého záujemcu.  Množstvo obchodov, škôl a ďalších inštitúcií podčiarkuje vynikajúcu občiansku vybavenosť a veľkú obľubu tohto miesta, kde nič nie je ďaleko.		</p>


        			</div>


        			        			<div class="col-lg-6 p0">


<img data-src="img/main/podhradom_3.jpg" class="img-fluid lazy" alt="podhradom ">

        			</div>


        		</div>
        	</div>


        	        	<div class="container-fluid">

        		<div class=" row backgroundwhite">
        			<div class="col-lg-6 p0">


  <img data-src="img/main/podhradom_1.jpg" class="img-fluid lazy" alt="podhradom ">


        			</div>
        			<div class="col-lg-6 p0   vertical-center">


        		<h2  class="text-center ">
        	Zelené   <br>
nádvorie
        			</h2><br>
        			<p class="text-center ">
V areáli projektu Bývanie pod hradom je smerom do stredu vjazd do podzemnej garáže, kde je priestor pre 42 parkovacích miest. Priestor prízemia je rozdelený na spoločné priestory a byty prepojené na súkromné predzáhradky, ktoré sú riešené tak, aby prirodzene nadväzovali na obytný priestor. V horných podlažiach budov vzniknú podkrovné byty. 33 moderných bytov s bezbariérovým prístupom je rozmiestnených na 4 podlažiach, medzi ktorými si môžete vybrať 2 až 4- izbové byty s možnosťou balkónov.		</p>


        			</div>




        		</div>
        	</div>


        	        	<div class="container-fluid">

        		<div class=" row backgroundwhite">

        			<div class="col-lg-6 p0   vertical-center">


        		<h2  class="text-center ">
        Honosné
  <br>
dispozície
        			</h2><br>
        			<p class="text-center ">
Dispozície bytov splnia všetky nároky na komfortné mestské bývanie. Štandardom vybavenia navrhnutým architektmi projektu sú napríklad drevené podlahy, veľké okná, dizajnová sanita či príprava pre klimatizáciu. Konkrétne typy si môžete vybrať na základe  individuálneho výberu, vo vašom štýle.	</p>

				<div class="row ">
					<div class="col-md-4 offset-md-2 mt-5 col-sm-12">
		<a href="documents/byvanie_pod_hradom_vybavenie_bytu.pdf" target="blank">	<button class="btn btn-byvanie">Vybavenie bytu</button></a>
        			</div>
					<div class="col-lg-6  mt-5  col-sm-12">
		<a href="documents/Byvaniepodhradom_technicka_specifikacia_.pdf" target="blank">		<button class="btn btn-byvanie">Technický štandard</button></a>
        			</div>


        			</div>


        			</div>


        			        			<div class="col-lg-6 p0">


<img data-src="img/podhradom_nitra.jpg" class="img-fluid lazy" alt="podhradom ">


</div>
        			</div>


        		</div>
        	</div>


        </section>



         <section  id="lokalita">
        <div class="container">


        <div class="row">
          	<div class="col-xs-12 p0 bx-shadow">
           <img class="img-fluid lazy" data-src="img/main/20190902_podhradom_mapa.png" alt="podhradom ">
         </div>
        </div>
        		<div class="p0 row">

        			<div class="col-lg-5 p0 backgroundwhite">
        			<div class="wrapper p_25">
        			        			<h2 >
        		Očarujúca
Nitra
        			</h2>
        			<p>
 Spoločenský život, miesto pre výchovu detí, krásna príroda či priestor pre rast - Nitra vám poskytne možnosť lepšieho života.
        		</p>
        			</div>
        			</div>

        			        			<div class="col-lg-7 p0">

				  <video autoplay loop muted class=""> <source src="videos/video2.mp4" type="video/mp4" />


        		 </video>

        			</div>


        		</div>



                </div>
                <br>
    <!--
<div class="container p0 mt-5">
<div class="inliner"></div>
<div class="inlined">

  <div class="progress-meter" id="scroll-to">
    <div class="track">
      <span class="progress"></span>
    </div>
    <ol class="progress-points" data-current="4">
      <li class="progress-point">
        <span class="label">začiatok výstavby
inžinierskych sietí</span><br><span>2019</span>


      </li>
      <li class="progress-point">
        <span class="label">zahájenie výstavby
rodinných domov</span><br><span>2019</span>
      </li>
      <li class="progress-point">
        <span class="label">kolaudácia
inžinierskych sietí</span><br><span>2019</span>
      </li>
      <li class="progress-point">
        <span class="label">ukončenie výstavby
rodinných domov</span><br><span>2019</span>
      </li>
      <li class="progress-point">
        <span class="label">kolaudácia
rodinných domov</span><br><span>2019</span>
      </li>
    </ol>
  </div>



</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
          -->
                </section>
          		<section id="financovanie">
          		<div class="container-fluid  mt-5 backgroundwhite">
          		<div class="mt-5 row mb-5">

        			<div class=" col-md-7 offset-md-1">
        			<h2 >
        	Financovanie
        			</h2>
        			<p class="mt-5 mb-5 mwp">
Rezervácia a kúpa bytu je jednoduchá a prehľadná. U nás vás nebudú obťažovať tranžové splátky, ako napr. 50 % splátka pri zápise rozostavanej stavby do katastra.
        		</p>




        		<div class="row mt-7">
        	<div class="col-lg-4 ">
	<img class="img-fluid finicon lazy" data-src="img/main/podhradom_fin2.svg" alt="ikona " />

			<strong class="">REZERVÁCIA    </strong>
        	                         <p class="">Rezervačný poplatok - resp. záloha k 1. splátke vo výške 3.000 € - uhradený na základe Rezervačnej zmluvy

 </div>
           	<div class="col-lg-3 ">
<img class="img-fluid finicon lazy" data-src="img/main/podhradom_fin3.svg"  alt="ikona "  />
			<strong class="">PRVÁ SPLÁTKA

    </strong>
        	                         <p class="">15 % ceny bytu vrátane rezervačného poplatku do 30 dní od podpisu Zmluvy o budúcej zmluve



 </div>

                 	<div class="col-lg-4 offset-lg-1">
<img class="img-fluid finicon lazy" data-src="img/main/podhradom_fin3.svg"  alt="ikona "  />

					<strong class="">DRUHÁ SPLÁTKA



    </strong>
        	                         <p class="">85 % ceny bytu na základe Zmluvy o budúcej kúpnej zmluve po nadobudnutí právoplatného kolaudačného rozhodnutia.





 </div>

                    </div>
        		</div>


					<div class=" col-md-4 castle p0">
					<img data-src="img/pod_hradom_filtered.jpg" class="img-fluid lazy"  alt="podhradom " >

        			</div>
        		</div>




        		</div>

         </section>


   <section id="galeria" class="page-section">
        <div class="container">
            <h2>Galéria</h2>
            <div class="row mt-3 justify-content-center">


          <a href="img/main/podhradom_1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/main/podhradom_1.jpg" alt="img/jpg" class="img-fluid" alt="galéria podhradom">
            </a>

      <a href="img/main/podhradom_2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/main/podhradom_2.jpg" alt="img/jpg" class="img-fluid" alt="galéria podhradom">
            </a>

      <a href="img/main/podhradom_3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/main/podhradom_3.jpg" alt="img/jpg" class="img-fluid" alt="galéria podhradom">
            </a>

      <a href="img/main/podhradom_4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/main/podhradom_4.jpg" alt="img/jpg" class="img-fluid" alt="galéria podhradom">
            </a>

      <a href="img/main/podhradom_5.png" data-toggle="lightbox" data-gallery="example-gallery" class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/main/podhradom_5.png" alt="img/png" class="img-fluid" alt="galéria podhradom">
            </a>

      <a href="img/main/podhradom_6.png" data-toggle="lightbox" data-gallery="example-gallery" class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/main/podhradom_6.png" alt="img/png" class="img-fluid" alt="galéria podhradom">
            </a>



            </div>
        </div>
       </section>

<section id="developer">
        <div class="container-fluid p-0">

            <div class="row mt-5">
                <div class="col-md-5  mt-5 pt-5 offset-md-1">
                    <img class="img-fluid mainlogo lazy" alt="logo púpava development"  data-src="img/main/logopupavadevelopment.png" >
                    <p class="text-white mt-3  mt-5">Sme stabilná a dynamicky rastúca investično-developerská spoločnosť so sídlom v Trnave. Vyhľadávame vhodné a zaujímavé príležitosti, realizujeme moderné developerské projekty situované najmä v okolí Trnavy, Nitry a Stupavy. Najväčší dôraz kladieme na férový prístup k zákazníkovi, ktorému prinášame kvalitné bývanie za dostupnú cenu. Napredujeme vďaka odbornej práci našich zamestnancov s bohatými skúsenosťami v oblasti stavebníctva, financií, marketingu a obchodu.</p>

                </div>




                <div class="col-md-6 projects pl-md-5">
                    <div class="row  projectsrow">
                        <div class="col-md-4 col-xs-6">
                            <a href="//bytyhalenarska.sk" target="blank"><img class="img-fluid p-0 logo lazy" alt="projekty púpava development" data-src="img/projekty/halenarska.png"></a>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <a href="//nadvinicami.sk" target="blank"><img class="img-fluid p-0 logo lazy" alt="projekty púpava development" data-src="img/projekty/nadvinicami_bielelogo_koliba.png"></a>
                        </div>
                        <div class="col-md-4 col-xs-6 ">

                            <a href="//greenavenue.sk" target="blank"> <img class="img-fluid p-0 logo lazy" alt="projekty púpava development" data-src="img/projekty/greena.png"></a>

                        </div>


                    </div>
                    <div class="row  projectsrow">

                        <div class="col-md-4 col-xs-6">
                            <a href="//pupavypaulinska.sk" target="blank"> <img class="img-fluid p-0 logo lazy" alt="projekty púpava development" data-src="img/projekty/paulinska.png"></a>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <a href="//domypodzoborom.sk" target="blank"> <img class="img-fluid p-0 logo lazy" alt="projekty púpava development" data-src="img/projekty/podzoborom.png"></a>

                        </div>
                        <div class="col-md-4 col-xs-6">
                            <a href="//rezidenciaporta.sk" target="blank"> <img class="img-fluid p-0 logo lazy" alt="projekty púpava development" data-src="img/projekty/porta.png"></a>
                        </div>



                    </div>

                    <div class="row  projectsrow">
                        <div class="col-md-4 col-xs-6">
                            <a href="//kolibagardens.sk" target="blank"> <img class="img-fluid p-0 logo lazy" alt="projekty púpava development" data-src="img/projekty/koliba.png"></a>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <a href="//slnecnastran.sk" target="blank"> <img class="img-fluid p-0 logo lazy" alt="projekty púpava development" data-src="img/projekty/slnecnastran.png"></a>

                        </div>
                        <div class="col-md-4 col-xs-6">
                            <a href="//stvorlistky.sk" target="blank"> <img class="img-fluid p-0 logo lazy" alt="projekty púpava development" data-src="img/projekty/stvorlistky.png"></a>
                        </div>



                    </div>





                </div>
            </div>
        </div>







    </section>







         <section id="kontakt">


        <footer class=" ">
        	<div class="container">
        				<h2>Kontaktujte nás
</h2>
        		<div class="row mt-5">
        		<div class="col-md-5">
                        <div class="row">
        					<div class="col-md-9">
							 <div class="row">
						<div class="col-md-5">
						<img class="img-fluid lazy" data-src="img/martin.png" alt="predajca pupava">

						</div>
						<div class="col-md-7">
                    <h3>	Predajca </h3>
                     <div>	Martin Štetiar</div>
                     <div>	+421 915 577 410</div>
                     <div>	stetiar@pupava.com</div>	        	</div>
                         	</div>

               <div class="row mt-5">
                     			<div class="col-md-5">
						<img class="img-fluid lazy" data-src="img/zuzka.png" alt="predajca pupava">


						</div>


						<div class="col-md-7 mt-5">
                                 <div>Zuzana Solčanská</div>
                     <div>	+421 905 200 322</div>
                     <div>solcanska@pupava.com</div>

                     	</div>
                     	</div>
                     	</div>
                     	</div>
                     	</div>




								<div class="col-md-3 mobilemargintop2">
                    <h3>	Klientské centrum </h3>
                     <div>	Halenárska 11</div>
                     <div>	917 01 Trnava</div>
                     <div>	info@pupava.com
</div>
                     <br>



                     	</div>






        				        		<div class="col-md-4 mobilemargintop2">
  <h3>Kontaktný formulár</h3>


	<form role="form"  method="post" >


				<div class="col-xs-12  col-lg-12">
					<div class="form-group">
                        <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Meno" tabindex="1" required>
					</div>
				</div>
				<div class="col-xs-12  col-lg-12">
					<div class="form-group">
						<input type="email" name="email" id="email" class="form-control input-lg" placeholder="E-mail" tabindex="2" required>
					</div>
				</div>

<div class="col-xs-12  col-lg-12">
			<div class="form-group">
				<input type="text" name="number" id="number" class="form-control input-lg" placeholder="Telefónne číslo" tabindex="4" required>

			</div>
			</div>


		<div class="col-xs-12  col-lg-12">
			<div class="form-group">
				<input type="text" name="message" id="number" class="form-control input-lg" placeholder="Správa" tabindex="4">

			</div>
			</div>




 <div class="col-xs-12  col-md-12 mt-5 mb-5"><a href="#"><button type="submit" value="submit" name="submit" onclick="play()" class="btn btn-block btn-sm plane">Odoslať </button></a></div>

		</form>


        					</div>
        			</div>
        			</div>


        <div class="container mt-5">
				<div class="social_icons">
		<a href="https://www.facebook.com/pupava.development" target="blank"><img class="img-fluid lazy" data-src="img/main/facebook-logo_ph.svg" alt="socialna ikona"></a>
		<a href="https://www.instagram.com/pupava_development/" target="blank"><img class="img-fluid lazy" data-src="img/main/instagram-logo_ph.svg" alt="socialna ikona"></a>
		<a href="https://www.youtube.com/channel/UCMwgryetyC1zWaK9-Dh4UqA"  target="blank"><img class="img-fluid lazy" data-src="img/main/youtube-logo_ph.svg" alt="socialna ikona"></a>

		</div>
      <?= $Wcms->footer() ?>
            <div class="small text-center text-white">Copyright &copy; púpava development</div>
        </div>
    </footer>
	 <audio id="audio" src="videos/plane.wav"></audio>
        <!--================End Footer Area =================-->
         </section>

  <div id="projectslist">

	<ul>
	<button class="btn" id="toggleprojects">Naše projekty v Nitre  <img id="changearrow" class="iconarrowdown img-fluid" src="images/icons/green_sipka-01.png"></button>
		 <li> <a href="//byvaniepodhradom.sk" target="blank"> <img class="projectimage img-fluid" src="https://byvaniepodhradom.sk/img/main/podhradom_3.jpg"><span>Bývanie pod hradom</span></a></li>
		  <li>  <a href="//nadvinicami.sk" target="blank"><img class="projectimage img-fluid" src="https://nadvinicami.sk/images/ponuka/typy/B.jpg"><span>Nad vinicami</span></a></li>
		  <li>  <a href="//domypodzoborom.sk" target="blank"><img class="projectimage img-fluid" src="https://www.domypodzoborom.sk/img/about-1.jpg"><span>Domy pod Zoborom</span></a></li>
	</ul>
	</div>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <?= $Wcms->js() ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
				<script src="vendors/jquery-easing/jquery.easing.min.js"></script>
				<script async src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>

				<script async>
    // Set the options to make LazyLoad self-initialize
    window.lazyLoadOptions = {
        elements_selector: ".lazy",
        // ... more custom settings?
    };
</script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
   <script src="js/scrolling-nav.js?<?php echo date('Y-m-d_H:i:s'); ?>"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.5.0/parallax.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script src="js/main.min.js?<?php echo date('Y-m-d_H:i:s'); ?>"></script>

    <script>
	function play() {
        var audio = document.getElementById("audio");
        audio.play();
      }
    </script>
<script>
$('#dismissmodal').click(function() {
    $('#cModal').modal('hide');
});

$('#togglecovidmessage').click(function() {

    $('#togglecovidmessage').hide();
});
$(function () {
   $('#modal').modal('toggle');
});
</script>



<style>
.modal-dialog{
		background:#fff;

  }
  .modal-title{
		font-size:28px;
		text-align:center

  }
  .modal-body{
		font-size:14px;

  }  .modal-body li{
		color:#000

  }
    .modal-body strong,.modal-strong{
	font-weight:bold;
	color:#000

  }
      .btn-primary{
background: #8a5f45;
    background: -moz-linear-gradient(left, #8a5f45 0%, #daa883 45%, #7a533b 100%);
    background: -webkit-linear-gradient(left, #8a5f45 0%,#daa883 45%,#7a533b 100%);
    background: linear-gradient(to right, #8a5f45 0%,#daa883 45%,#7a533b 100%);
	color:#fff;
	border:none;
	padding:5px 15px;

  }


  #covid{
		position:relative;
		color:white;
	 text-shadow:none;
	  font-size:14px;
	padding:20px 20px 20px 20px;
	border-radius:25px;
	  background:rgb(255,165,0);
	  z-index:79000;
	  color:white;
	  font-weight:bold;
	  text-align:left;
	  max-width:475px;

  }

    .btn-covid{
		margin-top:3em;
			  margin:0 auto;
	    display:block;
	text-align:center;
	color:white;
   background:transparent;
   box-shadow:none;
   border:1px solid #fff;
    padding: 5px 25px;

    font-weight: bold;
    border-radius: 3px;
    text-transform: uppercase;
    letter-spacing: 0.01em;

  }
      .btn-covid:hover{

	background:rgb(245,245,245);
	color:rgb(255,165,0);
	opacity:0.9

  }


   @media screen and (min-width:901px){
	   #covid{display:block;}


   }
   .btn-byvanie {
	   background: linear-gradient(to right, #8a5f45 0%,#daa883 45%,#7a533b 100%);
	   color:#fff;
	   padding:10px 25px;
   }




</style	>

    </body>
</html>
