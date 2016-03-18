<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Article;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Admin');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Articles'), ['blog/index'], ['class' => 'btn']) ?>
    </p>

    <p>
        <?= Html::a(Yii::t('app', 'Users'), ['user/index'], ['class' => 'btn']) ?>
    </p>


</div>
