<?php /* Smarty version 2.6.26, created on 2012-04-19 15:01:34
         compiled from payment/admin_my_transactions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'payment/admin_my_transactions.tpl', 6, false),array('modifier', 'date_format', 'payment/admin_my_transactions.tpl', 46, false),array('function', 'asc_desc_insert', 'payment/admin_my_transactions.tpl', 16, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				<div class="content">
                     <h3><?php echo $this->_tpl_vars['LANG_MY_TRANSACTIONS']; ?>
</h3>

                     <?php if (count($this->_tpl_vars['transactions']) > 0): ?>
                     <table class="standardTable" border="0" cellpadding="2" cellspacing="2">
                       <tr>
                         <th><?php echo $this->_tpl_vars['LANG_PAYMENT_GOODS_TITLE']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_TRANSACTION_METHOD']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_TRANSACTION_STATUS']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_TRANSACTION_QUANTITY']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_TRANSACTION_CURRENCY']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_TRANSACTION_AMOUNT']; ?>
</th>
                         <th><?php echo $this->_tpl_vars['LANG_TRANSACTION_FEE']; ?>
</th>
                         <th><?php echo smarty_function_asc_desc_insert(array('base_url' => $this->_tpl_vars['search_url'],'orderby' => 'payment_date','orderby_query' => $this->_tpl_vars['orderby'],'direction' => $this->_tpl_vars['direction'],'title' => $this->_tpl_vars['LANG_TRANSACTION_PAYMENTDATE']), $this);?>
</th>
                       </tr>
                       <?php $_from = $this->_tpl_vars['transactions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['transaction']):
?>
                       <tr>
                         <td>
                         	<?php if ($this->_tpl_vars['transaction']->invoice->goods_content->goods_id && $this->_tpl_vars['transaction']->invoice->getViewUrl()): ?>
                            <a href="<?php echo $this->_tpl_vars['transaction']->invoice->getViewUrl(); ?>
" title="<?php echo $this->_tpl_vars['LANG_VIEW_ITEM_OPTION']; ?>
"><?php echo $this->_tpl_vars['transaction']->invoice->goods_title; ?>
</a>&nbsp;
                            <?php else: ?>
                            <?php echo $this->_tpl_vars['transaction']->invoice->goods_title; ?>

                            <?php endif; ?>
                         </td>
                         <td>
                         	<?php echo $this->_tpl_vars['transaction']->payment_gateway; ?>

                         </td>
                         <td>
                         	<?php echo $this->_tpl_vars['transaction']->payment_status; ?>

                         </td>
                         <td>
                             <?php echo $this->_tpl_vars['transaction']->quantity; ?>

                         </td>
                         <td>
                             <?php echo $this->_tpl_vars['transaction']->currency; ?>

                         </td>
                         <td>
                             <?php echo $this->_tpl_vars['VH']->number_format($this->_tpl_vars['transaction']->value,2,$this->_tpl_vars['decimals_separator'],$this->_tpl_vars['thousands_separator']); ?>

                         </td>
                         <td>
                             <?php echo $this->_tpl_vars['transaction']->fee; ?>

                         </td>
                         <td>
                             <?php echo ((is_array($_tmp=$this->_tpl_vars['transaction']->payment_date)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D %T") : smarty_modifier_date_format($_tmp, "%D %T")); ?>
&nbsp;
                         </td>
                       </tr>
                       <?php endforeach; endif; unset($_from); ?>
                     </table>
                     <?php echo $this->_tpl_vars['paginator']; ?>

                     <?php endif; ?>
                </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "backend/admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>