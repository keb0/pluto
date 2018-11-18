<?php

namespace App\Repositories;

interface RestRepositoryInterface
{
    /**
     * messageをpost
     *
     * @var string $message
     * @return object
     */
    public function post($message);
}
