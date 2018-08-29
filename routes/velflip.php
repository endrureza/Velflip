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

Route::group(
    [
        'prefix' => 'velflip',
        'namespace' => 'Endru\Velflip\Controllers',
        'middleware' => [
            Endru\Velflip\Middleware\VelflipMiddleware::class
    ]
    ], function () {
        
        // General Route
        Route::group(['prefix' => 'general'], function () {

        });


        // Disbursement Route
        Route::group(['prefix' => 'disburse'], function () {

        });


        // Special Disburesement Route
        Route::group(['prefix' => 'sdisburse'], function () {

        });


    }
);