<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<div class="block box">
    <div class="blank"></div>
    <div id="ur_here">
        当前位置: <a href=".">首页</a> <code>&gt;</code> 购物流程
    </div>
</div>
<div class="blank"></div>

<div class="block table">

        <div class="flowBox">
            <h6><span>收货人信息</span></h6>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">

                <?php $form=ActiveForm::begin(["fieldConfig"=>[
                    "template"=>'{input}{label}&nbsp;&nbsp;&nbsp;<div style="color: red;display: inline-block;">{error}</div>'
                ]])?>
                <tr>
                    <td bgcolor="#ffffff">收货人姓名:</td>
                    <td bgcolor="#ffffff"><?=$form->field($model,"consignee")->textInput(["class"=>"inputBg"])?> </td>
                    <td bgcolor="#ffffff">电子邮件地址:</td>
                    <td bgcolor="#ffffff"><?=$form->field($model,"email")->textInput(["class"=>"inputBg"])?></td>
                </tr>

                <tr>
                    <td bgcolor="#ffffff">详细地址:</td>
                    <td bgcolor="#ffffff"><?=$form->field($model,"detailedness")->textInput(["class"=>"inputBg"])?></td>
                    <td bgcolor="#ffffff">邮政编码:</td>
                    <td bgcolor="#ffffff"><?=$form->field($model,"postcode")->textInput(["class"=>"inputBg"])?></td>
                </tr>

                <tr>
                    <td bgcolor="#ffffff">手机:</td>
                    <td bgcolor="#ffffff"><?=$form->field($model,"phone")->textInput(["class"=>"inputBg"]);?></td>
                    <td bgcolor="#ffffff">是否默认<samp style="color: rgba(82, 82, 82, 0.55)">（默认只能有一个）</samp></td>
                    <td bgcolor="#ffffff"><?=$form->field($model,'default')->radioList(["0"=>"否","1"=>"是"])?></td>
                </tr>

                <tr>
                    <td colspan="4" align="center" bgcolor="#ffffff">
                        <?=Html::submitButton("配送至这个地址",["class"=>"bnt_blue_2"])?>
                        <input type="hidden" name="step" value="consignee" />
                        <input type="hidden" name="act" value="checkout" />
                        <input name="address_id" type="hidden" value="" />
                    </td>
                </tr>

                <?php ActiveForm::end();?>

            </table>
        </div>


</div>
<div class="blank"></div>
<link href="assets/style/qq.css" rel="stylesheet" type="text/css" />


<script type="text/javascript">
    var currentShowCity=0;
    $(document).ready(function(){
        $("#province").change(function(){
            $("#province").each(function(i,o){
                if($(this).attr("selected"))
                {
                    $(".city").hide();
                    $(".city").eq(i).show();
                    currentShowCity=i;
                }
            });
        });
        $("#province").change();
    });
</script>

<script type="text/javascript">
    //<![CDATA[
    var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
    function initFloatTips() {
        tips = document.getElementById('divQQbox');
        moveTips();
    };
    function moveTips() {
        var tt=50;
        if (window.innerHeight) {
            pos = window.pageYOffset
        }
        else if (document.documentElement && document.documentElement.scrollTop) {
            pos = document.documentElement.scrollTop
        }
        else if (document.body) {
            pos = document.body.scrollTop;
        }
        pos=pos-tips.offsetTop+theTop;
        pos=tips.offsetTop+pos/10;
        if (pos < theTop) pos = theTop;
        if (pos != old) {
            tips.style.top = pos+"px";
            tt=10;
//alert(tips.style.top);
        }
        old = pos;
        setTimeout(moveTips,tt);
    }
    //!]]>
    initFloatTips();
    function OnlineOver(){
        document.getElementById("divMenu").style.display = "none";
        document.getElementById("divOnline").style.display = "block";
        document.getElementById("divQQbox").style.width = "170px";
    }
    function OnlineOut(){
        document.getElementById("divMenu").style.display = "block";
        document.getElementById("divOnline").style.display = "none";
    }
    if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
    {
        HTMLElement.prototype.contains=function(obj)
        {
            while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
                if(obj==this) return true;
                obj=obj.parentNode;
            }
            return false;
        };
    }
    function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
        if (theEvent){
            var browser=navigator.userAgent; //取得浏览器属性
            if (browser.indexOf("Firefox")>0){ //如果是Firefox
                if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
                    return; //结束函式
                }
            }
            if (browser.indexOf("MSIE")>0){ //如果是IE
                if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
                    return; //结束函式
                }
            }
        }
        /*要执行的操作*/
        document.getElementById("divMenu").style.display = "block";
        document.getElementById("divOnline").style.display = "none";
    }
</script>

</body>
<script type="text/javascript">
    var process_request = "正在处理您的请求...";
    var username_empty = "- 用户名不能为空。";
    var username_shorter = "- 用户名长度不能少于 3 个字符。";
    var username_invalid = "- 用户名只能是由字母数字以及下划线组成。";
    var password_empty = "- 登录密码不能为空。";
    var password_shorter = "- 登录密码不能少于 6 个字符。";
    var confirm_password_invalid = "- 两次输入密码不一致";
    var email_empty = "- Email 为空";
    var email_invalid = "- Email 不是合法的地址";
    var agreement = "- 您没有接受协议";
    var msn_invalid = "- msn地址不是一个有效的邮件地址";
    var qq_invalid = "- QQ号码不是一个有效的号码";
    var home_phone_invalid = "- 家庭电话不是一个有效号码";
    var office_phone_invalid = "- 办公电话不是一个有效号码";
    var mobile_phone_invalid = "- 手机号码不是一个有效号码";
    var msg_un_blank = "* 用户名不能为空";
    var msg_un_length = "* 用户名最长不得超过7个汉字";
    var msg_un_format = "* 用户名含有非法字符";
    var msg_un_registered = "* 用户名已经存在,请重新输入";
    var msg_can_rg = "* 可以注册";
    var msg_email_blank = "* 邮件地址不能为空";
    var msg_email_registered = "* 邮箱已存在,请重新输入";
    var msg_email_format = "* 邮件地址不合法";
    var msg_blank = "不能为空";
    var no_select_question = "- 您没有完成密码提示问题的操作";
    var passwd_balnk = "- 密码中不能包含空格";
    var username_exist = "用户名 %s 已经存在";
    var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
    var btn_buy = "购买";
    var is_cancel = "取消";
    var select_spe = "请选择商品属性";
</script>
</html>
