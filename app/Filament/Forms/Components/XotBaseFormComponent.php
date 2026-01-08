<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Forms\Components;

use Filament\Forms\Components\Field;
use Illuminate\Contracts\Support\Htmlable;
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

        return (string) $label;
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
     * Configure the component.
     */
    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
<<<<<<< HEAD
        $this->dehydrated(true)->required(false);
=======
        $this->dehydrated(true)
            ->required(false);
>>>>>>> f1d4085 (.)
=======
        $this->dehydrated(true)->required(false);
>>>>>>> 73eab74 (.)
    }

    /**
     * Get the validation rules.
     *
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
     * @return array<string, mixed>
     */
    public function getValidationRules(): array
    {
        /** @var array<string, mixed> */
        return parent::getValidationRules();
    }
}
