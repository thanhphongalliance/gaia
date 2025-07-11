<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<?php
$id_product = isset($detail['id']) ? $detail['id'] : 0;
$avatar = isset($detail['avatar']) ? PATH_TINTUC_THUMB . '/'.$detail['avatar'] : base_url().'access/image/upload_photo.png';

$title_vn = isset($detail['title_vn']) ? stripslashes($detail['title_vn']) : "";
$title_en = isset($detail['title_en']) ? stripslashes($detail['title_en']) : "";
$title_jp = isset($detail['title_jp']) ? stripslashes($detail['title_jp']) : "";

$sumary_vn = isset($detail['sumary_vn']) ? stripslashes($detail['sumary_vn']) : "";
$sumary_en = isset($detail['sumary_en']) ? stripslashes($detail['sumary_en']) : "";
$sumary_jp = isset($detail['sumary_jp']) ? stripslashes($detail['sumary_jp']) : "";
$detail_vn = isset($detail['detail_vn']) ? stripslashes($detail['detail_vn']) : "";
$detail_en = isset($detail['detail_en']) ? stripslashes($detail['detail_en']) : "";
$detail_jp = isset($detail['detail_jp']) ? stripslashes($detail['detail_jp']) : "";

$ordering = isset($detail['ordering']) ? $detail['ordering'] : $orderingMax;
$status = isset($detail['status']) ? $detail['status'] : 1;
$active = isset($detail['active']) ? $detail['active'] : 0;
$category = isset($detail['cat_id']) ? $detail['cat_id'] : "";
$type = isset($detail['type']) ? $detail['type'] : 1;
$link = isset($detail['link']) ? $detail['link'] : "";
?>
<style>
    .item-photo{width: 100px;float: left;margin: 5px;border: 1px solid #ccc;padding: 5px;text-align: center;}
</style>
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
                <?php
                $messages = $this->messages->get();
                if (is_array($messages)):
                    foreach ($messages as $type => $msgs):
                        if (count($msgs > 0)):
                            foreach ($msgs as $message):
                                echo ('<div id="messages"><div class="' . $type . '">' . $message . '</div></div> ');
                            endforeach;
                        endif;
                    endforeach;
                endif;
                ?>
                <div id="tabs" class="htabs">
                    <a tab="#tab_general_vn"><?= IMG_VN ?></a>
                    <a tab="#tab_general_en"><?= IMG_EN ?></a>
                </div>
                <div id="tab_general_vn">                   
                    <div id="language1">
                        <table class="form">
                            <tr>
                                <td>Tiêu đề:<span class="required">*</span></td>
                                <td><input type="text" name="title_vn" value='<?= $title_vn; ?>' class="width_50"/></td>
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
                            <!-- <tr>
                                <td>Loại:</td>
                                <td>
                                    <label><input type="radio" value="1" name="type" <?= $type == 1 ? "checked='checked'" : "" ?> /> Hình khác</label>
                                    <label><input type="radio" value="0" name="type" <?= $type == 0 ? "checked='checked'" : "" ?>/> Album tiệc cưới</label>
                                </td>
                            </tr> -->
                            <tr>
                                <td>Hình đại diện: (597x361px)</td>
                                <td>
                                    <input type="hidden" name="avatar" value="<?= $avatar; ?>" size="70" id="hiddenAvatarNews">
                                    <div id="uploadAvatarNews"><img src="<?= $avatar; ?>" id="img_logo" style="max-width: 100px;"/></div>
                                    <span id="loadAjax"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Tóm tắt:</td>
                                <td><textarea name="sumary_vn"><?=$sumary_vn?></textarea></td>
                            </tr>
                            <tr>
                                <td>Thông tin chi tiết: </td>
                                <td><?= $this->function->display_CKEditor("detail_vn", stripslashes($detail_vn), 250); ?></td>
                            </tr>
                            <tr>
                                <td> Link game:</td>
                                <td><input type="text" name="link" value="<?= $link; ?>" />
                                </td>
                            </tr>
                            
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
                            <tr>
                                <td> Hiện ở trang hành trình:</td>
                                <td>
                                    <label><input type="radio" value="1" name="active" <?= $active == 1 ? "checked='checked'" : "" ?> /> Hiển thị </label>
                                    <label><input type="radio" value="0" name="active" <?= $active == 0 ? "checked='checked'" : "" ?>/> Ẩn</label>
                                </td>
                            </tr>  
                        </table>
                    </div>
                </div>

                <div id="tab_general_en">                   
                    <div id="language1">
                        <table class="form">                            
                            <tr>
                                <td>Tiêu đề:
                                    <span class="required">*</span>     
                                </td>
                                <td><input type="text" name="title_en" value="<?= $title_en; ?>" size="50" />
                                </td>
                            </tr>
                            <tr>
                                <td>Tóm tắt:</td>
                                <td><textarea name="sumary_en"><?=$sumary_en?></textarea></td>
                            </tr>
                            <tr>
                                <td>Thông tin chi tiết: </td>
                                <td><?= $this->function->display_CKEditor("detail_en", stripslashes($detail_en), 250); ?></td>
                            </tr>                      
                        </table>
                    </div>
                </div>
                

            </div>
        </div>
    </form>
    <script type="text/javascript">
        $.tabs('#tabs a');
        admin.uploadAvatarNews();
    </script>
</div>
<script type="text/javascript" src="access/js/form.js"></script>