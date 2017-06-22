<!-- main container -->
<div class="content">

    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <div class="row-fluid header">
                    <h3>用户列表</h3>
                </div>
                <div class="span10 pull-right">
                    <a href="<?php echo \yii\helpers\Url::to(['user/reg'])?>" class="btn-flat success pull-right">
                        <span>&#43;</span>
                        添加用户
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
                            <span class="line"></span>名称
                        </th>
                        <th class="span2 sortable">
                            <span class="line"></span>密码
                        </th>
                        <th class="span3 sortable align-right">
                            <span class="line"></span>邮箱
                        </th>
                        <th class="span3 sortable align-right">
                            <span class="line"></span>真实姓名
                        </th>
                        <th class="span3 sortable align-right">
                            <span class="line"></span>年龄
                        </th>
                        <th class="span3 sortable align-right">
                            <span class="line"></span>性别
                        </th>
                        <th class="span3 sortable align-right">
                            <span class="line"></span>公司
                        </th>
                        <th class="span3 sortable align-right">
                            <span class="line"></span>创建时间
                        </th>
                        <th class="span3 sortable align-right">
                            <span class="line"></span>登入时间
                        </th>
                        <th class="span3 sortable align-right">
                            <span class="line"></span>操作
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <!--  循环遍历输出数据-->
                    <?php foreach($managers as $manager):?>
                        <tr>
                            <td>
                                <span class="subtext"><?php echo $manager->uid;?></span>
                            </td>
                            <td>
                                <?php echo $manager->username;?>
                            </td>
                            <td>
                                <?php echo $manager->userpass;?>
                            </td>
                            <td class="align-right">
                                <?php echo $manager->useremail;?>
                            </td>
                            <td class="align-right">
                                <?php echo isset($manager->profile->sex)?$manager->profile->sex:'未填写'?>
                            </td>
                            <td class="align-right">
                                <?php echo isset($manager->profile->age)?$manager->profile->age:'未填写'?>
                            </td>
                            <td class="align-right">
                                <?php echo isset($manager->profile->company) ? $manager->profile->company:'未填写'?>
                            </td>
                            <td class="align-right">
                                <?php echo isset($manager->profile->truename) ? $manager->profile->truename:'未填写 '?>
                            </td>
                            <td class="align-right">
                                <?php echo $manager->createtime;?>
                            </td>
                            <td class="align-right">
                                <?php echo $manager->logintime;?>
                            </td>
                            <td class="align-right">
                                <a href="<?php echo \yii\helpers\Url::to(['user/del','id'=>$manager->uid])?>">删除</a>
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
                <?php echo yii\widgets\LinkPager::widget(['pagination'=>$data])?>
            </div>
            <!-- end users table -->
        </div>
    </div>
</div>

