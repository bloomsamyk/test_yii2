<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\models\Article;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Articles');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="article-index">

<?php
$items = $dataProvider->getModels();


/** @var Article $item */
foreach ($items as $item) {
    ?>
    <p><?=$item->name?></p>
    <p><?=$item->description?></p>
    <p>D<?=$item->level?></p>
    <?= Html::a(Yii::t('app', 'View'), ['blog/show?id='.$item->id], ['class' => 'btn']) ?>
    <?php
}
?>

    <p>
        <?= Html::a(Yii::t('app', 'Articles'), ['blog/list'], ['class' => 'btn']) ?>
    </p>

    <?php

    echo LinkPager::widget([
        'pagination' => $dataProvider->getPagination(),
    ]);
/*
?>


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Article'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'cat_id',

            //'id',
            'name',
            //'description',
            //'user_id',
            'status',
            'level',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); */?>

</div>
