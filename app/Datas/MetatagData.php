<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Filament\Support\Colors\Color;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
use Throwable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
use Throwable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Filament\Support\Colors\Color;
use Illuminate\Support\Arr;
<<<<<<< HEAD
use Filament\Support\Colors\Color;
use Illuminate\Support\Arr;
use Filament\Support\Colors\Color;
use Illuminate\Support\Arr;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
use Filament\Support\Colors\Color;
use Illuminate\Support\Arr;
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
use Livewire\Wireable;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Actions\File\AssetAction;
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Datas\Transformers\AssetTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Throwable;
use Webmozart\Assert\Assert;
use Throwable;
use Webmozart\Assert\Assert;

use Illuminate\Support\Arr;
use Livewire\Wireable;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Actions\File\AssetAction;
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Datas\Transformers\AssetTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
use Filament\Support\Colors\Color;
use Modules\Xot\Actions\File\AssetAction;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Actions\File\AssetPathAction;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Attributes\WithTransformer;
use Modules\Xot\Datas\Transformers\AssetTransformer;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Livewire\Wireable;
use Illuminate\Support\Arr;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Filament\Support\Colors\Color;
use Modules\Xot\Actions\File\AssetAction;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Actions\File\AssetPathAction;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Attributes\WithTransformer;
use Modules\Xot\Datas\Transformers\AssetTransformer;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
use function Safe\file_get_contents;

/**
 * Class MetatagData
 *
 * @property string $title
 * @property string $sitename
 * @property string $subtitle
 * @property string|null $generator
 * @property string $charset
 * @property string|null $author
 * @property string|null $description
 * @property string|null $keywords
 * @property string $nome_regione
 * @property string $nome_comune
 * @property string $site_title
 * @property string $logo
 * @property string $logo_square
 * @property string $logo_header
 * @property string $logo_header_dark
 * @property string $logo_height
 * @property string $logo_footer
 * @property string $logo_alt
 * @property string $hide_megamenu
 * @property string $hero_type
 * @property string $facebook_href
 * @property string $twitter_href
 * @property string $youtube_href
 * @property string $fastlink
 * @property string $color_primary
 * @property string $color_title
 * @property string $color_megamenu
 * @property string $color_hamburger
 * @property string $color_banner
 * @property string $favicon
 * @property array<string, array{key?: string, color: string, hex?: string}> $colors
<<<<<<< HEAD
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * 
=======
=======
 * 
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> f1d4085 (.)
=======
 *
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
 * @method string getBrandLogoBase64() Get the brand logo as base64 data URI for inline embedding
 */
class MetatagData extends Data implements Wireable
{
    use WireableData;

    public string $title = '';

    public string $sitename = '';

    public string $subtitle = '';

<<<<<<< HEAD
    public ?string $generator = 'xot';
=======
    /** @var string|null */
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $generator = 'xot';
=======
    public ?string $generator = 'xot';
>>>>>>> f1d4085 (.)
=======
    public null|string $generator = 'xot';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

    public string $charset = 'UTF-8';

<<<<<<< HEAD
=======
    /** @var string|null */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public null|string $author = 'xot';

    /** @var string|null */
    public null|string $description = null;

    /** @var string|null */
    public null|string $keywords = null;
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public ?string $author = 'xot';

    public ?string $description = null;

    public ?string $keywords = null;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

    public string $nome_regione = '';

    public string $nome_comune = '';

    public string $site_title = '';

    public string $logo = '';

    public string $logo_square = '';

    #[WithTransformer(AssetTransformer::class)]
    public string $logo_header = '';

    public string $logo_header_dark = '';

    public string $logo_height = '2em';

    public string $logo_footer = '';

    public string $logo_alt = '';

    public string $hide_megamenu = '';

    public string $hero_type = '';

    public string $facebook_href = '';

    public string $twitter_href = '';

    public string $youtube_href = '';

    public string $fastlink = '';

    public string $color_primary = '';

    public string $color_title = '';

    public string $color_megamenu = '';

    public string $color_hamburger = '';

    public string $color_banner = '';

    /** @var string */
    public string $title = '';

    /** @var string */
    public string $sitename = '';

    /** @var string */
    public string $subtitle = '';

    /** @var string|null */
    public null|string $generator = 'xot';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $generator = 'xot';
=======
=======
    public ?string $generator = 'xot';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public null|string $generator = 'xot';
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $generator = 'xot';
=======
    public ?string $generator = 'xot';
>>>>>>> a12f125f4a (.)
=======
    public null|string $generator = 'xot';
>>>>>>> b93ef594b4 (.)
=======
    public ?string $generator = 'xot';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

    /** @var string */
    public string $charset = 'UTF-8';

    /** @var string|null */
    public null|string $author = 'xot';

    /** @var string|null */
    public null|string $description = null;

    /** @var string|null */
    public null|string $keywords = null;

    /** @var string|null */
    public null|string $description = null;

    /** @var string|null */
    public null|string $keywords = null;
    public ?string $author = 'xot';

    /** @var string|null */
    public ?string $description = null;

    /** @var string|null */
    public ?string $keywords = null;

    /** @var string */
    public string $nome_regione = '';

    /** @var string */
    public string $nome_comune = '';

    /** @var string */
    public string $site_title = '';

    /** @var string */
    public string $logo = '';

    /** @var string */
    public string $logo_square = '';

    /** @var string */
    #[WithTransformer(AssetTransformer::class)]
    public string $logo_header = '';

    /** @var string */
    public string $logo_header_dark = '';

    /** @var string */
    public string $logo_height = '2em';

    /** @var string */
    public string $logo_footer = '';

    /** @var string */
    public string $logo_alt = '';

    /** @var string */
    public string $hide_megamenu = '';

    /** @var string */
    public string $hero_type = '';

    /** @var string */
    public string $facebook_href = '';

    /** @var string */
    public string $twitter_href = '';

    /** @var string */
    public string $youtube_href = '';

    /** @var string */
    public string $fastlink = '';

    /** @var string */
    public string $color_primary = '';

    /** @var string */
    public string $color_title = '';

    /** @var string */
    public string $color_megamenu = '';

    /** @var string */
    public string $color_hamburger = '';

    /** @var string */
    public string $color_banner = '';

    /** @var string */
    public string $favicon = '/favicon.ico';

    /**
     * @var array<string, array{key?: string, color: string, hex?: string}>
     */
    public array $colors = [];

    /**
     * Singleton instance.
     */
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
    private static ?self $instance = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> f1d4085 (.)
=======
    private static null|self $instance = null;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

    /**
     * Creates or returns the singleton instance.
     */
    public static function make(): self
    {
<<<<<<< HEAD
        if (! self::$instance) {
<<<<<<< HEAD
    private static null|self $instance = null;
    private static null|self $instance = null;
    private static ?self $instance = null;
=======
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
>>>>>>> 7131bd09 (.)
=======
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
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
    private static null|self $instance = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private static null|self $instance = null;
=======
    private static ?self $instance = null;
>>>>>>> a12f125f4a (.)
=======
    private static null|self $instance = null;
>>>>>>> b93ef594b4 (.)
=======
    private static ?self $instance = null;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

    /**
     * Creates or returns the singleton instance.
     *
     * @return self
     */
    public static function make(): self
    {
        if (!self::$instance) {
            /** @var array<string, mixed> $data */
            $data = TenantService::getConfig('metatag');
            $data['description'] = TenantService::trans('metatag.description');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
        if (! self::$instance) {
            /** @var array<string, mixed> $data */
            $data = TenantService::getConfig('metatag');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 7468a7d2 (.)
        if (!self::$instance) {
            /** @var array<string, mixed> $data */
            $data = TenantService::getConfig('metatag');
            $data['description'] = TenantService::trans('metatag.description');
<<<<<<< HEAD
<<<<<<< HEAD
        if (! self::$instance) {
            /** @var array<string, mixed> $data */
            $data = TenantService::getConfig('metatag');
=======
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 7468a7d2 (.)
=======
        if (! self::$instance) {
            /** @var array<string, mixed> $data */
            $data = TenantService::getConfig('metatag');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
            self::$instance = self::from($data);
        }

        return self::$instance;
    }

    /**
     * Get the brand name.
     * This method reflects the semantic purpose of getting the brand name,
     * which is the title of the page.
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     */
    public function getBrandName(): string
    {
        return $this->title;
    }

    /**
     * Get the brand logo.
     * This method reflects the semantic purpose of getting the brand logo,
     * rather than exposing implementation details about where the logo is used.
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     */
    public function getBrandLogo(): string
    {
        try {
            /** @var string $path */
            $path = app(AssetAction::class)->execute($this->logo_header);
            return asset($path);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        } catch (Throwable $e) {
=======
<<<<<<< HEAD
        } catch (Throwable $e) {
=======
        } catch (\Throwable $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
        } catch (Throwable $e) {
>>>>>>> 091f883c (.)
            return asset($this->logo_header);
        }
    }

<<<<<<< HEAD
    public function getBrandLogoPath(): string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getBrandLogoPath():string
=======
=======
    public function getBrandLogoPath():string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    public function getBrandLogoPath(): string
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getBrandLogoPath(): string
=======
    public function getBrandLogoPath():string
>>>>>>> a12f125f4a (.)
=======
    public function getBrandLogoPath(): string
>>>>>>> b93ef594b4 (.)
=======
    public function getBrandLogoPath():string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function getBrandLogoPath(): string
=======
    public function getBrandLogoPath():string
>>>>>>> f1d4085 (.)
=======
    public function getBrandLogoPath(): string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
    {
        return app(AssetPathAction::class)->execute($this->logo_header);
    }

    /**
     * Get the dark mode brand logo.
     * This method reflects the semantic purpose of getting the dark mode brand logo.
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     */
    public function getDarkModeBrandLogo(): string
    {
        try {
            /** @var string $path */
            $path = app(AssetAction::class)->execute($this->logo_header_dark);
            return asset($path);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        } catch (Throwable $e) {
=======
<<<<<<< HEAD
        } catch (Throwable $e) {
=======
        } catch (\Throwable $e) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
        } catch (Throwable $e) {
>>>>>>> 091f883c (.)
            return asset($this->logo_header_dark);
        }
    }

    /**
     * Get the brand logo height.
     * This method reflects the semantic purpose of getting the brand logo height.
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     */
    public function getBrandLogoHeight(): string
    {
        return $this->logo_height;
    }

    /**
     * Get the brand logo as base64 data URI for inline embedding.
     * This method reflects the semantic purpose of getting the brand logo
     * as a base64 data URI that can be embedded directly in HTML img tags.
     *
     * @return string The base64 data URI (e.g., "data:image/png;base64,iVBORw0KGgoAAAA...")
     */
    public function getBrandLogoBase64(): string
    {
        try {
            // Get the asset path using AssetAction (same as getBrandLogo)
            /** @var string $assetPath */
            $assetPath = app(AssetAction::class)->execute($this->logo_header);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

            // Get the physical file path
            $physicalPath = public_path($assetPath);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
            
            // Get the physical file path
            $physicalPath = public_path($assetPath);
            
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)

            // Get the physical file path
            $physicalPath = public_path($assetPath);

<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
            // Check if file exists
            if (!File::exists($physicalPath)) {
            if (!File::exists($physicalPath)) {
            if (!File::exists($physicalPath)) {
            if (!File::exists($physicalPath)) {
            if (!File::exists($physicalPath)) {
                return '';
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

            // Read file content
            $fileContent = File::get($physicalPath);

            // Get MIME type
            $mimeType = $this->getMimeTypeFromPath($physicalPath);

            // Convert to base64
            $base64Content = base64_encode($fileContent);

            // Return as data URI
            return "data:{$mimeType};base64,{$base64Content}";
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
            
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
            // Read file content
            $fileContent = File::get($physicalPath);

            // Get MIME type
            $mimeType = $this->getMimeTypeFromPath($physicalPath);

            // Convert to base64
            $base64Content = base64_encode($fileContent);

            // Return as data URI
            return "data:{$mimeType};base64,{$base64Content}";
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
            
            // Read file content
            $fileContent = File::get($physicalPath);
            
            // Get MIME type
            $mimeType = $this->getMimeTypeFromPath($physicalPath);
            
            // Convert to base64
            $base64Content = base64_encode($fileContent);
            
            // Return as data URI
            return "data:{$mimeType};base64,{$base64Content}";
            
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        } catch (Throwable $e) {
            // Fallback: try with the raw logo_header path
            try {
                $fallbackPath = public_path($this->logo_header);
                if (File::exists($fallbackPath)) {
                    $fileContent = File::get($fallbackPath);
                    $mimeType = $this->getMimeTypeFromPath($fallbackPath);
                    $base64Content = base64_encode($fileContent);
                    return "data:{$mimeType};base64,{$base64Content}";
                }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
            } catch (Throwable $fallbackException) {
                // Log the error but don't break the application
                Log::warning('Could not generate base64 logo', [
=======
<<<<<<< HEAD
            } catch (Throwable $fallbackException) {
                // Log the error but don't break the application
                Log::warning('Could not generate base64 logo', [
=======
            } catch (\Throwable $fallbackException) {
                // Log the error but don't break the application
                \Illuminate\Support\Facades\Log::warning('Could not generate base64 logo', [
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
            } catch (Throwable $fallbackException) {
                // Log the error but don't break the application
                Log::warning('Could not generate base64 logo', [
>>>>>>> 091f883c (.)
                    'original_error' => $e->getMessage(),
                    'fallback_error' => $fallbackException->getMessage(),
                    'logo_header' => $this->logo_header,
                ]);
            }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            
=======
=======
            
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
            return '';
        }
    }

    /**
     * Get MIME type from file path extension.
     * Helper method for getBrandLogoBase64().
     *
     * @param string $filePath
     * @return string
     */
    private function getMimeTypeFromPath(string $filePath): string
    {
        $extension = \strtolower(\pathinfo($filePath, PATHINFO_EXTENSION));
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        return match ($extension) {
            'png' => 'image/png',
            'jpg', 'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
            'webp' => 'image/webp',
            'bmp' => 'image/bmp',
            'ico' => 'image/x-icon',
            default => 'image/png', // Fallback default
        };
    }

    /**
     * Get the theme colors.
     * This method reflects the semantic purpose of getting theme colors,
     * rather than exposing the raw color data structure.
     *
     * @return array<string, string>
     */
    public function getThemeColors(): array
    {
        $filamentColors = $this->getFilamentColors();
        $defaults = [];
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        // Convert Filament color arrays to simple string format
        foreach ($filamentColors as $key => $colorArray) {
            if (is_array($colorArray) && !empty($colorArray)) {
            if (is_array($colorArray) && !empty($colorArray)) {
            if (is_array($colorArray) && !empty($colorArray)) {
            if (is_array($colorArray) && ! empty($colorArray)) {
            if (is_array($colorArray) && !empty($colorArray)) {
            if (is_array($colorArray) && ! empty($colorArray)) {
            if (is_array($colorArray) && !empty($colorArray)) {
                // Use the first color in the array as the default
                $defaults[$key] = (string) $colorArray[0];
            }
        }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        $custom = [];
        foreach ($this->colors as $key => $value) {
            if (Arr::has($value, 'color')) {
                $custom[$key] = (string) $value['color'];
            }
        }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        return array_merge($defaults, $custom);
    }

    /**
     * Get the theme settings.
     * This method reflects the semantic purpose of getting theme settings.
     *
     * @return array<string, string>
     */
    public function getThemeSettings(): array
    {
        return [
            'color_primary' => $this->color_primary,
            'color_title' => $this->color_title,
            'color_megamenu' => $this->color_megamenu,
            'color_hamburger' => $this->color_hamburger,
            'color_banner' => $this->color_banner,
        ];
    }

    /**
     * Get the brand description.
     * This method reflects the semantic purpose of getting the brand description.
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
<<<<<<< HEAD
    public function getBrandDescription(): ?string
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
     *
     * @return string|null
     */
    public function getBrandDescription(): null|string
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
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    public function getBrandDescription(): null|string
=======
>>>>>>> 2f3197ab (.)
    public function getBrandDescription(): ?string
    public function getBrandDescription(): ?string
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7468a7d2 (.)
    public function getBrandDescription(): null|string
    public function getBrandDescription(): ?string
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
    public function getBrandDescription(): ?string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public function getBrandDescription(): null|string
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
    public function getBrandDescription(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public function getBrandDescription(): null|string
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
    public function getBrandDescription(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public function getBrandDescription(): null|string
    public function getBrandDescription(): ?string
    public function getBrandDescription(): null|string
<<<<<<< HEAD
    public function getBrandDescription(): ?string
    public function getBrandDescription(): null|string
    public function getBrandDescription(): ?string
    public function getBrandDescription(): null|string
    public function getBrandDescription(): null|string
    public function getBrandDescription(): null|string
    public function getBrandDescription(): null|string
    public function getBrandDescription(): ?string
    public function getBrandDescription(): null|string
    public function getBrandDescription(): ?string
    public function getBrandDescription(): null|string
    public function getBrandDescription(): null|string
    public function getBrandDescription(): ?string
    public function getBrandDescription(): null|string
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
    public function getBrandDescription(): ?string
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public function getBrandDescription(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
    public function getBrandDescription(): null|string
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
    {
        return $this->description;
    }

    /**
     * Get the brand social links.
     * This method reflects the semantic purpose of getting social media links.
     *
     * @return array<string, string>
     */
    public function getBrandSocialLinks(): array
    {
        return [
            'facebook' => $this->facebook_href,
            'twitter' => $this->twitter_href,
            'youtube' => $this->youtube_href,
        ];
    }

    /**
     * Get the brand dimensions.
     * This method reflects the semantic purpose of getting brand-related dimensions.
     *
     * @return array<string, string>
     */
    public function getBrandDimensions(): array
    {
        return [
            'logo_height' => $this->logo_height,
        ];
    }

    /**
     * Get the brand settings.
     * This method reflects the semantic purpose of getting brand-related settings.
     *
     * @return array<string, string>
     */
    public function getBrandSettings(): array
    {
        return [
            'fastlink' => $this->fastlink,
            'hide_megamenu' => $this->hide_megamenu,
            'hero_type' => $this->hero_type,
        ];
    }

    /**
     * Get the favicon URL.
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     *
     * @return string
     */
    public function getFavicon(): string
    {
        try {
            /** @var string $path */
            $path = app(AssetAction::class)->execute($this->favicon);
            return $path;
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
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
            /** @var string $path */
            $path = app(AssetAction::class)->execute($this->favicon);
            return $path;
            /** @var string $path */
            $path = app(AssetAction::class)->execute($this->favicon);
            return $path;
<<<<<<< HEAD
            /** @var string $path */
            $path = app(AssetAction::class)->execute($this->favicon);
            return $path;
            /** @var string $path */
            $path = app(AssetAction::class)->execute($this->favicon);
            return $path;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
        } catch (Throwable $e) {
=======
=======
>>>>>>> 9db27d12 (.)
=======
            /** @var string $path */
            $path = app(AssetAction::class)->execute($this->favicon);
            return $path;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> 091f883c (.)
=======
>>>>>>> 9db27d12 (.)
        } catch (Throwable $e) {
            return asset($this->favicon);
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function getFaviconBySize(string $size, string $format): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
    public function getFaviconBySize(string $size, string $format): string
    {
=======
<<<<<<< HEAD
    public function getFaviconBySize(string $size, string $format): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
    public function getFaviconBySize(string $size, string $format): string
    {
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        $xot = XotData::make();
        //return app(AssetAction::class)->execute($this->favicon, $size, $format);
        $file = 'favicon-' . $size . '.' . $format;

<<<<<<< HEAD
        $res = $xot->getPubThemePublicAsset($file);
        $res = $xot->getPubThemePublicAsset($file);

        $xot=XotData::make();
        //return app(AssetAction::class)->execute($this->favicon, $size, $format);
        $file='favicon-'.$size.'.'.$format;

        $res= $xot->getPubThemePublicAsset($file);
        return $res;
        return $res;
        return $res;
    }

        $xot=XotData::make();
        $xot = XotData::make();
=======
<<<<<<< HEAD
        return $xot->getPubThemePublicAsset($file);
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
        //return app(AssetAction::class)->execute($this->favicon, $size, $format);
        $file = 'favicon-' . $size . '.' . $format;

        $res = $xot->getPubThemePublicAsset($file);
=======
        $res = $xot->getPubThemePublicAsset($file);
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
        $xot=XotData::make();
        //return app(AssetAction::class)->execute($this->favicon, $size, $format);
        $file='favicon-'.$size.'.'.$format;

        $res= $xot->getPubThemePublicAsset($file);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
        return $res;
    }

    /**
     * @deprecated Use getThemeColors() instead as it better reflects the semantic purpose
     */
    public function getColors(): array
    {
<<<<<<< HEAD
        return $this->colors;

<<<<<<< HEAD
        return $this->colors;

        return $this->colors;


        return ($this->colors);

        return ($this->colors);
        return $this->colors;

        //return $this->getThemeColors();
        //return $this->getThemeColors();
        //return $this->getThemeColors();
        //return $this->getThemeColors();
        //return $this->getThemeColors();
        // return $this->getThemeColors();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // return $this->getThemeColors();
=======
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->colors;

=======

        return ($this->colors);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        return $this->colors;

>>>>>>> b93ef594b4 (.)
=======

        return ($this->colors);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
=======

        return ($this->colors);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
        return $this->colors;

>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        //return $this->getThemeColors();
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        //return $this->getThemeColors();
        //return $this->getThemeColors();
        //return $this->getThemeColors();
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
        //return $this->getThemeColors();
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
    }

    /**
     * Get the default Filament colors configuration.
     *
     * @return array<string, array<int, string>>
     */
    public function getFilamentColors(): array
    {
        return [
            'danger' => Color::Red,
            'gray' => Color::Zinc,
            'info' => Color::Blue,
            'primary' => Color::Amber,
            'success' => Color::Green,
            'warning' => Color::Amber,
        ];
    }

    /**
     * Get all colors with proper type handling.
     * Converts custom colors to Filament color format for compatibility.
     *
     * @return array<string, array<int, string>>
     */
    public function getAllColors(): array
    {
        $filamentColors = $this->getFilamentColors();
        $customColors = [];
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        // Convert custom color format to Filament color format
        foreach ($this->colors as $key => $value) {
            if (is_array($value) && Arr::has($value, 'color')) {
                // Convert single color value to array format for Filament compatibility
                $colorValue = (string) $value['color'];
                $customColors[$key] = [$colorValue];
            }
        }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
=======
        
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        return array_merge($filamentColors, $customColors);
    }

    /**
     * Get the icons array.
     *
     * @return array<string, string>
     */
    public function getIcons(): array
    {
        return [
            'logo' => $this->logo,
            'logo_square' => $this->logo_square,
            'logo_header' => $this->logo_header,
            'logo_header_dark' => $this->logo_header_dark,
            'logo_footer' => $this->logo_footer,
            'favicon' => $this->favicon,
        ];
    }

    /**
     * Get the alignment array.
     *
     * @return array<string, string>
     */
    public function getAlignment(): array
    {
        return [
            'hide_megamenu' => $this->hide_megamenu,
            'hero_type' => $this->hero_type,
        ];
    }

    /**
     * Get the settings array.
     *
     * @return array<string, string>
     */
    public function getSettings(): array
    {
        return $this->getBrandSettings();
    }

    /**
     * Get the meta values array.
     *
     * @return array<string, string|null>
     */
    public function getMetaValues(): array
    {
        return [
            'title' => $this->title,
            'sitename' => $this->sitename,
            'subtitle' => $this->subtitle,
            'generator' => $this->generator,
            'charset' => $this->charset,
            'author' => $this->author,
            'description' => $this->description,
            'keywords' => $this->keywords,
            'nome_regione' => $this->nome_regione,
            'nome_comune' => $this->nome_comune,
            'site_title' => $this->site_title,
        ];
    }

    /**
     * Get the social cards array.
     *
     * @return array<string, string>
     */
    public function getSocialCards(): array
    {
        return $this->getBrandSocialLinks();
    }

    /**
     * Get the OpenGraph array.
     *
     * @return array<string, string|null>
     */
    public function getOpenGraph(): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'type' => 'website',
            'url' => url()->current(),
            'site_name' => $this->sitename,
        ];
    }

    /**
     * Get the Twitter Cards array.
     *
     * @return array<string, string|null>
     */
    public function getTwitterCards(): array
    {
        return [
            'card' => 'summary_large_image',
            'title' => $this->title,
            'description' => $this->description,
            'site' => $this->twitter_href,
        ];
    }

    /**
     * @deprecated Use getBrandName() instead as it better reflects the semantic purpose
     */
    public function getTitle(): string
    {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        // return $this->getBrandName();
        return $this->title;
    }

<<<<<<< HEAD
=======
>>>>>>> 218dfed3 (.)
        // return $this->getBrandName();
        return $this->title;
    }

=======
=======
<<<<<<< HEAD
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 7131bd09 (.)
=======
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        //return $this->getBrandName();
        return $this->title;
    }


<<<<<<< HEAD
        return $this->getBrandName();
    }

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
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
        return $this->getBrandName();
    }

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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
        //return $this->getBrandName();
        return $this->title;
    }


        return $this->getBrandName();
    }

<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
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
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
    /**
     * @deprecated Use getBrandLogo() instead as it better reflects the semantic purpose
     */
    public function getLogoHeader(): string
    {
        return $this->getBrandLogo();
    }

    /**
     * @deprecated Use getDarkModeBrandLogo() instead as it better reflects the semantic purpose
     */
    public function getLogoHeaderDark(): string
    {
        return $this->getDarkModeBrandLogo();
    }

    /**
     * @deprecated Use getBrandLogoHeight() instead as it better reflects the semantic purpose
     */
    public function getLogoHeight(): string
    {
        return $this->getBrandLogoHeight();
    }

    public function getBrandLogoSvg(): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        $xot = XotData::make();
        $path = base_path('Modules/' . $xot->main_module . '/resources/svg/logo.svg');
        $path = base_path('Modules/' . $xot->main_module . '/resources/svg/logo.svg');
        $path = base_path('Modules/' . $xot->main_module . '/resources/svg/logo.svg');
        $path = base_path('Modules/' . $xot->main_module . '/resources/svg/logo.svg');
        $path = base_path('Modules/' . $xot->main_module . '/resources/svg/logo.svg');
        return file_get_contents($path);
    }

    public function getDescription(int $limit = 160): string
    {
        return $this->description ?? '';
    }


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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======

>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 2f3197ab (.)
        $xot=XotData::make();
        $path=base_path('Modules/'.$xot->main_module.'/resources/svg/logo.svg');
        $xot = XotData::make();
        $path = base_path('Modules/' . $xot->main_module . '/resources/svg/logo.svg');
        return file_get_contents($path);
    }

    public function getDescription(int $limit = 160): string
    {
        return $this->description ?? '';
    }


<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)

<<<<<<< HEAD


=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======

<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 7468a7d2 (.)
        $xot=XotData::make();
        $path=base_path('Modules/'.$xot->main_module.'/resources/svg/logo.svg');
        return file_get_contents($path);

    }

    public function getDescription(int $limit=160): string
    {
        return TenantService::trans('metatag.description');
    }

<<<<<<< HEAD




=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 7131bd09 (.)
=======
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
    public function getKeywords(): string
    {
        return TenantService::trans('metatag.keywords');
    }

    public function getAuthor(): string
    {
        return TenantService::trans('metatag.author');
    }

    public function getSitename(): string
    {
        return TenantService::trans('metatag.sitename');
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    public function getRobots(): string
    {
        return 'index, follow';
    }

    public function getType(): string
    {
        return 'website';
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======


>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    public function getCanonical(): string
    {
        return url()->current();
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
    
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    public function getImage(): string
    {
        return asset('images/logo.png');
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
    public function getLocale(): string
    {
        return app()->getLocale();
    }

    public function getCurrentUrl(): string
    {
        return url()->current();
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

    public function getSiteWebmanifest(): string
    {
        $xot = XotData::make();

        $file = 'site.webmanifest';

        $res = $xot->getPubThemePublicAsset($file);

    
    public function getSiteWebmanifest(): string
    {
        $xot=XotData::make();
        
        $file='site.webmanifest';

        $res= $xot->getPubThemePublicAsset($file);




        return $res;
        $res = $xot->getPubThemePublicAsset($file);
    public function getSiteWebmanifest(): string
    {
        $xot = XotData::make();

        $file = 'site.webmanifest';

        $res = $xot->getPubThemePublicAsset($file);
        return $res;
        $res = $xot->getPubThemePublicAsset($file);
        return $res;
        $res = $xot->getPubThemePublicAsset($file);
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
    
    public function getSiteWebmanifest(): string
    {
        $xot=XotData::make();
        
        $file='site.webmanifest';

        $res= $xot->getPubThemePublicAsset($file);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
        return $res;
        $res = $xot->getPubThemePublicAsset($file);
        return $res;
        $res = $xot->getPubThemePublicAsset($file);
        return $res;
    }

    public function getPubThemeAsset(string $file): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $res = $xot->getPubThemePublicAsset($file);
        $xot=XotData::make();
        $res= $xot->getPubThemePublicAsset($file);
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        $xot = XotData::make();
        $res = $xot->getPubThemePublicAsset($file);
=======
        $xot = XotData::make();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
        return $xot->getPubThemePublicAsset($file);
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        $xot = XotData::make();
        $res = $xot->getPubThemePublicAsset($file);
        return $res;
        $res = $xot->getPubThemePublicAsset($file);
        $xot = XotData::make();
        $res = $xot->getPubThemePublicAsset($file);
        return $res;
        $res = $xot->getPubThemePublicAsset($file);
        $xot=XotData::make();
        $res= $xot->getPubThemePublicAsset($file);
        return $res;
        $res = $xot->getPubThemePublicAsset($file);
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $xot = XotData::make();
        $res = $xot->getPubThemePublicAsset($file);
=======
        $xot=XotData::make();
        $res= $xot->getPubThemePublicAsset($file);
>>>>>>> f1d4085 (.)
=======
        $xot = XotData::make();
        $res = $xot->getPubThemePublicAsset($file);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
        return $res;
        $res = $xot->getPubThemePublicAsset($file);
        return $res;
        $res = $xot->getPubThemePublicAsset($file);
        return $res;
    }

    public function getPubTheme(): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        $xot = XotData::make();
        return $xot->pub_theme;
    }

    /**
     * Concatenate a title to the existing title.
     * This method allows adding page-specific titles to the base site title.
     *
     * @param  string|null  $title  The title to concatenate
     */
    public function concatTitle(?string $title): self
     * @param string|null $title The title to concatenate
     * @return self
     */
    public function concatTitle(null|string $title): self
    {
        // Skip concatenation if title is null or empty
        if (empty($title)) {
            return $this;
        }

        if (empty($this->title)) {
            $this->title = $title;
        } else {
        }

        return $this;
    }

    /**
     * Concatenate a description to the existing description.
     * This method allows adding page-specific descriptions to the base site description.
     *
    {
        // Skip concatenation if description is null or empty
        if (empty($description)) {
            return $this;
        }

        if (empty($this->description)) {
            $this->description = $description;
        } else {
        }

        return $this;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)

    /**
     * Get MIME type from file path extension.
     * Helper method for getBrandLogoBase64().
     */
    private function getMimeTypeFromPath(string $filePath): string
    {
        $extension = \strtolower(\pathinfo($filePath, PATHINFO_EXTENSION));

        return match ($extension) {
            'png' => 'image/png',
            'jpg', 'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
            'webp' => 'image/webp',
            'bmp' => 'image/bmp',
            'ico' => 'image/x-icon',
            default => 'image/png', // Fallback default
        };
    }
        $xot=XotData::make();
        return $xot->pub_theme;
    }
    
        $xot = XotData::make();
        return $xot->pub_theme;
    }

    /**
     * Concatenate a title to the existing title.
     * This method allows adding page-specific titles to the base site title.
     *
     * @param string|null $title The title to concatenate
     * @return self
     */
    public function concatTitle(null|string $title): self
    {
        // Skip concatenation if title is null or empty
        if (empty($title)) {
            return $this;
        }

        if (empty($this->title)) {
            $this->title = $title;
        } else {
            $this->title = $title . ' - ' . $this->title;
        }

        return $this;
    }

    /**
     * Concatenate a description to the existing description.
     * This method allows adding page-specific descriptions to the base site description.
     *
     */
    public function concatDescription(null|string $description): self
    {
        // Skip concatenation if description is null or empty
        if (empty($description)) {
            return $this;
        }

        if (empty($this->description)) {
            $this->description = $description;
        } else {
            $this->description = $description . ' ' . $this->description;
        }

        return $this;
    }
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
=======
=======
=======
>>>>>>> 091f883c (.)
        $xot=XotData::make();
        return $xot->pub_theme;
    }
    
        $xot = XotData::make();
        return $xot->pub_theme;
    }

    /**
     * Concatenate a title to the existing title.
     * This method allows adding page-specific titles to the base site title.
     *
     * @param string|null $title The title to concatenate
     * @return self
     */
    public function concatTitle(null|string $title): self
    {
        // Skip concatenation if title is null or empty
        if (empty($title)) {
            return $this;
        }

        if (empty($this->title)) {
            $this->title = $title;
        } else {
            $this->title = $title . ' - ' . $this->title;
        }

        return $this;
    }

    /**
     * Concatenate a description to the existing description.
     * This method allows adding page-specific descriptions to the base site description.
     *
     */
    public function concatDescription(null|string $description): self
    {
        // Skip concatenation if description is null or empty
        if (empty($description)) {
            return $this;
        }

        if (empty($this->description)) {
            $this->description = $description;
        } else {
            $this->description = $description . ' ' . $this->description;
        }

        return $this;
    }
        $xot=XotData::make();
        return $xot->pub_theme;
    }
    
        $xot = XotData::make();
        return $xot->pub_theme;
    }

    /**
     * Concatenate a title to the existing title.
     * This method allows adding page-specific titles to the base site title.
     *
     * @param string|null $title The title to concatenate
     * @return self
     */
    public function concatTitle(null|string $title): self
    {
        // Skip concatenation if title is null or empty
        if (empty($title)) {
            return $this;
        }

        if (empty($this->title)) {
            $this->title = $title;
        } else {
            $this->title = $title . ' - ' . $this->title;
        }

        return $this;
    }

    /**
     * Concatenate a description to the existing description.
     * This method allows adding page-specific descriptions to the base site description.
     *
     * @param string|null $description The description to concatenate
     * @return self
     */
    public function concatDescription(null|string $description): self
    {
        // Skip concatenation if description is null or empty
        if (empty($description)) {
            return $this;
        }

        if (empty($this->description)) {
            $this->description = $description;
        } else {
            $this->description = $description . ' ' . $this->description;
        }

        return $this;
    }
        $xot=XotData::make();
        return $xot->pub_theme;
    }
    
        $xot = XotData::make();
        return $xot->pub_theme;
    }

    /**
     * Concatenate a title to the existing title.
     * This method allows adding page-specific titles to the base site title.
     *
     * @param string|null $title The title to concatenate
     * @return self
     */
    public function concatTitle(null|string $title): self
    {
        // Skip concatenation if title is null or empty
        if (empty($title)) {
            return $this;
        }

        if (empty($this->title)) {
            $this->title = $title;
        } else {
            $this->title = $title . ' - ' . $this->title;
        }

        return $this;
    }

    /**
     * Concatenate a description to the existing description.
     * This method allows adding page-specific descriptions to the base site description.
     *
     * @param string|null $description The description to concatenate
     * @return self
     */
    public function concatDescription(null|string $description): self
    {
        // Skip concatenation if description is null or empty
        if (empty($description)) {
            return $this;
        }

        if (empty($this->description)) {
            $this->description = $description;
        } else {
            $this->description = $description . ' ' . $this->description;
        }

        return $this;
    }
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
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 2f3197ab (.)
        $xot=XotData::make();
        return $xot->pub_theme;
    }
    
        $xot = XotData::make();
        return $xot->pub_theme;
    }

    /**
     * Concatenate a title to the existing title.
     * This method allows adding page-specific titles to the base site title.
     *
     * @param string|null $title The title to concatenate
     * @return self
     */
    public function concatTitle(null|string $title): self
    {
        // Skip concatenation if title is null or empty
        if (empty($title)) {
            return $this;
        }

        if (empty($this->title)) {
            $this->title = $title;
        } else {
            $this->title = $title . ' - ' . $this->title;
        }

        return $this;
    }

    /**
     * Concatenate a description to the existing description.
     * This method allows adding page-specific descriptions to the base site description.
     *
     * @param string|null $description The description to concatenate
     * @return self
     */
    public function concatDescription(null|string $description): self
    {
        // Skip concatenation if description is null or empty
        if (empty($description)) {
            return $this;
        }

        if (empty($this->description)) {
            $this->description = $description;
        } else {
            $this->description = $description . ' ' . $this->description;
        }

        return $this;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
        $xot=XotData::make();
        $path=base_path('Modules/'.$xot->main_module.'/resources/svg/logo.svg');
        return file_get_contents($path);

    }
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 7468a7d2 (.)
        $xot=XotData::make();
        return $xot->pub_theme;
    }
    
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 7131bd09 (.)
=======
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
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
}
