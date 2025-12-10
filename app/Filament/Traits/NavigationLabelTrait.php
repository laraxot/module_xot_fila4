<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\File\SvgExistsAction;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\File\SvgExistsAction;
use Illuminate\Support\Str;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\File\SvgExistsAction;
use Webmozart\Assert\Assert;

trait NavigationLabelTrait
{
    use TransTrait;

<<<<<<< HEAD
    // public function getModelLabel(): string
    // {
    //     return static::transFunc(__FUNCTION__);
    // }
    // Rimosso per compatibilità Filament v4 - il metodo è già definito nella classe Resource
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
    public static function getModelLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)

    public static function getPluralModelLabel(): string
    {
        return static::getNavigationLabel();
<<<<<<< HEAD

<<<<<<< HEAD



=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        // return static::transFunc(__FUNCTION__);
    }

    public static function getNavigationLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    public static function getNavigationGroup(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    public static function getPluralLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    public static function getLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    public function getTitle(): string
    {
        return static::transFunc(__FUNCTION__);
    }

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): ?int
    public static function getNavigationSort(): null|int
    public static function getNavigationSort(): null|int
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
    public static function getNavigationSort(): null|int
=======
    public static function getNavigationSort(): ?int
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    {
        $res = static::transFunc(__FUNCTION__);

        $value = intval($res);

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        if ($value === 0) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if ($value === 0) {
        if ($value === 0) {
        if ($value === 0) {
        if ($value === 0) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
<<<<<<< HEAD
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if ($value === 0) {
        if (0 === $value) {
        if ($value === 0) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if ($value === 0) {
        if ($value === 0) {
        if ($value === 0) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if ($value === 0) {
        if ($value === 0) {
        if ($value === 0) {
        if ($value === 0) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if ($value === 0) {
        if (0 === $value) {
        if ($value === 0) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if ($value === 0) {
        if ($value === 0) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 == $value) {
        if (0 === $value) {
        if (0 === $value) {
=======
>>>>>>> ca9324a4 (.)
=======
        if (0 === $value) {
=======
        if (0 == $value) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
            $key = static::getKeyTransFunc(__FUNCTION__);
            $value = rand(1, 100);
            app(SaveTransAction::class)->execute($key, $value);
        }

        return $value;
    }

    public static function getNavigationIcon(): string
    {
        $default = 'heroicon-o-question-mark-circle';

        $icon = static::transFunc(__FUNCTION__);

        if (app(SvgExistsAction::class)->execute($icon)) {
            return $icon;
        }

        return $default;
    }
<<<<<<< HEAD

    /*
     *
     * public function getHeading(): string|Htmlable
     * {
     * return 'AAAAAAAAAA';
     * }
     *
     *
     *
     * public static function getBreadcrumb(): string {
     * return JobsWaitingPlugin::make()->getBreadcrumb();
     * }
     *
     * public static function shouldRegisterNavigation(): bool {
     * return JobsWaitingPlugin::make()->shouldRegisterNavigation();
     * }
     *
     * public static function getNavigationIcon(): string {
     * return JobsWaitingPlugin::make()->getNavigationIcon();
     * }
     *
     */
}

/*
 * public static function transPath(string $key): string
 * {
 * $moduleNameLow = Str::lower(static::getModuleName());
 * // $modelClass = static::$model ?? static::getModel();
 * $modelClass = static::getModel();
 * Assert::notNull($modelClass,'['.__LINE__.']['.class_basename($this).']');
 * $modelNameSlug = Str::kebab(class_basename($modelClass));
 *
 * return $moduleNameLow.'::'.$modelNameSlug.'.'.$key;
 * }
 *
 * public static function trans(string $key): string
 * {
 * $res = __(static::transPath($key));
 * if (\is_array($res)) {
 * throw new \Exception('fix lang ['.$key.']');
 * }
 *
 * return $res;
 * }
 */
<<<<<<< HEAD
    /*
     *
     * public function getHeading(): string|Htmlable
     * {
     * return 'AAAAAAAAAA';
     * }
     *
     *
     *
     * public static function getBreadcrumb(): string {
     * return JobsWaitingPlugin::make()->getBreadcrumb();
     * }
     *
     * public static function shouldRegisterNavigation(): bool {
     * return JobsWaitingPlugin::make()->shouldRegisterNavigation();
     * }
     *
     * public static function getNavigationIcon(): string {
     * return JobsWaitingPlugin::make()->getNavigationIcon();
     * }
     *
     */
=======
=======
    /*

    public function getHeading(): string|Htmlable
    {
        return 'AAAAAAAAAA';
    }



    public static function getBreadcrumb(): string {
        return JobsWaitingPlugin::make()->getBreadcrumb();
    }

    public static function shouldRegisterNavigation(): bool {
        return JobsWaitingPlugin::make()->shouldRegisterNavigation();
    }

    public static function getNavigationIcon(): string {
        return JobsWaitingPlugin::make()->getNavigationIcon();
    }

    */
>>>>>>> 2f3197ab (.)
}

/*
public static function transPath(string $key): string
    {
        $moduleNameLow = Str::lower(static::getModuleName());
        // $modelClass = static::$model ?? static::getModel();
        $modelClass = static::getModel();
        Assert::notNull($modelClass,'['.__LINE__.']['.class_basename($this).']');
        $modelNameSlug = Str::kebab(class_basename($modelClass));

        return $moduleNameLow.'::'.$modelNameSlug.'.'.$key;
    }

    public static function trans(string $key): string
    {
        $res = __(static::transPath($key));
        if (\is_array($res)) {
            throw new \Exception('fix lang ['.$key.']');
        }

        return $res;
    }
*/
<<<<<<< HEAD
 * public static function transPath(string $key): string
 * {
 * $moduleNameLow = Str::lower(static::getModuleName());
 * // $modelClass = static::$model ?? static::getModel();
 * $modelClass = static::getModel();
 * Assert::notNull($modelClass,'['.__LINE__.']['.class_basename($this).']');
 * $modelNameSlug = Str::kebab(class_basename($modelClass));
 *
 * return $moduleNameLow.'::'.$modelNameSlug.'.'.$key;
 * }
 *
 * public static function trans(string $key): string
 * {
 * $res = __(static::transPath($key));
 * if (\is_array($res)) {
 * throw new \Exception('fix lang ['.$key.']');
 * }
 *
 * return $res;
 * }
 */
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
