
{if strval($fields.deleted.value) == "1" || strval($fields.deleted.value) == "yes" || strval($fields.deleted.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.deleted.name}" id="{$fields.deleted.name}" value="$fields.deleted.value" disabled="true" {$checked}>
