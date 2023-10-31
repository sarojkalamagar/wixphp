<?php

namespace Sarojkalamagar\Wixphp;

use GuzzleHttp\Client;

class Catalog
{

    /**
     *--------------------------------------------------------------------------
     * Query products
     * 
     * https://dev.wix.com/docs/rest/api-reference/wix-stores/catalog/query-products
     *--------------------------------------------------------------------------
     *
     * @param string $siteId
     * @param array $filterParameters
     * @return mixed
     */

    public function queryProducts($accessToken, $filterParameters = [])
    {
        /*
        |--------------------------------------------------------------------------
        | End point
        |--------------------------------------------------------------------------
        |
        */

        $endPoint = 'https://www.wixapis.com/stores/v1/products/query';

        /*
        |--------------------------------------------------------------------------
        | Headers
        |--------------------------------------------------------------------------
        |
        */

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $accessToken
        ];

        /*
        |--------------------------------------------------------------------------
        | HTTP client
        |--------------------------------------------------------------------------
        |
        */

        $client = new Client(['base_uri' => $endPoint]);

        /*
        |--------------------------------------------------------------------------
        | Response
        |--------------------------------------------------------------------------
        |
        */

        $response = $client->post($endPoint, [
            'headers' => $headers,
            'form_params' => $filterParameters,
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
