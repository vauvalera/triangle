<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

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

    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css")?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/font-awesome.min.css")?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/animate.min.css")?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/lightbox.css")?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/prettyPhoto.css")?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/responsive.css")?>

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
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 overflow">
				<div class="social-icons pull-right">
					<ul class="nav nav-pills">
						 <li><a href=""><i class="fa fa-facebook"></i></a></li>
						 <li><a href=""><i class="fa fa-twitter"></i></a></li>
						 <li><a href=""><i class="fa fa-google-plus"></i></a></li>
						 <li><a href=""><i class="fa fa-dribbble"></i></a></li>
						 <li><a href=""><i class="fa fa-linkedin"></i></a></li>
					</ul>
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
						<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="logo">
					</span>
				<?else:?>
					<a href="/">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="logo">
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
				"MAX_LEVEL" => "1",
				"CHILD_MENU_TYPE" => "left",
				"USE_EXT" => "N",
				"DELAY" => "N",
				"ALLOW_MULTI_SELECT" => "N"
				),
				false
			);?>
            <div class="search">
                <form role="form">
                    <i class="fa fa-search"></i>
                    <div class="field-toggle">
                        <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                    </div>
                </form>
			</div>
        </div>
    </div>
</header>
<div class="content">
