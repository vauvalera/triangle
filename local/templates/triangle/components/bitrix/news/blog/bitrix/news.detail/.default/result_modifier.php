<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arResult['DETAIL_PICTURE'] = CFile::ResizeImageGet(
            $arResult['DETAIL_PICTURE'],
            array('width' => 850, 'height' => 400),
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true
        );
