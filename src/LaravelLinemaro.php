<?php

namespace Codeat3\LaravelLinemaro;

use Zttp\Zttp;
use Illuminate\Support\Arr;
use Codeat3\LaravelLinemaro\Exceptions\ApiKeyMissingException;

class LaravelLinemaro
{
    const DOMAIN = 'https://api.codeat3.co';

    const RANDOM_API_ENDPOINT = '/linemaro/random';

    private function getApiUrl()
    {
        return self::DOMAIN.self::RANDOM_API_ENDPOINT;
    }

    private function getHeaders()
    {
        $apiKey = Arr::get(config('laravel-linemaro'), 'API_KEY');
        if (empty($apiKey)) {
            throw new ApiKeyMissingException('Api Key Missing');
        }

        return [
            'Authorization: Bearer '.$apiKey,
            'Accept: application/json',
        ];
    }

    // Build your next great package.
    public function random()
    {
        return json_decode(Zttp::withHeaders($this->getHeaders())->get($this->getApiUrl()), true);
    }
}
