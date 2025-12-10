<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use ArrayAccess;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
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
=======
>>>>>>> 9db27d12 (.)
use Exception;
use Illuminate\Support\Facades\Auth;
use RuntimeException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Illuminate\Support\Str;
use Livewire\Wireable;
use Modules\Tenant\Services\TenantService;
use Modules\User\Contracts\TeamContract;
use Modules\User\Contracts\TenantContract;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\UserContract;
use RuntimeException;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use Modules\User\Models\Membership;
use Modules\User\Models\Team;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Contracts\UserContract;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6dcebf8a (.)
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
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
<<<<<<< HEAD
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
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 5a14301c (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
=======
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
=======
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 5a14301c (.)
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
=======
    public ?string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> f1d4085 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
    public null|string $adm_theme = ''; // ' => 'AdminLTE',
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> b7afadf9 (.)
    public ?string $super_admin = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
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
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 71586de2 (.)
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
=======
>>>>>>> 71586de2 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
        Assert::classExists($class, '['.$class.'] check config auth');
        Assert::implementsInterface(
            $class,
            UserContract::class,
            'class '.$class.' not implements UserContract['.__LINE__.']['.class_basename($this).']',
        );
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
=======
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
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
=======
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 71586de2 (.)
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
=======
>>>>>>> 71586de2 (.)

        return $class;
    }

    public function getUserByEmail(string $email): UserContract
    {
        $user_class = $this->getUserClass();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 9db27d12 (.)
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
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> b7afadf9 (.)
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 300ef70 (.)
        $userInstance = new $user_class();
        if (!in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model " . get_class($userInstance));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
>>>>>>> 71586de2 (.)
=======
        $userInstance = new $user_class();
        if (!in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model " . get_class($userInstance));
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
>>>>>>> 71586de2 (.)
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
         * if (! $user) {
         * throw new \Exception('user not found for email '.$email);
         * }
         */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> b7afadf9 (.)
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
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
>>>>>>> 5a14301c (.)
=======
        Assert::implementsInterface($user, UserContract::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3fbbf1f5 (.)
=======
<<<<<<< HEAD
=======
=======
=======
=======
>>>>>>> ab8cc3f3 (.)
        Assert::implementsInterface($user, UserContract::class, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
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
=======
=======
>>>>>>> d2b0a27 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> b7afadf9 (.)
        $user = $user_class::firstWhere(['email' => $email]);

        if (! $user) {
            throw new \Exception('user not found for email '.$email);
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
=======
=======
>>>>>>> 249a0067 (.)
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
         * if (! $user) {
         * throw new \Exception('user not found for email '.$email);
         * }
         */
<<<<<<< HEAD
>>>>>>> 249a0067 (.)
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> 249a0067 (.)
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
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
=======
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
>>>>>>> 53d6a6ba (.)
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
         * if (! $user) {
         * throw new \Exception('user not found for email '.$email);
         * }
         */
<<<<<<< HEAD
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
>>>>>>> 6dcebf8a (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
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
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
        $userInstance = new $user_class();
        if (!in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model " . get_class($userInstance));
=======
        $userInstance = new $user_class;
        if (! in_array('email', $userInstance->getFillable(), true)) {
            throw new Exception("Attribute 'email' not found in model ".get_class($userInstance));
>>>>>>> 53d6a6ba (.)
        }
        $user = $user_class::firstOrCreate(['email' => $email]);
        /*
         * if (! $user) {
         * throw new \Exception('user not found for email '.$email);
         * }
         */
<<<<<<< HEAD
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
>>>>>>> 6dcebf8a (.)
=======
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 71586de2 (.)
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
=======
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
=======
        Assert::implementsInterface($user, UserContract::class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 71586de2 (.)

        return $user;
    }

    /**
     * @return class-string<Model&TeamContract>
     */
    public function getTeamClass(): string
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
=======
=======
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 300ef70 (.)
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 71586de2 (.)
=======
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($this->team_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($this->team_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 71586de2 (.)
        // Assert::isInstanceOf($team_class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf(
            $this->team_class,
            Model::class,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename($this).']['.$this->team_class.']',
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->team_class . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->team_class . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->team_class . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->team_class . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->team_class . ']',
>>>>>>> 5a14301c (.)
        );
        Assert::implementsInterface(
            $this->team_class,
            TeamContract::class,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '['.$this->team_class.']['.__LINE__.']['.class_basename($this).']',
=======
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 3fbbf1f5 (.)
=======
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . $this->team_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
        );

        return $this->team_class;
    }

    /**
     * Undocumented function.
     *
     * @return class-string<Model&TenantContract>
     */
    public function getTenantClass(): string
    {
        Assert::classExists(
            $this->tenant_class,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']',
=======
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
        );
        // Assert::isInstanceOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']');
        // Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface(
            $this->tenant_class,
            TenantContract::class,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '['.$this->tenant_class.']['.__LINE__.']['.class_basename($this).']',
=======
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . $this->tenant_class . '][' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 5a14301c (.)
        );
        Assert::isAOf(
            $this->tenant_class,
            Model::class,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename($this).']['.$this->tenant_class.']',
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
>>>>>>> 3fbbf1f5 (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
>>>>>>> 5a14301c (.)
=======
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $this->tenant_class . ']',
>>>>>>> 5a14301c (.)
        );

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 399f46d3 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
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
>>>>>>> b7afadf9 (.)
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> 71586de2 (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
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
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');
>>>>>>> 71586de2 (.)

        return $class;
    }

    public function getTenantPivotClass(): string
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 399f46d3 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
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
>>>>>>> b7afadf9 (.)
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 71586de2 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($this->tenant_pivot_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
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
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($this->tenant_pivot_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 71586de2 (.)

        return $this->tenant_pivot_class;
    }

    public function getMembershipClass(): string
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 399f46d3 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
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
>>>>>>> b7afadf9 (.)
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 71586de2 (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
        Assert::classExists($this->membership_class, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
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
>>>>>>> b7afadf9 (.)
=======
        Assert::classExists($this->membership_class, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 71586de2 (.)

        return $this->membership_class;
    }

    /**
     * @return class-string<Model&ProfileContract>
     */
    public function getProfileClass(): string
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 300ef70 (.)
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
=======
>>>>>>> 17684f52 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        $class = 'Modules\\'.$this->main_module.'\Models\Profile';

        // Verifica che la classe esista
        Assert::classExists($class, '['.$class.']['.__LINE__.']['.class_basename($this).']');

        // Verifica che sia un Model e implementi ProfileContract
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 53d6a6ba (.)
        Assert::implementsInterface(
            $class,
            ProfileContract::class,
            '['.__LINE__.']['.class_basename($this).']['.$class.']',
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
        $class = 'Modules\\' . $this->main_module . '\Models\Profile';

        // Verifica che la classe esista
        Assert::classExists($class, '[' . $class . '][' . __LINE__ . '][' . class_basename($this) . ']');

        // Verifica che sia un Model e implementi ProfileContract
        Assert::isAOf($class, Model::class, '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']');
        Assert::implementsInterface(
            $class,
            ProfileContract::class,
            '[' . __LINE__ . '][' . class_basename($this) . '][' . $class . ']',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
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
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
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
>>>>>>> b7afadf9 (.)
=======
        Assert::implementsInterface($class, ProfileContract::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
=======
>>>>>>> 71586de2 (.)

        /** @var class-string<Model&ProfileContract> */
        return $class;
    }

    public function getHomeController(): string
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 399f46d3 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
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
>>>>>>> b7afadf9 (.)
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 5a14301c (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
=======
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
=======
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
>>>>>>> f1d4085 (.)
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b7afadf9 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
>>>>>>> 71586de2 (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
>>>>>>> 5a14301c (.)
=======
        return 'Modules\\' . $this->main_module . '\Http\Controllers\HomeController';
=======
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
>>>>>>> f1d4085 (.)
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
>>>>>>> b7afadf9 (.)
=======
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
>>>>>>> 71586de2 (.)
    }

    public function getProfileModelByUserId(string $user_id): ProfileContract
    {
        $profileClass = $this->getProfileClass();
        /** @var Model&ProfileContract $profile */
        $profile = app($profileClass);

        Assert::isInstanceOf($profile, Model::class);
        Assert::isArray($profile->getFillable(), 'getFillable() must return array');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 399f46d3 (.)
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
=======
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> ed734516 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> ed734516 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 7131bd09 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> ed734516 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
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
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
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
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
>>>>>>> 71586de2 (.)
=======
        if (!in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class ' . $profileClass);
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
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
=======
>>>>>>> 6dcebf8a (.)
=======
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        if (! in_array('user_id', $profile->getFillable(), true)) {
            throw new Exception('add user_id to fillable on class '.$profileClass);
>>>>>>> 71586de2 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        return $this->getProfileModelByUserId((string) $user->id);
=======
        $profile = $this->getProfileModelByUserId($user->id);

        return $profile;
>>>>>>> 5a14301c (.)
=======
        $profile = $this->getProfileModelByUserId($user->id);

        return $profile;
>>>>>>> 5a14301c (.)
=======
        $profile = $this->getProfileModelByUserId($user->id);

        return $profile;
>>>>>>> 5a14301c (.)
=======
        $profile = $this->getProfileModelByUserId($user->id);

        return $profile;
>>>>>>> 5a14301c (.)
=======
        $profile = $this->getProfileModelByUserId($user->id);

        return $profile;
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 399f46d3 (.)
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
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
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
>>>>>>> b7afadf9 (.)
        if (! method_exists($user, 'hasRole')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 5a14301c (.)
=======
        if (!method_exists($user, 'hasRole')) {
=======
        if (! method_exists($user, 'hasRole')) {
>>>>>>> f1d4085 (.)
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
>>>>>>> 5a14301c (.)
=======
        if (!method_exists($user, 'hasRole')) {
=======
        if (! method_exists($user, 'hasRole')) {
>>>>>>> f1d4085 (.)
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b7afadf9 (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        if (! method_exists($user, 'hasRole')) {
>>>>>>> 71586de2 (.)
=======
        if (!method_exists($user, 'hasRole')) {
>>>>>>> 5a14301c (.)
=======
        if (!method_exists($user, 'hasRole')) {
=======
        if (! method_exists($user, 'hasRole')) {
>>>>>>> f1d4085 (.)
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
>>>>>>> b7afadf9 (.)
=======
        if (! method_exists($user, 'hasRole')) {
>>>>>>> 71586de2 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 71586de2 (.)
=======
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
=======
>>>>>>> 71586de2 (.)
        Assert::implementsInterface(
            $this->profile,
            ProfileContract::class,
            '['.__LINE__.']['.class_basename($this).']',
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        $this->profile = $this->getProfileModelByUserId($user_id);
        Assert::implementsInterface(
            $this->profile,
            ProfileContract::class,
            '[' . __LINE__ . '][' . class_basename($this) . ']',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        );

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
<<<<<<< HEAD
        // dddx('wip'); // Removed debug call
=======
        dddx('wip');
>>>>>>> 5a14301c (.)
    }

    public function getPubThemeViewPath(string $key = ''): string
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);

        try {
            return realpath($path0);
        } catch (Exception $e) {
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
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
=======
>>>>>>> 6dcebf8a (.)
=======
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cc7fb225 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
=======
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
>>>>>>> f1d4085 (.)
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
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
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
>>>>>>> 71586de2 (.)
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
>>>>>>> 5a14301c (.)
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
=======
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
>>>>>>> 3fbbf1f5 (.)
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
=======
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
=======
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
>>>>>>> ca9324a4 (.)
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
=======
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $path0 = base_path('Themes/' . $this->pub_theme . '/resources/views/' . $key);
>>>>>>> 9db27d12 (.)
=======
>>>>>>> cc7fb225 (.)
=======
>>>>>>> d2b0a27 (.)
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
>>>>>>> b7afadf9 (.)
=======
        $path0 = base_path('Themes/'.$this->pub_theme.'/resources/views/'.$key);
>>>>>>> 71586de2 (.)
        try {
            $path = realpath($path0);

            return $path;
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
=======
>>>>>>> 6dcebf8a (.)
<<<<<<< HEAD
            // Return empty string if realpath fails to prevent Folio errors
            return '';
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
        } catch (Exception $e) {
>>>>>>> 399f46d3 (.)
=======
=======
<<<<<<< HEAD
        } catch (Exception $e) {
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
=======
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
>>>>>>> 5a14301c (.)
=======
=======
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
=======
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            // Return empty string if realpath fails to prevent Folio errors
            return '';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
            // Return empty string if realpath fails to prevent Folio errors
            return '';
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
=======
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b7afadf9 (.)
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
>>>>>>> 71586de2 (.)
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
>>>>>>> 5a14301c (.)
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
=======
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
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
            throw new Exception('realpath not find dir[' . $path0 . ']' . PHP_EOL . '[' . $e->getMessage() . ']');
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
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
>>>>>>> b7afadf9 (.)
=======
            throw new Exception('realpath not find dir['.$path0.']'.PHP_EOL.'['.$e->getMessage().']');
>>>>>>> 71586de2 (.)
        }
    }

    public function getPubThemePublicPath(string $key = ''): string
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b7afadf9 (.)
=======
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

>>>>>>> 71586de2 (.)
=======
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
>>>>>>> b7afadf9 (.)
=======
        $path = base_path('themes/'.$this->pub_theme.'/'.$key);

>>>>>>> 71586de2 (.)
        return $path;
>>>>>>> 5a14301c (.)
=======
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
        return $path;
>>>>>>> 5a14301c (.)
=======
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        return $path;
>>>>>>> 5a14301c (.)
=======
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        return $path;
>>>>>>> 5a14301c (.)
=======
        $path = base_path('themes/' . $this->pub_theme . '/' . $key);
        return $path;
>>>>>>> 5a14301c (.)
    }

    public function getPubThemePublicAsset(string $key = ''): string
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
        $path = asset('themes/'.$this->pub_theme.'/'.$key);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
        $path = asset('themes/'.$this->pub_theme.'/'.$key);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $path = asset('themes/'.$this->pub_theme.'/'.$key);

>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        $path = asset('themes/'.$this->pub_theme.'/'.$key);

>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $path = asset('themes/'.$this->pub_theme.'/'.$key);

>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        $path = asset('themes/'.$this->pub_theme.'/'.$key);

>>>>>>> 71586de2 (.)
        return $path;
>>>>>>> 5a14301c (.)
=======
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
        return $path;
>>>>>>> 5a14301c (.)
=======
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        return $path;
>>>>>>> 5a14301c (.)
=======
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        return $path;
>>>>>>> 5a14301c (.)
=======
        $path = asset('themes/' . $this->pub_theme . '/' . $key);
        return $path;
>>>>>>> 5a14301c (.)
    }

    /**
     * @return class-string<Model&UserContract>
     */
    public function getUserClassByType(string $type): string
    {
        $user_class = $this->getUserClass();
        $userInstance = app($user_class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        if (! is_object($userInstance) || ! method_exists($userInstance, 'getChildTypes')) {
            throw new Exception('getChildTypes method not found in class '.$user_class);
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
>>>>>>> ab8cc3f3 (.)
        }

        $types = $userInstance->getChildTypes();
        if (! is_array($types) && ! ($types instanceof ArrayAccess)) {
            throw new Exception('getChildTypes must return array or ArrayAccess');
        }
        $class = Arr::get($types, $type);
=======
=======
>>>>>>> 249a0067 (.)

        if (! is_object($userInstance) || ! method_exists($userInstance, 'getChildTypes')) {
            throw new Exception('getChildTypes method not found in class '.$user_class);
        }

        $typesResult = $userInstance->getChildTypes();
        if (! is_array($typesResult) && ! ($typesResult instanceof \ArrayAccess)) {
            throw new Exception('getChildTypes must return array or ArrayAccess');
        }

        $class = Arr::get($typesResult, $type);
<<<<<<< HEAD
>>>>>>> 249a0067 (.)
=======
>>>>>>> 249a0067 (.)
        if (is_null($class)) {
=======
=======
>>>>>>> 53d6a6ba (.)
=======
        }
        if (is_null($class)) {
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        $types = $userInstance->getChildTypes();
        $class = Arr::get($types, $type);
        if (is_null($class)) {
=======
=======
>>>>>>> 53d6a6ba (.)
=======
        }
        if (is_null($class)) {
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        $types = $userInstance->getChildTypes();
        $class = Arr::get($types, $type);
        if (is_null($class)) {
            throw new Exception('type '.$type.' not found in class '.$user_class);
        }

        Assert::classExists($class, '['.__LINE__.']['.class_basename($this).']');
        Assert::isAOf($class, Model::class, '['.__LINE__.']['.class_basename($this).']['.$class.']');
        Assert::implementsInterface(
            $class,
            UserContract::class,
            '['.__LINE__.']['.class_basename($this).']['.$class.']',
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        );

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
        if (! class_exists($resourceClass)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
        if (! class_exists($resourceClass)) {
            $resourceClass =
                'Modules\\'.$moduleName.'\\app\\Filament\\Resources\\'.class_basename($class).'Resource';
        }

        if (! class_exists($resourceClass)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        if (! enum_exists($enum_class)) {
            return [];
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return $enum_class::cases();
<<<<<<< HEAD
=======
=======
>>>>>>> b7afadf9 (.)
        /** @var array<int, mixed> $cases */
        $cases = $enum_class::cases();

        return $cases;

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
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
=======
        return $enum_class::cases();
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)

<<<<<<< HEAD
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
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

>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        return $enum_class::cases();

>>>>>>> 5a14301c (.)
=======
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
=======
>>>>>>> b7afadf9 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
        return $enum_class::cases();

<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        return $enum_class::cases();

>>>>>>> 71586de2 (.)
=======
        return $enum_class::cases();

>>>>>>> 5a14301c (.)
=======
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
=======
        return $enum_class::cases();

>>>>>>> 71586de2 (.)
        // $userInstance = app($user_class);
        // return $userInstance->getChildTypes();
    }

    public function getUserChildTypeClass(): string
    {
        $user_class = $this->getUserClass();
        $user_instance = app($user_class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
        $enum_class = Arr::get($user_instance->getCasts(), 'type', null);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
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
        $enum_class = Arr::get($user_instance->getCasts(), 'type', null);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
        if ($enum_class === null) {
            $enum_class = Str::of($user_class)
                ->replace('\\Models\\', '\\Enums\\')
                ->append('TypeEnum')
                ->toString();
        }
        Assert::stringNotEmpty($enum_class, 'enum_class is empty');

        return $enum_class;

        // $userInstance = app($user_class);
        // return $userInstance->getChildTypes();
    }

    /**
     * Get the project namespace dynamically.
     */
    public function getProjectNamespace(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return 'Modules\\'.$this->main_module;
=======
        return 'Modules\\' . $this->main_module;
>>>>>>> 5a14301c (.)
=======
        return 'Modules\\' . $this->main_module;
>>>>>>> 5a14301c (.)
=======
        return 'Modules\\' . $this->main_module;
>>>>>>> 5a14301c (.)
=======
        return 'Modules\\' . $this->main_module;
>>>>>>> 5a14301c (.)
=======
        return 'Modules\\' . $this->main_module;
>>>>>>> 5a14301c (.)
    }

    public function forceSSL(): bool
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (!$this->force_ssl) {
>>>>>>> 5a14301c (.)
=======
        if (!$this->force_ssl) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
        if (! $this->force_ssl) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! $this->force_ssl) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! $this->force_ssl) {
=======
=======
        if (! $this->force_ssl) {
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 300ef70 (.)
        if (!$this->force_ssl) {
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
        if (! $this->force_ssl) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        if (! $this->force_ssl) {
>>>>>>> 71586de2 (.)
=======
        if (!$this->force_ssl) {
>>>>>>> 5a14301c (.)
=======
        if (!$this->force_ssl) {
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
=======
        if (! $this->force_ssl) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
        if (! $this->force_ssl) {
>>>>>>> 71586de2 (.)
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === 'localhost') {
            return false;
        }
        if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === '127.0.0.1') {
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
