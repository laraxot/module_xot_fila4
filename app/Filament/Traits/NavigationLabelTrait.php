<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\File\SvgExistsAction;
=======
=======
>>>>>>> 5a14301c (.)
use Illuminate\Support\Str;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\File\SvgExistsAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

trait NavigationLabelTrait
{
    use TransTrait;

<<<<<<< HEAD
    // public function getModelLabel(): string
    // {
    //     return static::transFunc(__FUNCTION__);
    // }
    // Rimosso per compatibilità Filament v4 - il metodo è già definito nella classe Resource
=======
    public static function getModelLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }
>>>>>>> f1d4085 (.)

    public static function getPluralModelLabel(): string
    {
        return static::getNavigationLabel();
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getNavigationSort(): ?int
=======
    public static function getNavigationSort(): null|int
>>>>>>> 5a14301c (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 3fbbf1f5 (.)
=======
    public static function getNavigationSort(): null|int
=======
    public static function getNavigationSort(): null|int
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getNavigationSort(): null|int
=======
    public static function getNavigationSort(): ?int
>>>>>>> a12f125f4a (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> b93ef594b4 (.)
=======
    public static function getNavigationSort(): ?int
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> ca9324a4 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
    public static function getNavigationSort(): null|int
=======
    public static function getNavigationSort(): ?int
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public static function getNavigationSort(): null|int
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> ca9324a4 (.)
=======
    public static function getNavigationSort(): null|int
=======
    public static function getNavigationSort(): ?int
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
    {
        $res = static::transFunc(__FUNCTION__);

        $value = intval($res);

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
        if ($value === 0) {
=======
        if (0 === $value) {
>>>>>>> 5a14301c (.)
=======
        if (0 === $value) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (0 === $value) {
=======
        if (0 === $value) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (0 === $value) {
=======
        if (0 == $value) {
>>>>>>> a12f125f4a (.)
=======
        if (0 === $value) {
>>>>>>> b93ef594b4 (.)
=======
        if (0 == $value) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if (0 === $value) {
>>>>>>> ca9324a4 (.)
=======
        if (0 === $value) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        if (0 === $value) {
=======
        if (0 == $value) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (0 === $value) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (0 === $value) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (0 === $value) {
>>>>>>> ca9324a4 (.)
=======
        if (0 === $value) {
=======
        if (0 == $value) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
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
