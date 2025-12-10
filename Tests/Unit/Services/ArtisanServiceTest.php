<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Request;
use Modules\Xot\Services\ArtisanService;

test('artisan service act method returns empty string for unknown commands', function (): void {
    Request::shouldReceive('input')
        ->with('module', '')
        ->andReturn('');

    $result = ArtisanService::act('unknown-command');

    expect($result)->toBe('');
});

test('artisan service act method handles migrate command', function (): void {
    Request::shouldReceive('input')
        ->with('module', '')
        ->andReturn('');

    // Mock DB and Artisan facades
    \Illuminate\Support\Facades\DB::shouldReceive('purge')->once()->with('mysql');
    \Illuminate\Support\Facades\DB::shouldReceive('reconnect')->once()->with('mysql');
    \Illuminate\Support\Facades\Artisan::shouldReceive('call')->once()->andReturn(0);
    \Illuminate\Support\Facades\Artisan::shouldReceive('output')->once()->andReturn('Migration completed');

    $result = ArtisanService::act('migrate');

    expect($result)->toContain('Migration completed');
});

test('artisan service act method handles module parameter', function (): void {
    Request::shouldReceive('input')
        ->with('module', '')
        ->andReturn('TestModule');

    \Illuminate\Support\Facades\DB::shouldReceive('purge')->once()->with('mysql');
    \Illuminate\Support\Facades\DB::shouldReceive('reconnect')->once()->with('mysql');
    \Illuminate\Support\Facades\Artisan::shouldReceive('call')->once()->andReturn(0);
    \Illuminate\Support\Facades\Artisan::shouldReceive('output')->once()->andReturn('Module migration');

    ob_start();
    $result = ArtisanService::act('migrate');
    ob_end_clean();

    expect($result)->toContain('Module migration');
});

test('artisan service handles non-string module parameter', function (): void {
    Request::shouldReceive('input')
        ->with('module', '')
        ->andReturn(['not', 'a', 'string']);

    \Illuminate\Support\Facades\DB::shouldReceive('purge')->once()->with('mysql');
    \Illuminate\Support\Facades\DB::shouldReceive('reconnect')->once()->with('mysql');
    \Illuminate\Support\Facades\Artisan::shouldReceive('call')->once()->andReturn(0);
    \Illuminate\Support\Facades\Artisan::shouldReceive('output')->once()->andReturn('Migration');

    $result = ArtisanService::act('migrate');

    expect($result)->toContain('Migration');
});
