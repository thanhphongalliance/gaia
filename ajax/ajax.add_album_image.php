<tr id="<?= $cache['_']; ?>" style="float: left; width:400px;height:100px;">
	<input name="images[]" value="" type="hidden" id="imageHidden_<?= $cache['_']; ?>"/>
	<td>&nbsp;</td>
	<td class="right">
	<div style="float:left;">
		<div id="upload_<?= $cache['_']; ?>">
		<img style="max-height: 100px;" src="<?= ICON_UPLOAD_PHOTO; ?>"/>
	</div>
			<span id="status_<?= $cache['_']; ?>"></span>
		<a href="javascript:void(0);" onclick="admin.removePhoto('<?= $cache['_']; ?>');">
			<img src="<?= ICON_DEL; ?>"/>
		</a>
		
	 </div>  
	</td>
	<td>
		<table>
        <tr>
            <td width="50%" style="width: 50%!important;">Tiêu đề Việt</td><br/>
			<td><input type="text" name="mota_vn[]" value="<?= $mota_vn; ?>" style="width: 100%;"/></td>
        </tr>
		<tr>
            <td width="50%" style="width: 50%!important;">Tiêu đề Anh</td><br/>
			<td><input type="text" name="mota_en[]" value="<?= $mota_en; ?>" style="width: 100%;"/></td>
        </tr>
    </table>
	</td>
</tr>
<script>
  admin.uploadAlbumImage('<?= $cache['_']; ?>');
</script>
