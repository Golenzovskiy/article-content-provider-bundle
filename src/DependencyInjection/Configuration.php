<?php

declare(strict_types=1);

namespace CatCasCarSkillboxSymfony\ArticleContentProvider\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('catcascar_article_content_provider');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->booleanNode('is_bold')->defaultTrue()->info('Bold or italic word style')->end()
                ->scalarNode('article_word_decorator')->defaultNull()->info('Content decorator class')->end()
            ->end();

        return $treeBuilder;
    }
}
