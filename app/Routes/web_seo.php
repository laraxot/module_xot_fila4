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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
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
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
>>>>>>> origin/develop
>>>>>>> 358ba79a7 (.)
    ->group(
        static function (): void {
            Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
        }
    );
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 358ba79a7 (.)
=======
    ->group(static function (): void {
        Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
    });
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
    ->group(static function (): void {
        Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
    });
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
    ->group(static function (): void {
        Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
    });
>>>>>>> aba62c408 (.)
