<?php

namespace WabLab\Taxonomy\Contract\Service;

interface IService
{
    public function input(string $key, mixed $value):static;
    public function inputs(array $inputs):static;
    public function getInput(string $key):mixed;
    public function getInputs():array;

    public function process():static;

    public function output(string $key):mixed;
    public function outputs():array;
    public function setOutput(string $key, mixed $value):void;
}