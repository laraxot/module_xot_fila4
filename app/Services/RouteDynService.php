<?php

declare(strict_types=1);

namespace Modules\Xot\Services;

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)

=======
=======
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

use function Safe\preg_replace;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6d05deed (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)

/**
 * Class RouteDynService.
 */
class RouteDynService
{
    private static string $namespace_start = '';

    // Commentato: La proprietà $curr non viene mai letta, quindi potrebbe essere rimossa
    // private static ?string $curr = null;

    /**
     * @param  array<string, mixed>  $v
     * @return array<string, mixed>
     */
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
    public static function getGroupOpts(array $v, ?string $namespace): array
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 399f46d3 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 399f46d3 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 399f46d3 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getGroupOpts(array $v, null|string $namespace): array
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> a12f125f4a (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> b93ef594b4 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 0e51323 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 5842a556 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
    public static function getGroupOpts(array $v, null|string $namespace): array
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> b7ea1cd1 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 16dc7ab0 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 5842a556 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> b7ea1cd1 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 3bf39332 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 76bec91a (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> f0e04b64 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 249a0067 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getGroupOpts(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getGroupOpts(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
    {
        return [
            'prefix' => self::getPrefix($v, $namespace),
            'namespace' => self::getNamespace($v, $namespace),
            'as' => self::getAs($v, $namespace),
        ];
    }

    /**
     * @param  array<string, mixed>  $v
     */
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
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
    public static function getPrefix(array $v, null|string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getPrefix(array $v, null|string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 3849ae0e (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
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
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> 3849ae0e (.)
    public static function getPrefix(array $v, null|string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getPrefix(array $v, null|string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 71586de2 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 76bec91a (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getPrefix(array $v, ?string $namespace): string
    {
        if (isset($v['prefix'])) {
            Assert::string($prefix = $v['prefix'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)

            return $prefix;
        }

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
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> f0e04b64 (.)
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
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
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix . '/{' . $param_name . '}';
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
        Assert::string($name = $v['name']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
        Assert::string($name = $v['name']);
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
=======
        Assert::string($name = $v['name']);
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
        Assert::string($name = $v['name']);
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
        Assert::string($name = $v['name']);
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix . '/{' . $param_name . '}';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 3849ae0e (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
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
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> 3849ae0e (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix . '/{' . $param_name . '}';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
>>>>>>> 53d6a6ba (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
=======
>>>>>>> a5dccfe (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix . '/{' . $param_name . '}';
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
>>>>>>> 71586de2 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
>>>>>>> 76bec91a (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $prefix = mb_strtolower($name);
        $param_name = self::getParamName($v, $namespace);
        if ($param_name !== '') {
            return $prefix.'/{'.$param_name.'}';
>>>>>>> 43d67f21 (.)
        }

        return $prefix;
    }

    /**
     * @param  array<string, mixed>  $v
     */
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
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
    public static function getAs(array $v, null|string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getAs(array $v, ?string $namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getAs(array $v, null|string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 3849ae0e (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
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
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> 3849ae0e (.)
    public static function getAs(array $v, null|string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getAs(array $v, null|string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 71586de2 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 76bec91a (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getAs(array $v, ?string $_namespace): string
    {
        if (isset($v['as'])) {
            Assert::string($as = $v['as'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)

            return $as;
        }

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
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
=======
=======
=======
=======
=======
>>>>>>> cf971011 (.)
=======
=======
=======
>>>>>>> e7da37af (.)
=======
=======
=======
>>>>>>> d86d643a (.)
>>>>>>> a5dccfe (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> b7afadf9 (.)
=======
=======
>>>>>>> a5dccfe (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> a5dccfe (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> a5dccfe (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> 3bf39332 (.)
=======
=======
>>>>>>> a5dccfe (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 71586de2 (.)
        $as = mb_strtolower($name);
        $as = str_replace('/', '.', $as);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 71586de2 (.)
=======
=======
>>>>>>> 3849ae0e (.)
=======
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = mb_strtolower($name);
        $as = str_replace('/', '.', $as);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 76bec91a (.)
=======
<<<<<<< HEAD
>>>>>>> 3849ae0e (.)
=======
>>>>>>> f0e04b64 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = mb_strtolower($name);
        $as = str_replace('/', '.', $as);

>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = mb_strtolower($name);
        $as = str_replace('/', '.', $as);

>>>>>>> 43d67f21 (.)
        // Assicuriamoci che $as sia una stringa prima di usare preg_replace
        if (is_string($as)) {
            $replaced = preg_replace('/{.*}./', '', $as);
            $as = is_string($replaced) ? $replaced : $as;
            $as = str_replace(['{', '}'], '', $as);

            return $as.'.';
        }

        return '.';
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name = $v['name']);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($name = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
        $as = mb_strtolower($name);
        $as = str_replace('/', '.', $as);

<<<<<<< HEAD
<<<<<<< HEAD
        return $as . '.';
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $as . '.';
=======
        return $as.'.';
>>>>>>> a12f125f4a (.)
=======
        return $as . '.';
>>>>>>> b93ef594b4 (.)
=======
        return $as.'.';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        // Assicuriamoci che $as sia una stringa prima di usare preg_replace
        if (is_string($as)) {
            $replaced = preg_replace('/{.*}./', '', $as);
            $as = is_string($replaced) ? $replaced : $as;
            $as = str_replace(['{', '}'], '', $as);

            return $as.'.';
        }

        return '.';
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
        return $as . '.';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name = $v['name']);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($name = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
        $as = mb_strtolower($name);
        $as = str_replace('/', '.', $as);

<<<<<<< HEAD
<<<<<<< HEAD
        return $as . '.';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
        return $as.'.';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $as . '.';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $as . '.';
=======
        return $as.'.';
>>>>>>> a12f125f4a (.)
=======
        return $as . '.';
>>>>>>> b93ef594b4 (.)
=======
        return $as.'.';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        // Assicuriamoci che $as sia una stringa prima di usare preg_replace
        if (is_string($as)) {
            $replaced = preg_replace('/{.*}./', '', $as);
            $as = is_string($replaced) ? $replaced : $as;
            $as = str_replace(['{', '}'], '', $as);

            return $as.'.';
        }

        return '.';
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
        return $as . '.';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
=======
        return $as . '.';
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name = $v['name']);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($name = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
        $as = mb_strtolower($name);
        $as = str_replace('/', '.', $as);

<<<<<<< HEAD
<<<<<<< HEAD
        return $as . '.';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
        return $as.'.';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $as . '.';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $as . '.';
=======
        return $as.'.';
>>>>>>> a12f125f4a (.)
=======
        return $as . '.';
>>>>>>> b93ef594b4 (.)
=======
        return $as.'.';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        // Assicuriamoci che $as sia una stringa prima di usare preg_replace
        if (is_string($as)) {
            $replaced = preg_replace('/{.*}./', '', $as);
            $as = is_string($replaced) ? $replaced : $as;
            $as = str_replace(['{', '}'], '', $as);

            return $as.'.';
        }

        return '.';
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
        return $as . '.';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name = $v['name']);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($name = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
        $as = mb_strtolower($name);
        $as = str_replace('/', '.', $as);

<<<<<<< HEAD
<<<<<<< HEAD
        return $as . '.';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
        return $as.'.';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $as . '.';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $as . '.';
=======
        return $as.'.';
>>>>>>> a12f125f4a (.)
=======
        return $as . '.';
>>>>>>> b93ef594b4 (.)
=======
        return $as.'.';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        // Assicuriamoci che $as sia una stringa prima di usare preg_replace
        if (is_string($as)) {
            $replaced = preg_replace('/{.*}./', '', $as);
            $as = is_string($replaced) ? $replaced : $as;
            $as = str_replace(['{', '}'], '', $as);

            return $as.'.';
        }

        return '.';
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
        return $as . '.';
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
=======
        return $as . '.';
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 6d05deed (.)
=======
        return $as . '.';
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
=======
=======
        return $as . '.';
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name = $v['name']);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($name = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
        $as = mb_strtolower($name);
        $as = str_replace('/', '.', $as);

<<<<<<< HEAD
<<<<<<< HEAD
        return $as . '.';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
        return $as.'.';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $as . '.';
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $as . '.';
=======
        return $as.'.';
>>>>>>> a12f125f4a (.)
=======
        return $as . '.';
>>>>>>> b93ef594b4 (.)
=======
        return $as.'.';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        // Assicuriamoci che $as sia una stringa prima di usare preg_replace
        if (is_string($as)) {
            $replaced = preg_replace('/{.*}./', '', $as);
            $as = is_string($replaced) ? $replaced : $as;
            $as = str_replace(['{', '}'], '', $as);

            return $as.'.';
        }

        return '.';
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
    }

    /**
     * @param  array<string, mixed>  $v
     */
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
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
    public static function getNamespace(array $v, null|string $namespace): null|string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getNamespace(array $v, null|string $namespace): null|string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 3849ae0e (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
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
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> 3849ae0e (.)
    public static function getNamespace(array $v, null|string $namespace): null|string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getNamespace(array $v, null|string $namespace): null|string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 71586de2 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 76bec91a (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getNamespace(array $v, ?string $namespace): ?string
    {
        if (isset($v['namespace'])) {
            Assert::string($namespace = $v['namespace'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)

            return $namespace;
        }

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
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name']);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($namespace = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 0e51323 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name']);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name']);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name']);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 3bf39332 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 76bec91a (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> f0e04b64 (.)
=======
>>>>>>> e7da37af (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 249a0067 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($namespace = $v['name']);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($namespace = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
        $namespace = str_replace(['{', '}'], '', $namespace);
        if ($namespace === '') {
            return null;
        }

        return Str::studly($namespace);
    }

    /**
     * @param  array<string, mixed>  $v
     */
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
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
    public static function getAct(array $v, null|string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getAct(array $v, ?string $namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getAct(array $v, null|string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 3849ae0e (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
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
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> 3849ae0e (.)
    public static function getAct(array $v, null|string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getAct(array $v, null|string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 71586de2 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 76bec91a (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getAct(array $v, ?string $_namespace): string
    {
        if (isset($v['act'])) {
            Assert::string($act = $v['act'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)

            return $act;
        }

        Assert::nullOrString($v['act'] = $v['name']);
        Assert::nullOrString($v['act']);
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> b7afadf9 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
=======
>>>>>>> 3849ae0e (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
        $v['act'] = preg_replace('/{.*}\//', '', (string) $v['act']);
        if ($v['act'] === null) {
            $v['act'] = '';
        }
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
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 76bec91a (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 43d67f21 (.)

        // Convertiamo esplicitamente a stringa e gestiamo il caso null
        $act = (string) ($v['act'] ?? '');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 76bec91a (.)
=======
>>>>>>> 3849ae0e (.)
=======
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 43d67f21 (.)
        // Applichiamo le trasformazioni in modo sicuro
        $replaced = preg_replace('/{.*}\//', '', $act);
        $act = is_string($replaced) ? $replaced : $act;
        $act = str_replace('/', '_', $act);

        // Assicuriamoci che sia una stringa prima di usare Str::camel
        $camelCase = Str::camel($act);
        $act = str_replace(['{', '}'], '', $camelCase);

        return Str::camel($act);
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
        $v['act'] = preg_replace('/{.*}\//', '', (string) $v['act']);
        if ($v['act'] === null) {
            $v['act'] = '';
        }
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)

        // Convertiamo esplicitamente a stringa e gestiamo il caso null
        $act = (string) ($v['act'] ?? '');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return Str::camel($v['act']);
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
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
        // Applichiamo le trasformazioni in modo sicuro
        $replaced = preg_replace('/{.*}\//', '', $act);
        $act = is_string($replaced) ? $replaced : $act;
        $act = str_replace('/', '_', $act);

        // Assicuriamoci che sia una stringa prima di usare Str::camel
        $camelCase = Str::camel($act);
        $act = str_replace(['{', '}'], '', $camelCase);

        return Str::camel($act);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
        return Str::camel($v['act']);
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
=======
>>>>>>> ca9324a4 (.)

        // Convertiamo esplicitamente a stringa e gestiamo il caso null
        $act = (string) ($v['act'] ?? '');

<<<<<<< HEAD
        return Str::camel($v['act']);
>>>>>>> 5a14301c (.)
=======
        // Applichiamo le trasformazioni in modo sicuro
        $replaced = preg_replace('/{.*}\//', '', $act);
        $act = is_string($replaced) ? $replaced : $act;
        $act = str_replace('/', '_', $act);

        // Assicuriamoci che sia una stringa prima di usare Str::camel
        $camelCase = Str::camel($act);
        $act = str_replace(['{', '}'], '', $camelCase);

        return Str::camel($act);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
        return Str::camel($v['act']);
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
=======
        return Str::camel($v['act']);
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
=======
>>>>>>> ca9324a4 (.)

        // Convertiamo esplicitamente a stringa e gestiamo il caso null
        $act = (string) ($v['act'] ?? '');

<<<<<<< HEAD
        return Str::camel($v['act']);
>>>>>>> 5a14301c (.)
=======
        // Applichiamo le trasformazioni in modo sicuro
        $replaced = preg_replace('/{.*}\//', '', $act);
        $act = is_string($replaced) ? $replaced : $act;
        $act = str_replace('/', '_', $act);

        // Assicuriamoci che sia una stringa prima di usare Str::camel
        $camelCase = Str::camel($act);
        $act = str_replace(['{', '}'], '', $camelCase);

        return Str::camel($act);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
        return Str::camel($v['act']);
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
=======
>>>>>>> ca9324a4 (.)

        // Convertiamo esplicitamente a stringa e gestiamo il caso null
        $act = (string) ($v['act'] ?? '');

<<<<<<< HEAD
        return Str::camel($v['act']);
>>>>>>> 5a14301c (.)
=======
        // Applichiamo le trasformazioni in modo sicuro
        $replaced = preg_replace('/{.*}\//', '', $act);
        $act = is_string($replaced) ? $replaced : $act;
        $act = str_replace('/', '_', $act);

        // Assicuriamoci che sia una stringa prima di usare Str::camel
        $camelCase = Str::camel($act);
        $act = str_replace(['{', '}'], '', $camelCase);

        return Str::camel($act);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
=======
        return Str::camel($v['act']);
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
=======
        return Str::camel($v['act']);
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 6d05deed (.)
=======
        return Str::camel($v['act']);
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
=======
=======
        return Str::camel($v['act']);
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
=======
>>>>>>> ca9324a4 (.)

        // Convertiamo esplicitamente a stringa e gestiamo il caso null
        $act = (string) ($v['act'] ?? '');

<<<<<<< HEAD
        return Str::camel($v['act']);
>>>>>>> 5a14301c (.)
=======
        // Applichiamo le trasformazioni in modo sicuro
        $replaced = preg_replace('/{.*}\//', '', $act);
        $act = is_string($replaced) ? $replaced : $act;
        $act = str_replace('/', '_', $act);

        // Assicuriamoci che sia una stringa prima di usare Str::camel
        $camelCase = Str::camel($act);
        $act = str_replace(['{', '}'], '', $camelCase);

        return Str::camel($act);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
    }

    /**
     * @param  array<string, mixed>  $v
     */
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
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
    public static function getParamName(array $v, null|string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getParamName(array $v, ?string $namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getParamName(array $v, null|string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 3849ae0e (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
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
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> 3849ae0e (.)
    public static function getParamName(array $v, null|string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getParamName(array $v, null|string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 71586de2 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 76bec91a (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getParamName(array $v, ?string $_namespace): string
    {
        if (isset($v['param_name'])) {
            Assert::string($param_name = $v['param_name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)

            return $param_name;
        }

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
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
        $param_name = 'id_'.$name;
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 5a14301c (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
=======
        Assert::string($name = $v['name']);
        $param_name = 'id_'.$name;
>>>>>>> a12f125f4a (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($name = $v['name']);
        $param_name = 'id_'.$name;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 0e51323 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 43d67f21 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 14edd1a1 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 14edd1a1 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 3849ae0e (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> c06600c (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 5842a556 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> ed734516 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> ed734516 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> ed734516 (.)
=======
        Assert::string($name = $v['name']);
        $param_name = 'id_'.$name;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 16dc7ab0 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 5842a556 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 3bf39332 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 76bec91a (.)
=======
>>>>>>> 3849ae0e (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> f0e04b64 (.)
=======
>>>>>>> e7da37af (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 249a0067 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $param_name = 'id_' . $name;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $param_name = 'id_'.$name;
>>>>>>> 43d67f21 (.)
        $param_name = str_replace(['{', '}'], '', $param_name);

        return mb_strtolower($param_name);
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<int, string>
     */
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
    public static function getParamsName(array $v, ?string $namespace): array
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 399f46d3 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 399f46d3 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 399f46d3 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getParamsName(array $v, null|string $namespace): array
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> a12f125f4a (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> b93ef594b4 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 0e51323 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 5842a556 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
    public static function getParamsName(array $v, null|string $namespace): array
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> b7ea1cd1 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 16dc7ab0 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 5842a556 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> b7ea1cd1 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 3bf39332 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 76bec91a (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> f0e04b64 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 249a0067 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getParamsName(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getParamsName(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
    {
        $param_name = self::getParamName($v, $namespace);

        return [$param_name];
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<string, mixed>
     */
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
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
    public static function getResourceOpts(array $v, ?string $namespace): array
=======
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 0e51323 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> 249a0067 (.)
    {
        $param_name = self::getParamName($v, $namespace);
        $params_name = self::getParamsName($v, $namespace);
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getResourceOpts(array $v, null|string $namespace): array
<<<<<<< HEAD
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 399f46d3 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 399f46d3 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 399f46d3 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getResourceOpts(array $v, null|string $namespace): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
    public static function getResourceOpts(array $v, ?string $namespace): array
=======
>>>>>>> 0e51323 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
    public static function getResourceOpts(array $v, null|string $namespace): array
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> a12f125f4a (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> b93ef594b4 (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> b7ea1cd1 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 3bf39332 (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> 53d6a6ba (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> 76bec91a (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> f0e04b64 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getResourceOpts(array $v, null|string $namespace): array
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getResourceOpts(array $v, ?string $namespace): array
>>>>>>> 43d67f21 (.)
    {
        $param_name = self::getParamName($v, $namespace);
        $params_name = self::getParamsName($v, $namespace);
        Assert::isArray($params_name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

        $opts = [
            'parameters' => [mb_strtolower((string) $v['name']) => implode('}/{', $params_name)],
            'names' => self::prefixedResourceNames(self::getAs($v, $namespace)),
        ];

        if (isset($v['only'])) {
            $opts['only'] = $v['only'];
        }

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
        if ($param_name === '' && ! isset($opts['only'])) {
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 5a14301c (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 3fbbf1f5 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 399f46d3 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 399f46d3 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 399f46d3 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($param_name === '' && !isset($opts['only'])) {
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> a12f125f4a (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> b93ef594b4 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 0e51323 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 43d67f21 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 5842a556 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
        if ($param_name === '' && !isset($opts['only'])) {
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 43d67f21 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> b7ea1cd1 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 16dc7ab0 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 5a14301c (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 43d67f21 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 5842a556 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 5a14301c (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 43d67f21 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> b7ea1cd1 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 3bf39332 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 76bec91a (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> f0e04b64 (.)
=======
>>>>>>> e7da37af (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 249a0067 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 5a14301c (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if ($param_name === '' && !isset($opts['only'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        if ($param_name === '' && ! isset($opts['only'])) {
>>>>>>> 43d67f21 (.)
            $opts['only'] = ['index'];
        }

        $opts['where'] = array_fill_keys($params_name, '[0-9]+');

        return $opts;
    }

    /**
     * @param  array<string, mixed>  $v
     */
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
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
    public static function getController(array $v, null|string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getController(array $v, ?string $namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getController(array $v, null|string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 3849ae0e (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
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
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> 3849ae0e (.)
    public static function getController(array $v, null|string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getController(array $v, null|string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 71586de2 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 76bec91a (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getController(array $v, ?string $_namespace): string
    {
        if (isset($v['controller'])) {
            Assert::string($controller = $v['controller'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)

            return $controller;
        }

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
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name']);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($v['controller'] = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 0e51323 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name']);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name']);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name']);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 3bf39332 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 76bec91a (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> f0e04b64 (.)
=======
>>>>>>> e7da37af (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 249a0067 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($v['controller'] = $v['name']);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($v['controller'] = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
        $v['controller'] = str_replace(['/', '{', '}'], ['_', '', ''], $v['controller']);
        $v['controller'] = Str::studly($v['controller']);
        $v['controller'] .= 'Controller';

        return $v['controller'];
    }

    /**
     * @param  array<string, mixed>  $v
     */
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
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> ed734516 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, ?string $namespace): string
    {
        Assert::string($name = $v['name']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
    public static function getUri(array $v, ?string $namespace): string
    {
        Assert::string($name = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> e59778ae (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 14edd1a1 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> e59778ae (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> e59778ae (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 14edd1a1 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 3849ae0e (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 0e51323 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 76bec91a (.)
=======
>>>>>>> 3849ae0e (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> f0e04b64 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 249a0067 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public static function getUri(array $v, null|string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getUri(array $v, ?string $_namespace): string
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)

        // return mb_strtolower(is_string($v) ? $v : (string) $v['name);
        return $name;
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<int, string>
     */
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
    public static function getMethod(array $v, ?string $_namespace): array
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getMethod(array $v, null|string $_namespace): array
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 5842a556 (.)
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> 0e51323 (.)
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> b7ea1cd1 (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 16dc7ab0 (.)
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 5842a556 (.)
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 43d67f21 (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> b7ea1cd1 (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 3bf39332 (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 76bec91a (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> f0e04b64 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 249a0067 (.)
=======
    public static function getMethod(array $v, null|string $_namespace): array
>>>>>>> 5a14301c (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getMethod(array $v, ?string $_namespace): array
>>>>>>> 43d67f21 (.)
    {
        if (isset($v['method'])) {
            /** @var array<int, string> */
            return Arr::wrap($v['method']);
        }

        return ['get', 'post'];
    }

    /**
     * @param  array<string, mixed>  $v
     */
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
    public static function getUses(array $v, ?string $namespace): string
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 5a14301c (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 3fbbf1f5 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 399f46d3 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 399f46d3 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 399f46d3 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function getUses(array $v, null|string $namespace): string
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> a12f125f4a (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> b93ef594b4 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function getUses(array $v, ?string $namespace): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 0e51323 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 43d67f21 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 5842a556 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
    public static function getUses(array $v, null|string $namespace): string
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 43d67f21 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> b7ea1cd1 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 16dc7ab0 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 5a14301c (.)
=======
    public static function getUses(array $v, null|string $namespace): string
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 43d67f21 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 5842a556 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 5a14301c (.)
=======
    public static function getUses(array $v, null|string $namespace): string
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 43d67f21 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> b7ea1cd1 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 3bf39332 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 76bec91a (.)
=======
    public static function getUses(array $v, ?string $namespace): string
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> f0e04b64 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 249a0067 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 5a14301c (.)
=======
    public static function getUses(array $v, null|string $namespace): string
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function getUses(array $v, null|string $namespace): string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function getUses(array $v, ?string $namespace): string
>>>>>>> 43d67f21 (.)
    {
        $controller = self::getController($v, $namespace);
        $act = self::getAct($v, $namespace);

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
        return $controller.'@'.$act;
=======
        return $controller . '@' . $act;
>>>>>>> 5a14301c (.)
=======
        return $controller . '@' . $act;
>>>>>>> 3fbbf1f5 (.)
=======
        return $controller . '@' . $act;
=======
        return $controller . '@' . $act;
>>>>>>> 399f46d3 (.)
=======
        return $controller . '@' . $act;
>>>>>>> 399f46d3 (.)
=======
        return $controller . '@' . $act;
>>>>>>> 399f46d3 (.)
=======
        return $controller . '@' . $act;
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $controller . '@' . $act;
=======
        return $controller.'@'.$act;
>>>>>>> a12f125f4a (.)
=======
        return $controller . '@' . $act;
>>>>>>> b93ef594b4 (.)
=======
        return $controller.'@'.$act;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        return $controller.'@'.$act;
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
        return $controller.'@'.$act;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
        return $controller . '@' . $act;
>>>>>>> 0e51323 (.)
=======
        return $controller . '@' . $act;
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
        return $controller.'@'.$act;
>>>>>>> 43d67f21 (.)
=======
        return $controller.'@'.$act;
=======
        return $controller . '@' . $act;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        return $controller.'@'.$act;
>>>>>>> 5842a556 (.)
=======
        return $controller . '@' . $act;
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
        return $controller . '@' . $act;
=======
        return $controller.'@'.$act;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        return $controller . '@' . $act;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $controller . '@' . $act;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return $controller.'@'.$act;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        return $controller.'@'.$act;
>>>>>>> 43d67f21 (.)
=======
        return $controller.'@'.$act;
=======
        return $controller . '@' . $act;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        return $controller.'@'.$act;
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        return $controller.'@'.$act;
>>>>>>> b7ea1cd1 (.)
=======
        return $controller.'@'.$act;
=======
        return $controller . '@' . $act;
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        return $controller.'@'.$act;
>>>>>>> 16dc7ab0 (.)
=======
        return $controller . '@' . $act;
>>>>>>> 5a14301c (.)
=======
        return $controller . '@' . $act;
=======
        return $controller.'@'.$act;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return $controller . '@' . $act;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $controller . '@' . $act;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return $controller.'@'.$act;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        return $controller.'@'.$act;
>>>>>>> 43d67f21 (.)
=======
        return $controller.'@'.$act;
=======
        return $controller . '@' . $act;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        return $controller.'@'.$act;
>>>>>>> 5842a556 (.)
=======
        return $controller . '@' . $act;
>>>>>>> 5a14301c (.)
=======
        return $controller . '@' . $act;
=======
        return $controller.'@'.$act;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return $controller . '@' . $act;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $controller . '@' . $act;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return $controller.'@'.$act;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        return $controller.'@'.$act;
>>>>>>> 43d67f21 (.)
=======
        return $controller.'@'.$act;
=======
        return $controller . '@' . $act;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        return $controller.'@'.$act;
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        return $controller.'@'.$act;
>>>>>>> b7ea1cd1 (.)
=======
        return $controller.'@'.$act;
=======
        return $controller . '@' . $act;
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        return $controller.'@'.$act;
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 3bf39332 (.)
=======
        return $controller.'@'.$act;
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        return $controller.'@'.$act;
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
        return $controller.'@'.$act;
>>>>>>> 76bec91a (.)
=======
        return $controller.'@'.$act;
=======
        return $controller . '@' . $act;
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
        return $controller.'@'.$act;
>>>>>>> f0e04b64 (.)
=======
>>>>>>> e7da37af (.)
=======
        return $controller.'@'.$act;
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
        return $controller.'@'.$act;
>>>>>>> 249a0067 (.)
=======
        return $controller . '@' . $act;
>>>>>>> 5a14301c (.)
=======
        return $controller . '@' . $act;
=======
        return $controller.'@'.$act;
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        return $controller . '@' . $act;
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        return $controller . '@' . $act;
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        return $controller.'@'.$act;
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        return $controller.'@'.$act;
>>>>>>> 43d67f21 (.)
    }

    /**
     * @param  array<string, mixed>  $v
     * @return array<string, mixed>
     */
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
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
=======
=======
>>>>>>> b7afadf9 (.)
=======
=======
=======
>>>>>>> cf971011 (.)
=======
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> a5dccfe (.)
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
<<<<<<< HEAD
>>>>>>> 3bf39332 (.)
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 76bec91a (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 55fe1822 (.)
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
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
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
>>>>>>> 43d67f21 (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
>>>>>>> 71586de2 (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
=======
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
>>>>>>> f0e04b64 (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> a5dccfe (.)
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
>>>>>>> 249a0067 (.)
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
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
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
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
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
>>>>>>> 5a14301c (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
>>>>>>> 43d67f21 (.)
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> a12f125f4a (.)
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
=======
>>>>>>> 21348520 (.)
=======
=======
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
=======
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
>>>>>>> b93ef594b4 (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
>>>>>>> b7ea1cd1 (.)
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
<<<<<<< HEAD
<<<<<<< HEAD
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> a12f125f4a (.)
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
>>>>>>> 399f46d3 (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name']);
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> 43d67f21 (.)
=======
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> 43d67f21 (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> 5842a556 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> b7ea1cd1 (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> 16dc7ab0 (.)
=======
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
>>>>>>> 43d67f21 (.)
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
<<<<<<< HEAD
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
=======
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
=======
>>>>>>> 472bd9dc (.)
=======
=======
>>>>>>> a5dccfe (.)
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
>>>>>>> b93ef594b4 (.)
=======
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
>>>>>>> 5a14301c (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
>>>>>>> 43d67f21 (.)
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> a12f125f4a (.)
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
=======
>>>>>>> 21348520 (.)
=======
=======
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
=======
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
>>>>>>> b93ef594b4 (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
>>>>>>> b7ea1cd1 (.)
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
<<<<<<< HEAD
<<<<<<< HEAD
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> a12f125f4a (.)
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
>>>>>>> 399f46d3 (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name']);
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> 43d67f21 (.)
=======
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> 43d67f21 (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> 5842a556 (.)
=======
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> b7ea1cd1 (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> 6d05deed (.)
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
<<<<<<< HEAD
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> 71586de2 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> 249a0067 (.)
=======
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
>>>>>>> 43d67f21 (.)
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
<<<<<<< HEAD
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
=======
=======
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
=======
    public static function getCallback(array $v, null|string $namespace, null|string $curr): array
>>>>>>> b93ef594b4 (.)
    {
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\' . self::$namespace_start . '\\' . $curr . '\\' . $uses;
        } else {
<<<<<<< HEAD
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> a12f125f4a (.)
=======
            $uses = '\\' . self::$namespace_start . '\\' . $uses;
>>>>>>> b93ef594b4 (.)
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> ca9324a4 (.)
    public static function getCallback(array $v, ?string $namespace, ?string $curr): array
    {
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        $as = Str::slug($name);
        $uses = self::getUses($v, $namespace);
        if ($curr !== null) {
            $uses = '\\'.self::$namespace_start.'\\'.$curr.'\\'.$uses;
        } else {
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
            $uses = '\\'.self::$namespace_start.'\\'.$uses;
>>>>>>> 43d67f21 (.)
        }

        return ['as' => $as, 'uses' => $uses];
    }

    /**
     * @param  array<int, array<string, mixed>>  $array
     */
    public static function dynamic_route(
        array $array,
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 3849ae0e (.)
=======
>>>>>>> 6d05deed (.)
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
        null|string $namespace = null,
        null|string $namespace_start = null,
        null|string $curr = null,
>>>>>>> 0e51323 (.)
=======
        null|string $namespace = null,
        null|string $namespace_start = null,
        null|string $curr = null,
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> 249a0067 (.)
    ): void {
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
        null|string $namespace = null,
        null|string $namespace_start = null,
        null|string $curr = null,
<<<<<<< HEAD
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
        null|string $namespace = null,
        null|string $namespace_start = null,
        null|string $curr = null,
>>>>>>> a5dccfe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> 43d67f21 (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> 53d6a6ba (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> 76bec91a (.)
=======
        null|string $namespace = null,
        null|string $namespace_start = null,
        null|string $curr = null,
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> f0e04b64 (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> 55fe1822 (.)
=======
>>>>>>> d86d643a (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> 43d67f21 (.)
    ): void {
        Assert::isArray($array, 'The $array parameter must be an array.');
>>>>>>> 5a14301c (.)
=======
        null|string $namespace = null,
        null|string $namespace_start = null,
        null|string $curr = null,
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> ca9324a4 (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> 43d67f21 (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> b7ea1cd1 (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> 43d67f21 (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> 43d67f21 (.)
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> b7ea1cd1 (.)
    ): void {
        Assert::isArray($array, 'The $array parameter must be an array.');
>>>>>>> 5a14301c (.)
=======
        null|string $namespace = null,
        null|string $namespace_start = null,
        null|string $curr = null,
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> ca9324a4 (.)
    ): void {
        Assert::isArray($array, 'The $array parameter must be an array.');
>>>>>>> 5a14301c (.)
=======
        null|string $namespace = null,
        null|string $namespace_start = null,
        null|string $curr = null,
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> ca9324a4 (.)
    ): void {
        Assert::isArray($array, 'The $array parameter must be an array.');
>>>>>>> 5a14301c (.)
=======
        null|string $namespace = null,
        null|string $namespace_start = null,
        null|string $curr = null,
=======
        ?string $namespace = null,
        ?string $namespace_start = null,
        ?string $curr = null,
>>>>>>> ca9324a4 (.)
    ): void {
        Assert::isArray($array, 'The $array parameter must be an array.');
>>>>>>> 5a14301c (.)
        Assert::notEmpty($array, 'The $array parameter cannot be empty.');

        if ($namespace_start !== null) {
            self::$namespace_start = $namespace_start;
        }

        foreach ($array as $v) {
            Assert::isArray($v, 'Each item in the array must be an array.');
            $group_opts = self::getGroupOpts($v, $namespace);
            $v['group_opts'] = $group_opts;

            self::createRouteResource($v, $namespace);

            Route::group($group_opts, static function () use ($v, $namespace, $curr): void {
                self::createRouteActs($v, $namespace, $curr);
                self::createRouteSubs($v, $namespace, $curr);
            });
        }
    }

    /**
     * @param  array<string, mixed>  $v
     */
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
    public static function createRouteResource(array $v, ?string $namespace): void
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 5a14301c (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 3fbbf1f5 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function createRouteResource(array $v, null|string $namespace): void
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> a12f125f4a (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> b93ef594b4 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 0e51323 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 43d67f21 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 5842a556 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
    public static function createRouteResource(array $v, null|string $namespace): void
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 43d67f21 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> b7ea1cd1 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 16dc7ab0 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 5a14301c (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 43d67f21 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 5842a556 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 5a14301c (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 43d67f21 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> b7ea1cd1 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 3bf39332 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 76bec91a (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> f0e04b64 (.)
=======
>>>>>>> e7da37af (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 249a0067 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 5a14301c (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
    public static function createRouteResource(array $v, null|string $namespace): void
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function createRouteResource(array $v, ?string $namespace): void
>>>>>>> 43d67f21 (.)
    {
        if ($v['name'] === null) {
            return;
        }
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
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name = $v['name']);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($name = $v['name']);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 0e51323 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> a5dccfe (.)
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
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name = $v['name']);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name = $v['name']);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name = $v['name']);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 5842a556 (.)
=======
>>>>>>> 472bd9dc (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> b7ea1cd1 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 3bf39332 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 71586de2 (.)
=======
>>>>>>> cf971011 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 76bec91a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> f0e04b64 (.)
=======
>>>>>>> e7da37af (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 249a0067 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name = $v['name']);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        Assert::string($name = $v['name'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
>>>>>>> d86d643a (.)
=======
        Assert::string($name = $v['name'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 43d67f21 (.)
        $opts = self::getResourceOpts($v, $namespace);
        $controller = self::getController($v, $namespace);

        Route::resource($name, $controller, $opts);
    }

    /**
     * @param  array<string, mixed>  $v
     */
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
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 3849ae0e (.)
=======
>>>>>>> 6d05deed (.)
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> 0e51323 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> ed734516 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 3849ae0e (.)
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> c06600c (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 5842a556 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 16dc7ab0 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 5842a556 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> b7afadf9 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 71586de2 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 76bec91a (.)
=======
>>>>>>> 3849ae0e (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> f0e04b64 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 55fe1822 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 249a0067 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public static function createRouteSubs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['subs'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteSubs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['subs'])) {
>>>>>>> 43d67f21 (.)
            return;
        }

        $sub_namespace = self::getNamespace($v, $namespace);
        $curr = $curr === null ? $sub_namespace : $curr;
        Assert::isArray($subs = $v['subs']);
        /** @var array<int, array<string, mixed>> $subs */
        self::dynamic_route($subs, $sub_namespace, null, $curr);
    }

    /**
     * @param  array<string, mixed>  $v
     */
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
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 3849ae0e (.)
=======
>>>>>>> 6d05deed (.)
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 0e51323 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> d86d643a (.)
=======
>>>>>>> 472bd9dc (.)
=======
>>>>>>> 3bf39332 (.)
=======
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> 0e51323 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> cf971011 (.)
=======
>>>>>>> e7da37af (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> d86d643a (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> ed734516 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> b93ef594b4 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 43d67f21 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 3849ae0e (.)
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> c06600c (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e59778ae (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 5842a556 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 16dc7ab0 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 5842a556 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 5842a556 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> b7afadf9 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 71586de2 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 76bec91a (.)
=======
>>>>>>> 3849ae0e (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> f0e04b64 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 55fe1822 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 249a0067 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
    public static function createRouteActs(array $v, null|string $namespace, null|string $curr): void
    {
        if (!isset($v['acts']) || !is_array($v['acts'])) {
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> ca9324a4 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
    public static function createRouteActs(array $v, ?string $namespace, ?string $curr): void
    {
        if (! isset($v['acts']) || ! is_array($v['acts'])) {
>>>>>>> 43d67f21 (.)
            return;
        }

        $controller = self::getController($v, $namespace);
        foreach ($v['acts'] as $v1) {
            Assert::isArray($v1);
            /** @var array<string, mixed> $v1 */
            $v1['controller'] = $controller;

            $method = self::getMethod($v1, $namespace);
            $uri = self::getUri($v1, $namespace);
            $callback = self::getCallback($v1, $namespace, $curr);
            Route::match($method, $uri, $callback);
        }
    }

    /**
     * @return array<string, string>
     */
    public static function prefixedResourceNames(string $prefix): array
    {
        if (mb_substr($prefix, -1) === '.') {
            $prefix = mb_substr($prefix, 0, -1);
        }

        return [
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
=======
=======
>>>>>>> 399f46d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> b7afadf9 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
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
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
            'index' => $prefix . '.index',
            'create' => $prefix . '.create',
            'store' => $prefix . '.store',
            'show' => $prefix . '.show',
            'edit' => $prefix . '.edit',
            'update' => $prefix . '.update',
            'destroy' => $prefix . '.destroy',
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
<<<<<<< HEAD
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 76bec91a (.)
=======
>>>>>>> 3849ae0e (.)
=======
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 43d67f21 (.)
            'index' => $prefix.'.index',
            'create' => $prefix.'.create',
            'store' => $prefix.'.store',
            'show' => $prefix.'.show',
            'edit' => $prefix.'.edit',
            'update' => $prefix.'.update',
            'destroy' => $prefix.'.destroy',
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
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
=======
>>>>>>> e59778ae (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> e59778ae (.)
=======
=======
>>>>>>> 14edd1a1 (.)
=======
=======
>>>>>>> 3849ae0e (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> a5dccfe (.)
>>>>>>> 6d05deed (.)
            'index' => $prefix . '.index',
            'create' => $prefix . '.create',
            'store' => $prefix . '.store',
            'show' => $prefix . '.show',
            'edit' => $prefix . '.edit',
            'update' => $prefix . '.update',
            'destroy' => $prefix . '.destroy',
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca9324a4 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
            'index' => $prefix.'.index',
            'create' => $prefix.'.create',
            'store' => $prefix.'.store',
            'show' => $prefix.'.show',
            'edit' => $prefix.'.edit',
            'update' => $prefix.'.update',
            'destroy' => $prefix.'.destroy',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> e59778ae (.)
=======
>>>>>>> 5842a556 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 472bd9dc (.)
=======
>>>>>>> b7ea1cd1 (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 14edd1a1 (.)
=======
>>>>>>> 16dc7ab0 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 3bf39332 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> cf971011 (.)
=======
>>>>>>> 76bec91a (.)
=======
>>>>>>> c06600c (.)
>>>>>>> 3849ae0e (.)
=======
>>>>>>> f0e04b64 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> e7da37af (.)
=======
>>>>>>> 55fe1822 (.)
=======
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> 6821f7a (.)
>>>>>>> 6d05deed (.)
=======
>>>>>>> 249a0067 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 0e51323 (.)
=======
>>>>>>> a5dccfe (.)
>>>>>>> d86d643a (.)
=======
>>>>>>> 43d67f21 (.)
        ];
    }

    // --------------------------------------------------
}
