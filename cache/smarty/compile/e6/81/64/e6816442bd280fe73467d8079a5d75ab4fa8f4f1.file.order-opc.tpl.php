<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 12:58:14
         compiled from "/var/www/html/ramietechhotels/themes/hotel-reservation-theme/order-opc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17848996445dadab66624631-72184704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6816442bd280fe73467d8079a5d75ab4fa8f4f1' => 
    array (
      0 => '/var/www/html/ramietechhotels/themes/hotel-reservation-theme/order-opc.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17848996445dadab66624631-72184704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opc' => 0,
    'PS_CATALOG_MODE' => 0,
    'productNumber' => 0,
    'cart_htl_data' => 0,
    'cartChanged' => 0,
    'checkout_process_steps' => 0,
    'step' => 0,
    'is_logged' => 0,
    'isGuest' => 0,
    'delivery' => 0,
    'link' => 0,
    'guestInformations' => 0,
    'addressLayout' => 0,
    'pattern' => 0,
    'addressKey' => 0,
    'key' => 0,
    'display_tax_label' => 0,
    'total_products' => 0,
    'totalDemandsPrice' => 0,
    'use_taxes' => 0,
    'show_taxes' => 0,
    'total_tax' => 0,
    'priceDisplay' => 0,
    'total_price_without_tax' => 0,
    'total_wrapping' => 0,
    'total_wrapping_tax_exc' => 0,
    'customer_adv_dtl' => 0,
    'adv_amount' => 0,
    'total_discounts' => 0,
    'total_discounts_tax_exc' => 0,
    'total_discounts_negative' => 0,
    'total_price' => 0,
    'voucherAllowed' => 0,
    'discounts' => 0,
    'discount' => 0,
    'THEME_DIR' => 0,
    'discount_name' => 0,
    'displayVouchers' => 0,
    'voucher' => 0,
    'img_dir' => 0,
    'back_order_page' => 0,
    'PS_GUEST_CHECKOUT_ENABLED' => 0,
    'conditions' => 0,
    'vat_management' => 0,
    'errorCarrier' => 0,
    'errorTOS' => 0,
    'checked' => 0,
    'isVirtualCart' => 0,
    'isPaymentStep' => 0,
    'back' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadab666a4ca8_57279747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadab666a4ca8_57279747')) {function content_5dadab666a4ca8_57279747($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/ramietechhotels/tools/smarty/plugins/modifier.replace.php';
?>

<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
	<?php $_smarty_tpl->tpl_vars["back_order_page"] = new Smarty_variable("order-opc.php", null, 0);?>
	<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars["back_order_page"] = new Smarty_variable("order.php", null, 0);?>
<?php }?>

<section id="wrapper">
	<div class="container">
		<section id="content">
			<div class="row">
				<?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Your shopping cart'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<h2 id="cart_title"><?php echo smartyTranslate(array('s'=>'Your shopping cart'),$_smarty_tpl);?>
</h2>
					<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Your new order was not accepted.'),$_smarty_tpl);?>
</p>
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['productNumber']->value&&isset($_smarty_tpl->tpl_vars['cart_htl_data']->value)) {?>

						<div class="col-md-8">
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							
							<?php if (isset($_smarty_tpl->tpl_vars['cartChanged']->value)&&$_smarty_tpl->tpl_vars['cartChanged']->value) {?>
								<p class="alert alert-danger"><?php echo smartyTranslate(array('s'=>'Your Booking Cart has been changed automatically as some rooms in your booking cart has been booked by another customer.'),$_smarty_tpl);?>
</p>
							<?php }?>

							
							<div class="accordion" id="oprder-opc-accordion">
								<?php if (isset($_smarty_tpl->tpl_vars['checkout_process_steps']->value)&&$_smarty_tpl->tpl_vars['checkout_process_steps']->value) {?>
									<?php  $_smarty_tpl->tpl_vars['step'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['step']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['checkout_process_steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['step']->key => $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['step']->value->step_key=='checkout_rooms_summary') {?>
											<div class="card">
												<div class="card-header" id="shopping-cart-summary-head">
													<h5 class="accordion-header" data-toggle="collapse" data-target="#collapse-shopping-cart" aria-expanded="true" aria-controls="collapse-shopping-cart">
														<span><?php echo smartyTranslate(array('s'=>'Rooms & Price Summary'),$_smarty_tpl);?>
</span>
														<i class="icon-angle-left pull-right accordion-left-arrow <?php if ($_smarty_tpl->tpl_vars['step']->value->step_is_current) {?>hidden<?php }?>"></i>
													</h5>
												</div>
												<?php if ($_smarty_tpl->tpl_vars['step']->value->step_is_reachable) {?>
													<div id="collapse-shopping-cart" class="opc-collapse <?php if (!$_smarty_tpl->tpl_vars['step']->value->step_is_current) {?>collapse<?php }?>" aria-labelledby="shopping-cart-head" data-parent="#oprder-opc-accordion">
														<div class="card-body">
															
															<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

														</div>
													</div>
												<?php }?>
											</div>
										
										<?php } elseif ($_smarty_tpl->tpl_vars['step']->value->step_key=='checkout_customer') {?>
											<div class="card" id="guest-info-block">
												<div class="card-header" id="guest-info-head">
													<h5 class="accordion-header" data-toggle="collapse" data-target="#collapse-guest-info" aria-expanded="true" aria-controls="collapse-guest-info">
														<span><?php echo smartyTranslate(array('s'=>'Guest Information'),$_smarty_tpl);?>
</span>
														<i class="icon-angle-left pull-right accordion-left-arrow <?php if ($_smarty_tpl->tpl_vars['step']->value->step_is_current) {?>hidden<?php }?>"></i>
														<span class="step-edit pull-right <?php if (!$_smarty_tpl->tpl_vars['step']->value->step_is_current) {?>hidden<?php }?>">
															<?php if ($_smarty_tpl->tpl_vars['is_logged']->value||$_smarty_tpl->tpl_vars['isGuest']->value) {?>
																<?php if (isset($_smarty_tpl->tpl_vars['delivery']->value->id)&&$_smarty_tpl->tpl_vars['delivery']->value->id) {?>
																	<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('address',null,null,array('id_address'=>$_smarty_tpl->tpl_vars['delivery']->value->id));?>
" title="<?php echo smartyTranslate(array('s'=>'Edit customer address'),$_smarty_tpl);?>
" rel="nofollow">
																		<i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'edit'),$_smarty_tpl);?>

																	</a>
																<?php } else { ?>
																	<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses');?>
" title="<?php echo smartyTranslate(array('s'=>'Edit customer address'),$_smarty_tpl);?>
" rel="nofollow">
																		<i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'edit'),$_smarty_tpl);?>

																	</a>
																<?php }?>
															<?php }?>
														</span>
													</h5>
												</div>
												<?php if ($_smarty_tpl->tpl_vars['step']->value->step_is_reachable) {?>
													<div id="collapse-guest-info" class="opc-collapse <?php if (!$_smarty_tpl->tpl_vars['step']->value->step_is_current) {?>collapse<?php }?>" aria-labelledby="guest-info-head" data-parent="#oprder-opc-accordion">
														<div class="card-body">
															<?php if ($_smarty_tpl->tpl_vars['is_logged']->value||$_smarty_tpl->tpl_vars['isGuest']->value) {?>
																<div class="row margin-btm-10">
																	<div class="col-sm-3 col-xs-5 info-head"><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
</div>
																	<div class="col-sm-9 col-xs-7 info-value"><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['email'];?>
</div>
																</div>
																<div class="row margin-btm-10">
																	<div class="col-sm-3 col-xs-5 info-head"><?php echo smartyTranslate(array('s'=>'Address Details'),$_smarty_tpl);?>
</div>
																	<div class="col-sm-9 col-xs-7 info-value">
																		<ul>
																			<?php  $_smarty_tpl->tpl_vars['pattern'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pattern']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addressLayout']->value['ordered']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->key => $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->_loop = true;
?>
																				<?php $_smarty_tpl->tpl_vars['addressKey'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['pattern']->value), null, 0);?>
																				<li>
																					<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addressKey']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
																						<?php if (isset($_smarty_tpl->tpl_vars['addressLayout']->value['formated'][smarty_modifier_replace($_smarty_tpl->tpl_vars['key']->value,',','')])) {?>
																							<span>
																								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addressLayout']->value['formated'][smarty_modifier_replace($_smarty_tpl->tpl_vars['key']->value,',','')], ENT_QUOTES, 'UTF-8', true);?>

																							</span>
																						<?php }?>
																					<?php } ?>
																				</li>
																			<?php } ?>
																		</ul>
																	</div>
																</div>
																<hr>
																<div class="row">
																	<div class="col-sm-12 proceed_btn_block">
																		<a class="btn btn-default button button-medium pull-right" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',null,null,array('proceed_to_payment'=>1));?>
" title="Proceed to Payment" rel="nofollow">
																			<span>
																				<?php echo smartyTranslate(array('s'=>'Proceed'),$_smarty_tpl);?>

																			</span>
																		</a>
																	</div>
																</div>
															<?php } else { ?>
																<!-- Create account / Guest account / Login block -->
																<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-opc-new-account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

															<?php }?>
														</div>
													</div>
												<?php }?>
											</div>
										<?php } elseif ($_smarty_tpl->tpl_vars['step']->value->step_key=='checkout_payment') {?>
											
											<div class="card">
												<div class="card-header" id="order-payment-head">
													<h5 class="accordion-header" data-toggle="collapse" data-target="#collapse-order-payment" aria-expanded="true" aria-controls="collapse-order-payment">
														<span><?php echo smartyTranslate(array('s'=>'Payment Information'),$_smarty_tpl);?>
</span>
														<i class="icon-angle-left pull-right accordion-left-arrow <?php if ($_smarty_tpl->tpl_vars['step']->value->step_is_current) {?>hidden<?php }?>"></i>
													</h5>
												</div>
												<?php if ($_smarty_tpl->tpl_vars['step']->value->step_is_reachable) {?>
													<div id="collapse-order-payment" class="opc-collapse <?php if (!$_smarty_tpl->tpl_vars['step']->value->step_is_current) {?>collapse<?php }?>" aria-labelledby="order-payment-head" data-parent="#oprder-opc-accordion">
														<div class="card-body">
															<!-- Payment -->
															<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

															<!-- END Payment -->
														</div>
													</div>
												<?php }?>
											</div>
										<?php }?>
									<?php } ?>
								<?php }?>
							</div>
						</div>
						<div class="col-md-4">
							
							<div class="col-sm-12 card cart_total_detail_block">
								<p>
									<span><?php echo smartyTranslate(array('s'=>'Total Rooms Cost'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>' (tax excl.)'),$_smarty_tpl);?>
<?php }?></span>
									<span class="cart_total_values"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl);?>
</span>
								</p>
								<?php if (isset($_smarty_tpl->tpl_vars['totalDemandsPrice']->value)&&$_smarty_tpl->tpl_vars['totalDemandsPrice']->value) {?>
									<p>
										<span><?php echo smartyTranslate(array('s'=>'Total Additional Facilities Cost'),$_smarty_tpl);?>
</span>
										<span class="cart_total_values"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['totalDemandsPrice']->value),$_smarty_tpl);?>
</span>
									</p>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['show_taxes']->value&&$_smarty_tpl->tpl_vars['total_tax']->value!=0) {?>
									<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value!=0) {?>
										<p class="cart_total_price">
											<span><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total (tax excl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
<?php }?></span>
											<span class="cart_total_values"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl);?>
</span>
										</p>
									<?php }?>
									<p class="cart_total_tax">
										<span><?php echo smartyTranslate(array('s'=>'Tax'),$_smarty_tpl);?>
</span>
										<span class="cart_total_values"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_tax']->value),$_smarty_tpl);?>
</span>
									</p>
								<?php }?>
								<p <?php if ($_smarty_tpl->tpl_vars['total_wrapping']->value==0) {?> class="unvisible"<?php }?>>
									<span>
										<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
											<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?><?php echo smartyTranslate(array('s'=>'Total gift wrapping (tax incl.)'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Total gift-wrapping cost'),$_smarty_tpl);?>
<?php }?>
										<?php } else { ?>
											<?php echo smartyTranslate(array('s'=>'Total gift-wrapping cost'),$_smarty_tpl);?>

										<?php }?>
									</span>
									<span class="cart_total_values">
										<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
											<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl);?>

											<?php } else { ?>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping']->value),$_smarty_tpl);?>

											<?php }?>
										<?php } else { ?>
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl);?>

										<?php }?>
									</span>
								</p>
								<?php if (isset($_smarty_tpl->tpl_vars['customer_adv_dtl']->value)) {?>
									<p>
										<span><?php echo smartyTranslate(array('s'=>'Advance Payment Amount'),$_smarty_tpl);?>
</span>
										<span class="cart_total_values"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['adv_amount']->value),$_smarty_tpl);?>
</span>
									</p>
									<p>
										<span><?php echo smartyTranslate(array('s'=>'Due Amount'),$_smarty_tpl);?>
</span>
										<span class="cart_total_values"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['customer_adv_dtl']->value['due_amount']),$_smarty_tpl);?>
</span>
									</p>
								<?php }?>
								<p class="total_discount_block <?php if ($_smarty_tpl->tpl_vars['total_discounts']->value==0) {?> unvisible<?php }?>">
									<span>
										<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
											<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['priceDisplay']->value==0) {?>
												<?php echo smartyTranslate(array('s'=>'Total Discount (tax incl)'),$_smarty_tpl);?>

											<?php } else { ?>
												<?php echo smartyTranslate(array('s'=>'Total Discount (tax excl)'),$_smarty_tpl);?>

											<?php }?>
										<?php } else { ?>
											<?php echo smartyTranslate(array('s'=>'Total Discount'),$_smarty_tpl);?>

										<?php }?>
									</span>
									<span class="cart_total_values">
										<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&$_smarty_tpl->tpl_vars['priceDisplay']->value==0) {?>
											<?php $_smarty_tpl->tpl_vars['total_discounts_negative'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_discounts']->value*-1, null, 0);?>
										<?php } else { ?>
											<?php $_smarty_tpl->tpl_vars['total_discounts_negative'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_discounts_tax_exc']->value*-1, null, 0);?>
										<?php }?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_discounts_negative']->value),$_smarty_tpl);?>

									</span>
								</p>
								<p class="cart_final_total_block">
									<?php if (isset($_smarty_tpl->tpl_vars['customer_adv_dtl']->value)) {?>
										<span><?php echo smartyTranslate(array('s'=>'Final Total'),$_smarty_tpl);?>
</span>
										<span class="cart_total_values"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['customer_adv_dtl']->value['total_to_be_paid']),$_smarty_tpl);?>
</span>
									<?php } else { ?>
										<span><?php echo smartyTranslate(array('s'=>'Final Total'),$_smarty_tpl);?>
</span>
										<span class="cart_total_values">
											<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_price']->value),$_smarty_tpl);?>

											<?php } else { ?>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl);?>

											<?php }?>
										</span>
										<div class="hookDisplayProductPriceBlock-price">
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayCartTotalPriceLabel"),$_smarty_tpl);?>

										</div>
									<?php }?>
								</p>
							</div>
							
							<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
								
								<div class="col-sm-12 card cart_voucher_detail_block">
									<p class="cart_voucher_head"><?php echo smartyTranslate(array('s'=>'Apply Coupon'),$_smarty_tpl);?>
</p>
									<p><span><?php echo smartyTranslate(array('s'=>'Have promocode ?'),$_smarty_tpl);?>
</span></p>
									
									<?php if (sizeof($_smarty_tpl->tpl_vars['discounts']->value)) {?>
										<div class="row">
											<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['discount']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['discount']->iteration=0;
 $_smarty_tpl->tpl_vars['discount']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->_loop = true;
 $_smarty_tpl->tpl_vars['discount']->iteration++;
 $_smarty_tpl->tpl_vars['discount']->index++;
 $_smarty_tpl->tpl_vars['discount']->first = $_smarty_tpl->tpl_vars['discount']->index === 0;
 $_smarty_tpl->tpl_vars['discount']->last = $_smarty_tpl->tpl_vars['discount']->iteration === $_smarty_tpl->tpl_vars['discount']->total;
?>
												<?php if (((float)$_smarty_tpl->tpl_vars['discount']->value['value_real']==0&&$_smarty_tpl->tpl_vars['discount']->value['free_shipping']!=1)||((float)$_smarty_tpl->tpl_vars['discount']->value['value_real']==0&&$_smarty_tpl->tpl_vars['discount']->value['code']=='')) {?>
													<?php continue 1?>
												<?php }?>

												<div class="col-sm-12 margin-btm-10 cart_discount <?php if ($_smarty_tpl->tpl_vars['discount']->last) {?>last_item<?php } elseif ($_smarty_tpl->tpl_vars['discount']->first) {?>first_item<?php } else { ?>item<?php }?>" id="cart_discount_<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
">
													<span class="cart_discount_name">
														<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

														<?php if (strlen($_smarty_tpl->tpl_vars['discount']->value['code'])) {?>
															<a
																href="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
<?php }?>?deleteDiscount=<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
"
																class="price_discount_delete pull-right"
																title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
">
																<i class="icon-times"></i>
															</a>
														<?php }?>
													</span>
													<span class="voucher_apply_state pull-right">
														<img src="<?php echo $_smarty_tpl->tpl_vars['THEME_DIR']->value;?>
img/icon/form-ok-circle.svg" /> <?php echo smartyTranslate(array('s'=>'Applied'),$_smarty_tpl);?>

													</span>
												</div>
											<?php } ?>
										</div>
										<hr class="seperator">
									<?php }?>
									<div class="row margin-btm-20">
										
										<form action="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
<?php }?>" method="post" id="voucher">
											<div class="col-sm-8 col-xs-12 col-md-12 col-lg-8">
												<input type="text" class="discount_name form-control" id="discount_name" name="discount_name" value="<?php if (isset($_smarty_tpl->tpl_vars['discount_name']->value)&&$_smarty_tpl->tpl_vars['discount_name']->value) {?><?php echo $_smarty_tpl->tpl_vars['discount_name']->value;?>
<?php }?>" />
												<input type="hidden" name="submitDiscount" />
											</div>
											<div class="col-sm-4 col-xs-12 col-md-12 col-lg-4 submit_discount_div">
												<button type="submit" name="submitAddDiscount" class="opc-button-small opc-btn-primary">
													<span><?php echo smartyTranslate(array('s'=>'Apply'),$_smarty_tpl);?>
</span>
												</button>
											</div>
										</form>
									</div>

									
									<?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
										<p class="cart_voucher_head"><?php echo smartyTranslate(array('s'=>'Available Coupons'),$_smarty_tpl);?>
</p>
										<div class="row avail_vouchers_block">
											<?php  $_smarty_tpl->tpl_vars['voucher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voucher']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['displayVouchers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['voucher']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['voucher']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->key => $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['voucher']->key;
 $_smarty_tpl->tpl_vars['voucher']->iteration++;
 $_smarty_tpl->tpl_vars['voucher']->last = $_smarty_tpl->tpl_vars['voucher']->iteration === $_smarty_tpl->tpl_vars['voucher']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['availVoucher']['last'] = $_smarty_tpl->tpl_vars['voucher']->last;
?>
												<div class="col-xs-12">
													<p class="avail_voucher_name">
														<span class="voucher_name" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span>
													</p>
													<p class="avail_voucher_des"><?php echo $_smarty_tpl->tpl_vars['voucher']->value['description'];?>
</p>
													<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['availVoucher']['last']) {?>
														<hr class="seperator">
													<?php }?>
												</div>
											<?php } ?>
										</div>
									<?php }?>
								</div>
							<?php }?>
							
						</div>
					<?php } else { ?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Your shopping cart'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<h2 class="page-heading"><?php echo smartyTranslate(array('s'=>'Your shopping cart'),$_smarty_tpl);?>
</h2>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


						<?php if (isset($_smarty_tpl->tpl_vars['cartChanged']->value)&&$_smarty_tpl->tpl_vars['cartChanged']->value) {?>
							<p class="alert alert-danger"><?php echo smartyTranslate(array('s'=>'Your booking cart has been changed automatically as some rooms in your booking cart has been booked by another customer.'),$_smarty_tpl);?>
</p>
						<?php }?>

						<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Till now you did not enter any room in your cart.'),$_smarty_tpl);?>
</p>
					<?php }?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('imgDir'=>$_smarty_tpl->tpl_vars['img_dir']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('authenticationUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("authentication",true))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('orderOpcUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("order-opc",true))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('historyUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("history",true))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('guestTrackingUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("guest-tracking",true))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('addressUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("address",true,null,"back=".((string)$_smarty_tpl->tpl_vars['back_order_page']->value)))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('orderProcess'=>'order-opc'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('guestCheckoutEnabled'=>intval($_smarty_tpl->tpl_vars['PS_GUEST_CHECKOUT_ENABLED']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('displayPrice'=>$_smarty_tpl->tpl_vars['priceDisplay']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('taxEnabled'=>$_smarty_tpl->tpl_vars['use_taxes']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('conditionEnabled'=>intval($_smarty_tpl->tpl_vars['conditions']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('vat_management'=>intval($_smarty_tpl->tpl_vars['vat_management']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('errorCarrier'=>addcslashes($_smarty_tpl->tpl_vars['errorCarrier']->value,'\'')),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('errorTOS'=>addcslashes($_smarty_tpl->tpl_vars['errorTOS']->value,'\'')),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('checkedCarrier'=>intval($_smarty_tpl->tpl_vars['checked']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('addresses'=>array()),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('isVirtualCart'=>intval($_smarty_tpl->tpl_vars['isVirtualCart']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('isPaymentStep'=>intval($_smarty_tpl->tpl_vars['isPaymentStep']->value)),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtWithTax')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtWithTax'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'(tax incl.)','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtWithTax'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtWithoutTax')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtWithoutTax'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'(tax excl.)','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtWithoutTax'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtHasBeenSelected')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtHasBeenSelected'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'has been selected','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtHasBeenSelected'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtNoCarrierIsSelected')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtNoCarrierIsSelected'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No carrier has been selected','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtNoCarrierIsSelected'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtNoCarrierIsNeeded')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtNoCarrierIsNeeded'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No carrier is needed for this order','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtNoCarrierIsNeeded'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtConditionsIsNotNeeded')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtConditionsIsNotNeeded'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You do not need to accept the Terms of Service for this order.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtConditionsIsNotNeeded'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtTOSIsAccepted')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtTOSIsAccepted'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'The service terms have been accepted','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtTOSIsAccepted'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtTOSIsNotAccepted')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtTOSIsNotAccepted'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'The service terms have not been accepted','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtTOSIsNotAccepted'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtThereis')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtThereis'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'There is','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtThereis'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtErrors')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtErrors'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Error(s)','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtErrors'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtDeliveryAddress')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtDeliveryAddress'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Delivery address','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtDeliveryAddress'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtInvoiceAddress')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtInvoiceAddress'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Invoice address','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtInvoiceAddress'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtModifyMyAddress')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtModifyMyAddress'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Modify my address','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtModifyMyAddress'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtInstantCheckout')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtInstantCheckout'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Instant checkout','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtInstantCheckout'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtSelectAnAddressFirst')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtSelectAnAddressFirst'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please start by selecting an address.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtSelectAnAddressFirst'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtFree')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtFree'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Free','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtFree'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['back']->value) {?>&mod=<?php echo urlencode($_smarty_tpl->tpl_vars['back']->value);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->_capture_stack[0][] = array('addressUrl', null, null); ob_start(); ?><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,((('back=').($_smarty_tpl->tpl_vars['back_order_page']->value)).('?step=1')).(Smarty::$_smarty_vars['capture']['default'])));?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('addressUrl'=>Smarty::$_smarty_vars['capture']['addressUrl']),$_smarty_tpl);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><?php echo urlencode('&multi-shipping=1');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('addressMultishippingUrl'=>(Smarty::$_smarty_vars['capture']['addressUrl']).(Smarty::$_smarty_vars['capture']['default'])),$_smarty_tpl);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('addressUrlAdd', null, null); ob_start(); ?><?php echo (Smarty::$_smarty_vars['capture']['addressUrl']).('&id_address=');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('addressUrlAdd'=>Smarty::$_smarty_vars['capture']['addressUrlAdd']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('opc'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['opc']->value)),$_smarty_tpl);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Your billing address','js'=>1),$_smarty_tpl);?>
</h3><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'titleInvoice')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'titleInvoice'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo addcslashes(Smarty::$_smarty_vars['capture']['default'],'\'');?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'titleInvoice'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Your delivery address','js'=>1),$_smarty_tpl);?>
</h3><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'titleDelivery')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'titleDelivery'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo addcslashes(Smarty::$_smarty_vars['capture']['default'],'\'');?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'titleDelivery'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><a class="button button-small btn btn-default" href="<?php echo Smarty::$_smarty_vars['capture']['addressUrlAdd'];?>
" title="<?php echo smartyTranslate(array('s'=>'Update','js'=>1),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Update','js'=>1),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'liUpdate')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'liUpdate'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo addcslashes(Smarty::$_smarty_vars['capture']['default'],'\'');?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'liUpdate'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtExtraDemandSucc')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtExtraDemandSucc'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Updated Successfully','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtExtraDemandSucc'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtExtraDemandErr')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtExtraDemandErr'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Some error occurred while updating demands','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtExtraDemandErr'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			</div>
		</section>
	</div>
</section><?php }} ?>
