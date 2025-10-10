<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\XotBaseModel;

describe('XotBaseModel Business Logic', function (): void {
    test('xot base model extends eloquent model', function (): void {
        expect(XotBaseModel::class)->toBeSubclassOf(Model::class);
    });

    test('xot base model can be instantiated', function (): void {
        $model = new XotBaseModel;

        expect($model)->toBeInstanceOf(XotBaseModel::class);
        expect($model)->toBeInstanceOf(Model::class);
    });

    test('xot base model provides foundation for other models', function (): void {
        expect(class_exists(XotBaseModel::class))->toBeTrue();
    });
});
