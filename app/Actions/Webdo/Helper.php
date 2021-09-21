<?php

namespace App\Actions\Webdo;

trait Helper
{
    /**
     * Helper function for Guzzle package
     *
     * @return void
     */
    public function guzzle_request($type, $url, $body, $options) 
    {
        $client = new \GuzzleHttp\Client();
        
        try {
            $response = $client->request($type, 
                env('ADMIN_URL') . $url,
                [
                    'headers' => $options,
                    'body' => json_encode($body)
                ]
            );
            return [
                'data' => json_decode($response->getBody(), true)
            ];
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            return [
                'error' => [
                    'code' => $e->getResponse()->getStatusCode(),
                    'message' => $e->getResponse()->getReasonPhrase(),
                ]
            ];
        }   
    }

    /**
     * Helper function for Guzzle package for GET request
     *
     * @return void
     */
    public function guzzle_get($url, $body, $options = ['Content-Type' => 'application/json'])
    {
        return $this->guzzle_request('GET', $url, $body, $options);
    }

    /**
     * Helper function for Guzzle package for POST request
     *
     * @return void
     */
    public function guzzle_post($url, $body, $options = ['Content-Type' => 'application/json'])
    {
        return $this->guzzle_request('POST', $url, $body, $options);
    }
}