<?php

/*
 * This file is part of the Jiannei/laravel-enum.
 *
 * (c) Jiannei <longjian.huang@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jiannei\Enum\Laravel\Contracts;

interface EnumContract
{
    /**
     * Return the enum as an array.
     *
     * [string $key => mixed $value]
     */
    public static function toArray(): array;

    /**
     * Cast the current instance to string and get the value.
     */
    public function __toString(): string;

    /**
     * Determine if this instance is equivalent to a given value.
     *
     * @param mixed $enumValue
     */
    public function is($enumValue): bool;
}
