<?php 

require_once "display.php";

session_start();

$uid	= $_SESSION["uid"];

?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<title>Handyman - Perfil</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="description" content="The student profile page">
		<link rel="stylesheet" type="text/css" href="../../Front-end(Public)/css/header.css">
		<link rel="stylesheet" type="text/css" href="../../Front-end(Public)/css/general.css">
		<link rel="stylesheet" type="text/css" href="../../Front-end(Public)/css/profile.css">

	</head>

	<body onload="loadStudentInfo()">

		<header id="main-header" class="header">

			<div id="student-container-info">

				<div class="name-classroom">

					<div id="student-name-container">

						<p class="student-info"></p>

					</div>

					<div id="student-ra-container">

						<p class="student-info"></p>

					</div>

				</div>

				<div id="student-course-container">

					<p class="student-info"></p>

				</div>

			</div>

			<nav class="header-nav">

				<ol class="navbar">

					<li><a href="logoff.php">Deslogar</a></li>

					<li><a href="account-config.php">Configurar Conta</a></li>

				</ol>

			</nav>

		</header>

		<main class="main">

			<div id="post-container">

				<?php display_posts($uid); ?>

			</div>

			<div id="container-btn-problem">

				<p class="look-like-btn">

					<a href="problem.php" class="no-link">Achou um problema? Avise aqui!</a>

				</p>

			</div>

			<div id="see-posts">

				<p class="look-like-btn">

					<a href="home.php" class="no-link">Ver reclamações de outros alunos</a>

				</p>

			</div>

		</main>


		<footer class="footer">

			<p>Handyman group INC. &copy;2024</p>

		</footer>


		<script type="text/javascript">

			function loadStudentInfo() {
				const infoPlaces = document.getElementsByClassName("student-info");

				infoPlaces[0].innerText = localStorage["student-name"];
				infoPlaces[1].innerText = localStorage["student-ra"];
				infoPlaces[2].innerText = localStorage["student-course"];
			}

		</script>

	</body>

</html>
