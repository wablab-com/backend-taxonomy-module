<?php

namespace WabLab\Taxonomy\Test\Unit;

use PHPUnit\Framework\TestCase;
use WabLab\Taxonomy\Contract\Service\IAddTaxonomyService;
use WabLab\Taxonomy\Service\AddTaxonomyService;


class AddTaxonomyServiceTest extends TestCase
{
    protected AddTaxonomyService $service;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->service = new AddTaxonomyService();
    }

    public function testCreatingAddNewServiceObject()
    {
        $this->assertInstanceOf(AddTaxonomyService::class, $this->service);
    }

    public function testThatAddNewServiceImplementsItsRelatedInterface()
    {
        $this->assertInstanceOf(IAddTaxonomyService::class, $this->service);
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
}