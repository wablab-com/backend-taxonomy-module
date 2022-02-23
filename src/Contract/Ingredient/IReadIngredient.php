<?php

namespace WabLab\Taxonomy\Contract\Ingredient;

interface IReadIngredient extends ICrudIngredient
{
    public function returnEntity(&$entity):static;

    // read
    public function fetchById():static;

}