<?php
foreach ($thumb as $row):
    $id = $row['id'];
    $img = $row['image'];
  
    ?>
    <li id="<?= $id; ?>" class="image-thumb">
    <input name="images[]" 
    value="<?= $img; ?>" type="hidden" id="imageHidden_<?= $id; ?>"/>
    <div class="right">
        <div id="upload_<?= $id; ?>"><img height="100" src="<?= $img; ?>" /></div><span id="status_<?= $id; ?>"></span>
        <a href="javascript:void(0);" onclick="admin.removeProductImage('<?= $id; ?>');">
            <img src="<?= ICON_DEL; ?>"/>
        </a>
    </div>
    </li>
    <script>
        admin.uploadPhoto2('<?= $id; ?>');
    </script>
<?php endforeach; ?>