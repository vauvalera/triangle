</div>
<footer id="footer">
			<div class="container">
					<div class="row">
							<div class="col-sm-12 text-center bottom-separator">
									<img src="<?=SITE_TEMPLATE_PATH?>/images/home/under.png" class="img-responsive inline" alt="">
							</div>
							<div class="col-md-4 col-sm-6">
									<div class="testimonial bottom">
											<h2>Testimonial</h2>
											<div class="media">
													<div class="pull-left">
															<a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/images/home/profile1.png" alt=""></a>
													</div>
													<div class="media-body">
															<blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
															<h3><a href="#">- Jhon Kalis</a></h3>
													</div>
											 </div>
											<div class="media">
													<div class="pull-left">
															<a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/images/home/profile2.png" alt=""></a>
													</div>
													<div class="media-body">
															<blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
															<h3><a href="">- Abraham Josef</a></h3>
													</div>
											</div>
									</div>
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
													"USE_CAPTCHA" => "Y",
													"OK_TEXT" => "Спасибо, ваше сообщение принято.",
													"EMAIL_TO" => "val@yandex.ru",
													"REQUIRED_FIELDS" => array(
														0 => "NAME",
														1 => "EMAIL",
													),
													"EVENT_MESSAGE_ID" => array(
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
<?
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/bootstrap.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/lightbox.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/wow.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/main.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/gmaps.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'http://maps.google.com/maps/api/js?sensor=true');
?>
</body>
</html>
