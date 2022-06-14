<?php

/*
 * This file is part of the jerrkill/twapi.
 *
 * (c) jerrkill <jerrkill123@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jerrkill\Twapi\Facades;

use Illuminate\Support\Facades\Facade;

class Twapi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Jerrkill\Twapi\Twapi';
    }
}
