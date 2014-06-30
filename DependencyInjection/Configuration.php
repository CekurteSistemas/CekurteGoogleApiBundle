<?php

namespace Cekurte\GoogleApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('cekurte_google_api');

        $rootNode
            ->children()
                ->scalarNode('cekurte_google_api_application_name')->end()
                ->scalarNode('cekurte_google_api_client_id')->end()
                ->scalarNode('cekurte_google_api_client_secret')->end()
                ->scalarNode('cekurte_google_api_redirect_uri')->end()
                ->scalarNode('cekurte_google_api_developer_key')->end()
                ->scalarNode('cekurte_google_api_use_objects')->end()
                ->scalarNode('cekurte_google_api_use_state')->end()
                ->scalarNode('cekurte_google_api_use_access_type')->end()
                ->scalarNode('cekurte_google_api_approval_prompt')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
