<?php

namespace AppleMusic\Utils;

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
    public function __construct($teamIdFile, $keyIdFile, $privateKeyFile, $userTokenFile)
    {
        $this->teamIdFile = $teamIdFile;
        $this->keyIdFile = $keyIdFile;
        $this->privateKeyFile = $privateKeyFile;
        $this->userTokenFile = $userTokenFile;
    }

    /**
     * @return string
     */
    public function getUserToken()
    {
        return (string) $this->getFileContents($this->userTokenFile);
    }

    public function getPrivateKeyFilePath()
    {
        return (string) $this->privateKeyFile;
    }

    /**
     * @return string
     */
    public function getKeyID()
    {
        return (string) $this->getFileContents($this->keyIdFile);
    }

    /**
     * @return string
     */
    public function getTeamID()
    {
        return (string) $this->getFileContents($this->teamIdFile);
    }

    /**
     * @param string $path
     *
     * @return string
     */
    private function getFileContents($file)
    {
        if (file_exists($file)) {
            return trim(file_get_contents($file));
        } else {
            die($file.' not found.');
        }
    }
}
