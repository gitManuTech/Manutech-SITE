<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

require_once __DIR__."/../src/private/php/db-queries.php";

final class MockDb extends TestCase
{
	/** @test */
	public function verifyDatabaseConnection(): void
	{
		$conn_db_type = connect_db();

		$this->assertIsObject($conn_db_type, "Failed to connect to DB!");
	}

	/** @test */
	public function verifyDataBeingSelected(): void
	{
		$get_cred_type = get_credentials("John", "1B", "Ciências");

		// mysqli->query documentation: https://tinyurl.com/ye2xd943
		$this->assertIsObject($get_cred_type, "Could not retrieve mock user data");
	}
}

?>
