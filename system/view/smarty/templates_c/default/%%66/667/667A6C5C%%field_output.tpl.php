<?php /* Smarty version 2.6.26, created on 2012-04-18 04:33:33
         compiled from content_fields/fields/price/field_output.tpl */ ?>
					<?php if ($this->_tpl_vars['field_value'] && $this->_tpl_vars['field_currency']): ?>
					<div class="content_field_output">
						<nobr><strong><?php if ($this->_tpl_vars['field']->frontend_name): ?><?php echo $this->_tpl_vars['field']->frontend_name; ?>
<?php else: ?><?php echo $this->_tpl_vars['field']->name; ?>
<?php endif; ?></strong>: <?php echo $this->_tpl_vars['field_currency']; ?>
 <?php echo $this->_tpl_vars['VH']->number_format($this->_tpl_vars['field_value'],2,$this->_tpl_vars['decimals_separator'],$this->_tpl_vars['thousands_separator']); ?>
</nobr>
					</div>
					<?php endif; ?>