<?php

namespace OCA\TestApp\Tests\Unit\Controller;
use PHPUnit_Framework_TestCase;

use OCP\AppFramework\Http\TemplateResponse;

use OCA\TestApp\Controller\PageController;


class PageControllerTest extends \PHPUnit\Framework\TestCase{
	private $controller;
	private $userId = 'john';

	public function setUp():void {
		$request = $this->getMockBuilder('OCP\IRequest')->getMock();

		$service = new \OCA\TestApp\Service\TestService;
		$this->controller = new PageController(
			'testapp', $request, $service, $this->userId
		);
	}

	public function testEcho() {
		$result = $this->controller->doEcho();
		$this->assertEquals('hello echo', $result);
	}

}
