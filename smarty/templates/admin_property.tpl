{include file="admin_header.tpl"}

<h1>{if $property_id > 0}Modify{else}Add new{/if} property</h1>

<form action="admin.php" method="POST">
    <label>Name: <input type="text" name="name" size="25" value="{$name}" /></label><br />
    <label>Location: <input type="text" name="location" size="25" value="{$location}" /></label><br />
    <label>Description: <textarea name="description" rows="4" cols="25">{$description}</textarea></label><br />
    <label>Details: <textarea name="details" rows="4" cols="25">{$details}</textarea></label><br />
    <label>Photo: <input type="text" name="photo" size="25" value="{$photo}" /></label><br />
    <input type="hidden" name="property_id" value="{$property_id}" />
    <input type="hidden" name="page" value="property" />
    <input type="hidden" name="action" value="do" />
    <input type="submit" value="{if $property_id > 0}Modify{else}Add new{/if} property" class="btn btn-primary" />
</form>

{include file="admin_footer.tpl"}
