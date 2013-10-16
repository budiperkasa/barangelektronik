<?php /* Smarty version 2.6.26, created on 2012-04-17 07:58:55
         compiled from payment/admin_search_invoices.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'payment/admin_search_invoices.tpl', 91, false),array('modifier', 'date_format', 'payment/admin_search_invoices.tpl', 135, false),array('function', 'asc_desc_insert', 'payment/admin_search_invoices.tpl', 94, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				<script language="javascript" type="text/javascript">
                var global_js_url = '<?php echo $this->_tpl_vars['base_url']; ?>
';
                
                <?php $this->assign('random_id', $this->_tpl_vars['VH']->genRandomString()); ?>
				var <?php echo $this->_tpl_vars['random_id']; ?>
_mode = '<?php echo $this->_tpl_vars['mode']; ?>
';
                
                jQuery( function($) {
					$('#search_owner').autocomplete({
						source: function(request, response) {
							$.post("<?php echo $this->_tpl_vars['VH']->site_url('admin/users/ajax_autocomplete_request/'); ?>
", {query: request.term}, function(data) {
								response($.map(data.suggestions, function(item) {
									return {
										label: item,
										value: item
									};
								}));
							}, "json");
						},
						minLength: 2,
						delay: 500,
						select: function(event, ui) {
							$(this).val(ui.item.label);
							return false;
						}
					});

               		// Form submit event
					$("#search_form").submit( function() {
						if (<?php echo $this->_tpl_vars['random_id']; ?>
_mode == 'single') {
							if ($("#search_tmstmp_creation_date").val() != '')
								global_js_url = global_js_url + "search_creation_date" + '/' + $("#search_tmstmp_creation_date").val() + '/';
							}
							if (<?php echo $this->_tpl_vars['random_id']; ?>
_mode == 'range') {
								if ($("#from_tmstmp_creation_date").val() != '')
									global_js_url = global_js_url + "search_from_creation_date" + '/' + $("#from_tmstmp_creation_date").val() + '/';
								if ($("#to_tmstmp_creation_date").val() != '')
									global_js_url = global_js_url + "search_to_creation_date" + '/' + $("#to_tmstmp_creation_date").val() + '/';
						}
						if ($("#search_owner").val() != '')
	                		global_js_url = global_js_url + 'search_owner/' + $("#search_owner").val() + '/';
	                	if ($("#search_status").val() != -1)
	                		global_js_url = global_js_url + 'search_status/' + $("#search_status").val() + '/';

                		window.location.href = global_js_url;
						return false;
					});
                });
                </script>

                <div class="content">
                     <h3><?php echo $this->_tpl_vars['LANG_SEARCH_INVOICES']; ?>
</h3>

				<form id="search_form" action="" method="post">
                     <div class="search_block">
                     	<div class="search_item">
                     		<label><?php echo $this->_tpl_vars['LANG_SEARCH_OWNER']; ?>
:</label>
                     		<input type="text" id="search_owner" size="25" value="<?php echo $this->_tpl_vars['args']['search_owner']; ?>
" style="width: 205px;">
                     	</div>
                     	<div class="search_item">
                     		<label><?php echo $this->_tpl_vars['LANG_SEARCH_STATUS']; ?>
:</label>
                     		<select id="search_status" style="min-width: 100px;">
                     			<option value="-1"><?php echo $this->_tpl_vars['LANG_STATUS_ANY']; ?>
</option>
                     			<option value="1" <?php if ($this->_tpl_vars['args']['search_status'] == 1): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['LANG_INVOICE_STATUS_NOTPAID']; ?>
</option>
                     			<option value="2" <?php if ($this->_tpl_vars['args']['search_status'] == 2): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['LANG_INVOICE_STATUS_PAID']; ?>
</option>
                     		</select>
                     	</div>
                     	
                     	<?php $this->assign('field_title', $this->_tpl_vars['LANG_PACKAGES_SEARCH_ADDITION_DATE']); ?>
	                    <?php $this->assign('search_mode', $this->_tpl_vars['mode']); ?>
	                    <?php $this->assign('date_var_name', 'creation_date'); ?>
	                    <?php $this->assign('single_date_var_value', $this->_tpl_vars['creation_date']); ?>
	                    <?php $this->assign('single_date_var_value_tmstmp', $this->_tpl_vars['creation_date_tmstmp']); ?>
	                    <?php $this->assign('from_date_var_value', $this->_tpl_vars['from_creation_date']); ?>
	                    <?php $this->assign('from_date_var_value_tmstmp', $this->_tpl_vars['from_creation_date_tmstmp']); ?>
	                    <?php $this->assign('to_date_var_value', $this->_tpl_vars['to_creation_date']); ?>
	                    <?php $this->assign('to_date_var_value_tmstmp', $this->_tpl_vars['to_creation_date_tmstmp']); ?>
	                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "content_fields/common_date_range_search.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
                    <div class="clear_float"></div>
                    <div class="search_item_button">
                    	<input type="submit" class="button search_button" id="process_search" value="<?php echo $this->_tpl_vars['LANG_BUTTON_SEARCH_INVOICES']; ?>
">
                    </div>
				</form>

                     <div class="search_results_title">
                     	<?php echo $this->_tpl_vars['LANG_SEARCH_INVOICES_RESULT_1']; ?>
 (<?php echo $this->_tpl_vars['invoices_count']; ?>
 <?php echo $this->_tpl_vars['LANG_SEARCH_INVOICES_RESULT_2']; ?>
):
                     </div>
                     
                     <?php if (count($this->_tpl_vars['invoices']) > 0): ?>
                     <table class="standardTable" border="0" cellpadding="2" cellspacing="2">
                       <tr>
                         <th><?php echo smarty_function_asc_desc_insert(array('base_url' => $this->_tpl_vars['search_url'],'orderby' => 'goods_category','orderby_query' => $this->_tpl_vars['orderby'],'direction' => $this->_tpl_vars['direction'],'title' => $this->_tpl_vars['LANG_PAYMENT_GOODS_CATEGORY']), $this);?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_PAYMENT_GOODS_TITLE']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_PAYMENT_INVOICE_OWNER']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_INVOICE_STATUS_TD']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_INVOICE_PRICE_TD']; ?>
</th>
                         <th><?php echo smarty_function_asc_desc_insert(array('base_url' => $this->_tpl_vars['search_url'],'orderby' => 'creation_date','orderby_query' => $this->_tpl_vars['orderby'],'direction' => $this->_tpl_vars['direction'],'title' => $this->_tpl_vars['LANG_INVOICE_CREATION_DATE']), $this);?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_OPTIONS_TH']; ?>
</th>
                       </tr>
                       <?php $_from = $this->_tpl_vars['invoices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['invoice']):
?>
                       <?php $this->assign('invoice_id', $this->_tpl_vars['invoice']->id); ?>
                       <?php $this->assign('goods_category', $this->_tpl_vars['invoice']->goods_category); ?>
                       <?php $this->assign('goods_id', $this->_tpl_vars['invoice']->goods_id); ?>
                       <?php $this->assign('owner_id', $this->_tpl_vars['invoice']->owner_id); ?>
                       <tr>
                         <td>
                         	<?php echo $this->_tpl_vars['invoice']->goods_content->name(); ?>

                         </td>
                         <td>
                         	<?php if ($this->_tpl_vars['invoice']->goods_content->goods_id && $this->_tpl_vars['invoice']->getViewUrl()): ?>
                            <a href="<?php echo $this->_tpl_vars['invoice']->getViewUrl(); ?>
" title="<?php echo $this->_tpl_vars['LANG_VIEW_ITEM_OPTION']; ?>
"><?php echo $this->_tpl_vars['invoice']->goods_title; ?>
</a>&nbsp;
                            <?php else: ?>
                            <?php echo $this->_tpl_vars['invoice']->goods_title; ?>

                            <?php endif; ?>
                         </td>
                         <td>
                         	<?php if ($this->_tpl_vars['invoice']->owner_id != 1 && $this->_tpl_vars['invoice']->owner_id != $this->_tpl_vars['session_user_id'] && $this->_tpl_vars['content_access_obj']->getUserAccess($this->_tpl_vars['owner_id'],'View all users')): ?>
                         	<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/users/profile/".($this->_tpl_vars['owner_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_VIEW_USER_OPTION']; ?>
"><?php echo $this->_tpl_vars['invoice']->owner->login; ?>
</a>
                         	<?php else: ?>
                         	<?php echo $this->_tpl_vars['invoice']->owner->login; ?>

                         	<?php endif; ?>
                         	&nbsp;
                         </td>
                         <td>
                         	<?php if ($this->_tpl_vars['invoice']->status == 1): ?><span class="status_notpaid"><?php echo $this->_tpl_vars['LANG_INVOICE_STATUS_NOTPAID']; ?>
</span><?php endif; ?>
                         	<?php if ($this->_tpl_vars['invoice']->status == 2): ?><span class="status_paid"><?php echo $this->_tpl_vars['LANG_INVOICE_STATUS_PAID']; ?>
</span><?php endif; ?>
                         	&nbsp;
                         </td>
                         <td>
                             <?php echo $this->_tpl_vars['invoice']->currency; ?>
&nbsp;<?php echo $this->_tpl_vars['VH']->number_format($this->_tpl_vars['invoice']->value,2,$this->_tpl_vars['decimals_separator'],$this->_tpl_vars['thousands_separator']); ?>

                         </td>
                         <td>
                             <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->creation_date)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D %T") : smarty_modifier_date_format($_tmp, "%D %T")); ?>
&nbsp;
                         </td>
                         <td>
                         	<nobr>
                         	<?php if (count($this->_tpl_vars['gateways']) && $this->_tpl_vars['invoice']->status == 1 && $this->_tpl_vars['invoice']->owner_id == $this->_tpl_vars['session_user_id'] && $this->_tpl_vars['invoice']->goods_content->goods_id): ?>
                         	<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/payment/invoices/pay/".($this->_tpl_vars['invoice_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_PAY_INVOICE_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/money_add.png"></a>&nbsp;
                         	<?php endif; ?>
                         	<?php if ($this->_tpl_vars['invoice']->status == 1 && $this->_tpl_vars['content_access_obj']->isPermission('Create transaction manually')): ?>
                         	<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/payment/transactions/create/".($this->_tpl_vars['invoice_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_CREATE_TRANSACTIONS_TITLE']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/transactions.png"></a>&nbsp;
                         	<?php endif; ?>
                         	<a href="#" onClick="$.jqURL.loc('<?php echo $this->_tpl_vars['VH']->site_url("admin/payment/invoices/print/".($this->_tpl_vars['invoice_id'])); ?>
', {w:550,h:700,wintype:'_blank'}); return false;" title="<?php echo $this->_tpl_vars['LANG_PRINT_INVOICE_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/icons/printer.png"></a>
                         	</nobr>
                         </td>
                       </tr>
                       <?php endforeach; endif; unset($_from); ?>
                     </table>
                     <?php echo $this->_tpl_vars['paginator']; ?>

                     <?php endif; ?>
                </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>