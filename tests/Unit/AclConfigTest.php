<?php

test('acl roles can be retrieved from config', function () {
    $roles = config('acl.roles', []);

    expect($roles)->toBeArray()
        ->and($roles)->toHaveKey('Superadmin')
        ->and($roles['Superadmin'])->toBe('web');
});
