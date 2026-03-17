

<!-- <?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

echo "<span style='color:green'>✔ Message sent successfully</span>";

}

?> -->

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$work_email = $_POST['work_email'];
$company = $_POST['company'];
$role = $_POST['role'];
$ops_domains = $_POST['ops_domains'];
$integration_interest = isset($_POST['integration_interest']) ? "Yes" : "No";
$help_message = $_POST['help_message'];


/* ==========================
   RECAPTCHA VERIFY
========================== */

$secret = "6Led8IIsAAAAAE0IleKfLkGRcwEj7TX1IzW9vDWo";

$response=$_POST['g-recaptcha-response'];

$verify=file_get_contents(
"https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response
);

$captcha=json_decode($verify);

if(!$captcha->success){
echo "<span style='color:red'>Captcha verification failed</span>";
exit;
}


/* ==========================
   SEND EMAIL USING SMTP
========================== */

$mail = new PHPMailer(true);

try{

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'eneblur.web@gmail.com';
$mail->Password = 'odgz ygth oeak rzlj';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('eneblur.web@gmail.com','Arina | Softility');

$mail->addAddress('vkandagatla@softility.com');

$mail->isHTML(true);

$mail->Subject = "Arina Website New Contact Form Submission";

$mail->Body = "

<b>First Name:</b> $first_name <br>
<b>Last Name:</b> $last_name <br>
<b>Work Email:</b> $work_email <br>
<b>Company:</b> $company <br>
<b>Role:</b> $role <br>
<b>Which ops domains are you interested in?:</b> $ops_domains <br>
<b>Integration Interest:</b> $integration_interest <br>
<b>Message:</b> $help_message

";

$mail->send();

/* ========================
   AUTO REPLY TO USER
======================== */

$mail->clearAddresses();

$mail->addAddress($work_email);

$mail->Subject = "Thank you for contacting us";

$mail->Body = "

Hello $first_name,<br><br>

Thank you for contacting Arina. <br><br>


Regards,<br>
Arina Team

";

$mail->send();
/* ==========================
   SAVE TO GOOGLE SHEET
========================== */

$url = "https://script.google.com/macros/s/AKfycbw30sTLVM0kNgUxqFosaG-gXB5sZG2iwpHiv-vvKfkeZd-EorVQ6txlNM0nwz9s5kOd0g/exec";

$data = array(
"first_name"=>$first_name,
"last_name"=>$last_name,
"work_email"=>$work_email,
"company"=>$company,
"role"=>$role,
"ops_domains"=>$ops_domains,
"integration_interest"=>$integration_interest,
"help_message"=>$help_message
);

$options = array(
'http'=>array(
'header'=>"Content-Type: application/json",
'method'=>"POST",
'content'=>json_encode($data)
)
);

$context = stream_context_create($options);

file_get_contents($url,false,$context);


echo "<span style='color:green'>Message sent successfully!</span>";

}
catch(Exception $e){

echo "<span style='color:red'>Mailer Error: {$mail->ErrorInfo}</span>";

}

}
?>