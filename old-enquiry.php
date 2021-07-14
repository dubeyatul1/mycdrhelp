<?php
require_once 'admin/baseurl.php';

require_once 'phpmailer/class.phpmailer.php';

$mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch


$action_type = $_REQUEST ['action_type'];

$to = "contact@mycdrhelp.com";
if ($action_type == "ordernow") {
try {
$ip = $_SERVER['REMOTE_ADDR'];
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

$ipAddress=$ipdat->geoplugin_request;
$ipCity=$ipdat->geoplugin_city;
$ipState=$ipdat->geoplugin_regionName;
$ipcountry=$ipdat->geoplugin_countryName;
	$emailTo='contact@mycdrhelp.com';
  $nameTo='My CDR Help';
  $emailFrom=$_REQUEST ['email'];
  $nameFrom=$_REQUEST ['name'];
	$mobile = $_REQUEST ['mobile'];
	$msg = $_REQUEST ['msg'];
$name = $_REQUEST ['name'];
	$email = $_REQUEST ['email'];
	
	$topic = $_REQUEST ['topic'];
	$document = $_REQUEST ['document'];
	$sub = $_REQUEST ['subject'];
	$date = $_REQUEST ['date'];
	$reference_style = $_REQUEST ['reference_style'];
	$paper_length = $_REQUEST ['paper_length'];
	$academic = $_REQUEST ['academic'];
	$academic_option = $_REQUEST ['academic_option'];
		$header = "From: contact@mycdrhelp.com" . "\r\n" . "Reply-To: contact@mycdrhelp.com" . "\r\n" . "Content-type:text/html;charset=iso-8859-1" . "\r\n" . "X-Mailer: PHP/" . phpversion ();
		$subject = "Order Now (".$name.")";
		$message = "<html><body >";
		$message .= "<div style='background:#dcdcdc; width:499px; padding:4px 5px;'>
		<table style='width:500px; background-color:#fff;border:0; padding:10px; margin:0 auto;' cellpadding='0' cellpadding='0'>
		<tr>
		<td colspan='2'>
		<table width='100%' cellpadding='0' cellspacing='0' border='0'>
		<tr>
		<td style='color: #0eabd4;padding:10px 0;border-bottom: 2px solid #eee;border-top: 2px solid #eee;border-left: 2px solid #eee;border-right: 2px solid #eee;padding: 5px;background: #85BC1C;'><img src='" . $baseUrl . "images/logo.png' style='margin:auto;
		max-height: 67px !important;'>
		</td></tr></table></td></tr>";
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Name</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $name . PHP_EOL . "</td> </tr>";
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Email</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $email . PHP_EOL . "</td> </tr>";
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Mobile</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $mobile . PHP_EOL . "</td> </tr>";
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Topic</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $topic . PHP_EOL . "</td> </tr>";


		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Document Type</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $document . PHP_EOL . "</td> </tr>";
		
		
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Subject</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $sub . PHP_EOL . "</td> </tr>";
		
		
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Date</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $date . PHP_EOL . "</td> </tr>";
		
		
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Reference Style</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $reference_style . PHP_EOL . "</td> </tr>";
		
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Paper Length</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $paper_length . PHP_EOL . "</td> </tr>";
		
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Academic Level</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $academic ." (".$academic_option.")". PHP_EOL . "</td> </tr>";
		
		
		if ($_FILES ['file_1'] ['tmp_name'] != '') {
		$file_name = $_FILES ['file_1'] ['name'];
		$temp_name = $_FILES ['file_1'] ['tmp_name'];
		$file_parts = pathinfo ( $file_name );
		$new_filename = trim ( $file_parts ['filename'] ) . "." . $file_parts ['extension'];
		if ((strtolower ( $file_parts ['extension'] ) == 'docx') || (strtolower ( $file_parts ['extension'] ) == 'txt') || (strtolower ( $file_parts ['extension'] ) == 'docx') || (strtolower ( $file_parts ['extension'] ) == 'pdf') || (strtolower ( $file_parts ['extension'] ) == 'doc') || (strtolower ( $file_parts ['extension'] ) == 'xlsx') || (strtolower ( $file_parts ['extension'] ) == 'xls')) {
			move_uploaded_file ( $temp_name, "productImage/$new_filename" );
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Document 1</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'><a href='" . $baseUrl.'productImage/' . $new_filename . PHP_EOL . "'>Download</a></td> </tr>";
			}		
		}
		
		
		
		if ($_FILES ['file_2'] ['tmp_name'] != '') {
		$file_name = $_FILES ['file_2'] ['name'];
		$temp_name = $_FILES ['file_2'] ['tmp_name'];
		$file_parts = pathinfo ( $file_name );
		$new_filename = trim ( $file_parts ['filename'] ) . "." . $file_parts ['extension'];
		if ((strtolower ( $file_parts ['extension'] ) == 'docx') || (strtolower ( $file_parts ['extension'] ) == 'txt') || (strtolower ( $file_parts ['extension'] ) == 'docx') || (strtolower ( $file_parts ['extension'] ) == 'pdf') || (strtolower ( $file_parts ['extension'] ) == 'doc') || (strtolower ( $file_parts ['extension'] ) == 'xlsx') || (strtolower ( $file_parts ['extension'] ) == 'xls')) {
			move_uploaded_file ( $temp_name, "productImage/$new_filename" );
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Document 2</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'><a href='" . $baseUrl.'productImage/' . $new_filename . PHP_EOL . "'>Download</a></td> </tr>";
			}		
		}
		
		if ($_FILES ['file_3'] ['tmp_name'] != '') {
		$file_name = $_FILES ['file_3'] ['name'];
		$temp_name = $_FILES ['file_3'] ['tmp_name'];
		$file_parts = pathinfo ( $file_name );
		$new_filename = trim ( $file_parts ['filename'] ) . "." . $file_parts ['extension'];
		if ((strtolower ( $file_parts ['extension'] ) == 'docx') || (strtolower ( $file_parts ['extension'] ) == 'txt') || (strtolower ( $file_parts ['extension'] ) == 'docx') || (strtolower ( $file_parts ['extension'] ) == 'pdf') || (strtolower ( $file_parts ['extension'] ) == 'doc') || (strtolower ( $file_parts ['extension'] ) == 'xlsx') || (strtolower ( $file_parts ['extension'] ) == 'xls')) {
			move_uploaded_file ( $temp_name, "productImage/$new_filename" );
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Document 3</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'><a href='" . $baseUrl.'productImage/' . $new_filename . PHP_EOL . "'>Download</a></td> </tr>";
			}		
		}
		if ($_FILES ['file_4'] ['tmp_name'] != '') {
		$file_name = $_FILES ['file_4'] ['name'];
		$temp_name = $_FILES ['file_4'] ['tmp_name'];
		$file_parts = pathinfo ( $file_name );
		$new_filename = trim ( $file_parts ['filename'] ) . "." . $file_parts ['extension'];
		if ((strtolower ( $file_parts ['extension'] ) == 'docx') || (strtolower ( $file_parts ['extension'] ) == 'txt') || (strtolower ( $file_parts ['extension'] ) == 'docx') || (strtolower ( $file_parts ['extension'] ) == 'pdf') || (strtolower ( $file_parts ['extension'] ) == 'doc') || (strtolower ( $file_parts ['extension'] ) == 'xlsx') || (strtolower ( $file_parts ['extension'] ) == 'xls')) {
			move_uploaded_file ( $temp_name, "productImage/$new_filename" );
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Document 4</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'><a href='" . $baseUrl.'productImage/' . $new_filename . PHP_EOL . "'>Download</a></td> </tr>";
			}		
		}
		
		
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Message</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $msg . PHP_EOL . "</td> </tr>";
$message .= "<tr>
 <td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>City</td>
<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $ipCity . PHP_EOL . "</td> </tr>";

$message .= "<tr>
 <td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>State</td>
<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $ipState . PHP_EOL . "</td> </tr>";

$message .= "<tr>
 <td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Country</td>
<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $ipcountry . PHP_EOL . "</td> </tr>";
$message .= "<tr>
 <td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>IP</td>
<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $ipAddress . PHP_EOL . "</td> </tr>";
		$message .= "</table></div>";
		$message .= "</body></html>";


$mail->AddAddress($emailTo, $nameTo);
  $mail->SetFrom($emailFrom, $nameFrom);
  $mail->AddReplyTo($emailFrom, $nameFrom);
  $mail->Subject = 'Order Enquiry';
  $mail->AltBody = ''; 
  $mail->MsgHTML($message);
  $mail->Send();
  echo "done";
} catch (phpmailerException $e) {
 echo "fail";
} catch (Exception $e) {
 echo "fail";
}
	
}	