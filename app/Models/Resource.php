<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        [
            'id' => 1,
            'title' => 'Laravel & PHP Guidelines',
            'author' => 'Spatie',
            'author_url' => 'https://github.com/spatie/spatie.be',
            'link' => 'https://spatie.be/guidelines/laravel-php',
            'repo_link' => 'https://github.com/spatie/spatie.be/tree/main/resources/views/front/pages/guidelines/pages',
            'type' => 'article'
        ],
        [
            'id' => 2,
            'title' => 'Laravel Best Practices',
            'author' => 'Alexey Mezenin',
            'author_url' => 'https://github.com/alexeymezenin',
            'link' => 'https://github.com/alexeymezenin/laravel-best-practices',
            'repo_link' => null,
            'type' => 'github'
        ],
        [
            'id' => 3,
            'title' => '20+ Laravel best practices, tips and tricks to use in 2023',
            'author' => 'Benjamin Crozat',
            'author_url' => 'https://github.com/benjamincrozat',
            'link' => 'https://benjamincrozat.com/laravel-best-practices',
            'repo_link' => null,
            'type' => 'article'
        ],
        [
            'id' => 4,
            'title' => '3 crucial Laravel architecture best practices for 2023',
            'author' => 'Benjamin Crozat',
            'author_url' => 'https://github.com/benjamincrozat',
            'link' => 'https://benjamincrozat.com/laravel-architecture-best-practices',
            'repo_link' => null,
            'type' => 'article'
        ],
        [
            'id' => 5,
            'title' => 'go-get-laravel',
            'author' => 'Punyapal Shah',
            'author_url' => 'https://github.com/MrPunyapal',
            'link' => 'https://github.com/MrPunyapal/go-get-laravel/wiki',
            'repo_link' => null,
            'type' => 'github'
        ],
        [
            'id' => 6,
            'title' => 'Laravel the right way',
            'author' => 'Darwin Biler',
            'author_url' => 'https://github.com/buonzz',
            'link' => 'https://github.com/laraveltherightway/laraveltherightway.github.io/',
            'repo_link' => null,
            'type' => 'github'
        ],
    ];
}
