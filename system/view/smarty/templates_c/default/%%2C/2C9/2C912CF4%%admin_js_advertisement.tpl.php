<?php /* Smarty version 2.6.26, created on 2012-04-17 07:46:15
         compiled from js_advertisement/admin_js_advertisement.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'js_advertisement/admin_js_advertisement.tpl', 8, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <div class="content">
                     <h3><?php echo $this->_tpl_vars['LANG_JSADVERTISEMENT_ALL_BLOCKS']; ?>
</h3>
                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/js_advertisement/create"); ?>
" title="<?php echo $this->_tpl_vars['LANG_CREATE_JSADVERTISEMENT_BLOCK']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_add.png"></a>
                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/js_advertisement/create"); ?>
"><?php echo $this->_tpl_vars['LANG_CREATE_JSADVERTISEMENT_BLOCK']; ?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;

                     <?php if (count($this->_tpl_vars['js_advertisement_blocks']) > 0): ?>
                     <table class="standardTable" border="0" cellpadding="2" cellspacing="2">
                       <tr>
                         <th><?php echo $this->_tpl_vars['LANG_JSADVERTISEMENT_BLOCK_NAME_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_JSADVERTISEMENT_BLOCK_MODE_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_JSADVERTISEMENT_BLOCK_SELECTOR_TH']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_OPTIONS_TH']; ?>
</th>
                       </tr>
                       <?php $_from = $this->_tpl_vars['js_advertisement_blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['js_advertisement_item']):
?>
                       <?php $this->assign('js_advertisement_id', $this->_tpl_vars['js_advertisement_item']['id']); ?>
                       <tr>
                         <td>
                             <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/js_advertisement/edit/".($this->_tpl_vars['js_advertisement_id'])); ?>
"><?php echo $this->_tpl_vars['js_advertisement_item']['name']; ?>
</a>
                         </td>
                         <td>
                             <?php echo $this->_tpl_vars['js_advertisement_item']['mode']; ?>

                         </td>
                         <td>
                             <?php echo $this->_tpl_vars['js_advertisement_item']['selector']; ?>

                         </td>
                         <td>
                             <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/js_advertisement/edit/".($this->_tpl_vars['js_advertisement_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_EDIT_JSADVERTISEMENT_BLOCK']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/page_edit.png"></a>&nbsp;
                             <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/js_advertisement/delete/".($this->_tpl_vars['js_advertisement_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_DELETE_JSADVERTISEMENT_BLOCK']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
images/buttons/page_delete.png"></a>
                         </td>
                       </tr>
                       <?php endforeach; endif; unset($_from); ?>
                     </table>
                     <?php endif; ?>
                </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>