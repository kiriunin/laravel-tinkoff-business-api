<?php

namespace Kiriunin\LaravelTinkoffBusinessApi;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider as Base;
use Kiriunin\LaravelTinkoffBusinessApi\Exceptions\InvalidConfiguration;
use Kiriunin\TinkoffBusinessApi\Http\Client;
use Kiriunin\TinkoffBusinessApi\Tinkoff;

class ServiceProvider extends Base
{
    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'tinkoff-business');

        $this->app->bind('tinkoff-business', fn($app) => $this->createInstance($app));
    }

    public function boot()
    {
        $this->publishes([
            $this->configPath() => config_path('tinkoff-business.php'),
        ]);
    }

    protected function configPath()
    {
        return __DIR__ . '/../config/tinkoff-business.php';
    }

    /**
     * @throws InvalidConfiguration
     */
    private function createInstance(Application $app): Client
    {
        $config = config('tinkoff-business');

        if (is_null($config) || (is_array($config) && is_null($config['token']))) {
            throw InvalidConfiguration::configurationNotSet();
        }

        return $config['isSandbox']
            ? Tinkoff::create($config['sandboxToken'], $app->get('log'), true)
            : Tinkoff::create($config['token'], $app->get('log'));

    }
}
