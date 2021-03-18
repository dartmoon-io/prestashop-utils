<?php

namespace Dartmoon\Utils\Facades;

use Dartmoon\Utils\MultiLangText as UtilsMultiLangText;

class MultiLangText
{
    public static function __callStatic($name, $arguments)
    {
        $filter = new UtilsMultiLangText;
        return call_user_func_array([$filter, $name], $arguments);
    }

}