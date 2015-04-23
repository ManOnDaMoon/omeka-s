<?php
return array(
    'navigation' => array(
        'admin' => array(
            array(
                'label'      => 'Items',
                'route'      => 'admin/default',
                'controller' => 'item',
                'resource'   => 'Omeka\Controller\Admin\Item',
                'class'      => 'resources',
                'privilege'  => 'browse',
                'pages' => array(
                    array(
                        'route'      => 'admin/id',
                        'controller' => 'item',
                        'visible'    => false,
                    ),
                ),
            ),
            array(
                'label'      => 'Media',
                'route'      => 'admin/default',
                'controller' => 'media',
                'resource'   => 'Omeka\Controller\Admin\Media',
                'class'      => 'resources',
                'pages' => array(
                    array(
                        'route'      => 'admin/id',
                        'controller' => 'media',
                        'visible'    => false,
                    ),
                ),
            ),
            array(
                'label'      => 'Item Sets',
                'route'      => 'admin/default',
                'controller' => 'item-set',
                'resource'   => 'Omeka\Controller\Admin\ItemSet',
                'class'      => 'resources',
                'privilege'  => 'browse',
                'pages' => array(
                    array(
                        'route'      => 'admin/id',
                        'controller' => 'item-set',
                        'visible'    => false,
                    ),
                ),
            ),
            array(
                'label'      => 'Vocabularies',
                'route'      => 'admin/default',
                'controller' => 'vocabulary',
                'action'     => 'browse',
                'resource'   => 'Omeka\Controller\Admin\Vocabulary',
                'class'      => 'ontology',
                'privilege'  => 'browse',
                'pages' => array(
                    array(
                        'route'      => 'admin/id',
                        'controller' => 'vocabulary',
                        'visible'    => false,
                    ),
                ),
            ),
            array(
                'label'      => 'Resource Templates',
                'route'      => 'admin/default',
                'controller' => 'resource-template',
                'action'     => 'browse',
                'resource'   => 'Omeka\Controller\Admin\ResourceTemplate',
                'class'      => 'ontology',
                'privilege'  => 'browse',
                'pages'      => array(
                    array(
                        'route'      => 'admin/id',
                        'controller' => 'resource-template',
                        'visible'    => false,
                    ),
                    array(
                        'route'      => 'admin/default',
                        'controller' => 'resource-template',
                        'visible'    => false,
                    ),
                ),
            ),
            array(
                'label'      => 'Users',
                'route'      => 'admin/default',
                'controller' => 'user',
                'action'     => 'browse',
                'resource'   => 'Omeka\Controller\Admin\User',
                'class'      => 'users',
                'privilege'  => 'browse',
                'pages' => array(
                    array(
                        'route'      => 'admin/id',
                        'controller' => 'user',
                        'visible'    => false,
                    ),
                ),
            ),
            array(
                'label'      => 'Modules',
                'route'      => 'admin/default',
                'controller' => 'module',
                'resource'   => 'Omeka\Controller\Admin\Module',
                'class'      => 'modules',
            ),
            array(
                'label'      => 'Jobs',
                'route'      => 'admin/default',
                'controller' => 'job',
                'resource'   => 'Omeka\Controller\Admin\Job',
                'class'      => 'jobs',
            ),
            array(
                'label'      => 'Sites',
                'route'      => 'admin/default',
                'controller' => 'site',
                'action'     => 'browse',
                'resource'   => 'Omeka\Controller\Admin\Site',
                'privilege'  => 'browse',
                'class'      => 'sites',
            ),
            array(
                'label'      => 'Settings',
                'route'      => 'admin/default',
                'controller' => 'setting',
                'action'     => 'browse',
                'resource'   => 'Omeka\Controller\Admin\Setting',
            ),

        ),
        'user' => array(
            array(
                'label'         => 'User Information',
                'route'         => 'admin/id',
                'action'        => 'edit',
                'useRouteMatch' => true,
            ),
            array(
                'label'         => 'Password',
                'route'         => 'admin/id',
                'action'        => 'change-password',
                'useRouteMatch' => true,
            ),
            array(
                'label'         => 'API Keys',
                'route'         => 'admin/id',
                'action'        => 'edit-keys',
                'useRouteMatch' => true,
            ),
        ),
    ),
);
