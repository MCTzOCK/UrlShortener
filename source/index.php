<?php
	if(isset($_GET['create_lnk']))
	{
		if(!file_exists("../l/".$_GET['custom_name'].".html"))
		{
			$index = "
				<html>
					<head>
					</head>
					<body>
						<center>
							<h1>
								Deine URL ist <b>http://mctzock.de/l/".$_GET['custom_name'].".html</b>
							</h1>
						</center>
					</body>
				</html>
			";
			$file = fopen("../l/".$_GET['custom_name'].".html", "w");
			fwrite($file, "<script>window.location.assign(\"".$_GET['create_lnk']."\");</script>");
			fclose($file);
			echo $index;
		}else
		{
			echo "Error! Name already exists! Please choose another!";
		}
	}else
	{
		echo "
	<html>
		<head>
			<title>
				MCTzOCK.DE URL Shortener
			</title>
			<meta charset=\"utf-8\">
			<script src=\"main.js\">
			</script>
			<link rel=\"stylesheet\" href=\"style.css\">
			<link href=\"https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap\" rel=\"stylesheet\"> 
		</head>
		<body>
			<form action=\"\">
				<b>URL:</b><br><input type=\"url\" id=\"txt\" required>
				<br>
				<b>Custom Name:</b><br><input type=\"text\" id=\"name\" required>
				<br>
				<input type=\"button\" onclick=\"javascript:cl();\" value=\"URL kürzen\">
			</form>
		</body>
	</html>
	";
	}
?>