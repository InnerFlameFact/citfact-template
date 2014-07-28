<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>



        <div class="row">
            <div class="col-xs-12">
                <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
                <?
                CJSCore::Init(array("fx"));

                if (file_exists($_SERVER["DOCUMENT_ROOT"].$this->GetFolder().'/themes/'.$arParams["TEMPLATE_THEME"].'/colors.css'))
                    $APPLICATION->SetAdditionalCSS($this->GetFolder().'/themes/'.$arParams["TEMPLATE_THEME"].'/colors.css');
                ?>
                <div class="catalog-filter">
                    <div class="filter-head ops-condenced">
                        <?echo GetMessage("CT_BCSF_FILTER_TITLE")?>
                    </div>
                    <div class="catalog-sections-wrap close-xs">

                    <form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" class="smartfilter">
                    <?foreach($arResult["HIDDEN"] as $arItem):?>
                        <?
                        // Remove from action form pagination query
                        if(preg_match('#PAGEN_#', $arItem["CONTROL_NAME"])) continue;
                        ?>
                        <input
                            type="hidden"
                            name="<?echo $arItem["CONTROL_NAME"]?>"
                            id="<?echo $arItem["CONTROL_ID"]?>"
                            value="<?echo $arItem["HTML_VALUE"]?>"
                            />
                    <?endforeach;?>
                    <?foreach($arResult["ITEMS"] as $key=>$arItem):
                        $key = md5($key);
                        ?>
                        <?if(isset($arItem["PRICE"])):?>
                        <?
                        if (!$arItem["VALUES"]["MIN"]["VALUE"] || !$arItem["VALUES"]["MAX"]["VALUE"] || $arItem["VALUES"]["MIN"]["VALUE"] == $arItem["VALUES"]["MAX"]["VALUE"])
                            continue;
                        ?>
                        <section class="bx_filter_container">
                            <div class='head bx_filter_container_title'>
                                <span class='triger'></span>
                                <div class='name'><?=$arItem["NAME"]?></div>
                                <span class="bx_filter_container_modef"></span>
                            </div>
                            <div class='body bx_filter_block'>
                                <div class="catalog-price-container table-emulate full">
                                    <div class="price-input cell-emulate">
                                        <input
                                            class="from-input"
                                            placeholder="<?echo GetMessage("CT_BCSF_FILTER_FROM")?>"
                                            type="text"
                                            name="<?echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>"
                                            id="<?echo $arItem["VALUES"]["MIN"]["CONTROL_ID"]?>"
                                            value="<?echo $arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
                                            size="5"
                                            onkeyup="smartFilter.keyup(this)"
                                            />
                                    </div>
                                    <div class="price-input cell-emulate">
                                        <input
                                            class="to-input"
                                            placeholder="<?echo GetMessage("CT_BCSF_FILTER_TO")?>"
                                            type="text"
                                            name="<?echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>"
                                            id="<?echo $arItem["VALUES"]["MAX"]["CONTROL_ID"]?>"
                                            value="<?echo $arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
                                            size="5"
                                            onkeyup="smartFilter.keyup(this)"
                                            />
                                    </div>
                                </div>
                                <div class="range-input">
                                    <input
                                        type="text"
                                        class="ion-range-input"
                                        data-from="<?=$arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
                                        data-to="<?=$arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
                                        value="<?=$arItem["VALUES"]["MIN"]["VALUE"]?>;<?=$arItem["VALUES"]["MAX"]["VALUE"]?>"
                                        />
                                </div>
                            </div>
                        </section>
                    <?endif?>
                    <?endforeach?>

                    <?foreach($arResult["ITEMS"] as $key=>$arItem):?>
                        <?if($arItem["PROPERTY_TYPE"] == "N" ):?>
                            <?
                            if (!$arItem["VALUES"]["MIN"]["VALUE"] || !$arItem["VALUES"]["MAX"]["VALUE"] || $arItem["VALUES"]["MIN"]["VALUE"] == $arItem["VALUES"]["MAX"]["VALUE"])
                                continue;

                            $isClose = (isset($arItem['VALUES']['MIN']['HTML_VALUE']) || isset($arItem['VALUES']['MAX']['HTML_VALUE'])) ? false : true;
                            ?>
                            <section class='bx_filter_container<?= ($isClose) ? ' close-section' : '' ?>'>
                                <div class='head bx_filter_container_title'>
                                    <span class='triger'></span>
                                    <div class='name'><?=$arItem["NAME"]?></div>
                                    <span class="bx_filter_container_modef"></span>
                                </div>
                                <div class='body bx_filter_block'>
                                    <div class="catalog-price-container table-emulate full">
                                        <div class="price-input cell-emulate">
                                            <input
                                                class="from-input"
                                                placeholder="<?echo GetMessage("CT_BCSF_FILTER_FROM")?>"
                                                type="text"
                                                name="<?echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>"
                                                id="<?echo $arItem["VALUES"]["MIN"]["CONTROL_ID"]?>"
                                                value="<?echo $arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
                                                size="5"
                                                onkeyup="smartFilter.keyup(this)"
                                                />
                                        </div>
                                        <div class="price-input cell-emulate">
                                            <input
                                                class="to-input"
                                                placeholder="<?echo GetMessage("CT_BCSF_FILTER_TO")?>"
                                                type="text"
                                                name="<?echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>"
                                                id="<?echo $arItem["VALUES"]["MAX"]["CONTROL_ID"]?>"
                                                value="<?echo $arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
                                                size="5"
                                                onkeyup="smartFilter.keyup(this)"
                                                />
                                        </div>
                                    </div>
                                    <div class="range-input">
                                        <input
                                            type="text"
                                            class="ion-range-input"
                                            data-from="<?=$arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
                                            data-to="<?=$arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
                                            value="<?=$arItem["VALUES"]["MIN"]["VALUE"]?>;<?=$arItem["VALUES"]["MAX"]["VALUE"]?>"
                                            />
                                    </div>
                                </div>
                            </section>
                        <?elseif(!empty($arItem["VALUES"]) && !isset($arItem["PRICE"])):?>
                            <?
                            $isClose = ($arItem['CODE'] == 'MANUFACTURER' || $arItem['CODE'] == 'POL') ? false : true;
                            foreach ($arItem['VALUES'] as $value) {
                                if ($value['CHECKED']) {
                                    $isClose = false;
                                    break;
                                }
                            }
                            ?>
                            <section class='bx_filter_container<?= ($isClose) ? ' close-section' : '' ?>'>
                                <?if(strpos($arItem["CODE"], "CHECKBOX") !== false):?>
                                    <div class='head bx_filter_container_title'>
                                        <?foreach($arItem["VALUES"] as $val => $ar):?>
                                            <div class="cell-emulate">
                                                <input
                                                    type="checkbox"
                                                    value="<?echo $ar["HTML_VALUE"]?>"
                                                    name="<?echo $ar["CONTROL_NAME"]?>"
                                                    id="<?echo $ar["CONTROL_ID"]?>"
                                                    <?echo $ar["CHECKED"]? 'checked="checked"': ''?>
                                                    onclick="smartFilter.click(this)"
                                                    <?if ($ar["DISABLED"]):?>disabled<?endif?>
                                                    />
                                            </div>
                                            <div class="cell-emulate">
                                                <label for='<?echo $ar["CONTROL_ID"]?>' class='name'><?=$arItem["NAME"]?></label>
                                            </div>
                                        <?endforeach;?>
                                        <span class=''></span>
                                        <span class="bx_filter_container_modef"></span>
                                    </div>

                                <?else:?>

                                    <div class='head bx_filter_container_title'>
                                        <span class='triger'></span>
                                        <div class='name'><?=$arItem["NAME"]?></div>
                                        <span class=''></span>
                                        <span class="bx_filter_container_modef"></span>
                                    </div>
                                    <div class='body bx_filter_block'>
                                        <ul>
                                            <?foreach($arItem["VALUES"] as $val => $ar):?>
                                                <li>
                                                    <div class="cell-emulate">
                                                        <input
                                                            type="checkbox"
                                                            value="<?echo $ar["HTML_VALUE"]?>"
                                                            name="<?echo $ar["CONTROL_NAME"]?>"
                                                            id="<?echo $ar["CONTROL_ID"]?>"
                                                            <?echo $ar["CHECKED"]? 'checked="checked"': ''?>
                                                            onclick="smartFilter.click(this)"
                                                            <?if ($ar["DISABLED"]):?>disabled<?endif?>
                                                            />
                                                    </div>
                                                    <div class="cell-emulate">
                                                        <label for='<?echo $ar["CONTROL_ID"]?>'><?echo $ar["VALUE"];?></label>
                                                    </div>
                                                </li>
                                            <?endforeach;?>
                                        </ul>
                                    </div>
                                <?endif;?>
                            </section>
                        <?endif;?>
                    <?endforeach;?>

                    <section class='bx_filter_container<?= ($arResult["CHECKBOX_ITEMS_CLOSE"]) ? ' close-section' : '' ?>'>
                        <div class='head bx_filter_container_title'>
                            <span class='triger'></span>
                            <div class='name'><?= GetMessage('CT_BCSF_FUNCTION') ?></div>
                            <span class=''></span>
                            <span class="bx_filter_container_modef"></span>
                        </div>
                        <div class='body bx_filter_block'>
                            <ul>
                                <?foreach($arResult["CHECKBOX_ITEMS"] as $val => $ar):?>
                                    <?foreach($ar["VALUES"] as $prop_key => $prop_value):?>
                                        <li>
                                            <div class="cell-emulate">
                                                <input
                                                    type="checkbox"
                                                    value="<?echo $prop_value["HTML_VALUE"]?>"
                                                    name="<?echo $prop_value["CONTROL_NAME"]?>"
                                                    id="<?echo $prop_value["CONTROL_ID"]?>"
                                                    <?echo $prop_value["CHECKED"]? 'checked="checked"': ''?>
                                                    onclick="smartFilter.click(this)"
                                                    <?if ($prop_value["DISABLED"]):?>disabled<?endif?>
                                                    />
                                            </div>
                                            <div class="cell-emulate">
                                                <label for='<?echo $prop_value["CONTROL_ID"]?>'><?echo $ar["NAME"];?></label>
                                            </div>
                                        </li>
                                    <?endforeach;?>
                                <?endforeach;?>
                            </ul>
                        </div>
                    </section>

                    <section class="buttons">
                        <input class="btn btn-default" type="submit" id="set_filter" name="set_filter" value="<?=GetMessage("CT_BCSF_SET_FILTER")?>" />
                        <?if($arParams['LINK_CATALOG'] == 'Y'):?>
                            <a href="/catalog/" class="btn btn-white"><?=GetMessage("CT_BCSF_ALL_ITEMS")?></a>
                        <?endif;?>
                        <input class="btn btn-default" type="submit" id="del_filter" name="del_filter" value="<?=GetMessage("CT_BCSF_DEL_FILTER")?>" />

                        <div class="bx_filter_popup_result left hidden-xs" id="modef"  style="display: none;">
                            <?echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">'.intval($arResult["ELEMENT_COUNT"]).'</span>'));?>
                            <span class="arrow"></span>
                            <a href="<?echo $arResult["FILTER_URL"]?>"><?echo GetMessage("CT_BCSF_FILTER_SHOW")?></a>
                        </div>

                    </section>
                </form>
            </div>
        </div>
    </div>
</div>