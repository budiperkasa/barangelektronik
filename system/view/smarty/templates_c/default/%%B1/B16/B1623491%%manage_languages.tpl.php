<?php /* Smarty version 2.6.26, created on 2012-04-17 08:39:03
         compiled from i18n/manage_languages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'i18n/manage_languages.tpl', 12, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <div class="content">
                	<?php echo $this->_tpl_vars['VH']->validation_errors(); ?>

                     <h3><?php echo $this->_tpl_vars['LANG_MANAGE_LANGS']; ?>
</h3>
                     <div class="admin_option_description">
                     	<?php echo $this->_tpl_vars['LANG_MANAGE_LANGS_DESCR']; ?>

                     </div>
                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/languages/create"); ?>
" title="<?php echo $this->_tpl_vars['LANG_CREATE_LANG_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_add.png"></a>
					 <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/languages/create"); ?>
" title="<?php echo $this->_tpl_vars['LANG_CREATE_LANG_OPTION']; ?>
"><?php echo $this->_tpl_vars['LANG_CREATE_LANG_OPTION']; ?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;

                     <?php if (count($this->_tpl_vars['languages']) > 0): ?>
                     <table id="drag_table" class="standardTable" border="0" cellpadding="2" cellspacing="2">
                       <tr class="nodrop nodrag">
                         <th><?php echo $this->_tpl_vars['LANG_CODE_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_NAME_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_FLAG_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_OPTIONS_TH']; ?>
</th>
                       </tr>
                       <?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['language_item']):
?>
                       <?php $this->assign('language_item_id', $this->_tpl_vars['language_item']['id']); ?>
                       <tr id="<?php echo $this->_tpl_vars['language_item']['id']; ?>
_id">
                         <td>
                             <?php echo $this->_tpl_vars['language_item']['code']; ?>

                         </td>
                         <td>
                             <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/languages/translate/".($this->_tpl_vars['language_item_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_TRANSLATE_INTERFACE_OPTION']; ?>
"><?php echo $this->_tpl_vars['language_item']['name']; ?>
</a>
                         </td>
                         <td>
                             <img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/flags/<?php echo $this->_tpl_vars['language_item']['flag']; ?>
">
                         </td>
                         <td>
                         	<nobr>
                         	 <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/languages/translate/".($this->_tpl_vars['language_item_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_TRANSLATE_INTERFACE_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/text_allcaps.png"></a>
                             <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/languages/edit/".($this->_tpl_vars['language_item_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_EDIT_LANG_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/page_edit.png"></a>
                             <?php if (( $this->_tpl_vars['system_settings']['default_language'] != $this->_tpl_vars['language_item']['code'] ) && ( $this->_tpl_vars['language_item']['code'] != 'en' )): ?>
                             <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/languages/delete/".($this->_tpl_vars['language_item_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_DELETE_LANG_OPTION']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/page_delete.png"></a>
                            <?php endif; ?>
                            </nobr>
                         </td>
                       </tr>
                       <?php endforeach; endif; unset($_from); ?>
                     </table>
                     <br/>
                     <form action="" method="post">
                     <input type="hidden" id="serialized_order" name="serialized_order"> 
                     <input class="button save_button" type=submit name="submit" value="<?php echo $this->_tpl_vars['LANG_BUTTON_SAVE_CHANGES']; ?>
">
                     </form>
                     <?php endif; ?>
                </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>