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
	<section id="page-breadcrumb">
          <div class="vertical-center sun">
               <div class="container">
                  <div class="row">
                      <div class="action">
                          <div class="col-sm-12">
                              <h1 class="title">Отзывы</h1>
                              <p>Быть лучше</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
     </section>
<section id="portfolio">
	<div class="container">
		<div class="row">
			<ul class="portfolio-filter text-center">
				<li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
				<li><a class="btn btn-default" href="#" data-filter=".Отзыв1">Отзыв1</a></li>
				<li><a class="btn btn-default" href="#" data-filter=".design">Design</a></li>
				<li><a class="btn btn-default" href="#" data-filter=".folio">Folio</a></li>
				<li><a class="btn btn-default" href="#" data-filter=".logos">Logos</a></li>
				<li><a class="btn btn-default" href="#" data-filter=".mobile">Mobile</a></li>
				<li><a class="btn btn-default" href="#" data-filter=".mockup">Mockup</a></li>
			</ul><!--/#portfolio-filter-->
				<div class="portfolio-items">
					<?if($arParams["DISPLAY_TOP_PAGER"]):?>
						<?=$arResult["NAV_STRING"]?><br />
					<?endif;?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
						<div class="portfolio-wrapper">
							<div class="portfolio-single">
								<div class="portfolio-thumb">
									<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
									<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
										<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
										<a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"><img
											class="preview_picture"
											border="0"
											src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
											width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
											height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
											alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
											title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
											style="float:left"
											/></a>
										<?else:?>
											<img
											class="preview_picture"
											border="0"
											src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
											width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
											height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
											alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
											title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
											style="float:left"
											/>
										<?endif;?>
									<?endif?>
										<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
											<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
										<?endif?>
										<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
											<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
												<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
											<?else:?>
												<b><?echo $arItem["NAME"]?></b><br />
											<?endif;?>
										<?endif;?>
											<div class="portfolio-info ">
												<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
													<?echo $arItem["PREVIEW_TEXT"];?>
												<?endif;?>
											</div>
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
												<?=$arProperty["NAME"]?>:&nbsp;
												<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
													<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
												<?else:?>
													<?=$arProperty["DISPLAY_VALUE"];?>
												<?endif?>
											</small><br />
											<?endforeach;?>
							</div>
						</div>
					</div>
				</div>
				<?endforeach;?>
		</div>
	</div>
</div>
</section>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
<?endif;?>
