function savetodb()
{
	var val = document.getElementById(myid).value;
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange = process;
	xmlhttp.open("GET","storetodb.php?myid="+myid+"&val="+val,true);
	xmlhttp.send();
}
function process()
{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
		//alert(xmlhttp.responseText);
	}
}