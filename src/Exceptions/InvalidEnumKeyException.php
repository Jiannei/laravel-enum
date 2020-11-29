<?php

/*
 * This file is part of the Jiannei/laravel-enum.
 *
 * (c) Jiannei <longjian.huang@foxmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jiannei\Enum\Laravel\Exceptions;

use Exception;
use Jiannei\Enum\Laravel\Enum;

class InvalidEnumKeyException extends Exception
{
    /**
     * Create an InvalidEnumKeyException.
     *
     * @param mixed       $invalidKey
     * @param Enum|string $enumClass
     *
     * @return void
     */
    public function __construct($invalidKey, $enumClass)
    {
        $invalidKeyType = gettype($invalidKey);
        $enumKeys = implode(', ', $enumClass::getKeys());
        $enumClassName = class_basename($enumClass);

        parent::__construct("Cannot construct an instance of $enumClassName using the key ($invalidKeyType) `$invalidKey`. Possible keys are [$enumKeys].");
    }
}
