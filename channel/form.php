<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<?php
$avatar = isset($detail['avatar']) ?  'dataweb/channel/'.$detail['avatar'] : base_url().'access/image/upload_photo.png';
$title_vn = isset($detail['title_vn']) ? stripslashes($detail['title_vn']) : "";
$title_en = isset($detail['title_en']) ? stripslashes($detail['title_en']) : "";
$title_de = isset($detail['title_de']) ? stripslashes($detail['title_de']) : "";

$meta_title_vn = isset($detail['meta_title_vn']) ? stripslashes($detail['meta_title_vn']) : "";
$meta_title_en = isset($detail['meta_title_en']) ? stripslashes($detail['meta_title_en']) : "";

$sumary_vn = isset($detail['sumary_vn']) ? stripslashes($detail['sumary_vn']) : "";
$sumary_en = isset($detail['sumary_en']) ? stripslashes($detail['sumary_en']) : "";
$sumary_de = isset($detail['sumary_de']) ? stripslashes($detail['sumary_de']) : "";

$detail_vn = isset($detail['detail_vn']) ? stripslashes($detail['detail_vn']) : "";
$detail_en = isset($detail['detail_en']) ? stripslashes($detail['detail_en']) : "";
$detail_de = isset($detail['detail_de']) ? stripslashes($detail['detail_de']) : "";

$category = isset($detail['id_news_category']) ? stripslashes($detail['id_news_category']) : "";

$desc = isset($detail['desc']) ? stripslashes($detail['desc']) : "";
$link = isset($detail['link']) ? stripslashes($detail['link']) : "#";
$type = isset($detail['type']) ? stripslashes($detail['type']) : "";
$ordering = isset($detail['ordering']) ? $detail['ordering'] : $orderingMax;
$status = isset($detail['status']) ? $detail['status'] : 1;
?>
<div id="content">
    <form id="form" action="" method="post" enctype="multipart/form-data" name="LISTFORM">
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
                                <td>Tiêu đề:
                                    <span class="required">*</span>     
                                </td>
                                <td><input type="text" name="title_vn" value="<?= $title_vn; ?>" size="50" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Hình đại diện:</td>
                                <td>
                                    <input type="hidden" name="avatar" value="<?= $avatar; ?>" size="70" id="hiddenAvatarChannel">
                                    <div id="uploadAvatarChannel"><img src="<?= $avatar; ?>" id="img_avatar" style="max-width: 100px;"/></div>
                                    <span id="loadAjax"></span>
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
                                         
                        </table>
                    </div>
                </div>

            </div>
        </div>
            
    </form>
    <script type="text/javascript">
        $.tabs('#tabs a');
        admin.uploadAvatarChannel();
    </script>
</div>
<script type="text/javascript" src="access/js/form.js"></script>

