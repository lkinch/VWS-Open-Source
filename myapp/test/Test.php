<?php

require_once 'app/Views/landing_page.php' ;

use landing_page\helloWorld;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
	public function testHelloWorldFunctionCanOutputHelloWorld(): void {
		$helloWorldObj = new helloWorld();
		$this->assertEquals($helloWorldObj->displayHelloWorld(), 'Hello World');
	}
}
