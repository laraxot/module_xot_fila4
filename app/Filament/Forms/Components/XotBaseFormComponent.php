<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Forms\Components;

use Filament\Forms\Components\Field;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Components\Field;
namespace Modules\Xot\Filament\Forms\Components;

use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Components\Field;
namespace Modules\Xot\Filament\Forms\Components;

use Filament\Forms\Components\Field;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Components\Field;
namespace Modules\Xot\Filament\Forms\Components;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Forms\Components\Field;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

/**
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

 * Base class for form components.
 *
 * @method static static make(string $name) Create a new instance of the component
 */
abstract class XotBaseFormComponent extends Field
{
    /**
     * Get the component name.
     */
    public function getName(): string
    {
        $name = parent::getName();
        Assert::stringNotEmpty($name, 'Component name cannot be empty');

        return $name;
    }

    public function getLabel(): string
    {
        $label = parent::getLabel();

        if ($label === null) {
            return Str::title($this->getName());
        }

        if ($label instanceof Htmlable) {
            return $label->toHtml();
        }

    /**
     * Get the component label.
     */
    public function getLabel(): string
    {
        $label = parent::getLabel();
        if ($label === null) {
            return Str::title($this->getName());
        }
        if ($label instanceof Htmlable) {
            return $label->toHtml();
        }
        if ($label instanceof Htmlable) {
        if ($label instanceof Htmlable) {
            return $label->toHtml();
        }
        return (string) $label;
    }

    /**
     * Configure the component.
     */
    protected function setUp(): void
    {
        parent::setUp();

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
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> f7e6113c6 (.)
        $this->dehydrated(true)->required(false);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->dehydrated(true)->required(false);
        $this->dehydrated(true)->required(false);
        $this->dehydrated(true)->required(false);
        $this->dehydrated(true)
            ->required(false);
=======
=======
=======
<<<<<<< HEAD
        $this->dehydrated(true)->required(false);
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $this->dehydrated(true)->required(false);
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
        $this->dehydrated(true)->required(false);
>>>>>>> dbce41cec (.)
=======
        $this->dehydrated(true)->required(false);
>>>>>>> 5400be3e2 (.)
=======
        $this->dehydrated(true)->required(false);
>>>>>>> aa96bb619 (.)
=======
        $this->dehydrated(true)->required(false);
>>>>>>> efbf15eba (.)
=======
        $this->dehydrated(true)
            ->required(false);
>>>>>>> f1d4085 (.)
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
>>>>>>> 2f3197ab (.)
=======
=======
        $this->dehydrated(true)->required(false);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 5cf46378 (.)
=======
        $this->dehydrated(true)->required(false);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        $this->dehydrated(true)->required(false);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
        $this->dehydrated(true)->required(false);
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 5400be3e2 (.)
=======
=======
        $this->dehydrated(true)->required(false);
>>>>>>> 73eab74 (.)
>>>>>>> 5ca118c34 (.)
=======
>>>>>>> aa96bb619 (.)
=======
=======
        $this->dehydrated(true)->required(false);
>>>>>>> 73eab74 (.)
>>>>>>> f7e6113c6 (.)
=======
>>>>>>> efbf15eba (.)
    }

    /**
     * Get the validation rules.
     *
     * @return array<string, mixed>
     */
    public function getValidationRules(): array
    {
        /** @var array<string, mixed> */
        return parent::getValidationRules();
        /** @var array<string, mixed> */
        return parent::getValidationRules();
        /** @var array<string, mixed> $rules */
        $rules = parent::getValidationRules();
        Assert::isArray($rules);

        return $rules;
    }
}
