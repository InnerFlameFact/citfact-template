<?php

/*
 * This file is part of the Studio Fact package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?= LANG_CHARSET ?>"/>
    <meta name="viewport" content="width=device-width,initial-scale=0.6">
    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico"/>
    <title><?= $GLOBALS['APPLICATION']->ShowTitle() ?></title>
    <?
    $GLOBALS['APPLICATION']->ShowMeta('robots', false, true);
    $GLOBALS['APPLICATION']->ShowMeta('keywords', false, true);
    $GLOBALS['APPLICATION']->ShowMeta('description', false, true);
    $GLOBALS['APPLICATION']->ShowCSS(true, true);
    $GLOBALS['APPLICATION']->AddHeadScript(SITE_TEMPLATE_PATH . '/scripts.js');
    $GLOBALS['APPLICATION']->ShowHeadStrings();
    $GLOBALS['APPLICATION']->ShowHeadScripts();
    ?>
</head>
<body>
<? $GLOBALS['APPLICATION']->ShowPanel() ?>

<main>
    <header>
        <div class="container">
            <section class="top-menu">
                <div class="navbar navbar-default top-navbar">
                    <div class="container inner-padding">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle btn-gray-gradient" data-toggle="collapse" data-target=".navbar-collapse.top">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse top table-md">
                            <ul class="nav navbar-nav cell-md">
                                <li class="active"><a href="#">О магазине</a></li>
                                <li><a href="#about">Гарантия качества</a></li>
                                <li><a href="#contact">Доставка и оплата</a></li>
                                <li class="dropdown"><a href="#">Новости и статьи</a></li>
                                <li class="dropdown"><a href="#">Контакты</a></li>
                            </ul>
                            <div class="header-personal-ref valign-middle right-align cell-md"><a href="#">Войти в личный кабинет</a></div>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </section>
            <section class="header-info">
                <div class="container header table-md full">
                    <div class="col-md-3 col-sm-3 col-lg-2 logo cell-md">
                        LOGO
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-8 cell-md padding-15 xs-no-padding">
                        <div class="row heder-center-section">
                            <div class="col-md-12 col-sm-12 col-lg-8 ">
                                <div class="row ">
                                    <div class="col-xs-4">8 495 790 55 61</div>
                                    <div class="col-xs-4">8 495 790 55 61</div>
                                    <div class="col-xs-4">8 495 790 55 61</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4 hidden-xs section-col">
                                <div class="row header-backs-block">
                                    <div class="col-xs-6"><a href="#">Заказать звонок</a></div>
                                    <div class="col-xs-6"><a href="#">Напишите нам</a></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-12 hidden-xs section-col header-graph">
                                <i class="icon head-tel"></i>пн-пт с 9 до 20  •  сб-вс с 9 до 19
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12 hidden-xs">
                                <div class="top-search">
                                    <input type="text">
                                    <input type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-lg-2 hidden-xs cell-md">
                        <div class="cart-line-container">
                            <div class="top-section cart-button-ref red-noise-wrap table-emulate full">
                                <a href="#">
                                    <div class="cart-icon cell-emulate valign-middle">
                                        <i class="icon"></i>
                                    </div>
                                    <div class="cart-content  cell-emulate valign-middle">
                                        <div>12 товаров</div>
                                        <div>на 39 000 руб.</div>
                                    </div>
                                </a>
                            </div>
                            <div class="bottom-section align-center">
                                <a href="#">В сравнении: 8 товаров</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main-menu">

            </section>
        </div>
    </header>
    <section class="content">

    </section>
</main>

<footer>

</footer>