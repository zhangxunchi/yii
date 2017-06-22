<?php
use yii\helpers\Url;
?>
<!-- main container -->
<div class="content">

    <div class="container-fluid">

        <!-- upper main stats -->
        <div id="main-stats">
            <div class="row-fluid stats-row">
                <div class="span3 stat">
                    <div class="data">
                        <span class="number"><?=$visitor?></span>
                        个访客
                    </div>
                    <span class="date">今天</span>
                </div>
                <div class="span3 stat">
                    <div class="data">
                        <span class="number"><?=$data?></span>
                        个用户
                    </div>
                    <span class="date"><?=date('Y-m')?></span>
                </div>
                <div class="span3 stat">
                    <div class="data">
                        <span class="number"><?=$indent?></span>
                        个订单
                    </div>
                    <span class="date">本周</span>
                </div>
                <div class="span3 stat last">
                    <div class="data">
                        <span class="number">$2,340</span>
                        成交金额
                    </div>
                    <span class="date">最近30天</span>
                </div>
            </div>
        </div>
        <!-- end upper main stats -->

        <div id="pad-wrapper">

            <!--统计图形-->
            <!-- statistics chart built with jQuery Flot -->
            <div class="row-fluid chart">
                <div class="span12">
                    <div id="container" style="min-width:400px;height:400px"></div>
                </div>
            </div>
            <!-- end statistics chart -->

            <!-- table sample -->
            <!-- the script for the toggle all checkboxes from header is located in js/theme.js -->
            <div class="table-products section">
                <div class="row-fluid head">
                    <div class="span12">
                        <h4>商品列表</h4>
                    </div>
                </div>

                <div class="row-fluid filter-block">
                    <div class="pull-right">
                        <input type="text" class="search" />
                        <a class="btn-flat new-product" href="<?php echo Url::to(['default/add'])?>">+ 添加商品</a>
                    </div>
                </div>

                <div class="row-fluid">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="span3">
                                <input type="checkbox" />商品名称
                            </th>

                            <th class="span3">
                                <span class="line"></span>商品封面图片
                            </th>
                            <th class="span3">
                                <span class="line"></span>商品单价
                            </th>
                            <th class="span3">
                                <span class="line"></span>商品状态
                            </th>
                            <th class="span3">
                                <span class="line"></span>促销价格
                            </th>
                            <th class="span3">
                                <span class="line"></span>是否促销
                            </th>
                            <th class="span3">
                                <span class="line"></span>是否热卖
                            </th>
                            <th class="span3">
                                <span class="line"></span>库存
                            </th>
                            <th class="span3">
                                <span class="line"></span>创建时间
                            </th>
                            <th class="span3">
                                <span class="line"></span>操作
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                        <?php  foreach($managers as $manager):?>
                        <tr class="first">
                            <td>
                                <input type="checkbox" />
                                 <samp><?php echo $manager->title?></samp>
                            </td>
                            <td class="description">
                                <div  style="width: 100px;height: 100px;">
                                <img src="assets/uploads/<?=$manager->cover?>" />
                                    </div>
                            </td>
                            <td class="description">
                                <?=$manager->price?>
                            </td>
                                <td class="description">
                                    <?=$manager->state?"<span style='color: rgba(255, 26, 0, 0.55);font-weight: bold;'>已上架</span>":"<span style='color: rgba(27, 16, 255, 0.55);font-weight: bold;'>未上架</span>"?>
                                </td>
                            <td class="description">
                            <?=$manager->promotion?$manager->promotion:"<span style='color: #9a0002;;font-weight: bold;'>不促销</span>"?>
                            </td>

                            <td class="description">
                                <?=$manager->issale?"<span style='color: #00aa00;font-weight: bold;'>促销</span>":"<span style='color: #000000;;font-weight: bold;'>不促销</span>"?>
                            </td>

                            <td class="description">
                                <?=$manager->ishot?"<span style='color: rgba(27, 16, 255, 0.55);font-weight: bold'>热卖</span>":"<span style='color: rgba(207, 0, 255, 0.55);font-weight: bold'>不热卖</span>"?>
                            </td>
                            <td class="description">
                                <?=$manager->stock;?>
                            </td>
                            <td class="description">
                                <?=$manager->createtime?>
                            </td>
                            <td class="description">
                                <a href="<?php echo Url::to(['default/particular','id'=>$manager->productid])?>">添加详细信息</a>

                                <a href="<?php echo Url::to(['default/del','id'=>$manager->productid])?>">删除</a>

                                <a href="<?php echo Url::to(['default/update','id'=>$manager->productid])?>"><?=$manager->state?"<span></span>":"<span style=''>是否上架</span>"?></a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                        <?php if(Yii::$app->session->hasFlash("in")){
                            echo Yii::$app->session->getFlash("in");
                        }?>
                        </tbody>
                    </table>
                </div>


                <div class="pagination">
                    <?php echo yii\widgets\LinkPager::widget(['pagination'=>$page])?>
                </div>

            </div>
            <!-- end table sample -->
        </div>
    </div>
</div>
<head>
    <meta charset="utf-8"><link rel="icon" href="https://static.jianshukeji.com/highcharts/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    </style>
    <!--统计图形-->
    <script src="https://img.hcharts.cn/jquery/jquery-1.8.3.min.js"></script>
    <script src="https://img.hcharts.cn/highcharts/highcharts.js"></script>
    <script src="https://img.hcharts.cn/highcharts/modules/exporting.js"></script>
    <script src="https://img.hcharts.cn/highcharts-plugins/highcharts-zh_CN.js"></script>
</head>
<body>
<!--统计图形-->
<script>

    $('#container').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: '商城访问量/用户数'
        },
        xAxis: {
            categories: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月']
        },
        yAxis: {
            title: {
                text: '人数 (位)'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true          // 开启数据标签
                },
                enableMouseTracking: true // 关闭鼠标跟踪，对应的提示框、点击事件会失效
            }
        },

        series: [{
            name: '用户数',

            data: [<?=$userjanuary?>,<?=$userfebruary?>,<?=$usermarch?>,<?=$userapril?>,<?=$usermay?>,<?=$userjune?>,<?=$userjuly?>,<?=$useraugust?>,<?=$userseptember?>,<?=$useroctorber?>,<?=$usernovember?>,<?=$userdecember?>]
        }, {
            name: '访客量',
            data: [<?=$january?>,<?=$february?>,<?=$march?>,<?=$april?>,<?=$may?>,<?=$june?>,<?=$july?>,<?=$august?>,<?=$september?>,<?=$octorber?>,<?=$november?>,<?=$december?>]
        }]
    });
</script>
</body>
</html>

​









