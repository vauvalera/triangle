<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach ($arResult['ITEMS'] as &$arItem) {
    foreach($arItem['EMPLOYEES'] as &$emp) {
        if (isset($emp['PREVIEW_PICTURE'])) {
        $emp['PREVIEW_PICTURE'] = CFile::ResizeImageGet(
            $emp['PREVIEW_PICTURE'],
            array('width' => 269, 'height' => 261),
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );
    } else {
        $emp['PREVIEW_PICTURE'] = array(
            'src' => SITE_TEMPLATE_PATH.'/images/home/profile1.png',
            'width' => 200,
            'height' => 400
        );
        }
    }
}
unset($arItem);
