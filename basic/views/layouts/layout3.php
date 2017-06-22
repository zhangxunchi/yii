
<?php
use yii\helpers\Url;
use app\models\Shopping;
$shop=Shopping::find()->where("uid=:id",[":id"=>Yii::$app->session["home"]["id"]["id"]["uid"]])->count();
?><!--头部-->
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

<script src="https://qiyukf.com/script/98b2dd90c7b343c4cad446a5e100a1c9.js" defer async></script> <!--在线客服--><!--网易七鱼-->


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



<div class="top_nav">
    <script type="text/javascript">
        //初始化主菜单
        function sw_nav(obj,tag)
        {

            var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
            if(tag==1)
            {
                DisSub.style.display = "block";


            }
            else
            {
                DisSub.style.display = "none";

            }

        }

    </script>
    <div class="block">
        <div class="header_r">
            <script type="text/javascript" src="./style/transport.js"></script><script type="text/javascript" src="./style/utils.js"></script>        <font id="ECS_MEMBERZONE" >
               <samp><?php echo Yii::$app->session["home"]["isLogin"]?"欢迎：".Yii::$app->session["home"]["name"]."<a href=\"?r=index/end\">退出</a>":"<a href=\"?r=public/login\">登录&nbsp;|&nbsp;注册</a>"?></samp>
            </font>
        </div>
    </div>
</div>

<div class=" block header_bg" style="margin-bottom: 0px;">
    <div class="clear_f"></div>
    <div class="header_top logo_wrap"> <a class="logo_new" href="index.php"><img src="assets/images//logo.gif" /></a>
        <samp><?php echo Yii::$app->session["home"]["isLogin"]?"<ul class=\"cart_info\" style=\"position: relative;left:80px;\">
            <li id=\"ECS_CARTINFO\"><span class=\"carts_num none_f\"><a href=\"?r='flow/index'\">$shop</a></span> <em class=\"i_cart\">&nbsp;</em><a href=\"?r=flow/index\">查看购物车</a></li>
            <li><a href=\"#\">我的订单</a></li>
            <li><a href=\"?r=flow/site\"target=\"_blank\"><em class=\"i_order\">&nbsp;</em>添加收货地址</a></li>
            <li><a href=\"?r=flow/shipping\"\" target=\"_blank\"><em class=\"i_order\">&nbsp;</em>我的收货地址</a></li>
        </ul>":""?></samp>
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


<?php echo $content;?>

<!--底部-->

<div class="footer">

    <div class="foot_con" id="b">
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

</div>




<link href="assets/style/qq.css" rel="stylesheet" type="text/css">


<style type="text/css">
    #b{
        position: relative;
        left: 200px;;
    }
</style>
</body>