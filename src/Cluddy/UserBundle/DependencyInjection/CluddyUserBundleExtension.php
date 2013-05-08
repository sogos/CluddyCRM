<?php 
namespace Cluddy\UserBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class CluddyUserExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('routing.yml');
    }

}