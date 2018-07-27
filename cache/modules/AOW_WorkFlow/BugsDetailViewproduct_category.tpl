

{if is_string($fields.product_category.options)}
<input type="hidden" class="sugar_field" id="{$fields.product_category.name}" value="{ $fields.product_category.options }">
{ $fields.product_category.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.product_category.name}" value="{ $fields.product_category.value }">
{ $fields.product_category.options[$fields.product_category.value]}
{/if}
