{extends file="layout.full.tpl"}

{block name=full}
    <div id="home">
        {var_dump($Article::fetch())}
        {$base}
        {$cssBase}
        {$assets}
        {$jsBase}
        Home In full block
    </div>
{/block}