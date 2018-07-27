

{if is_string($fields.resolution.options)}
<input type="hidden" class="sugar_field" id="{$fields.resolution.name}" value="{ $fields.resolution.options }">
{ $fields.resolution.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.resolution.name}" value="{ $fields.resolution.value }">
{ $fields.resolution.options[$fields.resolution.value]}
{/if}
