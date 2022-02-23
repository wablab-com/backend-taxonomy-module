<?php

namespace WabLab\Taxonomy\Contract\Ingredient;

interface IDeleteIngredient extends ICrudIngredient
{
    // read
    public function fetchById():static;

    // delete
    public function delete():static;
}