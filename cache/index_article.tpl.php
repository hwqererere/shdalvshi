<?php /* Smarty version 2.6.26, created on 2015-12-08 01:45:44
         compiled from inc/index_article.tpl */ ?>

<?php if ($this->_tpl_vars['ldrs']): ?>
<div class="incBox">
 <h3><a href="article_category.php?id=4">劳动人事</a></h3>
 <ul class="recommendArticle">
  <?php $_from = $this->_tpl_vars['ldrs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ldrs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ldrs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['ldrs']['iteration']++;
?>
  <li<?php if (($this->_foreach['ldrs']['iteration'] == $this->_foreach['ldrs']['total'])): ?> class="last"<?php endif; ?>><b><?php echo $this->_tpl_vars['article']['add_time_short']; ?>
</b><a href="<?php echo $this->_tpl_vars['article']['url']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></li>
  <?php endforeach; endif; unset($_from); ?>
 </ul>
</div>
<?php endif; ?>


<?php if ($this->_tpl_vars['jtsg']): ?>
<div class="incBox">
 <h3><a href="article_category.php?id=4">交通事故</a></h3>
 <ul class="recommendArticle">
  <?php $_from = $this->_tpl_vars['jtsg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['jtsg'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['jtsg']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['jtsg']['iteration']++;
?>
  <li<?php if (($this->_foreach['jtsg']['iteration'] == $this->_foreach['jtsg']['total'])): ?> class="last"<?php endif; ?>><b><?php echo $this->_tpl_vars['article']['add_time_short']; ?>
</b><a href="<?php echo $this->_tpl_vars['article']['url']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></li>
  <?php endforeach; endif; unset($_from); ?>
 </ul>
</div>
<?php endif; ?>


<?php if ($this->_tpl_vars['fchy']): ?>
<div class="incBox">
 <h3><a href="article_category.php?id=4">房产婚姻</a></h3>
 <ul class="recommendArticle">
  <?php $_from = $this->_tpl_vars['fchy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fchy'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fchy']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['fchy']['iteration']++;
?>
  <li<?php if (($this->_foreach['fchy']['iteration'] == $this->_foreach['fchy']['total'])): ?> class="last"<?php endif; ?>><b><?php echo $this->_tpl_vars['article']['add_time_short']; ?>
</b><a href="<?php echo $this->_tpl_vars['article']['url']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></li>
  <?php endforeach; endif; unset($_from); ?>
 </ul>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['pid110']): ?>
<div class="incBox">
 <h3><a href="article_category.php?id=4">合同纠纷</a></h3>
 <ul class="recommendArticle">
  <?php $_from = $this->_tpl_vars['pid110']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['pid110'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pid110']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['pid110']['iteration']++;
?>
  <li<?php if (($this->_foreach['pid110']['iteration'] == $this->_foreach['pid110']['total'])): ?> class="last"<?php endif; ?>><b><?php echo $this->_tpl_vars['article']['add_time_short']; ?>
</b><a href="<?php echo $this->_tpl_vars['article']['url']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></li>
  <?php endforeach; endif; unset($_from); ?>
 </ul>
</div>
<?php endif; ?>


<?php if ($this->_tpl_vars['xsbh']): ?>
<div class="incBox">
 <h3><a href="article_category.php?id=4">刑事辩护</a></h3>
 <ul class="recommendArticle">
  <?php $_from = $this->_tpl_vars['xsbh']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['xsbh'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['xsbh']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['article']):
        $this->_foreach['xsbh']['iteration']++;
?>
  <li<?php if (($this->_foreach['xsbh']['iteration'] == $this->_foreach['xsbh']['total'])): ?> class="last"<?php endif; ?>><b><?php echo $this->_tpl_vars['article']['add_time_short']; ?>
</b><a href="<?php echo $this->_tpl_vars['article']['url']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></li>
  <?php endforeach; endif; unset($_from); ?>
 </ul>
</div>
<?php endif; ?>




