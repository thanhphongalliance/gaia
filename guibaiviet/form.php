<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<?php
$image = isset($detail['image']) ? $detail['image'] : "";
$name = isset($detail['name']) ? stripslashes($detail['name']) : "";
$email = isset($detail['email']) ? stripslashes($detail['email']) : "";
$detail_vn = isset($detail['detail_vn']) ? stripslashes($detail['detail_vn']) : "";
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
                                <td>Họ tên:
                                    <span class="required">*</span>     
                                </td>
                                <td><input type="text" name="name" value="<?= $name; ?>" size="50" />
                                </td>
                            </tr>
                           <tr>
                                <td>Email:
                                    <span class="required">*</span>     
                                </td>
                                <td><input type="text" name="email" value="<?= $email; ?>" size="50" />
                                </td>
                            </tr>
                            <tr>
                                <td>Nội dung: </td>
                                <td><?= $this->function->display_CKEditor("detail_vn", $detail_vn, 250);?></td>
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
                       
                    </div>
                </div>

            </div>
        </div>
            
    </form>
    <script type="text/javascript">
        //$.tabs('#tabs a');
    </script>
</div>
<script type="text/javascript" src="access/js/form.js"></script>

