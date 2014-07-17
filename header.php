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