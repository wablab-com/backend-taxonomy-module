<?php

namespace WabLab\Taxonomy\Contract\Ingredient;

interface IIngredient
{
    public function setInput(string $key, mixed $value):static;
    public function returnInput(string $key, &$input, mixed $defaultReturn = null):static;
    public function setInputs(array $inputs):static;
    public function returnInputs(&$inputs, $defaultReturn = null):static;
    public function validateInputs():static;
    public function filterInputs():static;
}