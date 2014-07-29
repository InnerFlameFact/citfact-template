<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
    $countCompare = count($_SESSION["CATALOG_COMPARE_LIST"][IBLOCK_CATALOG]["ITEMS"]);
?>
<? ob_start(); ?>
    <div class="cart-line-container">
    <div class="top-section table-emulate full align-center">
        <a href="<?=$arParams["PATH_TO_BASKET"];?>" class="red-noise">
            <div class="cart-icon cell-emulate valign-middle">
                <i class='icon'></i>
            </div>
            <div class="cart-content  cell-emulate valign-middle">
                <div><?=$arResult["TOTAL_COUNT"];?> <?=getNumEnding($arResult["TOTAL_COUNT"], array(GetMessage("ITEMS_ONE"), GetMessage("ITEMS_TWO"), GetMessage("ITEMS_FIVE")))?></div>
                <div><?=GetMessage("ON")?> <?=$arResult["TOTAL_PRICE"];?></div>
            </div>
        </a>
    </div>
    <div class="bottom-section align-center">
        <a href="/catalog/compare/"><?=GetMessage("SUBSCRIBE")?> <?=$countCompare?> <?=getNumEnding($countCompare, array(GetMessage("ITEMS_ONE"), GetMessage("ITEMS_TWO"), GetMessage("ITEMS_FIVE")))?></a>
    </div>
    </div>
<?
    $componentTemplate = ob_get_contents();
    ob_end_clean();
?>

<? ob_start(); ?>
    <a id="catalog-compare" href="/catalog/compare/" class="aside-compare gray-gradient-invert light-hover hidden-xs">
        <div class="in-compare"><?=GetMessage("SUBSCRIBE")?> <span id="catalog-compare"><?=$countCompare?></span> <?=getNumEnding($countCompare, array(GetMessage("ITEMS_ONE"), GetMessage("ITEMS_TWO"), GetMessage("ITEMS_FIVE")))?></div>
        <div class="separate"></div>
        <div class="ref-to-compare"><?=GetMessage("GO_TO_COMPARE")?></div>
    </a>
<?
    $compareCatalog = ob_get_contents();
    ob_end_clean();
?>

<?if((getenv('HTTP_X_REQUESTED_WITH') != 'XMLHttpRequest')):?>         
    <?= $componentTemplate ?>
<?else:?>
    <?
        header('Content-Type: application/json');
        echo json_encode(array(
            'small_cart' => $componentTemplate,
            'compare_catalog' => $compareCatalog,
        ));
    ?>
<?endif;?>