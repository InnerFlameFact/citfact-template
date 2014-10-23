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
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="<?= LANG_CHARSET ?>"/>
  <meta name="viewport" content="width=device-width,initial-scale=0.6">
  <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico"/>
  <title><?= $APPLICATION->ShowTitle() ?></title>
  <?
  $APPLICATION->ShowMeta('robots', false, true);
  $APPLICATION->ShowMeta('keywords', false, true);
  $APPLICATION->ShowMeta('description', false, true);
  $APPLICATION->ShowCSS(true, true);
  $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/scripts.js');
  $APPLICATION->ShowHeadStrings();
  $APPLICATION->ShowHeadScripts();
  ?>
</head>
<body>
<? $APPLICATION->ShowPanel() ?>