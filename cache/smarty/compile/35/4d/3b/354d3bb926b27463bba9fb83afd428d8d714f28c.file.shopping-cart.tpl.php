<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 12:58:13
         compiled from "/var/www/html/ramietechhotels/themes/hotel-reservation-theme/shopping-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12698287215dadab6557a066-03675549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '354d3bb926b27463bba9fb83afd428d8d714f28c' => 
    array (
      0 => '/var/www/html/ramietechhotels/themes/hotel-reservation-theme/shopping-cart.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12698287215dadab6557a066-03675549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'account_created' => 0,
    'empty' => 0,
    'PS_CATALOG_MODE' => 0,
    'lastProductAdded' => 0,
    'link' => 0,
    'total_discounts' => 0,
    'use_taxes' => 0,
    'show_taxes' => 0,
    'total_wrapping' => 0,
    'cart_htl_data' => 0,
    'data_v' => 0,
    'rm_v' => 0,
    'THEME_DIR' => 0,
    'feature' => 0,
    'display_tax_label' => 0,
    'priceDisplay' => 0,
    'show_option_allow_separate_package' => 0,
    'cart' => 0,
    'addresses_style' => 0,
    'advanced_payment_api' => 0,
    'delivery_option' => 0,
    'isVirtualCart' => 0,
    'delivery' => 0,
    'invoice' => 0,
    'opc' => 0,
    'formattedAddresses' => 0,
    'have_non_virtual_products' => 0,
    'delivery_state' => 0,
    'invoice_state' => 0,
    'k' => 0,
    'address' => 0,
    'pattern' => 0,
    'addressKey' => 0,
    'key' => 0,
    'key_str' => 0,
    'addedli' => 0,
    'HOOK_SHOPPING_CART' => 0,
    'HOOK_SHOPPING_CART_EXTRA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadab655edfe5_13910225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadab655edfe5_13910225')) {function content_5dadab655edfe5_13910225($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/ramietechhotels/tools/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/var/www/html/ramietechhotels/tools/smarty/plugins/modifier.regex_replace.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Your shopping cart'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>



<?php if (isset($_smarty_tpl->tpl_vars['account_created']->value)) {?>
	<p class="alert alert-success">
		<?php echo smartyTranslate(array('s'=>'Your account has been created.'),$_smarty_tpl);?>

	</p>
<?php }?>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('summary', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['empty']->value)) {?>
	<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.'),$_smarty_tpl);?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
	<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'This store has not accepted your new order.'),$_smarty_tpl);?>
</p>
<?php } else { ?>
	<p id="emptyCartWarning" class="alert alert-warning unvisible"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.'),$_smarty_tpl);?>
</p>
	<?php if (isset($_smarty_tpl->tpl_vars['lastProductAdded']->value)&&$_smarty_tpl->tpl_vars['lastProductAdded']->value) {?>
		<div class="cart_last_product">
			<div class="cart_last_product_header">
				<div class="left"><?php echo smartyTranslate(array('s'=>'Last product added'),$_smarty_tpl);?>
</div>
			</div>
			<a class="cart_last_product_img" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['link_rewrite'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['category'],null,null,$_smarty_tpl->tpl_vars['lastProductAdded']->value['id_shop']), ENT_QUOTES, 'UTF-8', true);?>
">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['lastProductAdded']->value['link_rewrite'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['id_image'],'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastProductAdded']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
			</a>
			<div class="cart_last_product_content">
				<p class="product-name">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['link_rewrite'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['category'],null,null,null,$_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastProductAdded']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

					</a>
				</p>
				<?php if (isset($_smarty_tpl->tpl_vars['lastProductAdded']->value['attributes'])&&$_smarty_tpl->tpl_vars['lastProductAdded']->value['attributes']) {?>
					<small>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['link_rewrite'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['category'],null,null,null,$_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastProductAdded']->value['attributes'], ENT_QUOTES, 'UTF-8', true);?>

						</a>
					</small>
				<?php }?>
			</div>
		</div>
	<?php }?>
	<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['total_discounts']->value!=0) {?><?php echo "1";?><?php } else { ?><?php echo "0";?><?php }?><?php $_tmp11=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['total_discounts_num'] = new Smarty_variable($_tmp11, null, 0);?>
	<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['show_taxes']->value) {?><?php echo "2";?><?php } else { ?><?php echo "0";?><?php }?><?php $_tmp12=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['use_show_taxes'] = new Smarty_variable($_tmp12, null, 0);?>
	<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['total_wrapping']->value!=0) {?><?php echo "1";?><?php } else { ?><?php echo "0";?><?php }?><?php $_tmp13=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['total_wrapping_taxes_num'] = new Smarty_variable($_tmp13, null, 0);?>
	
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBeforeShoppingCartBlock"),$_smarty_tpl);?>


	<div class="order-detail-content">
		<p class="room_info_text"><?php echo smartyTranslate(array('s'=>'rooms information'),$_smarty_tpl);?>
</p>
		<?php  $_smarty_tpl->tpl_vars['data_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_v']->_loop = false;
 $_smarty_tpl->tpl_vars['data_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_htl_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_v']->key => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->_loop = true;
 $_smarty_tpl->tpl_vars['data_k']->value = $_smarty_tpl->tpl_vars['data_v']->key;
?>
			<?php  $_smarty_tpl->tpl_vars['rm_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rm_v']->_loop = false;
 $_smarty_tpl->tpl_vars['rm_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data_v']->value['date_diff']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rm_v']->key => $_smarty_tpl->tpl_vars['rm_v']->value) {
$_smarty_tpl->tpl_vars['rm_v']->_loop = true;
 $_smarty_tpl->tpl_vars['rm_k']->value = $_smarty_tpl->tpl_vars['rm_v']->key;
?>
				<div class="row cart_product_line">
					<div class="col-sm-2 room-type-img-block">
						<p>
							<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['cover_img'];?>
" class="img-responsive" />
							</a>
						</p>
						<p class="room_remove_block">
							<a href="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['link'];?>
"><i class="icon-trash"></i> &nbsp;<?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
</a>
						</p>
					</div>
					<div class="col-sm-10">
						<div class="room-info-container">
							<div class="room-xs-img">
								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['cover_img'];?>
" class="img-responsive" />
								</a>
							</div>
							<div class="room-xs-info">
								<p class="product-name">
									<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
										<?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>

									</a>
									<a class="btn btn-default pull-right room-xs-remove" href="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['link'];?>
"><i class="icon-trash"></i></a>
								</p>
								<?php if (isset($_smarty_tpl->tpl_vars['data_v']->value['hotel_info']['location'])) {?>
									<p class="hotel-location">
										<i class="icon-map-marker"></i> &nbsp;<?php echo $_smarty_tpl->tpl_vars['data_v']->value['hotel_info']['location'];?>

									</p>
								<?php }?>
							</div>
						</div>
						<?php if (isset($_smarty_tpl->tpl_vars['data_v']->value['hotel_info']['room_features'])) {?>
							<div class="room-type-features">
							<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_v']->value['hotel_info']['room_features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
								<span class="room-type-feature">
									<img src="<?php echo $_smarty_tpl->tpl_vars['THEME_DIR']->value;?>
img/icon/form-ok-circle.svg" /> <?php echo $_smarty_tpl->tpl_vars['feature']->value['name'];?>

								</span>
							<?php } ?>
							</div>
						<?php }?>
						<div class="room_duration_block">
							<div class="col-sm-3 col-xs-6">
								<p class="room_duration_block_head"><?php echo smartyTranslate(array('s'=>'CHECK IN'),$_smarty_tpl);?>
</p>
								<p class="room_duration_block_value"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],"%d %b, %a");?>
</p>
							</div>
							<div class="col-sm-3 col-xs-6">
								<p class="room_duration_block_head"><?php echo smartyTranslate(array('s'=>'CHECK OUT'),$_smarty_tpl);?>
</p>
								<p class="room_duration_block_value"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],"%d %b, %a");?>
</p>
							</div>
							<div class="col-sm-2 col-xs-6">
								<p class="room_duration_block_head"><?php echo smartyTranslate(array('s'=>'ROOMS'),$_smarty_tpl);?>
</p>
								<p class="room_duration_block_value">
									<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];?>
<?php $_tmp14=ob_get_clean();?><?php if ($_tmp14<=9) {?>0<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];?>
<?php }?>
								</p>
							</div>
							<div class="col-sm-4 col-xs-6">
								<p class="room_duration_block_head"><?php echo smartyTranslate(array('s'=>'NO. OF GUESTS'),$_smarty_tpl);?>
</p>
								<p class="room_duration_block_value">
									<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data_v']->value['adult'];?>
<?php $_tmp15=ob_get_clean();?><?php if ($_tmp15<=9) {?>0<?php echo $_smarty_tpl->tpl_vars['data_v']->value['adult'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['data_v']->value['adult'];?>
<?php }?> <?php echo smartyTranslate(array('s'=>'Adults'),$_smarty_tpl);?>
, <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data_v']->value['children'];?>
<?php $_tmp16=ob_get_clean();?><?php if ($_tmp16<=9) {?>0<?php echo $_smarty_tpl->tpl_vars['data_v']->value['children'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['data_v']->value['children'];?>
<?php }?> <?php echo smartyTranslate(array('s'=>'Child'),$_smarty_tpl);?>

								</p>
							</div>
						</div>
						<div class="row room_price_detail_block">
							<div class="col-sm-7">
								<div class="row">
									<div class="col-sm-6">
										<div class="rooms_price_block">
											<p class="room_total_price">
												<span class="room_type_current_price">
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount'])),$_smarty_tpl);?>

												</span>
												<?php if (isset($_smarty_tpl->tpl_vars['data_v']->value['extra_demands'])&&$_smarty_tpl->tpl_vars['data_v']->value['extra_demands']) {?>
													<span class="plus-sign pull-right">
														+
													</span>
												<?php }?>
											</p>
											<p class="room_total_price_detial">
												<?php echo smartyTranslate(array('s'=>'Total rooms price'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?> <?php echo smartyTranslate(array('s'=>'(Excl.'),$_smarty_tpl);?>
 <?php } else { ?><?php echo smartyTranslate(array('s'=>'(Incl.)'),$_smarty_tpl);?>
<?php }?> <?php echo smartyTranslate(array('s'=>'all taxes.)'),$_smarty_tpl);?>
<?php }?>
											</p>
										</div>
									</div>
									<?php if (isset($_smarty_tpl->tpl_vars['data_v']->value['extra_demands'])&&$_smarty_tpl->tpl_vars['data_v']->value['extra_demands']) {?>
										<div class="col-sm-6">
											<div class="demand_price_block">
												<p class="demand_total_price">
													<span class="room_type_current_price">
														<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['demand_price']),$_smarty_tpl);?>

													</span>
												</p>
												<p class="room_total_price_detial">
													<a date_from="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rm_v']->value['data_form'], ENT_QUOTES, 'UTF-8', true);?>
" date_to="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rm_v']->value['data_to'], ENT_QUOTES, 'UTF-8', true);?>
" id_product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
" class="open_rooms_extra_demands" href="#rooms_type_extra_demands_form">
														<?php echo smartyTranslate(array('s'=>'Additional Facilities'),$_smarty_tpl);?>

													</a>
												</p>
											</div>
										</div>
									<?php }?>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="total_price_block">
									<p class="room_total_price">
										<span class="room_type_current_price">
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount']+$_smarty_tpl->tpl_vars['rm_v']->value['demand_price'])),$_smarty_tpl);?>

										</span>
									</p>
									<p class="room_total_price_detial">
										<?php echo smartyTranslate(array('s'=>'Total price for'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['rm_v']->value['num_days'];?>
 <?php echo smartyTranslate(array('s'=>'Night(s) stay'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?> <?php echo smartyTranslate(array('s'=>'(Excl.'),$_smarty_tpl);?>
 <?php } else { ?><?php echo smartyTranslate(array('s'=>'(Incl.'),$_smarty_tpl);?>
<?php }?> <?php echo smartyTranslate(array('s'=>'all taxes.)'),$_smarty_tpl);?>
<?php }?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
			<?php } ?>
		<?php } ?>
		<div class="row">
			<div class="col-sm-12 proceed_btn_block">
				<a class="btn btn-default button button-medium pull-right" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',null,null,array('proceed_to_customer_dtl'=>1));?>
" title="Proceed to checkout" rel="nofollow">
					<span>
						<?php echo smartyTranslate(array('s'=>'Proceed'),$_smarty_tpl);?>

					</span>
				</a>
			</div>
		</div>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['show_option_allow_separate_package']->value) {?>
	<p>
		<label for="allow_seperated_package" class="checkbox inline">
			<input type="checkbox" name="allow_seperated_package" id="allow_seperated_package" <?php if ($_smarty_tpl->tpl_vars['cart']->value->allow_seperated_package) {?>checked="checked"<?php }?> autocomplete="off"/>
			<?php echo smartyTranslate(array('s'=>'Send available products first'),$_smarty_tpl);?>

		</label>
	</p>
	<?php }?>

	
	
	<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']->value)) {?>
		<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['company'] = 'address_company';?>
		<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['vat_number'] = 'address_company';?>
		<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['firstname'] = 'address_name';?>
		<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['lastname'] = 'address_name';?>
		<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['address1'] = 'address_address1';?>
		<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['address2'] = 'address_address2';?>
		<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['city'] = 'address_city';?>
		<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['country'] = 'address_country';?>
		<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['phone'] = 'address_phone';?>
		<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['phone_mobile'] = 'address_phone_mobile';?>
		<?php $_smarty_tpl->createLocalArrayVariable('addresses_style', null, 0);
$_smarty_tpl->tpl_vars['addresses_style']->value['alias'] = 'address_title';?>
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['advanced_payment_api']->value&&((!empty($_smarty_tpl->tpl_vars['delivery_option']->value)&&(!isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)||!$_smarty_tpl->tpl_vars['isVirtualCart']->value))||$_smarty_tpl->tpl_vars['delivery']->value->id||$_smarty_tpl->tpl_vars['invoice']->value->id)&&!$_smarty_tpl->tpl_vars['opc']->value) {?>
		<div class="order_delivery clearfix row">
			<?php if (!isset($_smarty_tpl->tpl_vars['formattedAddresses']->value)||(count($_smarty_tpl->tpl_vars['formattedAddresses']->value['invoice'])==0&&count($_smarty_tpl->tpl_vars['formattedAddresses']->value['delivery'])==0)||(count($_smarty_tpl->tpl_vars['formattedAddresses']->value['invoice']['formated'])==0&&count($_smarty_tpl->tpl_vars['formattedAddresses']->value['delivery']['formated'])==0)) {?>
				<?php if ($_smarty_tpl->tpl_vars['delivery']->value->id) {?>
					<div class="col-xs-12 col-sm-6"<?php if (!$_smarty_tpl->tpl_vars['have_non_virtual_products']->value) {?> style="display: none;"<?php }?>>
						<ul id="delivery_address" class="address item box">
							<li><h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Delivery address'),$_smarty_tpl);?>
&nbsp;<span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['delivery']->value->alias;?>
)</span></h3></li>
							<?php if ($_smarty_tpl->tpl_vars['delivery']->value->company) {?><li class="address_company"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->company, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
							<li class="address_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<li class="address_address1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->address1, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<?php if ($_smarty_tpl->tpl_vars['delivery']->value->address2) {?><li class="address_address2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->address2, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
							<li class="address_city"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->postcode, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->city, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<li class="address_country"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->country, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['delivery_state']->value) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_state']->value, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></li>
						</ul>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['invoice']->value->id) {?>
					<div class="col-xs-12 col-sm-6">
						<ul id="invoice_address" class="address alternate_item box">
							<li><h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Invoice address'),$_smarty_tpl);?>
&nbsp;<span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['invoice']->value->alias;?>
)</span></h3></li>
							<?php if ($_smarty_tpl->tpl_vars['invoice']->value->company) {?><li class="address_company"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->company, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
							<li class="address_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<li class="address_address1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->address1, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<?php if ($_smarty_tpl->tpl_vars['invoice']->value->address2) {?><li class="address_address2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->address2, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
							<li class="address_city"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->postcode, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->city, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<li class="address_country"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->country, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['invoice_state']->value) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice_state']->value, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></li>
						</ul>
					</div>
				<?php }?>
			<?php } else { ?>
				<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['formattedAddresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['address']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['address']->iteration=0;
 $_smarty_tpl->tpl_vars['address']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['address']->key;
 $_smarty_tpl->tpl_vars['address']->iteration++;
 $_smarty_tpl->tpl_vars['address']->index++;
 $_smarty_tpl->tpl_vars['address']->first = $_smarty_tpl->tpl_vars['address']->index === 0;
 $_smarty_tpl->tpl_vars['address']->last = $_smarty_tpl->tpl_vars['address']->iteration === $_smarty_tpl->tpl_vars['address']->total;
?>
					<div class="col-xs-12 col-sm-6"<?php if ($_smarty_tpl->tpl_vars['k']->value=='delivery'&&!$_smarty_tpl->tpl_vars['have_non_virtual_products']->value) {?> style="display: none;"<?php }?>>
						<ul class="address <?php if ($_smarty_tpl->tpl_vars['address']->last) {?>last_item<?php } elseif ($_smarty_tpl->tpl_vars['address']->first) {?>first_item<?php }?> <?php if ($_smarty_tpl->tpl_vars['address']->index%2) {?>alternate_item<?php } else { ?>item<?php }?> box">
							<li>
								<h3 class="page-subheading">
									<?php if ($_smarty_tpl->tpl_vars['k']->value=='invoice') {?>
										<?php echo smartyTranslate(array('s'=>'Invoice address'),$_smarty_tpl);?>

									<?php } elseif ($_smarty_tpl->tpl_vars['k']->value=='delivery'&&$_smarty_tpl->tpl_vars['delivery']->value->id) {?>
										<?php echo smartyTranslate(array('s'=>'Delivery address'),$_smarty_tpl);?>

									<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['address']->value['object']['alias'])) {?>
										<span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['address']->value['object']['alias'];?>
)</span>
									<?php }?>
								</h3>
							</li>
							<?php  $_smarty_tpl->tpl_vars['pattern'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pattern']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address']->value['ordered']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->key => $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->_loop = true;
?>
								<?php $_smarty_tpl->tpl_vars['addressKey'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['pattern']->value), null, 0);?>
								<?php $_smarty_tpl->tpl_vars['addedli'] = new Smarty_variable(false, null, 0);?>
								<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addressKey']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['key']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['key']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->iteration++;
 $_smarty_tpl->tpl_vars['key']->last = $_smarty_tpl->tpl_vars['key']->iteration === $_smarty_tpl->tpl_vars['key']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['key']->last;
?>
								<?php $_smarty_tpl->tpl_vars['key_str'] = new Smarty_variable(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['key']->value,AddressFormat::_CLEANING_REGEX_,''), null, 0);?>
									<?php if (isset($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value])&&!empty($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value])) {?>
										<?php if ((!$_smarty_tpl->tpl_vars['addedli']->value)) {?>
											<?php $_smarty_tpl->tpl_vars['addedli'] = new Smarty_variable(true, null, 0);?>
											<li><span class="<?php if (isset($_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key_str']->value])) {?><?php echo $_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key_str']->value];?>
<?php }?>">
										<?php }?>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value], ENT_QUOTES, 'UTF-8', true);?>

									<?php }?>
									<?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']&&$_smarty_tpl->tpl_vars['addedli']->value)) {?>
										</span></li>
									<?php }?>
								<?php } ?>
							<?php } ?>
						</ul>
					</div>
				<?php } ?>
			<?php }?>
		</div>
	<?php }?>
	<div id="HOOK_SHOPPING_CART"><?php echo $_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART']->value;?>
</div>
	
	<div class="clear"></div>
	<div class="cart_navigation_extra">
		<div id="HOOK_SHOPPING_CART_EXTRA"><?php if (isset($_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART_EXTRA']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART_EXTRA']->value;?>
<?php }?></div>
	</div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('deliveryAddress'=>intval($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtProduct')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProduct'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'product','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProduct'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtProducts')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProducts'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'products','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProducts'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


<div style="display:none;" id="rooms_extra_demands">
	<div id="rooms_type_extra_demands">
		<div class="panel">
			<div class="rooms_extra_demands_head">
				<h3><?php echo smartyTranslate(array('s'=>'Additional Facilities'),$_smarty_tpl);?>
</h3>
				<p class="rooms_extra_demands_text"><?php echo smartyTranslate(array('s'=>'Add below additional facilities to the rooms for better hotel experience'),$_smarty_tpl);?>
</p>
			</div>
			<div id="room_type_demands_desc"></div>
		</div>
	</div>
</div><?php }} ?>
