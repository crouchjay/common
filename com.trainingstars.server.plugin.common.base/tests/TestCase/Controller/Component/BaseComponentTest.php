<?php
namespace Base\Test\TestCase\Controller\Component;

use Cake\TestSuite\TestCase;
use Cake\Http\Client\Request;
use Cake\Controller\ComponentRegistry;
use Base\Controller\Component\BaseComponent;
use Cake\Controller\Controller;

class BaseComponentTest extends TestCase {
	
	/** @var BaseComponent */
	private $component = null;
	
	/** @var Controller */
	private $controller = null;
	
	public function setUp() {
		parent::setUp();
		
		$request = $this->getMockBuilder(Request::class)
			->setMethods(['is'])
			->getMock();
		
		$this->controller = $this->createMock(Controller::class);
		
		$this->controller->request = $request;
		
		$registry = new ComponentRegistry($this->controller);
		$this->component = new BaseComponent($registry);
	}
	
	public function tearDown() {
		parent::tearDown();
		
		unset($this->component, $this->controller);
	}
	
	public function testRequestIsAPostOrPutRequestExpectsTrue() {
		$this->controller->request->expects($this->once())
			->method('is')
			->with($this->anything())
			->willReturn(true);
		
		$this->assertTrue($this->component->requestIsAPostOrPutRequest());
	}
	
	public function testRequestIsAPostOrPutRequestIsExpectsFalse() {
		$this->controller->request->expects($this->once())
			->method('is')
			->with($this->anything())
			->willReturn(false);
		
		$this->assertFalse($this->component->requestIsAPostOrPutRequest());		
	}
	
	public function testRequestIsEmptyParameter() {
		$this->controller->request->expects($this->never())
			->method('is')
			->with($this->anything());
		
		$this->assertFalse($this->component->requestIs([]));
	}
	
	public function testRequestIsWithANullReturnValueForIsMethod() {
		$this->controller->request->expects($this->never())
			->method('is')
			->with($this->anything())
			->willReturn(null);
		
		$this->assertFalse($this->component->requestIs([]));
	}
}