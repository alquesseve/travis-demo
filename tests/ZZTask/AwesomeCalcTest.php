<?php

use \ZZTask\Calculator\AwesomeCalc;

class Awesom extends PHPUnit_Framework_TestCase
{

	public function setUp() {
		echo "I run before each text\n";
	}

	public function testWhoAmI()
	{
		$awesomecalc = new AwesomeCalc();

		$this->assertEquals($awesomecalc->whoAmI(), 'AwesomeCalc');
	}

	public function testAddTwoPositiveValues() {

		$awesomecalc = new AwesomeCalc();

		$a = 1;
		$b = 1;

		$this->assertEquals($awesomecalc->add($a, $b), 2);

	}

	public function testDiv() {

		$awesomecalc = new AwesomeCalc();

		$a = 4;
		$b = 2;

		$this->assertEquals($awesomecalc->div($a, $b), 2);

	}

	public function tearDown() {
		echo "I run after each test\n";
	}


}