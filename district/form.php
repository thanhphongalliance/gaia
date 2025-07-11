<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url("access/js/datetimepicker_css.js"); ?>"></script>
<?php
$title_vn = isset($detail['title_vn']) ? stripslashes($detail['title_vn']) : "";
$title_en = isset($detail['title_en']) ? stripslashes($detail['title_en']) : "";
$status = isset($detail['status']) ? $detail['status'] : 1;
$ordering= isset($detail['ordering']) ? $detail['ordering']:$orderingMax; 
$city = isset($detail['city']) ? $detail['city'] : 0;
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
        <div id="tabs" class="htabs">
                <a tab="#tab_vn"><?= IMG_VN ?></a>
                <a tab="#tab_en"><?= IMG_EN ?></a>
            </div>
            <div id="tab_vn">
        <table class="form">
          <tr>
            <td>Tiêu đề: <span class="required">*</span></td>
            <td><input name="title_vn" value="<?=$title_vn; ?>" size="50"></td>
          </tr>
          <tr>
            <td>Tỉnh thành:</td>
            <td>
                <select name="city">
                    <option>Chọn tỉnh thành</option>
                    <?php
                    foreach($cities as $val):
                    ?>
                    <option value="<?=$val['id']?>" <?=$val['id']==$city?'selected':''?>><?=$val['title_vn']?></option>
                    <?php
                    endforeach; 
                    ?>
                </select>
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
            </div>
            <div id="tab_en">
            <table class="form">
          <tr>
            <td>Tiêu đề: <span class="required">*</span></td>
            <td><input name="title_en" value="<?=$title_en; ?>" size="50"></td>
          </tr>
          
        </table>
            </div>
        <!--####--> 
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
