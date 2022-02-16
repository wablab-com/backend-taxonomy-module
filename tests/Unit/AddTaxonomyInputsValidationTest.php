<?php

namespace WabLab\Taxonomy\Test\Integration;

use PHPUnit\Framework\TestCase;
use WabLab\Taxonomy\Contract\Service\IService;
use WabLab\Taxonomy\Service\AddTaxonomyService;

class AddTaxonomyInputsValidationTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
    }
    
    public function testIfValidationClassExists() {
        $obj = new AddTaxonomyInputVlidation();
        $this->assertInstanceOf(AddTaxonomyInputVlidation::class, $obj);
        
    }
}

/*
 * 1- To check if the validation class exists
 * 2-
 */