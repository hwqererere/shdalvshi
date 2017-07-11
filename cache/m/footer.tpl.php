<?php /* Smarty version 2.6.26, created on 2015-10-11 04:49:32
         compiled from inc/footer.tpl */ ?>
<div id="footer">
 <a href="javascript:;" onfocus="this.blur();" class="goTop"><?php echo $this->_tpl_vars['lang']['go_top']; ?>
</a>
 <ul>
  <li class="footNav"><a href="<?php echo $this->_tpl_vars['site']['m_url']; ?>
"><?php echo $this->_tpl_vars['lang']['dou_mobile']; ?>
</a><a href="<?php echo $this->_tpl_vars['site']['root_url']; ?>
"><?php echo $this->_tpl_vars['lang']['dou_pc']; ?>
</a></li>
  <li class="copyRight"><?php echo $this->_tpl_vars['lang']['copyright']; ?>
</li>
  <li class="powered"><?php echo $this->_tpl_vars['lang']['powered_by']; ?>
 <?php if ($this->_tpl_vars['site']['icp']): ?><?php echo $this->_tpl_vars['site']['icp']; ?>
<?php endif; ?></li>
 </ul>
</div>
<?php if ($this->_tpl_vars['site']['code']): ?>
<div style="display:none"><?php echo $this->_tpl_vars['site']['code']; ?>
</div>
<?php endif; ?>