<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
=======

=======
>>>>>>> f1d4085 (.)
=======
declare(strict_types=1);


>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
declare(strict_types=1);


>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
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
>>>>>>> 300ef70 (.)

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
     * @param  DataProperty  $_property  La proprietà di dati (non utilizzata)
     * @param  mixed  $value  Il valore da trasformare (es. "user::image.png")
     * @param  TransformationContext  $_context  Il contesto di trasformazione (non utilizzato)
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  DataProperty  $_property  La proprietà di dati (non utilizzata)
     * @param  mixed  $value  Il valore da trasformare (es. "user::image.png")
     * @param  TransformationContext  $_context  Il contesto di trasformazione (non utilizzato)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
     * @param DataProperty $_property La proprietà di dati (non utilizzata)
     * @param mixed $value Il valore da trasformare (es. "user::image.png")
     * @param TransformationContext $_context Il contesto di trasformazione (non utilizzato)
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
     * @return string Il percorso completo (es. "/modules/user/resources/image.png")
     */
    public function transform(DataProperty $_property, $value, TransformationContext $_context): string
    {
<<<<<<< HEAD
        if (! is_string($value) || empty($value)) {
=======
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
=======
>>>>>>> 300ef70 (.)
        if (!is_string($value) || empty($value)) {
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
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
>>>>>>> 300ef70 (.)
}
