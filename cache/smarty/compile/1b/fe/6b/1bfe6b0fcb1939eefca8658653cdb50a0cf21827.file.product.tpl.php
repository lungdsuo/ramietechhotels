<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 12:58:14
         compiled from "/var/www/html/ramietechhotels/themes/hotel-reservation-theme/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14393886585dadab66748127-75583224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bfe6b0fcb1939eefca8658653cdb50a0cf21827' => 
    array (
      0 => '/var/www/html/ramietechhotels/themes/hotel-reservation-theme/product.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14393886585dadab66748127-75583224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'priceDisplayPrecision' => 0,
    'priceDisplay' => 0,
    'product' => 0,
    'product_id_hotel' => 0,
    'link' => 0,
    'content_only' => 0,
    'adminActionDisplay' => 0,
    'confirmation' => 0,
    'location_enable' => 0,
    'totalActiveHotels' => 0,
    'show_only_active_htl' => 0,
    'search_data' => 0,
    'all_hotels_info' => 0,
    'error' => 0,
    'max_order_date' => 0,
    'htl_v' => 0,
    'hotel_name' => 0,
    'num_reviews' => 0,
    'foo' => 0,
    'ratting' => 0,
    'ratting_img_path' => 0,
    'productPriceWithoutReduction' => 0,
    'productPrice' => 0,
    'have_image' => 0,
    'jqZoomEnabled' => 0,
    'cover' => 0,
    'largeSize' => 0,
    'img_prod_dir' => 0,
    'lang_iso' => 0,
    'images' => 0,
    'image' => 0,
    'imageIds' => 0,
    'imageTitle' => 0,
    'cartSize' => 0,
    'HOOK_PRODUCT_TAB' => 0,
    'features' => 0,
    'ftr_v' => 0,
    'ftr_img_src' => 0,
    'hotel_features' => 0,
    'hotel_policies' => 0,
    'HOOK_PRODUCT_TAB_CONTENT' => 0,
    'restricted_country_mode' => 0,
    'groups' => 0,
    'HOOK_PRODUCT_ACTIONS' => 0,
    'static_token' => 0,
    'hotel_location' => 0,
    'PS_CATALOG_MODE' => 0,
    'date_from' => 0,
    'date_to' => 0,
    'allow_oosp' => 0,
    'quantityBackup' => 0,
    'num_days' => 0,
    'total_available_rooms' => 0,
    'room_type_demands' => 0,
    'total_price' => 0,
    'idGlobalDemand' => 0,
    'demand' => 0,
    'option' => 0,
    'idOption' => 0,
    'quantity_discounts' => 0,
    'display_discount_price' => 0,
    'quantity_discount' => 0,
    'realDiscountPrice' => 0,
    'discountPrice' => 0,
    'qtyProductPrice' => 0,
    'feature' => 0,
    'packItems' => 0,
    'accessories' => 0,
    'accessory' => 0,
    'accessoryLink' => 0,
    'homeSize' => 0,
    'HOOK_PRODUCT_FOOTER' => 0,
    'attachments' => 0,
    'attachment' => 0,
    'customizationFormTarget' => 0,
    'customizationFields' => 0,
    'field' => 0,
    'key' => 0,
    'pictures' => 0,
    'pic_dir' => 0,
    'img_dir' => 0,
    'customizationField' => 0,
    'textFields' => 0,
    'img_ps_dir' => 0,
    'product_controller_url' => 0,
    'base_dir' => 0,
    'attribute_anchor_separator' => 0,
    'attributesCombinations' => 0,
    'combinations' => 0,
    'combinationImages' => 0,
    'id_customization' => 0,
    'ecotaxTax_rate' => 0,
    'last_qties' => 0,
    'no_tax' => 0,
    'customer_group_without_tax' => 0,
    'group_reduction' => 0,
    'display_qties' => 0,
    'PS_STOCK_MANAGEMENT' => 0,
    'tax_rate' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadab668b4be5_83579098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadab668b4be5_83579098')) {function content_5dadab668b4be5_83579098($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/ramietechhotels/tools/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/ramietechhotels/tools/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_function_counter')) include '/var/www/html/ramietechhotels/tools/smarty/plugins/function.counter.php';
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (count($_smarty_tpl->tpl_vars['errors']->value)==0) {?>
	<?php if (!isset($_smarty_tpl->tpl_vars['priceDisplayPrecision']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['priceDisplayPrecision'] = new Smarty_variable(2, null, 0);?>
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value||$_smarty_tpl->tpl_vars['priceDisplay']->value==2) {?>
		<?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(true,@constant('NULL'),6), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false,@constant('NULL')), null, 0);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?>
		<?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(false,@constant('NULL'),6), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true,@constant('NULL')), null, 0);?>
	<?php }?>
<div class="product_wrapper" itemscope itemtype="http://schema.org/Product">
	<?php if (isset($_smarty_tpl->tpl_vars['product_id_hotel']->value)&&$_smarty_tpl->tpl_vars['product_id_hotel']->value) {?>
		<meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value);?>
">
		<div class="primary_block row">
			<!-- <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
				<div class="container">
					<div class="top-hr"></div>
				</div>
			<?php }?> --><!-- by webkul -->
			<?php if (isset($_smarty_tpl->tpl_vars['adminActionDisplay']->value)&&$_smarty_tpl->tpl_vars['adminActionDisplay']->value) {?>
				<div id="admin-action" class="container">
					<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'This product is not visible to your customers.'),$_smarty_tpl);?>

						<input type="hidden" id="admin-action-product-id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" />
						<a id="publish_button" class="btn btn-default button button-small" href="#">
							<span><?php echo smartyTranslate(array('s'=>'Publish'),$_smarty_tpl);?>
</span>
						</a>
						<a id="lnk_view" class="btn btn-default button button-small" href="#">
							<span><?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
</span>
						</a>
					</p>
					<p id="admin-action-result"></p>
				</div>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value) {?>
				<p class="confirmation">
					<?php echo $_smarty_tpl->tpl_vars['confirmation']->value;?>

				</p>
			<?php }?>

			<!-- By webkul to search panel on product page -->
			<div class="header-rmsearch-wrapper">
				<div class="header-rmsearch-primary">
					<div class="container">
						<div class="row header-rmsearch-inner-wrapper">
							<form method="POST" id="search_hotel_block_form">
								<?php if (isset($_smarty_tpl->tpl_vars['location_enable']->value)&&$_smarty_tpl->tpl_vars['location_enable']->value) {?>
									<div class="form-group
									<?php if ($_smarty_tpl->tpl_vars['totalActiveHotels']->value<=1&&!$_smarty_tpl->tpl_vars['show_only_active_htl']->value) {?>
										col-sm-3
									<?php } else { ?>
										col-sm-6 col-lg-3
									<?php }?>">
										<input type="text" class="form-control header-rmsearch-input" id="hotel_location" name="hotel_location" autocomplete="off" placeholder="<?php echo smartyTranslate(array('s'=>'Hotel Location'),$_smarty_tpl);?>
" <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value['location'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['search_data']->value['location'];?>
"<?php }?>>
										<div class="dropdown">
											<ul class="location_search_results_ul"></ul>
										</div>
									</div>
								<?php }?>
								<div class="form-group <?php if ($_smarty_tpl->tpl_vars['totalActiveHotels']->value<=1&&!$_smarty_tpl->tpl_vars['show_only_active_htl']->value) {?> hidden <?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['location_enable']->value)&&$_smarty_tpl->tpl_vars['location_enable']->value) {?>
									col-sm-6 col-lg-3
								<?php } else { ?>
									col-sm-3
								<?php }?>">
									<?php if (!'show_only_active_htl') {?>
										<input type="hidden" id="max_order_date" name="max_order_date" value="<?php echo $_smarty_tpl->tpl_vars['all_hotels_info']->value[0]['max_order_date'];?>
">
										<input type="hidden" id="hotel_cat_id" name="hotel_cat_id" value="<?php echo $_smarty_tpl->tpl_vars['all_hotels_info']->value[0]['id_category'];?>
">
										<input type="hidden" id="id_hotel" name="id_hotel" value="<?php echo $_smarty_tpl->tpl_vars['all_hotels_info']->value[0]['id'];?>
">
										<input type="text" id="htl_name" class="form-control header-rmsearch-input" value="<?php echo $_smarty_tpl->tpl_vars['all_hotels_info']->value[0]['hotel_name'];?>
" readonly>
									<?php } else { ?>
										<div class="dropdown">
											<button class="form-control header-rmsearch-input <?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value==1) {?>error_border<?php }?>" type="button" data-toggle="dropdown">
												<?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>
													<span id="hotel_cat_name" class="pull-left"><?php echo $_smarty_tpl->tpl_vars['search_data']->value['htl_dtl']['hotel_name'];?>
</span>
												<?php } else { ?>
													<span id="hotel_cat_name" class="pull-left"><?php echo smartyTranslate(array('s'=>'Select Hotel'),$_smarty_tpl);?>
</span>
												<?php }?>
												<!-- <span id="hotel_cat_name" class="pull-left"><?php echo smartyTranslate(array('s'=>'Select Hotel'),$_smarty_tpl);?>
</span> -->
												<input type="hidden" id="hotel_cat_id" name="hotel_cat_id" <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['search_data']->value['htl_dtl']['id_category'];?>
"<?php }?>>
												<input type="hidden" id="id_hotel" name="id_hotel" <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['search_data']->value['htl_dtl']['id'];?>
"<?php }?>>
												<input type="hidden" id="max_order_date" name="max_order_date" value="<?php if (isset($_smarty_tpl->tpl_vars['max_order_date']->value)) {?><?php echo $_smarty_tpl->tpl_vars['max_order_date']->value;?>
<?php }?>">
												<span class="arrow_span">
													<i class="icon icon-angle-down"></i>
												</span>
											</button>
											<ul class="dropdown-menu hotel_dropdown_ul">
												<?php if (isset($_smarty_tpl->tpl_vars['all_hotels_info']->value)&&$_smarty_tpl->tpl_vars['all_hotels_info']->value) {?>
													<?php  $_smarty_tpl->tpl_vars['htl_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['htl_v']->_loop = false;
 $_smarty_tpl->tpl_vars['htl_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_hotels_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['htl_v']->key => $_smarty_tpl->tpl_vars['htl_v']->value) {
$_smarty_tpl->tpl_vars['htl_v']->_loop = true;
 $_smarty_tpl->tpl_vars['htl_k']->value = $_smarty_tpl->tpl_vars['htl_v']->key;
?>
														<li class="hotel_name" data-id-hotel="<?php echo $_smarty_tpl->tpl_vars['htl_v']->value['id'];?>
" data-hotel-cat-id="<?php echo $_smarty_tpl->tpl_vars['htl_v']->value['id_category'];?>
" data-max_order_date="<?php echo $_smarty_tpl->tpl_vars['htl_v']->value['max_order_date'];?>
">
															<?php echo $_smarty_tpl->tpl_vars['htl_v']->value['hotel_name'];?>

														</li>
													<?php } ?>
												<?php }?>
											</ul>
										</div>
									<?php }?>
								</div>
								<div class="form-group
								<?php if ($_smarty_tpl->tpl_vars['totalActiveHotels']->value<=1) {?>
									<?php if (isset($_smarty_tpl->tpl_vars['location_enable']->value)&&$_smarty_tpl->tpl_vars['location_enable']->value&&$_smarty_tpl->tpl_vars['show_only_active_htl']->value) {?>
										col-sm-4 col-lg-2
									<?php } elseif (isset($_smarty_tpl->tpl_vars['location_enable']->value)&&!$_smarty_tpl->tpl_vars['location_enable']->value&&!$_smarty_tpl->tpl_vars['show_only_active_htl']->value) {?>
										col-sm-4
									<?php } else { ?>
										col-sm-3
									<?php }?>
								<?php } elseif (isset($_smarty_tpl->tpl_vars['location_enable']->value)&&$_smarty_tpl->tpl_vars['location_enable']->value) {?>
									col-sm-4 col-lg-2
								<?php } else { ?>
									col-sm-3
								<?php }?>">
									<input type="text" class="form-control header-rmsearch-input input-date" id="check_in_time" name="check_in_time" autocomplete="off" placeholder="<?php echo smartyTranslate(array('s'=>'Check In Date'),$_smarty_tpl);?>
" <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['search_data']->value['date_from'];?>
"<?php }?> />
								</div>
								<div class="form-group
								<?php if (count($_smarty_tpl->tpl_vars['hotel_name']->value)<=1) {?>
									<?php if (isset($_smarty_tpl->tpl_vars['location_enable']->value)&&$_smarty_tpl->tpl_vars['location_enable']->value&&$_smarty_tpl->tpl_vars['show_only_active_htl']->value) {?>
										col-sm-4 col-lg-2
									<?php } elseif (isset($_smarty_tpl->tpl_vars['location_enable']->value)&&!$_smarty_tpl->tpl_vars['location_enable']->value&&!$_smarty_tpl->tpl_vars['show_only_active_htl']->value) {?>
										col-sm-4
									<?php } else { ?>
										col-sm-3
									<?php }?>
								<?php } elseif (isset($_smarty_tpl->tpl_vars['location_enable']->value)&&$_smarty_tpl->tpl_vars['location_enable']->value) {?>
									col-sm-4 col-lg-2
								<?php } else { ?>
									col-sm-3
								<?php }?>">
									<input type="text" class="form-control header-rmsearch-input input-date" id="check_out_time" name="check_out_time" autocomplete="off" placeholder="<?php echo smartyTranslate(array('s'=>'Check Out Date'),$_smarty_tpl);?>
" <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['search_data']->value['date_to'];?>
"<?php }?> />
								</div>
								<div class="form-group
								<?php if (count($_smarty_tpl->tpl_vars['hotel_name']->value)<=1) {?>
									<?php if (isset($_smarty_tpl->tpl_vars['location_enable']->value)&&$_smarty_tpl->tpl_vars['location_enable']->value&&$_smarty_tpl->tpl_vars['show_only_active_htl']->value) {?>
										col-sm-4 col-lg-2
									<?php } elseif (isset($_smarty_tpl->tpl_vars['location_enable']->value)&&!$_smarty_tpl->tpl_vars['location_enable']->value&&!$_smarty_tpl->tpl_vars['show_only_active_htl']->value) {?>
										col-sm-4
									<?php } else { ?>
										col-sm-3
									<?php }?>
								<?php } elseif (isset($_smarty_tpl->tpl_vars['location_enable']->value)&&$_smarty_tpl->tpl_vars['location_enable']->value) {?>
									col-sm-4 col-lg-2
								<?php } else { ?>
									col-sm-3
								<?php }?>">
									<button type="submit" class="btn btn-default button button-medium pull-right" name="product_page_search_submit" id="search_room_submit">
										<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- end -->
			<!-- left infos-->
			<div class="pb-left-column col-xs-12 col-sm-8 col-md-8">
				<div class="room_type_img_containter card">
					<div class="room_hotel_name_block">
						<div class="hotel_name_block">
							<span><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
&nbsp;-&nbsp;<?php echo $_smarty_tpl->tpl_vars['hotel_name']->value;?>
</span>
						</div>
						<?php if (isset($_smarty_tpl->tpl_vars['num_reviews']->value)) {?>
							<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
								<?php if ($_smarty_tpl->tpl_vars['foo']->value<=$_smarty_tpl->tpl_vars['ratting']->value) {?>
									<div class="room_ratting_yes" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img_path']->value;?>
);"></div>
								<?php } else { ?>
									<div class="room_ratting_no" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img_path']->value;?>
);"></div>
								<?php }?>
							<?php }} ?>
							<span class="num_reviews"><?php echo $_smarty_tpl->tpl_vars['num_reviews']->value;?>
 &nbsp;<?php echo smartyTranslate(array('s'=>'Review(s)'),$_smarty_tpl);?>
</span>
						<?php }?>
					</div>
					<!-- product img-->
					<div id="image-block" class="clearfix">
						<!-- <?php if ($_smarty_tpl->tpl_vars['product']->value->new) {?>
							<span class="new-box">
								<span class="new-label"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span>
							</span>
						<?php }?> -->
						<?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale) {?>
							<span class="sale-box no-print">
								<span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sale!'),$_smarty_tpl);?>
</span>
							</span>
						<?php } elseif ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']&&$_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value>$_smarty_tpl->tpl_vars['productPrice']->value) {?>
							<span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['have_image']->value) {?>
							<span id="view_full_size">
								<?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value&&$_smarty_tpl->tpl_vars['have_image']->value&&!$_smarty_tpl->tpl_vars['content_only']->value) {?>
									<a class="jqzoom" title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" rel="gal1" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
">
										<img itemprop="image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"/>
									</a>
								<?php } else { ?>
									<img id="bigpic" itemprop="image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" width="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['height'];?>
"/>
									<!-- <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
										<span class="span_link no-print"><?php echo smartyTranslate(array('s'=>'View larger'),$_smarty_tpl);?>
</span>
									<?php }?> -->
								<?php }?>
							</span>
						<?php } else { ?>
							<span id="view_full_size">
								<img itemprop="image" src="<?php echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-large_default.jpg" id="bigpic" alt="" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['height'];?>
"/>
								<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
									<span class="span_link">
										<?php echo smartyTranslate(array('s'=>'View larger'),$_smarty_tpl);?>

									</span>
								<?php }?>
							</span>
						<?php }?>
					</div> <!-- end image-block -->
					<?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>0) {?>
						<!-- thumbnails -->
						<div id="views_block" class="clearfix <?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)<2) {?>hidden<?php }?>">
							<?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>2) {?>
								<span class="view_scroll_spacer">
									<a id="view_scroll_left" class="" title="<?php echo smartyTranslate(array('s'=>'Other views'),$_smarty_tpl);?>
" href="javascript:{}">
										<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>

									</a>
								</span>
							<?php }?>
							<div id="thumbs_list">
								<ul id="thumbs_list_frame">
								<?php if (isset($_smarty_tpl->tpl_vars['images']->value)) {?>
									<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['image']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->iteration++;
 $_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['thumbnails']['last'] = $_smarty_tpl->tpl_vars['image']->last;
?>
										<?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
										<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
											<?php $_smarty_tpl->tpl_vars['imageTitle'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
										<?php } else { ?>
											<?php $_smarty_tpl->tpl_vars['imageTitle'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true), null, 0);?>
										<?php }?>
										<li id="thumbnail_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
"<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['thumbnails']['last']) {?> class="last"<?php }?>>
											<a<?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value&&$_smarty_tpl->tpl_vars['have_image']->value&&!$_smarty_tpl->tpl_vars['content_only']->value) {?> href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default'), ENT_QUOTES, 'UTF-8', true);?>
',largeimage: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
'}"<?php } else { ?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
"	data-fancybox-group="other-views" class="fancybox<?php if ($_smarty_tpl->tpl_vars['image']->value['id_image']==$_smarty_tpl->tpl_vars['cover']->value['id_image']) {?> shown<?php }?>"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
">
												<img class="img-responsive" id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['cartSize']->value)) {?> height="<?php echo $_smarty_tpl->tpl_vars['cartSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['cartSize']->value['width'];?>
"<?php }?> itemprop="image" />
											</a>
										</li>
									<?php } ?>
								<?php }?>
								</ul>
							</div> <!-- end thumbs_list -->
							<?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>2) {?>
								<a id="view_scroll_right" title="<?php echo smartyTranslate(array('s'=>'Other views'),$_smarty_tpl);?>
" href="javascript:{}">
									<?php echo smartyTranslate(array('s'=>'Next'),$_smarty_tpl);?>

								</a>
							<?php }?>
						</div> <!-- end views-block -->
						<!-- end thumbnails -->
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>1) {?>
						<p class="resetimg clear no-print">
							<span id="wrapResetImages" style="display: none;">
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8', true);?>
" data-id="resetImages">
									<i class="icon-repeat"></i>
									<?php echo smartyTranslate(array('s'=>'Display all pictures'),$_smarty_tpl);?>

								</a>
							</span>
						</p>
					<?php }?>
				</div>

				<div class="room_type_info_containter">
					<!-- tab hook is added here -->
					<!--HOOK_PRODUCT_TAB -->
					<section class="page-product-box">
						<ul class="nav nav-tabs product_description_tabs">
							<li class="active"><a href="#room_info_tab" class="idTabHrefShort" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Room Information','mod'=>'productcomments'),$_smarty_tpl);?>
</a></li>
							<?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value;?>

						</ul>
						<div class="tab-content product_description_tabs_contents">
							<div id="room_info_tab" class="tab-pane active card">
								<div id="room_info_tab_information">
									<div class="info_margin_div room_description">
										<?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>

									</div>
									<?php if (isset($_smarty_tpl->tpl_vars['features']->value)&&$_smarty_tpl->tpl_vars['features']->value) {?>
										<div class="info_margin_div">
											<div class="room_info_heading">
												<span><?php echo smartyTranslate(array('s'=>'Room Features'),$_smarty_tpl);?>
</span>
											</div>
											<div class="room_info_content">
												<?php  $_smarty_tpl->tpl_vars['ftr_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ftr_v']->_loop = false;
 $_smarty_tpl->tpl_vars['ftr_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ftr_v']->key => $_smarty_tpl->tpl_vars['ftr_v']->value) {
$_smarty_tpl->tpl_vars['ftr_v']->_loop = true;
 $_smarty_tpl->tpl_vars['ftr_k']->value = $_smarty_tpl->tpl_vars['ftr_v']->key;
?>
													<img title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" width="15px" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_img_src']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
">&nbsp;
												<?php } ?>
											</div>
										</div>
									<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['hotel_features']->value)&&$_smarty_tpl->tpl_vars['hotel_features']->value) {?>
										<div class="info_margin_div">
											<div class="room_info_heading">
												<span><?php echo smartyTranslate(array('s'=>'Hotel Features'),$_smarty_tpl);?>
</span>
											</div>
											<div class="room_info_content row">
												<?php  $_smarty_tpl->tpl_vars['ftr_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ftr_v']->_loop = false;
 $_smarty_tpl->tpl_vars['ftr_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hotel_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ftr_v']->key => $_smarty_tpl->tpl_vars['ftr_v']->value) {
$_smarty_tpl->tpl_vars['ftr_v']->_loop = true;
 $_smarty_tpl->tpl_vars['ftr_k']->value = $_smarty_tpl->tpl_vars['ftr_v']->key;
?>
													<div class="col-sm-4 col-xs-12"><i class="circle-small">o</i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
												<?php } ?>
											</div>
										</div>
									<?php }?>
									<!-- <div class="info_margin_div">
										<div class="room_info_heading">
											<span><?php echo smartyTranslate(array('s'=>'Rooms'),$_smarty_tpl);?>
</span>
										</div>
										<div class="room_info_content row"></div>
									</div> -->
									<?php if (isset($_smarty_tpl->tpl_vars['hotel_policies']->value)&&$_smarty_tpl->tpl_vars['hotel_policies']->value) {?>
										<div class="info_margin_div">
											<div class="room_info_heading">
												<span><?php echo smartyTranslate(array('s'=>'Hotel Policies'),$_smarty_tpl);?>
</span>
											</div>
											<div class="room_info_content">
												<p class=""><?php echo $_smarty_tpl->tpl_vars['hotel_policies']->value;?>
</p>
											</div>
										</div>
									<?php }?>
								</div>
							</div>
							<?php if (isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value;?>
<?php }?>
						</div>
					</section>
				</div>
			</div> <!-- end pb-left-column -->

			<div class="pb-right-column col-xs-12 col-sm-4 col-md-4">
				<?php if (($_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))||isset($_smarty_tpl->tpl_vars['groups']->value)||$_smarty_tpl->tpl_vars['product']->value->reference||(isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)) {?>
					<p class="hidden">
						<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
" />
						<input type="hidden" name="id_product" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
" id="product_page_product_id" />
						<input type="hidden" name="add" value="1" />
						<input type="hidden" name="id_product_attribute" id="idCombination" value="" />
					</p>
					<div class="booking-form card">
						<div class="booking_room_fields">
							<form action="" method="post">
								<div class="form-group htl_location_block">
									<label for="" class="control-label"><?php echo smartyTranslate(array('s'=>'Hotel Location'),$_smarty_tpl);?>
</label>
									<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_location']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
									<div class="row">
										<div class="form-group col-sm-6">
											<label for="" class="control-label"><?php echo smartyTranslate(array('s'=>'Check In Date'),$_smarty_tpl);?>
</label>
											<input type="text" class="form-control input-date" name="room_check_in" id="room_check_in" value="<?php if (isset($_smarty_tpl->tpl_vars['date_from']->value)) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_from']->value,"%d-%m-%Y");?>
<?php }?>" autocomplete="off" readonly />
										</div>
										<div class="form-group col-sm-6">
											<label for="" class="control-label"><?php echo smartyTranslate(array('s'=>'Check Out Date'),$_smarty_tpl);?>
</label>
											<input type="text" class="form-control input-date" name="room_check_out" id="room_check_out" value="<?php if (isset($_smarty_tpl->tpl_vars['date_to']->value)) {?><?php echo smarty_modifier_date_format(htmlspecialchars($_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true),"%d-%m-%Y");?>
<?php }?>" autocomplete="off" readonly />
										</div>
									</div>
									<div class="room_unavailability_date_error_div"></div>
									<div class="unvail_rooms_cond_display row">
										<div class="form-group col-sm-6" id="quantity_wanted_p"<?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value&&$_smarty_tpl->tpl_vars['product']->value->quantity<=0)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
											<label for="quantity_wanted"><?php echo smartyTranslate(array('s'=>'No. of Rooms'),$_smarty_tpl);?>
</label>
											<div class="qty_sec_cont">
												<div class="qty_input_cont row margin-lr-0">
													<input autocomplete="off" type="text" min="1" name="qty" id="quantity_wanted" class="text" value="<?php if (isset($_smarty_tpl->tpl_vars['quantityBackup']->value)) {?><?php echo intval($_smarty_tpl->tpl_vars['quantityBackup']->value);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity>1) {?><?php echo $_smarty_tpl->tpl_vars['product']->value->minimal_quantity;?>
<?php } else { ?>1<?php }?><?php }?>">

													<input type="hidden" id="num_days" value="<?php if (isset($_smarty_tpl->tpl_vars['num_days']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num_days']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
													<input type="hidden" id="max_avail_type_qty" value="<?php if (isset($_smarty_tpl->tpl_vars['total_available_rooms']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_available_rooms']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
												</div>
												<div class="qty_direction">
													<a href="#" data-field-qty="qty" class="btn btn-default product_quantity_up">
														<span>
															<i class="icon-plus"></i>
														</span>
													</a>
													<a href="#" data-field-qty="qty" class="btn btn-default product_quantity_down">
														<span>
															<i class="icon-minus"></i>
														</span>
													</a>
												</div>
											</div>
											<span class="clearfix"></span>
										</div>
									</div>
									<?php if (isset($_smarty_tpl->tpl_vars['room_type_demands']->value)&&$_smarty_tpl->tpl_vars['room_type_demands']->value) {?>
										<hr class="separator-hr-mg-10 unvail_rooms_cond_display">
										<div class="row price_desc_block unvail_rooms_cond_display">
											<div class="col-sm-6">
												<label class="control-label"><?php echo smartyTranslate(array('s'=>'Room Price'),$_smarty_tpl);?>
</label>
													<p>
														<span class="total_rooms_price_block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['total_price']->value)),$_smarty_tpl);?>
</span>
														<span class="pull-right plus-sign">+</span>
													</p>
											</div>
											<div class="col-sm-6">
												<label class="control-label"><?php echo smartyTranslate(array('s'=>'Extra Facilities'),$_smarty_tpl);?>
</label>
													<p class="extra_demands_price_block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>0),$_smarty_tpl);?>
</p>
											</div>
										</div>
										<hr class="separator-hr-mg-10 form-group unvail_rooms_cond_display">
									<?php }?>
									<div class="room_unavailability_qty_error_div"></div>
									<div class="row unvail_rooms_cond_display">
										<div class="total_price_block col-xs-7 form-group">
											<label class="control-label"><?php echo smartyTranslate(array('s'=>'Subtotal'),$_smarty_tpl);?>
</label>
											<p>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['total_price']->value)),$_smarty_tpl);?>

											</p>
										</div>
										<div class="col-xs-5 form-group pull-right num_quantity_alert">
											<span class="num_searched_avail_rooms"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_available_rooms']->value, ENT_QUOTES, 'UTF-8', true);?>
</span> <?php echo smartyTranslate(array('s'=>'Room(s) Left !'),$_smarty_tpl);?>

										</div>
									</div>

									<!-- End -->
									<div class="sold_out_alert">
										<span><?php echo smartyTranslate(array('s'=>'Rooms Sold Out !'),$_smarty_tpl);?>
</span>
									</div>
								<?php }?>
								<div class="unvail_rooms_cond_display">
									<?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value&&$_smarty_tpl->tpl_vars['product']->value->quantity<=0)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value)||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
									<?php } else { ?>
										<p id="add_to_cart" class="buttons_bottom_block no-print">
											<button type="submit" name="Submit" class="exclusive book_now_submit">
												<span>
													<?php if ($_smarty_tpl->tpl_vars['content_only']->value&&(isset($_smarty_tpl->tpl_vars['product']->value->customization_required)&&$_smarty_tpl->tpl_vars['product']->value->customization_required)) {?><?php echo smartyTranslate(array('s'=>'Customize'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Book Now'),$_smarty_tpl);?>
<?php }?>
												</span>
											</button>
										</p>
									<?php }?>
								</div>
							</form>
						</div>
					</div>
					
					<?php if (isset($_smarty_tpl->tpl_vars['room_type_demands']->value)&&$_smarty_tpl->tpl_vars['room_type_demands']->value) {?>
						<div class="col-sm-12 card room_demands_container">
							<label for="" class="control-label"><?php echo smartyTranslate(array('s'=>'Additional Facilities'),$_smarty_tpl);?>
</label>
							<?php  $_smarty_tpl->tpl_vars['demand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['demand']->_loop = false;
 $_smarty_tpl->tpl_vars['idGlobalDemand'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['room_type_demands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['demand']->key => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->_loop = true;
 $_smarty_tpl->tpl_vars['idGlobalDemand']->value = $_smarty_tpl->tpl_vars['demand']->key;
?>
								<div class="row room_demand_block">
									<?php if ($_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
										<div class="col-xs-1">
											<p class="checkbox">
												<input value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idGlobalDemand']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" class="id_room_type_demand" />
											</p>
										</div>
									<?php }?>
									<div class="col-xs-11 demand_adv_option_block">
										<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?><span class="pull-right extra_demand_option_price"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['demand']->value['price'];?>
<?php $_tmp67=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_tmp67),$_smarty_tpl);?>
</span><?php }?></p>
										<?php if (isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'])&&$_smarty_tpl->tpl_vars['demand']->value['adv_option']) {?>
											<select class="id_option">
												<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['idOption'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['demand']->value['adv_option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['idOption']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
													<option optionPrice="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['price'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idOption']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php } ?>
											</select>
										<?php } else { ?>
											<input type="hidden" class="id_option" value="0" />
										<?php }?>
									</div>
								</div>
							<?php } ?>
							<div class="room_demands_container_overlay">
							</div>
						</div>
					<?php }?>
				<?php }?>
			</div>

		</div> <!-- end primary_block -->
		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
	<?php if ((isset($_smarty_tpl->tpl_vars['quantity_discounts']->value)&&count($_smarty_tpl->tpl_vars['quantity_discounts']->value)>0)) {?>
				<!-- quantity discount -->
				<section class="page-product-box ">
					<h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Volume discounts'),$_smarty_tpl);?>
</h3>
					<div id="quantityDiscount">
						<table class="std table-product-discounts">
							<thead>
								<tr>
									<th><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</th>
									<th><?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?><?php echo smartyTranslate(array('s'=>'Price'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Discount'),$_smarty_tpl);?>
<?php }?></th>
									<th><?php echo smartyTranslate(array('s'=>'You Save'),$_smarty_tpl);?>
</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['quantity_discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quantity_discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quantity_discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->key => $_smarty_tpl->tpl_vars['quantity_discount']->value) {
$_smarty_tpl->tpl_vars['quantity_discount']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price']>=0||$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type']=='amount') {?>
										<?php $_smarty_tpl->tpl_vars['realDiscountPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['base_price'])-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']), null, 0);?>
									<?php } else { ?>
										<?php $_smarty_tpl->tpl_vars['realDiscountPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['base_price'])*floatval((1-$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction'])), null, 0);?>
									<?php }?>
									<tr class="quantityDiscount_<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute'];?>
" data-real-discount-value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['realDiscountPrice']->value),$_smarty_tpl);?>
" data-discount-type="<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'];?>
" data-discount="<?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
" data-discount-quantity="<?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
">
										<td>
											<?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>

										</td>
										<td>
											<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price']>=0||$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type']=='amount') {?>
												<?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?>
													<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_tax']==0&&!$_smarty_tpl->tpl_vars['quantity_discount']->value['price']) {?>
														<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_with_tax']))),$_smarty_tpl);?>

													<?php } else { ?>
														<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl);?>

													<?php }?>
												<?php } else { ?>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl);?>

												<?php }?>
											<?php } else { ?>
												<?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?>
													<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_tax']==0) {?>
														<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_with_tax']))),$_smarty_tpl);?>

													<?php } else { ?>
														<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction']))),$_smarty_tpl);?>

													<?php }?>
												<?php } else { ?>
													<?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
%
												<?php }?>
											<?php }?>
										</td>
										<td>
											<span><?php echo smartyTranslate(array('s'=>'Up to'),$_smarty_tpl);?>
</span>
											<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price']>=0||$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type']=='amount') {?>
												<?php $_smarty_tpl->tpl_vars['discountPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']), null, 0);?>
											<?php } else { ?>
												<?php $_smarty_tpl->tpl_vars['discountPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction'])), null, 0);?>
											<?php }?>
											<?php $_smarty_tpl->tpl_vars['discountPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['discountPrice']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], null, 0);?>
											<?php $_smarty_tpl->tpl_vars['qtyProductPrice'] = new Smarty_variable(floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)*$_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], null, 0);?>
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['qtyProductPrice']->value-$_smarty_tpl->tpl_vars['discountPrice']->value),$_smarty_tpl);?>

										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</section>
			<?php }?>
			<!-- <?php if (isset($_smarty_tpl->tpl_vars['features']->value)&&$_smarty_tpl->tpl_vars['features']->value) {?>
				<section class="page-product-box">
					<h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Data sheet'),$_smarty_tpl);?>
</h3>
					<table class="table-data-sheet">
						<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
							<?php if (isset($_smarty_tpl->tpl_vars['feature']->value['value'])) {?>
							<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							<?php }?>
						</tr>
						<?php } ?>
					</table>
				</section>
			<?php }?> -->
			<!-- <?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->description) {?>
				<section class="page-product-box">
					<h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'More info'),$_smarty_tpl);?>
</h3>
					<div  class="rte"><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</div>
				</section>
			<?php }?> --><!-- by webkul commented -->
			<?php if (isset($_smarty_tpl->tpl_vars['packItems']->value)&&count($_smarty_tpl->tpl_vars['packItems']->value)>0) {?>
			<section id="blockpack">
				<h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Pack content'),$_smarty_tpl);?>
</h3>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['packItems']->value), 0);?>

			</section>
			<?php }?>
			<!-- tab hook is shifted to left column -->
			<!--end HOOK_PRODUCT_TAB -->
			<?php if (isset($_smarty_tpl->tpl_vars['accessories']->value)&&$_smarty_tpl->tpl_vars['accessories']->value) {?>
				<!--Accessories -->
				<section class="page-product-box">
					<h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Accessories'),$_smarty_tpl);?>
</h3>
					<div class="block products_block accessories-block clearfix">
						<div class="block_content">
							<ul id="bxslider" class="bxslider clearfix">
								<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['accessory']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['accessory']->iteration=0;
 $_smarty_tpl->tpl_vars['accessory']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
 $_smarty_tpl->tpl_vars['accessory']->iteration++;
 $_smarty_tpl->tpl_vars['accessory']->index++;
 $_smarty_tpl->tpl_vars['accessory']->first = $_smarty_tpl->tpl_vars['accessory']->index === 0;
 $_smarty_tpl->tpl_vars['accessory']->last = $_smarty_tpl->tpl_vars['accessory']->iteration === $_smarty_tpl->tpl_vars['accessory']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['accessories_list']['first'] = $_smarty_tpl->tpl_vars['accessory']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['accessories_list']['last'] = $_smarty_tpl->tpl_vars['accessory']->last;
?>
									<?php if (($_smarty_tpl->tpl_vars['accessory']->value['allow_oosp']||$_smarty_tpl->tpl_vars['accessory']->value['quantity_all_versions']>0||$_smarty_tpl->tpl_vars['accessory']->value['quantity']>0)&&$_smarty_tpl->tpl_vars['accessory']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
										<?php $_smarty_tpl->tpl_vars['accessoryLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['accessory']->value['id_product'],$_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['category']), null, 0);?>
										<li class="item product-box ajax_block_product<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['accessories_list']['first']) {?> first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['accessories_list']['last']) {?> last_item<?php } else { ?> item<?php }?> product_accessories_description">
											<div class="product_desc">
												<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryLink']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" class="product-image product_image">
													<img class="lazyOwl" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"/>
												</a>
												<div class="block_description">
													<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryLink']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
" class="product_description">
														<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['accessory']->value['description_short']),25,'...');?>

													</a>
												</div>
											</div>
											<div class="s_title_block">
												<h5 itemprop="name" class="product-name">
													<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryLink']->value, ENT_QUOTES, 'UTF-8', true);?>
">
														<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['accessory']->value['name'],20,'...',true), ENT_QUOTES, 'UTF-8', true);?>

													</a>
												</h5>
												<?php if ($_smarty_tpl->tpl_vars['accessory']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
												<span class="price">
													<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value!=1) {?>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['accessory']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['accessory']->value['price_tax_exc']),$_smarty_tpl);?>

													<?php }?>
												</span>
												<?php }?>
											</div>
											<div class="clearfix" style="margin-top:5px">
												<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&($_smarty_tpl->tpl_vars['accessory']->value['allow_oosp']||$_smarty_tpl->tpl_vars['accessory']->value['quantity']>0)) {?>
													<div class="no-print">
														<a class="exclusive button ajax_add_to_cart_button" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);?>
<?php $_tmp68=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"qty=1&amp;id_product=".$_tmp68."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
">
															<span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
														</a>
													</div>
												<?php }?>
											</div>
										</li>
									<?php }?>
								<?php } ?>
							</ul>
						</div>
					</div>
				</section>
				<!--end Accessories -->
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value;?>
<?php }?>
			<!-- description & features -->
			<?php if ((isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->description)||(isset($_smarty_tpl->tpl_vars['features']->value)&&$_smarty_tpl->tpl_vars['features']->value)||(isset($_smarty_tpl->tpl_vars['accessories']->value)&&$_smarty_tpl->tpl_vars['accessories']->value)||(isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value)||(isset($_smarty_tpl->tpl_vars['attachments']->value)&&$_smarty_tpl->tpl_vars['attachments']->value)||isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->customizable) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['attachments']->value)&&$_smarty_tpl->tpl_vars['attachments']->value) {?>
				<!--Download -->
				<section class="page-product-box">
					<h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Download'),$_smarty_tpl);?>
</h3>
					<?php  $_smarty_tpl->tpl_vars['attachment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attachments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['attachment']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['attachment']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['attachements']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->key => $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->_loop = true;
 $_smarty_tpl->tpl_vars['attachment']->iteration++;
 $_smarty_tpl->tpl_vars['attachment']->last = $_smarty_tpl->tpl_vars['attachment']->iteration === $_smarty_tpl->tpl_vars['attachment']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['attachements']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['attachements']['last'] = $_smarty_tpl->tpl_vars['attachment']->last;
?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['attachements']['iteration']%3==1) {?><div class="row"><?php }?>
							<div class="col-lg-4">
								<h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,null,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h4>
								<p class="text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</p>
								<a class="btn btn-default btn-block" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,null,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])), ENT_QUOTES, 'UTF-8', true);?>
">
									<i class="icon-download"></i>
									<?php echo smartyTranslate(array('s'=>"Download"),$_smarty_tpl);?>
 (<?php echo Tools::formatBytes($_smarty_tpl->tpl_vars['attachment']->value['file_size'],2);?>
)
								</a>
								<hr />
							</div>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['attachements']['iteration']%3==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['attachements']['last']) {?></div><?php }?>
					<?php } ?>
				</section>
				<!--end Download -->
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value->customizable) {?>
				<!--Customization -->
				<section class="page-product-box">
					<h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Product customization'),$_smarty_tpl);?>
</h3>
					<!-- Customizable products -->
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['customizationFormTarget']->value;?>
" enctype="multipart/form-data" id="customizationForm" class="clearfix">
						<p class="infoCustomizable">
							<?php echo smartyTranslate(array('s'=>'After saving your customized product, remember to add it to your cart.'),$_smarty_tpl);?>

							<?php if ($_smarty_tpl->tpl_vars['product']->value->uploadable_files) {?>
							<br />
							<?php echo smartyTranslate(array('s'=>'Allowed file formats are: GIF, JPG, PNG'),$_smarty_tpl);?>
<?php }?>
						</p>
						<?php if (intval($_smarty_tpl->tpl_vars['product']->value->uploadable_files)) {?>
							<div class="customizableProductsFile">
								<h5 class="product-heading-h5"><?php echo smartyTranslate(array('s'=>'Pictures'),$_smarty_tpl);?>
</h5>
								<ul id="uploadable_files" class="clearfix">
									<?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

									<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customizationFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['field']->value['type']==0) {?>
											<li class="customizationUploadLine<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>"><?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(((('pictures_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']), null, 0);?>
												<?php if (isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
													<div class="customizationUploadBrowse">
														<img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value];?>
_small" alt="" />
															<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductDeletePictureLink($_smarty_tpl->tpl_vars['product']->value,$_smarty_tpl->tpl_vars['field']->value['id_customization_field']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" >
																<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" class="customization_delete_icon" width="11" height="13" />
															</a>
													</div>
												<?php }?>
												<div class="customizationUploadBrowse form-group">
													<label class="customizationUploadBrowseDescription">
														<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])) {?>
															<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>

														<?php } else { ?>
															<?php echo smartyTranslate(array('s'=>'Please select an image file from your computer'),$_smarty_tpl);?>

														<?php }?>
														<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><sup>*</sup><?php }?>
													</label>
													<input type="file" name="file<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" id="img<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" class="form-control customization_block_input <?php if (isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>filled<?php }?>" />
												</div>
											</li>
											<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

										<?php }?>
									<?php } ?>
								</ul>
							</div>
						<?php }?>
						<?php if (intval($_smarty_tpl->tpl_vars['product']->value->text_fields)) {?>
							<div class="customizableProductsText">
								<h5 class="product-heading-h5"><?php echo smartyTranslate(array('s'=>'Text'),$_smarty_tpl);?>
</h5>
								<ul id="text_fields">
								<?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

								<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customizationFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['field']->value['type']==1) {?>
										<li class="customizationUploadLine<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>">
											<label for ="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
">
												<?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(((('textFields_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']), null, 0);?>
												<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])) {?>
													<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>

												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><sup>*</sup><?php }?>
											</label>
											<textarea name="textField<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" class="form-control customization_block_input" id="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" rows="3" cols="20"><?php if (isset($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value])) {?><?php echo stripslashes($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
<?php }?></textarea>
										</li>
										<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

									<?php }?>
								<?php } ?>
								</ul>
							</div>
						<?php }?>
						<p id="customizedDatas">
							<input type="hidden" name="quantityBackup" id="quantityBackup" value="" />
							<input type="hidden" name="submitCustomizedDatas" value="1" />
							<button class="button btn btn-default button button-small" name="saveCustomization">
								<span><?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</span>
							</button>
							<span id="ajax-loader" class="unvisible">
								<img src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
loader.gif" alt="loader" />
							</span>
						</p>
					</form>
					<p class="clear required"><sup>*</sup> <?php echo smartyTranslate(array('s'=>'required fields'),$_smarty_tpl);?>
</p>
				</section>
				<!--end Customization -->
				<?php }?>
			<?php }?>
		<?php }?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('total_avail_rms'=>$_smarty_tpl->tpl_vars['total_available_rooms']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('max_order_date'=>$_smarty_tpl->tpl_vars['max_order_date']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('booking_date_to'=>$_smarty_tpl->tpl_vars['date_to']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('booking_date_from'=>$_smarty_tpl->tpl_vars['date_from']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('product_controller_url'=>$_smarty_tpl->tpl_vars['product_controller_url']->value),$_smarty_tpl);?>

	<?php } else { ?>
		<div class="bootstrap">
			<div class="alert alert-warning">
				<?php echo smartyTranslate(array('s'=>'This room type has not enough information. Please save information of related hotel and other required room information for the booking of this room type.'),$_smarty_tpl);?>

			</div>
		</div>
	<?php }?>
</div> <!-- itemscope product wrapper -->
<?php if (isset($_GET['ad'])&&$_GET['ad']) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'ad')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ad'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['base_dir']->value).($_GET['ad']), ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ad'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php if (isset($_GET['adtoken'])&&$_GET['adtoken']) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'adtoken')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'adtoken'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_GET['adtoken'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'adtoken'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('allowBuyWhenOutOfStock'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['allow_oosp']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('availableNowValue'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['product']->value->available_now)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('availableLaterValue'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['product']->value->available_later)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('attribute_anchor_separator'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['attribute_anchor_separator']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('attributesCombinations'=>$_smarty_tpl->tpl_vars['attributesCombinations']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currentDate'=>smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['combinations']->value)&&$_smarty_tpl->tpl_vars['combinations']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('combinations'=>$_smarty_tpl->tpl_vars['combinations']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('combinationsFromController'=>$_smarty_tpl->tpl_vars['combinations']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('displayDiscountPrice'=>$_smarty_tpl->tpl_vars['display_discount_price']->value),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'upToTxt')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'upToTxt'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Up to','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'upToTxt'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['combinationImages']->value)&&$_smarty_tpl->tpl_vars['combinationImages']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('combinationImages'=>$_smarty_tpl->tpl_vars['combinationImages']->value),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('customizationId'=>$_smarty_tpl->tpl_vars['id_customization']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('customizationFields'=>$_smarty_tpl->tpl_vars['customizationFields']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('default_eco_tax'=>floatval($_smarty_tpl->tpl_vars['product']->value->ecotax)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('displayPrice'=>intval($_smarty_tpl->tpl_vars['priceDisplay']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('ecotaxTax_rate'=>floatval($_smarty_tpl->tpl_vars['ecotaxTax_rate']->value)),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['cover']->value['id_image_only'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idDefaultImage'=>intval($_smarty_tpl->tpl_vars['cover']->value['id_image_only'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idDefaultImage'=>0),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('img_ps_dir'=>$_smarty_tpl->tpl_vars['img_ps_dir']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('img_prod_dir'=>$_smarty_tpl->tpl_vars['img_prod_dir']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('id_product'=>intval($_smarty_tpl->tpl_vars['product']->value->id)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('jqZoomEnabled'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['jqZoomEnabled']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('maxQuantityToAllowDisplayOfLastQuantityMessage'=>intval($_smarty_tpl->tpl_vars['last_qties']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('minimalQuantity'=>intval($_smarty_tpl->tpl_vars['product']->value->minimal_quantity)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('noTaxForThisProduct'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['no_tax']->value)),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['customer_group_without_tax']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('customerGroupWithoutTax'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['customer_group_without_tax']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('customerGroupWithoutTax'=>false),$_smarty_tpl);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['group_reduction']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('groupReduction'=>floatval($_smarty_tpl->tpl_vars['group_reduction']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('groupReduction'=>false),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('oosHookJsCodeFunctions'=>Array()),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productHasAttributes'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval(isset($_smarty_tpl->tpl_vars['groups']->value))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productPriceTaxExcluded'=>floatval(((($tmp = @$_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true))===null||$tmp==='' ? 'null' : $tmp)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productPriceTaxIncluded'=>floatval(((($tmp = @$_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false))===null||$tmp==='' ? 'null' : $tmp)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productBasePriceTaxExcluded'=>floatval(($_smarty_tpl->tpl_vars['product']->value->getPrice(false,null,6,null,false,false)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productBasePriceTaxExcl'=>(floatval($_smarty_tpl->tpl_vars['product']->value->getPrice(false,null,6,null,false,false)))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productBasePriceTaxIncl'=>(floatval($_smarty_tpl->tpl_vars['product']->value->getPrice(true,null,6,null,false,false)))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productReference'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->reference, ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productAvailableForOrder'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['product']->value->available_for_order)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productPriceWithoutReduction'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productPrice'=>floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productUnitPriceRatio'=>floatval($_smarty_tpl->tpl_vars['product']->value->unit_price_ratio)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productShowPrice'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['product']->value->show_price))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('PS_CATALOG_MODE'=>$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&count($_smarty_tpl->tpl_vars['product']->value->specificPrice)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('product_specific_price'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('product_specific_price'=>array()),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['display_qties']->value==1&&$_smarty_tpl->tpl_vars['product']->value->quantity) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('quantityAvailable'=>$_smarty_tpl->tpl_vars['product']->value->quantity),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('quantityAvailable'=>0),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('quantitiesDisplayAllowed'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['display_qties']->value)),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='percentage') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('reduction_percent'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*floatval(100)),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('reduction_percent'=>0),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='amount') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('reduction_price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('reduction_price'=>0),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['price']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('specific_price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['price'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('specific_price'=>0),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('specific_currency'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval(($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['id_currency']))),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('stock_management'=>intval($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('taxRate'=>floatval($_smarty_tpl->tpl_vars['tax_rate']->value)),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'doesntExist')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExist'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'This combination does not exist for this product. Please select another combination.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExist'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'doesntExistNoMore')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExistNoMore'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'This product is no longer in stock','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExistNoMore'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'doesntExistNoMoreBut')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExistNoMoreBut'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'with those attributes but is available with others.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExistNoMoreBut'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'fieldRequired')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'fieldRequired'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please fill in all the required fields before saving your customization.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'fieldRequired'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'uploading_in_progress')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'uploading_in_progress'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Uploading in progress, please be patient.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'uploading_in_progress'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'product_fileDefaultHtml')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'product_fileDefaultHtml'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No file selected','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'product_fileDefaultHtml'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'product_fileButtonHtml')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'product_fileButtonHtml'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Choose File','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'product_fileButtonHtml'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currency_sign'=>$_smarty_tpl->tpl_vars['currency']->value->sign),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currency_format'=>$_smarty_tpl->tpl_vars['currency']->value->format),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currency_blank'=>$_smarty_tpl->tpl_vars['currency']->value->blank),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'correct_date_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'correct_date_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Check Out Date should be greater than Check in date.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'correct_date_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'some_error_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'some_error_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Some error occured .Please try again.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'some_error_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'unavail_qty_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'unavail_qty_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Required quantity of rooms are Not available.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'unavail_qty_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'out_of_stock_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'out_of_stock_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No room is available for this period.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'out_of_stock_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'wrong_qty_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'wrong_qty_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'you are trying for a invalid quantity.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'wrong_qty_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'hotel_loc_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'hotel_loc_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please enter a hotel location','js'=>1,'mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'hotel_loc_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'hotel_name_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'hotel_name_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select a hotel name','js'=>1,'mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'hotel_name_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'check_in_time_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'check_in_time_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please enter Check In time','js'=>1,'mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'check_in_time_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'check_out_time_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'check_out_time_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please enter Check Out time','js'=>1,'mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'check_out_time_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'num_adults_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'num_adults_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please enter number of adults.','js'=>1,'mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'num_adults_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'num_children_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'num_children_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please enter number of children.','js'=>1,'mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'num_children_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'some_error_occur_cond')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'some_error_occur_cond'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Some error occured. Please try again.','js'=>1,'mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'some_error_occur_cond'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'less_checkin_date')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'less_checkin_date'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Check In date can not be before current date.','js'=>1,'mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'less_checkin_date'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'more_checkout_date')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_checkout_date'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Check Out date must be greater than Check In date.','js'=>1,'mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'more_checkout_date'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('autocomplete_search_url'=>$_smarty_tpl->tpl_vars['link']->value->getModuleLink('wkroomsearchblock','autocompletesearch')),$_smarty_tpl);?>

<?php }?><?php }} ?>
