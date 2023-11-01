<?php

namespace Sarojkalamagar\Wixphp;

use Sarojkalamagar\Wixphp\Traits\MakesApiRequest;

class Catalog
{

    use MakesApiRequest;

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

        return $this->withAccessToken($accessToken)->post($endPoint, $filterParameters);
    }
}
