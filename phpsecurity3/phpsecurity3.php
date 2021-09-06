<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GÜVENLİK</title>
</head>
<body>

<?php

//---- SECURITY ------


$veri="514";

$veri = $db->real_escape_string($veri);

//using "prepare"

$s="select * from bilgiler";

$gel=$db->prepare($s);
$gel->execute();

mysql_query()
mysql_connect





?>

</body>