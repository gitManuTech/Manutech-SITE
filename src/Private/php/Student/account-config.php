<?php
// I need the $_SESSION["uid"], so i really need session_start() here
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

	<head>

		<title>ManuTech - Configurações da Conta</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Configuração da conta do aluno">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/general.css">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/header.css">
		<link rel="stylesheet" type="text/css" href="../../../Public/css/acc-config.css">

	</head>

	<body onload="loadStudentInfo()">

		<header class="header">

			<h1>Configurações de Conta<span class="student-info"></span></h1>

		</header>

		<main class="main">

			<form id="del-acc-form" name="del-acc-form" action="del-acc-server.php" method="POST">

				<div class="form-part">

					<label for="del-acc-btn" class="del-acc">Deletar Conta:</label>
					<button type="submit" id="del-acc-btn" name="del-acc-btn">Deletar</button>
		
				</div>

			</form>

			<form id="ch-cour-form" name="ch-cour-form" onsubmit="return updateStudentCourse()">

				<div class="form-part">

					<label for="current-course">Curso atual:</label>
					<input type="text" id="current-course" name="current-course"
					value="<?php echo $_SESSION["scourse"]; ?>" readonly>

					<label for="new-course">Curso novo:</label>
					<input type="text" id="new-course" name="new-course"
					placeholder="Nome do curso novo">

				</div>

				<div class="form-part">

					<button type="submit" id="ch-cour-btn">Registrar curso atual</button>

				</div>

			</form>

		</main>

		<footer class="footer">

			<p>ManuTech group INC. &copy;2024</p>

		</footer>

		<script type="text/javascript" src="../../js/account-config.js"></script>
		<script type="text/javascript" src="../../js/load-student-data.js"></script>

	</body>

</html>
