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
                        <div class="navbar-collapse collapse top table-emulate-md">
                            <?$APPLICATION->IncludeComponent('bitrix:menu', "top_menu", array(
                                    "ROOT_MENU_TYPE" => "top",
                                    "MENU_CACHE_TYPE" => "Y",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MAX_LEVEL" => "1",
                                    "USE_EXT" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                )
                            );?>
                            <div class="header-personal-ref valign-middle align-center no-wrap cell-emulate-md">
                                <? if($USER->IsAuthorized()): ?>
                                    <a href="/personal/"><?= GetMessage('HELLO', array('#USER_LOGIN#' => $USER->GetLogin())) ?></a>
                                <? else: ?>
                                    <a href="/personal/profile/"><?= GetMessage('PERSONAL') ?></a>
                                <? endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="header-info">
                <div class="container header table-emulate-md full">
                    <div class="logo col-md-3 col-lg-2 logo cell-emulate-md align-center">
                        <img src="<?=SITE_TEMPLATE_PATH ?>/images/logo.png" alt=""/>
                    </div>
                    <div class="col-md-6 col-lg-8 cell-emulate-md">
                        <div class="row align-center">

                            <div class="header-backs col-xs-12">
                                <div class="row">
                                    <div class="col-xs-6"><a href="#">Заказать звонок</a></div>
                                    <div class="col-xs-6"><a href="#">Напишите нам</a></div>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="top-search">
                                    <input type="text">
                                    <input type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 cell-emulate-md">

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:sale.basket.basket.small",
                            "small_basket",
                            Array(
                                "PATH_TO_BASKET" => "/personal/cart/",
                                "PATH_TO_ORDER" => "/personal/order/",
                                "SHOW_DELAY" => "N",
                                "SHOW_NOTAVAIL" => "N",
                                "SHOW_SUBSCRIBE" => "N",
                                "AJAX_MODE" => "N",
                            ),
                            false
                        );?>

                    </div>
                </div>
            </section>


            <section class="main-menu">

                <div class="navbar navbar-default main hidden-xs">
                    <div class="container">
                        <div class="navbar-collapse main collapse">

                            <?$APPLICATION->IncludeComponent("bitrix:menu", "catalog_main_menu", array(
                                    "ROOT_MENU_TYPE" => "left",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_THEME" => "site",
                                    "CACHE_SELECTED_ITEMS" => "N",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MAX_LEVEL" => "4",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "Y",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N",
                                ),
                                false
                            );?>

                        </div>
                    </div>
                </div>

                <div class="navbar navbar-default main mobile visible-xs">
    				<div class="container inner-padding">
        				<div class="navbar-header">
            				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse.main">
                			Каталог            
                			</button>
        				</div>
        			<div class="navbar-collapse main collapse">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "catalog_main_mobile", array(
                                "ROOT_MENU_TYPE" => "left",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "36000000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_THEME" => "site",
                                "CACHE_SELECTED_ITEMS" => "N",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "4",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "Y",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",z
                            ),
                            false
                        );?>

        			</div>
    			</div>

            </section>


            <section class="breadcrumbs-container">
                <ol class="breadcrumb">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Каталог</a></li>
                    <li class="active">Товар</li>
                </ol>
            </section>
        </div>
    </header>

    <section class="content container">
