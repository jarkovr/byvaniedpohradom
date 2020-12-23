<?php
session_start();

  if($_SESSION['validation'] != 'validate')
       {
		header("Location:  https://byvaniepodhradom.sk");
       }
      
    


	 

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- Global site tag (gtag.js) - Google Analytics -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet">

  <title>Koliba Gardens</title>


</head>

<body>



    <div class="spacer3"></div>
    <div class="spacer3"></div>
    <div class="spacer3"></div>
    <div class="spacer3"></div>
    <div class="spacer3"></div>




    <div class="container boldtext maincontainer">
        <div class="row">
            <div class="col-md-12 text-center mx-auto">
<h2>Ďakujeme za váš záujem.</h2>
<p class="mt-5">Ďakujeme za odoslanie kontaktného formulára. Náš predajca vás čoskoro skontaktuje.</p>


             <div class="row">  

        </div>    <div class="spacer3"></div>
             <div class="row">  
                      <div class="col-md-6 mx-auto "><div class="flex">
   <a href="/" class="bttn webdevelopera">Stránka projektu </a>
                         </div>
                         </div>
                         
                                  <div class="col-md-6 mx-auto "><div class="flex">
     <a href="//pupava.com" class="bttn webdevelopera">Stránka developera </a>
                         </div>
                         </div>
                         

                         
                         
                         
                        </div>

        
        
        
        
        
    </div>
    </div>
    </div>
  

    <!-- Footer -->
    <footer>
  <div> púpava development, s.r.o., Mikovíniho 10, 917 01 Trnava </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans');

.spacer1{
    position: relative;
    height: 1em;
    }.spacer2{
   position: relative;
    height: 2em;
  }.spacer3{    position: relative;
    height: 3em;
  }.spacer4{
    position: relative;
    height: 4em;
  }.spacer5{
    position: relative;
    height: 5em;
  }.spacer6{
    position: relative;
    height: 6em;
  }.spacer7{
    position: relative;
    height: 7em;
  }.spacer8{
    position: relative;
    height: 8em;
  }.spacer9{
    position: relative;
    height: 9em;
  }.spacer10{
    position: relative;
    height: 10em;
} 

body {

}
*{
    color: rgb(50,50,50);
    font-family: 'Open Sans', sans-serif;
}

footer div{
      color: rgb(255,255,255);
}


.maincontainer h2{
      color: rgb(0,0,0);
}




.row{
    padding: 15px
}


.hovereffect:hover img {

  filter: alpha(opacity=100);
background:rgba(0,0,0,.5);
    transform: scale(1.1);
}

.hovereffect:hover .overlay:before,
.hovereffect:hover a, .hovereffect:hover p {

  filter: alpha(opacity=100);
    transform: scale(1.1);
    
}

.hovereffect:hover .overlay{
	background-image: linear-gradient(to right, rgba(0,0,0,0.8), rgba(0,0,0,0.8));
transition: all 0.2s linear;
}
.maincontainer p,.maincontainer li,.maincontainer ul {
    padding:0;
    margin: 5px;
}


.no-gutters{
    padding:0;
    margin: 0px;
}



.btn-default {
    background: transparent;
    border: 1px solid white;
    padding:0 25px ;
}

li {
    list-style-type: none;
}
    
  


footer {
    height: 55px;
    background: rgb(5,5,5);
    text-align: center;
    width: 100%;
    margin-top:75px;
position: absolute;
    bottom:0;
}


footer div{
    
height: 50px;
    line-height: 3.6;
 width: 100%;

}

#brand {
    width: 100%;
    max-width: 200px;
}




@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,800');

.boldtext {
    font-weight: 400;
    font-size: 20px;
   
}

.firsttext {
    padding-top:25px;
    line-height: 2;
    letter-spacing: 0.07em;
}


.secondtext {
    padding-top:25px;
    line-height: 2.5;
    letter-spacing: 0.07em;
}

.secondtext span{
color: rgb(244,198,0)
}

.secondtext span:hover{
text-decoration: underline;
cursor: pointer;}



*{
font-family: 'Open Sans', sans-serif;

}

button {
    border: 1px solid rgb(244,198,0);
    color:rgb(244,198,0);

  text-transform: uppercase;
}

.flex {

  display: flex;
  align-items: center;
  justify-content: center;
}

a.bttn {
  color: rgb(0,0,0);
  text-decoration: none;
  -webkit-transition: 0.3s all ease;
  transition: 0.3s ease all;
}
a.bttn:hover {
  color: #fff;
  background-color:rgb(0,0,0);
}
a.bttn:focus {
  color: #fff;
}

a.bttn-dark {
  color: #644cad;
  text-decoration: none;
  -webkit-transition: 0.3s all ease;
  transition: 0.3s ease all;
}
a.bttn-dark:hover {
  color: #000;
}
a.bttn-dark:focus {
  color: #fff;
}

.bttn {
  font-size: 18px;
  letter-spacing: 2px;
  text-transform: uppercase;
  display: inline-block;
  text-align: center;
  width: 270px;
  font-weight: bold;
  padding: 14px 0px;
  border: 3px solid rgb(225,225,225);
  border-radius: 2px;
  position: relative;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.1);
}
.bttn:before {
  -webkit-transition: 0.5s all ease;
  transition: 0.5s all ease;
  position: absolute;
  top: 0;
  left: 50%;
  right: 50%;
  bottom: 0;
  opacity: 0;
  content: "";
  background-color: rgb(244,198,0);
  z-index: -2;
}
.bttn:hover:before {
  -webkit-transition: 0.5s all ease;
  transition: 0.5s all ease;
  left: 0;
  right: 0;
  opacity: 1;
}
.bttn:focus:before {
  transition: 0.5s all ease;
  left: 0;
  right: 0;
  opacity: 1;

  }
.maincontainer h2{
	font-size:25px;
	
}
.maincontainer div{
	color:white
	
}
@media(max-width:900px) {

		footer {
		position:relative
	}
	a.bttn {
		margin:15px;
	}
		.spacer3 {
    position: relative;
    height: 1em;
}
	}
	
    </style>


</body>

</html>
<?php

 ?>