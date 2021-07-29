<?php

class SessionTest extends \PHPUnit\Framework\TestCase {
	public function testSessionHelperExists() {
		$this->assertNotFalse(function_exists('session'));
	}

	public function testSessionClassExists() {
		$this->assertNotFalse(class_exists('\Joem\App\Session'));
	}

	public function testSessionCanAddIndex() {
		$this->assertTrue(session()->set('key', 'value')->get('key') == 'value');
	}

	public function testSessionHasIndex() {
		$this->assertTrue(session()->set('key', 'value')->has('key'));
	}
}
