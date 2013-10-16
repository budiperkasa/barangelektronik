<?php /* Smarty version 2.6.26, created on 2012-04-17 07:46:01
         compiled from banners/admin_payment_banners_manage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'banners/admin_payment_banners_manage.tpl', 5, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <div class="content">
                     <h3><?php echo $this->_tpl_vars['LANG_BANNERS_PRICE']; ?>
</h3>
                     <?php if (count($this->_tpl_vars['banners_blocks']) && count($this->_tpl_vars['users_groups'])): ?>
                     <table class="presentationTable" border="0" cellpadding="2" cellspacing="2">
                       <tr>
                         <th><?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_NAME_TH']; ?>
</th>
                         <?php $_from = $this->_tpl_vars['users_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
                         <td class="td_header"><?php echo $this->_tpl_vars['group']->name; ?>
</td>
                         <?php endforeach; endif; unset($_from); ?>
                       </tr>
                       <?php $_from = $this->_tpl_vars['banners_blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
                       <?php $this->assign('block_id', $this->_tpl_vars['block']->id); ?>
                       <tr>
                         <td class="td_header">
                         	<?php echo $this->_tpl_vars['block']->name; ?>

                         </td>
                         <?php $_from = $this->_tpl_vars['users_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
                         <?php $this->assign('group_id', $this->_tpl_vars['group']->id); ?>
                         <td>
                         	<a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/payment/settings/group_id/".($this->_tpl_vars['group_id'])."/block_id/".($this->_tpl_vars['block_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_BANNERS_PRICE_OPTION_1']; ?>
 '<?php echo $this->_tpl_vars['block']->name; ?>
' <?php echo $this->_tpl_vars['LANG_BANNERS_PRICE_OPTION_2']; ?>
 '<?php echo $this->_tpl_vars['group']->name; ?>
'"><?php if ($this->_tpl_vars['prices'][$this->_tpl_vars['block_id']][$this->_tpl_vars['group_id']]['value'] == null || $this->_tpl_vars['prices'][$this->_tpl_vars['block_id']][$this->_tpl_vars['group_id']]['value'] == 0): ?><?php echo $this->_tpl_vars['LANG_FREE']; ?>
<?php else: ?><?php echo $this->_tpl_vars['prices'][$this->_tpl_vars['block_id']][$this->_tpl_vars['group_id']]['currency']; ?>
 <?php echo $this->_tpl_vars['VH']->number_format($this->_tpl_vars['prices'][$this->_tpl_vars['block_id']][$this->_tpl_vars['group_id']]['value'],2,$this->_tpl_vars['decimals_separator'],$this->_tpl_vars['thousands_separator']); ?>
<?php endif; ?></a>
                         </td>
                         <?php endforeach; endif; unset($_from); ?>
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