<!-- main container -->
<div class="content">

    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <div class="row-fluid header">
                    <h3>管理员列表</h3>
                </div>
                <div class="span10 pull-right">
                    <a href="<?php echo \yii\helpers\Url::to(['category/add'])?>" class="btn-flat success pull-right">
                        <span>&#43;</span>
                        添加分类
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
                        <th class="span2 sortable">
                            <span class="line"></span>分类名称
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
                    <?php foreach($cates as $cate):?>
                        <tr>
                            <td>
                                <span class="subtext"><?php echo $cate['id'];?></span>
                            </td>
                            <td>
                                <?php echo$cate['title'];?>
                            </td>
                            <td class="align-right">
                                <?php echo $cate['creationtime'];?>
                            </td>
                            <td class="align-right">
                                <a href="<?php echo \yii\helpers\Url::to(['category/update','id'=>$cate['id']])?>">编辑</a>
                                <a href="<?php echo \yii\helpers\Url::to(['category/del','id'=>$cate['id']])?>">删除</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
                <?php
                if(Yii::$app->session->hasFlash('info')){
                    echo Yii::$app->session->getFlash('info');
                }
                ?>
            </div>

            <div class="pagination pull-right">

            </div>
            <!-- end users table -->
        </div>
    </div>
</div>

