<?php
foreach ($thumb as $row):
    $id = $row['id'];
    $img =  base_url("dataweb/albums/thumb/" . $row['image']);
	$mota_vn = $row['mota_vn'];
	$mota_en = $row['mota_en'];
    ?>
	
<tr id="<?= $id; ?>" style="float: left; width:400px;height:100px;">
	 <input name="images[]"  value="<?= $img; ?>" type="hidden" id="imageHidden_<?= $id; ?>"/>
	
	<td class="right">
	<div style="float:left;">
		<div id="upload_<?= $id; ?>" >
			<img style="max-height: 100px;" src="<?= $img; ?>"/>
		</div>
			<span id="status_<?= $id; ?>"></span>
		
		
	 </div>  
	</td><br/><br/>
	<td>
		<table><a href="javascript:void(0);" onclick="admin.removePhoto('<?= $id; ?>');">
			<img src="<?= ICON_DEL; ?>"/>
		</a>
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
</tr><br/><br/><br/>
<script>
  admin.uploadAlbumImage('<?= $id; ?>');
</script>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php endforeach; ?>