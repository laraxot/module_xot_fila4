<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Nwidart\Modules\Facades\Module as ModuleFacade;
use Nwidart\Modules\Module as NModule;
use function Safe\json_encode;
use Sushi\Sushi;

=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
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
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a14301c (.)
use Illuminate\Support\Arr;
use Nwidart\Modules\Facades\Module as ModuleFacade;
use Nwidart\Modules\Module as NModule;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\json_encode;
use Sushi\Sushi;

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 099ab7a0 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 96276392 (.)
=======
>>>>>>> 3baa48bd (.)
=======
>>>>>>> 6d1255a8 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 5b07d268 (.)
>>>>>>> laraxot/develop
use Sushi\Sushi;

use function Safe\json_encode;

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
=======
>>>>>>> 099ab7a0 (.)
=======
>>>>>>> 96276392 (.)
=======
>>>>>>> 6d1255a8 (.)
=======
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> laraxot/develop

use function Safe\json_encode;

use Sushi\Sushi;

<<<<<<< HEAD
/**
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a62d7646 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d79d36e0 (.)
=======
>>>>>>> 5cd593a5 (.)
=======
>>>>>>> 099ab7a0 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 96276392 (.)
=======
>>>>>>> 3baa48bd (.)
=======
>>>>>>> 6d1255a8 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 3ae5e299 (.)
=======
>>>>>>> 5b07d268 (.)
/**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Nwidart\Modules\Facades\Module as ModuleFacade;
use Nwidart\Modules\Module as NModule;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
use Sushi\Sushi;

use function Safe\json_encode;

<<<<<<< HEAD
/**
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop

use function Safe\json_encode;

use Sushi\Sushi;

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Sushi\Sushi;

use function Safe\json_encode;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
/**
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
 * @property int         $id
 * @property string|null $name
 * @property string|null $description
 * @property bool|null   $status
 * @property int|null    $priority
 * @property string|null $path
<<<<<<< HEAD
 *
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
 *
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
 *
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
>>>>>>> laraxot/develop
 * @method static Builder|Module newModelQuery()
 * @method static Builder|Module newQuery()
 * @method static Builder|Module query()
 * @method static Builder|Module whereDescription($value)
 * @method static Builder|Module whereId($value)
 * @method static Builder|Module whereName($value)
 * @method static Builder|Module wherePath($value)
 * @method static Builder|Module wherePriority($value)
 * @method static Builder|Module whereStatus($value)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
 *
 * @property string|null $icon
 * @property array<string, string>|null $colors
 *
 * @method static Builder|Module whereColors($value)
 * @method static Builder|Module whereIcon($value)
<<<<<<< HEAD
 * @mixin IdeHelperModule
 * @mixin IdeHelperModule
 *
 * @mixin IdeHelperModule
 * @mixin IdeHelperModule
 *
 * @mixin IdeHelperModule
 * @mixin \Eloquent
 */
class Module extends Model
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @mixin IdeHelperModule
=======
 *
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
=======
 * @mixin IdeHelperModule
>>>>>>> 53d6a6ba (.)
=======
 *
<<<<<<< HEAD
 * @mixin IdeHelperModule
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
 * @mixin IdeHelperModule
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
 *
 * @mixin IdeHelperModule
>>>>>>> 71586de2 (.)
 * @mixin \Eloquent
 */
class Module extends Model
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
=======
 *
>>>>>>> cc7fb225 (.)
>>>>>>> laraxot/develop
 * @property string|null $icon
 * @property array<string, string>|null $colors
 *
 * @method static Builder|Module whereColors($value)
 * @method static Builder|Module whereIcon($value)
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * @mixin IdeHelperModule
=======
 *
>>>>>>> cc7fb225 (.)
 * @mixin \Eloquent
 */
class Module extends Model
>>>>>>> 5a14301c (.)
=======
 * @property string|null $icon
 * @property array<string, string>|null $colors
 * @method static Builder|Module whereColors($value)
 * @method static Builder|Module whereIcon($value)
<<<<<<< HEAD
=======
=======
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereStatus($value)
 * @property string|null $icon
 * @property array<string, string>|null $colors
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereColors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereIcon($value)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
 * @mixin IdeHelperModule
 * @mixin \Eloquent
 */
class Module extends Model
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
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
        $modules = Arr::map($modules, function (NModule $module): array {
            $config = config('tenant::config');
            if (! is_array($config)) {
            if (!is_array($config)) {
            if (!is_array($config)) {
            if (!is_array($config)) {
            if (!is_array($config)) {
                $config = [];
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $modules = Arr::map($modules, function (NModule $module): array {
            $config = config('tenant::config');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! is_array($config)) {
=======
            if (!is_array($config)) {
>>>>>>> 5a14301c (.)
=======
            if (!is_array($config)) {
>>>>>>> 5a14301c (.)
=======
            if (!is_array($config)) {
>>>>>>> 5a14301c (.)
=======
            if (!is_array($config)) {
>>>>>>> 5a14301c (.)
=======
            if (!is_array($config)) {
>>>>>>> 5a14301c (.)
=======
            if (!is_array($config)) {
>>>>>>> 5a14301c (.)
                $config = [];
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
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
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
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
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
            }
            $colors = Arr::get($config, 'colors', []);

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> b93ef594b4 (.)
=======
            }
        );

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
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
