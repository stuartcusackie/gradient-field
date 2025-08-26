<?php

namespace Stuartcusackie\GradientField\Tests;

use Stuartcusackie\GradientField\ServiceProvider;
use Statamic\Testing\AddonTestCase;

abstract class TestCase extends AddonTestCase
{
    protected string $addonServiceProvider = ServiceProvider::class;
}
