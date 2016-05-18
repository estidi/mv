<div class="loginBox">
    {if isset($register)}
    {include file='User/register.html'}
    {else}
    {include file='User/login.html'}
    {/if}
</div>