<?php
/**.
 * Date: 2/12/16
 * Time: 7:09 AM
 * File: Books/config/module.config.php
 */

return array(
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Books\Controller\List' => 'Books\Controller\ListController'
        )
    ),
    'router' => array(
        'routes' => array(
            'lister' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/books',
                    'defaults' => array(
                        'controller' => 'Books\Controller\List',
                        'action' => 'index',
                    )
                )
            )
        )
    )
);