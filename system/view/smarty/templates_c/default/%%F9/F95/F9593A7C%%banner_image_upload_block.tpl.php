<?php /* Smarty version 2.6.26, created on 2012-04-17 08:25:07
         compiled from files_upload/banner_image_upload_block.tpl */ ?>
<?php $this->assign('banner', $this->_tpl_vars['attrs']['banner_obj']); ?>

					<div class="admin_option">
						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['title']; ?>

						</div>
						<div class="admin_option_description">
							<?php echo $this->_tpl_vars['LANG_MAX_IMAGE_SIZE']; ?>
 <?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',0); ?>
*<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',1); ?>
px, <?php echo $this->_tpl_vars['LANG_MAX_FILE_SIZE']; ?>
 <?php echo $this->_tpl_vars['max_upload_filesize']; ?>
. <?php echo $this->_tpl_vars['LANG_SUPPORTED_FORMAT']; ?>
: <?php echo $this->_tpl_vars['VH']->str_replace('|',', ',$this->_tpl_vars['allowed_types']); ?>

						</div>
						<div id="img_wrapper">
							<div id="img_div_border" style="<?php if ($this->_tpl_vars['banner']->is_uploaded_flash || ! $this->_tpl_vars['banner']->banner_file): ?>display:none; <?php endif; ?>width: <?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',0); ?>
px; height: <?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',1); ?>
px;">
								<div id="img_div" style="width: <?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',0); ?>
px; height: <?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',1); ?>
px;">
									<table width="<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',0)+4; ?>
px" height="<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',1)+4; ?>
px">
										<tr>
											<td valign="middle" align="center">
											    <img id="img" src="<?php echo $this->_tpl_vars['users_content']; ?>
banners/<?php echo $this->_tpl_vars['banner']->banner_file; ?>
" />
											</td>
										</tr>
									</table>
								</div>
							</div>
							<div id="flash_div_border" style="<?php if (! $this->_tpl_vars['banner']->is_uploaded_flash || ! $this->_tpl_vars['banner']->banner_file): ?>display:none;<?php endif; ?>">
								<div id="flash_banner">
									<script language="javascript" type="text/javascript">
										swfobject.embedSWF("<?php echo $this->_tpl_vars['users_content']; ?>
banners/<?php echo $this->_tpl_vars['banner']->banner_file; ?>
", "flash_banner", "<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',0); ?>
", "<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',1); ?>
", "9.0.0");
									</script>
								</div>
							</div>
							<input type="hidden" name="<?php echo $this->_tpl_vars['upload_id']; ?>
" id="<?php echo $this->_tpl_vars['upload_id']; ?>
" value="<?php if ($this->_tpl_vars['banner']->banner_file): ?><?php echo $this->_tpl_vars['banner']->banner_file; ?>
<?php endif; ?>">
							<div class="px5"></div>
							<input id="<?php echo $this->_tpl_vars['upload_id']; ?>
_browse" type="file" size="45" name="<?php echo $this->_tpl_vars['upload_id']; ?>
_browse"><br />
							<div class="px5"></div>
							<input type="button" class="upload_button button" onclick="return ajaxBannerFileUpload('<?php echo $this->_tpl_vars['upload_id']; ?>
', '<?php echo $this->_tpl_vars['VH']->site_url("ajax/files_upload/".($this->_tpl_vars['upload_id'])); ?>
', '<?php echo $this->_tpl_vars['after_upload_url']; ?>
', '<?php echo $this->_tpl_vars['upload_to']; ?>
', '<?php echo $this->_tpl_vars['error_file_choose']; ?>
', '<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',0); ?>
', '<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',1); ?>
');" value="<?php echo $this->_tpl_vars['LANG_BUTTON_UPLOAD_IMAGE']; ?>
">
							<input type="hidden" name="is_uploaded_flash" id="is_uploaded_flash" <?php if ($this->_tpl_vars['banner']->is_uploaded_flash): ?>value=1<?php endif; ?> />
						</div>
						<img id="loading" src="<?php echo $this->_tpl_vars['public_path']; ?>
images/ajax-loader.gif" style="display: none;">
					</div>