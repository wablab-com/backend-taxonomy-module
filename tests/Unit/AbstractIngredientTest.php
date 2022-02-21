<?php
namespace WabLab\Taxonomy\Test\Unit;

use PHPUnit\Framework\TestCase as TestCase;
use WabLab\Taxonomy\AbstractIngredient;
use WabLab\Taxonomy\Contract\Ingredient\IIngredient;

class AbstractIngredientTest extends TestCase {
    public AbstractIngredient $mockedClass;
    
    protected function setUp(): void {
        parent::setUp();
        $this->mockedClass = $this->getMockForAbstractClass(AbstractIngredient::class);
    }
    public function testIsInitialazble() {
        $this->getMockForAbstractClass(AbstractIngredient::class);
        $this->assertInstanceOf(AbstractIngredient::class, $this->mockedClass);
    }
    
    public function testSingleInputSetterShouldReturnAsSelfReference() {
        $this->assertInstanceOf(AbstractIngredient::class, $this->mockedClass->setInput('title', 'this is my title'));
    }
    
    public function testSingleInputGetterShouldReturnAsSelfReference() {
        $this->assertInstanceOf(AbstractIngredient::class, $this->mockedClass->returnInput('title'));
    }
}