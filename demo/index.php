
<!DOCTYPE html>
<head>
    <title>form 表单生成器</title>
    <link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body  >
<div class="container-fluid">


    <p style="height: 50px;line-height: 50px" class="bg-danger">
        github:  https://github.com/zouxiang0639/think-form
    </p>


    <?php
    require __DIR__ . '/vendor/autoload.php';
    $post = $_POST;
    //  $form  = think\form\Form::form();  //静态初始化 FormBuilder
    $form  = form();                   //函数初始化 FormBuilder
    ?>

    <div class="bs-example">
        <?=$form->open(['files'=>true])?>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th>text</th>
                <th>
                    <?=$form->text('text',array_get($post,'text'),['class'=>'form-control','style'=>'width: 100px'])?>
                </th>
            </tr>
            <tr>
                <th width="150">file</th>
                <td>
                    <?=$form->file('file')?>
                </td>
            </tr>
            <tr>
                <th width="150">label</th>
                <td>
                    <?=$form->label('label','label标签')?>
                </td>
            </tr>
            <tr>
                <th>button</th>
                <td>
                    <?=$form->button('按钮')?>
                </td>
            </tr>
            <tr>
                <th>url</th>
                <td>
                    <?=$form->url('url',array_get($post,'url'),['placeholder'=>'http://localhost'])?>
                </td>
            </tr>
            <tr>
                <th>email</th>
                <td>
                    <?=$form->email('email',array_get($post,'email'),['placeholder'=>'123@qq.com'])?>
                </td>
            </tr>
            <tr>
                <th>hidden</th>
                <td>
                    <?=$form->hidden('hidden','hidden')?>
                </td>
            </tr>
            <tr>
                <th>password</th>
                <td>
                    <?=$form->password('password',['placeholder'=>'请输入密码'])?>
                </td>
            </tr>
            <tr>
                <th>checkbox</th>
                <td>
                    复选题: A<?=$form->checkbox('checkbox','A',array_get($post,'checkbox'))?>
                    B<?=$form->checkbox('checkbox','B',array_get($post,'checkbox'))?>
                    C<?=$form->checkbox('checkbox','C',array_get($post,'checkbox'))?>
                </td>
            </tr>
            <tr>
                <th>radio</th>
                <td>
                    单选题: A<?=$form->radio('radio','A',array_get($post,'radio'))?>
                    B<?=$form->radio('radio','B',array_get($post,'radio'))?>
                    C<?=$form->radio('radio','C',array_get($post,'radio'))?>
                </td>
            </tr>
            <tr>
                <th>token</th>
                <td>
                    <?=$form->token()?>
                </td>
            </tr>
            <tr>
                <th>select</th>
                <td>
                    <?=$form->select('select',['select1','select2','select3'],array_get($post,'select'))?>
                </td>
            </tr>
            <tr>
                <th>select2</th>
                <td>
                    <?=$form->select('select1',['select1'=>['select11','select12','select13'],'select2','select3'],array_get($post,'select1'))?>
                </td>
            </tr>
            <tr>
                <th>selectYear</th>
                <td>
                    <?=$form->selectYear('selectYear',2012,2017,array_get($post,'selectYear'))?>
                </td>
            </tr>
            <tr>
                <th>selectMonth</th>
                <td>
                    <?=$form->selectMonth('selectMonth',array_get($post,'selectMonth'))?>
                </td>
            </tr>
            <tr>
                <th>selectMonth</th>
                <td>
                    <?=$form->textarea('textarea',array_get($post,'textarea'))?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="form-actions col-sm-12" style="margin-bottom: 40px">
        <?=$form->submit('保存',['class'=>'btn btn-primary'])?>
        <?=$form->image('http://www.thinkphp.cn//Uploads/editor/2017-01-19/5880236ed217b.png')?>
        <?=$form->reset('重置',['class'=>'btn btn-default'])?>
    </div>

<?=$form->close()?>

</div>

</body>
</html>




