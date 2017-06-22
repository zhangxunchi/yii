<!-- main container -->
<div class="content">

    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <div class="row-fluid header">
                    <h3>订单列表</h3>
                </div>
            </div>

            <!-- Users table -->
            <div class="row-fluid table">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="span4 sortable">
                            ID
                        </th>
                        <th class="span3 sortable">
                            <span class="line"></span>用户名
                        </th>
                        <th class="span3 sortable">
                            <span class="line"></span>订单号
                        </th>
                        <th class="span3 sortable">
                            <span class="line"></span>商品名称
                        </th>
                        <th class="span3 sortable">
                            <span class="line"></span>价格
                        </th>
                        <th class="span3 sortable">
                            <span class="line"></span>数量
                        </th>
                        <th class="span3 sortable">
                            <span class="line"></span>总价
                        </th>
                        <th class="span3 sortable">
                            <span class="line"></span>备注
                        </th>
                        <th class="span3 sortable">
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
                            <td>
                                <span class="subtext"><?php echo $da->id;?></span>
                            </td>
                            <td>
                           <?php echo $da->username;?>
                            </td>
                            <td>
                                <?php echo $da->orderid;?>
                            </td>
                            <td>
                              <?php echo $da->title;?>
                            </td>
                            <td>
                                <?php echo $da->pric;?>
                            </td>
                            <td>
                                <?php echo $da->count;?>
                            </td>
                            <td>
                                <?php echo $da->totalprices;?>
                            </td>
                            <td>
                                <?php echo $da->remark;?>
                            </td>
                            <td>
                                <?php echo $da->creationtime;?>
                            </td>
                            <td class="align-right">
                                <a href="javascript:if(confirm('您确定要删除吗？')) location.href='<?php echo \yii\helpers\Url::to(['account/del','id'=>$da->id])?>'">删除</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

