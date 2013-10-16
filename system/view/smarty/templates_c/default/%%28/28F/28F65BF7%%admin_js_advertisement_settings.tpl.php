<?php /* Smarty version 2.6.26, created on 2012-04-17 07:46:24
         compiled from js_advertisement/admin_js_advertisement_settings.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('js_advertisement_id', $this->_tpl_vars['js_advertisement']->id); ?>

                <div class="content">
                	<?php echo $this->_tpl_vars['VH']->validation_errors(); ?>

                     <h3><?php if ($this->_tpl_vars['js_advertisement_id'] != 'new'): ?><?php echo $this->_tpl_vars['LANG_EDIT_JSADVERTISEMENT']; ?>
 "<?php echo $this->_tpl_vars['js_advertisement_name']; ?>
"<?php else: ?><?php echo $this->_tpl_vars['LANG_CREATE_JSADVERTISEMENT']; ?>
<?php endif; ?></h3>

                     <?php if ($this->_tpl_vars['js_advertisement_id'] != 'new'): ?>
                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/js_advertisement/create"); ?>
" title="<?php echo $this->_tpl_vars['LANG_CREATE_JSADVERTISEMENT_BLOCK']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_add.png" /></a>
                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/js_advertisement/create"); ?>
"><?php echo $this->_tpl_vars['LANG_CREATE_JSADVERTISEMENT_BLOCK']; ?>
</a>&nbsp;&nbsp;&nbsp;
                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/js_advertisement/delete/".($this->_tpl_vars['js_advertisement_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_DELETE_JSADVERTISEMENT_BLOCK']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_delete.png" /></a>
                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/js_advertisement/delete/".($this->_tpl_vars['js_advertisement_id'])); ?>
"><?php echo $this->_tpl_vars['LANG_DELETE_JSADVERTISEMENT_BLOCK']; ?>
</a>&nbsp;&nbsp;&nbsp;
                     <br />
                     <br />
                     <?php endif; ?>

                     <form action="" method="post">
                     <div class="admin_option">
                          <div class="admin_option_name" >
                          	<?php echo $this->_tpl_vars['LANG_JSADVERTISEMENT_BLOCK_NAME_TH']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <input type=text name="name" value="<?php echo $this->_tpl_vars['js_advertisement']->name; ?>
" size="40" class="admin_option_input">
                     </div>

                     <div class="admin_option">
                          <div class="admin_option_name">
                          	<?php echo $this->_tpl_vars['LANG_JSADVERTISEMENT_BLOCK_MODE_TH']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <input type="text" name="mode" value="<?php echo $this->_tpl_vars['js_advertisement']->mode; ?>
" size="7" class="admin_option_input">
                     </div>
                     <div class="admin_option">
                          <div class="admin_option_name">
                          	<?php echo $this->_tpl_vars['LANG_JSADVERTISEMENT_BLOCK_SELECTOR_TH']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <input type="text" name="selector" value="<?php echo $this->_tpl_vars['js_advertisement']->selector; ?>
" size="40" class="admin_option_input">
                     </div>
                     <div class="admin_option">
                          <div class="admin_option_name">
                          	<?php echo $this->_tpl_vars['LANG_JSADVERTISEMENT_CODE']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <textarea type="text" name="code" cols="80" rows="15"><?php echo $this->_tpl_vars['js_advertisement']->code; ?>
</textarea>
                     </div>
                     <input class="button save_button" type=submit name="submit" value="<?php if ($this->_tpl_vars['js_advertisement_id'] != 'new'): ?><?php echo $this->_tpl_vars['LANG_BUTTON_SAVE_CHANGES']; ?>
<?php else: ?><?php echo $this->_tpl_vars['LANG_BUTTON_CREATE_JSADVERTISEMENT']; ?>
<?php endif; ?>">
                     </form>
                </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>