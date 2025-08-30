<?php

namespace Stuartcusackie\StatamicGradientField;

use Statamic\Providers\AddonServiceProvider;
use Statamic\Statamic;
use Stuartcusackie\StatamicGradientField\FieldTypes\Gradient;

class ServiceProvider extends AddonServiceProvider
{
    protected $vite = [
        'input' => [
            'resources/js/cp.js',
            'resources/css/cp.css',
        ],
        'publicDirectory' => 'resources/dist',
        'hotFile' => __DIR__ . '/../resources/dist/hot',
    ];

    public function bootAddon()
    {
        Gradient::register();
    }
}
