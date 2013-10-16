<?php /* Smarty version 2.6.26, created on 2012-04-17 08:24:22
         compiled from banners/admin_my_banners.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'banners/admin_my_banners.tpl', 23, false),array('modifier', 'date_format', 'banners/admin_my_banners.tpl', 94, false),array('function', 'asc_desc_insert', 'banners/admin_my_banners.tpl', 28, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				<script language="javascript" type="text/javascript">
				// Command variable, needs for delete banners button
				var action_cmd;

				function submit_banners_form()
				{
					$("#banners_form").attr("action", '<?php echo $this->_tpl_vars['VH']->site_url('admin/banners/'); ?>
' + action_cmd + '/');
					return true;
				}
				</script>

                <div class="content">
                     <h3><?php echo $this->_tpl_vars['LANG_MANAGE_BANNERS_1']; ?>
 (<?php echo $this->_tpl_vars['banners_count']; ?>
 <?php echo $this->_tpl_vars['LANG_MANAGE_BANNERS_2']; ?>
)</h3>
                     
                     <div class="admin_top_menu_cell">
	                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/create"); ?>
" title="<?php echo $this->_tpl_vars['LANG_CREATE_BANNER']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_add.png" /></a>
	                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/create"); ?>
"><?php echo $this->_tpl_vars['LANG_CREATE_BANNER']; ?>
</a>
	                 </div>
	                 <div class="clear_float"></div>

                     <?php if (count($this->_tpl_vars['banners']) > 0): ?>
                     <form id="banners_form" action="" method="post" onSubmit="submit_banners_form();">
                     <table class="standardTable" border="0" cellpadding="2" cellspacing="2">
                       <tr>
                         <th><input type="checkbox"></th>
                         <th><?php echo smarty_function_asc_desc_insert(array('base_url' => $this->_tpl_vars['search_url'],'orderby' => 'block_id','orderby_query' => $this->_tpl_vars['orderby'],'direction' => $this->_tpl_vars['direction'],'title' => $this->_tpl_vars['LANG_BANNERS_BLOCK_NAME_TH']), $this);?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNER_VIEWS_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNER_CLICKS_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_ACTIVE_PERIOD_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_CLICKS_LIMIT_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_LIMITATION_MODE_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNER_LINK_URL']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_STATUS_TH']; ?>
</th>
                         <th><?php echo smarty_function_asc_desc_insert(array('base_url' => $this->_tpl_vars['search_url'],'orderby' => 'creation_date','orderby_query' => $this->_tpl_vars['orderby'],'direction' => $this->_tpl_vars['direction'],'title' => $this->_tpl_vars['LANG_CREATION_DATE_TH']), $this);?>
</th>
                         <th><?php echo smarty_function_asc_desc_insert(array('base_url' => $this->_tpl_vars['search_url'],'orderby' => 'expiration_date','orderby_query' => $this->_tpl_vars['orderby'],'direction' => $this->_tpl_vars['direction'],'title' => $this->_tpl_vars['LANG_EXPIRATION_DATE_TH']), $this);?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNERS_EXPIRATION_CLICKS_COUNT']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_OPTIONS_TH']; ?>
</th>
                       </tr>
                       <?php $_from = $this->_tpl_vars['banners']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['banner']):
?>
                       <?php $this->assign('banner_id', $this->_tpl_vars['banner']->id); ?>
                       <tr>
                         <td>
                    	  	<input type="checkbox" name="cb_<?php echo $this->_tpl_vars['banner']->id; ?>
" value="<?php echo $this->_tpl_vars['banner']->id; ?>
">
                    	 </td>
                         <td>
                             <?php echo $this->_tpl_vars['banner']->block->name; ?>

                         </td>
                         <td>
                             <?php echo $this->_tpl_vars['banner']->views; ?>

                         </td>
                         <td>
                             <?php echo $this->_tpl_vars['banner']->clicks_count; ?>

                         </td>
                         <td title="<?php echo $this->_tpl_vars['LANG_PERIOD_TD_ALT']; ?>
">
                            <?php if ($this->_tpl_vars['banner']->block->limit_mode == 'active_period' || $this->_tpl_vars['banner']->block->limit_mode == 'both'): ?>
                         		<?php if ($this->_tpl_vars['banner']->block->active_years): ?>
									<?php echo $this->_tpl_vars['LANG_YEARS']; ?>
:&nbsp;<b><?php echo $this->_tpl_vars['banner']->block->active_years; ?>
</b><br />
								<?php endif; ?>
								<?php if ($this->_tpl_vars['banner']->block->active_months): ?>
									<?php echo $this->_tpl_vars['LANG_MONTHS']; ?>
:&nbsp;<b><?php echo $this->_tpl_vars['banner']->block->active_months; ?>
</b><br />
								<?php endif; ?>
								<?php if ($this->_tpl_vars['banner']->block->active_days): ?>
									<?php echo $this->_tpl_vars['LANG_DAYS']; ?>
:&nbsp;<b><?php echo $this->_tpl_vars['banner']->block->active_days; ?>
</b>
								<?php endif; ?>
                         	<?php else: ?>
                         		<span class="green"><?php echo $this->_tpl_vars['LANG_UNLIMITED']; ?>
</span>
                         	<?php endif; ?>
                         </td>
                         <td>
                            <?php if ($this->_tpl_vars['banner']->block->limit_mode == 'clicks' || $this->_tpl_vars['banner']->block->limit_mode == 'both'): ?>
                         		<?php echo $this->_tpl_vars['banner']->block->clicks_limit; ?>

                         	<?php else: ?>
                         		<span class="green"><?php echo $this->_tpl_vars['LANG_UNLIMITED']; ?>
</span>
                         	<?php endif; ?>
                         </td>
                         <td>
                             <?php if ($this->_tpl_vars['banner']->block->limit_mode == 'active_period'): ?><?php echo $this->_tpl_vars['LANG_BANNERS_ACTIVE_PERIOD_LIMITATION']; ?>
<?php endif; ?>
                             <?php if ($this->_tpl_vars['banner']->block->limit_mode == 'clicks'): ?><?php echo $this->_tpl_vars['LANG_BANNERS_CLICKS_LIMITATION']; ?>
<?php endif; ?>
                             <?php if ($this->_tpl_vars['banner']->block->limit_mode == 'both'): ?><?php echo $this->_tpl_vars['LANG_BANNERS_BOTH_LIMITATION']; ?>
<?php endif; ?>
                         </td>
                         <td>
                             <a href="<?php echo $this->_tpl_vars['banner']->url; ?>
" target="_blank"><?php echo $this->_tpl_vars['banner']->url; ?>
</a>
                         </td>
                         <td>
                         	<?php if ($this->_tpl_vars['banner']->status == 1): ?><a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/change_status/".($this->_tpl_vars['banner_id'])); ?>
" class="status_active" title="<?php echo $this->_tpl_vars['LANG_CHANGE_BANNER_STATUS_OPTION']; ?>
"><?php echo $this->_tpl_vars['LANG_STATUS_ACTIVE']; ?>
</a><?php endif; ?>
                         	<?php if ($this->_tpl_vars['banner']->status == 2): ?><a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/change_status/".($this->_tpl_vars['banner_id'])); ?>
" class="status_blocked" title="<?php echo $this->_tpl_vars['LANG_CHANGE_BANNER_STATUS_OPTION']; ?>
"><?php echo $this->_tpl_vars['LANG_STATUS_BLOCKED']; ?>
</a><?php endif; ?>
                         	<?php if ($this->_tpl_vars['banner']->status == 3): ?><span class="status_suspended"><?php echo $this->_tpl_vars['LANG_STATUS_SUSPENDED']; ?>
</span>&nbsp;<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/prolong/".($this->_tpl_vars['banner_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_PROLONG_ACTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/icons/date_add.png"></a><?php endif; ?>
                         	<?php if ($this->_tpl_vars['banner']->status == 4): ?><span class="status_notpaid"><?php echo $this->_tpl_vars['LANG_STATUS_NOTPAID']; ?>
</span>&nbsp;<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/payment/invoices/my/"); ?>
" title="<?php echo $this->_tpl_vars['LANG_VIEW_MY_INVOICES_MENU']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/money_add.png"></a><?php endif; ?>
                         	&nbsp;
                         </td>
                         <td>
                             <?php echo ((is_array($_tmp=$this->_tpl_vars['banner']->creation_date)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D %T") : smarty_modifier_date_format($_tmp, "%D %T")); ?>

                         </td>
                         <td>
                             <?php echo ((is_array($_tmp=$this->_tpl_vars['banner']->expiration_date)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D %T") : smarty_modifier_date_format($_tmp, "%D %T")); ?>

                         </td>
                         <td>
                             <?php if ($this->_tpl_vars['banner']->block->limit_mode == 'clicks' || $this->_tpl_vars['banner']->block->limit_mode == 'both'): ?>
                         		<?php echo $this->_tpl_vars['banner']->clicks_expiration_count; ?>

                             <?php else: ?>
                         		<span class="green"><?php echo $this->_tpl_vars['LANG_UNLIMITED']; ?>
</span>
                         	 <?php endif; ?>
                         </td>
                         <td>
                         	<nobr>
                         	 <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/view/".($this->_tpl_vars['banner_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_VIEW_BANNER_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/page.png"></a>
                             <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/edit/".($this->_tpl_vars['banner_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_EDIT_BANNER_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/page_edit.png"></a>
                             <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/delete/".($this->_tpl_vars['banner_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_DELETE_BANNER_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/page_delete.png"></a>
                            <nobr>
                         </td>
                       </tr>
                       <?php endforeach; endif; unset($_from); ?>
                     </table>
                     <?php echo $this->_tpl_vars['LANG_WITH_SELECTED']; ?>
:
	                 <select name="table_action" onchange="action_cmd=this.options[this.selectedIndex].value; submit_banners_form(); this.form.submit()">
	                 	<option value=""><?php echo $this->_tpl_vars['LANG_CHOOSE_ACTION']; ?>
</option>
	                 	<option value="delete"><?php echo $this->_tpl_vars['LANG_BUTTON_DELETE_BANNERS']; ?>
</option>
	                 </select>
                     </form>
                     <?php echo $this->_tpl_vars['paginator']; ?>

                     <?php endif; ?>
                </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>