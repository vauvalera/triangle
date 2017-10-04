<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach ($arResult['ITEMS'] as &$arItem) {
    if (isset($arItem['PREVIEW_PICTURE'])) {
        $arItem['PREVIEW_PICTURE'] = CFile::ResizeImageGet(
            $arItem['PREVIEW_PICTURE'],
            array('width' => 800, 'height' => 400),
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );
    } else {
        $arItem['PREVIEW_PICTURE'] = array(
            'src' => SITE_TEMPLATE_PATH.'/images/home/profile1.png',
            'width' => 81,
            'height' => 81
        );
    }
}
unset($arItem);
