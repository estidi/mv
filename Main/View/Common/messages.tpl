<div class="messages">
    {if isset($flash.success)}
        {foreach $flash.success as $list}
            <div class="success fade">
                {$list}
            </div>
        {/foreach}
    {/if}
    {if isset($flash.fail)}
        {foreach $flash.fail as $list}
            <div class="fail fade">
                {$list}
            </div>
        {/foreach}
    {/if}
</div>   