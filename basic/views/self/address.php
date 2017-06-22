







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
                        <a href="mbmeilishuo/user.php?act=order_list"><img src="images/u3.gif"> 我的订单</a>
                        <a href="mbmeilishuo/user.php?act=address_list" class="curs"><img src="images/u4.gif"> 收货地址</a>
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












                    <h5><span>收货人信息</span></h5>
                    <div class="blank"></div>

                    <script type="text/javascript" src="style/region.js"></script><script type="text/javascript" src="style/shopping_flow.js"></script>            <script type="text/javascript">
                        region.isAdmin = false;
                        var consignee_not_null = "收货人姓名不能为空！";
                        var country_not_null = "请您选择收货人所在国家！";
                        var province_not_null = "请您选择收货人所在省份！";
                        var city_not_null = "请您选择收货人所在城市！";
                        var district_not_null = "请您选择收货人所在区域！";
                        var invalid_email = "您输入的邮件地址不是一个合法的邮件地址。";
                        var address_not_null = "收货人的详细地址不能为空！";
                        var tele_not_null = "电话不能为空！";
                        var shipping_not_null = "请您选择配送方式！";
                        var payment_not_null = "请您选择支付方式！";
                        var goodsattr_style = "1";
                        var tele_invaild = "电话号码不有效的号码";
                        var zip_not_num = "邮政编码只能填写数字";
                        var mobile_invaild = "手机号码不是合法号码";

                        onload = function() {
                            if (!document.all)
                            {
                                document.forms['theForm'].reset();
                            }
                        }

                    </script>
                    <form action="user.php" method="post" name="theForm" onsubmit="return checkConsignee(this)">
                        <table bgcolor="#dddddd" border="0" cellpadding="5" cellspacing="1" width="100%">
                            <tbody><tr>
                                <td align="right" bgcolor="#ffffff">配送区域：</td>
                                <td colspan="3" align="left" bgcolor="#ffffff"><select name="country" id="selCountries_0" onchange="region.changed(this, 1, 'selProvinces_0')">
                                        <option value="0">请选择国家</option>
                                        <option value="1" selected="selected">中国</option>
                                    </select>
                                    <select name="province" id="selProvinces_0" onchange="region.changed(this, 2, 'selCities_0')">
                                        <option selected="selected" value="0">请选择省</option>
                                        <option value="2">北京</option>
                                        <option value="3">安徽</option>
                                        <option value="4">福建</option>
                                        <option value="5">甘肃</option>
                                        <option value="6">广东</option>
                                        <option value="7">广西</option>
                                        <option value="8">贵州</option>
                                        <option value="9">海南</option>
                                        <option value="10">河北</option>
                                        <option value="11">河南</option>
                                        <option value="12">黑龙江</option>
                                        <option value="13">湖北</option>
                                        <option value="14">湖南</option>
                                        <option value="15">吉林</option>
                                        <option value="16">江苏</option>
                                        <option value="17">江西</option>
                                        <option value="18">辽宁</option>
                                        <option value="19">内蒙古</option>
                                        <option value="20">宁夏</option>
                                        <option value="21">青海</option>
                                        <option value="22">山东</option>
                                        <option value="23">山西</option>
                                        <option value="24">陕西</option>
                                        <option value="25">上海</option>
                                        <option value="26">四川</option>
                                        <option value="27">天津</option>
                                        <option value="28">西藏</option>
                                        <option value="29">新疆</option>
                                        <option value="30">云南</option>
                                        <option value="31">浙江</option>
                                        <option value="32">重庆</option>
                                        <option value="33">香港</option>
                                        <option value="34">澳门</option>
                                        <option value="35">台湾</option>
                                    </select>
                                    <select name="city" id="selCities_0" onchange="region.changed(this, 3, 'selDistricts_0')">
                                        <option selected="selected" value="0">请选择市</option>
                                    </select>
                                    <select name="district" id="selDistricts_0" style="display:none">
                                        <option selected="selected" value="0">请选择区</option>
                                    </select>
                                    (必填) </td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#ffffff">收货人姓名：</td>
                                <td align="left" bgcolor="#ffffff"><input name="consignee" class="inputBg" id="consignee_0" type="text">
                                    (必填) </td>
                                <td align="right" bgcolor="#ffffff">电子邮件地址：</td>
                                <td align="left" bgcolor="#ffffff"><input name="email" class="inputBg" id="email_0" value="tongpan@163.com" type="text">
                                    (必填)</td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#ffffff">详细地址：</td>
                                <td align="left" bgcolor="#ffffff"><input name="address" class="inputBg" id="address_0" type="text">
                                    (必填)</td>
                                <td align="right" bgcolor="#ffffff">邮政编码：</td>
                                <td align="left" bgcolor="#ffffff"><input name="zipcode" class="inputBg" id="zipcode_0" type="text"></td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#ffffff">电话：</td>
                                <td align="left" bgcolor="#ffffff"><input name="tel" class="inputBg" id="tel_0" type="text">
                                    (必填)</td>
                                <td align="right" bgcolor="#ffffff">手机：</td>
                                <td align="left" bgcolor="#ffffff"><input name="mobile" class="inputBg" id="mobile_0" type="text"></td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#ffffff">标志建筑：</td>
                                <td align="left" bgcolor="#ffffff"><input name="sign_building" class="inputBg" id="sign_building_0" type="text"></td>
                                <td align="right" bgcolor="#ffffff">最佳送货时间：</td>
                                <td align="left" bgcolor="#ffffff"><input name="best_time" class="inputBg" id="best_time_0" type="text"></td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#ffffff">&nbsp;</td>
                                <td colspan="3" align="center" bgcolor="#ffffff">                    <input name="submit" class="bnt_blue_2" value="新增收货地址" type="submit">
                                    <input name="act" value="act_edit_address" type="hidden">
                                    <input name="address_id" value="" type="hidden">
                                </td>
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