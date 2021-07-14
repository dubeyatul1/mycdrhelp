 <?php  include_once('admin-lib.php'); 
$allpageDetailById=$adminDao->allpageDetailById('2');?>
<!doctype html>
<html>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WNLRDXB');</script>
<!-- End Google Tag Manager -->
<meta charset="utf-8">
<title><?php echo $allpageDetailById->MetaTitle?></title>
<meta name="description" content="<?php echo $allpageDetailById->MetaDescription;?>"/>
<meta name="keywords" content="<?php echo $allpageDetailById->MetaTag;?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="ROBOTS" content="INDEX, FOLLOW" />
<link rel="canonical" href="https://www.mycdrhelp.com/about" />
<?php require_once 'css.php';?>
<style>
    .thanks-area-holder
    {
        width: 800px;
        margin: 0 auto;
        padding: 0;
        font-family: 'Oswald', sans-serif;
    }
    .thansk-area
    {
        width: 100%;
        margin:10% 0;
        padding:50px 0;
        float:left;
        text-align: center;
        background: #fff;
      -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.14);
-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.14);
box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.14);
    }
    .thansk-area h1
    {
        color: #579501;
        font-size: 50px;
        margin: 0;
        padding: 0;
    }
          .thansk-area a
    {
        background:#579501;
        margin-top:25px;
        padding:5px 20px 10px 20px;
        display: inline-block;
        color: #fff;
        border-radius: 4px;
        text-decoration: none;
        font-size:15px;
    }
    .thansk-area a:hover
    {
        background: #000;
        color: #FFF;
    }
    
    .imgpay{
        margin: 7px auto;
        width: 70%;
    }
    
    
</style>
<script type="application/ld+json"> 
{
"@context" : "http://schema.org",
"@type": "product",
"name": "CDR Writing Service",
"logo": "https://www.mycdrhelp.com/images/logo.png",
"aggregateRating":{
"@type":"AggregateRating",
"ratingValue":"4.9",
"reviewCount":"4501"
}
}
</script>
</head>

<style>
.paypal-buttons {
            margin: 0 auto !important;
    display: block !important;
    }
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

<body>
<?php require_once 'header.php';?>
<div class="clearfix"></div>

<section style="padding:60px 0 0;">
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
</section>
<p>&nbsp;</p>
<?php require_once 'footer.php';?>
</body>
</html>
