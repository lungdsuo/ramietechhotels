<?php /* Smarty version Smarty-3.1.19, created on 2019-10-21 12:58:13
         compiled from "/var/www/html/ramietechhotels/admin/themes/default/template/controllers/products/configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10868675435dadab656f3ba8-44309896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be61d0cf2e963e6635b1e4fa6c180eb4b2bbd985' => 
    array (
      0 => '/var/www/html/ramietechhotels/admin/themes/default/template/controllers/products/configuration.tpl',
      1 => 1561817458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10868675435dadab656f3ba8-44309896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'htl_room_type' => 0,
    'htl_full_info' => 0,
    'htl_info' => 0,
    'htl_dtl' => 0,
    'htl_room_info' => 0,
    'key' => 0,
    'info' => 0,
    'rm_status' => 0,
    'room_stauts' => 0,
    'k' => 0,
    'link' => 0,
    'datesMissing' => 0,
    'datesOverlapping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dadab6571b714_84366334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dadab6571b714_84366334')) {function content_5dadab6571b714_84366334($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['product']->value->id)) {?>
	<div id="product-configuration" class="panel product-tab">
		<input type="hidden" name="submitted_tabs[]" value="Configuration" />
		<h3 class="tab"> <i class="icon-AdminAdmin"></i> <?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</h3>

		<?php if (isset($_smarty_tpl->tpl_vars['htl_room_type']->value)) {?>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['htl_room_type']->value['id'];?>
" name="wk_id_room_type">
		<?php }?>

		<div class="form-group">
			<?php if (isset($_smarty_tpl->tpl_vars['htl_room_type']->value)) {?>
				<label class="control-label col-sm-2" for="hotel_place">
					<?php echo smartyTranslate(array('s'=>'Hotel','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

				</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['htl_full_info']->value['hotel_name'];?>
" readonly>
					<input type="hidden" name="id_hotel" value="<?php echo $_smarty_tpl->tpl_vars['htl_room_type']->value['id_hotel'];?>
">
				</div>
			<?php } else { ?>
				<label class="control-label col-sm-2" for="hotel_place">
					<?php echo smartyTranslate(array('s'=>'Select Hotel','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

				</label>
				<div class="col-sm-4">
					<select name="id_hotel" id="hotel_place" class="form-control">
						<?php  $_smarty_tpl->tpl_vars['htl_dtl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['htl_dtl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htl_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['htl_dtl']->key => $_smarty_tpl->tpl_vars['htl_dtl']->value) {
$_smarty_tpl->tpl_vars['htl_dtl']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['htl_dtl']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['htl_dtl']->value['hotel_name'];?>
</option>
						<?php } ?>
					</select>
				</div>
			<?php }?>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="num_adults">
				<?php echo smartyTranslate(array('s'=>'Adults','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</label>
			<div class="col-sm-4">
				<input id="num_adults" type="text" name="num_adults" class="form-control" <?php if (isset($_smarty_tpl->tpl_vars['htl_room_type']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['htl_room_type']->value['adult'];?>
"<?php }?>>
				<input type="hidden" id="checkConfSubmit" value="0" name="checkConfSubmit">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="num_child">
				<?php echo smartyTranslate(array('s'=>'Children','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</label>
			<div class="col-sm-4">
				<input id="num_child" type="text" name="num_child" class="form-control" <?php if (isset($_smarty_tpl->tpl_vars['htl_room_type']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['htl_room_type']->value['children'];?>
"<?php }?>>
			</div>
		</div>

		<div class="from-group table-responsive-row clearfix">
			<table class="table hotel-room">
				<thead>
					<tr class="nodrag nodrop">
						<th class="col-sm-2 center">
							<label class="control-label">
								<span class="label-tooltip" data-toggle="tooltip" title="" data-original-title="Enter the name of the Room for ex. A-101. Invalid characters <>;=#{}"><?php echo smartyTranslate(array('s'=>'Room No.'),$_smarty_tpl);?>
</span>
							</label>
						</th>
						<th class="col-sm-2 center">
							<span><?php echo smartyTranslate(array('s'=>'Floor','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
						</th>
						<th class="col-sm-2">
							<span><?php echo smartyTranslate(array('s'=>'Status','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
						</th>
						<th class="col-sm-6 center">
							<span><?php echo smartyTranslate(array('s'=>'Extra Information','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
						</th>
					</tr>
					<?php if (isset($_smarty_tpl->tpl_vars['htl_room_info']->value)&&$_smarty_tpl->tpl_vars['htl_room_info']->value) {?>
						<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['htl_room_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
							<tr class="room_data_values" id="row_index<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-rowKey="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
								<td class="col-sm-1 center">
									<input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['room_num'];?>
" name="room_num[]">
								</td>
								<td class="col-sm-2 center">
									<input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['floor'];?>
" name="room_floor[]">
								</td>
								<td class="col-sm-2 center">
									<select class="form-control room_status" name="room_status[]">
										<?php  $_smarty_tpl->tpl_vars['room_stauts'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['room_stauts']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rm_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['room_stauts']->key => $_smarty_tpl->tpl_vars['room_stauts']->value) {
$_smarty_tpl->tpl_vars['room_stauts']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['room_stauts']->value['id'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['room_stauts']->value['id'];?>
<?php $_tmp10=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['info']->value['id_status']==$_tmp10) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['room_stauts']->value['status'];?>
</option>
										<?php } ?>
									</select>
								</td>
								<td class="center col-sm-6">
									<a class="btn btn-default deactiveDatesModal" data-toggle="modal" data-target="#deactiveDatesModal" <?php if ($_smarty_tpl->tpl_vars['info']->value['id_status']!=3) {?>style="display: none;"<?php }?>><?php if ($_smarty_tpl->tpl_vars['info']->value['id_status']!=3) {?><?php echo smartyTranslate(array('s'=>'Add Dates','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'View Dates','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php }?>
									</a>
									<input type="text" class="form-control room_comment" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['comment'];?>
" name="room_comment[]" <?php if ($_smarty_tpl->tpl_vars['info']->value['id_status']==3) {?>style="display: none;"<?php }?>>
									<input type="hidden" class="form-control disableDatesJSON" name="disableDatesJSON[]" <?php if ($_smarty_tpl->tpl_vars['info']->value['id_status']==3) {?>value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['disabled_dates_json'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
								</td>
								<td class="center col-sm-1">
									<a href="#" class="rm_htl_room btn btn-default" data-id-htl-info="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"><i class="icon-trash"></i></a>
									<input type="hidden" name="id_room_info[]" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
								</td>
							</tr>
						<?php } ?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['k']->step = 1;$_smarty_tpl->tpl_vars['k']->total = (int) ceil(($_smarty_tpl->tpl_vars['k']->step > 0 ? 1+1 - (0) : 0-(1)+1)/abs($_smarty_tpl->tpl_vars['k']->step));
if ($_smarty_tpl->tpl_vars['k']->total > 0) {
for ($_smarty_tpl->tpl_vars['k']->value = 0, $_smarty_tpl->tpl_vars['k']->iteration = 1;$_smarty_tpl->tpl_vars['k']->iteration <= $_smarty_tpl->tpl_vars['k']->total;$_smarty_tpl->tpl_vars['k']->value += $_smarty_tpl->tpl_vars['k']->step, $_smarty_tpl->tpl_vars['k']->iteration++) {
$_smarty_tpl->tpl_vars['k']->first = $_smarty_tpl->tpl_vars['k']->iteration == 1;$_smarty_tpl->tpl_vars['k']->last = $_smarty_tpl->tpl_vars['k']->iteration == $_smarty_tpl->tpl_vars['k']->total;?>
							<tr class="room_data_values" id="row_index<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data-rowKey="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
								<td class="col-sm-2 center">
									<input class="form-control" type="text" name="room_num[]">
								</td>
								<td class="col-sm-2 center">
									<input class="form-control" type="text" name="room_floor[]">
								</td>
								<td class="col-sm-2 center">
									<select class="form-control room_status" name="room_status[]">
										<?php  $_smarty_tpl->tpl_vars['room_stauts'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['room_stauts']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rm_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['room_stauts']->key => $_smarty_tpl->tpl_vars['room_stauts']->value) {
$_smarty_tpl->tpl_vars['room_stauts']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['room_stauts']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['room_stauts']->value['status'];?>
</option>
										<?php } ?>
									</select>
								</td>
								<td class="center col-sm-6">
									<a class="deactiveDatesModal" data-toggle="modal" data-target="#deactiveDatesModal" style="display: none;">
										<?php echo smartyTranslate(array('s'=>'add Dates','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

									</a>
									<input type="hidden" class="form-control disableDatesJSON" name="disableDatesJSON" value="0">
									<input type="text" class="form-control room_comment" name="room_comment[]">
								</td>
							</tr>
						<?php }} ?>
					<?php }?>
				</thead>
			</table>
			<div class="form-group">
				<div class="col-sm-12">
					<button id="add-more-rooms-button" class="btn btn-default" type="button" data-size="s" data-style="expand-right">
						<i class="icon-folder-open"></i>
						<?php echo smartyTranslate(array('s'=>'Add More Rooms','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</button>
				</div>
			</div>
		</div>
		<div class="panel-footer">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_REQUEST['page'])&&$_REQUEST['page']>1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);?>
<?php }?>" class="btn btn-default">
				<i class="process-icon-cancel"></i>
				<?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>

			</a>
			<button type="submit" name="submitAddproduct" class="btn btn-default pull-right checkConfigurationClick" disabled="disabled">
				<i class="process-icon-loading"></i>
				<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>

			</button>
			<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right checkConfigurationClick"  disabled="disabled">
				<i class="process-icon-loading"></i>
					<?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>

			</button>
		</div>
	</div>
<?php }?>


<div class="modal fade" id="deactiveDatesModal" tabindex="-1" role="dialog" aria-labelledby="deactiveDatesLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close margin-right-10" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><i class="icon-calendar"></i>&nbsp; <?php echo smartyTranslate(array('s'=>'Disable dates','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</h4>
			</div>
			<div class="modal-body">
				<div class="from-group table-responsive-row clearfix">
					<table class="table room-disable-dates">
						<thead>
							<tr class="nodrag nodrop">
								<th class="col-sm-1 center">
									<span><?php echo smartyTranslate(array('s'=>'Date From','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
								</th>
								<th class="col-sm-2 center">
									<span><?php echo smartyTranslate(array('s'=>'Date To','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
								</th>
								<th class="col-sm-2 center">
									<span><?php echo smartyTranslate(array('s'=>'Reason','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
								</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<div class="form-group">
						<div class="col-sm-12">
							<a href="#" class="add_more_room_disable_dates btn btn-default"><i class="icon icon-plus"></i><?php echo smartyTranslate(array('s'=>"Add More",'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</a>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default deactiveDatesModalSubmit"><?php echo smartyTranslate(array('s'=>'Done','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</button>
			</div>
		</div>
	</div>
</div>


<style>
	.deactiveDatesModal {
		cursor: pointer;
	}

	.hotel-room {
		border: 1px solid #f2f2f2;
		margin-top: 10px;
	}
</style>


<script>
	var prod_link = "<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts');?>
";
	var rm_status = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['rm_status']->value);?>
;
	var currentRoomRow = 0;
	var datesMissing = "<?php echo $_smarty_tpl->tpl_vars['datesMissing']->value;?>
";
	var datesOverlapping = "<?php echo $_smarty_tpl->tpl_vars['datesOverlapping']->value;?>
";

	$(document).ready(function() {
		// Disable dates data filling when model open
		$('#deactiveDatesModal').on('show.bs.modal', function (e) {
			$('.disabledDatesTr').remove();

			var modelTriggerElement = $(e.relatedTarget);
			var html = '';

			var rowKey = modelTriggerElement.closest(".room_data_values").attr('data-rowKey');
			currentRoomRow = rowKey;
			var disableDatesJSON = modelTriggerElement.siblings('input.disableDatesJSON').val();

			if (disableDatesJSON) {
				var disableDatesObj = JSON.parse(disableDatesJSON);
				$.each(disableDatesObj, function(disKey, disabledRange) {
					html += '<tr class="disabledDatesTr">';
						html += '<td class="col-sm-2 center">';
							html += '<input class="disabled_date_from form-control" type="text" value="'+disabledRange.date_from+'" name="disabled_date_from'+rowKey+'[]">';
						html += '</td>';
						html += '<td class="col-sm-2 center">';
							html += '<input class="disabled_date_to form-control" type="text" value="'+disabledRange.date_to+'" name="disabled_date_to'+rowKey+'[]">';
						html += '<td class="center col-sm-6">';
							html += '<input type="text" class="form-control room_disable_reason" value="'+disabledRange.reason+'" name="room_disable_reason'+rowKey+'[]">';
						html += '</td>';
						html += '<td class="center col-sm-1">';
							html += '<a href="#" class="remove-disable-dates-button btn btn-default"><i class="icon-trash"></i></a>';
						html += '</td>';
					html += '</tr>';
				});
			} else {
				html += '<tr class="disabledDatesTr">';
					html += '<td class="col-sm-2 center">';
						html += '<input class="disabled_date_from form-control" type="text" value="" name="disabled_date_from'+rowKey+'[]">';
					html += '</td>';
					html += '<td class="col-sm-2 center">';
						html += '<input class="disabled_date_to form-control" type="text" value="" name="disabled_date_to'+rowKey+'[]">';
					html += '<td class="center col-sm-6">';
						html += '<input type="text" class="form-control room_disable_reason" value="" name="room_disable_reason'+rowKey+'[]">';
					html += '</td>';
					html += '<td class="center col-sm-1">';
						html += '<a href="#" class="remove-disable-dates-button btn btn-default"><i class="icon-trash"></i></a>';
					html += '</td>';
				html += '</tr>';
			}

			$('.room-disable-dates').append(html);
		});

		// Disable dates data save when model open
		$(document).on('click', '.deactiveDatesModalSubmit', function() {
			var disableDates = new Array();
			var error = false;
			$.each($('.disabled_date_from'), function(key, val){
				var date_from =  $(this).val();
				var date_to = $('.disabled_date_to:eq('+key+')').val();
				if (date_from.trim() && date_to.trim()) {
					var obj = {
						'date_from': $(this).val(),
						'date_to': $('.disabled_date_to:eq('+key+')').val(),
						'reason': $('.room_disable_reason:eq('+key+')').val(),
					};
					disableDates.push(obj);
				} else {
					if (!(!date_from.trim() && !date_to.trim())) {
						error = datesMissing;
					}
				}

				$.each(disableDates, function(disKey, disabledRange) {
					if (key != disKey) {
                        if (((date_from < disabledRange.date_from) && (date_to <= disabledRange.date_from)) || ((date_from > disabledRange.date_from) && (date_from >= disabledRange.date_to))) {
                        } else {
                        	error = datesOverlapping;
                        }
                    }
				});
			});

			if (error) {
				alert(error);
				return false;
			} else {
				$('#deactiveDatesModal').modal('hide');
				$("#row_index"+currentRoomRow).find('.disableDatesJSON').val(JSON.stringify(disableDates));
				return true;
			}
		});

		// Add new room detail
		$('#add-more-rooms-button').on('click',function() {
			var lengthRooms = $('.room_data_values').length;
			html = '<tr class="room_data_values" id="row_index'+lengthRooms+'" data-rowKey="'+lengthRooms+'">';
				html += '<td class="col-sm-1 center">';
					html += '<input class="form-control" type="text" name="room_num[]">';
				html += '</td>';
				html += '<td class="col-sm-2 center">';
					html += '<input class="form-control" type="text" name="room_floor[]">';
				html += '</td>';
				html += '<td class="col-sm-2 center">';
					html += '<select class="form-control room_status" name="room_status[]">';
						$.each(rm_status, function(key, value)
						{
							html += '<option value="'+value.id+'">'+value.status+'</option>';
						});
					html += '</select>';
				html += '</td>';
				html += '<td class="center col-sm-6">';
					html += '<a class="btn btn-default deactiveDatesModal" data-toggle="modal" data-target="#deactiveDatesModal" style="display: none;">';
						html += "<?php echo smartyTranslate(array('s'=>'Add Dates','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
";
					html += '</a>';
					html += '<input type="hidden" class="form-control disableDatesJSON" name="disableDatesJSON[]" value="0">';
					html += '<input type="text" class="form-control room_comment" name="room_comment[]">';
				html += '</td>';
				html += '<td class="center col-sm-1">';
					html += '<a href="#" class="remove-rooms-button btn btn-default"><i class="icon-trash"></i></a>';
				html += '</td>';
			html += '</tr>';

			$('.hotel-room').append(html);
		});

		// delete room
		$('.rm_htl_room').on('click',function(e) {
			e.preventDefault();

			var id_htl_info = $(this).attr('data-id-htl-info');
			$.ajax({
	            url: prod_link,
	            type: 'POST',
	            dataType: 'text',
	            data: {
	            	ajax:true,
	            	action:'deleteHotelRoom',
	            	id: id_htl_info,
	            },
	            success: function (result)
	            {
	            	if (parseInt(result) == 1)
	            	{
		               	showSuccessMessage("<?php echo smartyTranslate(array('s'=>'Removed successfully'),$_smarty_tpl);?>
");
	            	}
	            }
	        });
			$(this).closest(".room_data_values").remove();
		});

		$(".checkConfigurationClick").on("click", function() {
			$("#checkConfSubmit").val(1);
			return true;
		});

		// New Room Row Remove
		$(document).on('click','.remove-rooms-button',function(e) {
			e.preventDefault();
			$(this).closest(".room_data_values").remove();
		});

		// on changing the room status as disabled for some date range.....
		$(document).on("change", ".room_status", function(){
			var status_val = $(this).val();
			if (status_val == 3) {
				$(this).closest('.room_data_values').find('.room_comment, .deactiveDatesModal').toggle();
			} else {
				$(this).closest('.room_data_values').find('.room_comment').show();
				$(this).closest('.room_data_values').find('.deactiveDatesModal').hide();
			}
		});

		$(document).on("focus", ".disabled_date_from, .disabled_date_to", function () {
			$(".disabled_date_from").datepicker({
		        showOtherMonths: true,
		        dateFormat: 'yy-mm-dd',
		        minDate: 0,
		        //for calender Css
		        onSelect: function(selectedDate) {
		            $(this).closest('tr').find(".disabled_date_to").datepicker("option", "minDate", selectedDate).val('');
		        },
		    });
		    $(".disabled_date_to").datepicker({
		        showOtherMonths: true,
		        dateFormat: 'yy-mm-dd',
		        minDate: 0,
		    });
		});

		$('.add_more_room_disable_dates').on('click',function() {
	    	var rowKey = $(this).closest(".room_data_values").attr('data-rowKey');
			html = '<tr class="disabledDatesTr">';
				html += '<td class="col-sm-2 center">';
					html += '<input class="disabled_date_from form-control" type="text" value="" name="disabled_date_from'+rowKey+'[]">';
				html += '</td>';
				html += '<td class="col-sm-2 center">';
					html += '<input class="disabled_date_to form-control" type="text" value="" name="disabled_date_to'+rowKey+'[]">';
				html += '<td class="center col-sm-6">';
					html += '<input type="text" class="form-control room_disable_reason" value="" name="room_disable_reason'+rowKey+'[]">';
				html += '</td>';
				html += '<td class="center col-sm-1">';
					html += '<a href="#" class="remove-disable-dates-button btn btn-default"><i class="icon-trash"></i></a>';
				html += '</td>';
			html += '</tr>';

			$('.room-disable-dates').append(html);
		});

		$(document).on('click','.remove-disable-dates-button',function(e) {
			e.preventDefault();
			$(this).closest('tr').remove();
		});
	});

</script><?php }} ?>
