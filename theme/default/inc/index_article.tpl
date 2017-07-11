<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- {if $ldrs} -->
<div class="incBox">
 <h3><a href="article_category.php?id=4">劳动人事</a></h3>
 <ul class="recommendArticle">
  <!-- {foreach from=$ldrs name=ldrs item=article} -->
  <li<!-- {if $smarty.foreach.ldrs.last} --> class="last"<!-- {/if} -->><b>{$article.add_time_short}</b><a href="{$article.url}">{$article.title}</a></li>
  <!-- {/foreach} -->
 </ul>
</div>
<!-- {/if} -->


<!-- {if $jtsg} -->
<div class="incBox">
 <h3><a href="article_category.php?id=4">交通事故</a></h3>
 <ul class="recommendArticle">
  <!-- {foreach from=$jtsg name=jtsg item=article} -->
  <li<!-- {if $smarty.foreach.jtsg.last} --> class="last"<!-- {/if} -->><b>{$article.add_time_short}</b><a href="{$article.url}">{$article.title}</a></li>
  <!-- {/foreach} -->
 </ul>
</div>
<!-- {/if} -->


<!-- {if $fchy} -->
<div class="incBox">
 <h3><a href="article_category.php?id=4">房产婚姻</a></h3>
 <ul class="recommendArticle">
  <!-- {foreach from=$fchy name=fchy item=article} -->
  <li<!-- {if $smarty.foreach.fchy.last} --> class="last"<!-- {/if} -->><b>{$article.add_time_short}</b><a href="{$article.url}">{$article.title}</a></li>
  <!-- {/foreach} -->
 </ul>
</div>
<!-- {/if} -->

<!-- {if $pid110} -->
<div class="incBox">
 <h3><a href="article_category.php?id=4">合同纠纷</a></h3>
 <ul class="recommendArticle">
  <!-- {foreach from=$pid110 name=pid110 item=article} -->
  <li<!-- {if $smarty.foreach.pid110.last} --> class="last"<!-- {/if} -->><b>{$article.add_time_short}</b><a href="{$article.url}">{$article.title}</a></li>
  <!-- {/foreach} -->
 </ul>
</div>
<!-- {/if} -->


<!-- {if $xsbh} -->
<div class="incBox">
 <h3><a href="article_category.php?id=4">刑事辩护</a></h3>
 <ul class="recommendArticle">
  <!-- {foreach from=$xsbh name=xsbh item=article} -->
  <li<!-- {if $smarty.foreach.xsbh.last} --> class="last"<!-- {/if} -->><b>{$article.add_time_short}</b><a href="{$article.url}">{$article.title}</a></li>
  <!-- {/foreach} -->
 </ul>
</div>
<!-- {/if} -->





