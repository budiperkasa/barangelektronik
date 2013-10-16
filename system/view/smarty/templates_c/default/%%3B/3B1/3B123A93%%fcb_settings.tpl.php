<?php /* Smarty version 2.6.26, created on 2012-04-17 08:01:31
         compiled from facebook/fcb_settings.tpl */ ?>
					<label class="block_title"><?php echo $this->_tpl_vars['LANG_FACEBOOK_SETTINGS']; ?>
</label>
					<div class="admin_option">
						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['LANG_FACEBOOK_APP_ID']; ?>

						</div>
						<div class="admin_option_description">
							<?php echo $this->_tpl_vars['LANG_FACEBOOK_API_KEY_SIGNUP']; ?>

						</div>
						<input type=text name="facebook_app_id" value="<?php echo $this->_tpl_vars['system_settings']['facebook_app_id']; ?>
" size="80" />

						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['LANG_FACEBOOK_API_KEY']; ?>

						</div>
						<input type=text name="facebook_api_key" value="<?php echo $this->_tpl_vars['system_settings']['facebook_api_key']; ?>
" size="80" />
						
						<div class="admin_option_name">
							<?php echo $this->_tpl_vars['LANG_FACEBOOK_APP_SECRET']; ?>

						</div>
						<input type=text name="facebook_app_secret" value="<?php echo $this->_tpl_vars['system_settings']['facebook_app_secret']; ?>
" size="80" />
					</div>