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
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';
>>>>>>> 5a14301c (.)

    protected string $view = 'xot::filament.pages.dashboard';
}
