<?php

namespace WabLab\Taxonomy\Contract\Repository;

use WabLab\Taxonomy\Entity\ITaxonomyEntity;

interface ITaxonomyRepository
{
    public function saveEntity(ITaxonomyEntity $entity):void;
}