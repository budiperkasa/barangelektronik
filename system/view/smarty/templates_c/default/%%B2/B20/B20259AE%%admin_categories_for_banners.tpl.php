<?php /* Smarty version 2.6.26, created on 2012-04-17 08:25:07
         compiled from backend/blocks/admin_categories_for_banners.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'backend/blocks/admin_categories_for_banners.tpl', 110, false),)), $this); ?>
<?php if ($this->_tpl_vars['categories_tree']): ?>
<?php $this->assign('types_model', $this->_tpl_vars['CI']->load->model('types','types_levels')); ?>
<?php $this->assign('types_with_local_categories', $this->_tpl_vars['types_model']->selectLocalCategoriesTypes()); ?>

<?php $this->assign('checked_categories', $this->_tpl_vars['banner']->getCheckedCategories()); ?>
<script language="javascript" type="text/javascript">
	var ajax_categories_url = "<?php echo $this->_tpl_vars['VH']->site_url('ajax/categories_request/backend/categories/admin_management_for_banners.tpl'); ?>
";
	var categories_stat =  [
	<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'backend/categories/admin_management_for_banners.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('template', ob_get_contents()); ob_end_clean();
 ?>
	<?php $this->assign('i', 0); ?>
	<?php $_from = $this->_tpl_vars['categories_tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
		<?php echo $this->_tpl_vars['category']->render($this->_tpl_vars['template'],false,$this->_tpl_vars['max_depth'],$this->_tpl_vars['checked_categories'],' "checked" : "true"',', state : "closed"'); ?>

	<?php endforeach; endif; unset($_from); ?>
	];

	jQuery( function($) {
		function categories_check_checkboxes() {
			var checked_list = $('#categories_checked_list').val().split('*');
			$('#categories_list li').each(function() {
				var check_this_id = ($(this).attr("id")+"").replace('category_', '');
				if ($.inArray(check_this_id, checked_list) != -1) {
					$.jstree._reference("#categories_list").check_node($(this));
				}
			});
		}

		function categories_checkedSerialize(node, unchecked) {
			var checked_id = ($(node).attr("id")+"").replace('category_', '');
			var checked_list = $('#categories_checked_list').val().split('*');

			if (!unchecked && $.inArray(checked_id, checked_list) == -1) {
				checked_list.push(checked_id);
			}
			if (unchecked && $.inArray(checked_id, checked_list) != -1) {
				for (var i in checked_list) {
				    if(checked_list[i] == checked_id) {
				    	checked_list.splice(i, 1);
				        break;
					}
				}
			}
			$('#categories_checked_list').attr('value', checked_list.join('*'));
		}

		function categories_nesting() {
			$("#categories_list").jstree({
				"themes" : {
					"theme" : "classic",
					"url" : "<?php echo $this->_tpl_vars['smarty_obj']->getFileInTheme('css/jsTree_themes_v10/classic/style.css'); ?>
",
					"icons" : true
				},
				"json_data" : {
					"data" : categories_stat,
					"ajax" : {
						"url" : ajax_categories_url,
						"data" : function (n) {
							return { id : ($(n).attr("id")+"").replace('category_', ''), max_depth : '<?php echo $this->_tpl_vars['max_depth']; ?>
', selected_categories : JSON.stringify($('#categories_checked_list').val().split('*')), highlight_element : ' \"checked\" : \"true\"', is_children_label : ', "state" : "closed"' };
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
				categories_checkedSerialize(data.rslt.obj, false);
			}).bind("uncheck_node.jstree", function (e, data) {
				categories_checkedSerialize(data.rslt.obj, true);
			}).bind("open_node.jstree", function (e, data) {
				categories_check_checkboxes();
			}).bind("loaded.jstree", function () {
				categories_check_checkboxes();
			});
		}

		categories_nesting();

		$("#use_all_categories").click( function() {
			if ($('#use_all_categories').is(':checked')) {
				$("#show_hide_categories").hide(200);
			} else {
				$("#show_hide_categories").show(200);
			}
		});

		$("#select_categories_list").change( function() {
			ajax_loader_show("Loading categories list...");
			var selected_type_id = $("#select_categories_list option:selected").val();
			$.post(ajax_categories_url, { id:0, type_id:selected_type_id, max_depth:'<?php echo $this->_tpl_vars['max_depth']; ?>
', selected_categories:JSON.stringify($('#categories_checked_list').val().split('*')), highlight_element:' \"checked\" : \"true\"', is_children_label:', "state" : "closed"' }, function(data) {
				$.jstree._reference("#categories_list")._get_settings().json_data.data = data;
				$.jstree._reference("#categories_list").refresh(-1);
				categories_check_checkboxes();
				ajax_loader_hide();
			}, "json");
		});
	});
</script>

<div class="admin_option">
	<div class="admin_option_name" >
		<?php echo $this->_tpl_vars['LANG_BANNERS_IN_CATEGORIES']; ?>
<span class="red_asterisk">*</span>
	</div>

	<label><input type="checkbox" name="use_all_categories" id="use_all_categories" value="1" <?php if ($this->_tpl_vars['banner']->isAllCategoriesChecked()): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_tpl_vars['LANG_BANNERS_IN_ALL_CATEGORIES']; ?>
</label>
	<div id="show_hide_categories" <?php if ($this->_tpl_vars['banner']->isAllCategoriesChecked()): ?>style="display:none"<?php endif; ?>>
		<?php if (count($this->_tpl_vars['types_with_local_categories']) > 0): ?>
		<select name="select_categories_list" id="select_categories_list">
			<option value="0"><?php echo $this->_tpl_vars['LANG_BANNERS_GLOBAL_CATEGORIES']; ?>
</option>
			<?php $_from = $this->_tpl_vars['types_with_local_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type']):
?>
			<option value="<?php echo $this->_tpl_vars['type']['id']; ?>
"><?php echo $this->_tpl_vars['type']['name']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>
		<br />
		<br />
		<?php endif; ?>
		
		<div id="categories_list"></div>
		<input type="hidden" id="categories_checked_list" name="categories_checked_list" value="<?php echo $this->_tpl_vars['VH']->implode('*',$this->_tpl_vars['checked_categories']); ?>
" />
	</div>
</div>
<?php endif; ?>