<div class="block box">
    <div class="blank"></div>
    <div id="ur_here">
        当前位置: <a href="mbmeilishuo/">首页</a> <code>&gt;</code> 用户中心
    </div>
</div>
<div class="blank"></div>

<div class="blank"></div>
<div class="block clearfix">

    <div class="AreaL">
        <div class="box">
            <div class="box_1">
                <div class="userCenterBox">
                    <div class="userMenu">
                        <a href="mbmeilishuo/user.php"><img src="images/u1.gif"> 欢迎页</a>
                        <a href="mbmeilishuo/user.php?act=profile"><img src="images/u2.gif"> 用户信息</a>
                        <a href="mbmeilishuo/user.php?act=order_list" class="curs"><img src="images/u3.gif"> 我的订单</a>
                        <a href="mbmeilishuo/user.php?act=address_list"><img src="images/u4.gif"> 收货地址</a>
                        <a href="mbmeilishuo/user.php?act=collection_list"><img src="images/u5.gif"> 我的收藏</a>
                        <a href="mbmeilishuo/user.php?act=message_list"><img src="images/u6.gif"> 我的留言</a>
                        <a href="mbmeilishuo/user.php?act=tag_list"><img src="images/u7.gif"> 我的标签</a>
                        <a href="mbmeilishuo/user.php?act=booking_list"><img src="images/u8.gif"> 缺货登记</a>
                        <a href="mbmeilishuo/user.php?act=bonus"><img src="images/u9.gif"> 我的红包</a>
                        <a href="mbmeilishuo/user.php?act=affiliate"><img src="images/u10.gif"> 我的推荐</a><a href="mbmeilishuo/user.php?act=comment_list"><img src="images/u11.gif"> 我的评论</a>
                        <!--<a href="user.php?act=group_buy">我的团购</a>-->
                        <a href="mbmeilishuo/user.php?act=track_packages"><img src="images/u12.gif"> 跟踪包裹</a>
                        <a href="mbmeilishuo/user.php?act=account_log"><img src="images/u13.gif"> 资金管理</a>
                        <a href="mbmeilishuo/user.php?act=logout" style="background:none; text-align:right; margin-right:10px;"><img src="images/bnt_sign.gif"></a>
                    </div>      </div>
            </div>
        </div>
    </div>


    <div class="AreaR">
        <div class="box">
            <div class="box_1">
                <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">




                    <h5><span>我的订单</span></h5>
                    <div class="blank"></div>
                    <table bgcolor="#dddddd" border="0" cellpadding="5" cellspacing="1" width="100%">
                        <tbody><tr align="center">
                            <td bgcolor="#ffffff">订单号</td>
                            <td bgcolor="#ffffff">下单时间</td>
                            <td bgcolor="#ffffff">订单总金额</td>
                            <td bgcolor="#ffffff">订单状态</td>
                            <td bgcolor="#ffffff">操作</td>
                        </tr>
                        </tbody></table>
                    <div class="blank5"></div>

                    <form name="selectPageForm" action="/mbmeilishuo/user.php" method="get">


                        <div id="pager" class="pagebar">
                            <span class="f_l " style="margin-right:10px;">总计 <b>0</b>  个记录</span>

                        </div>


                    </form>
                    <script type="Text/Javascript" language="JavaScript">
                        <!--

                        function selectPage(sel)
                        {
                            sel.form.submit();
                        }

                        //-->
                    </script>
                    <div class="blank5"></div>
                    <h5><span>合并订单</span></h5>
                    <div class="blank"></div>
                    <script type="text/javascript">
                        var from_order_empty = "请选择要合并的从订单";
                        var to_order_empty = "请选择要合并的主订单";
                        var order_same = "主订单和从订单相同，请重新选择";
                        var confirm_merge = "您确实要合并这两个订单吗？";
                    </script>
                    <form action="user.php" method="post" name="formOrder" onsubmit="return mergeOrder()">
                        <table bgcolor="#dddddd" border="0" cellpadding="5" cellspacing="1" width="100%">
                            <tbody><tr>
                                <td align="right" bgcolor="#ffffff" width="22%">主订单:</td>
                                <td align="left" bgcolor="#ffffff" width="12%"><select name="to_order">
                                        <option selected="selected" value="0">请选择...</option>


                                    </select></td>
                                <td align="right" bgcolor="#ffffff" width="19%">从订单:</td>
                                <td align="left" bgcolor="#ffffff" width="11%"><select name="from_order">
                                        <option selected="selected" value="0">请选择...</option>


                                    </select></td>
                                <td bgcolor="#ffffff" width="36%">&nbsp;<input name="act" value="merge_order" type="hidden">
                                    <input name="Submit" class="bnt_blue_1" style="border:none;" value="合并订单" type="submit"></td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff">&nbsp;</td>
                                <td colspan="4" align="left" bgcolor="#ffffff">订单合并是在发货前将相同状态的订单合并成一新的订单。<br>收货地址，送货方式等以主定单为准。</td>
                            </tr>
                            </tbody></table>
                    </form>















                </div>
            </div>
        </div>
    </div>

</div>
<div class="blank"></div>
<div class="blank"></div>
<link href="style/qq.css" rel="stylesheet" type="text/css">
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
    var msg_title_empty = "留言标题为空";
    var msg_content_empty = "留言内容为空";
    var msg_title_limit = "留言标题不能超过200个字";
</script>

</body></html>