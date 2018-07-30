<?php
return [
    'router'      => [
        'routes' => [
            'application' => [
                'type'    => 'Literal',
                'options' => [
                    'route'    => '/app',
                    'defaults' => [
                        '__NAMESPACE__' => 'Estoque\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index'
                    ]
                ]
            ]
        ]
    ],
    'controllers' => [
        'invokables' => [
            'Estoque\Controller\Index' => 'Estoque\Controller\IndexController'
        ]
    ],
    'view_manager' => [
        'template_path_stack' => [__DIR__.'/../view/']
    ]
];