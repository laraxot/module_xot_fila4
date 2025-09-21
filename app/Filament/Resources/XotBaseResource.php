<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
use Filament\Schemas\Components\Component;
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\Pages\Page;
use Filament\Resources\RelationManagers\RelationGroup;
use Filament\Resources\RelationManagers\RelationManagerConfiguration;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
use Filament\Pages\Enums\SubNavigationPosition;
use Illuminate\Database\Eloquent\Model;
use Filament\Schemas\Schema;
use Exception;
use ReflectionClass;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Wizard\Step;
<<<<<<< HEAD
use Filament\Forms;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\Pages\Page;
use Filament\Resources\RelationManagers\RelationGroup;
use Filament\Resources\RelationManagers\RelationManagerConfiguration;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
use Filament\Forms;
=======
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Filament\Resources\Resource as FilamentResource;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Modules\Media\Actions\GetAttachmentsSchemaAction;
use Modules\Xot\Actions\ModelClass\CountAction;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;

use function Safe\glob;

/**
 * @method static string getUrl(string $name, array<string, mixed> $parameters = [], bool $isAbsolute = true)
 */
abstract class XotBaseResource extends FilamentResource
{
    use NavigationLabelTrait;

<<<<<<< HEAD
    protected static null|string $model = null;
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

    // protected static ?string $navigationIcon = 'heroicon-o-bell';
    // protected static ?string $navigationLabel = 'Custom Navigation Label';
    // protected static ?string $activeNavigationIcon = 'heroicon-s-document-text';
    // protected static bool $shouldRegisterNavigation = false;
    // protected static ?string $navigationGroup = 'Parametri di Sistema';
    // protected static ?int $navigationSort = null;

<<<<<<< HEAD
    protected static ?\Filament\Pages\Enums\SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;
=======
<<<<<<< HEAD
    protected static ?\Filament\Pages\Enums\SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;
=======
    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    public static function getModuleName(): string
    {
        return Str::between(static::class, 'Modules\\', '\Filament');
    }

    public function hasCombinedRelationManagerTabsWithContent(): bool
    {
        return true;
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     * @return class-string<Model>
     */
    public static function getModel(): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        if (static::$model !== null) {
            $res = static::$model;
            Assert::subclassOf(
                $res,
                Model::class,
                sprintf('Class %s must extend Eloquent Model', $res),
            );
<<<<<<< HEAD
=======
=======
        if (static::$model != null) {
            $res = static::$model;
            Assert::subclassOf($res, Model::class, sprintf('Class %s must extend Eloquent Model', $res));
>>>>>>> a12f125f4a (.)
=======
        if (static::$model !== null) {
            $res = static::$model;
            Assert::subclassOf(
                $res,
                Model::class,
                sprintf('Class %s must extend Eloquent Model', $res),
            );
>>>>>>> b93ef594b4 (.)
=======
     * @return class-string<\Illuminate\Database\Eloquent\Model>
     */
    public static function getModel(): string
    {
        if (static::$model != null) {
            $res = static::$model;
            Assert::subclassOf($res, \Illuminate\Database\Eloquent\Model::class, sprintf('Class %s must extend Eloquent Model', $res));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

            return $res;
        }
        $moduleName = static::getModuleName();
        $modelName = Str::before(class_basename(static::class), 'Resource');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $res = 'Modules\\' . $moduleName . '\Models\\' . $modelName;
        Assert::classExists($res, sprintf('Model class %s does not exist', $res));
        Assert::subclassOf(
            $res,
            Model::class,
            sprintf('Class %s must extend Eloquent Model', $res),
        );
<<<<<<< HEAD
=======
=======
        $res = 'Modules\\'.$moduleName.'\Models\\'.$modelName;
        Assert::classExists($res, sprintf('Model class %s does not exist', $res));
        Assert::subclassOf($res, Model::class, sprintf('Class %s must extend Eloquent Model', $res));
>>>>>>> a12f125f4a (.)
=======
        $res = 'Modules\\' . $moduleName . '\Models\\' . $modelName;
        Assert::classExists($res, sprintf('Model class %s does not exist', $res));
        Assert::subclassOf(
            $res,
            Model::class,
            sprintf('Class %s must extend Eloquent Model', $res),
        );
>>>>>>> b93ef594b4 (.)
=======
        $res = 'Modules\\'.$moduleName.'\Models\\'.$modelName;
        Assert::classExists($res, sprintf('Model class %s does not exist', $res));
        Assert::subclassOf($res, \Illuminate\Database\Eloquent\Model::class, sprintf('Class %s must extend Eloquent Model', $res));
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        static::$model = $res;

        return $res;
    }

    /**
<<<<<<< HEAD
     * @return array<string|int, Component>
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
     */
    abstract public static function getFormSchema(): array;

    final public static function form(Schema $schema): Schema
    {
<<<<<<< HEAD
        return $schema->components(static::getFormSchema());
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
    }

    /**
     * @return array<string, mixed>
     */
    public static function extendTableCallback(): array
    {
<<<<<<< HEAD
        return [];
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return [];
=======
        return [
        ];
>>>>>>> a12f125f4a (.)
=======
        return [];
>>>>>>> b93ef594b4 (.)
=======
        return [
        ];
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }

    /**
     * Get form extension callbacks.
     *
     * @return array<string, mixed>
     */
    public static function extendFormCallback(): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        return [];
    }

    public static function getNavigationBadge(): null|string
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        return [
        ];
    }

    public static function getNavigationBadge(): ?string
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        return [];
    }

    public static function getNavigationBadge(): null|string
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    {
        try {
            $count = app(CountAction::class)->execute(static::getModel());

<<<<<<< HEAD
            return number_format($count, 0) . '';
        } catch (Exception $e) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return number_format($count, 0) . '';
=======
            return number_format($count, 0).'';
>>>>>>> a12f125f4a (.)
=======
            return number_format($count, 0) . '';
>>>>>>> b93ef594b4 (.)
        } catch (Exception $e) {
=======
            return number_format($count, 0).'';
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return '--';
        }
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     * @return array<string, PageRegistration>
     */
    public static function getPages(): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $prefix = static::class . '\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List' . $plural)->toString();
        $create = Str::of($prefix)->append('Create' . $name . '')->toString();
        $edit = Str::of($prefix)->append('Edit' . $name . '')->toString();
        $view = Str::of($prefix)->append('View' . $name . '')->toString();
<<<<<<< HEAD
=======
=======
=======
     * @return array<string, \Filament\Resources\Pages\PageRegistration>
     */
    public static function getPages(): array
    {
>>>>>>> origin/develop
        $prefix = static::class.'\Pages\\';
        $name = Str::of(class_basename(static::class))->before('Resource')->toString();
        $plural = Str::of($name)->plural()->toString();
        $index = Str::of($prefix)->append('List'.$plural)->toString();
        $create = Str::of($prefix)->append('Create'.$name.'')->toString();
        $edit = Str::of($prefix)->append('Edit'.$name.'')->toString();
        $view = Str::of($prefix)->append('View'.$name.'')->toString();
<<<<<<< HEAD
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

        /** @var class-string<Page> $index */
        $index = $index;
        /** @var class-string<Page> $create */
        $create = $create;
        /** @var class-string<Page> $edit */
        $edit = $edit;
        /** @var class-string<Page> $view */
        $view = $view;

        /** @var array<string, PageRegistration> $pages */
<<<<<<< HEAD
=======
=======

        /** @var class-string<\Filament\Resources\Pages\Page> $index */
        $index = $index;
        /** @var class-string<\Filament\Resources\Pages\Page> $create */
        $create = $create;
        /** @var class-string<\Filament\Resources\Pages\Page> $edit */
        $edit = $edit;
        /** @var class-string<\Filament\Resources\Pages\Page> $view */
        $view = $view;

        /** @var array<string, \Filament\Resources\Pages\PageRegistration> $pages */
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
     * @return array<class-string<RelationManager>|RelationGroup|RelationManagerConfiguration>
     */
    public static function getRelations(): array
    {
        $reflector = new ReflectionClass(static::class);
        $filename = $reflector->getFileName();
<<<<<<< HEAD
        Assert::string($filename, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($filename, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($filename);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($filename, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
     * @return array<class-string<\Filament\Resources\RelationManagers\RelationManager>|\Filament\Resources\RelationManagers\RelationGroup|\Filament\Resources\RelationManagers\RelationManagerConfiguration>
     */
    public static function getRelations(): array
    {
        $reflector = new \ReflectionClass(static::class);
        $filename = $reflector->getFileName();
        Assert::string($filename);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        $path = Str::of($filename)
            ->before('.php')
            ->append(DIRECTORY_SEPARATOR)
            ->append('RelationManagers')
            ->toString();

<<<<<<< HEAD
        $files = glob($path . DIRECTORY_SEPARATOR . '*RelationManager.php');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $files = glob($path . DIRECTORY_SEPARATOR . '*RelationManager.php');
=======
        $files = glob($path.DIRECTORY_SEPARATOR.'*RelationManager.php');
>>>>>>> a12f125f4a (.)
=======
        $files = glob($path . DIRECTORY_SEPARATOR . '*RelationManager.php');
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        Assert::isArray($files);

        /** @var array<class-string<RelationManager>> $res */
        $res = [];
        foreach ($files as $file) {
            $className = Str::of($file)
<<<<<<< HEAD
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
=======
<<<<<<< HEAD
<<<<<<< HEAD
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
=======
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
>>>>>>> a12f125f4a (.)
=======
                ->after('RelationManagers' . DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class . '\RelationManagers\\')
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
                ->toString();

            if (class_exists($className)) {
                Assert::subclassOf($className, RelationManager::class);
<<<<<<< HEAD
=======
=======
        $files = glob($path.DIRECTORY_SEPARATOR.'*RelationManager.php');
        Assert::isArray($files);

        /** @var array<class-string<\Filament\Resources\RelationManagers\RelationManager>> $res */
        $res = [];
        foreach ($files as $file) {
            $className = Str::of($file)
                ->after('RelationManagers'.DIRECTORY_SEPARATOR)
                ->before('.php')
                ->prepend(static::class.'\RelationManagers\\')
                ->toString();

            if (class_exists($className)) {
                Assert::subclassOf($className, \Filament\Resources\RelationManagers\RelationManager::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                $res[] = $className;
            }
        }

        return $res;
    }

    public static function getWizardSubmitAction(): Htmlable
    {
        $submit_view = 'pub_theme::filament.wizard.submit-button';
        //@phpstan-ignore-next-line
<<<<<<< HEAD
        if (!view()->exists($submit_view)) {
            throw new Exception("View {$submit_view} does not exist");
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!view()->exists($submit_view)) {
=======
        if (! view()->exists($submit_view)) {
>>>>>>> a12f125f4a (.)
=======
        if (!view()->exists($submit_view)) {
>>>>>>> b93ef594b4 (.)
            throw new Exception("View {$submit_view} does not exist");
=======
        if (! view()->exists($submit_view)) {
            throw new \Exception("View {$submit_view} does not exist");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }
        $render = view($submit_view)->render();

        return new HtmlString($render);
    }

    /**
     * Get attachments schema for forms.
     *
<<<<<<< HEAD
     * @return array<int, Component>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<int, Component>
=======
     * @return array<int, \Filament\Schemas\Components\Component>
>>>>>>> a12f125f4a (.)
=======
     * @return array<int, Component>
>>>>>>> b93ef594b4 (.)
=======
     * @return array<int, \Filament\Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
     */
    public static function getAttachmentsSchema(bool $multiple = true): array
    {
        $model = static::getModel();
<<<<<<< HEAD
        if (!method_exists($model, 'getAttachments')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!method_exists($model, 'getAttachments')) {
=======
        if (! method_exists($model, 'getAttachments')) {
>>>>>>> a12f125f4a (.)
=======
        if (!method_exists($model, 'getAttachments')) {
>>>>>>> b93ef594b4 (.)
=======
        if (! method_exists($model, 'getAttachments')) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            return [];
        }
        $attachments = $model::getAttachments();
        $disk = 'attachments';
        $schema = app(GetAttachmentsSchemaAction::class)->execute($attachments, $disk);

        return $schema;
    }

<<<<<<< HEAD
    protected static function getStepByName(string $name): Step
    {
=======
<<<<<<< HEAD
    protected static function getStepByName(string $name): Step
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $schema = Str::of($name)
            ->snake()
            ->studly()
            ->prepend('get')
            ->append('Schema')
            ->toString();
<<<<<<< HEAD

        return Step::make($name)->schema(static::$schema());
=======
<<<<<<< HEAD

        return Step::make($name)->schema(static::$schema());
=======
        $schema = Str::of($name)->snake()->studly()->prepend('get')->append('Schema')->toString();

        return Step::make($name)
            ->schema(static::$schema());
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
    }
}
