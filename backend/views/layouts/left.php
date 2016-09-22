<?php
    use common\components\Util;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Util::getUrlImage(Yii::$app->user->identity->avatar) ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'User',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'List', 'icon' => 'fa fa-list-ul', 'url' => ['/user'],],
                            ['label' => 'Create', 'icon' => 'fa fa-plus-square', 'url' => ['/user/create'],],
                        ],
                    ],
                    [
                        'label' => 'Category',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'List', 'icon' => 'fa fa-list-ul', 'url' => ['/category'],],
                            ['label' => 'Create', 'icon' => 'fa fa-plus-square', 'url' => ['/category/create'],],
                        ],
                    ],
                    [
                        'label' => 'Food',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'List', 'icon' => 'fa fa-list-ul', 'url' => ['/food'],],
                            ['label' => 'Create', 'icon' => 'fa fa-plus-square', 'url' => ['/food/create'],],
                        ],
                    ],
                    [
                        'label' => 'Page',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'List', 'icon' => 'fa fa-list-ul', 'url' => ['/page'],],
                            ['label' => 'Create', 'icon' => 'fa fa-plus-square', 'url' => ['/page/create'],],
                        ],
                    ],
                    [
                        'label' => 'Device',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'List', 'icon' => 'fa fa-list-ul', 'url' => ['/device'],],
                            ['label' => 'Create', 'icon' => 'fa fa-plus-square', 'url' => ['/device/create'],],
                        ],
                    ],
                    [
                        'label' => 'Profile',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Profile', 'icon' => 'fa fa-user', 'url' => ['/user/view?id='.Yii::$app->user->getId()],],
                            ['label' => 'Change password', 'icon' => 'fa fa-plus-square', 'url' => ['/user/update?id='.Yii::$app->user->getId()],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
