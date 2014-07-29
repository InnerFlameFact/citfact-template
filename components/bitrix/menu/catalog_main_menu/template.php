<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

    <ul class="nav navbar-nav">

        <?
        $columnNum = $columnIterator = $columnCount = $previousLevel = 0;
        $keyRootSection = null;

        foreach($arResult as $key => $arItem):?>

            <?if ($previousLevel && $previousLevel != 1 && $arItem["DEPTH_LEVEL"]  == 1):?>
                <?=str_repeat("</ul></li>", 1);?>
            <?endif?>

            <?if(!$columnIterator && $columnCount > 0):?>
                <li class="col-sm-2">
            <?endif;?>

            <? if($columnCount > 0 && $arItem["DEPTH_LEVEL"] != 1 && ceil($columnCount / 4) == $columnNum): ?>
                <? $columnNum = 0; ?>
                </li><li class="col-sm-2">
            <? endif;?>

            <?if ($arItem["IS_PARENT"]):?>

                <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                    <?
                    $keyRootSection = $key;
                    $columnCount = $arItem['COUNT'];
                    $columnIterator = 0;
                    $columnNum = 0;
                    ?>
                    <li class="dropdown cell-emulate"><a href="<?=$arItem["LINK"]?>" data-id="<?=$arItem["PARAMS"]["ID"]?>"><?=$arItem["TEXT"]?> <b class="caret"></b></a>
                    <ul class="dropdown-menu row">
                <?else:?>
                    <div><a href="<?=$arItem["LINK"]?>" data-id="<?=$arItem["PARAMS"]["ID"]?>"><?=$arItem["TEXT"]?></a></div>
                <?endif?>

            <?else:?>

                <?if ($arItem["PERMISSION"] > "D"):?>

                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                        <?
                        $columnCount = $arItem['COUNT'];
                        $columnIterator = 0;
                        $columnNum = 0;
                        ?>
                        <li class="cell-emulate"><a href="<?=$arItem["LINK"]?>" data-id="<?=$arItem["PARAMS"]["ID"]?>"><?=$arItem["TEXT"]?></a></li>
                    <?else:?>
                        <div><a href="<?=$arItem["LINK"]?>" data-id="<?=$arItem["PARAMS"]["ID"]?>"><?=$arItem["TEXT"]?></a></div>
                    <?endif?>

                <?else:?>

                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                        <?
                        $columnCount = $arItem['COUNT'];
                        $columnIterator = 0;
                        $columnNum = 0;
                        ?>
                        <li class="cell-emulate"><a href="" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>" data-id="<?=$arItem["PARAMS"]["ID"]?>"><?=$arItem["TEXT"]?></a></li>
                    <?else:?>
                        <div><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>" data-id="<?=$arItem["PARAMS"]["ID"]?>"><?=$arItem["TEXT"]?></a></div>
                    <?endif?>

                <?endif?>

            <?endif?>

            <?
            $previousLevel = $arItem["DEPTH_LEVEL"];
            if ($arItem["DEPTH_LEVEL"] != 1) {
                $columnIterator++;
                $columnNum++;
            }
            ?>

            <?if($columnCount > 0 && $columnIterator == $columnCount):?>
                </li>
                <li class="col-sm-4 menu-item">
                    <div class="root-menu-item">
                        <?if(mb_strlen($arResult[$keyRootSection]['PARAMS']['UF_MENU_IMAGE']) > 0):?>
                            <div class="menu-image">
                                <?if(mb_strlen($arResult[$keyRootSection]['PARAMS']['UF_MENU_IMAGE_LINK']) > 0):?>
                                <a href="<?= $arResult[$keyRootSection]['PARAMS']['UF_MENU_IMAGE_LINK'] ?>" >
                                    <?endif;?>
                                    <img data-original="<?=$arResult[$keyRootSection]['PARAMS']['UF_MENU_IMAGE']?>" alt="<?= $arResult[$keyRootSection]['TEXT'] ?>"/>
                                    <?if(mb_strlen($arResult[$keyRootSection]['PARAMS']['UF_MENU_IMAGE_LINK']) > 0):?>
                                </a>
                            <?endif;?>
                            </div>
                        <?endif;?>
                        <div class="menu-description"><?= $arResult[$keyRootSection]['PARAMS']['UF_MENU_DESC'] ?></div>
                        <a href="<?= $arResult[$keyRootSection]['LINK'] ?>">
                            <div class="btn btn-default block"><?=GetMessage("ALL_MODEL")?> <?= $arResult[$keyRootSection]['TEXT'] ?></div>
                        </a>
                    </div>
                    <div class="container-menu-item"></div>
                </li>
            <?endif;?>

        <?endforeach?>

        <?if ($previousLevel > 1)://close last item tags?>
            <?=str_repeat("</ul></li>", 1);?>
        <?endif?>

    </ul>

    <div class="hidden">
        <?foreach($arResult as $key => $arItem):?>
            <div data-container-id="<?=$arItem["PARAMS"]["ID"]?>">
                <?if(mb_strlen($arItem['PARAMS']['UF_MENU_IMAGE']) > 0):?>
                    <div class="menu-image">
                        <?if(mb_strlen($arItem['PARAMS']['UF_MENU_IMAGE_LINK']) > 0):?>
                        <a href="<?= $arItem['PARAMS']['UF_MENU_IMAGE_LINK'] ?>" >
                            <?endif;?>
                            <img src="<?=$arItem['PARAMS']['UF_MENU_IMAGE']?>" alt="<?= $arItem['TEXT'] ?>" />
                            <?if(mb_strlen($arItem['PARAMS']['UF_MENU_IMAGE_LINK']) > 0):?>
                        </a>
                    <?endif;?>
                    </div>
                <?endif;?>
                <div class="menu-description"><?= $arItem['PARAMS']['UF_MENU_DESC'] ?></div>
            </div>
        <?endforeach;?>
    </div>

<?endif?>