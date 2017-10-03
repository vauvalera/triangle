<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
$i = 0;
$this->setFrameMode(true);
?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
   <?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?if($arResult["ITEMS"]):?>
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
   <section id="projects" class="padding-top">
       <div class="container">
           <div class="row">
               <div class="col-md-3 col-sm-4">
                   <div class="sidebar portfolio-sidebar">
                       <div class="sidebar-item categories">
                           <h3>Отделы</h3>
                           <ul class="nav navbar-stacked">
                               <?foreach($arResult["ITEMS"] as $cell=>$arItem):?>
                               <li><a href="#"><?=$arItem["NAME"]?><span class="pull-right">(<?=$arItem["ELEMENT_CNT"]?>)</span></a></li>
                               <?endforeach;?>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="col-md-9 col-sm-8">
                    <div class="row">
                        <?foreach($arResult["ITEMS"] as $cell=>$arItem):?>
                        <?for($i=0;$i<count($arResult["ITEMS"]);$i++):?>
                        <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded logos">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img
                                         src="<?=$arItem[$i]["PREVIEW_PICTURE"]["src"]?>"
                                         height="261"
                                         width="200"
                                          alt="">
                                    </div>
                                    <div class="portfolio-view">
                                        <ul class="nav nav-pills">
                                            <li><a href="<?=$arItem[$i]["PREVIEW_PICTURE"]["src"]?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="portfolio-info ">
                                    <h2><?=$arItem[$i]["NAME"]?></h2>
                                </div>
                            </div>
                        </div>
                        <?endfor;?>
                        <?endforeach;?>

           </div>
       </div>
   </section>
   <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
   <?=$arResult["NAV_STRING"]?>
   <?endif;?>
   <?endif;?>
