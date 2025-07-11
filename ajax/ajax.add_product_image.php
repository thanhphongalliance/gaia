<li id="<?= $cache['_']; ?>" class="image-thumb">
<input name="images[]" value="" type="hidden" id="imageHidden_<?= $cache['_']; ?>"/>

<div class="right">
<div style="float:left;">
    <div id="upload_<?= $cache['_']; ?>" ><img style="max-height: 100px;" src="<?= ICON_UPLOAD_PHOTO; ?>"/></div><span id="status_<?= $cache['_']; ?>"></span>
    <a href="javascript:void(0);" onclick="admin.removeProductImage('<?= $cache['_']; ?>');">
        <img src="<?= ICON_DEL; ?>"/>
    </a>
    
 </div>  
</div>
</li>
<script>
    admin.uploadProductImage('<?= $cache['_']; ?>');
</script>