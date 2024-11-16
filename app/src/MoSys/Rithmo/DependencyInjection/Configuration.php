<?php

namespace MoSys\Rithmo\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('rithmo');

        // Optional: Hier können Sie Konfigurationsoptionen definieren

        return $treeBuilder;
    }
}
