<?php

declare(strict_types=1);

namespace CatCasCarSkillboxSymfony\ArticleContentProviderBundle\Event;

use Symfony\Contracts\EventDispatcher\Event;

class OnBeforeWordPasteEvent extends Event
{
    private string $word;
    private int $position;

    public function __construct(string $word, int $position)
    {
        $this->word = $word;
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getWord(): string
    {
        return $this->word;
    }

    /**
     * @param string $word
     */
    public function setWord(string $word): void
    {
        $this->word = $word;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
}
