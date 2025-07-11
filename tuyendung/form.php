<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<?php

$title_vn = isset($detail['title_vn']) ? stripslashes($detail['title_vn']) : "";
$title_en = isset($detail['title_en']) ? stripslashes($detail['title_en']) : "";

$detail_vn = isset($detail['detail_vn']) ? stripslashes($detail['detail_vn']) : "";
$detail_en = isset($detail['detail_en']) ? stripslashes($detail['detail_en']) : "";

$diadiem_vn = isset($detail['diadiem_vn']) ? stripslashes($detail['diadiem_vn']) : "";
$diadiem_en = isset($detail['diadiem_en']) ? stripslashes($detail['diadiem_en']) : "";
$thoigian = isset($detail['thoigian']) ? stripslashes($detail['thoigian']) : "";
$soluong = isset($detail['soluong']) ? $detail['soluong'] : "01";
$ordering = isset($detail['ordering']) ? $detail['ordering'] : $orderingMax;
$status = isset($detail['status']) ? $detail['status'] : 1;
$for_student = isset($detail['for_student']) ? $detail['for_student'] : 0;
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
                                <td> Địa điểm:</td>
                                <td><input type="text" name="diadiem_vn" value="<?= $diadiem_vn; ?>" />
                                </td>
                            </tr> 
                            <tr>
                                <td> Số lượng:</td>
                                <td><input type="text" name="soluong" value="<?= $soluong; ?>" />
                                </td>
                            </tr> 
                            <tr>
                                <td> Hết hạn:</td>
                                <td><input type="text" name="thoigian" value="<?= $thoigian; ?>" />
                                </td>
                            </tr> 
                            <tr>
                                <td>Chi tiết công việc: </td>
                                <td><?= $this->function->display_CKEditor("detail_vn", stripslashes($detail_vn), 250); ?></td>
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
                                <td> Dành cho sinh viên:</td>
                                <td>
                                    <label><input type="radio" value="1" name="for_student" <?= $for_student == 1 ? "checked='checked'" : "" ?> /> Hiển thị </label>
                                    <label><input type="radio" value="0" name="for_student" <?= $for_student == 0 ? "checked='checked'" : "" ?>/> Ẩn</label>
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
                                <td> Địa điểm:</td>
                                <td><input type="text" name="diadiem_en" value="<?= $diadiem_en; ?>" />
                                </td>
                            </tr> 
                            <tr>
                                <td>Chi tiết công việc: </td>
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
        admin.uploadGioithieu();
    </script>
</div>
<script type="text/javascript" src="access/js/form.js"></script>

