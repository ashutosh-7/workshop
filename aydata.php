<?php


if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
         if(!$captcha){
          
          //echo "Please check the captcha form";
          header("location:register.php");
        }
         $secretKey = "6LeQdtwUAAAAAEmTcri4oxMiAACcNTwekOlFd0WO";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        
        if($responseKeys["success"]) {


if(isset($_POST['name'],$_POST['password']))
{
	$conn=mysqli_connect("127.0.0.1", "root", "", "postdata");
	  $name=$_POST['name'];
	  $password=$_POST['password'];
	 
    $query="INSERT INTO data SET mydata='$name', password='$password' ";
    $query_run=mysqli_query($conn,$query);
}}
else
echo "jwkhj";





?>
