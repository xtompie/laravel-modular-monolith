<?php

namespace App\Shared\Infrastructure\Service\Session;

use Illuminate\Session\Store;

class SessionService
{
    public function __construct(
        protected Store $store,
    ) {
    }
}