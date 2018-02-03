<?ob_start();?>
  <div class="greyline">
    <?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"front-banners-big",
			array(
				"IBLOCK_TYPE" => "aspro_scorp_content",
				"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_scorp_content"]["aspro_scorp_advtbig"][0],
				"NEWS_COUNT" => "30",
				"SORT_BY1" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_BY2" => "ID",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "NAME",
					1 => "PREVIEW_TEXT",
					2 => "PREVIEW_PICTURE",
					3 => "DETAIL_PICTURE",
					4 => ""
				),
				"PROPERTY_CODE" => array(
					0 => "BANNERTYPE",
					1 => "TEXTCOLOR",
					2 => "LINKIMG",
					3 => "BUTTON1TEXT",
					4 => "BUTTON1LINK",
					5 => "BUTTON1CLASS",
					6 => "BUTTON2TEXT",
					7 => "BUTTON2LINK",
					8 => "BUTTON2CLASS",
					9 => ""
				),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "3600000",
				"CACHE_FILTER" => "Y",
				"CACHE_GROUPS" => "N",
				"PREVIEW_TRUNCATE_LEN" => "",
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"SET_TITLE" => "N",
				"SET_STATUS_404" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"INCLUDE_SUBSECTIONS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Новости",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",
				"PAGER_SHOW_ALL" => "N",
				"AJAX_OPTION_ADDITIONAL" => ""
			),
			false
		);?>
      <?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"front-banners-small",
			array(
				"IBLOCK_TYPE" => "aspro_scorp_content",
				"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_scorp_content"]["aspro_scorp_advtsmall"][0],
				"NEWS_COUNT" => "4",
				"SORT_BY1" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_BY2" => "ID",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "NAME",
					1 => "",
				),
				"PROPERTY_CODE" => array(
					0 => "LINK",
					1 => "ICON",
					2 => "",
				),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "3600000",
				"CACHE_FILTER" => "Y",
				"CACHE_GROUPS" => "N",
				"PREVIEW_TRUNCATE_LEN" => "",
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"SET_TITLE" => "N",
				"SET_STATUS_404" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"INCLUDE_SUBSECTIONS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",
				"PAGER_SHOW_ALL" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"SET_BROWSER_TITLE" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_META_DESCRIPTION" => "N"
			),
			false
		);?>
  </div>
  <?if($isIndex):?>
    <div class="container">
      <div class="row text-center" style="background:#ececec">
        <div class="col-sm-3">
          <div class="item">
            <div class="image">
              <img src="/upload/box.png">
            </div>
            <div class="title">
              Собственное производство
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="item">
            <div class="image">
              <img src="/upload/marker.png">
            </div>
            <div class="title">
              Широкая сеть представительств
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="item">
            <div class="image">
              <img src="/upload/sercificate.png">
            </div>
            <div class="title">
              Весь товар сертифицирован
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="item">
            <div class="image">
              <img src="/upload/truck.png">
            </div>
            <div class="title">
              Оперативанся доставка и монтаж
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="grid">
          <figure class="effect-apollo" style="background-image: url(/upload/resize_cache/iblock/b03/600_400_2/b03209c88f8dce860fefc33c9f7b9b7c.jpg);">
            <figcaption>
              <h2>ШАТРЫ ДЛЯ ВЫСТАВОК И промо-акций</h2>
              <p>Проведение выставок и промо-акций в большом шатре.</p>
              <a href="/solutions/vystavki-i-promo-aktsii/ ">View more</a>
            </figcaption>
          </figure>
          <figure class="effect-apollo" style="background-image: url(/upload/iblock/c9b/c9b966050bb66035fe97bd52cdcf0425.jpg);">
            <figcaption>
              <h2>Шатры для мероприятий</h2>
              <p>Организация мероприятий в шатре «под ключ»</p>
              <a href="/solutions/meropriyatie-pod-klyuch/ ">View more</a>
            </figcaption>
          </figure>
          <figure class="effect-apollo" style="background-image: url(/upload/resize_cache/iblock/ca6/600_400_2/ca682db29d9473e20bd94e263adf82de.jpg);">
            <figcaption>
              <h2>Шатры для кафе и ресторанов</h2>
              <p>Летний ресторан в шатре</p>
              <a href="/solutions/shater-dlya-letnego-restorana/">View more</a>
            </figcaption>
          </figure>
          <figure class="effect-apollo" style="background-image: url(/upload/iblock/a30/a30fa2b2a49e1d8e66ccab225d1b0fd0.jpg);">
            <figcaption>
              <h2>ШАТРЫ СПОРТИВНОГО НАЗНАЧЕНИЯ</h2>
              <p>Строительство теннисных и кортов и футбольных манежей.</p>
              <a href="/solutions/sportivnye-obekty/">View more</a>
            </figcaption>
          </figure>
          <figure class="effect-apollo" style="background-image: url(/upload/iblock/ffe/ffec3d7408f4033c1938f517c38268e5.jpg);">
            <figcaption>
              <h2>ШАТРЫ ДЛЯ ЭКСПЛУАТАЦИИ ЗИМОЙ И КРУГОЛОГОДИЧНО</h2>
              <p>Круглогодичные сооружения оборудованы тепловым оборудованием и дополнительно остеклены. Даже при минусовой температуре внутри шатра тепло и комфортно.</p>
              <a href="/solutions/kruglogodichnye-sooruzheniya/">View more</a>
            </figcaption>
          </figure>
          <figure class="effect-apollo" style="background-image: url(/upload/iblock/527/5273e74ecba90e671ba72e4000424d31.jpg);">
            <figcaption>
              <h2>Эксклюзивные шатры</h2>
              <p>Шатры изготавливаемые по индивидуальному проекту</p>
              <a href="/tent-sale/eksklyuzivnye-tenty/">View more</a>
            </figcaption>
          </figure>
        </div>
      </div>
      <?endif;?>

        <?if($isIndex):?>
          <div class="item-views sections teasers front">
            <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."local/include/front-advantages-1.php",
					"EDIT_TEMPLATE" => "standard.php"
					)
);?>
          </div>
          <?endif;?>
            <?if($isIndex):?>
              <div class="item-views sections teasers front">
                <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."local/include/front-video-gallery.php",
					"EDIT_TEMPLATE" => "standard.php"
					)
);?>
              </div>
              <?endif;?>
                <?if($isIndex):?>
                  <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."local/include/about-and-news.php",
					"EDIT_TEMPLATE" => "standard.php"
					)
);?>
                    <?endif;?>
                      <?if($isIndex):?>
                        <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."local/include/catalog-and-portfolio.php",
					"EDIT_TEMPLATE" => "standard.php"
					)
);?>
                          <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."local/include/dop-options.php",
					"EDIT_TEMPLATE" => "standard.php"
					)
);?>
                            <?endif;?>
                              <?if($sTeasersIndexTemplate):?>
                                <div class="row">
                                  <div class="maxwidth-theme">
                                    <div class="col-md-12">
                                      <?if($sTeasersIndexTemplate == "front-teasers-pictures"):?>
                                        <?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"front-teasers-pictures",
							array(
								"IBLOCK_TYPE" => "aspro_scorp_content",
								"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_scorp_content"]["aspro_scorp_teasers"][0],
								"NEWS_COUNT" => "6",
								"SORT_BY1" => "SORT",
								"SORT_ORDER1" => "ASC",
								"SORT_BY2" => "ID",
								"SORT_ORDER2" => "ASC",
								"FILTER_NAME" => "",
								"FIELD_CODE" => array(
									0 => "NAME",
									1 => "PREVIEW_TEXT",
									2 => "PREVIEW_PICTURE",
									3 => "",
								),
								"PROPERTY_CODE" => array(
									0 => "LINK",
									1 => "ICON",
									2 => "",
								),
								"CHECK_DATES" => "Y",
								"DETAIL_URL" => "",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"AJAX_OPTION_HISTORY" => "N",
								"CACHE_TYPE" => "A",
								"CACHE_TIME" => "3600000",
								"CACHE_FILTER" => "Y",
								"CACHE_GROUPS" => "N",
								"PREVIEW_TRUNCATE_LEN" => "",
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"SET_TITLE" => "N",
								"SET_STATUS_404" => "N",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"ADD_SECTIONS_CHAIN" => "N",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"PARENT_SECTION" => "",
								"PARENT_SECTION_CODE" => "",
								"INCLUDE_SUBSECTIONS" => "Y",
								"PAGER_TEMPLATE" => ".default",
								"DISPLAY_TOP_PAGER" => "N",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"PAGER_TITLE" => "",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",
								"PAGER_SHOW_ALL" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"SHOW_DETAIL_LINK" => "Y",
								"SET_BROWSER_TITLE" => "N",
								"SET_META_KEYWORDS" => "N",
								"SET_META_DESCRIPTION" => "N"
							),
							false
						);?>
                                          <?else:?>
                                            <?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"front-teasers-icons",
							array(
								"IBLOCK_TYPE" => "aspro_scorp_content",
								"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_scorp_content"]["aspro_scorp_teasers"][0],
								"NEWS_COUNT" => "6",
								"SORT_BY1" => "SORT",
								"SORT_ORDER1" => "ASC",
								"SORT_BY2" => "ID",
								"SORT_ORDER2" => "ASC",
								"FILTER_NAME" => "",
								"FIELD_CODE" => array(
									0 => "NAME",
									1 => "PREVIEW_TEXT",
									2 => "PREVIEW_PICTURE",
									3 => "",
								),
								"PROPERTY_CODE" => array(
									0 => "ICON",
									1 => "LINK",
									2 => "",
								),
								"CHECK_DATES" => "Y",
								"DETAIL_URL" => "",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"AJAX_OPTION_HISTORY" => "N",
								"CACHE_TYPE" => "A",
								"CACHE_TIME" => "3600000",
								"CACHE_FILTER" => "Y",
								"CACHE_GROUPS" => "N",
								"PREVIEW_TRUNCATE_LEN" => "",
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"SET_TITLE" => "N",
								"SET_STATUS_404" => "N",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"ADD_SECTIONS_CHAIN" => "N",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"PARENT_SECTION" => "",
								"PARENT_SECTION_CODE" => "",
								"INCLUDE_SUBSECTIONS" => "Y",
								"PAGER_TEMPLATE" => ".default",
								"DISPLAY_TOP_PAGER" => "N",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"PAGER_TITLE" => "",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",
								"PAGER_SHOW_ALL" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"SHOW_DETAIL_LINK" => "Y",
								"SET_BROWSER_TITLE" => "N",
								"SET_META_KEYWORDS" => "N",
								"SET_META_DESCRIPTION" => "N",
							),
							false
						);?>
                                              <?endif;?>
                                    </div>
                                  </div>
                                </div>
                                <?endif;?>
                                  <?if($bCatalogIndex || $bCatalogFavoritesIndex):?>
                                    <?$GLOBALS['arCatalogItemsFilter'] = array('!PROPERTY_SHOW_ON_INDEX_PAGE' => false);?>
                                      <?global $arTheme;
		$bOrderViewBasket = (trim($arTheme['ORDER_VIEW']['VALUE']) === 'Y');?>
                                        <div class="row">
                                          <div class="maxwidth-theme">
                                            <div class="col-md-12">
                                              <?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"front-catalog",
						array(
							"IBLOCK_TYPE" => "aspro_scorp_catalog",
							"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_scorp_catalog"]["aspro_scorp_catalog"][0],
							"NEWS_COUNT" => "30",
							"SORT_BY1" => "SORT",
							"SORT_ORDER1" => "ASC",
							"SORT_BY2" => "ID",
							"SORT_ORDER2" => "ASC",
							"FILTER_NAME" => "arCatalogItemsFilter",
							"ORDER_VIEW" => $bOrderViewBasket,
							"FIELD_CODE" => array(
								0 => "NAME",
								1 => "PREVIEW_PICTURE",
								2 => "DETAIL_PICTURE",
								3 => "",
							),
							"PROPERTY_CODE" => array(
								0 => "SHOW_ON_INDEX_PAGE",
								1 => "STATUS",
								2 => "PRICE",
								3 => "PRICEOLD",
								4 => "ARTICLE",
								5 => "",
							),
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"AJAX_OPTION_HISTORY" => "N",
							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "3600000",
							"CACHE_FILTER" => "Y",
							"CACHE_GROUPS" => "N",
							"PREVIEW_TRUNCATE_LEN" => "",
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"SET_TITLE" => "N",
							"SET_STATUS_404" => "N",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"ADD_SECTIONS_CHAIN" => "N",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "",
							"INCLUDE_SUBSECTIONS" => "Y",
							"PAGER_TEMPLATE" => ".default",
							"DISPLAY_TOP_PAGER" => "N",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"PAGER_TITLE" => "",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",
							"PAGER_SHOW_ALL" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"SET_BROWSER_TITLE" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SHOW_DETAIL_LINK" => "Y",
						),
						false
					);?>
                                            </div>
                                          </div>
                                        </div>
                                        <?endif;?>
                                          <div class="row">
                                            <div class="maxwidth-theme">
                                              <div class="col-md-12">
                                                <div class="styled-block front">
                                                  <div class="row">
                                                    <div class="col-md-9 col-sm-9">
                                                      <?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/front-text1.php",
									"EDIT_TEMPLATE" => "standard.php"
								)
							);?>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                      <?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/front-text2.php",
									"EDIT_TEMPLATE" => "standard.php"
								)
							);?>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <?$indexProlog = ob_get_clean();?>

                                            <?ob_start();?>
                                              <div class="row">
                                                <div class="maxwidth-theme">
                                                  <div class="col-md-12">
                                                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "front-partners", array(
	"IBLOCK_TYPE" => "aspro_scorp_content",
		"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_scorp_content"]["aspro_scorp_partners"][0],
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "100000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"ITEM_IN_BLOCK" => "6",
		"SHOW_DETAIL_LINK" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>
                                                  </div>
                                                </div>
                                              </div>

                                              <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."local/include/our-partners.php",
					"EDIT_TEMPLATE" => "standard.php"
					)
);?>
