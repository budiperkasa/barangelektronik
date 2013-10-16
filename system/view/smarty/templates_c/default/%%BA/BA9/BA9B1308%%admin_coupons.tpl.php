<?php /* Smarty version 2.6.26, created on 2012-04-18 09:33:44
         compiled from coupons/admin_coupons.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'coupons/admin_coupons.tpl', 11, false),array('modifier', 'nl2br', 'coupons/admin_coupons.tpl', 29, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				<div class="content">
					<h3><?php echo $this->_tpl_vars['LANG_MANAGE_COUPONS_TITLE']; ?>
</h3>
					
					<div class="admin_top_menu_cell" style="width: auto">
						<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/coupons/create"); ?>
" title="<?php echo $this->_tpl_vars['LANG_CREATE_COUPON_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_add.png"></a>
						<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/coupons/create"); ?>
"><?php echo $this->_tpl_vars['LANG_CREATE_COUPON_OPTION']; ?>
</a>
					</div>

					<?php if (count($this->_tpl_vars['coupons'])): ?>
					<table class="standardTable" border="0" cellpadding="2" cellspacing="2">
					<tr>
						<th><?php echo $this->_tpl_vars['LANG_COUPON_CODE']; ?>
</th>
						<th><?php echo $this->_tpl_vars['LANG_COUPON_DESCRIPTION']; ?>
</th>
						<th><?php echo $this->_tpl_vars['LANG_COUPON_USAGE_COUNT_LIMIT_ALL']; ?>
</th>
						<th><?php echo $this->_tpl_vars['LANG_COUPON_USAGE_COUNT_LIMIT_USER']; ?>
</th>
						<th><?php echo $this->_tpl_vars['LANG_COUPON_ALLOWED_GOODS']; ?>
</th>
						<th><?php echo $this->_tpl_vars['LANG_COUPON_VALUE']; ?>
</th>
						<th width="1"><?php echo $this->_tpl_vars['LANG_OPTIONS_TH']; ?>
</th>
					</tr>
					<?php $_from = $this->_tpl_vars['coupons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['coupon']):
?>
					<?php $this->assign('coupon_id', $this->_tpl_vars['coupon']->id); ?>
					<tr>
						<td>
							<nobr><?php echo $this->_tpl_vars['coupon']->code; ?>
</nobr>
						</td>
						<td>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['coupon']->description)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

						</td>
						<td>
							<?php if ($this->_tpl_vars['coupon']->usage_count_limit_all > 0): ?>
								<?php echo $this->_tpl_vars['coupon']->usage_count_limit_all; ?>

							<?php else: ?>
								<span class="green"><?php echo $this->_tpl_vars['LANG_UNLIMITED']; ?>
</span>
							<?php endif; ?>
						</td>
						<td>
							<?php if ($this->_tpl_vars['coupon']->usage_count_limit_user > 0): ?>
								<?php echo $this->_tpl_vars['coupon']->usage_count_limit_user; ?>

							<?php else: ?>
								<span class="green"><?php echo $this->_tpl_vars['LANG_UNLIMITED']; ?>
</span>
							<?php endif; ?>
						</td>
						<td>
							<?php if ($this->_tpl_vars['VH']->in_array('listings',$this->_tpl_vars['coupon']->allowed_goods)): ?><?php echo $this->_tpl_vars['LANG_LISTINGS_GOODS']; ?>
<br /><?php endif; ?>
							<?php if ($this->_tpl_vars['VH']->in_array('banners',$this->_tpl_vars['coupon']->allowed_goods)): ?><?php echo $this->_tpl_vars['LANG_BANNERS_GOODS']; ?>
<br /><?php endif; ?>
							<?php if ($this->_tpl_vars['VH']->in_array('packages',$this->_tpl_vars['coupon']->allowed_goods)): ?><?php echo $this->_tpl_vars['LANG_PACKAGES_GOODS']; ?>
<br /><?php endif; ?>
						</td>
						<td>
							<?php if ($this->_tpl_vars['coupon']->discount_type == 0): ?>
							<?php echo $this->_tpl_vars['coupon']->value; ?>
%
							<?php else: ?>
							<?php echo $this->_tpl_vars['coupon']->currency; ?>
 <?php echo $this->_tpl_vars['VH']->number_format($this->_tpl_vars['coupon']->value,2,$this->_tpl_vars['decimals_separator'],$this->_tpl_vars['thousands_separator']); ?>

							<?php endif; ?>
						</td>
						<td>
							<nobr>
								<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/coupons/edit/".($this->_tpl_vars['coupon_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_EDIT_COUPON_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/page_edit.png"></a>
								<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/coupons/delete/".($this->_tpl_vars['coupon_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_DELETE_COUPON_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/page_delete.png"></a>
							</nobr>
						</td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>
					</table>
					<?php endif; ?>
				</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>