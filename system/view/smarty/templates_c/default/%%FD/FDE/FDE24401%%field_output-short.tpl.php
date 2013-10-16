<?php /* Smarty version 2.6.26, created on 2012-04-17 07:32:22
         compiled from content_fields/fields/price/field_output-short.tpl */ ?>
					<td class="content_field_output">
						<?php if ($this->_tpl_vars['field_value'] && $this->_tpl_vars['field_currency']): ?>
							<nobr><strong><?php echo $this->_tpl_vars['field_currency']; ?>
 <?php echo $this->_tpl_vars['VH']->number_format($this->_tpl_vars['field_value'],2,$this->_tpl_vars['decimals_separator'],$this->_tpl_vars['thousands_separator']); ?>
</strong></nobr>
						<?php endif; ?>
					</td>