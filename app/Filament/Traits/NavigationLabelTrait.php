<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\File\SvgExistsAction;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Support\Str;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\File\SvgExistsAction;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

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
    public static function getNavigationSort(): null|int
>>>>>>> 17684f52 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 399f46d3 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 399f46d3 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 17684f52 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 399f46d3 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
    public static function getNavigationSort(): ?int
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public static function getNavigationSort(): ?int
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
    public static function getNavigationSort(): ?int
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public static function getNavigationSort(): ?int
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
    public static function getNavigationSort(): null|int
=======
    public static function getNavigationSort(): ?int
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
=======
=======
    public static function getNavigationSort(): null|int
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 9db27d12 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 5a14301c (.)
=======
    public static function getNavigationSort(): null|int
=======
    public static function getNavigationSort(): ?int
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
    public static function getNavigationSort(): null|int
=======
    public static function getNavigationSort(): ?int
>>>>>>> f1d4085 (.)
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
=======
=======
    public static function getNavigationSort(): null|int
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public static function getNavigationSort(): null|int
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public static function getNavigationSort(): ?int
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    public static function getNavigationSort(): ?int
>>>>>>> 71586de2 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 5a14301c (.)
=======
    public static function getNavigationSort(): null|int
=======
    public static function getNavigationSort(): ?int
>>>>>>> f1d4085 (.)
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
=======
=======
    public static function getNavigationSort(): null|int
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
    public static function getNavigationSort(): null|int
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public static function getNavigationSort(): ?int
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
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
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6dcebf8a (.)
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
        if (0 === $value) {
>>>>>>> 17684f52 (.)
=======
        if (0 === $value) {
>>>>>>> 399f46d3 (.)
=======
        if (0 === $value) {
>>>>>>> 399f46d3 (.)
=======
        if (0 === $value) {
>>>>>>> 17684f52 (.)
=======
        if (0 === $value) {
>>>>>>> 399f46d3 (.)
=======
        if (0 === $value) {
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
=======
        if ($value === 0) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if ($value === 0) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if ($value === 0) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        if ($value === 0) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        if (0 === $value) {
=======
        if (0 == $value) {
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
=======
=======
        if (0 === $value) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (0 === $value) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (0 === $value) {
>>>>>>> 9db27d12 (.)
=======
        if (0 === $value) {
>>>>>>> 5a14301c (.)
=======
        if (0 === $value) {
=======
        if (0 == $value) {
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
        if (0 === $value) {
=======
        if (0 == $value) {
>>>>>>> f1d4085 (.)
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
=======
=======
        if (0 === $value) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (0 === $value) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (0 === $value) {
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        if (0 === $value) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        if (0 === $value) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if ($value === 0) {
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        if (0 === $value) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        if ($value === 0) {
>>>>>>> 71586de2 (.)
=======
        if (0 === $value) {
>>>>>>> 5a14301c (.)
=======
        if (0 === $value) {
=======
        if (0 == $value) {
>>>>>>> f1d4085 (.)
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
=======
=======
        if (0 === $value) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (0 === $value) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (0 === $value) {
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
        if (0 === $value) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if ($value === 0) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
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
