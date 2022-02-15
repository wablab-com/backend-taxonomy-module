<?php

namespace WabLab\Taxonomy\Test\Integration;

use PHPUnit\Framework\TestCase;
use WabLab\Taxonomy\Contract\Service\IService;
use WabLab\Taxonomy\Service\AddTaxonomyService;

class AddTaxonomyServiceTest extends TestCase
{
    protected IService $service;

    public function setUp(): void
    {
        parent::setUp();
        $this->service = new AddTaxonomyService();
    }
}
