<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<div class="search">
<form action="<?=$arResult["FORM_ACTION"]?>" role="form">
	 <i class="fa fa-search"></i>
	  <div class="field-toggle">
	<input type="text" name="q" class="search-form"  placeholder="Search" value="" size="15" maxlength="50" />
	 </div>
</form>
</div>
