<?php

use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

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
            <?php echo Yii::$app->session["home"]["isLogin"]?"欢迎：".Yii::$app->session["home"]["name"]."&nbsp;<a href=\"?r=index/end\">退出</a>":"<a href=\"?r=public/login\">登录&nbsp;|&nbsp;注册</a>"?>
        </div>
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


    <table align="left" border="0" cellpadding="3" cellspacing="5" width="100%">
        <?php $form=ActiveForm::begin();?>
        <tr>
            <td align="right" width="25%"></td>
            <td width="65%">
                用户名<input type="text" value="<?php echo Yii::$app->session["home"]["name"]?>" class="inputBg" style="width:300px;height:30px;border-radius:5px;" disabled/>
            </td>
        </tr>
        <tr>
            <td align="right"></td>
            <td>
                <?php echo $form->field($model,"userpass")->textInput(['class'=>"inputBg",'style'=>'width:300px;height:30px;border-radius:5px;position: relative;left:12px;','value'=>Yii::$app->session["home"]["pwd"]])?>
            </td>
        </tr>

        <td align="right"></td>
        <td>
            <?php echo Html::submitButton("修改")?>
        </td>
        <?php ActiveForm::end()?>
    </table>


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