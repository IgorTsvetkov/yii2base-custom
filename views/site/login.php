<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Логин';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="f f-center h-100vh-min">
    <div class="post-create f f-center f-column h-100 text-center text-primary">
        <div class="f f-center f-column box-shadow-3 p-80 border-r-10 bg-secondary">
            <h1><?= Html::encode($this->title) ?></h1>
            <form action="/site/login" method="post" class="f f-center-horizontal f-column  p-20-t">
                <input type="hidden"
                name="<?=Yii::$app->request->csrfParam?>"
                value="<?=Yii::$app->request->csrfToken?>">
                <div class="border-r-10 ">
                <div class="input-with-error-wrapper">
                        <input placeholder="<?= $model->getAttributeLabel("username") ?>" 
                        value="<?=$model->username?>"
                        type="text" name="username" class="reset it-input box-shadow-3 m-10-t p-20-l p-10-t p-10-r p-10-b w-100" autofocus>
                        <?if($model->errors["username"]):?>
                            <div class="error">
                                <?= Html::error($model, "username") ?>
                            </div>
                        <?endif;?>
                    </div>
                    <div class="input-with-error-wrapper">
                        <input placeholder="<?= $model->getAttributeLabel("password") ?>"
                        type="password" name="password" class="reset it-input box-shadow-3 m-10-t p-20-l p-10-t p-10-r p-10-b w-100">
                        <?if($model->errors["password"]):?>
                            <div class="error">
                                <?= Html::error($model, "password") ?>
                            </div>
                        <?endif;?>
                    </div>
                    <div>
                        <input  placeholder="<?=$model->getAttributeLabel("rememberMe")?>" type="checkbox" name="remeberme">
                        <label class="m-10-l" for="rememberMe"><?=$model->getAttributeLabel("rememberMe")?></label>
                    </div>
                </div>
                <input type="submit" class="reset it-btn it-input-round w-100 p-5-t p-5-b" value="Отправить">
            </form>
        </div>
    </div>
</div>
