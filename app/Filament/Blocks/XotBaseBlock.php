<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Blocks;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Component;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
use Filament\Schemas\Components\Component;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
>>>>>>> 5a14301c (.)
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
=======
=======
use Filament\Forms\Components\Select;
use Modules\Xot\Filament\Traits\TransTrait;
=======
use Filament\Schemas\Components\Component;
>>>>>>> b93ef594b4 (.)
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Filament\Traits\TransTrait;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms\Components\Select;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Forms\Components\Builder\Block;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

abstract class XotBaseBlock
{
    use TransTrait;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

    public static function make(string $name = 'article_list', string $context = 'form'): Block
    {
<<<<<<< HEAD
        /** @var array<Component> $schema */
        $schema = array_merge(static::getBlockSchema(), static::getBlockVarSchema());

        return Block::make($name)->schema($schema)->columns($context === 'form' ? 3 : 1);
    }

    /**
=======
        /**
         * @var array<Component>
         */
        $schema = array_merge(static::getBlockSchema(), static::getBlockVarSchema());

        return Block::make($name)->schema($schema)->columns('form' === $context ? 3 : 1);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    
    public static function make(
        string $name = 'article_list',
        string $context = 'form',
    ): Block {
<<<<<<< HEAD
=======

    public static function make(string $name = 'article_list', string $context = 'form'): Block
    {
>>>>>>> b93ef594b4 (.)
        /**
         * @var array<Component>
         */
        $schema = array_merge(static::getBlockSchema(), static::getBlockVarSchema());

<<<<<<< HEAD
=======
        /**
         * @var array<\Filament\Forms\Components\Component>
         */
        $schema = array_merge(static::getBlockSchema(), static::getBlockVarSchema());

>>>>>>> origin/develop
        return Block::make($name)
            ->schema($schema)

            ->columns('form' === $context ? 3 : 1);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        return Block::make($name)->schema($schema)->columns('form' === $context ? 3 : 1);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Undocumented function.
     *
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
     * @return array<Component>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<Component>
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> a12f125f4a (.)
=======
     * @return array<Component>
>>>>>>> b93ef594b4 (.)
=======
     * @return array<\Filament\Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public static function getBlockSchema(): array
    {
        return [];
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * Undocumented function.
     *
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
     * Undocumented function.
     *
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
     * @return array<Component>
     */
    public static function getBlockVarSchema(): array
    {
        $options = app(GetViewBlocksOptionsByTypeAction::class)->execute('article_list', false);

        return [
            Select::make('view')->options($options),
<<<<<<< HEAD
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
=======
     * @return array<Component>
>>>>>>> b93ef594b4 (.)
     */
    public static function getBlockVarSchema(): array
    {
        $options = app(GetViewBlocksOptionsByTypeAction::class)->execute('article_list', false);

        return [
<<<<<<< HEAD
            Select::make('view')
                ->options($options),
>>>>>>> a12f125f4a (.)
=======
            Select::make('view')->options($options),
>>>>>>> b93ef594b4 (.)
=======
     * @return array<\Filament\Forms\Components\Component>
     */
    public static function getBlockVarSchema(): array
    {
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('article_list', false);

        return [
            Select::make('view')
                ->options($options),
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        ];
    }
}
