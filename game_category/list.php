<style>
    .item-parent {float: left;width: 20%;}
    .item-parent > li{border-left: 1px dotted #ccc;}
    .item-parent li ul{padding: 0px;}
    .item-parent li ul li{padding: 3px 0px;}
    .item-parent li input[type="text"]{height: 10px;width: 20px;border-radius: 3px;}
</style>

<div id="content">
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
                    <table class="list">
                        <tbody>
                        <ul>
                            <?php
                            $parent = $this->tintuc_category->display(0);
                            foreach ($parent as $row) {
                                $id = $row['id'];
                                $title = $row['title_vn'];
                                $ordering = $row['ordering'];
                                $childs = $this->tintuc_category->display($id);
                                ?>
                                <div class="item-parent">
                                    <li>
                                        <input type="checkbox" name="del[]" value="<?= $id; ?>"/>
                                        <input type="text" name="ordering[<?= $id; ?>]" value="<?= $ordering; ?>" size="50"/>
                                        <a href="<?= $task_edit; ?>/<?= $id; ?>">
                                            <strong><?= $title; ?></strong>
                                        </a>
                                        <ul>
                                            <?php
                                            foreach ($childs as $chil) {
                                                $image = is_file($chil['avatar']) ? $chil['avatar'] : "access/image/no_pic.jpg";
                                                $grandchild = $this->tintuc_category->display($chil['id']);
                                                ?>
                                                <li>
                                                    -----<input type="checkbox" name="del[]" value="<?= $chil['id']; ?>"/>
                                                    <input type="text" name="ordering[<?= $chil['id']; ?>]" value="<?= $chil['ordering']; ?>" size="50"/>
                                                    <a class="clearfix" href="<?= $task_edit; ?>/<?= $chil['id']; ?>"><img height="20" src="<?= $image; ?>"/><?= $chil['title_vn']; ?>
                                                        <ul>
                                                            <?php foreach ($grandchild as $grand) { ?>
                                                                <li>
                                                                    -----------<input type="checkbox" name="del[]" value="<?= $grand['id']; ?>"/>
                                                                    <input type="text" name="ordering[<?= $chil['id']; ?>]" value="<?= $grand['ordering']; ?>" size="50"/>
                                                                    <a href="<?= $task_edit; ?>/<?= $grand['id']; ?>"><?= $grand['title_vn']; ?></a>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </a>                                                   
                                                </li> 
                                            <?php } ?>
                                        </ul>
                                    </li>
                                </div>
                            <?php } ?>
                        </ul>
                        </tbody>
                    </table>
                </table>
            </form>
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
                                    $(this_).attr("src", '<?= STATUS_1; ?>');
                                else if (data == 0)
                                    $(this_).attr("src", '<?= STATUS_0; ?>');

                            }
                        });
                    }
</script>
