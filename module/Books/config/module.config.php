<?php
/**.
 * Date: 2/12/16
 * Time: 7:09 AM
 * File: Books/config/module.config.php
 */

return array(
    'service_manager' => array(
        'invokables' => array(
            'Books\Service\ListServiceInterface' => 'Books\Service\ListService'
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'Books\Controller\List' => 'Books\Factory\ListControllerFactory'
        )

    ),
    'router' => array(
        'routes' => array(
            'List' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
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