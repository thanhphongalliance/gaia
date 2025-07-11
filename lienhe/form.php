<?php

$title = isset($detail['title']) ? stripslashes($detail['title']) : "";
$detail=isset($detail['detail']) ? stripslashes($detail['detail']) : "";

$status = isset($detail['status']) ? $detail['status'] : 1;
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
                                <td>Title:
                                    <span class="required">*</span>     
                                </td>
                                <td>
                                    <input name="title" value="<?= $title; ?>" size="50">
                                </td>
                            </tr>
                            
                              
                              
                              <tr>
                                <td>Chi tiết nội dung: </td>
                                <td><?= $this->function->display_CKEditor("detail", $detail, 300); ?></td>
                            </tr>
                                                     
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</div>
<script type="text/javascript" src="access/js/form.js"></script>

