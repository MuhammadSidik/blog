<?php
/* @var $this yii\web\View */
use yii\widgets\ListView;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-md-9" style="min-height: 600px;">
                <?php
                echo ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView' => '_itemView',
                ]);
                ?>
            </div>
            <div class="col-md-3">
                <div class="panel panel-success" style="width: 100%; margin-bottom: 20px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Category</h3>
                    </div>
                    <div class="panel-body">
                        <?= $category ?>
                    </div>
                </div>
                <div class="panel panel-success" style="width: 100%; margin-bottom: 20px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tags</h3>
                    </div>
                    <div class="panel-body">
                        ...
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
