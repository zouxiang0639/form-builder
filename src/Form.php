<?php


namespace think\form;

use think\form\FormBuilder;

/**
 * form for
 * @package think\form
 * @method mixed token() public token
 * @method mixed close() public 关闭一个HTML表单
 * @method mixed setModel(mixed $model) public 设置HTML表单模型
 * @method mixed open(array $options) public 打开一个新的HTML表单
 * @method mixed file(string $name, array $options = array()) public 表单file
 * @method mixed reset(string $name, array $options = array()) public 表单reset
 * @method mixed password(string $name, array $options = array()) public 表单password
 * @method mixed button(string $value = null, array $options = array()) public 表单button
 * @method mixed model(mixed $model ,array $options = array()) public 打开一个新的HTML表单模型
 * @method mixed submit(string $value = null, array $options = array()) public 表单submit提交
 * @method mixed text(string $name, string $value = null, array $options = []) public 表单text
 * @method mixed label(string $name, string $value = null, array $options = []) public label标签
 * @method mixed url(string $name, string $value = null, array $options = array()) public 表单url
 * @method mixed email(string $name, string $value = null, array $options = array()) public 表单email
 * @method mixed hidden(string $name, string $value = null, array $options = array()) public 表单hidden
 * @method mixed image(string $url, string $name = null, array $attributes = array()) public 表单image提交
 * @method mixed textarea(string $name, string $value = null, array $options = array()) public 表单textarea
 * @method mixed checkbox(string $name, string $value = 1, string $checked = null, array $options = array()) public 表单checkbox
 * @method mixed radio(string $name, string $value = null, string $checked = null, array $options = array())) public 表单radio
 * @method mixed select(string $name, array $list = array(), string $selected = null, array $options = array()) public 表单textarea
 * @method mixed selectYear(string $name ,string $begin,string $end, string $selected = null ,array $options = array()) public select年
 * @method mixed selectMonth(string $name ,string $selected = null ,array $options = array() ,string $format = '%m') public select月
 */

class Form
{

    /**
     * form生成器初始化
     * @static
     * @access public
     * @param  array   $options
     * @return \think\form\FormBuilder
     */
    public static function form($token = ['name' => '__token__','type' => 'md5'])
    {
        $html       = new HtmlBuilder();
        return new FormBuilder($html, $token);
    }
}
