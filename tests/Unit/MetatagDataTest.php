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
use Filament\Support\Colors\Color;
use Modules\Xot\Datas\MetatagData;

>>>>>>> 5a14301c (.)
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
    expect($metatagData)->toBeInstanceOf(MetatagData::class);
});

/**
 * Test che il metodo getFilamentColors() restituisca i colori corretti.
 * Questo test verifica che il metodo getFilamentColors() restituisca un array
 * con i colori Filament corretti.
 */
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
    $colors = $metatagData->getFilamentColors();

    expect($colors)
        ->toBeArray()
        ->and($colors)
        ->toHaveKeys(['danger', 'gray', 'info', 'primary', 'success', 'warning'])
<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        ->and($colors['danger'])
        ->toBe(Color::Red)
        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
=======
        ->and($colors['danger'])
        ->toBe(Color::Red)
>>>>>>> 5a14301c (.)
=======
        ->and($colors['danger'])
        ->toBe(Color::Red)
>>>>>>> 5a14301c (.)
        ->and($colors['primary'])
        ->toBe(Color::Amber);
});

/**
 * Test che il metodo getColors() gestisca correttamente i colori personalizzati.
 * Questo test verifica che il metodo getColors() gestisca correttamente i colori
 * personalizzati quando l'array colors contiene valori personalizzati.
 */
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
    $metatagData->colors = [
        'custom_color' => [
            'key' => 'custom_color',
            'color' => 'custom',
            'hex' => '#FF5500',
        ],
        'primary' => [
            'key' => 'primary',
            'color' => 'amber',
        ],
    ];

<<<<<<< HEAD
<<<<<<< HEAD
    /** @phpstan-ignore-next-line method.nonObject */
    $colors = $metatagData->getColors();

    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    expect($colors)->toBeArray()->and($colors)->toHaveKey('custom_color')->and($colors)->toHaveKey('primary');
=======
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
<<<<<<< HEAD
<<<<<<< HEAD
=======
    expect($colors)->toBeArray()
        ->and($colors)->toHaveKey('custom_color')
        ->and($colors)->toHaveKey('primary');
>>>>>>> 399f46d3 (.)
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
});

/**
 * Test che il metodo getLogoHeight() restituisca il valore corretto.
 * Questo test verifica che il metodo getLogoHeight() restituisca il valore
 * della proprietà logo_height.
 */
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
});
