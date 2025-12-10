<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Xot\Filament\Forms\Components;

use Filament\Forms\Components\Field;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Components\Field;
namespace Modules\Xot\Filament\Forms\Components;

use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Components\Field;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Xot\Filament\Forms\Components;
=======
namespace Modules\Notify\Filament\Forms\Components;
>>>>>>> 754c528 (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Field;
use Illuminate\Contracts\Support\Htmlable;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Components\Field;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
namespace Modules\Xot\Filament\Forms\Components;

<<<<<<< HEAD
use Illuminate\Contracts\Support\Htmlable;
=======
<<<<<<< HEAD
use Illuminate\Contracts\Support\Htmlable;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Forms\Components\Field;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

/**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
 * Base class for custom form components.
 *
 * @method static static make(string $name)
 */
abstract class XotBaseFormComponent extends Field
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->dehydrated(true)->required(false);
    }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
 * Base class for form components.
 *
 * @method static static make(string $name) Create a new instance of the component
 */
abstract class XotBaseFormComponent extends Field
{
    /**
     * Get the component name.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    public function getName(): string
    {
        $name = parent::getName();
        Assert::stringNotEmpty($name, 'Component name cannot be empty');

        return $name;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
    public function getLabel(): string
    {
        $label = parent::getLabel();

        if ($label === null) {
            return Str::title($this->getName());
        }

        if ($label instanceof Htmlable) {
            return $label->toHtml();
        }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    /**
     * Get the component label.
     */
    public function getLabel(): string
    {
        $label = parent::getLabel();
        if ($label === null) {
            return Str::title($this->getName());
        }
<<<<<<< HEAD
        if ($label instanceof Htmlable) {
            return $label->toHtml();
        }
=======
<<<<<<< HEAD
        if ($label instanceof Htmlable) {
=======
<<<<<<< HEAD
        if ($label instanceof Htmlable) {
=======
        if ($label instanceof \Illuminate\Contracts\Support\Htmlable) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return $label->toHtml();
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        return (string) $label;
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * Configure the component.
     */
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
        $this->dehydrated(true)->required(false);
=======
<<<<<<< HEAD
        $this->dehydrated(true)->required(false);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->dehydrated(true)->required(false);
=======
        $this->dehydrated(true)
            ->required(false);
>>>>>>> a12f125f4a (.)
=======
        $this->dehydrated(true)->required(false);
>>>>>>> b93ef594b4 (.)
=======
        $this->dehydrated(true)
            ->required(false);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
    }

    /**
     * Get the validation rules.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
     * @return array<string, mixed>
     */
    public function getValidationRules(): array
    {
<<<<<<< HEAD
        /** @var array<string, mixed> */
        return parent::getValidationRules();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<string, mixed> */
        return parent::getValidationRules();
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
        /** @var array<string, mixed> $rules */
        $rules = parent::getValidationRules();
        Assert::isArray($rules);

        return $rules;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    }
}
