<?php

namespace AppleMusic;

use AppleMusic\KeyService;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Ecdsa\Sha256;
use Lcobucci\JWT\Signer\Key;

class ApiTokenGenerator
{
    private const TOKEN_ALG = 'ES256';
    private const MAX_EXP_DAYS = 30;

    private $keyService;
    private $time;

    /**
     * @param int $time
     */
    public function __construct(KeyService $keyService, $time = null)
    {
        $this->keyService = $keyService;
        $this->time = $time ?: time();
    }

    public function generateDeveloperToken()
    {
        $token = (new Builder())
            ->withHeader('alg', self::TOKEN_ALG)
            ->withHeader('kid', $this->keyService->getKeyID())
            ->withClaim('iss', $this->keyService->getTeamID())
            ->withClaim('iat', (int) $this->time)
            ->withClaim('exp', (int) $this->time + (self::MAX_EXP_DAYS * 86400))
            ->getToken(
                new Sha256(),
                new Key('file://'.$this->keyService->getPrivateKeyFilePath())
            );

        return (string) $token;
    }
}
