
<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\models\Flow;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use app\models\Shopping;
$shop=Shopping::find()->where("uid=:id",[":id"=>Yii::$app->session["home"]["id"]["id"]["uid"]])->count();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/style/qq.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <link rel="stylesheet" href="assets/css/config.css">
    <link href="assets/css/green.css" rel="alternate stylesheet" >
    <link href="assets/css/blue.css" rel="alternate stylesheet" >
    <link href="assets/css/red.css" rel="alternate stylesheet" >
    <link href="assets/css/orange.css" rel="alternate stylesheet" >
    <link href="assets/css/navy.css" rel="alternate stylesheet" >
    <link href="assets/css/dark-green.css" rel="alternate stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/green.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
</head>
<body>


<script src="https://qiyukf.com/script/98b2dd90c7b343c4cad446a5e100a1c9.js" defer async></script> <!--在线客服--><!--网易七鱼-->

<link rel="shortcut icon" href="assets/favicon.ico" />
<link rel="icon" href=assets/"animated_favicon.gif" type="image/gif" />
<link href="assets/style/style.css" rel="stylesheet" type="text/css" />
<link href="assets/style/qq.css" rel="stylesheet" type="text/css" />
<link href="assets/style/qq.css" rel="stylesheet" type="text/css">
<div style="position: relative;left:0px;;">
<div class="top_nav" >
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
    <div class="block" >
        <div class="header_r" style="position: relative;left: 100px;;">
            <script type="text/javascript" src="./style/transport.js"></script><script type="text/javascript" src="./style/utils.js"></script>        <font id="ECS_MEMBERZONE" >
                <samp><?php echo Yii::$app->session["home"]["isLogin"]?"欢迎：".Yii::$app->session["home"]["name"]."&nbsp;<a href=\"?r=index/end\">退出</a>":"<a href=\"?r=public/login\">登录&nbsp;|&nbsp;注册</a>"?></samp>
            </font>
        </div>
    </div>
</div>
<div class=" block header_bg" style="height:70px;">
    <div class="clear_f"></div>
    <div class="header_top logo_wrap" style="position: relative;top:0px;"> <a class="logo_new" href="index.php"><img src="assets/images//logo.gif" /></a>
        <samp><?php echo Yii::$app->session["home"]["isLogin"]?"<ul class=\"cart_info\" style=\"position: relative;left:80px;\">
            <li id=\"ECS_CARTINFO\"><span class=\"carts_num none_f\"><a href=\"?r='flow/index'\">$shop</a></span> <em class=\"i_cart\">&nbsp;</em><a href=\"?r=flow/index\">查看购物车</a></li>
            <li><a href=\"#\">我的订单</a></li>
            <li><a href=\"?r=flow/site\"target=\"_blank\"><em class=\"i_order\">&nbsp;</em>添加收货地址</a></li>
            <li><a href=\"?r=flow/shipping\"\" target=\"_blank\"><em class=\"i_order\">&nbsp;</em>我的收货地址</a></li>
        </ul>":""?></samp>
    </div>
</div>
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
<div class="wrapper">
    <header class="no-padding-bottom header-alt">
        <div class="container no-padding">
            <div class="col-xs-12 col-md-6 top-search-holder no-margin"></div>
        </div>
        <div class="animate-dropdown"></div>
    </header>
    <div id="single-product">
        <div class="container">

            <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="owl-single-product">


                        <div class="tb-booth tb-pic tb-s310">
                            <?php foreach($data as $img):?>
                                <a data-rel="prettyphoto">
                                    <img src="assets/uploads/<?=$img->cover?>" class="jqzoom" />
                                </a>
                            <?php endforeach;?>
                        </div>
                    </div>


                    <div class="single-product-gallery-thumbs gallery-thumbs">
                        <div id="owl-single-product-thumbnails">
                            <?php foreach($information as $images):?>
                                <ul class="tb-thumb" id="thumblist">
                                    <li class="tb-selected"><div class="tb-pic tb-s40"><a href="#"><img src="assets/uploads/<?php echo $images->picture?>" mid="assets/uploads/<?php echo $images->picture?>" big="assets/uploads/<?php echo $images->picture?>"></a></div></li>
                                </ul>
                            <?php endforeach;?>
                        </div>
                    </div>

                </div><!-- /.single-product-gallery -->
            </div><!-- /.gallery-holder -->
            <div class="no-margin col-xs-12 col-sm-7 body-holder">




                <?php $form=ActiveForm::begin(["action"=>["particular/add"]]);?>

                <div class="body">
                    <?php foreach($data as $dt):?>
                    <div class="title"><a href="#"><?=$dt->title?></a></div>
                    <div class="excerpt">
                    </div>
                    <div class="prices">
                        <div class="price-current" id="promotion"> <?=$form->field($modeles,"promotion")->textInput(["value"=>$dt->promotion,'style'=>'border:0;color: rgba(255, 42, 10, 0.55)']);?></div>


                        <div class="price-current" id="promotion"  "><del style="color: rgba(82, 82, 82, 0.55)"><?=$form->field($modeles,"actualprice")->textInput(["value"=>$dt->price,'style'=>'border:0;color: rgba(82, 82, 82, 0.55) ']);?></del></div>

                    <div class="price-current"> <?=$form->field($modeles,"pid")->hiddenInput(["value"=>$dt->productid]);?></div> <!--商品ID-->


                </div>
            <br>
                <span style="font-weight: bold;">库存：<?=$dt->stock?></span>

            <?php endforeach;?>

                <br>
                <br>
                颜色：
                <div class="price-current"><?=$form->field($modeles,"color")->dropDownList(ArrayHelper::map($color,'color', 'color'));?></div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                尺码：
                <div class="price-current"> <?=$form->field($modeles,"size")->dropDownList(ArrayHelper::map($size,'size', 'size'));?></div>
                <br>
                <br>
                <div class="qnt-holder" style="margin-left: 8px;">
                    <div class="le-quantity" style="height: 53px;">
                        <form>
                            <a class="minus" href="#reduce" style=""></a>
                            <?=$form->field($modeles,"count")->textInput(["readonly"=>"readonly","value"=>"1",'style'=>'border:0px;background:rgba(0, 0, 0, 0);margin-top:-10px;']);?>
                            <a class="plus" href="#add"></a>
                        </form>
                    </div>
                    <?=Yii::$app->session["home"]["isLogin"]?Html::submitButton("加入购物城",["class"=>"le-button huge"]):Html::button("加入购物车",["class"=>'le-button huge','onclick'=>'alert(\'亲！请您先登入。\')']);?>
                    <br>
                    <br>
                </div>
            </div>







            <?php ActiveForm::end();?>
        </div><!-- /.body-holder -->
    </div><!-- /.container -->
</div>
</div>
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
</script>
<section id="single-product-tab">
    <div class="container">
        <div class="tab-holder">

            <ul class="nav nav-tabs simple" >
                <li class="active"><a href="#description" data-toggle="tab">商品详情</a></li>
                <li><a href="#additional-info" data-toggle="tab">商品属性</a></li>
                <li><a href="#reviews" data-toggle="tab">用户评论(3)</a></li>
            </ul>

            <?php foreach($data as $date):?>
            <div class="tab-content">
                <div class="tab-pane active" id="description">
                    <p><?=$date['descr']?></p>
                </div>
                <div class="tab-pane" id="additional-info">
                    <ul class="tabled-data">

                        <li>
                            <label>材质信息：</label>
                            <div class="value"><?=$date['texture']?></div>
                        </li>
                        <li>
                            <label>工艺处理：</label>
                            <div class="value"><?=$date['technology']?></div>
                        </li>
                        <li>
                            <label>基础风格：</label>
                            <div class="value"><?=$date['style']?></div>
                        </li>
                        <li>
                            <label>适用季节：</label>
                            <div class="value"><?=$date['season']?></div>
                        </li>
                        <li>
                            <label>厚薄：</label>
                            <div class="value"><?=$date['thickness']?></div>
                        </li>
                        <li>
                            <label>产地：</label>
                            <div class="value"><?=$date['site']?></div>
                        </li>
                    </ul>
                </div>

                <?php endforeach;?>

                <div class="tab-pane" id="reviews">
                    <div class="comments">
                        <div class="comment-item">
                            <div class="row no-margin">
                                <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                    <div class="avatar">
                                        <img alt="avatar" src="assets/images/default-avatar.jpg">
                                    </div><!-- /.avatar -->
                                </div><!-- /.col -->

                                <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                    <div class="comment-body">
                                        <div class="meta-info">
                                            <div class="author inline">
                                                <a href="#" class="bold">John Smith</a>
                                            </div>
                                            <div class="star-holder inline">
                                                <div class="star" data-score="4"></div>
                                            </div>
                                            <div class="date inline pull-right">
                                                12.07.2013
                                            </div>
                                        </div><!-- /.meta-info -->
                                        <p class="comment-text">
                                            Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis.
                                        </p><!-- /.comment-text -->
                                    </div><!-- /.comment-body -->

                                </div><!-- /.col -->

                            </div><!-- /.row -->
                        </div><!-- /.comment-item -->

                        <div class="comment-item">
                            <div class="row no-margin">
                                <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                    <div class="avatar">
                                        <img alt="avatar" src="assets/images/default-avatar.jpg">
                                    </div><!-- /.avatar -->
                                </div><!-- /.col -->

                                <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                    <div class="comment-body">
                                        <div class="meta-info">
                                            <div class="author inline">
                                                <a href="#" class="bold">Jane Smith</a>
                                            </div>
                                            <div class="star-holder inline">
                                                <div class="star" data-score="5"></div>
                                            </div>
                                            <div class="date inline pull-right">
                                                12.07.2013
                                            </div>
                                        </div><!-- /.meta-info -->
                                        <p class="comment-text">
                                            Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis.
                                        </p><!-- /.comment-text -->
                                    </div><!-- /.comment-body -->

                                </div><!-- /.col -->

                            </div><!-- /.row -->
                        </div><!-- /.comment-item -->

                        <div class="comment-item">
                            <div class="row no-margin">
                                <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                    <div class="avatar">
                                        <img alt="avatar" src="assets/images/default-avatar.jpg">
                                    </div><!-- /.avatar -->
                                </div><!-- /.col -->

                                <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                    <div class="comment-body">
                                        <div class="meta-info">
                                            <div class="author inline">
                                                <a href="#" class="bold">John Doe</a>
                                            </div>
                                            <div class="star-holder inline">
                                                <div class="star" data-score="3"></div>
                                            </div>
                                            <div class="date inline pull-right">
                                                12.07.2013
                                            </div>
                                        </div><!-- /.meta-info -->
                                        <p class="comment-text">
                                            Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis.
                                        </p><!-- /.comment-text -->
                                    </div><!-- /.comment-body -->

                                </div><!-- /.col -->

                            </div><!-- /.row -->
                        </div><!-- /.comment-item -->
                    </div><!-- /.comments -->

                    <div class="add-review row">
                        <div class="col-sm-8 col-xs-12">
                            <div class="new-review-form">
                                <form id="contact-form" class="contact-form" method="post" >


                                </form><!-- /.contact-form -->
                            </div><!-- /.new-review-form -->
                        </div><!-- /.col -->
                    </div><!-- /.add-review -->

                </div><!-- /.tab-pane #reviews -->
            </div>
        </div>
    </div>
</section>
</div>
<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="assets/js/gmap3.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/css_browser_selector.min.js"></script>
<script src="assets/js/echo.min.js"></script>
<script src="assets/js/jquery.easing-1.3.min.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/jquery.raty.min.js"></script>
<script src="assets/js/jquery.prettyPhoto.min.js"></script>
<script src="assets/js/jquery.customSelect.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="switchstylesheet/switchstylesheet.js"></script>
<script>
    $(document).ready(function(){
        $(".changecolor").switchstylesheet( { seperator:"color"} );
        $('.show-theme-options').click(function(){
            $(this).parent().toggleClass('open');
            return false;
        });
    });

    $(window).bind("load", function() {
        $('.show-theme-options').delay(2000).trigger('click');
    });
</script>
<script src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript" src="assets/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.imagezoom.min.js"></script>
<style type="text/css">
    html{overflow-y:scroll;}
    div,ul,li{padding:0; margin:0;}
    li{list-style-type:none;}

    /* box */
    .tb-pic a{display:table-cell;text-align:center;vertical-align:middle;}
    .tb-pic a img{vertical-align:middle;}
    .tb-pic a{*display:block;*font-family:Arial;*line-height:1;}
    .tb-thumb{margin:10px 0 0;overflow:hidden;}
    .tb-thumb li{background:none repeat scroll 0 0 transparent;float:left;height:42px;margin:0 6px 0 0;overflow:hidden;padding:1px;}
    .tb-s310, .tb-s310 a{height:310px;width:310px;}
    .tb-s310, .tb-s310 img{max-height:310px;max-width:310px;}
    .tb-s310 a{*font-size:271px;}
    .tb-s40 a{*font-size:35px;}
    .tb-s40, .tb-s40 a{height:40px;width:40px;}
    .tb-thumb .tb-selected{background:none repeat scroll 0 0 #C30008;height:40px;padding:2px;}
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $("#thumblist li a").click(function(){
            $(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
            $(".jqzoom").attr('src',$(this).find("img").attr("mid"));
            $(".jqzoom").attr('rel',$(this).find("img").attr("big"));
        });
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

<style type="text/css">
    html{
        width: 100%px;
    }
</style>
</body>
</html>















































































































