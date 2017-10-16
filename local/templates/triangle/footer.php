</div>
<footer id="footer">
			<div class="container">
					<div class="row">
							<div class="col-sm-12 text-center bottom-separator">
									<img src="<?=SITE_TEMPLATE_PATH?>/images/home/under.png" class="img-responsive inline" alt="">
							</div>
							<div class="col-md-4 col-sm-6">
								<?$APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"reviews",
								array(
								"COMPONENT_TEMPLATE" => "reviews",
								"IBLOCK_TYPE" => "reviews",
								"IBLOCK_ID" => "5",
								"NEWS_COUNT" => "2",
								"SORT_BY1" => "ID",
								"SORT_ORDER1" => "DESC",
								"SORT_BY2" => "SORT",
								"SORT_ORDER2" => "ASC",
								"FILTER_NAME" => "",
								"FIELD_CODE" => array(
								0 => "",
								1 => "",
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
								"AJAX_OPTION_ADDITIONAL" => "",
								"CACHE_TYPE" => "A",
								"CACHE_TIME" => "36000000",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "Y",
								"PREVIEW_TRUNCATE_LEN" => "",
								"ACTIVE_DATE_FORMAT" => "j F Y",
								"SET_TITLE" => "Y",
								"SET_BROWSER_TITLE" => "Y",
								"SET_META_KEYWORDS" => "Y",
								"SET_META_DESCRIPTION" => "Y",
								"SET_LAST_MODIFIED" => "N",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
								"ADD_SECTIONS_CHAIN" => "Y",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"PARENT_SECTION" => "",
								"PARENT_SECTION_CODE" => "",
								"INCLUDE_SUBSECTIONS" => "Y",
								"STRICT_SECTION_CHECK" => "N",
								"DISPLAY_DATE" => "N",
								"DISPLAY_NAME" => "N",
								"DISPLAY_PICTURE" => "Y",
								"DISPLAY_PREVIEW_TEXT" => "Y",
								"PAGER_TEMPLATE" => ".default",
								"DISPLAY_TOP_PAGER" => "N",
								"DISPLAY_BOTTOM_PAGER" => "Y",
								"PAGER_TITLE" => "Новости",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"PAGER_BASE_LINK_ENABLE" => "N",
								"SET_STATUS_404" => "Y",
								"SHOW_404" => "Y",
								"MESSAGE_404" => "",
								"FILE_404" => ""
								),
								false
								);?>

							</div>
							<div class="col-md-3 col-sm-6">
									<div class="contact-info bottom">
											<h2>Contacts</h2>
											<address>
												<?$APPLICATION->IncludeFile(
												SITE_DIR."/include/adress1.php",
												array(),
												array("MODE" => "html"
														)
											);?>
											</address>
											<h2>Address</h2>
											<address>
												<?$APPLICATION->IncludeFile(
													SITE_DIR."/include/adress2.php",
													array(),
													array("MODE" => "text"
												)
											);?>
											</address>
									</div>
							</div>
							<div class="col-md-4 col-sm-12">
									<div class="contact-form bottom">
											<h2>Send a message</h2>
											<?$APPLICATION->IncludeComponent(
												"bitrix:main.feedback",
												"def",
												array(
													"COMPONENT_TEMPLATE" => ".default",
													"OK_TEXT" => "Спасибо, ваше сообщение принято.",
													"EMAIL_TO" => "vauvalera@gmail.com",
													"REQUIRED_FIELDS" => array(
														"NAME",
														"EMAIL",
														"MESSAGE"

													),
													"EVENT_MESSAGE_ID" => array(
														0 => "7",
													)
												),
												false
											);?>
									</div>
							</div>
							<div class="col-sm-12">
									<div class="copyright-text text-center">
											<p>&copy; Your Company 2016. All Rights Reserved.</p>
											<p>Crafted by <a target="_blank" href="http://designscrazed.org/">Allie</a></p>
									</div>
							</div>
					</div>
			</div>
	</footer>

</body>
</html>
