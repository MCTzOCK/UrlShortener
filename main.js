function cl()
{
	var url = document.getElementById('txt').value;
	var nam = document.getElementById('name').value;
	if(!(url.startsWith("http://") || url.startsWith("https://")))
	{
		url = "http://" + url;
	}
	window.location.assign("index.php?create_lnk=" + url + "&custom_name=" + nam);
}