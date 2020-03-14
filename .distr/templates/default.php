<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta property="og:title" content="warm-sound.ru">
	<meta property="og:description" content="warm-sound.ru - магазин виниловых пластинок">

	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:900%7CMontserrat:400,600,700,900&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css" media="(max-width: 1199px)">

	
	<title>warm-sound.ru</title>

</head>

<?php
$partner = isset($_GET['partner']) ? trim($_GET['partner']) : '';
$version = isset($_GET['version']) ? trim($_GET['version']) : '';
include_once 'version.php';

?>

<body>

	{% block blocks %}

	<div class="wrapper">

		{% include 'header/block.php' %}
		{% include 'intro/block.php' %}
		{% include 'novelty/block.php' %}
		{% include 'fix2/block.php' %}
		{% include 'footer/block.php' %}

	</div>

	<div class="d-none">
		{% include 'popup-policy/block.php' %}
	</div><!-- d-none -->

	{% endblock %}

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js" defer="defer"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
	
</body>
</html>
