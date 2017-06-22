<?php

use yii\helpers\Url;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta name="Generator" content="ECSHOP v2.7.3">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="assets/mbmeilishuo/favicon.ico">
    <link rel="icon" href="assets/mbmeilishuo/animated_favicon.gif" type="image/gif">
    <link href="assets/style/style.css" rel="stylesheet" type="text/css">
    <link rel="alternate" type="assets/application/rss+xml" href="mbmeilishuo/feed.php">
    <script src="assets/style/hm.js"></script><script type="text/javascript" src="assets/style/common.js"></script><script type="text/javascript" src="assets/style/index.js"></script>
    <link href="assets/style/qq.htm" rel="stylesheet" type="text/css">
</head>


<body class="index_page" style="min-width:1200px;">



<script src="https://qiyukf.com/script/98b2dd90c7b343c4cad446a5e100a1c9.js" defer async></script> <!--在线客服--><!--网易七鱼-->



<script type="text/javascript">
    var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
    //设为首页 www.chuanke.com/s2260700.html
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
            <script type="text/javascript" src="assets/style/transport.js"></script><script type="text/javascript" src="assets/style/utils.js"></script>
            <?php echo Yii::$app->session["home"]["name"]?"欢迎：".Yii::$app->session["home"]["name"]."&nbsp;<a href=\"?r=index/end\">退出</a>":"<a href=\"?r=public/login\">登录&nbsp;|&nbsp;注册</a>"?>
        </div>
    </div>
</div>
<div class=" block header_bg" style="margin-bottom: 0px;">
    <div class="clear_f"></div>
    <div class="header_top logo_wrap"> <a class="logo_new" href="mbmeilishuo/index.php"><img src="assets/images/logo.gif"></a>
        <div class="ser_n">
            <form id="searchForm" class="searchBox" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchForm()">
                <div class="search-table"> <span class="cur" data-type="1">宝贝</span> <em class="arrow"></em> </div>
        <span class="ipt1"><em class="i_search"></em>
        <input name="keywords" id="keyword"  class="searchKey" type="text">
        </span> <span class="ipt2">
        <input name="imageField" class="fm_hd_btm_shbx_bttn" value="搜 索" type="submit">
        </span>
            </form>
            <div class="clear_f"></div>
            <ul class="searchType none_f">
            </ul>
        </div>



        <?php echo Yii::$app->session["home"]["isLogin"]?"<ul class=\"cart_info\">
            <li id=\"ECS_CARTINFO\"><span class=\"carts_num none_f\"><a href=\"#\"></a>$shop</span><em class=\"i_cart\">&nbsp;</em><a href=\"?r=flow/index\">查看购物车</a></li>
            <li><a href=\"mbmeilishuo/user.php\" target=\"_blank\"><em class=\"i_order\">&nbsp;</em>我的订单</a></li>
            <li><a href=\"?r=index/update\"\" target=\"_blank\"><em class=\"i_order\">&nbsp;</em>修改密码</a></li>
        </ul>":""?>




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
<style type="text/css">
    .container, .container *{margin:0; padding:0;}
    .container{width:100%; height:419px; overflow:hidden;position:relative;}
    .slider{position:absolute; width:100%; height:419px;}
    .slider li , .slider li a{list-style:none; float:left;width:100%; height:419px;}
    .slider img{width:100%; height:419px; display:block;}
    .slider2{width:2000px;}
    .slider2 li{float:left;}
    .num{position:absolute; right:5px; bottom:5px; width:800px; margin:0 auto;}
    .num li{
        float: left;
        color: #f69;
        text-align: center;
        line-height: 16px;
        width: 16px;
        height: 16px;
        font-family: Arial;
        font-size: 12px;
        cursor: pointer;
        overflow: hidden;
        margin: 3px 1px;
        border: 1px solid #f69;
        background-color: #fff;
    }
    .num li.on{
        color: #fff;
        line-height: 21px;
        width: 21px;
        height: 21px;
        font-size: 16px;
        margin: 0 1px;
        border: 0;
        background-color: #f69;
        font-weight: bold;
    }
</style>
<div style="overflow: hidden; position: relative;" class="container" id="idTransformView">
    <ul style="position: absolute; left: 0px; top: -143.2px;" class="slider" id="idSlider">
        <li style="background:url(assets/images/20141120hqkopb.jpg) center 0 no-repeat; position:relative;"><a href="#" target="_blank"></a></li>
        <li style="background:url(assets/images/20141021aziwud.png) center 0 no-repeat; position:relative;"><a href="#" target="_blank"></a></li>
        <li style="background:url(assets/images/20141022dacwiw.png) center 0 no-repeat; position:relative;"><a href="#" target="_blank"></a></li>
        <li style="background:url(assets/images/20141022vbuvgk.png) center 0 no-repeat; position:relative;"><a href="#" target="_blank"></a></li>
        <li style="background:url(assets/images/20141022nvtssl.png) center 0 no-repeat; position:relative;"><a href="#" target="_blank"></a></li>

    </ul>
    <ul class="num" id="idNum">


        <li class="on">
            1    </li>
        <li class="">
            2    </li>
        <li class="">
            3    </li>
        <li class="">
            4    </li>
        <li class="">
            5    </li>

    </ul>
</div>
<script type="text/javascript">
    var $ = function (id) {
        return "string" == typeof id ? document.getElementById(id) : id;
    };
    var Class = {
        create: function() {
            return function() {
                this.initialize.apply(this, arguments);
            }
        }
    }
    Object.extend = function(destination, source) {
        for (var property in source) {
            destination[property] = source[property];
        }
        return destination;
    }
    var TransformView = Class.create();
    TransformView.prototype = {
        //容器对象,滑动对象,切换参数,切换数量
        initialize: function(container, slider, parameter, count, options) {
            if(parameter <= 0 || count <= 0) return;
            var oContainer = $(container), oSlider = $(slider), oThis = this;
            this.Index = 0;//当前索引

            this._timer = null;//定时器
            this._slider = oSlider;//滑动对象
            this._parameter = parameter;//切换参数
            this._count = count || 0;//切换数量
            this._target = 0;//目标参数

            this.SetOptions(options);

            this.Up = !!this.options.Up;
            this.Step = Math.abs(this.options.Step);
            this.Time = Math.abs(this.options.Time);
            this.Auto = !!this.options.Auto;
            this.Pause = Math.abs(this.options.Pause);
            this.onStart = this.options.onStart;
            this.onFinish = this.options.onFinish;

            oContainer.style.overflow = "hidden";
            oContainer.style.position = "relative";

            oSlider.style.position = "absolute";
            oSlider.style.top = oSlider.style.left = 0;
        },
        //设置默认属性
        SetOptions: function(options) {
            this.options = {//默认值
                Up:			true,//是否向上(否则向左)
                Step:		5,//滑动变化率
                Time:		10,//滑动延时
                Auto:		true,//是否自动转换
                Pause:		2000,//停顿时间(Auto为true时有效)
                onStart:	function(){},//开始转换时执行
                onFinish:	function(){}//完成转换时执行
            };
            Object.extend(this.options, options || {});
        },
        //开始切换设置
        Start: function() {
            if(this.Index < 0){
                this.Index = this._count - 1;
            } else if (this.Index >= this._count){this.Index = 0;}

            this._target = -1 * this._parameter * this.Index;
            this.onStart();
            this.Move();
        },
        //移动
        Move: function() {
            clearTimeout(this._timer);
            var oThis = this, style = this.Up ? "top" : "left", iNow = parseInt(this._slider.style[style]) || 0, iStep = this.GetStep(this._target, iNow);

            if (iStep != 0) {
                this._slider.style[style] = (iNow + iStep) + "px";
                this._timer = setTimeout(function(){oThis.Move();}, this.Time);
            } else {
                this._slider.style[style] = this._target + "px";
                this.onFinish();
                if (this.Auto) { this._timer = setTimeout(function(){oThis.Index++; oThis.Start();}, this.Pause); }
            }
        },
        //获取步长
        GetStep: function(iTarget, iNow) {
            var iStep = (iTarget - iNow) / this.Step;
            if (iStep == 0) return 0;
            if (Math.abs(iStep) < 1) return (iStep > 0 ? 1 : -1);
            return iStep;
        },
        //停止
        Stop: function(iTarget, iNow) {
            clearTimeout(this._timer);
            this._slider.style[this.Up ? "top" : "left"] = this._target + "px";
        }
    };
    window.onload=function(){
        function Each(list, fun){
            for (var i = 0, len = list.length; i < len; i++) {fun(list[i], i);}
        };

        var objs = $("idNum").getElementsByTagName("li");

        var tv = new TransformView("idTransformView", "idSlider", 419, 5, {
            onStart : function(){ Each(objs, function(o, i){o.className = tv.Index == i ? "on" : "";}) }//按钮样式
        });

        tv.Start();

        Each(objs, function(o, i){
            o.onmouseover = function(){
                o.className = "on";
                tv.Auto = false;
                tv.Index = i;
                tv.Start();
            }
            o.onmouseout = function(){
                o.className = "";
                tv.Auto = true;
                tv.Start();
            }
        })

        ////////////////////////test2

        var objs2 = $("idNum2").getElementsByTagName("li");

        var tv2 = new TransformView("idTransformView2", "idSlider2",1200, 3, {
            onStart: function(){ Each(objs2, function(o, i){o.className = tv2.Index == i ? "on" : "";}) },//按钮样式
            Up: false
        });

        tv2.Start();

        Each(objs2, function(o, i){
            o.onmouseover = function(){
                o.className = "on";
                tv2.Auto = false;
                tv2.Index = i;
                tv2.Start();
            }
            o.onmouseout = function(){
                o.className = "";
                tv2.Auto = true;
                tv2.Start();
            }
        })

        $("idStop").onclick = function(){tv2.Auto = false; tv2.Stop();}
        $("idStart").onclick = function(){tv2.Auto = true; tv2.Start();}
        $("idNext").onclick = function(){tv2.Index++; tv2.Start();}
        $("idPre").onclick = function(){tv2.Index--;tv2.Start();}
        $("idFast").onclick = function(){ if(--tv2.Step <= 0){tv2.Step = 1;} }
        $("idSlow").onclick = function(){ if(++tv2.Step >= 10){tv2.Step = 10;} }
        $("idReduce").onclick = function(){ tv2.Pause-=1000; if(tv2.Pause <= 0){tv2.Pause = 0;} }
        $("idAdd").onclick = function(){ tv2.Pause+=1000; if(tv2.Pause >= 5000){tv2.Pause = 5000;} }

        $("idReset").onclick = function(){
            tv2.Step = Math.abs(tv2.options.Step);
            tv2.Time = Math.abs(tv2.options.Time);
            tv2.Auto = !!tv2.options.Auto;
            tv2.Pause = Math.abs(tv2.options.Pause);
        }

    }
</script>
<div class="blank5"></div>
<div class="blank"></div><div class="blank"></div>
<div class="block clearfix">
    <script type="text/javascript">
        //初始化主菜单
        function sw_nav2(obj,tag)
        {
            var DisSub2 = document.getElementById("DisSub2_"+obj);
            var HandleLI2= document.getElementById("HandleLI2_"+obj);
            if(tag==1)
            {
                DisSub2.style.display = "block";
                HandleLI2.className="current";
            }
            else
            {
                DisSub2.style.display = "none";
                HandleLI2.className="";
            }
        }
    </script>



    <div id="category_tree">
    </div>
    <div class="AreaL">

        <div class="box">
            <div class="box_1">
                <h3>
                    <span><a href="mbmeilishuo/article_cat.php?id=12">站内快讯</a></span>
                    <a href="mbmeilishuo/article_cat.php?id=12"><img src="assets/images/more.gif" alt="more"></a>
                </h3>
                <div class="boxCenterList RelaArticle">
                    <?php foreach($data as $da):?>
                        <a href="#"><?=$da->title?></a><?=$da->time?><br>
                    <?php  endforeach;?>
                </div>
            </div>
        </div>
        <div class="blank5"></div>

    </div>
    <div class="Arear">
        <div class="sale_box clearfix">
            <h3><span>特价商品</span></h3>
            <div class="clearfix">
                <?php  foreach($depreciate as $data):?>
                    <a href="<?php echo Url::to(['particular/index','id'=>$data->productid])?>">
                        <ul class="clearfix">
                            <li class="goodsimg"><img src="assets/uploads/<?=$data->cover?>" class="B_blue" border="0"></li>
                            <li> <p><?php echo $data->title?></p>
                                促销价：<span class="f1"><?php echo $data->promotion?$data->promotion:$data->price?></span></li>
                        </ul>
                    </a>
                <?php endforeach;?>
            </div>
        </div>
        <div class="blank"></div>
    </div>
    <div class="goodsBox_1">

        <div class="xm-box">
            <h4 class="title"><span>新品上架</span><a class="more" href="mbmeilishuo/search.php?intro=new">更多</a></h4>
            <div id="show_new_area" class="clearfix">
                <?php foreach($Protestantism as $date):?>
                    <div class="goodsItem">
                        <a href="<?php echo Url::to(['particular/index','id'=>$date->productid])?>"><img src="assets/uploads/<?=$date->cover?>"alt="<?=$date->title?>" class="goodsimg"></a><br>
                        <p class="f1"><a href="<?php echo Url::to(['particular/index','id'=>$date->productid])?>" title="<?=$date->title?>"><?=$date->title?></a></p>
                        市场价：<font class="market"><?=$date->price?></font> <br>
                        本店价：<font class="f1"><?php echo $date->promotion?$date->promotion:$date->price?></font>
                    </div>
                <?php endforeach;?>
            </div>
        </div>

        <div class="blank"></div>

        <div class="xm-box">
            <h4 class="title"><span>热卖商品</span> <a class="more" href="mbmeilishuo/search.php?intro=hot">更多</a></h4>
            <div id="show_hot_area" class="clearfix">
                <?php foreach($bestseller as  $information):?>
                    <div class="goodsItem">
                        <a href="<?php echo Url::to(['particular/index','id'=>$information->productid])?>"><img src="assets/uploads/<?=$information->cover?>"alt="<?=$information->title?>" class="goodsimg"></a><br>
                        <p class="f1"><a href="<?php echo Url::to(['particular/index','id'=>$information->productid])?>" title="<?=$information->title?>"><?=$information->title?></a></p>
                        市场价：<font class="market"><?=$information->price?></font> <br>
                        本店价：<font class="f1"><?php echo $information->promotion?$information->promotion:$information->price?></font>
                    </div>
                <?php endforeach;?>
            </div>
        </div>

    </div>

    <div class="blank"></div>
    <div class="xm-box">
        <h4 class="title"><span>精品推荐</span> <a class="more" href="assets/mbmeilishuo/search.php?intro=best">更多</a></h4>
        <div id="show_best_area" class="clearfix">


            <?php foreach($boutique as  $quality):?>
                <div class="goodsItem">
                    <a href="<?php echo Url::to(['particular/index','id'=>$quality->productid])?>"><img src="assets/uploads/<?=$quality->cover?>"alt="<?=$quality->title?>" class="goodsimg"></a><br>
                    <p class="f1"><a href="<?php echo Url::to(['particular/index','id'=>$quality->productid])?>" title="<?=$quality->title?>"><?=$information->title?></a></p>
                    市场价：<font class="market"><?=$information->price?></font> <br>
                    本店价：<font class="f1"><?php echo $quality->promotion?$quality->promotion:$quality->price?></font>
                </div>
            <?php endforeach;?>

        </div>
    </div>
    <div class="blank"></div>

    <div class="xm-box">
        <h4 class="title"><span>女装</span> <a class="more" href="mbmeilishuo/category.php?id=21">更多</a></h4>
        <div id="show_hot_area" class="clearfix">

            <div class="goodsItem">

                <a href="<?php echo Url::to(['particular/index'])?>"><img src="assets/images/134_thumb_G_1413930635678.jpg" alt="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气质长袖针织衫+半身裙 两件套连衣裙套装" class="goodsimg"></a><br>
                <p class="f1"><a href="<?php echo Url::to(['particular/index'])?>" title="韩味HW-2014初冬套装 毛衣外套 长袖连衣裙 蓬蓬裙 气质长袖针织衫+半身裙 两件套连衣裙套装"></a></p>


                市场价：<font class="market">144元</font> <br>

                本店价：<font class="f1">
                    110元                     </font>

            </div>

        </div>


    </div>
    <div class="blank"></div>
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

</body>
</html>

<style type="text/css">
    html{overflow-x:hidden}
</style>