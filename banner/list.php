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
                            <td class="left">Tên</td>
                            <td class="left">Hình</td>
                            <td class="left">Vị trí</td>
                            <td class="center" width="80">Trạng thái</td>
                            <td class="center" width="100">Action</td>
                        </tr>                        
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list as $row):
                            $id = $row['id'];
                            $title = $row['title'];
							$avatar = $row['image'];
                            $status = $row['status'];
                     		 $vitri =$row['id_page'];
                            $img_status = $status == 1 ? STATUS_1 : STATUS_0;
                            $ordering = $row['ordering'];
                            ?>
                            <!--###Lặp đoạn này###-->
                            <tr>
                                <td style="text-align: center;"><input  type="checkbox" name="del[]" value="<?= $id; ?>"> </td>
                                <td class="left">
                                   <a href="<?= $task_edit; ?>/<?= $id; ?>"><strong><?= $title; ?></strong></a>
                                </td>			                             
                                   <td class="left">
                                   <a href="<?= $task_edit; ?>/<?= $id; ?>">
                                   <img src="<?=PATH_SLIDER_THUMB.'/'.$avatar?>" width="300">
                                   </a>
                                </td>
                              	 <td class="left">
                                   <a href="<?= $task_edit; ?>/<?= $id; ?>">
                                   <strong><?php
								   		switch($vitri){
											case 1: echo'Thông điệp tổng giám đốc';break;
											case 2: echo'Hệ thống tôn chỉ';break;
											case 3: echo'Cơ cấu tổ chức';break;
											case 4: echo'Đối tác';break;
											case 5: echo'Đội ngũ dkra';break;
											case 6: echo'Tin tức dkra';break;
											case 7: echo'Tin tức thị trường';break;
											case 8: echo'Tin dự án';break;
											case 9: echo'Báo cáo nghiên cứu thị trường';break;
											case 10: echo'Đầu tư bds';break;
											case 11: echo'Tiếp thị và phân phối bds';break;
											case 12: echo'Nghiên cứu thị trường';break;
											case 13: echo'Xúc tiến thương mại';break;
											case 14: echo'Dự án đang triển khai';break;
											case 15: echo'Dự án đã triển khai';break;
											case 16: echo'Dự án đầu tư';break;
											case 17: echo'Tại sao chọn chúng tôi';break;
											case 18: echo'Cơ hội nghề nghiệp';break;
											case 19: echo'Chính sách nhân sự';break;
											case 20: echo'Tin hoạt động';break;
											case 21: echo'Ban lãnh đạo';break;
											case 22: echo'Liên hệ';break;
											}
								   
								     ?></strong></a>
                                </td>                                									               					                 
                                <td class="center"><img id="status" status="<?= $status; ?>" onclick="changeStatus(this, '<?= $id; ?>', 'status');" src="<?= $img_status; ?>" /></td>
                              <td class="right">[ <a href="<?= $task_edit; ?>/<?= $id; ?>">Edit</a> ] - [ <a onclick="Question_Delete('<?= $task_del; ?>/<?= $id; ?>');">Del</a> ]</td>
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