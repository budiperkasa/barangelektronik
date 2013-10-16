<?php /* Smarty version 2.6.26, created on 2012-04-17 08:22:27
         compiled from banners/admin_banners_blocks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'banners/admin_banners_blocks.tpl', 12, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <div class="content">
                     <h3><?php echo $this->_tpl_vars['LANG_BANNERS_ALL_BLOCKS']; ?>
</h3>

					<div class="admin_top_menu_cell">
	                    <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners_blocks/create"); ?>
" title="<?php echo $this->_tpl_vars['LANG_CREATE_BANNERS_BLOCK']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_add.png"></a>
	                    <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners_blocks/create"); ?>
"><?php echo $this->_tpl_vars['LANG_CREATE_BANNERS_BLOCK']; ?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
                    <div class="clear_float"></div>

                     <?php if (count($this->_tpl_vars['banners_blocks']) > 0): ?>
                     <table class="standardTable" border="0" cellpadding="2" cellspacing="2">
                       <tr>
                         <th><?php echo $this->_tpl_vars['LANG_ID_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_NAME_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_MODE_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_SELECTOR_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_SIZE_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_ACTIVE_PERIOD_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_CLICKS_LIMIT_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_LIMITATION_MODE_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_OPTIONS_TH']; ?>
</th>
                       </tr>
                       <?php $_from = $this->_tpl_vars['banners_blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['banners_block']):
?>
                       <?php $this->assign('banners_block_id', $this->_tpl_vars['banners_block']->id); ?>
                       <tr>
                       	 <td>
                             <?php echo $this->_tpl_vars['banners_block']->id; ?>

                         </td>
                         <td>
                             <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners_blocks/edit/".($this->_tpl_vars['banners_block_id'])); ?>
"><?php echo $this->_tpl_vars['banners_block']->name; ?>
</a>
                         </td>
                         <td>
                             <?php echo $this->_tpl_vars['banners_block']->mode; ?>

                         </td>
                         <td>
                             <?php echo $this->_tpl_vars['banners_block']->selector; ?>

                         </td>
                         <td>
                             <?php echo $this->_tpl_vars['banners_block']->block_size; ?>

                         </td>
                         <td title="<?php echo $this->_tpl_vars['LANG_PERIOD_TD_ALT']; ?>
">
                         	<?php if ($this->_tpl_vars['banners_block']->limit_mode == 'active_period' || $this->_tpl_vars['banners_block']->limit_mode == 'both'): ?>
                            	<?php echo $this->_tpl_vars['banners_block']->active_years; ?>
/<?php echo $this->_tpl_vars['banners_block']->active_months; ?>
/<?php echo $this->_tpl_vars['banners_block']->active_days; ?>

                            <?php else: ?>
                            	<span class="green"><?php echo $this->_tpl_vars['LANG_UNLIMITED']; ?>
</span>
                            <?php endif; ?>
                         </td>
                         <td>
                         	<?php if ($this->_tpl_vars['banners_block']->limit_mode == 'clicks' || $this->_tpl_vars['banners_block']->limit_mode == 'both'): ?>
                            	<?php echo $this->_tpl_vars['banners_block']->clicks_limit; ?>

                            <?php else: ?>
                            	<span class="green"><?php echo $this->_tpl_vars['LANG_UNLIMITED']; ?>
</span>
                            <?php endif; ?>
                         </td>
                         <td>
                             <?php if ($this->_tpl_vars['banners_block']->limit_mode == 'active_period'): ?><?php echo $this->_tpl_vars['LANG_BANNERS_ACTIVE_PERIOD_LIMITATION']; ?>
<?php endif; ?>
                             <?php if ($this->_tpl_vars['banners_block']->limit_mode == 'clicks'): ?><?php echo $this->_tpl_vars['LANG_BANNERS_CLICKS_LIMITATION']; ?>
<?php endif; ?>
                             <?php if ($this->_tpl_vars['banners_block']->limit_mode == 'both'): ?><?php echo $this->_tpl_vars['LANG_BANNERS_BOTH_LIMITATION']; ?>
<?php endif; ?>
                         </td>
                         <td>
                         	<nobr>
                             <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners_blocks/edit/".($this->_tpl_vars['banners_block_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_EDIT_BANNERS_BLOCK']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/page_edit.png"></a>
                             <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners_blocks/delete/".($this->_tpl_vars['banners_block_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_DELETE_BANNERS_BLOCK']; ?>
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