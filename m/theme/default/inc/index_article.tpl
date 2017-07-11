<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- {if $ldrs} -->
<div class="incBox">
 <div class="articleList">
  <!-- {foreach from=$ldrs name=ldrs item=article} -->
  <dl>
   <dt><a href="{$article.url}">{$article.title}</a></dt>
   <dd><em>{$lang.add_time}：{$article.add_time}</em><em>{$lang.click}：{$article.click}</em></dd>
  </dl>
  <!-- {/foreach} -->
 </div>
</div>
<!-- {/if} -->


<!-- {if $jtsg} -->
<div class="incBox">
 
 <div class="articleList">
  <!-- {foreach from=$jtsg name=jtsg item=article} -->
  <dl>
   <dt><a href="{$article.url}">{$article.title}</a></dt>
   <dd><em>{$lang.add_time}：{$article.add_time}</em><em>{$lang.click}：{$article.click}</em></dd>
  </dl>
  <!-- {/foreach} -->
 </div>
</div>
<!-- {/if} -->



<!-- {if $fchy} -->
<div class="incBox">

 <div class="articleList">
  <!-- {foreach from=$fchy name=fchy item=article} -->
  <dl>
   <dt><a href="{$article.url}">{$article.title}</a></dt>
   <dd><em>{$lang.add_time}：{$article.add_time}</em><em>{$lang.click}：{$article.click}</em></dd>
  </dl>
  <!-- {/foreach} -->
 </div>
</div>
<!-- {/if} -->


<!-- {if $xsbh} -->
<div class="incBox">
 
 <div class="articleList">
  <!-- {foreach from=$xsbh name=xsbh item=article} -->
  <dl>
   <dt><a href="{$article.url}">{$article.title}</a></dt>
   <dd><em>{$lang.add_time}：{$article.add_time}</em><em>{$lang.click}：{$article.click}</em></dd>
  </dl>
  <!-- {/foreach} -->
 </div>
</div>
<!-- {/if} -->







