<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Colors\Color;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
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
use Throwable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Filament\Support\Colors\Color;
use Illuminate\Support\Arr;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Livewire\Wireable;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Actions\File\AssetAction;
use Modules\Xot\Actions\File\AssetPathAction;
use Modules\Xot\Datas\Transformers\AssetTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
<<<<<<< HEAD
<<<<<<< HEAD
use Throwable;
=======
use Webmozart\Assert\Assert;
>>>>>>> 5a14301c (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> 5a14301c (.)

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
 *
 * @method string getBrandLogoBase64() Get the brand logo as base64 data URI for inline embedding
 */
class MetatagData extends Data implements Wireable
{
    use WireableData;

<<<<<<< HEAD
<<<<<<< HEAD
    public string $title = '';

    public string $sitename = '';

    public string $subtitle = '';

    public ?string $generator = 'xot';

    public string $charset = 'UTF-8';

    public ?string $author = 'xot';

    public ?string $description = null;

    public ?string $keywords = null;

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

=======
=======
>>>>>>> 5a14301c (.)
    /** @var string */
    public string $title = '';

    /** @var string */
    public string $sitename = '';

    /** @var string */
    public string $subtitle = '';

    /** @var string|null */
    public null|string $generator = 'xot';

    /** @var string */
    public string $charset = 'UTF-8';

    /** @var string|null */
    public null|string $author = 'xot';

    /** @var string|null */
    public null|string $description = null;

    /** @var string|null */
    public null|string $keywords = null;

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
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    public string $favicon = '/favicon.ico';

    /**
     * @var array<string, array{key?: string, color: string, hex?: string}>
     */
    public array $colors = [];

    /**
     * Singleton instance.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private static ?self $instance = null;

    /**
     * Creates or returns the singleton instance.
     */
    public static function make(): self
    {
        if (! self::$instance) {
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
    private static null|self $instance = null;

    /**
     * Creates or returns the singleton instance.
     *
     * @return self
     */
    public static function make(): self
    {
        if (!self::$instance) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            /** @var array<string, mixed> $data */
            $data = TenantService::getConfig('metatag');
            $data['description'] = TenantService::trans('metatag.description');
            self::$instance = self::from($data);
        }

        return self::$instance;
    }

    /**
     * Get the brand name.
     * This method reflects the semantic purpose of getting the brand name,
     * which is the title of the page.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
     */
    public function getBrandName(): string
    {
        return $this->title;
    }

    /**
     * Get the brand logo.
     * This method reflects the semantic purpose of getting the brand logo,
     * rather than exposing implementation details about where the logo is used.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
     */
    public function getBrandLogo(): string
    {
        try {
            /** @var string $path */
            $path = app(AssetAction::class)->execute($this->logo_header);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return asset($path);
        } catch (Throwable $e) {
            return asset($this->logo_header);
        }
    }

    public function getBrandLogoPath(): string
    {
        return app(AssetPathAction::class)->execute($this->logo_header);
    }

    /**
     * Get the dark mode brand logo.
     * This method reflects the semantic purpose of getting the dark mode brand logo.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
     */
    public function getDarkModeBrandLogo(): string
    {
        try {
            /** @var string $path */
            $path = app(AssetAction::class)->execute($this->logo_header_dark);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return asset($path);
        } catch (Throwable $e) {
            return asset($this->logo_header_dark);
        }
    }

    /**
     * Get the brand logo height.
     * This method reflects the semantic purpose of getting the brand logo height.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
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

            // Get the physical file path
            $physicalPath = public_path($assetPath);

            // Check if file exists
<<<<<<< HEAD
<<<<<<< HEAD
            if (! File::exists($physicalPath)) {
=======
            if (!File::exists($physicalPath)) {
>>>>>>> 5a14301c (.)
=======
            if (!File::exists($physicalPath)) {
>>>>>>> 5a14301c (.)
                return '';
            }

            // Read file content
            $fileContent = File::get($physicalPath);

            // Get MIME type
            $mimeType = $this->getMimeTypeFromPath($physicalPath);

            // Convert to base64
            $base64Content = base64_encode($fileContent);

            // Return as data URI
            return "data:{$mimeType};base64,{$base64Content}";
        } catch (Throwable $e) {
            // Fallback: try with the raw logo_header path
            try {
                $fallbackPath = public_path($this->logo_header);
                if (File::exists($fallbackPath)) {
                    $fileContent = File::get($fallbackPath);
                    $mimeType = $this->getMimeTypeFromPath($fallbackPath);
                    $base64Content = base64_encode($fileContent);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                    return "data:{$mimeType};base64,{$base64Content}";
                }
            } catch (Throwable $fallbackException) {
                // Log the error but don't break the application
                Log::warning('Could not generate base64 logo', [
                    'original_error' => $e->getMessage(),
                    'fallback_error' => $fallbackException->getMessage(),
                    'logo_header' => $this->logo_header,
                ]);
            }

            return '';
        }
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
     * Get MIME type from file path extension.
     * Helper method for getBrandLogoBase64().
     *
     * @param string $filePath
     * @return string
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

    /**
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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

        // Convert Filament color arrays to simple string format
        foreach ($filamentColors as $key => $colorArray) {
<<<<<<< HEAD
<<<<<<< HEAD
            if (is_array($colorArray) && ! empty($colorArray)) {
=======
            if (is_array($colorArray) && !empty($colorArray)) {
>>>>>>> 5a14301c (.)
=======
            if (is_array($colorArray) && !empty($colorArray)) {
>>>>>>> 5a14301c (.)
                // Use the first color in the array as the default
                $defaults[$key] = (string) $colorArray[0];
            }
        }

        $custom = [];
        foreach ($this->colors as $key => $value) {
            if (Arr::has($value, 'color')) {
                $custom[$key] = (string) $value['color'];
            }
        }

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
<<<<<<< HEAD
     */
    public function getBrandDescription(): ?string
=======
=======
>>>>>>> 5a14301c (.)
     *
     * @return string|null
     */
    public function getBrandDescription(): null|string
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getBrandDescription(): null|string
=======
    public function getBrandDescription(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function getBrandDescription(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function getBrandDescription(): ?string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     *
     * @return string
>>>>>>> 5a14301c (.)
     */
    public function getFavicon(): string
    {
        try {
<<<<<<< HEAD
<<<<<<< HEAD
            return app(AssetAction::class)->execute($this->favicon);
=======
            /** @var string $path */
            $path = app(AssetAction::class)->execute($this->favicon);
            return $path;
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
            /** @var string $path */
            $path = app(AssetAction::class)->execute($this->favicon);
            return $path;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
        } catch (Throwable $e) {
            return asset($this->favicon);
        }
    }

    public function getFaviconBySize(string $size, string $format): string
    {
        $xot = XotData::make();
<<<<<<< HEAD
<<<<<<< HEAD
        // return app(AssetAction::class)->execute($this->favicon, $size, $format);
        $file = 'favicon-'.$size.'.'.$format;

        return $xot->getPubThemePublicAsset($file);
=======
=======
>>>>>>> 5a14301c (.)
        //return app(AssetAction::class)->execute($this->favicon, $size, $format);
        $file = 'favicon-' . $size . '.' . $format;

        $res = $xot->getPubThemePublicAsset($file);
        return $res;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
    }

    /**
     * @deprecated Use getThemeColors() instead as it better reflects the semantic purpose
     */
    public function getColors(): array
    {
        return $this->colors;

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->colors;

=======

        return ($this->colors);
>>>>>>> a12f125f4a (.)
=======
        return $this->colors;

>>>>>>> b93ef594b4 (.)
=======

        return ($this->colors);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======

        return ($this->colors);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
        return $this->colors;

>>>>>>> 73eab74 (.)
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
        //return $this->getThemeColors();
>>>>>>> 5a14301c (.)
=======
        //return $this->getThemeColors();
>>>>>>> 5a14301c (.)
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

        // Convert custom color format to Filament color format
        foreach ($this->colors as $key => $value) {
            if (is_array($value) && Arr::has($value, 'color')) {
                // Convert single color value to array format for Filament compatibility
                $colorValue = (string) $value['color'];
                $customColors[$key] = [$colorValue];
            }
        }

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // return $this->getBrandName();
        return $this->title;
    }

=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
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
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
        //return $this->getBrandName();
        return $this->title;
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
        return $this->getBrandName();
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
        //return $this->getBrandName();
        return $this->title;
    }


>>>>>>> b93ef594b4 (.)
=======
        return $this->getBrandName();
    }

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        $xot = XotData::make();
<<<<<<< HEAD
<<<<<<< HEAD
        $path = base_path('Modules/'.$xot->main_module.'/resources/svg/logo.svg');

=======
        $path = base_path('Modules/' . $xot->main_module . '/resources/svg/logo.svg');
>>>>>>> 5a14301c (.)
=======
        $path = base_path('Modules/' . $xot->main_module . '/resources/svg/logo.svg');
>>>>>>> 5a14301c (.)
        return file_get_contents($path);
    }

    public function getDescription(int $limit = 160): string
    {
        return $this->description ?? '';
    }

<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======

>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
=======
        $xot=XotData::make();
        $path=base_path('Modules/'.$xot->main_module.'/resources/svg/logo.svg');
=======
        $xot = XotData::make();
        $path = base_path('Modules/' . $xot->main_module . '/resources/svg/logo.svg');
>>>>>>> b93ef594b4 (.)
        return file_get_contents($path);
    }

    public function getDescription(int $limit = 160): string
    {
        return $this->description ?? '';
    }

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
        $xot=XotData::make();
        $path=base_path('Modules/'.$xot->main_module.'/resources/svg/logo.svg');
        return file_get_contents($path);

    }

    public function getDescription(int $limit=160): string
    {
        return TenantService::trans('metatag.description');
    }

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
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
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

    public function getRobots(): string
    {
        return 'index, follow';
    }

    public function getType(): string
    {
        return 'website';
    }

    public function getCanonical(): string
    {
        return url()->current();
    }

    public function getImage(): string
    {
        return asset('images/logo.png');
    }

    public function getLocale(): string
    {
        return app()->getLocale();
    }

    public function getCurrentUrl(): string
    {
        return url()->current();
    }

    public function getSiteWebmanifest(): string
    {
        $xot = XotData::make();

        $file = 'site.webmanifest';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $xot->getPubThemePublicAsset($file);
=======
=======
>>>>>>> 3fbbf1f5 (.)
        $res = $xot->getPubThemePublicAsset($file);
        return $res;
>>>>>>> 5a14301c (.)
=======
        $res = $xot->getPubThemePublicAsset($file);
        return $res;
>>>>>>> 5a14301c (.)
    }

    public function getPubThemeAsset(string $file): string
    {
        $xot = XotData::make();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        return $xot->getPubThemePublicAsset($file);
=======
=======
>>>>>>> 3fbbf1f5 (.)
        $res = $xot->getPubThemePublicAsset($file);
        return $res;
>>>>>>> 5a14301c (.)
=======
        $res = $xot->getPubThemePublicAsset($file);
        return $res;
>>>>>>> 5a14301c (.)
    }

    public function getPubTheme(): string
    {
        $xot = XotData::make();
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
        return $xot->pub_theme;
    }

    /**
     * Concatenate a title to the existing title.
     * This method allows adding page-specific titles to the base site title.
     *
<<<<<<< HEAD
     * @param  string|null  $title  The title to concatenate
     */
    public function concatTitle(?string $title): self
=======
     * @param string|null $title The title to concatenate
     * @return self
     */
    public function concatTitle(null|string $title): self
>>>>>>> 5a14301c (.)
    {
        // Skip concatenation if title is null or empty
        if (empty($title)) {
            return $this;
        }

        if (empty($this->title)) {
            $this->title = $title;
        } else {
<<<<<<< HEAD
            $this->title = $title.' - '.$this->title;
=======
            $this->title = $title . ' - ' . $this->title;
>>>>>>> 5a14301c (.)
        }

        return $this;
    }

    /**
     * Concatenate a description to the existing description.
     * This method allows adding page-specific descriptions to the base site description.
     *
<<<<<<< HEAD
     * @param  string|null  $description  The description to concatenate
     */
    public function concatDescription(?string $description): self
=======
     * @param string|null $description The description to concatenate
     * @return self
     */
    public function concatDescription(null|string $description): self
>>>>>>> 5a14301c (.)
    {
        // Skip concatenation if description is null or empty
        if (empty($description)) {
            return $this;
        }

        if (empty($this->description)) {
            $this->description = $description;
        } else {
<<<<<<< HEAD
            $this->description = $description.' '.$this->description;
=======
            $this->description = $description . ' ' . $this->description;
>>>>>>> 5a14301c (.)
        }

        return $this;
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

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
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
        $xot=XotData::make();
        return $xot->pub_theme;
    }
    
>>>>>>> a12f125f4a (.)
=======
        $xot = XotData::make();
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
        $xot=XotData::make();
        return $xot->pub_theme;
    }
    
>>>>>>> a12f125f4a (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
        $xot=XotData::make();
        $path=base_path('Modules/'.$xot->main_module.'/resources/svg/logo.svg');
        return file_get_contents($path);

    }
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        $xot=XotData::make();
        return $xot->pub_theme;
    }
    
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
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
}
