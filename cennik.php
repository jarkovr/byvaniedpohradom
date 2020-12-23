<?php
session_start();
include 'kontakt.php';
include 'config.php';


		$stmt = $db->prepare("select * from cennik_podhradom ORDER BY oznacenie ASC");
 
		$stmt->execute();

		$result = $stmt->fetchAll();
	


header('Content-Type: text/html; charset=utf-8');


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>


        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Cenník - BÝVANIE POD HRADOM </title>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115743596-9"></script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TZDRZSH');</script>
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

    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

         <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Custom styles for this template -->
<link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,700&display=swap" rel="stylesheet">



        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
             
			 <link rel="stylesheet" href="css/style.css?<?php echo date('Y-m-d_H:i:s'); ?>">
  
  </head>

    <body id="bg">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZDRZSH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php#page-top"><img id="brand" alt="logo" src="img/logo_znamka.png"></a>
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
                        <a class="nav-link js-scroll-trigger" href="index.php#navigator">ponuka</a>
                    </li>

                <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#ponuka">o projekte</a>
                    </li>

            

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#lokalita">lokalita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#galeria">galéria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#developer">developer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#kontakt">kontakt</a>
                    </li>
		
					<li class="nav-item">
                        <a class="nav-link" href="cennik.php">cennik</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->


            <div class="spacer10"></div>
            <div class="cennikwrapper">
            <table id="cennik" class=" table mx-auto">



                <thead>
                    <tr>
                        <th> označenie
                        </th>
                        <th>
                            podlažie
                        </th>
                        <th>
                            počet izieb
                        </th>
                        <th>
                            plocha
                        </th>
                        <th>
                            balkón
                        </th>
						  <th>
                            kobka
                        </th>
						
                        <th>
                            cena
                        </th>
                  
                        <th>
                            katalógový list
                        </th>
                        <th>
                            stav
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
foreach($result as $row){

	


	
?>
                    <tr>
                        <td>
                            <?php echo $row['oznacenie'] ?>
                        </td>
                        <td>
                            <?php echo $row['podlazie'] ?> . podlažie
                        </td>
                        <td>
                            <?php echo $row['pocet_izieb'] ?> izby
                        </td>
                        <td>
                            <?php echo $row['uzitkova_plocha'] ?> m<sup>2</sup>
                        </td>
                        <td>
                            <?php echo $row['exterier'] ?>m<sup>2</sup>
                        </td>
						      <td>
                            <?php echo $row['kobka'] ?>m<sup>2</sup>
                        </td>
						
						
						
                           <td class="cena">
								<?php echo $row['cena'] ?> €
                        </td>
                   
                        <td  class="katalogovy">
                            <a href="<?php echo $row['kl'] ?>" target="_blank">náhľad</a>
                        </td>
                        <td class="stav">
                            <?php echo $row['stav'] ?>
                        </td>

                    </tr>
                    <?php }


 ?>


                </tbody>
            </table>
   			</div>


            <div class="spacer10"></div>
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
						<img class="img-fluid" src="img/martin.png">
						
						</div>
						<div class="col-md-7">		 
                    <h3>	Predajca </h3>
                     <div>	Martin Štetiar</div>	
                     <div>	+421 915 577 410</div>	
                     <div>	stetiar@pupava.com</div>	        	</div>
                         	</div>
							
               <div class="row mt-5">
                     			<div class="col-md-5">
						<img class="img-fluid" src="img/zuzka.png">
						
						
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
        			
                           
	<form role="form" action="#kontakt" method="post" >

		
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

			
			
			
 <div class="col-xs-12  col-md-12 mt-5 mb-5"><a href="#"><button type="submit" value="submit" name="submit" class="btn btn-block btn-sm">Odoslať </button></a></div>
		
		</form>                             
                           
                           
        					</div>
        			</div>
        			</div>
     
        	

        <div class="container mt-5">
				<div class="social_icons">
		<a href="https://www.facebook.com/pupava.development" target="blank"><img class="img-fluid" src="img/main/facebook-logo_ph.svg"></a>
		<a href="https://www.instagram.com/pupava_development/" target="blank"><img class="img-fluid" src="img/main/instagram-logo_ph.svg"></a>
		<a href="https://www.youtube.com/channel/UCMwgryetyC1zWaK9-Dh4UqA"  target="blank"><img class="img-fluid" src="img/main/youtube-logo_ph.svg"></a>
	
		</div>
            <div class="small text-center text-white">Copyright &copy; púpava development</div>
        </div>
    </footer>
        <!--================End Footer Area =================-->
         </section>  

  


            <!-- Bootstrap core JavaScript -->
            <script src="js/jquery.min.js"></script>
			      <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
  <script src="vendors/jquery-easing/jquery.easing.min.js"></script>
			    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.4/lazysizes.min.js" async=""></script>
         <script src="js/scrolling-nav.js?<?php echo date('Y-m-d_H:i:s'); ?>"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
            <!-- Plugin JavaScript -->



            <script src="js/creative.min.js"></script>



            <script src="js/changestatus.js?<?php echo date('Y-m-d_H:i:s'); ?>" type="text/javascript" charset="utf-8"></script>
            <script src="js/mapify.js" type="text/javascript" charset="utf-8"></script>



    <script>
	  jQuery.moveColumn = function (table, from, to) {
    var rows = jQuery('tr', table);
    var cols;
    rows.each(function() {
        cols = jQuery(this).children('th, td');
        cols.eq(from).detach().insertBefore(cols.eq(to));
    });
}
   
if($(window).innerWidth() <= 1051) {
 var tbl = jQuery('#cennik');
jQuery.moveColumn(tbl, 8, 1);
jQuery.moveColumn(tbl, 7, 2);
    }


    </script>
	
<style>
</style>





    </body>

    </html>
