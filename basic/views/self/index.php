
<div class="block box">
    <div class="blank"></div>
    <div id="ur_here">
        当前位置: <a href="mbmeilishuo/">首页</a> <code>&gt;</code> 用户中心
    </div>
</div>
<div class="blank"></div><div class="block clearfix">

    <div class="AreaL">
        <div class="box">
            <div class="box_1">
                <div class="userCenterBox">
                    <div class="userMenu">
                        <a href="mbmeilishuo/user.php" class="curs"><img src="images/u1.gif"> 欢迎页</a>
                        <a href="mbmeilishuo/user.php?act=profile"><img src="images/u2.gif"> 用户信息</a>
                        <a href="mbmeilishuo/user.php?act=order_list"><img src="images/u3.gif"> 我的订单</a>
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

                    <font class="f5"><b class="f4">tongpan</b> 欢迎您回到 童老师thinkphp交流群：484519446！</font><br>
                    <div class="blank"></div>
                    您的上一次登录时间: 2016-06-16 21:58:56<br>
                    <div class="blank5"></div>
                    您的等级是 注册用户  ,您还差 10000 积分达到 vip <br>
                    <div class="blank5"></div>
                    您还没有通过邮件认证 <a href="javascript:sendHashMail()" style="color:#006bd0;">点此发送认证邮件</a><br>
                    <div style="margin:5px 0; border:1px solid #f7dd98;padding:10px 20px; background-color:#fffad5;">
                        <img src="images/note.gif" alt="note">&nbsp;用户中心公告！           </div>
                    <br><br>
                    <div class="f_l" style="width:350px;">
                        <h5><span>您的账户</span></h5>
                        <div class="blank"></div>
                        余额:<a href="mbmeilishuo/user.php?act=account_log" style="color:#006bd0;">0.00元</a><br>
                        红包:<a href="mbmeilishuo/user.php?act=bonus" style="color:#006bd0;">共计 0 个,价值 0.00元</a><br>
                        积分:0积分<br>
                    </div>
                    <div class="f_r" style="width:350px;">
                        <h5><span>用户提醒</span></h5>
                        <div class="blank"></div>
                        您最近30天内提交了0个订单<br>
                    </div>










                    <div class="blank5"></div>





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