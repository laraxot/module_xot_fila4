<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Panel;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Panel;
use Illuminate\Support\Facades\Log;
=======
use Illuminate\Support\Facades\Log;
use Filament\Panel;
>>>>>>> 5a14301c (.)
=======
use Illuminate\Support\Facades\Log;
use Filament\Panel;
>>>>>>> 5a14301c (.)
use Modules\Xot\Datas\MetatagData;
use Spatie\QueueableAction\QueueableAction;

class ApplyMetatagToPanelAction
{
    use QueueableAction;

    public function execute(Panel &$panel): Panel
    {
        try {
            $metatag = MetatagData::make();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
            return $panel
                // @phpstan-ignore argument.type
                ->colors($metatag->getColors())
                ->brandLogo($metatag->getBrandLogo())
                ->brandName($metatag->getBrandName())
                ->darkModeBrandLogo($metatag->getDarkModeBrandLogo())
                ->brandLogoHeight($metatag->getBrandLogoHeight())
                ->favicon($metatag->getFavicon());
        } catch (Exception $e) {
            // Log l'errore ma non bloccare l'applicazione
<<<<<<< HEAD
<<<<<<< HEAD
            Log::error('Error applying metatag to panel: '.$e->getMessage());

=======
            Log::error('Error applying metatag to panel: ' . $e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
        } catch (Exception $e) {
            // Log l'errore ma non bloccare l'applicazione
            Log::error('Error applying metatag to panel: ' . $e->getMessage());
=======
        } catch (\Exception $e) {
            // Log l'errore ma non bloccare l'applicazione
            \Illuminate\Support\Facades\Log::error('Error applying metatag to panel: ' . $e->getMessage());
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            Log::error('Error applying metatag to panel: ' . $e->getMessage());
>>>>>>> 5a14301c (.)
            return $panel;
        }
    }
}
