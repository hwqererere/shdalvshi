<?php /* Smarty version 2.6.26, created on 2015-10-17 03:00:26
         compiled from guestbook.dwt */ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,user-scalable=0,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link rel="apple-touch-icon-precomposed" href="<?php echo $this->_tpl_vars['site']['m_url']; ?>
data/logo-icon.png" >
<title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
<meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['description']; ?>
" />
<meta name="generator" content="DouPHP v1.1" />
<link href="http://www.shdalvshi.com/m/theme/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://www.shdalvshi.com/m/theme/default/images/jquery.min.js"></script>
<script type="text/javascript" src="http://www.shdalvshi.com/m/theme/default/images/global.js"></script>
<script type="text/javascript" src="http://www.shdalvshi.com/m/theme/default/images/slide_show.js"></script>
</head>
<body>
<div id="wrapper"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div class="mb">
  <div id="guestBook"> <?php if ($this->_tpl_vars['guestbook']): ?>
   <h2><?php echo $this->_tpl_vars['lang']['guestbook']; ?>
</h2>
   <div class="bookList"> 
    <?php $_from = $this->_tpl_vars['guestbook']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['guestbook']):
?>
    <dl>
     <dt><?php echo $this->_tpl_vars['guestbook']['add_time']; ?>
：<?php echo $this->_tpl_vars['guestbook']['title']; ?>
</dt>
     <dd><?php echo $this->_tpl_vars['guestbook']['content']; ?>
</dd>
     <?php if ($this->_tpl_vars['guestbook']['reply']): ?>
     <p><em><?php echo $this->_tpl_vars['lang']['guestbook_reply']; ?>
：</em><?php echo $this->_tpl_vars['guestbook']['reply']; ?>
</p>
     <?php endif; ?>
    </dl>
    <?php endforeach; endif; unset($_from); ?> 
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
   <?php endif; ?>
   <h2><?php echo $this->_tpl_vars['lang']['guestbook_add']; ?>
</h2>
   <div class="bookAdd">
    <form action="<?php echo $this->_tpl_vars['insert_url']; ?>
" method="post">
     <dl>
      <input type="text" name="title" value="<?php echo $this->_tpl_vars['post']['title']; ?>
" placeholder="<?php echo $this->_tpl_vars['lang']['m_guestbook_title']; ?>
" class="textInput" />
      <?php echo $this->_tpl_vars['wrong']['title']; ?>

     </dl>
     <dl>
      <input type="text" name="name" value="<?php echo $this->_tpl_vars['post']['name']; ?>
" placeholder="<?php echo $this->_tpl_vars['lang']['m_guestbook_name']; ?>
" class="textInput" />
      <?php echo $this->_tpl_vars['wrong']['name']; ?>

     </dl>
     <dl class="contact">
      <dt>
       <select name="contact_type" class="select">
        <option value=""><?php echo $this->_tpl_vars['lang']['m_guestbook_contact_type']; ?>
</option>
        <?php echo $this->_tpl_vars['option']; ?>

       </select>
      </dt>
      <dd>
       <input type="text" name="contact" value="<?php echo $this->_tpl_vars['post']['contact']; ?>
" placeholder="<?php echo $this->_tpl_vars['lang']['m_guestbook_contact']; ?>
" class="textInput" />
      </dd>
      <?php echo $this->_tpl_vars['wrong']['contact']; ?>

     </dl>
     <dl>
      <textarea name="content" placeholder="<?php echo $this->_tpl_vars['lang']['m_guestbook_content']; ?>
" rows="5" class="textArea" /><?php echo $this->_tpl_vars['post']['content']; ?>
</textarea>
      <?php echo $this->_tpl_vars['wrong']['content']; ?>

     </dl>
     <dl>
      <input name="vcode" type="text" placeholder="<?php echo $this->_tpl_vars['lang']['m_captcha']; ?>
" class="textInput vcode" size="10">
      <img src="<?php echo $this->_tpl_vars['site']['root_url']; ?>
captcha.php" alt="<?php echo $this->_tpl_vars['lang']['captcha']; ?>
" name="captcha" height="37" id="captcha" title="<?php echo $this->_tpl_vars['lang']['captcha_refresh']; ?>
" onClick="refreshimage()" border="1"><?php echo $this->_tpl_vars['wrong']['vcode']; ?>

     </dl>
     <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['post']['token']; ?>
" />
     <input type="submit" name="submit" class="btn" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" />
    </form>
   </div>
  </div>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
</body>
</html>