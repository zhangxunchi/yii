
<?php
use yii\helpers\Url;
?>
<div class="row-fluid table" style="position: absolute;left: 200px;top:80px;width:1700px;">
   <samp style="font-weight: bold;font-size:30px;">用户配送地址</samp>
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="span3 sortable">
                <span class="line"></span>姓名
            </th>
            <th class="span2 sortable">
                <span class="line"></span>详细地址
            </th>
            <th class="span3 sortable align-right">
                <span class="line"></span>收货人
            </th>
            <th class="span3 sortable align-right">
                <span class="line"></span>电子邮件地址
            </th>
            <th class="span3 sortable align-right">
                <span class="line"></span>手机
            </th>
            <th class="span3 sortable align-right">
                <span class="line"></span>邮编
            </th>
            <th class="span3 sortable align-right">
                <span class="line"></span>是否是默认地址
            </th>
            <th class="span3 sortable align-right">
                <span class="line"></span>创建时间
            </th>
            <th class="span3 sortable align-right">
                <span class="line"></span>操作
            </th>
        </tr>
        </thead>
        <tbody>
        <!--  循环遍历输出数据-->
      <?php foreach($data as $da):?>
            <tr>
               <td >
                   <?=$da->username;?>
                </td>
                <td >
                   <?=$da->detailedness;?>
                </td>
                <td class="align-right">
                  <?=$da->consignee;?>
                </td>
                <td class="align-right">
                 <?=$da->email;?>
                </td>
                <td class="align-right">
                  <?=$da->phone;?>
                </td>
                <td class="align-right">
                  <?=$da->postcode;?>
                </td>
                <td class="align-right">
                 <?=$da->default?"<samp style='color: red;font-weight: bold;'>是</samp>":"<samp style='color: rgba(0, 255, 6, 0.55);font-weight: bold;'>否</samp>"?>
                </td>
                <td class="align-right">
                <?=$da->creationtime;?>
                </td>
                <td class="align-right">
                    <a href="javascript:if(confirm('您确定要删除吗？')) location.href='<?php echo \yii\helpers\Url::to(['site/del','id'=>$da->id])?>'">删除</a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>