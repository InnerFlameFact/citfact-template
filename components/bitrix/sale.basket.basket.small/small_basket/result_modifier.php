<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();



$total_price = 0;
$total_count = 0;
$ids = array();
foreach($arResult["ITEMS"] as $item){
	$ids[] = $item["PRODUCT_ID"];
	if ($item["DELAY"]=="N" && $item["CAN_BUY"]=="Y"){
		$total_price += $item["PRICE"] * $item["QUANTITY"];
		$total_count++;
	}
}

$arResult["TOTAL_PRICE"] = CurrencyFormat($total_price, 'RUB');
$arResult["TOTAL_COUNT"] = $total_count;
?>