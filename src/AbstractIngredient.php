<?php
namespace WabLab\Taxonomy;

abstract class AbstractIngredient {
    
    public function setInput(string $key, mixed $value): static {
        return $this;
    }
    
    public function returnInput($key): static {
        return $this;
    }
}