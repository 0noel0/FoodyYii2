<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace console\controllers;

use yii\console\Controller;
use Yii;
use Firebase\JWT\JWT;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";        
        
    }
    public function actionSend($email){
        echo Yii::$app->mailer->compose()
                    ->setFrom([\Yii::$app->params['supportEmail'] => 'Hi!My name thanh'])
                    ->setTo($email)
                    ->setSubject('Hi ' . \Yii::$app->name)
                    ->setTextBody("Hi")
                    ->send();
    }
    
    public function actionAlias(){
        echo Yii::getAlias('@approot');
    }
    
    
    public function actionDecode($jwt){
        var_dump(JWT::decode($jwt, Yii::$app->params['jwtSecret'], ['HS256']));
    }
}