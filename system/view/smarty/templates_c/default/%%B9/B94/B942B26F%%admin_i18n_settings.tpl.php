<?php /* Smarty version 2.6.26, created on 2012-04-17 08:37:56
         compiled from i18n/admin_i18n_settings.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <div class="content">
                	<?php echo $this->_tpl_vars['VH']->validation_errors(); ?>

                    <h3><?php echo $this->_tpl_vars['LANG_I18N_SETTINGS_TITLE']; ?>
</h3>

                    <form action="" method="post">
					<div class="admin_option">
						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['LANG_DEFUALT_LANGUAGE']; ?>

						</div>
						<div class="admin_option_description">
							<?php echo $this->_tpl_vars['LANG_DEFUALT_LANGUAGE_DESCR']; ?>

						</div>
						<select name="default_language">
							<?php $_from = $this->_tpl_vars['languages_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['language']):
?>
								<option value="<?php echo $this->_tpl_vars['language']['code']; ?>
" <?php if ($this->_tpl_vars['system_settings']['default_language'] == $this->_tpl_vars['language']['code']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['language']['name']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</div>
					<div class="admin_option">
						<div class="admin_option_name">
						<?php echo $this->_tpl_vars['LANG_ENABLE_MULTILANGUAGE']; ?>

						</div>
						<div class="admin_option_description">
							<?php echo $this->_tpl_vars['LANG_ENABLE_MULTILANGUAGE_DESCR']; ?>

						</div>
						<label><input type="checkbox" name="multilanguage_enabled" value="1" <?php if ($this->_tpl_vars['system_settings']['multilanguage_enabled'] == 1): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_ENABLE']; ?>
</label>
					</div>
					<div class="admin_option">
						<div class="admin_option_name">
						<?php echo $this->_tpl_vars['LANG_ENABLE_LANG_AREAS']; ?>

						</div>
						<div class="admin_option_description">
							<?php echo $this->_tpl_vars['LANG_ENABLE_LANG_AREAS_DESCR']; ?>

						</div>
						<label><input type="checkbox" name="language_areas_enabled" value="1" <?php if ($this->_tpl_vars['system_settings']['language_areas_enabled'] == 1): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_ENABLE']; ?>
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