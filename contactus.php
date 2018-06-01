<?php

$my_email = "info@ehstconference.com";

$name=$_POST['Name'];
$email=$_POST['Email'];
$message=$_POST['Message'];
$subject=$_POST['Subject'];
$headers = "From: " . $_POST['Email'];
$captcha = false;

// check if not robot
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
$captcha = true;
$secret = '6LdNFyMTAAAAALeli_StSBq6p3yY5Mr0K84yGACe';
//get verify response data
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);
if(!($responseData->success))
$errors[] = 'We could not verify your CAPTCHA entry. Please try again.';
else 
mail($my_email,$subject,$message,$headers);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noarchive">
<meta name="description" content="">
<meta name="keywords" content="solar thermal energy, solar cell theory and applications, biomass, biofuel, bioenergy, smart buildings, smart lightings, wind energy, geothermal energy, wave energies, tide energies, nuclear energies, prospects, issues, battery energy storage, energy storage, hydroenergy, energy financing, energy companies challenges, energy distribution, energy conversion, electric vehicles, fossil fuels, energy change, climate change, energy pollution, environmental pollution, energy, nanotechnology, low carbon technologies, energy infrastructures, marketing, economy, societal aspects, global energy policy, energy and transportation, sustainable energy, energy efficiency-achievements and challenges, energy management, fuel cells, Battery Energy Storage, Biomass, Biofuel, and Bioenergy, Energy and Climate Change, Energy and Environmental Pollution, Energy and Nanotechnology, Energy and Societal Aspects, Energy and Transportation, Energy Companies Challenges, Energy Conversion, Energy Distribution, Energy Efficiency-Achievements and Challenges, Energy Financing, Energy Infrastructures, Marketing and Economy, Energy Management, Energy Storage, Electric Vehicles, Fossil Fuels, Fuel Cells, Geothermal Energy, Global Energy Policy, Hydroenergy, Low Carbon Technologies, Nuclear Energies, Prospects and Issues, Smart Buildings, Smart Lightings, Solar Cell Theory and Applications, Solar Thermal Energy, Sustainable Energy, Wave and Tide Energies, biomass, biofuel, bioenergy, solar cell, nuclear energy, energy efficiency, climate change, global warming, fossil fuels, tidal energy, ocean energy, wave energy, energy management, energy harvesting, numerical simulation, heat transfer, heat source, microchannel, industrial heat transfer, experimental heat transfer, numerical heat transfer, renewable energy, non-renewable energy, two phase flow and heat transfer, multiphase flow and heat transfer, combustion, boiler, heater, furnace, conservation equations, natural convection, force convection, conduction, radiation, convection, free convection, non Newtonian heat transfer, non Newtonian fluid flow and heat transfer, heat pipe, bioenergy, wind turbine, heat recovery, thermal elecric, high temperature heat transfer, energy storage, transport phenomena, turbomachinary, MDS, thermodynamics, thermophysical properties, DNS, direct numerical simulation, clean energy, green energy, battery, energy storage, water energy, offshore wind, onshore wind, advanced building, smart grid technologies, smart cities, electric vehicle, energy distribution, Innovative energy technologies, utilities, oil and gas, alternative energy, fossil fuels, heat, light, power, power plant, steam turbine, gas turbine, electrical grid, smart grid, natural gas, natural gas transport, LIQUEFIED NATURAL GAS, CNG, LNG, natural gas storage, fission, fussion, solar PV, PV, refinery, heavy oil, refining, light oil, COAL LIQUEFACTION, waste to energy, Pyrolysis, energy harvesting, Photovoltaic, petroleum, energy harvesting conference, Biomass/Biofuel energy,materials and technologies, Hydro energy, materials and technologies, Wind energy resources and technologies, Solar cells energy, materials and technologies, Fuel cells materials and hydrogen energy, Battery materials and technologies, Energy storage techniques, Energy conversion modules, Nanotechnology and energy, Green buildings, Energy process and system simulation, modelling and optimization, Advanced power generation, transmission and automation, Distributed energy systems, Energy efficiency improvement, Thermodynamic and energy optimization, Energy education, Energy, Environment and Sustainable Development, Economic aspects of energy, Clean Energy Market and Finance, Energy policies, Renewable energy resources, Sustainable energy production, Environmental risk management, Green buildings, Energy storage, Energy management, Biomass and biofuels, Waste to energy, Processing of oil and gas, CO2 capturing and management, Pipelines, Energy efficiency, Smart grids, Energy, Energy and transport, Case studies, Energy Demand and Economic Growth, Energy Research and Development, Non-fossil Fuel Energy: Renewables and Nuclear, Energy Efficiency and Storage, Financial Markets and Energy Markets, Political Economy, OPEC’s Role in a Changing Energy World, Energy Supply and Economic Growth, Energy and the Environment, International Energy Markets, Energy Research and Development, Public Understanding of and Attitudes towards Energ, Petroleum Economics, Geopolitics of Energy, Energy Markets and Regulation, Challenges in Gas Supply and Transportation, Regional Energy Markets, Energy Policy for Sustainable Development, Energy Supply, Demand and Economic Growth, Regional Electricity Trade, Energy Efficiency and Storage, Regional Strategies for Alternative and Renewable Energy, Oil and Gas investments in a low price scenario;, Regional Impact of the Unconventional Oil and Gas Revolution;, Renewable energy diffusion: Policies and implications;, The geopolitics of oil and natural gas;, The utilities of the future;, Energy supply security;, Energy and development: poverty and sustainability;, Energy technology and innovation policy in Latam, Energy efficiency policy in Latam, Energy Integration, Energy Transition, Energy and Climate Change, Transportation and Mobility, Energy Modelling, Future of Nuclear Power, Energy and Macroeconomics, Fiscal Impacts of the energy sector, Energy Subsidies, Power Systems, Power Electronics, Machines, Electromechanics, and Drives, Renewable Energy Technologies, Energy Markets and Demand Response">
<title>EHST'19 - Contact Us</title>

<meta name="handheldfriendly" content="true">
<meta name="mobileoptimized" content="240">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="../css/style.css" rel="stylesheet">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,400i,700" rel="stylesheet"><link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<!--[if IE-9]><html lang="en" class="ie9"><![endif]-->

<script src="../js/modernizr.custom.63321.js"></script>
<script>
  (function() {
    var cx = '016656741306535874023:g8kygswhpfc';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
</head>

<body>
<nav id="slide-menu">
  <h1>EHST'19</h1>
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="../papers">Submissions</a></li>
    <li><a href="../program">Program</a></li>
    <li><a href="../dates">Important Dates</a></li>
    <li><a href="../registration">Registration</a></li>
    <li><a href="../committee">Committee</a></li>
    <li><a href="../keynote">Keynotes</a></li>
    <li><a href="../venue">Venue</a></li>
    <li><a href="../accommodation">Accommodation</a></li>
    <li><a href="../past-events">Past Events</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<div id="content">
  <div class="desktop">
  <div class="cbp-af-header">
  <div class="cbp-af-inner">
    <a href="/"><img src="../img/logo.png" class="flex-logo"></a>
      <nav>
        <a href="/">Home</a><p class="dot">&middot;</p><a href="../papers">Submissions</a><p class="dot">&middot;</p><a href="../program">Program</a><p class="dot">&middot;</p><a href="../dates">Important Dates</a><p class="dot">&middot;</p><a href="../registration">Registration</a><p class="dot">&middot;</p><a href="../committee">Committee</a><p class="dot">&middot;</p><a href="../keynote">Keynotes</a><p class="dot">&middot;</p><a href="../venue">Venue</a><p class="dot">&middot;</p><a href="../accommodation">Accommodation</a><p class="dot">&middot;</p><a href="../past-events">Past Events</a><p class="dot">&middot;</p><a href="#contact">Contact</a>
    </nav>
  </div>
</div>
</div>

  <header>
    <div class="mobile">
      <div class="cbp-af-header">
  <div class="cbp-af-inner">
    <div class="unit unit-s-3-4 unit-m-1-3 unit-l-1-3">
          <a href="/"><img src="../img/logo.png" class="flex-logo"></a>
      </div>
      <div class="unit unit-s-1-3 unit-m-2-3 unit-m-2-3-1 unit-l-2-3">
          <div class="menu-trigger"></div>
      </div>
  </div>
</div>
        <div class="bg">
          <h1>3<sup>rd</sup> International Conference on Energy<br>Harvesting, Storage, and Transfer (EHST'19)</h1>
          <p class="subhead">June 17 - 19, 2019 | Ottawa, Canada</p>

          <a href="../papers" class="bg-link">Submissions</a> <p class="dot">&middot;</p> <a href="../dates" class="bg-link">Important Dates</a> <p class="dot">&middot;</p> <a href="../registration" class="bg-link">Registration</a>

        <div class="searchbox grid">
        <div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
          <div class="unit unit-s-1 unit-m-1-4-2 unit-l-1-4-2">
            <p class="body">Search:</p> 
          </div>
 <div class="unit unit-s-3-4 unit-m-3-4 unit-l-3-4">
        <gcse:searchbox-only resultsUrl="../results"></gcse:searchbox-only>
  </div>
</div>
</div>

        </div>
    </div>

    <div class="desktop">
      <div class="grid">
        <div class="unit unit-s-1 unit-m-1 unit-l-1">
        <div class="bg-img">
          <img src="../img/header.jpg" class="flex-img" alt="Header">
        </div>

        <div class="bg">
          <h1>3<sup>rd</sup> International Conference on Energy<br>Harvesting, Storage, and Transfer (EHST'19)</h1>
          <p class="subhead">June 17 - 19, 2019 | Ottawa, Canada</p>

          <a href="../papers" class="bg-link">Submissions</a> <p class="dot">&middot;</p> <a href="../dates" class="bg-link">Important Dates</a> <p class="dot">&middot;</p> <a href="../registration" class="bg-link">Registration</a>

        <div class="searchbox grid">
        <div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
          <div class="unit unit-s-1 unit-m-1-4-2 unit-l-1-4-2">
            <p class="body">Search:</p> 
          </div>
 <div class="unit unit-s-3-4 unit-m-3-4 unit-l-3-4">
        <gcse:searchbox-only resultsUrl="../results"></gcse:searchbox-only>
  </div>
</div>
</div>

        </div>
        </div> 
      </div>
    </div>
  </header>

  <div class="grid main-content">
  <div class="unit unit-s-1 unit-m-1-3-1 unit-l-1-3-1">
    <div class="unit-spacer">
     
    </div>
  </div>

<div class="unit unit-s-1 unit-m-1-4-1 unit-l-1-4-1">
  <div class="unit-spacer content">
    <p class="body">We have received your message and we will try our best to get back to you within the next 48 hours.<br><br>
    Thank you for your interest in EHST'19.</p>
  </div>
</div>

  <div class="unit unit-s-1 unit-m-1-3-1 unit-l-1-3-1">
  <div class="unit-spacer">

  </div>
  </div>
</div>

<footer id="contact">
  <div class="grid">
  <div class="unit unit-s-1 unit-m-1-3 unit-l-1-3">
  <div class="unit-spacer">
    <h2>Contact Us</h2>
    <p class="body">International ASET Inc.<br>
    Unit No. 104, 2442 St. Joseph Blvd.<br>
    Orl&eacute;ans, Ontario, Canada<br>
    Postal Code: K1C 1G1<br>
    +1-613-834-9999<br>
    <a href="mailto:info@ehstconference.com">info@ehstconference.com</a></p>
    </div>
  </div>

  <div class="unit unit-s-1 unit-m-2-3 unit-l-2-3 contact">
  <div class="unit-spacer">
  <p class="body">For questions or comments regarding EHST'19, please fill out the form below:</p>

  <form action="../contactus.php" method="post" enctype="multipart/form-data" name="ContactForm" class="cf">
  <div class="half left cf">
    <input style="margin-bottom:0.85em" type="text" name="Name" id="Name" placeholder="Name" required>
    <input style="margin-bottom:0.85em" type="email" name="Email" id="Email" placeholder="Email address" required>
    <input type="text" name="Subject" id="Subject" placeholder="Subject" required>
  </div>
  <div class="half right cf">
    <textarea name="Message" type="text" rows="5" name="Message" id="Message" placeholder="Message" required></textarea>
  </div><br><br>
  <center class="full right cf"><div class="g-recaptcha" data-sitekey="6LdNFyMTAAAAALmwB-BoYkJshhMcclJ0ESSBdc5Q"></div></center>
  <div class="cf">
  <center><div class="full right cf"><input type="submit" name="Submit" value="Submit">
    <input type="reset" name="Reset" value="Reset"></center></div>
</div></div></form>


    </div>
  </div>
  </div>
</footer> 

<div class="copyright">
  <a href="http://international-aset.com">International ASET Inc.</a> | <a href="http://international-aset.com/phplistpublic/?p=subscribe&id=1">Subscribe</a> | <a href="../terms">Terms of Use</a> | <a href="../sitemap">Sitemap</a>
  <p class="body">© Copyright <script>document.write(new Date().getFullYear())</script>, International ASET Inc. – All Rights Reserved.</p>
  <p class="copyright1">Have any feedback? Please provide them here: <script>var refURL = window.location.protocol + "//" + window.location.host + window.location.pathname; document.write('<a href="http://international-aset.com/feedback/?refURL=' + refURL+'" class="body-link">Feedback</a>');</script></p>
</div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="../js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="../js/jquery.calendario.js"></script>
    <script type="text/javascript" src="../js/data.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
  <script src="../js/jquery.liquid-slider.min.js"></script>  
  <script src="../js/classie.js"></script>
    <script src="../js/cbpAnimatedHeader.min.js"></script>
    <script src="../js/SpryValidationSelect.js" type="text/javascript"></script>

    <script src="../js/SpryValidationTextField.js" type="text/javascript"></script>

    <script src="../js/SpryValidationConfirm.js" type="text/javascript"></script>

    <script src="../js/SpryValidationCheckbox.js" type="text/javascript"></script>
    <script src="../js/SpryValidationTextarea.js" type="text/javascript"></script>

    <script type="text/javascript">
/*
  Slidemenu
*/
(function() {
  var $body = document.body
  , $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

  if ( typeof $menu_trigger !== 'undefined' ) {
    $menu_trigger.addEventListener('click', function() {
      $body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
    });
  }

}).call(this);
</script>

    <script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {isRequired:false});

var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");

var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");

var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");

var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");

var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"-1"});

var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "email");

var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");

var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {invalidValue:"-1", isRequired:false});

var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "date", {format:"mm/dd/yyyy"});

var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
</script>


    <script type="text/javascript"> 
      $(function() {
      
        var transEndEventNames = {
            'WebkitTransition' : 'webkitTransitionEnd',
            'MozTransition' : 'transitionend',
            'OTransition' : 'oTransitionEnd',
            'msTransition' : 'MSTransitionEnd',
            'transition' : 'transitionend'
          },
          transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
          $wrapper = $( '#custom-inner' ),
          $calendar = $( '#calendar' ),
          cal = $calendar.calendario( {
            onDayClick : function( $el, $contentEl, dateProperties ) {

              if( $contentEl.length > 0 ) {
                showEvents( $contentEl, dateProperties );
              }

            },
            caldata : codropsEvents,
            displayWeekAbbr : true
          } ),
          $month = $( '#custom-month' ).html( cal.getMonthName() ),
          $year = $( '#custom-year' ).html( cal.getYear() );

        $( '#custom-next' ).on( 'click', function() {
          cal.gotoNextMonth( updateMonthYear );
        } );
        $( '#custom-prev' ).on( 'click', function() {
          cal.gotoPreviousMonth( updateMonthYear );
        } );

        function updateMonthYear() {        
          $month.html( cal.getMonthName() );
          $year.html( cal.getYear() );
        }

        // just an example..
        function showEvents( $contentEl, dateProperties ) {

          hideEvents();
          
          var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
            $close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

          $events.append( $contentEl.html() , $close ).insertAfter( $wrapper );
          
          setTimeout( function() {
            $events.css( 'top', '0%' );
          }, 25 );

        }
        function hideEvents() {

          var $events = $( '#custom-content-reveal' );
          if( $events.length > 0 ) {
            
            $events.css( 'top', '100%' );
            Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

          }

        }
      
      });
    </script>

        <script>
    $('#main-slider').liquidSlider();
  </script>
  <script>
(function($){
        $(window).load(function(){
            $("html").niceScroll();
        });
    })(jQuery);
</script>
</body>
</html>