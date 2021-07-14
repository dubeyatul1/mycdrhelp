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
<p><strong>Tel: <a href="tel:+974-7472-1052">+974-7472-1052</a></strong></p>
</div>
</div>

<div class="add_box-1 last">
<p align="center"><strong>Disclaimer :-</strong> We are neither affiliated nor endorsed by Engineering New Zealand, IT Professionals New Zealand ,Engineers Australia and ACS. According to them, clients are responsible for preparing their own KA02/Evidence Documents/CDRs. If you disagree with the services and information presented by MyCDRHelp.com, you should leave this website immediately.</p></div>
</div>
</section>


	<a href="<?php echo $whatsappUrl ?>" class="float" target="_blank" onClick="ga('send', 'event', { eventCategory: 'whatsup', eventAction: 'click', eventLabel: 'Chat'});">
<i class="fab fa-whatsapp my-float"></i></a>

<div style="float:left;  top: 400px;  width:30px; height:100px; padding:4px; position: fixed; border-radius:4px;">

 <a href="https://www.mycdrhelp.com/order-now">
<picture>
  <source type="image/webp" srcset="<?php echo $baseUrl;?>images/Order-Now-vertical.webp" class="img-responsive">
  <source type="image/jpeg" srcset="<?php echo $baseUrl;?>images/Order-Now-vertical.png" class="img-responsive">
  <img src="<?php echo $baseUrl;?>images/Order-Now-vertical.png" alt="CDR Writing Help" class="img-responsive">
</picture>
  </a>
</div>

<footer>
<div class="footer_bottom">
<div  class="container">
<div class="col-md-4"><p>© 2017  My CDR Help. All Rights Reserved.</p></div>
<div class="col-md-4"><img src="images/payment.png" alt="We Accept Payment By All" class="img-responsive text-center"></div>	
<div class="col-md-4">
	<ul class="footer_link-small">
		<li><a href="<?php echo $baseUrl;?>refund-policy">Refund Policy </a></li>
		<li><a href="<?php echo $baseUrl;?>terms-conditions">Terms & Conditions </a></li>
	</ul>
	
</div>
</div>
</div>	
</footer>


<script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script async src="<?php echo $baseUrl;?>js/bootstrap.js" type="text/javascript"></script> 
<script async src="<?php echo $baseUrl;?>js/jquery.dialogx.js"></script>
<script async type='text/javascript' src='<?php echo $baseUrl;?>js/jquery.simplemodal.js'></script>
<script async src="<?php echo $baseUrl;?>js/aos.js" type="text/javascript"></script> 
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js" ></script>
<script defer src="<?php echo $baseUrl;?>js/all.js"></script>
<script defer>
	  AOS.init({
  duration: 1200,
})
	      $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    
    </script>
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
	
<script defer>
        $(".message").hide().first().hide();
        setTimeout(showNotifications, 20000);

        function showNotifications() {
            $(".message:visible").remove();
            $(".message:first").show();
            if ($(".message").length > 0) {
                setTimeout(showNotifications, 30000);
            }
        }

    </script>	
<!--Begin Live Chat Code--> <div id="livechat-button-202"></div> <script type="text/javascript" async> var Comm100API=Comm100API||{};(function(t){function e(e){var a=document.createElement("script"),c=document.getElementsByTagName("script")[0];a.type="text/javascript",a.async=!0,a.src=e+t.site_id,c.parentNode.insertBefore(a,c)}t.chat_buttons=t.chat_buttons||[],t.chat_buttons.push({code_plan:202,div_id:"livechat-button-202"}),t.site_id=5000145,t.main_code_plan=202,e("https://vue.livelyhelp.chat/livechat.ashx?siteId="),setTimeout(function(){t.loaded||e("https://vue1.livelyhelp.chat/livechat.ashx?siteId=")},5e3)})(Comm100API||{}) </script> <!--End Live Chat Code-->