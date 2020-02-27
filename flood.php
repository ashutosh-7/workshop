<?php

$data  = array("name"=>"johnghfhjgn" , "password"=>"abcdef");

$string =http_build_query($data);
//echo $string;
 $ch = curl_init("http://127.0.0.1/test/data.php");

curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $string);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_exec($ch);
//echo $result;

curl_close($ch);

?>
