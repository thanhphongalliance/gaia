<?php
foreach ($thumb as $row):
    $id = $row['id'];
    $img = $row['image'];
  
    ?>
    <tr id="<?= $id; ?>">
    <input name="images[]" 
    value="<?= $img; ?>" type="hidden" id="imageHidden_<?= $id; ?>"/>
    <td>&nbsp;</td>
    <td class="right">
        <div id="upload_<?= $id; ?>"><img height="100" src="<?= $img; ?>" /></div><span id="status_<?= $id; ?>"></span>
        <a href="javascript:void(0);" onclick="admin.removeCategory('<?= $id; ?>');">
            <img src="<?= ICON_DEL; ?>"/>
        </a>
    </td>
    </tr>
    <script>
        admin.uploadPhoto2('<?= $id; ?>');
    </script>
<?php endforeach; ?>