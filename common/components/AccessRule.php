<?php

namespace common\components;
use Yii;

class AccessRule extends \yii\filters\AccessRule {

    /**
     * @inheritdoc
     */
    protected function matchRole($user) {
        if (empty($this->roles)) {
            return true;
        }
        foreach ($this->roles as $role) {
            if ($role === '?') {
                if ($user->getIsGuest()) {
                    return true;
                }
            }elseif ($role === '@') {
                if (!$user->getIsGuest()) {
                    return true;
                }
                // Check if you can update yourself, can't update orther
            }elseif ($role === '!') {
                $request = Yii::$app->request;
                if (!$user->getIsGuest() && $this->getAuthorId($request) == $user->identity->id) {
                    return true;
                }
                // Check if admin can delete other, can't delete yourself
            }elseif ($role === '#') {
                $request = Yii::$app->request;
                if (!$user->getIsGuest() && $user->identity->role==\common\models\User::ROLE_ADMIN && $this->getAuthorId($request) != $user->identity->id) {
                    return true;
                }
                // Check if the user is logged in, and the roles match
            }
            elseif (!$user->getIsGuest() && $role === $user->identity->role) {
                return true;
            }
        }

        return false;
    }
    
    private function getAuthorId($request) {
        // Fill in code to receive the right project.
        // assuming the project id is given à la `project/update?id=1`
        $authorId = $request->get('id');
        return $authorId;
    }

}