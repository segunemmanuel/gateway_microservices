<?php

namespace Traits;
use GuzzleHttp\Client;

trait ConsumeExternalService{

/**
 *Send a request to  any services
 *
 *  */ 
public function performRequest($method, $requestUrl, $formParams = [], $headers = []){
    $client = new Client([
        'base_uri' => $this->baseUri,
    ]);


    // if (isset($this->secret)) {
    //     $headers['Authorization'] = $this->secret;
    // }

    $response = $client->request($method, $requestUrl, ['form_params' => $formParams, 'headers' => $headers]);

    return $response->getBody()->getContents();
}


}