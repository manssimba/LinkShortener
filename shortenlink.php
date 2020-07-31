<?php
include 'config.php';
$url = "'" . $_GET[Url] . "'";
$number = rand(1000,9999);
$filename = $number."/index.html";
mkdir($number);
$file = fopen($filename,"w");
fwrite($file,"
<script type='text/javascript'>
  window.location.href =".$url.";
</script>");
echo "Ur shortened url: ",$shortenerURL,"/",$number;
 ?>
