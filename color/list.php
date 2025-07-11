<style>
    .exp td{text-decoration:line-through;}
    .active{color: orangered;}
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
                            <td class="center" width="100">Vị trí</td>
                            <td class="left" width="">Màu sắc</td>
                            <td class="center" width="100">Tình trạng</td>
                            <td class="center"  width="150">Thao tác</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list as $row) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $status = $row['status'];
                            $img_status = $status == 1 ? STATUS_1 : STATUS_0;
                            $ordering = $row['ordering'];
                            ?>
                            <tr>
                                <td style="text-align: center;"><input  type="checkbox" name="del[]" value="<?= $id; ?>"> </td>
                                <td class="center">
                                    <input type="text" name="ordering[<?= $id; ?>]" value="<?= $ordering; ?>"/>
                                </td>
                                <td class="left"><?= $name; ?></td>
                                <td class="center"><img height="16" id="status" status="<?= $status; ?>" onclick="changeStatus(this, '<?= $id; ?>', 'status');" src="<?= $img_status; ?>"/></td>
                                <td class="center">[ <a href="<?= $task_edit; ?>/<?= $id; ?>">Chỉnh sửa</a> ] - [ <a onclick="Question_Delete('<?= $task_del; ?>/<?= $id; ?>');">Xóa</a> ]</td>
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
                                        beforeSend: function() {
                                            $(this_).attr("src", '<?= IMG_LOADING; ?>');
                                        },
                                        success: function(data) {
                                            $(this_).attr("status", data)
                                            if (data == 1)
                                                $(this_).attr("src", '<?= STATUS_0; ?>');
                                            else if (data == 0)
                                                $(this_).attr("src", '<?= STATUS_1; ?>');

                                        }
                                    });
                                }
</script>
