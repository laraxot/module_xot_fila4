<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Modules\Xot\Models\XotBaseModel;

describe('XotBaseModel Business Logic', function () {
    test('xot base model extends eloquent model', function () {
<<<<<<< HEAD
        expect(XotBaseModel::class)->toBeSubclassOf(Model::class);
=======
<<<<<<< HEAD
        expect(XotBaseModel::class)->toBeSubclassOf(Model::class);
=======
        expect(XotBaseModel::class)->toBeSubclassOf(\Illuminate\Database\Eloquent\Model::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });

    test('xot base model can be instantiated', function () {
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
>>>>>>> 53d6a6ba (.)
=======
=======
    test('xot base model can be instantiated', function (): void {
        /* @phpstan-ignore-next-line new.abstract */
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 249a0067 (.)
        $model = new XotBaseModel;
=======
        $model = new XotBaseModel();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        $model = new XotBaseModel();
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
=======
        $model = new XotBaseModel();
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)

        expect($model)->toBeInstanceOf(XotBaseModel::class);
        expect($model)->toBeInstanceOf(Model::class);
=======
<<<<<<< HEAD

        expect($model)->toBeInstanceOf(XotBaseModel::class);
        expect($model)->toBeInstanceOf(Model::class);
=======
        
        expect($model)->toBeInstanceOf(XotBaseModel::class);
        expect($model)->toBeInstanceOf(\Illuminate\Database\Eloquent\Model::class);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    });

    test('xot base model provides foundation for other models', function () {
        expect(class_exists(XotBaseModel::class))->toBeTrue();
    });
<<<<<<< HEAD
});
=======
<<<<<<< HEAD
});
=======
});
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
