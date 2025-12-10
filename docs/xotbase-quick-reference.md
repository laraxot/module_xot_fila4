# 🚀 XotBase Quick Reference

## ⚡ Immediate Action Required

**NEVER DO THIS:** ❌
```php
class MyResource extends \Filament\Resources\Resource
class MyWidget extends \Filament\Widgets\Widget
```

**ALWAYS DO THIS:** ✅
```php
class MyResource extends \Modules\Xot\Filament\Resources\XotBaseResource
class MyWidget extends \Modules\Xot\Filament\Widgets\XotBaseWidget
```

## 🔧 Critical Methods to Implement

### For XotBaseWidget
```php
public function getFormSchema(): array
{
    return [
        // REQUIRED: Form components here
        // NEVER return empty array []
    ];
}
```

### Method must be PUBLIC (not protected)

## 📁 Correct Namespace Structure

```php
namespace Modules\YourModule\Filament\Resources;      // ✅ Correct
namespace Modules\YourModule\Filament\Widgets;       // ✅ Correct

namespace Modules\YourModule\App\Filament\Resources; // ❌ Wrong (contains App)
```

## 🚨 Common Error Fixes

### Error: "contains 1 abstract method"
**Fix:** Implement `getFormSchema()` method returning form components

### Error: "Access level must be public"  
**Fix:** Change `protected` to `public` for the method

### Error: "Cannot override final method"
**Fix:** Use hook methods instead of overriding

## 📞 Emergency Help

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
1. Check: `/Modules/Xot/docs/XOTBASE_EXTENSION_RULES.md`
2. Check: `/Modules/Xot/docs/filament_extension_pattern.md`
>>>>>>> 85cdef688 (.)
=======
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> 9f193021d (.)
=======
>>>>>>> d9f43fce9 (.)
=======
1. Check: `/Modules/Xot/docs/XOTBASE_EXTENSION_RULES.md`
2. Check: `/Modules/Xot/docs/filament_extension_pattern.md`
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 62cc8443 (.)
=======
>>>>>>> ecd5ec32 (.)
=======
>>>>>>> 2bad128c (.)
=======
>>>>>>> ab5b3a4f (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> 88e745db5 (.)
=======
>>>>>>> 5e6aa70fe (.)
=======
>>>>>>> f8f76a284 (.)
=======
>>>>>>> 7e4835b8e (.)
=======
>>>>>>> e39b54ba7 (.)
=======
>>>>>>> 5e6e0d054 (.)
=======
>>>>>>> 9f193021d (.)
=======
>>>>>>> ba7efc23f (.)
=======
>>>>>>> 0117b849c (.)
=======
>>>>>>> d9f43fce9 (.)
=======
>>>>>>> 5df5c7505 (.)
=======
1. Check: `/Modules/Xot/docs/XOTBASE_EXTENSION_RULES.md`
2. Check: `/Modules/Xot/docs/filament_extension_pattern.md`
>>>>>>> 80bc07e81 (.)
=======
1. Check: `/Modules/Xot/docs/XOTBASE_EXTENSION_RULES.md`
2. Check: `/Modules/Xot/docs/filament_extension_pattern.md`
>>>>>>> 414a4ffcb (.)
1. Check: `/Modules/Xot/project_docs/XOTBASE_EXTENSION_RULES.md`
2. Check: `/Modules/Xot/project_docs/filament_extension_pattern.md`
3. Run: `php artisan optimize:clear && ./vendor/bin/phpstan analyse`

---

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
*Keep this file visible during development!*
=======
*Keep this file visible during development!*
>>>>>>> 85cdef688 (.)
=======
*Keep this file visible during development!*
>>>>>>> ce6fc085 (.)
=======
*Keep this file visible during development!*
>>>>>>> 2bad128c (.)
=======
*Keep this file visible during development!*
>>>>>>> 358ba79a7 (.)
=======
*Keep this file visible during development!*
>>>>>>> f8f76a284 (.)
=======
*Keep this file visible during development!*
>>>>>>> 5e6e0d054 (.)
=======
*Keep this file visible during development!*
>>>>>>> 9f193021d (.)
=======
*Keep this file visible during development!*
>>>>>>> 0117b849c (.)
=======
*Keep this file visible during development!*
>>>>>>> 80bc07e81 (.)
=======
*Keep this file visible during development!*
>>>>>>> 414a4ffcb (.)
