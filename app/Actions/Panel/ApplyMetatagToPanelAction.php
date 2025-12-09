<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Panel;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
            
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            
>>>>>>> f1d4085 (.)
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
=======
            
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
            
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            
>>>>>>> f1d4085 (.)
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
=======
            
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
            Log::error('Error applying metatag to panel: '.$e->getMessage());

=======
            Log::error('Error applying metatag to panel: ' . $e->getMessage());
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            Log::error('Error applying metatag to panel: ' . $e->getMessage());
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
            Log::error('Error applying metatag to panel: ' . $e->getMessage());
>>>>>>> 5a14301c (.)
=======
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
