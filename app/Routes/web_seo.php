<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

$namespace = '\Modules\Xot\Http\Controllers';
$middleware = [
    'web',
    // \Modules\Xot\Http\Middleware\PanelMiddleware::class,
];

Route::middleware($middleware)
    ->namespace($namespace)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ->group(
        static function (): void {
            Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
        }
    );
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
    ->group(static function (): void {
        Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
    });
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ->group(static function (): void {
        Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
    });
=======
=======
>>>>>>> origin/develop
    ->group(
        static function (): void {
            Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
        }
    );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    ->group(static function (): void {
        Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
    });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
