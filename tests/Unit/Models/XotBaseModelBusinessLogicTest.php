<?php

declare(strict_types=1);

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
use Modules\Xot\Models\XotBaseModel;

describe('XotBaseModel Business Logic', function () {
    test('xot base model extends eloquent model', function () {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
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

    test('xot base model can be instantiated', function () {
    test('xot base model can be instantiated', function (): void {
        /* @phpstan-ignore-next-line new.abstract */
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

        expect($model)->toBeInstanceOf(XotBaseModel::class);
        expect($model)->toBeInstanceOf(Model::class);
    });

    test('xot base model provides foundation for other models', function () {
        expect(class_exists(XotBaseModel::class))->toBeTrue();
    });
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
