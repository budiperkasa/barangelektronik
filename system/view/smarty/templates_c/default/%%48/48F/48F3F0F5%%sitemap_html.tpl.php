<?php /* Smarty version 2.6.26, created on 2012-04-18 19:37:53
         compiled from sitemap/sitemap_html.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

			<tr>
				<td id="left_sidebar">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/left-sidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</td>
      			<td id="content_block" valign="top" colspan="2">
      				<div id="content_wrapper">
                         <h1><?php echo $this->_tpl_vars['LANG_SITEMAP_TITLE']; ?>
</h1>
                         <h2 class="sitemap_h2"><a href="<?php echo $this->_tpl_vars['VH']->site_url(); ?>
"><?php echo $this->_tpl_vars['LANG_HOME_MENU']; ?>
</a></h2>
                         <ul class="sitemap_root">
	                     <?php $_from = $this->_tpl_vars['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type']):
?>
	                     	<?php $this->assign('type_seo_name', $this->_tpl_vars['type']->seo_name); ?>
	                     	<?php $this->assign('type_id', $this->_tpl_vars['type']->id); ?>
	                     	<li>
		                     	<h2 class="sitemap_h2"><a class="sitemap_h1" href="<?php echo $this->_tpl_vars['VH']->site_url($this->_tpl_vars['type']->getUrl()); ?>
"><?php echo $this->_tpl_vars['type']->name; ?>
</a></h2>
		                     	<ul class="sitemap_type_root">
		                     	<?php $_from = $this->_tpl_vars['listings'][$this->_tpl_vars['type_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listing']):
?>
		                     		<li><a href="<?php echo $this->_tpl_vars['VH']->site_url($this->_tpl_vars['listing']->url()); ?>
"><?php echo $this->_tpl_vars['listing']->title(); ?>
</a></li>
		                     	<?php endforeach; endif; unset($_from); ?>
		                     	</ul>
		                    </li>
	                     <?php endforeach; endif; unset($_from); ?>
	                     <?php $_from = $this->_tpl_vars['content_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
	                     	<?php $this->assign('page_url', $this->_tpl_vars['page']['url']); ?>
	                     	<li>
	                     		<h2 class="sitemap_h2"><a class="sitemap_h1" href="<?php echo $this->_tpl_vars['VH']->site_url("node/".($this->_tpl_vars['page_url'])); ?>
"><?php echo $this->_tpl_vars['page']['title']; ?>
</a></h2>
	                     	</li>
	                     <?php endforeach; endif; unset($_from); ?>
	                     <?php $_from = $this->_tpl_vars['info_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
	                     	<?php $this->assign('page_url', $this->_tpl_vars['page']['url']); ?>
	                     	<li>
	                     		<h2 class="sitemap_h2"><a class="sitemap_h1" href="<?php echo $this->_tpl_vars['VH']->site_url(($this->_tpl_vars['page_url'])); ?>
"><?php echo $this->_tpl_vars['page']['title']; ?>
</a></h2>
	                     	</li>
	                     <?php endforeach; endif; unset($_from); ?>
	                     </ul>
                 	</div>
				</td>
			</tr>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>