<?php

namespace app\support;

class RequestTypes
{
    public static function get()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}