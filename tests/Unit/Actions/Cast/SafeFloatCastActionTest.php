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

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
=======
    
    expect($trueResult)->toBe(1.0)->toBeFloat()
        ->and($falseResult)->toBe(0.0)->toBeFloat();
>>>>>>> a12f125f4a (.)
=======

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
>>>>>>> b93ef594b4 (.)
=======
    
    expect($trueResult)->toBe(1.0)->toBeFloat()
        ->and($falseResult)->toBe(0.0)->toBeFloat();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
});

it('casts arrays', function (): void {
    $result = $this->action->execute([1, 2, 3]);
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts objects', function (): void {
<<<<<<< HEAD
    $result = $this->action->execute(new stdClass());
=======
<<<<<<< HEAD
    $result = $this->action->execute(new stdClass());
=======
    $result = $this->action->execute(new \stdClass());
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts with range validation', function (): void {
    $normal = $this->action->executeWithRange(50.0, 0.0, 100.0);
    $aboveMax = $this->action->executeWithRange(150.0, 0.0, 100.0);
    $belowMin = $this->action->executeWithRange(-10.0, 0.0, 100.0);
<<<<<<< HEAD

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
=======
=======
>>>>>>> origin/develop
    
    expect($normal)->toBe(50.0)
        ->and($aboveMax)->toBe(100.0)
        ->and($belowMin)->toBe(0.0);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
=======
    
    expect($infResult)->toBe(0.0)
        ->and($nanResult)->toBe(0.0);
>>>>>>> a12f125f4a (.)
=======

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
>>>>>>> b93ef594b4 (.)
=======
    
    expect($infResult)->toBe(0.0)
        ->and($nanResult)->toBe(0.0);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
});

it('handles infinite values with default', function (): void {
    $infResult = $this->action->execute('INF', 5.0);
    $nanResult = $this->action->execute('NAN', 5.0);
<<<<<<< HEAD

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
=======
    
    expect($infResult)->toBe(5.0)
        ->and($nanResult)->toBe(5.0);
>>>>>>> a12f125f4a (.)
=======

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
>>>>>>> b93ef594b4 (.)
=======
    
    expect($infResult)->toBe(5.0)
        ->and($nanResult)->toBe(5.0);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
});

it('casts scientific notation', function (): void {
    $result1 = $this->action->execute('1.23e2');
    $result2 = $this->action->execute('1.23E-2');
<<<<<<< HEAD

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
=======
    
    expect($result1)->toBe(123.0)
        ->and($result2)->toBe(0.0123);
>>>>>>> a12f125f4a (.)
=======

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
>>>>>>> b93ef594b4 (.)
=======
    
    expect($result1)->toBe(123.0)
        ->and($result2)->toBe(0.0123);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
});

it('handles decimal comma', function (): void {
    $result = $this->action->execute('123,45');
    expect($result)->toBe(123.45);
<<<<<<< HEAD
});
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
});
=======
});
>>>>>>> a12f125f4a (.)
=======
});
>>>>>>> b93ef594b4 (.)
=======
});
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
