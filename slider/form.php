<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url("access/js/datetimepicker_css.js"); ?>"></script>
<?php
$id = isset($detail['id']) ? $detail['id'] : $idMax;
$image = isset($detail['image']) && is_file(PATH_SLIDER_THUMB. "/" . $detail['image']) ? PATH_SLIDER_THUMB. "/" . $detail['image'] : ICON_UPLOAD_PHOTO;
$image_m = isset($detail['image_m']) && is_file(PATH_SLIDER_THUMB. "/" . $detail['image_m']) ? PATH_SLIDER_THUMB. "/" . $detail['image_m'] : ICON_UPLOAD_PHOTO;

$title_vn = isset($detail['title_vn']) ? stripslashes($detail['title_vn']) : "";
$title_en = isset($detail['title_en']) ? stripslashes($detail['title_en']) : "";
$link = isset($detail['link']) ? $detail['link'] : "";
$status = isset($detail['status']) ? $detail['status'] : 1;
$ordering= isset($detail['ordering']) ? $detail['ordering']:$orderingMax; 
$group = isset($detail['group']) ? $detail['group'] : '';
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
                                <td> Mã số:</td>
                                <td><input name="id" value="<?= $id; ?>" size="1" readonly="true"/>
                                </td>
                            </tr>
          <tr>
            <td>Tiêu đề tiếng việt: <span class="required">*</span></td>
            <td><input name="title_vn" value="<?=$title_vn; ?>" size="50"></td>
          </tr>
<tr>
            <td>Tiêu đề tiếng anh: <span class="required">*</span></td>
            <td><input name="title_en" value="<?=$title_en; ?>" size="50"></td>
          </tr>
           <tr>
            <td>Link: <span class="required">*</span></td>
            <td><input name="link" value="<?=$link; ?>" size="50"></td>
          </tr>
          <tr>
            <td>Hình ảnh:</td>
             <td>
             <input type="hidden" name="image" value="<?= $image; ?>" size="70" id="hiddenSlider">
            <div id="uploadSlider"><img src="<?= $image; ?>" id="img_logo" style="max-width: 100px;"/></div>
            <span id="loadAjax"></span>
            <br/><strong>(Size: 200x856px)</strong>
                                </td>
            </tr>
          
          <tr>
            <td>Nhóm banner:</td>
            <td>
            <?php
            $group_option = array(
                1 => 'Trang chủ',
                2 => 'Câu chuyện VP Milk',
                3 => 'Sản phẩm',
                4 => 'Hoạt động công ty',
                5 => 'Thông tin dinh dưỡng',
                6 => 'Góc chuyên gia'
            );
            echo form_dropdown('group', $group_option, $group);
            ?>
                
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
                            admin.uploadSlider(); 
                          
                        });
</script> 
</div>
<script type="text/javascript" src="access/js/form.js"></script> 
