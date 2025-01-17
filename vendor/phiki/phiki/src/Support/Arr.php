<?php

namespace Phiki\Support;

use Closure;

final class Arr
{
    /**
     * @template T
     *
     * @param  array<T>  $array
     * @return T
     */
    public static function first(array $array): mixed
    {
        return reset($array);
    }

    /**
     * @template K
     * @template V
     *
     * @param  array<K, V>  $array
     * @return K
     */
    public static function firstKey(array $array): mixed
    {
        return array_key_first($array);
    }

    public static function map(array $array, Closure $callback): array
    {
        return array_map($callback, $array);
    }

    public static function wrap(mixed $value): array
    {
        if (is_array($value)) {
            return $value;
        }

        return [$value];
    }

    public static function filterMap(array $array, callable $callback): array
    {
        return array_filter(array_map($callback, $array));
    }
}
