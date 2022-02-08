<?php

namespace WabLab\Taxonomy\Contract\Entity;

interface ITaxonomyEntity
{
    public function getId():string;
    public function setId(string $id):void;

    public function getTitle():string;
    public function setTitle(string $title):void;

    public function getDescription():string;
    public function setDescription(string $description):void;

    public function getParentId():string;
    public function setParentId(string $parentId):void;
}