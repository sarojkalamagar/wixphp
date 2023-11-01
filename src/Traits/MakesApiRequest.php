<?php

namespace Sarojkalamagar\Wixphp\Traits;

use GuzzleHttp\Client;

trait MakesApiRequest
{

    public $accessToken;

    /**
     *--------------------------------------------------------------------------
     * Set access token
     *--------------------------------------------------------------------------
     *
     * @param
     * @return
     */

    public function withAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     *--------------------------------------------------------------------------
     * Make POST request
     *--------------------------------------------------------------------------
     *
     * @param
     * @return
     */

    public function post($url, $params = [])
    {
        /*
        |--------------------------------------------------------------------------
        | Headers
        |--------------------------------------------------------------------------
        |
        */

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $this->accessToken
        ];

        /*
        |--------------------------------------------------------------------------
        | HTTP client
        |--------------------------------------------------------------------------
        |
        */

        $client = new Client();

        /*
        |--------------------------------------------------------------------------
        | Response
        |--------------------------------------------------------------------------
        |
        */

        $response = $client->get($url, [
            'headers' => $headers,
            'form_params' => $params,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Handling response
        |--------------------------------------------------------------------------
        |
        */

        $body = $response->getBody()->getContents();
        return $body;
    }
}
