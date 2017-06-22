










<script type="text/javascript" src="assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="assets/js/js.js"></script>

<div class="block box">
    <div class="blank"></div>
    <div id="ur_here">
        当前位置: <a href=".">首页</a> <code>&gt;</code>购物车
    </div>
</div>
<div class="blank"></div>

<div class="block table">
    <div class="flowBox">
        <h6><span>商品列表</span><a href="flow.php" class="f6"></a></h6>
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
                <th bgcolor="#ffffff">商品名称</th>
                <th bgcolor="#ffffff">商品图片</th>
                <th bgcolor="#ffffff">实际价格</th>
                <th bgcolor="#ffffff">优惠价</th>
                <th bgcolor="#ffffff">购买数量</th>
                <th bgcolor="#ffffff">小计</th>
                <th bgcolor="#ffffff">操作</th>
            </tr>

            <?php foreach($data as $data):?>
                <tr>
                    <td bgcolor="#ffffff" class="a">
                        <a href="goods.php?id=2" target="_blank" class="f6"><?=$data->product->title?></a>
                    </td>
                    <td align="right" bgcolor="#ffffff" class="a"><img src="assets/uploads/<?=$data->product->cover?>" style="width:100px;height: 100px;"></td>
                    <td align="right" bgcolor="#ffffff" class="a">￥<?=$data->actualprice?>元</td>
                    <td bgcolor="#ffffff" align="right" class="a">￥<?=$data->promotion?>元</td>
                    <td bgcolor="#ffffff" align="right" class="a"><?=$data->count?></td>
                    <td bgcolor="#ffffff" align="right" class="a">￥<?=$data->promotion*$data->count?>元
                        <div class="totle" style="display: none;"><?=$data->promotion*$data->count?></div>
                    </td>
                    <td bgcolor="#ffffff" align="right" class="a"><a href="javascript:if (confirm('您确实要把该商品移出购物车吗？')) location.href='<?php echo \yii\helpers\Url::to(["flow/del",'id'=>$data->id])?>'; " class="f6">删除</a></td>
                </tr>
            <?php endforeach;?>
            <tr>
                <td bgcolor="#ffffff" colspan="7">
                    购物金额小计 ￥<span style="color: rgba(255, 0, 202, 0.55);font-weight: bold;" id="susum"></span>元
                </td>
            </tr>
        </table>
    </div>
    <div class="foot">
        <div class="foot_cash"><a href="<?php echo \yii\helpers\Url::to(['flow/refer'])?>"><input type="submit" value="结算"></a></div>
    </div>
</div>
</div>
<link href="assets/style/qq.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    .a {
        text-align:center; /*设置水平居中*/
        vertical-align:middle;/*设置垂直居中*/
    }
</style>
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
</html>

























































