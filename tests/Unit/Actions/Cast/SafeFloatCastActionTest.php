<?php

declare(strict_types=1);

use Modules\Xot\Actions\Cast\SafeFloatCastAction;

beforeEach(function (): void {
    $this->action = app(SafeFloatCastAction::class);
});

it('casts float values', function (): void {
    $result = $this->action->execute(123.45);
    expect($result)->toBe(123.45)->toBeFloat();
});

it('casts integer values', function (): void {
    $result = $this->action->execute(123);
    expect($result)->toBe(123.0)->toBeFloat();
});

it('casts null values', function (): void {
    $result = $this->action->execute(null);
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts null values with custom default', function (): void {
    $result = $this->action->execute(null, 10.0);
    expect($result)->toBe(10.0)->toBeFloat();
});

it('casts numeric strings', function (): void {
    $result = $this->action->execute('123.45');
    expect($result)->toBe(123.45)->toBeFloat();
});

it('casts integer strings', function (): void {
    $result = $this->action->execute('123');
    expect($result)->toBe(123.0)->toBeFloat();
});

it('casts empty strings', function (): void {
    $result = $this->action->execute('');
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts whitespace strings', function (): void {
    $result = $this->action->execute('  123.45  ');
    expect($result)->toBe(123.45)->toBeFloat();
});

it('casts non-numeric strings', function (): void {
    $result = $this->action->execute('abc');
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts non-numeric strings with default', function (): void {
    $result = $this->action->execute('abc', 5.0);
    expect($result)->toBe(5.0)->toBeFloat();
});

it('casts boolean values', function (): void {
    $trueResult = $this->action->execute(true);
    $falseResult = $this->action->execute(false);
<<<<<<< HEAD
<<<<<<< HEAD

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
=======
<<<<<<< HEAD
<<<<<<< HEAD

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
=======
    
    expect($trueResult)->toBe(1.0)->toBeFloat()
        ->and($falseResult)->toBe(0.0)->toBeFloat();
>>>>>>> f1d4085 (.)
=======

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
>>>>>>> 300ef70 (.)
});

it('casts arrays', function (): void {
    $result = $this->action->execute([1, 2, 3]);
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts objects', function (): void {
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
    $result = $this->action->execute(new stdClass);
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> 5a14301c (.)
=======
    $result = $this->action->execute(new stdClass());
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> 399f46d3 (.)
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> 17684f52 (.)
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> 399f46d3 (.)
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> 399f46d3 (.)
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
    $result = $this->action->execute(new stdClass());
=======
    $result = $this->action->execute(new \stdClass());
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> ca9324a4 (.)
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> 9db27d12 (.)
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> ca9324a4 (.)
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> 9db27d12 (.)
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts with range validation', function (): void {
    $normal = $this->action->executeWithRange(50.0, 0.0, 100.0);
    $aboveMax = $this->action->executeWithRange(150.0, 0.0, 100.0);
    $belowMin = $this->action->executeWithRange(-10.0, 0.0, 100.0);
<<<<<<< HEAD
<<<<<<< HEAD

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
=======
<<<<<<< HEAD
<<<<<<< HEAD

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
=======
    
    expect($normal)->toBe(50.0)
        ->and($aboveMax)->toBe(100.0)
        ->and($belowMin)->toBe(0.0);
>>>>>>> f1d4085 (.)
=======

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
>>>>>>> 300ef70 (.)
});

it('casts with range and default', function (): void {
    $result = $this->action->executeWithRange('invalid', 0.0, 100.0, 25.0);
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
    $infResult = $this->action->execute('INF');
    $nanResult = $this->action->execute('NAN');
<<<<<<< HEAD
<<<<<<< HEAD

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
=======
<<<<<<< HEAD
<<<<<<< HEAD

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
=======
    
    expect($infResult)->toBe(0.0)
        ->and($nanResult)->toBe(0.0);
>>>>>>> f1d4085 (.)
=======

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
>>>>>>> 300ef70 (.)
});

it('handles infinite values with default', function (): void {
    $infResult = $this->action->execute('INF', 5.0);
    $nanResult = $this->action->execute('NAN', 5.0);
<<<<<<< HEAD
<<<<<<< HEAD

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
=======
<<<<<<< HEAD
<<<<<<< HEAD

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
=======
    
    expect($infResult)->toBe(5.0)
        ->and($nanResult)->toBe(5.0);
>>>>>>> f1d4085 (.)
=======

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
>>>>>>> 300ef70 (.)
});

it('casts scientific notation', function (): void {
    $result1 = $this->action->execute('1.23e2');
    $result2 = $this->action->execute('1.23E-2');
<<<<<<< HEAD
<<<<<<< HEAD

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
=======
<<<<<<< HEAD
<<<<<<< HEAD

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
=======
    
    expect($result1)->toBe(123.0)
        ->and($result2)->toBe(0.0123);
>>>>>>> f1d4085 (.)
=======

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
>>>>>>> 300ef70 (.)
});

it('handles decimal comma', function (): void {
    $result = $this->action->execute('123,45');
    expect($result)->toBe(123.45);
<<<<<<< HEAD
<<<<<<< HEAD
});
=======
<<<<<<< HEAD
<<<<<<< HEAD
});
=======
});
>>>>>>> f1d4085 (.)
=======
});
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
});
>>>>>>> 300ef70 (.)
