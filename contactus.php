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
<title>EHST'17 - Contact Us</title>

<meta name="handheldfriendly" content="true">
<meta name="mobileoptimized" content="240">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="../css/style.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
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
  <h1>EHST'17</h1>
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="../papers">Paper Submissions</a></li>
    <li><a href="../program">Program</a></li>
    <li><a href="../dates">Important Dates</a></li>
    <li><a href="../registration">Registration</a></li>
    <li><a href="../committee">Committee</a></li>
    <li><a href="../keynote">Keynotes</a></li>
    <li><a href="../sponsor">Sponsors</a></li>
    <li><a href="../venue">Venue</a></li>
    <li><a href="../accommodation">Accommodation</a></li>
    <li><a href="../symposium">Symposiums</a></li>
    <li><a href="#contact">Contact Us</a></li>
  </ul>
</nav>

<div id="content">
  <div class="desktop">
  <div class="cbp-af-header">
  <div class="cbp-af-inner">
    <a href="/"><img src="../img/logo.png" class="flex-logo"></a>
      <nav>
        <a href="/">Home</a><p class="dot">&middot;</p><a href="../papers">Paper Submission</a><p class="dot">&middot;</p><a href="../program">Program</a><p class="dot">&middot;</p><a href="../dates">Important Dates</a><p class="dot">&middot;</p><a href="../registration">Registration</a><p class="dot">&middot;</p><a href="../committee">Committee</a><p class="dot">&middot;</p><a href="../keynote">Keynotes</a><p class="dot">&middot;</p><a href="../sponsor">Sponsors</a><p class="dot">&middot;</p><a href="../venue">Venue</a><p class="dot">&middot;</p><a href="../accommodation">Accommodation</a><p class="dot">&middot;</p><a href="../symposium">Symposiums</a><p class="dot">&middot;</p><a href="#contact">Contact Us</a>
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
          <h1>International Conference on Energy<br>Harvesting, Storage, and Transfer (EHST'17)</h1>
          <p class="subhead">August 21 - 23, 2017 | Toronto, Canada</p>

          <a href="../papers" class="bg-link">Paper Submission</a> <p class="dot">&middot;</p> <a href="../dates" class="bg-link">Important Dates</a> <p class="dot">&middot;</p> <a href="../registration" class="bg-link">Registration</a>

        <div class="searchbox grid">
        <div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
          <div class="unit unit-s-1 unit-m-1-4-2 unit-l-1-4-2">
            <p class="body">Search:</p> 
          </div>
 <div class="unit unit-s-3-4 unit-m-3-4 unit-l-3-4">
        <gcse:searchbox-only resultsUrl="../results"></gcse:searchbox-only>
  </div>
</div>
</div><br>
      <p class="body" style="text-align: center!important;">For more information about the EHST'17 Conference, please view the <b><a href="http://ffhmt.com/FFHMT17_EHST17_CFP.pdf" class="body-link">conference flyer</a></b>.</p>

        </div>
    </div>

    <div class="desktop">
      <div class="grid">
        <div class="unit unit-s-1 unit-m-1 unit-l-1">
        <div class="bg-img">
          <img src="../img/header.jpg" class="flex-img" alt="Header">
        </div>

        <div class="bg">
          <h1>International Conference on Energy<br>Harvesting, Storage, and Transfer (EHST'17)</h1>
          <p class="subhead">August 21 - 23, 2017 | Toronto, Canada</p>

          <a href="../papers" class="bg-link">Paper Submission</a> <p class="dot">&middot;</p> <a href="../dates" class="bg-link">Important Dates</a> <p class="dot">&middot;</p> <a href="../registration" class="bg-link">Registration</a>

        <div class="searchbox grid">
        <div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
          <div class="unit unit-s-1 unit-m-1-4-2 unit-l-1-4-2">
            <p class="body">Search:</p> 
          </div>
 <div class="unit unit-s-3-4 unit-m-3-4 unit-l-3-4">
        <gcse:searchbox-only resultsUrl="../results"></gcse:searchbox-only>
  </div>
</div>
</div><br>

      <p class="body" style="text-align: center!important; color: #FFF!important;">For more information about the EHST'17 Conference, please view the <b><a href="http://ffhmt.com/FFHMT17_EHST17_CFP.pdf" class="body-link">conference flyer</a></b>.</p>

        </div>
        </div> 
      </div>
    </div>
  </header>

  <div class="grid main-content">
  <div class="unit unit-s-1 unit-m-1-3-1 unit-l-1-3-1">
    <div class="unit-spacer">
      <h2>Announcements</h2>
      <div id="main-slider" class="liquid-slider">
    <div>
      <h2 class="title">1</h2>
      <p class="bold">EHST 2017:</p>
      <p class="body">EHST 2017 will  be held in Toronto, Canada on August 21 - 23, 2017.</p>

      <p class="bold">CDSR'17 Workshop</p>
      <p class="body">As per popular request, the organizing committee has decided to extend the CDSR'17 congress to three days (now August 21 - 23, 2017). The new high-level schedule is as follows:</p>

      <ul>
        <li>Day 1: Workshop(s) and Registration</li>
        <li>Day 2: Main Track Conference Sessions</li>
        <li>Day 2: Main Track Conference Sessions and Gala dinner or Cruise tour</li>
      </ul>
      
      <p class="body">Registration for the workshop will be 113 CAD (HST included) and separate from the main conferences. Workshop attendees will receive a certificate of participation. For registration, please visit: <a href="../registration" class="body-link">here</a>.</p>

      <p class="body">More information to follow; we greatly appreciate your patience!</p>

    </div>          
    <div>
      <h2 class="title">2</h2>
      <p class="bold">Best Paper Award:</p>
      <p class="body">Two best paper awards will be conferred to author(s) of the papers that receive the highest rank during the peer-review and by the respected session chairs. Please visit <a href="../papers" class="body-link">Paper Submission</a> for more information.</p>
    </div>
    <div>
      <h2 class="title">3</h2>
      <p class="bold">Propose Exhibits, Workshops & More</p>
      <p class="body">EHST attracts a wide range of researchers in the field of energy harvesting, storage, and transfers. As a prominent company in the field of control, dynamic systems and robotics, we would like to offer you an exhibit at EHST. Please visit <a href="../events" class="body-link">Events</a> for more information.</p>
    </div>
  </div>

    </div>
  </div>

<div class="unit unit-s-1 unit-m-1-4-1 unit-l-1-4-1">
  <div class="unit-spacer content">
    <p class="body">We have received your message and we will try our best to get back to you within the next 48 hours.<br><br>
    Thank you for your interest in EHST'17.</p>
  </div>
</div>

  <div class="unit unit-s-1 unit-m-1-3-1 unit-l-1-3-1">
  <div class="unit-spacer">
    <section class="main">
        <div class="custom-calendar-wrap">
          <div id="custom-inner" class="custom-inner">
            <div class="custom-header clearfix">
              <nav>
                <span id="custom-prev" class="custom-prev"></span>
                <span id="custom-next" class="custom-next"></span>
              </nav>
              <h2 id="custom-month" class="custom-month"></h2>
              <h3 id="custom-year" class="custom-year"></h3>
            </div>
            <div id="calendar" class="fc-calendar-container"></div>
          </div>
        </div>
      </section>
  
<h2>Upcoming Dates</h2>

<div class="grid events">
<div class="unit unit-s-1 unit-m-1-4 unit-l-1-4">
  <div class="date">
    <div class="past">Apr. 28, 2017</div>
    Jun. 9, 2017
  </div>
</div>

<div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
  <div class="unit-spacer">
     <div class="past past-text">Extended Paper Submission Deadline</div>
     Final Extended Paper Submission Deadline
  </div>
</div>
</div>

<div class="grid events">
<div class="unit unit-s-1 unit-m-1-4 unit-l-1-4">
  <div class="date">
    <div class="past">May 15, 2017</div>
    Jun. 16, 2017
  </div>
</div>

<div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
  <div class="unit-spacer">
    <div class="past past-text">Extended Notification of Authors</div>
    Final Extended Notification of Authors
  </div>
</div>
</div>

<div class="grid events">
<div class="unit unit-s-1 unit-m-1-4 unit-l-1-4">
  <div class="date">
    <div class="past">May 26, 2017</div>
    Jul. 14, 2017
  </div>
</div>

<div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
  <div class="unit-spacer">
    <div class="past past-text">Final Version of Accepted Submissions Deadline</div>
    Final Version of Accepted Submissions Deadline
  </div>
</div>
</div>
  

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
  <p class="body">For questions or comments regarding EHST'17, please fill out the form below:</p>

    <form action="../contactus.php" method="post" enctype="multipart/form-data" name="ContactForm">
  
  <table border="0" class="contact">
    <tbody>
      <tr>
        <td class="label">Name:</td>
        <td class="text"><span id="sprytextfield1">
              <input name="Name" type="text" id="Name" size="40" autocomplete="off">

              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>

        <tr>
            <td class="label">Email:</td>
            <td class="text"><span id="sprytextfield2">
            <input name="Email" type="text" id="Email" size="40" autocomplete="off">
            <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
          </tr>

          <tr>
            <td class="label">Confirm Email:</td>
             <td class="text"><span id="spryconfirm4">
              <input name="Confirm Email" type="text" id="Confirm Email" size="40" autocomplete="off">
              <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">Emails don't match.</span></span></td>
          </tr>

          <tr>
            <td class="label">Subject:</td>
            <td class="text"><span id="sprytextfield3">
              <input name="Subject" type="text" id="Subject" size="40" autocomplete="off">
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>

          <tr>
            <td valign="top" class="label">Message:</td>
            <td class="text"><span id="sprytextarea1">
              <textarea name="Message" id="Message" cols="31" rows="10" autocomplete="off"></textarea>
              <span class="textareaRequiredMsg">A value is required.</span></span>
              <center>
        <input type="submit" name="Submit" value="Submit" accept="image/jpeg">
        <input type="reset" name="Reset" value="Reset"></center></td>
          </tr>

        </tbody></table><br>

        
</form>
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

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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