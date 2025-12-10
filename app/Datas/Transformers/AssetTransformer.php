<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
declare(strict_types=1);
>>>>>>> 2f3197ab (.)


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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 2f3197ab (.)


declare(strict_types=1);




declare(strict_types=1);




declare(strict_types=1);



<<<<<<< HEAD

=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
namespace Modules\Xot\Datas\Transformers;

use Modules\Xot\Actions\File\AssetAction;
use Spatie\LaravelData\Support\DataProperty;
<<<<<<< HEAD
use Spatie\LaravelData\Support\Transformation\TransformationContext;
use Spatie\LaravelData\Transformers\Transformer;
<<<<<<< HEAD
use Spatie\LaravelData\Transformers\Transformer;
use Spatie\LaravelData\Support\Transformation\TransformationContext;
=======
=======
use Spatie\LaravelData\Transformers\Transformer;
use Spatie\LaravelData\Support\Transformation\TransformationContext;
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
     * @param  DataProperty  $_property  La proprietà di dati (non utilizzata)
     * @param  mixed  $value  Il valore da trasformare (es. "user::image.png")
     * @param  TransformationContext  $_context  Il contesto di trasformazione (non utilizzato)
     * @return string Il percorso completo (es. "/modules/user/resources/image.png")
     */
    public function transform(DataProperty $_property, mixed $value, TransformationContext $_context): string
    {
        if (! is_string($value) || empty($value)) {
            return '';
        }

<<<<<<< HEAD
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
     * @param DataProperty $_property La proprietà di dati (non utilizzata)
     * @param mixed $value Il valore da trasformare (es. "user::image.png")
     * @param TransformationContext $_context Il contesto di trasformazione (non utilizzato)
     * @return string Il percorso completo (es. "/modules/user/resources/image.png")
     */
    public function transform(DataProperty $_property, $value, TransformationContext $_context): string
    {
<<<<<<< HEAD
     * @param mixed $value Il valore da trasformare (es. "user::image.png")
     * @param TransformationContext $_context Il contesto di trasformazione (non utilizzato)
=======
=======
     * @param DataProperty $property La proprietà di dati
     * @param mixed $value Il valore da trasformare (es. "user::image.png")
     * @param TransformationContext $context Il contesto di trasformazione
>>>>>>> 2f3197ab (.)
     * @return string Il percorso completo (es. "/modules/user/resources/image.png")
     */
    public function transform(
        DataProperty $property,
        $value,
        TransformationContext $context
    ):string {
<<<<<<< HEAD
    public function transform(DataProperty $_property, $value, TransformationContext $_context): string
    {
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        if (!is_string($value) || empty($value)) {
            return '';
        }
        return app(AssetAction::class)->execute($value);
    }
<<<<<<< HEAD


=======
<<<<<<< HEAD
=======


>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
}
