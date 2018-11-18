<?php

namespace App\Services;

use App\Talk;
use App\Repositories\RestRepositoryInterface;

class RestService implements RestServiceInterface
{

    protected $restRepository;

    public function __construct(RestRepositoryInterface $restrepository) {
        $this->restRepository = $restrepository;
    }

    /**
     * messageをpost
     *
     * @var string $message
     * @return object
     */
    public function post($message) {
        $response = $this->restRepository->post($message);

        $result = $response->results;
        foreach($result as $key => $val) {
            return $val->reply;
        }
    }
}

