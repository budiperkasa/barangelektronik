<?php /* Smarty version 2.6.26, created on 2012-04-17 07:50:10
         compiled from calendar/admin_calendar_settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate_content', 'calendar/admin_calendar_settings.tpl', 26, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <div class="content">
                	<?php echo $this->_tpl_vars['VH']->validation_errors(); ?>

                     <h3><?php echo $this->_tpl_vars['LANG_CALENDAR_SETTINGS_TITLE']; ?>
</h3>

                     <form action="" method="post">
                     <div class="admin_option">
                          <div class="admin_option_name" >
                          	<?php echo $this->_tpl_vars['LANG_CALENDAR_TYPE']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <select name="connected_type_select" onChange="this.form.submit()">
                          	<option value="0" <?php if ($this->_tpl_vars['connected_type_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['LANG_CALENDAR_ANY_TYPE']; ?>
</option>
                          	<?php $_from = $this->_tpl_vars['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type']):
?>
                          		<option value="<?php echo $this->_tpl_vars['type']->id; ?>
" <?php if ($this->_tpl_vars['type']->id == $this->_tpl_vars['connected_type_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['type']->name; ?>
</option>
                          	<?php endforeach; endif; unset($_from); ?>
                          </select>
                     </div>
                     </form>

                     <form action="" method="post">
                     <input type="hidden" name="connected_type_id" value="<?php echo $this->_tpl_vars['connected_type_id']; ?>
" />
                     <div class="admin_option">
                          <div class="admin_option_name" >
                          	<?php echo $this->_tpl_vars['LANG_CALENDAR_NAME']; ?>
<span class="red_asterisk">*</span>
                          	<?php echo smarty_function_translate_content(array('table' => 'calendar_settings','field' => 'name','row_id' => 1), $this);?>

                          </div>
                          <input type=text name="name" value="<?php echo $this->_tpl_vars['settings']['name']; ?>
" size="40" class="admin_option_input">
                     </div>
                     <div class="admin_option">
                          <div class="admin_option_name" >
                          	<?php echo $this->_tpl_vars['LANG_CALENDAR_FIELD']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <select name="connected_field">
                          	<option value="search_creation_date" <?php if ($this->_tpl_vars['settings']['connected_field'] == 'search_creation_date'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['LANG_CALENDAR_SEARCH_BY_CREATION_DATE']; ?>
</option>
                          	<?php $_from = $this->_tpl_vars['search_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_item']):
?>
                          		<option value="<?php echo $this->_tpl_vars['field_item']['field_id']; ?>
" <?php if ($this->_tpl_vars['settings']['connected_field'] == $this->_tpl_vars['field_item']['field_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['field_item']['name']; ?>
</option>
                          	<?php endforeach; endif; unset($_from); ?>
                          </select>
                     </div>
                     <div class="admin_option">
                          <div class="admin_option_name" >
                          	<?php echo $this->_tpl_vars['LANG_CALENDAR_VISIBILITY_INDEX']; ?>

                          </div>
                          <label><input type="radio" name="visibility_on_index" value="1" <?php if ($this->_tpl_vars['settings']['visibility_on_index']): ?>checked<?php endif; ?>/> <?php echo $this->_tpl_vars['LANG_VISIBILE']; ?>
</label>
                          <label><input type="radio" name="visibility_on_index" value="0" <?php if (! $this->_tpl_vars['settings']['visibility_on_index']): ?>checked<?php endif; ?>/> <?php echo $this->_tpl_vars['LANG_NOT_VISIBILE']; ?>
</label>
                     </div>
                     <div class="admin_option">
                          <div class="admin_option_name" >
                          	<?php echo $this->_tpl_vars['LANG_CALENDAR_VISIBILITY_FOR_TYPES']; ?>

                          </div>
                          <label><input type="radio" name="visibility_for_all_types" value="1" <?php if ($this->_tpl_vars['settings']['visibility_for_all_types']): ?>checked<?php endif; ?>/> <?php echo $this->_tpl_vars['LANG_CALENDAR_VISIBILITY_FOR_ALL_TYPES']; ?>
</label>
                          <label><input type="radio" name="visibility_for_all_types" value="0" <?php if (! $this->_tpl_vars['settings']['visibility_for_all_types']): ?>checked<?php endif; ?>/> <?php echo $this->_tpl_vars['LANG_CALENDAR_VISIBILITY_FOR_CONNECTED_TYPE']; ?>
</label>
                     </div>

                     <input class="button save_button" type=submit name="submit" value="<?php echo $this->_tpl_vars['LANG_BUTTON_SAVE_CHANGES']; ?>
">
                     </form>
                </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>