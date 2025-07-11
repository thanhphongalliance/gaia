<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url("access/js/datetimepicker_css.js"); ?>"></script>
<?php
$id = isset($detail['id']) ? $detail['id'] : 0;
$avatar = isset($detail['image']) && is_file(PATH_SLIDER_THUMB . "/" . $detail['image']) ? PATH_SLIDER_THUMB . "/" . $detail['image'] : ICON_UPLOAD_PHOTO;
$name = isset($detail['title']) ? stripslashes($detail['title']) : "";
$link = isset($detail['link']) ? stripslashes($detail['link']) : "";
$ordering = isset($detail['ordering']) ? $detail['ordering'] : $orderingMax;
$status = isset($detail['status']) ? $detail['status'] : 1;
$vitri = isset($detail['vitri']) ? $detail['vitri'] : 0;
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
                <h1 style="background-avatar: url('access/avatar/review.png');">
                    <?= $title_header; ?>
                </h1>
                <div class="buttons" style="float:right;">
                    <input type="submit" value="Save" class="button_v1">   
                    <input onclick="return Question_Cancel('<?= $task_list; ?>');" type="button" value="Cancel" class="button_v1">
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
                <!--####-->
                <div id="tab_general">                   
                    <div id="language1">
                        <table class="form">
                         
                            <tr>
                                <td>Tên<span class="required">*</span>                                    
                                </td>
                                <td><input type='text' name="title" value='<?= stripslashes($name); ?>' class="width_50"/></td>
                            </tr>
                           
                            <tr>
                                <td>Link<span class="required">*</span>                                    
                                </td>
                                <td><input type='text' name="link" value='<?=$link; ?>' class="width_50"/></td>
                            </tr>
              
                            <tr>
                                <td>Hình:</td>
                                <td>
                                    <input type="hidden" name="image" value="<?= $avatar; ?>" size="70" id="hiddenQuangcao">
                                    <div id="uploadQuangcao"><img src="<?= $avatar; ?>" id="img_logo" style="max-width: 100px;"/></div>
                                    <span id="loadAjax"></span>
                                    <br/><strong>Vị trí 1,2,3(Size: 230x160px)<br />Vị trí 4,5(Width:170px)</strong>
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
                <!--####-->
                <div id="tab_data">
                    <table class="form">                   
                        <tr>
                            <td>Vị trí:</td>
                            <td><input name="ordering" value="<?= $ordering; ?>" size="1" />
                            </td>
                        </tr>

                        <tr>
                            <td>Trạng thái:</td>
                            <td>
                                <label><input type="radio" value="1" name="status" <?= $status == 1 ? "checked='checked'" : "" ?> /> Hiện</label>
                                <label><input type="radio" value="0" name="status" <?= $status == 0 ? "checked='checked'" : "" ?>/> Ẩn</label>
                            </td>
                        </tr> 
                        <tr>
                        
                    </table>
                </div>
                <!--####-->
            </div>

            <div class="heading">
                <div class="buttons" style="float:right;">
                    <input type="submit" value="Save" class="button_v1">   
                    <input onclick="return Question_Cancel('<?= $task_list; ?>');" type="button" value="Cancel" class="button_v1">
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="access/js/form.js"></script>
<script type="text/javascript">
                        $(document).ready(function () {
                            admin.uploadQuangcao();
                        });
</script>
