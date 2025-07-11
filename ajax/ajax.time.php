<?php
foreach ($result as $row):
$gia= $this->product->getPrice($id_product,$row['id']);
$price = isset($gia['price_time'])? $gia['price_time']:'';
 ?>
    <div style="clear: both;width: 100%;margin-bottom: 10px;float: left;">
        <div style="float: left;width: 80px;margin-right:5px;" id="<?= $row['id']; ?>">
            <?= $row['title']; ?>
        </div>
        <div style="float: left;">
        <input type="hidden" name="id_thoigian[]" value="<?= $row['id']; ?>">
        	<input name="price_time[]" value="<?=$price?>" >
        </div>
    </div>
<?php endforeach; ?>