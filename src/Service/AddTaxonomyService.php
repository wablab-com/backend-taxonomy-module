<?php

namespace WabLab\Taxonomy\Service;

use WabLab\Taxonomy\Contract\Service\IAddTaxonomyService;

class AddTaxonomyService implements IAddTaxonomyService
{

    protected array $inputs = [];

    public function input(string $key, mixed $value): static
    {
        $this->inputs[$key] = $value;
        return $this;
    }

    public function inputs(array $inputs): static
    {
        // TODO: Implement inputs() method.
    }

    public function getInput(string $key): mixed
    {
        return $this->inputs[$key] ?? null;
    }

    public function getInputs(): array
    {
        // TODO: Implement getInputs() method.
    }

    public function process(): static
    {
        // TODO: Implement process() method.
    }

    public function output(string $key): mixed
    {
        // TODO: Implement output() method.
    }

    public function setOutput(string $key, mixed $value): void
    {
        // TODO: Implement setOutput() method.
    }
}