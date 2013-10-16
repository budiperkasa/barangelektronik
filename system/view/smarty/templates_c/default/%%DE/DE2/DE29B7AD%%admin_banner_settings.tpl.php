<?php /* Smarty version 2.6.26, created on 2012-04-17 08:25:07
         compiled from banners/admin_banner_settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'render_frontend_block', 'banners/admin_banner_settings.tpl', 116, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('banner_id', $this->_tpl_vars['banner']->id); ?>
<?php $this->assign('banners_block_id', $this->_tpl_vars['banner']->block->id); ?>

<?php if ($this->_tpl_vars['banner']->block->allow_remote_banners): ?>
<script language="javascript" type="text/javascript">
	function ajaxRemoteFileLoad() {
		if ($("#remote_image_url").val()) {
			$("#remote_loading").show();
			$("#imgs_wrapper").hide();
			checkRemoteImage();
		}
	}

	function checkRemoteImage() {
		if ($("#remote_image_url").val()) {
			$.post('<?php echo $this->_tpl_vars['VH']->site_url("ajax/banners/get_image_by_url/".($this->_tpl_vars['banners_block_id'])); ?>
', {image_url:$("#remote_image_url").val()}, function(data) {
				if (data.error_msg == '') {
					if (data.flash) {
						$("#remote_image_wrapper").hide();
						$("#remote_flash_wrapper").show();
						swfobject.embedSWF(data.file_name, "flash_wrapper", "<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',0); ?>
", "<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',1); ?>
", "9.0.0");
						$("#is_loaded_flash").val(1);
					} else {
						$("#remote_image_wrapper").show();
						$("#remote_flash_wrapper").hide();
						$("#remote_image").attr('src', data.file_name);
						$("#is_loaded_flash").val(0);
					}
					$("#use_remote_image").attr('checked', true);
				} else {
					alert(data.error_msg);
					$("#remote_image_wrapper").hide();
					$("#remote_flash_wrapper").hide();
					$("#remote_image").attr('src', '');
					$("#is_loaded_flash").val(0);
					$("#remote_image_url").val('');
					$("#use_remote_image").attr('checked', false);
				}
				$("#imgs_wrapper").show();
				$("#remote_loading").hide();
			}, 'json');
		}
	}

	$(document).ready(function() {
		checkRemoteImage();
	});
</script>
<?php endif; ?>

                <div class="content">
                	<?php echo $this->_tpl_vars['VH']->validation_errors(); ?>

                    <h3><?php if ($this->_tpl_vars['banner_id'] != 'new'): ?><?php echo $this->_tpl_vars['LANG_BANNERS_EDIT_BANNER_TITLE']; ?>
<?php else: ?><?php echo $this->_tpl_vars['LANG_BANNER_CREATE_TITLE']; ?>
<?php endif; ?></h3>
                    <?php if ($this->_tpl_vars['banner_id'] == 'new'): ?><h4><?php echo $this->_tpl_vars['LANG_BANNERS_ADD_STEP2']; ?>
</h4><?php endif; ?>

                    <?php if ($this->_tpl_vars['banner_id'] != 'new'): ?>
                    <div class="admin_top_menu_cell">
	                   <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/create"); ?>
" title="<?php echo $this->_tpl_vars['LANG_CREATE_BANNER']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_add.png" /></a>
	                   <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/create"); ?>
"><?php echo $this->_tpl_vars['LANG_CREATE_BANNER']; ?>
</a>
					</div>
	                <div class="admin_top_menu_cell">
	                    <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/edit/".($this->_tpl_vars['banner_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_EDIT_BANNER']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_edit.png" /></a>
	                    <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/edit/".($this->_tpl_vars['banner_id'])); ?>
"><?php echo $this->_tpl_vars['LANG_EDIT_BANNER']; ?>
</a>
	                </div>
	                <div class="admin_top_menu_cell">
	                    <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/delete/".($this->_tpl_vars['banner_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_DELETE_BANNER']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_delete.png" /></a>
	                    <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners/delete/".($this->_tpl_vars['banner_id'])); ?>
"><?php echo $this->_tpl_vars['LANG_DELETE_BANNER']; ?>
</a>
	                </div>
					<div class="clear_float"></div>
					<div class="px10"></div>
                    <?php endif; ?>

                     <form action="" method="post">
                     <input type="hidden" name="block_id" value="<?php echo $this->_tpl_vars['banner']->block->id; ?>
">
                     <div class="admin_option">
                          <div class="admin_option_name" >
                          	<?php echo $this->_tpl_vars['LANG_BANNER_LINK_URL']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <input type=text name="url" value="<?php echo $this->_tpl_vars['banner']->url; ?>
" size="85" class="admin_option_input">
                     </div>
                     
                     <?php echo $this->_tpl_vars['banner_upload_block']->setUploadBlock('files_upload/banner_image_upload_block.tpl'); ?>


                     <?php if ($this->_tpl_vars['banner']->block->allow_remote_banners): ?>
                     <div class="admin_option">
						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['LANG_BANNER_REMOTE_IMAGE']; ?>

						</div>
						<div class="admin_option_description">
							<?php echo $this->_tpl_vars['LANG_MAX_IMAGE_SIZE']; ?>
 <?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',0); ?>
*<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',1); ?>
px, <?php echo $this->_tpl_vars['LANG_MAX_FILE_SIZE']; ?>
 <?php echo $this->_tpl_vars['CI']->config->item('max_upload_filesize'); ?>
. <?php echo $this->_tpl_vars['LANG_SUPPORTED_FORMAT']; ?>
: <?php echo $this->_tpl_vars['VH']->str_replace('|',', ',$this->_tpl_vars['allowed_types']); ?>

						</div>
						<div id="imgs_wrapper">
							<div id="remote_image_wrapper" <?php if ($this->_tpl_vars['banner']->is_loaded_flash || ! $this->_tpl_vars['banner']->remote_image_url): ?>style="display: none"<?php endif; ?> >
						    	<img id="remote_image" src="<?php echo $this->_tpl_vars['banner']->remote_image_url; ?>
"/>
							</div>
							<div id="remote_flash_wrapper" <?php if (! $this->_tpl_vars['banner']->is_loaded_flash || ! $this->_tpl_vars['banner']->remote_image_url): ?>style="display: none"<?php endif; ?>>
								<div id="flash_wrapper">
									<script language="javascript" type="text/javascript">
							    		swfobject.embedSWF("<?php echo $this->_tpl_vars['banner']->remote_image_url; ?>
", "flash_wrapper", "<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',0); ?>
", "<?php echo $this->_tpl_vars['banner']->block->explodeSize('block_size',1); ?>
", "9.0.0");
							    	</script>
							    </div>
							</div>
							<div class="px5"></div>
							<input type="text" name="remote_image_url" id="remote_image_url" size="85" value="<?php echo $this->_tpl_vars['banner']->remote_image_url; ?>
">
							<div class="px5"></div>
							<input type="button" class="upload_button button" onclick="return ajaxRemoteFileLoad();" value="<?php echo $this->_tpl_vars['LANG_BUTTON_LOAD_IMAGE']; ?>
">
							<div class="px5"></div>
							<label><input type="checkbox" name="use_remote_image" id="use_remote_image" value="1" <?php if ($this->_tpl_vars['banner']->use_remote_image): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_USE_REMOTE_BANNER']; ?>
</label>
						</div>
						<img id="remote_loading" src="<?php echo $this->_tpl_vars['public_path']; ?>
images/ajax-loader.gif" style="display: none;">
						<input type="hidden" name="is_loaded_flash" id="is_loaded_flash" <?php if ($this->_tpl_vars['banner']->is_loaded_flash): ?>value=1<?php endif; ?> />
					 </div>
					 <?php endif; ?>

					<?php echo smarty_function_render_frontend_block(array('block_type' => 'locations','block_template' => 'backend/blocks/admin_locations_for_banners.tpl','is_only_labeled' => true,'is_counter' => false,'max_depth' => 'max','banner' => $this->_tpl_vars['banner'],'no_cache' => true), $this);?>


					<?php echo smarty_function_render_frontend_block(array('block_type' => 'categories','block_template' => 'backend/blocks/admin_categories_for_banners.tpl','is_counter' => false,'max_depth' => 'max','banner' => $this->_tpl_vars['banner'],'no_cache' => true), $this);?>


					<input class="button save_button" type=submit name="submit" value="<?php if ($this->_tpl_vars['banner_id'] != 'new'): ?><?php echo $this->_tpl_vars['LANG_BUTTON_SAVE_CHANGES']; ?>
<?php else: ?><?php echo $this->_tpl_vars['LANG_BUTTON_ADD_BANNER']; ?>
<?php endif; ?>">
					</form>
				</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>