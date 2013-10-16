<?php /* Smarty version 2.6.26, created on 2012-04-17 08:21:43
         compiled from users/admin_content_permissions_manage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'users/admin_content_permissions_manage.tpl', 6, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <div class="content">
                     <h3><?php echo $this->_tpl_vars['LANG_CONTENT_PERMISSIONS']; ?>
</h3>
                     <h4><?php echo $this->_tpl_vars['LANG_CONTENT_PERMISSIONS_DESCR']; ?>
</h4>
                     <?php if (count($this->_tpl_vars['types']) && count($this->_tpl_vars['users_groups'])): ?>
                     <form action="" method="post">
                     <table class="presentationTable" border="0" cellpadding="2" cellspacing="2">
                       <tr>
                       	 <?php if (! $this->_tpl_vars['system_settings']['single_type_structure']): ?>
                         <th><?php echo $this->_tpl_vars['LANG_TYPE_TH']; ?>
</th>
                         <?php endif; ?>
                         <th><?php echo $this->_tpl_vars['LANG_LEVEL_TH']; ?>
 \ <?php echo $this->_tpl_vars['LANG_USERS_GROUP_TH']; ?>
</th>
                         <?php $_from = $this->_tpl_vars['users_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
                         <td class="td_header"><?php echo $this->_tpl_vars['group']->name; ?>
</td>
                         <?php endforeach; endif; unset($_from); ?>
                       </tr>
                       <?php $_from = $this->_tpl_vars['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type']):
?>
                       <tr>
                       	 <?php if (! $this->_tpl_vars['system_settings']['single_type_structure']): ?>
                         <td class="td_header">
                         	<?php echo $this->_tpl_vars['type']->name; ?>

                         </td>
                         <?php endif; ?>
                         <td class="td_header">
                         	<?php if (count($this->_tpl_vars['type']->levels) > 0): ?>
                         	<table width="100%" border="0" cellpadding="0" cellspacing="0">
                         		<?php $_from = $this->_tpl_vars['type']->levels; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['level']):
?>
                         		<tr>
                         			<td width="100%" style="border: 0;">
                         			<?php echo $this->_tpl_vars['level']->name; ?>

                         			</td>
                         		</tr>
                         		<?php endforeach; endif; unset($_from); ?>
                         	</table>
                         	<?php else: ?>
                         	&nbsp;
                         	<?php endif; ?>
                         </td>
                         <?php $_from = $this->_tpl_vars['users_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
                         <?php $this->assign('group_id', $this->_tpl_vars['group']->id); ?>
                         <td>
                            <?php if (count($this->_tpl_vars['type']->levels) > 0): ?>
                         	<table width="100%" border="0" cellpadding="0" cellspacing="0">
                         		<?php $_from = $this->_tpl_vars['type']->levels; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['level']):
?>
                         		<?php $this->assign('level_id', $this->_tpl_vars['level']->id); ?>
                         		<tr>
                         			<td  style="border: 0;">
                         				<input type="checkbox" name="<?php echo $this->_tpl_vars['group_id']; ?>
-<?php echo $this->_tpl_vars['level_id']; ?>
" value="<?php echo $this->_tpl_vars['group_id']; ?>
:<?php echo $this->_tpl_vars['level_id']; ?>
" <?php $_from = $this->_tpl_vars['content_permissions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cp']):
?><?php if ($this->_tpl_vars['cp']['group_id'] == $this->_tpl_vars['group_id'] && $this->_tpl_vars['cp']['object_id'] == $this->_tpl_vars['level_id']): ?>checked<?php endif; ?><?php endforeach; endif; unset($_from); ?> />
                         			</td>
                         		</tr>
                         		<?php endforeach; endif; unset($_from); ?>
                         	</table>
                         	<?php else: ?>
                         	&nbsp;
                         	<?php endif; ?>
                         </td>
                         <?php endforeach; endif; unset($_from); ?>
                       </tr>
                       <?php endforeach; endif; unset($_from); ?>
                     </table>

                     <input class="button save_button" type=submit name="submit" value="<?php echo $this->_tpl_vars['LANG_BUTTON_SAVE_CHANGES']; ?>
">
                     </form>
                     <?php endif; ?>
                </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>