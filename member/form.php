<script type="text/javascript" src="<?= base_url('access/js/ajaxupload.3.5.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url("access/js/datetimepicker_css.js"); ?>"></script>
<script>
    $(document).ready(function () {
        $('#birthday,#birthday_bady,#ngay_dusinh').datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: '-100:+0'

        });

    });
</script>
<?php
$name = isset($detail['name']) ? stripslashes($detail['name']) : "";
$gender = isset($detail['sex']) ? $detail['sex'] : 0;
$email = isset($detail['email']) ? stripslashes($detail['email']) : "";
$phone = isset($detail['phone']) ? $detail['phone'] : "";
$address = isset($detail['address']) ? $detail['address'] : "";
$birthday = isset($detail['birthday']) && $detail['birthday'] != "0000-00-00" ? date("d-m-Y", strtotime($detail['birthday'])) : "";
$status = isset($detail['status']) ? $detail['status'] : 1;
$ordering = isset($detail['ordering']) ? $detail['ordering'] : $orderingMax;
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
                            <tr>
                                <td colspan="2"><h3>Thông tin đăng ký</h3></td>                               
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>
                                    <input type="text" value="<?= $email; ?>" name="email" class="width_30"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Mật khẩu:</td>
                                <td>
                                    <input type="password" value="" name="password" class="width_30"/>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2"><h3>Thông tin khách hàng</h3></td>                               
                            </tr>
                            <tr>
                                <td>Họ tên:</td>
                                <td>
                                    <input type="text" value="<?= $name; ?>" name="name" class="width_30"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Giới tính:</td>
                                <td>
                                    <label><input type="radio" value="1" name="sex" <?= $gender == 1 ? "checked='checked'" : "" ?> />Nữ</label>
                                    <label><input type="radio" value="0" name="sex" <?= $gender == 0 ? "checked='checked'" : "" ?>/>Nam</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Ngày sinh:</td>
                                <td>
                                    <input id="birthday" type="text" value="<?= $birthday; ?>" name="birthday" class="width_30"/>
                                </td>
                            </tr>
                           
                            <tr>
                                <td colspan="2"><h3>Thông tin liên hệ</h3></td>      
                            </tr>
                            <tr>
                                <td>Số điện thoại:</td>
                                <td>
                                    <input type="text" value="<?= $phone; ?>" name="phone" class="width_30"/>
                                </td>
                            </tr>
                          
                            <tr>
                                <td>Địa chỉ:</td>
                                <td>
                                    <input type="text" value="<?= $address; ?>" name="address" class="width_30"/>
                                </td>
                            </tr>
                           
                            <!--<tr>
                                <td> Thứ tự:</td>
                                <td><input name="ordering" value="<?= $ordering; ?>" size="1" />
                                </td>
                            </tr>-->
                            <tr>
                                <td> Trạng thái:</td>
                                <td>
                                    <label><input type="radio" value="1" name="status" <?= $status == 1 ? "checked='checked'" : "" ?> />Bật</label>
                                    <label><input type="radio" value="0" name="status" <?= $status == 0 ? "checked='checked'" : "" ?>/>Tắt</label>
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
    </script>
</div>
<script type="text/javascript" src="access/js/form.js"></script>
