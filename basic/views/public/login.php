<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="Generator" content="ECSHOP v2.7.3" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <link rel="shortcut icon" href="assets/favicon.ico" />
    <link rel="icon" href=assets/"animated_favicon.gif" type="image/gif" />
    <link href="assets/style/style.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="assets/style/common.js"></script><script type="text/javascript" src="assets/style/shopping_flow.js"></script></head>
<body>
<link href="assets/style/qq.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
    var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
    //设为首页 www.ecmoban.com
    function SetHome(obj,url){
        try{
            obj.style.behavior='url(#default#homepage)';
            obj.setHomePage(url);
        }catch(e){
            if(window.netscape){
                try{
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
                }catch(e){
                    alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
                }
            }else{
                alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
            }
        }
    }

    //收藏本站 bbs.ecmoban.com
    function AddFavorite(title, url) {
        try {
            window.external.addFavorite(url, title);
        }
        catch (e) {
            try {
                window.sidebar.addPanel(title, url, "");
            }
            catch (e) {
                alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
            }
        }
    }
</script>
<div class=" block header_bg" style="margin-bottom: 0px;">
    <div class="clear_f"></div>
    <div class="header_top logo_wrap"> <a class="logo_new" href="index.php"><img src="assets/images//logo.gif" /></a>
    </div>
</div>

<div style="clear:both"></div>

<div class="menu_box clearfix">
    <div class="block">
        <div class="menu">
            <a href="<?php echo Url::to(['index/index'])?>" >首页</a>

            <a href="<?php echo Url::to(['frock/index'])?>">
                女装 <span></span>
            </a>

            <a href="<?php echo Url::to(['index/index'])?>">
                男装 <span></span>
            </a>

            <a href="<?php echo Url::to(['index/index'])?>">
                裤子 <span></span>
            </a>

            <a href="<?php echo Url::to(['judge/index'])?>">
                品牌专区 <span></span>
            </a>

            <a href="<?php echo Url::to(['group/index'])?>">
                团购 <span></span>
            </a>

        </div>
    </div>
</div>
<div class="block block1">
    <div class="block box">
        <div class="blank"></div>
        <div id="ur_here">
            当前位置: <a href="mbmeilishuo/">首页</a> <code>&gt;</code> 用户中心
        </div>
    </div>
    <div class="blank"></div>

    <div class="usBox clearfix">
        <div class="usBox_1 f_l">
            <!--登入-->
            <table align="left" border="0" cellpadding="3" cellspacing="5" width="100%" style="position:relative;left:-200px;">
                <tr><sapn style="font-size: 30px;">登入</sapn></tr>
                <?php $form=ActiveForm::begin(['action'=>['public/enter']],["fieldConfig"=>['{label}{input}{error}']]);?>
                <tr>
                    <td align="right" width="25%"></td>
                    <td width="65%"><?php echo $form->field($model,"username")->textInput(['class'=>'inputBg','style'=>'width:300px;height:30px;border-radius:5px;']);?></td>
                </tr>
                <tr>
                    <td align="right"></td>
                    <td>
                        <?php echo $form->field($model,"userpass")->passwordInput(['class'=>"inputBg",'style'=>'width:300px;height:30px;border-radius:5px;position: relative;left:12px;'])?>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="left"  style="position: relative;left:120px;">
                        <input name="act" value="act_login" type="hidden">
                        <input name="back_act" value="./index.php" type="hidden"">
                        <input name="submit" value="" class="us_Submit" type="submit"> </td>
                </tr>
                <?php ActiveForm::end()?>
                <?php if(Yii::$app->session->hasFlash("info")){
                    echo Yii::$app->session->getFlash("info");
                }?>
            </table>
            <div>
            </div>





            <!--注册-->
            <?php $form=ActiveForm::begin(['fieldConfig'=>['template'=>'{label}{input}{error}']])?>
            <table align="left" border="0" cellpadding="3" cellspacing="5" width="100%" style="position:relative;left: 300px;top: -150px;">
                <tr>
                    <td align="right" style="font-size: 30px;position:relative;top: -60px;">注册</td>
                </tr>

                <tr>
                    <td align="right" width="25%"></td>
                    <td width="65%">
                        <?php echo $form->field($model,'useremail')->textInput(["class"=>'inputBg','style'=>'width:300px;height:30px;border-radius:5px;'])?>
                        <samp style="color: rgba(255, 34, 0, 0.55)">(目前仅支持QQ邮箱)</samp>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="25%"></td>
                    <td style="position: relative;left:190px;">
                        <?php echo Html::submitButton("注册")?>
                    </td>
                </tr>
            </table>
            <?php ActiveForm::end()?>
            <?php if(Yii::$app->session->hasFlash("info")){
                echo Yii::$app->session->getFlash("info");
            }?>

            <table>
                <tr>
                    <td align="right" style="font-size: 30px;position:relative;top: -60px;">其他账号登入：&nbsp;&nbsp;<img src="assets/Connect_logo_4.png" id="login_qq"/></td>
                </tr>
            </table>

        </div>
    </div>
</div>

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

<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?d7e112eaeea65921aeaadcc0af8f2853";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
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
</script>

<div class="footer" id="b" style="position: relative;left: 0px;">
    <div class="foot_con">
        <div class="f_list service_info">
            <div class="kefu"> <span class="tel_ico"></span>
                <p class="f20_f">4000-021-758</p>
                <p class="f14_f mt4_f"></p>
            </div>
            <ol class="business">
                <li>周一至周日：09:00-22:00</li>
            </ol>
        </div>


        <div class="f_list">
            <h4>新手上路 </h4>
            <ul>
                <li><a target="_blank" href="https://zhidao.baidu.com/question/473576440.html" title="售后流程">售后流程</a></li>
                <li><a target="_blank" href="https://zhidao.baidu.com/question/2137881348677829268.html" title="购物流程">购物流程</a></li>
            </ul>
        </div>


        <div class="f_list">
            <h4>购物常识 </h4>
            <ul>
                <li><a target="_blank" href="https://zhidao.baidu.com/question/340861301.html" title="如何分辨衣服是否是正品">如何分辨衣服是否是正品</a></li>
                <li><a target="_blank" href="http://jingyan.baidu.com/article/e52e3615a32f8e40c70c514f.html" title="如何辨别衣服质量的好坏 ">如何辨别衣服质量的好坏</a></li>
                <li><a target="_blank" href="https://zhidao.baidu.com/question/1670303253598364187.html" title="如何享受全国联保">如何享受全国联保</a></li>
            </ul>
        </div>
        <div class="f_list">
            <h4>关注我们</h4>
            <ul>
                <li class="sina_attention"> <a href="https://passport.weibo.cn/signin/welcome?entry=mweibo&r=http%253A%252F%252Fpad.weibo.cn%252F&_T_WM=f4c9e2ab57e5c25e6c0920c9cebc93bc" target="_blank"><span class="i_sina">&nbsp;</span>新浪微博</a></li>
                <li><a href="https://qzone.qq.com/" target="_blank"><span class="i_qzone">&nbsp;</span>QQ空间</a></li>
                <li><a href="http://t.qq.com/" target="_blank"><span class="i_tx">&nbsp;</span>腾讯微博</a></li>
            </ul>
        </div>
        <div class="blank"></div>



        <div class="blank"></div>

        <div id="bottomNav" class="rolling">
            <ul id="link_slide">
                <li>
                    <a href="mbmeilishuo/article.php?id=1">免责条款</a>

                    <a href="mbmeilishuo/article.php?id=2">隐私保护</a>

                    <a href="mbmeilishuo/article.php?id=3">咨询热点</a>

                    <a href="mbmeilishuo/article.php?id=4">联系我们</a>

                    <a href="mbmeilishuo/article.php?id=5">公司简介</a>

                    <a href="mbmeilishuo/wholesale.php">批发方案</a>

                    <a href="mbmeilishuo/myship.php">配送方式</a>
                </li>
            </ul>
        </div>
        <div class="text" style="height:1px ; width:1px; overflow:hidden;">
            Tel: 123456
            <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=851818184&amp;Site=%E9%BC%8E%E6%96%B0%E6%96%87%E5%8C%96QQ851818184&amp;Menu=yes" target="_blank"><img src="images/pa.gif" alt="QQ" border="0" height="16"> 851818184</a>
            <img src="images/msn.gif" alt="MSN" border="0" height="17" width="18"> <a href="msnim:chat?contact=ecmoban@msn.com">ecmoban@msn.com</a>
            <br>
        </div>
        <div class="record"> © 2005-2016 &nbsp; <a href="http://www.ecshop.com/" target="_blank">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span></strong></a>&nbsp; <a href="#" target="_blank">企业法人营业执照</a>&nbsp; 京ICP备11031139号&nbsp; 京公网安备110108006045&nbsp;<br>
            客服邮箱：kf@mobantang.com&nbsp;&nbsp;客服电话：4000-021-758&nbsp; 文明办网文明上网举报电话：010-0000000 &nbsp; <a href="#" target="_blank">违法不良信息举报中心</a> </div>
    </div>
    <div class="blank10"></div>

</div  >

<link href="assets/style/qq.css" rel="stylesheet" type="text/css">

<style type="text/css">
    #b{
        position: relative;
        left: 200px;;
    }
</style>

<link href="assets/style/qq.css" rel="stylesheet" type="text/css">
<div class="QQbox" id="divQQbox" style="width: 170px; top: 124.5px; position:fixed;">
    <div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
        <div class="t"></div>
        <div class="infobox">我们营业的时间<br>9:00-18:00</div>
        <div class="con">
            <ul>
                <li><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=851818184&amp;Site=%E9%BC%8E%E6%96%B0%E6%96%87%E5%8C%96QQ851818184&amp;Menu=yes" target="_blank"><img src="assets/images/pa.gif" alt="QQ" border="0" height="16">123456789</a> </li>
                <li><img src="assets/images/msn.gif" alt="MSN" border="0" height="17" width="18"> <a href="msnim:chat?contact=ecmoban@msn.com">123456789@qq.com</a></li>
                <li> 服务热线: 123456</li>
            </ul>
        </div>
        <div class="b"></div>
    </div>
    <div id="divMenu" onmouseover="OnlineOver();" style="display: block;"><img src="assets/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>

</body></html>

<style type="text/css">
    html{overflow-x:hidden}
</style>


<script type="text/javascript">
 var qqbtn= document.getElementById("login_qq");
    qqbtn.onclick=function(){
        window.location.href="<?php echo Url::to(["public/qqlogin"])?>";
    }
</script>