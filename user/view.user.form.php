<?php
$email           = "";
$name            = "";
$status          = "";
if (!empty($detail)) {
    $email    = $detail['email'];
    $name     = $detail['name'];     
    $status   = $detail['status'];    
}
?>
<form action="" method="post" enctype="multipart/form-data" class="forms" name="form" id="frm">
    <div class="page-title ui-widget-content ui-corner-all">
        <div class="float-left">
            <h1><b><?php echo $title_header; ?></b></h1> 
        </div>

        <div class="button float-right">        
            <a href="javascript:submit();" class="btn ui-state-default"><span class="ui-icon ui-icon-circle-plus"></span>Lưu lại</a>
            <a onclick="questionCancel('<?php echo base_url().PATH_FOLDER_ADMIN; ?>/user/');" class="btn ui-state-default"><span class="ui-icon ui-icon-circle-plus"></span>Hủy bỏ</a>
        </div>
        <div class="clearfix"></div>
        <div class="other">         
            <div class="hastable">                 
                <div style="float: left; width:99%; padding-left:1%; border-top: 1px solid #ccc;">    
                    <div id="thongtin" class="show1">
                        <ul>                                                      
                            <li>
                                <label class="desc">Họ tên</label>
                                <div>
                                    <input type="text" tabindex="1" maxlength="255" value="<?php echo $name; ?>" class="field text small" name="name" />
                                </div>
                            </li>  
                            <li>
                                <label class="desc">Email</label>
                                <div>
                                    <input type="text" tabindex="1" maxlength="255" value="<?php echo $email; ?>" class="field text small" name="email" />
                                </div>
                            </li> 
                            <li>
                                <label class="desc">Mật khẩu</label>
                                <div>
                                    <input type="password" tabindex="1" maxlength="255" value="" class="field text small" name="password" />
                                </div>    
                            </li>                            
                            <li>
                                <label  class="desc">Tình trạng</label>
                                <div>
                                    <?php
                                    $options = array('1' => 'Bật', '0' => 'Tắt');
                                    echo form_dropdown('status', $options, $status, 'class="select"');
                                    ?>     
                                </div>
                            </li>  
                        </ul>
                    </div>
                    

                    
                </div>  
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</form>