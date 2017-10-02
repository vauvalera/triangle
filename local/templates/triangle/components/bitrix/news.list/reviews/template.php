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
?>
<?if($arResult["ITEMS"]):?>
<div class="news-list">
	<div class="testimonial bottom">
			<h2>Отзывы</h2>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="media">
							<div class="pull-left">
									<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
									<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
											<img
												class="preview_picture"
												border="0"
												src="<?=$arItem["PREVIEW_PICTURE"]["src"]?>"
												width="<?=$arItem["PREVIEW_PICTURE"]["width"]?>"
												height="<?=$arItem["PREVIEW_PICTURE"]["height"]?>"
												style="float:left"
											/>
									<?endif?>
										<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
											<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
										<?endif?>
										<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
											<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
												<b><?echo $arItem["NAME"]?></b></a><br />
											<?else:?>
												<b><?echo $arItem["NAME"]?></b><br />
											<?endif;?>
										<?endif;?>
									</div>
									<div class="media-body">
												<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
													<blockquote><?=$arItem["PREVIEW_TEXT"];?></blockquote>
														<h3><a>- <?=$arItem["NAME"];?></a></h3>
												<?endif;?>
											<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
												<div style="clear:both"></div>
											<?endif?>
											<?foreach($arItem["FIELDS"] as $code=>$value):?>
											<small>
												<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
											</small><br />
											<?endforeach;?>
											<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
											<small>
													<?=$arProperty["NAME"];?>
												<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
													<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
												<?else:?>
												<?=$arProperty["DISPLAY_VALUE"];?>
												<?endif?>
											</small><br />
											<?endforeach;?>
									</div>
							</div>
				<?endforeach;?>
		</div>
	</div>
<?endif;?>
