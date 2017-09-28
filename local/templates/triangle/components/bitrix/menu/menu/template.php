<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="collapse navbar-collapse">
    <div class="nav navbar-nav navbar-right">

	            <ul class="nav navbar-nav navbar-right">
<?foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>
<li class="<?=$arItem['SELECTED'] ? "active" : "dropdown"?>" >
    <?if($arItem["LINK"] == "#"):?>
         <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?><i class="fa fa-angle-down"></i></a>
            <?if ($arItem["IS_"]):?>
            <ul role="menu" class="sub-menu">
                <li><a class="active" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
            </ul>
            <?endif;?>
    <?else:?>
    <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
    <?endif;?>


<?endforeach?>
				</ul>
			</div>
</div>
<?endif?>
