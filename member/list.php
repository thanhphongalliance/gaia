<script type="text/javascript" src="<?= base_url("access/js/datetimepicker_css.js"); ?>"></script>
<script>
    $(document).ready(function () {
        $('#date1').datepicker({dateFormat: "dd-mm-yy"});
        $('#date2').datepicker({dateFormat: "dd-mm-yy"});
    });
</script>
<style>
    .exp td{text-decoration:line-through;}
    .active{color: orangered;}
    #filter label{width: 150px;float: left;}
</style>
<div id="content">
    <div class="breadcrumb">
        <br />
    </div>
    <div class="box">
        <div class="left"></div>
        <div class="right"></div>
        <div class="heading">
            <h1 style="background-image: url('access/image/review.png');">
                <a href="<?= $task_list; ?>"><?= $title_header; ?> (Tổng số: <?= $total_rows; ?>)</a></h1>
            <div class="buttons" style="float:right;">
                <!--<button onclick="return Question_Update();">Cập nhật vị trí</button>-->
                <a href="<?= $task_list; ?>"><button>Tất cả</button></a>
          
                <button onclick="return Question_Delete_All();">Xóa chọn</button>           
                <a href="<?= $task_add; ?>"><button>Thêm</button></a>
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

            
            <form name="LISTFORM" id="LISTFORM" method="post" action="<?= $action_form; ?>" enctype="multipart/form-data">
                <table class="list">
                    <thead>
                        <tr>
                            <td width="1" style="text-align: center;">
                                <input onclick="javascript: selectAll(this.checked);" type="checkbox" name="checkall"/>
                            </td>
                            <td class="left" width="60">
                                Mã số<br/>
                               
                            </td>
                            <td class="left">Họ tên</td>
                            <td class="left" width="60">Giới tính</td>
                            <td class="left" width="150">Email</td>
                            <td class="left" width="90">Điện thoại</td>
                            <td class="left" width="140">Ngày đăng ký</td>
                
                            <td class="center" width="60">Kích hoạt</td>
                            <td class="right"  width="100">Thao tác</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list as $row) {
                            $id = $row['id'];
                            $status = $row['status'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $phone = $row['phone'];
                          
                            $create_date = date("d-m-Y H:i A", strtotime($row['add_date']));
                            $gender = $row['sex'] == 0 ? "Nam" : "Nữ";
                            $img_status = $status == 1 ? STATUS_1 : STATUS_0;
                        
                            ?>
                            <tr>
                                <td style="text-align: center;"><input  type="checkbox" name="del[]" value="<?= $id; ?>"> </td>
                                <td class="left"><a href="<?= $task_edit; ?>/<?= $id; ?>"><?php echo $id; ?></a></td>
                                <td class="left"><a href="<?= $task_edit; ?>/<?= $id; ?>"><?= $name; ?></a></td>                                    
                                <td class="left"><?php echo $gender; ?></td> 
                                <td class="left"><?php echo $email; ?></td> 
                                <td class="left"><?php echo $phone; ?></td> 
                                <td class="left"><?php echo $create_date; ?></td> 
                          
                                <td class="center"><img height="16" id="status" status="<?= $status; ?>" onclick="changeStatus(this, '<?= $id; ?>', 'status');" src="<?= $img_status; ?>"/></td>
                                <td class="right">[ <a href="<?= $task_edit; ?>/<?= $id; ?>">Sửa</a> ] - [ <a onclick="Question_Delete('<?= $task_del; ?>/<?= $id; ?>');">Xóa</a> ]</td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </form>
            <div class="pagination">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="access/js/form.js"></script>
<script type="text/javascript">
                                function changeStatus(this_, id, field) {
                                    var status = $(this_).attr("status");
                                    $.ajax({
                                        url: '<?= $task_status; ?>/' + id + '/' + status + '/' + field,
                                        type: "get",
                                        beforeSend: function () {
                                            $(this_).attr("src", '<?= IMG_LOADING; ?>');
                                        },
                                        success: function (data) {
                                            $(this_).attr("status", data)
                                            if (data == 1)
                                                $(this_).attr("src", '<?= STATUS_1; ?>');
                                            else if (data == 0)
                                                $(this_).attr("src", '<?= STATUS_0; ?>');

                                        }
                                    });
                                }

                                $(document).ready(function () {
                                    $('#maso').keypress(function (e) {
                                        if (e.which == 13) {
                                            var value = $("#maso").val();
                                            window.location = '<?= $task_list; ?>?maso=' + value;
                                            return false;
                                        }
                                    });
                                });
</script>
