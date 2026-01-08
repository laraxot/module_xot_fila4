<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Forms\Components;

use Filament\Forms\Components\CheckboxList;

/**
<<<<<<< HEAD
 * Base class for custom CheckboxList components following Laraxot philosophy.
 *
 * In the Laraxot framework, all custom CheckboxList components should extend
 * XotBaseCheckboxList instead of directly extending Filament\Forms\Components\CheckboxList.
 * This ensures consistency with the framework's architecture and provides
 * a foundation for common CheckboxList functionality across the application.
 *
 * @method static static make(string $name) Create a new instance of the component
 */
abstract class XotBaseCheckboxList extends CheckboxList
{
    protected function setUp(): void
    {
        parent::setUp();
        // Common setup for all XotBaseCheckboxList components can be added here.
    }
}
=======
 * Base class for checkbox list form components.
 *
 * Extends Filament CheckboxList to provide a standardized base class
 * following Laraxot architecture rules.
 *
 * @method static static make(string $name)
 */
class XotBaseCheckboxList extends CheckboxList
{
    // Logica comune futura per i componenti CheckboxList Xot
}

>>>>>>> 8ab8fd81a (.)
