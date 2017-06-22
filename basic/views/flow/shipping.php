<div class="block box">
    <div class="blank"></div>
    <div id="ur_here">
        当前位置: <a href=".">首页</a> <code>&gt;</code>我的收货地址
    </div>
</div>
<div class="blank"></div>

<div class="block table">
    <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
        <div class="blank"></div>
        <div class="flowBox">
            <?php foreach($datum as $dt):?>
                <h6><span>收货人信息</span><a href="<?php echo \yii\helpers\Url::to(["flow/update","id"=>$dt['id']])?>" class="f6">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:if (confirm('您确实要删除该商品？')) location.href='<?php echo \yii\helpers\Url::to(["flow/delete",'id'=>$dt->id])?>'; " class="f6">删除</a></h6>
                <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                    <tr>
                        <td bgcolor="#ffffff">收货人姓名:</td>
                        <td bgcolor="#ffffff"  class="a"><?=$dt->consignee?></td>
                        <td bgcolor="#ffffff">电子邮件地址:</td>
                        <td bgcolor="#ffffff"  class="a"><?=$dt->email?></td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff">详细地址:</td>
                        <td bgcolor="#ffffff" class="a"><?=$dt->detailedness?> </td>
                        <td bgcolor="#ffffff">邮政编码:</td>
                        <td bgcolor="#ffffff"  class="a"><?=$dt->postcode?></td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff">手机:</td>
                        <td bgcolor="#ffffff"  class="a"><?=$dt->phone?> </td>
                        <td bgcolor="#ffffff">是否默认</td>
                        <td bgcolor="#ffffff"><?=$dt->default?'是':'否'?></td>
                    </tr>
                </table>
            <?php endforeach;?>
        </div>
</div>
</form>
</div>
<div class="blank"></div>
<link href="assets/style/qq.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    .a {
        text-align:center; /*设置水平居中*/
        vertical-align:middle;/*设置垂直居中*/
    }
</style>
</body>
</html>
