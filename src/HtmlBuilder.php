<?php namespace think\form;


class HtmlBuilder
{

    /**
     * 数组转换成一个HTML属性字符串。
     *
     * @param  array  $attributes
     * @return string
     */
    public function attributes($attributes)
    {

        $html = array();

        // 假设我们的keys 和 value 是相同的,
        // 拿HTML“required”属性来说,假设是['required']数组,
        // 会已 required="required" 拼接起来,而不是用数字keys去拼接
       foreach ((array) $attributes as $key => $value)
        {
            $element = self::attributeElement($key, $value);
            if ( ! is_null($element)) $html[] = $element;
        }
        return count($html) > 0 ? ' '.implode(' ', $html) : '';
    }

    /**
     * 拼接成一个属性。
     *
     * @param  string  $key
     * @param  string  $value
     * @return string
     */
    protected function attributeElement($key, $value)
    {
        if (is_numeric($key)) $key = $value;
        if ( ! is_null($value)) return $key.'="'.$value.'"';
    }

}