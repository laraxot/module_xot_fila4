<?php

declare(strict_types=1);

use Modules\Xot\Models\XotBaseModel;

describe('XotBaseModel Business Logic', function () {
    test('xot base model extends eloquent model', function () {
    });

    test('xot base model can be instantiated', function () {
    test('xot base model can be instantiated', function (): void {
        /* @phpstan-ignore-next-line new.abstract */
        $model = new XotBaseModel;
        $model = new XotBaseModel();
        $model = new XotBaseModel();
        $model = new XotBaseModel();
        $model = new XotBaseModel();
        $model = new XotBaseModel();
        $model = new XotBaseModel();

        expect($model)->toBeInstanceOf(XotBaseModel::class);
        expect($model)->toBeInstanceOf(Model::class);
    });

    test('xot base model provides foundation for other models', function () {
        expect(class_exists(XotBaseModel::class))->toBeTrue();
    });
