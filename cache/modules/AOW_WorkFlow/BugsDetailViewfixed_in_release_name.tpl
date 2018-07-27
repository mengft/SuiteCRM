
 
{if !empty($fields.fixed_in_release.value)}
{capture assign="detail_url"}index.php?module=Releases&action=DetailView&record={$fields.fixed_in_release.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="fixed_in_release" class="sugar_field" data-id-value="{$fields.fixed_in_release.value}">{$fields.fixed_in_release_name.value}</span>
{if !empty($fields.fixed_in_release.value)}</a>{/if}
