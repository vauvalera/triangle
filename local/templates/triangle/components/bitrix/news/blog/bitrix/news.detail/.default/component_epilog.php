<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//pre($arParams);
$APPLICATION->IncludeComponent(
"bitrix:catalog.comments",
".default",
Array(
"AJAX_POST" => "Y",
"BLOG_TITLE" => "Комментарий",
"BLOG_URL" => $arParams['BLOG_URL'],
"BLOG_USE" => "Y",
"CACHE_GROUPS" => $arParams['CACHE_GROUPS'],
"CACHE_TIME" => "3600",
"CACHE_TYPE" => "A",
"COMMENTS_COUNT" => "10",
"COMPONENT_TEMPLATE" => ".default",
"ELEMENT_CODE" => "",
"ELEMENT_ID" => $arResult['ID'],
"EMAIL_NOTIFY" => "N",
"FB_APP_ID" => $arParams['FB_APP_ID'],
"FB_COLORSCHEME" => "light",
"FB_ORDER_BY" => "reverse_time",
"FB_TITLE" => "Facebook",
"FB_USE" => "N",
"FB_USER_ADMIN_ID" => "",
"IBLOCK_ID" => "7",
"IBLOCK_TYPE" => "texts",
"PATH_TO_SMILE" => "",
"SHOW_DEACTIVATED" => "N",
"SHOW_RATING" => "N",
"SHOW_SPAM" => "Y",
"TEMPLATE_THEME" => "black",
"URL_TO_COMMENT" => "",
"VK_API_ID" => $arParams['VK_API_ID'],
"VK_TITLE" => "В контакте",
"VK_USE" => "N",
"WIDTH" => ""
),
$component,
Array(
'HIDE_ICONS' => '   Y'
)
);?>
