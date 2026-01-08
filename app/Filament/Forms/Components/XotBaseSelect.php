<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Forms\Components;

use Filament\Forms\Components\Select;

/**
<<<<<<< HEAD
 * Base class for custom Select components following Laraxot philosophy.
 *
 * In the Laraxot framework, all custom Select components should extend
 * XotBaseSelect instead of directly extending Filament\Forms\Components\Select.
 * This ensures consistency with the framework's architecture and provides
 * a foundation for common Select functionality across the application.
 *
 * @method static static make(string $name) Create a new instance of the component
 */
abstract class XotBaseSelect extends Select
{
    protected function setUp(): void
    {
        parent::setUp();
        // Common setup for all XotBaseSelect components can be added here.
    }
}
=======
 * Base class for select form components.
 *
 * Extends Filament Select to provide a standardized base class
 * following Laraxot architecture rules.
 *
 * @method static static make(string $name)
 */
class XotBaseSelect extends Select
{
    // Logica comune futura per i componenti Select Xot
}

>>>>>>> 8ab8fd81a (.)
