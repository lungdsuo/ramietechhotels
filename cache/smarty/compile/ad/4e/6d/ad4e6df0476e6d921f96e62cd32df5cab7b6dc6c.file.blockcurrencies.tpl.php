<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 12:58:13
         compiled from "/var/www/html/ramietechhotels/themes/hotel-reservation-theme/modules/blockcurrencies/blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7424459555dadab6590f796-87494046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad4e6df0476e6d921f96e62cd32df5cab7b6dc6c' => 
    array (
      0 => '/var/www/html/ramietechhotels/themes/hotel-reservation-theme/modules/blockcurrencies/blockcurrencies.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7424459555dadab6590f796-87494046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'request_uri' => 0,
    'cookie' => 0,
    'f_currency' => 0,
    'currency_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadab6591ac21_50871997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadab6591ac21_50871997')) {function content_5dadab6591ac21_50871997($_smarty_tpl) {?>
<!-- Block currencies module -->
<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
	<div class="row">
		<section class="col-xs-12 col-sm-12">
			<div class="row margin-lr-0 footer-section-heading">
				<p><?php echo smartyTranslate(array('s'=>'Currency','mod'=>'wkfooterexploreblock'),$_smarty_tpl);?>
</p>
				<hr/>
			</div>
			<div class="row margin-lr-0">
				<div id="currencies-block-top">
					<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
						<div class="current">
							<input type="hidden" name="id_currency" id="id_currency" value=""/>
							<input type="hidden" name="SubmitCurrency" value="" />
							<span class="cur-label">
								<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['iso_code'];?>
<?php }?>
								<?php } ?>
							</span>
						</div>
						<ul id="first-currencies" class="currencies_ul toogle_content">
							<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
								<?php if (strpos($_smarty_tpl->tpl_vars['f_currency']->value['name'],('(').($_smarty_tpl->tpl_vars['f_currency']->value['iso_code']).(')'))===false) {?>
									<?php ob_start();?><?php echo smartyTranslate(array('s'=>'%s (%s)','sprintf'=>array($_smarty_tpl->tpl_vars['f_currency']->value['name'],$_smarty_tpl->tpl_vars['f_currency']->value['iso_code'])),$_smarty_tpl);?>
<?php $_tmp21=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["currency_name"] = new Smarty_variable($_tmp21, null, 0);?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars["currency_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['f_currency']->value['name'], null, 0);?>
								<?php }?>
								<li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>class="selected"<?php }?>>
									<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['currency_name']->value;?>
">
										<?php echo $_smarty_tpl->tpl_vars['currency_name']->value;?>

									</a>
								</li>
							<?php } ?>
						</ul>
					</form>
				</div>
			</div>
		</section>
	</div>
<?php }?>
<!-- /Block currencies module -->
<?php }} ?>
