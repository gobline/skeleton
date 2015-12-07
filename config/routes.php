<?php

return [
    Gobline\Router\RouteCollection::class => [
        'configure' => [
            'configurator' => Gobline\Router\Provider\Gobline\RouteCollectionConfigurator::class,
            'data' => [
                'routes' => [
                    [
                        'name' => 'homepage',
                        'path' => '/',
                        'allows' => 'GET',
                        'values' => [
                            '_view' => [
                                'text/html' => getcwd().'/app/Index/View/templates/homepage.phtml'
                            ],
                            '_layouts' => [
                                getcwd().'/app/Index/View/layouts/main.phtml',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
