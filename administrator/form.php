<?php 
$name     = isset($detail['name'])?$detail['name']:"";
$username = isset($detail['username'])?$detail['username']:"";
$password = isset($detail['password'])?$detail['password']:"";
$status   = isset($detail['status'])?$detail['status']:"1";
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
                    <input onclick="return Question_Cancel('<?= $task_list; ?>');" type="button" value="Hủy bỏ" class="button_v1">
                </div>
            </div>
            <div class="content">                
                <div id="tab_general">                   
                    <div id="language1">
                        <table class="form">
                            <input name="add_date" value="<?= date("Y-m-d H:i:s"); ?>" type="hidden"/>
                            <tr>
                                <td><span class="required">*</span> Họ tên:</td>
                                <td><input name="name" value="<?=$name;?>" size="50" />
                                </td>
                            </tr>

                            <tr>
                                <td><span class="required">*</span> Tên đăng nhập:</td>
                                <td><input name="username" value="<?=$username;?>" size="50" />
                                </td>
                            </tr>
                            <tr>
                                <td><span class="required">*</span> Mật khẩu:</td>
                                <td><input name="password" value="" size="50" />
                                </td>
                            </tr>                          
                            <tr>
                                <td> Trạng thái:</td>
                                <td>
                                    <label><input type="radio" value="1" name="status" 
									<?=$status==1?"checked='checked'":""?> /> Hiển thị </label>
                                    <label><input type="radio" value="0" name="status" <?=$status==0?"checked='checked'":""?>/> Ẩn</label>
                                </td>
                            </tr>                          
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
  
</div>
<script type="text/javascript" src="access/js/form.js"></script>
