<?php

namespace Stuartcusackie\GradientField;

use Statamic\Providers\AddonServiceProvider;
use Statamic\Statamic;
use Stuartcusackie\GradientField\FieldTypes\GradientField;

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
        GradientField::register();
    }
}
