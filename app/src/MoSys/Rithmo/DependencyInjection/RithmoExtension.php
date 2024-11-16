<?php

namespace MoSys\Rithmo\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class RithmoExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        // Bundle-spezifische Konfiguration laden
    }
}
