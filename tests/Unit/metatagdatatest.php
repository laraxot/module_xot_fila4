<?php

declare(strict_types=1);

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
=======
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
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
            'hex' => '#FF5500',
        ],
        'primary' => [
            'key' => 'primary',
            'color' => 'amber',
        ],
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
    ];

    $colors = $metatagData->getColors();

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
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
>>>>>>> 849568d9 (.)
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 492d6d3c (.)
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
=======
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 849568d9 (.)
=======
>>>>>>> c84488b (.)
>>>>>>> 71f31700 (.)
=======
>>>>>>> 492d6d3c (.)
});
