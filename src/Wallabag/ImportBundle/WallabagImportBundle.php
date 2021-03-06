<?php

namespace Wallabag\ImportBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Wallabag\ImportBundle\Import\ImportCompilerPass;

class WallabagImportBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ImportCompilerPass());
    }
}
