<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

use Filament\Pages\Dashboard as FilamentDashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

abstract class XotBaseDashboard extends FilamentDashboard
{
    use HasFiltersForm;

    protected static ?int $navigationSort = 1;

    protected bool $persistsFiltersInSession = true;

    final public function filtersForm(Schema $schema): Schema
    {
        /** @var array<\Illuminate\Contracts\Support\Htmlable|string> $schemaComponents */
        $schemaComponents = $this->getFiltersFormSchema();

        return $schema->components([
            Section::make()->schema($schemaComponents)->columns(3),
        ]);
    }

    /**
     * @return array<\Illuminate\Contracts\Support\Htmlable|string>
     */
    public function getFiltersFormSchema(): array
    {
        return [];
    }
}
