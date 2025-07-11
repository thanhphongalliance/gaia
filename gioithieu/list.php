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
                <button onclick="return Question_Update();">Cập nhật vị trí</button>
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
                            <td class="center" width="50">Vị trí</td>                            
                                  
                            <td class="left">Tiêu đề</td>
                            <td class="center" width="70">Tình trạng</td>                            
                            <td class="right"  width="150">Thao tác</td>
                        </tr>                        
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list as $row) {
                            $title = $row['title_vn'];
                            $id = $row['id'];
                            $status = $row['status'];
                            $image = $row['image'];
                            $img_status = $status == 1 ? STATUS_1 : STATUS_0;
                            $ordering = $row['ordering'];
                            ?>
                            <!--###Lặp đoạn này###-->
                            <tr>
                                <td style="text-align: center;"><input  type="checkbox" name="del[]" value="<?= $id; ?>"> </td>
                                <td class="center"><input type="text" name="ordering[<?= $id; ?>]" value="<?= $ordering; ?>" size="3"/></td>			            
                                
                                <td class="left"><a href="<?= $task_edit; ?>/<?= $id; ?>"><?= $title; ?></a></td>
                                <td class="center"><img id="status" status="<?= $status; ?>" onclick="changeStatus(this, '<?= $id; ?>', 'status');" src="<?= $img_status; ?>" /></td>
                                <td class="right">[ <a href="<?= $task_edit; ?>/<?= $id; ?>">Chỉnh sửa</a> ] - [ <a onclick="Question_Delete('<?= $task_del; ?>/<?= $id; ?>');">Xóa</a> ]</td>
                            </tr> 
                            <!--###Lặp đoạn này###-->
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

                                // id: là id của rows
                                // field : là tên của trường ví dụ: status,is_hot
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