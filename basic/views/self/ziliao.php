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
                        <a href="mbmeilishuo/user.php?act=profile" class="curs"><img src="images/u2.gif"> 用户信息</a>
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

                    <script type="text/javascript">
                        var bonus_sn_empty = "请输入您要添加的红包号码！";
                        var bonus_sn_error = "您输入的红包号码格式不正确！";
                        var email_empty = "请输入您的电子邮件地址！";
                        var email_error = "您输入的电子邮件地址格式不正确！";
                        var old_password_empty = "请输入您的原密码！";
                        var new_password_empty = "请输入您的新密码！";
                        var confirm_password_empty = "请输入您的确认密码！";
                        var both_password_error = "您现两次输入的密码不一致！";
                        var msg_blank = "不能为空";
                        var no_select_question = "- 您没有完成密码提示问题的操作";
                    </script>
                    <h5><span>个人资料</span></h5>
                    <div class="blank"></div>
                    <form name="formEdit" action="user.php" method="post" onsubmit="return userEdit()">
                        <table bgcolor="#dddddd" border="0" cellpadding="5" cellspacing="1" width="100%">
                            <tbody><tr>
                                <td align="right" bgcolor="#FFFFFF" width="28%">出生日期： </td>
                                <td align="left" bgcolor="#FFFFFF" width="72%"> <select name="birthdayYear"><option selected="selected" value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option></select>&nbsp;<select name="birthdayMonth"><option selected="selected" value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>&nbsp;<select name="birthdayDay"><option selected="selected" value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select> </td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#FFFFFF" width="28%">性　别： </td>
                                <td align="left" bgcolor="#FFFFFF" width="72%"><input name="sex" value="0" checked="checked" type="radio">
                                    保密&nbsp;&nbsp;
                                    <input name="sex" value="1" type="radio">
                                    男&nbsp;&nbsp;
                                    <input name="sex" value="2" type="radio">
                                    女&nbsp;&nbsp; </td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#FFFFFF" width="28%">电子邮件地址： </td>
                                <td align="left" bgcolor="#FFFFFF" width="72%"><input name="email" value="tongpan@163.com" size="25" class="inputBg" type="text"><span style="color:#FF0000"> *</span></td>
                            </tr>
                            <tr>
                                <td id="extend_field1i" align="right" bgcolor="#FFFFFF" width="28%">MSN：</td>
                                <td align="left" bgcolor="#FFFFFF" width="72%">
                                    <input name="extend_field1" class="inputBg" value="564564@12.com" type="text"><span style="color:#FF0000"> *</span>            </td>
                            </tr>
                            <tr>
                                <td id="extend_field2i" align="right" bgcolor="#FFFFFF" width="28%">QQ：</td>
                                <td align="left" bgcolor="#FFFFFF" width="72%">
                                    <input name="extend_field2" class="inputBg" value="4545654" type="text"><span style="color:#FF0000"> *</span>            </td>
                            </tr>
                            <tr>
                                <td id="extend_field3i" align="right" bgcolor="#FFFFFF" width="28%">办公电话：</td>
                                <td align="left" bgcolor="#FFFFFF" width="72%">
                                    <input name="extend_field3" class="inputBg" value="03862568978" type="text"><span style="color:#FF0000"> *</span>            </td>
                            </tr>
                            <tr>
                                <td id="extend_field4i" align="right" bgcolor="#FFFFFF" width="28%">家庭电话：</td>
                                <td align="left" bgcolor="#FFFFFF" width="72%">
                                    <input name="extend_field4" class="inputBg" value="03862568978" type="text"><span style="color:#FF0000"> *</span>            </td>
                            </tr>
                            <tr>
                                <td id="extend_field5i" align="right" bgcolor="#FFFFFF" width="28%">手机：</td>
                                <td align="left" bgcolor="#FFFFFF" width="72%">
                                    <input name="extend_field5" class="inputBg" value="13781652589" type="text"><span style="color:#FF0000"> *</span>            </td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#FFFFFF" width="28%">密码提示问题：</td>
                                <td align="left" bgcolor="#FFFFFF" width="72%">
                                    <select name="sel_question">
                                        <option value="0">请选择密码提示问题</option>
                                        <option value="friend_birthday" selected="selected">我最好朋友的生日？</option><option value="old_address">我儿时居住地的地址？</option><option value="motto">我的座右铭是？</option><option value="favorite_movie">我最喜爱的电影？</option><option value="favorite_song">我最喜爱的歌曲？</option><option value="favorite_food">我最喜爱的食物？</option><option value="interest">我最大的爱好？</option><option value="favorite_novel">我最喜欢的小说？</option><option value="favorite_equipe">我最喜欢的运动队？</option>          </select>
                                </td>
                            </tr>
                            <tr>
                                <td id="passwd_quesetion" align="right" bgcolor="#FFFFFF" width="28%">密码问题答案：</td>
                                <td align="left" bgcolor="#FFFFFF" width="72%">
                                    <input name="passwd_answer" size="25" class="inputBg" maxlengt="20" value="11" type="text"><span style="color:#FF0000"> *</span>          </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center" bgcolor="#FFFFFF"><input name="act" value="act_edit_profile" type="hidden">
                                    <input name="submit" value="确认修改" class="bnt_blue_1" style="border:none;" type="submit">
                                </td>
                            </tr>
                            </tbody></table>
                    </form>
                    <form name="formPassword" action="user.php" method="post" onsubmit="return editPassword()">
                        <table bgcolor="#dddddd" border="0" cellpadding="5" cellspacing="1" width="100%">
                            <tbody><tr>
                                <td align="right" bgcolor="#FFFFFF" width="28%">原密码：</td>
                                <td align="left" bgcolor="#FFFFFF" width="76%"><input name="old_password" size="25" class="inputBg" type="password"></td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#FFFFFF" width="28%">新密码：</td>
                                <td align="left" bgcolor="#FFFFFF"><input name="new_password" size="25" class="inputBg" type="password"></td>
                            </tr>
                            <tr>
                                <td align="right" bgcolor="#FFFFFF" width="28%">确认密码：</td>
                                <td align="left" bgcolor="#FFFFFF"><input name="comfirm_password" size="25" class="inputBg" type="password"></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center" bgcolor="#FFFFFF"><input name="act" value="act_edit_password" type="hidden">
                                    <input name="submit" class="bnt_blue_1" style="border:none;" value="确认修改" type="submit">
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