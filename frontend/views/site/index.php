<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use frontend\widgets\newsList\NewsList;
use frontend\widgets\employeesalary\EmployeeSalaryWidget;


$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>
        
        <?php
        echo '<pre>';
        var_dump(Yii::$app->user->isGuest);
        echo '<?pre>';
        ?>
        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="<?php echo Url::to
        (['newsletter/subscribe']);
?>">Subscribe to news</a></p>
    </div>

    <a class="btn btn-info btn-lg btn-block" href="<?php echo Url::to
                      (['countnews/index']);
?>">News Count</a>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
            <?php echo NewsList::widget(['showLimit' => 2]); ?>
            </div>
            <div class="col-lg-4">
            <?php echo EmployeeSalaryWidget::widget(['showLimit' =>3]); ?>
            </div>
            <div class="col-lg-4">
                <h2>Search</h2>

                <a href="<?php echo Url::to(['search/index']);?>">Search v.2</a>
                <br>
                <a href="<?php echo Url::to(['search/advanced']);?>">Search v.3</a>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
