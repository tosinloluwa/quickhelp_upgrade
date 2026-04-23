<?php session_start();?>
<?php if($_SERVER["HTTPS"] != "on") {
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
} ?>

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
  <title>QuickHelp Nigeria | Nigeria's #1 Chatbot Directory! | Emergency Services, Business Contacts, Airtime/Data Recharge</title>
  <meta name="description" content="QuickHelp is an AI-based business directory and personal emergency services system (PESS). Get immediate access to business contacts and receive quick responses during emergencies or distress.">
  <meta name="keywords" content="Chatbot, AI, Artificial Intelligence, Machine Learning, OAU, SYL, Tosin Odubela, SMS Directory, Business Directory, Yellow Pages, Ile-Ife, Osun, Nigeria, Lagos, Fintech, Financial Technology, IOT, Blockchain, SMS recharge, Virtual Agent, Customer Service, Emergencies, Distress, Hotline">
  <meta name="author" content="QuickHelp Nigeria">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Open Graph -->
  <meta property="og:image" content="https://quickhelp.com.ng/quick4.jpg">
  <meta property="og:image:width" content="400">
  <meta property="og:image:height" content="400">
  <meta property="og:title" content="Welcome to QuickHelp Nigeria">
  <meta property="og:description" content="QuickHelp is an AI-based business directory and personal emergency services system (PESS).">
  <meta property="og:url" content="https://quickhelp.com.ng">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@iQuickHelp">
  <meta name="twitter:creator" content="@iQuickHelp">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- New Unified Stylesheet -->
  <link rel="stylesheet" href="quickhelp-new.css">

  <!-- ShareThis -->
  <script type="text/javascript" src='https://platform-api.sharethis.com/js/sharethis.js#property=5f59e680a86c6e0012410f13&product=sop' async='async'></script>

  <?php include_once("user/auth2.php"); ?>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- OneSignal -->
  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
  <script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
      OneSignal.init({ appId: "0c5be755-8827-4bd5-b811-67e717b6b622" });
    });
  </script>

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-38401111-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){ dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'UA-38401111-2');
    gtag('config', 'G-MFDRN2B8VL');
  </script>

  <!-- AdSense -->
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-1176780883102825",
      enable_page_level_ads: true
    });
  </script>

  <!-- Google Maps -->
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB63UDBXLl5d5cfMc0LkM_8-d8aOetEOI&callback=initMap"></script>

  <script>
    localStorage.setItem("sw_mode", "quicke");
    localStorage.setItem("sw_mode_chat", "start");
    localStorage.setItem("messenger", "inactive");

    var latlon;
    var map, infoWindow;

    function initMap() {
      map = new google.maps.Map(document.getElementById('mapo'), {
        center: { lat: -34.397, lng: 150.644 }, zoom: 6
      });
      infoWindow = new google.maps.InfoWindow;
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = { lat: position.coords.latitude, lng: position.coords.longitude };
          latlon = position.coords.latitude + "," + position.coords.longitude;
          infoWindow.setPosition(pos);
          document.cookie = "coordinates=" + latlon;
          localStorage.setItem("coordinates", latlon);
          infoWindow.setContent('Location found.');
          infoWindow.open(map);
          map.setCenter(pos);
        }, function() {});
      }
    }

    var get_mem = localStorage.getItem("state");
    if (typeof get_mem == 'undefined' || get_mem === null) {
      localStorage.setItem("state", 0);
      localStorage.setItem("saved", "");
    }

    let r = Math.random().toString(36).substring(7);
    var holdier = ("random", r);
    var name = holdier;

    function rollout() {
      "use strict";
      let r = Math.random().toString(36).substring(7);
      var holdier = ("random", r);
      var name = holdier;
      insertChat('local', uncle2);
      queryBot(uncle2);
      var func = new Function(
        'return function ' + name + '(){ var x = document.getElementById(holdier).value; document.getElementById(holdier).innerHTML = x; }'
      )();
      return func();
    }
  </script>
</head>

<body>

<!-- Hidden map div for geolocation -->
<div id="mapo"></div>

<!-- ════════════════════════════════════════════════════════════
     NAVBAR
════════════════════════════════════════════════════════════ -->
<nav class="navbar indigo" id="mainNav">
  <div class="container">
    <a href="https://play.google.com/store/apps/details?id=com.quickhelpnigeria2024.app" class="navbar-brand" target="_blank">
      <img src="img/logo.png" alt="QuickHelp Nigeria">
    </a>

    <div class="navbar-links" id="desktopNav">
      <a href="#hero-area" onclick="myFunction_shower()">Home</a>
      <a href="#services" onclick="myFunction_clearer()">Services</a>
      <a href="https://blog.quickhelp.com.ng/" target="_blank">Blog</a>
      <a href="#prices" onclick="myFunction_clearer()">Pricing</a>
      <a href="#" onclick="smart_cart()">QuickBUY</a>
      <a href="https://quickhelp.com.ng/qknows" target="_blank">Qknows</a>
      <a href="#contact" onclick="myFunction_clearer()">Contact</a>
      <a href="<?php echo $_SESSION["dash_url"]; ?>" class="ap"><?php echo $_SESSION["dasher"]; ?></a>
      <a href="<?php echo $_SESSION["loginer_url"]; ?>" <?php echo $_SESSION["onclick"];?> class="btn-login ap"><?php echo $_SESSION["loginer"]; ?></a>
    </div>

    <button class="navbar-toggler" id="navToggler" aria-label="Toggle navigation">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- Mobile Nav -->
<div class="mobile-nav" id="mobileNav">
  <a href="#hero-area" onclick="closeMobileNav()">Home</a>
  <a href="#services" onclick="closeMobileNav(); myFunction_clearer()">Services</a>
  <a href="https://blog.quickhelp.com.ng/" target="_blank">Blog</a>
  <a href="#prices" onclick="closeMobileNav(); myFunction_clearer()">Pricing</a>
  <a href="#" onclick="closeMobileNav(); smart_cart()">QuickBUY</a>
  <a href="https://quickhelp.com.ng/qknows" target="_blank">Qknows</a>
  <a href="#contact" onclick="closeMobileNav(); myFunction_clearer()">Contact</a>
  <a href="<?php echo $_SESSION["loginer_url"]; ?>" <?php echo $_SESSION["onclick"];?>><?php echo $_SESSION["loginer"]; ?></a>
</div>

<!-- ════════════════════════════════════════════════════════════
     HERO SECTION
════════════════════════════════════════════════════════════ -->
<section id="hero-area">
  <div class="container hero-content">
    <div class="hero-badge">
      <span></span> Nigeria's #1 AI-Powered Chatbot Directory
    </div>

    <h1 class="hero-title">
      Get <span class="accent">Timely</span><br>Help, Fast.
    </h1>

    <p class="hero-subtitle">
      AI-powered emergency services, business contacts, airtime/data recharge, ride-hailing &amp; more — all in one chat.
    </p>

    <div class="hero-typewriter">
      <div id="typer"></div>
    </div>

    <div class="hero-cta">
      <a href="#" class="btn btn-primary" id="red_button" onClick="set_code()">
        <i class="fas fa-bolt"></i> Get Started
      </a>
      <a href="#" class="btn btn-outline" onclick="loginer_round()">
        <i class="fas fa-user-plus"></i> Sign Up
      </a>
      <a href="#" class="btn btn-outline" onclick="smart_cart()">
        <i class="fas fa-shopping-cart"></i> Shop
      </a>
      <a href="<?php echo $_SESSION["loginer_url"]; ?>" <?php echo $_SESSION["onclick"];?> class="btn btn-outline ap">
        <?php echo $_SESSION["loginer"]; ?>
      </a>
    </div>

    <div class="hero-chips">
      <span class="chip" id="logino" onclick="myFunction_logino()"><i class="fas fa-search"></i> Find a Business</span>
      <span class="chip" id="datano" onclick="myFunction_datano()"><i class="fas fa-wifi"></i> Get Data</span>
      <span class="chip" id="loginod" onclick="myFunction_loginod()"><i class="fas fa-phone"></i> Get Airtime</span>
      <span class="chip" onclick="gov_agencies()"><i class="fas fa-landmark"></i> Gov Agencies</span>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════
     WHY QUICKHELP — BENTO GRID
════════════════════════════════════════════════════════════ -->
<section id="whatwedo">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Why QuickHelp?</h2>
      <hr class="lines">
      <p class="section-subtitle">Built for Nigerian communities — fast, fair and always available.</p>
    </div>

    <div class="bento-grid">
      <div class="bento-card featured">
        <div class="bento-icon"><i class="fas fa-gift"></i></div>
        <h4>Always Free</h4>
        <p>QuickHelp is an AI-based business directory and personal emergency services system created to be free for all communities in Nigeria. Our pledge: the free directory service stays free — forever.</p>
      </div>

      <div class="bento-card">
        <div class="bento-icon"><i class="fas fa-balance-scale"></i></div>
        <h4>Very Fair</h4>
        <p>Our random algorithm moves businesses out of obscurity. On QuickHelp, everyone is a VIP.</p>
      </div>

      <div class="bento-card">
        <div class="bento-icon"><i class="fas fa-unlock-alt"></i></div>
        <h4>Safety First</h4>
        <p>Your personal data stays in your community, not on some server run by total strangers.</p>
      </div>

      <div class="bento-card">
        <div class="bento-icon"><i class="fas fa-certificate"></i></div>
        <h4>Screened Listings</h4>
        <p>Every business is verified before listing. Community Directory Managers actively maintain quality.</p>
      </div>

      <div class="bento-card">
        <div class="bento-icon"><i class="fas fa-signal"></i></div>
        <h4>Offline Capable</h4>
        <p>No smartphone? No data? No problem. Use QuickHelp via SMS or USSD: <strong>*345*047#</strong></p>
      </div>

      <div class="bento-card">
        <div class="bento-icon"><i class="fas fa-briefcase"></i></div>
        <h4>Instant Jobs</h4>
        <p>Earn as a <a href="http://quickhelp.com.ng/jobs/" target="_blank">QuickHelp Community Directory Manager</a> — oversee businesses within 5 km of your address.</p>
      </div>

      <div class="bento-card">
        <div class="bento-icon"><i class="fas fa-heartbeat"></i></div>
        <h4>Life Saver</h4>
        <p>Stuck in a remote town, sick child in the car, flat tyres? Help is just one chat away.</p>
      </div>

      <div class="bento-card">
        <div class="bento-icon"><i class="fas fa-microphone"></i></div>
        <h4>Just Talk!</h4>
        <p>Hit the mic button and make your request by voice — no typing needed with our Speech Recognition feature.</p>
      </div>

      <div class="bento-card">
        <div class="bento-icon"><i class="fas fa-handshake"></i></div>
        <h4>Partnership Benefits</h4>
        <p>Partners get free website design, instant service-request notifications, ad slots on USSD, web and mobile app.</p>
      </div>

      <div class="bento-card">
        <div class="bento-icon"><i class="fas fa-star"></i></div>
        <h4>Premium Benefits</h4>
        <p>Referrals, bonus earnings, sharing income, voice support and logistics for premium users.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════
     WHY QUICKHELP BANNER
════════════════════════════════════════════════════════════ -->
<section id="whyChoseUs">
  <div class="container">
    <div class="why-banner">
      <div>
        <h2>QuickHelp</h2>
        <p>Instant Help, wherever, whenever.</p>
      </div>
      <div class="why-banner-right">
        <img src="img/quick1.png" alt="QuickHelp">
        <div class="social-row">
          <a href="https://www.facebook.com/messages/t/iQuickHelp" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/iQuickHelp" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/company/iquickhelp-nigeria/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════
     SERVICES
════════════════════════════════════════════════════════════ -->
<section id="services" class="section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">QuickHelp Services</h2>
      <hr class="lines">
      <p class="section-subtitle">QuickHelp is a FREE community-centred business directory and personal emergency services system leveraging SMS, USSD and AI technologies.</p>
    </div>

    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-address-card"></i></div>
        <h4>Personal Emergency Services / Business Directory</h4>
        <p>A robust directory of verified artisans, SMEs and registered companies — freely accessible via AI, plus a Premium Personal Emergency Service System (PESS) for contingencies and crises.</p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="fas fa-phone"></i></div>
        <h4>QuickCredit</h4>
        <p>Get instant airtime credit and pay later. The fastest way to recharge without touching your bank account. Just type "I need airtime" to try it.</p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="fas fa-taxi"></i></div>
        <h4>QuickHelp Taxi / Bike</h4>
        <p>Community-based Taxi and Bike service. Say "I need a Taxi" or use the USSD code. A simple, safe alternative floated in partnership with local operators.</p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="fas fa-toggle-on"></i></div>
        <h4>QuickHelp Switch</h4>
        <p>Switch to your favourite brand built on Qknows. Public FAQs are auto-fetched, converted to Knowets and made conversational — instantly.</p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="fas fa-shopping-cart"></i></div>
        <h4>QuickBuy / Online Shopping</h4>
        <p>An eCommerce arm empowering local businesses with an online store and community-based logistics. More sales, higher profits, convenient shopping for everyone.</p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="fas fa-comment-alt"></i></div>
        <h4>Qknows</h4>
        <p>QuickHelp's Natural Language Processing (NLP) knowledge system. Written in Knowledge Entities (Knowets) — scripted datasets that train AI agents.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════
     PRICING
════════════════════════════════════════════════════════════ -->
<section id="prices" class="section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Simple Pricing</h2>
      <hr class="lines">
      <p class="section-subtitle">Start free. Upgrade when you're ready.</p>
    </div>

    <div class="pricing-grid">
      <!-- Free -->
      <div class="pricing-card">
        <div class="pricing-tier">Free</div>
        <div class="pricing-price">₦0 <span class="pricing-period">/ month</span></div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li class="pricing-feature"><i class="fa fa-check"></i> Free Online &amp; USSD Directory Services</li>
          <li class="pricing-feature"><i class="fa fa-check"></i> Can upgrade to Premium anytime</li>
          <li class="pricing-feature"><i class="fa fa-check"></i> Buy Airtime / Data</li>
          <li class="pricing-feature disabled"><i class="fa fa-times"></i> <del>Referral Earnings</del></li>
          <li class="pricing-feature disabled"><i class="fa fa-times"></i> <del>Delivery Services</del></li>
          <li class="pricing-feature disabled"><i class="fa fa-times"></i> <del>Business Notifications</del></li>
          <li class="pricing-feature disabled"><i class="fa fa-times"></i> <del>Access to Cash Bail-outs</del></li>
        </ul>
        <a href="user/register.php" class="btn btn-blue btn-block">Get Started Free</a>
      </div>

      <!-- Premium -->
      <div class="pricing-card popular">
        <div class="popular-badge">Most Popular</div>
        <div class="pricing-tier">Premium</div>
        <div class="pricing-price">₦5,499 <span class="pricing-period">/ month</span></div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li class="pricing-feature"><i class="fa fa-check"></i> Online / USSD / Voice Directory</li>
          <li class="pricing-feature"><i class="fa fa-check"></i> Referral Earnings</li>
          <li class="pricing-feature"><i class="fa fa-check"></i> Sales of Airtime / Data</li>
          <li class="pricing-feature"><i class="fa fa-check"></i> Delivery Services</li>
          <li class="pricing-feature"><i class="fa fa-check"></i> Access to QuickCover (Personal Emergency Units)</li>
          <li class="pricing-feature disabled"><i class="fa fa-times"></i> <del>Access to Cash Bail-outs</del></li>
        </ul>
        <a href="user/register.php" class="btn btn-primary btn-block">Subscribe Now</a>
      </div>

      <!-- Business -->
      <div class="pricing-card">
        <div class="pricing-tier">Business</div>
        <div class="pricing-price">₦10,499 <span class="pricing-period">/ month</span></div>
        <div class="pricing-divider"></div>
        <ul class="pricing-features">
          <li class="pricing-feature"><i class="fa fa-check"></i> All Premium benefits</li>
          <li class="pricing-feature"><i class="fa fa-check"></i> Business Opportunity Notifications</li>
          <li class="pricing-feature"><i class="fa fa-check"></i> QuickTaxi, Qknows Premium &amp; QuickBuy Earnings</li>
          <li class="pricing-feature"><i class="fa fa-check"></i> Free Business Adverts</li>
          <li class="pricing-feature"><i class="fa fa-check"></i> Access to Cash Bail-outs</li>
        </ul>
        <a href="user/register.php" class="btn btn-blue btn-block">Go Business</a>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════
     VIDEO
════════════════════════════════════════════════════════════ -->
<section id="video-section" class="section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">See QuickHelp in Action</h2>
      <hr class="lines">
      <p class="section-subtitle">Watch how QuickHelp is transforming access to business services across Nigeria</p>
    </div>
    <div style="max-width: 840px; margin: 0 auto;">
      <div class="video-wrapper">
        <iframe src="https://www.youtube.com/embed/-ewdjXzaHVY"
          title="QuickHelp Nigeria Demo"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════
     CONTACT
════════════════════════════════════════════════════════════ -->
<section id="contact" class="section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Get in Touch</h2>
      <hr class="lines">
      <p class="section-subtitle">We appreciate your feedback!</p>
    </div>

    <div class="contact-grid">
      <div class="contact-info">
        <h3>QuickHelp Nigeria</h3>

        <div class="contact-detail">
          <div class="contact-detail-icon"><i class="fas fa-map-marker-alt"></i></div>
          <div>
            <p><strong>HQ:</strong> Opposite LA Primary School, Kajola-Akile (Modomo), off Ede Road, Ile-Ife, Nigeria</p>
          </div>
        </div>

        <div class="contact-detail">
          <div class="contact-detail-icon"><i class="fas fa-store"></i></div>
          <div>
            <p><strong>Agency:</strong> Shop 4, Block 8, Zone D, OAU Central Market, Obafemi Awolowo University Campus, Ile-Ife, Osun State</p>
          </div>
        </div>

        <div class="contact-detail">
          <div class="contact-detail-icon"><i class="fas fa-phone"></i></div>
          <div><p>+234 091 1999 4357</p></div>
        </div>

        <div class="contact-detail">
          <div class="contact-detail-icon"><i class="fas fa-envelope"></i></div>
          <div><p>info@quickhelp.com.ng</p></div>
        </div>

        <div class="social-icons-contact">
          <a href="https://www.facebook.com/iquickhelp" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/iquickhelp" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/company/iquickhelp-nigeria" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <div class="contact-form-wrap">
        <form id="contactForm">
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="6" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
            <i class="fas fa-paper-plane"></i> Send Message
          </button>
          <div id="msgSubmit" class="text-center" style="margin-top:1rem;"></div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════
     FOOTER
════════════════════════════════════════════════════════════ -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <img src="img/logo.png" alt="QuickHelp Nigeria">
        <p>Nigeria's #1 AI-powered chatbot directory for emergency services, business contacts, airtime recharge, ride-hailing and more.</p>
      </div>

      <div class="footer-col">
        <h5>Platform</h5>
        <a href="#services">Services</a>
        <a href="#prices">Pricing</a>
        <a href="https://quickhelp.com.ng/quickbuy" target="_blank">QuickBuy</a>
        <a href="https://quickhelp.com.ng/qknows" target="_blank">Qknows</a>
        <a href="https://blog.quickhelp.com.ng/" target="_blank">Blog</a>
      </div>

      <div class="footer-col">
        <h5>Company</h5>
        <a href="https://quickhelp.com.ng/partnership.php" target="_blank">Partnerships</a>
        <a href="https://quickhelp.com.ng/jobs.php" target="_blank">Careers</a>
        <a href="#contact">Contact</a>
        <a href="https://quickhelp.com.ng/terms.php" target="_blank">Terms of Service</a>
        <a href="https://quickhelp.com.ng/privacy.php" target="_blank">Privacy Policy</a>
      </div>
    </div>

    <div class="footer-bottom">
      <p>QuickHelp Nigeria is a product of <a href="https://sylmultimedia.com/" target="_blank"><strong>SYL Multimedia</strong></a>. &copy; 2015&ndash;<?php echo date("Y"); ?>. All rights reserved.</p>
      <p class="footer-notice"><strong>Public Notice:</strong> The <a href="https://disrupt-africa.com/2018/05/01/nigerian-alexa-quickhelp-acquired-by-canadian-firm/" target="_blank">acquisition deal</a> announced May 2018 was not eventually successful and is null and void. QuickHelp Nigeria, its core technologies, IP rights and all trademarks remain wholly owned by the Nigerian company, Strategeis and Yields LTD, 8777984.</p>
    </div>
  </div>
</footer>

<!-- ════════════════════════════════════════════════════════════
     BACK TO TOP
════════════════════════════════════════════════════════════ -->
<a href="#hero-area" class="back-to-top" id="backToTop">
  <i class="fas fa-arrow-up"></i>
</a>

<!-- ════════════════════════════════════════════════════════════
     WHATSAPP WIDGET
════════════════════════════════════════════════════════════ -->
<div id="whatsapp-widget">
  <a href="https://wa.me/2349119994357" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    <span>Chat on WhatsApp</span>
  </a>
</div>

<!-- ════════════════════════════════════════════════════════════
     CHAT WIDGET
════════════════════════════════════════════════════════════ -->
<div class="chat_frame" id="">
  <div class="QuickHelp-chat-box">
    <ul class="navo li">
      <li>
        <a class="btn btn-outline btn-sm" href="<?php echo $_SESSION["loginer_url"]; ?>" <?php echo $_SESSION["onclick"];?> style="font-size:0.75rem;padding:0.3rem 0.75rem;"><?php echo $_SESSION["loginer"]; ?></a>
      </li>
      <li>
        <a href="#" onclick="myFunction_internship()" role="button" title="Register a business">
          <img src="https://quickhelp.com.ng/QuickHelp_Widget/images/signup.png" class="icons">
        </a>
      </li>
      <li>
        <a href="#" onclick="quickhelpswitch_mess()" role="button" title="Messenger">
          <img src="https://quickhelp.com.ng/img/chat_2.png" class="icons" id="switcho_mess" style="width:28px;">
        </a>
      </li>
      <li>
        <a href="#" onclick="quickhelpswitch()" role="button" title="Switch">
          <img src="https://widget.quickhelp.com.ng/images1/if_quick.png" class="icons" id="switcho">
        </a>
      </li>
      <li>
        <a href="#" onclick="smart_cart()" role="button" title="Shop online">
          <img src="https://quickhelp.com.ng/img/cart_2.png" class="icons" id="state_cart">
        </a>
      </li>
      <li>
        <a href="#" onclick="get_airtime()" role="button" title="Get airtime">
          <img src="https://quickhelp.com.ng/img/get_airtime.png" class="icons" id="archived">
        </a>
      </li>
      <li>
        <a href="#" id="rec" role="button" title="Voice command">
          <img src="https://quickhelp.com.ng/QuickHelp_Widget/images/mic.png" class="icons">
        </a>
      </li>
      <li>
        <a href="#" onclick="minimizeo()" role="button" title="Minimize/Maximize">
          <img src="https://quickhelp.com.ng/img/min_menu.png" class="icons" id="state_icon">
        </a>
      </li>
    </ul>
  </div>

  <div class="QuickHelp-inner-box-chat">
    <div class="innerframe">
      <ol class="chat" id="messages">
        <li class="other">
          <div class="avatarv"></div>
          <div class="msg">
            <p>Hello! I'm QuickHelp — your AI assistant. How can I help you today?</p>
            <time></time>
          </div>
        </li>
      </ol>

      <div class="chat-input-area">
        <textarea class="textarea" id="speech" placeholder="Type a message..." rows="1"></textarea>
        <button class="send-button" onclick="sendMessage()"><i class="fas fa-paper-plane"></i></button>
      </div>
    </div>

    <div id="messages2" style="display:none;"></div>
    <p id="typing" class="typing" style="padding:0.25rem 1rem;font-size:0.75rem;color:#94a3b8;min-height:1.2rem;"></p>
  </div>
</div>

<!-- ════════════════════════════════════════════════════════════
     QUICKBUY POPUP MODAL (shop ad)
════════════════════════════════════════════════════════════ -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" style="text-align:center;">
        <h3 style="margin:0 0 0.25rem;">Shop now on</h3>
        <h1 style="color:#00ff2b;margin:0 0 0.75rem;">QuickBuy!</h1>
        <p>QuickBuy is an online marketplace that empowers local businesses and serves local communities.</p>
        <img src="quickbuy.jpg" alt="QuickBuy" style="width:70%;border:2px solid #00ff2b;border-radius:1rem;margin-bottom:1rem;">
        <br>
        <a href="#" onclick="smart_cart()" class="btn btn-primary">
          <i class="fas fa-shopping-cart"></i> Shop Now
        </a>
      </div>
    </div>
  </div>
</div>

<!-- ════════════════════════════════════════════════════════════
     QUICKBUY SHOP MODAL
════════════════════════════════════════════════════════════ -->
<div class="modal fade" id="smart_cart" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <button onclick="myFunctionsnack1()" class="close-btn"><i class="fas fa-times"></i></button>
      <div class="modal-body">
        <p style="color:#fff;font-weight:700;margin-bottom:0.75rem;">Tap an item and scroll to shop</p>

        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1rem;">
          <p style="margin:0;font-size:1rem;font-weight:700;color:#fff;">
            Total: <span id="total-cost">₦0.00</span>
          </p>
          <button id="share-button" disabled class="place-order-btn">Place Order</button>
        </div>

        <select id="community-filter">
          <option value="">🌍 Select a Community...</option>
        </select>

        <div id="category-wrapper" style="display:none;">
          <select id="category-filter">
            <option value="">🏷 All Categories</option>
          </select>
        </div>

        <div class="search-container" id="search-wrapper" style="display:none;">
          <input type="text" id="search-box" placeholder="Search items...">
          <span class="clear-search">&times;</span>
        </div>

        <div id="community-info" style="display:none;padding:0.4rem 0.75rem;background:rgba(255,255,255,0.1);border-radius:0.5rem;margin-bottom:0.5rem;font-size:0.8rem;color:#fff;"></div>

        <ul id="item-list" class="scrollable-list" style="display:none;"></ul>

        <div id="shop-loading" style="display:none;text-align:center;padding:1.5rem;color:#fff;">
          <i class="fas fa-spinner fa-spin fa-2x"></i>
          <p style="margin-top:0.5rem;font-size:0.875rem;">Loading products...</p>
        </div>

        <div id="shop-empty" style="display:none;text-align:center;padding:1.5rem;color:rgba(255,255,255,0.6);">
          <i class="fas fa-box-open fa-2x"></i>
          <p style="margin-top:0.5rem;font-size:0.875rem;">No products found.</p>
        </div>

        <h5 style="color:#fff;margin:0.75rem 0 0.35rem;">My Items (<span id="cart-count">0</span>)</h5>
        <ul id="cart"></ul>
        <p style="color:#fff;font-size:0.875rem;">Total: ₦<span id="total-cost2">0.00</span></p>
        <button id="clear-cart-button2">Clear Cart</button>
      </div>
    </div>
  </div>
</div>

<!-- ════════════════════════════════════════════════════════════
     LOGIN / SIGNUP MODAL
════════════════════════════════════════════════════════════ -->
<div class="modal fade" id="loginer_round" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <?php include_once("user/login_f3.php"); ?>
    </div>
  </div>
</div>

<!-- ════════════════════════════════════════════════════════════
     GOV AGENTS PANEL
════════════════════════════════════════════════════════════ -->
<div id="gov_agents" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.7);z-index:9999;justify-content:center;align-items:center;">
  <div style="max-width:90%;width:min(600px,90%);background:#fff;border-radius:0.75rem;box-shadow:0 4px 24px rgba(0,0,0,0.2);overflow:hidden;font-family:inherit;">
    <div style="background:#1e3a8a;padding:0.75rem 1rem;color:#fff;text-align:center;">
      <h5 style="margin:0;font-size:1rem;font-weight:600;">QuickHelp's Agents</h5>
    </div>
    <div style="padding:0.75rem 1rem;background:#fff;">
      <input id="searchInput" placeholder="Search agencies..." style="width:100%;padding:0.5rem 0.75rem;border:1px solid #d1d5db;border-radius:0.5rem;font-size:0.9rem;outline:none;" onfocus="this.style.borderColor='#3b82f6'" onblur="this.style.borderColor='#d1d5db'">
    </div>
    <div id="agencyList" style="max-height:calc(70vh - 150px);overflow-y:auto;">
      <?php
      require('db.php');
      mysqli_set_charset($con, 'utf8mb4') or die("Failed to set charset: " . mysqli_error($con));
      mb_internal_encoding('UTF-8');
      if (!$con) {
          echo "<div style='padding:0.5rem 1rem;color:#dc2626;'>Error: Unable to connect to the database.</div>";
      } else {
          $result = mysqli_query($con, "SELECT * FROM users WHERE gov_agent = '1' ORDER BY username");
          if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                  $username = htmlspecialchars($row['username'], ENT_QUOTES, 'UTF-8');
                  $name     = htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8');
                  echo "<div class='agency-item' onclick='queryNow()' data-username='$username' style='padding:0.75rem 1rem;cursor:pointer;border-bottom:1px solid #e5e7eb;font-size:0.9rem;color:#1f2937;'>$name</div>";
              }
          }
          mysqli_close($con);
      }
      ?>
    </div>
    <div style="padding:0.75rem;background:#fff;border-top:1px solid #e5e7eb;text-align:center;">
      <button onclick="$('#gov_agents').fadeOut(200);" style="padding:0.5rem 1.25rem;background:#3b82f6;color:#fff;border:none;border-radius:2rem;font-size:0.9rem;cursor:pointer;">Close</button>
    </div>
  </div>
</div>

<!-- Product image styles -->
<style>
.product-item { display:flex; align-items:center; margin-bottom:10px; padding:8px; border-bottom:1px solid rgba(255,255,255,0.1); }
@media(max-width:767px){ .product-image-container:hover .product-image-large{ display:none; } .product-image-container.touched .product-image-large{ display:block; } }
</style>

<!-- ════════════════════════════════════════════════════════════
     SCRIPTS
════════════════════════════════════════════════════════════ -->

<!-- Facebook SDK -->
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=144445336126523";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!-- Typewriter script -->
<script src="typewriter/typewriter.js"></script>
<script>
var typer = document.getElementById('typer');
if (typer) {
  var typewriter = new Typewriter(typer, { loop: true });
  typewriter
    .typeString("Nigeria's #1 Chatbot Directory!")
    .pauseFor(2500).deleteAll()
    .typeString('"I need Airtime!"').pauseFor(2000).deleteAll()
    .typeString('"I am out of fuel!"').pauseFor(2000).deleteAll()
    .typeString('"I need a Plumber at Yaba!"').pauseFor(2000).deleteAll()
    .typeString('"Get me a TAXI!"').pauseFor(2000).deleteAll()
    .typeString('"I need a Bike at Lagere!"').pauseFor(2000).deleteAll()
    .typeString('"Get me an ATM nearby!"').pauseFor(2000).deleteAll()
    .typeString('"I need a job!"').pauseFor(2000).deleteAll()
    .typeString('"Where is UNILAG?"').pauseFor(2000).deleteAll()
    .typeString('"Speak French!"').pauseFor(2000).deleteAll()
    .start();
}
</script>

<!-- Main chatbot JS (all functions preserved) -->
<script src="app_live6.js"></script>

<!-- Preloader -->
<script src="preloader.js"></script>

<!-- Navbar scroll effect -->
<script>
window.addEventListener('scroll', function() {
  var nav = document.getElementById('mainNav');
  if (window.scrollY > 50) {
    nav.classList.add('scrolled');
  } else {
    nav.classList.remove('scrolled');
  }

  var btn = document.getElementById('backToTop');
  if (window.scrollY > 300) {
    btn.classList.add('visible');
  } else {
    btn.classList.remove('visible');
  }
});

// Hamburger toggle
document.getElementById('navToggler').addEventListener('click', function() {
  document.getElementById('mobileNav').classList.toggle('open');
});

function closeMobileNav() {
  document.getElementById('mobileNav').classList.remove('open');
}
</script>

<!-- Modal triggers -->
<script>
var get_ads = localStorage.getItem("ads");
if (typeof get_ads === 'undefined' || get_ads === null) {
  $(window).on('load', function() {
    setTimeout(function() { $('#myModal').modal('show'); }, 7000);
  });
  localStorage.setItem("ads", "active");
}

function loginer_round() { $('#loginer_round').modal('show'); }
function smart_cart()    { $('#smart_cart').modal('show'); }
function myFunctionsnack1() {
  $('#myModal').modal('hide');
  $('#smart_cart').modal('hide');
}

function gov_agencies() {
  $('#gov_agents').css({ display: 'flex' }).fadeIn(200);
}

function queryNow() {
  var username = $(event.target).data('username');
  queryBot('switch to ' + username);
  insertChat("local", 'switch to ' + username);
  $('#gov_agents').fadeOut(200);
}

$(document).ready(function() {
  $('#gov_agents').hide();
  $('#searchInput').on('keyup', function() {
    var value = $(this).val().toLowerCase();
    $('#agencyList .agency-item').each(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
  $('.agency-item').on('mouseenter', function() {
    $(this).css('background-color', '#dbeafe');
  }).on('mouseleave', function() {
    $(this).css('background-color', '#fff');
  });
});
</script>

<!-- Hero button handlers -->
<script>
function myFunction_nubuz() { maximizeo(); queryBot("hello"); insertChat("local", "Hello"); }

function myFunction_logino() {
  maximizeo(); hide_sleek();
  var x = "Find a Business";
  insertChat("local", x); queryBot(x);
}

function myFunction_datano() {
  maximizeo(); hide_sleek();
  var x = "Get Data";
  insertChat("local", x); queryBot(x);
}

function myFunction_loginod() {
  $('.QuickHelp-inner-box-chat').show(); hide_sleek();
  var x = "Get airtime";
  insertChat("local", x); queryBot(x);
}

function myFunction_shower() { /* show hero */ }
function myFunction_clearer() { /* clear state */ }
function myFunction_internship() { loginer_round(); }

function sendMessage() {
  var txt = document.getElementById('speech').value.trim();
  if (txt !== '') {
    insertChat('local', txt);
    document.getElementById('speech').value = '';
    var coords = localStorage.getItem("coordinates");
    if (['geolocate','nearby','locate','around me','close by','neighbourhood','neighborhood'].some(function(k){ return txt.indexOf(k) >= 0; }) && coords) {
      queryBot(txt + '(' + coords + ')');
    } else {
      queryBot(txt);
    }
  }
}

// Enter key sends message
document.getElementById('speech').addEventListener('keydown', function(e) {
  if (e.key === 'Enter' && !e.shiftKey) {
    e.preventDefault();
    sendMessage();
  }
});
</script>

<!-- QuickBuy shop logic (fully preserved) -->
<script>
var QC_KEY    = 'ck_38a821b39ea6b20845beb73182f4138da94c36a9';
var QC_SECRET = 'cs_4634b84486d74c99e0541b1a138577849be31c09';
var QC_BASE   = 'https://quickhelp.com.ng/quickcommerce/wp-json/wc/v3';

var selectedCommunityId   = '';
var selectedCommunityName = '';
var selectedAgentId       = null;
var selectedAgentWhatsApp = null;

window.updateClearButtonVisibility = function() {
  var val = $('#search-box').val().trim();
  $('.clear-search').toggle(val !== '');
};

window.filterItems = function(searchTerm) {
  var search = (searchTerm !== undefined ? searchTerm : $('#search-box').val()).toLowerCase().trim();
  var catId  = String($('#category-filter').val() || '');
  $('#item-list li').each(function() {
    var name    = String($(this).data('name') || '').toLowerCase();
    var itemCat = String($(this).data('category') || '');
    var matchSearch = (search === '') || (name.indexOf(search) > -1);
    var matchCat    = (catId  === '') || (itemCat === catId);
    $(this).toggle(matchSearch && matchCat);
  });
};

$(document).ready(function() {
  $('#smart_cart').on('show.bs.modal', function() {
    if ($('#community-filter option').length > 1) return;
    loadCommunities();
  });

  function loadCommunities() {
    $.getJSON(QC_BASE + '/communities?consumer_key=' + QC_KEY + '&consumer_secret=' + QC_SECRET, function(communities) {
      var sel = $('#community-filter');
      sel.find('option:not(:first)').remove();
      if (!Array.isArray(communities) || communities.length === 0) {
        sel.append($('<option>', { value: '', text: 'No communities available' }));
        return;
      }
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
    }).fail(function() { console.warn('Failed to load communities'); });
  }

  $('#community-filter').on('change', function() {
    selectedCommunityId   = $(this).val();
    selectedCommunityName = $(this).find('option:selected').data('name') || '';
    selectedAgentId       = null;
    selectedAgentWhatsApp = null;
    $('#item-list').empty().hide();
    $('#shop-empty').hide();
    $('#search-box').val('');
    $('#category-filter').find('option:not(:first)').remove();
    if (!selectedCommunityId) {
      $('#category-wrapper').hide(); $('#search-wrapper').hide(); $('#community-info').hide();
      return;
    }
    $('#community-info').text('Shopping from: ' + selectedCommunityName).show();
    loadCategories(selectedCommunityId);
    loadProducts(selectedCommunityId, '');
  });

  $('#category-filter').on('change', function() { filterItems($('#search-box').val().trim()); });

  $('#search-box').off('input').on('input', function() {
    updateClearButtonVisibility();
    filterItems($(this).val().trim());
  });

  $(document).off('click', '.clear-search').on('click', '.clear-search', function() {
    $('#search-box').val('');
    updateClearButtonVisibility();
    filterItems('');
  });

  function loadCategories(communityId) {
    var url = QC_BASE + '/categories?consumer_key=' + QC_KEY + '&consumer_secret=' + QC_SECRET + '&per_page=100&community_id=' + communityId;
    $.getJSON(url, function(cats) {
      var sel = $('#category-filter');
      sel.find('option:not(:first)').remove();
      if (Array.isArray(cats) && cats.length > 0) {
        $.each(cats, function(i, cat) { sel.append($('<option>', { value: String(cat.id), text: cat.name })); });
        $('#category-wrapper').show();
      }
    });
  }

  function loadProducts(communityId, agentId) {
    $('#shop-loading').show(); $('#item-list').hide(); $('#shop-empty').hide(); $('#search-wrapper').hide();
    var url = QC_BASE + '/products?consumer_key=' + QC_KEY + '&consumer_secret=' + QC_SECRET + '&per_page=100&status=publish&community_id=' + communityId;
    if (agentId) url += '&agent_id=' + agentId;
    $.getJSON(url, function(products) {
      $('#shop-loading').hide(); $('#item-list').empty();
      var published = [];
      $.each(products, function(i, p) {
        if (p.status === 'publish' && p.name.indexOf('AUTO-DRAFT') === -1) published.push(p);
      });
      if (published.length === 0) { $('#shop-empty').show(); return; }
      $.each(published, function(i, p) {
        var price      = parseFloat(p.price) || 0;
        var cleanPrice = Math.round(price);
        var formatted  = '₦' + cleanPrice.toLocaleString();
        var imgSrc     = (p.images && p.images[0]) ? p.images[0].src : '';
        var catId      = (p.categories && p.categories[0]) ? String(p.categories[0].id) : '0';
        var name       = p.name;
        var li = $('<li>').addClass('product-item').attr('data-id', p.id).attr('data-name', name).attr('data-price', cleanPrice).attr('data-category', catId);
        var imgHtml = imgSrc
          ? '<div class="product-image-container" onmousemove="moveImage(event,this)"><img loading="lazy" src="' + imgSrc + '" alt="' + name + '" class="product-image"><img loading="lazy" src="' + imgSrc + '" alt="' + name + '" class="product-image-large"></div>'
          : '<div style="width:44px;height:44px;margin-right:10px;background:rgba(255,255,255,0.1);border-radius:0.5rem;"></div>';
        li.html(imgHtml + '<div class="product-info">' + name + ' | ' + formatted + '<input type="number" min="1" value="1" class="quantity-input" onclick="event.stopPropagation()"></div>');
        $('#item-list').append(li);
      });
      $('#item-list').show(); $('#search-wrapper').show();
      bindProductClicks(); bindTouchEvents();
    }).fail(function() { $('#shop-loading').hide(); $('#shop-empty').text('Failed to load products. Please try again.').show(); });
  }

  function bindProductClicks() {
    $('#item-list').off('click', 'li').on('click', 'li', function(e) {
      if ($(e.target).hasClass('quantity-input')) { e.stopPropagation(); return; }
      var itemPrice = parseFloat($(this).data('price'));
      var quantityInput = $(this).find('.quantity-input');
      var quantity = parseInt(quantityInput.val()) || 1;
      var itemName = $(this).data('name');
      var itemId   = $(this).data('id');
      var cartItem = $('#cart li').filter(function() { return $(this).data('name') === itemName; });
      if (cartItem.length === 0) {
        var li = $('<li>' + itemName + ' ₦' + (itemPrice * quantity).toFixed(2) + ' <strong>' + quantity + '</strong><span class="remove-button"> Remove</span>');
        li.data('quantity', quantity).data('price', itemPrice).data('name', itemName).data('id', itemId);
        $('#cart').append(li);
      } else {
        var newQty = parseInt(quantityInput.val()) + 1;
        quantityInput.val(newQty);
        cartItem.data('quantity', newQty);
        cartItem.html(itemName + ' ₦' + (itemPrice * newQty).toFixed(2) + '<strong>' + newQty + '</strong><span class="remove-button"> Remove</span>');
      }
      updateTotalCost();
    });
  }

  function bindTouchEvents() {
    if (window.innerWidth > 767) return;
    $('#item-list .product-image-container').each(function() {
      var c = this;
      c.addEventListener('touchstart', function(e) { e.preventDefault(); this.classList.add('touched'); moveImage(e, this); });
      c.addEventListener('touchend',  function() { this.classList.remove('touched'); });
      c.addEventListener('touchmove', function(e) { moveImage(e, this); });
    });
  }

  function updateTotalCost() {
    var total = 0, count = 0;
    $('#cart li').each(function() {
      var q = parseInt($(this).data('quantity')) || 0;
      var p = parseFloat($(this).data('price')) || 0;
      total += q * p; count += q;
    });
    var fmt = total.toLocaleString('en-US', { style:'currency', currency:'NGN', minimumFractionDigits:2 });
    $('#total-cost').text(fmt); $('#total-cost2').text(fmt);
    $('#cart-count').text(count);
    $('#share-button').prop('disabled', count === 0);
  }

  $('#cart').on('click', '.remove-button', function() { $(this).parent().remove(); updateTotalCost(); });
  $('#clear-cart-button2').on('click', function() { $('#cart').empty(); updateTotalCost(); });

  $('#share-button').on('click', function() {
    var $btn = $(this);
    if ($btn.prop('disabled')) return;
    if (!selectedCommunityId) { alert('Please select a community first.'); return; }
    $btn.text('Processing...').prop('disabled', true).css({ backgroundColor:'#f59e0b', cursor:'wait' });
    var totalCost = 0, orderDetails = [];
    var orderNumber = 'QH-' + Date.now().toString(36).toUpperCase() + '-' + Math.floor(1000 + Math.random() * 9000);
    var whatsappMsg = '*My QuickHelp Order*: ' + orderNumber + '\nCommunity: ' + selectedCommunityName + '\n\n';
    var userPhone = localStorage.getItem('userPhone') || '';
    var firstName = localStorage.getItem('didiname') || '';
    var email     = localStorage.getItem('email') || '';
    var lastName  = localStorage.getItem('lastname') || '';
    $('#cart li').each(function() {
      var name  = $(this).data('name');
      var price = parseFloat($(this).data('price'));
      var qty   = parseInt($(this).data('quantity')) || 1;
      var id    = $(this).data('id');
      if (!name || isNaN(price)) return;
      whatsappMsg += name + ' - ₦' + (price * qty).toFixed(2) + ' (' + qty + ')\n';
      orderDetails.push({ id:id, name:name, price:price, quantity:qty, firstname:firstName, lastname:lastName, email:email, phone:userPhone });
      totalCost += price * qty;
    });
    if (!orderDetails.length) { alert('Your cart is empty!'); resetBtn($btn); return; }
    var delivery = 1000, grandTotal = totalCost + delivery;
    whatsappMsg += '\n*Items total: ₦' + totalCost.toLocaleString() + '*';
    whatsappMsg += '\nDelivery: ₦' + delivery.toLocaleString();
    whatsappMsg += '\n*Grand total: ₦' + grandTotal.toLocaleString() + '*';
    var waNumber = selectedAgentWhatsApp || '2348038615445';
    $.ajax({
      url: 'send-order-nu.php', type: 'POST',
      data: { orderDetails: JSON.stringify(orderDetails), deliveryCost: delivery, orderNumber: orderNumber, totalCost: grandTotal, community_id: selectedCommunityId, agent_id: selectedAgentId || '' },
      success: function(response) {
        if (response && response.agent_whatsapp) {
          waNumber = response.agent_whatsapp.replace(/\D/g, '');
          if (waNumber.charAt(0) === '0') waNumber = '234' + waNumber.slice(1);
        }
        $btn.text('Order Placed ✓').css({ backgroundColor:'#10b981' });
        $('#cart').empty(); updateTotalCost();
        $('<div class="success-toast">Opening WhatsApp...</div>').appendTo('body').fadeIn(400).delay(1800).fadeOut(400, function() { $(this).remove(); });
        setTimeout(function() { window.open('https://wa.me/' + waNumber + '?text=' + encodeURIComponent(whatsappMsg), '_blank'); }, 2000);
        setTimeout(function() { resetBtn($btn); }, 4500);
      },
      error: function() { alert('Failed to place order. Please try again.'); resetBtn($btn); }
    });
  });

  function resetBtn($btn) {
    var hasItems = $('#cart li').length > 0;
    $btn.text('Place Order').prop('disabled', !hasItems).css({ backgroundColor: hasItems ? '#28a745' : '#dc3545', color:'#fff', cursor:'pointer' });
  }
});

function moveImage(e, container) {
  var largeImage = container.querySelector('.product-image-large');
  if (!largeImage) return;
  var x = e.clientX, y = e.clientY;
  if (e.type === 'touchstart' || e.type === 'touchmove') { x = e.touches[0].clientX; y = e.touches[0].clientY; }
  largeImage.style.left = (x + 20) + 'px';
  largeImage.style.top  = (y - 200) + 'px';
}
</script>

<!-- TxtType typewriter (fallback) -->
<script>
var TxtType = function(el, toRotate, period) {
  this.toRotate = toRotate; this.el = el; this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000; this.txt = '';
  this.tick(); this.isDeleting = false;
};
TxtType.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];
  this.txt = this.isDeleting ? fullTxt.substring(0, this.txt.length - 1) : fullTxt.substring(0, this.txt.length + 1);
  this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';
  var that = this;
  var delta = 200 - Math.random() * 100;
  if (this.isDeleting) delta /= 2;
  if (!this.isDeleting && this.txt === fullTxt) { delta = this.period; this.isDeleting = true; }
  else if (this.isDeleting && this.txt === '') { this.isDeleting = false; this.loopNum++; delta = 500; }
  setTimeout(function() { that.tick(); }, delta);
};
</script>

</body>
</html>
