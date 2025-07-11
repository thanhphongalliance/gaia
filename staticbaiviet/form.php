<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<?php
$title_vn = isset($detail['title_vn']) ? stripslashes($detail['title_vn']) : "";
$title_en = isset($detail['title_en']) ? stripslashes($detail['title_en']) : "";
$sumary_vn = isset($detail['sumary_vn']) ? stripslashes($detail['sumary_vn']) : "";
$sumary_en = isset($detail['sumary_en']) ? stripslashes($detail['sumary_en']) : "";
$detail_vn = isset($detail['detail_vn']) ? stripslashes($detail['detail_vn']) : "";
$detail_en = isset($detail['detail_en']) ? stripslashes($detail['detail_en']) : "";
$avatar = isset($detail['avatar']) ? PATH_TINTUC_THUMB . '/'.$detail['avatar'] : base_url().'access/image/upload_photo.png';
?>
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
                    <!--<input onclick="return Question_Cancel('<?= $task_list; ?>');" type="button" value="Hủy bỏ" class="button_v1">-->
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
                    <a tab="#tab_vn"><?=IMG_VN?></a>
                    <a tab="#tab_en"><?=IMG_EN?></a>
                </div>           
                <!--####-->
                <div id="tab_vn">                   
                    <div id="language1">
                        <table class="form">
                            <tr>
                                <td>Tiêu đề:</td>
                                <td><input name="title_vn" value="<?= $title_vn; ?>" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Hình đại diện: (900x600px)</td>
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
                                <td>Nội dung:</td>
                                <td>
									 <?php echo $this->function->display_CKEditor("detail_vn", stripslashes($detail_vn), 250); ?>                                    
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="tab_en">                   
                    <div id="language1">
                        <table class="form">
                            <tr>
                                <td>Tiêu đề:</td>
                                <td><input name="title_en" value="<?= $title_en; ?>" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Tóm tắt:</td>
                                <td><textarea name="sumary_en"><?=$sumary_en?></textarea></td>
                            </tr>
                            <tr>
                                <td>Nội dung:</td>
                                <td>                                    
                                    <?= $this->function->display_CKEditor("detail_en", stripslashes($detail_en), 250); ?>                                    
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
        admin.uploadAvatarNews();
    </script>
</div>
<script type="text/javascript" src="access/js/form.js"></script>
