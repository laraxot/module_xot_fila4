<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Nwidart\Modules\Facades\Module as ModuleFacade;
use Nwidart\Modules\Module as NModule;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Sushi\Sushi;

use function Safe\json_encode;

<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)

use function Safe\json_encode;

use Sushi\Sushi;

<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
/**
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property bool|null $status
 * @property int|null $priority
 * @property string|null $path
 * @property string|null $icon
 * @property array<array-key, mixed>|null $colors
 *
 * @method static Builder<static>|Module newModelQuery()
 * @method static Builder<static>|Module newQuery()
 * @method static Builder<static>|Module query()
 * @method static Builder<static>|Module whereColors($value)
 * @method static Builder<static>|Module whereDescription($value)
 * @method static Builder<static>|Module whereIcon($value)
 * @method static Builder<static>|Module whereId($value)
 * @method static Builder<static>|Module whereName($value)
 * @method static Builder<static>|Module wherePath($value)
 * @method static Builder<static>|Module wherePriority($value)
 * @method static Builder<static>|Module whereStatus($value)
 *
 * @mixin \Eloquent
 */
final class Module extends BaseModel
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Nwidart\Modules\Facades\Module as ModuleFacade;
use Nwidart\Modules\Module as NModule;
use Sushi\Sushi;

use function Safe\json_encode;


use function Safe\json_encode;

use Sushi\Sushi;

use Sushi\Sushi;

use function Safe\json_encode;

/**
 * @property int         $id
 * @property string|null $name
 * @property string|null $description
 * @property bool|null   $status
 * @property int|null    $priority
 * @property string|null $path
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
 *
 * @property string|null $icon
 * @property array<string, string>|null $colors
 *
 * @method static Builder|Module whereColors($value)
 * @method static Builder|Module whereIcon($value)
 * @mixin IdeHelperModule
 *
 * @mixin IdeHelperModule
 *
 * @mixin IdeHelperModule
 * @mixin \Eloquent
 */
class Module extends Model
 *
 * @property string|null $icon
 * @property array<string, string>|null $colors
 *
 * @method static Builder|Module whereColors($value)
 * @method static Builder|Module whereIcon($value)
 * @mixin \Eloquent
 */
class Module extends Model
 * @property string|null $icon
 * @property array<string, string>|null $colors
 * @method static Builder|Module whereColors($value)
 * @method static Builder|Module whereIcon($value)
 * @mixin IdeHelperModule
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $modules = Arr::map($modules, function (NModule $module): array {
            $config = config('tenant::config');
            if (!is_array($config)) {
            if (!is_array($config)) {
            if (!is_array($config)) {
            if (!is_array($config)) {
            if (!is_array($config)) {
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
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
        $modules = Arr::map(
            $modules,
            function (NModule $module): array {
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
            }
<<<<<<< HEAD
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
            }
        );

=======
        );

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
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
