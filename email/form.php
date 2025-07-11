<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url("access/js/datetimepicker_css.js"); ?>"></script>
<?php
$avatar = isset($detail['avatar']) && is_file(PATH_DOITAC. "/" . $detail['avatar']) ? PATH_DOITAC. "/" . $detail['avatar'] : ICON_UPLOAD_PHOTO;
$title = isset($detail['title']) ? stripslashes($detail['title']) : "";
$sumary = isset($detail['sumary']) ? $detail['sumary'] : "";
$info = isset($detail['info']) ? $detail['info'] : "";
$status = isset($detail['status']) ? $detail['status'] : 1;
$ordering= isset($detail['ordering']) ? $detail['ordering']:$orderingMax; 

?>

<div id="content">
  <div class="breadcrumb"> <br />
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
        <table class="form">
          <tr>
            <td>Tiêu đề: <span class="required">*</span></td>
            <td><input name="title" value="<?=$title; ?>" size="50"></td>
          </tr>
          <tr>
            <td>Link: <span class="required">*</span></td>
            <td><input name="info" value="<?=$info; ?>" size="50"></td>
          </tr>
          <tr>
            <td>Hình ảnh:</td>
             <td>
             <input type="hidden" name="avatar" value="<?= $avatar; ?>" size="70" id="hiddenDoitac">
            <div id="uploadDoitac"><img src="<?= $avatar; ?>" id="img_logo" style="max-width: 100px;"/></div>
            <span id="loadAjax"></span>
            <br/><strong>(Size: 205x125px)</strong>
                                </td>
                            </tr>
          
          <tr>
            <td>Order:</td>
            <td><input name="ordering" value="<?= $ordering; ?>" size="1" /></td>
          </tr>
          <tr>
            <td>Status:</td>
            <td><label>
                <input type="radio" value="1" name="status" <?= $status == 1 ? "checked='checked'" : "" ?> />
                Hiện</label>
              <label>
                <input type="radio" value="0" name="status" <?= $status == 0 ? "checked='checked'" : "" ?>/>
                Ẩn</label></td>
          </tr>
        </table>
        
        <!--####--> 
      </div>
    </div>
  </form>
  <script type="text/javascript">
        $.tabs('#tabs a');
    </script> 
  <script type="text/javascript">
                        $(document).ready(function () {
                            admin.uploadDoitac();  
                        });
</script> 
</div>
<script type="text/javascript" src="access/js/form.js"></script> 
