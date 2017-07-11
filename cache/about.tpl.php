<?php /* Smarty version 2.6.26, created on 2016-12-29 15:10:40
         compiled from inc/about.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'inc/about.tpl', 7, false),)), $this); ?>
<div class="incBox">
 <h3><?php echo $this->_tpl_vars['index']['about_name']; ?>
</h3>
 <div class="about">
  <p><img src="http://www.shdalvshi.com/theme/default/images/img_company.jpg" width="120" height="154" /></p>
  <dl>
   <dt><?php echo $this->_tpl_vars['site']['site_name']; ?>
</dt>
   <dd><?php echo ((is_array($_tmp=$this->_tpl_vars['index']['about_content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100, "...") : smarty_modifier_truncate($_tmp, 100, "...")); ?>
</dd>
  </dl>
  <div class="clear"></div>
  <a href="<?php echo $this->_tpl_vars['index']['about_link']; ?>
" class="aboutBtn"><?php echo $this->_tpl_vars['lang']['about_link']; ?>
<?php echo $this->_tpl_vars['index']['about_name']; ?>
</a>
 </div>
</div> 