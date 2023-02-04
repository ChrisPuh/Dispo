<?php

namespace App\Traits;

trait CanGetTableNameStatically
{
    /**
     * @return string
     */
    public static function getTableName(): string
    {
        return with(new static)->getTable();
    }
}
