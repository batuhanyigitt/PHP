<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP MAILER</title>
</head>
<body>

<?php

$mail = new PHPMailer(true);

try {

$mail->SMTPDebug=0; //ERROR
$mail->isSMTP(); 
$mail->Charset = "UTF-8";

$mail->Host='smtp.gmail.com';

//Main Settings

$mail->Host='smtp.gmail.com'; //gmail
$mail->SMTPAuth = true; // SMTP ID verification 
$mail->Username="example@gmail.com";
$mail->Password='ourpassword';
$mail->SMTPSecure = 'tls';
$mail->Port =  587; // Gmail Port

//Mail Sender Settings  

$mail->setFrom($mail->Username, "Ahmet Batuhan Yiğit"); //Sender
$mail->addAddress('receiver@mynet.com','receiver'); //receiver, 
$mail->addAddress('receiver2@gmail.com','receiver2'); //receiver2, 
$mail->addAddress('receiver3@yandex.com','receiver3'); //receiver3, 

$mail->addReplyTo($mail->Username, "Geri Cevap");  //Yanıtlama adresi ve bilgisi

$mail->addCC('cc@gmail.com');
$mail->addBCC('bcc@gmail.com');


//$mail->addAttachment('pic.png');
//$mail->addAttachment('pic.png',"Picture");
$mail->isHTML(true); 
$mail->Subject = 'Our Subject';
$mail->Body = '<b>This is our message</b>';

$mail->send();

echo "Mail Gönderildi";


}catch(Exception $e) {
    echo "Maalesef hata var. Hata kodu: ",$mail->ErrorInfo;
}


?>

</body>
</html>