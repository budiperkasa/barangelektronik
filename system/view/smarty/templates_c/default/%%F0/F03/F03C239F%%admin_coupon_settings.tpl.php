<?php /* Smarty version 2.6.26, created on 2012-04-18 09:36:09
         compiled from coupons/admin_coupon_settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate_content', 'coupons/admin_coupon_settings.tpl', 113, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('coupon_id', $this->_tpl_vars['coupon']->id); ?>

<script language="JavaScript" type="text/javascript">
$(document).ready(function() {
	$("input[name=discount_type]").click( function() {
		if ($('input[name="discount_type"]:checked').val() == 0) {
			$('#percent_value').show();
			$('#exact_value').hide();
		} else {
			$('#percent_value').hide();
			$('#exact_value').show();
		}
	});
	
	$("#effective_date").datepicker({
		showOn: "both",
		buttonImage: "<?php echo $this->_tpl_vars['public_path']; ?>
images/calendar.png",
		buttonImageOnly: true,
		showButtonPanel: true,
		closeText: 'Clear',
		onSelect: function(dateText) {
			if (dateText != '') {
				var sDate = $("#effective_date").datepicker("getDate");
				if (sDate) {
					sDate.setMinutes(sDate.getMinutes() - sDate.getTimezoneOffset());
					tmstmp_str = $.datepicker.formatDate('@', sDate)/1000;
				} else 
					tmstmp_str = 0;

				$("#effective_date_tmstmp").val(tmstmp_str);
				$("#expiration_date").datepicker('option', 'minDate', $("#effective_date").datepicker('getDate'));
				if ($("#effective_date").datepicker('getDate') > $("#expiration_date").datepicker('getDate')) {
					$("#expiration_date").val('');
				}
			} else {
				$("#effective_date_tmstmp").val('');
				$("#expiration_date").datepicker('option', 'minDate', null);
			}
		}
	});
	$("#effective_date").datepicker("option", $.datepicker.regional["<?php echo $this->_tpl_vars['current_language']; ?>
"]);

	$("#expiration_date").datepicker({
		showOn: "both",
		buttonImage: "<?php echo $this->_tpl_vars['public_path']; ?>
images/calendar.png",
		buttonImageOnly: true,
		showButtonPanel: true,
		closeText: 'Clear',
		onSelect: function(dateText) {
			if (dateText != '') {
				var sDate = $("#expiration_date").datepicker("getDate");
				if (sDate) {
					sDate.setMinutes(sDate.getMinutes() - sDate.getTimezoneOffset());
					tmstmp_str = $.datepicker.formatDate('@', sDate)/1000;
				} else 
					tmstmp_str = 0;

				$("#expiration_date_tmstmp").val(tmstmp_str);
				$("#effective_date").datepicker('option', 'maxDate', $("#expiration_date").datepicker('getDate'));
				if ($("#effective_date").datepicker('getDate') > $("#expiration_date").datepicker('getDate')) {
					$("#effective_date").val('');
				}
			} else {
				$("#expiration_date_tmstmp").val('');
				$("#effective_date").datepicker('option', 'maxDate', null);
			}
		}
	});
	$("#expiration_date").datepicker("option", $.datepicker.regional["<?php echo $this->_tpl_vars['current_language']; ?>
"]);

	<?php if ($this->_tpl_vars['coupon']->effective_date != '' && $this->_tpl_vars['coupon']->effective_date != '0000-00-00' && $this->_tpl_vars['coupon']->effective_date != '1970-01-01'): ?>
		$("#effective_date").datepicker('setDate', $.datepicker.parseDate('yy-mm-dd', '<?php echo $this->_tpl_vars['coupon']->effective_date; ?>
'));
		$("#expiration_date").datepicker('option', 'minDate', $("#effective_date").datepicker('getDate'));
	<?php endif; ?>
	<?php if ($this->_tpl_vars['coupon']->expiration_date != '' && $this->_tpl_vars['coupon']->expiration_date != '9999-12-31'): ?>
		$("#expiration_date").datepicker('setDate', $.datepicker.parseDate('yy-mm-dd', '<?php echo $this->_tpl_vars['coupon']->expiration_date; ?>
'));
		$("#effective_date").datepicker('option', 'maxDate', $("#expiration_date").datepicker('getDate'));
	<?php endif; ?>
});
</script>

				<div class="content">
					<?php echo $this->_tpl_vars['VH']->validation_errors(); ?>


					<h3><?php if ($this->_tpl_vars['coupon_id'] != 'new'): ?><?php echo $this->_tpl_vars['LANG_EDIT_COUPON_TITLE']; ?>
 "<?php echo $this->_tpl_vars['coupon']->code; ?>
"<?php else: ?><?php echo $this->_tpl_vars['LANG_CREATE_COUPON_TITLE']; ?>
<?php endif; ?></h3>
					<?php if ($this->_tpl_vars['coupon_id'] != 'new'): ?>
					<div class="admin_top_menu_cell">
						<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/coupons/create"); ?>
" title="<?php echo $this->_tpl_vars['LANG_CREATE_COUPON_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_add.png"></a>
						<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/coupons/create"); ?>
"><?php echo $this->_tpl_vars['LANG_CREATE_COUPON_OPTION']; ?>
</a>
					</div>
					<div class="admin_top_menu_cell">
						<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/coupons/delete/".($this->_tpl_vars['package_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_DELETE_COUPON_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_delete.png"></a>
						<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/coupons/delete/".($this->_tpl_vars['package_id'])); ?>
"><?php echo $this->_tpl_vars['LANG_DELETE_COUPON_OPTION']; ?>
</a>
					</div>
					<div class="clear_float"></div>
					<?php endif; ?>

					<form action="" method="post">
					<input type=hidden name="id" value="<?php echo $this->_tpl_vars['coupon_id']; ?>
">
					<div class="admin_option">
                     	<div class="admin_option_name" >
                     		<?php echo $this->_tpl_vars['LANG_COUPON_CODE']; ?>
<span class="red_asterisk">*</span>
						</div>
						<div class="admin_option_description" >
                     		<?php echo $this->_tpl_vars['LANG_COUPON_CODE_DESCR']; ?>

						</div>
						<input type="text" name="code" value="<?php echo $this->_tpl_vars['coupon']->code; ?>
" size="40" />
					</div>
					<div class="admin_option">
                     	<div class="admin_option_name" >
                     		<?php echo $this->_tpl_vars['LANG_COUPON_DESCRIPTION']; ?>

                          	<?php echo smarty_function_translate_content(array('table' => 'discount_coupons','field' => 'description','row_id' => $this->_tpl_vars['coupon_id']), $this);?>

						</div>
						<textarea name="description"><?php echo $this->_tpl_vars['coupon']->description; ?>
</textarea>
					</div>
					<div class="admin_option">
                     	<div class="admin_option_name" >
                     		<?php echo $this->_tpl_vars['LANG_COUPON_ALLOWED_GOODS']; ?>
<span class="red_asterisk">*</span>
						</div>
						<label><input type="checkbox" name="allowed_goods[]" value="listings" <?php if ($this->_tpl_vars['VH']->in_array('listings',$this->_tpl_vars['coupon']->allowed_goods)): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_LISTINGS_GOODS']; ?>
</label>
						<?php if ($this->_tpl_vars['CI']->load->is_module_loaded('banners')): ?>
						<label><input type="checkbox" name="allowed_goods[]" value="banners" <?php if ($this->_tpl_vars['VH']->in_array('banners',$this->_tpl_vars['coupon']->allowed_goods)): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_BANNERS_GOODS']; ?>
</label>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['CI']->load->is_module_loaded('packages')): ?>
						<label><input type="checkbox" name="allowed_goods[]" value="packages" <?php if ($this->_tpl_vars['VH']->in_array('packages',$this->_tpl_vars['coupon']->allowed_goods)): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_PACKAGES_GOODS']; ?>
</label>
						<?php endif; ?>
					</div>
					<div class="admin_option">
                     	<div class="admin_option_name" >
                     		<?php echo $this->_tpl_vars['LANG_COUPON_TYPE']; ?>
<span class="red_asterisk">*</span>
						</div>
						<label><input type="radio" name="discount_type" value="0" <?php if ($this->_tpl_vars['coupon']->discount_type == 0): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_COUPON_TYPE_PERCENTS']; ?>
</label>
						<label><input type="radio" name="discount_type" value="1" <?php if ($this->_tpl_vars['coupon']->discount_type == 1): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_COUPON_TYPE_EXACT_VALUE']; ?>
</label>
					</div>
					<div class="admin_option">
                     	<div class="admin_option_name" >
                     		<?php echo $this->_tpl_vars['LANG_COUPON_VALUE']; ?>
<span class="red_asterisk">*</span>
						</div>
						
						<div id="percent_value" <?php if ($this->_tpl_vars['coupon']->discount_type != 0): ?>style="display: none"<?php endif; ?>>
							<input type="text" name="percents_value" value="<?php echo $this->_tpl_vars['coupon']->value; ?>
" size="1" maxlength="5" /> %
						</div>
						<div id="exact_value" <?php if ($this->_tpl_vars['coupon']->discount_type != 1): ?>style="display: none"<?php endif; ?>>
							<select name="exact_value_currency" style="min-width: 40px;">
                     		<?php $_from = $this->_tpl_vars['currencies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currency']):
?>
                     			<option value="<?php echo $this->_tpl_vars['currency']; ?>
" <?php if ($this->_tpl_vars['coupon']->currency == $this->_tpl_vars['currency']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['currency']; ?>
</option>
                     		<?php endforeach; endif; unset($_from); ?>
                     		</select>&nbsp;
                     		<input type="text" name="exact_value" value="<?php echo $this->_tpl_vars['coupon']->value; ?>
" size="1" />
						</div>
					</div>
					<div class="admin_option">
                     	<div class="admin_option_name" >
                     		<?php echo $this->_tpl_vars['LANG_COUPON_ACTIVE_PERIOD']; ?>

						</div>
						<?php echo $this->_tpl_vars['LANG_COUPON_EFFECTIVE_DATE']; ?>
:&nbsp;
						<input type="text" size="10" value="" name="effective_date" id="effective_date"/>&nbsp;&nbsp;
						<input type="hidden" id="effective_date_tmstmp" name="effective_date_tmstmp" value="<?php echo $this->_tpl_vars['coupon']->effective_date_tmstmp; ?>
">

						<?php echo $this->_tpl_vars['LANG_COUPON_EXPIRATION_DATE']; ?>
:&nbsp;
						<input type="text" size="10" value="" name="expiration_date" id="expiration_date"/>&nbsp;&nbsp;
						<input type="hidden" id="expiration_date_tmstmp" name="expiration_date_tmstmp" value="<?php echo $this->_tpl_vars['coupon']->expiration_date_tmstmp; ?>
">
					</div>
					<div class="admin_option">
                     	<div class="admin_option_name" >
                     		<?php echo $this->_tpl_vars['LANG_COUPON_USAGE_COUNT_LIMIT_ALL']; ?>
<span class="red_asterisk">*</span>
						</div>
						<div class="admin_option_description" >
                     		<?php echo $this->_tpl_vars['LANG_ZERO_FOR_UNLIMITED']; ?>

						</div>
						<input type="text" size="2" value="<?php echo $this->_tpl_vars['coupon']->usage_count_limit_all; ?>
" name="usage_count_limit_all" />
					</div>
					<div class="admin_option">
                     	<div class="admin_option_name" >
                     		<?php echo $this->_tpl_vars['LANG_COUPON_USAGE_COUNT_LIMIT_USER']; ?>
<span class="red_asterisk">*</span>
						</div>
						<div class="admin_option_description" >
                     		<?php echo $this->_tpl_vars['LANG_ZERO_FOR_UNLIMITED']; ?>

						</div>
						<input type="text" size="2" value="<?php echo $this->_tpl_vars['coupon']->usage_count_limit_user; ?>
" name="usage_count_limit_user" />
					</div>
					<div class="admin_option">
                     	<div class="admin_option_name" >
                     		<?php echo $this->_tpl_vars['LANG_COUPON_USE_IF_ASSIGNED']; ?>
<span class="red_asterisk">*</span>
						</div>
						<label><input type="radio" name="use_if_assigned" value="0" <?php if ($this->_tpl_vars['coupon']->use_if_assigned == 0): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_COUPON_USE_IF_ASSIGNED_FALSE']; ?>
</label>
						<label><input type="radio" name="use_if_assigned" value="1" <?php if ($this->_tpl_vars['coupon']->use_if_assigned == 1): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_COUPON_USE_IF_ASSIGNED_TRUE']; ?>
</label>
					</div>
					<div class="admin_option">
                     	<div class="admin_option_name" >
                     		<?php echo $this->_tpl_vars['LANG_COUPON_ASSIGN_EVENTS']; ?>
<span class="red_asterisk">*</span>
						</div>
						<div class="admin_option_description" >
                     		<?php echo $this->_tpl_vars['LANG_COUPON_ASSIGN_EVENTS_DESCR']; ?>

						</div>
						<label><input type="checkbox" name="assign_events[]" value="first_listing_creation" <?php if ($this->_tpl_vars['VH']->in_array('first_listing_creation',$this->_tpl_vars['coupon']->assign_events)): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_COUPON_ASSIGN_EVENT_FIRST_LISTING']; ?>
</label>
						<label><input type="checkbox" name="assign_events[]" value="any_listing_creation" <?php if ($this->_tpl_vars['VH']->in_array('any_listing_creation',$this->_tpl_vars['coupon']->assign_events)): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_COUPON_ASSIGN_EVENT_ANY_LISTING']; ?>
</label>
						<?php if ($this->_tpl_vars['CI']->load->is_module_loaded('banners')): ?>
						<label><input type="checkbox" name="assign_events[]" value="first_banner_creation" <?php if ($this->_tpl_vars['VH']->in_array('first_banner_creation',$this->_tpl_vars['coupon']->assign_events)): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_COUPON_ASSIGN_EVENT_FIRST_BANNER']; ?>
</label>
						<label><input type="checkbox" name="assign_events[]" value="any_banner_creation" <?php if ($this->_tpl_vars['VH']->in_array('any_banner_creation',$this->_tpl_vars['coupon']->assign_events)): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_COUPON_ASSIGN_EVENT_ANY_BANNER']; ?>
</label>
						<?php endif; ?>
						<label><input type="checkbox" name="assign_events[]" value="first_transaction" <?php if ($this->_tpl_vars['VH']->in_array('first_transaction',$this->_tpl_vars['coupon']->assign_events)): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_COUPON_ASSIGN_EVENT_FIRST_TRANSACTION']; ?>
</label>
						<label><input type="checkbox" name="assign_events[]" value="any_transaction" <?php if ($this->_tpl_vars['VH']->in_array('any_transaction',$this->_tpl_vars['coupon']->assign_events)): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_COUPON_ASSIGN_EVENT_ANY_TRANSACTION']; ?>
</label>
						<label><input type="checkbox" name="assign_events[]" value="registration" <?php if ($this->_tpl_vars['VH']->in_array('registration',$this->_tpl_vars['coupon']->assign_events)): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_COUPON_ASSIGN_EVENT_REGISTRATION']; ?>
</label>
						<label><input type="checkbox" name="assign_events[]" value="custom_users" <?php if ($this->_tpl_vars['VH']->in_array('custom_users',$this->_tpl_vars['coupon']->assign_events)): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_COUPON_ASSIGN_EVENT_CUSTOM_USERS']; ?>
</label>
					</div>

                    <input class="button save_button" type=submit name="submit" value="<?php if ($this->_tpl_vars['coupon_id'] != 'new'): ?><?php echo $this->_tpl_vars['LANG_BUTTON_SAVE_CHANGES']; ?>
<?php else: ?><?php echo $this->_tpl_vars['LANG_BUTTON_CREATE_COUPON']; ?>
<?php endif; ?>">
                    </form>
                </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>