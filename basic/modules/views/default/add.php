<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
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
            <div class="row-fluid header">
                <h3>添加商品</h3>
            </div>
            <div class="row-fluid form-wrapper">
                <!-- left column -->
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
                        <?php  echo $form->field($model, 'cateid')->dropDownList($list, ['id' => 'cates']);?>
                        <?php echo $form->field($model,'title')->textInput(['class' => 'span9']);?>
                        <?php echo $form->field($model,'descr')->textarea(['id' => "wysi", 'class' => "span9 wysihtml5"]);?>
                        <?php echo $form->field($model,'price')->textInput(['class' => 'span9']);?>
                        <?php echo $form->field($model,'ishot')->radioList([0 => '不热卖', 1 => '热卖'], ['class' => 'span8']);?>
                        <?php echo $form->field($model,'issale')->radioList([0=>'不促销',1=> '促销'], ['class' => 'span8']);?>
                        <?php  echo $form->field($model,'promotion')->textInput(['class' => 'span9']);?>
                        <?php  echo $form->field($model,'stock')->textInput(['class' => 'span9']);?>
                        <?php  echo $form->field($model,'texture')->textInput(['class' => 'span9','placeholder'=>'比如：棉，汗布，真丝，针织，皮草，丝绸，化纤 ，呢绒，混纺等']);?>
                        <?php  echo $form->field($model,'technology')->textInput(['class' => 'span9','placeholder'=>' 比如：免烫处理，水洗等']);?>
                        <?php  echo $form->field($model,'style')->textInput(['class' => 'span9','placeholder'=>' 比如：中国风，青春流行，青春活力等']);?>
                        <?php  echo $form->field($model,'season')->textInput(['class' => 'span9','placeholder'=>' 比如：四季，春季，秋季,夏季，冬季等']);?>
                        <?php  echo $form->field($model,'thickness')->textInput(['class' => 'span9','placeholder'=>' 比如：厚，薄等']);?>
                        <?php  echo $form->field($model,'site')->textInput(['class' => 'span9']);?>
                        <?php echo $form->field($model,'cover')->fileInput(['class' => 'span9']);?>

                    <hr>
                        <div class="span11 field-box actions">
                            <?php echo Html::submitButton('提交', ['class' => 'btn-glow primary']); ?>
                                <span>OR</span>
                            <?php echo Html::resetButton('取消', ['class' => 'reset']); ?>
                        </div>
                        <?php ActiveForm::end(); ?>
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
        </div>
    </div>
</div>
<!-- end main container -->
