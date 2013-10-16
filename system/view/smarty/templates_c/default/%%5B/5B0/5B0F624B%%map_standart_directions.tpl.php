<?php /* Smarty version 2.6.26, created on 2012-04-17 07:43:16
         compiled from frontend/blocks/map_standart_directions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addslashes', 'frontend/blocks/map_standart_directions.tpl', 9, false),array('modifier', 'count', 'frontend/blocks/map_standart_directions.tpl', 17, false),)), $this); ?>
<?php if ($this->_tpl_vars['items_array']): ?>
<?php if ($this->_tpl_vars['clasterization']): ?>
<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['smarty_obj']->getFileInTheme('js/google_maps_clasterer.js'); ?>
"></script>
<?php endif; ?>
<script language="Javascript" type="text/javascript">
	map_markers_attrs_array.push(new map_markers_attrs(<?php echo $this->_tpl_vars['unique_map_id']; ?>
, eval(<?php echo $this->_tpl_vars['items_array']; ?>
)));
	var global_map_icons_path = '<?php echo $this->_tpl_vars['public_path']; ?>
map_icons/';
	var global_server_path = '<?php echo $this->_tpl_vars['users_content']; ?>
';
	var view_listing_label = '<?php echo smarty_function_addslashes(array('string' => $this->_tpl_vars['LANG_VIEW_LISTING']), $this);?>
';
	var view_summary_label = '<?php echo smarty_function_addslashes(array('string' => $this->_tpl_vars['LANG_LISTING_SUMMARY']), $this);?>
';
</script>

<div id="maps_canvas_<?php echo $this->_tpl_vars['unique_map_id']; ?>
" class="maps_canvas" <?php if ($this->_tpl_vars['map_width'] || $this->_tpl_vars['map_height']): ?>style="<?php if ($this->_tpl_vars['map_width']): ?>width: <?php echo $this->_tpl_vars['map_width']; ?>
px;<?php endif; ?> <?php if ($this->_tpl_vars['map_height']): ?>height: <?php echo $this->_tpl_vars['map_height']; ?>
px;<?php endif; ?>"<?php endif; ?>></div>
From: <input type="text" size="60" id="from_direction_<?php echo $this->_tpl_vars['unique_map_id']; ?>
" />
<div class="px3"></div>
To:
<?php if (count($this->_tpl_vars['common_locations_array']) > 1): ?>
	<div class="px3"></div>
<?php endif; ?>
<?php $this->assign('i', 1); ?>
<?php $_from = $this->_tpl_vars['common_locations_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['location']):
?>
	<input type="radio" name="select_direction" class="select_direction_<?php echo $this->_tpl_vars['unique_map_id']; ?>
" <?php if (count($this->_tpl_vars['common_locations_array']) == 1): ?>style="display:none"<?php endif; ?> <?php if ($this->_tpl_vars['i']++ == 1): ?>checked<?php endif; ?> value="<?php echo $this->_tpl_vars['location']->compileAddress(); ?>
" />&nbsp;<b><?php echo $this->_tpl_vars['location']->compileAddress(); ?>
</b>
	<div class="px3"></div>
<?php endforeach; endif; unset($_from); ?>
<input type="button" class="direction_button front-btn" id="get_direction_button_<?php echo $this->_tpl_vars['unique_map_id']; ?>
" value="Get direction">
<div class="px10"></div>
<div id="route_<?php echo $this->_tpl_vars['unique_map_id']; ?>
"></div>
<?php endif; ?>