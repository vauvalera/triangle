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
$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<div class="portfolio-pagination">
                    <ul class="pagination">
<?if($arResult["bDescPageNumbering"] === true):?>

	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
			<li>
				<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
				?>=<?= $arResult["NavPageCount"] ?>"></a>
			</li>
		<?else:?>
		<li>
			<a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
			?>"></a>
		</li>
			<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
				<li>
					<a  href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
					?>"></a>
				</li>
			<?else:?>
				<li>
					<a
					   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
					   ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"></a>
				</li>
			<?endif?>
		<?endif?>
	<?else:?>
		<li>
			<a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
			?>"></a>
		</li>
	<?endif?>

	<?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
		<li class="active">
			<a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
			?>"><?= $NavRecordGroupPrint ?></a>
		</li>
		<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
			<li>
				<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
				?>=<?= ($arResult["NavPageNomer"]) ?>"><?= $NavRecordGroupPrint ?></a>
			</li>
		<?else:?>
			<li>
				<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
				?>=<?= $arResult["nStartPage"] ?>"><?= $NavRecordGroupPrint ?></a>
			</li>
		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>

	<?if ($arResult["NavPageNomer"] > 1):?>
		<li>
			<a
			   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			   ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"></i></a>
		</li>

	<?else:?>
		<li >
			<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=1"><?= GetMessage("PAGINATION_NEXT") ?></a>
		</li>

	<?endif?>

<?else:?>

	<?if ($arResult["NavPageNomer"] > 1):?>

		<?if($arResult["bSavePage"]):?>
		<li>
			<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=1"></a>
		</li>
		<?else:?>
		<li>
			<a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
			?>"></a>
		</li>
		<?endif?>

	<?else:?>
		<li>
			<a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
			?>"></a>
		</li>
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
		<li class="active">
			<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
		</li>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
		<li>
			<a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= $arResult["nStartPage"] ?></a>
		</li>
		<?else:?>
		<li>
			<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
		</li>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>

	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<li>
			<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			   ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"></a>
		</li>
	<?else:?>
			<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=<?= $arResult["NavPageCount"] ?>"></a>
		</li>
	<?endif?>

<?endif?>


<?if ($arResult["bShowAll"]):?>
	<?if ($arResult["NavShowAll"]):?>
		<li>
			<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>SHOWALL_<?= $arResult["NavNum"]
			?>=0"><?=GetMessage("nav_paged")?></a>
		</li>
	<?else:?>
		<li>
			<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>SHOWALL_<?= $arResult["NavNum"]
			?>=1"><?=GetMessage("nav_all")?></a>
		</li>
	<?endif?>

<?endif?>
	</ul>
</div>
