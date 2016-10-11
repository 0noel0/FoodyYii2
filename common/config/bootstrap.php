<?php
Yii::setAlias('@approot', dirname(dirname(__DIR__)));
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('@uploadPath', '@frontend/web/uploads');
Yii::setAlias('@web', 'http://localhost/FoodyYii2');
Yii::setAlias('@urlImage', '@web/frontend/web');
Yii::setAlias('uploadUrl', '@web/frontend/web/uploads');
