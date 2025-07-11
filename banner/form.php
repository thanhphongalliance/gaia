<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url("access/js/datetimepicker_css.js"); ?>"></script>
<?php
$image = isset($detail['image']) && is_file(PATH_SLIDER_THUMB. "/" . $detail['image']) ? PATH_SLIDER_THUMB. "/" . $detail['image'] : ICON_UPLOAD_PHOTO;
$title = isset($detail['title']) ? stripslashes($detail['title']) : "";
$link = isset($detail['link']) ? $detail['link'] : "";
$status = isset($detail['status']) ? $detail['status'] : 1;
$id_page=isset($detail['id_page']) ? $detail['id_page'] : 0;
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
            <td>Chọn vị trí: <span class="required">*</span></td>
            <td>
            <select name="id_page">
            <option value="0">Chọn vị trí</option>
            <option value="1">Thông điệp tổng giám đốc</option>
            <option value="2">Hệ thống tôn chỉ</option>
            <option value="3">Cơ cấu tổ chức</option>
            <option value="21">Ban lãnh đạo</option>
            <option value="4">Đối tác</option>
            <option value="5">Đội ngũ dkra</option>
            <option value="6">Tin tức dkra</option>
            <option value="7">Tin tức thị trường</option>
            <option value="8">Tin dự án</option>
            <option value="9">Báo cáo nghiên cứu thị trường</option>
            <option value="10">Đầu tư bds</option>
            <option value="11">Tiếp thị và phân phối bds</option>
            <option value="12">Nghiên cứu thị trường</option>
            <option value="13">Xúc tiến thương mại</option>
            <option value="14">Dự án đang triển khai</option>
            <option value="15">Dự án đã triển khai</option>
            <option value="16">Dự án đầu tư</option>
            <option value="17">Tại sao chọn chúng tôi</option>
            <option value="18">Cơ hội nghề nghiệp</option>
            <option value="19">Chính sách nhân sự</option>
            <option value="20">Tin hoạt động</option>
            <option value="22">Liên hệ</option>                                                            
            </select>
            </td>
          </tr>
          <tr>
            <td>Tiêu đề: <span class="required">*</span></td>
            <td><input name="title" value="<?=$title; ?>" size="50"></td>
          </tr>
          <tr>
            <td>Hình ảnh:</td>
             <td>
             <input type="hidden" name="image" value="<?= $image; ?>" size="70" id="hiddenSlider">
            <div id="uploadSlider"><img src="<?= $image; ?>" id="img_logo" style="max-width: 100px;"/></div>
            <span id="loadAjax"></span>
            <br/><strong>(Size: 980x260px)</strong>
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
