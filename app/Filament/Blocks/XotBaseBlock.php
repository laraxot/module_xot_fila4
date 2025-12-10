<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Component;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Component;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Component;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Component;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Component;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
use Modules\Xot\Filament\Traits\TransTrait;

abstract class XotBaseBlock
{
    use TransTrait;

    public static function make(string $name = 'article_list', string $context = 'form'): Block
    {
<<<<<<< HEAD
<<<<<<< HEAD

    public static function make(string $name = 'article_list', string $context = 'form'): Block
    {
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
        /** @var array<Component> $schema */
        $schema = array_merge(static::getBlockSchema(), static::getBlockVarSchema());

        return Block::make($name)->schema($schema)->columns($context === 'form' ? 3 : 1);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
        /**
         * @var array<Component>
         */
        $schema = array_merge(static::getBlockSchema(), static::getBlockVarSchema());

        return Block::make($name)->schema($schema)->columns('form' === $context ? 3 : 1);
    
    public static function make(
        string $name = 'article_list',
        string $context = 'form',
    ): Block {
        /**
         * @var array<\Filament\Schemas\Components\Component>
         */
        $schema = array_merge(static::getBlockSchema(), static::getBlockVarSchema());


    public static function make(string $name = 'article_list', string $context = 'form'): Block
    {

    public static function make(string $name = 'article_list', string $context = 'form'): Block
    {
        /**
         * @var array<Component>
         */
        $schema = array_merge(static::getBlockSchema(), static::getBlockVarSchema());

        return Block::make($name)
            ->schema($schema)

            ->columns('form' === $context ? 3 : 1);
        return Block::make($name)->schema($schema)->columns('form' === $context ? 3 : 1);
        return Block::make($name)->schema($schema)->columns('form' === $context ? 3 : 1);
    }

    /**
     * Undocumented function.
     *
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
     * @return array<Component>
     */
    public static function getBlockSchema(): array
    {
        return [];
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Undocumented function.
     *
     * Undocumented function.
     *
     * Undocumented function.
     *
     * Undocumented function.
     *
     * Undocumented function.
     *
     * Undocumented function.
     *
     * Undocumented function.
     *
     * Undocumented function.
     *
     * Undocumented function.
     *
     * Undocumented function.
     *
     * Undocumented function.
     *
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
     * @return array<Component>
     */
    public static function getBlockVarSchema(): array
    {
        $options = app(GetViewBlocksOptionsByTypeAction::class)->execute('article_list', false);

        return [
            Select::make('view')->options($options),
        ];
    }
}
