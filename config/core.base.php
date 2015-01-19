<?php

return [
    //'error.redirector' => null,

    'acl.routes.definitions' => [
        'roles' => [
            'unauthenticated' => [],
        ],
        'resources' => [
            'index/' => [
                'rules' => [
                    [
                        'role' => 'unauthenticated',
                    ],
                ],
            ],
        ],
    ],
];
