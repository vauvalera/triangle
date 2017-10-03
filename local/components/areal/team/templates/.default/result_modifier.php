<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach ($arResult['ITEMS'] as &$arItem) {
    for($i=0;$i<count($arResult["ITEMS"]);$i++)
    {
    if (isset($arItem[$i]['PREVIEW_PICTURE'])) {
        $arItem[$i]['PREVIEW_PICTURE'] = CFile::ResizeImageGet(
            $arItem[$i]['PREVIEW_PICTURE'],
            array('width' => 269, 'height' => 261),
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );
    } else {
        $arItem[$i]['PREVIEW_PICTURE'] = array(
            'src' => SITE_TEMPLATE_PATH.'/images/home/profile1.png',
            'width' => 200,
            'height' => 400
        );
    }
}
}
unset($arItem);
