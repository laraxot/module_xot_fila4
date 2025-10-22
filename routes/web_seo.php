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
    ->group(static function (): void {
        Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
    });
=======
<<<<<<< HEAD
<<<<<<< HEAD
    ->group(static function (): void {
        Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
    });
=======
    ->group(
        static function (): void {
            Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
        }
    );
>>>>>>> f1d4085 (.)
=======
    ->group(static function (): void {
        Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
    });
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    ->group(static function (): void {
        Route::get('/sitemap.xml', 'SitemapXmlController')->name('sitemap_xml');
    });
>>>>>>> 300ef70 (.)
