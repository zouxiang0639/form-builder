<?php

if (!function_exists('form')) {
    /**
     * 初始化form类
     *
     * @return \think\form\Form
     */
    function form()
    {
        $form = \think\form\Form::form();
        return $form;
    }
}

if (! function_exists('array_get')) {
    /**
     * Get an item from an array using "dot" notation.
     *
     * @param  \ArrayAccess|array  $array
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    function array_get($array, $key, $default = null)
    {
        return \think\form\Arr::get($array, $key, $default);
    }
}

if (! function_exists('e')) {
    /**
     * Escape HTML special characters in a string.
     *
     *
     * @return string
     */
    function e($value)
    {
        if(is_array($value)){
            $value =  json_encode($value,JSON_UNESCAPED_UNICODE);
        }
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
    }
}

if (! function_exists('array_except')) {
    /**
     * Get all of the given array except for a specified array of items.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return array
     */
    function array_except($array, $keys)
    {
        return  \think\form\Arr::except($array, $keys);
    }
}

?>