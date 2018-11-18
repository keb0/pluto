<?php

namespace App\Services;

interface RestServiceInterface
{
    /**
     * messageをpost
     *
     * @var string $message
     * @return object
     */
    public function post($message);
}
