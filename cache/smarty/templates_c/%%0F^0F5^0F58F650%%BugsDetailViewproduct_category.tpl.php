<?php /* Smarty version 2.6.31, created on 2018-07-27 10:47:18
         compiled from cache/modules/AOW_WorkFlow/BugsDetailViewproduct_category.tpl */ ?>


<?php if (is_string ( $this->_tpl_vars['fields']['product_category']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['product_category']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['product_category']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['product_category']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['product_category']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['product_category']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['product_category']['options'][$this->_tpl_vars['fields']['product_category']['value']]; ?>

<?php endif; ?>