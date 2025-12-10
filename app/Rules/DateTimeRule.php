<?php

declare(strict_types=1);

namespace Modules\Xot\Rules;

use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Carbon;
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
=======
>>>>>>> 2f3197ab (.)
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
use Webmozart\Assert\Assert;
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
use Webmozart\Assert\Assert;
=======
>>>>>>> f1d4085 (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)

/**
 * Class DateTimeRule.
 */
class DateTimeRule implements Rule
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute  The attribute name being validated
     * @param  mixed  $value  The value being validated
     */
    public function passes($attribute, $value): bool
    {
        // dddx($attribute); //published_at
        // dddx($value); //10/10/2019 13:43
        // return 5 === strlen($value);

        if (! is_string($value)) {
            return false;
        }

     * @param string $_attribute The attribute name being validated
     * @param mixed $value The value being validated
     */
    public function passes($_attribute, $value): bool
<<<<<<< HEAD
     *
     * @param string $_attribute The attribute name being validated
     * @param mixed $value The value being validated
     */
    public function passes($_attribute, $value): bool
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
     * Undocumented function.
     *
     * @param string $attribute
     * @param string $value
     */
    public function passes($attribute, $value): bool
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
    {
        // dddx($attribute); //published_at
        // dddx($value);//10/10/2019 13:43
        // return 5 === strlen($value);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        if (!is_string($value)) {
        if (! is_string($value)) {
        if (! is_string($value)) {
        if (!is_string($value)) {
        if (! is_string($value)) {
        if (! is_string($value)) {
        if (!is_string($value)) {
        if (!is_string($value)) {
        if (! is_string($value)) {
        if (! is_string($value)) {
        if (!is_string($value)) {
            return false;
        }

        Assert::string(
            $value,
            __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__) . ' - Value must be a string for datetime validation'
        );

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
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
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
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> f1d4085 (.)
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
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> f1d4085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
        $format = 'd/m/Y H:i';
        try {
            $value_new = Carbon::createFromFormat($format, $value);
        } catch (Exception) {
            return false;
        }

        /* -- non fa il suo dovere --
<<<<<<< HEAD
<<<<<<< HEAD
         * request()->replace([$attribute=>$value_new]);
         */
<<<<<<< HEAD
        request()->replace([$attribute=>$value_new]);
        */
=======
=======
        request()->replace([$attribute=>$value_new]);
        */
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
         * request()->replace([$attribute=>$value_new]);
         */
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)

        return true;
    }

    public function message(): string
    {
        return 'The :attribute is not a valid datetime';
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
        //    return trans('validation.only_uppercase');
    }
}

/*
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
 * class MyClassRequest extends FormRequest
 * {
 * ...
 * public function validationData() {
 * return array_merge(
 * $this->all(),
 * [
 * 'number' => preg_replace("/[^0-9]/", "", $this->number)
 * ]
 * );
 * }
 * ...
 * }
 *
 *
 * public function rules(Request $request)
 * {
 * if ($request->has('start_dt')){
 * $request->replace('start_dt', Carbon::createFromFormat('d M Y H:i:s', $request->start_dt . ' ' . $request->start_hr . ':'. $request->start_min . ':00'));
 * }
 *
 * if ($request->has('end_dt')){
 * $request->replace('end_dt' ,Carbon::createFromFormat('d M Y H:i:s', $request->end_dt . ' ' . $request->end_hr . ':'. $request->end_min . ':00'));
 * }
 *
 * return [
 * 'start_dt' => 'required|date|after:yesterday',
 * 'end_dt' => 'required|date|after:start_dt|before:' . Carbon::parse($request->start_dt)->addDays(30)
 * ];
 * }
 *
 *
 */

/*
 *
 * use Illuminate\Foundation\Http\FormRequest;
 *
 * class StorePostRequest extends FormRequest
 * {
 * public function rules()
 * {
 * return [
 * 'title' => 'required|max:200',
 * 'body' => 'required',
 * 'tags' => 'required|array|max:10',
 * 'is_published' => 'required|boolean',
 * 'author_name' => 'required',
 * ];
 * }
 *
 * protected function prepareForValidation()
 * {
 * $this->merge([
 * 'title' => fix_typos($this->title),
 * 'body' => filter_malicious_content($this->body),
 * 'tags' => convert_comma_separated_values_to_array($this->tags),
 * 'is_published' => (bool) $this->is_published,
 * ]);
 * }
 * }
 *
 *
 */
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
class MyClassRequest extends FormRequest
{
    ...
    public function validationData() {
        return array_merge(
            $this->all(),
            [
                'number' => preg_replace("/[^0-9]/", "", $this->number)
            ]
        );
    }
    ...
}


public function rules(Request $request)
{
    if ($request->has('start_dt')){
        $request->replace('start_dt', Carbon::createFromFormat('d M Y H:i:s', $request->start_dt . ' ' . $request->start_hr . ':'. $request->start_min . ':00'));
    }

    if ($request->has('end_dt')){
         $request->replace('end_dt' ,Carbon::createFromFormat('d M Y H:i:s', $request->end_dt . ' ' . $request->end_hr . ':'. $request->end_min . ':00'));
    }

    return [
        'start_dt' => 'required|date|after:yesterday',
        'end_dt' => 'required|date|after:start_dt|before:' . Carbon::parse($request->start_dt)->addDays(30)
    ];
}


*/

/*

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|max:200',
            'body' => 'required',
            'tags' => 'required|array|max:10',
            'is_published' => 'required|boolean',
            'author_name' => 'required',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'title' => fix_typos($this->title),
            'body' => filter_malicious_content($this->body),
            'tags' => convert_comma_separated_values_to_array($this->tags),
            'is_published' => (bool) $this->is_published,
        ]);
    }
}


*/
<<<<<<< HEAD

/*
 *
 * use Illuminate\Foundation\Http\FormRequest;
 *
 * class StorePostRequest extends FormRequest
 * {
 * public function rules()
 * {
 * return [
 * 'title' => 'required|max:200',
 * 'body' => 'required',
 * 'tags' => 'required|array|max:10',
 * 'is_published' => 'required|boolean',
 * 'author_name' => 'required',
 * ];
 * }
 *
 * protected function prepareForValidation()
 * {
 * $this->merge([
 * 'title' => fix_typos($this->title),
 * 'body' => filter_malicious_content($this->body),
 * 'tags' => convert_comma_separated_values_to_array($this->tags),
 * 'is_published' => (bool) $this->is_published,
 * ]);
 * }
 * }
 *
 *
 */
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
