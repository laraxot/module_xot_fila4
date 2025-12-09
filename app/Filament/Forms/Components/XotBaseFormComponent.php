<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Forms\Components;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Field;
use Illuminate\Contracts\Support\Htmlable;
=======
=======
>>>>>>> 399f46d3 (.)
use Illuminate\Contracts\Support\Htmlable;
=======
<<<<<<< HEAD
use Illuminate\Contracts\Support\Htmlable;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Forms\Components\Field;
>>>>>>> 5a14301c (.)
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

/**
<<<<<<< HEAD
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

=======
 * Base class for form components.
 *
 * @method static static make(string $name) Create a new instance of the component
 */
abstract class XotBaseFormComponent extends Field
{
    /**
     * Get the component name.
     */
>>>>>>> 5a14301c (.)
    public function getName(): string
    {
        $name = parent::getName();
        Assert::stringNotEmpty($name, 'Component name cannot be empty');

        return $name;
    }

<<<<<<< HEAD
    public function getLabel(): string
    {
        $label = parent::getLabel();

        if ($label === null) {
            return Str::title($this->getName());
        }

        if ($label instanceof Htmlable) {
            return $label->toHtml();
        }

=======
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
=======
<<<<<<< HEAD
        if ($label instanceof Htmlable) {
=======
        if ($label instanceof \Illuminate\Contracts\Support\Htmlable) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return $label->toHtml();
        }
>>>>>>> 5a14301c (.)
        return (string) $label;
    }

    /**
<<<<<<< HEAD
=======
     * Configure the component.
     */
    protected function setUp(): void
    {
        parent::setUp();

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
    }

    /**
     * Get the validation rules.
     *
>>>>>>> 5a14301c (.)
     * @return array<string, mixed>
     */
    public function getValidationRules(): array
    {
<<<<<<< HEAD
        /** @var array<string, mixed> */
        return parent::getValidationRules();
=======
        /** @var array<string, mixed> $rules */
        $rules = parent::getValidationRules();
        Assert::isArray($rules);

        return $rules;
>>>>>>> 5a14301c (.)
    }
}
