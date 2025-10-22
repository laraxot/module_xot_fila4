<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

use Illuminate\Support\Str;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\File\SvgExistsAction;
use Webmozart\Assert\Assert;

trait NavigationLabelTrait
{
    use TransTrait;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    // public function getModelLabel(): string
    // {
    //     return static::transFunc(__FUNCTION__);
    // }
    // Rimosso per compatibilità Filament v4 - il metodo è già definito nella classe Resource
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public static function getModelLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

    public static function getPluralModelLabel(): string
    {
        return static::getNavigationLabel();
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======

>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
    public static function getNavigationSort(): ?int
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getNavigationSort(): null|int
=======
    public static function getNavigationSort(): ?int
>>>>>>> f1d4085 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 300ef70 (.)
    {
        $res = static::transFunc(__FUNCTION__);

        $value = intval($res);

<<<<<<< HEAD
<<<<<<< HEAD
        if ($value === 0) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (0 === $value) {
=======
        if (0 == $value) {
>>>>>>> f1d4085 (.)
=======
        if (0 === $value) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        if (0 === $value) {
>>>>>>> 300ef70 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
