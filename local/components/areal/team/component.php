<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arResult */
CModule::IncludeModule('iblock');

	//SELECT
	$arSelect =array(
		"ID",
		"IBLOCK_ID",
		"IBLOCK_SECTION_ID",
		"NAME",
		"ACTIVE_FROM",
		"TIMESTAMP_X",
		"DETAIL_PAGE_URL",
		"DETAIL_TEXT",
		"DETAIL_TEXT_TYPE",
		"PREVIEW_TEXT",
		"PREVIEW_TEXT_TYPE",
		"PREVIEW_PICTURE",
	);

	$arFilter = [
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ACTIVE" => "Y",
	];

	$i = 0;
  	$arResult["ITEMS"] = [];
  	$obj = CIBlockSection::GetList(
		[],
		$arFilter,
		false,
		['ID', 'NAME']
	);

  	while ($row = $obj->Fetch()) {
	  	$arResult["ITEMS"][$row["ID"]] = $row;
	}

	$obj = CIBlockElement::GetList(
		$arSort,
		$arFilter,
		false,
		false,
		[]
	);

	while ($row = $obj->Fetch()) {
		$arResult["ITEMS"][$row["IBLOCK_SECTION_ID"]]["EMPLOYEES"][] = $row;
	}

pre($arResult);
$this->includeComponentTemplate();
