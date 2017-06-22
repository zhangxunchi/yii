<!-- main container -->
<div class="content">

    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <div class="row-fluid header">
                    <h3>公告列表</h3>
                </div>
                <div class="span10 pull-right">
                    <a href="<?php echo \yii\helpers\Url::to(['notice/add'])?>" class="btn-flat success pull-right">
                        <span>&#43;</span>
                        添加公告
                    </a>
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
                            <span class="line"></span>公告内容
                        </th>
                        <th class="span3 sortable">
                            <span class="line"></span>发布时间
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
                                <?php echo $da->title;?>
                            </td>
                            <td>
                                <?php echo $da->time;?>
                            </td>
                            <td class="align-right">
                                <a href="javascript:if(confirm('您确定要删除吗？')) location.href='<?php echo \yii\helpers\Url::to(['notice/del','id'=>$da->id])?>'">删除</a>
                                <a href="<?php echo \yii\helpers\Url::to(['notice/update','id'=>$da->id])?>">编辑</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

