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
<?=$arItem['SHOW_COUNTER']?>
<?=$arResult['SHOW_COUNTER']?>
<div class="news-list">
	    <section id="page-breadcrumb">
	        <div class="vertical-center sun">
	             <div class="container">
	                <div class="row">
	                    <div class="action">
	                        <div class="col-sm-12">
	                            <h1 class="title">Blog</h1>
	                            <p>Blog with right sidebar</p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	   </section>

	<section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
					<div class="col-md-9 col-sm-7">
								<div class="row">
									<?foreach($arResult["ITEMS"] as $arItem):?>
									<?
									$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
									$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
									?>
									<div class="col-sm-12 col-md-12">
										<div class="single-blog single-column">
											<div class="post-thumb">
												<?if(is_array($arItem["PREVIEW_PICTURE"])):?>
												<img
												src="<?=$arItem["PREVIEW_PICTURE"]["src"]?>"
												/>
												<?endif;?>
												<div class="post-content overflow">
													<h2 class="post-title bold"><?=$arItem["NAME"]?></h2>
													<h3 class="post-author">Posted by<a href="#"> <?=$arItem["PROPERTY_AUTHOR_NAME"]?></a></h3>
													<p><?=$arItem["DETAIL_TEXT"]?></p>
													<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="read-more">View More</a>
												</div>
											</div>
										</div>
									</div>
									<?endforeach;?>
								</div>
						</div>
					</div>
				</div>
			</section>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
