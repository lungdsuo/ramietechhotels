<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 12:58:13
         compiled from "/var/www/html/ramietechhotels/admin/themes/default/template/controllers/orders/_product_line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8835037985dadab65b20b35-87282697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dc3f2cdf10951321a97fd345e0a0e589208bdf7' => 
    array (
      0 => '/var/www/html/ramietechhotels/admin/themes/default/template/controllers/orders/_product_line.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8835037985dadab65b20b35-87282697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'order' => 0,
    'currency' => 0,
    'link' => 0,
    'can_edit' => 0,
    'invoices_collection' => 0,
    'invoice' => 0,
    'current_id_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadab65b4ddc5_37403374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadab65b4ddc5_37403374')) {function content_5dadab65b4ddc5_37403374($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/ramietechhotels/tools/smarty/plugins/modifier.date_format.php';
?>

<tr class="product-line-row" data-id_room="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_room'];?>
" data-id_product="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_product'];?>
" data-id_hotel="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_hotel'];?>
" data-date_from="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_from'];?>
" data-date_to="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_to'];?>
" data-product_price="<?php echo $_smarty_tpl->tpl_vars['data']->value['unit_amt_tax_incl'];?>
" data-order_detail_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_order_detail'];?>
">
	<td class="text-center">
		<?php echo $_smarty_tpl->tpl_vars['data']->value['room_num'];?>

	</td>
	<td class="text-center">
		<img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image_link'];?>
" title="Room image" />
	</td>
	<td class="text-center">
		<p><?php echo $_smarty_tpl->tpl_vars['data']->value['room_type'];?>
</p>
		<?php if (isset($_smarty_tpl->tpl_vars['data']->value['extra_demands'])&&$_smarty_tpl->tpl_vars['data']->value['extra_demands']) {?>
			<p class="room_extra_demands">
				<a href="#" data-toggle="modal" data-target="#rooms_type_extra_demands" date_from="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_from'];?>
" date_to="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_to'];?>
" id_product="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_product'];?>
" id_room="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_room'];?>
" id_order="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" class="open_room_extra_demands">
					<?php echo smartyTranslate(array('s'=>'Additional Features'),$_smarty_tpl);?>

				</a>
			</p>
			<p>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['data']->value['extra_demands_price'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>

			</p>
		<?php }?>
	</td>
	<td class="text-center">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAddHotel');?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_hotel'];?>
&amp;updatehtl_branch_info" target="_blank">
			<span><?php echo $_smarty_tpl->tpl_vars['data']->value['hotel_name'];?>
</span>
		</a>
	</td>
	<td class="text-center">
		<span class="booking_duration_show"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_from'],"%d-%m-%Y");?>
&nbsp-&nbsp <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_to'],"%d-%m-%Y");?>
</span>

		<?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
			<div class="booking_duration_edit" style="display:none;">
				<div class="form-group">
					<div class="fixed-width-xl room_check_in_div">
						<div class="input-group">
							<div class="input-group-addon"><?php echo smartyTranslate(array('s'=>'Check In'),$_smarty_tpl);?>
</div>
							<input type="text" class="form-control add_product_date_from" name="add_product[date_from]" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_from'],"%d-%m-%Y");?>
" readonly/>
							<div class="input-group-addon"><i class="icon-calendar"></i></div>
						</div>
					</div>
					<br/>
					<div class="fixed-width-xl room_check_out_div">
						<div class="input-group">
							<div class="input-group-addon"><?php echo smartyTranslate(array('s'=>'Check Out'),$_smarty_tpl);?>
</div>
							<input type="text" class="form-control add_product_date_to" name="add_product[date_to]" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_to'],"%d-%m-%Y");?>
" readonly/>
							<div class="input-group-addon"><i class="icon-calendar"></i></div>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
	</td>
	</td>
	<td class="text-center">
		<span class="product_original_price <?php if ($_smarty_tpl->tpl_vars['data']->value['feature_price_diff']>0) {?>room_type_old_price<?php }?>" <?php if ($_smarty_tpl->tpl_vars['data']->value['feature_price_diff']<0) {?> style="display:none;"<?php }?>>
        	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['data']->value['unit_price_without_reduction_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>

		</span>&nbsp;
        <span class="room_type_current_price" <?php if (!$_smarty_tpl->tpl_vars['data']->value['feature_price_diff']) {?>style="display:none;"<?php }?>>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['data']->value['paid_unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>

        </span>
	</td>
	<td class="text-center">
		<span class="product_price_show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['data']->value['amt_with_qty_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
		<div class="product_price_edit" style="display:none;">
			<div class="form-group">
				<div class="fixed-width-xl">
					<div class="input-group">
						<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo smartyTranslate(array('s'=>'tax excl.'),$_smarty_tpl);?>
</div><?php }?>
						<input type="text" name="product_price_tax_excl" class="edit_product_price_tax_excl edit_product_price" value="<?php echo Tools::ps_round($_smarty_tpl->tpl_vars['data']->value['original_unit_price_tax_excl'],2);?>
"/>
						<?php if (!($_smarty_tpl->tpl_vars['currency']->value->format%2)) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo smartyTranslate(array('s'=>'tax excl.'),$_smarty_tpl);?>
</div><?php }?>
					</div>
				</div>
				<br/>
				<div class="fixed-width-xl">
					<div class="input-group">
						<?php if ($_smarty_tpl->tpl_vars['currency']->value->format%2) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo smartyTranslate(array('s'=>'tax incl.'),$_smarty_tpl);?>
</div><?php }?>
						<input type="text" name="product_price_tax_incl" class="edit_product_price_tax_incl edit_product_price" value="<?php echo Tools::ps_round($_smarty_tpl->tpl_vars['data']->value['original_unit_price_tax_incl'],2);?>
"/>
						<?php if (!($_smarty_tpl->tpl_vars['currency']->value->format%2)) {?><div class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php echo smartyTranslate(array('s'=>'tax incl.'),$_smarty_tpl);?>
</div><?php }?>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
	</td>

	<td class="text-center stage_name">
		<p>
			<?php if (isset($_smarty_tpl->tpl_vars['data']->value['stage_name'])&&$_smarty_tpl->tpl_vars['data']->value['stage_name']) {?>
				<?php echo $_smarty_tpl->tpl_vars['data']->value['stage_name'];?>

			<?php } else { ?>
				--
			<?php }?>
		</p>
	</td>
	<td class="text-center status_name">
		<p>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['stage_name']=='Refunded'||$_smarty_tpl->tpl_vars['data']->value['stage_name']=='Rejected') {?>
				<?php echo smartyTranslate(array('s'=>"Done!"),$_smarty_tpl);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['stage_name']=='Waiting'||$_smarty_tpl->tpl_vars['data']->value['stage_name']=='Accepted') {?>
				<?php echo smartyTranslate(array('s'=>"Pending..."),$_smarty_tpl);?>

			<?php } else { ?>
				--
			<?php }?>
		</p>
	</td>

	<?php if ($_smarty_tpl->tpl_vars['data']->value['booking_type']==1) {?>
	<td class="text-center">
		<?php if ($_smarty_tpl->tpl_vars['data']->value['stage_name']=='Refunded'||$_smarty_tpl->tpl_vars['data']->value['stage_name']=='Rejected') {?>
			<p class="text-center">----</p>
		<?php } else { ?>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mySwappigModal" data-id_order="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" data-room_num='<?php echo $_smarty_tpl->tpl_vars['data']->value['room_num'];?>
' data-date_from='<?php echo $_smarty_tpl->tpl_vars['data']->value['date_from'];?>
' data-date_to='<?php echo $_smarty_tpl->tpl_vars['data']->value['date_to'];?>
' data-id_room='<?php echo $_smarty_tpl->tpl_vars['data']->value['id_room'];?>
' data-cust_name='<?php echo $_smarty_tpl->tpl_vars['data']->value['alloted_cust_name'];?>
' data-cust_email='<?php echo $_smarty_tpl->tpl_vars['data']->value['alloted_cust_email'];?>
' data-avail_rm_swap='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['data']->value['avail_rooms_to_swap']);?>
' data-avail_rm_realloc='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['data']->value['avail_rooms_to_realloc']);?>
'>
				<?php echo smartyTranslate(array('s'=>'Reallocate Room','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</button>
		<?php }?>
	</td>
	<?php }?>
	<?php if (($_smarty_tpl->tpl_vars['can_edit']->value&&!$_smarty_tpl->tpl_vars['order']->value->hasBeenDelivered())) {?>
		<td class="product_invoice" style="display: none;">
		<?php if (sizeof($_smarty_tpl->tpl_vars['invoices_collection']->value)) {?>
		<select name="product_invoice" class="edit_product_invoice">
			<?php  $_smarty_tpl->tpl_vars['invoice'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invoice']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['invoices_collection']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->key => $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" >
				#<?php echo Configuration::get('PS_INVOICE_PREFIX',$_smarty_tpl->tpl_vars['current_id_lang']->value,null,$_smarty_tpl->tpl_vars['order']->value->id_shop);?>
<?php echo sprintf('%06d',$_smarty_tpl->tpl_vars['invoice']->value->number);?>

			</option>
			<?php } ?>
		</select>
		<?php } else { ?>
		&nbsp;
		<?php }?>
		</td>
		<td class="product_action text-right">
			
			<div class="btn-group">
				<button type="button" class="btn btn-default edit_product_change_link">
					<i class="icon-pencil"></i>
					<?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>

				</button>
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="#" class="delete_product_line">
							<i class="icon-trash"></i>
							<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>

						</a>
					</li>
				</ul>
			</div>
			
			<button type="button" class="btn btn-default submitProductChange" style="display: none;">
				<i class="icon-ok"></i>
				<?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>

			</button>
			<button type="button" class="btn btn-default cancel_product_change_link" style="display: none;">
				<i class="icon-remove"></i>
				<?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>

			</button>
		</td>
	<?php }?>
</tr><?php }} ?>
