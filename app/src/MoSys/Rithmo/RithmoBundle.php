<?php

namespace MoSys\Rithmo;

use MoSys\Rithmo\DependencyInjection\RithmoExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class RithmoBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if ($this->extension === null) {
            $this->extension = new RithmoExtension();
        }

        return $this->extension;
    }
}