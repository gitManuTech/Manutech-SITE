<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<title>Handyman - Problem Found</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="">
		<meta name="description" content="Página para relatar problemas">
		<link rel="stylesheet" type="text/css" href="../../public/css/general.css">
		<link rel="stylesheet" type="text/css" href="../../public/css/header.css">
		<link rel="stylesheet" type="text/css" href="../../public/css/form-problem.css">

	</head>

	<body>

		<header class="header">

			<div class="header-img-container">

				<img src="#" alt="Handyman logo" id="logo">

			</div>

			<div class="header-title">

				<h2>Faça a sua reclamação</h2>

			</div>

			<nav>

				<ol class="navbar">

					<li><a href="./profile.php"><?php echo $_SESSION["sname"]; ?></a></li>
					<li><a href="../html/">Home</a></li>

				</ol>

			</nav>

		</header>

		<main>

			<form id="form-problem-found" method="POST" action="problem-found-server.php" autocomplete="off">

				<div class="form-aggregate ">

					<div class="form-part problem-title">

						<!-- TODO: Make the input better: filter stuff with JS... -->
						<label for="problem-title">Resumo do problema</label>
						<input type="text" id="problem-title"  class="complain-title" name="problem-title" placeholder="Titulo do problema" maxlength="32" autofocus required>

					</div>


					<div class="form-part problem-block">

						<label for="problem-block">Identifique o bloco</label>
						<input type="text" id="problem-block" class="complain-location" name="problem-block" placeholder="B1" maxlength="2" pattern="[A-Z]{1,1}\d{1,1}" required>

					</div>

				</div>

				<div class="form-aggregate">

					<div class="form-part">

						<div class="problem-area">

							<!-- TODO: Verify <textarea>'s length on Javascript, later down the line  -->
							<label for="problem-description">Descreva o problema</label>

							<!-- TODO: We might need to resize it later down -->
							<textarea
							id="problem-description" class="complain-description"
							name="problem-descriptor" placeholder="Dê uma descrição detalhada ao problema"
							maxlength="255" onkeydown="enableBtn()"></textarea>

						</div>

						<div id="submit-btn-container">

							<button type="submit" id="submit-btn" disabled>Enviar reclamação</button>

						</div>

					</div>

				</div>

			</form>

		</main>

		<footer class="footer">

			<p>Handyman Group INC. &copy;2024</p>

		</footer>

		<script type="text/js" src="../js/problem-found-client.js"></script>

		<script>

			function enableBtn() {
				const problemArea	= document.getElementById("problem-description");
				const studentProblemLen	= problemArea.value.length;
				const minLength		= parseInt(problemArea.maxLength * (15 / 100));
				const submitBtn		= document.getElementById("submit-btn");

				if(studentProblemLen >= minLength) {
					submitBtn.disabled = false;
				} else {
					submitBtn.disabled = true;
				}
			}

		</script>

	</body>

</html>
