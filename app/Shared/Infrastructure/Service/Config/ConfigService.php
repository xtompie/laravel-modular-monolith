<?php

namespace App\Shared\Infrastructure\Service\Config;

use Illuminate\Config\Repository;

class ConfigService
{
    public function __construct(
        protected Repository $repository,
    ) {
    }

    public function __invoke(string $key, $default = null): mixed
    {
        return $this->repository->get($key, $default);
    }
}