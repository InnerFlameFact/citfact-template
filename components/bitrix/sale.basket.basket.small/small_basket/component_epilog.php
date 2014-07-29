<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!$arParams['BUY_URL_SIGN'] && $arParams['BUY_URL_SIGN'] !== false)
	$arParams['BUY_URL_SIGN'] = 'action=ADD2BASKET';

if ($_REQUEST['action'] == 'ADD2BASKET' || $_REQUEST['action'] == 'ADD_TO_COMPARE_LIST' || $_REQUEST['action'] == 'UPDATE_CART')
{
	if(!function_exists('BasketLineAjaxResponse')){
		function BasketLineAjaxResponse()
		{
			global $APPLICATION;
			$APPLICATION->RestartBuffer();
			$APPLICATION->IncludeComponent(
				"bitrix:sale.basket.basket.small",
				"small_basket",
				Array(
					"PATH_TO_BASKET" => "/personal/cart/",
					"PATH_TO_ORDER" => "/personal/order/",
					"SHOW_DELAY" => "N",
					"SHOW_NOTAVAIL" => "N",
					"SHOW_SUBSCRIBE" => "N"
				),
			false
			);
			die();
		}
	}

	AddEventHandler('main', 'OnEpilog', 'BasketLineAjaxResponse');
}
?>