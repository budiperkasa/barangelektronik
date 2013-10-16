<?php /* Smarty version 2.6.26, created on 2012-04-17 08:25:07
         compiled from backend/blocks/admin_locations_for_banners.tpl */ ?>
<?php if ($this->_tpl_vars['locations_tree']): ?>
<?php $this->assign('checked_locations', $this->_tpl_vars['banner']->getCheckedLocations()); ?>
<script language="javascript" type="text/javascript">
	var ajax_locations_url = "<?php echo $this->_tpl_vars['VH']->site_url('ajax/locations_request/backend/locations/admin_management_for_banners.tpl'); ?>
";
	var locations_stat =  [
	<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'backend/locations/admin_management_for_banners.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('template', ob_get_contents()); ob_end_clean();
 ?>
	<?php $this->assign('i', 0); ?>
	<?php $_from = $this->_tpl_vars['locations_tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['location']):
?>
		<?php echo $this->_tpl_vars['location']->render($this->_tpl_vars['template'],false,$this->_tpl_vars['max_depth'],$this->_tpl_vars['checked_locations'],', "checked" : "true"',', state : "closed"',$this->_tpl_vars['is_only_labeled']); ?>

	<?php endforeach; endif; unset($_from); ?>
	];

	jQuery( function($) {
		function locations_check_checkboxes() {
			$('#locations_list li[checked=true]').each(function() {
				$.jstree._reference("#locations_list").check_node($(this));
			});
		}

		function locations_checkedSerialize() {
			var checked_list = [];
			$.jstree._reference("#locations_list").get_checked().each(function() {
				checked_list.push(($(this).attr("id")+"").replace('location_', ''));
			});
			$('#locations_checked_list').attr('value', checked_list.join('*'));
		}

		function locations_checkNode(node) {
			$(node).attr("checked", "true");
			locations_checkedSerialize();
		}

		function locations_uncheckNode(node) {
			$(node).removeAttr("checked");
			locations_checkedSerialize();
		}

		function locations_nesting() {
			$("#locations_list").jstree({
				"themes" : {
					"theme" : "classic",
					"url" : "<?php echo $this->_tpl_vars['smarty_obj']->getFileInTheme('css/jsTree_themes_v10/classic/style.css'); ?>
",
					"icons" : false
				},
				"json_data" : {
					"data" : locations_stat,
					"ajax" : {
						"url" : ajax_locations_url,
						"data" : function (n) {
							return { id : ($(n).attr("id")+"").replace('location_', ''), max_depth : '<?php echo $this->_tpl_vars['max_depth']; ?>
', selected_locations : JSON.stringify($('#locations_checked_list').val().split('*')), highlight_element : ', \"checked\" : \"true\"', is_children_label : ', "state" : "closed"', is_only_labeled : '<?php echo $this->_tpl_vars['is_only_labeled']; ?>
' };
						},
						"type" : "post"
					},
					"progressive_render" : true
				},
				"core" : {
						"html_titles" : true,
						"animation" : 100
				},
				"plugins" : ["themes", "json_data", "checkbox"],
				"checkbox" : { "two_state" : true }
			}).bind("check_node.jstree", function (e, data) {
				locations_checkNode(data.rslt.obj);
			}).bind("uncheck_node.jstree", function (e, data) {
				locations_uncheckNode(data.rslt.obj);
			}).bind("open_node.jstree", function (e, data) {
				locations_check_checkboxes();
			}).bind("loaded.jstree", function () {
				locations_check_checkboxes();
			});
			$.jstree._reference("#locations_list").show_checkboxes();
		}
	
		locations_nesting();

		$("#use_all_locations").click( function() {
			if ($('#use_all_locations').is(':checked')) {
				$("#show_hide_locations").hide(200);
			} else {
				$("#show_hide_locations").show(200);
			}
		});
	});
</script>

<div class="admin_option">
	<div class="admin_option_name" >
		<?php echo $this->_tpl_vars['LANG_BANNERS_IN_LOCATIONS']; ?>
<span class="red_asterisk">*</span>
	</div>

	<label><input type="checkbox" name="use_all_locations" id="use_all_locations" value="1" <?php if ($this->_tpl_vars['banner']->isAllLocationsChecked()): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_BANNERS_IN_ALL_LOCATIONS']; ?>
</label>
	<div id="show_hide_locations" <?php if ($this->_tpl_vars['banner']->isAllLocationsChecked()): ?>style="display:none"<?php endif; ?>>
		<div id="locations_list"></div>
		<input type="hidden" id="locations_checked_list" name="locations_checked_list" value="<?php echo $this->_tpl_vars['VH']->implode('*',$this->_tpl_vars['checked_locations']); ?>
" />
	</div>
</div>
<?php endif; ?>