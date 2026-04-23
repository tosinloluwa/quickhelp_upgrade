<?php session_start();?>
<?php if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
?> 

<?php

session_start();


if (isset($_GET['q'])) {   
    $query = $_GET['q'];

    
    if ($query === 'delete') {
       
        $_SESSION['query'] = $query;
             
   
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>QuickHelp Nigeria | Nigeria's #1 Chatbot Directory! | Emergency Services, Business Contacts, Airtime/Data Recharge
</title>
    <meta name="description" content="QuickHelp is an AI-based business directory and personal emergency services system (PESS). Get immediate access to business contacts and receive quick responses during emergencies or distress.">
    <meta name="keywords" content="Chatbot, AI, Artificial Intelligence, Machine Learning, OAU, SYL, Tosin Odubela, SMS Directory, Business Directory, Yellow Pages, Ile-Ife, Osun, Nigeria, Lagos, Fintech, Financial Technology, IOT, Blockchain, SMS recharge, Virtual Agent, Customer Service, Emergencies, Distress, Hotline">
    <meta name="author" content="QuickHelp Nigeria">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:image" content="https://quickhelp.com.ng/quick4.jpg">
    <meta property="og:image:width" content="400">
    <meta property="og:image:height" content="400">
    <meta property="og:title" content="Welcome to QuickHelp Nigeria">
    <meta property="og:description" content="QuickHelp is an AI-based business directory and personal emergency services system (PESS). Get immediate access to business contacts and receive quick responses during emergencies or distress.">
    <meta property="og:url" content="https://quickhelp.com.ng">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@iQuickHelp">
    <meta name="twitter:creator" content="@iQuickHelp">
    
    <!-- ShareThis Script -->
    <script type="text/javascript" src='https://platform-api.sharethis.com/js/sharethis.js#property=5f59e680a86c6e0012410f13&product=sop' async='async'></script>



<?php 
include_once("user/auth2.php"); 

 //ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
?>
    

    <!-- Bootstrap CSS -->
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
	<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
	<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="preloader.js"></script>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="fontawesome-all.css">
	<link rel="stylesheet" href="custom.css">  
	<link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="fontawesome-all.css">
	<link rel="stylesheet" href="/custom.css">
	<link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="line-icons.css">
    <link rel="stylesheet" href="owl.carousel.css">
    <link rel="stylesheet" href="owl.theme.css">
    <link rel="stylesheet" href="nivo-lightbox.css">
    <link rel="stylesheet" href="magnific-popup.css">
    <link rel="stylesheet" href="slicknav.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="main2.css">    
    <link rel="stylesheet" href="responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />


	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "0c5be755-8827-4bd5-b811-67e717b6b622",
    });
  });
</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-38401111-2"></script>
<script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-38401111-2');
</script>

<script>

let r = Math.random().toString(36).substring(7);
var holdier = ("random", r);
var name = holdier;

function rollout() {
"use strict";
let r = Math.random().toString(36).substring(7);
var holdier = ("random", r);
var name = holdier;
insertChat('local',uncle2);
queryBot(uncle2);
var func = new Function(
     'return function ' + name + '(){var x = document.getElementById(holdier).value;document.getElementById(holdier).innerHTML = x;}'
)();

//call it, to test it
return func();

}

</script>


<style>

/* Style for the search container */
.search-container {
    position: relative;
}

/* Style for the clear button */
.clear-search {
       position: absolute;
    top: 35%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    color: #999;
    font-size: 30px;
}

/* Change the clear button color on hover */
.clear-search:hover {
    color: #000;
}


#clear-cart-button2 {
    
    display: block;
    margin: -9px auto;
    margin-top: 21px;
    padding: 1px 20px;
    background-color: #ff0000;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 1.0rem;
    cursor: pointer;
}


#clear-cart-button {
    display: block;
    margin: -9px auto;
    padding: 1px 20px;
    background-color: #ff0000;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 1.0rem;
    cursor: pointer;
}

        /* Style for the Clear Cart button on hover */
        #clear-cart-button:hover {
            background-color: #cc0000; /* Darker red background color on hover */
        }
 #search-box {
            width: 100%;
            padding: 10px;
            font-size: 1.2rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            outline: none;
            transition: border-color 0.3s;
        }

        /* Style for the search box on focus */
        #search-box:focus {
            border-color: #007bff;
        }

    ul#item-list, ul#cart {
           list-style: none;
            margin: 0px;
            background-color: white;
            color: #4f4f4f;
            border-radius: 10px;
            font-size:12px;
        }

        ul#item-list li {
           
                border: 1px solid #ddd;
    padding: 2px;
    margin: 0px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: inset 1px -1px 3px 1px #a7a7a7;
        }
        
         ul#cart li {
           
            border: 1px solid #ddd;
            padding: 2px;
            margin: 0px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        ul#item-list li:hover, ul#cart li:hover {
           
        }

        .quantity-input {
            width: 40px;
        }

        .remove-button {
            color: #F44336;
            cursor: pointer;
        }

        #share-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
        }

        #share-button:hover {
            background-color: #0056b3;
        }
        
        .scrollable-list {
                height: 150px;
                overflow-y: auto;
                border: 3px solid #f44336;
        }
        
         .scrollable-list2 {
            height: 150px; /* Set a fixed height */
            overflow-y: auto; /* Add vertical scroll */
            border: 1px solid #fff; /* Add a border for better visibility */
        }
.send-button{
    position: absolute;
    bottom: 0px;
    right: 34px;
    font-size: 35px;
    /* height: 50px; */
    z-index: 99;
    color: #666;
    font-weight: 800;
}


#whatsapp-widget {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #25D366;
  padding: 10px;
  border-radius: 5px;
  z-index: 9999;
}

#whatsapp-widget a {
  display: flex;
  align-items: center;
  text-decoration: none;
  color: #fff;
}

#whatsapp-widget img {
  width: 24px;
  height: 24px;
  margin-right: 10px;
}

#whatsapp-widget span {
  font-size: 14px;
}
.rounded-lg {
    border-radius: 1rem !important;
    border: solid;
    border-width: thin;
    border-color: #ed2024;
}

.text-small {
  font-size: 0.9rem !important;
}

.custom-separator {
  width: 5rem;
  height: 6px;
  border-radius: 1rem;
}

.text-uppercase {
  letter-spacing: 0.2em;
}

/* The Modal (background) */
.modal {
   
    z-index:1500;
    padding-top: 50px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgb(0 0 0 / 79%);
}

/* Modal Content */
.modal-content {
    color:white;
    text-align: center;
    background-color:rgba(36, 52, 100, 0.91);
    margin: auto;
    padding: 2px;
    border-color:black;
    border-width: thick;
    border: 1px solid #888;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px;
}
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) {
.modal-content {
    color:white;
    background-color:rgba(36, 52, 100, 0.91);
    margin: auto;
    padding: 2px;
    border-color:black;
    border-width: thick;
    border: 1px solid #888;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px;
}
}


.pulse-red {
    background: #ff4136 !important;
    border-radius: 50%;
    box-shadow: 0 0 0 0 rgba(255, 65, 54, 0.7);
    animation: pulse 1.5s infinite;
}

@keyframes pulse {
    0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(255, 65, 54, 0.7); }
    70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(255, 65, 54, 0); }
    100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(255, 65, 54, 0); }
}



.close-btn {
    position: absolute;
    top: -11px;
    right: 1px;
    width: 40px;
    height: 40px;
    background: red;
    border: none;
    border-radius: 50%;
    color: white;
    font-size: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 5000;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
}

.close-btn:hover {
    background: #f44336;
    color: white;
    transform: scale(1.1);
    box-shadow: 0 6px 16px rgba(244, 67, 54, 0.3);
}

.close-btn:active {
    transform: scale(0.95);
}

</style>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-1176780883102825",
          enable_page_level_ads: true
     });
</script>


  </head>
  <body>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MFDRN2B8VL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MFDRN2B8VL');
</script>
       <script>
        localStorage.setItem("sw_mode","quicke");
        localStorage.setItem("sw_mode_chat","start");
         localStorage.setItem("messenger","inactive");
        
       
        
        
      var getmem = localStorage.getItem("state");
      if (typeof getmem == 'undefined' || getmem === null){
      localStorage.setItem("state",0);
      localStorage.setItem("saved","");
      }
      var latlon;
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('mapo'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            latlon = position.coords.latitude + "," + position.coords.longitude;
            infoWindow.setPosition(pos);
            document.cookie="coordinates =" + latlon;
            //document.cookie="coordinates =" + "6.8322014,3.6319131";
            localStorage.setItem("coordinates",latlon);
            localStorage.getItem("coordinates");
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
         handleLocationError(false, infoWindow, map.getCenter());
        }
      }
        setTimeout(function (){
            //queryBot("new business query("+latlon+")");
           // $('.QuickHelp-inner-box-chat').show(); 
           }, 4000); 
           
  //////////////////////////////////for the title         
           
           
           
           
           
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB63UDBXLl5d5cfMc0LkM_8-d8aOetEOI&callback=initMap">
    </script>
    <div id="mapo" ></div>      	
   <!-- Header Section Start -->
    <header id="hero-area" class ="heroer">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
            <a href="https://play.google.com/store/apps/details?id=com.quickhelpnigeria2024.app" class="navbar-brand"><img class="img-fulid" src="img/logo.png" alt="" target="_blank"></a>
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
        <strong>
   </strong>
     <script type="text/javascript"> 
     function myFunction_nubuz(){
     maximizeo();
     queryBot("hello");
     insertChat("local", "Hello");
     }
     </script>
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#hero-area" onclick="myFunction_shower()">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services" onclick="myFunction_clearer()">Services</a>
              </li>
          <li class="nav-item">
  
                <a class="nav-link page-scroll" href="https://blog.quickhelp.com.ng/" target="_blankk" onclick="myFunction_clearer()">Blog</a>
                
               
               <li class="nav-item">
                <a class="nav-link page-scroll" href="#prices" onclick="myFunction_clearer()">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#" onclick="smart_cart()" >QuickBUY</a>
              </li>
                <li class="nav-item">
                <a class="nav-link page-scroll" href="https://quickhelp.com.ng/qknows" onclick="myFunction_clearer()" target="_blank">Qknows</a>
              </li>
                <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact" onclick="myFunction_clearer()">Contact</a>
              </li>
             
               <li class="nav-item">
                <a class="nav-link page-scroll ap" href="<?php echo $_SESSION["dash_url"]; ?>" onclick="myFunction_clearer()"><?php echo $_SESSION["dasher"]; ?></a>
              </li>
              <li class="nav-item">
                <div style="background-color: #dc354500;border: solid #bfbfbf;
    border-radius: 25px;"><a class="nav-link page-scroll ap" href="<?php echo $_SESSION["loginer_url"]; ?>" <?php echo $_SESSION["onclick"];?> ><?php echo $_SESSION["loginer"]; ?></a></div>
              </li>
              
            </ul>
          </div>
        </div>

         <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#hero-area">Home</a>
            </li>
            <li>
              <a class="page-scroll" href="#services" onclick="myFunction_clearer()">Services</a>
            </li>
           
               
              <li>
              <a class="page-scroll" target="_blankk" href="https://blog.quickhelp.com.ng/" onclick="myFunction_clearer()">Blog</a>
              </li>
                   
            <li>
              <a class="page-scroll" href="#prices" onclick="myFunction_clearer()">Pricing</a>
            </li>
            <li>
              <a class="page-scroll" href="https://quickhelp.com.ng/quickbuy"  target="_blank">QuickBUY</a>
            </li>
            <li>
              <a class="page-scroll" href="https://quickhelp.com.ng/qknows" onclick="myFunction_clearer()" target="_blank">Qknows</a>
            </li>
            <li>
              <a class="page-scroll" href="#contact" onclick="myFunction_clearer()">Contact</a>
            </li>
            <li>
              <a class="page-scroll ap" href="<?php echo $_SESSION["loginer_url"]; ?>" <?php echo $_SESSION["onclick"];?> ><?php echo $_SESSION["loginer"]; ?></a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->   
      <div class="container" >
		  	<div class="row">
		  		<div class="col-md-8">
		  			<div class="sideAction">
		  			    <h1 class="display-5 text-white" style="margin:0px;color:#000!important;">Get timely help</h1>
		  			    <p style="margin:0px;color:#000!important;font-size:16px;font-weight:700">With our AI powered Chatbot for </p>
						<h3 class="display-5 text-white" style="margin:0px;color:#a9a9a9!important;"><?php //echo $_SESSION['email']; ?>Emergency Services, Business Contacts, Airtime/Data Recharge...<br>and much more! </h3>
						<h4><script src='typewriter/typewriter.js'></script>
	                    <div id="typer" style="color:#3c56a6"></div>
						<script>
						var typer = document.getElementById('typer');
                        var typewriter = new Typewriter(typer, {
                        loop: true
                        });
                        
                        typewriter.typeString("Nigeria's #1 Chatbot Directory!	")
                        .pauseFor(2500)
                        .changeDeleteSpeed(500)
                        .deleteAll()
                        .typeString('"I need Airtime!"')
                        .pauseFor(2500)
                         .deleteAll()
                         .typeString('"I am out of fuel!"')
                        .pauseFor(2500)
                         .deleteAll()
                         .typeString('"I cannot find my house keys!"')
                        .pauseFor(2500)
                         .deleteAll()
                         .typeString('"My car battery is flat!"')
                        .pauseFor(2500)
                         .deleteAll()
                         .typeString('"I am out of Cash!"')
                        .pauseFor(2500)
                         .deleteAll()
                        .typeString('"I need a Plumber at Yaba!"')
                        .pauseFor(2500)
                         .deleteChars(17)
                         .typeString('Good hotel at Ilesha!"')
                        .pauseFor(2500)
                        .deleteAll()
                        .typeString('"I want to buy a COMPUTER!"')
                        .pauseFor(2500)
                          .deleteChars(10)
                         .typeString('PHONE!"')
                        .pauseFor(2500)
                         .deleteAll()
                         .typeString('"switch to GBADE!"')
                        .pauseFor(2500)
                         .deleteAll()
                         .typeString('"Get me an ATM nearby!"')
                        .pauseFor(2500)
                         .deleteAll()
                        typewriter.typeString("Nigeria's #1 Chatbot Directory!	")
                        .pauseFor(2500)
                        .deleteAll()
                         .typeString('"I need a job!"')
                        .pauseFor(2500)
                        .deleteAll()
                         .typeString('"Where is UNILAG?"')
                        .pauseFor(2500)
                        .deleteAll()
                        .typeString('"Take me to Ikorodu!"')
                        .pauseFor(2500)
                        .deleteAll()
                         .typeString('"Get me a TAXI!"')
                        .pauseFor(2500)
                        .deleteAll()
                         .typeString('"I need a Bike at Lagere!"')
                        .pauseFor(2500)
                        .deleteAll()
                        typewriter.typeString("Nigeria's #1 Chatbot Directory!	")
                        .pauseFor(2500)
                        .deleteAll()
                         .typeString('"What is the Traffic at Ojuelegba like?"')
                        .pauseFor(2500)
                        .deleteAll()
                        .typeString('"I need news about Startups on BBC"')
                        .pauseFor(2500)
                        .deleteChars(4)
                        .typeString('CNN"')
                        .pauseFor(2500)
                        .deleteChars(4)
                        .typeString('Channels TV"')
                        .pauseFor(2500)
                        .deleteAll()
                        .typeString('"Could you please speak out loud?"')
                        .pauseFor(2500)
                        .deleteAll()
                        .typeString('"Speak French!"')
                        .pauseFor(2500)
                        .deleteAll()
                        .start();
						</script></h3>
						  <script>  </script><p id="typing" class="typing"></p></h4>
						 
			    		
			    		
			    		<left>  

			    		

	 <input type="button" class="btn btn-outline-primary" id="logino" onclick="myFunction_logino()" value="Find a Business">
     <a id="logino"></a>
     <script type="text/javascript">
     function myFunction_logino(){
     maximizeo(); 
     hide_sleek();
     var x = document.getElementById("logino").value;
     document.getElementById("logino").innerHTML = x;
     textlogino = x;
     if (textlogino !== ""){
     insertChat("local", textlogino);
     queryBot(textlogino);
     }
     }
     </script>
      <input type="button" class="btn btn-outline-primary" id="datano" onclick="myFunction_datano()" value="Get Data">
     <a id="datano"></a>
     <script type="text/javascript">
     function myFunction_datano(){
     maximizeo(); 
     hide_sleek();
     var x = document.getElementById("datano").value;
     document.getElementById("datano").innerHTML = x;
     textdatano = x;
     if (textdatano !== ""){
     insertChat("local", textdatano);
     queryBot(textdatano);
     }
     }
     </script><br>
     	 <input type="button" class="btn btn-outline-primary" id="loginod" onclick="myFunction_loginod()" value="Get airtime">
     <a id="logino"></a>
     <script type="text/javascript">
     function myFunction_loginod(){
     $('.QuickHelp-inner-box-chat').show();
     hide_sleek();
     var x = document.getElementById("loginod").value;
     document.getElementById("loginod").innerHTML = x;
     textloginod = x;
     if (textloginod !== ""){
     insertChat("local", textloginod);
     queryBot(textloginod);
     }
     }
     </script>
     
      <a class="btn btn-outline-primary" href="#"id="Intern" onclick="smart_cart()">SHOP</a><br>
     
    <a class="btn btn-outline-primary" href="#" onclick="loginer_round()">SIGNUP</a>
     <a class="btn btn-outline-primary" href="<?php echo $_SESSION["loginer_url"]; ?>" <?php echo $_SESSION["onclick"];?> ><?php echo $_SESSION["loginer"]; ?></a><br>
     <a class="btn btn-outline-primary" style="font-weight: 900;    background-color: #ed2024; border-color: #ed2024;    font-size: 18px;"  href="#" id="red_button" onClick="set_code()" >Get Started</a>
     
     <!--   
     
     <a class="btn btn-outline-primary" href="https://play.google.com/store/apps/details?id=ng.com.quickhelp2020&hl=en_US&gl=US"id="Intern" >GET MOBILE APP</a><br>
  
     	 <input type="button" class="btn btn-outline-primary" id="signo" onclick="myFunction_signo()" value="Sign Up">
     <a id="signo"></a>
     <script type="text/javascript">
     function myFunction_signo(){
     $('.QuickHelp-inner-box-chat').show();    
     var x = document.getElementById("signo").value;
     document.getElementById("signo").innerHTML = x;
     textsigno = x;
     if (textsigno !== ""){
     insertChat("local", textsigno);
     queryBot(textsigno);
     }
     }
     </script>
     -->
     
     	

			    		
			    		</left>
			    	</div>
		  		</div>
	                <div class="col-md-4">
					<div>

					</div>
		  		</div>
		  	</div> 
		  	
    </header>
    <!-- Header Section End -->     
      
 
	<section id="whatwedo">
		<center><h3 class="text-muted" style="margin-top:20px;margin-bottom:40px">Why QuickHelp?</h3></center>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				    	<center><i class="fas fa-gift fa-3x text-primary"></i></center>
					<center><p class="lead font-weight-bold small">Free!</p></center>
					<p class="medium text-justify text-muted" style="background-color: #3c56a6;padding: 20px;border-radius: 20px;
    color: #fff!important;">QuickHelp is an AI based business directory and personal emergency services system (PESS) created to be free for all communities located in Nigeria! Our pledge is that we shall always maintain the free directory service!</p>
				</div>
				<div class="col-md-3 lin-border">
					<center><i class="fab fa-first-order fa-3x text-primary"></i></center>
					<center><p class="lead font-weight-bold small">Very Fair</p></center>
					<p class="medium text-justify text-muted" style="background-color: #3c56a6;padding: 20px;border-radius: 20px;
    color: #fff!important;"> QuickHelpâ€™s random algorithm was created to move existing businesses out of obscurity and give registered startups the much needed publicity for business survival. On QuickHelp, everyone is a VIP! </p>
				</div>
				<div class="col-md-3 lin-border">
					<center><i class="fas fa-unlock-alt fa-3x text-primary"></i></center>
					<center><p class="lead font-weight-bold small">Safety First</p></center>
					<p class="medium text-justify text-muted" style="background-color: #3c56a6;padding: 20px;border-radius: 20px;
    color: #fff!important;"> We are accountable to you and your personal data is safer in your community, not on some labyrinth hosted somewhere by total strangers! The QuickHelp Philosophy centres on giving communities ownership of their data!</p>
				</div>
				<div class="col-md-3 lin-border">
					<center><i class="fas fa-certificate fa-3x text-primary"></i></center>
					<center><p class="lead font-weight-bold small">Screened Listings</p></center>
					<p class="medium text-justify text-muted" style="background-color: #3c56a6;padding: 20px;border-radius: 20px;
    color: #fff!important;">Service providers or businesses on QuickHelp are verified before enlisted. QuickHelp Community Directory Managers are recruited to manage the directory actively, and to engage in periodic verification.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<center><i class="fas fa-briefcase fa-3x text-primary"></i></center>
					<center><p class="lead font-weight-bold small">Offline Capabilties!</p></center>
					<p class="medium text-justify text-muted" style="background-color: #3c56a6;padding: 20px;border-radius: 20px;
    color: #fff!important;">QuickHelp can also reach people who do not use smartphones or data or who would simply not bother to â€œplay with appsâ€, by enabling SMS and USSD QuickHelp channels via the short code: <strong>*345*047#</strong></p>
				</div>
				<div class="col-md-3 lin-border">
					<center><i class="fas fa-info fa-3x text-primary"></i></center>
					<center><p style="color:white;"class="lead font-weight-bold small">Instant Job Opportunities</p></center>
					<p class="medium text-justify text-muted" style="background-color: #3c56a6;padding: 20px;border-radius: 20px;
    color: #fff!important;">QuickHelp provides <a href="http://quickhelp.com.ng/jobs/" target="_blank" style="  color: white;">instant job opportunities</a> for prospective QuickHelp Community Directory Managers who can oversee the businesses within a radius of 5 KM from their registered contact address.</p>
				</div>
				<div class="col-md-3 lin-border">
					<center><i class="far fa-life-ring fa-3x text-primary"></i></center>
					<center><p class="lead font-weight-bold small">Life Saver</p></center>
					<p class="medium text-justify text-muted" style="background-color: #3c56a6;padding: 20px;border-radius: 20px;
    color: #fff!important;">The QuickHelp platform can save a life! Imagine being stuck in a remote town with two flat tires with a sick child in the car; Help is just a chat away!</p>
				</div>
				<div class="col-md-3 lin-border">
					<center><i class="fas fa-microphone fa-3x text-primary"></i></center>
					<center><p class="lead font-weight-bold small">Just Talk!</p></center>
					<p class="medium text-justify text-muted" style="background-color: #3c56a6;padding: 20px;border-radius: 20px;
    color: #fff!important;">QuickHelp enables you make requests without having to type! With the newly enabled Speech recognision feature (BETA), just hit the record button and make your request!  </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">

				</div>
				<div class="col-md-3 lin-border">
					<center><i class="fas fa-beer fa-3x text-primary"></i></center>
					<center><p class="lead font-weight-bold small">Partnership Benefits:</p></center>
					<p class="medium text-justify text-muted" style="background-color: #3c56a6;padding: 20px;border-radius: 20px;
    color: #fff!important;">As a partner, QuickHelp can rapidly help boost your business. Partners benefits like free website design and support, instant notification on service requests, ad opportunities on the USSD platform, on the website or on the mobile app.</p>
				</div>
				<div class="col-md-3 lin-border lin-borderTwo">
					<center><i class="fas fa-coffee fa-3x text-primary"></i></center>
					<center><p class="lead font-weight-bold small">Premium Benefits</p></center>
					<p class="medium text-justify text-muted" style="background-color: #3c56a6;padding: 20px;border-radius: 20px;
    color: #fff!important;">For premium end-users, QuickHelp offer benefits like referrals, bonus and sharing earnings. QuickHelp also provide voice and logistics support within the target community for premium users of the platform.</p>
				</div>
				<div class="col-md-3">

				</div>
			</div>
		</div>
	</section>
	<section id="whyChoseUs">
		<div class="jumbotron jumbotron-fluid whyChose">
		  <div class="container">
		  	<div class="row">
		  		<div class="col-md-7">
		  			<h2 class="display-3 choses">QuickHelp</h2>
		    		<p class="lead choses">Instant Help, wherever, whenever.</p>
		  		</div>
		  		<div class="col-md-5">
					<img src="img/quick1.png" alt="quick help" style="width: 10rem;">
										<br>
					<br>
					<br>
					<a href="https://www.facebook.com/messages/t/iQuickHelp" class="btn btn-sm btn-outline-primary">facebook</a>
					<a href="https://twitter.com/iQuickHelp" class="btn btn-sm btn-outline-primary">twitter</a>
					<a href="https://www.linkedin.com/company/iquickhelp-nigeria/" class="btn btn-sm btn-outline-primary">linkedin</a>
		  		</div>
		  	</div>

		  </div>
		</div>
	</section>
	

	
    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">QuickHelp Services</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" style="font-size:24px"  data-wow-duration="1000ms" data-wow-delay="0.3s">QuickHelp is a FREE community centred business directory and personal emergency services system leveragiing on SMS, USSD and AI technologies. On QuickHelp, users can get immediate access to needed business contacts and receive quick and helpful responses in the event of emergencies or distress.</p>
          <p class="section-subtitle wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0.7s">QuickHelp was created to move existing businesses out of obscurity and give registered startups the much needed publicity for business survival.</p>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <center><i class="fas fa-address-card fa-3x text-primary"></i></center>
              <h4>Personal Emergency Services/Business Directory</h4>
              <p>QuickHelp Nigeria provides a robust <strong>Directory</strong> of verified artisans, SMEs and registered companies that can be freely accessed aided by an AI agent, and a <strong>Premium Personal Emergency Service System (PESS)</strong> designed to help you during contingencies or crisis.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
             <center><i class="fas fa-phone fa-3x text-primary"></i></center>
              <h4>QuickCredit</h4>
              <p>QuickCredit is an airtime recharge service on QuickHelp that allows you get instant credit while you pay later! To test this service, just try a request like â€œI need airtimeâ€œ. The new service on QuickHelp becomes the fastest way to recharge airtime without having to touch your bank account!</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="1.2s">
              <center><i class="fas fa-taxi fa-3x text-primary"></i></center>
              <h4>QuickHelp Taxi/Bike</h4>
              <p>QuickHelp Nigeria rapidly helps you get a taxicab with the community based Taxi and Bike Services. To test the service, just make a request like "I need a Taxi" or use the USSD code and select the Taxi Service. Floated in partnership with local Taxi/Bikes operators, Quickhelp Taxi and Bike is a sure and very simple and safe alternative for the rest of us.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <center><i class="fas fa-toggle-on fa-3x text-primary"></i></center>
              <h4>QuickHelp's Switch</h4>
              <p>QuickHelp Nigeria, has a new feature that allows you switch to your favourite brand, if included created with Qknows. With Switch (BETA), public FAQ's are automatically fetched from your favourite brand's website, converted to 'Knowets' and made into conversational formats.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
             <center><i class="fas fa-shopping-cart fa-3x text-primary"></i></center>
              <h4>QuickBuy/Online Shopping</h4>
              <p>QuickBuy is an eCommerce arm of QuickHelp Nigeria created to empower local businesses and serve local communities with a dynamic online store and logistics services. With QuickBuy, local businesses are empowered with an online shopping channel that gurantees more sales and increases profits while providing a convenient community based eCommerce system for everyone. </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="1.2s">
              <center><i class="fas fa-comment-alt fa-3x text-primary"></i></center>
              <h4>Qknows</h4>
              <p>The QuickHelpâ€™s Knowledge Script (QKnows) is a Natural Language Processing (NLP) system created originally for use on the QuickHelpâ€™s TalkingWebsite dashboard. The QKnows is written in Knowledge Entities (KNOWETS in short). Knowets are scripted datasets written to â€˜trainâ€™ AI Agents</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->
 
 
 	<!-- Prices Section Start -->
    <section id="prices" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Pricing</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
         
        </div>
    
  
    <!-- END -->


<div class="row text-center align-items-end">
  <!-- Pricing Table-->
  <div class="col-lg-4 mb-5 mb-lg-0">
    <div class="bg-white p-5 rounded-lg shadow">
      <h1 class="h6 text-uppercase font-weight-bold mb-4">FREE</h1>
      <h2 class="h1 font-weight-bold">₦0<span class="text-small font-weight-normal ml-2">/ month</span></h2>

      <div class="custom-separator my-4 mx-auto bg-primary"></div>

      <ul class="list-unstyled my-5 text-small text-left">
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>Free Online & USSD Directory Services</li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i> Can upgrade to Premium Anytime</li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i> Buy Airtime/Data</li>
        <li class="mb-3 text-muted">
          <i class="fa fa-times mr-2"></i>
          <del>Refferal Earnings</del>
        </li>
        <li class="mb-3 text-muted">
          <i class="fa fa-times mr-2"></i>
          <del>Delivery Services</del>
        </li>
        <li class="mb-3 text-muted">
          <i class="fa fa-times mr-2"></i>
          <del>Business Notifications</del>
        </li>
        <li class="mb-3 text-muted">
          <i class="fa fa-times mr-2"></i>
          <del>Access to Cash Bail-outs</del>
        </li>
      </ul>
      <a href="user/register.php" class="btn btn-primary btn-block p-2 shadow rounded-pill">Subscribe</a>
    </div>
  </div>
  <!-- END -->

  <!-- Pricing Table-->
  <div class="col-lg-4 mb-5 mb-lg-0">
    <div class="bg-white p-5 rounded-lg shadow">
      <h1 class="h6 text-uppercase font-weight-bold mb-4">Premium</h1>
      <h2 class="h1 font-weight-bold">₦5,499<span class="text-small font-weight-normal ml-2">/ Month</span></h2>

      <div class="custom-separator my-4 mx-auto bg-primary"></div>

      <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>Online/USSD/Voice Directory Services </li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>Referral Earnings</li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i> Sales of Airtime/Data</li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>Delivery Services</li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>Access to QuickCover (Personal Emergency Service Units)</li>
        <li class="mb-3 text-muted">
          <i class="fa fa-times mr-2"></i>
          <del>Access to Cash Bail-Outs</del>
        </li>
      </ul>
      <a href="user/register.php" class="btn btn-primary btn-block p-2 shadow rounded-pill">Subscribe</a>
    </div>
  </div>
  <!-- END -->

  <!-- Pricing Table-->
  <div class="col-lg-4">
    <div class="bg-white p-5 rounded-lg shadow">
      <h1 class="h6 text-uppercase font-weight-bold mb-4">Business</h1>
      <h2 class="h1 font-weight-bold">₦10,499<span class="text-small font-weight-normal ml-2">/ Month</span></h2>

      <div class="custom-separator my-4 mx-auto bg-primary"></div>

      <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i> All Premium benefits</li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>Business Opportunities Notifications</li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i> QuickTaxi, Qknows Premium and QuickBuy Earnings</li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>Free Business Adverts</li>
        <li class="mb-3">
          <i class="fa fa-check mr-2 text-primary"></i>Access to Cash Bail-outs</li>  
      </ul>
      <a href="user/register.php" class="btn btn-primary btn-block p-2 shadow rounded-pill">Subscribe</a>
    </div>
  </div>
  <!-- END -->
</div>

  </div>
      </div>
    </section>
    <!-- Prices Section End --> 
 
 	
<!-- Video Section Start -->
<section id="video-section" class="section" style="background-color: #f8f9fa;">
  <div class="container">
    <div class="section-header">          
      <h2 class="section-title">See QuickHelp in Action</h2>
      <hr class="lines">
      <p class="section-subtitle">Watch how QuickHelp is transforming access to business services across Nigeria</p>
    </div>
    
    <div class="row justify-content-center">
      <div class="col-lg-10 col-md-12">
        <div style="text-align: center;">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/-ewdjXzaHVY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Video Section End -->



    <!-- Contact Section Start -->
    <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-us">
                <h3>We appreciate your feedback!</h3>
                <div class="contact-address">
                    <p><strong></strong>QuickHelp Nigeria HQ</strong></br>
                  QuickHelp Nigeria, Opposite LA Primary School, Kajola-Akile (Modomo), off Ede Road, Ile-Ife</br>
                  Nigeria</br></p>
                   <p><strong></strong>QuickHelp Nigeria Agency</strong></br>
                  Shop 4, Block 8, Zone D, OAU Central Market, Obafemi Awolowo University Campus, Ile-Ife, Osun State</br></p>
                  <p class="phone">Phone: <span>(+234 091 1999 4357)</span></p>
                  <p class="email">E-mail: <span>(info@quickhelp.com.ng)</span></p>
                </div>
                <div class="social-icons">
                  <ul>
                     <li class="facebook"><a href="https://www.facebook.com/iquickhelp" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/iquickhelp" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/company/iquickhelp-nigeria" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
              </div>
            </div>     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-block">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" style=" border-radius: 25px;" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" style="    border-radius: 25px;" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" style=" border-radius: 25px;" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button text-center">
                        <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>           
    </section>
    <!-- Contact Section End -->	
	
	    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul class="footer-links">
              
              <li>
                <a href="#services">Services</a>
              </li>
               <li>
                <a href="#contact">Contact</a>
              </li>
              <li>
                <a href="https://quickhelp.com.ng/quickbuy" target="_blank">QuickBuy</a>
              </li>
              <li>
                <a href="https://quickhelp.com.ng/qknows" target="_blank">Qknows</a>
              </li>
               <li>
                <a href="https://quickhelp.com.ng/qknows/" target="_blank">Qknows</a>
              </li>
               <li>
                <a href="https://quickhelp.com.ng/partnership.php" target="_blank">Partnerships</a>
              </li>
              <li>
                <a href="https://quickhelp.com.ng/jobs.php" target="_blank">Careers</a>
              </li>
               <li>
                <a href="https://quickhelp.com.ng/terms.php" target="_blank">Terms of Service</a>
              </li>
              <li>
                <a href="https://quickhelp.com.ng/privacy.php" target="_blank">Privacy Policy</a>
              </li>
                <!-- Required meta tags <li> 
                <a href="https://play.google.com/store/apps/details?id=ng.com.quickhelp2020&hl=en_US&gl=US" target="_blank">Download App</a>
              </li> -->
            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
              <p>QuickHelp Nigeria is a product of <a href="https://sylmultimedia.com/" target="_blank"><strong>SYL Multimedia</strong></a>. &copy; 2015-<?php echo date("Y"); ?>. All rights reserved.</p> <p style="font-size:12px;color:grey;"><strong>Public Notice:</strong>: The Good members of the Public are hereby notified that the <a href="https://disrupt-africa.com/2018/05/01/nigerian-alexa-quickhelp-acquired-by-canadian-firm/" target="_blank">Acquisition Deal</a> negotiated and mentioned <a href="https://disrupt-africa.com/2018/05/01/nigerian-alexa-quickhelp-acquired-by-canadian-firm/" target="_blank">here</a>, <a href="https://www.techinafrica.com/quickhelp-nigeria-acquired-undisclosed-amount/" target="_blank">here</a> and <a href="https://www.vanguardngr.com/2018/05/quickhelp-launches-directory-service-nigeria/" target="_blank">here</a>, and other media outlets as announced May, 2018 regretably, was not eventually successful and is now null and void. QuickHelp Nigeria, its core technologies and IP rights and all trademarks remains wholy owned by  the Nigerian comapny, Strategeis and Yields LTD, 8777984.</p>
            </div>
          </div>  
        </div>
      </div>
       <div style ="height: 100px;">
              <p></p>
            </div>
             <!-- Go To Top Link
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a> -->
    </footer>
    <!-- Footer Section End --> 
    
    
   
   <script type="text/javascript">
   
            var get_ads = localStorage.getItem("ads");

            if (typeof get_ads === 'undefined' || get_ads === null) {
                    $(window).on('load',function(){
                    setTimeout(function() { $('#myModal').modal('show'); }, 7000);});
                    localStorage.setItem("ads","active");
                }
    
             function loginer_round(){
                    $('#loginer_round').modal('show'); 
        
                 }
                 
                 function smart_cart(){
                    $('#smart_cart').modal('show'); 
        
                 }
                 
                 
                 
</script> 

<div class="container">
   <!-- Trigger the modal with a button -->
  


 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="padding-top: 10px;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-body">
            <h3 style="margin:0px">Shop now on</h3><h1 style="color:#00ff2b;margin:0px;">QuickBuy!</h1>
            <p>QuickBuy is an online marketplace that empowers local businesses and serve local communities.<img style ="display: block;
                margin-left: auto;height:auto; margin-right:auto;width:70%;border-style: none;margin-top: 10px; border: 2px solid #00ff2b;  border-radius: 25px;"width="290" height="120" src="quickbuy.jpg" ></a>
            </p>
        </div>
            <a  class="btn btn-common wow fadeInUp" style ="font-size: 18px;" href="#" onclick="smart_cart()" data-wow-duration="1000ms" data-wow-delay="400ms">SHOP NOW</a>
            </br>
             <!-- <a  href="#" onclick="myFunctionsnack1()" style ="font-size: 18px;" class="btn btn-common wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="800ms">NO, LATER</a> -->
      </div>
      
    </div>
  </div>
  
</div>


<?php
require('db.php');

// Set UTF-8 encoding for database
mysqli_set_charset($con, 'utf8mb4') or die("Failed to set charset: " . mysqli_error($con));
mb_internal_encoding('UTF-8');
?>

<div id="gov_agents" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); z-index: 9999; justify-content: center; align-items: center; transition: opacity 0.3s ease;">
    <div style="max-width: 90%; width: min(600px, 90%); background: #ffffff; border-radius: 8px; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1); overflow: hidden; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
        <div style="background: #1e3a8a; padding: 0.75rem 1rem; color: #ffffff; text-align: center; border-bottom: 1px solid #1e40af;">
            <h5 style="margin: 0; font-size: 1.1rem; font-weight: 500;">QuickHelp's Agents</h5>
        </div>
        <div style="padding: 0.5rem 1rem; background: #ffffff;">
            <input id="searchInput" placeholder="Search agencies..." style="width: 100%; padding: 0.5rem 0.75rem; border: 1px solid #d1d5db; border-radius: 4px; font-size: 0.9rem; outline: none; transition: border-color 0.2s ease;" onfocus="this.style.borderColor='#3b82f6';" onblur="this.style.borderColor='#d1d5db';">
        </div>
        <div style="background: #ffffff; padding: 0;">
            <div id="agencyList" style="max-height: calc(70vh - 150px); overflow-y: auto; width: 100%;">
                <?php
                // Check database connection
                if (!$con) {
                    echo "<div style=\"padding: 0.5rem 1rem; color: #dc2626; font-size: 0.85rem;\">Error: Unable to connect to the database.</div>";
                    exit;
                }

                // Query usernames
                $result = mysqli_query($con, "SELECT * FROM users WHERE gov_agent = '1' ORDER BY username");
                if (!$result) {
                    echo "<div style=\"padding: 0.5rem 1rem; color: #dc2626; font-size: 0.85rem;\">Error: Failed to fetch usernames - " . mysqli_error($con) . "</div>";
                    mysqli_close($con);
                    exit;
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    $username = htmlspecialchars($row['username'], ENT_QUOTES, 'UTF-8');
                    $name = htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8');
                    // Debug: Log raw name to check for unexpected characters
                    error_log("Raw name for username $username: " . $row['name']);
                    echo "<div class=\"agency-item\" onclick=\"queryNow()\" data-username=\"$username\" style=\"padding: 0.75rem 1rem; cursor: pointer; border-bottom: 1px solid #e5e7eb; font-size: 0.9rem; color: #1f2937; background: #ffffff; transition: background-color 0.2s ease; white-space: normal; word-wrap: break-word;\">$name</div>";
                }

                mysqli_close($con);
                ?>
            </div>
        </div>
        <div style="padding: 0.75rem; background: #ffffff; border-top: 1px solid #e5e7eb; text-align: center;">
            <button onclick="$('#gov_agents').fadeOut(200);" style="padding: 0.5rem 1rem; background: #3b82f6; color: #ffffff; border: none; border-radius: 4px; font-size: 0.9rem; cursor: pointer; transition: background-color 0.2s ease;" onmouseover="this.style.backgroundColor='#2563eb';" onmouseout="this.style.backgroundColor='#3b82f6';">Close</button>
        </div>
    </div>
</div>

<script>
function gov_agencies() {
    $('#gov_agents').css({'display': 'flex'}).fadeIn(200);
}
function queryNow() {
    const username = $(event.target).data('username');
    queryBot('switch to ' + username);
    insertChat("local", 'switch to ' + username);
    $('#gov_agents').fadeOut(200);
}
$(document).ready(function() {
    // Ensure modal is hidden on load
    $('#gov_agents').hide();
    console.log('Modal initial state:', $('#gov_agents').is(':visible') ? 'Visible' : 'Hidden');

    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('#agencyList .agency-item').each(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
    $('.agency-item').on('mouseenter', function() {
        $(this).css({'background-color': '#dbeafe'});
    }).on('mouseleave', function() {
        $(this).css({'background-color': '#ffffff'});
    });
});
</script>

 <!-- ============================================================
     COMMUNITY SHOP MODAL — replace everything from
     <div class="modal fade" id="smart_cart" ...>
     down to the closing </div></div></div> of that modal
     with this block.
     ============================================================ -->

<div class="modal fade" id="smart_cart" role="dialog" style="padding-top:10px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <button onclick="myFunctionsnack1()" class="close-btn"><i class="fas fa-times"></i></button>
      <div class="modal-body">

        <p style="color:white;font-weight:800">Tap an item and scroll to shop</p>

        <!-- Total + Place Order -->
        <div style="display:flex;align-items:center;justify-content:space-between;margin-top:15px;font-family:Arial,sans-serif;">
          <p style="margin:0;font-size:18px;font-weight:bold;flex-grow:1;text-align:left;">
            Total Cost: <span id="total-cost">0.00</span>
          </p>
          <button id="share-button" disabled class="place-order-btn"
            style="background-color:#dc3545;color:#fff;border:none;padding:10px 20px;font-size:16px;font-weight:bold;border-radius:4px;margin-left:20px;transition:all 0.3s ease;">
            Place Order
          </button>
        </div>

        <!-- ── Step 1: Community Selector ──────────────────────── -->
        <div style="margin-top:12px;margin-bottom:6px;">
          <select id="community-filter" style="width:100%;padding:10px;font-size:14px;border:1px solid #ccc;border-radius:5px;background:white;color:#333;outline:none;cursor:pointer;">
            <option value="">🌍 Select a Community to shop from...</option>
          </select>
        </div>

        <!-- ── Step 2: Category Selector (hidden until community chosen) ── -->
        <div id="category-wrapper" style="margin-bottom:6px;display:none;">
          <select id="category-filter" style="width:100%;padding:10px;font-size:14px;border:1px solid #ccc;border-radius:5px;background:white;color:#333;outline:none;cursor:pointer;">
            <option value="">🏷 All Categories</option>
          </select>
        </div>

        <!-- ── Search ──────────────────────────────────────────── -->
        <div class="search-container" id="search-wrapper" style="display:none;">
          <input type="text" id="search-box" placeholder="Search available items..." style="color:#000;opacity:1;background:white;font-size:14px;">
          <span class="clear-search" style="display:none;">&times;</span>
        </div>

        <!-- ── Community info bar ──────────────────────────────── -->
        <div id="community-info" style="display:none;padding:6px 10px;background:rgba(255,255,255,0.1);border-radius:6px;margin-bottom:8px;font-size:12px;color:#fff;"></div>

        <!-- ── Product list ────────────────────────────────────── -->
        <ul id="item-list" class="scrollable-list" style="display:none;"></ul>

        <!-- ── Loading spinner ─────────────────────────────────── -->
        <div id="shop-loading" style="display:none;text-align:center;padding:20px;color:#fff;">
          <i class="fas fa-spinner fa-spin fa-2x"></i>
          <p style="margin-top:8px;font-size:14px;">Loading products...</p>
        </div>

        <!-- ── Empty state ─────────────────────────────────────── -->
        <div id="shop-empty" style="display:none;text-align:center;padding:20px;color:#fff;">
          <i class="fas fa-box-open fa-2x" style="opacity:0.5;"></i>
          <p style="margin-top:8px;font-size:14px;">No products found in this community.</p>
        </div>

        <!-- ── Cart ────────────────────────────────────────────── -->
        <h5 style="color:white;margin-top:10px;">My Items (<span id="cart-count">0</span>)</h5>
        <ul id="cart"></ul>
        <p style="color:white;">Total Cost: ₦<span id="total-cost2">0.00</span></p>
        <button id="clear-cart-button2">Clear Cart</button>

      </div>
    </div>
  </div>
</div>

<style>
.product-item{display:flex;align-items:center;margin-bottom:15px;padding:10px;border-bottom:1px solid #eee;}
.product-image-container{position:relative;margin-right:15px;}
.product-image{width:50px;height:50px;object-fit:cover;cursor:pointer;}
.product-image-large{display:none;position:fixed;max-width:400px;max-height:400px;z-index:1000;border:2px solid #fff;box-shadow:0 0 10px rgba(0,0,0,0.3);pointer-events:none;}
.product-image-container:hover .product-image-large{display:block;}
@media only screen and (max-width:767px){
  .product-image-container:hover .product-image-large{display:none;}
  .product-image-container.touched .product-image-large{display:block;}
}
.product-info{flex-grow:1;}
.quantity-input{width:60px;margin-left:10px;}
</style>

<script>
// ── Credentials ────────────────────────────────────────────────────────────────
var QC_KEY    = 'ck_38a821b39ea6b20845beb73182f4138da94c36a9';
var QC_SECRET = 'cs_4634b84486d74c99e0541b1a138577849be31c09';
var QC_BASE   = 'https://quickhelp.com.ng/quickcommerce/wp-json/wc/v3';

var selectedCommunityId   = '';
var selectedCommunityName = '';
var selectedAgentId       = null;
var selectedAgentWhatsApp = null;

// ── Global filter helpers ──────────────────────────────────────────────────────
window.updateClearButtonVisibility = function() {
    var val = $('#search-box').val().trim();
    $('.clear-search').toggle(val !== '');
};

window.filterItems = function(searchTerm) {
    var search = (searchTerm !== undefined ? searchTerm : $('#search-box').val()).toLowerCase().trim();
    var catId  = String($('#category-filter').val() || '');
    $('#item-list li').each(function() {
        var name    = String($(this).data('name')     || '').toLowerCase();
        var itemCat = String($(this).data('category') || '');
        var matchSearch = (search === '') || (name.indexOf(search) > -1);
        var matchCat    = (catId  === '') || (itemCat === catId);
        $(this).toggle(matchSearch && matchCat);
    });
};

$(document).ready(function() {

    // ── Load communities on modal open ────────────────────────────────────────
    $('#smart_cart').on('show.bs.modal', function() {
        if ($('#community-filter option').length > 1) return; // already loaded
        loadCommunities();
    });

    function loadCommunities() {
        $.getJSON(QC_BASE + '/communities?consumer_key=' + QC_KEY + '&consumer_secret=' + QC_SECRET,
            function(communities) {
                var sel = $('#community-filter');
                sel.find('option:not(:first)').remove();
                if (!Array.isArray(communities) || communities.length === 0) {
                    sel.append($('<option>', { value: '', text: 'No communities available' }));
                    return;
                }

                // Group by type
                var groups = {};
                $.each(communities, function(i, c) {
                    var t = c.type.charAt(0).toUpperCase() + c.type.slice(1) + 's';
                    if (!groups[t]) groups[t] = [];
                    groups[t].push(c);
                });

                $.each(groups, function(groupName, items) {
                    var og = $('<optgroup>', { label: groupName });
                    $.each(items, function(i, c) {
                        var label = c.name + (c.agent_count > 0 ? ' (' + c.agent_count + ' agent' + (c.agent_count > 1 ? 's' : '') + ')' : '');
                        og.append($('<option>', { value: String(c.id), text: label, 'data-name': c.name }));
                    });
                    sel.append(og);
                });
            }
        ).fail(function() {
            console.warn('Failed to load communities');
        });
    }

    // ── Community selected ────────────────────────────────────────────────────
    $('#community-filter').on('change', function() {
        selectedCommunityId   = $(this).val();
        selectedCommunityName = $(this).find('option:selected').data('name') || '';
        selectedAgentId       = null;
        selectedAgentWhatsApp = null;

        // Reset UI
        $('#item-list').empty().hide();
        $('#shop-empty').hide();
        $('#search-box').val('');
        $('#category-filter').find('option:not(:first)').remove();

        if (!selectedCommunityId) {
            $('#category-wrapper').hide();
            $('#search-wrapper').hide();
            $('#community-info').hide();
            return;
        }

        // Show info bar
        $('#community-info').text('Shopping from: ' + selectedCommunityName).show();

        // Load categories for this community
        loadCategories(selectedCommunityId);

        // Load products for this community
        loadProducts(selectedCommunityId, '');
    });

    // ── Category selected ─────────────────────────────────────────────────────
    $('#category-filter').on('change', function() {
        filterItems($('#search-box').val().trim());
    });

    // ── Search ────────────────────────────────────────────────────────────────
    $('#search-box').off('input').on('input', function() {
        updateClearButtonVisibility();
        filterItems($(this).val().trim());
    });
    $(document).off('click', '.clear-search').on('click', '.clear-search', function() {
        $('#search-box').val('');
        updateClearButtonVisibility();
        filterItems('');
    });

    // ── Load categories ───────────────────────────────────────────────────────
    function loadCategories(communityId) {
        var url = QC_BASE + '/categories?consumer_key=' + QC_KEY + '&consumer_secret=' + QC_SECRET
                + '&per_page=100&community_id=' + communityId;
        $.getJSON(url, function(cats) {
            var sel = $('#category-filter');
            sel.find('option:not(:first)').remove();
            if (Array.isArray(cats) && cats.length > 0) {
                $.each(cats, function(i, cat) {
                    sel.append($('<option>', { value: String(cat.id), text: cat.name }));
                });
                $('#category-wrapper').show();
            }
        });
    }

    // ── Load products ─────────────────────────────────────────────────────────
    function loadProducts(communityId, agentId) {
        $('#shop-loading').show();
        $('#item-list').hide();
        $('#shop-empty').hide();
        $('#search-wrapper').hide();

        var url = QC_BASE + '/products?consumer_key=' + QC_KEY + '&consumer_secret=' + QC_SECRET
                + '&per_page=100&status=publish&community_id=' + communityId;
        if (agentId) url += '&agent_id=' + agentId;

        $.getJSON(url, function(products) {
            $('#shop-loading').hide();
            $('#item-list').empty();

            var published = [];
            $.each(products, function(i, p) {
                if (p.status === 'publish' && p.name.indexOf('AUTO-DRAFT') === -1) {
                    published.push(p);
                }
            });

            if (published.length === 0) {
                $('#shop-empty').show();
                return;
            }

            $.each(published, function(i, p) {
                var price       = parseFloat(p.price) || 0;
                var cleanPrice  = Math.round(price);
                var formatted   = '₦' + cleanPrice.toLocaleString();
                var imgSrc      = (p.images && p.images[0]) ? p.images[0].src : '';
                var catId       = (p.categories && p.categories[0]) ? String(p.categories[0].id) : '0';
                var name        = p.name;

                var li = $('<li>')
                    .addClass('product-item')
                    .attr('data-id',       p.id)
                    .attr('data-name',     name)
                    .attr('data-price',    cleanPrice)
                    .attr('data-category', catId)
                    .css({ display:'flex', alignItems:'center', marginBottom:'15px', padding:'10px', borderBottom:'1px solid #eee' });

                var imgHtml = imgSrc
                    ? '<div class="product-image-container" onmousemove="moveImage(event,this)" style="position:relative;margin-right:15px;">' +
                      '<img loading="lazy" src="' + imgSrc + '" alt="' + name + '" class="product-image" style="width:50px;height:50px;object-fit:cover;cursor:pointer;border:1px solid #ddd;">' +
                      '<img loading="lazy" src="' + imgSrc + '" alt="' + name + '" class="product-image-large"></div>'
                    : '<div style="width:50px;height:50px;margin-right:15px;background:#eee;border-radius:4px;"></div>';

                li.html(imgHtml +
                    '<div class="product-info" style="flex-grow:1;text-align:left;font-size:14px;">' +
                        name + ' | ' + formatted +
                        '<input type="number" min="1" value="1" class="quantity-input" onclick="event.stopPropagation()" ' +
                        'style="width:60px;margin-left:10px;text-align:center;border:1px solid #ccc;border-radius:4px;">' +
                    '</div>');

                $('#item-list').append(li);
            });

            $('#item-list').show();
            $('#search-wrapper').show();
            bindProductClicks();
            bindTouchEvents();

        }).fail(function() {
            $('#shop-loading').hide();
            $('#shop-empty').text('Failed to load products. Please try again.').show();
        });
    }

    // ── Product click → add to cart ───────────────────────────────────────────
    function bindProductClicks() {
        $('#item-list').off('click', 'li').on('click', 'li', function(e) {
            if ($(e.target).hasClass('quantity-input')) { e.stopPropagation(); return; }

            var itemPrice    = parseFloat($(this).data('price'));
            var quantityInput = $(this).find('.quantity-input');
            var quantity     = parseInt(quantityInput.val()) || 1;
            var itemName     = $(this).data('name');
            var itemId       = $(this).data('id');

            var cartItem = $('#cart li').filter(function() { return $(this).data('name') === itemName; });

            if (cartItem.length === 0) {
                var li = $('<li>' + itemName + '   ₦' + (itemPrice * quantity).toFixed(2) + ' <strong>' + quantity + '</strong><span class="remove-button">Remove</span>');
                li.data('quantity', quantity).data('price', itemPrice).data('name', itemName).data('id', itemId);
                $('#cart').append(li);
            } else {
                var newQty = parseInt(quantityInput.val()) + 1;
                quantityInput.val(newQty);
                cartItem.data('quantity', newQty);
                cartItem.html(itemName + ' -  ₦' + (itemPrice * newQty).toFixed(2) + '<strong>' + newQty + '</strong><span class="remove-button">Remove</span>');
            }
            updateTotalCost();
        });
    }

    // ── Touch events for mobile image preview ─────────────────────────────────
    function bindTouchEvents() {
        if (window.innerWidth > 767) return;
        $('#item-list .product-image-container').each(function() {
            var c = this;
            c.addEventListener('touchstart', function(e) {
                e.preventDefault();
                this.classList.add('touched');
                moveImage(e, this);
            });
            c.addEventListener('touchend',  function() { this.classList.remove('touched'); });
            c.addEventListener('touchmove', function(e) { moveImage(e, this); });
        });
    }

    // ── Cart total ────────────────────────────────────────────────────────────
    function updateTotalCost() {
        var total = 0, count = 0;
        $('#cart li').each(function() {
            var q = parseInt($(this).data('quantity')) || 0;
            var p = parseFloat($(this).data('price'))  || 0;
            total += q * p; count += q;
        });
        var fmt = total.toLocaleString('en-US', { style:'currency', currency:'NGN', minimumFractionDigits:2 });
        $('#total-cost').text(fmt);
        $('#total-cost2').text(fmt);
        $('#cart-count').text(count);
        $('#share-button').prop('disabled', count === 0);
    }

    $('#cart').on('click', '.remove-button', function() {
        $(this).parent().remove();
        updateTotalCost();
    });

    $('#clear-cart-button2').on('click', function() {
        $('#cart').empty();
        updateTotalCost();
    });

    // ── Place Order ───────────────────────────────────────────────────────────
    $('#share-button').on('click', function() {
        var $btn = $(this);
        if ($btn.prop('disabled')) return;
        if (!selectedCommunityId) { alert('Please select a community first.'); return; }

        $btn.text('Processing...').prop('disabled', true).css({ backgroundColor:'#f59e0b', cursor:'wait' });

        var totalCost    = 0;
        var orderDetails = [];
        var orderNumber  = 'QH-' + Date.now().toString(36).toUpperCase() + '-' + Math.floor(1000 + Math.random() * 9000);
        var whatsappMsg  = '*My QuickHelp Order*: ' + orderNumber + '\n';
        whatsappMsg     += 'Community: ' + selectedCommunityName + '\n\n';

        var userPhone  = localStorage.getItem('userPhone')  || '';
        var firstName  = localStorage.getItem('didiname')   || '';
        var email      = localStorage.getItem('email')      || '';
        var lastName   = localStorage.getItem('lastname')   || '';

        $('#cart li').each(function() {
            var name  = $(this).data('name');
            var price = parseFloat($(this).data('price'));
            var qty   = parseInt($(this).data('quantity')) || 1;
            var id    = $(this).data('id');
            if (!name || isNaN(price)) return;
            whatsappMsg  += name + ' - ₦' + (price * qty).toFixed(2) + ' (' + qty + ')\n';
            orderDetails.push({ id:id, name:name, price:price, quantity:qty,
                firstname:firstName, lastname:lastName, email:email, phone:userPhone });
            totalCost += price * qty;
        });

        if (!orderDetails.length) { alert('Your cart is empty!'); resetBtn($btn); return; }

        var delivery  = 1000;
        var grandTotal = totalCost + delivery;
        whatsappMsg  += '\n*Items total: ₦' + totalCost.toLocaleString() + '*';
        whatsappMsg  += '\nDelivery: ₦' + delivery.toLocaleString();
        whatsappMsg  += '\n*Grand total: ₦' + grandTotal.toLocaleString() + '*';

        // Decide WhatsApp target — agent first, then fallback
        var waNumber = selectedAgentWhatsApp || '2348038615445';

        $.ajax({
            url:  'send-order-nu.php',
            type: 'POST',
            data: {
                orderDetails:  JSON.stringify(orderDetails),
                deliveryCost:  delivery,
                orderNumber:   orderNumber,
                totalCost:     grandTotal,
                community_id:  selectedCommunityId,
                agent_id:      selectedAgentId || ''
            },
            success: function(response) {
                // If server returned an agent WhatsApp, use it
                if (response && response.agent_whatsapp) {
                    waNumber = response.agent_whatsapp.replace(/\D/g, '');
                    if (waNumber.charAt(0) === '0') waNumber = '234' + waNumber.slice(1);
                }
                $btn.text('Order Placed ✓').css({ backgroundColor:'#10b981' });
                $('#cart').empty(); updateTotalCost();
                $('<div class="success-toast" style="background:#2563eb;color:white;">Opening WhatsApp...</div>')
                    .appendTo('body').fadeIn(400).delay(1800).fadeOut(400, function() { $(this).remove(); });
                setTimeout(function() {
                    window.open('https://wa.me/' + waNumber + '?text=' + encodeURIComponent(whatsappMsg), '_blank');
                }, 2000);
                setTimeout(function() { resetBtn($btn); }, 4500);
            },
            error: function() {
                alert('Failed to place order. Please try again.');
                resetBtn($btn);
            }
        });
    });

    function resetBtn($btn) {
        var hasItems = $('#cart li').length > 0;
        $btn.text('Place Order').prop('disabled', !hasItems)
            .css({ backgroundColor: hasItems ? '#28a745' : '#dc3545', color:'#fff', cursor:'pointer' });
    }

});

function moveImage(e, container) {
    var largeImage = container.querySelector('.product-image-large');
    if (!largeImage) return;
    var x = e.clientX, y = e.clientY;
    if (e.type === 'touchstart' || e.type === 'touchmove') {
        x = e.touches[0].clientX; y = e.touches[0].clientY;
    }
    largeImage.style.left = (x + 20) + 'px';
    largeImage.style.top  = (y - 200) + 'px';
}
</script>



   <script type="text/javascript">
   
            var get_ads = localStorage.getItem("ads");

            if (typeof get_ads === 'undefined' || get_ads === null) {
                    $(window).on('load',function(){
                    setTimeout(function() { $('#myModal').modal('show'); }, 7000);});
                    localStorage.setItem("ads","active");
                }
    
             function loginer_round(){
                    $('#loginer_round').modal('show'); 
        
                 }
                 
                 function smart_cart(){
                    $('#smart_cart').modal('show'); 
        
                 }
              function myFunctionsnack1() {
     $('#myModal').modal('hide');
     $('#smart_cart').modal('hide');
       }
   
                 
                 
</script>




<script type="text/javascript">
    var get_ads = localStorage.getItem("ads");
    if (typeof get_ads === 'undefined' || get_ads === null) {
        $(window).on('load', function() {
            setTimeout(function() { $('#smart_cart').modal('show'); }, 7000);
        });
        localStorage.setItem("ads", "active");
    }
    
    function loginer_round() {
        $('#loginer_round').modal('show');
    }
    
    function smart_cart() {
        $('#smart_cart').modal('show');
    }
</script>



<!-- Modal -->
  <div class="modal fade" id="loginer_round" role="dialog" style="padding-top: 10px;">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <?php 
        
        include_once("user/login_f3.php");
        
        ?>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
   
    
    
    

    
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

<link rel="stylesheet" type="text/css" href="https://quickhelp.com.ng/nu2/QuickHelp_Widget/css/styles4.css">


  <script type="text/javascript">
  
  var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
           
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    
    
  
    
  </script>
      
 
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=144445336126523";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>





<div class="chat_frame panel-fullscreen" id="">
    <div class="QuickHelp-chat-box" >
        
        
 <ul class="navo li">
     <li>  <a class="btn btn-outline-primary" href="<?php echo $_SESSION["loginer_url"]; ?>" <?php echo $_SESSION["onclick"];?> ><?php echo $_SESSION["loginer"]; ?></a>
     <script type="text/javascript">
     function myFunction_signo1(){
     $('.QuickHelp-inner-box-chat').show();    
     var x = document.getElementById("signo1").value;
     document.getElementById("signo").innerHTML = x;
     textsigno = x;
     if (textsigno !== ""){
     insertChat("local", textsigno);
     queryBot(textsigno);
     }
     }
     </script>
     <input type="button" style="display: none;" class="btn btn-outline-primary" id="signo2" onclick="myFunction_signo2()" value="Sign Out">
     <a id="signo2"></a>
     <script type="text/javascript">
     function myFunction_signo2(){
     $('.QuickHelp-inner-box-chat').show();
     var x = document.getElementById("signo2").value;
     document.getElementById("signo2").innerHTML = x;
     textsigno = x;
     if (textsigno !== ""){
     insertChat("local", textsigno);
     queryBot(textsigno);
     }
     }
     </script>
          </script>
     <input type="button" style="display: none;" class="btn btn-outline-primary" id="signo3" onclick="myFunction_signo3()" value="Back">
     <a id="signo3"></a>
     <script type="text/javascript">
     function myFunction_signo3(){
     $('.QuickHelp-inner-box-chat').show();
     var x = document.getElementById("signo3").value;
     document.getElementById("signo3").innerHTML = x;
     textsigno3 = x;
     if (textsigno3 !== ""){
     insertChat("local", textsigno3);
     queryBot(textsigno3);
     }
     }
     </script></li>
<li><a href="#"  id="signup" role="button" onClick ="myFunction_internship()" title="Register a business">
<img src="https://quickhelp.com.ng/QuickHelp_Widget/images/signup.png" class="icons">
</a></li>     
<li><a href="#" onclick="quickhelpswitch_mess()"  id="QuickHelp-chat-box-switcher-mess" role="button" title="Messenger">
<img src="https://quickhelp.com.ng/img/chat_2.png"  style= "width:30px" class="icons" id="switcho_mess">
</a></li> 
<li><a href="#" onclick="quickhelpswitch()" id="QuickHelp-chat-box-switcher" role="button" title="Switch">
<img src="https://widget.quickhelp.com.ng/images1/if_quick.png" class="icons" id="switcho">
</a></li> 
<li><a href="#" class ="state_cart" role="button" title="shop online" onclick="smart_cart()">
<img src="https://quickhelp.com.ng/img/cart_2.png" class="icons" id = "state_cart">
</a></li>
<li><a href="#" onClick = "get_airtime()"  role="button" title="get airtime"><img src="https://quickhelp.com.ng/img/get_airtime.png" id="archived" class="icons">
</a></li> 

 <!--. .<li><a href="#" onClick = "save_contact()"  role="button" title="Save all contacts"><img src="chat/save.png" id="saver" class="icons">
</a></li>     

<li><a href="#" onClick = "display_contacts()"  role="button" title="view saved contacts"><img src="https://quickhelp.com.ng/chat/offline.png" id="archived" class="icons">
</a></li> 
Write your comments here -->

<li><a href="#" id="rec" role="button" title="start voice command">
<img src="https://quickhelp.com.ng/QuickHelp_Widget/images/mic.png" class="icons">
</a></li>

<li><a href="#" onClick = "minimizeo()" class ="state_icon2" role="button" title="control chat">
<img src="https://quickhelp.com.ng/img/min_menu.png" class="icons" id = "state_icon">
</a></li>





</ul>

  
</div>  

 <div class="QuickHelp-inner-box-chat">


            <div class="innerframe">
                
                <ol class="chat" id="messages">

        <li class="other">
        <div class="avatarv"> </div>
      <div class="msg">
   <body onload="myFunctionl()">
           <script>
        
        function myFunctionl() {
            
          
            
            
                 function idleLogout() {
    var t;
    window.onload = resetTimer;
    window.onmousemove = resetTimer;
    window.onmousedown = resetTimer;  // catches touchscreen presses as well      
    window.ontouchstart = resetTimer; // catches touchscreen swipes as well 
    window.onclick = resetTimer;      // catches touchpad clicks as well
    window.onkeypress = resetTimer;   
    window.addEventListener('scroll', resetTimer, true); // improved; see comments

    function yourFunction() {
        //var intros = ['random news', 'adverts'];
       // var intros = ['random news'];
        //var intro = intros[Math.floor(Math.random()*intros.length)]   
        
       // queryBot("still_there");
        //insertChat("remote", intro);
        //queryBot(intro);
        //$('.QuickHelp-inner-box-chat').show(); 
        
        setTimeout(function (){
           // queryBot("locale is "+locale); 
            //$('.QuickHelp-inner-box-chat').show(); 
           }, 4000); 
           
        setTimeout(function (){
             motivate();
            //$('.QuickHelp-inner-box-chat').show(); 
           }, 12000);            
           
          
        
        var msg = new SpeechSynthesisUtterance();
                    msg.voiceURI = "native";
                    //msg.text = data.result.fulfillment.speech;
                    msg.text0 = jQuery('<p>' + intro + '</p>').text();
                    //msg.text1 = data.result.fulfillment.speech;
                    msg.text2 = msg.text0.split('<script>')[0];
                    msg.text = msg.text2.split('function')[0];
                    msg.lang = "en-GB";
                    //window.speechSynthesis.speak(msg) ; 
        
        
        
    }

    function resetTimer() {
        clearTimeout(t);
        t = setTimeout(yourFunction, 120000);  // time is in milliseconds
    }
}
idleLogout();

            ////////////////////////////Name remember//////////////////
            
             var get_mode = localStorage.getItem("tw_mode");
             var checkname = localStorage.getItem("didiname");
             var status = localStorage.getItem("checked_status");
             var phone = localStorage.getItem("phone");
             var email = localStorage.getItem("email");
             
             if (typeof checkname === 'undefined' || checkname === null) {
                 
                   $(document).ready(function() {
  // $('.QuickHelp-inner-box-chat').hide();
});
                 
                             setTimeout(function (){
        insertChat("remote", " <?php date_default_timezone_set('Africa/Lagos');  $hour      = date('H');

if ($hour >= 22) {
    $greetings = "Good Evening. Good to know you are still awake!";
} elseif ($hour > 16) {
   $greetings = "Good Evening. I hope you had a nice day.";
} elseif ($hour > 11) {
    $greetings = "Good Afternoon";
} elseif ($hour < 12) {
   $greetings = "Good Morning!";
}
echo $greetings; 
//echo "Your coordinates are ".$_COOKIE["coordinates"];
//$latii = $_COOKIE["latitude"];
//$longii = $_COOKIE["Longitude"];


?>");
            }, 1000);  
            
           //setTimeout(function (){
          //  $('.QuickHelp-inner-box-chat').show(); 
         //  }, 2000); 
            

            

             setTimeout(function (){
        queryBot("intro name request");
            }, 3000); 
            
                     
       

           } else {
                     
        setTimeout(function (){                  
         queryBot("capture_user and "+ checkname+" and  "+email+" and  "+phone); 
           }, 6000); 
                                   setTimeout(function (){
        insertChat("remote", " <?php date_default_timezone_set('Africa/Lagos');  $hour      = date('H');

if ($hour >= 22) {
    $greetings = "Good Evening ";
} elseif ($hour > 16) {
   $greetings = "Good Evening ";
} elseif ($hour > 11) {
    $greetings = "Good Afternoon ";
} elseif ($hour < 12) {
   $greetings = "Good Morning ";
}
echo $greetings; 
//echo "Your coordinates are ".$_COOKIE["coordinates"];
//$latii = $_COOKIE["latitude"];
//$longii = $_COOKIE["Longitude"];


?>"+checkname+'!');
            }, 1000);  
            
           //setTimeout(function (){
           // $('.QuickHelp-inner-box-chat').show(); 
         //  }, 2000); 
            
        
            
           }

}


 setTimeout(function (){
           // $('.QuickHelp-inner-box-chat').show(); 
           }, 2000); 
 </script>            

   <p>Hello! <?php date_default_timezone_set('Africa/Lagos');  $hour      = date('H');

if ($hour >= 22) {
    $greetings = "Good Evening. Good to know you are still awake!";
} elseif ($hour > 16) {
   $greetings = "Good Evening. I hope you had a nice day.";
} elseif ($hour > 11) {
    $greetings = "Good Afternoon";
} elseif ($hour < 12) {
   $greetings = "Good Morning!";
}
echo $greetings; 
//echo "Your coordinates are ".$_COOKIE["coordinates"];
//$latii = $_COOKIE["latitude"];
//$longii = $_COOKIE["Longitude"];


?>
        On QuickHelp, we help with emergencies, business contacts, airtime recharge and even cash bailouts. </p>

 <a class="btn btn-outline-primary" style="font-weight: 900;    background-color: #ed2024; border-color: #ed2024; font-size: 18px; margin-bottom: 7px;"  onClick="set_code()" href="#" id="red_button" >GET HELP</a><br>
 
<a class="buttono_green" href="#"id="Intern" onclick="smart_cart()" >SHOP</a>   


        
        <div><input type="button" class="buttono_red" id="mechanic" onclick="myFunction_mechanic()" value="I need airtime">
     <p id="mechanic"></p>
     <script type="text/javascript">
     function myFunction_mechanic(){
     var x = document.getElementById("mechanic").value;
     document.getElementById("mechanic").innerHTML = x;
     textm = x;
     if (textm !== ""){
     insertChat("local", textm);
     queryBot(textm);
     }
     }
     </script>
</div>
<div><input type="button" class="buttono_red" id="mechanic_data" onclick="myFunction_mechanic_data()" value="I need Data">
     <p id="mechanic_data"></p>
     <script type="text/javascript">
     function myFunction_mechanic_data(){
     var x = document.getElementById("mechanic_data").value;
     document.getElementById("mechanic_data").innerHTML = x;
     textm = x;
     if (textm !== ""){
     insertChat("local", textm);
     queryBot(textm);
     }
     }
     </script>
</div>
        <div><input type="button" class="buttono_gray" id="saloon" onclick="myFunction_saloon()" value=" <?php 
        $ran = array("Find a Business") ;
            $quests = $ran[array_rand($ran, 1)];
            echo $quests; ?> ">
     <p id="saloon"></p>
     <script type="text/javascript">
     function myFunction_saloon(){
     var x = document.getElementById("saloon").value;
     document.getElementById("saloon").innerHTML = x;
     textsa = x;
     if (textsa !== ""){
     insertChat("local", textsa);
     /////////////////////get words for geolocation  
     if ((textsa.indexOf("geolocate") >= 0) || (textsa.indexOf("where am I") >= 0) || (textsa.indexOf("where am I") >= 0) || (textsa.indexOf("where is this") >= 0) ||(textsa.indexOf("locate") >= 0) || (textsa.indexOf("close by") >= 0) || (textsa.indexOf("within reach") >= 0) || (textsa.indexOf("neighbourhood") >= 0)|| (textsa.indexOf("neighborhood") >= 0)|| (textsa.indexOf("nearby") >= 0)|| (textsa.indexOf("around me") >= 0)){
            if (latlong1 !== null) {queryBot(textsa+ " ("+latlong1 +")" );} else {
            queryBot(textsa);}  } else {queryBot(textsa); }
     //queryBot(textsa);
     }
     }
     </script>
</div>



 <!-- Required meta tags <li> 
      
            



       </li> -->
         
          <?php  $news = simplexml_load_file('https://news.google.com/news?pz=1&cf=all&ned=en_ng&hl=en&topic=n&output=rss'); $gfeeds = array();
          $i = 0;

foreach ($news->channel->item as $item) 
{
    preg_match('@src="([^"]+)"@', $item->description, $match);
    $parts = explode('<font size="-1">', $item->description);

    $gfeeds[$i]['title'] = (string) $item->title;
    $gfeeds[$i]['link'] = (string) $item->link;
    $gfeeds[$i]['image'] = $match[1];
    $gfeeds[$i]['site_title'] = strip_tags($parts[1]);
    $gfeeds[$i]['story'] = strip_tags($parts[2]);

    $i++;
   
   }
     //echo "Have you heard the latest? ".$gfeeds[0]['title'] ;   ?> </p>    
     
        <time>iQuickHelp</time> </div>
    </li> </ol>
    
    

</div>
       
            <input class="textarea" type="text" placeholder="Type a message!"/> 
            <span class="send-button" onclick="minimizeo()" >&times;</span>
       
        </div>

</div>

    <script src="app_live6.js"></script>


    <script type="text/javascript">
    
      $(document).ready(function() {
   //$('.QuickHelp-inner-box-chat').hide();
    $('#minimizeo').attr('src', 'https://quickhelp.com.ng/img/max_menu.png');
      });
        
    $("#QuickHelp-chat-box").on('click',function(){

    $(".QuickHelp-inner-box-chat").toggle();

    $('.chat_frame').removeClass('panel-fullscreen'); 

    $('.chat_frame').removeClass('panel-normal'); 

    });

    </script>
    
    <script>
function myFunctionsnack1() {
     $('#myModal').modal('hide');
     $('#smart_cart').modal('hide');
       }
     
     function myFunctionsnack2() {
     $('#myModal').modal('hide'); 
     $('.QuickHelp-inner-box-chat').show(); 
     var x = document.getElementById("signo").value;
     document.getElementById("signo").innerHTML = x;
     textsigno = x;
     
     if (textsigno !== ""){
     insertChat("local", textsigno);
     queryBot(textsigno);
     }
     }
            
            
     </script>

    <script type="text/javascript">
    
     function myFunction_clearer(){
     $('.QuickHelp-inner-box-chat').hide(); 
      }
      
      function myFunction_shower(){
            setTimeout(function (){
           // $('.QuickHelp-inner-box-chat').show(); 
           }, 2000); 
      }
      
      
      $(window).scroll(function(){
       //$('.QuickHelp-inner-box-chat').hide(); 
       });
    
    
    
     $(document).ready(function () {
        //Toggle fullscreen
        $("#panel-fullscreen").click(function (e) {
            e.preventDefault();
            var $this = $(this);
            //$('.chat_frame').removeClass('panel-normal'); 
            $(this).closest('.chat_frame').toggleClass('panel-fullscreen');
            $('.QuickHelp-inner-box-chat').show();
             //$('.navbar-header').hide();
            //$('.slicknav_menu').hide();
        });
    });

    </script>

<script type="text/javascript">
    $('#panel-normal').click(function(e){
    $('.chat_frame').removeClass('panel-fullscreen'); 
    $('.chat_frame').toggleClass('panel-normal'); 
    $('.QuickHelp-inner-box-chat').show(); 
    
   
    
});
</script>
	<!-- Optional JavaScript -->
	 <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>    
    <script src="js/smoothscroll.js"></script>    
    <script src="js/jquery.slicknav.js"></script>     
    <script src="js/wow.js"></script>   
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>
<!-- Start of LiveChat (www.livechatinc.com) code -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('body').ready(function(){
    			$('.chat-content').slideDown(100);
    		});
	    		$('.hide-chat-box').click(function(){
	       			 $('.chat-content').slideToggle();
	    		});
    	});

  </script>
  
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('body').ready(function(){
    			$('.chat-content').slideDown(100);
    		});
	    		$('.hide-chat-box').click(function(){
	       			 $('.chat-content').slideToggle();
	    		});
    	});

  </script>
  
  <div id="cookieConsent">
    <div id="closeCookieConsent"><i class="fas fa-times"></i></div>
    This website is using cookies. <a href="https://quickhelp.com.ng/privacy.php" target="_blank">More info</a>. <a class="cookieConsentOK">That's Fine</a>
</div>
<script>

$(document).ready(function(){


<?php

if (!empty($_SESSION['query'])){
$strant = "delete account";
$deleter = 'queryBot("'.$strant.'");';
unset($_SESSION['query']);
echo  $deleter;
}

?>

 //queryBot("welcome_speech");   
 //localStorage.removeItem("sw_mode");

var checkconsent = localStorage.getItem("cookiesconsent");

if (checkconsent != "yes") {
        setTimeout(function () {
        $("#cookieConsent").fadeIn(200); 
     }, 4000);
} else {
    document.getElementById('cookieConsent').style.display = 'none';
}
    $("#closeCookieConsent, .cookieConsentOK").click(function() {
        $("#cookieConsent").fadeOut(200);
        localStorage.setItem("cookiesconsent","yes");
    }); 
});

var locale = localStorage.getItem("location");
 setTimeout(function (){
            //queryBot("locale is "+locale); 
         //   $('.QuickHelp-inner-box-chat').show(); 
           }, 4000); 


function myFunction_N50() {
var x = document.getElementById("N50").value;
document.getElementById("N50").innerHTML = x;
text2 = x;
if (text2 !== ""){
insertChat("local", text2);
queryBot(text2);
}
}

function myFunction_N100() {
var x = document.getElementById("N100").value;
document.getElementById("N100").innerHTML = x;
text2 = x;
if (text2 !== ""){
insertChat("local", text2);
queryBot(text2);
}
}

function myFunction_N200() {
var x = document.getElementById("N200").value;
document.getElementById("N200").innerHTML = x;
text2 = x;
if (text2 !== ""){
insertChat("local", text2);
queryBot(text2);
}
}

function myFunction_N500() {
var x = document.getElementById("N500").value;
document.getElementById("N500").innerHTML = x;
text2 = x;
if (text2 !== ""){
insertChat("local", text2);
queryBot(text2);
}
}


function myFunction_N1000() {
var x = document.getElementById("N1000").value;
document.getElementById("N1000").innerHTML = x;
text2 = x;
if (text2 !== ""){
insertChat("local", text2);
queryBot(text2);
}
}
  
function myFunction_yes() {
var x = document.getElementById("qh_yes").value;
document.getElementById("qh_yes").innerHTML = x;
text2 = x;
if (text2 !== ""){
insertChat("local", text2);
var checkphone = localStorage.getItem("qh_phone");
localStorage.setItem("use_number",checkphone);
queryBot("yes");
}
}
function myFunction_no() {
var x = document.getElementById("qh_no").value;
document.getElementById("qh_no").innerHTML = x;
text2 = x;
if (text2 !== ""){
insertChat("local", text2);
queryBot("no");
localStorage.removeItem("use_number");
//var checkphone = localStorage.getItem("qh_phone");
//localStorage.setItem("use_number",checkphone);
}
}  
  function myFunction_requestp() {
document.getElementById("qh_phone2").innerHTML = "You Phone number please..."; 
//var checkphone = localStorage.getItem("qh_phone");
//localStorage.setItem("use_number",checkphone);
}
 
var i = 0;
function buttonIncre() {
        document.getElementById('inc').value = ++i;
    }
function save_contact2() {
        //queryBot("save contact");
        $("#saver").attr("src", "chat/save2.png");
}

function save_contact() {
        insertChat("local","save latest contact");
        queryBot("saved999");
        $('#saver').attr('src', 'chat/save.png');
}

function display_contacts() {
    var myContacts = localStorage.getItem("saved");
        insertChat("remote",myContacts);
        $('.QuickHelp-inner-box-chat').show(); 
        //$('.navbar-header').hide();
        //$('.slicknav_menu').hide();
}

function hide_sleek() {
    //$('.navbar-header').hide();
        //$('.slicknav_menu').hide();
}


////////////////////////////Name remember//////////////////
function myFunction_internship(){
    maximizeo();
    insertChat("local", "Register on QuickHelp Nigeria");
     queryBot("register");
  
     }
          
function set_code() {
    maximizeo();
    insertChat("remote","Please download the App to get started at https://tinyurl.com/quickhelpNigeria.");
    queryBot("Hello");
}   
     

 </script>
 
  </body>
</html>

