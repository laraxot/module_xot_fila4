<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Nwidart\Modules\Facades\Module as ModuleFacade;
use Nwidart\Modules\Module as NModule;
use Sushi\Sushi;

use function Safe\json_encode;

/**
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
 * @property string|null $version
 * @property string|null $description
 * @property bool|null $status
 * @property bool $enabled
 * @property int|null $priority
 * @property string|null $path
 * @property string|null $icon
 * @property array<string, string>|null $colors
 * @property array<int, string>|null $dependencies
 * @property array<string, mixed>|null $config
 * @property array<string, mixed>|null $metadata
 * @property \Illuminate\Support\Carbon|null $installed_at
 * @property array<int, array<string, mixed>>|null $update_history
 * @property string|null $laravel_version
 * @property string|null $php_version
 * @property array<int, string>|null $permissions
 * @property array<string, mixed>|null $routes
 * @property array<string, mixed>|null $assets
 * @property array<string, mixed>|null $settings
 * @property \Illuminate\Support\Carbon|null $activation_date
 * @property \Illuminate\Support\Carbon|null $deactivation_date
 * @property array<string, mixed>|null $usage_statistics
 * @property array<int, array<string, mixed>>|null $error_log
 *
 * @method static Builder|Module newModelQuery()
 * @method static Builder|Module newQuery()
 * @method static Builder|Module query()
 * @method static Builder|Module whereDescription($value)
 * @method static Builder|Module whereId($value)
 * @method static Builder|Module whereName($value)
 * @method static Builder|Module wherePath($value)
 * @method static Builder|Module wherePriority($value)
 * @method static Builder|Module whereStatus($value)
 * @method static Builder|Module whereColors($value)
 * @method static Builder|Module whereIcon($value)
 * @method bool isEnabled()
 * @method bool isDisabled()
 *
 * @mixin \Eloquent
 */
class Module extends Model
{
    use Sushi;

    protected $fillable = [
        'name',
        // 'alias',
        // 'description',
        'status',
        'priority',
        'path',
        'icon',
        'colors',
    ];

    /**
     * @return array<int, array<string, mixed>>
     */
    public function getRows(): array
    {
        $modules = ModuleFacade::all();
        $modules = Arr::map($modules, function (NModule $module): array {
            $config = config('tenant::config');
            if (! is_array($config)) {
                $config = [];
            }
            $colors = Arr::get($config, 'colors', []);

            return [
                'name' => $module->getName(),
                // 'alias' => $module->getAlias(),
                'description' => $module->getDescription(),
                'status' => $module->isEnabled(),
                'priority' => $module->get('priority'),
                'path' => $module->getPath(),
                'icon' => Arr::get($config, 'icon', 'heroicon-o-question-mark-circle'),
                'colors' => json_encode($colors),
            ];
        });

        /** @var array<int, array<string, mixed>> */
        return array_values($modules);
    }

    protected function casts(): array
    {
        return [
            'name' => 'string',
            'description' => 'string',
            'status' => 'boolean',
            'priority' => 'integer',
            'path' => 'string',
            'icon' => 'string',
            'colors' => 'array',
        ];
    }
}
