<?php
$uid = $_POST['uid'];
$pw = $_POST['pw'];

if($uid == 'arun' and $pw == 'arun123')
{	
	session_start();
	$_SESSION['sid']=session_id();
	$_SESSION['name'] = $uid;
	header("location:index.php");
}
else
{
	header("location:mylogin.html");
}
?>