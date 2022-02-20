<?php

declare(strict_types=1);

namespace CatCasCarSkillboxSymfony\ArticleContentProvider;

use CatCasCarSkillboxSymfony\ArticleContentProvider\DependencyInjection\ArticleContentProviderExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ArticleContentProviderBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if ($this->extension === null) {
            $this->extension = new ArticleContentProviderExtension();
        }

        return $this->extension;
    }
}
