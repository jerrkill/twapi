<?php

/*
 * This file is part of the jerrkill/twapi.
 *
 * (c) jerrkill <jerrkill123@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [
    'CONSUMER_KEY' => function_exists('env') ? env('TWITTER_CONSUMER_KEY', '') : '',
    'CONSUMER_SECRET' => function_exists('env') ? env('TWITTER_CONSUMER_SECRET', '') : '',
    'ACCESS_TOKEN' => function_exists('env') ? env('TWITTER_ACCESS_TOKEN', '') : '',
    'ACCESS_TOKEN_SECRET' => function_exists('env') ? env('TWITTER_ACCESS_TOKEN_SECRET', '') : '',
    'BEARERTOKEN' => function_exists('env') ? env('TWITTER_BEARERTOKEN', '') : '',
];
