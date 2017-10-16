<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/bootstrap.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lightbox.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/wow.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/main.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/gmaps.js');
$APPLICATION->AddHeadScript('http://maps.google.com/maps/api/js?sensor=true');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/font-awesome.min.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/animate.min.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/lightbox.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/prettyPhoto.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/responsive.css");
	// $bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title><?$APPLICATION->ShowTitle();?></title>
	<?$APPLICATION->ShowHead();?>
    <!--[if lt IE 9]>>
		<script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/html5shiv.js');?>"></script>
		<script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/respond.min.js');?>"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=SITE_TEMPLATE_PATH?>/images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
<?$APPLICATION->ShowPanel();?>
<div class="headerstat">
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 overflow">
				<div class="social-icons pull-right">
					<?$APPLICATION->IncludeFile(
					SITE_DIR."/include/social.php",
					array(),
					array("MODE" => "html"
						)
					);?>
				</div>
			</div>
		</div>
	</div>
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<?if ($APPLICATION->GetCurPage(false) == SITE_DIR):?>
					<span class="logo">
					 	<img class = "background-color-<?$APPLICATION->ShowProperty("color")?>" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="logo">
					</span>
				<?else:?>
					<a href="/">
						<img class = "background-color-<?$APPLICATION->ShowProperty("color")?>" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="logo">
					</a>
				<?endif;?>
            </div>
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"menu",
				array(
				"COMPONENT_TEMPLATE" => ".default",
				"ROOT_MENU_TYPE" => "top",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"MENU_CACHE_GET_VARS" => array(
				),
				"MAX_LEVEL" => "2",
				"CHILD_MENU_TYPE" => "left",
				"USE_EXT" => "N",
				"DELAY" => "N",
				"ALLOW_MULTI_SELECT" => "N"
				),
				false
			);?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:search.form",
				"poisk",
				array(
					"PAGE" => "#SITE_DIR#search/index.php",
					"USE_SUGGEST" => "N",
					"COMPONENT_TEMPLATE" => "poisk"
				),
				false
			);?>
        </div>
    </div>
</header>
</div>
<div class="pusto"></div>
<div class="content">
