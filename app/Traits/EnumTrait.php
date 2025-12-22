<?php

declare(strict_types=1);

namespace Modules\Xot\Traits;

use Filament\Forms\Components\TextInput;
use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;
use Modules\Xot\Filament\Traits\TransTrait;

trait EnumTrait
{
    use TransTrait;

    public function getLabel(): string
    {
        return $this->transClass(static::class, $this->value.'.label');
    }

    public function getColor(): string
    {
        return $this->transClass(static::class, $this->value.'.color');
    }

    public function getIcon(): string
    {
        return $this->transClass(static::class, $this->value.'.icon');
    }

    public function getDescription(): string
    {
        return $this->transClass(static::class, $this->value.'.description');
    }

    /**
     * @return array<string>
     */
    public static function getSearchable(): array
    {
        return array_map(static fn ($item) => $item->value, static::cases());
    }

    /**
     * @return array<string, TextInput>
     */
    public static function getFormSchema(): array
    {
        $cases = static::cases();
        /** @var array<string, TextInput> $result */
        $result = [];
        foreach ($cases as $item) {
            $result[$item->value] = TextInput::make($item->value)->prefixIcon($item->getIcon());
        }

        return $result;
    }

    /**
     * @param Blueprint             $table     The table blueprint
     * @param XotBaseMigration|null $migration XotBaseMigration instance for UPDATE context (provides hasColumn())
     */
    public static function columns(Blueprint $table, ?XotBaseMigration $migration = null): void
    {
        //Call to function method_exists() with 'Modules\\Notify\\Enums\\ChannelEnum' and  'getColumnDefinitions' will always evaluate to true.
        //if (! method_exists(static::class, 'getColumnDefinitions')) {
        //    return;
        //}

        foreach (static::getColumnDefinitions() as $name => $definition) {
            if (null === $migration || ! $migration->hasColumn($name)) {
                $definition($table);
            }
        }
    }

    /**
     * Ensure all standard contact columns exist in UPDATE context.
     */
    public static function updateColumns(Blueprint $table, XotBaseMigration $migration): void
    {
        static::columns($table, $migration);
    }

    /**
     * Drop all standard contact columns from a table.
     */
    public static function dropColumns(Blueprint $table): void
    {
        $table->dropColumn(static::getColumnNames());
    }

    /**
     * Get all column names as an array.
     *
     * @return array<int, string>
     */
    public static function getColumnNames(): array
    {
        return array_map(static fn ($case) => $case->value, static::cases());
    }

    /**
     * Internal map of standard column definitions.
     * This should be overridden in the enum class if needed.
     *
     * @return array<string, callable(Blueprint): void>
     */
    public static function getColumnDefinitions(): array
    {
        return [];
    }
}
