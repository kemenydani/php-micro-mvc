{extends file="layout.full.tpl"}

{block name=full}
    <div id="article">
        {foreach $articles as $article}
            {$article->name}<br>
        {/foreach}
    </div>
{/block}