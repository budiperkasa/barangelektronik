<?php /* Smarty version 2.6.26, created on 2012-04-17 08:26:02
         compiled from banners/banner_block.tpl */ ?>
<?php $this->assign('banner_id', $this->_tpl_vars['banner']->id); ?>
<div class="banners_block" style="width:<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',0); ?>
px;">
	<?php if ($this->_tpl_vars['banner']->use_remote_image): ?>
		<?php if (! $this->_tpl_vars['banner']->is_loaded_flash): ?>
			<a href="<?php echo $this->_tpl_vars['banner']->url; ?>
" target="_blank" onclick="jQuery.get('<?php echo $this->_tpl_vars['VH']->site_url("ajax/banners/click_tracing/".($this->_tpl_vars['banner_id'])); ?>
')">
				<img id="img_<?php echo $this->_tpl_vars['banner']->id; ?>
" src="<?php echo $this->_tpl_vars['banner']->remote_image_url; ?>
" />
			</a>
		<?php else: ?>
			<div class="fire_onclick" onmousedown="jQuery.get('<?php echo $this->_tpl_vars['VH']->site_url("ajax/banners/click_tracing/".($this->_tpl_vars['banner_id'])); ?>
', function(data) {location.href='<?php echo $this->_tpl_vars['banner']->url; ?>
';});">
				<div id="remote_image_wrapper_<?php echo $this->_tpl_vars['banner']->id; ?>
">
					<script language="javascript" type="text/javascript">
						swfobject.embedSWF("<?php echo $this->_tpl_vars['banner']->remote_image_url; ?>
", "remote_image_wrapper_<?php echo $this->_tpl_vars['banner']->id; ?>
", "<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',0); ?>
", "<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',1); ?>
", "9.0.0", "", {}, {wmode:'transparent', bgcolor: '#fff'});
					</script>
				</div>
			</div>
		<?php endif; ?>
	<?php else: ?>
		<?php if (! $this->_tpl_vars['banner']->is_uploaded_flash): ?>
			<a href="<?php echo $this->_tpl_vars['banner']->url; ?>
" target="_blank" onclick="jQuery.get('<?php echo $this->_tpl_vars['VH']->site_url("ajax/banners/click_tracing/".($this->_tpl_vars['banner_id'])); ?>
')">
				<img id="img_<?php echo $this->_tpl_vars['banner']->id; ?>
" src="<?php echo $this->_tpl_vars['users_content']; ?>
banners/<?php echo $this->_tpl_vars['banner']->banner_file; ?>
" />
			</a>
		<?php else: ?>
			<div class="fire_onclick" onmousedown="jQuery.get('<?php echo $this->_tpl_vars['VH']->site_url("ajax/banners/click_tracing/".($this->_tpl_vars['banner_id'])); ?>
', function(data) {location.href='<?php echo $this->_tpl_vars['banner']->url; ?>
';});">
				<div id="image_wrapper_<?php echo $this->_tpl_vars['banner']->id; ?>
">
					<script language="javascript" type="text/javascript">
						swfobject.embedSWF("<?php echo $this->_tpl_vars['users_content']; ?>
banners/<?php echo $this->_tpl_vars['banner']->banner_file; ?>
", "image_wrapper_<?php echo $this->_tpl_vars['banner']->id; ?>
", "<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',0); ?>
", "<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',1); ?>
", "9.0.0", "", {}, {wmode:'transparent', bgcolor: '#fff'});
					</script>
				</div>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['content_access_obj']->isPermission('Create banners')): ?>
	<div class="banners_advertise_link">
		<a href="<?php echo $this->_tpl_vars['VH']->site_url('advertise'); ?>
#banners_advertise"><?php echo $this->_tpl_vars['LANG_TOP_MENU_ADS']; ?>
</a>
	</div>
	<?php endif; ?>
</div>