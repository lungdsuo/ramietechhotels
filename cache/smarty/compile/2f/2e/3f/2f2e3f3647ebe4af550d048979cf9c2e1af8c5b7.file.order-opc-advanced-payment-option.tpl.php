<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 12:58:13
         compiled from "/var/www/html/ramietechhotels/themes/hotel-reservation-theme/order-opc-advanced-payment-option.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4214192735dadab652d61d0-85181842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f2e3f3647ebe4af550d048979cf9c2e1af8c5b7' => 
    array (
      0 => '/var/www/html/ramietechhotels/themes/hotel-reservation-theme/order-opc-advanced-payment-option.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4214192735dadab652d61d0-85181842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'advance_payment_active' => 0,
    'link' => 0,
    'customer_adv_dtl' => 0,
    'customer_adv_product_dtl' => 0,
    'customer_product_adv_dtl' => 0,
    'adv_amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadab652e5374_37598847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadab652e5374_37598847')) {function content_5dadab652e5374_37598847($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['advance_payment_active']->value)) {?>
	<div class="opc_advance_payment_block">
		<p class="block-small-header"><?php echo smartyTranslate(array('s'=>'PAYMENT TYPES'),$_smarty_tpl);?>
</p>
		<div class="row adv_payment_type_form">
			<form method="POST" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc'), ENT_QUOTES, 'UTF-8', true);?>
" id="advanced-payment">
				<div class="col-sm-12 col-xs-12">
					<label>
						<input type="radio" value="1" name="payment_type" class="payment_type" <?php if (!isset($_smarty_tpl->tpl_vars['customer_adv_dtl']->value)) {?>checked="checked"<?php }?>>
						<span><?php echo smartyTranslate(array('s'=>'Full Payment'),$_smarty_tpl);?>
</span>
					</label>
				</div>
				<div class="col-sm-12 col-xs-12">
					<label>
						<input type="radio" value="2" name="payment_type" class="payment_type" <?php if (isset($_smarty_tpl->tpl_vars['customer_adv_dtl']->value)) {?>checked="checked"<?php }?>>
						<span><?php echo smartyTranslate(array('s'=>'Partial Payment'),$_smarty_tpl);?>
</span>
					</label>

					<?php if (isset($_smarty_tpl->tpl_vars['customer_adv_dtl']->value)) {?>
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer_adv_dtl']->value['id'];?>
" name="id_customer_adv">
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['customer_adv_product_dtl']->value)) {?>
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer_product_adv_dtl']->value['id'];?>
" name="id_customer_product_adv">
					<?php }?>

					<div class="row" id="partial_data">
						<div class="row margin-lr-0">
							<div class="col-xs-12 partial_subcont">
								<span class="partial_txt"><?php echo smartyTranslate(array('s'=>'Advance Payment Amount'),$_smarty_tpl);?>
 - </span>
								<span class="partial_min_cost"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['adv_amount']->value),$_smarty_tpl);?>
</span>
							</div>
						</div>

						<?php if (isset($_smarty_tpl->tpl_vars['customer_adv_dtl']->value)) {?>
							<div class="row margin-lr-0">
								<div class="col-xs-12 partial_subcont">
									<span class="partial_txt"><?php echo smartyTranslate(array('s'=>'Due Amount'),$_smarty_tpl);?>
 - </span>
									<span class="partial_min_cost"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['customer_adv_dtl']->value['due_amount']),$_smarty_tpl);?>
</span>
								</div>
							</div>
						<?php }?>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 margin-top-10">
					<button class="opc-button-small opc-btn-primary" name="submitAdvPayment" type="submit">
						<span><?php echo smartyTranslate(array('s'=>'OK'),$_smarty_tpl);?>
</span>
					</button>
				</div>
			</form>
		</div>
	</div>
<?php }?><?php }} ?>
