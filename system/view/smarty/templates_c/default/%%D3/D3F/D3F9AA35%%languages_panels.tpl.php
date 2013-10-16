<?php /* Smarty version 2.6.26, created on 2012-04-17 07:31:54
         compiled from i18n/languages_panels.tpl */ ?>
	<div class="current_lang_block">
<?php if ($this->_tpl_vars['system_settings']['multilanguage_enabled']): ?>
	<?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['language_item']):
?>
	<?php if ($this->_tpl_vars['language_item']['active']): ?>
		<?php if ($this->_tpl_vars['language_item']['code'] != $this->_tpl_vars['current_language']): ?>
			<?php $this->assign('lang_code', $this->_tpl_vars['language_item']['code']); ?>
			<?php if ($this->_tpl_vars['lang_code'] != $this->_tpl_vars['system_settings']['default_language']): ?>
				<?php $this->assign('lang_segment', "lang/".($this->_tpl_vars['lang_code'])."/"); ?>
			<?php else: ?>
				<?php $this->assign('lang_segment', ""); ?>
			<?php endif; ?>
			
			<?php if ($this->_tpl_vars['CI']->config->item('enable_query_strings')): ?>
			<a class="noscript_language" style="opacity:0.3; filter:alpha(opacity=30); zoom:1;" href="<?php echo $this->_tpl_vars['VH']->base_url(); ?>
<?php echo $this->_tpl_vars['CI']->config->slash_item('index_page'); ?>
?route=/<?php echo $this->_tpl_vars['lang_segment']; ?>
<?php echo $this->_tpl_vars['uri_string']; ?>
" title="<?php echo $this->_tpl_vars['LANG_CHANGE_INTERFACE']; ?>
 <?php echo $this->_tpl_vars['language_item']['name']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/flags/<?php echo $this->_tpl_vars['language_item']['flag']; ?>
" height="24px" /></a>&nbsp;&nbsp;
			<?php else: ?>
			<a class="noscript_language" style="opacity:0.3; filter:alpha(opacity=30); zoom:1;" href="<?php echo $this->_tpl_vars['VH']->base_url(); ?>
<?php echo $this->_tpl_vars['CI']->config->slash_item('index_page'); ?>
<?php echo $this->_tpl_vars['lang_segment']; ?>
<?php echo $this->_tpl_vars['uri_string']; ?>
" title="<?php echo $this->_tpl_vars['LANG_CHANGE_INTERFACE']; ?>
 <?php echo $this->_tpl_vars['language_item']['name']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/flags/<?php echo $this->_tpl_vars['language_item']['flag']; ?>
" height="24px" /></a>&nbsp;&nbsp;
			<?php endif; ?>
		<?php else: ?>
			<img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/flags/<?php echo $this->_tpl_vars['language_item']['flag']; ?>
" height="24px" />&nbsp;&nbsp;
		<?php endif; ?>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
	</div>