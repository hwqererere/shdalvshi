<?php /* Smarty version 2.6.26, created on 2015-10-19 07:00:24
         compiled from inc/pager.tpl */ ?>
<div class="pager"><?php if ($this->_tpl_vars['pager']['page'] > 1): ?><a href="<?php echo $this->_tpl_vars['pager']['previous']; ?>
"><?php echo $this->_tpl_vars['lang']['pager_previous']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['lang']['pager_previous']; ?>
<?php endif; ?><em><?php echo $this->_tpl_vars['lang']['pager_6']; ?>
<?php echo $this->_tpl_vars['pager']['page']; ?>
/<?php echo $this->_tpl_vars['pager']['page_count']; ?>
<?php echo $this->_tpl_vars['lang']['pager_4']; ?>
</em><?php if ($this->_tpl_vars['pager']['page'] < $this->_tpl_vars['pager']['page_count']): ?><a href="<?php echo $this->_tpl_vars['pager']['next']; ?>
"><?php echo $this->_tpl_vars['lang']['pager_next']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['lang']['pager_next']; ?>
<?php endif; ?></div>