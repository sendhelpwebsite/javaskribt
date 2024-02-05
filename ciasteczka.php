<html>
<head>
	<title>php sucks</title>
	<link rel="stylesheet" href=styles.css" />
	<style>
		a{font-size: 30px; font-family: helvetica;}
	</style>
</head>
<body>

<div>
<?php
if(!isset($_COOKIE["cookie1"])) {
	echo "odśwież stronę";
} else {
	echo "witamy spowrotem";
}
setcookie("cookie1","cookie1value", time() + 120);
?>

<a href="poezja.html" font-size: 30px;>wrócić do poezji</a>

</div>

</body>
</html>
