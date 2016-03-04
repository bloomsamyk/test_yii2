<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Article;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Articles');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Article'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
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
    ]); ?>

</div>
