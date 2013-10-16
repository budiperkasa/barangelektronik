<?php /* Smarty version 2.6.26, created on 2012-04-17 08:22:40
         compiled from banners/admin_banners_block_settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate_content', 'banners/admin_banners_block_settings.tpl', 25, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('banners_block_id', $this->_tpl_vars['banners_block']->id); ?>

                <div class="content">
                	<?php echo $this->_tpl_vars['VH']->validation_errors(); ?>

                     <h3><?php if ($this->_tpl_vars['banners_block_id'] != 'new'): ?><?php echo $this->_tpl_vars['LANG_BANNERS_BLOCKS_EDIT_TITLE']; ?>
 "<?php echo $this->_tpl_vars['banners_block']->name; ?>
"<?php else: ?><?php echo $this->_tpl_vars['LANG_BANNERS_BLOCKS_CREATE_TITLE']; ?>
<?php endif; ?></h3>

                     <?php if ($this->_tpl_vars['banners_block_id'] != 'new'): ?>
                     <div class="admin_top_menu_cell">
	                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners_blocks/create"); ?>
" title="<?php echo $this->_tpl_vars['LANG_CREATE_BANNERS_BLOCK']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_add.png" /></a>
	                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners_blocks/create"); ?>
"><?php echo $this->_tpl_vars['LANG_CREATE_BANNERS_BLOCK']; ?>
</a>
	                 </div>
	                 <div class="admin_top_menu_cell">
	                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners_blocks/delete/".($this->_tpl_vars['banners_block_id'])); ?>
" title="<?php echo $this->_tpl_vars['LANG_DELETE_BANNERS_BLOCK']; ?>
"><img src="<?php echo $this->_tpl_vars['public_path']; ?>
/images/buttons/page_delete.png" /></a>
	                     <a href="<?php echo $this->_tpl_vars['VH']->site_url("admin/banners_blocks/delete/".($this->_tpl_vars['banners_block_id'])); ?>
"><?php echo $this->_tpl_vars['LANG_DELETE_BANNERS_BLOCK']; ?>
</a>
                     </div>
                     <div class="clear_float"></div>
                     <div class="px10"></div>
                     <?php endif; ?>

                     <form action="" method="post">
                     <div class="admin_option">
                          <div class="admin_option_name" >
                          	<?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_NAME_TH']; ?>
<span class="red_asterisk">*</span>
                          	<?php echo smarty_function_translate_content(array('table' => 'banners_blocks','field' => 'name','row_id' => $this->_tpl_vars['banners_block_id']), $this);?>

                          </div>
                          <input type=text name="name" value="<?php echo $this->_tpl_vars['banners_block']->name; ?>
" size="75" class="admin_option_input">
                     </div>

                     <div class="admin_option">
                          <div class="admin_option_name">
                          	<?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_MODE_TH']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <select name="mode">
                          	<option value="post" <?php if ($this->_tpl_vars['banners_block']->mode == 'post'): ?>selected<?php endif; ?>>post</option>
                          	<option value="pre" <?php if ($this->_tpl_vars['banners_block']->mode == 'pre'): ?>selected<?php endif; ?>>pre</option>
                          	<option value="postouter" <?php if ($this->_tpl_vars['banners_block']->mode == 'postouter'): ?>selected<?php endif; ?>>postouter</option>
                          	<option value="preouter" <?php if ($this->_tpl_vars['banners_block']->mode == 'preouter'): ?>selected<?php endif; ?>>preouter</option>
                          	<option value="replace" <?php if ($this->_tpl_vars['banners_block']->mode == 'replace'): ?>selected<?php endif; ?>>replace</option>
                          </select>
                     </div>
                     <div class="admin_option">
                          <div class="admin_option_name">
                          	<?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_SELECTOR_TH']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <input type="text" name="selector" value="<?php echo $this->_tpl_vars['banners_block']->selector; ?>
" size="40" class="admin_option_input">
                     </div>
                     
                     <div class="admin_option">
                         <div class="admin_option_name">
                         	<?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_SIZE']; ?>
<span class="red_asterisk">*</span>
                         </div>
                         <div class="admin_option_description">
                         	<?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_SIZE_DESCR']; ?>

                         </div>
                         <?php echo $this->_tpl_vars['LANG_WIDTH']; ?>
, <?php echo $this->_tpl_vars['LANG_PX']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['LANG_HEIGHT']; ?>
, <?php echo $this->_tpl_vars['LANG_PX']; ?>
<br>
                         <input type=text name="banner_width" value="<?php echo $this->_tpl_vars['banners_block']->explodeSize('block_size',0); ?>
" size="4" class="admin_option_input">&nbsp;&nbsp;&nbsp;&nbsp;
                         <input type=text name="banner_height" value="<?php echo $this->_tpl_vars['banners_block']->explodeSize('block_size',1); ?>
" size="4" class="admin_option_input">
                     </div>

                     <div class="admin_option">
                          <div class="admin_option_name">
                          	<?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_ACTIVE_PERIOD']; ?>

                          </div>
                          <div class="admin_option_description">
                          	<?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_ACTIVE_PERIOD_DESCR']; ?>

                          </div>
                          <select name="active_years" class="no_min_width">
                          	<option value="0" <?php if ($this->_tpl_vars['banners_block']->active_years == 0): ?>selected<?php endif; ?>>0</option>
                          	<option value="1" <?php if ($this->_tpl_vars['banners_block']->active_years == 1): ?>selected<?php endif; ?>>1</option>
                          	<option value="2" <?php if ($this->_tpl_vars['banners_block']->active_years == 2): ?>selected<?php endif; ?>>2</option>
                          	<option value="3" <?php if ($this->_tpl_vars['banners_block']->active_years == 3): ?>selected<?php endif; ?>>3</option>
                          	<option value="4" <?php if ($this->_tpl_vars['banners_block']->active_years == 4): ?>selected<?php endif; ?>>4</option>
                          	<option value="5" <?php if ($this->_tpl_vars['banners_block']->active_years == 5): ?>selected<?php endif; ?>>5</option>
                          	<option value="6" <?php if ($this->_tpl_vars['banners_block']->active_years == 6): ?>selected<?php endif; ?>>6</option>
                          	<option value="7" <?php if ($this->_tpl_vars['banners_block']->active_years == 7): ?>selected<?php endif; ?>>7</option>
                          	<option value="8" <?php if ($this->_tpl_vars['banners_block']->active_years == 8): ?>selected<?php endif; ?>>8</option>
                          	<option value="9" <?php if ($this->_tpl_vars['banners_block']->active_years == 9): ?>selected<?php endif; ?>>9</option>
                          	<option value="10" <?php if ($this->_tpl_vars['banners_block']->active_years == 10): ?>selected<?php endif; ?>>10</option>
                          </select> <?php echo $this->_tpl_vars['LANG_YEARS']; ?>

                          &nbsp;&nbsp;
                          <select name="active_months" class="no_min_width">
                          	<option value="0" <?php if ($this->_tpl_vars['banners_block']->active_months == 0): ?>selected<?php endif; ?>>0</option>
                          	<option value="1" <?php if ($this->_tpl_vars['banners_block']->active_months == 1): ?>selected<?php endif; ?>>1</option>
                          	<option value="2" <?php if ($this->_tpl_vars['banners_block']->active_months == 2): ?>selected<?php endif; ?>>2</option>
                          	<option value="3" <?php if ($this->_tpl_vars['banners_block']->active_months == 3): ?>selected<?php endif; ?>>3</option>
                          	<option value="4" <?php if ($this->_tpl_vars['banners_block']->active_months == 4): ?>selected<?php endif; ?>>4</option>
                          	<option value="5" <?php if ($this->_tpl_vars['banners_block']->active_months == 5): ?>selected<?php endif; ?>>5</option>
                          	<option value="6" <?php if ($this->_tpl_vars['banners_block']->active_months == 6): ?>selected<?php endif; ?>>6</option>
                          	<option value="7" <?php if ($this->_tpl_vars['banners_block']->active_months == 7): ?>selected<?php endif; ?>>7</option>
                          	<option value="8" <?php if ($this->_tpl_vars['banners_block']->active_months == 8): ?>selected<?php endif; ?>>8</option>
                          	<option value="9" <?php if ($this->_tpl_vars['banners_block']->active_months == 9): ?>selected<?php endif; ?>>9</option>
                          	<option value="10" <?php if ($this->_tpl_vars['banners_block']->active_months == 10): ?>selected<?php endif; ?>>10</option>
                          	<option value="11" <?php if ($this->_tpl_vars['banners_block']->active_months == 11): ?>selected<?php endif; ?>>11</option>
                          	<option value="12" <?php if ($this->_tpl_vars['banners_block']->active_months == 12): ?>selected<?php endif; ?>>12</option>
                          </select> <?php echo $this->_tpl_vars['LANG_MONTHS']; ?>

                          <select name="active_days" class="no_min_width">
                          	<option value="0" <?php if ($this->_tpl_vars['banners_block']->active_days == 0): ?>selected<?php endif; ?>>0</option>
                          	<option value="1" <?php if ($this->_tpl_vars['banners_block']->active_days == 1): ?>selected<?php endif; ?>>1</option>
                          	<option value="2" <?php if ($this->_tpl_vars['banners_block']->active_days == 2): ?>selected<?php endif; ?>>2</option>
                          	<option value="3" <?php if ($this->_tpl_vars['banners_block']->active_days == 3): ?>selected<?php endif; ?>>3</option>
                          	<option value="4" <?php if ($this->_tpl_vars['banners_block']->active_days == 4): ?>selected<?php endif; ?>>4</option>
                          	<option value="5" <?php if ($this->_tpl_vars['banners_block']->active_days == 5): ?>selected<?php endif; ?>>5</option>
                          	<option value="6" <?php if ($this->_tpl_vars['banners_block']->active_days == 6): ?>selected<?php endif; ?>>6</option>
                          	<option value="7" <?php if ($this->_tpl_vars['banners_block']->active_days == 7): ?>selected<?php endif; ?>>7</option>
                          	<option value="8" <?php if ($this->_tpl_vars['banners_block']->active_days == 8): ?>selected<?php endif; ?>>8</option>
                          	<option value="9" <?php if ($this->_tpl_vars['banners_block']->active_days == 9): ?>selected<?php endif; ?>>9</option>
                          	<option value="10" <?php if ($this->_tpl_vars['banners_block']->active_days == 10): ?>selected<?php endif; ?>>10</option>
                          	<option value="11" <?php if ($this->_tpl_vars['banners_block']->active_days == 11): ?>selected<?php endif; ?>>11</option>
                          	<option value="12" <?php if ($this->_tpl_vars['banners_block']->active_days == 12): ?>selected<?php endif; ?>>12</option>
                          	<option value="13" <?php if ($this->_tpl_vars['banners_block']->active_days == 13): ?>selected<?php endif; ?>>13</option>
                          	<option value="14" <?php if ($this->_tpl_vars['banners_block']->active_days == 14): ?>selected<?php endif; ?>>14</option>
                          	<option value="15" <?php if ($this->_tpl_vars['banners_block']->active_days == 15): ?>selected<?php endif; ?>>15</option>
                          	<option value="16" <?php if ($this->_tpl_vars['banners_block']->active_days == 16): ?>selected<?php endif; ?>>16</option>
                          	<option value="17" <?php if ($this->_tpl_vars['banners_block']->active_days == 17): ?>selected<?php endif; ?>>17</option>
                          	<option value="18" <?php if ($this->_tpl_vars['banners_block']->active_days == 18): ?>selected<?php endif; ?>>18</option>
                          	<option value="19" <?php if ($this->_tpl_vars['banners_block']->active_days == 19): ?>selected<?php endif; ?>>19</option>
                          	<option value="20" <?php if ($this->_tpl_vars['banners_block']->active_days == 20): ?>selected<?php endif; ?>>20</option>
                          	<option value="21" <?php if ($this->_tpl_vars['banners_block']->active_days == 21): ?>selected<?php endif; ?>>21</option>
                          	<option value="22" <?php if ($this->_tpl_vars['banners_block']->active_days == 22): ?>selected<?php endif; ?>>22</option>
                          	<option value="23" <?php if ($this->_tpl_vars['banners_block']->active_days == 23): ?>selected<?php endif; ?>>23</option>
                          	<option value="24" <?php if ($this->_tpl_vars['banners_block']->active_days == 24): ?>selected<?php endif; ?>>24</option>
                          	<option value="25" <?php if ($this->_tpl_vars['banners_block']->active_days == 25): ?>selected<?php endif; ?>>25</option>
                          	<option value="26" <?php if ($this->_tpl_vars['banners_block']->active_days == 26): ?>selected<?php endif; ?>>26</option>
                          	<option value="27" <?php if ($this->_tpl_vars['banners_block']->active_days == 27): ?>selected<?php endif; ?>>27</option>
                          	<option value="28" <?php if ($this->_tpl_vars['banners_block']->active_days == 28): ?>selected<?php endif; ?>>28</option>
                          	<option value="29" <?php if ($this->_tpl_vars['banners_block']->active_days == 29): ?>selected<?php endif; ?>>29</option>
                          	<option value="30" <?php if ($this->_tpl_vars['banners_block']->active_days == 30): ?>selected<?php endif; ?>>30</option>
                          </select> <?php echo $this->_tpl_vars['LANG_DAYS']; ?>

                          &nbsp;&nbsp;
                     </div>
                     <div class="admin_option">
                          <div class="admin_option_name">
                          	<?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_CLICKS_LIMIT']; ?>

                          </div>
                          <input type="text" name="clicks_limit" value="<?php echo $this->_tpl_vars['banners_block']->clicks_limit; ?>
" size="4" class="admin_option_input">
                     </div>
                     <div class="admin_option">
                          <div class="admin_option_name">
                          	<?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_LIMITATION_MODE']; ?>
<span class="red_asterisk">*</span>
                          </div>
                          <div class="admin_option_description">
                          	<?php echo $this->_tpl_vars['LANG_BANNERS_BLOCK_LIMITATION_MODE_DESCR']; ?>

                          </div>
                          <label><input type="radio" name="limit_mode" value="active_period" class="admin_option_input" <?php if ($this->_tpl_vars['banners_block']->limit_mode == 'active_period'): ?>checked<?php endif; ?>> <?php echo $this->_tpl_vars['LANG_BANNERS_ACTIVE_PERIOD_LIMITATION']; ?>
</label>
                          <label><input type="radio" name="limit_mode" value="clicks" class="admin_option_input" <?php if ($this->_tpl_vars['banners_block']->limit_mode == 'clicks'): ?>checked<?php endif; ?>> <?php echo $this->_tpl_vars['LANG_BANNERS_CLICKS_LIMITATION']; ?>
</label>
                          <label><input type="radio" name="limit_mode" value="both" class="admin_option_input" <?php if ($this->_tpl_vars['banners_block']->limit_mode == 'both'): ?>checked<?php endif; ?>> <?php echo $this->_tpl_vars['LANG_BANNERS_BOTH_LIMITATION_DESCR']; ?>
</label>
                     </div>
                     <div class="admin_option">
                         <div class="admin_option_name">
                         	<?php echo $this->_tpl_vars['LANG_BANNERS_ALLOW_REMOTE_BANNERS']; ?>

                         </div>
                         <div class="admin_option_description">
                         	<?php echo $this->_tpl_vars['LANG_BANNERS_ALLOW_REMOTE_BANNERS_DESCR']; ?>

                         </div>
                         <label><input type="checkbox" name="allow_remote_banners" <?php if ($this->_tpl_vars['banners_block']->allow_remote_banners): ?>checked<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_ENABLED']; ?>
</label>
                     </div>
                     
                     <input class="button save_button" type=submit name="submit" value="<?php if ($this->_tpl_vars['banners_block_id'] != 'new'): ?><?php echo $this->_tpl_vars['LANG_BUTTON_SAVE_CHANGES']; ?>
<?php else: ?><?php echo $this->_tpl_vars['LANG_BUTTON_CREATE_BANNERS_BLOCK']; ?>
<?php endif; ?>">
                     </form>
                </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>