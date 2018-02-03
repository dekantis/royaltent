<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?php
    session_start();

    if( !CMain::IsHTTPS() && stripos($_SERVER['HTTP_REFERER'], 'https://'. $_SERVER['SERVER_NAME']) === false && (  empty($_SESSION['url']) ) )
    {
        $_SESSION['url'] =$_SERVER['SERVER_NAME']  . $_SERVER['REQUEST_URI'];
        LocalRedirect( 'https://' . $_SERVER['SERVER_NAME']  . $_SERVER['REQUEST_URI'] );

    } else {
        $_SESSION['url'] = '';
    }

?>
<!DOCTYPE html>
<html class="<?=($_SESSION['SESS_INCLUDE_AREAS'] ? 'bx_editmode ' : '')?><?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie7' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0' ) ? 'ie ie8' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie9' : ''?>">
	<head>
		<?global $APPLICATION;?>
		<?IncludeTemplateLangFile(__FILE__);?>
		<title><?$APPLICATION->ShowTitle()?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='<?=CMain::IsHTTPS() ? 'https' : 'http'?>://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
		<link href='<?=CMain::IsHTTPS() ? 'https' : 'http'?>://fonts.googleapis.com/css?family=Ubuntu:400,700italic,700,500italic,500,400italic,300,300italic&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,800&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/fonts/font-awesome/css/font-awesome.min.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/vendor/flexslider/flexslider.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jquery.fancybox.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/theme-elements.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jqModal.css');?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/theme-responsive.css');?>
		<?$APPLICATION->SetAdditionalCSS('/local/imageflow/imageflow.css');?>
		<?$APPLICATION->SetAdditionalCSS('/local/owlcarousel/owl.carousel.css');?>
		<?$APPLICATION->SetAdditionalCSS('/local/css/custom.css');?>
		<?$APPLICATION->SetAdditionalCSS('/local/css/k.css');?>
		<?$APPLICATION->ShowHead()?>
		<?CJSCore::Init(array('jquery', 'fx', 'popup'));?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.actual.min.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.fancybox.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/source/helpers/jquery.fancybox-media.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/blink.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/jquery.easing.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/jquery.appear.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/jquery.cookie.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/bootstrap.js');?>
		<?$APPLICATION->AddHeadScript('/local/imageflow/imageflow.js');?>
		<?$APPLICATION->AddHeadScript('/local/owlcarousel/owl.carousel.min.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/flexslider/jquery.flexslider-min.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/jquery.validate.min.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.uniform.min.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jqModal.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.inputmask.bundle.min.js', true)?>
		<?$APPLICATION->AddHeadString('<script>BX.message('.CUtil::PhpToJSObject( $MESS, false ).')</script>', true);?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/detectmobilebrowser.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/general.js');?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/custom.js');?>
	</head>
	<body>
		<?CAjax::Init();?>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<?if(!CModule::IncludeModule("aspro.scorp")):?>
			<?$APPLICATION->SetTitle(GetMessage("ERROR_INCLUDE_MODULE_SCORP_TITLE"));?>
			<div class="include_module_error">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/error.jpg" title=":-(">
				<p><?=GetMessage("ERROR_INCLUDE_MODULE_SCORP_TEXT")?></p>
			</div>
			<?die();?>
		<?endif;?>
		<?CScorp::SetJSOptions();?>
		<?global $arSite, $arTheme, $isMenu, $isIndex, $is404;?>
		<?$is404 = defined("ERROR_404") && ERROR_404 === "Y"?>
		<?$arSite = CSite::GetByID(SITE_ID)->Fetch();?>
		<?$isMenu = ($APPLICATION->GetProperty('MENU') !== "N" ? true : false);?>
		<?$arTheme = $APPLICATION->IncludeComponent("aspro:theme.scorp", "", array(), false);?>
		<?$isForm = CSite::inDir(SITE_DIR.'form/');?>
		<?$isContacts = CSite::inDir(SITE_DIR.'contacts/index.php');?>
		<?if($isIndex = CSite::inDir(SITE_DIR."index.php")):?>
			<?$sTeasersIndexTemplate = ($arTheme["TEASERS_INDEX"]["VALUE"] == 'PICTURES' ? 'front-teasers-pictures' : ($arTheme["TEASERS_INDEX"]["VALUE"] == 'ICONS' ? 'front-teasers-icons' : false));?>
			<?$bCatalogIndex = $arTheme["CATALOG_INDEX"]["VALUE"] == 'Y';?>
			<?$bCatalogFavoritesIndex = $arTheme["CATALOG_FAVORITES_INDEX"]["VALUE"] == 'Y';?>
		<?endif;?>
		<div class="body <?=($isIndex ? 'index' : '')?>">
			<div class="body_media"></div>

			 <header class="topmenu-<?=($arTheme["TOP_MENU"]["VALUE"])?><?=($arTheme["TOP_MENU_FIXED"]["VALUE"] == "Y" ? ' canfixed' : '')?>">
				<div class="logo_and_menu-row">
					<div class="logo-row row">
						<div class="maxwidth-theme">
							<div class="col-md-3 col-sm-4">
								<div class="logo<?=($arTheme["COLORED_LOGO"]["VALUE"] !== "Y" ? '' : ' colored')?>">
									<?$APPLICATION->IncludeFile(SITE_DIR."include/logo.php", array(), array(
											"MODE" => "php",
											"NAME" => "Logo"
										)
									);?>
								</div>
							</div>
							<div class="col-md-9 col-sm-8 col-xs-12">
								<div class="top-callback col-md-12">
									<div class="callback pull-right hidden-xs hidden-sm hidden-md hidden-lg" data-event="jqm" data-param-id="<?=CCache::$arIBlocks[SITE_ID]["aspro_scorp_form"]["aspro_scorp_callback"][0]?>" data-name="callback">
										<span href="javascript:;" class="btn btn-default white btn-xs"><?=GetMessage("S_CALLBACK")?></span>
									</div>



<div class="phone pull-right hidden-xs col-lg-4">
										<div class="phone-number">
											<div><?$APPLICATION->IncludeFile(SITE_DIR."include/site-phone_2.php", array(), array(
													"MODE" => "html",
													"NAME" => "Phone",
												)
											);?></div>
										</div>
										<!-- <div class="phone-desc pull-right"> -->
	<?/*$APPLICATION->IncludeFile(SITE_DIR."include/site-phone-desc.php", array(), array(
													"MODE" => "html",
													"NAME" => "Phone description",
												)
																	   );*/?>
										<!-- </div> -->
									</div>

									<!--<div class="phone pull-right hide-phone ">
										<div class="phone-number">
											<i class="fa fa-phone"></i>
<div><?$APPLICATION->IncludeFile(SITE_DIR."include/site-phone_1.php", array(), array(
													"MODE" => "html",
													"NAME" => "Phone",
												)
);?></div>
										</div>
									</div>-->

<div class="phone pull-right hidden-sm hidden-xs product_year col-lg-3" style="padding-top: 8px;">
    <div class="phone-number" style="width: 240px;">
        <div class="copy" style="margin-top: 0px; text-align: left; line-height: 0.99; color: #c4af84;">
            <img align="left" height="120" src="/local/images/product-of-year.png" width="57" style="width: 44px;margin-top: -11px;height: auto;padding-right:10px;">
            <span style="font-size: 10px;">Royal Tent победитель<br> премии «Товар года 2015»</span>
        </div>
    </div>
</div>
<div class="phone pull-right hidden-sm hidden-xs product_year col-lg-3" style="padding-top: 8px;">
    <div class="phone-number" style="width: 240px;">
        <div class="copy" style="margin-top: 0px; text-align: left; line-height: 0.99; color: #c4af84;">
            <img align="left" height="120" src="/local/images/nomer-odin.png" width="57" style="width: 70px;margin-top: -11px;height: auto;padding-right:10px;">
            <span style="font-size: 10px;">Royal Tent победитель<br> премии «Выбор года 2016»</span>
        </div>
    </div>
</div>

									<div class="email pull-right">
										<i class="fa fa-envelope"></i>
										<div><?$APPLICATION->IncludeFile(SITE_DIR."include/site-email.php", array(), array(
												"MODE" => "html",
												"NAME" => "E-mail",
											)
										);?></div>
									</div>
									<button class="btn btn-responsive-nav visible-xs" data-toggle="collapse" data-target=".nav-main-collapse">
										<i class="fa fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div><?// class=logo-row?>
					<div class="menu-row row">
						<div class="maxwidth-theme">
							<div class="col-md-12">
								<div class="nav-main-collapse collapse">
									<div class="menu-only">
										<nav class="mega-menu">
											<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
												"ROOT_MENU_TYPE" => "top",
												"MENU_CACHE_TYPE" => "A",
												"MENU_CACHE_TIME" => "3600000",
												"MENU_CACHE_USE_GROUPS" => "N",
												"MENU_CACHE_GET_VARS" => array(
												),
												"MAX_LEVEL" => "3",
												"CHILD_MENU_TYPE" => "left",
												"USE_EXT" => "Y",
												"DELAY" => "N",
												"ALLOW_MULTI_SELECT" => "N",
												"COUNT_ITEM" => "9"
												),
												false
											);?>
										</nav>
									</div>
								</div>
							</div><?// class=col-md-9 col-sm-8 col-xs-2 / class=col-md-12?>
						</div>
						<?$APPLICATION->IncludeComponent("bitrix:search.title", "corp", array(
							"NUM_CATEGORIES" => "2",
							"TOP_COUNT" => "3",
							"ORDER" => "date",
							"USE_LANGUAGE_GUESS" => "Y",
							"CHECK_DATES" => "Y",
							"SHOW_OTHERS" => "Y",
							"PAGE" => SITE_DIR."search/",
							"CATEGORY_OTHERS_TITLE" => GetMessage("S_OTHER"),
							"CATEGORY_0_TITLE" => GetMessage("S_CONTENT"),
							"CATEGORY_0" => array(
								0 => "iblock_aspro_scorp_content",
							),
							"CATEGORY_1_TITLE" => GetMessage("S_CATALOG"),
							"CATEGORY_1" => array(
								0 => "iblock_aspro_scorp_catalog",
							),
							"SHOW_INPUT" => "Y",
							"INPUT_ID" => "title-search-input",
							"CONTAINER_ID" => "title-search",
							"PRICE_CODE" => array(
							),
							"PRICE_VAT_INCLUDE" => "Y",
							"PREVIEW_TRUNCATE_LEN" => "",
							"SHOW_PREVIEW" => "Y",
							"PREVIEW_WIDTH" => "25",
							"PREVIEW_HEIGHT" => "25"
							),
							false
						);?>
					</div><?// class=logo-row row / class=menu-row row?>
				</div>
				<div class="line-row visible-xs"></div>
			</header>
			<div role="main" class="main">
				<?if($isIndex):?>
					<?@include(str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'].'/'.SITE_DIR.'/indexblocks.php'));?>
					<?=$indexProlog; // buffered from indexblocks.php?>
				<?endif;?>
				<?if(!$isIndex && !$is404 && !$isForm):?>
					<section class="page-top">
						<div class="row">
							<div class="maxwidth-theme">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<h1><?$APPLICATION->ShowTitle(false)?></h1>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "corp", array(
												"START_FROM" => "0",
												"PATH" => "",
												"SITE_ID" => SITE_ID
												),
												false
											);?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				<?endif; // if !$isIndex && !$is404 && !$isForm?>
				<div class="container">
					<?if(!$isIndex):?>
						<div class="row">
							<div class="maxwidth-theme">
								<?if(!$isMenu):?>
									<div class="col-md-12 col-sm-12 col-xs-12 content-md">
								<?elseif($isMenu && $arTheme["SIDE_MENU"]["VALUE"] == "RIGHT"):?>
									<div class="col-md-9 col-sm-9 col-xs-8 content-md">
								<?elseif($isMenu && $arTheme["SIDE_MENU"]["VALUE"] == "LEFT"):?>
									<div class="col-md-3 col-sm-3 col-xs-4 left-menu-md">
										<?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
											"ROOT_MENU_TYPE" => "left",
											"MENU_CACHE_TYPE" => "A",
											"MENU_CACHE_TIME" => "3600000",
											"MENU_CACHE_USE_GROUPS" => "N",
											"MENU_CACHE_GET_VARS" => array(
											),
											"MAX_LEVEL" => "4",
											"CHILD_MENU_TYPE" => "left",
											"USE_EXT" => "Y",
											"DELAY" => "N",
											"ALLOW_MULTI_SELECT" => "Y"
											),
											false
										);?>
										<div class="sidearea">
											<?$APPLICATION->ShowViewContent('under_sidebar_content');?>
											<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/under_sidebar.php"), false);?>
										</div>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-8 content-md">
								<?endif;?>
					<?endif;?>
					<?CScorp::checkRestartBuffer();?>#WORK_AREA#<?CScorp::checkRestartBuffer();?>					<?IncludeTemplateLangFile(__FILE__);?>
					<?if(!$isIndex):?>
								<?if(!$isMenu):?>
									</div><?// class=col-md-12 col-sm-12 col-xs-12 content-md?>
								<?elseif($isMenu && $arTheme["SIDE_MENU"]["VALUE"] == "LEFT"):?>
									</div><?// class=col-md-9 col-sm-9 col-xs-8 content-md?>
								<?elseif($isMenu && $arTheme["SIDE_MENU"]["VALUE"] == "RIGHT"):?>
									</div><?// class=col-md-9 col-sm-9 col-xs-8 content-md?>
									<div class="col-md-3 col-sm-3 col-xs-4 right-menu-md">
										<?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
											"ROOT_MENU_TYPE" => "left",
											"MENU_CACHE_TYPE" => "A",
											"MENU_CACHE_TIME" => "3600",
											"MENU_CACHE_USE_GROUPS" => "Y",
											"MENU_CACHE_GET_VARS" => array(
											),
											"MAX_LEVEL" => "4",
											"CHILD_MENU_TYPE" => "subleft",
											"USE_EXT" => "Y",
											"DELAY" => "N",
											"ALLOW_MULTI_SELECT" => "Y"
											),
											false
										);?>
										<div class="sidearea">
											<?$APPLICATION->ShowViewContent('under_sidebar_content');?>
											<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/under_sidebar.php"), false);?>
										</div>
									</div>
								<?endif;?>
						<?if(!$isContacts):?>
							</div><?// class="maxwidth-theme?>
						</div><?// class=row?>
						<?endif;?>
					<?endif;?>
				</div><?// class=container?>

				<?if($isIndex):?>
					<?=$indexEpilog; // buffered from indexblocks.php?>
				<?endif;?>
			</div><?// class=main?>
		</div><?// class=body?>
		<footer id="footer">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/footer/subscribe.php",
					"EDIT_TEMPLATE" => "standard.php"
				)
			);?>
			<div class="container">
				<div class="row">
					<div class="maxwidth-theme">
						<div class="col-md-3 hidden-sm hidden-xs">
							<div class="copy">
								<?$APPLICATION->IncludeFile(SITE_DIR."include/copy.php", Array(), Array(
										"MODE" => "php",
										"NAME" => "Copyright",
									)
								);?>
							</div>
							<div id="bx-composite-banner"></div>
						</div>
						<div class="col-md-9 col-sm-12">
							<div class="row">
								<div class="col-md-9 col-sm-9">
									<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
										"ROOT_MENU_TYPE" => "bottom",
										"MENU_CACHE_TYPE" => "A",
										"MENU_CACHE_TIME" => "3600000",
										"MENU_CACHE_USE_GROUPS" => "N",
										"MENU_CACHE_GET_VARS" => array(
										),
										"MAX_LEVEL" => "1",
										"CHILD_MENU_TYPE" => "",
										"USE_EXT" => "Y",
										"DELAY" => "N",
										"ALLOW_MULTI_SELECT" => "Y"
										),
										false
									);?>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="info">
										<div class="phone">
											<?$APPLICATION->IncludeFile(SITE_DIR."include/site-phone_2.php", array(), array(
													"MODE" => "html",
													"NAME" => "Phone",
												)
											);?>
										</div>
										<div class="email">
											<i class="fa fa-envelope"></i>
											<?$APPLICATION->IncludeFile(SITE_DIR."include/site-email.php", array(), array(
													"MODE" => "html",
													"NAME" => "E-mail",
												)
											);?>
										</div>
									</div>
									<div class="social">
										<?if(!IsModuleInstalled("subscribe")):?>
											<?$APPLICATION->IncludeComponent(
												"aspro:social.info.scorp",
												".default",
												array(
													"CACHE_TYPE" => "A",
													"CACHE_TIME" => "3600000",
													"CACHE_GROUPS" => "N",
													"COMPONENT_TEMPLATE" => ".default"
												),
												false
											);?>
										<?endif;?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3 hidden-md hidden-lg">
							<div class="copy">
								<?$APPLICATION->IncludeFile(SITE_DIR."include/copy.php", Array(), Array(
										"MODE" => "php",
										"NAME" => "Copyright",
									)
								);?>
							</div>
							<div id="bx-composite-banner"></div>
						</div>
					</div>
				</div>
			</div>
			<div id="content-wrapper_bottom" style="background: #082340;
    padding: 10px;">
			<div class="maxwidth-theme">
				<div class="row">
	 				<div class="col-md-4 col-sm-4">
						Royal Tent 2010 -2017 ©
					</div>
	 				<div class="col-md-4 col-sm-4">
						<i class="fa fa-phone" aria-hidden="true"></i>
						Тел: +375 29 384 74 01<br>
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						e-mail: info@royaltent.by
					</div>
	 				<div class="col-md-4 col-sm-4">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						220051, г. Минск, ул.Громова 14, пом.7
					</div>
				</div>
			</div>
			</div>
		</footer>
		<div class="bx_areas">
			<?$APPLICATION->IncludeFile(SITE_DIR."include/invis-counter.php", Array(), Array(
					"MODE" => "text",
					"NAME" => "Counters place for Yandex.Metrika, Google.Analytics",
				)
			);?>
		</div>
		<?CScorp::SetMeta();?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter20626123 = new Ya.Metrika({
                    id:20626123,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/20626123" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29249118-2', 'auto');
  ga('send', 'pageview');

</script>

<script charset="UTF-8" src="//cdn.sendpulse.com/28edd3380a1c17cf65b137fe96516659/js/push/4f6e52585979a87cce64f9a31519afbc_1.js" async></script>

<script async src="//call-tracking.by/scripts/calltracking.js?b3dd5eb9-e87d-4917-826b-789bd4c4d166"></script>
<meta name="yandex-verification" content="389222d3c03f3e35" />
	</body>
</html>
