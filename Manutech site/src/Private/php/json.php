<?php

function check_json_err(bool $incoming_json): void {
	if(!$incoming_json) {
		echo "Houve algum tipo de erro: ";
		echo json_last_error_msg(). " ID do erro: ".json_last_error();
		exit(1);
	}
}

function get_json(): array {
	$incoming_json	= file_get_contents("php://input");

	check_json_err($incoming_json);

	$json_decoded	= json_decode($incoming_json, true);

	return $json_decoded;
}

?>
