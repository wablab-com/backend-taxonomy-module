<?php

namespace WabLab\Taxonomy\Contract\Ingredient;

interface ITaxonomyIngredient extends ICrudIngredient
{
    public function fetchChildrenById():static;
}