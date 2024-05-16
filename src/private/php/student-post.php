<?php

session_start();

$titulo = $_GET["ptitle"]." no ".$_GET["pblock"];

?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<title>Reclamação: <?php echo $_GET["ptitle"]; ?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Student post">
		<link rel="stylesheet" type="text/css" href="../../public/css/general.css">
		<link rel="stylesheet" type="text/css" href="../../public/css/header.css">

	</head>

	<body>

		<header class="header">

			<div id="container-site">

				<img src="#" alt="Handyman logo">

			</div>


			<div id="container-logo">

				<h1>Handyman</h1>

			</div>


			<nav>

				<ol class="navbar">

					<li><a href="../../public/html/index.html">Home</a></li>

					<li><a href="profile.php"><?php echo $_SESSION["sname"]; ?></a></li>

					<li><a href="home.php">Home</a></li>

				</ol>

			</nav>

		</header>

		<main class="main">

			<div id="student-post-container">

				<header class="post-header">

					<h2><?php echo $titulo ?></h2>

				</header>

				<div class="post-text" id="post-context">

					<p><?php echo $_GET["pdesc"]; ?></p>

				</div>

			</div>

		</main>

		<footer class="footer">

			<p>Handyman group INC. &copy;2024</p>

		</footer>

	</body>
</html>
