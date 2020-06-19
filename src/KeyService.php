<?php

declare(strict_types=1);

namespace AppleMusic;

class KeyService
{
    private $teamIdFile;
    private $keyIdFile;
    private $privateKeyFile;
    private $userTokenFile;

    /**
     * @param string $teamIdFile
     * @param string $keyIdFile
     * @param string $privateKeyFile
     * @param string $userTokenFile
     */
    public function __construct(string $teamIdFile, string $keyIdFile, string $privateKeyFile, string $userTokenFile)
    {
        $this->teamIdFile = $teamIdFile;
        $this->keyIdFile = $keyIdFile;
        $this->privateKeyFile = $privateKeyFile;
        $this->userTokenFile = $userTokenFile;
    }

    /**
     * @return string
     */
    public function getUserToken(): string
    {
        return $this->getFileContents($this->userTokenFile);
    }

    /**
     * @return string
     */
    public function getPrivateKeyFilePath(): string
    {
        return $this->privateKeyFile;
    }

    /**
     * @return string
     */
    public function getKeyID(): string
    {
        return $this->getFileContents($this->keyIdFile);
    }

    /**
     * @return string
     */
    public function getTeamID(): string
    {
        return $this->getFileContents($this->teamIdFile);
    }

    /**
     * @param string $path
     *
     * @return string
     */
    private function getFileContents(string $file): string
    {
        if (file_exists($file)) {
            return trim(file_get_contents($file));
        } else {
            die($file.' not found.');
        }
    }
}
