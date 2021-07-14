 <?php  include_once('admin-lib.php'); 
$allpageDetailById=$adminDao->allpageDetailById('11');?>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CDR Help| Place Quick Order & Get Help Instantly | MY CDR Help</title>
<meta name="description" content="<?php echo $allpageDetailById->MetaDescription;?>"/>
<meta name="keywords" content="<?php echo $allpageDetailById->MetaTag;?>"/>
<meta name="ROBOTS" content="INDEX, FOLLOW" />
<link rel="canonical" href="https://www.mycdrhelp.com/order-now" />
<?php require_once 'css.php';?>

<style>
#pageloaddiv {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999999999;
    background: url(../images/loader.gif) no-repeat center center rgba(255, 255, 255, 1);
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

<body>
<div id="pageloaddiv" style="display:none;"></div>
<?php require_once 'header.php';?>
<div class="clearfix"></div>

<section class="about_home">
  <div class="container-fluid">
   
    <div class="col-md-9" style="margin-top: -22px;">
      <div class="inner_content_holder order_form" data-aos="zoom-in">
        <h1 align="center">Place Quick Order & Get Help Instantly!</h1>
        <div class="col-md-12">
          <div class="contact_form">
            <h2>Personal Info</h2>
            <div class="col-md-6">
              <input type="text" name="name" placeholder="Name">
            </div>
            <div class="col-md-6">
              <input type="text" name="mobile" placeholder="Phone No.">
            </div>
            <div class="col-md-6">
              <input type="text" name="email" placeholder="E-mail ID">
            </div>
            <div class="col-md-6">
              <input type="text" name="topic" placeholder="Topic">
            </div>
            <div class="col-md-6">
              <select name="document">
                <option value="">Select Document Type</option>
<option value="CDR Help">CDR Help </option>
<option value="RPL Writing">RPL Writing  </option>
<option value="KA02 HELP">KA02 HELP  </option>
<option value="CDR Editing and Review">CDR Editing and Review  </option>
<option value="Plagiarism Check">Plagiarism Check </option>
              </select>
            </div>
            <div class="col-md-6">
              <select name="subject">
                <option value="">Select Your Engineering Subject</option>
                <option value="Accounting">Accounting</option>
                <option value="Administration">Administration</option>
                <option value="Anthropology">Anthropology</option>
                <option value="Application Letters">Application Letters</option>
                <option value="Art &amp; Architecture">Art &amp; Architecture</option>
                <option value="Biology">Biology</option>
                <option value="Business">Business</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Child Care">Child Care</option>
                <option value="Classic English Literature">Classic English Literature</option>
                <option value="Communications">Communications</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Database Management">Database Management</option>
                <option value="Economics">Economics</option>
                <option value="Education">Education</option>
                <option value="Electronics">Electronics</option>
                <option value="Engineering /CDR">Engineering /CDR</option>
                <option value="Exam Prep">Exam Prep</option>
                <option value="Family &amp; Consumer Science">Family &amp; Consumer Science</option>
                <option value="Film &amp;Theater Studies">Film &amp;Theater Studies</option>
                <option value="Finance">Finance</option>
                <option value="Geography">Geography</option>
                <option value="Government and Politics">Government and Politics</option>
                <option value="History">History</option>
                <option value="Hospitality">Hospitality</option>
                <option value="Human Resource">Human Resource</option>
                <option value="Law">Law</option>
                <option value="Management">Management</option>
                <option value="Marketing">Marketing</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Medical &amp; Nursing">Medical &amp; Nursing</option>
                <option value="Media Studies">Media Studies</option>
                <option value="Music">Music</option>
                <option value="Natural Therapies">Natural Therapies</option>
                <option value="Philosophy">Philosophy</option>
                <option value="Physics">Physics</option>
                <option value="Programming Language">Programming Language</option>
                <option value="Project Management">Project Management</option>
                <option value="Psychology">Psychology</option>
                <option value="Public Relations">Public Relations</option>
                <option value="Real Estate">Real Estate</option>
                <option value="Recruitment">Recruitment</option>
                <option value="Religion">Religion</option>
                <option value="Science">Science</option>
                <option value="Social Science">Social Science</option>
                <option value="Sociology">Sociology</option>
                <option value="Sport Science">Sport Science</option>
                <option value="Statistics">Statistics</option>
                <option value="Strategy &amp; Planning">Strategy &amp; Planning</option>
                <option value="Theater">Theater</option>
                <option value="Tourism">Tourism</option>
                <option value="World Literature">World Literature</option>
                <option value="Zoology">Zoology</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="col-md-6">
              <input type="text" name="date" placeholder="MM/DD/YYYY" id="dp1" readonly>
            </div>
            <div class="col-md-6">
              <select name="reference_style">
                <option value="">--- Citation/Referencing Style ---</option>
                <option value="AGLC">AGLC</option>
                <option value="APA">APA</option>
                <option value="BMJ">BMJ</option>
                <option value="CHICAGO">CHICAGO</option>
                <option value="FOOTENOTES">FOOTENOTES</option>
                <option value="FOOTNOTES AND BIBLIOGRAPHY">FOOTNOTES AND BIBLIOGRAPHY</option>
                <option value="HARVARD">HARVARD</option>
                <option value="MHRA">MHRA</option>
                <option value="MLA">MLA</option>
                <option value="NOT SELECTED">NOT SELECTED</option>
                <option value="OPEN">OPEN</option>
                <option value="OSCOLA">OSCOLA</option>
                <option value="OXFORD">OXFORD</option>
                <option value="TURABIAN">TURABIAN</option>
                <option value="VANCOUVER">VANCOUVER</option>
              </select>
            </div>
            <div class="col-md-6">
              <select name="paper_length">
                <option value="">--- Paper Length ---</option>
				<option value="1 Page (s) / 250 Words">1 Page (s) / 250 Words</option>
				<option value="2 Page (s) / 500 Words">2 Page (s) / 500 Words</option>
				<option value="3 Page (s) / 750 Words">3 Page (s) / 750 Words</option>
				<option value="4 Page (s) / 1000 Words">4 Page (s) / 1000 Words</option>
				<option value="5 Page (s) / 1250 Words">5 Page (s) / 1250 Words</option>
				<option value="6 Page (s) / 1500 Words">6 Page (s) / 1500 Words</option>
				<option value="7 Page (s) / 1750 Words">7 Page (s) / 1750 Words</option>
				<option value="8 Page (s) / 2000 Words">8 Page (s) / 2000 Words</option>
				<option value="9 Page (s) / 2250 Words">9 Page (s) / 2250 Words</option>
				<option value="10 Page (s) / 2500 Words">10 Page (s) / 2500 Words</option>
				<option value="11 Page (s) / 2750 Words">11 Page (s) / 2750 Words</option>
				<option value="12 Page (s) / 3000 Words">12 Page (s) / 3000 Words</option>
				<option value="13 Page (s) / 3250 Words">13 Page (s) / 3250 Words</option>
				<option value="14 Page (s) / 3500 Words">14 Page (s) / 3500 Words</option>
				<option value="15 Page (s) / 3750 Words">15 Page (s) / 3750 Words</option>
				<option value="16 Page (s) / 4000 Words">16 Page (s) / 4000 Words</option>
				<option value="17 Page (s) / 4250 Words">17 Page (s) / 4250 Words</option>
				<option value="18 Page (s) / 4500 Words">18 Page (s) / 4500 Words</option>
				<option value="19 Page (s) / 4750 Words">19 Page (s) / 4750 Words</option>
				<option value="20 Page (s) / 5000 Words">20 Page (s) / 5000 Words</option>
				<option value="21 Page (s) / 5250 Words">21 Page (s) / 5250 Words</option>
				<option value="22 Page (s) / 5500 Words">22 Page (s) / 5500 Words</option>
				<option value="23 Page (s) / 5750 Words">23 Page (s) / 5750 Words</option>
				<option value="24 Page (s) / 6000 Words">24 Page (s) / 6000 Words</option>
				<option value="25 Page (s) / 6250 Words">25 Page (s) / 6250 Words</option>
				<option value="25 Page (s) / 6500 Words">25 Page (s) / 6500 Words</option>
				<option value="26 Page (s) / 6750 Words">26 Page (s) / 6750 Words</option>
				<option value="27 Page (s) / 7000 Words">27 Page (s) / 7000 Words</option>
				<option value="28 Page (s) / 7250 Words">28 Page (s) / 7250 Words</option>
				<option value="29 Page (s) / 7500 Words">29 Page (s) / 7500 Words</option>
				<option value="30 Page (s) / 7750 Words">30 Page (s) / 7750 Words</option>
				<option value="31 Page (s) / 8000 Words">31 Page (s) / 8000 Words</option>
				<option value="32 Page (s) / 8250 Words">32 Page (s) / 8250 Words</option>
				<option value="33 Page (s) / 8500 Words">33 Page (s) / 8500 Words</option>
				<option value="34 Page (s) / 8750 Words">34 Page (s) / 8750 Words</option>
				<option value="35 Page (s) / 9000 Words">35 Page (s) / 9000 Words</option>
				<option value="36 Page (s) / 9250 Words">36 Page (s) / 9250 Words</option>
				<option value="37 Page (s) / 9500 Words">37 Page (s) / 9500 Words</option>
				<option value="38 Page (s) / 9750 Words">38 Page (s) / 9750 Words</option>
				<option value="39 Page (s) / 10000 Words">39 Page (s) / 10000 Words</option>
				<option value="40 Page (s) / 10250 Words">40 Page (s) / 10250 Words</option>
				<option value="41 Page (s) / 10500 Words">41 Page (s) / 10500 Words</option>
				<option value="42 Page (s) / 10750 Words">42 Page (s) / 10750 Words</option>
				<option value="43 Page (s) / 11000 Words">43 Page (s) / 11000 Words</option>
				<option value="44 Page (s) / 11250 Words">44 Page (s) / 11250 Words</option>
				<option value="45 Page (s) / 11500 Words">45 Page (s) / 11500 Words</option>
				<option value="46 Page (s) / 11750 Words">46 Page (s) / 11750 Words</option>
				<option value="47 Page (s) / 12000 Words">47 Page (s) / 12000 Words</option>
				<option value="48 Page (s) / 12250 Words">48 Page (s) / 12250 Words</option>
				<option value="49 Page (s) / 12500 Words">49 Page (s) / 12500 Words</option>
				<option value="50 Page (s) / 12750 Words">50 Page (s) / 12750 Words</option>
			  </select>
            </div>
            <div class="col-md-6">
              <select name="academic">
                <option value="">---Academic Level---</option>
                <option>School</option>
                <option>College</option>
                <option>University</option>
                <option>Master's/Ph.D.</option>
                <option>Other</option>
              </select>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
              <div class="btn-group" data-toggle="buttons">
                <label class="btn active order-type">
                  <input type="radio" name="academic_option" checked value="Standard">
                  <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span> Standard</span> </label>
                <label class="btn order-type">
                  <input type="radio" name="academic_option" value="Premium">
                  <i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span> Premium</span> </label>
              </div>
            </div>
            
            
            <div class="col-md-6">
              <p>Attach CV: </p>
              <input type="file" name="file_1" id="file_1" accept=".pdf,.docx,.doc,.txt,.xlsx,.xls">
            </div>
            <div class="col-md-6">
              <p>Attach Project 1: </p>
              <input type="file" name="file_2"  id="file_2" accept=".pdf,.docx,.doc,.txt,.xlsx,.xls">
            </div>
			<div class="clearfix"></div>
            <div class="col-md-6">
              <p>Attach Project 2: </p>
              <input type="file" name="file_3"  id="file_3" accept=".pdf,.docx,.doc,.txt,.xlsx,.xls">
            </div>
            <div class="col-md-6">
              <p>Attach Project 3: </p>
              <input type="file" name="file_4"  id="file_4" accept=".pdf,.docx,.doc,.txt,.xlsx,.xls">
            </div>
            <p>&nbsp;</p>
            <div class="col-md-12">
              <textarea name="msg" placeholder="Order Description if any"></textarea>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <button type="button" id="isValidOrder">Submit</button>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </div>
    </div>
     <?php require_once 'menu.php';?> 
  </div>
</section>

<?php require_once 'footer.php';?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<link rel="stylesheet" href="<?php echo $baseUrl;?>css/jquery.dialogx.css">
<script src="<?php echo $baseUrl;?>js/jquery.dialogx.js"></script> 
<script type="text/javascript">
$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'dd-mm-yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script>
$(document).bind('keypress', function(e) {
if(e.keyCode==13){
$('#isValidOrder').trigger('click');
}
});
$(document).on('click', '#isValidOrder',function(){
		if(isValidCareer()){
    	var action_type = "ordernow";
    	var name = $("input[name='name']").val();
    	var mobile = $("input[name='mobile']").val();
    	var email = $("input[name='email']").val();
    	
		var topic = $("input[name='topic']").val();
		var document = $("select[name='document']").val();
		var subject = $("select[name='subject']").val();
		var date = $("input[name='date']").val();
		var reference_style = $("select[name='reference_style']").val();
		var paper_length = $("select[name='paper_length']").val();	
		var academic = $("select[name='academic']").val();
		var academic_option = $("input[name='academic_option']:checked").val();

    	var msg = $("textarea[name='msg']").val();
    	var file_1 = $('#file_1').prop("files")[0];
		var file_2 = $('#file_2').prop("files")[0];
		var file_3 = $('#file_3').prop("files")[0];
		var file_4 = $('#file_4').prop("files")[0];
        
		var formData = new FormData();
        formData.append('action_type', action_type);
        formData.append('name', name);
        formData.append('email', email);
        formData.append('mobile', mobile);
		formData.append('topic', topic);
		formData.append('document', document);
		formData.append('subject', subject);
		formData.append('date', date);
		formData.append('reference_style', reference_style);
		formData.append('paper_length', paper_length);
		formData.append('academic', academic);
		formData.append('academic_option', academic_option);
        formData.append('file_1', file_1);
		formData.append('file_2', file_2);
		formData.append('file_3', file_3);
		formData.append('file_4', file_4);
        formData.append('msg', msg);
	$("#pageloaddiv").fadeIn(1000);	
        $.ajax({
            type:'POST',
            data: formData,
           
            contentType: false,
            processData: false,
            
            url: '<?php echo $baseUrl;?>enquiry.php',
            success: function (result) {

$("#pageloaddiv").fadeOut(2000);
if (result.indexOf("done") > -1) {
				$("input[name='name']").val("");
				$("input[name='mobile']").val("");
				$("input[name='email']").val("");
				$("input[name='topic']").val("");
				$("select[name='document']").val("");
				$("select[name='subject']").val("");
				$("input[name='date']").val("");
				$("select[name='reference_style']").val("");
				$("select[name='paper_length']").val("");	
				$("select[name='academic']").val("");
				$("textarea[name='msg']").val("");
                $("input[name='file_1']").val("");
				$("input[name='file_2']").val("");
				$("input[name='file_3']").val("");
				$("input[name='file_4']").val("");
				$.confirmx('', 'Your enquiry successfully send.', function (dialogx) {
                        console.log('Confirm');
                        return true;
                }).delayClose(3);}else if (result.indexOf("fail") > -1) {
$.confirmx('', 'Please try again later.', function (dialogx) {
                        console.log('Confirm');
                        return true;
                }).delayClose(3);
}
            }
        });
    }
    });
    function isValidCareer(){
    	var valid = true;
    	var name = $("input[name='name']").val();
    	var mobile = $("input[name='mobile']").val();
    	var email = $("input[name='email']").val();
    	
		var file_1 = $("input[name='file_1']").val();
    	var msg = $("textarea[name='msg']").val();
    	
		$(".message").html("&nbsp;");
    	$(".message").css("color", "red");

    	$("input[name='name']").css("border","1px solid #ccc");
    	$("input[name='mobile']").css("border","1px solid #ccc");
    	$("input[name='email']").css("border","1px solid #ccc");
    	$("input[name='file_1']").css("border","1px solid #ccc");
    	$("textarea[name='msg']").css("border","1px solid #ccc");

    	if (name.length == 0) {
    		valid = false;
    		$("input[name='name']").css("border","1px solid red");
    	} if(mobile.length != 0){if (checkcontactnumber(mobile) == false) {
    		valid = false;
    		$("input[name='mobile']").css("border","1px solid red");
    	}} if (email.length == 0 || isEmailValidate(email) == false) {
    		valid = false;
    		$("input[name='email']").css("border","1px solid red");
    	}
    	
    	return valid;	
    }
function isEmailValidate(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
function checkcontactnumber(mobile) {
    var contactRegexStr = /^[0-9]+$/;
    var isvalid = contactRegexStr.test(mobile);

    return isvalid;
}		
</script>
</body>
</html>
