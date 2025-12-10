<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use ReflectionClass;
=======
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
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
use Exception;
=======
>>>>>>> a6ef6dc7 (.)
use Filament\Forms;
use Filament\Infolists\Infolist;
use Exception;
use ReflectionClass;
use Exception;
use Filament\Forms;
use Filament\Infolists\Infolist;
=======
use Exception;
use ReflectionClass;
>>>>>>> 551c768c4 (.)
use Filament\Pages\Enums\SubNavigationPosition;
use Filament\Resources\Pages\Page;
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\RelationManagers\RelationGroup;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\RelationManagers\RelationManagerConfiguration;
use Filament\Resources\Resource as FilamentResource;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
use Filament\Support\Components\Component;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
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
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Filament\Forms;
use Filament\Forms;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource as FilamentResource;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
=======
>>>>>>> 551c768c4 (.)
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Modules\Media\Actions\GetAttachmentsSchemaAction;
use Modules\Xot\Actions\ModelClass\CountAction;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)

use function Safe\glob;

use Webmozart\Assert\Assert;

<<<<<<< HEAD
use ReflectionClass;
<<<<<<< HEAD
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
use ReflectionClass;
=======
>>>>>>> 53d6a6ba (.)
=======
use ReflectionClass;
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
use Webmozart\Assert\Assert;

use function Safe\glob;

=======
>>>>>>> 551c768c4 (.)
/**
 * @method static string getUrl(string $name, array<string, mixed> $parameters = [], bool $isAbsolute = true)
 */
abstract class XotBaseResource extends FilamentResource
{
    use NavigationLabelTrait;

    protected static ?string $model = null;
<<<<<<< HEAD
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static ?string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static ?string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static ?string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static ?string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static ?string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static ?string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static ?string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static ?string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static ?string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static ?string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static ?string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
    protected static ?string $model = null;
    protected static null|string $model = null;
    protected static null|string $model = null;
=======
>>>>>>> 551c768c4 (.)

    // protected static ?string $navigationIcon = 'heroicon-o-bell';
    // protected static ?string $navigationLabel = 'Custom Navigation Label';
    // protected static ?string $activeNavigationIcon = 'heroicon-s-document-text';
    // protected static bool $shouldRegisterNavigation = false;
    // protected static ?string $navigationGroup = 'Parametri di Sistema';
    // protected static ?int $navigationSort = null;

<<<<<<< HEAD
    protected static ?\Filament\Pages\Enums\SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;
    protected static ?\Filament\Pages\Enums\SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;
    protected static ?\Filament\Pages\Enums\SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;
=======
    protected static ?SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;
>>>>>>> 5cf46378 (.)

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
        if (null !== static::$model) {
<<<<<<< HEAD
        if (static::$model !== null) {
        if (static::$model !== null) {
        if (static::$model !== null) {
        if (static::$model !== null) {
        if (null !== static::$model) {
        if (static::$model !== null) {
        if (static::$model !== null) {
        if (static::$model !== null) {
        if (static::$model !== null) {
        if (static::$model !== null) {
        if (static::$model !== null) {
=======
>>>>>>> 551c768c4 (.)
            $res = static::$model;
            Assert::subclassOf(
                $res,
                Model::class,
                \sprintf('Class %s must extend Eloquent Model', $res),
<<<<<<< HEAD
                sprintf('Class %s must extend Eloquent Model', $res),
                sprintf('Class %s must extend Eloquent Model', $res),
                sprintf('Class %s must extend Eloquent Model', $res),
                sprintf('Class %s must extend Eloquent Model', $res),
                sprintf('Class %s must extend Eloquent Model', $res),
                sprintf('Class %s must extend Eloquent Model', $res),
=======
>>>>>>> 551c768c4 (.)
            );
        if (static::$model !== null) {
            $res = static::$model;
            Assert::subclassOf(
                $res,
                Model::class,
                \sprintf('Class %s must extend Eloquent Model', $res),
                sprintf('Class %s must extend Eloquent Model', $res),
                sprintf('Class %s must extend Eloquent Model', $res),
                sprintf('Class %s must extend Eloquent Model', $res),
                sprintf('Class %s must extend Eloquent Model', $res),
                sprintf('Class %s must extend Eloquent Model', $res),
            );
     * @return class-string<\Illuminate\Database\Eloquent\Model>
     */
    public static function getModel(): string
    {
        if (static::$model != null) {
            $res = static::$model;
            Assert::subclassOf($res, \Illuminate\Database\Eloquent\Model::class, sprintf('Class %s must extend Eloquent Model', $res));

            return $res;
        }
        $moduleName = static::getModuleName();
        $modelName = Str::before(class_basename(static::class), 'Resource');
        $res = 'Modules\\'.$moduleName.'\Models\\'.$modelName;
        Assert::classExists($res, \sprintf('Model class %s does not exist', $res));
        Assert::subclassOf(
            $res,
            Model::class,
            \sprintf('Class %s must extend Eloquent Model', $res),
<<<<<<< HEAD
        $res = 'Modules\\' . $moduleName . '\Models\\' . $modelName;
        Assert::classExists($res, sprintf('Model class %s does not exist', $res));
        Assert::subclassOf(
            $res,
            Model::class,
            sprintf('Class %s must extend Eloquent Model', $res),
=======
>>>>>>> 551c768c4 (.)
        );
        $res = 'Modules\\' . $moduleName . '\Models\\' . $modelName;
        Assert::classExists($res, sprintf('Model class %s does not exist', $res));
        Assert::subclassOf(
            $res,
            Model::class,
            sprintf('Class %s must extend Eloquent Model', $res),
        );
        $res = 'Modules\\'.$moduleName.'\Models\\'.$modelName;
        Assert::classExists($res, sprintf('Model class %s does not exist', $res));
        Assert::subclassOf($res, \Illuminate\Database\Eloquent\Model::class, sprintf('Class %s must extend Eloquent Model', $res));
        static::$model = $res;

        return $res;
    }

    /**
<<<<<<< HEAD
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
>>>>>>> 5cf46378 (.)
     * @return array<string, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string, Component>
<<<<<<< HEAD
     * @return array<int, Htmlable|string>
     * @return array<string, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string, Component>
     * @return array<int, Htmlable|string>
     * @return array<string, Component>
     * @return array<string, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string, Component>
     * @return array<int, Htmlable|string>
     * @return array<string, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string, Component>
     * @return array<int, Htmlable|string>
     * @return array<string, Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
     * @return array<string|int, \Filament\Schemas\Components\Component>
     * @return array<string|int, Component>
     * @return array<string|int, Component>
=======
>>>>>>> 53d6a6ba (.)
=======
     * @return array<int, Htmlable|string>
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
     * @return array<string, Component>
>>>>>>> 551c768c4 (.)
     */
    abstract public static function getFormSchema(): array;

    final public static function form(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<Htmlable|string> $components */
        $components = static::getFormSchema();

        $components = static::getFormSchema();

        $components = static::getFormSchema();

        /** @var array<Htmlable|string> $components */
        $components = static::getFormSchema();

        $components = static::getFormSchema();

        $components = static::getFormSchema();

=======
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

=======
>>>>>>> 53d6a6ba (.)
=======
        $components = static::getFormSchema();

>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        return $schema
<<<<<<< HEAD
            ->components(static::getFormSchema())
=======
            ->components($components)
>>>>>>> a6ef6dc7 (.)
=======
        /** @var array<Htmlable|string> $components */
        $components = static::getFormSchema();

        return $schema
            ->components($components)
>>>>>>> 551c768c4 (.)
            ->columns(static::getFormSchemaColumns());
    }

    public static function getFormSchemaColumns(): int
    {
        return 1;
    }

    /**
     * Schema dell'infolist: tutte le risorse devono delegare qui.
     *
     * @return array<string, Component>
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
<<<<<<< HEAD
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema
            ->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema
            ->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
     * @return array<string|int,\Filament\Forms\Components\Component>
     */
    abstract public static function getFormSchema(): array;

    final public static function form(Form $form): Form
    {
        return $form
            ->schema(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema
            ->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema
            ->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
        return $schema->components(static::getFormSchema());
=======
>>>>>>> 551c768c4 (.)
    }

    /**
     * @return array<string, mixed>
     */
    public static function extendTableCallback(): array
    {
        return [];
        return [];
        return [];
        return [];
        return [
        ];
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

    public static function getNavigationBadge(): ?string
<<<<<<< HEAD
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
        return [];
    }

    public static function getNavigationBadge(): ?string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
        return [
        ];
    }

    public static function getNavigationBadge(): ?string
        return [];
    }

    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
    public static function getNavigationBadge(): null|string
=======
>>>>>>> 551c768c4 (.)
    {
        try {
            $count = app(CountAction::class)->execute(static::getModel());

            return number_format($count, 0).'';
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5cf46378 (.)
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0).'';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0).'';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0).'';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
        } catch (Exception $e) {
<<<<<<< HEAD
        } catch (\Exception $e) {
        } catch (Exception $e) {
            return number_format($count, 0) . '';
        } catch (Exception $e) {
            return number_format($count, 0) . '';
        } catch (Exception $e) {
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
        } catch (Exception $e) {
            return number_format($count, 0).'';
        } catch (\Exception $e) {
            return number_format($count, 0) . '';
        } catch (Exception $e) {
        } catch (Exception $e) {
        } catch (\Exception $e) {
        } catch (Exception $e) {
            return number_format($count, 0).'';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0).'';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0).'';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
            return number_format($count, 0).'';
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
        } catch (Exception $e) {
        } catch (\Exception $e) {
        } catch (Exception $e) {
            return number_format($count, 0) . '';
        } catch (Exception $e) {
            return number_format($count, 0) . '';
        } catch (Exception $e) {
            return number_format($count, 0) . '';
        } catch (Exception $e) {
            return number_format($count, 0) . '';
            return number_format($count, 0) . '';
        } catch (Exception $e) {
            return number_format($count, 0).'';
        } catch (\Exception $e) {
            return number_format($count, 0) . '';
        } catch (Exception $e) {
        } catch (Exception $e) {
        } catch (\Exception $e) {
        } catch (Exception $e) {
            return number_format($count, 0) . '';
        } catch (Exception $e) {
        } catch (\Exception $e) {
=======
=======
        } catch (\Exception $e) {
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        } catch (Exception $e) {
>>>>>>> 551c768c4 (.)
            return '--';
        }
    }

    /**
     * @return array<string, PageRegistration>
     */
    public static function getPages(): array
    {
<<<<<<< HEAD
        $prefix = static::class . '\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List' . $plural)->toString();
        $create = Str::of($prefix)->append('Create' . $name . '')->toString();
        $edit = Str::of($prefix)->append('Edit' . $name . '')->toString();
        $view = Str::of($prefix)->append('View' . $name . '')->toString();
=======
>>>>>>> 551c768c4 (.)
        $prefix = static::class.'\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List'.$plural)->toString();
        $create = Str::of($prefix)->append('Create'.$name.'')->toString();
        $edit = Str::of($prefix)->append('Edit'.$name.'')->toString();
        $view = Str::of($prefix)->append('View'.$name.'')->toString();
<<<<<<< HEAD
        $prefix = static::class . '\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List' . $plural)->toString();
        $create = Str::of($prefix)->append('Create' . $name . '')->toString();
        $edit = Str::of($prefix)->append('Edit' . $name . '')->toString();
        $view = Str::of($prefix)->append('View' . $name . '')->toString();
     * @return array<string, \Filament\Resources\Pages\PageRegistration>
     */
    public static function getPages(): array
    {
        $prefix = static::class.'\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List'.$plural)->toString();
        $create = Str::of($prefix)->append('Create'.$name.'')->toString();
        $edit = Str::of($prefix)->append('Edit'.$name.'')->toString();
        $view = Str::of($prefix)->append('View'.$name.'')->toString();
        $prefix = static::class . '\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List' . $plural)->toString();
        $create = Str::of($prefix)->append('Create' . $name . '')->toString();
        $edit = Str::of($prefix)->append('Edit' . $name . '')->toString();
        $view = Str::of($prefix)->append('View' . $name . '')->toString();
=======
>>>>>>> 551c768c4 (.)

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
        $reflector = new \ReflectionClass(static::class);
        $filename = $reflector->getFileName();
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
<<<<<<< HEAD
        Assert::string($filename, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($filename, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($filename, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($filename, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
     * @return array<class-string<\Filament\Resources\RelationManagers\RelationManager>|\Filament\Resources\RelationManagers\RelationGroup|\Filament\Resources\RelationManagers\RelationManagerConfiguration>
     */
    public static function getRelations(): array
    {
        $reflector = new \ReflectionClass(static::class);
        $filename = $reflector->getFileName();
        Assert::string($filename);

        $path = Str::of($filename)
            ->before('.php')
            ->append(DIRECTORY_SEPARATOR)
            ->append('RelationManagers')
            ->toString();

        $files = glob($path . DIRECTORY_SEPARATOR . '*RelationManager.php');
        $files = glob($path . DIRECTORY_SEPARATOR . '*RelationManager.php');
        $files = glob($path . DIRECTORY_SEPARATOR . '*RelationManager.php');
        $files = glob($path . DIRECTORY_SEPARATOR . '*RelationManager.php');
        Assert::isArray($files);

        /** @var array<class-string<RelationManager>> $res */
        $res = [];
        foreach ($files as $file) {
            Assert::string($file, 'File path must be string');
            $className = Str::of($file)
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
=======
>>>>>>> 551c768c4 (.)
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
        // @phpstan-ignore-next-line
        if (! view()->exists($submit_view)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
        if (! view()->exists($submit_view)) {
        if (!view()->exists($submit_view)) {
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
        if (! view()->exists($submit_view)) {
        if (!view()->exists($submit_view)) {
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
        if (! view()->exists($submit_view)) {
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
            throw new \Exception("View {$submit_view} does not exist");
            throw new Exception("View {$submit_view} does not exist");
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        if (!view()->exists($submit_view)) {
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        if (! view()->exists($submit_view)) {
            throw new \Exception("View {$submit_view} does not exist");
            throw new Exception("View {$submit_view} does not exist");
            throw new \Exception("View {$submit_view} does not exist");
            throw new Exception("View {$submit_view} does not exist");
        // @phpstan-ignore-next-line
        if (! view()->exists($submit_view)) {
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
        if (! view()->exists($submit_view)) {
        if (!view()->exists($submit_view)) {
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
        if (! view()->exists($submit_view)) {
        if (!view()->exists($submit_view)) {
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
        if (! view()->exists($submit_view)) {
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
            throw new \Exception("View {$submit_view} does not exist");
            throw new Exception("View {$submit_view} does not exist");
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        if (!view()->exists($submit_view)) {
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
        if (! view()->exists($submit_view)) {
            throw new \Exception("View {$submit_view} does not exist");
            throw new Exception("View {$submit_view} does not exist");
            throw new \Exception("View {$submit_view} does not exist");
            throw new Exception("View {$submit_view} does not exist");
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
=======
            throw new \Exception("View {$submit_view} does not exist");
>>>>>>> b7afadf9 (.)
=======
            throw new Exception("View {$submit_view} does not exist");
>>>>>>> 551c768c4 (.)
        }
        $render = view($submit_view)->render();

        return new HtmlString($render);
    }

    /**
     * Get attachments schema for forms.
     *
     * @return array<int, Component>
     * @return array<int, Component>
     * @return array<int, Component>
     * @return array<int, Component>
     * @return array<int, \Filament\Forms\Components\Component>
     */
    public static function getAttachmentsSchema(bool $multiple = true): array
    {
        $model = static::getModel();
        if (! method_exists($model, 'getAttachments')) {
            return [];
        }
        $attachments = $model::getAttachments();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        if (! \is_array($attachments)) {
            return [];
        }

        /** @var array<int, string> $safeAttachments */
        $safeAttachments = array_values(array_filter($attachments, 'is_string'));

        $disk = 'attachments';

        /** @var array<int, Component> $schema */
        $schema = app(GetAttachmentsSchemaAction::class)->execute($safeAttachments, $disk);
<<<<<<< HEAD
        if (!method_exists($model, 'getAttachments')) {
        if (!method_exists($model, 'getAttachments')) {
        if (!method_exists($model, 'getAttachments')) {
        if (!method_exists($model, 'getAttachments')) {
        if (! method_exists($model, 'getAttachments')) {
            return [];
        }
        $attachments = $model::getAttachments();
        $disk = 'attachments';
        $schema = app(GetAttachmentsSchemaAction::class)->execute($attachments, $disk);

        return $schema;
<<<<<<< HEAD
        Assert::isArray($attachments);
=======
=======
=======
        Assert::isArray($attachments);
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        $disk = 'attachments';
        $form = app(GetAttachmentsSchemaAction::class)->execute($attachments, $disk);
        Assert::isArray($form);
        // Ensure all items are Components as declared in return type
        Assert::allIsInstanceOf($form, Component::class);

<<<<<<< HEAD
        return $form;
<<<<<<< HEAD
        /** @var array<int, \Filament\Schemas\Components\Component> */
        return array_values($form);
        return $form;

        return $schema;
        Assert::isArray($attachments);
        $disk = 'attachments';
        $form = app(GetAttachmentsSchemaAction::class)->execute($attachments, $disk);

        return $form;
        /** @var array<int, \Filament\Schemas\Components\Component> */
        return array_values($form);
        return $form;
=======
>>>>>>> 53d6a6ba (.)
=======
        /** @var array<int, \Filament\Schemas\Components\Component> */
        return array_values($form);
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======

        return $schema;
>>>>>>> 551c768c4 (.)
    }

    protected static function getStepByName(string $name): Step
    {
        $methodName = Str::of($name)
<<<<<<< HEAD
    protected static function getStepByName(string $name): Step
    {
        $schema = Str::of($name)
        $schema = Str::of($name)
        $schema = Str::of($name)
        $schema = Str::of($name)
        $schema = Str::of($name)

        return $schema;
        Assert::isArray($attachments);
        $disk = 'attachments';
        $form = app(GetAttachmentsSchemaAction::class)->execute($attachments, $disk);

        return $form;
        /** @var array<int, \Filament\Schemas\Components\Component> */
        return array_values($form);
        return $form;

        return $schema;
        Assert::isArray($attachments);
        $disk = 'attachments';
        $form = app(GetAttachmentsSchemaAction::class)->execute($attachments, $disk);

        return $form;
        /** @var array<int, \Filament\Schemas\Components\Component> */
        return array_values($form);
        return $form;

        return $schema;
    }

    protected static function getStepByName(string $name): Step
    {
        $methodName = Str::of($name)
    protected static function getStepByName(string $name): Step
    {
        $schema = Str::of($name)
        $schema = Str::of($name)
        $schema = Str::of($name)
        $schema = Str::of($name)
        $schema = Str::of($name)
        $schema = Str::of($name)
=======
>>>>>>> 551c768c4 (.)
            ->snake()
            ->studly()
            ->prepend('get')
            ->append('Schema')
            ->toString();
        Assert::string($methodName);

        if (method_exists(static::class, $methodName)) {
<<<<<<< HEAD
<<<<<<< HEAD

        if (method_exists(static::class, $methodName)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
            $schemaResult = static::$methodName();
            /** @var array<Htmlable|string> $schemaComponents */
            $schemaComponents = \is_array($schemaResult) ? array_values($schemaResult) : [];

            return Step::make($name)->schema($schemaComponents);
        }

        return Step::make($name)->schema([]);
<<<<<<< HEAD
        return Step::make($name)->schema(static::$schema());
        return Step::make($name)->schema(static::$schema());
        return Step::make($name)->schema(static::$schema());

        return Step::make($name)->schema(static::$schema());
        return Step::make($name)->schema(static::$schema());
        return Step::make($name)->schema(static::$schema());
        return Step::make($name)->schema(static::$schema());
        return Step::make($name)->schema(static::$schema());

        return Step::make($name)->schema(static::$schema());
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Step::make($name)
            ->schema(static::$schema());

        return Step::make($name)->schema(static::$schema());

        return Step::make($name)->schema(static::$schema());
    protected static function getStepByName(string $name): Forms\Components\Wizard\Step
    {
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Forms\Components\Wizard\Step::make($name)
            ->schema(static::$schema());
        return Step::make($name)->schema(static::$schema());
        return Step::make($name)->schema(static::$schema());
        return Step::make($name)->schema(static::$schema());
        return Step::make($name)->schema(static::$schema());
        return Step::make($name)->schema(static::$schema());
        return Step::make($name)->schema(static::$schema());
            return Step::make($name)->schema(static::$methodName());
        }

        return Step::make($name)->schema([]);
<<<<<<< HEAD
            /** @var array<int|string, Component> $schema */
            $schema = static::{$methodName}();
            Assert::isArray($schema);
            Assert::allIsInstanceOf($schema, Component::class);

            // @phpstan-ignore-next-line
            return Step::make($name)->schema($schema);
        }

=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 5cf46378 (.)
            /** @var array<int|string, Component> $schema */
            $schema = static::{$methodName}();
            Assert::isArray($schema);
            Assert::allIsInstanceOf($schema, Component::class);

            // @phpstan-ignore-next-line
            return Step::make($name)->schema($schema);
        }

        /** @var array<int, Component> $empty */
        $empty = [];

        return Step::make($name)->schema($empty);
<<<<<<< HEAD
            return Step::make($name)->schema(static::$methodName());
        }

        return Step::make($name)->schema([]);
        return Step::make($name)->schema(static::$schema());
        return Step::make($name)->schema(static::$schema());
            return Step::make($name)->schema(static::$methodName());
        }

        return Step::make($name)->schema([]);
            return Step::make($name)->schema(static::$methodName());
        }

        return Step::make($name)->schema([]);
        return Step::make($name)->schema(static::$schema());
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
    }
}
