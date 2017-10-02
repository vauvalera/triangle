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
// pre($arResult);
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
			   </ul><!--/#portfolio-filter-->
			   		<div class="portfolio-items">
	<?foreach($arResult["ITEMS"] as $cell=>$arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
					  <div class="portfolio-wrapper">
						  <div class="portfolio-single">
							  <div class="portfolio-thumb">
								  	<?if(is_array($arItem["PREVIEW_PICTURE"])):?>
									<a class="live-item-img" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
										<img
											src="<?=$arItem["PREVIEW_PICTURE"]["src"]?>"
											height="<?=$arItem["PREVIEW_PICTURE"]["height"]?>"
										/>
									</a>
									<?endif;?>
							</div>
							<div class="portfolio-view">
								   <ul class="nav nav-pills">
									   <li><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><i class="fa fa-link"></i></a></li>
									   <li><a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
								   </ul>
							</div>
						</div>
					</div>
		</div>
	<?endforeach;?>

					</div>
			</div>
	</div>
</section>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<?=$arResult["NAV_STRING"]?>
<?endif;?>
<?endif;?>
