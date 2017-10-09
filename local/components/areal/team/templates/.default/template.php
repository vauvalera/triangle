<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
$this->setFrameMode(true);
 //pre($arResult["ITEMS"]);
 $APPLICATION->AddHeadScript('http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
 $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/modalWindow.css');
?>
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
                               <?foreach($arResult["ITEMS"] as $arItem):?>
                               <li><a><?=$arItem["NAME"]?><span class="pull-right">(<?=count($arItem["EMPLOYEES"])?>)</span></a></li>
                               <?endforeach;?>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="col-md-9 col-sm-8">
                    <div class="row">
                        <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?foreach($arItem["EMPLOYEES"] as $emp):?>
                        <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded logos">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img
                                         src="<?=$emp["PREVIEW_PICTURE"]["src"]?>"
                                         height="261"
                                         width="200"
                                          alt="">
                                    </div>
                                     <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                            <li>
                                                <a href="#openModal<?=$emp["NAME"]?>"><i class="fa fa-link"></i></a>
                                            </li>
                                         </ul>

                                     </div>
                                </div>
                                <div class="portfolio-info ">
                                    <h2><?=$emp["NAME"]?></h2>
                                </div>
                            </div>
                        </div>
                        <div id="openModal<?=$emp["NAME"]?>" class="modalDialog">
                            <div>
                                <a href="#close" title="Закрыть" class="close">X</a>
                                <h2>Биография сотрудника</h2>
                                <p><?=$emp["PREVIEW_TEXT"]?></p>
                            </div>
                        </div>
                        <?endforeach;?>
                        <?endforeach;?>

                    </div>
                </div>
            </div>
        </div>
   </section>

   <?endif;?>
