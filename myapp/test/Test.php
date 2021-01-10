<?php

require_once 'app/Controllers/helloWorldSampleTest.php' ;

use App\Controllers\helloWorld;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
	public function testHelloWorldFunctionCanOutputHelloWorld(): void {
		$helloWorldObj = new helloWorld();
		$this->assertEquals($helloWorldObj->displayHelloWorld(), 'Hello World');
	}
}
