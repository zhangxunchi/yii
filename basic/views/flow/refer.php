
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<script type="text/javascript" src="assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="assets/js/js.js"></script>

<div class="block box">
    <div class="blank"></div>
    <div id="ur_here">
        当前位置: <a href=".">首页</a> <code>&gt;</code> 购物流程
    </div>
</div>
<div class="blank"></div>

<div class="block table">
    <?php $form=ActiveForm::begin()?>

    <div class="flowBox">
        <h6><span>商品列表</span><a href="flow.php" class="f6"></a></h6>
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
                <th bgcolor="#ffffff">商品名称</th>
                <th bgcolor="#ffffff">实际价格</th>
                <th bgcolor="#ffffff">优惠价</th>
                <th bgcolor="#ffffff">购买数量</th>
                <th bgcolor="#ffffff">小计</th>
            </tr>

            <?php foreach($data as $da):?>
                <tr>
                    <td bgcolor="#ffffff" class="a">
                        <a href="#" target="_blank" class="f6" class="a"><?=$da->product->title?></a>
                    </td>
                    <td align="right" bgcolor="#ffffff" class="a">￥<?=$da->actualprice?>元</td>
                    <td bgcolor="#ffffff" align="right" class="a">￥<?=$da->promotion?>元</td>
                    <td bgcolor="#ffffff" align="right" class="a"><?=$da->count?></td>
                    <td bgcolor="#ffffff" align="right" class="a">￥<?=$da->promotion*$da->count?>元
                        <div class="totle" style="display: none;"><?=$da->promotion*$da->count?></div>
                    </td>
                   <?=$form->field($order,"pric")->hiddenInput(["value"=>"$da->promotion","name"=>'pric[]']);?> <!--价格-->
                   <?=$form->field($order,"count")->hiddenInput(["value"=>"$da->count","name"=>'count[]']);?> <!--数量-->
                    <?=$form->field($order,"pid")->hiddenInput(["value"=>"$da->pid","name"=>'pid[]']);?> <!--商品ID-->
                    <?=$form->field($order,"uid")->hiddenInput(["value"=>Yii::$app->session["home"]["id"]["id"]["uid"],"name"=>'uid[]']);?> <!--商品ID-->
                  <?=$form->field($order,"totalprices")->hiddenInput(["value"=>$da->promotion*$da->count,"name"=>"totalprices[]"]);?> <!--小计-->
                </tr>
            <?php endforeach;?>

            <tr>
                <td bgcolor="#ffffff" colspan="7">
                    购物金额小计 ￥<span style="color: rgba(255, 0, 202, 0.55);font-weight: bold;" id="susum"></span>元
                </td>
            </tr>


        </table>
    </div>


    <div class="flowBox">
        <?php foreach($datum as $dt):?>
            <h6><span>收货人信息</span><a href="<?php echo \yii\helpers\Url::to(["flow/update","id"=>$dt['id']])?>" class="f6">修改</a></h6>
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">

                <tr>
                    <td bgcolor="#ffffff">收货人姓名:</td>
                    <td bgcolor="#ffffff" class="a"><?=$dt->consignee?></td>
                    <td bgcolor="#ffffff">电子邮件地址:</td>
                    <td bgcolor="#ffffff" class="a"><?=$dt->email?></td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff">详细地址:</td>
                    <td bgcolor="#ffffff" class="a"><?=$dt->detailedness?> </td>
                    <td bgcolor="#ffffff">邮政编码:</td>
                    <td bgcolor="#ffffff" class="a"><?=$dt->postcode?></td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff">手机:</td>
                    <td bgcolor="#ffffff" class="a"><?=$dt->phone?> </td>
                    <td bgcolor="#ffffff"></td>
                    <td bgcolor="#ffffff"></td>
                </tr>
            </table>
        <?php endforeach;?>
    </div>

    <div class="flowBox">
        <h6><span>备注</span></h6>
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
                <td bgcolor="#ffffff"><strong>备注说明:</strong></td>
            </tr>
            <tr>
                <td bgcolor="#ffffff">
              <?=$form->field($order,"remark")->textarea(["row"=>5,"style"=>"width:1200px;height:200px;"]);?>
                </td>
            </tr>
        </table>
    </div>


    <div class="flowBox">
        <h6><span>付款方式：</span><a  onclick="reveal()" style="cursor:pointer">添加银行卡支付</a></h6>
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
                <td bgcolor="#ffffff"><strong>请选择支付方式：</strong></td>
            </tr>
            <tr>
                <td bgcolor="#ffffff">

                    <style type="text/css">
                        .bank{background:url(http://js.alixixi.com/UploadPic/2012-6/20126161135670932.jpg); cursor:pointer; width:190px; height:36px; display:inline-block; text-indent:-999em; overflow:hidden; border:1px solid #dfdfdf; vertical-align:middle;}
                        .gongshang{ background-position:-275px -204px;}
                        .nongye{ background-position:-47px -204px;}
                        .checked{ border:1px solid #f76b0c;}
                    </style>
                    <input type="radio" id="gongshang" name="bank" /> <label  id="gongshang_label" for="gongshang" class="bank gongshang">中国工商银行</label>
                    <input type="radio" id="nongye" name="bank" /> <label  id="nongye_label" for="nongye" class="bank nongye">中国农业银行</label>
                    <script type="text/javascript">
                        ra = document.getElementsByName('bank');
                        len = ra.length;
                        for(i=0;i<len;i++){
                            ra[i].onclick = function(){
                                la = document.getElementsByTagName('label');
                                len2 = la.length;
                                for(j=0;j<len2;j++){
                                    la[j].className = la[j].className.replace('checked','');
                                }
                                var label_id = this.getAttribute('id')+'_label';
                                var label_obj = document.getElementById(label_id);
                                label_obj.className+=" checked";
                            }
                        }
                    </script>
                </td>
            </tr>
        </table>
    </div>


    <div class="flowBox">
        <?php echo Html::submitButton("提交订单",["style"=>"width::120px;height:40px;border-radius:5px;margin-left: 500px;"])?>
    </div>

</div>
<?php ActiveForm::end();?>

</div>
<div class="blank"></div>
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



<div class="container-fluid" id="con" style="width: 500px;height: 300px; position: absolute;top: 680px;left: 600px;;display: none">
    <!--//添加银行卡-->
   <div class="row bg-fff  par-top-40 pad-right-15" id="bank_show1"  >
        <table class="table">
            <?php $form=ActiveForm::begin(["fieldConfig"=>[
                "template"=>"<span style='position: relative;left: 320px;top:25px; color: red'>{error}</span><div>{input}</div>"
            ]])?>
            <tr>
                <td class="form_td border-none td_bot" >姓名</td><td class="border-none td_bot"><?=$form->field($BackRecord,"name")->textInput(["class"=>"form-control","placeholder"=>"请输入姓名","style"=>"border-radius:5px;width: 300px;height: 30px;"])?></td>
            </tr>
            <tr>
                <td class="form_td border-none td_bot">身份证号</td><td class="border-none td_bot"><?=$form->field($BackRecord,"number")->textInput(["class"=>"form-control","placeholder"=>"请输入身份证","style"=>"border-radius:5px;width: 300px;height: 30px;"])?></td>
            </tr>
            <tr>
                <td class="form_td border-none td_bot">银行卡号</td><td class="border-none td_bot"><?=$form->field($BackRecord,"cid")->textInput(["class"=>"form-control","placeholder"=>"请输入银行卡号","style"=>"border-radius:5px;width: 300px;height: 30px;"])?></td>
            </tr>
            <tr>
                <td class="form_td border-none td_bot" >请选择银行</td>
                <td class="border-none td_bot">
                    <div class="position-rel">
                        <div class="position-rel">
                            <input type="text" id="chose_input"   class="form-control" placeholder="--选择银行--" style="border-radius:5px;width: 300px;height: 30px;"/><samp style="color: red">仅支持一下银行</samp>
                            <div class="bank_xljt"><img class="jt_xz" width="20" src="assets/images/jtx1.png" alt="" onclick="hidetext()" style="position: relative;top: -20px;left:280px;"/></div>
                            <div id="chose_bank" class="bank_xljt1"></div>
                        </div>
                        <div class="bank_xl" style="display: none" id="back">
                            <ul>
                                <li class="hotBank-list">
                                    <a href="javascript:" class="hotBank-list-ico "  title="中国农业银行">
                                        <img src="assets/images/zs1.png" width="150" alt=""/>
                                    </a>
                                </li>
                                <li class="hotBank-list">
                                    <a href="javascript:" class="hotBank-list-ico "  title="中国建设银行">
                                        <img src="assets/images/zs2.png" width="150" alt=""/>
                                    </a>
                                </li>
                                <li class="hotBank-list">
                                    <a href="javascript:" class="hotBank-list-ico "  title="中国工商银行">
                                        <img src="assets/images/zs3.png" width="150" alt=""/>
                                    </a>
                                </li>
                                <li class="hotBank-list">
                                    <a href="javascript:" class="hotBank-list-ico "  title="中国银行">
                                        <img src="assets/images/zs4.png" width="150" alt=""/>
                                    </a>
                                </li>
                                <li class="hotBank-list">
                                    <a href="javascript:" class="hotBank-list-ico "  title="中国光大银行">
                                        <img src="assets/images/zs5.png" width="150" alt=""/>
                                    </a>
                                </li>
                                <li class="hotBank-list">
                                    <a href="javascript:" class="hotBank-list-ico "  title="华夏银行">
                                        <img src="assets/images/zs6.png" width="150" alt=""/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td><td><?=Html::submitButton("确定")?></td>
            </tr>
            <?php ActiveForm::end()?>

        </table>
    </div>
</div>


<script src="assets/js/jquery-1.11.1.min.js"></script>

<script>
    $(function(){

//        下拉银行卡

        $(".hotBank-list-ico").bind('click',function(){
            $('#chose_input').val($(this).attr('title'));
            $('.bank_xl').hide();
            $("#chose_bank").parent('div').find('img').addClass('jt_xz');
        });
        $("#chose_bank").click(function(){
            $('.bank_xl').show();
            $("#chose_bank").parent('div').find('img').removeClass('jt_xz');
        });
//        下拉银行卡

    })
</script>

<script>

    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement('style')
        msViewportStyle.appendChild(
            document.createTextNode(
                '@-ms-viewport{width:auto!important}'
            )
        )
        document.querySelector('head').appendChild(msViewportStyle)
    }

</script>

<script type="text/javascript">

    function hidetext()
    {
        document.getElementById("back").style.display ="block";
    }

</script>

<script type="text/javascript">

    function reveal()
    {
        document.getElementById("con").style.display ="block";
    }

</script>





























