<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 12:58:14
         compiled from "/var/www/html/ramietechhotels/themes/hotel-reservation-theme/_partials/order_booking_demands.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4454312095dadab668d20f2-84385272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6611a078c043ba9fc322e64871d20852f8e56927' => 
    array (
      0 => '/var/www/html/ramietechhotels/themes/hotel-reservation-theme/_partials/order_booking_demands.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4454312095dadab668d20f2-84385272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'extraDemands' => 0,
    'roomCount' => 0,
    'roomDemand' => 0,
    'demand' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadab668d9331_38604840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadab668d9331_38604840')) {function content_5dadab668d9331_38604840($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['extraDemands']->value)&&$_smarty_tpl->tpl_vars['extraDemands']->value) {?>
	<?php $_smarty_tpl->tpl_vars['roomCount'] = new Smarty_variable(1, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['roomDemand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roomDemand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['extraDemands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roomDemand']->key => $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->_loop = true;
?>
		<div class="card">
			<div class="row">
				<div class="col-sm-12 demand_header">
					<?php echo smartyTranslate(array('s'=>'Room'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomCount']->value, ENT_QUOTES, 'UTF-8', true);?>

				</div>
				<div>
					<div class="col-sm-12 demand_detail">
						<?php  $_smarty_tpl->tpl_vars['demand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['demand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['demand']->key => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->_loop = true;
?>
							<div class="row demand_detail_price_block">
								<div class="col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="col-xs-6">
									<span class="pull-right"><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['price'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp69=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_tmp69),$_smarty_tpl);?>
</span>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php $_smarty_tpl->tpl_vars['roomCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['roomCount']->value+1, null, 0);?>
	<?php } ?>
<?php }?><?php }} ?>
