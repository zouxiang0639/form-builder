# form-builder
一个表单生成器,不继承任何一个扩展包;
thinkphp5 form 表单生成器

### 扩展安装

    composer require zouxiang0639/form-builder


### 案例

   案例一

```php
   $form = \think\form\Form::form();
   $form = form();
   echo $form->open(['method'=>'POST','action'=>'http://localhost']).'<br>';
   echo $form->select('select',  ['a'=>['a','b','c'],'b','c'], 1).'<br>';
   echo $form->text('text','text',['id'=>'text']).'<br>';
   echo $form->submit('submit').'<br>';
   echo $form->close();
```

-----

### 函数查询

```php
 /**
 * @method mixed token() public token
 * @method mixed close() public 关闭一个HTML表单
 * @method mixed setModel(mixed $model) public 设置HTML表单模型
 * @method mixed open(array $options) public 打开一个新的HTML表单
 * @method mixed button(string $value = null, array $options = array()) public 表单button
 * @method mixed file(string $name, array $options = array()) public 表单file
 * @method mixed model(mixed $model ,array $options = array()) public 打开一个新的HTML表单模型
 * @method mixed submit(string $value = null, array $options = array()) public 表单submit提交
 * @method mixed text(string $name, string $value = null, array $options = []) public 表单text
 * @method mixed label(string $name, string $value = null, array $options = []) public label标签
 * @method mixed url(string $name, string $value = null, array $options = array()) public 表单url
 * @method mixed email(string $name, string $value = null, array $options = array()) public 表单email
 * @method mixed reset(string $name, string $value = null, array $options = array()) public 表单reset
 * @method mixed hidden(string $name, string $value = null, array $options = array()) public 表单hidden
 * @method mixed image(string $url, string $name = null, array $attributes = array()) public 表单image提交
 * @method mixed textarea(string $name, string $value = null, array $options = array()) public 表单textarea
 * @method mixed password(string $name, string $value = null, array $options = array()) public 表单password
 * @method mixed checkbox(string $name, string $value = 1, string $checked = null, array $options = array()) public 表单checkbox
 * @method mixed radio(string $name, string $value = null, string $checked = null, array $options = array())) public 表单radio
 * @method mixed select(string $name, array $list = array(), string $selected = null, array $options = array()) public 表单textarea
 * @method mixed selectYear(string $name ,string $begin,string $end, string $selected = null ,array $options = array()) public select年
 * @method mixed selectMonth(string $name ,string $selected = null ,array $options = array() ,string $format = '%m') public select月
 */
```
