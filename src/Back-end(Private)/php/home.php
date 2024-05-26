<?php

require_once "Database/db-student-queries.php";
require_once "display.php";

session_start();

?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<title>Handyman - Home</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Home page for other posts">
		<link rel="stylesheet" type="text/css" href="../../Front-end(Public)/css/general.css">
		<link rel="stylesheet" type="text/css" href="../../Front-end(Public)/css/header.css">
		<link rel="stylesheet" type="text/css" href="../../Front-end(Public)/css/home.css">

	</head>

	<body>

		<header class="header">

			<div id="site-logo">

				<img src="#" alt="Handyman logo">

			</div>

			<div id="site-name">

				<h1>ManuTech</h1>

			</div>

			<nav>

				<ol class="navbar">

					<li><a href="profile.php"><?php echo $_SESSION["sname"]; ?></a></li>
					<li><a href="account-config.php">Configurações</a></li>
					<li><a href="../../Front-end(Public)/html/">Página Inicial</a></li>

				</ol>

			</nav>

		</header>

		<main class="main">

			<section id="posts">

				<header id="posts-header">

					<h3>Posts feitos pelos Alunos</h3>

				</header>

				<div id="posts-all">

					<?php display_all_posts(); ?>

				</div>

			</section>

		</main>

		<footer class="footer">

			<p>Handyman group INC. &copy;2024</p>

		</footer>

	</body>

</html>
