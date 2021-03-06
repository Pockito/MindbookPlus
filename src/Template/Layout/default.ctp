<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Mindbook';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->css('jquery-ui.css') ?>
    <?= $this->Html->css('extended.css') ?>
    <?= $this->Html->css('material.css') ?>
    <?= $this->Html->css('mdl-selectfield.css') ?>

    <?= $this->Html->script('jquery-1.12.4.js') ?>
    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('material.js') ?>
    <?= $this->Html->script('jquery-ui.js') ?>
    <?= $this->Html->script('mdl-selectfield.js') ?>
</head>
<body>
    <div id="layout" class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
                    mdl-layout--fixed-header">

        <header id="topnav" class="mdl-layout__header">
            <div class="mdl-layout__header-row topnav">
                <div class="mdl-button-custom-top-profile mdl-js-button mdl-button--fab-custom-top-profile mdl-js-ripple-effect user-round-img-topbar " id="btn-menu-profile"></div>
                <div class="profile-top-name"><?= $this->request->session()->read('Auth.User.username') ?></div>
                <div class="mdl-layout-spacer"></div>
                <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon" style="background-color : #353942;color:white;">
                    <i class="material-icons">more_vert</i>
                </button>
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
                    <a href="/users/logout"> <li class="mdl-menu__item">Se déconnecter</li></a>
                </ul>
            </div>
        </header>

        <div id="sidebar" class="mdl-layout__drawer">
            <div class="mdl-layout-title logotext">min<span class="logotext-color">db</span>ook</div>
            <nav class="mdl-navigation">
                <span style="margin-top:40px;"</span>
                <?= $this->Html->link($this->Html->tag('i','account_box',array('class'=>'material-icons')). ' Profil', ['controller' => 'users','action' => 'view', $this->request->session()->read('Auth.User.id')], ['escape' => false,'class' => 'mdl-navigation__link']) ?>
                <a class="mdl-navigation__link" href="/sessions"><i class="material-icons">visibility</i> Sessions</a>
                <?php if ($this->request->session()->read('Auth.User.isAdmin')) : ?>
                    <a class="mdl-navigation__link" href="/users"><i class="material-icons">fingerprint</i> Utilisateurs</a>
                <?php endif; ?>
                <?php if ($this->request->session()->read('Auth.User.isAdmin')) : ?>
                    <a class="mdl-navigation__link" href="/classees"><i class="material-icons">folder_shared</i> Classes</a>
                <?php endif; ?>
                <a class="mdl-navigation__link" href="/info"><i class="material-icons">info_outline</i> Informations</a>
            </nav>
        </div>

        <main id="content" class="mdl-layout__content">
            <div class="page-content">
                <div class="container">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
