<?php

namespace WabLab\Taxonomy\Contract\Ingredient;

interface IUpdateIngredient extends ICrudIngredient
{
    public function returnEntity(&$entity):static;

    // read
    public function fetchById():static;

    // write
    public function persist():static;

    // update
    public function fillInputsIntoEntity():static;

}