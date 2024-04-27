<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

require_once __DIR__."src/php/db-connect.php";
require_once __DIR__."src/php/db-querys.php"

final class MockDb extends TestCase
{
	/** @test */
	public function verifyDatabaseConnection(): void
	{

		$this->assertIsObject(connect_db());

	}
}

?>
