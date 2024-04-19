<?php 

session_start();

$name		= $_SESSION["sname"];
$classroom	= $_SESSION["sroom"];
$course		= $_SESSION["scourse"];

?>
<!DOCTYPE html>
<html>

	<head>

		<title>Handyman - Perfil</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<meta name="description" content="The student profile page" />
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/general.css" />
		<link rel="stylesheet" type="text/css" href="../css/profile.css" />

	</head>

	<body>

		<header id="main-header" class="header">

			<div id="student-container-info">

				<div class="name-classroom">

					<div id="student-name" class="important-info">

						<p class="student-info"><?php echo $name; ?></p>

					</div>

					<div id="student-room" class="important-info">

						<p class="student-info"><?php echo $classroom; ?></p>

					</div>

				</div>

				<div id="student-course" class="important-info">

					<p class="student-info"><?php echo $course; ?></p>

				</div>

			</div>

			<nav class="header-nav">

				<ol class="navbar">

					<li><a href="logoff.php">Deslogar</a></li>
<!--TODO: CREATE "account-config.php" file-->
					<li><a href="account-config.php">Configurar Conta</a></li>

				</ol>

			</nav>

		</header>

		<main>

<?php // TODO: create function to select all of the problems that the user has made ?>
			<div id="user-problems"></div>

			<section id="container-btn-problem">

				<!--TODO: use Javascript later down-->
				<button id="btn-problem"><a href="problem.php">Achou um problema? Avise aqui!</a></button>

			</section>

			<section id="see-posts">

				<p><a href="posts.php">Ver reclamações de outros alunos</a></p>

			</section>

		</main>


		<footer class="footer">

			<p>Handyman group INC. &copy;2024</p>

		</footer>


		<script type="text/javascript">

			// READTHIS: https://stackoverflow.com/questions/14100563/how-to-redirect-on-another-page-and-pass-parameter-in-url-from-table
			function relatar() {

				window.location.href = "./problem.php";

			}


		</script>

	</body>

</html>
