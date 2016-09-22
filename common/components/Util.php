<?php
namespace common\components;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Util
 *
 * @author thanhlbk
 */
use Yii;
class Util {
    //put your code here
    public static function getUrlImage($image) {
        $link;
        if($image){
           $link = Yii::$app->urlManagerFrontend->createUrl('/uploads') . '/' . $image;
        }
        else{
            $link = Yii::$app->urlManagerFrontend->createUrl('/uploads') . '/' .'no-image.jpg';
        }
        return $link;
    }
    
    public static function uploadFile($file, $fileName) {
        if ($file) {
            $uploadPath = \Yii::getAlias('@uploadPath');            
            $file->saveAs(Yii::getAlias($uploadPath . '/' . $fileName));
            return true;
        }
        return false;
    }
    public static function deleteFile($fileName) {
        $uploadPath = \Yii::getAlias('@uploadPath');  
        @unlink(Yii::getAlias($uploadPath . '/' . $fileName));
    }
    
}
