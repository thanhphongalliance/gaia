<div id="content">
  <div class="breadcrumb"> <br />
  </div>
  <form id="form" action="" onsubmit="return check_input();" method="post" enctype="multipart/form-data" name="LISTFORM">
    <div class="box">
      <div class="left"></div>
      <div class="right"></div>
      <div class="heading">
        <div class="buttons" style="float:right;">
          <input onclick="return Question_Cancel('<?= $task_list; ?>');" type="button" value="Đóng" class="button_v1">
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
        <table class="form">
          <tr>
            <td>Họ Tên: <span class="required">*</span></td>
            <td><p><?=$detail['name']?></p></td>
          </tr>
          <tr>
            <td>Địa chỉ: <span class="required">*</span></td>
            <td><p><?=$detail['address']?></p></td>
          </tr>
          <tr>
            <td>Số điện thoại:</td>
             <td>
             	<p><?=$detail['phone']?></p>
             </td>
          </tr>
          <tr>
            <td>Email:</td>
             <td>
             	<p><?=$detail['email']?></p>
             </td>
          </tr>
          <tr>
            <td>Tin nhắn:</td>
             <td>
             	<p><?=$detail['message']?></p>
             </td>
          </tr>
        </table>
        
        <!--####--> 
      </div>
    </div>
  </form>
</div>
<script type="text/javascript" src="access/js/form.js"></script> 
