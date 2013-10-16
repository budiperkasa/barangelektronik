<?php /* Smarty version 2.6.26, created on 2012-04-17 07:49:02
         compiled from packages/admin_packages_settings.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				<div class="content">
					<?php echo $this->_tpl_vars['VH']->validation_errors(); ?>

					<h3><?php echo $this->_tpl_vars['LANG_SETTINGS_LISTINGS_CREATION_MODE']; ?>
</h3>
					<form action="" method="post">
					<div class="admin_option">
						<label><input type="radio" name="packages_listings_creation_mode" value="standalone_mode" <?php if ($this->_tpl_vars['system_settings']['packages_listings_creation_mode'] == 'standalone_mode'): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_SETTINGS_LISTINGS_CREATION_MODE_STANDALONE']; ?>
</label>
						<label><input type="radio" name="packages_listings_creation_mode" value="memberships_mode" <?php if ($this->_tpl_vars['system_settings']['packages_listings_creation_mode'] == 'memberships_mode'): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_SETTINGS_LISTINGS_CREATION_MODE_MEMBERSHIPS']; ?>
</label>
						<label><input type="radio" name="packages_listings_creation_mode" value="both_mode" <?php if ($this->_tpl_vars['system_settings']['packages_listings_creation_mode'] == 'both_mode'): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_SETTINGS_LISTINGS_CREATION_MODE_BOTH']; ?>
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