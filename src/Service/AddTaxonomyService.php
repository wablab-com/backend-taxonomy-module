<?php

namespace WabLab\Taxonomy\Service;

use WabLab\Taxonomy\Contract\Service\IAddTaxonomyService;

use function PHPUnit\Framework\isEmpty;

class AddTaxonomyService implements IAddTaxonomyService
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

    public function process(): static
    {
        // TODO: Implement process() method.
    }

    public function output(string $key): mixed
    {
        return $this->outputs[$key] ?? null;
    }
    
    public function outputs(): array {
        // TODO: Implement outputs() method.
    }
    
    public function setOutput(string $key, mixed $value): void
    {
        $this->outputs[$key] = $value;
    }
    
}