<?php

namespace WabLab\Taxonomy\Contract\Ingredient;

interface ICreateIngredient extends ICrudIngredient
{
    // create
    public function initNewEntity():static;

    // retrive
    public function returnEntity(&$entity):static;

    // write
    public function persist():static;
    
    // update
    public function fillInputsIntoEntity():static;

}