<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<title>Index des maquettes</title>
		<link rel="stylesheet"    type="text/css"     href="css/doc.css" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"  />
	</head>
	<body>
		<div id="page" class="index">
<?php
include_once "php/lib/markdown.php";
include_once "php/lib/smartypants.php";

$text = file_get_contents(str_replace(".php",".txt",__FILE__));
$html = SmartyPants(Markdown($text));

echo($html);
?>
		</div>
	</body>
</html>