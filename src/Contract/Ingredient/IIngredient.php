<?php

namespace WabLab\Taxonomy\Contract\Ingredient;

interface IIngredient
{
    public function setInput(string $key, mixed $value):static;
    public function returnInput(&$input):static;
    public function setInputs(array $inputs):static;
    public function returnInputs(&$inputs):static;
    public function validateInputs():static;
    public function filterInputs():static;
}