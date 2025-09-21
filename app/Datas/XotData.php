<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

<<<<<<< HEAD
use Exception;
use Illuminate\Support\Facades\Auth;
use RuntimeException;
=======
<<<<<<< HEAD
use Exception;
use Illuminate\Support\Facades\Auth;
use RuntimeException;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Livewire\Wireable;
use Modules\Tenant\Services\TenantService;
use Modules\User\Contracts\TeamContract;
use Modules\User\Contracts\TenantContract;
use Modules\User\Models\Membership;
use Modules\User\Models\Team;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\UserContract;
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
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
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
>>>>>>> 6cba4fe (.)
    public null|string $super_admin = null;

    public string $video_player = 'html5';

    private static null|self $instance = null;

    private null|ProfileContract $profile = null;

    public static function make(): self
    {
        if (!self::$instance) {
<<<<<<< HEAD
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
    public ?string $super_admin = null;

    public string $video_player = 'html5';

    private static ?self $instance = null;

    private ?ProfileContract $profile = null;

    public static function make(): self
    {
        if (! self::$instance) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        Assert::classExists($class, '[' . $class . '] check config auth');
        Assert::implementsInterface(
            $class,
            UserContract::class,
            'class ' . $class . ' not implements UserContract[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        Assert::classExists($class, '['.$class.'] check config auth');
        Assert::implementsInterface($class, UserContract::class, 'class '.$class.' not implements UserContract['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        Assert::classExists($class, '['.$class.'] check config auth');
        Assert::implementsInterface($class, UserContract::class, 'class '.$class.' not implements UserContract['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        return $class;
    }

    public function getUserByEmail(string $email): UserContract
    {
        $user_class = $this->getUserClass();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
=======
=======
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
=======
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new \Exception("Attribute 'email' not found in model ".get_class($userInstance));
>>>>>>> origin/develop
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
        if (! $user) {
            throw new \Exception('user not found for email '.$email);
        }
            */
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
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

        return $user;
    }

    /**
     * @return class-string<Model&TeamContract>
     */
    public function getTeamClass(): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        // Assert::isInstanceOf($team_class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf(
            $this->team_class,
            Model::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->team_class . ']',
        );
        Assert::implementsInterface(
            $this->team_class,
            TeamContract::class,
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
        );
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
        // Assert::isInstanceOf($team_class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($this->team_class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$this->team_class.']');
        Assert::implementsInterface($this->team_class, TeamContract::class, '['.$this->team_class.']['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        // Assert::isInstanceOf($team_class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf(
            $this->team_class,
            Model::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->team_class . ']',
        );
        Assert::implementsInterface(
            $this->team_class,
            TeamContract::class,
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
        );
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        Assert::classExists(
            $this->tenant_class,
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        // Assert::isInstanceOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        // Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface(
            $this->tenant_class,
            TenantContract::class,
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
        );
        Assert::isAOf(
            $this->tenant_class,
            Model::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
        );
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        Assert::classExists($this->tenant_class, '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']');
        // Assert::isInstanceOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        // Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface($this->tenant_class, TenantContract::class, '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($this->tenant_class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$this->tenant_class.']');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        // Assert::isInstanceOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        // Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface(
            $this->tenant_class,
            TenantContract::class,
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
        );
        Assert::isAOf(
            $this->tenant_class,
            Model::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
        );
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
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

        return $class;
    }

    public function getTenantPivotClass(): string
    {
<<<<<<< HEAD
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
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

        return $this->tenant_pivot_class;
    }

    public function getMembershipClass(): string
    {
<<<<<<< HEAD
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
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
>>>>>>> 6cba4fe (.)
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
=======
        $class = 'Modules\\'.$this->main_module.'\Models\Profile';
=======
        $class = 'Modules\\' . $this->main_module . '\Models\Profile';
>>>>>>> b93ef594b4 (.)

        // Verifica che la classe esista
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');

        // Verifica che sia un Model e implementi ProfileContract
<<<<<<< HEAD
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> a12f125f4a (.)
=======
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
        Assert::implementsInterface(
            $class,
            ProfileContract::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']',
        );
>>>>>>> b93ef594b4 (.)
=======
        $class = 'Modules\\'.$this->main_module.'\Models\Profile';

        // Verifica che la classe esista
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');

        // Verifica che sia un Model e implementi ProfileContract
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        /** @var class-string<Model&ProfileContract> */
        return $class;
    }

    public function getHomeController(): string
    {
<<<<<<< HEAD
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
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
    }

    public function getProfileModelByUserId(string $user_id): ProfileContract
    {
        $profileClass = $this->getProfileClass();
        /** @var Model&ProfileContract $profile */
        $profile = app($profileClass);

        Assert::isInstanceOf($profile, Model::class);
        Assert::isArray($profile->getFillable(), 'getFillable() must return array');

<<<<<<< HEAD
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
=======
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
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
        }

        /** @var ProfileContract */
        $res = $profile->firstOrCreate(['user_id' => $user_id]);
        Assert::implementsInterface($res, ProfileContract::class);

        return $res;
    }

    public function getProfileByEmail(string $email): ProfileContract
    {
        $user = $this->getUserByEmail($email);
        $profile = $this->getProfileModelByUserId($user->id);

        return $profile;
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
        $user = Auth::user();
=======
        $user = \Illuminate\Support\Facades\Auth::user();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        if ($user === null) {
            return false;
        }

<<<<<<< HEAD
        if (!method_exists($user, 'hasRole')) {
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
        $this->profile = $this->getProfileModelByUserId($user_id);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        Assert::implementsInterface(
            $this->profile,
            ProfileContract::class,
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
<<<<<<< HEAD
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
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
=======
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
>>>>>>> a12f125f4a (.)
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
>>>>>>> b93ef594b4 (.)
=======
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        try {
            $path = realpath($path0);

            return $path;
<<<<<<< HEAD
        } catch (Exception $e) {
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
=======
<<<<<<< HEAD
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
=======
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        }
    }

    public function getPubThemePublicPath(string $key = ''): string
    {
<<<<<<< HEAD
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
=======
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);
>>>>>>> a12f125f4a (.)
=======
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        return $path;
    }

    public function getPubThemePublicAsset(string $key = ''): string
    {
<<<<<<< HEAD
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        return $path;
    }

=======
<<<<<<< HEAD
<<<<<<< HEAD
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
=======
        $path = asset('themes/'.$this->pub_theme.'/'.$key);
>>>>>>> a12f125f4a (.)
=======
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
>>>>>>> b93ef594b4 (.)
        return $path;
    }

=======
        } catch (\Exception $e) {
            throw new \Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
        }
    }

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    /**
     * @return class-string<Model&UserContract>
     */
    public function getUserClassByType(string $type): string
    {
        $user_class = $this->getUserClass();
        $userInstance = app($user_class);
        $types = $userInstance->getChildTypes();
        $class = Arr::get($types, $type);
        if (is_null($class)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
=======
            throw new Exception('type '.$type.' not found in class '.$user_class);
=======
            throw new \Exception('type '.$type.' not found in class '.$user_class);
>>>>>>> origin/develop
        }
        Assert::classExists($class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface($class, UserContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('type ' . $type . ' not found in class ' . $user_class);
        }
        Assert::classExists($class, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
        Assert::implementsInterface(
            $class,
            UserContract::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']',
        );
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

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
>>>>>>> 6cba4fe (.)
        if (!class_exists($resourceClass)) {
            $resourceClass =
                'Modules\\' . $moduleName . '\\app\\Filament\\Resources\\' . class_basename($class) . 'Resource';
        }

        if (!class_exists($resourceClass)) {
<<<<<<< HEAD
            throw new RuntimeException("Resource class not found for type: {$type}. Tried: {$resourceClass}");
=======
=======
=======
>>>>>>> origin/develop
        if (! class_exists($resourceClass)) {
            $resourceClass = 'Modules\\'.$moduleName.'\\app\\Filament\\Resources\\'.
                          class_basename($class).'Resource';
        }

        if (! class_exists($resourceClass)) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (!class_exists($resourceClass)) {
            $resourceClass =
                'Modules\\' . $moduleName . '\\app\\Filament\\Resources\\' . class_basename($class) . 'Resource';
        }

        if (!class_exists($resourceClass)) {
>>>>>>> b93ef594b4 (.)
            throw new RuntimeException("Resource class not found for type: {$type}. Tried: {$resourceClass}");
=======
            throw new \RuntimeException("Resource class not found for type: {$type}. Tried: {$resourceClass}");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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

        return $enum_class::cases();
<<<<<<< HEAD

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
        // $userInstance = app($user_class);
        // return $userInstance->getChildTypes();
    }

    public function getUserChildTypeClass(): string
    {
        $user_class = $this->getUserClass();
        $user_instance = app($user_class);
        // $enum_class = Arr::get($user_class::casts(),'type',null);
        $enum_class = Arr::get($user_instance->getCasts(), 'type', null);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        if ($enum_class == null) {
            $enum_class = Str::of($user_class)->replace('\\Models\\', '\\Enums\\')->append('TypeEnum')->toString();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }
        Assert::stringNotEmpty($enum_class, 'enum_class is empty');

        return $enum_class;
<<<<<<< HEAD

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
        // $userInstance = app($user_class);
        // return $userInstance->getChildTypes();
    }

    /**
     * Get the project namespace dynamically.
     */
    public function getProjectNamespace(): string
    {
        return 'Modules\\' . $this->main_module;
    }

    public function forceSSL(): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        if (!$this->force_ssl) {
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === 'localhost') {
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === '127.0.0.1') {
<<<<<<< HEAD
=======
=======
        if (! $this->force_ssl) {
=======
        if (!$this->force_ssl) {
>>>>>>> b93ef594b4 (.)
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === 'localhost') {
            return false;
        }
<<<<<<< HEAD
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == '127.0.0.1') {
>>>>>>> a12f125f4a (.)
=======
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === '127.0.0.1') {
>>>>>>> b93ef594b4 (.)
=======
        if (! $this->force_ssl) {
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'localhost') {
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == '127.0.0.1') {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
