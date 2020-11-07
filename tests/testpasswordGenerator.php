<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 1:52 PM
 */

namespace Elminson\passwordGenerator;

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class testpasswordGenerator extends TestCase
{

	/**
	 *
	 */
	function testFirstTestCase()
	{

		$passwordgenerator = new passwordGenerator();
		$this->assertEquals("index", $passwordgenerator->index());
	}

}
