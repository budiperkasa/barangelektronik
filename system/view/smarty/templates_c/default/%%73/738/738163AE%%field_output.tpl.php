<?php /* Smarty version 2.6.26, created on 2012-04-17 07:32:22
         compiled from content_fields/fields/datetimerange/field_output.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'content_fields/fields/datetimerange/field_output.tpl', 1, false),)), $this); ?>
					<?php if ($this->_tpl_vars['from_value'] != '' || $this->_tpl_vars['to_value'] != '' || count($this->_tpl_vars['dates_array']) || $this->_tpl_vars['cycle_days_monday'] || $this->_tpl_vars['cycle_days_tuesday'] || $this->_tpl_vars['cycle_days_wednesday'] || $this->_tpl_vars['cycle_days_thursday'] || $this->_tpl_vars['cycle_days_friday'] || $this->_tpl_vars['cycle_days_saturday'] || $this->_tpl_vars['cycle_days_sunday']): ?>
						<div class="content_field_output">
							<strong><?php if ($this->_tpl_vars['field']->frontend_name): ?><?php echo $this->_tpl_vars['field']->frontend_name; ?>
<?php else: ?><?php echo $this->_tpl_vars['field']->name; ?>
<?php endif; ?></strong>:
							<?php if ($this->_tpl_vars['from_value'] != '' || $this->_tpl_vars['to_value'] != ''): ?><br /><?php endif; ?>
							<?php if ($this->_tpl_vars['from_value'] != ''): ?><b><?php echo $this->_tpl_vars['LANG_FROM_DATERANGE']; ?>
</b> <?php echo $this->_tpl_vars['from_value']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['to_value'] != ''): ?><b><?php echo $this->_tpl_vars['LANG_TO_DATERANGE']; ?>
</b> <?php echo $this->_tpl_vars['to_value']; ?>
<?php endif; ?>
							<?php if ($this->_tpl_vars['cycle_days_monday'] && $this->_tpl_vars['cycle_days_tuesday'] && $this->_tpl_vars['cycle_days_wednesday'] && $this->_tpl_vars['cycle_days_friday'] && $this->_tpl_vars['cycle_days_saturday'] && $this->_tpl_vars['cycle_days_sunday']): ?>
								<br /><?php echo $this->_tpl_vars['LANG_EVERY_DAY']; ?>

							<?php else: ?>
								<?php if (count($this->_tpl_vars['dates_array']) || $this->_tpl_vars['cycle_days_monday'] || $this->_tpl_vars['cycle_days_tuesday'] || $this->_tpl_vars['cycle_days_wednesday'] || $this->_tpl_vars['cycle_days_thursday'] || $this->_tpl_vars['cycle_days_friday'] || $this->_tpl_vars['cycle_days_saturday'] || $this->_tpl_vars['cycle_days_sunday']): ?>
									<br />
									<?php if ($this->_tpl_vars['cycle_days_monday']): ?><?php echo $this->_tpl_vars['LANG_EVERY_MONDAY']; ?>
<br /><?php endif; ?>
									<?php if ($this->_tpl_vars['cycle_days_tuesday']): ?><?php echo $this->_tpl_vars['LANG_EVERY_TUESDAY']; ?>
<br /><?php endif; ?>
									<?php if ($this->_tpl_vars['cycle_days_wednesday']): ?><?php echo $this->_tpl_vars['LANG_EVERY_WEDNESDAY']; ?>
<br /><?php endif; ?>
									<?php if ($this->_tpl_vars['cycle_days_thursday']): ?><?php echo $this->_tpl_vars['LANG_EVERY_THURSDAY']; ?>
<br /><?php endif; ?>
									<?php if ($this->_tpl_vars['cycle_days_friday']): ?><?php echo $this->_tpl_vars['LANG_EVERY_FRIDAY']; ?>
<br /><?php endif; ?>
									<?php if ($this->_tpl_vars['cycle_days_saturday']): ?><?php echo $this->_tpl_vars['LANG_EVERY_SATURDAY']; ?>
<br /><?php endif; ?>
									<?php if ($this->_tpl_vars['cycle_days_sunday']): ?><?php echo $this->_tpl_vars['LANG_EVERY_SUNDAY']; ?>
<br /><?php endif; ?>
									<?php if (count($this->_tpl_vars['dates_array']) && ( $this->_tpl_vars['cycle_days_monday'] || $this->_tpl_vars['cycle_days_tuesday'] || $this->_tpl_vars['cycle_days_wednesday'] || $this->_tpl_vars['cycle_days_thursday'] || $this->_tpl_vars['cycle_days_friday'] || $this->_tpl_vars['cycle_days_saturday'] || $this->_tpl_vars['cycle_days_sunday'] )): ?>and<br /><?php endif; ?>
									<?php $_from = $this->_tpl_vars['dates_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['date']):
?>
										<?php echo $this->_tpl_vars['VH']->date($this->_tpl_vars['format'],$this->_tpl_vars['VH']->strtotime($this->_tpl_vars['date'])); ?>
<br />
									<?php endforeach; endif; unset($_from); ?>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					<?php endif; ?>