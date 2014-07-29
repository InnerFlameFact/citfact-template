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
              <button type="button" class="navbar-toggle btn-gray-gradient" data-toggle="collapse"
                      data-target=".navbar-collapse.top">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse top table-emulate-md">
              <ul class="nav navbar-nav cell-emulate-md full">
                <li class="active cell-emulate-md align-center"><a href="#">О магазине</a></li>
                <li class="cell-emulate-md align-center"><a href="#about">Гарантия качества</a></li>
                <li class="cell-emulate-md align-center"><a href="#contact">Доставка и оплата</a></li>
                <li class="cell-emulate-md align-center"><a href="#">Новости и статьи</a></li>
                <li class="cell-emulate-md align-center"><a href="#">Контакты</a></li>
              </ul>
              <div class="header-personal-ref valign-middle align-center no-wrap cell-emulate-md"><a
                    href="#">Войти в личный кабинет</a></div>
            </div>
          </div>
        </div>
      </section>

      <section class="header-info">
        <div class="container header table-emulate-md full">
          <div class="logo col-md-3 col-lg-2 logo cell-emulate-md align-center">
            <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.png" alt=""/>
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
            <div class="cart-line-container">
              <div class="top-section table-emulate full align-center">
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

        <div class="navbar navbar-default main hidden-xs">
          <div class="container">
            <div class="navbar-collapse main collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown"><a href="#" class="hover-emulate" data-id="32">Первый уровень <b
                        class="caret"></b></a>
                  <ul class="dropdown-menu row">
                    <li class="col-sm-2">
                      <div><a href="#">Второй уровень</a></div>
                      <a href="#">Третий уровень</a>
                      <a href="#">Третий уровень</a>
                      <a href="#">Третий уровень</a>

                    </li>
                    <li class="col-sm-2">
                      <div><a href="#">Второй уровень</a></div>
                      <a href="#">Третий уровень</a>
                      <a href="#">Третий уровень</a>
                      <a href="#">Третий уровень</a>
                    </li>
                    <li class="col-sm-2">
                      <div><a href="#">Второй уровень</a></div>
                      <a href="#">Третий уровень</a>
                      <a href="#">Третий уровень</a>
                      <a href="#">Третий уровень</a>
                    </li>
                    <li class="col-sm-2">
                      <div><a href="#">Второй уровень</a></div>
                      <a href="#">Третий уровень</a>
                      <a href="#">Третий уровень</a>
                      <a href="#">Третий уровень</a>
                    </li>
                    <li class="col-sm-4 menu-item">
                      <div class="root-menu-item">
                        <div class="menu-image align-center">
                          <a href="#">
                            <img src="" data-original="" alt="">
                          </a>
                        </div>
                        <div class="menu-description align-center"></div>
                        <a href="/catalog/sheen/" class="align-center">
                          <div class="btn btn-default block">Cсылка</div>
                        </a>
                      </div>
                      <div class="container-menu-item"></div>
                    </li>
                  </ul>
                </li>
              </ul>

            </div>
          </div>
        </div>

        <div class="navbar navbar-default main mobile visible-xs">
          <div class="container inner-padding">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse"
                      data-target=".navbar-collapse.main">
                Каталог
              </button>
            </div>
            <div class="navbar-collapse main collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown-custom"><a href="/catalog/sheen/" class="drop-set">SHEEN <span
                        class="caret-wrap"><b class="caret"></b></span></a>
                  <ul class="dropdown-custom-menu">
                    <li class="dropdown-custom"><a href="/catalog/sheen_cruise_line/"
                                                   class="drop-set">CRUISE LINE <span
                            class="caret-wrap"><b class="caret"></b></span></a>
                      <ul class="dropdown-custom-menu">
                        <li><a href="/catalog/sheen_5500_series/">5500 SERIES</a></li>
                        <li><a href="/catalog/sheen_4500_series/">4500 SERIES</a></li>
                        <li><a href="/catalog/sheen_3500_series/">3500 SERIES</a></li>

                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
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
