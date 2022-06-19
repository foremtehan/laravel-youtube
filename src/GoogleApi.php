<?php

namespace Youtube;

use Google\Client;

class GoogleApi
{
    public function __construct(public Client $client, string $devToken = null)
    {
        $client->setDeveloperKey(
            $devToken ?? getenv('GOOGLE_DEV_TOKEN') ?: config('services.youtube.key')
        );
    }
}