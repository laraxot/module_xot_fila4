<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use ArrayAccess;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Wireable;
use Modules\Tenant\Services\TenantService;
use Modules\User\Contracts\TeamContract;
use Modules\User\Contracts\TenantContract;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\UserContract;
use RuntimeException;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
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
>>>>>>> ed734516 (.)
=======
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> ca9324a4 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
=======
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 9db27d12 (.)
=======
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
    public null|string $super_admin = null;

    public string $video_player = 'html5';

    private static null|self $instance = null;

    private null|ProfileContract $profile = null;

    public static function make(): self
    {
        if (!self::$instance) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
    public null|string $super_admin = null;

    public string $video_player = 'html5';

    private static null|self $instance = null;

    private null|ProfileContract $profile = null;

    public static function make(): self
    {
        if (!self::$instance) {
<<<<<<< HEAD
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
=======
    public ?string $super_admin = null;
=======
    public null|string $super_admin = null;
>>>>>>> b93ef594b4 (.)

    public string $video_player = 'html5';

    private static null|self $instance = null;

    private null|ProfileContract $profile = null;

    public static function make(): self
    {
<<<<<<< HEAD
        if (! self::$instance) {
>>>>>>> a12f125f4a (.)
=======
        if (!self::$instance) {
>>>>>>> b93ef594b4 (.)
=======
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
    public ?string $super_admin = null;

    public string $video_player = 'html5';

    private static ?self $instance = null;

    private ?ProfileContract $profile = null;

    public static function make(): self
    {
        if (! self::$instance) {
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
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
            $data = TenantService::getConfig('xra');

            self::$instance = self::from($data);
        }

        return self::$instance;
    }

    public function isSuperAdmin(): bool
    {
        $profile = $this->getProfileModel();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
        Assert::classExists($class, '['.$class.'] check config auth');
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        Assert::classExists($class, '[' . $class . '] check config auth');
>>>>>>> d2b0a27 (.)
        Assert::implementsInterface(
            $class,
            UserContract::class,
            'class '.$class.' not implements UserContract['.__LINE__.']['.class_basename($this).']',
        );
<<<<<<< HEAD
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
        Assert::classExists($class, '[' . $class . '] check config auth');
        Assert::implementsInterface(
            $class,
            UserContract::class,
            'class ' . $class . ' not implements UserContract[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
        Assert::classExists($class, '['.$class.'] check config auth');
        Assert::implementsInterface($class, UserContract::class, 'class '.$class.' not implements UserContract['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)

        return $class;
    }

    public function getUserByEmail(string $email): UserContract
    {
        $user_class = $this->getUserClass();
<<<<<<< HEAD
        $userInstance = new $user_class();
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".$userInstance::class);
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 9db27d12 (.)
        $userInstance = new $user_class();
        if (!in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model " . get_class($userInstance));
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $userInstance = new $user_class();
        if (!in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model " . get_class($userInstance));
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
         * if (! $user) {
         * throw new \Exception('user not found for email '.$email);
         * }
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
=======
=======
        Assert::implementsInterface($user, UserContract::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        Assert::implementsInterface($user, UserContract::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
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
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
=======
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new \Exception("Attribute 'email' not found in model ".get_class($userInstance));
>>>>>>> origin/develop
        }
<<<<<<< HEAD
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
        if (! $user) {
            throw new \Exception('user not found for email '.$email);
        }
            */
=======
        $user = $user_class::firstWhere(['email' => $email]);

        if (! $user) {
            throw new \Exception('user not found for email '.$email);
        }

>>>>>>> cc7fb225 (.)
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
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
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 17684f52 (.)
=======
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new \Exception("Attribute 'email' not found in model ".get_class($userInstance));
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
        if (! $user) {
            throw new \Exception('user not found for email '.$email);
        }
            */
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
>>>>>>> dc2130a7c (.)
=======
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
        // Assert::isInstanceOf($team_class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf(
            $this->team_class,
            Model::class,
            '['.__LINE__.']['.class_basename($this).']['.$this->team_class.']',
        );
        Assert::implementsInterface(
            $this->team_class,
            TeamContract::class,
            '['.$this->team_class.']['.__LINE__.']['.class_basename($this).']',
        );
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        Assert::classExists(
            $this->tenant_class,
            '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']',
        );
        // Assert::isInstanceOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        // Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface(
            $this->tenant_class,
            TenantContract::class,
            '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']',
        );
        Assert::isAOf(
            $this->tenant_class,
            Model::class,
            '['.__LINE__.']['.class_basename($this).']['.$this->tenant_class.']',
        );
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> ca9324a4 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 9db27d12 (.)
=======
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)

        return $class;
    }

    public function getTenantPivotClass(): string
    {
<<<<<<< HEAD
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> ca9324a4 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 9db27d12 (.)
=======
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)

        return $this->tenant_pivot_class;
    }

    public function getMembershipClass(): string
    {
<<<<<<< HEAD
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> ca9324a4 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 9db27d12 (.)
=======
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 48515e368 (.)
        $class = 'Modules\\'.$this->main_module.'\Models\Profile';

        // Verifica che la classe esista
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');

        // Verifica che sia un Model e implementi ProfileContract
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
<<<<<<< HEAD
        Assert::implementsInterface(
            $class,
            ProfileContract::class,
            '['.__LINE__.']['.class_basename($this).']['.$class.']',
        );
=======
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
=======
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> ca9324a4 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
=======
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 9db27d12 (.)
=======
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
=======
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> b93ef594b4 (.)
=======
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new \Exception('add user_id to fillable on class '.$profileClass);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> ca9324a4 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
        }

        /** @var ProfileContract */
        $res = $profile->firstOrCreate(['user_id' => $user_id]);
        Assert::implementsInterface($res, ProfileContract::class);

        return $res;
    }

    public function getProfileByEmail(string $email): ProfileContract
    {
        $user = $this->getUserByEmail($email);

        return $this->getProfileModelByUserId((string) $user->id);
    }

    /**
     * Verifica se l'utente autenticato è un super amministratore.
     */
    public function iAmSuperAdmin(): bool
    {
        $user = Auth::user();
        if ($user === null) {
            return false;
        }

<<<<<<< HEAD
        if (! method_exists($user, 'hasRole')) {
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
        if (! method_exists($user, 'hasRole')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
        if (!method_exists($user, 'hasRole')) {
=======
        if (! method_exists($user, 'hasRole')) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> ca9324a4 (.)
=======
        if (!method_exists($user, 'hasRole')) {
=======
        if (! method_exists($user, 'hasRole')) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 9db27d12 (.)
=======
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
        $this->profile = $this->getProfileModelByUserId((string) $user_id);
=======
        $this->profile = $this->getProfileModelByUserId($user_id);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
        Assert::implementsInterface(
            $this->profile,
            ProfileContract::class,
            '['.__LINE__.']['.class_basename($this).']',
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        Assert::implementsInterface($this->profile, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dc2130a7c (.)
=======
>>>>>>> 48515e368 (.)
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);

        try {
            return realpath($path0);
        } catch (Exception $e) {
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
<<<<<<< HEAD
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
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
=======
=======
>>>>>>> ab8cc3f3 (.)
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
>>>>>>> cc7fb225 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
=======
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
>>>>>>> f1d4085 (.)
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
        try {
            $path = realpath($path0);

            return $path;
        } catch (Exception $e) {
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
>>>>>>> f1d4085 (.)
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
<<<<<<< HEAD
>>>>>>> dc2130a7c (.)
=======
=======
>>>>>>> f1d4085 (.)
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
        }
    }

    public function getPubThemePublicPath(string $key = ''): string
    {
<<<<<<< HEAD
        return public_path('themes/'.$this->pub_theme.'/'.$key);
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
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
=======
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
=======
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);
>>>>>>> f1d4085 (.)
=======
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
        return $path;
>>>>>>> 5a14301c (.)
=======
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        return $path;
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
    }

    public function getPubThemePublicAsset(string $key = ''): string
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
>>>>>>> 48515e368 (.)
        return asset('themes/'.$this->pub_theme.'/'.$key);
    }


    public function getMailHtmlLayoutPath(string $key = ''): string
    {
<<<<<<< HEAD
        return base_path('Themes/'.$this->pub_theme.'/resources/mail-layouts/'.$key);
=======
<<<<<<< HEAD
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/mail-layouts/'.$key);
        return  $path0;
>>>>>>> 8ab8fd81a (.)
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
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
=======
        $path = asset('themes/'.$this->pub_theme.'/'.$key);

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
=======
        $path = asset('themes/'.$this->pub_theme.'/'.$key);
>>>>>>> f1d4085 (.)
=======
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
        return $path;
>>>>>>> 5a14301c (.)
=======
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        return $path;
>>>>>>> 5a14301c (.)
>>>>>>> 48515e368 (.)
    }

    /**
     * @return class-string<Model&UserContract>
     */
    public function getUserClassByType(string $type): string
    {
        $user_class = $this->getUserClass();
        $userInstance = app($user_class);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 48515e368 (.)

        if (! is_object($userInstance) || ! method_exists($userInstance, 'getChildTypes')) {
            throw new Exception('getChildTypes method not found in class '.$user_class);
=======
        if (is_object($userInstance) && method_exists($userInstance, 'getChildTypes')) {
            $types = $userInstance->getChildTypes();
            if (is_array($types)) {
                $class = Arr::get($types, $type);
            } else {
                throw new Exception('getChildTypes() did not return an array in class '.$user_class);
            }
        } else {
            throw new Exception('getChildTypes() method not found in class '.$user_class);
>>>>>>> ab8cc3f3 (.)
        }

        $types = $userInstance->getChildTypes();
        if (! is_array($types) && ! ($types instanceof ArrayAccess)) {
            throw new Exception('getChildTypes must return array or ArrayAccess');
        }
        $class = Arr::get($types, $type);
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
        );
=======
        Assert::implementsInterface($class, UserContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
        if (! class_exists($resourceClass)) {
            $resourceClass =
                'Modules\\'.$moduleName.'\\app\\Filament\\Resources\\'.class_basename($class).'Resource';
        }

        if (! class_exists($resourceClass)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> ab8cc3f3 (.)
        if (!class_exists($resourceClass)) {
            $resourceClass =
                'Modules\\' . $moduleName . '\\app\\Filament\\Resources\\' . class_basename($class) . 'Resource';
        }

        if (!class_exists($resourceClass)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ab8cc3f3 (.)
=======
        if (! class_exists($resourceClass)) {
            $resourceClass = 'Modules\\'.$moduleName.'\\app\\Filament\\Resources\\'.
                          class_basename($class).'Resource';
        }

        if (! class_exists($resourceClass)) {
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
            throw new RuntimeException("Resource class not found for type: {$type}. Tried: {$resourceClass}");
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
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
        if (! enum_exists($enum_class)) {
            return [];
        }

        return $enum_class::cases();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        return $enum_class::cases();

<<<<<<< HEAD
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
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        return $enum_class::cases();

>>>>>>> 5a14301c (.)
=======
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
=======
        return $enum_class::cases();
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
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
<<<<<<< HEAD
>>>>>>> 48515e368 (.)

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
=======
        // $enum_class = Arr::get($user_class::casts(),'type',null);
        $enum_class = Arr::get($user_instance->getCasts(), 'type', null);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
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
>>>>>>> 48515e368 (.)
        if ($enum_class === null) {
            $enum_class = Str::of($user_class)
                ->replace('\\Models\\', '\\Enums\\')
                ->append('TypeEnum')
                ->toString();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        if ($enum_class == null) {
            $enum_class = Str::of($user_class)->replace('\\Models\\', '\\Enums\\')->append('TypeEnum')->toString();
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        }
        Assert::stringNotEmpty($enum_class, 'enum_class is empty');

        return $enum_class;
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
        // $userInstance = app($user_class);
        // return $userInstance->getChildTypes();
    }

    /**
     * Get the project namespace dynamically.
     */
    public function getProjectNamespace(): string
    {
        return 'Modules\\'.$this->main_module;
    }

    public function forceSSL(): bool
    {
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
        if (!$this->force_ssl) {
>>>>>>> 5a14301c (.)
=======
        if (!$this->force_ssl) {
>>>>>>> 5a14301c (.)
=======
        if (! $this->force_ssl) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        if (!$this->force_ssl) {
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 48515e368 (.)
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === 'localhost') {
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === '127.0.0.1') {
<<<<<<< HEAD
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
