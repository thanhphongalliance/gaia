<link rel="stylesheet" type="text/css" href="access/colorpicker/css/colorpicker.css" />
<?php
$name = isset($detail['name']) ? $detail['name'] : "";
$color = isset($detail['color']) ? $detail['color']: "ff0000";
$status = isset($detail['status']) ? $detail['status'] : 1;
$ordering = isset($detail['ordering']) ? $detail['ordering'] : $orderingMax;
?>
<style>
    .parent{width: 300px;}
</style>

<div id="content">
    <div class="breadcrumb">
        <br />        
    </div>
    <form id="form" action="" onsubmit="return check_input();" method="post" enctype="multipart/form-data" name="LISTFORM">
        <div class="box">
            <div class="left"></div>
            <div class="right"></div>
            <div class="heading">
                <h1 style="background-image: url('access/image/review.png');">
                    <?= $title_header; ?>
                </h1>
                <div class="buttons" style="float:right;">
                    <input type="submit" value="Lưu lại" class="button_v1">               
                    <input onclick="return Question_Cancel('<?= $task_list; ?>');" type="button" value="Hủy bỏ" class="button_v1">
                </div>
            </div>
            <div class="content">                
                <div id="tab_general">                   
                    <div id="language1">
                        <table class="form">                            
                            <tr>
                                <td>Tên màu:</td>
                                <td>
                                    <input type="text" value="<?= $name; ?>" name="name"/>
                                </td>
                            </tr> 
                            <tr>
                                <td>Màu sắc:</td>
                                <td><div id="colorSelector" style="display: inline-block;width:50px;height:50px;background:#ff0000;cursor: pointer;"></div>
                                <input type="hidden" name="color" value="<?=$color?>" size="10" id="color" /></td>
                            </tr>
                            <tr>
                                <td>Vị trí:</td>
                                <td><input name="ordering" value="<?= $ordering; ?>" size="10" /></td>
                            </tr>
                            <tr>
                                <td> Trạng thái:</td>
                                <td>
                                    <label><input type="radio" value="1" name="status" <?= $status == 1 ? "checked='checked'" : "" ?> />Bật</label>
                                    <label><input type="radio" value="0" name="status" <?= $status == 0 ? "checked='checked'" : "" ?>/>Tắt</label>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        $.tabs('#tabs a');
    </script>
</div>
<script type="text/javascript" src="access/js/form.js"></script>
<script type="text/javascript" src="access/colorpicker/js/colorpicker.js"></script>
<script>
$(document).ready(function(){
   $('#colorSelector').ColorPicker({
    color: '#ff0000',
    onChange: function (hsb, hex, rgb) {
       
		$('#colorSelector').css('backgroundColor', '#' + hex);
        $('input[name="color"]').val(hex);
	}
   }); 
});
</script>