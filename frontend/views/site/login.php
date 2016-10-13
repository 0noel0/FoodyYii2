<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    <a href="auth?authclient=facebook" class="btn" style="border: 1px solid #3b5998; background-color: #3b5998; color: white; padding: 2px 15px;">
                        <!-- Facebook icon by Icons8 -->
                        <img class="icon icons8-Facebook" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAABqElEQVRoQ2NkGOKAcYi7n2HUAwMdg6MxMOhjwDZgWwATw798BkZGB7o69v//A/8YmCYe3uC1AZ+9eJOQfcDW+QyMDAl0dTiaZf//MzQe2uDdgMsNOD0ADnnG/+sH0vEwu//+/+d4ZIPvAWxuwekBu8CtBxgZGOwHgwf+MzAcPLTeG2sSxukB+8Ct/weD42FuOLjeG6tbRz1Ar1gaNDHg4SjD4O4ozWCoI4zhd4egbTjDY1B4oKXCmMHGTBynIwe1B0AhX5GrhzfFDWoPTGi2YDDQFhq6HjiwzgvD8TUdZxmOnHpJVDkw4HkAmwfwJRl0X416gKh4xqNoSMYANkfj8uOXb38YfGJ2Da56gBQPXLj6jqGg9sTQ9cCaLQ8Ypsy7NnQ9sGDlbQYQxgVGS6ERWQohe3pIFqOjHkAKgdFMPJqJsTSnR1ujDAy45weoPS40WowO9MDWaAyQGgNDfnB3yA+vgyouu4AtCxgZGeMprcQo0U/2BAfMUpuAzQ5MjEwN9J4rAM0J/Pv/rwHXxAbMfaOzlJQkD2roHY0BaoQiJWaMxgAloUcNvQDVMwpAikLd1gAAAABJRU5ErkJggg==" width="30" height="30"> Login with Facebook
                    </a>
                </div>

            <?php ActiveForm::end(); ?>
            <!-- social-auth-links -->
        </div>
    </div>
</div>
