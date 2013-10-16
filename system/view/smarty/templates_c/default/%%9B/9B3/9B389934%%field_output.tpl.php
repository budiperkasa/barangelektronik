<?php /* Smarty version 2.6.26, created on 2012-04-17 07:43:16
         compiled from content_fields/fields/email/field_output.tpl */ ?>
					<?php if ($this->_tpl_vars['field']->value != ''): ?>
					<div class="content_field_output">
						<?php if ($this->_tpl_vars['field']->frontend_name): ?><strong><?php echo $this->_tpl_vars['field']->frontend_name; ?>
</strong>:<?php endif; ?>
						<script type="text/javascript">
							Email='<?php echo $this->_tpl_vars['part1']; ?>
'+'<?php echo $this->_tpl_vars['part2']; ?>
'; 
							document.write('<a href="mailto: '+Email+'">'+Email+'<'+'/a>');
						</script>
					</div>
					<?php endif; ?>