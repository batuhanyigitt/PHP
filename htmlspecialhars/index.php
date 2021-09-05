<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GÜVENLİK</title>
</head>
<body>

<?php

//---- SECURITY ------
/*
$str="En güzel ülke Türkiye'dir";

echo addslashes($str);
*/


/* GET METHOD
$mesaj=$_GET["mesaj"];

echo $mesaj = htmlspecialchars ($mesaj);
*/


$metin = '<p>Deneme paragrafı.</p><!--Açıklama-->'.'<a href="index.php">LİNK</a>';

//echo strip_tags($metin); güvenilir

echo strip_tags($metin,'<p><a>');

?>

</body>
</html>