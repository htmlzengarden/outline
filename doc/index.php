<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"      />
		<title>Documentation</title>
		<link rel="stylesheet"    type="text/css"     href="../css/_index.css" />
		<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico"    />
	</head>
	<body>
		<div id="page" class="doc">
<?php
include_once "../lib/markdown.php";
include_once "../lib/smartypants.php";

$text = file_get_contents(str_replace(".php",".txt",__FILE__));
$html = SmartyPants(Markdown($text));

echo($html);
?>
		</div>
	</body>
</html>