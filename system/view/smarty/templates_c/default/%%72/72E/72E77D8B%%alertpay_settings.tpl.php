<?php /* Smarty version 2.6.26, created on 2012-04-18 12:29:56
         compiled from alertpay/alertpay_settings.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				<div class="content">
					<?php echo $this->_tpl_vars['VH']->validation_errors(); ?>

					<h3><?php echo $this->_tpl_vars['LANG_ALERTPAY_SETTINGS']; ?>
</h3>

					<form action="" method="post">
					<div class="admin_option">
						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['LANG_ALERTPAY_EMAIL']; ?>
<span class="red_asterisk">*</span>
						</div>
						<input type="text" name="alertpay_email" value="<?php echo $this->_tpl_vars['alertpay_email']; ?>
" size="50">
					</div>
					<div class="admin_option">
						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['LANG_ALERTPAY_SECURITYCODE']; ?>
<span class="red_asterisk">*</span>
						</div>
						<div class="admin_option_description">
							<?php echo $this->_tpl_vars['LANG_ALERTPAY_SECURITYCODE_DESCR']; ?>

						</div>
						<input type="text" name="alertpay_securitycode" value="<?php echo $this->_tpl_vars['alertpay_securitycode']; ?>
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