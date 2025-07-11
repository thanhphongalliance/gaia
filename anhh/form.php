<style>
.multi-images li {
    margin-right: 5px;
    border:1px solid #dddddd;
    text-align: center;
    padding: 2px;
    position: relative;
}
.multi-images li a.remove {
    position: absolute;
    bottom:0;
    left: 47px;
    z-index: 999;
}
</style>
<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<?php
$link_web = isset($detail['link_web']) ? $detail['link_web'] : "";
$title_vn = isset($detail['title_vn']) ? $detail['title_vn'] : "";
$title_en = isset($detail['title_en']) ? $detail['title_en'] : "";
$image_ho = isset($detail['image_ho']) && is_file("dataweb/slider/".$detail['image_ho']) ? base_url('dataweb/slider/'.$detail['image_ho']) : ICON_UPLOAD_PHOTO;

?>
<script>
admin.getAlbumImage('<?=$detail['id']?>');
</script>
<div id="content">
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
                <div id="tabs" class="htabs">
                    <a tab="#tab_general_vn"><?= IMG_VN ?></a>
                   
                </div>                
                <div id="tab_general_vn">                   
                    <div id="language1">
                        <table class="form">                            
                            <tr>
                                <td>Tên danh mục:</td>
                                <td><input type="text" name="title_vn" value="<?= $title_vn; ?>" size="50" />
                                </td>
                            </tr>
                              <tr>
                                <td>Tên danh mục tiếng anh:</td>
                                <td><input type="text" name="title_en" value="<?= $title_ent; ?>" size="50" />
                                </td>
                            </tr>
                             <tr>
                                <td>Hình đại diện</td>
                                <td>
								<input type="hidden" name="image_ho" value="<?= $image_ho; ?>" size="70" id="hiddenSlider">
								<div id="uploadSlider"><img src="<?= $image_ho; ?>" id="img_logo" style="max-width: 100px;"/></div>
								<span id="loadAjax"></span>
								<br/><strong>(Size: 1348x540px)</strong>
								
                                </td>
                            </tr>
							<tr>
                                <td>Link:</td>
                                <td><input type="text" name="link_web" value="<?= $link_web; ?>" size="50" />
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
	<script type="text/javascript">
                        $(document).ready(function () {
                            admin.uploadSlider();                           
                        });
	</script> 
</div>
<script type="text/javascript" src="access/js/form.js"></script>

  