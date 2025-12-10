<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

use Filament\Pages\Page;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

class EnvPage extends Page
{
    use NavigationLabelTrait;

<<<<<<< HEAD
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'xot::filament.pages.dashboard';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-home';
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'xot::filament.pages.dashboard';
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'xot::filament.pages.dashboard';
=======
<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'xot::filament.pages.dashboard';
=======
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'xot::filament.pages.dashboard';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
}
