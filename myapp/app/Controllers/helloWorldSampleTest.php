<?php namespace App\Controllers;
// defined('BASEPATH') OR exit('No direct script access allowed');

class helloWorld {
	private $helloWorld = "";

	public function __construct() {
		$this->helloWorld = 'Hello World';
	}

	public function displayHelloWorld() {
		return $this->helloWorld;
	}
}
