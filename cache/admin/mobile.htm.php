<?php /* Smarty version 2.6.26, created on 2015-11-25 15:42:42
         compiled from mobile.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $this->_tpl_vars['lang']['home']; ?>
<?php if ($this->_tpl_vars['ur_here']): ?> - <?php echo $this->_tpl_vars['ur_here']; ?>
 <?php endif; ?></title>
<meta name="Copyright" content="Douco Design." />
<link href="templates/public.css" rel="stylesheet" type="text/css">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "javascript.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="images/jquery.tab.js"></script>
</head>
<body>
<div id="dcWrap"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="dcLeft"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
 <div id="dcMain"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ur_here.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div id="mobileBox">
   <div id="mMenu">
    <h3><?php echo $this->_tpl_vars['lang']['mobile']; ?>
</h3>
    <ul>
     <li><a href="mobile.php"<?php if ($this->_tpl_vars['rec'] == 'system'): ?> class="cur"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['mobile_system']; ?>
</a></li>
     <li><a href="mobile.php?rec=nav"<?php if ($this->_tpl_vars['rec'] == 'nav'): ?> class="cur"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['mobile_nav']; ?>
</a></li>
     <li><a href="mobile.php?rec=show"<?php if ($this->_tpl_vars['rec'] == 'show'): ?> class="cur"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['mobile_show']; ?>
</a></li>
    </ul>
   </div>
   <div id="mMain">
    <div id="mainBox">
     <?php if ($this->_tpl_vars['rec'] == 'system'): ?>
     <h3><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
     <div class="system">
      <form action="mobile.php?rec=system&act=update" method="post" enctype="multipart/form-data">
       <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
        <tr>
         <th width="141"><?php echo $this->_tpl_vars['lang']['input_name']; ?>
</th>
         <th><?php echo $this->_tpl_vars['lang']['input_value']; ?>
</th>
        </tr>
        <?php $_from = $this->_tpl_vars['cfg_list_main']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cfg_list']):
?>
        <tr>
         <td align="right"><?php echo $this->_tpl_vars['cfg_list']['lang']; ?>
</td>
         <td>
          <?php if ($this->_tpl_vars['cfg_list']['type'] == 'radio'): ?>
          <label for="<?php echo $this->_tpl_vars['cfg_list']['name']; ?>
_0">
           <input type="radio" name="<?php echo $this->_tpl_vars['cfg_list']['name']; ?>
" id="<?php echo $this->_tpl_vars['cfg_list']['name']; ?>
_0" value="0"<?php if ($this->_tpl_vars['cfg_list']['value'] == '0'): ?> checked="true"<?php endif; ?>>
           <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
          <label for="<?php echo $this->_tpl_vars['cfg_list']['name']; ?>
_1">
           <input type="radio" name="<?php echo $this->_tpl_vars['cfg_list']['name']; ?>
" id="<?php echo $this->_tpl_vars['cfg_list']['name']; ?>
_1" value="1"<?php if ($this->_tpl_vars['cfg_list']['value'] == '1'): ?> checked="true"<?php endif; ?>>
           <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
          <?php elseif ($this->_tpl_vars['cfg_list']['type'] == 'select'): ?>
          <select name="<?php echo $this->_tpl_vars['cfg_list']['name']; ?>
">
           <?php $_from = $this->_tpl_vars['cfg_list']['box']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['value']):
?>
           <option value="<?php echo $this->_tpl_vars['value']; ?>
"<?php if ($this->_tpl_vars['cfg_list']['value'] == $this->_tpl_vars['value']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
</option>
           <?php endforeach; endif; unset($_from); ?>
          </select>
          <?php elseif ($this->_tpl_vars['cfg_list']['type'] == 'file'): ?>
          <input type="file" name="<?php echo $this->_tpl_vars['cfg_list']['name']; ?>
" size="18" />
          <?php if ($this->_tpl_vars['cfg_list']['value']): ?><a href="../<?php echo $this->_tpl_vars['cfg_list']['value']; ?>
" target="_blank"><img src="images/yes.gif"></a><?php else: ?><img src="images/no.gif"><?php endif; ?>
          <?php elseif ($this->_tpl_vars['cfg_list']['type'] == 'textarea'): ?>
          <textarea name="<?php echo $this->_tpl_vars['cfg_list']['name']; ?>
" cols="70" rows="5" class="textArea" /><?php echo $this->_tpl_vars['cfg_list']['value']; ?>
</textarea>
          <?php else: ?>
          <input type="text" name="<?php echo $this->_tpl_vars['cfg_list']['name']; ?>
" value="<?php echo $this->_tpl_vars['cfg_list']['value']; ?>
" size="80" class="inpMain" />
          <?php endif; ?>
          <?php if ($this->_tpl_vars['cfg_list']['cue']): ?>
           <?php if ($this->_tpl_vars['cfg_list']['type'] == 'radio' || $this->_tpl_vars['cfg_list']['type'] == 'select'): ?>
           <span class="cue ml"><?php echo $this->_tpl_vars['cfg_list']['cue']; ?>
</span>
           <?php else: ?>
           <p class="cue"><?php echo $this->_tpl_vars['cfg_list']['cue']; ?>
</p>
           <?php endif; ?>
          <?php endif; ?>
         </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr>
         <td width="131"></td>
         <td>
          <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
          <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" />
         </td>
        </tr>
       </table>
      </form>
     </div>
     <?php endif; ?> 
     <?php if ($this->_tpl_vars['rec'] == 'nav'): ?>
     <h3><a href="<?php echo $this->_tpl_vars['action_link']['href']; ?>
" class="actionBtn"><?php echo $this->_tpl_vars['action_link']['text']; ?>
</a><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
      <?php if ($this->_tpl_vars['act'] == 'default'): ?>
      <table width="100%" border="0" cellpadding="10" cellspacing="0" class="tableBasic">
       <tr>
        <th width="113" align="center"><?php echo $this->_tpl_vars['lang']['nav_name']; ?>
</th>
        <th align="left"><?php echo $this->_tpl_vars['lang']['nav_link']; ?>
</th>
        <th width="80" align="center"><?php echo $this->_tpl_vars['lang']['sort']; ?>
</th>
        <th width="120" align="center"><?php echo $this->_tpl_vars['lang']['handler']; ?>
</th>
       </tr>
       <?php $_from = $this->_tpl_vars['nav_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nav_list']):
?>
       <tr>
        <td><?php echo $this->_tpl_vars['nav_list']['mark']; ?>
 <?php echo $this->_tpl_vars['nav_list']['nav_name']; ?>
</td>
        <td><?php echo $this->_tpl_vars['nav_list']['guide']; ?>
</td>
        <td align="center"><?php echo $this->_tpl_vars['nav_list']['sort']; ?>
</td>
        <td align="center"><a href="mobile.php?rec=nav&act=edit&id=<?php echo $this->_tpl_vars['nav_list']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['edit']; ?>
</a> | <a href="mobile.php?rec=nav&act=del&id=<?php echo $this->_tpl_vars['nav_list']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['del']; ?>
</a></td>
       </tr>
       <?php endforeach; endif; unset($_from); ?>
      </table>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['act'] == 'add'): ?>
      <div class="idTabs">
        <ul class="tab">
          <li><a href="#nav_add"><?php echo $this->_tpl_vars['lang']['nav_inside']; ?>
</a></li>
          <li><a href="#nav_defined"><?php echo $this->_tpl_vars['lang']['nav_defined']; ?>
</a></li>
        </ul>
        <div class="items">
          <div id="nav_add">
           <form action="mobile.php?rec=nav&act=insert" method="post">
            <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic">
             <tr>
              <td width="80" height="35" align="right"><?php echo $this->_tpl_vars['lang']['nav_system']; ?>
</td>
              <td>
               <select name="nav_menu" onchange="change('nav_name', this)">
                <option value=""><?php echo $this->_tpl_vars['lang']['nav_menu']; ?>
</option>
                <?php $_from = $this->_tpl_vars['catalog']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['catalog']):
?>
                <option value="<?php echo $this->_tpl_vars['catalog']['module']; ?>
,<?php echo $this->_tpl_vars['catalog']['guide']; ?>
"<?php if ($this->_tpl_vars['catalog']['cur']): ?> selected="selected"<?php endif; ?> title="<?php echo $this->_tpl_vars['catalog']['name']; ?>
"><?php echo $this->_tpl_vars['catalog']['mark']; ?>
 <?php echo $this->_tpl_vars['catalog']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
               </select>
              </td>
             </tr>
             <tr>
              <td width="80" height="35" align="right"><?php echo $this->_tpl_vars['lang']['nav_name']; ?>
</td>
              <td>
               <input type="text" id="nav_name" name="nav_name" value="" size="40" class="inpMain" />
              </td>
             </tr>
             <tr>
              <td height="35" align="right"><?php echo $this->_tpl_vars['lang']['sort']; ?>
</td>
              <td>
               <input type="text" name="sort" value="50" size="5" class="inpMain" />
              </td>
             </tr>
             <tr>
              <td></td>
              <td>
               <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
               <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" />
              </td>
             </tr>
            </table>
           </form>
          </div>
          <div id="nav_defined">
           <form action="mobile.php?rec=nav&act=insert" method="post">
            <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic">
             <tr>
              <td width="80" height="35" align="right"><?php echo $this->_tpl_vars['lang']['nav_name']; ?>
</td>
              <td>
               <input type="text" name="nav_name" value="" size="40" class="inpMain" />
              </td>
             </tr>
             <tr>
              <td height="35" align="right"><?php echo $this->_tpl_vars['lang']['nav_link']; ?>
</td>
              <td>
               <input type="text" name="guide" value="" size="80" class="inpMain" />
              </td>
             </tr>
             <tr>
              <td height="35" align="right"><?php echo $this->_tpl_vars['lang']['sort']; ?>
</td>
              <td>
               <input type="text" name="sort" value="50" size="5" class="inpMain" />
              </td>
             </tr>
             <tr>
              <td></td>
              <td>
               <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
               <input type="hidden" name="nav_menu" value="nav,0" />
               <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" />
              </td>
             </tr>
            </table>
           </form>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['act'] == 'edit'): ?>
      <form action="mobile.php?rec=nav&act=update" method="post">
       <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
        <tr>
         <th colspan="2">&nbsp;</th>
        </tr>
        <?php if ($this->_tpl_vars['nav_info']['module'] != 'nav'): ?>
        <tr>
         <td width="80" height="35" align="right"><?php echo $this->_tpl_vars['lang']['nav_system']; ?>
</td>
         <td>
          <select name="nav_menu" onchange="change('nav_name', this)">
           <option value=""><?php echo $this->_tpl_vars['lang']['nav_menu']; ?>
</option>
           <?php $_from = $this->_tpl_vars['catalog']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['catalog']):
?>
           <option value="<?php echo $this->_tpl_vars['catalog']['module']; ?>
,<?php echo $this->_tpl_vars['catalog']['guide']; ?>
"<?php if ($this->_tpl_vars['catalog']['cur']): ?> selected="selected"<?php endif; ?> title="<?php echo $this->_tpl_vars['catalog']['name']; ?>
"><?php echo $this->_tpl_vars['catalog']['mark']; ?>
 <?php echo $this->_tpl_vars['catalog']['name']; ?>
</option>
           <?php endforeach; endif; unset($_from); ?>
          </select>
         </td>
        </tr>
        <?php endif; ?>
        <tr>
         <td width="80" height="35" align="right"><?php echo $this->_tpl_vars['lang']['nav_name']; ?>
</td>
         <td>
          <input type="text" id="nav_name" name="nav_name" value="<?php echo $this->_tpl_vars['nav_info']['nav_name']; ?>
" size="40" class="inpMain" />
         </td>
        </tr>
       <tr>
         <td height="35" align="right"><?php echo $this->_tpl_vars['lang']['nav_link']; ?>
</td>
         <td>
          <?php if ($this->_tpl_vars['nav_info']['module'] == 'nav'): ?>
          <input type="text" name="guide" value="<?php echo $this->_tpl_vars['nav_info']['url']; ?>
" size="60" class="inpMain" />
          <?php else: ?>
          <input type="text" name="guide_no" value="<?php echo $this->_tpl_vars['nav_info']['url']; ?>
" size="60" readOnly="true" class="inpMain" />
          <b class="cue"><?php echo $this->_tpl_vars['lang']['nav_not_modify']; ?>
</b>
          <?php endif; ?>
         </td>
        </tr>
        <tr>
         <td height="35" align="right"><?php echo $this->_tpl_vars['lang']['sort']; ?>
</td>
         <td>
          <input type="text" name="sort" value="<?php if ($this->_tpl_vars['nav_info']['sort']): ?><?php echo $this->_tpl_vars['nav_info']['sort']; ?>
<?php else: ?>50<?php endif; ?>" size="5" class="inpMain" />
         </td>
        </tr>
        <tr>
         <td></td>
         <td>
          <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
          <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['nav_info']['id']; ?>
" />
          <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" />
         </td>
        </tr>
       </table>
      </form>
      <?php endif; ?>
     <?php endif; ?> 
     <?php if ($this->_tpl_vars['rec'] == 'show'): ?>
     <h3><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <th><?php echo $this->_tpl_vars['lang']['show_add']; ?>
</th>
       <th><?php echo $this->_tpl_vars['lang']['show_list']; ?>
</th>
      </tr>
      <tr>
       <td width="350" valign="top"><form action="mobile.php?rec=show&act=insert" method="post" enctype="multipart/form-data">
         <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableOnebor">
          <tr>
           <td><?php echo $this->_tpl_vars['lang']['show_name']; ?>
<br>
            <input type="text" name="show_name" value="" size="20" class="inpMain" /></td>
          </tr>
          <tr>
           <td><?php echo $this->_tpl_vars['lang']['show_img']; ?>
<br>
            <input type="file" name="show_img" class="inpFlie" /></td>
          </tr>
          <tr>
           <td><?php echo $this->_tpl_vars['lang']['show_link']; ?>
 <br>
            <input type="text" name="show_link" value="" size="40" class="inpMain" /></td>
          </tr>
          <tr>
           <td><?php echo $this->_tpl_vars['lang']['sort']; ?>
<br>
            <input type="text" name="sort" value="50" size="20" class="inpMain" /></td>
          </tr>
          <tr>
           <td>
            <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
            <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" /></td>
          </tr>
         </table>
        </form></td>
       <td valign="top"><table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableOnebor">
         <tr>
          <td width="100"><?php echo $this->_tpl_vars['lang']['show_name']; ?>
</td>
          <td></td>
          <td width="50" align="center"><?php echo $this->_tpl_vars['lang']['sort']; ?>
</td>
          <td width="80" align="center"><?php echo $this->_tpl_vars['lang']['handler']; ?>
</td>
         </tr>
         <?php $_from = $this->_tpl_vars['show_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['show_list']):
?> 
         <?php if ($this->_tpl_vars['show_list']['id'] == $this->_tpl_vars['id']): ?>
         <form action="mobile.php?rec=show&act=update" method="post" enctype="multipart/form-data">
          <tr>
           <td height="30" colspan="4"><strong><?php echo $this->_tpl_vars['lang']['show_edit']; ?>
</strong></td>
          </tr>
          <tr>
           <td colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableNobor">
             <tr>
              <td><?php echo $this->_tpl_vars['lang']['show_name']; ?>
:
               <input type="text" name="show_name" value="<?php echo $this->_tpl_vars['show_list']['show_name']; ?>
" size="20" class="inpMain" /></td>
              <td align="right"><?php echo $this->_tpl_vars['lang']['sort']; ?>
:
               <input type="text" name="sort" value="<?php echo $this->_tpl_vars['show_list']['sort']; ?>
" size="20" class="inpMain" /></td>
             </tr>
            </table></td>
          </tr>
          <tr>
           <td colspan="4"><?php echo $this->_tpl_vars['lang']['show_img']; ?>
:
            <input type="file" name="show_img" />
            <?php if ($this->_tpl_vars['show_list']['show_img']): ?><a href="../<?php echo $this->_tpl_vars['show_list']['show_img']; ?>
" target="_blank"><img src="images/yes.gif"></a><?php else: ?><img src="images/no.gif"><?php endif; ?></td>
          </tr>
          <tr>
           <td colspan="4"><?php echo $this->_tpl_vars['lang']['show_link']; ?>
:
            <input type="text" name="show_link" value="<?php echo $this->_tpl_vars['show_list']['show_link']; ?>
" size="55" class="inpMain" /></td>
          </tr>
          <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['show_list']['id']; ?>
">
          <tr>
           <td height="40" colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableNobor">
             <tr>
              <td><a href="mobile.php?rec=show" class="btnGray"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a></td>
              <td align="right">
               <input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
               <input type="hidden" name="show_img" value="<?php echo $this->_tpl_vars['show_list']['show_img']; ?>
">
               <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" /></td>
             </tr>
            </table></td>
          </tr>
         </form>
         <?php else: ?>
         <tr>
          <td><a href="../<?php echo $this->_tpl_vars['show_list']['show_img']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['show_list']['thumb']; ?>
" width="100" /></a></td>
          <td><?php echo $this->_tpl_vars['show_list']['show_name']; ?>
</td>
          <td align="center"><?php echo $this->_tpl_vars['show_list']['sort']; ?>
</td>
          <td align="center"><a href="mobile.php?rec=show&act=edit&id=<?php echo $this->_tpl_vars['show_list']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['edit']; ?>
</a> | <a href="mobile.php?rec=show&act=del&id=<?php echo $this->_tpl_vars['show_list']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['del']; ?>
</a></td>
         </tr>
         <?php endif; ?> 
         <?php endforeach; endif; unset($_from); ?>
        </table></td>
      </tr>
     </table>
     <?php endif; ?> 
    </div>
   </div>
  </div>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
</body>
</html>