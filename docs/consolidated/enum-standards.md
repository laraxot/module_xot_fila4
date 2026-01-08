<<<<<<< HEAD
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
# Enum Standards in <nome progetto>

This document defines the standards and best practices for working with Enums in the <nome progetto> project.
=======
=======
>>>>>>> 5a14301c (.)
# Enum Standards in 

This document defines the standards and best practices for working with Enums in the  project.
>>>>>>> dc2130a7c (.)
# Enum Standards in SaluteOra

This document defines the standards and best practices for working with Enums in the SaluteOra project.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
# Enum Standards in SaluteOra

This document defines the standards and best practices for working with Enums in the SaluteOra project.
>>>>>>> 399f46d3 (.)
=======
# Enum Standards in SaluteOra

This document defines the standards and best practices for working with Enums in the SaluteOra project.
=======
# Enum Standards in SaluteOra

This document defines the standards and best practices for working with Enums in the SaluteOra project.
>>>>>>> d86d643a (.)
=======
# Enum Standards in SaluteOra

This document defines the standards and best practices for working with Enums in the SaluteOra project.
>>>>>>> 472bd9dc (.)
=======
# Enum Standards in 

This document defines the standards and best practices for working with Enums in the  project.
# Enum Standards in <nome progetto>

This document defines the standards and best practices for working with Enums in the <nome progetto> project.
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
# Enum Standards in SaluteOra

This document defines the standards and best practices for working with Enums in the SaluteOra project.
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
# Enum Standards in SaluteOra

This document defines the standards and best practices for working with Enums in the SaluteOra project.
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
# Enum Standards in SaluteOra

This document defines the standards and best practices for working with Enums in the SaluteOra project.
>>>>>>> 43d67f21 (.)
=======
# Enum Standards in SaluteOra

This document defines the standards and best practices for working with Enums in the SaluteOra project.
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
# Enum Standards in SaluteOra

This document defines the standards and best practices for working with Enums in the SaluteOra project.
>>>>>>> b7ea1cd1 (.)
=======
# Enum Standards in SaluteOra

This document defines the standards and best practices for working with Enums in the SaluteOra project.
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)

## Naming Conventions

1. **File Naming**:
   - All enum files MUST end with `Enum.php` (e.g., `AppointmentTypeEnum.php`)
   - The class name MUST match the filename (without `.php`)
   - **CRITICAL**: Il nome della classe DEVE includere il suffisso `Enum` (e.g., `enum AppointmentTypeEnum: string`)
   - **ERRATO**: `enum AppointmentType: string` in un file chiamato `AppointmentTypeEnum.php`
   - **CORRETTO**: `enum AppointmentTypeEnum: string` in un file chiamato `AppointmentTypeEnum.php`

2. **Class Naming**:
   - Use PascalCase for enum class names
   - Always suffix with `Enum` (e.g., `AppointmentTypeEnum`)

## Implementation Guidelines

1. **Basic Structure**:
   ```php
   <?php
   
   declare(strict_types=1);
   
   namespace Modules\YourModule\Enums;
   
   use Filament\Support\Contracts\HasLabel;
   
   enum YourEnumNameEnum: string implements HasLabel
   {
       case EXAMPLE = 'example';
       
       public function getLabel(): ?string
       {
           return match ($this) {
               self::EXAMPLE => __('your_module::app.example_label'),
           };
       }
   }
   ```

2. **Backward Compatibility**:
   - Always include a class alias for backward compatibility:
   ```php
   // Alias for backward compatibility
   class_alias(YourEnumNameEnum::class, 'Modules\\YourModule\\Enums\\YourEnumName');
   ```

3. **Using Enums in Filament**:
   ```php
   use Modules\YourModule\Enums\YourEnumNameEnum;
   
   // In your form/table
   Select::make('field_name')
       ->options(YourEnumNameEnum::class)
   ```

## Best Practices

1. **Always implement `HasLabel`** for Filament compatibility
2. **Use translation keys** for all labels
3. **Keep enum values in lowercase** for consistency
4. **Document each case** with PHPDoc if the purpose isn't immediately clear
5. **Group related enums** in the same file when appropriate

## Example: Complete Enum Implementation

```php
<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\SaluteOra\Enums;
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
namespace Modules\<nome progetto>\Enums;
=======
namespace Modules\<nome modulo>\Enums;
namespace Modules\SaluteOra\Enums;
>>>>>>> 5a14301c (.)
=======
namespace Modules\SaluteOra\Enums;
>>>>>>> 399f46d3 (.)
=======
namespace Modules\SaluteOra\Enums;
=======
namespace Modules\SaluteOra\Enums;
>>>>>>> d86d643a (.)
=======
namespace Modules\SaluteOra\Enums;
>>>>>>> 472bd9dc (.)
=======
namespace Modules\<nome modulo>\Enums;
namespace Modules\<nome modulo>\Enums;
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
namespace Modules\SaluteOra\Enums;
>>>>>>> 43d67f21 (.)
=======
namespace Modules\<nome modulo>\Enums;
namespace Modules\SaluteOra\Enums;
>>>>>>> 5a14301c (.)
=======
namespace Modules\SaluteOra\Enums;
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
namespace Modules\SaluteOra\Enums;
>>>>>>> 43d67f21 (.)
=======
namespace Modules\SaluteOra\Enums;
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
namespace Modules\SaluteOra\Enums;
>>>>>>> b7ea1cd1 (.)
=======
namespace Modules\SaluteOra\Enums;
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)

use Filament\Support\Contracts\HasLabel;

/**
 * Represents different types of appointments in the system.
 */
enum AppointmentTypeEnum: string implements HasLabel
{
    case CONSULTATION = 'consultation';
    case CLEANING = 'cleaning';
    // ... other cases
    
    /**
     * Get the human-readable label for the enum case.
     */
    public function getLabel(): ?string
    {
        return match ($this) {
<<<<<<< HEAD
            self::CONSULTATION => __('saluteora::app.consultation'),
            self::CLEANING => __('saluteora::app.cleaning'),
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
            self::CONSULTATION => __('<nome progetto>::app.consultation'),
            self::CLEANING => __('<nome progetto>::app.cleaning'),
<<<<<<< HEAD
=======
            self::CONSULTATION => __('saluteora::app.consultation'),
            self::CLEANING => __('saluteora::app.cleaning'),
>>>>>>> 5a14301c (.)
=======
            self::CONSULTATION => __('saluteora::app.consultation'),
            self::CLEANING => __('saluteora::app.cleaning'),
>>>>>>> 399f46d3 (.)
=======
            self::CONSULTATION => __('saluteora::app.consultation'),
            self::CLEANING => __('saluteora::app.cleaning'),
=======
            self::CONSULTATION => __('saluteora::app.consultation'),
            self::CLEANING => __('saluteora::app.cleaning'),
>>>>>>> d86d643a (.)
=======
            self::CONSULTATION => __('saluteora::app.consultation'),
            self::CLEANING => __('saluteora::app.cleaning'),
>>>>>>> 472bd9dc (.)
=======
            self::CONSULTATION => __('<nome progetto>::app.consultation'),
            self::CLEANING => __('<nome progetto>::app.cleaning'),
            self::CONSULTATION => __('<nome progetto>::app.consultation'),
            self::CLEANING => __('<nome progetto>::app.cleaning'),
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
            self::CONSULTATION => __('saluteora::app.consultation'),
            self::CLEANING => __('saluteora::app.cleaning'),
>>>>>>> 43d67f21 (.)
=======
            self::CONSULTATION => __('<nome progetto>::app.consultation'),
            self::CLEANING => __('<nome progetto>::app.cleaning'),
            self::CONSULTATION => __('saluteora::app.consultation'),
            self::CLEANING => __('saluteora::app.cleaning'),
>>>>>>> 5a14301c (.)
=======
            self::CONSULTATION => __('saluteora::app.consultation'),
            self::CLEANING => __('saluteora::app.cleaning'),
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
            self::CONSULTATION => __('saluteora::app.consultation'),
            self::CLEANING => __('saluteora::app.cleaning'),
>>>>>>> 43d67f21 (.)
=======
            self::CONSULTATION => __('saluteora::app.consultation'),
            self::CLEANING => __('saluteora::app.cleaning'),
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
            self::CONSULTATION => __('saluteora::app.consultation'),
            self::CLEANING => __('saluteora::app.cleaning'),
>>>>>>> b7ea1cd1 (.)
=======
            self::CONSULTATION => __('saluteora::app.consultation'),
            self::CLEANING => __('saluteora::app.cleaning'),
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
            // ... other cases
        };
    }
}

// Alias for backward compatibility
<<<<<<< HEAD
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
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
class_alias(AppointmentTypeEnum::class, 'Modules\\<nome progetto>\\Enums\\AppointmentType');
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\<nome modulo>\\Enums\\AppointmentType');
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
>>>>>>> 5a14301c (.)
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
>>>>>>> 399f46d3 (.)
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
>>>>>>> d86d643a (.)
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
>>>>>>> 472bd9dc (.)
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\<nome modulo>\\Enums\\AppointmentType');
class_alias(AppointmentTypeEnum::class, 'Modules\\<nome progetto>\\Enums\\AppointmentType');
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
>>>>>>> 43d67f21 (.)
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\<nome modulo>\\Enums\\AppointmentType');
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
>>>>>>> 5a14301c (.)
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
>>>>>>> 399f46d3 (.)
=======
>>>>>>> d86d643a (.)
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
>>>>>>> 43d67f21 (.)
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
>>>>>>> 17684f52 (.)
=======
>>>>>>> 472bd9dc (.)
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
>>>>>>> b7ea1cd1 (.)
=======
class_alias(AppointmentTypeEnum::class, 'Modules\\SaluteOra\\Enums\\AppointmentType');
>>>>>>> 88e35986 (.)
>>>>>>> ba6c53070 (.)
```

## Updating Existing Enums

1. Rename the file to include the `Enum` suffix
2. Update the class name to match
3. Add the backward compatibility alias
4. Update all references in the codebase
5. Run `composer dump-autoload`

## Common Issues

1. **Class not found**: Ensure the class name matches the filename exactly
2. **Translation not working**: Verify the translation key exists in the language files
3. **Backward compatibility issues**: Check that the alias is correctly defined
<<<<<<< HEAD
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 88e35986 (.)
=======
>>>>>>> 53d6a6ba (.)
