<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

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
use Exception;
use ReflectionClass;
use Filament\Pages\Enums\SubNavigationPosition;
use Filament\Resources\Pages\Page;
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\RelationManagers\RelationGroup;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\RelationManagers\RelationManagerConfiguration;
use Filament\Resources\Resource as FilamentResource;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
use Filament\Support\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
use Filament\Schemas\Components\Component;
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\Pages\Page;
use Filament\Resources\RelationManagers\RelationGroup;
use Filament\Resources\RelationManagers\RelationManagerConfiguration;
use Filament\Pages\Enums\SubNavigationPosition;
use Illuminate\Database\Eloquent\Model;
use Filament\Schemas\Schema;
use Exception;
use ReflectionClass;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Forms;
use Filament\Resources\Resource as FilamentResource;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
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
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Modules\Media\Actions\GetAttachmentsSchemaAction;
use Modules\Xot\Actions\ModelClass\CountAction;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

use function Safe\glob;

use Webmozart\Assert\Assert;

=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Webmozart\Assert\Assert;

use function Safe\glob;

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
/**
 * @method static string getUrl(string $name, array<string, mixed> $parameters = [], bool $isAbsolute = true)
 */
abstract class XotBaseResource extends FilamentResource
{
    use NavigationLabelTrait;

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
    protected static ?string $model = null;
=======
    protected static null|string $model = null;
>>>>>>> 5a14301c (.)
=======
    protected static null|string $model = null;
>>>>>>> 3fbbf1f5 (.)
=======
    protected static null|string $model = null;
=======
    protected static null|string $model = null;
>>>>>>> 399f46d3 (.)
=======
    protected static null|string $model = null;
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static null|string $model = null;
=======
    protected static ?string $model = null;
>>>>>>> a12f125f4a (.)
=======
    protected static null|string $model = null;
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $model = null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    protected static null|string $model = null;
>>>>>>> ca9324a4 (.)
=======
    protected static null|string $model = null;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
    protected static null|string $model = null;
=======
    protected static ?string $model = null;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    protected static null|string $model = null;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    protected static null|string $model = null;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    protected static null|string $model = null;
>>>>>>> ca9324a4 (.)
=======
    protected static null|string $model = null;
>>>>>>> 5a14301c (.)
=======
    protected static null|string $model = null;
=======
    protected static ?string $model = null;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    protected static null|string $model = null;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    protected static null|string $model = null;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    protected static null|string $model = null;
>>>>>>> ca9324a4 (.)
=======
    protected static null|string $model = null;
>>>>>>> 5a14301c (.)
=======
    protected static null|string $model = null;
=======
    protected static ?string $model = null;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    protected static null|string $model = null;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    protected static null|string $model = null;
>>>>>>> 3fbbf1f5 (.)

    // protected static ?string $navigationIcon = 'heroicon-o-bell';
    // protected static ?string $navigationLabel = 'Custom Navigation Label';
    // protected static ?string $activeNavigationIcon = 'heroicon-s-document-text';
    // protected static bool $shouldRegisterNavigation = false;
    // protected static ?string $navigationGroup = 'Parametri di Sistema';
    // protected static ?int $navigationSort = null;

    protected static ?\Filament\Pages\Enums\SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    public static function getModuleName(): string
    {
        return Str::between(static::class, 'Modules\\', '\Filament');
    }

    public function hasCombinedRelationManagerTabsWithContent(): bool
    {
        return true;
    }

    /**
     * @return class-string<Model>
     */
    public static function getModel(): string
    {
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
        if (null !== static::$model) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
        if (static::$model !== null) {
>>>>>>> 5a14301c (.)
=======
        if (static::$model !== null) {
>>>>>>> 5a14301c (.)
=======
        if (static::$model !== null) {
>>>>>>> 5a14301c (.)
=======
        if (static::$model !== null) {
>>>>>>> 5a14301c (.)
            $res = static::$model;
            Assert::subclassOf(
                $res,
                Model::class,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                \sprintf('Class %s must extend Eloquent Model', $res),
=======
                sprintf('Class %s must extend Eloquent Model', $res),
>>>>>>> 5a14301c (.)
=======
                sprintf('Class %s must extend Eloquent Model', $res),
>>>>>>> 3fbbf1f5 (.)
=======
                sprintf('Class %s must extend Eloquent Model', $res),
>>>>>>> 5a14301c (.)
=======
                sprintf('Class %s must extend Eloquent Model', $res),
>>>>>>> 5a14301c (.)
=======
                sprintf('Class %s must extend Eloquent Model', $res),
>>>>>>> 5a14301c (.)
            );

            return $res;
        }
        $moduleName = static::getModuleName();
        $modelName = Str::before(class_basename(static::class), 'Resource');
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
        $res = 'Modules\\'.$moduleName.'\Models\\'.$modelName;
        Assert::classExists($res, \sprintf('Model class %s does not exist', $res));
        Assert::subclassOf(
            $res,
            Model::class,
            \sprintf('Class %s must extend Eloquent Model', $res),
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
        $res = 'Modules\\' . $moduleName . '\Models\\' . $modelName;
        Assert::classExists($res, sprintf('Model class %s does not exist', $res));
        Assert::subclassOf(
            $res,
            Model::class,
            sprintf('Class %s must extend Eloquent Model', $res),
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
        );
        static::$model = $res;

        return $res;
    }

    /**
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
     * @return array<string, Component>
=======
     * @return array<string|int, Component>
>>>>>>> 5a14301c (.)
=======
     * @return array<string|int, Component>
>>>>>>> 3fbbf1f5 (.)
=======
     * @return array<string|int, Component>
=======
     * @return array<string|int, Component>
>>>>>>> 399f46d3 (.)
=======
     * @return array<string|int, Component>
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string|int, Component>
=======
     * @return array<string|int, \Filament\Schemas\Components\Component>
>>>>>>> a12f125f4a (.)
=======
     * @return array<string|int, Component>
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
     * @return array<string|int, Component>
>>>>>>> ca9324a4 (.)
=======
     * @return array<string|int, Component>
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
     * @return array<string|int, Component>
=======
     * @return array<string|int, \Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
     * @return array<string|int, Component>
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
     * @return array<string|int, Component>
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @return array<string|int, Component>
>>>>>>> ca9324a4 (.)
=======
     * @return array<string|int, Component>
>>>>>>> 5a14301c (.)
=======
     * @return array<string|int, Component>
=======
     * @return array<string|int, \Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
     * @return array<string|int, Component>
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
     * @return array<string|int, Component>
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @return array<string|int, Component>
>>>>>>> ca9324a4 (.)
=======
     * @return array<string|int, Component>
>>>>>>> 5a14301c (.)
=======
     * @return array<string|int, Component>
=======
     * @return array<string|int, \Filament\Schemas\Components\Component>
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
     * @return array<string|int, Component>
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
     * @return array<string|int, Component>
>>>>>>> 3fbbf1f5 (.)
     */
    abstract public static function getFormSchema(): array;

    final public static function form(Schema $schema): Schema
    {
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
        /** @var array<Htmlable|string> $components */
        $components = static::getFormSchema();

        return $schema
            ->components($components)
            ->columns(static::getFormSchemaColumns());
    }

    public static function getFormSchemaColumns(): int
    {
        return 1;
    }

    /**
     * Schema dell'infolist: tutte le risorse devono delegare qui.
     *
     * @return array<string, \Filament\Schemas\Components\Component>
     */
    public static function getInfolistSchema(): array
    {
        return [];
    }

    /**
     * Metodo finale: obbliga l'uso di getInfolistSchema().
     */
    final public static function infolist(Schema $schema): Schema
    {
        return $schema->components(static::getInfolistSchema());
=======
        return $schema->components(static::getFormSchema());
>>>>>>> 5a14301c (.)
=======
        return $schema->components(static::getFormSchema());
>>>>>>> 3fbbf1f5 (.)
=======
        return $schema->components(static::getFormSchema());
=======
        return $schema->components(static::getFormSchema());
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
        return $schema->components(static::getFormSchema());
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 21348520 (.)
        return $schema->components(static::getFormSchema());
=======
        return $schema
            ->components(static::getFormSchema());
>>>>>>> a12f125f4a (.)
=======
        return $schema->components(static::getFormSchema());
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string|int,\Filament\Forms\Components\Component>
     */
    abstract public static function getFormSchema(): array;

    final public static function form(Form $form): Form
    {
        return $form
            ->schema(static::getFormSchema());
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return $schema->components(static::getFormSchema());
>>>>>>> ca9324a4 (.)
=======
        return $schema->components(static::getFormSchema());
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        return $schema->components(static::getFormSchema());
=======
        return $schema->components(static::getFormSchema());
>>>>>>> ed734516 (.)
=======
        return $schema->components(static::getFormSchema());
>>>>>>> ed734516 (.)
=======
        return $schema
            ->components(static::getFormSchema());
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $schema->components(static::getFormSchema());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $schema->components(static::getFormSchema());
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return $schema->components(static::getFormSchema());
>>>>>>> ca9324a4 (.)
=======
        return $schema->components(static::getFormSchema());
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
        return $schema->components(static::getFormSchema());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $schema->components(static::getFormSchema());
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return $schema->components(static::getFormSchema());
>>>>>>> ca9324a4 (.)
=======
        return $schema->components(static::getFormSchema());
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
        return $schema->components(static::getFormSchema());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $schema->components(static::getFormSchema());
>>>>>>> 3fbbf1f5 (.)
    }

    /**
     * @return array<string, mixed>
     */
    public static function extendTableCallback(): array
    {
        return [];
    }

    /**
     * Get form extension callbacks.
     *
     * @return array<string, mixed>
     */
    public static function extendFormCallback(): array
    {
        return [];
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getNavigationBadge(): ?string
=======
    public static function getNavigationBadge(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
    public static function getNavigationBadge(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
    public static function getNavigationBadge(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
    public static function getNavigationBadge(): null|string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
    public static function getNavigationBadge(): null|string
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
        return [
        ];
    }

    public static function getNavigationBadge(): ?string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
        return [];
    }

    public static function getNavigationBadge(): null|string
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
    public static function getNavigationBadge(): null|string
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
    public static function getNavigationBadge(): null|string
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
    public static function getNavigationBadge(): null|string
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
    {
        try {
            $count = app(CountAction::class)->execute(static::getModel());

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
            return number_format($count, 0).'';
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
            return number_format($count, 0) . '';
>>>>>>> 5a14301c (.)
=======
            return number_format($count, 0) . '';
>>>>>>> 3fbbf1f5 (.)
=======
            return number_format($count, 0) . '';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
            return number_format($count, 0) . '';
=======
            return number_format($count, 0).'';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            return number_format($count, 0) . '';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            return number_format($count, 0) . '';
>>>>>>> 3fbbf1f5 (.)
=======
            return number_format($count, 0) . '';
>>>>>>> 5a14301c (.)
=======
            return number_format($count, 0) . '';
=======
            return number_format($count, 0).'';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            return number_format($count, 0) . '';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            return number_format($count, 0) . '';
>>>>>>> 3fbbf1f5 (.)
=======
            return number_format($count, 0) . '';
>>>>>>> 5a14301c (.)
=======
            return number_format($count, 0) . '';
=======
            return number_format($count, 0).'';
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            return number_format($count, 0) . '';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            return number_format($count, 0) . '';
>>>>>>> 3fbbf1f5 (.)
        } catch (Exception $e) {
            return '--';
        }
    }

    /**
     * @return array<string, PageRegistration>
     */
    public static function getPages(): array
    {
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
>>>>>>> 73eab74 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
        $prefix = static::class . '\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List' . $plural)->toString();
        $create = Str::of($prefix)->append('Create' . $name . '')->toString();
        $edit = Str::of($prefix)->append('Edit' . $name . '')->toString();
        $view = Str::of($prefix)->append('View' . $name . '')->toString();
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> ed734516 (.)
        $prefix = static::class.'\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List'.$plural)->toString();
        $create = Str::of($prefix)->append('Create'.$name.'')->toString();
        $edit = Str::of($prefix)->append('Edit'.$name.'')->toString();
        $view = Str::of($prefix)->append('View'.$name.'')->toString();
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
        $prefix = static::class . '\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List' . $plural)->toString();
        $create = Str::of($prefix)->append('Create' . $name . '')->toString();
        $edit = Str::of($prefix)->append('Edit' . $name . '')->toString();
        $view = Str::of($prefix)->append('View' . $name . '')->toString();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
     * @return array<string, \Filament\Resources\Pages\PageRegistration>
     */
    public static function getPages(): array
    {
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
        $prefix = static::class.'\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List'.$plural)->toString();
        $create = Str::of($prefix)->append('Create'.$name.'')->toString();
        $edit = Str::of($prefix)->append('Edit'.$name.'')->toString();
        $view = Str::of($prefix)->append('View'.$name.'')->toString();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
        $prefix = static::class . '\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List' . $plural)->toString();
        $create = Str::of($prefix)->append('Create' . $name . '')->toString();
        $edit = Str::of($prefix)->append('Edit' . $name . '')->toString();
        $view = Str::of($prefix)->append('View' . $name . '')->toString();
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)

        /** @var class-string<Page> $index */
        $index = $index;
        /** @var class-string<Page> $create */
        $create = $create;
        /** @var class-string<Page> $edit */
        $edit = $edit;
        /** @var class-string<Page> $view */
        $view = $view;

        /** @var array<string, PageRegistration> $pages */
        $pages = [
            'index' => $index::route('/'),
            'create' => $create::route('/create'),
            'edit' => $edit::route('/{record}/edit'),
            // 'view' => $view::route('/{record}'),
        ];

        if (class_exists($view)) {
            $pages['view'] = $view::route('/{record}');
        }

        return $pages;
    }

    /**
     * @return array<class-string<RelationManager>|RelationGroup|RelationManagerConfiguration>
     */
    public static function getRelations(): array
    {
        $reflector = new ReflectionClass(static::class);
        $filename = $reflector->getFileName();
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
        Assert::string($filename, __FILE__.':'.__LINE__.' - '.class_basename(self::class));

        $path = Str::of($filename)
            ->before('.php')
            ->append(\DIRECTORY_SEPARATOR)
            ->append('RelationManagers')
            ->toString();

        $filesResult = glob($path.\DIRECTORY_SEPARATOR.'*RelationManager.php');

        // PHPStan: glob() with valid pattern returns array
        if ([] === $filesResult) {
            return [];
        }

        /** @var array<class-string<RelationManager>> $res */
        $res = [];
        foreach ($filesResult as $file) {
            if (! \is_string($file)) {
                continue;
            }
            $className = Str::of($file)
                ->after('RelationManagers'.\DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
        Assert::string($filename, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));

        $path = Str::of($filename)
            ->before('.php')
            ->append(DIRECTORY_SEPARATOR)
            ->append('RelationManagers')
            ->toString();

        $files = glob($path . DIRECTORY_SEPARATOR . '*RelationManager.php');
        Assert::isArray($files);

        /** @var array<class-string<RelationManager>> $res */
        $res = [];
        foreach ($files as $file) {
            $className = Str::of($file)
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
=======
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
>>>>>>> 399f46d3 (.)
=======
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
                ->toString();

            if (class_exists($className)) {
                Assert::subclassOf($className, RelationManager::class);
                $res[] = $className;
            }
        }

        return $res;
    }

    public static function getWizardSubmitAction(): Htmlable
    {
        $submit_view = 'pub_theme::filament.wizard.submit-button';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // @phpstan-ignore-next-line
        if (! view()->exists($submit_view)) {
=======
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
>>>>>>> 3fbbf1f5 (.)
=======
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
>>>>>>> 5a14301c (.)
=======
=======
        if (! view()->exists($submit_view)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!view()->exists($submit_view)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
>>>>>>> 5a14301c (.)
=======
=======
        if (! view()->exists($submit_view)) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!view()->exists($submit_view)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
>>>>>>> 5a14301c (.)
=======
=======
        if (! view()->exists($submit_view)) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!view()->exists($submit_view)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
            throw new Exception("View {$submit_view} does not exist");
        }
        $render = view($submit_view)->render();

        return new HtmlString($render);
    }

    /**
     * Get attachments schema for forms.
     *
     * @return array<int, Component>
     */
    public static function getAttachmentsSchema(bool $multiple = true): array
    {
        $model = static::getModel();
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
        if (! method_exists($model, 'getAttachments')) {
            return [];
        }
        $attachments = $model::getAttachments();
        if (! \is_array($attachments)) {
            return [];
        }

        /** @var array<int, string> $safeAttachments */
        $safeAttachments = array_values(array_filter($attachments, 'is_string'));

        $disk = 'attachments';

        /** @var array<int, Component> $schema */
        $schema = app(GetAttachmentsSchemaAction::class)->execute($safeAttachments, $disk);
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
        if (!method_exists($model, 'getAttachments')) {
            return [];
        }
        $attachments = $model::getAttachments();
        $disk = 'attachments';
        $schema = app(GetAttachmentsSchemaAction::class)->execute($attachments, $disk);
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

        return $schema;
    }

    protected static function getStepByName(string $name): Step
    {
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
        $methodName = Str::of($name)
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
    protected static function getStepByName(string $name): Step
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
        $schema = Str::of($name)
>>>>>>> 5a14301c (.)
=======
        $schema = Str::of($name)
>>>>>>> 5a14301c (.)
=======
        $schema = Str::of($name)
>>>>>>> 5a14301c (.)
=======
        $schema = Str::of($name)
>>>>>>> 5a14301c (.)
            ->snake()
            ->studly()
            ->prepend('get')
            ->append('Schema')
            ->toString();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (method_exists(static::class, $methodName)) {
            $schemaResult = static::$methodName();
            /** @var array<Htmlable|string> $schemaComponents */
            $schemaComponents = \is_array($schemaResult) ? array_values($schemaResult) : [];

            return Step::make($name)->schema($schemaComponents);
        }

        return Step::make($name)->schema([]);
=======
        return Step::make($name)->schema(static::$schema());
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        return Step::make($name)->schema(static::$schema());
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
>>>>>>> 5a14301c (.)
=======
        return Step::make($name)->schema(static::$schema());
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD

        return Step::make($name)->schema(static::$schema());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Step::make($name)
            ->schema(static::$schema());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======

        return Step::make($name)->schema(static::$schema());
>>>>>>> b93ef594b4 (.)
=======
    protected static function getStepByName(string $name): Forms\Components\Wizard\Step
    {
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Forms\Components\Wizard\Step::make($name)
            ->schema(static::$schema());
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        return Step::make($name)->schema(static::$schema());
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        return Step::make($name)->schema(static::$schema());
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        return Step::make($name)->schema(static::$schema());
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
    }
}
