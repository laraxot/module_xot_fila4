<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Blocks;

use Filament\Schemas\Components\Component;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
use Modules\Xot\Filament\Traits\TransTrait;

abstract class XotBaseBlock
{
    use TransTrait;

    public static function make(string $name = 'article_list', string $context = 'form'): Block
    {
        /**
         * @var array<Component>
         */
        $form = array_merge(static::getBlockSchema(), static::getBlockVarSchema());

<<<<<<< HEAD
        return Block::make($name)->schema($form)->columns('form' === $context ? 3 : 1);
=======
        return Block::make($name)->schema($schema)->columns('form' === $context ? 3 : 1);
>>>>>>> 2850177 (.)
    }

    /**
     * Undocumented function.
     *
     * @return array<Component>
     */
    public static function getBlockSchema(): array
    {
        return [];
    }

    /**
     * Undocumented function.
     *
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
