<?php /* Smarty version 2.6.26, created on 2015-11-25 15:29:09
         compiled from javascript.htm */ ?>
<script type="text/javascript" src="images/jquery.min.js"></script>
<script type="text/javascript" src="images/global.js"></script>
<?php if ($this->_tpl_vars['no_user']): ?>
<script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
<?php $_from = $this->_tpl_vars['lang']['js_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
var <?php echo $this->_tpl_vars['key']; ?>
 = "<?php echo $this->_tpl_vars['item']; ?>
";
<?php endforeach; endif; unset($_from); ?>
//-->
</script>
<?php endif; ?>
<script type="text/javascript">
<?php echo '
//顶部下拉菜单
$(document).ready(function(){
  $(\'.M\').hover(
    function(){
      $(this).addClass(\'active\');
    },
    function(){
      $(this).removeClass(\'active\');
    });
});

function change(id, choose)
{
  document.getElementById(id).value = choose.options[choose.selectedIndex].title;
}

'; ?>

</script>