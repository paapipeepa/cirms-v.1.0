<?php
session_start();
require 'df.php';
require 'vendor/autoload.php';
use Mailgun\Mailgun;
if($_SERVER['REQUEST_METHOD'] == "POST"){
	include 'db_open.php';
	$uname = $_POST['uname'];
	$_SESSION["ui"] = $uname;
	$rock = $_POST['ps'];
	$str = "SELECT * FROM `praneeth`.login WHERE user='$uname';";
	$sql = $connect->query($str);
	$rows = $sql->num_rows;
	if($rows > 0){
		echo "Already exists";
		header('Refresh:2 ;url=../index.php');
	}
	elseif($rows ==0){
		$Str1 ="SELECT * FROM `praneeth`.Stud_details where roll='$uname' and email='$rock';";
		$sql = $connect->query($Str1);
		$rows = $sql->num_rows;
		if($rows == 1){
			$unique = randomString(10);
			if($sql == TRUE){
				/*$mgClient = new Mailgun('key-6e380159dacc569f5fe3d45211197677');
				$domain = "sandboxd149e0b9e4ce4363a8411227427f2ae5.mailgun.org";
				$result=$mgClient->sendMessage($domain, array(
				    'from'    => 'Cirms Admin <mailgun@sandboxd149e0b9e4ce4363a8411227427f2ae5.mailgun.org>',
				    'to'      => $rock,
				    'subject' => 'Use this password for registration into CIRMS',
				    'text'    =>  $unique
				));
				*/
				echo "<h1>Please check your mail for password while you are being redirected...</h1>";
				$Str2 = "INSERT INTO `praneeth`.login(`user`,`pass`) VALUES('$uname','$unique');";
				$sql = $connect->query($Str2);
				header('Refresh:4 ;url=./register.php');
			}
		}
		else{
			echo "Not a Student of Amrita :)";
			header('Refresh:0;url=../index.php');
		}
	}
}
include 'db_close.php';
?>