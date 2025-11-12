<?php

declare(strict_types=1);

use Modules\Xot\Actions\Cast\SafeFloatCastAction;

it('casts float values', function (): void {
    $action = app(SafeFloatCastAction::class);
    $result = $action->execute(123.45);
    expect($result)->toBe(123.45)->toBeFloat();
});

it('casts integer values', function (): void {
    $result = app(SafeFloatCastAction::class)->execute(123);
    expect($result)->toBe(123.0)->toBeFloat();
});

it('casts null values', function (): void {
    $result = app(SafeFloatCastAction::class)->execute(null);
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts null values with custom default', function (): void {
    $result = app(SafeFloatCastAction::class)->execute(null, 10.0);
    expect($result)->toBe(10.0)->toBeFloat();
});

it('casts numeric strings', function (): void {
    $result = app(SafeFloatCastAction::class)->execute('123.45');
    expect($result)->toBe(123.45)->toBeFloat();
});

it('casts integer strings', function (): void {
    $result = app(SafeFloatCastAction::class)->execute('123');
    expect($result)->toBe(123.0)->toBeFloat();
});

it('casts empty strings', function (): void {
    $result = app(SafeFloatCastAction::class)->execute('');
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts whitespace strings', function (): void {
    $result = app(SafeFloatCastAction::class)->execute('  123.45  ');
    expect($result)->toBe(123.45)->toBeFloat();
});

it('casts non-numeric strings', function (): void {
    $result = app(SafeFloatCastAction::class)->execute('abc');
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts non-numeric strings with default', function (): void {
    $result = app(SafeFloatCastAction::class)->execute('abc', 5.0);
    expect($result)->toBe(5.0)->toBeFloat();
});

it('casts boolean values', function (): void {
    $trueResult = app(SafeFloatCastAction::class)->execute(true);
    $falseResult = app(SafeFloatCastAction::class)->execute(false);

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
});

it('casts arrays', function (): void {
    $result = app(SafeFloatCastAction::class)->execute([1, 2, 3]);
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts objects', function (): void {
    $result = app(SafeFloatCastAction::class)->execute(new stdClass);
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts with range validation', function (): void {
    $normal = app(SafeFloatCastAction::class)->executeWithRange(50.0, 0.0, 100.0);
    $aboveMax = app(SafeFloatCastAction::class)->executeWithRange(150.0, 0.0, 100.0);
    $belowMin = app(SafeFloatCastAction::class)->executeWithRange(-10.0, 0.0, 100.0);

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
});

it('casts with range and default', function (): void {
    $result = app(SafeFloatCastAction::class)->executeWithRange('invalid', 0.0, 100.0, 25.0);
    expect($result)->toBe(25.0);
});

it('has static cast method', function (): void {
    $result = SafeFloatCastAction::cast('123.45');
    expect($result)->toBe(123.45)->toBeFloat();
});

it('has static cast method with default', function (): void {
    $result = SafeFloatCastAction::cast(null, 10.0);
    expect($result)->toBe(10.0)->toBeFloat();
});

it('has static castWithRange method', function (): void {
    $result = SafeFloatCastAction::castWithRange('150.0', 0.0, 100.0);
    expect($result)->toBe(100.0)->toBeFloat();
});

it('handles infinite values', function (): void {
    $infResult = app(SafeFloatCastAction::class)->execute('INF');
    $nanResult = app(SafeFloatCastAction::class)->execute('NAN');

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
});

it('handles infinite values with default', function (): void {
    $infResult = app(SafeFloatCastAction::class)->execute('INF', 5.0);
    $nanResult = app(SafeFloatCastAction::class)->execute('NAN', 5.0);

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
});

it('casts scientific notation', function (): void {
    $result1 = app(SafeFloatCastAction::class)->execute('1.23e2');
    $result2 = app(SafeFloatCastAction::class)->execute('1.23E-2');

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
});

it('handles decimal comma', function (): void {
    $result = app(SafeFloatCastAction::class)->execute('123,45');
    expect($result)->toBe(123.45);
});
