<?php
$uid = $_POST['uid'];
$pw = md5($_POST['pw']);

$conn = mysql_connect('localhost','root','');
//$conn = mysql_connect('u926644367_bmi','u926644367_root','dhrupad123');
$db = mysql_select_db('bmi',$conn);
//echo $pw;
//$fetch = mysql_query("SELECT COUNT(*) FROM `login` WHERE username='$uid' and password='$pw'");

$fetch = mysql_query("SELECT `password` FROM `login` WHERE username='$uid'");
$row = mysql_fetch_assoc($fetch);

if($row["password"] == $pw)
{	
	session_start();
	$_SESSION['sid'] = session_id();
	$name = mysql_query("SELECT `fname` FROM `login` WHERE username='$uid'");
	$nrow = mysql_fetch_assoc($name);
	$_SESSION['name'] = $nrow["fname"];
	header("location:myindex.php");
	//echo true;
}
else
{
	header("location:index.html");
	//echo false;
}
?>