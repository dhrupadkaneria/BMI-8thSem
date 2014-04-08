function getfromdb()
{
	xmlreq = new XMLHttpRequest();
	xmlreq.onreadystatechange = processReq;
	xmlreq.open("GET","getfromdb.php?myid="+myid,false);
	xmlreq.send();
}
function processReq()
{
	if (xmlreq.readyState==4 && xmlreq.status==200)
	{
		//alert(myid);
		document.getElementById(myid).value = xmlreq.responseText;
	}
}