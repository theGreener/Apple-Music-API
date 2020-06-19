<?php

namespace Tests;

use AppleMusic\KeyService;
use AppleMusic\Exception\NotFoundException;
use PHPUnit\Framework\TestCase;

class KeyServiceTest extends TestCase
{
    protected $keyService;

    public function setUp()
    {
        $this->keyService = new KeyService(
            __DIR__ . '/Fixtures/TeamID',
            __DIR__ . '/Fixtures/KeyID',
            __DIR__ . '/Fixtures/AuthKey.p8',
            __DIR__ . '/Fixtures/UserToken'
        );
    }

    public function testGetUserToken()
    {
        $this->assertEquals(
            'QXBwbGVNdXNpYyBBUEkgVGVzdCBBcHBsZU11c2ljIEFQSSBUZXN0IEFwcGxlTXVzaWMgQVBJIFRlc3Q'.
                'gQXBwbGVNdXNpYyBBUEkgVGVzdCBBcHBsZU11c2ljIEFQSSBUZXN0IEFwcGxlTXVzaWMgQVBJIFRlc3QgQXBwbGVNdXNpYyBBUEk'.
                'gVGVzdCBBcHBsZU11c2ljIEFQSSBUZXN0IEFwcGxlTXVzaWMgQVBJIFRlc3Q=',
            $this->keyService->getUserToken()
        );
    }

    public function testGetPrivateKeyFilePath()
    {
        $this->assertEquals(
            __DIR__ . '/Fixtures/AuthKey.p8',
            $this->keyService->getPrivateKeyFilePath()
        );
    }

    public function testGetKeyID()
    {
        $this->assertEquals(
            '01AB02CD03',
            $this->keyService->getKeyID()
        );
    }

    public function testGetTeamID()
    {
        $this->assertEquals(
            '12AB34CD5E',
            $this->keyService->getTeamID()
        );
    }

    public function testThrowsNotFoundException()
    {
        $keyService = new KeyService(
            __DIR__ . '/Fixtures/null',
            '',
            '',
            ''
        );

        $this->expectException(NotFoundException::class);
        $keyService->getTeamID();
    }
}
