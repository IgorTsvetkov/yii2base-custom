<?php

use app\models\Post;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
// $model=new Post();
?>
<div class="f f-center h-100vh">
<div class="post-create f f-center f-column h-100 text-center text-primary">
    <div class="f f-center f-column box-shadow-3 p-80 border-r-10 bg-secondary">
        <h1><?= Html::encode($this->title) ?></h1>
        <form action="/post/create" method="post" class="f f-center-horizontal f-column  p-20-t">
        <input type="hidden"
        name="<?=Yii::$app->request->csrfParam?>"
        value="<?=Yii::$app->request->csrfToken?>">
        <div class="border-r-10 ">
            <input placeholder="<?=$model->getAttributeLabel("title")?>" type="text" name="title" class="reset it-input box-shadow-3 border-r-20 p-20-l p-10-t p-10-r p-10-b w-100">
            <div class="error">
                <?= Html::error($model,"title")?>
            </div>
            <textarea placeholder="<?=$model->getAttributeLabel("body")?>" type="text" name="body" class="reset it-input w-100 box-shadow-3 border-r-20 m-10-t p-20-l p-10-t p-10-r p-10-b"></textarea>
            <div class="error">
                <?= Html::error($model,"body")?>
            </div>
        </div>
        <input type="submit" class="reset it-btn w-100 p-5-t p-5-b m-10-t" value="Отправить">

        </form>
    </div>
</div>
</div>
