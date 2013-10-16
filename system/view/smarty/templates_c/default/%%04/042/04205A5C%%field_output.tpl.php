<?php /* Smarty version 2.6.26, created on 2012-04-17 12:07:35
         compiled from content_fields/fields/richtext/field_output.tpl */ ?>
			<?php if ($this->_tpl_vars['field']->value != ''): ?>
			<div class="content_field_output">
				<?php if ($this->_tpl_vars['field']->frontend_name): ?><strong><?php echo $this->_tpl_vars['field']->frontend_name; ?>
</strong>:<br/><?php endif; ?>
				<?php echo $this->_tpl_vars['field']->value; ?>

			</div>
			<?php endif; ?>