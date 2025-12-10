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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
use Filament\Support\Colors\Color;
>>>>>>> 71586de2 (.)
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
use Modules\Xot\Datas\MetatagData;

<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
=======
use Modules\Xot\Datas\MetatagData;
use Filament\Support\Colors\Color;
>>>>>>> f1d4085 (.)
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;
>>>>>>> 300ef70 (.)

>>>>>>> 5a14301c (.)
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;

>>>>>>> 5a14301c (.)
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;

>>>>>>> 5a14301c (.)
=======
>>>>>>> b7afadf9 (.)
=======
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;

>>>>>>> 5a14301c (.)
/**
 * Test che la classe MetatagData possa essere istanziata correttamente.
 * Questo test verifica che la classe possa essere istanziata senza errori.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
test('MetatagData può essere istanziata', function (): void {
    $metatagData = new MetatagData;
=======
test('MetatagData può essere istanziata', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('MetatagData può essere istanziata', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('MetatagData può essere istanziata', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('MetatagData può essere istanziata', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('MetatagData può essere istanziata', function (): void {
    $metatagData = new MetatagData;
>>>>>>> b7afadf9 (.)
=======
test('MetatagData può essere istanziata', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
    expect($metatagData)->toBeInstanceOf(MetatagData::class);
});

/**
 * Test che il metodo getFilamentColors() restituisca i colori corretti.
 * Questo test verifica che il metodo getFilamentColors() restituisca un array
 * con i colori Filament corretti.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
test('getFilamentColors restituisce i colori Filament corretti', function (): void {
    $metatagData = new MetatagData;
    /** @phpstan-ignore-next-line method.nonObject */
=======
test('getFilamentColors restituisce i colori Filament corretti', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('getFilamentColors restituisce i colori Filament corretti', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('getFilamentColors restituisce i colori Filament corretti', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('getFilamentColors restituisce i colori Filament corretti', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('getFilamentColors restituisce i colori Filament corretti', function (): void {
    $metatagData = new MetatagData;
    /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> b7afadf9 (.)
=======
test('getFilamentColors restituisce i colori Filament corretti', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
    $colors = $metatagData->getFilamentColors();

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    expect($colors)
        ->toBeArray()
        ->and($colors)
        ->toHaveKeys(['danger', 'gray', 'info', 'primary', 'success', 'warning'])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        ->and($colors['danger'])
        ->toBe(Color::Red)
        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
<<<<<<< HEAD
=======
        ->and($colors['danger'])
        ->toBe(Color::Red)
>>>>>>> 5a14301c (.)
=======
        ->and($colors['danger'])
        ->toBe(Color::Red)
>>>>>>> 5a14301c (.)
=======
        ->and($colors['danger'])
        ->toBe(Color::Red)
>>>>>>> 5a14301c (.)
=======
        ->and($colors['danger'])
        ->toBe(Color::Red)
>>>>>>> 5a14301c (.)
=======
>>>>>>> b7afadf9 (.)
=======
        ->and($colors['danger'])
        ->toBe(Color::Red)
>>>>>>> 5a14301c (.)
        ->and($colors['primary'])
        ->toBe(Color::Amber);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKeys(['danger', 'gray', 'info', 'primary', 'success', 'warning'])
        ->and($colors['danger'])->toBe(Color::Red)
        ->and($colors['primary'])->toBe(Color::Amber);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
});

/**
 * Test che il metodo getColors() gestisca correttamente i colori personalizzati.
 * Questo test verifica che il metodo getColors() gestisca correttamente i colori
 * personalizzati quando l'array colors contiene valori personalizzati.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
test('getColors gestisce correttamente i colori personalizzati', function (): void {
    $metatagData = new MetatagData;
=======
test('getColors gestisce correttamente i colori personalizzati', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('getColors gestisce correttamente i colori personalizzati', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('getColors gestisce correttamente i colori personalizzati', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('getColors gestisce correttamente i colori personalizzati', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('getColors gestisce correttamente i colori personalizzati', function (): void {
    $metatagData = new MetatagData;
>>>>>>> b7afadf9 (.)
=======
test('getColors gestisce correttamente i colori personalizzati', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
    $metatagData->colors = [
        'custom_color' => [
            'key' => 'custom_color',
            'color' => 'custom',
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
            'hex' => '#FF5500',
        ],
        'primary' => [
            'key' => 'primary',
            'color' => 'amber',
        ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            'hex' => '#FF5500'
        ],
        'primary' => [
            'key' => 'primary',
            'color' => 'amber'
        ]
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    ];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
    /** @phpstan-ignore-next-line method.nonObject */
    $colors = $metatagData->getColors();

<<<<<<< HEAD
<<<<<<< HEAD
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
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
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $colors = $metatagData->getColors();

<<<<<<< HEAD
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
>>>>>>> 399f46d3 (.)
=======
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
>>>>>>> 17684f52 (.)
=======
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
>>>>>>> 399f46d3 (.)
=======
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
>>>>>>> 399f46d3 (.)
=======
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
>>>>>>> 17684f52 (.)
=======
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
>>>>>>> 399f46d3 (.)
=======
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
    $colors = $metatagData->getColors();

    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
    $colors = $metatagData->getColors();

    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
    $colors = $metatagData->getColors();

    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ab8cc3f3 (.)
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 71586de2 (.)
=======
    $colors = $metatagData->getColors();

    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
});

/**
 * Test che il metodo getLogoHeight() restituisca il valore corretto.
 * Questo test verifica che il metodo getLogoHeight() restituisca il valore
 * della proprietà logo_height.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
test('getLogoHeight restituisce il valore corretto', function (): void {
    $metatagData = new MetatagData;
=======
test('getLogoHeight restituisce il valore corretto', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('getLogoHeight restituisce il valore corretto', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('getLogoHeight restituisce il valore corretto', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('getLogoHeight restituisce il valore corretto', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('getLogoHeight restituisce il valore corretto', function (): void {
    $metatagData = new MetatagData;
>>>>>>> b7afadf9 (.)
=======
test('getLogoHeight restituisce il valore corretto', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
    $metatagData->logo_height = '3em';

    expect($metatagData->getLogoHeight())->toBe('3em');
});

/**
 * Test che le proprietà della classe abbiano i valori di default corretti.
 * Questo test verifica che le proprietà della classe abbiano i valori di default
 * corretti quando viene istanziata la classe.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
test('Le proprietà hanno i valori di default corretti', function (): void {
    $metatagData = new MetatagData;
=======
test('Le proprietà hanno i valori di default corretti', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('Le proprietà hanno i valori di default corretti', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('Le proprietà hanno i valori di default corretti', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('Le proprietà hanno i valori di default corretti', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)
=======
test('Le proprietà hanno i valori di default corretti', function (): void {
    $metatagData = new MetatagData;
>>>>>>> b7afadf9 (.)
=======
test('Le proprietà hanno i valori di default corretti', function () {
    $metatagData = new MetatagData();
>>>>>>> 5a14301c (.)

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
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
=======
<<<<<<< HEAD
=======
    expect($metatagData->generator)->toBe('xot')
        ->and($metatagData->charset)->toBe('UTF-8')
        ->and($metatagData->author)->toBe('xot')
        ->and($metatagData->logo_height)->toBe('2em')
        ->and($metatagData->favicon)->toBe('/favicon.ico');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
});
