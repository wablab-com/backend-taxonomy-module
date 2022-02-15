<?php
namespace WabLab\Taxonomy\Service;
use WabLab\Taxonomy\Contract\Service\IAddTaxonomyService;
use Webmozart\Assert\Assert;

class AddTaxonomyService extends AbstractService implements IAddTaxonomyService
{
    
    public function process(): static
    {
        Assert::stringNotEmpty($this->getInput('title'), 'Invalid title input');
        Assert::nullOrStringNotEmpty($this->getInput('description'), 'Invalid description input');
        Assert::nullOrStringNotEmpty($this->getInput('parent_id'), 'Invalid parent_id input');
        
        return $this;
    }
    
}