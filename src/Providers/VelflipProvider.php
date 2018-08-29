<?php

/*
 * This file is part of the endru/velflip package.
 *
 * (c) Endru Reza <lotusb13@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/endrureza/velflip
 */

namespace Endru\Velflip\Providers;

use Illuminate\Support\ServiceProvider;

class VelflipProvider extends ServiceProvider
{
    public function boot()
    {
        // Config
        $this->publishes([
            __DIR__ . '/../../config/velflip.php' => config_path('velflip.php')
        ]);

        // Route
        $this->loadRoutesFrom(
            __DIR__ . '/../../routes/velflip.php'
        );

        // View
        $this->loadViewsFrom(
            __DIR__ . '/../../resources/views', 'velflip'
        );

    }

    public function register()
    {
        //
    }
}