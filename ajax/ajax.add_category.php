<tr id="<?= $cache['_']; ?>">
<input name="images[]" value="" type="hidden" id="imageHidden_<?= $cache['_']; ?>"/>
<td>&nbsp;</td>
<td class="right">
<div style="float:left;">
    <div id="upload_<?= $cache['_']; ?>" ><img style="max-height: 100px;" src="<?= ICON_UPLOAD_PHOTO; ?>"/></div><span id="status_<?= $cache['_']; ?>"></span>
    <a href="javascript:void(0);" onclick="admin.removeCategory('<?= $cache['_']; ?>');">
        <img src="<?= ICON_DEL; ?>"/>
    </a>
    
 </div>  
</td>
</tr>
<script>
    admin.uploadCategory('<?= $cache['_']; ?>');
</script>