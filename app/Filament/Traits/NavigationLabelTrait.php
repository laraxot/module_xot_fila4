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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
    // public function getModelLabel(): string
    // {
    //     return static::transFunc(__FUNCTION__);
    // }
    // Rimosso per compatibilità Filament v4 - il metodo è già definito nella classe Resource
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
    public static function getModelLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

    public static function getPluralModelLabel(): string
    {
        return static::getNavigationLabel();
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD



=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD

>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
    public static function getNavigationSort(): ?int
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public static function getNavigationSort(): null|int
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    public static function getNavigationSort(): null|int
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
    public static function getNavigationSort(): null|int
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
    public static function getNavigationSort(): null|int
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
    public static function getNavigationSort(): null|int
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    {
        $res = static::transFunc(__FUNCTION__);

        $value = intval($res);

<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
        if ($value === 0) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
        if (0 === $value) {
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
        if (0 === $value) {
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
        if (0 === $value) {
        if (0 === $value) {
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        if (0 === $value) {
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
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        if (0 === $value) {
        if (0 == $value) {
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        if (0 === $value) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        if (0 === $value) {
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
        if (0 === $value) {
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        if (0 === $value) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
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
        if (0 === $value) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
}

/*
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
}

/*
=======
}

/*
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
}

/*
>>>>>>> 7468a7d2 (.)
=======
}

/*
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
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
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
