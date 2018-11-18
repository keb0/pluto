<?php

namespace App\Repositories;

use App\Talk;

class RestRepository implements RestRepositoryInterface
{
    protected $message;
    protected $request;

    /**
    * @param object $message
    */
    public function __construct(Talk $message) {
        $this->message = $message;
        $this->request = env('REST_URL', false) . env('REST_API_KEY') . $this->message;
    }

    /**
     * messageをpost
     *
     * @var $message
     * @return object
     */
    public function post($message) {

        $post_data = array(
            'apikey' => env('REST_API_KEY', false),
            'query'=> $message,
        );

        $ch = curl_init(env('REST_URL', false));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);

    }
}

