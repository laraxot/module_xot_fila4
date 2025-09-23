<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
use Exception;
use ReflectionClass;
use Filament\Support\Components\Component;
use Filament\Forms;
use Filament\Infolists\Infolist;
use Filament\Pages\Enums\SubNavigationPosition;
use Filament\Resources\Pages\Page;
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\RelationManagers\RelationGroup;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\RelationManagers\RelationManagerConfiguration;
use Filament\Resources\Resource as FilamentResource;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
=======
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
>>>>>>> 54cbe5d (.)
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Modules\Media\Actions\GetAttachmentsSchemaAction;
use Modules\Xot\Actions\ModelClass\CountAction;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD

use function Safe\glob;

use Webmozart\Assert\Assert;

=======
use Webmozart\Assert\Assert;

use function Safe\glob;

>>>>>>> 54cbe5d (.)
/**
 * @method static string getUrl(string $name, array<string, mixed> $parameters = [], bool $isAbsolute = true)
 */
abstract class XotBaseResource extends FilamentResource
{
    use NavigationLabelTrait;

<<<<<<< HEAD
    protected static ?string $model = null;
=======
    protected static null|string $model = null;
>>>>>>> 54cbe5d (.)

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
        if (null !== static::$model) {
=======
        if (static::$model !== null) {
>>>>>>> 54cbe5d (.)
            $res = static::$model;
            Assert::subclassOf(
                $res,
                Model::class,
                sprintf('Class %s must extend Eloquent Model', $res),
            );

            return $res;
        }
        $moduleName = static::getModuleName();
        $modelName = Str::before(class_basename(static::class), 'Resource');
<<<<<<< HEAD
        $res = 'Modules\\'.$moduleName.'\Models\\'.$modelName;
=======
        $res = 'Modules\\' . $moduleName . '\Models\\' . $modelName;
>>>>>>> 54cbe5d (.)
        Assert::classExists($res, sprintf('Model class %s does not exist', $res));
        Assert::subclassOf(
            $res,
            Model::class,
            sprintf('Class %s must extend Eloquent Model', $res),
        );
        static::$model = $res;

        return $res;
    }

    /**
<<<<<<< HEAD
     * @return array<string, Component>
=======
     * @return array<string|int, Component>
>>>>>>> 54cbe5d (.)
     */
    abstract public static function getFormSchema(): array;

    final public static function form(Schema $schema): Schema
    {
<<<<<<< HEAD
        return $schema
            ->components(static::getFormSchema());
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
>>>>>>> 54cbe5d (.)
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
    public static function getNavigationBadge(): ?string
=======
    public static function getNavigationBadge(): null|string
>>>>>>> 54cbe5d (.)
    {
        try {
            $count = app(CountAction::class)->execute(static::getModel());

<<<<<<< HEAD
            return number_format($count, 0).'';
=======
            return number_format($count, 0) . '';
>>>>>>> 54cbe5d (.)
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
        $prefix = static::class.'\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List'.$plural)->toString();
        $create = Str::of($prefix)->append('Create'.$name.'')->toString();
        $edit = Str::of($prefix)->append('Edit'.$name.'')->toString();
        $view = Str::of($prefix)->append('View'.$name.'')->toString();
=======
        $prefix = static::class . '\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List' . $plural)->toString();
        $create = Str::of($prefix)->append('Create' . $name . '')->toString();
        $edit = Str::of($prefix)->append('Edit' . $name . '')->toString();
        $view = Str::of($prefix)->append('View' . $name . '')->toString();
>>>>>>> 54cbe5d (.)

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
        Assert::string($filename, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($filename, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 54cbe5d (.)

        $path = Str::of($filename)
            ->before('.php')
            ->append(DIRECTORY_SEPARATOR)
            ->append('RelationManagers')
            ->toString();

<<<<<<< HEAD
        $files = glob($path.DIRECTORY_SEPARATOR.'*RelationManager.php');
=======
        $files = glob($path . DIRECTORY_SEPARATOR . '*RelationManager.php');
>>>>>>> 54cbe5d (.)
        Assert::isArray($files);

        /** @var array<class-string<RelationManager>> $res */
        $res = [];
        foreach ($files as $file) {
            $className = Str::of($file)
<<<<<<< HEAD
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
=======
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
>>>>>>> 54cbe5d (.)
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
        // @phpstan-ignore-next-line
        if (! view()->exists($submit_view)) {
=======
        //@phpstan-ignore-next-line
        if (!view()->exists($submit_view)) {
>>>>>>> 54cbe5d (.)
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
        if (! method_exists($model, 'getAttachments')) {
=======
        if (!method_exists($model, 'getAttachments')) {
>>>>>>> 54cbe5d (.)
            return [];
        }
        $attachments = $model::getAttachments();
        $disk = 'attachments';
<<<<<<< HEAD
        $form = app(GetAttachmentsSchemaAction::class)->execute($attachments, $disk);

        return $form;
=======
        $schema = app(GetAttachmentsSchemaAction::class)->execute($attachments, $disk);

        return $schema;
>>>>>>> 54cbe5d (.)
    }

    protected static function getStepByName(string $name): Step
    {
<<<<<<< HEAD
        $methodName = Str::of($name)
=======
        $schema = Str::of($name)
>>>>>>> 54cbe5d (.)
            ->snake()
            ->studly()
            ->prepend('get')
            ->append('Schema')
            ->toString();

<<<<<<< HEAD
        if (method_exists(static::class, $methodName)) {
            return Step::make($name)->schema(static::$methodName());
        }

        return Step::make($name)->schema([]);
=======
        return Step::make($name)->schema(static::$schema());
>>>>>>> 54cbe5d (.)
    }
}
