<?php

declare(strict_types=1);

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
=======
>>>>>>> 71f31700 (.)
use Modules\Xot\Datas\MetatagData;
use Filament\Support\Colors\Color;
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
use Modules\Xot\Datas\MetatagData;
use Filament\Support\Colors\Color;
>>>>>>> 849568d9 (.)
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
>>>>>>> 492d6d3c (.)
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
=======
use Modules\Xot\Datas\MetatagData;
use Filament\Support\Colors\Color;
>>>>>>> a12f125f4a (.)
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Datas\MetatagData;
use Filament\Support\Colors\Color;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
>>>>>>> ca9324a4 (.)
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
=======
use Modules\Xot\Datas\MetatagData;
use Filament\Support\Colors\Color;
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
>>>>>>> 43d67f21 (.)
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
=======
use Modules\Xot\Datas\MetatagData;
use Filament\Support\Colors\Color;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
>>>>>>> 5842a556 (.)

/**
 * Test che la classe MetatagData possa essere istanziata correttamente.
 * Questo test verifica che la classe possa essere istanziata senza errori.
 */
test('MetatagData può essere istanziata', function () {
    $metatagData = new MetatagData();
    expect($metatagData)->toBeInstanceOf(MetatagData::class);
});

/**
 * Test che il metodo getFilamentColors() restituisca i colori corretti.
 * Questo test verifica che il metodo getFilamentColors() restituisca un array
 * con i colori Filament corretti.
 */
test('getFilamentColors restituisce i colori Filament corretti', function () {
    $metatagData = new MetatagData();
    $colors = $metatagData->getFilamentColors();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 849568d9 (.)
=======
>>>>>>> 71f31700 (.)
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKeys(['danger', 'gray', 'info', 'primary', 'success', 'warning'])
        ->and($colors['danger'])->toBe(Color::Red)
        ->and($colors['primary'])->toBe(Color::Amber);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 492d6d3c (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    expect($colors)
        ->toBeArray()
        ->and($colors)
        ->toHaveKeys(['danger', 'gray', 'info', 'primary', 'success', 'warning'])
        ->and($colors['danger'])
        ->toBe(Color::Red)
        ->and($colors['primary'])
        ->toBe(Color::Amber);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKeys(['danger', 'gray', 'info', 'primary', 'success', 'warning'])
        ->and($colors['danger'])->toBe(Color::Red)
        ->and($colors['primary'])->toBe(Color::Amber);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
});

/**
 * Test che il metodo getColors() gestisca correttamente i colori personalizzati.
 * Questo test verifica che il metodo getColors() gestisca correttamente i colori
 * personalizzati quando l'array colors contiene valori personalizzati.
 */
test('getColors gestisce correttamente i colori personalizzati', function () {
    $metatagData = new MetatagData();
    $metatagData->colors = [
        'custom_color' => [
            'key' => 'custom_color',
            'color' => 'custom',
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
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> 71f31700 (.)
            'hex' => '#FF5500'
        ],
        'primary' => [
            'key' => 'primary',
            'color' => 'amber'
        ]
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 492d6d3c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
            'hex' => '#FF5500',
        ],
        'primary' => [
            'key' => 'primary',
            'color' => 'amber',
        ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
=======
=======
=======
>>>>>>> origin/develop
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
            'hex' => '#FF5500'
        ],
        'primary' => [
            'key' => 'primary',
            'color' => 'amber'
        ]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'hex' => '#FF5500',
        ],
        'primary' => [
            'key' => 'primary',
            'color' => 'amber',
        ],
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    ];

    $colors = $metatagData->getColors();

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
=======
>>>>>>> 71f31700 (.)
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 399f46d3 (.)
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> d86d643a (.)
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> e59778ae (.)
=======
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 849568d9 (.)
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 492d6d3c (.)
=======
>>>>>>> a12f125f4a (.)
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> b93ef594b4 (.)
=======
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 5842a556 (.)
});

/**
 * Test che il metodo getLogoHeight() restituisca il valore corretto.
 * Questo test verifica che il metodo getLogoHeight() restituisca il valore
 * della proprietà logo_height.
 */
test('getLogoHeight restituisce il valore corretto', function () {
    $metatagData = new MetatagData();
    $metatagData->logo_height = '3em';

    expect($metatagData->getLogoHeight())->toBe('3em');
});

/**
 * Test che le proprietà della classe abbiano i valori di default corretti.
 * Questo test verifica che le proprietà della classe abbiano i valori di default
 * corretti quando viene istanziata la classe.
 */
test('Le proprietà hanno i valori di default corretti', function () {
    $metatagData = new MetatagData();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 849568d9 (.)
=======
>>>>>>> 71f31700 (.)
    expect($metatagData->generator)->toBe('xot')
        ->and($metatagData->charset)->toBe('UTF-8')
        ->and($metatagData->author)->toBe('xot')
        ->and($metatagData->logo_height)->toBe('2em')
        ->and($metatagData->favicon)->toBe('/favicon.ico');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 71f31700 (.)
=======
=======
>>>>>>> 492d6d3c (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    expect($metatagData->generator)
        ->toBe('xot')
        ->and($metatagData->charset)
        ->toBe('UTF-8')
        ->and($metatagData->author)
        ->toBe('xot')
        ->and($metatagData->logo_height)
        ->toBe('2em')
        ->and($metatagData->favicon)
        ->toBe('/favicon.ico');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
    expect($metatagData->generator)->toBe('xot')
        ->and($metatagData->charset)->toBe('UTF-8')
        ->and($metatagData->author)->toBe('xot')
        ->and($metatagData->logo_height)->toBe('2em')
        ->and($metatagData->favicon)->toBe('/favicon.ico');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
});
