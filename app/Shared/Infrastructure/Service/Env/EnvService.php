<?php

namespace App\Shared\Infrastructure\Service\Env;

use App\Shared\Infrastructure\Service\Config\ConfigService;

class EnvService
{
    public function __construct(
        protected ConfigService $configService,
    ) {
    }

    public function __invoke(): string
    {
        return ($this->configService)('app.env');
    }
}