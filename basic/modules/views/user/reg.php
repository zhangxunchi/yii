
<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<div class="content">
    <div class="container-fluid">
        <div id="pad-wrapper" class="new-user">
            <div class="row-fluid header">
                <h3>添加用户</h3>
            </div>

            <div class="row-fluid form-wrapper">
                <!-- left column -->
                <div class="span9 with-sidebar">
                    <div class="container">
                        <?php
                        if(Yii::$app->session->hasFlash('info')){
                            echo Yii::$app->session->getFlash('info');
                        }
                        $form=ActiveForm::begin(['fieldConfig'=>[
                            'template'=>'<div class="span12 field-box">{label}{input}</div>{error}'
                        ]])?>

                        <?php echo $form->field($model,'username')->textInput(['class'=>'span9']);?>
                        <?php echo $form->field($model,'useremail')->textInput(['class'=>'span9']);?>
                        <?php echo $form->field($model,'userpass')->passwordInput(['class'=>'span9']);?>
                        <div class="span11 field-box actions">
                            <?php echo Html::submitButton('创建',['class'=>'btn-glow primary'])?>
                            <span>或者</span>
                            <?php echo Html::resetButton('取消',['class'=>'reset'])?>
                        </div>
                        <?php ActiveForm::end();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
