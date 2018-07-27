<?php /* Smarty version 2.6.31, created on 2018-07-27 10:47:18
         compiled from cache/modules/AOW_WorkFlow/BugsDetailViewdeleted.tpl */ ?>

<?php if (strval ( $this->_tpl_vars['fields']['deleted']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['deleted']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['deleted']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'checked="checked"'); ?>
<?php else: ?>
<?php $this->assign('checked', ""); ?>
<?php endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['deleted']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['deleted']['name']; ?>
" value="$fields.deleted.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>