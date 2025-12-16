<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 091f883c (.)
>>>>>>> 38b70c7ba (.)
use Modules\Xot\Models\XotBaseModel;

<<<<<<< HEAD
describe('XotBaseModel Business Logic', function () {
    test('xot base model extends eloquent model', function () {
<<<<<<< HEAD
        expect(XotBaseModel::class)->toBeSubclassOf(Model::class);
    });

    test('xot base model can be instantiated', function () {
        $model = new XotBaseModel;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
describe('XotBaseModel Business Logic', function (): void {
    test('xot base model extends eloquent model', function (): void {
        /* @phpstan-ignore-next-line method.notFound */
>>>>>>> 5cf46378 (.)
        expect(XotBaseModel::class)->toBeSubclassOf(Model::class);
=======
<<<<<<< HEAD
        expect(XotBaseModel::class)->toBeSubclassOf(Model::class);
=======
        expect(XotBaseModel::class)->toBeSubclassOf(\Illuminate\Database\Eloquent\Model::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
        expect(XotBaseModel::class)->toBeSubclassOf(Model::class);
>>>>>>> 091f883c (.)
    });

<<<<<<< HEAD
    test('xot base model can be instantiated', function () {
<<<<<<< HEAD
<<<<<<< HEAD
    test('xot base model can be instantiated', function (): void {
        /* @phpstan-ignore-next-line new.abstract */
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53d6a6ba (.)
=======
=======
    test('xot base model can be instantiated', function (): void {
        /* @phpstan-ignore-next-line new.abstract */
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
        $model = new XotBaseModel;
        $model = new XotBaseModel();
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
        $model = new XotBaseModel();
        $model = new XotBaseModel();
<<<<<<< HEAD
        $model = new XotBaseModel();
        $model = new XotBaseModel();
        $model = new XotBaseModel();
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
=======
        $model = new XotBaseModel();
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
=======
        $model = new XotBaseModel;
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

        expect($model)->toBeInstanceOf(XotBaseModel::class);
        expect($model)->toBeInstanceOf(Model::class);
    });

    test('xot base model provides foundation for other models', function (): void {
        expect(class_exists(XotBaseModel::class))->toBeTrue();
    });
<<<<<<< HEAD
});
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
});
=======
<<<<<<< HEAD
});
=======
});
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
});
>>>>>>> 091f883c (.)
>>>>>>> 38b70c7ba (.)
