<?php /* Smarty version 2.6.26, created on 2015-10-11 04:49:32
         compiled from inc/header.tpl */ ?>
<div id="header">
 <?php if ($this->_tpl_vars['index']['cur']): ?>
 <em class="logo"><?php if ($this->_tpl_vars['site']['mobile_logo']): ?><img src="http://www.shdalvshi.com/m/theme/default/images/<?php echo $this->_tpl_vars['site']['mobile_logo']; ?>
"><?php else: ?><?php echo $this->_tpl_vars['site']['mobile_name']; ?>
<?php endif; ?></em>
 <?php else: ?>
 <a href="<?php echo $this->_tpl_vars['site']['m_url']; ?>
" class="home"></a>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['is_product_list'] || $this->_tpl_vars['search_module'] == 'product'): ?>
 <div class="topSearch"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/search_product.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
 <?php elseif ($this->_tpl_vars['is_article_list'] || $this->_tpl_vars['search_module'] == 'article'): ?>
 <div class="topSearch"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/search_article.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
 <?php else: ?>
 <em><?php echo $this->_tpl_vars['head']; ?>
</em>
 <?php endif; ?>
 <a href="<?php echo $this->_tpl_vars['site']['catalog_link']; ?>
" class="siteMap"></a>
</div>