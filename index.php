<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Каталог книг");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"DISPLAY_PANEL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "books",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "/e-store/books/#SECTION_ID#/"
	)
);?>
<hr>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top",
	"",
	Array(
		"ACTION_VARIABLE" => "action",
		"BASKET_URL" => "/personal/cart/",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "/e-store/books/#SECTION_ID#/#ELEMENT_ID#/",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "3",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "books",
		"LINE_ELEMENT_COUNT" => "1",
		"PRICE_CODE" => Array("RETAIL"),
		"PRODUCT_ID_VARIABLE" => "id",
		"PROPERTY_CODE" => Array(),
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "/e-store/books/#SECTION_ID#/",
		"SHOW_PRICE_COUNT" => "1",
		"USE_PRICE_COUNT" => "N"
	)
);?>

<h2>Видео-новости хо хо</h2>

<?$APPLICATION->IncludeComponent(
	"bitrix:player",
	"",
	Array(
		"ADVANCED_MODE_SETTINGS" => "N",
		"AUTOSTART" => "N",
		"BUFFER_LENGTH" => "10",
		"CONTROLBAR" => "bottom",
		"CONTROLS_BGCOLOR" => "FFFFFF",
		"CONTROLS_COLOR" => "000000",
		"CONTROLS_OVER_COLOR" => "000000",
		"DISPLAY_CLICK" => "play",
		"DOWNLOAD_LINK_TARGET" => "_self",
		"FULLSCREEN" => "Y",
		"HEIGHT" => "324",
		"HIDE_MENU" => "N",
		"HIGH_QUALITY" => "Y",
		"MUTE" => "N",
		"PATH" => "/upload/intro.flv",
		"PLAYER_TYPE" => "auto",
		"REPEAT" => "N",
		"SCREEN_COLOR" => "000000",
		"SHOW_CONTROLS" => "Y",
		"SHOW_DIGITS" => "Y",
		"SHOW_STOP" => "N",
		"SKIN" => "bitrix.swf",
		"SKIN_PATH" => "/bitrix/components/bitrix/player/mediaplayer/skins",
		"USE_PLAYLIST" => "N",
		"VOLUME" => "90",
		"WIDTH" => "400",
		"WMODE" => "transparent",
		"WMODE_WMV" => "window"
	)
);?>

<!-- --><h2>Новые фотографии</h2>
<?$APPLICATION->IncludeComponent(
	"bitrix:photogallery.detail.list",
	".default",
	Array(
		"ADDITIONAL_SIGHTS" => array(),
		"BEHAVIOUR" => "USER",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMMENTS_TYPE" => "none",
		"DATE_TIME_FORMAT" => "d.m.Y",
		"DETAIL_SLIDE_SHOW_URL" => "/content/gallery/#USER_ALIAS#/#SECTION_ID#/#ELEMENT_ID#/slide_show/",
		"DETAIL_URL" => "/content/gallery/#USER_ALIAS#/#SECTION_ID#/#ELEMENT_ID#/",
		"ELEMENT_LAST_TYPE" => "none",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"GROUP_PERMISSIONS" => array(0=>"1",1=>"",),
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "photos",
		"MAX_VOTE" => "5",
		"PAGE_ELEMENTS" => "6",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"PICTURES_SIGHT" => "",
		"SEARCH_URL" => "/content/gallery/search/",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SET_TITLE" => "N",
		"SHOW_COMMENTS" => "N",
		"SHOW_CONTROLS" => "N",
		"SHOW_PAGE_NAVIGATION" => "none",
		"SHOW_RATING" => "N",
		"SHOW_SHOWS" => "N",
		"SHOW_TAGS" => "N",
		"THUMBNAIL_SIZE" => "90",
		"USER_ALIAS" => $_REQUEST["USER_ALIAS"],
		"USE_DESC_PAGE" => "N",
		"USE_PERMISSIONS" => "N",
		"VOTE_NAMES" => array(0=>"1",1=>"2",2=>"3",3=>"4",4=>"5",5=>"",)
	)
);?><!-- --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>