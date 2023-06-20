<?php

use Helpers\PageHelper;
use Illuminate\Support\Str;

return [
    'getDate' => function ($page) {
        return PageHelper::getDate($page);
    },

    'getExcerpt' => function ($page, $length = 255) {
        return PageHelper::getExcerpt($page, $length);
    },

    'isActive' => function ($page, $path) {
        return PageHelper::isActive($page, $path);
    },
];
