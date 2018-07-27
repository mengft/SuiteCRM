<?php /* Smarty version 2.6.31, created on 2018-07-27 10:47:18
         compiled from cache/modules/AOW_WorkFlow/BugsDetailViewid.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['id']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['id']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['id']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['id']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['id']['value']; ?>
</span>