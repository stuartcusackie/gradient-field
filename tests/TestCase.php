<?php

namespace Stuartcusackie\StatamicGradientField\Tests;

use Stuartcusackie\StatamicGradientField\ServiceProvider;
use Statamic\Testing\AddonTestCase;

abstract class TestCase extends AddonTestCase
{
    protected string $addonServiceProvider = ServiceProvider::class;
}
