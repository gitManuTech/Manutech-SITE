<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

require_once __DIR__."/../src/private/php/db-queries.php";

final class MockDb extends TestCase
{
	/** @test */
	public function verifyDatabaseConnection(): void
	{
		$this->assertIsObject(connect_db(), "Failed to connect to DB!");
	}

	/** @test */
	public function verifyDataBeingSelected(): void
	{
		// https://www.php.net/manual/en/mysqli-result.fetch-assoc.php#refsect1-mysqli-result.fetch-assoc-returnvalues
		$this->assertIsObject(get_credentials("John", "1B", "Ciências"),
			"Could not retrieve mock user data");
	}
}

?>
