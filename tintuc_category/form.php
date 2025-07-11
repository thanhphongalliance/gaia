<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<?php
$title_vn = isset($detail['title_vn']) ? $detail['title_vn'] : "";
$title_en = isset($detail['title_en']) ? $detail['title_en'] : "";

$parent = isset($detail['parent']) ? $detail['parent'] : "0";
$desc = isset($detail['desc']) ? $detail['desc'] : "";
$keyword = isset($detail['keyword']) ? $detail['keyword'] : "";
$avatar = isset($detail['avatar']) && is_file($detail['avatar']) ? $detail['avatar'] : ICON_UPLOAD_PHOTO;
$ordering = isset($detail['ordering']) ? $detail['ordering'] : $orderingMax;
$status = isset($detail['status']) ? $detail['status'] : "1";
$show_side = isset($detail['show_on_sidebox']) ? $detail['show_on_sidebox'] : "0";
?>
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
                                <td><input name="title_vn" value="<?= $title_vn; ?>" size="50" />
                                </td>
                            </tr>
                            <tr>
                                <td>Danh mục cha:</td>
                                <td>
                                    <select name="parent">        
                                        <option value="0">--None--</option> 
                                        <?php
                                        foreach ($tintuc_categorys as $k => $row) {
                                            ?>                                     
                                            <option value="<?= $row['id'] ?>" <?= $parent == $row['id'] ? "selected='selected'" : "" ?>><?= $row['title_vn'] ?></option> 
                                        <?php } ?>  
                                    </select>   
                                </td>
                            </tr>
                           <!--  <tr>
                                <td>Hình đại diện:</td>
                                <td>
                                    <input type="hidden" name="avatar" value="<?= $avatar; ?>" size="70" id="imageHidden_avatar">
                                    <div id="upload_avatar"><img src="<?= $avatar; ?>" id="img_logo" style="max-width: 100px;"/></div>
                                    <span id="status_avatar"></span>
                                    <br/><strong>(Size: 295x355px)</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>Meta description:</td>
                                <td>
                                    <textarea name="desc"><?= stripslashes($desc); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Mô tả keyword:</td>
                                <td>
                                    <textarea name="keyword"><?= stripslashes($keyword); ?></textarea>
                                </td>
                            </tr> -->
                            <tr>
                                <td> Thứ tự:</td>
                                <td><input name="ordering" value="<?= $ordering; ?>" size="1" />
                                </td>
                            </tr>     
                            <tr>
                                <td> Trạng thái:</td>
                                <td>
                                    <label><input type="radio" value="1" name="status" <?= $status == 1 ? "checked='checked'" : "" ?> /> Hiển thị </label>
                                    <label><input type="radio" value="0" name="status" <?= $status == 0 ? "checked='checked'" : "" ?>/> Ẩn</label>
                                </td>
                            </tr>
                           <!--  <tr>
                                <td> Hiển thị trên sidebox:</td>
                                <td>
                                    <label><input type="radio" value="1" name="show_on_sidebox" <?= $show_side == 1 ? "checked='checked'" : "" ?> /> Hiển thị </label>
                                    <label><input type="radio" value="0" name="show_on_sidebox" <?= $show_side == 0 ? "checked='checked'" : "" ?>/> Ẩn</label>
                                </td>
                            </tr>  -->
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
    
</script>
