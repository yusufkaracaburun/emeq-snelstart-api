<?php

declare(strict_types=1);

it('invokes the authenticator factory', function (): void {
    $closure = app('snelstart.authenticator-factory');
    $creds   = new Emeq\SnelstartApi\Data\SnelstartCredentials(clientKey: 'ck', subscriptionKey: 'sk');

    $auth = $closure($creds);

    expect($auth)->toBeInstanceOf(Emeq\SnelstartApi\Auth\ClientKeyAuthenticator::class);
});
