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
    
    protected function tearDown(): void {
        parent::tearDown();
        unset($this->mockedClass);
    }
    
    public function testIsInitializable() {
        $this->assertInstanceOf(AbstractIngredient::class, $this->mockedClass);
    }
    
    public function testSingleInputSetterShouldReturnAsSelfReference() {
        $this->assertInstanceOf(AbstractIngredient::class, $this->mockedClass->setInput('title', 'this is my title'));
    }
    
    public function testSingleInputGetterShouldReturnAsSelfReference() {
        $this->assertInstanceOf(AbstractIngredient::class, $this->mockedClass->returnInput('title', $return));
    }
    
    public function testSingleInputSetterAndGetterNullReturn() {
        $this->mockedClass->returnInput('invalid_key', $returnValue);
        $this->assertNull($returnValue);
    }
    
    public function testSingleInputSetterAndGetter() {
        $this->mockedClass->setInput('title', 'title value')->returnInput('title', $returnValue);
        $this->assertEquals('title value', $returnValue, 'Values are not the same!');
    }
    
    public function testSingleInputGetterDefaultReturn() {
        $this->mockedClass->returnInput('invalid_key', $returnValue, 'Default return');
        $this->assertEquals('Default return', $returnValue);
    }
}