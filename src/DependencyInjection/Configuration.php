<?php
/**
 * Created by PhpStorm.
 * User: bghanem
 * Date: 13/02/2019
 * Time: 15:42
 */

namespace Bg\HelloBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('bg_hello');
        $rootNode
            ->children()
            ->integerNode('min_sunshine')->defaultValue(3)->end()
            ->end()
        ;
        return $treeBuilder;
    }
}