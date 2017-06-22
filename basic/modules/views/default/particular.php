<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<style>
    .span8 div{
        display:inline;
    }
    .help-block-error {
        color:red;
        display:inline;
    }
</style>
<link rel="stylesheet" href="assets/admin/css/compiled/new-user.css" type="text/css" media="screen" />
<!-- main container -->
<div class="content">
    <div class="container-fluid">
        <div id="pad-wrapper" class="new-user">


            <?php foreach($data as $da):?>
                <div class="row-fluid header">
                    <h3>添加 <span style="color: rgba(255, 0, 20, 0.55)"><?=$da->title?></span>商品详细信息</h3>
                </div>
            <?php endforeach;?>

            <div class="row-fluid form-wrapper">
                <div class="span9 with-sidebar">
                    <div class="container">
                        <?php
                        if (Yii::$app->session->hasFlash('info')) {
                            echo Yii::$app->session->getFlash('info');
                        }
                        $form = ActiveForm::begin([
                            'fieldConfig' => [
                                'template' => '<div class="span12 field-box">{label}{input}{error}</div>',
                            ],
                            'options'=>['enctype'=>'multipart/form-data'],
                        ]);
                        ?>

                        <?php echo $form->field($model,'size')->textInput(['class' => 'span9']);?>
                        <?php echo $form->field($model,'color')->textarea(['id' => "wysi", 'class' => "span9 wysihtml5"]);?>
                        <?php echo $form->field($model,'picture')->fileInput(['class' => 'span9']);?>
                        <?php echo $form->field($model,'pid')->hiddenInput(['class' => 'span8','value'=>Yii::$app->request->get("id")]);?><!--接受传过来的商品ID-->

                        <hr>
                        <div class="span11 field-box actions">
                            <?php echo Html::submitButton('提交', ['class' => 'btn-glow primary']); ?>
                            <span>OR</span>
                            <?php echo Html::resetButton('取消', ['class' => 'reset']); ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                        <a href="<?php echo \yii\helpers\Url::to(["default/minute",'id'=>Yii::$app->request->get("id")])?>">返回上一层</a>
                    </div>
                </div>
                <!-- side right column -->
                <div class="span3 form-sidebar pull-right">
                    <div class="alert alert-info hidden-tablet">
                        <i class="icon-lightbulb pull-left"></i>
                        请在左侧表单当中填入要添加的商品信息,包括商品名称,描述,图片等
                    </div>
                    <h6>商城用户说明</h6>
                    <p>可以在前台进行购物</p>
                </div>
            </div>




            <div class="table-products section"">

                <div class="row-fluid">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="span3">
                                <input type="checkbox" />商品尺寸
                            </th>

                            <th class="span3">
                                <span class="line"></span>商品颜色
                            </th>
                            <th class="span3">
                                <span class="line"></span>商品详细图片
                            </th>
                            <th>
                                <span class="line"></span>创建时间
                            </th>
                            <th>
                                <span class="line"></span>操作
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                        <?php  foreach($datas as $information):?>
                            <tr class="first">
                                <td>
                                    <input type="checkbox" />
                                    <samp><?php echo $information->size?></samp>
                                </td>
                                <td class="description">
                                    <?=$information->color?>
                                </td>
                                <td class="description">
                                    <div  style="width: 100px;height: 100px;">
                                        <img src="../uploads/<?=$information->picture?>"/>
                                    </div>
                                </td>
                                <td class="description">
                                    <?=$information->creationtime?>
                                </td>

                                <td class="description">
                                    <a href="<?php yii\helpers\Url::to(["default/delete",'id'=>$information->id])?>">删除</a>
                                </td>

                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>


            <div class="pagination">
                <?php echo yii\widgets\LinkPager::widget(["pagination"=>$pagination])?>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- end main container -->
