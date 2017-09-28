<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>


<form id="main-contact-form" name="contact-form" method="post" action="<?=POST_FORM_ACTION_URI?>">
	<?=bitrix_sessid_post()?>
		<div class="form-group">
			<input id="input-6" type="text" class="form-control" name="user_name" value="" placeholder="Name"<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>>
		</div>
		<div class="form-group">
			<input id="input-9" type="email" class="form-control" name="user_email" value="" placeholder="Email Id"
						<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>>
		</div>
		<div class="form-group">
				<textarea class="form-control" rows="5" name="MESSAGE" id="input-10" placeholder="Your text here" <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>><?=$arResult["MESSAGE"]?></textarea>
		</div>
		<div class="form-group">
				<input type="submit" name="submit" class="btn btn-submit" value="Submit">
		</div>
</form>

</div>
