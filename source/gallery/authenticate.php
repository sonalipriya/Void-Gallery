<?php
session_start();

$password = 'void'; //set your own password here

$passcode = "";
if(!empty($_POST['pass']))
{
$passcode = $_POST['pass'];
if($passcode == $password)
$_SESSION['gallerySession'] = "admin";
else if($passcode == "d00m")
session_destroy();
}
else
{
	echo "<script>window.location.assign('../?p=error6');</script>";
}
?>