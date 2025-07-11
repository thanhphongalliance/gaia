<div id="content">
    <div class="breadcrumb">
        <br />
    </div>
    <div class="box">
        <div class="left"></div>
        <div class="right"></div>
        <div class="heading">
            <h1 style="background-image: url('access/image/review.png');">
                <a href="<?= $task_list; ?>"><?= $title_header; ?> (Total: <?= $total_rows; ?>)</a></h1>
            <div class="buttons" style="float:right;">
              <!-- <button onclick="return Question_Update();">Cập nhật vị trí</button>-->
                <button onclick="return Question_Delete_All();">Xóa</button>           
               <a href="<?= $task_add; ?>"><button>Thêm mới</button></a>
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
                            <td class="left">STT</td>
                            <td class="left">Họ tên</td>
                            <td class="left">Số điện thoại</td>
                            <td class="left">Email</td>
                            <td class="left">Ngày</td>
                            <td class="center" width="100">Action</td>
                        </tr>                        
                    </thead>
                    <tbody>
                        <?php
						$stt=0;
                        foreach ($list as $row):
                            $id = $row['id'];
                            $email = $row['email'];
							$name = $row['name'];
							$phone = $row['phone'];
							$date = date('d-m-Y',strtotime($row['add_date']));
							$stt++;
                            ?>
                            <!--###Lặp đoạn này###-->
                            <tr>
                                <td style="text-align: center;"><input  type="checkbox" name="del[]" value="<?= $id; ?>"> </td>
                                <td class="left">
                                   <?= $stt; ?>
                                </td>
                                <td class="left">
                                   <?= $name; ?>
                                </td>
                                <td class="left">
                                   <?= $phone; ?>
                                </td>
                                <td class="left">
                                   <?= $email; ?>
                                </td>
                                <td class="left">
                                   <?= $date; ?>
                                </td>
                              <td class="right">[ <a onclick="Question_Delete('<?= $task_del; ?>/<?= $id; ?>');">Del</a> ]</td>
                            </tr> 
                           
                            <!--###Lặp đoạn này###-->
                        <?php endforeach; ?>
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

                                // id: là id của rows
                                // field : là tên của trường ví dụ: status,is_hot
                                function changeStatus(this_, id, field) {
                                    var status = $(this_).attr("status");
                                    $.ajax({
                                        url: '<?= $task_status; ?>/' + id + '/' + status + '/' + field,
                                        type: "get",
                                        beforeSend: function() {
                                            $(this_).attr("src", '<?= IMG_LOADING; ?>');
                                        },
                                        success: function(data) {
                                            $(this_).attr("status", data)
                                            if (data == 1)
                                                $(this_).attr("src", '<?= STATUS_1; ?>');
                                            else if (data == 0)
                                                $(this_).attr("src", '<?= STATUS_0; ?>');

                                        }
                                    });
                                }
</script>
<script type="text/javascript">
    function filter() {
        var url = '<?= $task_serach; ?>';
        var filter_name = $('input[name=\'filter_name\']').attr('value');
        if (filter_name) {
            url += '?filter_name=' + encodeURIComponent(filter_name);
            location = url;
        }
    }
    function callback() {
        location = '<?= $task_list; ?>';
    }
</script>