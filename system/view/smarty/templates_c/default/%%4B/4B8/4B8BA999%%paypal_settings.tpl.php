<?php /* Smarty version 2.6.26, created on 2012-04-17 07:58:46
         compiled from paypal/paypal_settings.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				<div class="content">
					<?php echo $this->_tpl_vars['VH']->validation_errors(); ?>

					<h3><?php echo $this->_tpl_vars['LANG_PAYPAL_SETTINGS']; ?>
</h3>

					<form action="" method="post">
					<div class="admin_option">
						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['LANG_PAYPAL_EMAIL']; ?>
<span class="red_asterisk">*</span>
						</div>
						<input type="text" name="paypal_email" value="<?php echo $this->_tpl_vars['paypal_email']; ?>
" size="50">
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