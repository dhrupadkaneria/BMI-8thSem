<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uid = $_POST['uid'];
$pw = md5($_POST['pw']);

$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('bmi',$conn);
$fetch = mysql_query("INSERT INTO `login` (username, fname, lname, password)VALUES ('$uid', '$fname', '$lname', '$pw')");

if($fetch == 1)
{	
	session_start();
	$_SESSION['sid']=session_id();
	$_SESSION['name'] = $fname;
	
	$newdb = new DOMDocument();
	$newdb->formatOutput = true;
	$newdb->load('/database/'.$fname.'-db.xml');
	$newroot = $newdb->createElement("bmi");
    $newroot = $newdb->appendChild($newroot);
	$newdb->save($fname.'-db.xml');
	header("location:index.php");
}
else
{
	header("location:mylogin.html");
}
?>