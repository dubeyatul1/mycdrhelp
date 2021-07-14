<?php
function getBrowser() {
  $u_agent = $_SERVER['HTTP_USER_AGENT'];
  $bname = 'Unknown';
  $platform = 'Unknown';
  $version= "";
  // First get the platform?
  if (preg_match('/linux/i', $u_agent)) {
    $platform = 'linux';
  } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
    $platform = 'mac';
  } elseif (preg_match('/windows|win32/i', $u_agent)) {
    $platform = 'windows';
  }
  // Next get the name of the useragent yes seperately and for good reason
  if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) {
    $bname = 'Internet Explorer';
    $ub = "MSIE";
  } elseif(preg_match('/Firefox/i',$u_agent)) {
    $bname = 'Mozilla Firefox';
    $ub = "Firefox";
  } elseif(preg_match('/Chrome/i',$u_agent)) {
    $bname = 'Google Chrome';
    $ub = "Chrome";
  } elseif(preg_match('/Safari/i',$u_agent)) {
    $bname = 'Apple Safari';
    $ub = "Safari";
  } elseif(preg_match('/Opera/i',$u_agent)) {
    $bname = 'Opera';
    $ub = "Opera";
  } elseif(preg_match('/Netscape/i',$u_agent)) {
    $bname = 'Netscape';
    $ub = "Netscape";
  }
  // finally get the correct version number
  $known = array('Version', $ub, 'other');
  $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
  if (!preg_match_all($pattern, $u_agent, $matches)) {
    // we have no matching number just continue
  }
  // see how many we have
  $i = count($matches['browser']);
  if ($i != 1) {
    //we will have two since we are not using 'other' argument yet
    //see if version is before or after the name
    if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
      $version= $matches['version'][0];
    } else {
      $version= $matches['version'][1];
    }
  } else {
    $version= $matches['version'][0];
  }
  // check if we have a number
  if ($version==null || $version=="") {$version="?";}
return array(
  'userAgent' => $u_agent,
  'name'      => $bname,
  'version'   => $version,
  'platform'  => $platform,
  'pattern'    => $pattern
  );
}
// now try it
$ua = getBrowser();
$whatsappUrl = 'https://api.whatsapp.com/send?phone=61488858110';
if(($ua['name'] == 'Mozilla Firefox') || ($ua['name'] == 'Apple Safari')){
	$whatsappUrl = 'https://web.whatsapp.com/send?phone=61488858110';
}
//echo '<pre>';
//print_r($ua['name']);


?>
<section class="footer-link-holder">
	<div class="container-fluid">
	<div class="heading-holder"><h2>CDR Report Sample, Career Episode Sample</h2>
			<em>&nbsp;</em>    
     </div>	  	   
		<div class="col-md-3">
		<h3>CDR Sample</h3>
			<ul class="footer_link">
			<li><a href="https://www.mycdrhelp.com/cdr-sample-for-mechanical-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Mechanical Engineers </a></li>
				<li><a href="https://www.mycdrhelp.com/cdr-sample-career-report-episode-chemical-engineer"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chemical Engineers </a></li>
				<li><a href="https://www.mycdrhelp.com/cdr-sample-for-civil-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Civil Engineers </a></li>
				<li><a href="https://www.mycdrhelp.com/cdr-sample-for-electrical-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Electrical Engineers </a></li>
				<li><a href="https://www.mycdrhelp.com/cdr-sample-for-electronics-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Electronics Engineers </a></li>
				<li><a href="https://www.mycdrhelp.com/cdr-sample-for-telecommunications-network-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Telecom Network Engineers </a></li>
				<li><a href="https://www.mycdrhelp.com/cdr-sample-for-aeronautical-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Aeronautical Engineers </a></li>
				<li><a href="https://www.mycdrhelp.com/cdr-sample-for-agricultural-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Agricultural Engineers </a></li>
				<li><a href="https://www.mycdrhelp.com/cdr-sample-for-engineering-manager"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Engineering Manager </a></li>
				<li><a href="https://www.mycdrhelp.com/cdr-sample-for-structural-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Structural Engineers </a></li>
				<li><a href="https://www.mycdrhelp.com/cdr-sample-for-architectural-engineer"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Architectural Engineers </a></li>
			</ul>
		</div>		
	   
	   <div class="col-md-3">
	   <h3>CDR Sample</h3>
			<ul class="footer_link">				
				<li><a href="<?php echo $baseUrl;?>cdr-sample-for-mining-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Mining Engineers </a></li>
				<li><a href="<?php echo $baseUrl;?>cdr-sample-for-naval-architecture"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Naval Architect </a></li>
				<li><a href="<?php echo $baseUrl;?>cdr-sample-for-petroleum-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Petroleum Engineers </a></li>
                <li><a href="<?php echo $baseUrl;?>cdr-sample-for-production-plant-engineer"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Production or Plant Engineers </a></li>
				<li><a href="<?php echo $baseUrl;?>cdr-sample-biomedical-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Biomedical Engineers </a></li>
				<li><a href="<?php echo $baseUrl;?>cdr-sample-career-episode-planners-transport-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Transport Engineers </a></li>
                <li><a href="<?php echo $baseUrl;?>cdr-sample-for-environmental-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Environmental Engineers </a></li>	
                <li><a href="<?php echo $baseUrl;?>cdr-sample-for-geotechnical-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Geotechnical Engineers </a></li>	
                <li><a href="<?php echo $baseUrl;?>cdr-sample-for-industrial-engineers"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Industrial Engineers </a></li>	
                <li><a href="<?php echo $baseUrl;?>cdr-sample-for-materials-engineering"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Materials Engineers </a></li>
                <li><a href="<?php echo $baseUrl;?>cdr-sample-for-mechatronics-engineer"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Mechanotronics Engineers </a></li>					
			</ul>
		</div>			
			<div class="col-md-3">
			<h3>RPL Sample</h3>
			<ul class="footer_link">
			<li><a href="<?php echo $baseUrl;?>rpl-acs-project-report-form-2018-sample"><i class="fa fa-angle-double-right" aria-hidden="true"></i> RPL ACS Project Report Form 2018</a></li>
				<li><a href="<?php echo $baseUrl;?>rpl-computer-network-system-engineer-report-sample"><i class="fa fa-angle-double-right" aria-hidden="true"></i> RPL Computer Network & System Engineer</a></li>
				<li><a href="<?php echo $baseUrl;?>rpl-for-developer-programmer-2018-report-sample"><i class="fa fa-angle-double-right" aria-hidden="true"></i> RPL for Developer Programmer 2018</a></li>
                <li><a href="<?php echo $baseUrl;?>rpl-acs-project-report-form-2018-sample-2"><i class="fa fa-angle-double-right" aria-hidden="true"></i> RPL ACS Project Report Form</a></li>
				<li><a href="<?php echo $baseUrl;?>sample/ICT-BA-RPL-2.pdf"><i class="fa fa-angle-double-right" aria-hidden="true"></i> ICT BA RPL 2 </a></li>
				<li><a href="<?php echo $baseUrl;?>sample/rpl-for-developer-programmer.pdf"><i class="fa fa-angle-double-right" aria-hidden="true"></i> RPL For Developer Programmer </a></li>
				<li><a href="<?php echo $baseUrl;?>sample/ACS-RECOGNITION-OF-PRIOR-LEARNING-RPL-FORM-2017.pdf"><i class="fa fa-angle-double-right" aria-hidden="true"></i> ACS RECOGNITION OF PRIOR LEARNING RPL 2017 </a></li>				
			</ul>
		</div>		
	<div class="col-md-3">
	<h3>KA02 Sample</h3>
			<ul class="footer_link">
				<li><a href="<?php echo $baseUrl;?>KA02-report-sample-electronics-engineer"><i class="fa fa-angle-double-right" aria-hidden="true"></i> KA02 Report Sample Electronics Engineer </a></li>
				<li><a href="<?php echo $baseUrl;?>KA02-report-sample-environmental-engineer"><i class="fa fa-angle-double-right" aria-hidden="true"></i> KA02 Report Sample Environmental Engineer </a></li>
				<li><a href="<?php echo $baseUrl;?>KA02-report-sample-mechanical-engineer"><i class="fa fa-angle-double-right" aria-hidden="true"></i> KA02 Report Sample Mechanical Engineer </a></li>				
			</ul>
		</div>
		
		
	
	</div>
</section>




<section class="address-bar">
<div class="container-fluid">
<div class="col-md-3">
<div class="add_box">
<h2>Australia</h2>
<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
<p>523 Little Collins St,<br>
 Melbourne VIC 3000</p>
<p><strong>Email: <a href="mailto:contact@mycdrhelp.com">contact@mycdrhelp.com</a></strong></p> 
<p><strong>Tel: <a href="tel:+61-3-9088-0350">+61-3-9088-0350</a></strong></p>
</div>
</div>

<div class="col-md-3">
<div class="add_box">
<h2>Saudi Arabia</h2>
<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
<p>Level 13, Al Faisaliah Center <br>
King Fahd Road, Olaya District<br>
Riyadh 11534</p>
<p><strong>Email: <a href="mailto:contact@mycdrhelp.com">contact@mycdrhelp.com</a></strong></p>
<p><strong><i class="fab fa-whatsapp"></i>: <a href="https://api.whatsapp.com/send?phone=97474721052" target="_blank" onClick="ga('send', 'event', { eventCategory: 'whatsup', eventAction: 'click', eventLabel: 'Chat'});"> +974-7472-1052</a></strong></p>
</div>
</div>

<div class="col-md-3">
<div class="add_box">
<h2>New Zealand</h2>
<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
<p>Level 1, 104 Customs Street West<br>
Auckland</p>
<p><strong>Email: <a href="mailto:contact@mycdrhelp.com">contact@mycdrhelp.com</a></strong></p>
<p><strong>Tel: <a href="tel:+64-9-8896504">+64-9-8896504</a></strong></p>
</div>
</div>

<div class="col-md-3">
<div class="add_box last">
<h2>UAE</h2>
<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
<p>P2 Hamriyah Business Center, <br>
Hamriyah Free Zone, Sharjah,<br> 
United Arab Emirates (UAE) 53407<br>
</p>
<p><strong>Email: <a href="mailto:contact@mycdrhelp.com">contact@mycdrhelp.com</a></strong></p>
</div>
</div>


<div class="add_box-1 last">
<p align="center"><strong>Disclaimer :-</strong> We are neither affiliated nor endorsed by Engineering New Zealand, IT Professionals New Zealand ,Engineers Australia and ACS. According to them, clients are responsible for preparing their own KA02/Evidence Documents/CDRs. If you disagree with the services and information presented by MyCDRHelp.com, you should leave this website immediately.</p>
</div>
</div>

<style>
    .paypal-buttons {
            margin: 0 auto !important;
    display: block !important;
    }
    
    .imgpay{
        margin: 7px auto;
        width: 70%;
    }
    
</style>


<!DOCTYPE html>

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <style>
        /* Media query for mobile viewport */
        @media screen and (max-width: 400px) {
            #paypal-button-container {
                width: 100%;
            }
        }
        
        /* Media query for desktop viewport */
        @media screen and (min-width: 400px) {
            #paypal-button-container {
                width: 250px;
            }
        }
    </style>
</head>

<body>
    


<div class="row">
    <div class="col-md-4 col-sm-12 "></div>
    <div class="col-md-4 col-sm-12 ">
    <!--<div id="paypal-button-container" style="margin: 0 auto;"></div>
    <script src="https://www.paypal.com/sdk/js?client-id=AecoPQZU_J2LxdClI78jt0XSJQl__WwdH4is6OXXVKi5tbUIJxWlix-1rk8JoKeX0cZOaDFgajPuaf1g&currency=AUD"></script>

    <script>
        paypal.Buttons().render('#paypal-button-container');
    </script>-->
    <a href="http://paypal.me/mycdrhelp" target="_blank"><img src="images/paypal.png" class="img-responsive imgpay"></a>
    <a href="http://paypal.me/mycdrhelp"  target="_blank"><img src="images/cbd.png" class="img-responsive imgpay"></a>
    </div>
    <div class="col-md-4 col-sm-12 "></div>
</div>
    
</body>
    

<!---<a href="https://www.paypal.me/mycdrhelp" style="margin-left: 50%;top: 50%;left: 50%;border:1px solid;background:blue;padding:10px;color:#fff;" class="btn btn-primary">PAYPAL</a>--->


</section>




	<a href="<?php echo $whatsappUrl ?>" class="float" target="_blank" onClick="ga('send', 'event', { eventCategory: 'whatsup', eventAction: 'click', eventLabel: 'Chat'});">
<i class="fab fa-whatsapp my-float"></i></a>
<div style="float:left;  top: 400px;  width:30px; height:100px; position: fixed; border-radius:4px;">

 <a href="https://www.mycdrhelp.com/order-now">
  <picture>
  <source type="image/webp" data-srcset="<?php echo $baseUrl;?>images/Order-Now-vertical.webp">
  <source type="image/jpeg" data-srcset="<?php echo $baseUrl;?>images/Order-Now-vertical.png">
  <img src="<?php echo $baseUrl;?>images/Order-Now-vertical.png" alt="CDR Writing Help" class="img-responsive lazyload">
</picture>
  </a>
</div>

<footer>
<div class="footer_bottom">
<div  class="container">
<div class="col-md-4"><p>© 2017  My CDR Help. All Rights Reserved.</p></div>
<div class="col-md-4"><img data-src="<?php echo $baseUrl;?>images/payment.png" alt="We Accept Payment By All" class="img-responsive text-center lazyload"></div>	
<div class="col-md-4">
	<ul class="footer_link-small">
		<li><a href="<?php echo $baseUrl;?>refund-policy">Refund Policy </a></li>
		<li><a href="<?php echo $baseUrl;?>terms-conditions">Terms & Conditions </a></li>
	</ul>
	
</div>
</div>
</div>	
</footer>


<script anync src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script anync src="<?php echo $baseUrl;?>js/bootstrap.js" type="text/javascript"></script> 
<script anync src="<?php echo $baseUrl;?>js/jquery.dialogx.js"></script>
<script anync src='<?php echo $baseUrl;?>js/jquery.simplemodal.js'></script>
<script anync src="<?php echo $baseUrl;?>js/aos.js" type="text/javascript"></script> 
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js" ></script>
<script defer src="<?php echo $baseUrl;?>js/all.js"></script>

	<script type="text/javascript" defer>
		$(document).ready(function() {
			// grab the initial top offset of the navigation 
		   	var stickyNavTop = $('.sticky-nav').offset().top;		   	
		   	// our function that decides weather the navigation bar should have "fixed" css position or not.
		   	var stickyNav = function(){
			    var scrollTop = $(window).scrollTop(); // our current vertical position from the top			         
			    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
			    // otherwise change it back to relative
			    if (scrollTop > stickyNavTop) { 
			        $('.sticky-nav').addClass('sticky');
			    } else {
			        $('.sticky-nav').removeClass('sticky'); 
			    }
			};
			stickyNav();
			// and run it again every time you scroll
			$(window).scroll(function() {
				stickyNav();
			});
		});
		
		function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

		function myFunction1() {
    var x = document.getElementById("myTopnav1");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}



	</script>

<!--<script defer>
        $(".message").hide().first().hide();
        setTimeout(showNotifications, 40000);

        function showNotifications() {
            $(".message:visible").remove();
            $(".message:first").show();
            if ($(".message").length > 0) {
                setTimeout(showNotifications, 50000);
            }
        }

    </script>-->
	
<!--Begin Live Chat Code--> <div id="livechat-button-202"></div> <script type="text/javascript" async> var Comm100API=Comm100API||{};(function(t){function e(e){var a=document.createElement("script"),c=document.getElementsByTagName("script")[0];a.type="text/javascript",a.async=!0,a.src=e+t.site_id,c.parentNode.insertBefore(a,c)}t.chat_buttons=t.chat_buttons||[],t.chat_buttons.push({code_plan:202,div_id:"livechat-button-202"}),t.site_id=5000145,t.main_code_plan=202,e("https://vue.livelyhelp.chat/livechat.ashx?siteId="),setTimeout(function(){t.loaded||e("https://vue1.livelyhelp.chat/livechat.ashx?siteId=")},5e3)})(Comm100API||{}) </script> <!--End Live Chat Code-->
