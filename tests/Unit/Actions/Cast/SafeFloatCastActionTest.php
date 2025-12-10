<?php

declare(strict_types=1);

use Modules\Xot\Actions\Cast\SafeFloatCastAction;

beforeEach(function (): void {
    $this->action = app(SafeFloatCastAction::class);
});

it('casts float values', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $result = $this->action->execute(123.45);
    expect($result)->toBe(123.45)->toBeFloat();
});

it('casts integer values', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $result = $this->action->execute(123);
    expect($result)->toBe(123.0)->toBeFloat();
});

it('casts null values', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $result = $this->action->execute(null);
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts null values with custom default', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $result = $this->action->execute(null, 10.0);
    expect($result)->toBe(10.0)->toBeFloat();
});

it('casts numeric strings', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $result = $this->action->execute('123.45');
    expect($result)->toBe(123.45)->toBeFloat();
});

it('casts integer strings', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $result = $this->action->execute('123');
    expect($result)->toBe(123.0)->toBeFloat();
});

it('casts empty strings', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $result = $this->action->execute('');
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts whitespace strings', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $result = $this->action->execute('  123.45  ');
    expect($result)->toBe(123.45)->toBeFloat();
});

it('casts non-numeric strings', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $result = $this->action->execute('abc');
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts non-numeric strings with default', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $result = $this->action->execute('abc', 5.0);
    expect($result)->toBe(5.0)->toBeFloat();
});

it('casts boolean values', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $trueResult = $this->action->execute(true);
    /** @phpstan-ignore-next-line property.notFound */
    $falseResult = $this->action->execute(false);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5ca118c34 (.)

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
    expect($trueResult)->toBe(1.0)->toBeFloat()
        ->and($falseResult)->toBe(0.0)->toBeFloat();
=======
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
>>>>>>> dbce41cec (.)
=======

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
>>>>>>> 5400be3e2 (.)
=======

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
>>>>>>> aa96bb619 (.)
=======
    
    expect($trueResult)->toBe(1.0)->toBeFloat()
        ->and($falseResult)->toBe(0.0)->toBeFloat();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
>>>>>>> b93ef594b4 (.)
=======
    
    expect($trueResult)->toBe(1.0)->toBeFloat()
        ->and($falseResult)->toBe(0.0)->toBeFloat();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======

    expect($trueResult)->toBe(1.0)->toBeFloat()->and($falseResult)->toBe(0.0)->toBeFloat();
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
});

it('casts arrays', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $result = $this->action->execute([1, 2, 3]);
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts objects', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
    /** @phpstan-ignore-next-line property.notFound */
    /** @phpstan-ignore-next-line property.notFound */
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
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
>>>>>>> 53d6a6ba (.)
=======
=======
    /** @phpstan-ignore-next-line property.notFound */
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    $result = $this->action->execute(new stdClass);
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
<<<<<<< HEAD
    $result = $this->action->execute(new stdClass());
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
<<<<<<< HEAD
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
    $result = $this->action->execute(new stdClass());
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
    $result = $this->action->execute(new stdClass());
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
    expect($result)->toBe(0.0)->toBeFloat();
});

it('casts with range validation', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $normal = $this->action->executeWithRange(50.0, 0.0, 100.0);
    /** @phpstan-ignore-next-line property.notFound */
    $aboveMax = $this->action->executeWithRange(150.0, 0.0, 100.0);
    /** @phpstan-ignore-next-line property.notFound */
    $belowMin = $this->action->executeWithRange(-10.0, 0.0, 100.0);
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
    
    expect($normal)->toBe(50.0)
        ->and($aboveMax)->toBe(100.0)
        ->and($belowMin)->toBe(0.0);
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
>>>>>>> 5ca118c34 (.)

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
=======
=======

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
=======
>>>>>>> dbce41cec (.)
=======

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
=======
>>>>>>> 5400be3e2 (.)
=======

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
=======
>>>>>>> aa96bb619 (.)
    
    expect($normal)->toBe(50.0)
        ->and($aboveMax)->toBe(100.0)
        ->and($belowMin)->toBe(0.0);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======

    expect($normal)->toBe(50.0)->and($aboveMax)->toBe(100.0)->and($belowMin)->toBe(0.0);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> aa96bb619 (.)
});

it('casts with range and default', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
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
    /** @phpstan-ignore-next-line property.notFound */
    $infResult = $this->action->execute('INF');
    /** @phpstan-ignore-next-line property.notFound */
    $nanResult = $this->action->execute('NAN');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5ca118c34 (.)

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
    expect($infResult)->toBe(0.0)
        ->and($nanResult)->toBe(0.0);
=======
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
>>>>>>> dbce41cec (.)
=======

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
>>>>>>> 5400be3e2 (.)
=======

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
>>>>>>> aa96bb619 (.)
=======
    
    expect($infResult)->toBe(0.0)
        ->and($nanResult)->toBe(0.0);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
>>>>>>> b93ef594b4 (.)
=======
    
    expect($infResult)->toBe(0.0)
        ->and($nanResult)->toBe(0.0);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======

    expect($infResult)->toBe(0.0)->and($nanResult)->toBe(0.0);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
});

it('handles infinite values with default', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $infResult = $this->action->execute('INF', 5.0);
    /** @phpstan-ignore-next-line property.notFound */
    $nanResult = $this->action->execute('NAN', 5.0);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5ca118c34 (.)

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
    expect($infResult)->toBe(5.0)
        ->and($nanResult)->toBe(5.0);
=======
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
>>>>>>> dbce41cec (.)
=======

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
>>>>>>> 5400be3e2 (.)
=======

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
>>>>>>> aa96bb619 (.)
=======
    
    expect($infResult)->toBe(5.0)
        ->and($nanResult)->toBe(5.0);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
>>>>>>> b93ef594b4 (.)
=======
    
    expect($infResult)->toBe(5.0)
        ->and($nanResult)->toBe(5.0);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======

    expect($infResult)->toBe(5.0)->and($nanResult)->toBe(5.0);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
});

it('casts scientific notation', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $result1 = $this->action->execute('1.23e2');
    /** @phpstan-ignore-next-line property.notFound */
    $result2 = $this->action->execute('1.23E-2');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5ca118c34 (.)

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
    expect($result1)->toBe(123.0)
        ->and($result2)->toBe(0.0123);
=======
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
>>>>>>> dbce41cec (.)
=======

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
>>>>>>> 5400be3e2 (.)
=======

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
>>>>>>> aa96bb619 (.)
=======
    
    expect($result1)->toBe(123.0)
        ->and($result2)->toBe(0.0123);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
>>>>>>> b93ef594b4 (.)
=======
    
    expect($result1)->toBe(123.0)
        ->and($result2)->toBe(0.0123);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======

    expect($result1)->toBe(123.0)->and($result2)->toBe(0.0123);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
});

it('handles decimal comma', function (): void {
    /** @phpstan-ignore-next-line property.notFound */
    $result = $this->action->execute('123,45');
    expect($result)->toBe(123.45);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
});
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
});
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
});
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
});
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
});
>>>>>>> f1d4085 (.)
=======
});
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
});
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
});
=======
});
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dbce41cec (.)
=======
=======
});
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
});
=======
});
>>>>>>> f1d4085 (.)
>>>>>>> 5400be3e2 (.)
=======
=======
});
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
});
=======
});
>>>>>>> f1d4085 (.)
>>>>>>> aa96bb619 (.)
