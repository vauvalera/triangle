<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Portfolio</h1>
                            <p>Be Creative</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
<div class="news-detail">
	<section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
				<div class="col-sm-4">
					<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
						<img class="img-responsive" border="0" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="285" height="405" alt="<?=$arResult["NAME"]?>"  title="<?=$arResult["NAME"]?>" />
					<?endif?>
				</div>
				<div class="col-sm-4">
					<div class="project-name overflow">
						<ul class="nav navbar-nav navbar-default">
							<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
								<li><a href="#"><i class="fa fa-clock-o"></i><?=$arResult["DISPLAY_ACTIVE_FROM"]?></a></li>
							<?endif;?>
						</ul>
						<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
							<h3  class="bold"><?=$arResult["NAME"]?></h3>
						<?endif;?>
					</div>
					<div class="news-detail">
					<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
						<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
					<?endif;?>
					<?if($arResult["NAV_RESULT"]):?>
						<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
						<?echo $arResult["NAV_TEXT"];?>
						<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
				 	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
						<?echo $arResult["DETAIL_TEXT"];?>
				 	<?else:?>
						<?echo $arResult["PREVIEW_TEXT"];?>
					<?endif?>
					<div style="clear:both"></div>
					<br />
					<?foreach($arResult["FIELDS"] as $code=>$value):?>
							<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
							<br />
					<?endforeach;?>
					<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

						<?=$arProperty["NAME"]?>:&nbsp;
						<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
							<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
						<?else:?>
							<?=$arProperty["DISPLAY_VALUE"];?>
						<?endif?>
						<br />
					<?endforeach;?>
				</div>
			</div>
		</div>
   </section>
</div>
