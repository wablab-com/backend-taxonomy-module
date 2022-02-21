<?php

namespace WabLab\Taxonomy\Contract\Ingredient;

interface ICrudIngredient extends IIngredient
{
    public function returnEntity(&$entity):static;

    // read
    public function fetchById():static;

    // write
    public function persist():static;

    // create
    public function initNewEntity():static;

    // update
    public function fillInputsIntoEntity():static;

    // delete
    public function delete():static;
}