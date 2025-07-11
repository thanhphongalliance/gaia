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
    bottom:-20px;
    left: 47px;
    z-index: 999;
}
</style>

<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<?php
$title_vn = isset($detail['title_vn']) ? $detail['title_vn'] : "";
$title_en = isset($detail['title_en']) ? $detail['title_en'] : "";
$title_jp = isset($detail['title_jp']) ? $detail['title_jp'] : "";

$sumary_vn = isset($detail['sumary_vn']) ? stripslashes($detail['sumary_vn']) : "";
$sumary_en = isset($detail['sumary_en']) ? stripslashes($detail['sumary_en']) : "";
$sumary_jp = isset($detail['sumary_jp']) ? stripslashes($detail['sumary_jp']) : "";

$detail_vn = isset($detail['detail_vn']) ? stripcslashes($detail['detail_vn']) : "";
$detail_en = isset($detail['detail_en']) ? stripcslashes($detail['detail_en']) : "";
$detail_jp = isset($detail['detail_jp']) ? stripcslashes($detail['detail_jp']) : "";

$parent = isset($detail['parent']) ? $detail['parent'] : "0";
$desc = isset($detail['desc']) ? $detail['desc'] : "";
$keyword = isset($detail['keyword']) ? $detail['keyword'] : "";
$avatar = isset($detail['avatar']) && is_file("dataweb/albums/".$detail['avatar']) ? base_url('dataweb/albums/thumb/'.$detail['avatar']) : ICON_UPLOAD_PHOTO;
$ordering = isset($detail['ordering']) ? $detail['ordering'] : $orderingMax;
$status = isset($detail['status']) ? $detail['status'] : "1";
$show_side = isset($detail['show_on_sidebox']) ? $detail['show_on_sidebox'] : "0";

$giamgia = isset($detail['giamgia']) ? $detail['giamgia'] : '';
$is_khuyenmai = isset($detail['is_khuyenmai']) ? $detail['is_khuyenmai'] : 0;
$is_home = isset($detail['is_home']) ? $detail['is_home'] : 0;

$category = isset($detail['cat_id']) ? $detail['cat_id'] : "";

?>
<script>
admin.getAlbumImage('<?=$detail['id']?>'); 
admin.getMatbang('<?=$detail['id']?>'); 

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
                    <a tab="#tab_general_en"><?= IMG_EN ?></a>
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
                                <td>Danh mục:</td>
                                <td>
                                    <select name="cat_id">        
                                        <option value="0">--None--</option> 
                                        <?php
                                        foreach ($dequycategory as $k => $row) {
                                            ?>                                     
                                            <option value="<?= $row['id'] ?>" <?= $category == $row['id'] ? "selected='selected'" : "" ?>><?= $row['title_vn'] ?></option> 
                                        <?php } ?>  
                                    </select>   
                                </td>
                            </tr>
                             <tr>
                                <td>Hình đại diện: (300x300px)</td>
                                <td>
                                    <input type="hidden" name="avatar" value="<?= $avatar; ?>" size="70" id="hiddenAvatarAlbum">
                                    <div id="uploadAvatarAlbum"><img src="<?= $avatar; ?>" id="img_category" style="max-width: 100px;"/></div>
                                    <span id="loadAjax"></span>
                                </td>
                            </tr>
                            <tr >
								<td width="20%">Hình chi tiết</td>
								<td width="80%">
								<a href="javascript:void(0);" onclick="admin.addAlbumImage('<?= PATH_FOLDER_ADMIN; ?>');">
									<img src="<?= ICON_ADD_NEWS; ?>"/> Thêm hình (tối đa: 500x500px)
								</a>
								<div class="clear"></div>
								
								<div id="addAlbumImage"></div>      
								</td>
							</tr>
                            <tr>
								<td>Nội dung tóm tắt</td>
								<td><?=$this->function->display_CKEditor('sumary_vn', $sumary_vn)?></td>
						</tr>
						<tr>
            
                            <tr>
                                <td> Thứ tự:</td>
                                <td><input name="ordering" value="<?= $ordering; ?>" size="1" />
                                </td>
                            </tr>     
                            <tr>
                                <td> Trạng thái:</td>
                                <td>
                                    <label><input type="radio" value="2" name="status" <?= $status == 2 ? "checked='checked'" : "" ?> /> Lên cột trái </label>
                                    <label><input type="radio" value="1" name="status" <?= $status == 1 ? "checked='checked'" : "" ?> /> Hiển thị </label>
                                    <label><input type="radio" value="0" name="status" <?= $status == 0 ? "checked='checked'" : "" ?>/> Ẩn</label>
                                </td>
                            </tr>
                           
                          
                        </table>
                    </div>
                </div>

                <div id="tab_general_en">                   
                    <div id="language1">
                        <table class="form">                            
                            <tr>
                                <td>Tên danh mục:
                                    <span class="required">*</span>     
                                </td>
                                <td><input type="text" name="title_en" value="<?= $title_en; ?>" size="50" />
                                </td>
                            </tr>   
                            <tr>
                    <td>Nội dung tóm tắt</td>
                    <td><?=$this->function->display_CKEditor('sumary_en', $sumary_en)?></td>
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
<script type="text/javascript">
    $(document).ready(function () {
        admin.uploadAvatarAlbum();
	});
	
</script>