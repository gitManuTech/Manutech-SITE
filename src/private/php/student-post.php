<?php

session_start();

$titulo = <<<END

{$_GET["ptitle"]} no {$_GET["pblock"]}

END;

?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<title>Problema achado: <?php echo $_GET["ptitle"]; ?></title>
		<meta charset="UTF=8">
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


			<div id="container-site">

				<h1>Handyman</h1>

			</div>


			<nav>

				<ol class="navbar">

					<li><a href="profile.php"><?php echo $_SESSION["sname"]; ?></a></li>

					<li><a href="../../public/html/index.html">Home</a></li>

			</nav>

		</header>

		<main class="main">

			<section id="post-header">

				<h2><?php echo $titulo ?></h2>

			</section>

			<section class="post-text" id="post-context">

				<p><?php echo $_GET["pdesc"]; ?></p>

			</section>

		</main>

		<footer class="footer"></footer>

	</body>
</html>
