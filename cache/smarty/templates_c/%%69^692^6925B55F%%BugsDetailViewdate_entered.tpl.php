<?php /* Smarty version 2.6.31, created on 2018-07-27 10:47:18
         compiled from cache/modules/AOW_WorkFlow/BugsDetailViewdate_entered.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['aow_temp_date']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['aow_temp_date']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['aow_temp_date']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['aow_temp_date']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['aow_temp_date']['value']; ?>
</span>