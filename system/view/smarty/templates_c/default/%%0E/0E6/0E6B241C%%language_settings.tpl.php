<?php /* Smarty version 2.6.26, created on 2012-04-17 08:39:08
         compiled from i18n/language_settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'i18n/language_settings.tpl', 123, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('language_id', $this->_tpl_vars['language']->id); ?>

<?php if ($this->_tpl_vars['language']->id == 'new'): ?>
				<script type="text/javascript">
					$(document).ready(function(){
						$(".save_button").click(function() {
							if (!$("#manual").attr('checked'))
	        					ajax_loader_show("Translating...");
	        			});
        			});
				</script>
<?php endif; ?>

                <div class="content">
                	<?php echo $this->_tpl_vars['VH']->validation_errors(); ?>

                     <h3><?php if ($this->_tpl_vars['language']->id == 'new'): ?><?php echo $this->_tpl_vars['LANG_CREATE_LANG']; ?>
<?php else: ?><?php echo $this->_tpl_vars['LANG_EDIT_LANG']; ?>
<?php endif; ?></h3>

                     <?php if ($this->_tpl_vars['language']->id != 'new'): ?>
                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/languages/create"); ?>
" title="<?php echo $this->_tpl_vars['LANG_CREATE_LANG_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_add.png" /></a>
                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/languages/create"); ?>
"><?php echo $this->_tpl_vars['LANG_CREATE_LANG_OPTION']; ?>
</a>&nbsp;&nbsp;&nbsp;

                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/languages/delete/".($this->_tpl_vars['language_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_DELETE_LANG_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_delete.png" /></a>
                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/languages/delete/".($this->_tpl_vars['language_id'])); ?>
"><?php echo $this->_tpl_vars['LANG_DELETE_LANG_OPTION']; ?>
</a>&nbsp;&nbsp;&nbsp;
                     <div class="px10"></div>
                     <?php endif; ?>

                     <form id="save_lang_form" action="" method="post">
                     <?php if ($this->_tpl_vars['language']->id != 'new'): ?>
                     <div class="admin_option">
                          <div class="admin_option_name" >
                          	<?php echo $this->_tpl_vars['LANG_LANG_ACTIVE']; ?>

                          </div>
                          <input type="checkbox" name="active" value="<?php echo $this->_tpl_vars['language']->active; ?>
" class="admin_option_input" <?php if ($this->_tpl_vars['language']->active): ?>checked<?php endif; ?> />&nbsp;<?php echo $this->_tpl_vars['LANG_ENABLED']; ?>

                     </div>
                     <?php endif; ?>
                     <div class="admin_option">
                          <div class="admin_option_name" >
                          	<?php echo $this->_tpl_vars['LANG_LANG_NAME']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <div class="admin_option_description">
                               <?php echo $this->_tpl_vars['LANG_LANG_NAME_DESCR']; ?>

                          </div>
                          <input type=text name="name" value="<?php echo $this->_tpl_vars['language']->name; ?>
" size="25" class="admin_option_input">
                     </div>
                     <?php if ($this->_tpl_vars['language']->code != 'en'): ?>
                     <div class="admin_option">
                          <div class="admin_option_name">
                               <?php echo $this->_tpl_vars['LANG_LANG_CODE']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <div class="admin_option_description">
                               <?php echo $this->_tpl_vars['LANG_LANG_CODE_DESCR_1']; ?>
 <a href="http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes" target="_blank">ISO-639</a> (5 <?php echo $this->_tpl_vars['LANG_LANG_CODE_DESCR_2']; ?>
). <?php echo $this->_tpl_vars['LANG_LANG_CODE_DESCR_3']; ?>
 <a href="http://code.google.com/intl/ru/apis/language/translate/v1/reference.html#translatableLanguages" target="_blank"><?php echo $this->_tpl_vars['LANG_LANG_CODE_DESCR_4']; ?>
</a>
                          </div>
                          <input type=text name="code" value="<?php echo $this->_tpl_vars['language']->code; ?>
" size="2" class="admin_option_input">
                     </div>
                     <div class="admin_option">
                          <div class="admin_option_name">
                               <?php echo $this->_tpl_vars['LANG_LANG_DB_CODE']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <div class="admin_option_description">
                               <?php echo $this->_tpl_vars['LANG_LANG_DB_CODE_DESCR']; ?>
. 2 <?php echo $this->_tpl_vars['LANG_SYMBOLS_MAX']; ?>
.
                          </div>
                          <input type=text name="db_code" value="<?php echo $this->_tpl_vars['language']->db_code; ?>
" size="1" class="admin_option_input">
                     </div>
                     <?php endif; ?>
                     <div class="admin_option">
						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['LANG_LANG_CUSTOM_THEME']; ?>
<span class="red_asterisk">*</span>
						</div>
						<select name="custom_theme">
							<?php $_from = $this->_tpl_vars['themes_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<option value="<?php echo $this->_tpl_vars['item']; ?>
" <?php if ($this->_tpl_vars['language']->custom_theme == $this->_tpl_vars['item']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['item']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					 </div>
					 <div class="admin_option">
						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['LANG_LANG_DECIMALS_SEPARATOR']; ?>
<span class="red_asterisk">*</span>
						</div>
						<select name="decimals_separator">
							<option value="." <?php if ($this->_tpl_vars['language']->decimals_separator == '.'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['LANG_LANG_DECIMALS_SEPARATOR_DOT']; ?>
</option>
							<option value="," <?php if ($this->_tpl_vars['language']->decimals_separator == ','): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['LANG_LANG_DECIMALS_SEPARATOR_COMMA']; ?>
</option>
						</select>
					 </div>
					 <div class="admin_option">
						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['LANG_LANG_THOUSANDS_SEPARATOR']; ?>
<span class="red_asterisk">*</span>
						</div>
						<select name="thousands_separator">
							<option value="" <?php if ($this->_tpl_vars['language']->thousands_separator == ''): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['LANG_LANG_THOUSANDS_SEPARATOR_NOSEP']; ?>
</option>
							<option value="." <?php if ($this->_tpl_vars['language']->thousands_separator == '.'): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['LANG_LANG_THOUSANDS_SEPARATOR_DOT']; ?>
</option>
							<option value="," <?php if ($this->_tpl_vars['language']->thousands_separator == ','): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['LANG_LANG_THOUSANDS_SEPARATOR_COMMA']; ?>
</option>
							<option value=" " <?php if ($this->_tpl_vars['language']->thousands_separator == ' '): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['LANG_LANG_THOUSANDS_SEPARATOR_SPACE']; ?>
</option>
						</select>
					 </div>
					 <div class="admin_option">
						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['LANG_LANG_DATE_FORMAT']; ?>
<span class="red_asterisk">*</span>
						</div>
						<div class="admin_option_description">
							<?php echo $this->_tpl_vars['LANG_LANG_DATE_TIME_FORMAT_DESCR_1']; ?>
 <a href="http://www.smarty.net/docsv2/en/language.modifier.date.format" target="_blank"><?php echo $this->_tpl_vars['LANG_LANG_DATE_TIME_FORMAT_DESCR_2']; ?>
</a>
                        </div>
						<input type=text name="date_format" value="<?php echo $this->_tpl_vars['language']->date_format; ?>
" size="10" class="admin_option_input">
					 </div>
					 <div class="admin_option">
						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['LANG_LANG_TIME_FORMAT']; ?>
<span class="red_asterisk">*</span>
						</div>
						<div class="admin_option_description">
							<?php echo $this->_tpl_vars['LANG_LANG_DATE_TIME_FORMAT_DESCR_1']; ?>
 <a href="http://www.smarty.net/docsv2/en/language.modifier.date.format" target="_blank"><?php echo $this->_tpl_vars['LANG_LANG_DATE_TIME_FORMAT_DESCR_2']; ?>
</a>
                        </div>
						<input type=text name="time_format" value="<?php echo $this->_tpl_vars['language']->time_format; ?>
" size="10" class="admin_option_input">
					 </div>
                     <div class="admin_option">
                          <div class="admin_option_name">
                          	<?php echo $this->_tpl_vars['LANG_LANG_FLAG']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <div class="admin_option_description">
                          	<?php echo $this->_tpl_vars['LANG_LANG_FLAG_DESCR']; ?>
 '/themes/{your_theme_folder}/images/flags/'
                          </div>
                          <select name="flag">
                          	<option value="-1"><?php echo $this->_tpl_vars['LANG_SELECT_FLAG']; ?>
</option>
                          	<?php if (count($this->_tpl_vars['flags_images']) > 0): ?>
                          		<?php $_from = $this->_tpl_vars['flags_images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['flag']):
?>
                          		<option value="<?php echo $this->_tpl_vars['flag']; ?>
" <?php if ($this->_tpl_vars['language']->flag == $this->_tpl_vars['flag']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['flag']; ?>
</option>
                          		<?php endforeach; endif; unset($_from); ?>
                          	<?php endif; ?>
                          </select>
                     </div>
                     <input class="button save_button" type="submit" name="submit" value="<?php if ($this->_tpl_vars['language']->id != 'new'): ?><?php echo $this->_tpl_vars['LANG_BUTTON_SAVE_CHANGES']; ?>
<?php else: ?><?php echo $this->_tpl_vars['LANG_BUTTON_CREATE_LANG']; ?>
<?php endif; ?>">
                     </form>
                </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>