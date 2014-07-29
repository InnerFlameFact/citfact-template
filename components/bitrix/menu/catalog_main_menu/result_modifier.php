<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$keyItem = null;
$countItem = 0;
foreach ($arResult as $key => $item) {
    if ($item['DEPTH_LEVEL'] == 1) {
        if (!is_null($keyItem)) {
            $arResult[$keyItem]['COUNT'] = $countItem;
        }

        $keyItem = $key;
        $countItem = 0;
    } else {
        $countItem++;
    }
}

$arResult[$keyItem]['COUNT'] = $countItem;
?>

