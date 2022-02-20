<?php

declare(strict_types=1);

namespace CatCasCarSkillboxSymfony\ArticleContentProvider;

class MarkdownWordDecorator implements WordDecoratorInterface
{
    public function decorate(string $word, bool $isBold = true): string
    {
        $marker = $isBold ? '**' : '*';
        return $marker . $word . $marker;
    }
}