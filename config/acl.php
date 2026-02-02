<?php

declare(strict_types=1);

return [
    'roles' => [
        'Superadmin' => 'web',
    ],

    'permission_groups' => [
        'Users' => [
            'users.create',
            'users.read',
            'users.update',
            'users.delete.hard',
            'users.delete.soft',
        ],

        'Roles' => [
            'roles.create',
            'roles.read',
            'roles.update',
            'roles.delete.hard',
            'roles.delete.soft',
        ],
    ],
];
