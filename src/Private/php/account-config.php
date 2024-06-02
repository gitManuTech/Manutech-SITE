<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

	<head>

		<title>ManuTech - Configurações da Conta</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Configuração da conta do aluno">

		<link rel="stylesheet" type="text/css" href="../../Public/css/general.css">
		<link rel="stylesheet" type="text/css" href="../../Public/css/header.css">
		<link rel="stylesheet" type="text/css" href="../../Public/css/acc-config.css">

	</head>

	<body onload="loadStudentInfo()">

		<header class="header">

			<h1>Configurações de <span class="student-info"></span></h1>

		</header>

		<main class="main">

			<form id="del-acc-form" name="del-acc-form" action="del-acc-server.php" method="POST">

				<div class="form-part">

					<label for="del-acc-btn" class="del-acc">Deletar Conta:</label>
					<button type="submit" id="del-acc-btn" name="del-acc-btn">Deletar</button>

				</div>

			</form>

		</main>

		<footer class="footer">

			<p>ManuTech group INC. &copy;2024</p>

		</footer>

		<script type="text/js" src="../js/account-config.js"></script>
		<script type="text/javascript" src="../js/load-student-data.js"></script>

	</body>

</html>
