<?php

namespace AppleMusic;

use AppleMusic\Utils\KeyService;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HttpClient
{
    public const SOURCE_USER = 'user';
    public const SOURCE_CATALOG = 'catalog';
    private const BASE_URI = 'https://api.music.apple.com';

    protected $client;
    protected $apiTokenGenerator;
    protected $keyService;

    public function __construct(
        HttpClientInterface $client,
        ApiTokenGenerator $apiTokenGenerator,
        KeyService $keyService
    ) {
        $this->client = $client;
        $this->token = $apiTokenGenerator->generateDeveloperToken();
        $this->keyService = $keyService;
    }

    /**
     * @param string $url
     */
    public function get($url)
    {
        $response = $this->client->request('GET', self::BASE_URI.$url, [
            'headers' => $this->getHeaders(),
        ]);

        return json_decode($response->getContent());

        // TODO: Add error checking and handling here. Set the return type.
    }

    /**
     * @param object $response
     *
     * @return string
     */
    public function getNextUrl($response)
    {
        if (!isset($response->next)) {
            return null;
        }

        parse_str(parse_url($response->next, PHP_URL_QUERY), $params);

        if (empty($params)) {
            return $response->next.'?limit=100';
        } elseif (!array_key_exists('limit', $params)) {
            return $response->next.'&limit=100';
        }

        return $response->next;
    }

    /**
     * @return array
     */
    private function getHeaders()
    {
        return [
            'Authorization' => 'Bearer '.$this->token,
            'Accept' => 'application/json',
            'Music-User-Token' => $this->keyService->getUserToken(),
        ];
    }
}
