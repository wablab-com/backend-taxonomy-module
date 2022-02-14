<?php

namespace WabLab\Taxonomy\Service;
use WabLab\Taxonomy\Contract\Service\IService;

abstract class AbstractService implements IService
{

    protected array $inputs = [];
    protected array $outputs = [];

    public function input(string $key, mixed $value): static
    {
        $this->inputs[$key] = $value;
        return $this;
    }

    public function inputs(array $inputs): static
    {
        $this->inputs = $inputs;
        return $this;
    }

    public function getInput(string $key): mixed
    {
        return $this->inputs[$key] ?? null;
    }

    public function getInputs(): array
    {
        return $this->inputs;
    }

    public function output(string $key): mixed
    {
        return $this->outputs[$key] ?? null;
    }
    
    public function outputs(): array {
        return $this->outputs;
    }
    
    public function setOutput(string $key, mixed $value): void
    {
        $this->outputs[$key] = $value;
    }
    
}