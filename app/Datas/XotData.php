<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

<<<<<<< HEAD
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
use ArrayAccess;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Exception;
use Illuminate\Support\Facades\Auth;
use RuntimeException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
use Illuminate\Support\Str;
use Livewire\Wireable;
use Modules\Tenant\Services\TenantService;
use Modules\User\Contracts\TeamContract;
use Modules\User\Contracts\TenantContract;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\UserContract;
use RuntimeException;
=======
<<<<<<< HEAD
use Modules\User\Models\Membership;
use Modules\User\Models\Team;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\UserContract;
use RuntimeException;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;

use function Safe\realpath;

/**
 * Class Modules\Xot\Datas\XotData.
 * ----.
 */
class XotData extends Data implements Wireable
{
    use WireableData;

    public string $main_module = '';

    public string $param_name = 'noset';

    public string $adm_home = '01';

<<<<<<< HEAD
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
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
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 5a14301c (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 3fbbf1f5 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 399f46d3 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 17684f52 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 399f46d3 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
=======
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> a12f125f4a (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> b93ef594b4 (.)
=======
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> ce6fc085 (.)
>>>>>>> ca9324a4 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
=======
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
<<<<<<< HEAD
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
=======
>>>>>>> ca9324a4 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
=======
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
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
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

    // public bool $enable_ads;//' => '1',
    public string $primary_lang = 'it';

    public string $pub_theme;

    // ' => 'One',
    public string $search_action = 'it/videos';

    public bool $show_trans_key = false;

    public string $register_type = '0';

    public string $verification_type = '';

    public bool $login_verified = false;

    public bool $force_ssl = false;

    public bool $disable_frontend_dynamic_route = false;

    public bool $disable_admin_dynamic_route = false;

    public bool $disable_database_notifications = true;

    public bool $register_adm_theme = false;

    public bool $register_pub_theme = false;

    public bool $register_collective = false;

    public string $team_class = 'Modules\User\Models\Team'; // = Team::class;

    public string $tenant_class = 'Modules\User\Models\Tenant'; // = Team::class;

    public string $membership_class = 'Modules\User\Models\Membership'; // = Membership::class;

    public string $tenant_pivot_class = 'Modules\User\Models\TenantUser'; // = Membership::class;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $super_admin = null;
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
<<<<<<< HEAD
=======
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
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
    public ?string $super_admin = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
    public null|string $super_admin = null;

    public string $video_player = 'html5';

    private static null|self $instance = null;

    private null|ProfileContract $profile = null;

    public static function make(): self
    {
        if (!self::$instance) {
<<<<<<< HEAD
    public null|string $super_admin = null;

    public string $video_player = 'html5';

    private static ?self $instance = null;

    private ?ProfileContract $profile = null;

    public static function make(): self
    {
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
    public null|string $super_admin = null;
>>>>>>> a6ef6dc7 (.)

    public string $video_player = 'html5';

    private static ?self $instance = null;

    private ?ProfileContract $profile = null;

    public static function make(): self
    {
<<<<<<< HEAD
        if (! self::$instance) {
=======
        if (!self::$instance) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    public ?string $super_admin = null;

    public string $video_player = 'html5';

    private static ?self $instance = null;

    private ?ProfileContract $profile = null;

    public static function make(): self
    {
        if (! self::$instance) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
    public null|string $super_admin = null;

    public string $video_player = 'html5';

    private static null|self $instance = null;

    private null|ProfileContract $profile = null;

    public static function make(): self
    {
        if (!self::$instance) {
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
>>>>>>> ce6fc085 (.)
    public ?string $super_admin = null;
    public null|string $super_admin = null;

    public string $video_player = 'html5';

    private static null|self $instance = null;

    private null|ProfileContract $profile = null;

    public static function make(): self
    {
        if (!self::$instance) {
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
    public ?string $super_admin = null;

    public string $video_player = 'html5';

    private static ?self $instance = null;

    private ?ProfileContract $profile = null;

    public static function make(): self
    {
        if (! self::$instance) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
            $data = TenantService::getConfig('xra');

            self::$instance = self::from($data);
        }

        return self::$instance;
    }

    public function isSuperAdmin(): bool
    {
        $profile = $this->getProfileModel();
        /** @var \Modules\User\Models\Profile $profile */
        $profile = $profile;
        if ($profile->isSuperAdmin()) {
            return true;
        }

        return false;
    }

    /**
     * @return class-string<Model&UserContract>
     */
    public function getUserClass(): string
    {
        $class = config('auth.providers.users.model');
        Assert::stringNotEmpty($class, 'check config auth');
<<<<<<< HEAD
=======
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        Assert::classExists($class, '['.$class.'] check config auth');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        Assert::classExists($class, '[' . $class . '] check config auth');
>>>>>>> d2b0a27 (.)
=======
        Assert::classExists($class, '['.$class.'] check config auth');
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        Assert::classExists($class, '[' . $class . '] check config auth');
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
        Assert::implementsInterface(
            $class,
            UserContract::class,
            'class '.$class.' not implements UserContract['.__LINE__.']['.class_basename($this).']',
        );
<<<<<<< HEAD
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 091f883c (.)
        Assert::classExists($class, '[' . $class . '] check config auth');
        Assert::implementsInterface(
            $class,
            UserContract::class,
            'class ' . $class . ' not implements UserContract[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
<<<<<<< HEAD
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
        Assert::classExists($class, '['.$class.'] check config auth');
        Assert::implementsInterface($class, UserContract::class, 'class '.$class.' not implements UserContract['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::classExists($class, '['.$class.'] check config auth');
        Assert::implementsInterface($class, UserContract::class, 'class '.$class.' not implements UserContract['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
=======
<<<<<<< HEAD
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
=======
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
        Assert::classExists($class, '['.$class.'] check config auth');
        Assert::implementsInterface($class, UserContract::class, 'class '.$class.' not implements UserContract['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
<<<<<<< HEAD
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
>>>>>>> b93ef594b4 (.)
=======
        Assert::classExists($class, '['.$class.'] check config auth');
        Assert::implementsInterface($class, UserContract::class, 'class '.$class.' not implements UserContract['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
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
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

        return $class;
    }

    public function getUserByEmail(string $email): UserContract
    {
        $user_class = $this->getUserClass();
<<<<<<< HEAD
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".$userInstance::class);
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".$userInstance::class);
=======
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
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ca9324a4 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
        $userInstance = new $user_class();
        if (!in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model " . get_class($userInstance));
<<<<<<< HEAD
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
        $userInstance = new $user_class();
        if (!in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model " . get_class($userInstance));
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
        $userInstance = new $user_class();
        if (!in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model " . get_class($userInstance));
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $userInstance = new $user_class();
        if (!in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model " . get_class($userInstance));
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".$userInstance::class);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
         * if (! $user) {
         * throw new \Exception('user not found for email '.$email);
         * }
         */
<<<<<<< HEAD
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::implementsInterface($user, UserContract::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 091f883c (.)
        Assert::implementsInterface($user, UserContract::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::implementsInterface($user, UserContract::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
=======
        Assert::implementsInterface($user, UserContract::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new \Exception("Attribute 'email' not found in model ".get_class($userInstance));
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
        if (! $user) {
            throw new \Exception('user not found for email '.$email);
        }
            */
<<<<<<< HEAD
=======
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 5cf46378 (.)
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
        }
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        $user = $user_class::firstWhere(['email' => $email]);

        if (! $user) {
            throw new \Exception('user not found for email '.$email);
        }

<<<<<<< HEAD
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
         * if (! $user) {
         * throw new \Exception('user not found for email '.$email);
         * }
         */
=======
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
>>>>>>> 5cf46378 (.)
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
        $userInstance = new $user_class();
        if (!in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model " . get_class($userInstance));
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
         * if (! $user) {
         * throw new \Exception('user not found for email '.$email);
         * }
         */
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new \Exception("Attribute 'email' not found in model ".get_class($userInstance));
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
        if (! $user) {
            throw new \Exception('user not found for email '.$email);
        }
            */
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> ce6fc085 (.)
        $userInstance = new $user_class();
        if (!in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model " . get_class($userInstance));
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
         * if (! $user) {
         * throw new \Exception('user not found for email '.$email);
         * }
         */
<<<<<<< HEAD
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new \Exception("Attribute 'email' not found in model ".get_class($userInstance));
=======
        Assert::implementsInterface($user, UserContract::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
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
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new \Exception("Attribute 'email' not found in model ".get_class($userInstance));
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
        if (! $user) {
            throw new \Exception('user not found for email '.$email);
        }
            */
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
        $userInstance = new $user_class();
        if (!in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model " . get_class($userInstance));
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
         * if (! $user) {
         * throw new \Exception('user not found for email '.$email);
         * }
         */
        Assert::implementsInterface($user, UserContract::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
        if (! $user) {
            throw new \Exception('user not found for email '.$email);
        }
            */
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
        $userInstance = new $user_class();
        if (!in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model " . get_class($userInstance));
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
         * if (! $user) {
         * throw new \Exception('user not found for email '.$email);
         * }
         */
        Assert::implementsInterface($user, UserContract::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
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
=======
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

        return $user;
    }

    /**
     * @return class-string<Model&TeamContract>
     */
    public function getTeamClass(): string
    {
<<<<<<< HEAD
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
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
<<<<<<< HEAD
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
=======
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
>>>>>>> 091f883c (.)
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        // Assert::isInstanceOf($team_class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf(
            $this->team_class,
            Model::class,
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename($this).']['.$this->team_class.']',
=======
<<<<<<< HEAD
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->team_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->team_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->team_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->team_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->team_class . ']',
>>>>>>> 38b70c7ba (.)
        );
        Assert::implementsInterface(
            $this->team_class,
            TeamContract::class,
<<<<<<< HEAD
            '['.$this->team_class.']['.__LINE__.']['.class_basename($this).']',
        );
=======
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
        );
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
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
        // Assert::isInstanceOf($team_class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($this->team_class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$this->team_class.']');
        Assert::implementsInterface($this->team_class, TeamContract::class, '['.$this->team_class.']['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        // Assert::isInstanceOf($team_class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf(
            $this->team_class,
            Model::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->team_class . ']',
=======
            '['.__LINE__.']['.class_basename($this).']['.$this->team_class.']',
>>>>>>> 551c768c4 (.)
        );
        Assert::implementsInterface(
            $this->team_class,
            TeamContract::class,
<<<<<<< HEAD
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
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
=======
            '['.$this->team_class.']['.__LINE__.']['.class_basename($this).']',
>>>>>>> 551c768c4 (.)
        );
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
        // Assert::isInstanceOf($team_class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($this->team_class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$this->team_class.']');
        Assert::implementsInterface($this->team_class, TeamContract::class, '['.$this->team_class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)

        return $this->team_class;
    }

    /**
     * Undocumented function.
     *
     * @return class-string<Model&TenantContract>
     */
    public function getTenantClass(): string
    {
<<<<<<< HEAD
        Assert::classExists(
            $this->tenant_class,
            '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']',
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        Assert::classExists(
            $this->tenant_class,
<<<<<<< HEAD
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
=======
            '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']',
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        );
        // Assert::isInstanceOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        // Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface(
            $this->tenant_class,
            TenantContract::class,
<<<<<<< HEAD
            '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']',
=======
<<<<<<< HEAD
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 38b70c7ba (.)
        );
        Assert::isAOf(
            $this->tenant_class,
            Model::class,
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename($this).']['.$this->tenant_class.']',
        );
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
        );
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
        Assert::classExists($this->tenant_class, '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']');
        // Assert::isInstanceOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        // Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface($this->tenant_class, TenantContract::class, '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($this->tenant_class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$this->tenant_class.']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
        // Assert::isInstanceOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        // Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface(
            $this->tenant_class,
            TenantContract::class,
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
=======
            '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']',
>>>>>>> 551c768c4 (.)
        );
        Assert::isAOf(
            $this->tenant_class,
            Model::class,
<<<<<<< HEAD
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
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
=======
            '['.__LINE__.']['.class_basename($this).']['.$this->tenant_class.']',
>>>>>>> 551c768c4 (.)
        );
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        Assert::classExists($this->tenant_class, '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']');
        // Assert::isInstanceOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        // Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface($this->tenant_class, TenantContract::class, '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($this->tenant_class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$this->tenant_class.']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)

        return $this->tenant_class;
    }

    /**
     * @return class-string
     */
    public function getTenantResourceClass(): string
    {
        $class = Str::of($this->tenant_class)
            ->replace('\Models\\', '\Filament\Resources\\')
            ->append('Resource')
            ->toString();
<<<<<<< HEAD
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
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
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 399f46d3 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 17684f52 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 399f46d3 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> ca9324a4 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
=======
>>>>>>> ca9324a4 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
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
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> 53d6a6ba (.)
=======
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

        return $class;
    }

    public function getTenantPivotClass(): string
    {
<<<<<<< HEAD
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
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
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 399f46d3 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 17684f52 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 399f46d3 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> ca9324a4 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
>>>>>>> ca9324a4 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
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
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 53d6a6ba (.)
=======
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

        return $this->tenant_pivot_class;
    }

    public function getMembershipClass(): string
    {
<<<<<<< HEAD
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
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
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 399f46d3 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 17684f52 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 399f46d3 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> ca9324a4 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
>>>>>>> ca9324a4 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
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
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 53d6a6ba (.)
=======
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

        return $this->membership_class;
    }

    /**
     * @return class-string<Model&ProfileContract>
     */
    public function getProfileClass(): string
    {
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $class = 'Modules\\' . $this->main_module . '\Models\Profile';

        // Verifica che la classe esista
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');

        // Verifica che sia un Model e implementi ProfileContract
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
        Assert::implementsInterface(
            $class,
            ProfileContract::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']',
        );
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
        $class = 'Modules\\'.$this->main_module.'\Models\Profile';
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        $class = 'Modules\\' . $this->main_module . '\Models\Profile';
>>>>>>> a6ef6dc7 (.)

        // Verifica che la classe esista
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');

        // Verifica che sia un Model e implementi ProfileContract
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
<<<<<<< HEAD
        Assert::implementsInterface(
            $class,
            ProfileContract::class,
            '['.__LINE__.']['.class_basename($this).']['.$class.']',
<<<<<<< HEAD
=======
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
>>>>>>> 091f883c (.)
        $class = 'Modules\\' . $this->main_module . '\Models\Profile';

        // Verifica che la classe esista
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');

        // Verifica che sia un Model e implementi ProfileContract
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
        Assert::implementsInterface(
            $class,
            ProfileContract::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']',
=======
>>>>>>> 551c768c4 (.)
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $class = 'Modules\\'.$this->main_module.'\Models\Profile';
        $class = 'Modules\\' . $this->main_module . '\Models\Profile';
=======
=======
=======
        $class = 'Modules\\'.$this->main_module.'\Models\Profile';
=======
        $class = 'Modules\\' . $this->main_module . '\Models\Profile';
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)

        // Verifica che la classe esista
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');

        // Verifica che sia un Model e implementi ProfileContract
<<<<<<< HEAD
=======
<<<<<<< HEAD
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
        Assert::implementsInterface(
            $class,
            ProfileContract::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']',
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
        $class = 'Modules\\'.$this->main_module.'\Models\Profile';

        // Verifica che la classe esista
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');

        // Verifica che sia un Model e implementi ProfileContract
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::implementsInterface(
            $class,
            ProfileContract::class,
            '['.__LINE__.']['.class_basename($this).']['.$class.']',
        $class = 'Modules\\' . $this->main_module . '\Models\Profile';

        // Verifica che la classe esista
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');

        // Verifica che sia un Model e implementi ProfileContract
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
        Assert::implementsInterface(
            $class,
            ProfileContract::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']',
        );
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        $class = 'Modules\\'.$this->main_module.'\Models\Profile';

        // Verifica che la classe esista
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');

        // Verifica che sia un Model e implementi ProfileContract
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
=======
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
        Assert::implementsInterface(
            $class,
            ProfileContract::class,
            '['.__LINE__.']['.class_basename($this).']['.$class.']',
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
=======
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
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
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
=======
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)

        /** @var class-string<Model&ProfileContract> */
        return $class;
    }

    public function getHomeController(): string
    {
<<<<<<< HEAD
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
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
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 5a14301c (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 3fbbf1f5 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 399f46d3 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 17684f52 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 399f46d3 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
=======
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
>>>>>>> a12f125f4a (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> b93ef594b4 (.)
=======
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> ca9324a4 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
=======
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
<<<<<<< HEAD
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
=======
>>>>>>> ca9324a4 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
=======
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
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
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
>>>>>>> 53d6a6ba (.)
=======
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    }

    public function getProfileModelByUserId(string $user_id): ProfileContract
    {
        $profileClass = $this->getProfileClass();
        /** @var Model&ProfileContract $profile */
        $profile = app($profileClass);

        Assert::isInstanceOf($profile, Model::class);
        Assert::isArray($profile->getFillable(), 'getFillable() must return array');

<<<<<<< HEAD
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 5a14301c (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 3fbbf1f5 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 399f46d3 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 17684f52 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 399f46d3 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
=======
>>>>>>> 218dfed3 (.)
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7468a7d2 (.)
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new \Exception('add user_id to fillable on class '.$profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ce6fc085 (.)
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
=======
>>>>>>> ed734516 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 7131bd09 (.)
=======
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
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
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        }

        /** @var ProfileContract */
        $res = $profile->firstOrCreate(['user_id' => $user_id]);
        Assert::implementsInterface($res, ProfileContract::class);

        return $res;
    }

    public function getProfileByEmail(string $email): ProfileContract
    {
        $user = $this->getUserByEmail($email);
<<<<<<< HEAD

        return $this->getProfileModelByUserId((string) $user->id);
=======
<<<<<<< HEAD
        $profile = $this->getProfileModelByUserId($user->id);

        return $profile;
        $profile = $this->getProfileModelByUserId($user->id);

        return $profile;
        $profile = $this->getProfileModelByUserId($user->id);

        return $profile;
        $profile = $this->getProfileModelByUserId($user->id);

        return $profile;
        $profile = $this->getProfileModelByUserId($user->id);

        return $profile;
=======

        return $this->getProfileModelByUserId((string) $user->id);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    }

    /**
     * Verifica se l'utente autenticato è un super amministratore.
     */
    public function iAmSuperAdmin(): bool
    {
<<<<<<< HEAD
        $user = Auth::user();
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        $user = Auth::user();
=======
<<<<<<< HEAD
        $user = Auth::user();
=======
        $user = \Illuminate\Support\Facades\Auth::user();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
        $user = Auth::user();
>>>>>>> 091f883c (.)
>>>>>>> 38b70c7ba (.)
        if ($user === null) {
            return false;
        }

<<<<<<< HEAD
        if (! method_exists($user, 'hasRole')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
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
        if (! method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
        if (! method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
=======
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        if (! method_exists($user, 'hasRole')) {
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 5a14301c (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!method_exists($user, 'hasRole')) {
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 399f46d3 (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 17684f52 (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 399f46d3 (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!method_exists($user, 'hasRole')) {
=======
        if (! method_exists($user, 'hasRole')) {
>>>>>>> a12f125f4a (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> b93ef594b4 (.)
=======
        if (! method_exists($user, 'hasRole')) {
>>>>>>> ce6fc085 (.)
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> ca9324a4 (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
        if (! method_exists($user, 'hasRole')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! method_exists($user, 'hasRole')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        if (!method_exists($user, 'hasRole')) {
=======
        if (! method_exists($user, 'hasRole')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        if (!method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
<<<<<<< HEAD
        if (!method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (! method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
        if (!method_exists($user, 'hasRole')) {
=======
>>>>>>> ca9324a4 (.)
=======
        if (!method_exists($user, 'hasRole')) {
=======
        if (! method_exists($user, 'hasRole')) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        if (!method_exists($user, 'hasRole')) {
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
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        if (! method_exists($user, 'hasRole')) {
>>>>>>> 53d6a6ba (.)
=======
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        if (! method_exists($user, 'hasRole')) {
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
            return false;
        }

        // Utilizziamo un'asserzione per garantire che hasRole restituisca un booleano
        $result = $user->hasRole('super-admin');

        return $result === true;
    }

    public function getProfileModel(): ProfileContract
    {
        if ($this->profile !== null) {
            return $this->profile;
        }

        $user_id = (string) authId();
<<<<<<< HEAD
        $this->profile = $this->getProfileModelByUserId((string) $user_id);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->profile = $this->getProfileModelByUserId((string) $user_id);
=======
        $this->profile = $this->getProfileModelByUserId($user_id);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        $this->profile = $this->getProfileModelByUserId((string) $user_id);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        Assert::implementsInterface(
            $this->profile,
            ProfileContract::class,
            '['.__LINE__.']['.class_basename($this).']',
<<<<<<< HEAD
        );
=======
<<<<<<< HEAD
        $this->profile = $this->getProfileModelByUserId($user_id);
        Assert::implementsInterface(
            $this->profile,
            ProfileContract::class,
            '[' . __LINE__ . '][' . class_basename($this) . ']',
=======
>>>>>>> 551c768c4 (.)
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::implementsInterface($this->profile, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']');
=======
=======
        Assert::implementsInterface($this->profile, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
        Assert::implementsInterface($this->profile, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
=======
        Assert::implementsInterface($this->profile, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        Assert::implementsInterface($this->profile, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)

        return $this->profile;
    }

    /**
     * Update the XotData instance.
     *
     * @param  array<string, mixed>  $data
     */
    public function update(array $data): self
    {
        foreach ($data as $k => $v) {
            $this->{$k} = $v;
        }

        // $this->save();
        return $this;
    }

    public function save(): void
    {
        dddx('wip');
    }

    public function getPubThemeViewPath(string $key = ''): string
    {
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);

        try {
            return realpath($path0);
        } catch (Exception $e) {
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
<<<<<<< HEAD
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
=======
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        // Return empty string if pub_theme is empty to prevent invalid paths
        if (empty($this->pub_theme)) {
            return '';
        }

        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);

        // Check if path exists and is a directory before using realpath
        if (! is_dir($path0)) {
            // Return empty string if directory doesn't exist to prevent Folio errors
            return '';
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
=======
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
>>>>>>> f1d4085 (.)
=======
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
>>>>>>> 53d6a6ba (.)
=======
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        try {
            $path = realpath($path0);
            if ($path === false) {
                return '';
            }

            return $path;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        } catch (Exception $e) {
=======
<<<<<<< HEAD
            // Return empty string if realpath fails to prevent Folio errors
            return '';
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
=======
>>>>>>> 2f3197ab (.)
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7468a7d2 (.)
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
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
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> ce6fc085 (.)
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
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
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
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
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
<<<<<<< HEAD
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
            // Return empty string if realpath fails to prevent Folio errors
            return '';
            // Return empty string if realpath fails to prevent Folio errors
            return '';
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
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
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
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
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
            // Return empty string if realpath fails to prevent Folio errors
            return '';
=======
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
=======
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
>>>>>>> 53d6a6ba (.)
=======
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        }
    }

    public function getPubThemePublicPath(string $key = ''): string
    {
<<<<<<< HEAD
        return base_path('themes/'.$this->pub_theme.'/'.$key);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

        return $path;
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        return $path;
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        return $path;
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
<<<<<<< HEAD
        return base_path('themes/'.$this->pub_theme.'/'.$key);
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
=======
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
=======
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);
>>>>>>> f1d4085 (.)
=======
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

>>>>>>> 53d6a6ba (.)
=======
=======
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        return $path;
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        return $path;
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        return $path;
=======
        return base_path('themes/'.$this->pub_theme.'/'.$key);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    }

    public function getPubThemePublicAsset(string $key = ''): string
    {
<<<<<<< HEAD
        return asset('themes/'.$this->pub_theme.'/'.$key);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        $path = asset('themes/'.$this->pub_theme.'/'.$key);

        $path = asset('themes/'.$this->pub_theme.'/'.$key);

        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        $path = asset('themes/'.$this->pub_theme.'/'.$key);
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        $path = asset('themes/'.$this->pub_theme.'/'.$key);

        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        $path = asset('themes/'.$this->pub_theme.'/'.$key);

        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        $path = asset('themes/'.$this->pub_theme.'/'.$key);

        $path = asset('themes/'.$this->pub_theme.'/'.$key);

        return $path;
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
<<<<<<< HEAD
        return asset('themes/'.$this->pub_theme.'/'.$key);
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
=======
        $path = asset('themes/'.$this->pub_theme.'/'.$key);
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        $path = asset('themes/'.$this->pub_theme.'/'.$key);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $path = asset('themes/'.$this->pub_theme.'/'.$key);

=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
=======
        $path = asset('themes/'.$this->pub_theme.'/'.$key);
>>>>>>> f1d4085 (.)
=======
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
>>>>>>> ab8cc3f3 (.)
        return $path;
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        return $path;
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        return $path;
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        return $path;
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        return $path;
    }

<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
=======
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
        return $path;
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5cf46378 (.)
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        return $path;
    }

        } catch (\Exception $e) {
            throw new \Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
        }
=======
        return asset('themes/'.$this->pub_theme.'/'.$key);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    }

    /**
     * @return class-string<Model&UserContract>
     */
    public function getUserClassByType(string $type): string
    {
        $user_class = $this->getUserClass();
        $userInstance = app($user_class);
<<<<<<< HEAD

        if (! is_object($userInstance) || ! method_exists($userInstance, 'getChildTypes')) {
            throw new Exception('getChildTypes method not found in class '.$user_class);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        if (! is_object($userInstance) || ! method_exists($userInstance, 'getChildTypes')) {
            throw new Exception('getChildTypes method not found in class '.$user_class);
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        if (is_object($userInstance) && method_exists($userInstance, 'getChildTypes')) {
            $types = $userInstance->getChildTypes();
            if (is_array($types)) {
                $class = Arr::get($types, $type);
            } else {
                throw new Exception('getChildTypes() did not return an array in class '.$user_class);
            }
        } else {
            throw new Exception('getChildTypes() method not found in class '.$user_class);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======

        if (! is_object($userInstance) || ! method_exists($userInstance, 'getChildTypes')) {
            throw new Exception('getChildTypes method not found in class '.$user_class);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        }

        $types = $userInstance->getChildTypes();
        if (! is_array($types) && ! ($types instanceof ArrayAccess)) {
            throw new Exception('getChildTypes must return array or ArrayAccess');
        }
        $class = Arr::get($types, $type);
<<<<<<< HEAD
=======
<<<<<<< HEAD

        if (! is_object($userInstance) || ! method_exists($userInstance, 'getChildTypes')) {
            throw new Exception('getChildTypes method not found in class '.$user_class);
        }

        $typesResult = $userInstance->getChildTypes();
        if (! is_array($typesResult) && ! ($typesResult instanceof \ArrayAccess)) {
            throw new Exception('getChildTypes must return array or ArrayAccess');
        }

        $class = Arr::get($typesResult, $type);
        if (is_null($class)) {
        }
        if (is_null($class)) {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 53d6a6ba (.)
=======
        }
        if (is_null($class)) {
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        $types = $userInstance->getChildTypes();
        $class = Arr::get($types, $type);
=======
>>>>>>> 551c768c4 (.)
        if (is_null($class)) {
        }
        if (is_null($class)) {
        $types = $userInstance->getChildTypes();
        $class = Arr::get($types, $type);
>>>>>>> 38b70c7ba (.)
        if (is_null($class)) {
=======
        $types = $userInstance->getChildTypes();
        $class = Arr::get($types, $type);
        if (is_null($class)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            throw new Exception('type ' . $type . ' not found in class ' . $user_class);
        }
        Assert::classExists($class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
        Assert::implementsInterface(
            $class,
            UserContract::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']',
        );
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
            throw new Exception('type '.$type.' not found in class '.$user_class);
        }

        Assert::classExists($class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
<<<<<<< HEAD
        Assert::implementsInterface(
            $class,
            UserContract::class,
            '['.__LINE__.']['.class_basename($this).']['.$class.']',
<<<<<<< HEAD
        );
=======
<<<<<<< HEAD
        $types = $userInstance->getChildTypes();
        $class = Arr::get($types, $type);
        if (is_null($class)) {
            throw new Exception('type ' . $type . ' not found in class ' . $user_class);
        }
        Assert::classExists($class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
        Assert::implementsInterface(
            $class,
            UserContract::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']',
=======
>>>>>>> 551c768c4 (.)
        );
<<<<<<< HEAD
        }
        Assert::classExists($class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface($class, UserContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
            throw new Exception('type ' . $type . ' not found in class ' . $user_class);
        }
        Assert::classExists($class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
        Assert::implementsInterface(
            $class,
            UserContract::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']',
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
            throw new Exception('type '.$type.' not found in class '.$user_class);
        }
        Assert::classExists($class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
<<<<<<< HEAD
        Assert::implementsInterface(
            $class,
            UserContract::class,
            '['.__LINE__.']['.class_basename($this).']['.$class.']',
>>>>>>> 5cf46378 (.)
        );
=======
        Assert::implementsInterface($class, UserContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)

        return $class;
    }

    public function getUserResourceClassByType(string $type): string
    {
        $class = $this->getUserClassByType($type);

        // Extract the module name from the class namespace
        $moduleName = Str::before(Str::after($class, 'Modules\\'), '\\');

        // Build the resource class path
        $resourceClass = Str::of($class)
            ->replace('\\Models\\', '\\Filament\\Resources\\')
            ->append('Resource')
            ->toString();

        // If the class doesn't exist, try the alternative path (app/Filament/Resources)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (! class_exists($resourceClass)) {
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
        if (! class_exists($resourceClass)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        if (! class_exists($resourceClass)) {
            $resourceClass =
                'Modules\\'.$moduleName.'\\app\\Filament\\Resources\\'.class_basename($class).'Resource';
        }

        if (! class_exists($resourceClass)) {
<<<<<<< HEAD
            throw new RuntimeException("Resource class not found for type: {$type}. Tried: {$resourceClass}");
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
        if (!class_exists($resourceClass)) {
            $resourceClass =
                'Modules\\' . $moduleName . '\\app\\Filament\\Resources\\' . class_basename($class) . 'Resource';
        }

        if (!class_exists($resourceClass)) {
<<<<<<< HEAD
        if (!class_exists($resourceClass)) {
            $resourceClass =
                'Modules\\'.$moduleName.'\\app\\Filament\\Resources\\'.class_basename($class).'Resource';
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
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 300ef70 (.)
        if (!class_exists($resourceClass)) {
>>>>>>> a6ef6dc7 (.)
            $resourceClass =
                'Modules\\'.$moduleName.'\\app\\Filament\\Resources\\'.class_basename($class).'Resource';
        }

<<<<<<< HEAD
        if (! class_exists($resourceClass)) {
=======
        if (!class_exists($resourceClass)) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
        if (! class_exists($resourceClass)) {
            $resourceClass = 'Modules\\'.$moduleName.'\\app\\Filament\\Resources\\'.
                          class_basename($class).'Resource';
        }

        if (! class_exists($resourceClass)) {
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
            throw new RuntimeException("Resource class not found for type: {$type}. Tried: {$resourceClass}");
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
            throw new RuntimeException("Resource class not found for type: {$type}. Tried: {$resourceClass}");
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
        if (! class_exists($resourceClass)) {
            $resourceClass = 'Modules\\'.$moduleName.'\\app\\Filament\\Resources\\'.
                          class_basename($class).'Resource';
        }

        if (! class_exists($resourceClass)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
        if (!class_exists($resourceClass)) {
            $resourceClass =
                'Modules\\' . $moduleName . '\\app\\Filament\\Resources\\' . class_basename($class) . 'Resource';
        }

        if (!class_exists($resourceClass)) {
<<<<<<< HEAD
            throw new RuntimeException("Resource class not found for type: {$type}. Tried: {$resourceClass}");
            throw new \RuntimeException("Resource class not found for type: {$type}. Tried: {$resourceClass}");
=======
>>>>>>> b93ef594b4 (.)
            throw new RuntimeException("Resource class not found for type: {$type}. Tried: {$resourceClass}");
=======
            throw new \RuntimeException("Resource class not found for type: {$type}. Tried: {$resourceClass}");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
>>>>>>> 38b70c7ba (.)
        }

        return $resourceClass;
    }

    /**
     * Get user child types.
     *
     * @return array<int, mixed>
     */
    public function getUserChildTypes(): array
    {
        $enum_class = $this->getUserChildTypeClass();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        if (! enum_exists($enum_class)) {
            return [];
        }

<<<<<<< HEAD
        return $enum_class::cases();
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        return $enum_class::cases();
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
        /** @var array<int, mixed> $cases */
        $cases = $enum_class::cases();

        return $cases;

<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
        return $enum_class::cases();

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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 2f3197ab (.)

<<<<<<< HEAD
<<<<<<< HEAD

=======
=======
>>>>>>> 7468a7d2 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
        return $enum_class::cases();

<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
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
        return $enum_class::cases();

>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)

        return $enum_class::cases();


<<<<<<< HEAD
        return $enum_class::cases();



        return $enum_class::cases();

        return $enum_class::cases();


        return $enum_class::cases();

        return $enum_class::cases();

        return $enum_class::cases();



        return $enum_class::cases();

        return $enum_class::cases();

        return $enum_class::cases();


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
        return $enum_class::cases();
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        return $enum_class::cases();

>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        return $enum_class::cases();
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        // $userInstance = app($user_class);
        // return $userInstance->getChildTypes();
    }

    public function getUserChildTypeClass(): string
    {
        $user_class = $this->getUserClass();
        $user_instance = app($user_class);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

        if (! is_object($user_instance) || ! method_exists($user_instance, 'getCasts')) {
            throw new Exception('getCasts method not found in class '.$user_class);
        }

        $castsResult = $user_instance->getCasts();
        if (! is_array($castsResult) && ! ($castsResult instanceof ArrayAccess)) {
            throw new Exception('getCasts must return array or ArrayAccess');
        }

        // $enum_class = Arr::get($user_class::casts(),'type',null);
        $enum_class = Arr::get($castsResult, 'type', null);
<<<<<<< HEAD
=======
<<<<<<< HEAD
        // $enum_class = Arr::get($user_class::casts(),'type',null);
<<<<<<< HEAD
        if (is_object($user_instance) && method_exists($user_instance, 'getCasts')) {
            $casts = $user_instance->getCasts();
            if (is_array($casts)) {
                $enum_class = Arr::get($casts, 'type', null);
            } else {
                $enum_class = null;
            }
        } else {
            $enum_class = null;
        }
=======
        $enum_class = Arr::get($user_instance->getCasts(), 'type', null);
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
<<<<<<< HEAD
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
>>>>>>> 2f3197ab (.)
        // $enum_class = Arr::get($user_class::casts(),'type',null);
        $enum_class = Arr::get($user_instance->getCasts(), 'type', null);
        // $enum_class = Arr::get($user_class::casts(),'type',null);
        $enum_class = Arr::get($user_instance->getCasts(), 'type', null);
<<<<<<< HEAD
        // $enum_class = Arr::get($user_class::casts(),'type',null);
        $enum_class = Arr::get($user_instance->getCasts(), 'type', null);
        // $enum_class = Arr::get($user_class::casts(),'type',null);
        $enum_class = Arr::get($user_instance->getCasts(), 'type', null);
        // $enum_class = Arr::get($user_class::casts(),'type',null);
        $enum_class = Arr::get($user_instance->getCasts(), 'type', null);
        // $enum_class = Arr::get($user_class::casts(),'type',null);
        $enum_class = Arr::get($user_instance->getCasts(), 'type', null);
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
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
        // $enum_class = Arr::get($user_class::casts(),'type',null);
        $enum_class = Arr::get($user_instance->getCasts(), 'type', null);
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
        // $enum_class = Arr::get($user_class::casts(),'type',null);
<<<<<<< HEAD
        if (is_object($user_instance) && method_exists($user_instance, 'getCasts')) {
            $casts = $user_instance->getCasts();
            if (is_array($casts)) {
                $enum_class = Arr::get($casts, 'type', null);
            } else {
                $enum_class = null;
            }
        } else {
            $enum_class = null;
        }
=======
        $enum_class = Arr::get($user_instance->getCasts(), 'type', null);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        if ($enum_class === null) {
            $enum_class = Str::of($user_class)
                ->replace('\\Models\\', '\\Enums\\')
                ->append('TypeEnum')
                ->toString();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($enum_class == null) {
            $enum_class = Str::of($user_class)->replace('\\Models\\', '\\Enums\\')->append('TypeEnum')->toString();
=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
        if ($enum_class == null) {
            $enum_class = Str::of($user_class)->replace('\\Models\\', '\\Enums\\')->append('TypeEnum')->toString();
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
=======
        if ($enum_class == null) {
            $enum_class = Str::of($user_class)->replace('\\Models\\', '\\Enums\\')->append('TypeEnum')->toString();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        if ($enum_class == null) {
            $enum_class = Str::of($user_class)->replace('\\Models\\', '\\Enums\\')->append('TypeEnum')->toString();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
        }
        Assert::stringNotEmpty($enum_class, 'enum_class is empty');

        return $enum_class;
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======

>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
        // $userInstance = app($user_class);
        // return $userInstance->getChildTypes();
    }

    /**
     * Get the project namespace dynamically.
     */
    public function getProjectNamespace(): string
    {
<<<<<<< HEAD
        return 'Modules\\'.$this->main_module;
=======
<<<<<<< HEAD
        return 'Modules\\' . $this->main_module;
        return 'Modules\\' . $this->main_module;
        return 'Modules\\' . $this->main_module;
        return 'Modules\\' . $this->main_module;
        return 'Modules\\' . $this->main_module;
=======
        return 'Modules\\'.$this->main_module;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
    }

    public function forceSSL(): bool
    {
<<<<<<< HEAD
        if (! $this->force_ssl) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!$this->force_ssl) {
        if (!$this->force_ssl) {
        if (!$this->force_ssl) {
        if (!$this->force_ssl) {
        if (! $this->force_ssl) {
        if (! $this->force_ssl) {
        if (! $this->force_ssl) {
        if (! $this->force_ssl) {
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
<<<<<<< HEAD
        if (! $this->force_ssl) {
=======
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
>>>>>>> 091f883c (.)
        if (!$this->force_ssl) {
        if (! $this->force_ssl) {
        if (! $this->force_ssl) {
        if (!$this->force_ssl) {
        if (!$this->force_ssl) {
<<<<<<< HEAD
        if (! $this->force_ssl) {
        if (! $this->force_ssl) {
        if (!$this->force_ssl) {
=======
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
        if (!$this->force_ssl) {
>>>>>>> 5a14301c (.)
=======
        if (!$this->force_ssl) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        if (! $this->force_ssl) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        if (! $this->force_ssl) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        if (!$this->force_ssl) {
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
        if (! $this->force_ssl) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        if (! $this->force_ssl) {
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === 'localhost') {
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === '127.0.0.1') {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
=======
        if (! $this->force_ssl) {
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'localhost') {
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == '127.0.0.1') {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === 'localhost') {
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === '127.0.0.1') {
        if (! $this->force_ssl) {
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'localhost') {
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == '127.0.0.1') {
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
            return false;
        }
        // AWS ELB
        if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
            return true;
        }

        // if(isset($_SERVER['SERVER_NAME']) && Str::endsWith($_SERVER['SERVER_NAME'],'.local')){
        //    return false;
        // }
        // if(isset($_SERVER['REQUEST_SCHEME']) && 'https' == $_SERVER['REQUEST_SCHEME']){
        //    return false;
        // }
        return true;
    }
}
