<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

require_once __DIR__."/../src/php/db-queries.php";

final class MockDb extends TestCase
{
	/** @test */
	public function verifyDatabaseConnection(): void
	{

		$this->assertIsObject(connect_db());

	}

	/** @test */
	public function verifyDataBeingSelected(): void
	{

		// https://www.php.net/manual/pt_BR/mysqli-result.fetch-assoc.php
		$this->assertIsObject(get_credentials("John", "1B", "Ciências"));

	}
}

?>
