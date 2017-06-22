
<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<div class="content">
    <div class="container-fluid">
        <div id="pad-wrapper" class="new-user">
            <div class="row-fluid header">
                <h3>修改管理员密码</h3>
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
                        <?php echo $form->field($model,'name')->textInput(['class'=>'span9','Readonly '=>'Readonly ']);?>
                        <?php echo $form->field($model,'pwd')->passwordInput(['class'=>'span9']);?>
                        <div class="span11 field-box actions">
                            <?php echo Html::submitButton('修改',['class'=>'btn-glow primary'])?>
                            <span>或者</span>
                            <?php echo Html::resetButton('取消',['class'=>'reset'])?>
                        </div>
                        <?php ActiveForm::end();?>
                        <?php
                        if(Yii::$app->session->hasFlash('info')){
                            echo Yii::$app->session->setFlash('info');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
