<?php

namespace WabLab\Taxonomy\Test\Unit;

use PHPUnit\Framework\TestCase;
use WabLab\Taxonomy\Contract\Service\IService;
use WabLab\Taxonomy\Service\AbstractService;

class AbstractServiceTest extends TestCase
{
    protected IService $service;

    public function setUp(): void
    {
        parent::setUp();
        $this->service = $this->getMockForAbstractClass(AbstractService::class);
    }

    public function testAddingSingleInputToTheService()
    {
        $this->service->input('username', 'ahmad');
        $this->assertEquals('ahmad', $this->service->getInput('username'));
    }

    public function testAddingMultipleInputsUsingSingleInputFunctionToTheService()
    {
        $this->service->input('title', 'Category 1');
        $this->service->input('description', 'Category 1 description');
        $this->assertEquals('Category 1', $this->service->getInput('title'));
        $this->assertEquals('Category 1 description', $this->service->getInput('description'));
    }

    public function testGetInvalidInputKeyFromServiceShouldReturnNull()
    {
        $this->assertNull($this->service->getInput('invalid_key'));
    }
    
    public function testAddingMultipleInputsToTheService()
    {
        $inputs = [
            'title 1' => 'Category 1',
            'title 2' => 'Category 2',
            'title 3' => 'Category 3',
        ];
        
        $this->service->inputs($inputs);
        $this->assertEquals('Category 1', $this->service->getInput('title 1'));
        $this->assertEquals('Category 2', $this->service->getInput('title 2'));
        $this->assertEquals('Category 3', $this->service->getInput('title 3'));
        
    }
    
    public function testGettingMultipleInputsWithEmptyReturn()
    {
        $this->assertEmpty($this->service->getInputs());
    }
    
    public function testGettingMultipleInputs()
    {
        $inputs = [
            'title 1' => 'Category 1',
            'title 2' => 'Category 2',
            'title 3' => 'Category 3',
        ];
    
        $this->service->inputs($inputs);
        $this->assertIsArray($this->service->getInputs());
    }

    public function testOutputIfKeyNotExist() {
        $key = 'invalid key';
        $output = $this->service->output($key);
        $this->assertNull($output);
    }

    public function testSetOutput() {
        $this->service->setOutput('username', 'ahmad');
        $this->assertEquals('ahmad', $this->service->output('username'));
    }

    public function testOutputIfKeyIsValid() {

        $this->service->setOutput('title', 'Category 1');
        $this->assertEquals('Category 1', $this->service->output('title'));
    }

    public function testOutputsArrayDataTypeShouldBeReturned() {
        $outputs = $this->service->outputs();
        $this->assertIsArray($outputs);
    }

    public function testOutputAfterSetOutput() {
        $this->service->setOutput('title', 'Category 1');
        $this->service->setOutput('title 2', 'Category 2');
        $outputs = $this->service->outputs();
        $this->assertCount(2, $outputs, 'The out count is not matched');
        $this->assertEquals('Category 1', $outputs['title']);
        $this->assertEquals('Category 2', $outputs['title 2']);
    }
}