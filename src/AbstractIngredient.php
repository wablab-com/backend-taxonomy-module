<?php
namespace WabLab\Taxonomy;

abstract class AbstractIngredient {
    protected array $inputs = [];
    
    public function setInput(string $key, mixed $value): static {
        $this->inputs[$key] = $value;
        return $this;
    }
    
    public function returnInput(string $key, &$input, mixed $defaultReturn = null): static {
        $input = $this->inputs[$key] ?? $defaultReturn;
        return $this;
    }
}