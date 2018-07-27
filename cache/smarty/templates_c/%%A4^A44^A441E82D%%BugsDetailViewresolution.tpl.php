<?php /* Smarty version 2.6.31, created on 2018-07-27 10:47:18
         compiled from cache/modules/AOW_WorkFlow/BugsDetailViewresolution.tpl */ ?>


<?php if (is_string ( $this->_tpl_vars['fields']['resolution']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['resolution']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['resolution']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['resolution']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['resolution']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['resolution']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['resolution']['options'][$this->_tpl_vars['fields']['resolution']['value']]; ?>

<?php endif; ?>