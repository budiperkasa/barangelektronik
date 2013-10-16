<?php /* Smarty version 2.6.26, created on 2012-04-18 20:14:10
         compiled from email_sender/user_send.tpl */ ?>
<script type="text/javascript">
$(document).ready(function() {
	ajax_loader_hide();
	var options = {
		target: ".email_form",
		success:    function() {
			jGrowl_show_msg();
		}
	};
	$('#email_form').ajaxForm(options);
});
</script>
<div class="email_form">
	<?php echo $this->_tpl_vars['VH']->validation_errors(); ?>

	<form id="email_form" action="<?php echo $this->_tpl_vars['sender_url']; ?>
" method="post" style="width:350px">
	<?php if (! $this->_tpl_vars['session_user_id']): ?>
		<b><?php echo $this->_tpl_vars['LANG_YOUR_NAME']; ?>
</b>
		<div class="px2"></div>
		<input type="text" name="sender_name" value="<?php echo $this->_tpl_vars['sender_name']; ?>
" style="width:98%">
		<div class="px5"></div>
		<b><?php echo $this->_tpl_vars['LANG_YOUR_EMAIL']; ?>
</b><span class="red_asterisk">*</span>
		<div class="px2"></div>
		<input type="text" name="sender_email" value="<?php echo $this->_tpl_vars['sender_email']; ?>
" style="width:98%">
		<div class="px5"></div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['target'] == 'friend'): ?>
		<b><?php echo $this->_tpl_vars['LANG_RECIPIENT_NAME']; ?>
</b>
		<div class="px2"></div>
		<input type="text" name="recipient_name" value="<?php echo $this->_tpl_vars['recipient_name']; ?>
" style="width:98%">
		<div class="px5"></div>
		<b><?php echo $this->_tpl_vars['LANG_RECIPIENT_EMAIL']; ?>
</b><span class="red_asterisk">*</span>
		<div class="px2"></div>
		<input type="text" name="recipient_email" value="<?php echo $this->_tpl_vars['recipient_email']; ?>
" style="width:98%">
		<div class="px5"></div>
	<?php endif; ?>
	<b><?php echo $this->_tpl_vars['LANG_SUBJECT']; ?>
</b><span class="red_asterisk">*</span>
	<div class="px2"></div>
	<input type="text" name="subject" value="<?php echo $this->_tpl_vars['subject']; ?>
" style="width:98%">
	<div class="px5"></div>
	<b><?php echo $this->_tpl_vars['LANG_MESSAGE']; ?>
</b><span class="red_asterisk">*</span>
	<div class="px2"></div>
	<textarea name="body" style="width:98%" rows="9"><?php echo $this->_tpl_vars['body']; ?>
</textarea>
	<div class="px5"></div>
	<b><?php echo $this->_tpl_vars['LANG_FILL_CAPTCHA']; ?>
</b><span class="red_asterisk">*</span>
	<div class="px2"></div>
	<input type="text" name="captcha" size="4">
	<div class="px3"></div>
	<?php echo $this->_tpl_vars['captcha']->view(); ?>

	<div class="px5"></div>
	<input type="submit" onclick="ajax_loader_show();" name="submit" value="<?php echo $this->_tpl_vars['LANG_BUTTON_SEND']; ?>
">&nbsp;&nbsp;&nbsp;<input type="button" class="nyroModalClose" onclick="$.nyroModalRemove();" name="close" value="<?php echo $this->_tpl_vars['LANG_BUTTON_CLOSE']; ?>
">
	</form>
</div>