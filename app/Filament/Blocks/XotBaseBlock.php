<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Blocks;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Filament\Schemas\Components\Component;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
use Modules\Xot\Filament\Traits\TransTrait;
<<<<<<< HEAD
=======
use Filament\Forms\Components\Select;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Forms\Components\Builder\Block;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

abstract class XotBaseBlock
{
    use TransTrait;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

    public static function make(string $name = 'article_list', string $context = 'form'): Block
    {
        /**
         * @var array<Component>
         */
        $schema = array_merge(static::getBlockSchema(), static::getBlockVarSchema());

        return Block::make($name)->schema($schema)->columns('form' === $context ? 3 : 1);
<<<<<<< HEAD
=======
    
    public static function make(
        string $name = 'article_list',
        string $context = 'form',
    ): Block {
        /**
         * @var array<\Filament\Schemas\Components\Component>
         */
        $schema = array_merge(static::getBlockSchema(), static::getBlockVarSchema());

        return Block::make($name)
            ->schema($schema)

            ->columns('form' === $context ? 3 : 1);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
    }

    /**
     * Undocumented function.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<Component>
=======
     * @return array<\Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
=======
     * @return array<Component>
>>>>>>> 73eab74 (.)
     */
    public static function getBlockSchema(): array
    {
        return [];
    }

    /**
     * Undocumented function.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
     * @return array<Component>
     */
    public static function getBlockVarSchema(): array
    {
        $options = app(GetViewBlocksOptionsByTypeAction::class)->execute('article_list', false);

        return [
            Select::make('view')->options($options),
<<<<<<< HEAD
=======
     * @return array<\Filament\Schemas\Components\Component>
     */
    public static function getBlockVarSchema(): array
    {
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('article_list', false);

        return [
            Select::make('view')
                ->options($options),
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        ];
    }
}
