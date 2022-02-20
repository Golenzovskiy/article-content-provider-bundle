<?php

declare(strict_types=1);

namespace CatCasCarSkillboxSymfony\ArticleContentProviderBundle;

interface WordDecoratorInterface
{
    public function decorate(string $word, bool $isBold = true): string;
}
