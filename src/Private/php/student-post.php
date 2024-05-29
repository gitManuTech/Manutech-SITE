<?php

$formated_title = $_GET["ptitle"]." no ".$_GET["pblock"];

?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>

		<title>Reclamação: <?php echo $_GET["ptitle"]; ?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="ManuTech Student post">
		<link rel="stylesheet" type="text/css" href="../../Public/css/general.css">
		<link rel="stylesheet" type="text/css" href="../../Public/css/header.css">

	</head>

	<body onload="loadStudentInfo()">

		<header class="header">

			<div id="container-site">

				<img src="../../Public/img/MANUTECH LOGO.jpg"
				height="48" width="48"
				alt="ManuTech logo" id="manutech-logo">

			</div>

			<div id="container-logo">

				<h1>ManuTech</h1>

			</div>

			<nav>

				<ol class="navbar">

					<li><a href="profile.php"><span class="student-info"></span></a></li>
					<li><a href="../../public/html/index.html">Home</a></li>

				</ol>

			</nav>

		</header>

		<main class="main">

			<div id="student-post-container">

				<header class="post-header">

					<h2><?php echo $formated_title ?></h2>

				</header>

				<div class="post-text" id="post-context">

					<p><?php echo $_GET["pdesc"]; ?></p>

				</div>

			</div>

		</main>

		<footer class="footer">

			<p>ManuTech group INC. &copy;2024</p>

		</footer>

		<script type="text/javascript" src="../js/load-student-data.js"></script>

	</body>
</html>
