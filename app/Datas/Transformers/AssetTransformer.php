<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 285375c74 (.)
declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


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

>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> ab8cc3f3 (.)
=======
declare(strict_types=1);


>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
declare(strict_types=1);


>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)
namespace Modules\Xot\Datas\Transformers;

use Modules\Xot\Actions\File\AssetAction;
use Spatie\LaravelData\Support\DataProperty;
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\LaravelData\Support\Transformation\TransformationContext;
use Spatie\LaravelData\Transformers\Transformer;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\LaravelData\Support\Transformation\TransformationContext;
use Spatie\LaravelData\Transformers\Transformer;
=======
use Spatie\LaravelData\Transformers\Transformer;
use Spatie\LaravelData\Support\Transformation\TransformationContext;
>>>>>>> f1d4085 (.)
=======
use Spatie\LaravelData\Support\Transformation\TransformationContext;
use Spatie\LaravelData\Transformers\Transformer;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
use Spatie\LaravelData\Support\Transformation\TransformationContext;
use Spatie\LaravelData\Transformers\Transformer;
>>>>>>> 285375c74 (.)

/**
 * AssetTransformer - Trasforma riferimenti di file in percorsi completi per le risorse
 *
 * Formato input: "module::path/file.ext" o "file.ext"
 * Output: "/modules/module/resources/path/file.ext" o "/resources/path/file.ext"
 */
class AssetTransformer implements Transformer
{
    /**
     * Trasforma un riferimento di file in un percorso completo
     *
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
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
     * @param  DataProperty  $_property  La proprietà di dati (non utilizzata)
     * @param  mixed  $value  Il valore da trasformare (es. "user::image.png")
     * @param  TransformationContext  $_context  Il contesto di trasformazione (non utilizzato)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
     * @param DataProperty $_property La proprietà di dati (non utilizzata)
     * @param mixed $value Il valore da trasformare (es. "user::image.png")
     * @param TransformationContext $_context Il contesto di trasformazione (non utilizzato)
>>>>>>> d2b0a27 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
     * @param  DataProperty  $_property  La proprietà di dati (non utilizzata)
     * @param  mixed  $value  Il valore da trasformare (es. "user::image.png")
     * @param  TransformationContext  $_context  Il contesto di trasformazione (non utilizzato)
>>>>>>> 285375c74 (.)
     * @return string Il percorso completo (es. "/modules/user/resources/image.png")
     */
    public function transform(DataProperty $_property, mixed $value, TransformationContext $_context): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($value) || empty($value)) {
=======
<<<<<<< HEAD
=======
     * @param DataProperty $property La proprietà di dati
     * @param mixed $value Il valore da trasformare (es. "user::image.png")
     * @param TransformationContext $context Il contesto di trasformazione
     * @return string Il percorso completo (es. "/modules/user/resources/image.png")
     */
    public function transform(
        DataProperty $property,
        $value,
        TransformationContext $context
    ):string {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        if (!is_string($value) || empty($value)) {
>>>>>>> d2b0a27 (.)
=======
        if (! is_string($value) || empty($value)) {
>>>>>>> 285375c74 (.)
            return '';
        }

        return app(AssetAction::class)->execute($value);
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======


>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
}
