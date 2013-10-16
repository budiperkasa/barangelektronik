<?php /* Smarty version 2.6.26, created on 2012-04-17 07:32:22
         compiled from calendar/calendar_block.tpl */ ?>
	<script language="javascript" type="text/javascript">
		$(document).ready( function() {
			$("#datepicker").datepicker({
				changeMonth: true,
				changeYear: true,
				onSelect: function(dateText) {
					window.location.href = '<?php echo $this->_tpl_vars['url']; ?>
'+$.datepicker.formatDate('yy-mm-dd', $("#datepicker").datepicker("getDate"));
				}
			});
			<?php if (( $this->_tpl_vars['defaultDate'] )): ?>
			$("#datepicker").datepicker('setDate', $.datepicker.parseDate('@', '<?php echo $this->_tpl_vars['defaultDate']; ?>
000'));
			<?php endif; ?>
			$("#datepicker").datepicker("option", $.datepicker.regional["<?php echo $this->_tpl_vars['current_language']; ?>
"]);
		});
	</script>
	<div class="block calendar_block">
		<!-- Heading Starts -->
		<div class="block-top"><div class="block-top-title"><?php echo $this->_tpl_vars['name']; ?>
</div></div>
		<div id="datepicker"></div>
	</div>
	