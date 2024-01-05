<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        [
            'id' => 1,
            'title' => 'go-get-laravel',
            'author' => 'Punyapal Shah',
            'author_url' => 'https://github.com/MrPunyapal',
            'link' => 'https://github.com/MrPunyapal/go-get-laravel/wiki',
            'type' => 'github'
        ],
        [
            'id' => 2,
            'title' => 'Laravel Best Practices',
            'author' => 'Alexey Mezenin',
            'author_url' => 'https://github.com/alexeymezenin',
            'link' => 'https://github.com/alexeymezenin/laravel-best-practices',
            'type' => 'github'
        ],
        [
            'id' => 3,
            'title' => 'Laravel Best Practices',
            'author' => 'Benjamin Crozat',
            'author_url' => 'https://github.com/benjamincrozat',
            'link' => 'https://benjamincrozat.com/laravel-best-practices',
            'type' => 'article'
        ],
        [
            'id' => 4,
            'title' => 'Laravel architecture best practices',
            'author' => 'Benjamin Crozat',
            'author_url' => 'https://github.com/benjamincrozat',
            'link' => 'https://benjamincrozat.com/laravel-architecture-best-practices',
            'type' => 'article'
        ],
    ];
}
