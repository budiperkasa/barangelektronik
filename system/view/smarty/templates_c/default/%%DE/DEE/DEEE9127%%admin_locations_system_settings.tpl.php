<?php /* Smarty version 2.6.26, created on 2012-04-17 07:51:48
         compiled from locations/admin_locations_system_settings.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <div class="content">
                	 <?php echo $this->_tpl_vars['VH']->validation_errors(); ?>

                     <h3><?php echo $this->_tpl_vars['LANG_LOCATIONS_SETTINGS_TITLE']; ?>
</h3>

                     <form action="" method="post">
                     <div class="admin_option">
                          <div class="admin_option_name" >
                          	<?php echo $this->_tpl_vars['LANG_PREDEFINED_LOCATIONS_MODE']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <label><input type="radio" name="predefined_locations_mode" value="disabled" <?php if ($this->_tpl_vars['settings']['predefined_locations_mode'] == 'disabled'): ?>checked<?php endif; ?> class="admin_option_input"> <?php echo $this->_tpl_vars['LANG_PREDEFINED_LOCATIONS_MODE_DISABLED']; ?>
</label>
                          <label><input type="radio" name="predefined_locations_mode" value="only" <?php if ($this->_tpl_vars['settings']['predefined_locations_mode'] == 'only'): ?>checked<?php endif; ?> class="admin_option_input"> <?php echo $this->_tpl_vars['LANG_PREDEFINED_LOCATIONS_MODE_ONLY']; ?>
</label>
                          <label><input type="radio" name="predefined_locations_mode" value="global" <?php if ($this->_tpl_vars['settings']['predefined_locations_mode'] == 'global'): ?>checked<?php endif; ?> class="admin_option_input"> <?php echo $this->_tpl_vars['LANG_PREDEFINED_LOCATIONS_MODE_GLOBAL']; ?>
</label>
                          <label><input type="radio" name="predefined_locations_mode" value="prefered" <?php if ($this->_tpl_vars['settings']['predefined_locations_mode'] == 'prefered'): ?>checked<?php endif; ?> class="admin_option_input"> <?php echo $this->_tpl_vars['LANG_PREDEFINED_LOCATIONS_MODE_PREFERED']; ?>
</label>
                          <label><input type="radio" name="predefined_locations_mode" value="hide" <?php if ($this->_tpl_vars['settings']['predefined_locations_mode'] == 'hide'): ?>checked<?php endif; ?> class="admin_option_input"> <?php echo $this->_tpl_vars['LANG_PREDEFINED_LOCATIONS_MODE_HIDE']; ?>
</label>
                     </div>
                     
                     <div class="admin_option">
                          <div class="admin_option_name" >
                          	<?php echo $this->_tpl_vars['LANG_GEOCODED_LOCATIONS_MODE']; ?>

                          </div>
                          <label><input type="checkbox" name="geocoded_locations_mode_districts" value="use_districts" <?php if ($this->_tpl_vars['settings']['geocoded_locations_mode_districts']): ?>checked<?php endif; ?> class="admin_option_input"> <?php echo $this->_tpl_vars['LANG_PREDEFINED_LOCATIONS_MODE_UDE_DISTRICTS']; ?>
</label>
                          <label><input type="checkbox" name="geocoded_locations_mode_provinces" value="use_provinces" <?php if ($this->_tpl_vars['settings']['geocoded_locations_mode_provinces']): ?>checked<?php endif; ?> class="admin_option_input"> <?php echo $this->_tpl_vars['LANG_PREDEFINED_LOCATIONS_MODE_UDE_PROVINCES']; ?>
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