<?php /* Smarty version 2.6.26, created on 2015-10-11 04:49:32
         compiled from inc/index_article.tpl */ ?>
<?php if ($this->_tpl_vars['ldrs']): ?>
<div class="incBox">
 <div class="articleList">
  <?php $_from = $this->_tpl_vars['ldrs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ldrs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ldrs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['ldrs']['iteration']++;
?>
  <dl>
   <dt><a href="<?php echo $this->_tpl_vars['article']['url']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></dt>
   <dd><em><?php echo $this->_tpl_vars['lang']['add_time']; ?>
：<?php echo $this->_tpl_vars['article']['add_time']; ?>
</em><em><?php echo $this->_tpl_vars['lang']['click']; ?>
：<?php echo $this->_tpl_vars['article']['click']; ?>
</em></dd>
  </dl>
  <?php endforeach; endif; unset($_from); ?>
 </div>
</div>
<?php endif; ?>


<?php if ($this->_tpl_vars['jtsg']): ?>
<div class="incBox">
 
 <div class="articleList">
  <?php $_from = $this->_tpl_vars['jtsg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['jtsg'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['jtsg']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['jtsg']['iteration']++;
?>
  <dl>
   <dt><a href="<?php echo $this->_tpl_vars['article']['url']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></dt>
   <dd><em><?php echo $this->_tpl_vars['lang']['add_time']; ?>
：<?php echo $this->_tpl_vars['article']['add_time']; ?>
</em><em><?php echo $this->_tpl_vars['lang']['click']; ?>
：<?php echo $this->_tpl_vars['article']['click']; ?>
</em></dd>
  </dl>
  <?php endforeach; endif; unset($_from); ?>
 </div>
</div>
<?php endif; ?>



<?php if ($this->_tpl_vars['fchy']): ?>
<div class="incBox">

 <div class="articleList">
  <?php $_from = $this->_tpl_vars['fchy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fchy'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fchy']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['fchy']['iteration']++;
?>
  <dl>
   <dt><a href="<?php echo $this->_tpl_vars['article']['url']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></dt>
   <dd><em><?php echo $this->_tpl_vars['lang']['add_time']; ?>
：<?php echo $this->_tpl_vars['article']['add_time']; ?>
</em><em><?php echo $this->_tpl_vars['lang']['click']; ?>
：<?php echo $this->_tpl_vars['article']['click']; ?>
</em></dd>
  </dl>
  <?php endforeach; endif; unset($_from); ?>
 </div>
</div>
<?php endif; ?>


<?php if ($this->_tpl_vars['xsbh']): ?>
<div class="incBox">
 
 <div class="articleList">
  <?php $_from = $this->_tpl_vars['xsbh']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['xsbh'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['xsbh']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['xsbh']['iteration']++;
?>
  <dl>
   <dt><a href="<?php echo $this->_tpl_vars['article']['url']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></dt>
   <dd><em><?php echo $this->_tpl_vars['lang']['add_time']; ?>
：<?php echo $this->_tpl_vars['article']['add_time']; ?>
</em><em><?php echo $this->_tpl_vars['lang']['click']; ?>
：<?php echo $this->_tpl_vars['article']['click']; ?>
</em></dd>
  </dl>
  <?php endforeach; endif; unset($_from); ?>
 </div>
</div>
<?php endif; ?>






